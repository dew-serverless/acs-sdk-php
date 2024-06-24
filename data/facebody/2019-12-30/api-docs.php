<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'facebody',
    'version' => '2019-12-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 183667,
      'title' => '人脸搜索',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddFaceEntity',
        1 => 'AddFace',
        2 => 'CreateFaceDb',
        3 => 'DeleteFace',
        4 => 'DeleteFaceDb',
        5 => 'DeleteFaceEntity',
        6 => 'UpdateFaceEntity',
        7 => 'SearchFace',
        8 => 'GetFaceEntity',
        9 => 'ListFaceEntities',
        10 => 'ListFaceDbs',
      ),
    ),
    1 => 
    array (
      'id' => 130136,
      'title' => '人脸',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AddFaceImageTemplate',
        1 => 'DeleteFaceImageTemplate',
        2 => 'QueryFaceImageTemplate',
        3 => 'BlurFace',
        4 => 'CompareFace',
        5 => 'DetectFace',
        6 => 'DetectLivingFace',
        7 => 'FaceBeauty',
        8 => 'FaceFilter',
        9 => 'FaceMakeup',
        10 => 'FaceTidyup',
        11 => 'EnhanceFace',
        12 => 'VerifyFaceMask',
        13 => 'RecognizeFace',
        14 => 'RecognizePublicFace',
        15 => 'MergeImageFace',
      ),
    ),
    2 => 
    array (
      'id' => 130164,
      'title' => '人体',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BodyPosture',
        1 => 'DetectBodyCount',
        2 => 'DetectPedestrian',
        3 => 'DetectPedestrianIntrusion',
        4 => 'ExtractPedestrianFeatureAttr',
        5 => 'PedestrianDetectAttribute',
        6 => 'RecognizeHandGesture',
      ),
    ),
    3 => 
    array (
      'id' => 130185,
      'title' => '实人认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetRealPersonVerificationResult',
        1 => 'GenRealPersonVerificationToken',
      ),
    ),
    4 => 
    array (
      'id' => 130188,
      'title' => '其他识别',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DetectCelebrity',
        1 => 'DetectChefCap',
        2 => 'DetectVideoLivingFace',
        3 => 'GenerateHumanAnimeStyle',
        4 => 'GenerateHumanSketchStyle',
        5 => 'RecognizeAction',
        6 => 'HandPosture',
        7 => 'RecognizeExpression',
      ),
    ),
    5 => 
    array (
      'id' => 130198,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BatchAddFaces',
        1 => 'ExtractFingerPrint',
        2 => 'LiquifyFace',
        3 => 'MonitorExamination',
        4 => 'RetouchBody',
        5 => 'RetouchSkin',
      ),
    ),
    6 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CompareFaceWithMask',
        1 => 'DetectInfraredLivingFace',
        2 => 'DeepfakeFace',
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
    'AddFaceEntity' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID，可以包含数字、字母和下划线。',
            'type' => 'string',
            'required' => true,
            'example' => 'mm2',
          ),
        ),
        2 => 
        array (
          'name' => 'Labels',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入标签，最多可以添加10个标签，具体格式要求如下：
- 标签中仅支持下划线（_）和连字符（-），不支持其他特殊字符。
- 标签之间使用英文逗号（,）分隔。',
            'type' => 'string',
            'required' => false,
            'example' => '鹿班',
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
                'example' => 'DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2</RequestId>","errorExample":""}]',
      'title' => '添加人脸样本',
      'summary' => '本文介绍添加人脸样本AddFaceEntity的语法及示例。',
      'description' => '## 功能描述
添加人脸样本能力用于向人脸数据库中添加人脸样本数据。人脸样本数据是用来标识用户的唯一性，如用户ID、员工ID等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 前提条件：已通过[创建人脸数据库](~~159141~~)（CreateFaceDb）接口创建了数据库名称（DbName）。

5. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/AddFaceEntity?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
6. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

7. 示例代码：该能力常用语言的示例代码，请参见[添加人脸样本示例代码](~~477933~~)。

8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
- 每个人脸数据库支持最高5万人脸特征，暂不支持扩容。人脸样本和标签组合为一个人脸特征。
- 每个人脸样本支持添加最多10个标签数据，暂不支持扩容。
- 添加人脸样本接口提交任务并发默认为2QPS。

## 计费说明
添加人脸样本能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的添加人脸样本能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[添加人脸样本示例代码](~~477933~~)。',
      'extraInfo' => '## 错误码
关于添加人脸样本的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'AddFace' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。支持小写字母、数字、下划线的组合，长度1~64。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸图片地址，人脸必须是正面无遮挡人脸（若包含多张人脸则取最大人脸添加）。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID，用来标识用户的唯一性，如用户ID、员工ID等。每个实体可包含多张人脸图片。支持大小写字母、数字、下划线、减号的组合，长度为1~64字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'U1',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtraData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义信息。支持字母、数字、标点符号和汉字。不超过512个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '王小二',
          ),
        ),
        4 => 
        array (
          'name' => 'QualityScoreThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质量分阈值。对新增人脸图片进行质量分析判断，得到的质量分小于该阈值则表示新增人脸图片质量不符合要求，添加失败。取值范围\\[0.0,100.0]。0.0或空则表示不做质量分判断逻辑。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
          ),
        ),
        5 => 
        array (
          'name' => 'SimilarityScoreThresholdInEntity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类内相似度阈值。将新增人脸图片与**EntityId**内已有人脸进行相似比对，小于该阈值则表示与其他人脸图片差异较大，添加失败.；若**EntityId**内没有人脸存在，则添加成功。取值范围\\[0.0,100.0]。0.0或空则表示不做类内相似度判断逻辑。参考值见[人脸比对1:1](~~151891~~)接口的返回结果字段**Thresholds**。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
          ),
        ),
        6 => 
        array (
          'name' => 'SimilarityScoreThresholdBetweenEntity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类间相似度阈值。将新增人脸图片与其他所有**EntityId**内已有人脸进行相似比对，大于等于该阈值则表示其他**EntityId**内存在相似人脸，出现重复，添加失败。取值范围\\[0.0,100.0]。0.0或空则表示不做类间相似度判断逻辑。参考值见[人脸比对1:1](~~151891~~)接口的返回结果字段**Thresholds**。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
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
                'example' => '2B93C43A-F824-40C8-AF79-844342B0F43A',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'FaceId' => 
                  array (
                    'description' => '输出人脸ID。',
                    'type' => 'string',
                    'example' => '5',
                  ),
                  'QualitieScore' => 
                  array (
                    'description' => '输入图像中的人脸质量分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '99.79581',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B93C43A-F824-40C8-AF79-844342B0F43A\\",\\n  \\"Data\\": {\\n    \\"FaceId\\": \\"5\\",\\n    \\"QualitieScore\\": 99.79581\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceResponse>\\n    <RequestId>2B93C43A-F824-40C8-AF79-844342B0F43A</RequestId>\\n    <Data>\\n        <FaceId>5</FaceId>\\n        <QualitieScore>99.79581</QualitieScore>\\n    </Data>\\n</AddFaceResponse>","errorExample":""}]',
      'title' => '添加人脸数据',
      'summary' => '本文介绍添加人脸数据AddFace的语法及示例。',
      'description' => '## 功能描述
添加人脸数据能力可以为指定数据库添加人脸数据，总共可支持50万张人脸照片的入库，人脸数据是在已创建好的人脸样本中添加，每个人脸样本最多可以添加5张人脸照片。
人脸照片入库量以及每个人脸样本最多添加的照片量暂不支持扩容。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 前提条件：
- 已通过[创建人脸数据库](~~159141~~)（CreateFaceDb）接口创建了数据库名称（DbName）。
- 已通过[添加人脸样本](~~161144~~)（AddFaceEntity）接口创建了实体ID（EntityId）。

4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/AddFace?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[添加人脸数据示例代码](~~477964~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过5 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素。人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
- 图片中若包含多个人脸，会取最大的人脸进行添加。

>当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。 

## 限制说明
添加人脸数据接口提交任务并发默认为2QPS。

## 计费说明
添加人脸数据能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的添加人脸数据能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[添加人脸数据示例代码](~~477964~~)。',
      'extraInfo' => '## 错误码
关于添加人脸数据的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'CreateFaceDb' => 
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。支持字母、数字和下划线的组合，长度为1~64。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
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
                'example' => '818D24A6-E368-46B3-99C5-3CF36D98CCA3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"818D24A6-E368-46B3-99C5-3CF36D98CCA3\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>818D24A6-E368-46B3-99C5-3CF36D98CCA3</RequestId>","errorExample":""}]',
      'title' => '创建人脸数据库',
      'summary' => '本文介绍创建人脸数据库CreateFaceDb的语法及示例。',
      'description' => '## 功能描述
创建人脸数据库能力可以创建人脸数据库用来存放人脸数据。每个阿里云账号可以创建10个人脸数据库，10个人脸数据库支持最多50万张人脸照片的入库，单个人脸数据库支持最多5万张人脸照片入库，单次搜索可支持最多10个人脸数据库的同时搜索（跨库搜索）。
人脸数据库、人脸照片入库量、单次搜索的人脸总数以及单次搜索的人脸数据库暂不支持扩容。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/CreateFaceDb?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[创建人脸数据库示例代码](~~477924~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
创建人脸数据库接口提交任务并发默认为2QPS。

## 计费说明
创建人脸数据库能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的创建人脸数据库能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[创建人脸数据库示例代码](~~477924~~)。',
      'extraInfo' => '## 错误码
关于创建人脸数据库的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'DeleteFace' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'FaceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸数据ID。',
            'type' => 'string',
            'required' => true,
            'example' => '001',
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
                'example' => 'FAC90D32-2F04-5AD4-B94B-BAA163AB3724',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FAC90D32-2F04-5AD4-B94B-BAA163AB3724\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceResponse>\\n    <RequestId>FAC90D32-2F04-5AD4-B94B-BAA163AB3724</RequestId>\\n</DeleteFaceResponse>","errorExample":""}]',
      'title' => '删除人脸',
      'summary' => '本文介绍删除人脸DeleteFace的语法及示例。',
      'description' => '## 功能描述
删除人脸能力可以删除指定数据库中的人脸图片信息。

><warning>

- 人脸图片信息删除后不可恢复，请谨慎操作。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

></warning>

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DeleteFace?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
删除人脸接口提交任务并发默认为2QPS。

## 计费说明
删除人脸能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的删除人脸能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于删除人脸的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'DeleteFaceDb' => 
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
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
                'example' => '203AE658-CFE1-507D-B105-F88CD1F1F71B',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"203AE658-CFE1-507D-B105-F88CD1F1F71B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteFaceDbResponse>\\n    <RequestId>203AE658-CFE1-507D-B105-F88CD1F1F71B</RequestId>\\n</DeleteFaceDbResponse>","errorExample":""}]',
      'title' => '删除人脸数据库',
      'summary' => '本文介绍删除数据库DeleteFaceDb的语法及示例。',
      'description' => '## 功能描述
删除数据库能力用于删除指定的人脸数据库。

><warning>

- 数据库删除后不可恢复，请谨慎操作。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

></warning>

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DeleteFaceDb?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
删除数据库接口提交任务并发默认为2QPS。

## 计费说明
删除数据库能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的删除数据库能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于删除数据库的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'DeleteFaceEntity' => 
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID，如员工编号。可以包含数字、字母和下划线。',
            'type' => 'string',
            'required' => true,
            'example' => 'wood',
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
                'example' => 'DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2</RequestId>","errorExample":""}]',
      'title' => '删除人脸样本',
      'summary' => '本文介绍删除人脸样本DeleteFaceEntity的语法及示例。',
      'description' => '## 功能描述
删除人脸样本能力用于删除人脸数据库中的人脸样本数据。

><warning>

- 删除人脸样本，样本中的人脸数据也会被删除，且不可恢复，请谨慎操作。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

></warning>

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DeleteFaceEntity?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
删除人脸样本接口提交任务并发默认为2QPS。


## 计费说明
删除人脸样本能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的删除人脸样本能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于删除人脸样本的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'UpdateFaceEntity' => 
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
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID，如用户ID、员工ID等。',
            'type' => 'string',
            'required' => true,
            'example' => 'mm2',
          ),
        ),
        2 => 
        array (
          'name' => 'Labels',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标签名称，最多可以添加10个标签。',
            'type' => 'string',
            'required' => false,
            'example' => '鹿班',
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
                'example' => 'DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2</RequestId>","errorExample":""}]',
      'title' => '更新人脸样本',
      'summary' => '更更新人脸样本。',
      'description' => '## 功能描述
更新人脸样本能力用于更新人脸数据库中的人脸样本数据。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/UpdateFaceEntity?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
更新人脸样本接口提交任务并发默认为2QPS。

## 计费说明
更新人脸样本能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的更新人脸样本能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于更新人脸样本的错误码。详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'SearchFace' => 
    array (
      'summary' => '本文介绍人脸搜索SearchFace的语法及示例。',
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
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。

> **DbName**与**DbNames**二选一，如果同时配置了两个参数，**DbNames**优先级高于**DbName**。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/SearchFace/SearchFace1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单个人脸列表中搜索人脸结果数量限制，取值范围1~100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '1000',
            'minimum' => '0',
            'example' => '2',
            'pattern' => '^\\d+$',
          ),
        ),
        3 => 
        array (
          'name' => 'DbNames',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称列表，以英文逗号（,）分割，可以实现跨库查询，最大支持10个数据库。
> **DbName**与**DbNames**二选一，如果同时配置了两个参数，**DbNames**优先级高于**DbName**。',
            'type' => 'string',
            'required' => false,
            'example' => 'test1,test2,test3',
            'maxLength' => 4096,
          ),
        ),
        4 => 
        array (
          'name' => 'QualityScoreThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质量分阈值。对人脸图片进行质量分析判断，得到的质量分小于该阈值则表示人脸图片质量不符合要求，比对失败。取值范围\\[0.0,100.0]。0.0或空则表示不做质量分判断逻辑。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
          ),
        ),
        5 => 
        array (
          'name' => 'MaxFaceNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '对输入图像中多少个人脸进行检索比对，控制人脸样本列表个数，取值范围1~10，默认为5。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
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
                'example' => '4159e64a-0fe8-436c-a8de-ee531555db3c',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'MatchList' => 
                  array (
                    'description' => '匹配的结果列表，如果输入图像中多个人脸，则这里会返回多个数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceItems' => 
                        array (
                          'description' => '匹配的人脸数据列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '1',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'EntityId' => 
                              array (
                                'description' => '实体ID，用来标识用户的唯一性，如用户ID、员工ID等。每个实体可包含多张人脸图片。支持大小写字母、数字、下划线和减号的组合，长度为2~64。',
                                'type' => 'string',
                                'example' => 'U1',
                              ),
                              'FaceId' => 
                              array (
                                'description' => '人脸图片数据ID，需要全局唯一，不可重复。支持小写字母、数字和下划线的组合。长度为1~64。',
                                'type' => 'string',
                                'example' => '001',
                              ),
                              'Score' => 
                              array (
                                'description' => '人脸的相似度，取值范围-1.0~1.0，取小数点后6位，数值越大相似度越高。建议的三个参考阈值为0.35，0.45和0.6，分别对应千分之一，万分之一和十万分之一的误识率。阈值设置越高，误识率越低，通过率也越低，对安全性要求越高的场合，可以设置越高的阈值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '0.892133',
                              ),
                              'ExtraData' => 
                              array (
                                'description' => '自定义信息（字符串）。支持字母、数字、标点符号和汉字。不超过512个字符。',
                                'type' => 'string',
                                'example' => '王小二',
                              ),
                              'DbName' => 
                              array (
                                'description' => '数据库名称。',
                                'type' => 'string',
                                'example' => 'default',
                              ),
                              'Confidence' => 
                              array (
                                'description' => '转换后的置信度 ，取值范围0.0~100.0，数值越大相似度越高，建议的三个参考阈值为60.48，67.87和72.62，分别对应千分之一，万分之一和十万分之一的误识率，阈值设置越高，误识率越低，通过率也越低，对安全性要求越高的场合，可以设置越高的阈值。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '36.820168',
                              ),
                            ),
                          ),
                        ),
                        'Location' => 
                        array (
                          'description' => '输入图像中的人脸坐标信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Width' => 
                            array (
                              'description' => '宽度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '200',
                            ),
                            'Height' => 
                            array (
                              'description' => '高度，单位像素。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '200',
                            ),
                            'Y' => 
                            array (
                              'description' => '左上角y坐标。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '6',
                            ),
                            'X' => 
                            array (
                              'description' => '左上角x坐标。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '5',
                            ),
                          ),
                        ),
                        'QualitieScore' => 
                        array (
                          'description' => '输入图像中的人脸质量分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '71.7349',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4159e64a-0fe8-436c-a8de-ee531555db3c\\",\\n  \\"Data\\": {\\n    \\"MatchList\\": [\\n      {\\n        \\"FaceItems\\": [\\n          {\\n            \\"EntityId\\": \\"U1\\",\\n            \\"FaceId\\": \\"001\\",\\n            \\"Score\\": 0.892133,\\n            \\"ExtraData\\": \\"王小二\\",\\n            \\"DbName\\": \\"default\\",\\n            \\"Confidence\\": 36.820168\\n          }\\n        ],\\n        \\"Location\\": {\\n          \\"Width\\": 200,\\n          \\"Height\\": 200,\\n          \\"Y\\": 6,\\n          \\"X\\": 5\\n        },\\n        \\"QualitieScore\\": 71.7349\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SearchFaceResponse>\\n    <RequestId>4159e64a-0fe8-436c-a8de-ee531555db3c</RequestId>\\n    <Data>\\n        <MatchList>\\n            <FaceItems>\\n                <EntityId>U1</EntityId>\\n                <FaceId>001</FaceId>\\n                <Score>0.892133</Score>\\n                <ExtraData>王小二</ExtraData>\\n                <DbName>default</DbName>\\n                <Confidence>36.820168</Confidence>\\n            </FaceItems>\\n            <Location>\\n                <Width>200</Width>\\n                <Height>200</Height>\\n                <Y>6</Y>\\n                <X>5</X>\\n            </Location>\\n            <QualitieScore>71.7349</QualitieScore>\\n        </MatchList>\\n    </Data>\\n</SearchFaceResponse>","errorExample":""}]',
      'title' => '搜索人脸',
      'description' => '## 功能描述
人脸搜索能力可以根据输入图片，在数据库中搜索并返回相似的人脸图片数据。单次搜索的人脸总数最多20万张，单次搜索最多可支持10个人脸数据库的同时搜索（跨库搜索）。该能力根据人脸特征来进行识别，通过把人脸图像特征化，然后比较人脸特征的相似程度。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=SearchFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 特色优势
- 识别精度高：人脸检测识别等算法精度处于业内领先水平。
- 识别效率高：毫秒级响应，支持实时识别。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>

- 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
- 如果您是已经在使用的老客户，需要使用海量人脸建库和搜索的能力，请通过钉钉群（23109592）联系我们。

></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 前提条件：
- 已通过[创建人脸数据库](~~159141~~)（CreateFaceDb）接口创建了数据库名称（DbName）。
- 已通过[添加人脸样本](~~161144~~)（AddFaceEntity）接口创建了实体ID（EntityId）。
- 已通过[添加人脸数据](~~159216~~)（AddFace）接口给数据库（DbName）下的实体ID（EntityId）添加了人脸图片。

5. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/SearchFace?lang=JAVA&sdkStyle=dara&params=%7B%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
6. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

7. 示例代码：该能力常用语言的示例代码，请参见[人脸搜索示例代码](~~478011~~)。

8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过5 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素。人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
- 支持图片中包含最多10个人脸，超过部分会被忽略。
>当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。 

## 计费说明
关于人脸搜索1:N的计费方式及报价，请参见[计费介绍](~~184049~~)。人脸搜索1:N能力中仅本接口（SearchFace）收费，其他接口可免费调用。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=SearchFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸搜索能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人脸搜索示例代码](~~478011~~)。',
      'extraInfo' => '## 错误码
关于人脸搜索的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸识别OOD模型](https://modelscope.cn/models/damo/cv_ir_face-recognition-ood_rts/summary)、[ArcFace人脸识别模型](https://modelscope.cn/models/damo/cv_ir50_face-recognition_arcface/summary)、[IR人脸识别模型FRIR](https://modelscope.cn/models/damo/cv_manual_face-recognition_frir/summary)、[口罩人脸识别模型FRFM-large](https://modelscope.cn/models/damo/cv_manual_face-recognition_frfm/summary)、[口罩人脸识别模型FaceMask](https://modelscope.cn/models/damo/cv_resnet_face-recognition_facemask/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'GetFaceEntity' => 
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
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID。可以包含数字、字母和下划线。',
            'type' => 'string',
            'required' => true,
            'example' => '66',
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
                'example' => 'DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'DbName' => 
                  array (
                    'description' => '数据库名称。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'EntityId' => 
                  array (
                    'description' => '实体ID。',
                    'type' => 'string',
                    'example' => '66',
                  ),
                  'Labels' => 
                  array (
                    'description' => '查询到的人脸标签。',
                    'type' => 'string',
                    'example' => '工厂',
                  ),
                  'Faces' => 
                  array (
                    'description' => '查询到的人脸数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceId' => 
                        array (
                          'description' => '人脸数据ID。',
                          'type' => 'string',
                          'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2\\",\\n  \\"Data\\": {\\n    \\"DbName\\": \\"default\\",\\n    \\"EntityId\\": \\"66\\",\\n    \\"Labels\\": \\"工厂\\",\\n    \\"Faces\\": [\\n      {\\n        \\"FaceId\\": \\"3\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2</RequestId>\\n<Data>\\n    <DbName>default</DbName>\\n    <EntityId>66</EntityId>\\n    <Labels>工厂</Labels>\\n    <Faces>\\n        <FaceId>3</FaceId>\\n    </Faces>\\n</Data>","errorExample":""}]',
      'title' => '查询人脸样本',
      'summary' => '本文介绍查询人脸样本GetFaceEntity的语法及示例。',
      'description' => '## 功能描述
查询人脸样本能力用于查询人脸数据库中的人脸样本数据。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/GetFaceEntity?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
查询人脸样本接口提交任务并发默认为2QPS。

## 计费说明
查询人脸样本能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的查询人脸样本能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询人脸样本的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'ListFaceEntities' => 
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
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'Offset',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '起始记录，取值范围0~2000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页最多显示的样本数目，取值范围1~200。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'Token',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当查询结果超过2000条时，需要使用上一次请求返回的Token作为请求下一页的参数。',
            'type' => 'string',
            'required' => false,
            'example' => '2',
          ),
        ),
        4 => 
        array (
          'name' => 'Labels',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标签，最多支持10个标签，多个标签以英文逗号（,）分割。',
            'type' => 'string',
            'required' => false,
            'example' => '鹿班',
          ),
        ),
        5 => 
        array (
          'name' => 'EntityIdPrefix',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '样本ID前缀，包含数字、字母和下划线。',
            'type' => 'string',
            'required' => false,
            'example' => 'U1',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '排列方式。包括asc（升序）和desc（降序）。',
            'type' => 'string',
            'required' => false,
            'example' => 'asc',
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
                'example' => 'DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Token' => 
                  array (
                    'description' => '当查询结果超过2000条时，可以使用Token来查询下一页的数据。',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '人脸样本的总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '200',
                  ),
                  'Entities' => 
                  array (
                    'description' => '查询到的实体数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DbName' => 
                        array (
                          'description' => '人脸样本所在的数据库名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'EntityId' => 
                        array (
                          'description' => '实体ID，如员工编号。',
                          'type' => 'string',
                          'example' => '222',
                        ),
                        'Labels' => 
                        array (
                          'description' => '查询到的人脸数据标签。',
                          'type' => 'string',
                          'example' => '鹿班',
                        ),
                        'CreatedAt' => 
                        array (
                          'description' => '人脸样本的创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1589203871832',
                        ),
                        'FaceCount' => 
                        array (
                          'description' => '人脸样本包含的人脸数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
                        ),
                        'UpdatedAt' => 
                        array (
                          'description' => '人脸样本的更新时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1589203871832',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2\\",\\n  \\"Data\\": {\\n    \\"Token\\": \\"2\\",\\n    \\"TotalCount\\": 200,\\n    \\"Entities\\": [\\n      {\\n        \\"DbName\\": \\"default\\",\\n        \\"EntityId\\": \\"222\\",\\n        \\"Labels\\": \\"鹿班\\",\\n        \\"CreatedAt\\": 1589203871832,\\n        \\"FaceCount\\": 3,\\n        \\"UpdatedAt\\": 1589203871832\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>DA7CAFEB-0A37-4496-9CDF-E3DBB6309CB2</RequestId>\\n<Data>\\n    <Token>2</Token>\\n    <TotalCount>200</TotalCount>\\n    <Entities>\\n        <DbName>default</DbName>\\n        <EntityId>222</EntityId>\\n        <FaceCount>3</FaceCount>\\n        <Labels>鹿班</Labels>\\n        <CreatedAt>1589203871832</CreatedAt>\\n        <UpdatedAt>1589203871832</UpdatedAt>\\n    </Entities>\\n</Data>","errorExample":""}]',
      'title' => '查询人脸样本列表',
      'summary' => '本文介绍查询人脸样本列表ListFaceEntities的语法及示例。',
      'description' => '## 功能描述
查询人脸样本列表能力用于查询人脸数据库中的人脸样本列表。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/ListFaceEntities?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
查询人脸样本列表接口提交任务并发默认为2QPS。

## 计费说明
查询人脸样本列表能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的查询人脸样本列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询人脸样本列表的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'ListFaceDbs' => 
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
          'name' => 'Offset',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '默认起始页从0开始，不填写默认从0页开始返回数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页最多显示的样本数目，范围1~200，默认200。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '50',
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
                'example' => '2B93C43A-F824-40C8-AF79-844342B0F43A',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'DbList' => 
                  array (
                    'description' => '数据库列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '数据库名称。',
                          'type' => 'string',
                          'example' => 'default',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2B93C43A-F824-40C8-AF79-844342B0F43A\\",\\n  \\"Data\\": {\\n    \\"DbList\\": [\\n      {\\n        \\"Name\\": \\"default\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListFaceDbsResponse>\\n    <RequestId>2B93C43A-F824-40C8-AF79-844342B0F43A</RequestId>\\n    <Data>\\n        <DbList>\\n            <Name>default</Name>\\n        </DbList>\\n    </Data>\\n</ListFaceDbsResponse>","errorExample":""}]',
      'title' => '查看人脸数据库列表',
      'summary' => '本文介绍查看数据库列表ListFaceDbs的语法及示例。',
      'description' => '## 功能描述
本能力用于查询人脸数据库列表。人脸数据库最多只能返回200条记录。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/ListFaceDbs?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 限制说明
查询人脸数据库列表接口提交任务并发默认为2QPS。

## 计费说明
查询人脸数据库列表能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的查询人脸数据库列表能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于查询人脸数据库列表的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'AddFaceImageTemplate' => 
    array (
      'summary' => '本文介绍图像人脸融合模板增加AddFaceImageTemplate的语法及示例。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸模板的图像地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过20 MB。
- 图像分辨率：大于等于128×128像素，小于等于2000×2000像素，最长边小于等于2000像素。
- URL地址中不能包含中文字符。
- 支持输入多人图像，建议图像中人脸个数不超过5个。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/img_facefusion/template/sucai1.jpg',
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
                'example' => '798A721D-7C7F-4D87-A125-1D04B3055C2C',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'TemplateId' => 
                  array (
                    'description' => '模板ID。',
                    'type' => 'string',
                    'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
                  ),
                  'FaceInfos' => 
                  array (
                    'description' => '用户输入图为多个人脸时，返回各人脸ID和位置信息。

> 只有在多人脸场景中，才会返回**FaceInfos**参数。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '用户输入图为多个人脸时，返回各人脸ID和位置信息。

> 只有在多人脸场景中，才会返回**FaceInfos**参数。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TemplateFaceID' => 
                        array (
                          'description' => '人脸对应的子模板ID。',
                          'type' => 'string',
                          'example' => 'string 6cd509ea-54fa-4730-8e9d-c94cadcda048_0',
                        ),
                        'FaceRect' => 
                        array (
                          'description' => '人脸对应的位置信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'X' => 
                            array (
                              'description' => '人脸框左上角横坐标。',
                              'type' => 'string',
                              'example' => '254',
                            ),
                            'Y' => 
                            array (
                              'description' => '人脸框左上角纵坐标。',
                              'type' => 'string',
                              'example' => '318',
                            ),
                            'Height' => 
                            array (
                              'description' => '人脸框高度。',
                              'type' => 'string',
                              'example' => '94',
                            ),
                            'Width' => 
                            array (
                              'description' => '人脸框宽度。',
                              'type' => 'string',
                              'example' => '89',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"798A721D-7C7F-4D87-A125-1D04B3055C2C\\",\\n  \\"Data\\": {\\n    \\"TemplateId\\": \\"6cd509ea-54fa-4730-8e9d-c94cadcda048\\",\\n    \\"FaceInfos\\": [\\n      {\\n        \\"TemplateFaceID\\": \\"string 6cd509ea-54fa-4730-8e9d-c94cadcda048_0\\",\\n        \\"FaceRect\\": {\\n          \\"X\\": \\"254\\",\\n          \\"Y\\": \\"318\\",\\n          \\"Height\\": \\"94\\",\\n          \\"Width\\": \\"89\\"\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFaceImageTemplateResponse>\\n    <RequestId>7BC58484-6724-508F-857D-0E7035AD5DEA</RequestId>\\n    <Data>\\n        <TemplateId>30f738a9-1e69-4ecb-8bbc-50bf0aa75e60</TemplateId>\\n    </Data>\\n</AddFaceImageTemplateResponse>","errorExample":""}]',
      'title' => '添加人脸图像模板',
      'description' => '## 功能描述
图像人脸融合模板增加功能可以将已通过内容审核的人脸图像，作为人脸融合的模板图，供图像人脸融合功能使用。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。

4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/AddFaceImageTemplate?lang=JAVA&sdkStyle=old&params=%7B%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[图像人脸融合模板增加示例代码](~~478119~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过20 MB。
- 图像分辨率：大于等于128×128像素，小于等于2000×2000像素，最长边小于等于2000像素。
- URL地址中不能包含中文字符。
- 支持输入多人图像，建议图像中人脸个数不超过5个。
- 不限制可以增加的模板数量。

## 图像质量建议
- 要求保证图像中的人脸清晰。图像中人脸尺寸建议大于64×64像素，人脸区域建议不大于全图区域的2/3。
- 建议图像中人脸五官区域轮廓完整，无明显遮挡。人脸融合算法支持人脸偏侧一定角度，在偏侧角度不超过30度的情况下能取得更佳效果。

推荐图像示例：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/jris/MergeImageFacetuijian.png" width="300)
不推荐图像示例：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/rkbx/MergeImageFacebutuijian.png" width="300)

## 计费说明
图像人脸融合模板增加能力可免费调用。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的图像人脸融合模板增加能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像人脸融合模板增加示例代码](~~478119~~)。',
      'extraInfo' => '## 错误码
关于图像人脸融合模板增加的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DeleteFaceImageTemplate' => 
    array (
      'summary' => '本文介绍图像人脸融合模板删除DeleteFaceImageTemplate的语法及示例。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除的模板ID。',
            'type' => 'string',
            'required' => true,
            'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
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
                'example' => 'F9E76786-3A85-43C3-B79C-3175B4536252',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F9E76786-3A85-43C3-B79C-3175B4536252\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>F9E76786-3A85-43C3-B79C-3175B4536252</RequestId>","errorExample":""}]',
      'title' => '图像人脸融合模板删除',
      'description' => '## 功能描述
图像人脸融合模板删除功能可以删除用户添加过的人脸模板。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DeleteFaceImageTemplate?lang=JAVA&sdkStyle=old&params=%7B%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 前提条件：已通过[图像人脸融合模板增加接口](~~203512~~)（AddFaceImageTemplate）创建生成了TemplateId。
6. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)
',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的图像人脸融合模板删除能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像人脸融合模板删除的错误码，详情请参见[常见错误码](~~146756~~)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'QueryFaceImageTemplate' => 
    array (
      'summary' => '本文介绍图像人脸融合模板查询QueryFaceImageTemplate的语法及示例。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待查询的模板ID。如果未传TemplateId，返回该用户的模板列表；如果传入TemplateId，仅返回对应的结果。',
            'type' => 'string',
            'required' => false,
            'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数设置，默认第1页。取值范围为1~5000。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页条数设置，默认100条。取值范围为1~500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '100',
            'default' => '100',
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
                'example' => '7C29675C-751F-4D2F-86FB-2BD8D69AC860',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'description' => '当前账号下的可用模板总数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Elements' => 
                  array (
                    'description' => '模板列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CreateTime' => 
                        array (
                          'description' => '模板创建时间。',
                          'type' => 'string',
                          'example' => '2021-01-29 10:19:05',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '模板更新时间。',
                          'type' => 'string',
                          'example' => '2021-01-29 10:19:05',
                        ),
                        'UserId' => 
                        array (
                          'description' => '用户ID。',
                          'type' => 'string',
                          'example' => 'zhangsan',
                        ),
                        'TemplateId' => 
                        array (
                          'description' => '模板ID。',
                          'type' => 'string',
                          'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
                        ),
                        'TemplateURL' => 
                        array (
                          'description' => '新增模板时设置的人脸模板图像地址。',
                          'type' => 'string',
                          'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MergeImageFace/MergeImageFace-1.png',
                        ),
                        'FaceInfos' => 
                        array (
                          'description' => '用户输入图为多个人脸时，返回各人脸ID和位置信息。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '用户输入图为多个人脸时，返回各人脸ID和位置信息。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TemplateFaceID' => 
                              array (
                                'description' => '人脸对应的子模板ID。',
                                'type' => 'string',
                                'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
                              ),
                              'FaceRect' => 
                              array (
                                'description' => '人脸对应的位置信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'X' => 
                                  array (
                                    'description' => '人脸框左上角横坐标。',
                                    'type' => 'string',
                                    'example' => '254',
                                  ),
                                  'Y' => 
                                  array (
                                    'description' => '人脸框左上角纵坐标。',
                                    'type' => 'string',
                                    'example' => '318',
                                  ),
                                  'Height' => 
                                  array (
                                    'description' => '人脸框高度。',
                                    'type' => 'string',
                                    'example' => '94',
                                  ),
                                  'Width' => 
                                  array (
                                    'description' => '人脸框宽度。',
                                    'type' => 'string',
                                    'example' => '89',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C29675C-751F-4D2F-86FB-2BD8D69AC860\\",\\n  \\"Data\\": {\\n    \\"Total\\": 20,\\n    \\"Elements\\": [\\n      {\\n        \\"CreateTime\\": \\"2021-01-29 10:19:05\\",\\n        \\"UpdateTime\\": \\"2021-01-29 10:19:05\\",\\n        \\"UserId\\": \\"zhangsan\\",\\n        \\"TemplateId\\": \\"6cd509ea-54fa-4730-8e9d-c94cadcda048\\",\\n        \\"TemplateURL\\": \\"http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MergeImageFace/MergeImageFace-1.png\\",\\n        \\"FaceInfos\\": [\\n          {\\n            \\"TemplateFaceID\\": \\"6cd509ea-54fa-4730-8e9d-c94cadcda048\\",\\n            \\"FaceRect\\": {\\n              \\"X\\": \\"254\\",\\n              \\"Y\\": \\"318\\",\\n              \\"Height\\": \\"94\\",\\n              \\"Width\\": \\"89\\"\\n            }\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryFaceImageTemplateResponse>\\n    <RequestId>7C29675C-751F-4D2F-86FB-2BD8D69AC860</RequestId>\\n    <Data>\\n        <Total>20</Total>\\n        <Elements>\\n            <CreateTime>2021-01-29 10:19:05</CreateTime>\\n            <UpdateTime>2021-01-29 10:19:05</UpdateTime>\\n            <UserId>zhangsan</UserId>\\n            <TemplateId>6cd509ea-54fa-4730-8e9d-c94cadcda048</TemplateId>\\n            <TemplateURL>http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MergeImageFace/MergeImageFace-1.png</TemplateURL>\\n            <FaceInfos>\\n                <TemplateFaceID>6cd509ea-54fa-4730-8e9d-c94cadcda048</TemplateFaceID>\\n                <FaceRect>\\n                    <X>254</X>\\n                    <Y>318</Y>\\n                    <Height>94</Height>\\n                    <Width>89</Width>\\n                </FaceRect>\\n            </FaceInfos>\\n        </Elements>\\n    </Data>\\n</QueryFaceImageTemplateResponse>","errorExample":""}]',
      'title' => '查询人脸图像模板',
      'description' => '## 功能描述
图像人脸融合模板查询功能可以查询用户添加过的人脸模板图。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1.  注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2.  开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/QueryFaceImageTemplate?lang=JAVA&sdkStyle=old&params=%7B%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 前提条件：已通过[图像人脸融合模板增加接口](~~203512~~)（AddFaceImageTemplate）创建生成了TemplateId。
6. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 计费说明
图像人脸融合模板查询能力可免费调用。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的图像人脸融合模板查询能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于图像人脸融合模板查询的错误码，详情请参见[常见错误码](~~146756~~)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'BlurFace' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/BlurFace/BlurFace1.png',
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
                'example' => '4C6080B0-64C4-488E-BBA6-245749CA11AD',
              ),
              'Data' => 
              array (
                'description' => '结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '脱敏后的图片URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_FaceBlur/2020-8-5/invi_FaceBlur_015966077063461060948_IBdDsq.jpg?Expires=1596609506&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=x8n3jq1X91Sq7BKWE4vRHSu6g9****',
                  ),
                  'MaskURL' => 
                  array (
                    'description' => '脱敏后的图片Mask地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-cartoonizer/59697D68-2A6E-4553-89BD-0FADD07881E8_7ee5_20201027-070958.jpg?Expires=1603784400&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4C6080B0-64C4-488E-BBA6-245749CA11AD\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_FaceBlur/2020-8-5/invi_FaceBlur_015966077063461060948_IBdDsq.jpg?Expires=1596609506&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=x8n3jq1X91Sq7BKWE4vRHSu6g9****\\",\\n    \\"MaskURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-cartoonizer/59697D68-2A6E-4553-89BD-0FADD07881E8_7ee5_20201027-070958.jpg?Expires=1603784400&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BlurFaceResponse>\\n    <RequestId>4C6080B0-64C4-488E-BBA6-245749CA11AD</RequestId>\\n    <Data>\\n        <ImageURL>http://viapi-cn-shanghai-dha-segmenter.oss-cn-shanghai.aliyuncs.com/upload/result_FaceBlur/2020-8-5/invi_FaceBlur_015966077063461060948_IBdDsq.jpg?Expires=1596609506&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=x8n3jq1X91Sq7BKWE4vRHSu6g9****</ImageURL>\\n        <MaskURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-cartoonizer/59697D68-2A6E-4553-89BD-0FADD07881E8_7ee5_20201027-070958.jpg?Expires=1603784400&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****</MaskURL>\\n    </Data>\\n</BlurFaceResponse>","errorExample":""}]',
      'title' => '人脸信息脱敏',
      'summary' => '本文介绍人脸信息脱敏BlurFace的语法及示例。',
      'description' => '## 功能描述
人脸信息脱敏能力对输入图像中的人脸进行模糊处理，输出脱敏后的图像。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=BlurFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/BlurFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FBlurFace%2FBlurFace1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32x32像素，小于2000×2000像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸信息脱敏的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=BlurFace)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸信息脱敏能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸信息脱敏的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'CompareFace' => 
    array (
      'summary' => '本文介绍人脸比对CompareFace的语法及示例。',
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
          'name' => 'QualityScoreThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '质量分阈值，取值范围 [0.0, 100.0],   0.0或空  表示不做质量分判断逻辑。',
            'description' => '质量分阈值，对人脸图片进行质量分析判断，若某张人脸质量分小于该阈值，则会在返回结果上增加MessageTips说明。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '98.5',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURLA',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像A的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> **ImageURLA**与**ImageDataA**二选一，当URL方式与Base64编码方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFace/CompareFace-right1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ImageURLB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像B的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
> **ImageURLB**与**ImageDataB**二选一，当URL方式与Base64编码方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFace/CompareFace-left1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'ImageDataA',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像A的Base64编码字符串。当与URL方式共存时，URL方式优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。
> **ImageURLA**与**ImageDataA**二选一，当URL方式与Base64编码方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgK****',
          ),
        ),
        4 => 
        array (
          'name' => 'ImageDataB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像B的Base64编码字符串。当与URL方式共存时，URL方式优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。
> **ImageURLB**与**ImageDataB**二选一，当URL方式与Base64编码方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgQ****',
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
                'example' => 'B352CD68-C847-5C48-BE68-3F266356FDD7',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Thresholds' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '误识率在1/1000，1/10000，1/100000的情况下分别对应的置信度阈值。例如`[61.0,69.0,75.0]`，表示误识率为1/1000的情况下，置信度（Confidence）超过61%就可以认为是同一个人。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[61,69,75]',
                    ),
                  ),
                  'RectBList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片B中最大人脸矩形框`[left, top, width, height]`，例如`[169,48,125,162]`。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '[169,48,125,162]',
                    ),
                  ),
                  'Confidence' => 
                  array (
                    'description' => '两张图片中的最大人脸属于同一个人的置信度，取值范围0~100。供参考的三个阈值是61，69和75，分别对应千分之一，万分之一和十万分之一误识率。阈值设置越高，误识率越低，通过率也越低，对安全性要求越高的场合，可以设置更高的阈值。如果某张图片中没有人脸，则报错误信息。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '88.4831771850586',
                  ),
                  'RectAList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片A中最大人脸矩形框`[left, top, width, height]`，例如`[157,82,147,188]`。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '[157,82,147,188]',
                    ),
                  ),
                  'QualityScoreA' => 
                  array (
                    'title' => '输入图像A的质量分',
                    'description' => '输入图像A的质量分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '99.65772247314453',
                  ),
                  'QualityScoreB' => 
                  array (
                    'title' => '输入图像A的质量分',
                    'description' => '输入图像B的质量分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '98.01177978515625',
                  ),
                  'MessageTips' => 
                  array (
                    'title' => '信息提示信息，纯文字描述，目前支持质量分的提示信息',
                    'description' => '提示信息，纯文字描述，以下提示信息单独出现或是几条提示信息的组合。
质量相关提示（某张人脸质量分小于请求参数质量分阈值时会出现）：
- `imageA quality score less threshold`：图像A的质量分小于输入参数设置的阈值。
- `imageB quality score less threshold`：图像B的质量分小于输入参数设置的阈值。

人脸尺寸相关提示（检测到人脸且人脸宽或高小于50像素时会有该提示信息。出现该提示信息时，请尽可能输入像素数大于64x64的人脸，并请酌情参考返回的对比置信度Confidence值）：
- `face in imageA is too small`：图像A中的人脸太小。
- `face in imageB is too small`：图像B中的人脸太小。',
                    'type' => 'string',
                    'example' => 'imageB quality score less threshold',
                  ),
                  'IsMaskA' => 
                  array (
                    'description' => '图片A中的人脸是否戴口罩。
- 0：不戴口罩。
- 1：戴口罩。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'IsMaskB' => 
                  array (
                    'description' => '图片B中的人脸是否戴口罩。
- 0：不戴口罩。
- 1：戴口罩。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'LandmarksAList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片A人脸框所对应的人脸关键点坐标，顺序分别为左眼水平坐标，左眼垂直坐标，右眼水平坐标，右眼垂直坐标，鼻尖水平坐标，鼻尖垂直坐标，左嘴角水平坐标，左嘴角垂直坐标，右嘴角水平坐标，右嘴角垂直坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[201,146,266,159,222,190,187,208,255,219]',
                    ),
                  ),
                  'LandmarksBList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片B人脸框所对应的人脸关键点坐标，顺序分别为左眼水平坐标，左眼垂直坐标，右眼水平坐标，右眼垂直坐标，鼻尖水平坐标，鼻尖垂直坐标，左嘴角水平坐标，左嘴角垂直坐标，右嘴角水平坐标，右嘴角垂直坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[199,115,248,109,215,146,206,167,260,162]',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B352CD68-C847-5C48-BE68-3F266356FDD7\\",\\n  \\"Data\\": {\\n    \\"Thresholds\\": [\\n      0\\n    ],\\n    \\"RectBList\\": [\\n      0\\n    ],\\n    \\"Confidence\\": 88.4831771850586,\\n    \\"RectAList\\": [\\n      0\\n    ],\\n    \\"QualityScoreA\\": 99.65772247314453,\\n    \\"QualityScoreB\\": 98.01177978515625,\\n    \\"MessageTips\\": \\"imageB quality score less threshold\\",\\n    \\"IsMaskA\\": 0,\\n    \\"IsMaskB\\": 0,\\n    \\"LandmarksAList\\": [\\n      0\\n    ],\\n    \\"LandmarksBList\\": [\\n      0\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CompareFaceResponse>\\n    <RequestId>B352CD68-C847-5C48-BE68-3F266356FDD7</RequestId>\\n    <Data>\\n        <Thresholds>61</Thresholds>\\n        <Thresholds>69</Thresholds>\\n        <Thresholds>75</Thresholds>\\n        <RectBList>169</RectBList>\\n        <RectBList>48</RectBList>\\n        <RectBList>125</RectBList>\\n        <RectBList>162</RectBList>\\n        <Confidence>88.4831771850586</Confidence>\\n        <RectAList>157</RectAList>\\n        <RectAList>82</RectAList>\\n        <RectAList>147</RectAList>\\n        <RectAList>188</RectAList>\\n        <QualityScoreA>99.65772247314453</QualityScoreA>\\n        <QualityScoreB>98.01177978515625</QualityScoreB>\\n        <IsMaskA>0</IsMaskA>\\n        <IsMaskB>0</IsMaskB>\\n        <LandmarksAList>201</LandmarksAList>\\n        <LandmarksAList>146</LandmarksAList>\\n        <LandmarksAList>266</LandmarksAList>\\n        <LandmarksAList>159</LandmarksAList>\\n        <LandmarksAList>222</LandmarksAList>\\n        <LandmarksAList>190</LandmarksAList>\\n        <LandmarksAList>187</LandmarksAList>\\n        <LandmarksAList>208</LandmarksAList>\\n        <LandmarksAList>255</LandmarksAList>\\n        <LandmarksAList>219</LandmarksAList>\\n        <LandmarksBList>199</LandmarksBList>\\n        <LandmarksBList>115</LandmarksBList>\\n        <LandmarksBList>248</LandmarksBList>\\n        <LandmarksBList>109</LandmarksBList>\\n        <LandmarksBList>215</LandmarksBList>\\n        <LandmarksBList>146</LandmarksBList>\\n        <LandmarksBList>206</LandmarksBList>\\n        <LandmarksBList>167</LandmarksBList>\\n        <LandmarksBList>260</LandmarksBList>\\n        <LandmarksBList>162</LandmarksBList>\\n    </Data>\\n</CompareFaceResponse>","errorExample":""}]',
      'title' => '人脸比对',
      'description' => '## 功能描述
人脸比对1:1能力基于您输入的两张图片，分别挑选两张图片中的最大人脸进行比较，判断是否为同一人。
- 两张人脸图片对比：比对两张图片中人脸的相似度，返回这两个人脸的矩形框坐标、人脸五点关键点坐标、比对的置信度，以及不同误识率的置信度阈值。
- 支持多种图片类型：支持生活照、证件照、身份证芯片照、带网纹照等类型的人脸对比。

关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221227/ghxo/CompareFace.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=CompareFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 金融业务：比对用户身份证照片和现场拍摄的已获授权的照片，判断用户信息真实性，可提供快速安全的身份核验流程，适用于互联网远程开户、刷脸支付等金融业务。
- 员工考勤：无接触式刷脸考勤，疫情防控场景下企业考勤首选，且能有效防止代打卡等作弊行为。
- 公共服务：客户直接刷脸办理业务，通过人脸比对识别身份信息，减少身份证查验、复印存档等环节，提高公共服务窗口办理业务的效率。
- 酒店自助入住：住客刷脸自助办理入住，将现场授权获取的照片，与身份证提取的照片进行1:1比对，确保住客身份的真实性的同时，减少人工核查和服务成本，向住客提供便捷的入住体验。

## 特色优势
- 高精度识别： 由达摩院提供业内领先的人脸识别算法，算法准确率超过99%。
- 平台服务稳定：提供在高并发、大流量下的毫秒级识别响应和99.999%的可靠性保障。
- 关键点精准定位：支持眼睛、鼻子、嘴部五官位置的高精度精准定位。
- 简单易用：可直接调用的 API 接口，服务简单易用，易被集成，兼容性强。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/CompareFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURLA%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FCompareFace%2FCompareFace-right1.png%22%2C%22ImageURLB%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FCompareFace%2FCompareFace-left1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人脸比对1:1示例代码](~~465557~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP、WEBP。
- 图像大小：不超过5 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素，人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
- 可使用URL与Base64编码字符串混合输入。例如：输入ImageURLA和ImageDataB的值，不输入ImageURLB和ImageDataA的值。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸比对的计费方式及报价，详情请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=CompareFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸比对1:1能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人脸比对1:1示例代码](~~465557~~)。',
      'extraInfo' => '## 错误码
关于人脸比对1:1的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸识别OOD模型](https://modelscope.cn/models/damo/cv_ir_face-recognition-ood_rts/summary)、[ArcFace人脸识别模型](https://modelscope.cn/models/damo/cv_ir50_face-recognition_arcface/summary)、[IR人脸识别模型FRIR](https://modelscope.cn/models/damo/cv_manual_face-recognition_frir/summary)、[口罩人脸识别模型FRFM-large](https://modelscope.cn/models/damo/cv_manual_face-recognition_frfm/summary)、[口罩人脸识别模型FaceMask](https://modelscope.cn/models/damo/cv_resnet_face-recognition_facemask/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DetectFace' => 
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
        'operationType' => 'none',
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectFace/DetectFace1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Landmark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要返回人脸的特征点定位，取值true或false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'Quality',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要返回人脸质量，取值true或false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'Pose',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否需要返回人脸的姿态，取值true或false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'MaxFaceNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '设置图片中人脸的最大返回数量，取值范围1~30。若想返回多个人脸检测结果，请正确设置。默认按返回参数FaceProbabilityList进行降序排列。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '40',
            'minimum' => '1',
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '26B5334B-FD8A-5994-A1DA-3CA8F7B25676',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'FaceProbabilityList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '截图中包含人脸的概率，取值范围0~1。如有多个人脸，则依次返回。例如有两个人脸则返回`[face_prob1, face_prob2]`。图像中人脸区域分辨率越大，人脸越清晰，人脸正视，对应的该值越大。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.96',
                    ),
                  ),
                  'Pupils' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '左右两个瞳孔的中心点坐标和半径，每个人脸6个浮点数，顺序为`[left_iris_cenpt.x, left_iris_cenpt.y, left_iris_radius, right_iris_cenpt.x, right_iris_cenpt.y, right_iris_radis]`。',
                      'type' => 'number',
                      'format' => 'double',
                      'example' => '[417.83, 226.09, 8.15, 517.46, 231.53, 8.15]',
                    ),
                  ),
                  'FaceRectangles' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回人脸矩形框，分别是`[left, top, width, height]`。如有多个人脸，则依次顺延，返回矩形框。例如有两个人脸则返回`[left1, top1, width1, height1, left2, top2, width2, height2]`。
left-top: 表示以图片左上角为坐标原点，目标框所对应的左上角点位置（x,y），表示框的第一个点距离图片左边界x像素，距离上边界y个像素。
width-height：表示目标框的宽和高。
目标框面积为width*height，目标框右下角坐标为（left+width,top+height）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '[358, 141, 207, 255]',
                    ),
                  ),
                  'FaceCount' => 
                  array (
                    'description' => '检测出的人脸个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PoseList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回人脸姿态角度，格式为`[yaw, pitch, roll]`。如有多个人脸，则依次顺延。

- yaw为左右角度，取值范围-90~90。

- pitch为上下角度，取值范围-90~90。

- roll为平面旋转角度，取值范围-180~180。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[5.02, -3.95, 2.41]',
                    ),
                  ),
                  'Landmarks' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸特征点定位结果，每个人脸返回一组特征点位置，表示方式为`（x0, y0, x1, y1, ……）`；如有多个人脸，则依次顺延，返回定位浮点数。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[381.1, 201.72, 448.09, 205.17, 415.19, 191.2, 415.28, 201.64, 391.35, 196.03, 403.15, 191.57, 426.94, 194.07, 438.42, 197.65, ......]',
                    ),
                  ),
                  'LandmarkScore' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '关键点检测综合分值，取值范围(0, 100]，推荐采用85的阈值（您可以按实际应用场景判断设置阈值与否及相应阈值大小），该分值越大，对应脸的关键点的质量越好，越有利于识别，可用来筛选人脸样本。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '95.89',
                    ),
                  ),
                  'LandmarkCount' => 
                  array (
                    'description' => '人脸特征点数目，目前固定为105点。依次为：眉毛24点，眼睛32点，鼻子6点，嘴巴34点，外轮廓9点。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '105',
                  ),
                  'Qualities' => 
                  array (
                    'description' => '人脸质量情况，分数越高表示越有利于识别。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ScoreList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '质量综合分数，分数越高越有利于识别，取值范围\\(0,100]。如有多张人脸，则依次返回。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片综合质量越高，小于85代表图片综合质量越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.92',
                        ),
                      ),
                      'BlurList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '人脸模糊度对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片模糊的概率越低，小于85代表图片模糊的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.21',
                        ),
                      ),
                      'FnfList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '目标是否为人脸及其对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片是人脸的概率越高，小于85代表图片是人脸的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100',
                        ),
                      ),
                      'GlassList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '眼镜等上半脸遮挡对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表戴眼镜的概率越低，小于85代表戴眼镜的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100',
                        ),
                      ),
                      'IlluList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '光照对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片光照好的概率越高，小于85代表图片光照好的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100',
                        ),
                      ),
                      'MaskList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '口罩等下半脸遮挡对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表戴口罩概率越低，小于85代表戴口罩概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.53',
                        ),
                      ),
                      'NoiseList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '图片噪声对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片有噪声的概率越低，小于85代表图片有噪声的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.74',
                        ),
                      ),
                      'PoseList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '姿态对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表人脸姿态正面的概率越高，小于85代表人脸姿态正面的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"26B5334B-FD8A-5994-A1DA-3CA8F7B25676\\",\\n  \\"Data\\": {\\n    \\"FaceProbabilityList\\": [\\n      0.96\\n    ],\\n    \\"Pupils\\": [\\n      0\\n    ],\\n    \\"FaceRectangles\\": [\\n      0\\n    ],\\n    \\"FaceCount\\": 1,\\n    \\"PoseList\\": [\\n      0\\n    ],\\n    \\"Landmarks\\": [\\n      0\\n    ],\\n    \\"LandmarkScore\\": [\\n      95.89\\n    ],\\n    \\"LandmarkCount\\": 105,\\n    \\"Qualities\\": {\\n      \\"ScoreList\\": [\\n        99.92\\n      ],\\n      \\"BlurList\\": [\\n        99.21\\n      ],\\n      \\"FnfList\\": [\\n        100\\n      ],\\n      \\"GlassList\\": [\\n        100\\n      ],\\n      \\"IlluList\\": [\\n        100\\n      ],\\n      \\"MaskList\\": [\\n        99.53\\n      ],\\n      \\"NoiseList\\": [\\n        99.74\\n      ],\\n      \\"PoseList\\": [\\n        100\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectFaceResponse>\\n    <RequestId>26B5334B-FD8A-5994-A1DA-3CA8F7B25676</RequestId>\\n    <Data>\\n        <FaceProbabilityList>0.96</FaceProbabilityList>\\n        <Pupils>417.83</Pupils>\\n        <Pupils>226.09</Pupils>\\n        <Pupils>8.15</Pupils>\\n        <Pupils>517.46</Pupils>\\n        <Pupils>231.53</Pupils>\\n        <Pupils>8.15</Pupils>\\n        <FaceRectangles>358</FaceRectangles>\\n        <FaceRectangles>141</FaceRectangles>\\n        <FaceRectangles>207</FaceRectangles>\\n        <FaceRectangles>255</FaceRectangles>\\n        <FaceCount>1</FaceCount>\\n        <PoseList>5.02</PoseList>\\n        <PoseList>-3.95</PoseList>\\n        <PoseList>2.41</PoseList>\\n        <Landmarks>381.1</Landmarks>\\n        <Landmarks>201.72</Landmarks>\\n        <Landmarks>448.09</Landmarks>\\n        <Landmarks>205.17</Landmarks>\\n        <Landmarks>415.19</Landmarks>\\n        <Landmarks>191.2</Landmarks>\\n        <Landmarks>415.28</Landmarks>\\n        <Landmarks>201.64</Landmarks>\\n        <Landmarks>391.35</Landmarks>\\n        <Landmarks>196.03</Landmarks>\\n        <Landmarks>403.15</Landmarks>\\n        <Landmarks>191.57</Landmarks>\\n        <Landmarks>426.94</Landmarks>\\n        <Landmarks>194.07</Landmarks>\\n        <Landmarks>438.42</Landmarks>\\n        <Landmarks>197.65</Landmarks>\\n        <LandmarkScore>95.89</LandmarkScore>\\n        <LandmarkCount>105</LandmarkCount>\\n        <Qualities>\\n            <ScoreList>99.92</ScoreList>\\n            <BlurList>99.21</BlurList>\\n            <FnfList>100</FnfList>\\n            <GlassList>100</GlassList>\\n            <IlluList>100</IlluList>\\n            <MaskList>99.53</MaskList>\\n            <NoiseList>99.74</NoiseList>\\n            <PoseList>100</PoseList>\\n        </Qualities>\\n    </Data>\\n</DetectFaceResponse>","errorExample":""}]',
      'title' => '人脸检测定位',
      'summary' => '本文介绍人脸检测与五官定位DetectFace的语法及示例。',
      'description' => '## 功能描述
人脸检测与五官定位能力可以检测图片中的人脸并给出每张人脸精准定位和105个关键点信息。输出人脸数量、人脸矩形坐标、人脸姿态、双瞳孔中心坐标、人脸置信度列表等信息，支持人脸遮挡、光照、模糊度、姿态、噪声综合质量评分，支持检测含有多张人脸的照片多种姿态角度判断。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
人脸关键点检测，是后续识别、分析和特效应用的基础。它为人脸识别、表情分析、疲劳检测、三维人脸重建、人脸美颜、换脸等人脸相关应用提供了人脸精确信息。

- 互动娱乐应用：支持人脸五官及轮廓精准定位，实现动态贴纸、小视频玩法、特效相机等互动娱乐功能。
- 人脸美颜拍摄：高精度人脸关键点可进行美颜塑形，落地在图片、视频、互动直播等多种美颜场景。
- 面部定位分析：支持人脸轮廓精准定位和面部关键点分析，落地在智能医美、智能APP等高价值场景。

## 特色优势

- 高精度定位：支持眉毛、眼睛、瞳孔、鼻子、嘴等五官位置的精准定位。
- 适应能力强：不同照片、人脸尺寸多场景下，适应最大90度侧脸、平面360旋转人脸等情景。
- 支持多人脸：支持单图检测多个人脸，应对人脸编辑、换脸、姿态矫正等高精度人脸定位场景。
- 图片质量打分：支持人脸遮挡、光照、模糊度、姿态、噪声综合质量评分。
- 平台服务稳定：提供在高并发，大流量下的毫秒级识别响应和99.999%的可靠性保障。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectFace%2FDetectFace1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人脸检测与五官定位示例代码](~~465559~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过30 MB。
- 图像分辨率：大于32×32像素，小于8192×8192像素，人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸检测与五官定位的计费方式及报价，请参见[计费介绍](~~184049~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## 示意图

- 原图![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/epcj/DetectFace.png" width="400)

- 105关键点示意图![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/zetr/DetectFace105.png" width="400)

## SDK参考
阿里云视觉AI人脸人体类目下的人脸检测与五官定位能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人脸检测与五官定位示例代码](~~465559~~)。',
      'extraInfo' => '## 错误码
关于人脸检测与五官定位的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[106点人脸关键点-通用领域-2D](https://www.modelscope.cn/models/damo/cv_mobilenet_face-2d-keypoints_alignment/summary)和[全身关键点检测-通用领域-2D](https://www.modelscope.cn/models/damo/cv_hrnetw48_human-wholebody-keypoint_image/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DetectLivingFace' => 
    array (
      'summary' => '本文为您介绍人脸活体检测DetectLivingFace的语法及示例。',
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
            'description' => '输入人脸数据。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ImageURL' => 
                array (
                  'description' => '待检测的图像URL地址。JSON数组中的每个元素是一个图片检测任务结构体（image表）。最多支持10个元素，即同时最多对10张图片进行检测。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 对于该接口，系统会自动将OSS链接地址转成内网地址然后再下载文件，所以调用该接口并不会产生OSS流量计费。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectLivingFace/DetectLivingFace4.jpg',
                  'isFileTransferUrl' => true,
                ),
                'ImageData' => 
                array (
                  'description' => '图像Base64编码字符串。当与URL方式共存时，URL方式优先。
文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2****',
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '2EEA0396-BD84-5729-B8BD-D60776FCEF2B',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回的元素。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '对应请求中的图像URL地址。',
                          'type' => 'string',
                          'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectLivingFace/DetectLivingFace4.jpg',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '该检测任务的ID。',
                          'type' => 'string',
                          'example' => 'img1owc8WGskNm78OEAPJTZal-1****',
                        ),
                        'Results' => 
                        array (
                          'description' => '返回结果。调用成功时返回结果中包含一个或多个元素。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Suggestion' => 
                              array (
                                'description' => '建议您执行的操作，取值范围如下：
- pass：图片中的活体对象来自直接拍摄，无需进行其余操作。
- review：图片中的活体对象可能来自翻拍，建议您确认后再进行操作。
- block：图片中的活体对象大概率来自翻拍，建议您执行后续操作。
如果未检测到人脸，则Suggestion返回为block。
',
                                'type' => 'string',
                                'example' => 'review',
                              ),
                              'Frames' => 
                              array (
                                'description' => '**（该字段已废弃）**输入图像为长图（长宽比大于3:1）时，会把原图截成几张正常比例的图，frames保存从图像中裁剪出来的而且是翻拍命中的截图。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Url' => 
                                    array (
                                      'description' => '命中的截图。',
                                      'type' => 'string',
                                      'example' => 'http://aligreen-shanghai.oss-cn-shanghai.aliyuncs.com/prod/hammal/26210da42/28118541_TB1urBOQFXXXXbMXFXXXXXXXXXX-1442-257.png?Expires=1582703593&OSSAccessKeyId=H4sp5QfNbuDg****&Signature=%2B8iUkb5YjomYR8ujV2c8wMAavs****&x-oss-process=image%2Fcrop%2Cx_0%2Cw_288%2Fauto-orient%2C0',
                                    ),
                                    'Rate' => 
                                    array (
                                      'description' => '结果为该分类的概率，取值范围为\\[0.00,100.00]。取值越大，表示属于该分类的概率越大。
如果未检测到人脸，则Rate返回为100。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '84.83',
                                    ),
                                  ),
                                ),
                              ),
                              'Label' => 
                              array (
                                'description' => '检测结果的分类，取值包括：
- normal：活体照片
- liveness：翻拍照片

如果未检测到人脸，则Label返回为liveness。',
                                'type' => 'string',
                                'example' => 'liveness',
                              ),
                              'Rate' => 
                              array (
                                'description' => '结果为该分类的概率，取值范围为\\[0.00,100.00]。表示属于该分类的概率越大。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '76.22',
                              ),
                              'Rect' => 
                              array (
                                'description' => '人脸检测框信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Left' => 
                                  array (
                                    'description' => '检测框左上角的点x坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '20',
                                  ),
                                  'Top' => 
                                  array (
                                    'description' => '检测框左上角的点y坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '30',
                                  ),
                                  'Width' => 
                                  array (
                                    'description' => '检测框宽度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '50',
                                  ),
                                  'Height' => 
                                  array (
                                    'description' => '检测框高度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '60',
                                  ),
                                ),
                              ),
                              'MessageTips' => 
                              array (
                                'description' => '提示信息。
- 如输入模糊、遮挡或大角度等的人脸，则返回提示信息：`blurred, occluded or large angle face, please check.`  
- 如未检测到人脸，则返回提示信息：`no face detected, try again please.`',
                                'type' => 'string',
                                'example' => 'blurred, occluded or large angle face, please check.',
                              ),
                            ),
                          ),
                        ),
                        'FaceNumber' => 
                        array (
                          'description' => '单张图片检测到的人脸数量。
如果未检测到人脸，FaceNumber返回为0。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2EEA0396-BD84-5729-B8BD-D60776FCEF2B\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectLivingFace/DetectLivingFace4.jpg\\",\\n        \\"TaskId\\": \\"img1owc8WGskNm78OEAPJTZal-1****\\",\\n        \\"Results\\": [\\n          {\\n            \\"Suggestion\\": \\"review\\",\\n            \\"Frames\\": [\\n              {\\n                \\"Url\\": \\"http://aligreen-shanghai.oss-cn-shanghai.aliyuncs.com/prod/hammal/26210da42/28118541_TB1urBOQFXXXXbMXFXXXXXXXXXX-1442-257.png?Expires=1582703593&OSSAccessKeyId=H4sp5QfNbuDg****&Signature=%2B8iUkb5YjomYR8ujV2c8wMAavs****&x-oss-process=image%2Fcrop%2Cx_0%2Cw_288%2Fauto-orient%2C0\\",\\n                \\"Rate\\": 84.83\\n              }\\n            ],\\n            \\"Label\\": \\"liveness\\",\\n            \\"Rate\\": 76.22,\\n            \\"Rect\\": {\\n              \\"Left\\": 20,\\n              \\"Top\\": 30,\\n              \\"Width\\": 50,\\n              \\"Height\\": 60\\n            },\\n            \\"MessageTips\\": \\"blurred, occluded or large angle face, please check.\\"\\n          }\\n        ],\\n        \\"FaceNumber\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectLivingFaceResponse>\\n    <RequestId>2EEA0396-BD84-5729-B8BD-D60776FCEF2B</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectLivingFace/DetectLivingFace4.jpg</ImageURL>\\n            <TaskId>img1owc8WGskNm78OEAPJTZal-1****</TaskId>\\n            <Results>\\n                <Suggestion>review</Suggestion>\\n                <Frames>\\n                    <Url>http://aligreen-shanghai.oss-cn-shanghai.aliyuncs.com/prod/hammal/26210da42/28118541_TB1urBOQFXXXXbMXFXXXXXXXXXX-1442-257.png?Expires=1582703593&amp;OSSAccessKeyId=H4sp5QfNbuDg****&amp;Signature=%2B8iUkb5YjomYR8ujV2c8wMAavs****&amp;x-oss-process=image%2Fcrop%2Cx_0%2Cw_288%2Fauto-orient%2C0</Url>\\n                    <Rate>84.83</Rate>\\n                </Frames>\\n                <Label>liveness</Label>\\n                <Rate>76.22</Rate>\\n                <Rect>\\n                    <Left>20</Left>\\n                    <Top>30</Top>\\n                    <Width>50</Width>\\n                    <Height>60</Height>\\n                </Rect>\\n                <MessageTips>blurred, occluded or large angle face, please check.</MessageTips>\\n            </Results>\\n            <FaceNumber>1</FaceNumber>\\n        </Elements>\\n    </Data>\\n</DetectLivingFaceResponse>","errorExample":""}]',
      'title' => '人脸活体检测',
      'description' => '## 功能描述
人脸活体检测能力可以检测图片中的人脸是否为来自认证设备端的近距离裸拍活体人脸对象，可广泛应用在人脸实时采集场景，满足人脸注册认证的真实性和安全性要求。活体判断的前置条件是图像中有人脸。
能力范围来看：
1. 认证设备端是指借助近距离裸拍活体正面人脸用于认证、通行等服务场景的含RGB摄像头的硬件设备，常见的认证设备端有手机、门禁机、考勤机、PC等智能终端认证设备。
2. 裸拍活体正面人脸是指真人未经重度PS、风格化、人工合成等后处理的含正面人脸（非模糊、遮挡、大角度的正面人脸）的照片。常见的非真人有纸张人脸、电子屏人脸等；常见经过重度PS后处理的照片有摆拍街景照、摆拍人物风景照、摆拍证件照等；常见的其他后处理及生成照片有动漫人脸、绘画人脸等。

> - 在同时检测多个Task的情况下，将按照Task的个数进行累计计费。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectLivingFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 系统人脸登录防攻击：通过检测上传的图像是否为真人实拍，而非攻击及PS等后处理照片，以防止攻击者登录系统带来安全风险。
- 门禁闸机刷脸通行：面向人脸注册和认证环节设备端实时的活体检测，实现注册与认证过程中的真人校验，防止非法分子盗用、伪造他人身份打卡通行。
- 智慧酒店自助入住：在酒店前台自助办理入住场景中，运用活体检测技术实现无人监管场景下，住客非活体攻击（纸张人脸、电子屏人脸）的高效率拦截。
- 金融远程身份认证：面向投资理财、基金交易、保险理赔等金融业务的活体检测需求，高效率实现对翻拍、PS图片、打印图片、高仿模具等攻击的拦截，确保用户身份真实。

## 特色优势
- 基于图片中人像目标的高维度特征（风格化、摩尔纹、成像畸形等），判断目标对象是否为活体，有效防止屏幕二次翻拍等作弊攻击，支持单张或多张判断逻辑。
- 灵活支持RGB摄像头设备的实时活体检测，可有效防止翻拍、头模、打印图片等样本攻击。
- 简单易用：可直接调用的API接口，服务简单易用，易被集成，兼容性强。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectLivingFace?lang=JAVA&sdkStyle=dara&params=%7B%22Tasks%22%3A%5B%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectLivingFace%2FDetectLivingFace1.jpg%22%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人脸活体检测示例代码](~~465556~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
- 图像大小：不超过10 MB。如您有大图需求，请通过钉钉群（23109592）联系我们。
- 图像分辨率：建议大于256×256像素，像素过低可能会影响识别效果。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 检测说明

- 最长检测时间是5秒，如果在该时间内没有完成检测，系统会强制返回超时错误码。
- 图像下载时间限制为3秒，如果下载时间超过3秒，系统会返回下载超时。
- 图像检测接口响应时间依赖图像的下载时间。请保证被检测图像所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存。
- 最多可检测10张图像。
- 目前平台提供的活体检测为静默活体，即基于图片进行检测，暂不支持摇头，张嘴、眨眼等动作的活体检测。

## 计费说明
关于人脸活体检测的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectLivingFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸活体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人脸活体检测示例代码](~~465556~~)。',
      'extraInfo' => '## 活体阈值参考
| Label | Rate阈值   | 攻击拦截率 | 活体通过率 | 
| ---- | ------------ | ---- | ------------ |
|liveness     |50       |98.7%   |97.85%      |
|liveness     |30      |99.03%   |96.96%      |
|normal（推荐）     |80（推荐）       |99.17%   |96.39%      |
|normal     |85      |99.27%   |95.55%      |
|normal     |95       |99.53%   |92.24%      |

当Label是normal时，表示的是活体，Rate表示活体置信度，Rate取值范围是\\[80,100]。
当Label是liveness时，表示的是非活体，Rate表示非活体置信度，Rate取值范围是\\[20,100]。
关于以上数值的概念定义：
- 攻击拦截率：如98%，代表100次作弊假体攻击，会有98次被API识破拒绝。
- 活体通过率：如98%，代表100次真人请求，会有98次顺利通过活体验证。

> 内部实验数据测算，仅供参考。

## 错误码
关于人脸活体检测的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸活体检测模型-RGB](https://modelscope.cn/models/damo/cv_manual_face-liveness_flrgb/summary)、[人脸活体检测模型-IR](https://modelscope.cn/models/damo/cv_manual_face-liveness_flir/summary)、[静默人脸活体检测模型-炫彩](https://modelscope.cn/models/damo/cv_manual_face-liveness_flxc/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'FaceBeauty' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过4 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。
- 图像质量建议：适用于大部分肤质的人像图像，对于包含比较严重色斑、痤疮或低曝等场景的图像效果一般。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceBeauty/FaceBeauty4.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Sharp',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '锐化（清晰度）程度，取值范围0~1。越接近1锐化程度越高。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Smooth',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '平滑程度，取值范围0~1。越接近1平滑程度越高。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '0.1',
          ),
        ),
        3 => 
        array (
          'name' => 'White',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美白程度，取值范围0~1。越接近1美白程度越高。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '0.3',
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
                'example' => '35C284E1-C5F5-4E5E-B7AD-97BBF485CDC8',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '美颜后图像的URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty/2020_03_24/2bbbdb7907901412_facebeauty.jpg?Expires=1585277923&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=myOPfNQcRyijgrWBU%2BZ4dPuV5Q****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"35C284E1-C5F5-4E5E-B7AD-97BBF485CDC8\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty/2020_03_24/2bbbdb7907901412_facebeauty.jpg?Expires=1585277923&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=myOPfNQcRyijgrWBU%2BZ4dPuV5Q****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>35C284E1-C5F5-4E5E-B7AD-97BBF485CDC8</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-beauty/2020_03_24/2bbbdb7907901412_facebeauty.jpg?Expires=1585277923&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=myOPfNQcRyijgrWBU%2BZ4dPuV5Q****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '人脸美颜',
      'summary' => '本文介绍人脸美颜FaceBeauty的语法及示例。',
      'description' => '## 功能描述
人脸美颜能力可以对图像中的人脸进行美颜。产品支持以下功能：
- 人脸美颜：磨皮、美白、锐化（清晰度）、平滑度等。
- 参数调整：可自定义调整参数，提升个人形象。

关于该接口功能的示例图如下：
- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230202/pklu/FaceBeauty.png" width="300)

- 美白
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221101/lmdw/FaceBeautymeibai.jpg" width="300)

- 磨皮
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221101/isyv/FaceBeautymopi.jpg" width="300)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceBeauty)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 美颜相机：通过美颜相机拍摄的照片将自带美颜效果。
- 视频直播：在直播间的主播们，通过人脸美颜技术，让自己更有吸引力，有更多粉丝关注。  
- 短视频制作：用户自制的短视频，使用人脸美颜技术，可提升观看效果。
- 摄影后期制作：通过基于深度学习的人脸美颜技术，提升人像摄影作品的艺术效果。

## 特色优势

- 人脸美化：可对拍摄的照片磨皮、去黑眼圈和法令纹、美白等效果。
- 清晰度保持：可维持原片的清晰度。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/FaceBeauty?lang=JAVA&sdkStyle=dara&params={%22ImageURL%22:%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FFaceBeauty%2FFaceBeauty1.png%22,%22Sharp%22:0.3,%22Smooth%22:0.3,%22White%22:0.3}&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)


## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。
- 图像质量建议：适用于大部分肤质的人像图像，对于包含比较严重色斑、痤疮或低曝等场景的图像效果一般。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸美颜的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceBeauty)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸美颜能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸美颜的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[106点人脸关键点-通用领域-2D](https://www.modelscope.cn/models/damo/cv_mobilenet_face-2d-keypoints_alignment/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'FaceFilter' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过4 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceFilter/FaceFilter9.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '选择图片风格，包括：默认、向日葵、桔梗、垦丁、大理、丽江。',
            'type' => 'string',
            'required' => true,
            'example' => '垦丁',
          ),
        ),
        2 => 
        array (
          'name' => 'Strength',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '滤镜强度，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '0.8',
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
                'example' => 'EA20A53F-9523-4FE6-92D4-69F9E0A066AF',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '输出转换风格后的图片URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-filter/2020_03_24/bd6bb112b4ef3c8c_facebeauty.jpg?Expires=1585278860&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=UB3gBjSyTm0EZC0K881P883JpX****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EA20A53F-9523-4FE6-92D4-69F9E0A066AF\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-filter/2020_03_24/bd6bb112b4ef3c8c_facebeauty.jpg?Expires=1585278860&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=UB3gBjSyTm0EZC0K881P883JpX****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>EA20A53F-9523-4FE6-92D4-69F9E0A066AF</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-filter/2020_03_24/bd6bb112b4ef3c8c_facebeauty.jpg?Expires=1585278860&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=UB3gBjSyTm0EZC0K881P883JpX****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '人脸滤镜',
      'summary' => '本文介绍人脸滤镜FaceFilter的语法及示例。',
      'description' => '## 功能描述
人脸滤镜能力可以对图片添加滤镜效果，使图片的整体风格发生转变，可支持多种滤镜，并支持调节滤镜强度。
关于该接口功能的示例图如下：

- 输入原图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/vqbo/FaceFilter.png" width="500)
- 默认效果：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/pezp/FaceFiltermoren.png" width="500)
- 向日葵风格：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/jaqt/FaceFilterxrk.png" width="500)
- 桔梗风格：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/frlc/FaceFilterjiegeng.png" width="500)
- 垦丁风格：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/fjfi/FaceFilterkending.png" width="500)
- 大理风格：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/eset/FaceFilterdali.png" width="500)
- 丽江风格：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/yaxs/FaceFilterlijiang.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceFilter)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 摄影后期制作：添加AI滤镜，对输入图片进行统一的风格修改。
- 视频直播：对直播视频进行统一的风格处理，使得内容更有个性。

## 特色优势
模式众多：提供多种滤镜模式，可一键进行风格转化。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/FaceFilter?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FFaceFilter%2FFaceFilter1.png%22%2C%22ResourceType%22%3A%22%E5%9E%A6%E4%B8%81%22%2C%22Strength%22%3A0.8%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。


## 计费说明
人脸滤镜能力目前处于公测期，可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸滤镜能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸滤镜的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'FaceMakeup' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：PNG、JPG、JPEG、BMP、TIFF、WEBP。
- 图像大小：不超过4 MB。
- 图像分辨率：最大分辨率不超过2000×2000像素，最长边小于2000像素，建议为1080×1920像素。
- URL地址中不能包含中文字符。
- 图像质量建议：对于光线充足且均匀条件下的大部分肤质人像图像效果较佳，不适用于包含比较严重色斑、痤疮或低曝等场景的图像。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceMakeup/FaceMakeup8.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'MakeupType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美妆类型，当前支持whole（整妆）。',
            'type' => 'string',
            'required' => true,
            'example' => 'whole',
          ),
        ),
        2 => 
        array (
          'name' => 'ResourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美妆使用的风格，具体包括：0（whole）、1（基础妆）、2（少女妆）、3（活力妆）、4（优雅妆）、5（魅惑妆）、6（梅子妆）。',
            'type' => 'string',
            'required' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Strength',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美妆强度，取值范围0～1。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AAECB606-E752-4CEA-8EA5-6EBE942A7663',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '人脸美妆结果图像的URL地址。

> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-makeup/2020_03_24/c0f815f46b3df61e_facebeauty.jpg?Expires=1585279130&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=1QkDpev9B7ybzup1MN%2F72kzrKL****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AAECB606-E752-4CEA-8EA5-6EBE942A7663\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-makeup/2020_03_24/c0f815f46b3df61e_facebeauty.jpg?Expires=1585279130&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=1QkDpev9B7ybzup1MN%2F72kzrKL****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AAECB606-E752-4CEA-8EA5-6EBE942A7663</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-makeup/2020_03_24/c0f815f46b3df61e_facebeauty.jpg?Expires=1585279130&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=1QkDpev9B7ybzup1MN%2F72kzrKL****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '人脸美妆',
      'summary' => '本文介绍人脸美妆FaceMakeup的语法及示例。',
      'description' => '## 功能描述
人脸美妆能力可以模拟彩妆，通过添加彩妆素材，进一步提升人脸美化效果，本功能支持不同风格的妆容选择。
关于该接口功能的示例图如下：
- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/vqjl/FaceMakeup.png" width="500) 
- 整妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/qknj/FaceMakeupzz.jpg" width="500)

我们还提供了不同的整妆风格供您使用，如下所示。
- 基础妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/fcpa/FaceMakeupjcz.jpg" width="500)
- 少女妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/uwlc/FaceMakeupsnz.jpg" width="500)
- 活力妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/rbxn/FaceMakeuphuoli.jpg" width="500)
- 优雅妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/yokz/FaceMakeupyouya.jpg" width="500)
- 魅惑妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/xorg/FaceMakeupmeihuo.jpg" width="500)
- 梅子妆
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/sznd/FaceMakeupmeizi.jpg" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceMakeup)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 在线试妆：可用于在线试妆等虚拟试妆场景，用户可体验接近本人真实情况的上妆效果，降低商家的运营成本。
- 美颜修图：可用于手机自拍修图等人像美化场景，一键实现美妆效果，帮助用户快速打造精致五官，提升个人社交形象。
- 直播短视频：在直播间的主播们，通过人脸美妆技术实现一键上妆，吸引更多粉丝关注。 
- 短视频制作：用户自制的短视频，使用人脸美妆技术，提升观看效果。
- 相机等APP：用于相机和其他视频类APP中，提升视觉美感，增加趣味性。

## 特色优势
- 效果自然：适用不同表情、性别、年龄和姿态，美妆美颜效果处理自然，打造无暇妆容。
- 精准度高：实现照片人脸定位，妆容与面部五官的贴合度高。
- 不同类型：可选择不同类型的美妆类型，搭配个性化美妆素材，完成妆容。
- 彩妆效果：通过添加口红、高光、眼影、整妆等素材，进一步提升人脸美化效果。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/FaceMakeup?lang=JAVA&sdkStyle=dara&params={%22ImageURL%22:%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FFaceMakeup%2FFaceMakeup1.png%22,%22MakeupType%22:%22whole%22,%22Strength%22:1,%22ResourceType%22:%221%22}&tab=DEBUG)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：PNG、JPG、JPEG、BMP、TIFF、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：最大分辨率不超过2000×2000像素，最长边小于2000像素，建议为1080×1920像素。
- URL地址中不能包含中文字符。
- 图像质量建议：对于光线充足且均匀条件下的大部分肤质人像图像效果较佳，不适用于包含比较严重色斑、痤疮或低曝等场景的图像。

## 计费说明
关于人脸美妆的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceMakeup)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸美妆能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸美妆的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[106点人脸关键点-通用领域-2D](https://www.modelscope.cn/models/damo/cv_mobilenet_face-2d-keypoints_alignment/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'FaceTidyup' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过4 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。
- 图像质量建议：输入图像尽量保持光线充足且均匀，人脸完整较少遮挡，角度\\[raw, yaw, pitch]小于60度为佳。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/FaceTidyup/FaceTidyup5.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ShapeType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '表示美型部位，包括：0（颧骨）、1（削脸）、2（瘦脸）、3（脸长）、4（下巴缩短）、5（下巴拉长）、6（瘦下巴）、7（瘦下颌）、8（大眼）、9（眼角1）、10（眼距）、11（拉宽眼距）、12（眼角2）、13（眼睛高度）、14（瘦鼻）、15（鼻翼）、16（鼻长）、17（鼻头长）、18（唇宽）、19（嘴唇大小）、20（唇高）、21（人中）。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Strength',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美型强度，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8F3BF64D-4FDF-4AAF-9B34-11B4EF4CE815',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '人脸美型结果图片URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-shape/2020_03_24/7cb93b25ac5cbbb4_facetidy.jpg?Expires=1585280344&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=RIPIlTZ2GNmdLyACGWz6wUzJxN****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8F3BF64D-4FDF-4AAF-9B34-11B4EF4CE815\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-shape/2020_03_24/7cb93b25ac5cbbb4_facetidy.jpg?Expires=1585280344&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=RIPIlTZ2GNmdLyACGWz6wUzJxN****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8F3BF64D-4FDF-4AAF-9B34-11B4EF4CE815</RequestId>\\n<Data>\\n    <ImageURL>http://algo-app-taobao-mm-cn-shanghai-prod.oss-cn-shanghai.aliyuncs.com/pixelai-portrait-shape/2020_03_24/7cb93b25ac5cbbb4_facetidy.jpg?Expires=1585280344&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=RIPIlTZ2GNmdLyACGWz6wUzJxN****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '人脸美型',
      'summary' => '文本介绍人脸美型。',
      'description' => '## 功能描述
人脸美型能力可以对人脸的轮廓和五官进行调整。 您也可以通过手动调整美型强度，进一步对人脸进行精细化调整。
关于该接口功能的示例图如下：
- 输入原图
![原图](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/xhil/FaceTidyup.png" width="400)
- 大眼
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/hdvf/FaceTidyupdayan.jpg" width="400)
- 瘦鼻
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/dtpn/FaceTidyupshoubi.jpg" width="400)
- 瘦脸
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/qlvk/FaceTidyupshoulian.jpg" width="400)
- 瘦下巴
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230202/patm/FaceTidyupsxb.jpg" width="400)
- 嘴型
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/rddp/FaceTidyupchunxing.jpg" width="400)

当前支持的精细调整如下。
| 脸型  |  眼睛 |  鼻子 |  嘴型 | 其他 |
| ------------ | ------------ | ------------ | ------------ | --------- |
| 削脸 |  大眼 | 瘦鼻  | 唇宽  | 颧骨 |
| 瘦脸 |  眼距 | 鼻翼  | 唇高  | 下颌 |
| 脸长 |  眼角 | 鼻长  | 大小  | 人中 |
| 无 |  眼高 | 鼻头  |  无 | 下巴 |

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=FaceTidyup)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 美颜相机：对拍摄的照片进行大眼、瘦脸、瘦下巴、嘴型、瘦鼻等效果处理，提升人物的社交形象。
- 直播短视频：在直播间的主播们，通过人脸美型技术，让自己更有吸引力，有更多粉丝关注。 
- 短视频制作：用户自制的短视频，使用人脸美型技术，提升观看效果。
- 相机等APP：用于相机和其他视频类APP中，提升视觉美感，增加趣味性。

## 特色优势
- 支持多种美型：支持大眼、瘦脸、瘦下巴、嘴型、瘦鼻等多种效果。
- 自定义调整：支持自定义调整参数，帮助提升个人形象。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/FaceTidyup?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FFaceTidyup%2FFaceTidyup1.png%22%2C%22ShapeType%22%3A1%2C%22Strength%22%3A1%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：分辨率大于10×10像素，分辨率小于2000x2000像素，最长边小于2000像素。
- URL地址中不能包含中文字符。
- 图像质量建议：输入图像尽量保持光线充足且均匀，人脸完整较少遮挡，角度\\[raw, yaw, pitch]小于60度为佳。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
人脸美型能力目前处于公测期，可免费调用。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸美型能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸美型的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[106点人脸关键点-通用领域-2D](https://www.modelscope.cn/models/damo/cv_mobilenet_face-2d-keypoints_alignment/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'EnhanceFace' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：

- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2048×2048像素（最长边小于等于2047像素），人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
- 输入图像需包含人脸。
- 输入图像中人脸数量不宜超过10个，否则只处理面积最大的前10个人脸。
- 输入图像中的人脸不宜存在划痕、破损等，算法暂不支持此类修复。
- 输入图像中的人脸质量不宜过于清晰或者分辨率过高，否则可能导致反向降质。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/EnhanceFace/EnhanceFace1.png',
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
                'example' => '8B031473-6773-4A4C-AF33-A233758E6E98',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '人脸修复增强后的结果图URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-enhancement/2021-11-30/8e34b61c-abcf-4708-9d9d-6501968ee806/20211130_080644126523_47ct9w3pgh.jpg?Expires=1638261404&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2wPdcuCmr%2F86WpBL3HQJw5uCFl****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8B031473-6773-4A4C-AF33-A233758E6E98\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-enhancement/2021-11-30/8e34b61c-abcf-4708-9d9d-6501968ee806/20211130_080644126523_47ct9w3pgh.jpg?Expires=1638261404&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2wPdcuCmr%2F86WpBL3HQJw5uCFl****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EnhanceFaceResponse>\\n    <RequestId>8B031473-6773-4A4C-AF33-A233758E6E98</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-vd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-enhancement/2021-11-30/8e34b61c-abcf-4708-9d9d-6501968ee806/20211130_080644126523_47ct9w3pgh.jpg?Expires=1638261404&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=2wPdcuCmr%2F86WpBL3HQJw5uCFl****</ImageURL>\\n    </Data>\\n</EnhanceFaceResponse>","errorExample":""}]',
      'title' => '人脸修复增强',
      'summary' => '本文介绍人脸修复增强EnhanceFace的语法及示例。',
      'description' => '## 功能描述
人脸修复增强能力可以对输入图像中的人脸进行裁剪、对齐、细节增强，最后再融合回原图。
关于该接口功能的示例图如下：
- 输入原图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/gsfa/EnhanceFace.jpg" width="300)
- 输出增强后示意图：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/nbbg/EnhanceFacezengqiang.png" width="300)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=EnhanceFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 拍摄素材增强：对拍摄时因曝光不足、对焦不准、手抖模糊的照片，通过人脸修复增强技术，可以弥补拍摄时的不足，对照片进行修复。
- 老照片修复：对早期拍摄的分辨率低或不清晰的人像照片，进行修复增强，可以在保留老照片质感的同时提升人像清晰度。

## 特色优势

- 细节增强：可增强原图细节，在原片质量不足的情况下，依然能恢复出部分细节，提升照片质量。
- 人像一致性：在提升细节的同时，保留与原始人像的一致性与真实感。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/EnhanceFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FEnhanceFace%2FEnhanceFace1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2048×2048像素（最长边小于等于2047像素），人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
- 输入图像需包含人脸。
- 输入图像中人脸数量不宜超过10个，否则只处理面积最大的前10个人脸。
- 输入图像中的人脸不宜存在划痕、破损等，算法暂不支持此类修复。
- 输入图像中的人脸质量不宜过于清晰或者分辨率过高，否则可能导致反向降质。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸修复增强的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=EnhanceFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸修复增强能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人脸修复增强的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'VerifyFaceMask' => 
    array (
      'summary' => '本文介绍口罩人脸比对VerifyFaceMask语法及示例。',
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
            'description' => '待检测图像A的URL地址。当前仅支持上海地域的OSS链接，如何生成URL请参见[生成URL](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ceshi/VerifyFaceMaskA.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'RefUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待检测的图像B的URL地址。当前仅支持上海地域的OSS链接，如何生成URL请参见[生成URL](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/ceshi/VerifyFaceMaskB.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ImageData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待检测图像A的Base64编码字符串。当与URL方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9Wb****',
            'format' => 'byte',
          ),
        ),
        3 => 
        array (
          'name' => 'RefData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待检测图像B的Base64编码字符串。当与URL方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9WbA****',
            'format' => 'byte',
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
                'example' => '044386BA-271C-4DAD-9E08-581A685FB984',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Thresholds' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '误识率在10e-3，10e-4，10e-5时对应的置信度分类阈值。',
                      'type' => 'number',
                      'example' => '[61,69,75]',
                      'format' => 'float',
                    ),
                  ),
                  'Mask' => 
                  array (
                    'description' => '图像1中的人脸是否带口罩。取值如下：

- 0：非人脸。

- 1：没戴口罩。

- 2：正确戴口罩。

- 3：错误戴口罩。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Confidence' => 
                  array (
                    'description' => '两种图片中人脸为同一个人的置信度。取值范围0~100。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '13.484533309936523',
                  ),
                  'Rectangle' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图像1的人脸检测框。格式为`[left, top, right, bottom]`。',
                      'type' => 'integer',
                      'example' => '[542,200,229,296]',
                      'format' => 'int32',
                    ),
                  ),
                  'RectangleRef' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图像2的人脸检测框。格式为`[left, top, right, bottom]`。',
                      'type' => 'integer',
                      'example' => '[534,70,261,338]',
                      'format' => 'int32',
                    ),
                  ),
                  'MaskRef' => 
                  array (
                    'description' => '图像2中的人脸是否带口罩。取值如下：

- 0：非人脸。

- 1：没戴口罩。

- 2：正确戴口罩。

- 3：错误戴口罩。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"044386BA-271C-4DAD-9E08-581A685FB984\\",\\n  \\"Data\\": {\\n    \\"Mask\\": 2,\\n    \\"Confidence\\": 13.484533309936523,\\n    \\"MaskRef\\": 2,\\n    \\"Thresholds\\": [\\n      \\"[61,69,75]\\"\\n    ],\\n    \\"Rectangle\\": [\\n      \\"[542,200,229,296]\\"\\n    ],\\n    \\"RectangleRef\\": [\\n      \\"[534,70,261,338]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>044386BA-271C-4DAD-9E08-581A685FB984</RequestId>\\n<Data>\\n    <Thresholds>61</Thresholds>\\n    <Thresholds>69</Thresholds>\\n    <Thresholds>75</Thresholds>\\n    <Confidence>13.484533309936523</Confidence>\\n    <Mask>2</Mask>\\n    <Rectangle>542</Rectangle>\\n    <Rectangle>200</Rectangle>\\n    <Rectangle>229</Rectangle>\\n    <Rectangle>296</Rectangle>\\n    <RectangleRef>534</RectangleRef>\\n    <RectangleRef>70</RectangleRef>\\n    <RectangleRef>261</RectangleRef>\\n    <RectangleRef>338</RectangleRef>\\n    <MaskRef>2</MaskRef>\\n</Data>","errorExample":""}]',
      'title' => '口罩人脸比对',
      'description' => '## 功能描述
口罩人脸比对能力用于检测两张人脸（图像中人脸可能带口罩）是否属于同一个人脸。

## 应用场景
疫情防控期间的身份确认：在疫情防控期间，通过对已授权的佩戴口罩的照片识别，比对识别人员身份，可免接触免摘口罩安全通行。

## 特色优势
适应口罩遮挡：在佩戴口罩的情况下，依然识别出是否为同一人。

## 前提条件
请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。


## 输入限制

- 图像格式：JPEG、JPG、BMP、PNG。

- 图像大小：不超过3M。

- 图像分辨率：大于32×32像素，小于2048×2048像素，人脸占比不低于64×64像素。

- URL地址中不能包含中文字符。

- 可使用URL与Base64编码字符串混合输入。例如：输入ImageURL和RefData的值，不输入RefUrl和ImageData的值。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
关于口罩人脸比对的错误码，详情请参见[常见错误码](~~146756~~)。

## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见[SDK总览](~~145033~~)下载安装。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeFace' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> - 推荐新版本调用方式为只输入图片，当只传入ImageURL的时候所有接口数据都会返回，新版本支持返回最多10张人脸的数据。

- 兼容老版本接口对布尔值入参和MaxFaceNumber的支持逻辑，当传入任意一个支持的布尔值入参或MaxFaceNumber以控制返回的数据时，只会返回设置了布尔值入参且为true的数据，这种调用方式不返回布尔值入参支持范围外的数据（Landmarks，LandmarkCount，PoseList，Pupils）。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeFace/RecognizeFace1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Age',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸年龄结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        2 => 
        array (
          'name' => 'Gender',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸性别结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'Hat',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸帽子结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'Glass',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸眼镜结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        5 => 
        array (
          'name' => 'Beauty',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸颜值结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        6 => 
        array (
          'name' => 'Expression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸表情结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'Mask',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸口罩结果，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        8 => 
        array (
          'name' => 'Quality',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来控制是否需要返回人脸质量，取值true或false，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        9 => 
        array (
          'name' => 'MaxFaceNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '兼容老版本接口，用来设置图片中人脸的最大返回数量，取值范围1~10，默认为1。若想返回多个人脸检测结果，请正确设置。默认按返回参数FaceProbabilityList进行降序排列。',
            'type' => 'integer',
            'format' => 'int64',
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8251C88E-8273-4DBF-94FB-A6BCB268CEA2',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Pupils' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '左右两个瞳孔的中心点坐标和半径，每个人脸6个浮点数，顺序为`[left_iris_cenpt.x, left_iris_cenpt.y, left_iris_radius, right_iris_cenpt.x, right_iris_cenpt.y, right_iris_radis]`。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[397.06,183.99,7.87,487.49,173.85,7.87]',
                    ),
                  ),
                  'GenderList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '识别到的人脸性别。如有多个人脸，则依次返回。

- 0：女性

- 1：男性

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                  'Expressions' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸识别的表情结果。包括：

- 0：中性

- 1：微笑',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                  'DenseFeatures' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸识别返回的特征。如有多个人脸，则依次返回。

> 由于版本升级，该字段废弃，返回数据无实际意义。',
                      'type' => 'string',
                      'example' => '[-0.04283177852630615, 0.01496131718158722, 0.08304227143526077, -0.006072732154279947, -0.012721054255962372, -0.024241730570793152, -0.03138406202197075, 0.006191537249833345, 0.017898650839924812, -0.03185232728719711, -0.02717948891222477, 0.028409384191036224, -0.03557640686631203, -0.02255111373960972, -0.030578967183828354, 0.011586467735469341, -0.005520580802112818, -0.0061850580386817455, -0.023915085941553116, 0.014204374514520168]',
                    ),
                  ),
                  'FaceCount' => 
                  array (
                    'description' => '检测出来的人脸个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Landmarks' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸的特征点定位结果，每个人脸返回一组特征点位置，表示方式为`（x0, y0, x1, y1, ……）`。如有多个人脸，则依次返回，返回定位浮点数。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[371.31,170.54,421.14,162.72,395.33,156.36,396.06,167.71,377.92,164.47,386.19,158.26,404.89,156.61,413.89,157.87,378.82,171,387.24,168.73,404.84,167.34,413.57,167.26,458.27,159.5,521.24,165.59,490.58,......]',
                    ),
                  ),
                  'LandmarkCount' => 
                  array (
                    'description' => '人脸检测的特征点数目，目前固定为105点。依次为：眉毛24点，眼睛32点，鼻子6点，嘴巴34点，外轮廓9点。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '105',
                  ),
                  'Qualities' => 
                  array (
                    'description' => '人脸质量情况，分数越高表示越有利于识别。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ScoreList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '质量综合分数，分数越高越有利于识别，取值范围\\(0,100]。如有多张人脸，则依次返回。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片综合质量越高，小于85代表图片综合质量越低。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '87.47',
                        ),
                      ),
                      'BlurList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '人脸模糊度对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片模糊的概率越低，小于85代表图片模糊的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.99',
                        ),
                      ),
                      'FnfList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '目标是否为人脸及其对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片是人脸的概率越高，小于85代表图片不是人脸的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '100',
                        ),
                      ),
                      'GlassList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '眼镜等上半脸遮挡对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表戴眼镜的概率越低，小于85代表戴眼镜的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '97.59',
                        ),
                      ),
                      'IlluList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '光照对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片光照好的概率越高，小于85代表图片光照好的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.97',
                        ),
                      ),
                      'MaskList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '口罩等下半脸遮挡对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表戴口罩概率越低，小于85代表戴口罩概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '93.33',
                        ),
                      ),
                      'NoiseList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '图片噪声对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表图片有噪声的概率越低，小于85代表图片有噪声的概率越高。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.73',
                        ),
                      ),
                      'PoseList' => 
                      array (
                        'description' => '1',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '姿态对识别的影响分数，分数越高越有利于识别，取值范围\\(0,100]。如有多个人脸，则依次顺延。在识别时，推荐设置阈值大于等于85（您可以按实际应用场景判断设置阈值与否及相应阈值大小），大于85代表人脸姿态正面的概率越高，小于85代表人脸姿态正面的概率越低。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '11.57',
                        ),
                      ),
                    ),
                  ),
                  'BeautyList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '颜值分数，分值越高颜值越高，取值范围\\(0-100]。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '48',
                    ),
                  ),
                  'HatList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸是否佩戴帽子。

- 0：无帽子

- 1：有帽子',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                  'FaceProbabilityList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回人脸检测的概率，取值范围0~1。如有多个人脸，则依次返回。例如有两个人脸则返回`[face_prob1, face_prob2]`。',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '0.95',
                    ),
                  ),
                  'Glasses' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸是否佩戴眼镜。

- 0：不戴眼镜

- 1：佩戴普通眼镜

- 2：佩戴墨镜',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                  ),
                  'FaceRectangles' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回人脸矩形框，分别是`[left, top, width, height]`。如有多个人脸，则依次顺延，返回矩形框。例如有两个人脸则返回`[left1, top1, width1, height1, left2, top2, width2, height2]`。
left-top: 表示以图片左上角为坐标原点，目标框所对应的左上角点位置（x,y），表示框的第一个点距离图片左边界x像素，距离上边界y个像素。
width-height：表示目标框的宽和高。
目标框面积为width*height，目标框右下角坐标为（left+width,top+height）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '[356,84,211,278]',
                    ),
                  ),
                  'PoseList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回人脸姿态，格式为`[yaw, pitch, roll]`。如有多个人脸，则依次返回。

- yaw为左右角度，取值范围-90~90。

- pitch为上下角度，取值范围-90~90。

- roll为平面旋转角度，取值范围-180~180。

',
                      'type' => 'number',
                      'format' => 'float',
                      'example' => '[-12.7,7.48,0.12]',
                    ),
                  ),
                  'AgeList' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片中人脸年龄，取值范围0~100。如有多个人脸，依次返回多个人脸的年龄。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '57',
                    ),
                  ),
                  'DenseFeatureLength' => 
                  array (
                    'description' => '人脸识别返回的特征维度，目前固定为1024。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1024',
                  ),
                  'Masks' => 
                  array (
                    'description' => '1',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '人脸是否佩戴口罩。

- 0：未佩戴口罩
- 1：佩戴口罩
- 2：未正确佩戴口罩',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8251C88E-8273-4DBF-94FB-A6BCB268CEA2\\",\\n  \\"Data\\": {\\n    \\"Pupils\\": [\\n      0\\n    ],\\n    \\"GenderList\\": [\\n      1\\n    ],\\n    \\"Expressions\\": [\\n      0\\n    ],\\n    \\"DenseFeatures\\": [\\n      \\"[-0.04283177852630615, 0.01496131718158722, 0.08304227143526077, -0.006072732154279947, -0.012721054255962372, -0.024241730570793152, -0.03138406202197075, 0.006191537249833345, 0.017898650839924812, -0.03185232728719711, -0.02717948891222477, 0.028409384191036224, -0.03557640686631203, -0.02255111373960972, -0.030578967183828354, 0.011586467735469341, -0.005520580802112818, -0.0061850580386817455, -0.023915085941553116, 0.014204374514520168]\\"\\n    ],\\n    \\"FaceCount\\": 1,\\n    \\"Landmarks\\": [\\n      0\\n    ],\\n    \\"LandmarkCount\\": 105,\\n    \\"Qualities\\": {\\n      \\"ScoreList\\": [\\n        87.47\\n      ],\\n      \\"BlurList\\": [\\n        99.99\\n      ],\\n      \\"FnfList\\": [\\n        100\\n      ],\\n      \\"GlassList\\": [\\n        97.59\\n      ],\\n      \\"IlluList\\": [\\n        99.97\\n      ],\\n      \\"MaskList\\": [\\n        93.33\\n      ],\\n      \\"NoiseList\\": [\\n        99.73\\n      ],\\n      \\"PoseList\\": [\\n        11.57\\n      ]\\n    },\\n    \\"BeautyList\\": [\\n      48\\n    ],\\n    \\"HatList\\": [\\n      0\\n    ],\\n    \\"FaceProbabilityList\\": [\\n      0.95\\n    ],\\n    \\"Glasses\\": [\\n      1\\n    ],\\n    \\"FaceRectangles\\": [\\n      0\\n    ],\\n    \\"PoseList\\": [\\n      0\\n    ],\\n    \\"AgeList\\": [\\n      57\\n    ],\\n    \\"DenseFeatureLength\\": 1024,\\n    \\"Masks\\": [\\n      0\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeFaceResponse>\\n    <RequestId>8251C88E-8273-4DBF-94FB-A6BCB268CEA2</RequestId>\\n    <Data>\\n        <Pupils>397.06</Pupils>\\n        <Pupils>183.99</Pupils>\\n        <Pupils>7.87</Pupils>\\n        <Pupils>487.49</Pupils>\\n        <Pupils>173.85</Pupils>\\n        <Pupils>7.87</Pupils>\\n        <GenderList>1</GenderList>\\n        <Expressions>0</Expressions>\\n        <DenseFeatures>[-0.04283177852630615, 0.01496131718158722, 0.08304227143526077, -0.006072732154279947, -0.012721054255962372, -0.024241730570793152, -0.03138406202197075, 0.006191537249833345, 0.017898650839924812, -0.03185232728719711, -0.02717948891222477, 0.028409384191036224, -0.03557640686631203, -0.02255111373960972, -0.030578967183828354, 0.011586467735469341, -0.005520580802112818, -0.0061850580386817455, -0.023915085941553116, 0.014204374514520168]</DenseFeatures>\\n        <FaceCount>1</FaceCount>\\n        <Landmarks>371.31</Landmarks>\\n        <Landmarks>170.54</Landmarks>\\n        <Landmarks>421.14</Landmarks>\\n        <Landmarks>162.72</Landmarks>\\n        <Landmarks>395.33</Landmarks>\\n        <Landmarks>156.36</Landmarks>\\n        <Landmarks>396.06</Landmarks>\\n        <Landmarks>167.71</Landmarks>\\n        <Landmarks>377.92</Landmarks>\\n        <Landmarks>164.47</Landmarks>\\n        <Landmarks>386.19</Landmarks>\\n        <Landmarks>158.26</Landmarks>\\n        <Landmarks>404.89</Landmarks>\\n        <Landmarks>156.61</Landmarks>\\n        <Landmarks>413.89</Landmarks>\\n        <Landmarks>157.87</Landmarks>\\n        <Landmarks>378.82</Landmarks>\\n        <Landmarks>171</Landmarks>\\n        <Landmarks>387.24</Landmarks>\\n        <Landmarks>168.73</Landmarks>\\n        <Landmarks>404.84</Landmarks>\\n        <Landmarks>167.34</Landmarks>\\n        <Landmarks>413.57</Landmarks>\\n        <Landmarks>167.26</Landmarks>\\n        <Landmarks>458.27</Landmarks>\\n        <Landmarks>159.5</Landmarks>\\n        <Landmarks>521.24</Landmarks>\\n        <Landmarks>165.59</Landmarks>\\n        <Landmarks>490.58</Landmarks>\\n        <Landmarks>150.77</Landmarks>\\n        <Landmarks>490.23</Landmarks>\\n        <Landmarks>162.28</Landmarks>\\n        <Landmarks>467.51</Landmarks>\\n        <Landmarks>153.1</Landmarks>\\n        <Landmarks>479.01</Landmarks>\\n        <Landmarks>151.32</Landmarks>\\n        <Landmarks>502.02</Landmarks>\\n        <Landmarks>153.2</Landmarks>\\n        <Landmarks>513.06</Landmarks>\\n        <Landmarks>159.78</Landmarks>\\n        <Landmarks>468</Landmarks>\\n        <Landmarks>163.52</Landmarks>\\n        <Landmarks>478.98</Landmarks>\\n        <Landmarks>162.32</Landmarks>\\n        <Landmarks>501.41</Landmarks>\\n        <Landmarks>163.93</Landmarks>\\n        <Landmarks>512.07</Landmarks>\\n        <Landmarks>166.6</Landmarks>\\n        <Landmarks>381.98</Landmarks>\\n        <Landmarks>187.97</Landmarks>\\n        <Landmarks>419.4</Landmarks>\\n        <Landmarks>184.68</Landmarks>\\n        <Landmarks>386.29</Landmarks>\\n        <Landmarks>184.05</Landmarks>\\n        <Landmarks>389.33</Landmarks>\\n        <Landmarks>180.31</Landmarks>\\n        <Landmarks>394.56</Landmarks>\\n        <Landmarks>178.97</Landmarks>\\n        <Landmarks>398.93</Landmarks>\\n        <Landmarks>176.7</Landmarks>\\n        <Landmarks>404.67</Landmarks>\\n        <Landmarks>178.01</Landmarks>\\n        <Landmarks>410.16</Landmarks>\\n        <Landmarks>178.29</Landmarks>\\n        <Landmarks>414.64</Landmarks>\\n        <Landmarks>181.61</Landmarks>\\n        <Landmarks>386.62</Landmarks>\\n        <Landmarks>188.63</Landmarks>\\n        <Landmarks>390.22</Landmarks>\\n        <Landmarks>189.61</Landmarks>\\n        <Landmarks>395.06</Landmarks>\\n        <Landmarks>189.65</Landmarks>\\n        <Landmarks>399.35</Landmarks>\\n        <Landmarks>189.78</Landmarks>\\n        <Landmarks>404.47</Landmarks>\\n        <Landmarks>188.86</Landmarks>\\n        <Landmarks>409.6</Landmarks>\\n        <Landmarks>187.94</Landmarks>\\n        <Landmarks>414.35</Landmarks>\\n        <Landmarks>186.47</Landmarks>\\n        <Landmarks>467.88</Landmarks>\\n        <Landmarks>180.89</Landmarks>\\n        <Landmarks>509.45</Landmarks>\\n        <Landmarks>179.81</Landmarks>\\n        <Landmarks>472.7</Landmarks>\\n        <Landmarks>177.13</Landmarks>\\n        <Landmarks>476.94</Landmarks>\\n        <Landmarks>173.17</Landmarks>\\n        <Landmarks>483.16</Landmarks>\\n        <Landmarks>172.02</Landmarks>\\n        <Landmarks>488.5</Landmarks>\\n        <Landmarks>170.41</Landmarks>\\n        <Landmarks>494.14</Landmarks>\\n        <Landmarks>172.17</Landmarks>\\n        <Landmarks>499.85</Landmarks>\\n        <Landmarks>173.15</Landmarks>\\n        <Landmarks>504.05</Landmarks>\\n        <Landmarks>176.58</Landmarks>\\n        <Landmarks>473.23</Landmarks>\\n        <Landmarks>182.31</Landmarks>\\n        <Landmarks>478.06</Landmarks>\\n        <Landmarks>183.11</Landmarks>\\n        <Landmarks>483.77</Landmarks>\\n        <Landmarks>183.5</Landmarks>\\n        <Landmarks>488.64</Landmarks>\\n        <Landmarks>183.77</Landmarks>\\n        <Landmarks>493.94</Landmarks>\\n        <Landmarks>183.26</Landmarks>\\n        <Landmarks>499.41</Landmarks>\\n        <Landmarks>182.57</Landmarks>\\n        <Landmarks>503.69</Landmarks>\\n        <Landmarks>181.14</Landmarks>\\n        <Landmarks>437.26</Landmarks>\\n        <Landmarks>181.67</Landmarks>\\n        <Landmarks>430.77</Landmarks>\\n        <Landmarks>225.48</Landmarks>\\n        <Landmarks>434.38</Landmarks>\\n        <Landmarks>203.34</Landmarks>\\n        <Landmarks>435.09</Landmarks>\\n        <Landmarks>245.37</Landmarks>\\n        <Landmarks>414.99</Landmarks>\\n        <Landmarks>243.56</Landmarks>\\n        <Landmarks>463.03</Landmarks>\\n        <Landmarks>241.47</Landmarks>\\n        <Landmarks>402.97</Landmarks>\\n        <Landmarks>282.43</Landmarks>\\n        <Landmarks>487.32</Landmarks>\\n        <Landmarks>279.44</Landmarks>\\n        <Landmarks>404.76</Landmarks>\\n        <Landmarks>282.21</Landmarks>\\n        <Landmarks>484.51</Landmarks>\\n        <Landmarks>279.63</Landmarks>\\n        <Landmarks>436.81</Landmarks>\\n        <Landmarks>269.19</Landmarks>\\n        <Landmarks>428.83</Landmarks>\\n        <Landmarks>269.46</Landmarks>\\n        <Landmarks>444.9</Landmarks>\\n        <Landmarks>269.87</Landmarks>\\n        <Landmarks>414.07</Landmarks>\\n        <Landmarks>273.42</Landmarks>\\n        <Landmarks>466.73</Landmarks>\\n        <Landmarks>272.4</Landmarks>\\n        <Landmarks>407.94</Landmarks>\\n        <Landmarks>277.81</Landmarks>\\n        <Landmarks>421.38</Landmarks>\\n        <Landmarks>271.38</Landmarks>\\n        <Landmarks>455.7</Landmarks>\\n        <Landmarks>271</Landmarks>\\n        <Landmarks>477.47</Landmarks>\\n        <Landmarks>276.08</Landmarks>\\n        <Landmarks>437.71</Landmarks>\\n        <Landmarks>290.09</Landmarks>\\n        <Landmarks>417.1</Landmarks>\\n        <Landmarks>288.03</Landmarks>\\n        <Landmarks>464.19</Landmarks>\\n        <Landmarks>286.36</Landmarks>\\n        <Landmarks>409.84</Landmarks>\\n        <Landmarks>284.75</Landmarks>\\n        <Landmarks>427.92</Landmarks>\\n        <Landmarks>288.61</Landmarks>\\n        <Landmarks>450.74</Landmarks>\\n        <Landmarks>287.81</Landmarks>\\n        <Landmarks>475.9</Landmarks>\\n        <Landmarks>282.68</Landmarks>\\n        <Landmarks>437.36</Landmarks>\\n        <Landmarks>278.04</Landmarks>\\n        <Landmarks>437.64</Landmarks>\\n        <Landmarks>277.63</Landmarks>\\n        <Landmarks>420.34</Landmarks>\\n        <Landmarks>278.65</Landmarks>\\n        <Landmarks>420.04</Landmarks>\\n        <Landmarks>278.69</Landmarks>\\n        <Landmarks>460.92</Landmarks>\\n        <Landmarks>277.64</Landmarks>\\n        <Landmarks>461.01</Landmarks>\\n        <Landmarks>277.22</Landmarks>\\n        <Landmarks>412.68</Landmarks>\\n        <Landmarks>280.41</Landmarks>\\n        <Landmarks>412.5</Landmarks>\\n        <Landmarks>279.99</Landmarks>\\n        <Landmarks>429.06</Landmarks>\\n        <Landmarks>278.19</Landmarks>\\n        <Landmarks>429.05</Landmarks>\\n        <Landmarks>277.65</Landmarks>\\n        <Landmarks>448.83</Landmarks>\\n        <Landmarks>277.82</Landmarks>\\n        <Landmarks>449.13</Landmarks>\\n        <Landmarks>276.93</Landmarks>\\n        <Landmarks>472.58</Landmarks>\\n        <Landmarks>278.55</Landmarks>\\n        <Landmarks>472.59</Landmarks>\\n        <Landmarks>278.16</Landmarks>\\n        <Landmarks>365.8</Landmarks>\\n        <Landmarks>192</Landmarks>\\n        <Landmarks>566.18</Landmarks>\\n        <Landmarks>185.68</Landmarks>\\n        <Landmarks>440.54</Landmarks>\\n        <Landmarks>352.94</Landmarks>\\n        <Landmarks>372.84</Landmarks>\\n        <Landmarks>289.96</Landmarks>\\n        <Landmarks>548.44</Landmarks>\\n        <Landmarks>300.96</Landmarks>\\n        <Landmarks>364.88</Landmarks>\\n        <Landmarks>240.03</Landmarks>\\n        <Landmarks>565.1</Landmarks>\\n        <Landmarks>243.91</Landmarks>\\n        <Landmarks>397.45</Landmarks>\\n        <Landmarks>334.16</Landmarks>\\n        <Landmarks>501.07</Landmarks>\\n        <Landmarks>340.61</Landmarks>\\n        <LandmarkCount>105</LandmarkCount>\\n        <Qualities>\\n            <ScoreList>87.47</ScoreList>\\n            <BlurList>99.99</BlurList>\\n            <FnfList>100</FnfList>\\n            <GlassList>97.59</GlassList>\\n            <IlluList>99.97</IlluList>\\n            <MaskList>93.33</MaskList>\\n            <NoiseList>99.73</NoiseList>\\n            <PoseList>11.57</PoseList>\\n        </Qualities>\\n        <BeautyList>48</BeautyList>\\n        <HatList>0</HatList>\\n        <FaceProbabilityList>0.95</FaceProbabilityList>\\n        <Glasses>1</Glasses>\\n        <FaceRectangles>356</FaceRectangles>\\n        <FaceRectangles>84</FaceRectangles>\\n        <FaceRectangles>211</FaceRectangles>\\n        <FaceRectangles>278</FaceRectangles>\\n        <PoseList>-12.7</PoseList>\\n        <PoseList>7.48</PoseList>\\n        <PoseList>0.12</PoseList>\\n        <AgeList>57</AgeList>\\n        <DenseFeatureLength>1024</DenseFeatureLength>\\n        <Masks>0</Masks>\\n    </Data>\\n</RecognizeFaceResponse>","errorExample":""}]',
      'title' => '人脸属性识别',
      'summary' => '检测人脸的性别、年龄、表情、眼镜、帽子五种属性，返回人脸的1024维深度学习特征。',
      'description' => '## 功能描述
人脸属性识别能力可以识别检测人脸的性别、年龄、表情、眼镜、帽子五种属性，支持人脸遮挡、光照、模糊度、姿态、噪声综合质量评分，支持检测含有多张人脸的照片属性判断。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 特色优势

- 适应能力强：不同照片、人脸尺寸多场景下，覆盖多个年龄段识别。
- 图片质量打分：支持人脸遮挡、光照、模糊度、姿态、噪声综合质量评分。
- 平台服务稳定：提供在高并发、大流量下的毫秒级识别响应和99.999%的可靠性保障。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RecognizeFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeFace%2FRecognizeFace1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人脸属性识别示例代码](~~465558~~)。
7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素，人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人脸属性识别的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸属性识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人脸属性识别示例代码](~~465558~~)。',
      'extraInfo' => '## 错误码
关于人脸属性识别的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸属性识别模型FairFace](https://modelscope.cn/models/damo/cv_resnet34_face-attribute-recognition_fairface/summary)、[人脸表情识别模型FER](https://modelscope.cn/models/damo/cv_vgg19_facial-expression-recognition_fer/summary)、[人脸质量模型FQA](https://modelscope.cn/models/damo/cv_manual_face-quality-assessment_fqa/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'RecognizePublicFace' => 
    array (
      'summary' => '本文介绍公众人物识别RecognizePublicFace的语法及示例。',
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
                'ImageURL' => 
                array (
                  'description' => '待检测的图像URL地址。JSON数组中的每个元素是一个图片检测任务结构体（image表）。最多支持10个元素，即最多同时对10张图片进行检测。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 对于该接口，系统会自动将OSS链接地址转成内网地址然后再下载文件，所以调用该接口并不会产生OSS流量计费。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg',
                  'isFileTransferUrl' => true,
                ),
                'ImageData' => 
                array (
                  'description' => '图像Base64编码字符串。当与URL方式共存时，URL方式优先。
文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2****9j/4AAQSkZJRgABAQAAAQABAAD/2****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 10,
            'minItems' => 1,
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
                'example' => 'AC4D107C-29E3-4873-A719-0D2217EA28A8',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回识别的元素。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '对应请求中的图像URL地址。',
                          'type' => 'string',
                          'example' => 'https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '该检测任务的ID。',
                          'type' => 'string',
                          'example' => 'img3dhYqt1e4wO77Wnf2y@t@E-1tYAEt',
                        ),
                        'Results' => 
                        array (
                          'description' => '返回结果。调用成功时返回结果中包含一个或多个元素。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '1',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Suggestion' => 
                              array (
                                'description' => '建议您执行的操作，取值包括：

- pass：图片正常，无需进行其余操作。

- review：检测结果不确定，需要进行人工审核。

- block：图片违规，建议执行进一步操作（如直接删除或做限制处理）。',
                                'type' => 'string',
                                'example' => 'review',
                              ),
                              'Label' => 
                              array (
                                'description' => '检测结果的分类，取值包括：

- normal：正常图片，不包含敏感人脸。

- sface：图片中包含敏感人脸。',
                                'type' => 'string',
                                'example' => 'sface',
                              ),
                              'SubResults' => 
                              array (
                                'description' => '识别出来的人脸信息列表。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '1',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'W' => 
                                    array (
                                      'description' => '人脸区域宽度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '132',
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
                                            'description' => '识别出的相似人物名称。',
                                            'type' => 'string',
                                            'example' => '张三',
                                          ),
                                          'Id' => 
                                          array (
                                            'description' => '人脸ID。',
                                            'type' => 'string',
                                            'example' => 'AliFace_0006272',
                                          ),
                                          'Rate' => 
                                          array (
                                            'description' => '相似概率。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '98.35',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'H' => 
                                    array (
                                      'description' => '人脸区域高度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '153',
                                    ),
                                    'Y' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，人脸区域左上角到y轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '153',
                                    ),
                                    'X' => 
                                    array (
                                      'description' => '以图片左上角为坐标原点，人脸区域左上角到x轴距离。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '182',
                                    ),
                                  ),
                                ),
                              ),
                              'Rate' => 
                              array (
                                'description' => '检测结果的置信度，取值范围为`[0.00,100.00]`。值越高，表示属于该分类的概率越大。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '98.35',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AC4D107C-29E3-4873-A719-0D2217EA28A8\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg\\",\\n        \\"TaskId\\": \\"img3dhYqt1e4wO77Wnf2y@t@E-1tYAEt\\",\\n        \\"Results\\": [\\n          {\\n            \\"Suggestion\\": \\"review\\",\\n            \\"Label\\": \\"sface\\",\\n            \\"SubResults\\": [\\n              {\\n                \\"W\\": 132,\\n                \\"Faces\\": [\\n                  {\\n                    \\"Name\\": \\"张三\\",\\n                    \\"Id\\": \\"AliFace_0006272\\",\\n                    \\"Rate\\": 98.35\\n                  }\\n                ],\\n                \\"H\\": 153,\\n                \\"Y\\": 153,\\n                \\"X\\": 182\\n              }\\n            ],\\n            \\"Rate\\": 98.35\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizePublicFaceResponse>\\n    <RequestId>AC4D107C-29E3-4873-A719-0D2217EA28A8</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg</ImageURL>\\n            <TaskId>img3dhYqt1e4wO77Wnf2y@t@E-1tYAEt</TaskId>\\n            <Results>\\n                <Suggestion>review</Suggestion>\\n                <Label>sface</Label>\\n                <SubResults>\\n                    <W>132</W>\\n                    <Faces>\\n                        <Name>张三</Name>\\n                        <Id>AliFace_0006272</Id>\\n                        <Rate>98.35</Rate>\\n                    </Faces>\\n                    <H>153</H>\\n                    <Y>153</Y>\\n                    <X>182</X>\\n                </SubResults>\\n                <Rate>98.35</Rate>\\n            </Results>\\n        </Elements>\\n    </Data>\\n</RecognizePublicFaceResponse>","errorExample":""}]',
      'title' => '公众人脸识别',
      'description' => '## 功能描述
公众人物识别能力可以识别图片中的一个或多个公众人物信息。
公众人物是指在一定范围内具有重要影响力、拥有一定的社会地位、被大众广泛关注、且能因此从社会中得到巨大利益、与社会公共利益密切相关的人物，如领导人、科学家、企业家或社会活动家等。

> - 在同时检测多个Task的情况下，将按照Task的个数进行累计计费。
- 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizePublicFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 用户内容审核：检查识别用户提交的图片和视频中是否存在公众人物，识别是否存在法律风险。
- 视频图片检索：对公众人物有关的视频图片内容进行识别并设置标签，用户可以通过公众人物姓名等检索查找出与其有关的视频和图片。

## 特色优势
能够准确识别出图像中的一个或多个公众人物信息。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：
- 请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
- 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/facebody/RecognizePublicFace)，申请通过后方可使用。

><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RecognizePublicFace?lang=JAVA&sdkStyle=dara&params=%7B%22Task%22%3A%5B%7B%22ImageURL%22%3A%22%22%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[公众人物识别示例代码](~~478122~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
- 图像大小：不超过10 MB。如您有大图需求，请通过钉钉群（23109592）联系我们。
- 图像分辨率：建议不低于256×256像素，像素过低可能会影响识别效果。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 检测说明
- 最长检测时间是6秒，如果在该时间限制内没有完成检测，系统会返回超时错误码。
- 图像下载时间限制为3秒，如果下载时间超过3秒，系统返回下载超时。
- 图像检测接口响应时间依赖图片的下载时间。请保证被检测图像所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存。
- 最多可检测10张图像。

## 计费说明
关于公众人物识别的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizePublicFace)。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的公众人物识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[公众人物识别示例代码](~~478122~~)。',
      'extraInfo' => '## 错误码
关于公众人物识别的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸识别OOD模型](https://modelscope.cn/models/damo/cv_ir_face-recognition-ood_rts/summary)、[ArcFace人脸识别模型](https://modelscope.cn/models/damo/cv_ir50_face-recognition_arcface/summary)、[IR人脸识别模型FRIR](https://modelscope.cn/models/damo/cv_manual_face-recognition_frir/summary)、[口罩人脸识别模型FRFM-large](https://modelscope.cn/models/damo/cv_manual_face-recognition_frfm/summary)、[口罩人脸识别模型FaceMask](https://modelscope.cn/models/damo/cv_resnet_face-recognition_facemask/summary)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'MergeImageFace' => 
    array (
      'summary' => '本文介绍图像人脸融合MergeImageFace的语法及示例。',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸模板的模板ID。

> 需要先上传模版，具体操作，请参见[图像人脸融合模板增加](~~203512~~)。',
            'type' => 'string',
            'required' => true,
            'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048',
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURL',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待融合的人脸照片，仅在模板图为单人场景下使用。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过20 MB。
- 图像分辨率：大于等于128×128像素，小于等于2000×2000像素，最长边小于等于2000像素。
- URL地址中不能包含中文字符。

> - 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。
- **ImageURL**与**MergeInfos**二选一。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MergeImageFace/MergeImageFace-1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ModelVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '提供两版模型，分别支持脸型适配（v1）与非脸型适配（v2）的效果，具有一定区分度。默认值为v1（脸型适配版本）。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        3 => 
        array (
          'name' => 'AddWatermark',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否添加水印。取值范围如下：

- False（默认）：不添加水印。
- True：添加水印。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'False',
            'default' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'WatermarkType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '水印类型。取值范围如下：

- EN（默认）：英文水印。
- CN：中文水印。',
            'type' => 'string',
            'required' => false,
            'example' => 'EN',
            'default' => 'EN',
          ),
        ),
        5 => 
        array (
          'name' => 'MergeInfos',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'description' => '仅在模板图为多人场景下使用，指定图中每个人脸和待换脸的图像URL。

> **ImageURL**与**MergeInfos**二选一。',
              'type' => 'object',
              'properties' => 
              array (
                'TemplateFaceID' => 
                array (
                  'description' => '多脸模板对应的某个人脸的子ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '6cd509ea-54fa-4730-8e9d-c94cadcda048_0',
                ),
                'ImageURL' => 
                array (
                  'description' => '该人脸待替换的图像URL。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/ref/ref.jpg',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 1000,
            'minItems' => 0,
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
                'example' => '8473A5E5-488E-4612-800E-F95B42381570',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '融合后的图像URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/09dedc78-c355-442a-9312-7ab074d6de49_54dc_20210129-025407.jpg?Expires=1611890647&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2mk2OgIrwMqrvA%2FvDdp0MNaoVU****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8473A5E5-488E-4612-800E-F95B42381570\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/09dedc78-c355-442a-9312-7ab074d6de49_54dc_20210129-025407.jpg?Expires=1611890647&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=2mk2OgIrwMqrvA%2FvDdp0MNaoVU****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8473A5E5-488E-4612-800E-F95B42381570</RequestId>\\n<Data>\\n    <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/image-face-fusion/09dedc78-c355-442a-9312-7ab074d6de49_54dc_20210129-025407.jpg?Expires=1611890647&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=2mk2OgIrwMqrvA%2FvDdp0MNaoVU****</ImageURL>\\n</Data>","errorExample":""}]',
      'title' => '合并图像人脸',
      'description' => '## 功能描述
图像人脸融合功能可以将用户图中的人脸融合到模板图中的人脸位置，生成一张包含用户图人脸特征的新图像。特别注意的是，该功能严格要求使用者事先获得用户图和模版图的授权，不得用于非法或有违道德约束的场景中。
关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/mzue/MergeImageFace.png" width="400)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=MergeImageFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 娱乐应用：用户将已获授权的合法图像中的人物，换成自己的人脸。
- 影视制作：适用于影视制作公司，在后期制作中通过人脸融合提升制作效率与降低成本。
- 影楼获客：适用于影楼或者个人摄影工作室，将客户的人脸融合到摄影样片中，达到试妆、试衣、试拍的效果。

## 特色优势 
- 高保真、低违和效果：融合后的人脸保留了替换者人脸身份信息的视觉特征，而融入被替换者人脸中又无违和感。
- 表情肤色一致性：融合后的人脸最大限度保留被替换者的面目表情、肤色一致性。
- 支持复杂人脸角度：支持模版人脸偏侧一定角度，融合后的结果真实稳定。
- 脸型适配：支持自适应的匹配用户脸的脸型，提升融合结果的辨识度。
- 支持多人脸和指定人脸：支持模版图像中多个人脸，并指定每个人脸与目标人脸单独替换。

## 接入指引

1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/facebody/MergeImageFace)，申请通过后方可使用。

><notice>本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/MergeImageFace?lang=JAVA&sdkStyle=old&params=%7B%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 前提条件：已通过[图像人脸融合模板增加接口](~~203512~~)（AddFaceImageTemplate）创建生成了TemplateId。
6. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

7. 示例代码：该能力常用语言的示例代码，请参见[图像人脸融合示例代码](~~467963~~)。

8. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过20 MB。
- 图像分辨率：大于等于128×128像素，小于等于2000×2000像素，最长边小于等于2000像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 图像质量建议

- 要求保证图像中的人脸清晰。图像中人脸尺寸建议大于64×64像素，人脸区域建议不大于全图区域的2/3。
- 建议图像中人脸五官区域轮廓完整，无明显遮挡。人脸融合算法支持人脸偏侧一定角度，在偏侧角度不超过30度的情况下能取得更佳效果。
- 含有多人脸的图像，建议图像中人脸个数不超过5个。

推荐图像示例：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/jris/MergeImageFacetuijian.png" width="300)
不推荐图像示例：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221114/rkbx/MergeImageFacebutuijian.png" width="300)

## 计费说明
关于图像人脸融合的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=MergeImageFace)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的图像人脸融合能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[图像人脸融合示例代码](~~467963~~)。',
      'extraInfo' => '## 错误码
关于图像人脸融合的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'BodyPosture' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/BodyPosture/BodyPosture4.jpg',
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
                'example' => 'B854094B-9231-4A54-89AB-C377CB0D237D',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Outputs' => 
                  array (
                    'description' => '检测结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HumanCount' => 
                        array (
                          'description' => '人体的个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Results' => 
                        array (
                          'description' => '检测结果。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Bodies' => 
                              array (
                                'description' => '检测到的人体关键点信息。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Positions' => 
                                    array (
                                      'description' => '关键点坐标，为相对坐标，即相对于图像尺寸的坐标。',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Points' => 
                                          array (
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '关键点\\[x,y]坐标。
- x坐标，取值范围[0, 1]，相对于图像宽度width的相对坐标，实际坐标为x*width。
- y坐标，取值范围[0, 1]，相对于图像高度height的相对坐标，实际坐标为y*height。',
                                              'type' => 'number',
                                              'format' => 'float',
                                              'example' => '[0.46296295523643494, 0.1304347813129425]',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                    'Confident' => 
                                    array (
                                      'description' => '关键点置信度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '0.91309475898742676',
                                    ),
                                    'Label' => 
                                    array (
                                      'description' => '关键点的标签。包括如下类型：`nose、neck、right_shoulder、right_elbow、right_wrist、left_shoulder、left_elbow、left_wrist、right_hip、right_knee、right_ankle、left_hip、left_knee、left_ankle、right_eye、left_eye、right_ear、left_ear`。',
                                      'type' => 'string',
                                      'example' => 'nose',
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
                  'MetaObject' => 
                  array (
                    'description' => '图像基本信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '图像宽度，单位像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '500',
                      ),
                      'Height' => 
                      array (
                        'description' => '图像高度，单位像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '500',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B854094B-9231-4A54-89AB-C377CB0D237D\\",\\n  \\"Data\\": {\\n    \\"Outputs\\": [\\n      {\\n        \\"HumanCount\\": 1,\\n        \\"Results\\": [\\n          {\\n            \\"Bodies\\": [\\n              {\\n                \\"Positions\\": [\\n                  {\\n                    \\"Points\\": [\\n                      0\\n                    ]\\n                  }\\n                ],\\n                \\"Confident\\": 0.9130947589874268,\\n                \\"Label\\": \\"nose\\"\\n              }\\n            ]\\n          }\\n        ]\\n      }\\n    ],\\n    \\"MetaObject\\": {\\n      \\"Width\\": 500,\\n      \\"Height\\": 500\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BodyPostureResponse>\\n    <RequestId>B854094B-9231-4A54-89AB-C377CB0D237D</RequestId>\\n    <Data>\\n        <MetaObject>\\n            <Height>500</Height>\\n            <Width>500</Width>\\n        </MetaObject>\\n        <Outputs>\\n            <Results>\\n                <Bodies>\\n                    <Confident>0.91309475898742676</Confident>\\n                    <Label>nose</Label>\\n                    <Positions>\\n                        <Points>0.46296295523643494</Points>\\n                        <Points>0.1304347813129425</Points>\\n                    </Positions>\\n                </Bodies>\\n                <Bodies>\\n                    <Confident>0.7284882664680481</Confident>\\n                    <Label>neck</Label>\\n                    <Positions>\\n                        <Points>0.47685185074806213</Points>\\n                        <Points>0.22282609343528748</Points>\\n                    </Positions>\\n                </Bodies>\\n                <Bodies>\\n                    <Confident>0.78919297456741333</Confident>\\n                    <Label>right_shoulder</Label>\\n                    <Positions>\\n                        <Points>0.3888888955116272</Points>\\n                        <Points>0.239130437374115</Points>\\n                    </Positions>\\n                </Bodies>\\n            </Results>\\n            <HumanCount>1</HumanCount>\\n        </Outputs>\\n    </Data>\\n</BodyPostureResponse>","errorExample":""}]',
      'title' => '人体姿态关键点',
      'summary' => '本文介绍人体姿态关键点BodyPosture的语法及示例。',
      'description' => '## 功能描述
人体姿态关键点能力可以获取人体的十八个关键点信息。包括：nose、neck、right_shoulder、right_elbow、right_wrist、left_shoulder、left_elbow、left_wrist、right_hip、right_knee、right_ankle、left_hip、left_knee、left_ankle、right_eye、left_eye、right_ear、left_ear。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=BodyPosture)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/BodyPosture?&lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FBodyPosture%2FBodyPosture1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过3 MB。
- URL地址中不能包含中文字符。

## 计费说明
关于人体姿态关键点的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=BodyPosture)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人体姿态关键点能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人体姿态关键点的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[HRNet人体关键点-2D](https://www.modelscope.cn/models/damo/cv_hrnetv2w32_body-2d-keypoints_image/summary)和[全身关键点检测-通用领域-2D](https://www.modelscope.cn/models/damo/cv_hrnetw48_human-wholebody-keypoint_image/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectBodyCount' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectBodyCount/DetectBodyCount3.jpg',
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
                'example' => '1C709078-8886-4C91-AEDE-4E04EED0A689',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'PersonNumber' => 
                  array (
                    'description' => '人体的个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C709078-8886-4C91-AEDE-4E04EED0A689\\",\\n  \\"Data\\": {\\n    \\"PersonNumber\\": 6\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectBodyCountResponse>\\n    <RequestId>1C709078-8886-4C91-AEDE-4E04EED0A689</RequestId>\\n    <Data>\\n        <PersonNumber>6</PersonNumber>\\n    </Data>\\n</DetectBodyCountResponse>","errorExample":""}]',
      'title' => '人体计数',
      'summary' => '本文为您介绍人体计数DetectBodyCount的语法及示例。',
      'description' => '## 功能描述
人体计数能力可以检测输入图片中人体的个数。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectBodyCount)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectBodyCount?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectBodyCount%2FDetectBodyCount1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人体计数示例代码](~~478769~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过3 MB。
- URL地址中不能包含中文字符。

## 计费说明
关于人体计数的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectBodyCount)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人体计数能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人体计数示例代码](~~478769~~)。
',
      'extraInfo' => '## 错误码
关于人体计数的错误码，详情请参见[常见错误码](~~146756~~)。


## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectPedestrian' => 
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
输入限制：

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过4 MB。
- 图像分辨率：分辨率大于32×32， 分辨率小于2000×2000像素，最长边小于2000像素， 人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectPedestrian/DetectPedestrian8.jpg',
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
                'example' => '45DBA494-6250-42C4-80D1-7CF19BDD2CB1',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '人体检测框的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '检测框对应的检测结果类型。仅返回参数值`person`。',
                          'type' => 'string',
                          'example' => 'person',
                        ),
                        'Boxes' => 
                        array (
                          'description' => '1',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '检测框坐标，格式为`[left, top, right, bottom]`。其中`left`为人体检测框左上角横坐标，`top`为人体检测框左上角纵坐标，`right`为人体检测框右下角横坐标，`bottom`为人体检测框右下角纵坐标。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[326, 293, 500, 546 ]',
                          ),
                        ),
                        'Score' => 
                        array (
                          'description' => '检测框的置信度，取值范围为0~1，得分越接近1表示人体框准确的概率越大。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.999',
                        ),
                      ),
                    ),
                  ),
                  'Width' => 
                  array (
                    'description' => '输入图像的宽度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '899',
                  ),
                  'Height' => 
                  array (
                    'description' => '输入图像的高度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '599',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"45DBA494-6250-42C4-80D1-7CF19BDD2CB1\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Type\\": \\"person\\",\\n        \\"Boxes\\": [\\n          0\\n        ],\\n        \\"Score\\": 0.999\\n      }\\n    ],\\n    \\"Width\\": 899,\\n    \\"Height\\": 599\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>45DBA494-6250-42C4-80D1-7CF19BDD2CB1</RequestId>\\n<Data>\\n    <Height>599</Height>\\n    <Elements>\\n        <Score>0.999</Score>\\n        <Type>person</Type>\\n        <Boxes>326</Boxes>\\n        <Boxes>293</Boxes>\\n        <Boxes>500</Boxes>\\n        <Boxes>546</Boxes>\\n    </Elements>\\n    <Elements>\\n        <Score>0.998</Score>\\n        <Type>person</Type>\\n        <Boxes>181</Boxes>\\n        <Boxes>156</Boxes>\\n        <Boxes>425</Boxes>\\n        <Boxes>534</Boxes>\\n    </Elements>\\n    <Elements>\\n        <Score>0.993</Score>\\n        <Type>person</Type>\\n        <Boxes>515</Boxes>\\n        <Boxes>300</Boxes>\\n        <Boxes>705</Boxes>\\n        <Boxes>549</Boxes>\\n    </Elements>\\n    <Elements>\\n        <Score>0.986</Score>\\n        <Type>person</Type>\\n        <Boxes>661</Boxes>\\n        <Boxes>129</Boxes>\\n        <Boxes>797</Boxes>\\n        <Boxes>506</Boxes>\\n    </Elements>\\n    <Elements>\\n        <Score>0.959</Score>\\n        <Type>person</Type>\\n        <Boxes>511</Boxes>\\n        <Boxes>271</Boxes>\\n        <Boxes>572</Boxes>\\n        <Boxes>451</Boxes>\\n    </Elements>\\n    <Width>899</Width>\\n</Data>","errorExample":""}]',
      'title' => '人体检测',
      'summary' => '本文介绍人体检测DetectPedestrian的语法及示例。',
      'description' => '## 功能描述
人体检测能力可以检测图像中的所有人体。主要适用于监控场景，建议人体占图片的比例小于1/2。产品支持以下功能：

- 人体检测：返回图像中人体矩形框位置，并输出图像中人体所在的坐标位置。
- 人体信息：输出图像中人物置信度；可同时识别图片中多个人体。

关于该接口功能的示例图如下：
- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/unpw/DetectPedestrian.png" width="500)
- 输出结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221111/xqtw/DetectPedestrianresult.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectPedestrian)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 记录有人视频：在摄像头录像中，通过人体检测，可以过滤无人的视频段，仅保留有人员出现的视频，减少视频存储量。
- 人流统计：结合多帧人体检测结果，进行过线判断，可以运用于商场、景区、交通枢纽的人流量统计。
- 在岗检测：检测固定工作岗位上是否有人员在岗。
- 智能办公室：检测办公室内是否有人，智能控制照明灯或空调的开关，节约能源，绿色环保。

## 特色优势

- 支持多角度检测：针对正面，侧面，高角度等拍摄的图像，都可以准确检测出人体。
- 抗遮挡能力强：对于人体被少部分遮挡的场景，仍可以准确检测出人体。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectPedestrian?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectPedestrian%2FDetectPedestrian1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
    - 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
    - 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
    - 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人体检测示例代码](~~601107~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。

- 图像大小：不超过3 MB。

- 图像分辨率：分辨率大于32×32像素， 分辨率小于2000×2000像素，最长边小于2000像素，人脸占比不低于64×64像素。

- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人体检测的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectPedestrian)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[人体检测示例代码](~~601107~~)。',
      'extraInfo' => '## 错误码
关于人体检测的错误码 ，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人体检测-通用-Base](https://modelscope.cn/models/damo/cv_resnet18_human-detection/summary)和[实时人体检测-通用](https://modelscope.cn/models/damo/cv_tinynas_human-detection_damoyolo/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectPedestrianIntrusion' => 
    array (
      'summary' => '本文介绍行人区域进入检测DetectPedestrianIntrusion的语法及示例。',
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectPedestrianIntrusion/DetectPedestrianIntrusion2.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'DetectRegion',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '区域信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '检测目标区域。',
              'type' => 'object',
              'properties' => 
              array (
                'Rect' => 
                array (
                  'description' => '矩形区域。当RegionType为rectangel时必填。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Left' => 
                    array (
                      'description' => '矩形区域的左上角横轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '0',
                    ),
                    'Top' => 
                    array (
                      'description' => '矩形区域的左上角纵轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '0',
                    ),
                    'Right' => 
                    array (
                      'description' => '矩形区域的右下角横轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '300',
                    ),
                    'Bottom' => 
                    array (
                      'description' => '矩形区域的右下角纵轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '300',
                    ),
                  ),
                  'required' => false,
                ),
                'Line' => 
                array (
                  'description' => '周界/界线。当RegionType为line时必填。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'X1' => 
                    array (
                      'description' => '线段的开始顶点的横轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '0',
                    ),
                    'Y1' => 
                    array (
                      'description' => '线段的开始顶点的纵轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '0',
                    ),
                    'X2' => 
                    array (
                      'description' => '线段的结束顶点的横轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '300',
                    ),
                    'Y2' => 
                    array (
                      'description' => '线段的结束顶点的纵轴坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'required' => false,
                      'example' => '300',
                    ),
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'RegionType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '区域类型。

- line：周界/界线，为一条线段。
- rectangle：矩形区域，为一个矩形。',
            'type' => 'string',
            'required' => true,
            'example' => 'rectangle',
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
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'AA2539F7-D139-458C-A9BA-3321318D6BC4',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageWidth' => 
                  array (
                    'description' => '输入图片的宽度。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '899',
                  ),
                  'ImageHeight' => 
                  array (
                    'description' => '输入图片的高度。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '599',
                  ),
                  'Elements' => 
                  array (
                    'description' => '人体检测框的集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '4',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Score' => 
                        array (
                          'description' => '检测框的置信度，范围为`[0,1]`。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0.950289249420166',
                        ),
                        'Type' => 
                        array (
                          'description' => '检测框对应的人体，取值为person。',
                          'type' => 'string',
                          'example' => 'person',
                        ),
                        'IsIntrude' => 
                        array (
                          'description' => '判断该人体是否入侵给定的区域或界线。

- true：入侵给定区域或界限。
- false：未入侵给定区域或界限。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'Box' => 
                        array (
                          'description' => '检测框坐标。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Left' => 
                            array (
                              'description' => '矩形区域的左上角横轴坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '175',
                            ),
                            'Top' => 
                            array (
                              'description' => '矩形区域的左上角纵轴坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '153',
                            ),
                            'Right' => 
                            array (
                              'description' => '矩形区域的右下角横轴坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '418',
                            ),
                            'Bottom' => 
                            array (
                              'description' => '矩形区域的右下角纵轴坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '551',
                            ),
                          ),
                        ),
                        'BoxId' => 
                        array (
                          'description' => '检测框的ID。',
                          'type' => 'integer',
                          'format' => 'int64',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AA2539F7-D139-458C-A9BA-3321318D6BC4\\",\\n  \\"Data\\": {\\n    \\"ImageWidth\\": 899,\\n    \\"ImageHeight\\": 599,\\n    \\"Elements\\": [\\n      {\\n        \\"Score\\": 0.950289249420166,\\n        \\"Type\\": \\"person\\",\\n        \\"IsIntrude\\": false,\\n        \\"Box\\": {\\n          \\"Left\\": 175,\\n          \\"Top\\": 153,\\n          \\"Right\\": 418,\\n          \\"Bottom\\": 551\\n        },\\n        \\"BoxId\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>AA2539F7-D139-458C-A9BA-3321318D6BC4</RequestId>\\n<Data>\\n    <ImageHeight>599</ImageHeight>\\n    <ImageWidth>899</ImageWidth>\\n    <Elements>\\n        <Elements>\\n            <BoxId>0</BoxId>\\n            <Score>0.950289249420166</Score>\\n            <Type>person</Type>\\n            <IsIntrude>false</IsIntrude>\\n            <Box>\\n                <Left>175</Left>\\n                <Top>153</Top>\\n                <Right>418</Right>\\n                <Bottom>551</Bottom>\\n            </Box>\\n        </Elements>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '行人入侵检测',
      'description' => '## 功能描述
行人区域进入检测能力基于深度学习算法，检测视频监测周界或区域是否有人员入侵。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectPedestrianIntrusion)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 厂区安全监测：监测保密区域、危险区域是否有人员进入，保证工厂生产安全。
- 轨道交通安全：监测轨道交通的轨道等关键区域是否有人员进入，保障运行安全。

## 特色优势

- 支持多角度视角：支持多种摄像头安装角度，各种人员朝向，都能有效检测出行人。
- 避免非人误报：基于深度学习算法，有效区分行人和其他物体，避免非人员传入误报。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectPedestrianIntrusion?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectPedestrianIntrusion%2FDetectPedestrianIntrusion1.jpg%22%2C%22RegionType%22%3A%22rectangle%22%2C%22DetectRegion%22%3A%5B%7B%22Rect%22%3A%7B%22Left%22%3A65%2C%22Top%22%3A139%2C%22Right%22%3A885%2C%22Bottom%22%3A519%7D%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、BMP、PNG。

- 图像大小：不超过10 MB。

- 图像像素：小于4096×4096像素。

- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的行人区域进入检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于行人区域进入检测的错误码，详情请参见[常见错误码](~~146756~~)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'ExtractPedestrianFeatureAttr' => 
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
            'type' => 'string',
            'required' => true,
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Mode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => 'ALL',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceVersion',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'default' => 'V1',
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
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'QualityScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'ObjType' => 
                  array (
                    'type' => 'string',
                  ),
                  'Feature' => 
                  array (
                    'type' => 'string',
                  ),
                  'Gender' => 
                  array (
                    'type' => 'string',
                  ),
                  'LowerColorScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'ObjTypeScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'Age' => 
                  array (
                    'type' => 'string',
                  ),
                  'AgeScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'UpperTypeScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'LowerTypeScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'LowerColor' => 
                  array (
                    'type' => 'string',
                  ),
                  'Hair' => 
                  array (
                    'type' => 'string',
                  ),
                  'UpperColor' => 
                  array (
                    'type' => 'string',
                  ),
                  'GenderScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'UpperType' => 
                  array (
                    'type' => 'string',
                  ),
                  'HairScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'LowerType' => 
                  array (
                    'type' => 'string',
                  ),
                  'UpperColorScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'Orientation' => 
                  array (
                    'type' => 'string',
                  ),
                  'OrientationScore' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
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
      'responseDemo' => '',
    ),
    'PedestrianDetectAttribute' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/PedestrianDetectAttribute/PedestrianDetectAttribute1.jpg',
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
                'example' => '4F609A30-F645-481E-A513-CADAA14DFB0A',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Attributes' => 
                  array (
                    'description' => '行人属性。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Gender' => 
                        array (
                          'description' => '性别。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.97989875078201294',
                            ),
                            'Name' => 
                            array (
                              'description' => 'male（男）；female（女）。',
                              'type' => 'string',
                              'example' => 'female',
                            ),
                          ),
                        ),
                        'Orient' => 
                        array (
                          'description' => '人体朝向。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.97838658094406128',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Front（正向）；Side（侧向）；Back（背面）。',
                              'type' => 'string',
                              'example' => 'Front',
                            ),
                          ),
                        ),
                        'Age' => 
                        array (
                          'description' => '年龄。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.99590516090393066',
                            ),
                            'Name' => 
                            array (
                              'description' => 'AgeOver60（大于60岁）；Age18-60（18-60岁之间）；AgeLess18（小于18岁）。',
                              'type' => 'string',
                              'example' => 'Age18-60',
                            ),
                          ),
                        ),
                        'UpperWear' => 
                        array (
                          'description' => '上衣种类。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.89291918277740479',
                            ),
                            'Name' => 
                            array (
                              'description' => 'LongSleeve（长袖）；ShortSleeve（短袖）。',
                              'type' => 'string',
                              'example' => 'ShortSleeve',
                            ),
                          ),
                        ),
                        'Glasses' => 
                        array (
                          'description' => '眼镜。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.87284471094608307',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Yes（戴眼镜）；No（不戴眼镜）。',
                              'type' => 'string',
                              'example' => 'No',
                            ),
                          ),
                        ),
                        'LowerWear' => 
                        array (
                          'description' => '下衣种类。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.6424860954284668',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Trousers（长裤）；Shorts（短裤）；Skirt&Dress（裙子）。',
                              'type' => 'string',
                              'example' => 'Trousers',
                            ),
                          ),
                        ),
                        'LowerColor' => 
                        array (
                          'description' => '下衣颜色。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.69961744546890259',
                            ),
                            'Name' => 
                            array (
                              'description' => '黑，灰，蓝，绿，白，紫，红，棕，黄，粉，不确定。',
                              'type' => 'string',
                              'example' => '黑',
                            ),
                          ),
                        ),
                        'Hat' => 
                        array (
                          'description' => '帽子。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.98272394016385078',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Yes（戴帽子）；No（不戴帽子）。',
                              'type' => 'string',
                              'example' => 'No',
                            ),
                          ),
                        ),
                        'Handbag' => 
                        array (
                          'description' => '手提包。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.55011671781539917',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Yes（有手提包）；No（无手提包）。',
                              'type' => 'string',
                              'example' => 'Yes',
                            ),
                          ),
                        ),
                        'Backpack' => 
                        array (
                          'description' => '背包。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.96486538648605347',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Yes（有背包）；No（无背包）。',
                              'type' => 'string',
                              'example' => 'No',
                            ),
                          ),
                        ),
                        'UpperColor' => 
                        array (
                          'description' => '上衣颜色。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.97796273231506348',
                            ),
                            'Name' => 
                            array (
                              'description' => '黑，灰，蓝，绿，白，紫，红，棕，黄，粉，不确定。',
                              'type' => 'string',
                              'example' => '黄',
                            ),
                          ),
                        ),
                        'ShoulderBag' => 
                        array (
                          'description' => '肩挎包。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Score' => 
                            array (
                              'description' => '置信度。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0.91198787838220596',
                            ),
                            'Name' => 
                            array (
                              'description' => 'Yes（有肩挎包）；No（无肩挎包）。',
                              'type' => 'string',
                              'example' => 'No',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Boxes' => 
                  array (
                    'description' => '检测到行人边界框的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'BottomRightX' => 
                        array (
                          'description' => '边框右下角x坐标值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '584',
                        ),
                        'TopLeftY' => 
                        array (
                          'description' => '边框左上角y坐标值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '27',
                        ),
                        'Score' => 
                        array (
                          'description' => '边界框置信度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.88381063938140869',
                        ),
                        'TopLeftX' => 
                        array (
                          'description' => '边框左上角x坐标值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '36',
                        ),
                        'BottomRightY' => 
                        array (
                          'description' => '边框右下角y坐标值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '218',
                        ),
                      ),
                    ),
                  ),
                  'PersonNumber' => 
                  array (
                    'description' => '检测到的行人个数，取值为正整数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Width' => 
                  array (
                    'description' => '原图的宽度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '264',
                  ),
                  'Height' => 
                  array (
                    'description' => '原图的高度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '584',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4F609A30-F645-481E-A513-CADAA14DFB0A\\",\\n  \\"Data\\": {\\n    \\"Attributes\\": [\\n      {\\n        \\"Gender\\": {\\n          \\"Score\\": 0.9798987507820129,\\n          \\"Name\\": \\"female\\"\\n        },\\n        \\"Orient\\": {\\n          \\"Score\\": 0.9783865809440613,\\n          \\"Name\\": \\"Front\\"\\n        },\\n        \\"Age\\": {\\n          \\"Score\\": 0.9959051609039307,\\n          \\"Name\\": \\"Age18-60\\"\\n        },\\n        \\"UpperWear\\": {\\n          \\"Score\\": 0.8929191827774048,\\n          \\"Name\\": \\"ShortSleeve\\"\\n        },\\n        \\"Glasses\\": {\\n          \\"Score\\": 0.8728447109460831,\\n          \\"Name\\": \\"No\\"\\n        },\\n        \\"LowerWear\\": {\\n          \\"Score\\": 0.6424860954284668,\\n          \\"Name\\": \\"Trousers\\"\\n        },\\n        \\"LowerColor\\": {\\n          \\"Score\\": 0.6996174454689026,\\n          \\"Name\\": \\"黑\\"\\n        },\\n        \\"Hat\\": {\\n          \\"Score\\": 0.9827239401638508,\\n          \\"Name\\": \\"No\\"\\n        },\\n        \\"Handbag\\": {\\n          \\"Score\\": 0.5501167178153992,\\n          \\"Name\\": \\"Yes\\"\\n        },\\n        \\"Backpack\\": {\\n          \\"Score\\": 0.9648653864860535,\\n          \\"Name\\": \\"No\\"\\n        },\\n        \\"UpperColor\\": {\\n          \\"Score\\": 0.9779627323150635,\\n          \\"Name\\": \\"黄\\"\\n        },\\n        \\"ShoulderBag\\": {\\n          \\"Score\\": 0.911987878382206,\\n          \\"Name\\": \\"No\\"\\n        }\\n      }\\n    ],\\n    \\"Boxes\\": [\\n      {\\n        \\"BottomRightX\\": 584,\\n        \\"TopLeftY\\": 27,\\n        \\"Score\\": 0.8838106393814087,\\n        \\"TopLeftX\\": 36,\\n        \\"BottomRightY\\": 218\\n      }\\n    ],\\n    \\"PersonNumber\\": 1,\\n    \\"Width\\": 264,\\n    \\"Height\\": 584\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>4F609A30-F645-481E-A513-CADAA14DFB0A</RequestId>\\n<Data>\\n    <PersonNumber>1</PersonNumber>\\n    <Attributes>\\n        <Backpack>\\n            <Score>0.96486538648605347</Score>\\n            <Name>No</Name>\\n        </Backpack>\\n        <LowerWear>\\n            <Score>0.6424860954284668</Score>\\n            <Name>Trousers</Name>\\n        </LowerWear>\\n        <Orient>\\n            <Score>0.97838658094406128</Score>\\n            <Name>Front</Name>\\n        </Orient>\\n        <ShoulderBag>\\n            <Score>0.91198787838220596</Score>\\n            <Name>No</Name>\\n        </ShoulderBag>\\n        <LowerColor>\\n            <Score>0.69961744546890259</Score>\\n            <Name>黑</Name>\\n        </LowerColor>\\n        <Glasses>\\n            <Score>0.87284471094608307</Score>\\n            <Name>No</Name>\\n        </Glasses>\\n        <UpperColor>\\n            <Score>0.97796273231506348</Score>\\n            <Name>黄</Name>\\n        </UpperColor>\\n        <Handbag>\\n            <Score>0.55011671781539917</Score>\\n            <Name>Yes</Name>\\n        </Handbag>\\n        <Hat>\\n            <Score>0.98272394016385078</Score>\\n            <Name>No</Name>\\n        </Hat>\\n        <Gender>\\n            <Score>0.97989875078201294</Score>\\n            <Name>female</Name>\\n        </Gender>\\n        <Age>\\n            <Score>0.99590516090393066</Score>\\n            <Name>Age18-60</Name>\\n        </Age>\\n        <UpperWear>\\n            <Score>0.89291918277740479</Score>\\n            <Name>ShortSleeve</Name>\\n        </UpperWear>\\n    </Attributes>\\n    <Boxes>\\n        <BottomRightX>584</BottomRightX>\\n        <Score>0.88381063938140869</Score>\\n        <BottomRightY>218</BottomRightY>\\n        <TopLeftY>27</TopLeftY>\\n        <TopLeftX>36</TopLeftX>\\n    </Boxes>\\n</Data>","errorExample":""}]',
      'title' => '人体结构化属性',
      'summary' => '本文介绍人体结构化属性PedestrianDetectAttribute的语法及示例。',
      'description' => '## 功能描述
人体结构化属性能力可以检测图片中人体的属性，具体功能包括人体检测以及属性预估。例如：性别、年龄、朝向、帽子、眼镜、包、衣服、颜色等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=PedestrianDetectAttribute)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 特色优势
丰富属性：提供丰富人体属性，包括年龄、性别、是否带眼镜、有无帽子、有无背包、有无手提包、有无肩挎包、上衣颜色、上衣种类、下衣颜色、下衣种类、人体朝向等。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/PedestrianDetectAttribute?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FPedestrianDetectAttribute%2FPedestrianDetectAttribute1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG、BMP。

- 图像大小：不大于10 MB。

- 图像分辨率：大于20×20像素，小于2048×2048像素。

- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人体结构化属性的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=PedestrianDetectAttribute)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人体结构化属性能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人体结构化属性的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeHandGesture' => 
    array (
      'summary' => '本文介绍静态手势识别RecognizeHandGesture的语法及示例。',
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
          'name' => 'AppId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '程序名称，固定为gesture_app。',
            'type' => 'string',
            'required' => true,
            'example' => 'gesture_app',
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/cc/RecognizeHandGesture1.jpg',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'GestureType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '手势类型，固定为gesture_recognition。',
            'type' => 'string',
            'required' => true,
            'example' => 'gesture_recognition',
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
                'example' => '99AC4489-693D-4DF1-8BB7-7451DD71A16E',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Type' => 
                  array (
                    'description' => '手势类型。

- bg：无法识别的手势
- ok：确认  
- palm：手掌
- left：握拳且大拇指向左
- right：握拳且大拇指向右
- good：点赞（即握拳且大拇指向上）
- mute：噤声（将食指放在嘴上即被识别为噤声）
- down：握拳且大拇指向下',
                    'type' => 'string',
                    'example' => 'right',
                  ),
                  'X' => 
                  array (
                    'description' => '手势在图像中检测框的左上角X坐标。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '237',
                  ),
                  'Y' => 
                  array (
                    'description' => '手势在图像中检测的左上角Y坐标。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '216',
                  ),
                  'Width' => 
                  array (
                    'description' => '手势在图像中检测框的宽度。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '46',
                  ),
                  'Height' => 
                  array (
                    'description' => '手势在图像中检测框的高度。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '53',
                  ),
                  'Score' => 
                  array (
                    'description' => '识别置信度，范围0~1。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.921875',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"99AC4489-693D-4DF1-8BB7-7451DD71A16E\\",\\n  \\"Data\\": {\\n    \\"Type\\": \\"right\\",\\n    \\"X\\": 237,\\n    \\"Y\\": 216,\\n    \\"Width\\": 46,\\n    \\"Height\\": 53,\\n    \\"Score\\": 0.921875\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>99AC4489-693D-4DF1-8BB7-7451DD71A16E</RequestId>\\n<Data>\\n    <Type>right</Type>\\n    <X>237</X>\\n    <Y>216</Y>\\n    <Width>46</Width>\\n    <Height>53</Height>\\n    <Score>0.921875</Score>\\n</Data>","errorExample":""}]',
      'title' => '静态手势识别',
      'description' => '## 功能描述
静态手势识别能力可以识别图片中的手势动作等。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeHandGesture)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景 

- 互动娱乐：异地通过远程视频，识别双方各自的手势，完成类似点赞等远程互动游戏。
- 电视遥控：当看电视找不到遥控器时，通过简单手势即可控制电视播放，简单又方便。
- 智能家电控制：通过手势发出简单指令，可以让智能家电完成各种预设配置的功能，例如停止播放音乐，打开空调，调节光线氛围等。

## 特色优势 

- 支持手部与人体重合：可以在手部与人体其他颜色相近的部位重合情况下，准确识别手势。
- 低光照条件：在低光照场景下，手部区域检测准确率依然能保持较高水平。
- 远距离：在一般室内场景中，较远距离也可以检测到手部并识别手势。
- 抗模糊：在手部快速运动导致的图像一定程度模糊的情况下，依然可以部分识别出手势。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RecognizeHandGesture?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fcc%2FRecognizeHandGesture1.jpg%22%2C%22AppId%22%3A%22gesture_app%22%2C%22GestureType%22%3A%22gesture_recognition%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)


## 输入限制

- 图像格式：JPG。

- 图像大小：不超过3 MB。

- 图像分辨率：大于160×120像素，小于3840×2160像素。

- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的静态手势识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于静态手势识别的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GetRealPersonVerificationResult' => 
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
          'name' => 'VerificationToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '可信核身认证的唯一标识。

> 已认证通过的VerificationToken不能做二次查询校验，否则会报错。',
            'type' => 'string',
            'required' => true,
            'example' => 'cwek23dw24geor89230hf2rw',
            'isFileTransferUrl' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '10FC953D-7C0C-4915-8949-34E3246E5B79',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Passed' => 
                  array (
                    'description' => '认证是否通过。

- true：通过。
- false：不通过。',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10FC953D-7C0C-4915-8949-34E3246E5B79\\",\\n  \\"Data\\": {\\n    \\"Passed\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetRealPersonVerificationResultResponse>\\n    <RequestId>10FC953D-7C0C-4915-8949-34E3246E5B79</RequestId>\\n    <Data>\\n        <Passed>true</Passed>\\n    </Data>\\n</GetRealPersonVerificationResultResponse>","errorExample":""}]',
      'title' => '查询实人认证结果',
      'summary' => '本文介绍核身认证移动端查询GetRealPersonVerificationResult的语法及示例。',
      'description' => '## 功能描述
核身认证移动端查询能力可以确认在证件合法且姓名匹配后，返回身份验证的用户图像信息。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：
- 请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
- 已按照[App认证接入教程](~~201625~~)完成客户端数据采集。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/GetRealPersonVerificationResult?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 计费说明
人脸核身App认证只计费发起核身认证请求接口（GenRealPersonVerificationToken）的费用，查询结果接口（GetRealPersonVerificationResult）不计费。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见：
- [服务端接入教程](~~201625~~)
- [iOS端接入教程](~~201379~~)
- [Android端接入教程](~~201380~~)',
      'extraInfo' => '## 错误码
关于核身认证移动端查询的错误码如下表所示。
| 状态码 | 错误码                       | 描述                                                         |
| ------ | ---------------------------- | ------------------------------------------------------------ |
| 200    | 无错误码                     | 刷脸认证通过。                                               |
| 400    | INVALID_PARAMETER            | 查询时传入参数不正确。联系接口提供方技术人员排查。例如身份证格式不正确。（Z8105） |
| 400    | NOT_SAME_PERSON              | 刷脸认证未通过，识别结果为非本人，请确认是否为本人再发起认证。 |
| 500    | PROCESSING                   | 刷脸认证未完成。请重试，如果一直不成功，联系接口提供方技术人员排查。 |
| 500    | PROCESSING                   | 图片安全检测不通过，请确认图片是否为正常拍摄图片。（Z1146）  |
| 500    | PROCESSING                   | 系统出错了，请您稍后再试，如果多次重试依然报错，请记录好RequestId联系阿里云技术支持工程师。（Z5137） |
| 400    | UNABLE_GET_IMAGE             | 比对源不可用。远程公安网没有留底图片，无法比对。暂无解决方案。（Z1104） |
| 400    | HIGH_RISK                    | 刷脸频次过高或失败次数过多，请您24小时后再来尝试。（Z1114） |
| 400    | EXTRACT_FACE_FAIL            | 图片提取不到人脸特征，请确认图片中是否包含人脸信息。（Z1156） |
| 400    | INITIALIZE_INVALID_CERT_NAME | 姓名无效，请填写正确的姓名。(Z8109)                          |
| 400    | INITIALIZE_INVALID_CERT_AGE  | 未满14周岁的用户无法使用本产品，建议人工审核。(Z8110)        |
| 400    | INITIALIZE_INVALID_CERT_NO   | 用户身份证号码信息无效，请填写正确的身份号码信息。(Z8111)    |
| 400    | QUERY_INVALID_CERTIFYID      | 身份认证记录不存在，该CertifyId还没有对应的身份认证提交记录。(Z8304) |
| 400    | QUERY_IMG_IS_NONE            | 查询不到照片或照片不可用，可能是公安库数据问题导致。(Z8305)  |
| 400    | QUERY_CERTINFO_IS_NONE       | 查询不到身份信息，可能是用户户口迁移、军人等特殊状态导致。(Z8306) |
| 400    | QUERY_CERTINFO_ISNOT_MATCH   | 姓名和身份证不一致，可能是用户的信息有误或用户的信息为假信息，建议用户确认后重新操作。(Z8307) |
| 400    | QUERY_OCR_ISNOT_MATCH        | 使用OCR方案时，人脸与身份证上人脸比对不一致，可能人证不符或人脸照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。(Z8308) |
| 500    | SYSTEM_ERROR                 | 查询时发生系统错误。请重试，如果依然报错，请记录好RequestId联系阿里云技术支持工程师。（Z8199） |

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'GenRealPersonVerificationToken' => 
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
          'name' => 'CertificateName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '被校验的身份证人名。',
            'type' => 'string',
            'required' => true,
            'example' => '张三',
            'isFileTransferUrl' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'CertificateNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '身份证号码。',
            'type' => 'string',
            'required' => true,
            'example' => '33010219001123123X',
          ),
        ),
        2 => 
        array (
          'name' => 'MetaInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'metainfo环境参数，需要通过客户端SDK获取。Android SDK通过getMetaInfos获取，iOS SDK通过getMetaInfo获取。',
            'type' => 'string',
            'required' => true,
            'example' => '{"dwe":"ew4e"...}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A31006F2-22E7-4538-93BB-DE6B563643EE',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerificationToken' => 
                  array (
                    'description' => '可信核身认证的唯一标识。

> - 核身认证移动端请求后未进行核身认证移动端查询就没有活体和风控结果，整体认证存在一定风险，建议移动端请求结束后进行[核身认证移动端查询](~~198724~~)，完成整体认证流程。
- 调用核身认证移动端请求接口返回的verificationToken有效期时间为30分钟，从verificationToken生成时间开始算起，超过有效期再进行人脸认证会报错，请在有效期时间内完成认证。',
                    'type' => 'string',
                    'example' => '9fca3791c158a479ead9f2ba65ab3XXX',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A31006F2-22E7-4538-93BB-DE6B563643EE\\",\\n  \\"Data\\": {\\n    \\"VerificationToken\\": \\"9fca3791c158a479ead9f2ba65ab3XXX\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>A31006F2-22E7-4538-93BB-DE6B563643EE</RequestId>\\n<Data>\\n    <VerificationToken>9fca3791c158a479ead9f2ba65ab3XXX</VerificationToken>\\n</Data>","errorExample":""}]',
      'title' => '生成实人认证会话令牌',
      'summary' => '核身认证请求。',
      'description' => '## 功能描述
核身认证移动端请求能力可以在移动端依据被验证的人名和身份证号码，请求身份验证的用户图像信息。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 金融机构网上开户：在金融行业手机App注册开户，通过实人认证，验证开户用户真实身份，降低运营成本，提升风控水平。
- 线上政务平台注册：疫情期间，政府在App中推出线上口罩预约功能，实施实人认证，可有效防止同一人当天重复领取口罩，导致分配不均。
- 修改密码或手机号码：在移动互联网App修改密码，或绑定手机号码时，通过实人认证进行用户真实身份确认。
- 网约车司机认证：网约车当前运营司机身份确认，防止冒用身份驾驶运营车辆。
- 金融风控：在支付、挂失、解冻、转账、取款、信贷、理财等各个环节进行用户身份验证，做好金融风险管控。

## 特色优势

- 金融级的指标：误识率低于1/100000，准确率高于99%。
- 成熟行业应用：服务超过2亿互联网金融用户，保障超过20亿次交易安全。
- 秒级活体检测：无需复杂交互动作，只需秒级即可完成活体检测，更高效，同时也具备更高级别私密性，更高安全性。
- 通过金融级防攻击测试：抵御各种真实发生的伪造攻击，权威数据源验证。
- 低成本落地方案：纯软件方案，支持普通摄像头，成本极低，适配室内外。
- 国内外权威认证：通过公安部认证、ISO 27001信息安全体系认证，ISO30107-3人脸活体防攻击认证（iBeta PAD Level1）， ISO/TC68。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/GenRealPersonVerificationToken?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 计费说明
关于核身认证移动端请求的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见：
- [服务端接入教程](~~201625~~)
- [iOS端接入教程](~~201379~~)
- [Android端接入教程](~~201380~~)',
      'extraInfo' => '## 错误码
关于核身认证移动端请求的错误码如下表所示。
| 状态码 | 错误码                       | 描述                                                         |
| ------ | ---------------------------- | ------------------------------------------------------------ |
| 200    | 无错误码                     | 刷脸认证通过。                                               |
| 400    | INVALID_PARAMETER            | 查询时传入参数不正确。联系接口提供方技术人员排查。例如身份证格式不正确。（Z8105） |
| 400    | NOT_SAME_PERSON              | 刷脸认证未通过，识别结果为非本人，请确认是否为本人再发起认证。 |
| 500    | PROCESSING                   | 刷脸认证未完成。请重试，如果一直不成功，联系接口提供方技术人员排查。 |
| 500    | PROCESSING                   | 图片安全检测不通过，请确认图片是否为正常拍摄图片。（Z1146）  |
| 500    | PROCESSING                   | 系统出错了，请您稍后再试，如果多次重试依然报错，请记录好RequestId联系阿里云技术支持工程师。（Z5137） |
| 400    | UNABLE_GET_IMAGE             | 比对源不可用。远程公安网没有留底图片，无法比对。暂无解决方案。（Z1104） |
| 400    | HIGH_RISK                    | 刷脸频次过高或失败次数过多，请您24小时后再来尝试。（Z1114） |
| 400    | EXTRACT_FACE_FAIL            | 图片提取不到人脸特征，请确认图片中是否包含人脸信息。（Z1156） |
| 400    | INITIALIZE_INVALID_CERT_NAME | 姓名无效，请填写正确的姓名。(Z8109)                          |
| 400    | INITIALIZE_INVALID_CERT_AGE  | 未满14周岁的用户无法使用本产品，建议人工审核。(Z8110)        |
| 400    | INITIALIZE_INVALID_CERT_NO   | 用户身份证号码信息无效，请填写正确的身份号码信息。(Z8111)    |
| 400    | QUERY_INVALID_CERTIFYID      | 身份认证记录不存在，该CertifyId还没有对应的身份认证提交记录。(Z8304) |
| 400    | QUERY_IMG_IS_NONE            | 查询不到照片或照片不可用，可能是公安库数据问题导致。(Z8305)  |
| 400    | QUERY_CERTINFO_IS_NONE       | 查询不到身份信息，可能是用户户口迁移、军人等特殊状态导致。(Z8306) |
| 400    | QUERY_CERTINFO_ISNOT_MATCH   | 姓名和身份证不一致，可能是用户的信息有误或用户的信息为假信息，建议用户确认后重新操作。(Z8307) |
| 400    | QUERY_OCR_ISNOT_MATCH        | 使用OCR方案时，人脸与身份证上人脸比对不一致，可能人证不符或人脸照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。(Z8308) |
| 500    | SYSTEM_ERROR                 | 查询时发生系统错误。请重试，如果依然报错，请记录好RequestId联系阿里云技术支持工程师。（Z8199） |

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DetectCelebrity' => 
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
            'example' => 'https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/xxx.jpg',
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
                'example' => '4E92C0D4-BB0F-4F25-AD13-E87D02FAA205',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'FaceRecognizeResults' => 
                  array (
                    'description' => '识别结果数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceBoxes' => 
                        array (
                          'description' => '1',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '人脸框坐标信息。格式为`[x，y，width，height]`。x和y为人脸框的左上角坐标，width和height为人脸框的宽和高。x、y、width和height四个值均为人脸框与输入图像宽和高的等比值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '[0.285,0.202,0.534,0.721]',
                          ),
                        ),
                        'Name' => 
                        array (
                          'description' => '识别出的人物名称。',
                          'type' => 'string',
                          'example' => '张三',
                        ),
                      ),
                    ),
                  ),
                  'Width' => 
                  array (
                    'description' => '图像宽度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
                  ),
                  'Height' => 
                  array (
                    'description' => '图像高度，单位像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1000',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4E92C0D4-BB0F-4F25-AD13-E87D02FAA205\\",\\n  \\"Data\\": {\\n    \\"FaceRecognizeResults\\": [\\n      {\\n        \\"FaceBoxes\\": [\\n          0\\n        ],\\n        \\"Name\\": \\"张三\\"\\n      }\\n    ],\\n    \\"Width\\": 1000,\\n    \\"Height\\": 1000\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectCelebrityResponse>\\n    <RequestId>4E92C0D4-BB0F-4F25-AD13-E87D02FAA205</RequestId>\\n    <Data>\\n        <FaceRecognizeResults>\\n            <FaceBoxes>0.285</FaceBoxes>\\n            <FaceBoxes>0.202</FaceBoxes>\\n            <FaceBoxes>0.534</FaceBoxes>\\n            <FaceBoxes>0.721</FaceBoxes>\\n            <Name>张三</Name>\\n        </FaceRecognizeResults>\\n        <Height>1000</Height>\\n        <Width>1000</Width>\\n    </Data>\\n</DetectCelebrityResponse>","errorExample":""}]',
      'title' => '明星识别',
      'summary' => '本文介绍明星识别DetectCelebrity的语法及示例。',
      'description' => '## 功能描述
明星识别能力可以识别图像中的明星人物。可以识别超过2.7万个明星人物。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectCelebrity)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：
- 请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
- 开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/facebody/DetectCelebrity)，申请通过后方可使用。

><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectCelebrity?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG。
- 图像大小：不超过3 MB。
- URL地址不能包含中文字符。

## 计费说明
关于明星识别的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectCelebrity)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的明星识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于明星识别的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸识别OOD模型](https://modelscope.cn/models/damo/cv_ir_face-recognition-ood_rts/summary)、[ArcFace人脸识别模型](https://modelscope.cn/models/damo/cv_ir50_face-recognition_arcface/summary)、[IR人脸识别模型FRIR](https://modelscope.cn/models/damo/cv_manual_face-recognition_frir/summary)、[口罩人脸识别模型FRFM-large](https://modelscope.cn/models/damo/cv_manual_face-recognition_frfm/summary)、[口罩人脸识别模型FaceMask](https://modelscope.cn/models/damo/cv_resnet_face-recognition_facemask/summary)。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DetectChefCap' => 
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
            'description' => '图像URL地址。当前仅支持上海地域的OSS链接，如何生成URL请参见[生成URL](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/facebody/DetectChefCap/ChefCap1.png',
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
                'example' => 'ADA2A7FD-6A97-4D5F-8781-FEC2DEF28418',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '厨师帽识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Confidence' => 
                        array (
                          'description' => '识别结果置信度。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.6817094683647156',
                        ),
                        'Category' => 
                        array (
                          'description' => '识别结果类别，包含head，chefcap，untreated三类。

- head：指模型判定该人员未佩戴厨师帽。

- chefcap:：指模型判定该人员已佩戴厨师帽。

- untreated：指由于图片模糊、人头过小、被局部遮挡等原因，模型未对该人头进行判断。',
                          'type' => 'string',
                          'example' => 'chefcap',
                        ),
                        'Box' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '厨师帽的位置归一化坐标`[x1,y1,x2,y2]`，左上角点`(x1,y1)`，右下角点`(x2，y2)`。',
                            'type' => 'number',
                            'example' => '[0.1,0.08,0.15,0.21]',
                            'format' => 'float',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADA2A7FD-6A97-4D5F-8781-FEC2DEF28418\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Category\\": \\"chefcap\\",\\n        \\"Confidence\\": 0.6817094683647156,\\n        \\"Box\\": [\\n          \\"[0.1,0.08,0.15,0.21]\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>ADA2A7FD-6A97-4D5F-8781-FEC2DEF28418</RequestId>\\n<Data>\\n    <Elements>\\n        <Category>chefcap</Category>\\n        <Confidence>0.6817094683647156</Confidence>\\n        <Box>0.1</Box>\\n        <Box>0.08</Box>\\n        <Box>0.15</Box>\\n        <Box>0.21</Box>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '厨师帽佩戴识别',
      'summary' => '本文介绍厨师帽检测DetectChefCap的语法及示例。',
      'description' => '## 功能描述
厨师帽检测可以检测明厨亮灶场景中厨师帽佩戴情况。

## 应用场景
名厨亮灶工程：识别餐饮企业厨房中厨师是否在工作中佩戴好厨师帽。

## 特色优势

- 可识别多种样式厨师帽。
- 可以从多种角度识别厨师帽的佩戴情况。

## 前提条件
请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

## 输入限制

- 图片格式：JPG、JPEG、PNG。

- 图片分辨率：大于300×300像素，小于1080×1920像素。

- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 错误码
关于厨师帽检测的错误码，详情请参见[常见错误码](~~146756~~)。


## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见[SDK总览](~~145033~~)下载安装。


## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'DetectVideoLivingFace' => 
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
            'description' => '输入待检测人脸的视频URL。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectVideoLivingFace/DetectVideoLivingFace1.mp4',
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
                'example' => '8E92F28B-F889-48CB-9FCC-3207CFA2215E',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '检测结果数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Rect' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '检测出的人脸位置。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '[374, 6, 493,106 ]',
                          ),
                        ),
                        'LiveConfidence' => 
                        array (
                          'description' => '活体的置信度，取值范围为0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.72464925050735474',
                        ),
                        'FaceConfidence' => 
                        array (
                          'description' => '人脸的置信度，取值范围为0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.84644949436187744',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8E92F28B-F889-48CB-9FCC-3207CFA2215E\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Rect\\": [\\n          0\\n        ],\\n        \\"LiveConfidence\\": 0.7246492505073547,\\n        \\"FaceConfidence\\": 0.8464494943618774\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>8E92F28B-F889-48CB-9FCC-3207CFA2215E</RequestId>\\n<Data>\\n    <Elements>\\n        <FaceConfidence>0.84644949436187744</FaceConfidence>\\n        <Rect>374</Rect>\\n        <Rect>6</Rect>\\n        <Rect>493</Rect>\\n        <Rect>106</Rect>\\n        <LiveConfidence>0.72464925050735474</LiveConfidence>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '视频活体检测',
      'summary' => '本文介绍视频活体检测DetectVideoLivingFace的语法及示例。',
      'description' => '## 功能描述
视频活体检测能力可以检测输入视频中的人脸来自直接拍摄还是翻拍。当视频中出现多个人脸时，对画面中面积最大的人脸进行判断，需要确保待检测人脸五官清晰可见。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectVideoLivingFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectVideoLivingFace?lang=JAVA&sdkStyle=dara&params=%7B%22Type%22%3A0%2C%22VideoUrl%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FDetectVideoLivingFace%2FDetectVideoLivingFace1.mp4%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 视频格式：MP4、AVI。
- 视频大小：不超过30 MB。
- 视频分辨率：大于64×64像素以上，视频长度大于3秒。其中人脸尺寸建议大于64×64像素。
- URL地址中不能包含中文字符。

## 计费说明
关于视频活体检测的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectVideoLivingFace)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的视频活体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于视频活体检测的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸活体检测模型-RGB](https://modelscope.cn/models/damo/cv_manual_face-liveness_flrgb/summary)、[人脸活体检测模型-IR](https://modelscope.cn/models/damo/cv_manual_face-liveness_flir/summary)、[静默人脸活体检测模型-炫彩](https://modelscope.cn/models/damo/cv_manual_face-liveness_flxc/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'GenerateHumanAnimeStyle' => 
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

- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素。最长边小于等于1999像素，人脸占比不低于60×60像素。
- 支持有单人或多人的人脸清晰正面照，最大人脸数目限制5，人脸朝向在上下左右45度以内。
- URL地址中不能包含中文字符。
> 图像内容：当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/GenerateHumanAnimeStyle/GenerateHumanAnimeStyle8.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'AlgoType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '卡通效果配置参数。取值如下：

- anime：日漫风
- 3d：3D特效
- handdrawn：手绘风
- sketch：铅笔画
- artstyle：艺术特效
- claborate  ：国画工笔画
- hongkong  ：港漫风
- comic：漫画风格
- animation3d：动画3D',
            'type' => 'string',
            'required' => false,
            'example' => 'anime',
            'default' => 'anime',
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
                'example' => '59697D68-2A6E-4553-89BD-0FADD07881E8',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '人物卡通化结果图的URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"59697D68-2A6E-4553-89BD-0FADD07881E8\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GenerateHumanAnimeStyleResponse>\\n    <RequestId>59697D68-2A6E-4553-89BD-0FADD07881E8</RequestId>\\n    <Data>\\n        <ImageURL>https://dashscope-result-sh.oss-cn-shanghai.aliyuncs.com/viapi-video/person_image_cartoonizer/2023-10-25/55798d04-0957-4ab1-accc-0e4d2d01a039/20231025092636774205_styleanime_n2vedxruht.jpg?Expires=1698283596&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&amp;Signature=ut2kn46Lz%2FRwqJ9jWJ0RBDut12****</ImageURL>\\n    </Data>\\n</GenerateHumanAnimeStyleResponse>","errorExample":""}]',
      'title' => '人物动漫化',
      'summary' => '本文介绍人物动漫化GenerateHumanAnimeStyle的语法及示例。',
      'description' => '## 功能描述
人物动漫化能力可以将一张人物图像进行转换处理，生成卡通形象，并返回动漫化后的结果图像。
- 支持风格：国画（NEW）、港漫（NEW）、漫画风（NEW）、动画3D（NEW）、日漫、3D、手绘、铅笔画和艺术特效9个风格。
- 多人照片：可转换多人照片，一次可处理图片中最多5个人脸。

关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231121/ctcn/GenerateHumanAnimeStyle.png" width="600)

- 漫画风（NEW）：漫画风格模拟复古漫画风格中的人物形象，适合各种类型的写真照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231121/qtpu/GenerateHumanAnimeStylemanhua1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231121/nump/GenerateHumanAnimeStylemanhua2.png" width="500)

- 动画3D风（NEW）：动画3D风格模拟动画3D的人物形象和质感，适合各种类型的写真照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231121/xogr/GenerateHumanAnimeStyledonghua1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231121/jjgc/GenerateHumanAnimeStyledonghua2.png" width="500)

- 港漫风（NEW）：港漫风格的能力比较综合，适合各种类型的照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/gxbu/GenerateHumanAnimeStylegangman1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/bbbi/GenerateHumanAnimeStylegangman2.png" width="500)

- 国画风（NEW）：国画风格适合古装写真照，如汉服、唐装等，以全身照和半身照背景简约的照片为宜。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/gsxw/GenerateHumanAnimeStyleguofeng1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/wmut/GenerateHumanAnimeStyleguofeng2.png" width="500)

- 手绘风：手绘风格适合各种类型的写真照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/smel/GenerateHumanAnimeStyleshouhui1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/adxx/GenerateHumanAnimeStyleshouhui2.png" width="500)

- 艺术特效：艺术特效适合照片颜色比较鲜艳，彩妆、浓妆等写真造型。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/dilz/GenerateHumanAnimeStyleyishu1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/gloq/GenerateHumanAnimeStyleyishu2.png" width="500)

- 3D特效：3D特效风格比较综合，适合各种类型的人物照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/wfbj/GenerateHumanAnimeStyle3d1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/rnkc/GenerateHumanAnimeStyle3d2.png" width="500)

- 日漫风：日漫风格比较综合，适合各种类型的人物照片，以Cosplay类型为佳。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/toby/GenerateHumanAnimeStyleriman1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/laxr/GenerateHumanAnimeStyleriman2.png" width="500)

- 铅笔画：铅笔画风格比较综合，适合各种类型的人物照片。
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/yqdb/GenerateHumanAnimeStyleqianbi1.png" width="500)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231025/nakc/GenerateHumanAnimeStyleqianbi2.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=GenerateHumanAnimeStyle)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 保护隐私：为保护图像中的人物隐私，将人物卡通化，可避免识别出原人物是谁。保留社交趣味度的同时避免过度娱乐化。
- 社交娱乐：将自己的照片变成卡通人物，塑造可爱氛围，配上图文分享给朋友。
- 特效应用：可用于打造个性头像以及趣味活动等场景。

## 特色优势
- 复刻人物表情：基于深度学习算法，识别人物性别、表情等特征，在卡通头像上还原。
- 全身卡通化：相比人脸卡通化，可避免笑场等尴尬场景。
- 多人模式：可处理情侣照、家庭照、团体类照片。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/GenerateHumanAnimeStyle?&lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FGenerateHumanAnimeStyle%2FGenerateHumanAnimeStyle1.png%22%2C%22AlgoType%22%3A%22anime%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[人物动漫化示例代码](~~477407~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)


## 输入限制

- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于2000×2000像素，最长边小于等于1999像素，人脸占比不低于60×60像素。
- 支持有单人或多人的人脸清晰正面照，最大人脸数目限制5，人脸朝向在上下左右45度以内。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人物动漫化的计费方式及报价，请参见[计费介绍](~~184049~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人脸动漫化能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。
## 示例代码
该能力常用语言的示例代码，请参见[人物动漫化示例代码](~~477407~~)。',
      'extraInfo' => '## 错误码
关于人物动漫化的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'GenerateHumanSketchStyle' => 
    array (
      'summary' => '添加人像素描风格化。',
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
            'title' => 'A short description of struct',
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPG、JPEG、PNG。
- 图像大小：小于10 MB。
- 图像分辨率：大于100×100像素，小于2000×2000像素，最长边小于等于1999像素；人脸占比不低于60×60像素。
- 图像质量：支持有单人人脸的清晰正面照，人脸朝向在上下左右45度以内。
- URL地址中不能包含中文字符。
> 图像内容：当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/GenerateHumanSketchStyle/GenerateHumanSketchStyle7.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ReturnType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像返回形式。取值如下：

- head：大头照（默认）
- full：全身照

推荐使用大头照，处理效果更佳。',
            'type' => 'string',
            'required' => false,
            'example' => 'head',
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
                'example' => 'E499788C-22DA-4F0E-B9C0-0E9D30A25716',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'title' => '出参图片地址',
                    'description' => '返回图片URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-pencil/fd49dd0a-9e24-4bb5-b303-0745cdb453e0_7aa6_20210128-073045.jpg?Expires=1611820849&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=1oLYG%2FPe%2BNRIK7XcsUQYaKF%2B1C****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E499788C-22DA-4F0E-B9C0-0E9D30A25716\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-pencil/fd49dd0a-9e24-4bb5-b303-0745cdb453e0_7aa6_20210128-073045.jpg?Expires=1611820849&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=1oLYG%2FPe%2BNRIK7XcsUQYaKF%2B1C****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GenerateHumanSketchStyleResponse>\\n    <RequestId>E499788C-22DA-4F0E-B9C0-0E9D30A25716</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/person-image-pencil/fd49dd0a-9e24-4bb5-b303-0745cdb453e0_7aa6_20210128-073045.jpg?Expires=1611820849&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=1oLYG%2FPe%2BNRIK7XcsUQYaKF%2B1C****</ImageURL>\\n    </Data>\\n</GenerateHumanSketchStyleResponse>","errorExample":""}]',
      'title' => '人像素描风格化',
      'description' => '## 功能描述
人像素描风格化能力可以对一张人物图像自动识别其头部区域，生成大头照下的素描画效果。返回结果的分辨率固定为512x512像素。

关于该接口功能的示例图如下：
- 输入原图
![输入图像](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/qflk/GenerateHumanSketchStyle.png" width="300)
- 输出效果图
![生成效果](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/nsbr/GenerateHumanSketchStylesumiao.png" width="300)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=GenerateHumanSketchStyle)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
社交娱乐：输入一张个人照片，通过人像素描风格化算法能力，会生成一张独一无二的素描肖像画。可以与朋友分享，也可以用来做头像。

## 特色优势
精准刻画：通过深度学习算法，精准还原人脸五官特征，连发丝都可精准还原。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/GenerateHumanSketchStyle?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FGenerateHumanSketchStyle%2FGenerateHumanSketchStyle1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG。
- 图像大小：小于10 MB。
- 图像分辨率：大于100×100像素，小于2000×2000像素，最长边小于等于1999像素；人脸占比不低于60×60像素。
- 图像质量：支持有单人人脸的清晰正面照，人脸朝向在上下左右45度以内。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于人像素描风格化的计费方式及报价，请参见[计费介绍](~~184049~~)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的人像素描风格化能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于人像素描风格化的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeAction' => 
    array (
      'summary' => '本文介绍动作行为识别RecognizeAction的语法及示例。',
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
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '输入内容类型，包括视频和图像两种类型。

- 0：表示输入视频URL或视频Base64编码字符串。

- 1：表示输入图像URL或图像Base64编码字符串。

- 其他：非法输入。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'VideoUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Type为0时需要输入的视频URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeAction/RecognizeAction-video1.mp4',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'URLList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '图像列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '图像列表',
              'type' => 'object',
              'properties' => 
              array (
                'URL' => 
                array (
                  'description' => 'Type为1时需要输入的图像URL地址，**必须输入4张图像，且4张图像建议为两秒钟视频均匀采样的图像，分辨率和通道数必须一致**。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeAction/1RecognizeAction1.png',
                  'isFileTransferUrl' => true,
                ),
                'imageData' => 
                array (
                  'description' => '图像Base64编码字符串，与URL共存时，URL优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgQ****',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 300,
          ),
        ),
        3 => 
        array (
          'name' => 'VideoData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '视频Base64编码字符串，与VideoURL共存时，VideoURL优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'iVBORw0KGgoAAAANSUhEUgAAAoAAAAHJCAIAAACaEB9NAAEAAElEQVR4nNT9Wb****',
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
                'example' => 'E9C40AF5-A7F8-49D5-8A0C-B21F15A07F17',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回的结果元素列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Scores' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '行为类别的置信度。取值范围0~1，值越大，识别到的动作越准确。系统根据算法，为不同的动作给出判断的阈值标准，您也可以根据自己的实际情况，对判断的阈值标准进行调整。

- 举手：0.5（低于0.5则认为不是举手行为，否则认为是举手行为。）

- 吃喝：0.5（低于0.5则认为不是吃喝行为，否则认为是吃喝行为。）

- 吸烟：0.5（低于0.5则认为不是吸烟行为，否则认为是吸烟行为。）

- 打电话：0.5（低于0.5则认为不是打电话行为，否则认为是打电话行为。）

- 玩手机：0.5（低于0.5则认为不是玩手机行为，否则认为是玩手机行为。）

- 趴桌睡觉：0.5（低于0.5则认为不是趴桌睡觉行为，否则认为是趴桌睡觉行为。）

- 跌倒：0.5（低于0.5则认为不是跌倒行为，否则认为是跌倒行为。）
- 洗手：0.5（低于0.5则认为不是洗手行为，否则认为是洗手行为。）
- 拍照：0.5（低于0.5则认为不是拍照行为，否则认为是拍照行为。）',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.702967643737793',
                          ),
                        ),
                        'Labels' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '识别到的行为类别。',
                            'type' => 'string',
                            'example' => '跌倒',
                          ),
                        ),
                        'Boxes' => 
                        array (
                          'description' => '具体动作的坐标框列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Box' => 
                              array (
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '具体动作的坐标框信息。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '[1119,576,1373,970]',
                                ),
                              ),
                            ),
                          ),
                        ),
                        'Timestamp' => 
                        array (
                          'description' => '当前行为在视频或者图像中发生的时间戳信息。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E9C40AF5-A7F8-49D5-8A0C-B21F15A07F17\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"Scores\\": [\\n          0.702967643737793\\n        ],\\n        \\"Labels\\": [\\n          \\"跌倒\\"\\n        ],\\n        \\"Boxes\\": [\\n          {\\n            \\"Box\\": [\\n              0\\n            ]\\n          }\\n        ],\\n        \\"Timestamp\\": 3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>E9C40AF5-A7F8-49D5-8A0C-B21F15A07F17</RequestId>\\n<Data>\\n    <Elements>\\n        <Timestamp>1</Timestamp>\\n    </Elements>\\n    <Elements>\\n        <Scores>0.702967643737793</Scores>\\n        <Labels>跌倒</Labels>\\n        <Timestamp>3</Timestamp>\\n        <Boxes>\\n            <Box>1119</Box>\\n            <Box>576</Box>\\n            <Box>1373</Box>\\n            <Box>970</Box>\\n        </Boxes>\\n    </Elements>\\n    <Elements>\\n        <Scores>0.7334273457527161</Scores>\\n        <Labels>跌倒</Labels>\\n        <Timestamp>5</Timestamp>\\n        <Boxes>\\n            <Box>1128</Box>\\n            <Box>613</Box>\\n            <Box>1363</Box>\\n            <Box>991</Box>\\n        </Boxes>\\n    </Elements>\\n</Data>","errorExample":""}]',
      'title' => '动作行为识别',
      'description' => '## 功能描述
动作行为识别能力可以识别视频和图像中的人体动作行为，并返回识别后的行为类别。当前可以识别的行为类别包括：举手、吃喝、吸烟、打电话、玩手机、趴桌睡觉、跌倒、洗手、拍照。您可以根据系统提供的动作置信度判断阈值，对识别的动作进行判断。

**动作行为识别适用范围：**
- 举手：手臂伸直高高举起，手腕高过头顶。
- 吃喝：吃东西或者喝水。
- 吸烟：将烟点着，真吸烟，画面中需要能看清烟。
- 打电话：电话或者微信语音，手机必须靠近耳朵或者嘴边。
- 玩手机：用手机打字、浏览手机、看视频、玩游戏，视频聊天等玩手机行为，画面中需要能看清手机。
- 趴桌睡觉：头趴在桌子上睡觉。
- 跌倒：整个人跌倒在地，身体倒下。
- 洗手：在水龙头或者盆中洗手。
- 拍照：手机稍微举起，用手机对着某人或物拍照。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeAction)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 驾驶员监控系统（DMS）：检测驾驶员是否存在吸烟、吃喝、打电话、玩手机等影响安全驾驶的行为。
- 学习状况监测：监测学习过程是否存在举手、玩手机、趴桌子睡觉等行为。
- 公共场所行为监测：监测在博物馆、展览馆等公共场所是否存在吸烟、打电话、拍照等不文明行为，以及是否有跌倒这样的异常情况发生。
- 工作场所监督：监测在工作场所是否存在吃喝、吸烟、打电话、趴桌子睡觉等行为，是否有按要求洗手。

## 特色优势
- 覆盖多种应用场景：支持识别举手、吃喝、吸烟、打电话、玩手机、睡觉、跌打、洗手、拍照等行为，涵盖驾驶、学习、泛安防等多种场景。
- 适应多种光照条件：适应在自然光、室内光照、夜晚红外模式等光照条件下的行为识别。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RecognizeAction?lang=JAVA&sdkStyle=old&params=%7B%22Type%22%3A1%2C%22URLList%22%3A%5B%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeAction%2F1RecognizeAction1.png%22%7D%2C%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeAction%2F1RecognizeAction2.png%22%7D%2C%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeAction%2F1RecognizeAction3.png%22%7D%2C%7B%22URL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeAction%2F1RecognizeAction4.png%22%7D%5D%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[动作行为识别示例代码](~~478479~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 视频要求：
    1. 时长大于2秒，小于5秒。如果输入视频时长大于5秒，系统仅返回前5秒的检测结果。
    2. 视频大小应小于10 MB。
    3. 分辨率大于256×256像素，小于等于1280×720像素。
    4. 支持一些常见的视频格式，例如MPEG、AVI、MOV、MP4。

        > 建议为居家摄像头或近距离监控场景。即摄像头固定不动，拍摄距离为2米~10米。
- 图像要求：

    1. 帧数4帧，必须是同一个视频连续2秒均匀抽帧的结果。如果输入4帧非同一个视频中的，会导致识别报错。
    2. 分辨率大于256×256像素，小于等于1280×720像素。
    3. 支持的格式为JPEG、PNG、BMP、JPG。
    4. 可使用URL与Base64编码字符串混合输入。

- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的动作行为识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[动作行为识别示例代码](~~478479~~)。',
      'extraInfo' => '## 错误码
关于动作行为识别的错误码，详情请参见[常见错误码](~~146756~~)。


## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'HandPosture' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/HandPosture/HandPosture3.jpg',
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
                'example' => '99CE0601-FA61-4A41-BBF0-72D3E1FF5139',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Outputs' => 
                  array (
                    'description' => '手势检测结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'HandCount' => 
                        array (
                          'description' => '手掌的个数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Results' => 
                        array (
                          'description' => '手势类别。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Hands' => 
                              array (
                                'description' => '手势关键点信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'KeyPoints' => 
                                  array (
                                    'description' => '关键点坐标，是相对坐标，即相对于图像尺寸的坐标。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'Positions' => 
                                        array (
                                          'description' => '相对于图像尺寸的关键点坐标。',
                                          'type' => 'array',
                                          'items' => 
                                          array (
                                            'type' => 'object',
                                            'properties' => 
                                            array (
                                              'Points' => 
                                              array (
                                                'type' => 'array',
                                                'items' => 
                                                array (
                                                  'description' => '关键点的坐标，x和y的取值范围为0~1。相对于图像宽度width和图像高度height的相对坐标，实际坐标为`x*width`和`y*height`。',
                                                  'type' => 'number',
                                                  'format' => 'float',
                                                  'example' => '[0.5656, 0.4567]',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                        'Label' => 
                                        array (
                                          'description' => '关键点的标签。',
                                          'type' => 'string',
                                          'example' => 'thumb',
                                        ),
                                      ),
                                    ),
                                  ),
                                  'Confident' => 
                                  array (
                                    'description' => '置信度。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.555',
                                  ),
                                ),
                              ),
                              'Box' => 
                              array (
                                'description' => '手势的检测框信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Positions' => 
                                  array (
                                    'description' => '手的检测框信息。格式为` [左上, 右上, 右下, 左下]` 。',
                                    'type' => 'array',
                                    'items' => 
                                    array (
                                      'type' => 'object',
                                      'properties' => 
                                      array (
                                        'Points' => 
                                        array (
                                          'type' => 'array',
                                          'items' => 
                                          array (
                                            'description' => '手体检测框的坐标，x和y的取值范围为0~1。相对于图像宽度width和图像高度height的相对坐标，实际坐标为`x*width`和`y*height`。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '[0.5656, 0.4567]',
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                  'Confident' => 
                                  array (
                                    'description' => '手势检测框的置信度。',
                                    'type' => 'number',
                                    'format' => 'float',
                                    'example' => '0.555',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MetaObject' => 
                  array (
                    'description' => '图像基本信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Width' => 
                      array (
                        'description' => '图像宽度，单位像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '500',
                      ),
                      'Height' => 
                      array (
                        'description' => '图像高度，单位像素。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '600',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"99CE0601-FA61-4A41-BBF0-72D3E1FF5139\\",\\n  \\"Data\\": {\\n    \\"Outputs\\": [\\n      {\\n        \\"HandCount\\": 1,\\n        \\"Results\\": [\\n          {\\n            \\"Hands\\": {\\n              \\"KeyPoints\\": [\\n                {\\n                  \\"Positions\\": [\\n                    {\\n                      \\"Points\\": [\\n                        0\\n                      ]\\n                    }\\n                  ],\\n                  \\"Label\\": \\"thumb\\"\\n                }\\n              ],\\n              \\"Confident\\": 0.555\\n            },\\n            \\"Box\\": {\\n              \\"Positions\\": [\\n                {\\n                  \\"Points\\": [\\n                    0\\n                  ]\\n                }\\n              ],\\n              \\"Confident\\": 0.555\\n            }\\n          }\\n        ]\\n      }\\n    ],\\n    \\"MetaObject\\": {\\n      \\"Width\\": 500,\\n      \\"Height\\": 600\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>99CE0601-FA61-4A41-BBF0-72D3E1FF5139</RequestId>\\n<Data>\\n    <MetaObject>\\n        <Height>360</Height>\\n        <Width>640</Width>\\n    </MetaObject>\\n    <Outputs>\\n        <Results>\\n            <Hands>\\n                <Confident>0.99994850158691406</Confident>\\n                <KeyPoints>\\n                    <Label>0</Label>\\n                    <Positions>\\n                        <Points>0.60814106464385986</Points>\\n                        <Points>0.57843714952468872</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>1</Label>\\n                    <Positions>\\n                        <Points>0.5954553484916687</Points>\\n                        <Points>0.53584885597229</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>2</Label>\\n                    <Positions>\\n                        <Points>0.58072149753570557</Points>\\n                        <Points>0.52881228923797607</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>3</Label>\\n                    <Positions>\\n                        <Points>0.55731791257858276</Points>\\n                        <Points>0.53051036596298218</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>4</Label>\\n                    <Positions>\\n                        <Points>0.556272029876709</Points>\\n                        <Points>0.54263561964035034</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>5</Label>\\n                    <Positions>\\n                        <Points>0.58563053607940674</Points>\\n                        <Points>0.5606304407119751</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>6</Label>\\n                    <Positions>\\n                        <Points>0.55570542812347412</Points>\\n                        <Points>0.56016099452972412</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>7</Label>\\n                    <Positions>\\n                        <Points>0.527125895023346</Points>\\n                        <Points>0.53607034683227539</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>8</Label>\\n                    <Positions>\\n                        <Points>0.50249892473220825</Points>\\n                        <Points>0.52858757972717285</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>9</Label>\\n                    <Positions>\\n                        <Points>0.58144932985305786</Points>\\n                        <Points>0.600288450717926</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>10</Label>\\n                    <Positions>\\n                        <Points>0.548987090587616</Points>\\n                        <Points>0.57786983251571655</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>11</Label>\\n                    <Positions>\\n                        <Points>0.51771032810211182</Points>\\n                        <Points>0.56192481517791748</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>12</Label>\\n                    <Positions>\\n                        <Points>0.48404961824417114</Points>\\n                        <Points>0.55325514078140259</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>13</Label>\\n                    <Positions>\\n                        <Points>0.57908332347869873</Points>\\n                        <Points>0.62439030408859253</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>14</Label>\\n                    <Positions>\\n                        <Points>0.5494731068611145</Points>\\n                        <Points>0.615152895450592</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>15</Label>\\n                    <Positions>\\n                        <Points>0.52025854587554932</Points>\\n                        <Points>0.58855414390563965</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>16</Label>\\n                    <Positions>\\n                        <Points>0.48847651481628418</Points>\\n                        <Points>0.55619245767593384</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>17</Label>\\n                    <Positions>\\n                        <Points>0.57136648893356323</Points>\\n                        <Points>0.65912783145904541</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>18</Label>\\n                    <Positions>\\n                        <Points>0.54293251037597656</Points>\\n                        <Points>0.617222249507904</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>19</Label>\\n                    <Positions>\\n                        <Points>0.53020155429840088</Points>\\n                        <Points>0.606507420539856</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>20</Label>\\n                    <Positions>\\n                        <Points>0.50880300998687744</Points>\\n                        <Points>0.58464843034744263</Points>\\n                    </Positions>\\n                </KeyPoints>\\n            </Hands>\\n            <Box>\\n                <Confident>0.71226352453231812</Confident>\\n                <Positions>\\n                    <Points>0.4974265992641449</Points>\\n                    <Points>0.50328123569488525</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.62906938791275024</Points>\\n                    <Points>0.50328123569488525</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.62906938791275024</Points>\\n                    <Points>0.65238773822784424</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.4974265992641449</Points>\\n                    <Points>0.65238773822784424</Points>\\n                </Positions>\\n            </Box>\\n        </Results>\\n        <Results>\\n            <Hands>\\n                <Confident>0.9999852180480957</Confident>\\n                <KeyPoints>\\n                    <Label>0</Label>\\n                    <Positions>\\n                        <Points>0.393640398979187</Points>\\n                        <Points>0.59868341684341431</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>1</Label>\\n                    <Positions>\\n                        <Points>0.42132681608200073</Points>\\n                        <Points>0.62495428323745728</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>2</Label>\\n                    <Positions>\\n                        <Points>0.43745431303977966</Points>\\n                        <Points>0.689828097820282</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>3</Label>\\n                    <Positions>\\n                        <Points>0.4462774395942688</Points>\\n                        <Points>0.77660030126571655</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>4</Label>\\n                    <Positions>\\n                        <Points>0.45127806067466736</Points>\\n                        <Points>0.83825963735580444</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>5</Label>\\n                    <Positions>\\n                        <Points>0.44249773025512695</Points>\\n                        <Points>0.71941894292831421</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>6</Label>\\n                    <Positions>\\n                        <Points>0.44476762413978577</Points>\\n                        <Points>0.81073153018951416</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>7</Label>\\n                    <Positions>\\n                        <Points>0.45668521523475647</Points>\\n                        <Points>0.86831820011138916</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>8</Label>\\n                    <Positions>\\n                        <Points>0.45888024568557739</Points>\\n                        <Points>0.93340605497360229</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>9</Label>\\n                    <Positions>\\n                        <Points>0.41096386313438416</Points>\\n                        <Points>0.7522350549697876</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>10</Label>\\n                    <Positions>\\n                        <Points>0.41827210783958435</Points>\\n                        <Points>0.83636075258255</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>11</Label>\\n                    <Positions>\\n                        <Points>0.43387466669082642</Points>\\n                        <Points>0.87332594394683838</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>12</Label>\\n                    <Positions>\\n                        <Points>0.44423216581344604</Points>\\n                        <Points>0.9019133448600769</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>13</Label>\\n                    <Positions>\\n                        <Points>0.38739094138145447</Points>\\n                        <Points>0.76350539922714233</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>14</Label>\\n                    <Positions>\\n                        <Points>0.39671486616134644</Points>\\n                        <Points>0.82768404483795166</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>15</Label>\\n                    <Positions>\\n                        <Points>0.41303998231887817</Points>\\n                        <Points>0.84740370512008667</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>16</Label>\\n                    <Positions>\\n                        <Points>0.43770962953567505</Points>\\n                        <Points>0.86880898475646973</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>17</Label>\\n                    <Positions>\\n                        <Points>0.3712017834186554</Points>\\n                        <Points>0.760955810546875</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>18</Label>\\n                    <Positions>\\n                        <Points>0.387716680765152</Points>\\n                        <Points>0.83686923980712891</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>19</Label>\\n                    <Positions>\\n                        <Points>0.39462429285049438</Points>\\n                        <Points>0.84625548124313354</Points>\\n                    </Positions>\\n                </KeyPoints>\\n                <KeyPoints>\\n                    <Label>20</Label>\\n                    <Positions>\\n                        <Points>0.41109806299209595</Points>\\n                        <Points>0.83971405029296875</Points>\\n                    </Positions>\\n                </KeyPoints>\\n            </Hands>\\n            <Box>\\n                <Confident>0.59800052642822266</Confident>\\n                <Positions>\\n                    <Points>0.35801595449447632</Points>\\n                    <Points>0.54407310485839844</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.47501063346862793</Points>\\n                    <Points>0.54407310485839844</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.47501063346862793</Points>\\n                    <Points>0.93112361431121826</Points>\\n                </Positions>\\n                <Positions>\\n                    <Points>0.35801595449447632</Points>\\n                    <Points>0.93112361431121826</Points>\\n                </Positions>\\n            </Box>\\n        </Results>\\n        <HandCount>2</HandCount>\\n    </Outputs>\\n</Data>","errorExample":""}]',
      'title' => '手势关键点检测',
      'summary' => '本文介绍手势关键点检测HandPosture的语法及示例。',
      'description' => '## 功能描述
手势关键点检测能力可以获取手势的二十一个关键点信息。

关于该接口功能的示例图如下：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/oazb/HandPosture.jpg" width="200)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=HandPosture)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/HandPosture?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FHandPosture%2FHandPosture1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、BMP、PNG。
- 图像大小：不超过4 MB。
- URL地址中不能包含中文字符。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的手势关键点检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于手势关键点检测的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[全身关键点检测-通用领域-2D](https://www.modelscope.cn/models/damo/cv_hrnetw48_human-wholebody-keypoint_image/summary)和[YOLOX-PAI手部检测模型](https://www.modelscope.cn/models/damo/cv_yolox-pai_hand-detection/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RecognizeExpression' => 
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RecognizeExpression/RecognizeExpression7.jpg',
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
                'example' => 'E1C4C576-1799-4079-A934-15BC406A54EF',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '各个子元素的识别结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '各个子元素的识别结果。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceRectangle' => 
                        array (
                          'description' => '人脸区域信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Top' => 
                            array (
                              'description' => '以图像左上角为坐标原点，人脸区域左上角的y坐标。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '67',
                            ),
                            'Width' => 
                            array (
                              'description' => '人脸区域的宽度。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '113',
                            ),
                            'Height' => 
                            array (
                              'description' => '人脸区域的高度。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '154',
                            ),
                            'Left' => 
                            array (
                              'description' => '以图像左上角为坐标原点，人脸区域左上角的x坐标。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '370',
                            ),
                          ),
                        ),
                        'Expression' => 
                        array (
                          'description' => '表情类别。取值如下：

- neutral：中性
- happiness：高兴
- surprise：惊讶
- sadness：伤心
- anger：生气
- disgust：厌恶
- fear：害怕
- pouty：嘟嘴
- grimace：做鬼脸',
                          'type' => 'string',
                          'example' => 'happiness',
                        ),
                        'FaceProbability' => 
                        array (
                          'description' => '人脸的概率，取值范围为0~1。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.88330078125',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E1C4C576-1799-4079-A934-15BC406A54EF\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"FaceRectangle\\": {\\n          \\"Top\\": 67,\\n          \\"Width\\": 113,\\n          \\"Height\\": 154,\\n          \\"Left\\": 370\\n        },\\n        \\"Expression\\": \\"happiness\\",\\n        \\"FaceProbability\\": 0.88330078125\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RecognizeExpressionResponse>\\n    <RequestId>E1C4C576-1799-4079-A934-15BC406A54EF</RequestId>\\n    <Data>\\n        <Elements>\\n            <FaceRectangle>\\n                <Top>67</Top>\\n                <Width>113</Width>\\n                <Height>154</Height>\\n                <Left>370</Left>\\n            </FaceRectangle>\\n            <Expression>happiness</Expression>\\n            <FaceProbability>0.8833008</FaceProbability>\\n        </Elements>\\n    </Data>\\n</RecognizeExpressionResponse>","errorExample":""}]',
      'title' => '表情识别',
      'summary' => '本文为您介绍表情识别RecognizeExpression的语法及示例。',
      'description' => '## 功能描述
表情识别能力可以检测和识别图片中人脸的表情。表情种类为：neutral（中性）、happiness（高兴）、surprise（惊讶）、sadness（伤心）、anger（生气）、disgust（厌恶）、fear（害怕）、pouty（嘟嘴）、grimace（鬼脸）。
关于该接口功能的示例图如下：

- 输入原图
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231206/ggvw/RecognizeExpression.jpeg" width="500)
- 检测返回结果示意图
![](https://help-static-aliyun-doc.aliyuncs.com/file-manage-files/zh-CN/20231206/iddo/RecognizeExpression1.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeExpression)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 面部识别场景：通过识别用户人脸面部表情，对面部的真实表情进行检测和控制。
- 表情识别场景：通过表情识别技术，来确定被识别对象的心理情绪理解。
- 互动娱乐场景：获取表情、情绪等人脸属性信息，实现特效相机等互动娱乐功能。

## 特色优势

- 支持识别多种表情：中性、高兴、惊讶、伤心、生气、厌恶、害怕、嘟嘴、鬼脸等9种情绪。
- 简单易用：可直接调用的API接口，服务简单易用，易被集成，兼容性强。
- 尊重客户隐私，图片上传24小时内删除，服务不留存客户图像。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RecognizeExpression?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRecognizeExpression%2FRecognizeExpression1.jpg%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)


## 输入限制
- 图像格式：JPEG、JPG、BMP、PNG、TIF、WEBP。
- 图像大小：不超过3 MB。
- 图片分辨率：大于5×5像素，小于2048×2048像素，人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于表情识别的计费方式及报价，请参见[计费介绍](~~184049~~)。

> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RecognizeExpression)。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的表情识别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '##  错误码
关于表情识别的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸属性识别模型FairFace](https://modelscope.cn/models/damo/cv_resnet34_face-attribute-recognition_fairface/summary)、[人脸表情识别模型FER](https://modelscope.cn/models/damo/cv_vgg19_facial-expression-recognition_fer/summary)、[人脸质量模型FQA](https://modelscope.cn/models/damo/cv_manual_face-quality-assessment_fqa/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'BatchAddFaces' => 
    array (
      'summary' => '本文介绍批量添加人脸数据BatchAddFaces的语法及示例。',
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
          'name' => 'DbName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据库名称。支持小写字母、数字、下划线的组合，长度1~64。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '实体ID，用来标识用户的唯一性，如用户ID、员工ID等。每个实体可包含多张人脸图片。支持大小写字母、数字、下划线、减号的组合，长度为2~64字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'U1',
          ),
        ),
        2 => 
        array (
          'name' => 'SimilarityScoreThresholdInEntity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类内相似度阈值。将新增人脸图片与**EntityId**内已有人脸进行相似比对，小于该阈值则表示与其他人脸图片差异较大，添加失败.；若**EntityId**内没有人脸存在，则添加成功。取值范围\\[0.0,100.0]。0.0或空则表示不做类内相似度判断逻辑。参考值见[人脸比对1:1](~~151891~~)接口的返回结果字段**Thresholds**。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
          ),
        ),
        3 => 
        array (
          'name' => 'SimilarityScoreThresholdBetweenEntity',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '类间相似度阈值。将新增人脸图片与其他所有**EntityId**内已有人脸进行相似比对，大于等于该阈值则表示其他**EntityId**内存在相似人脸，出现重复，添加失败。取值范围\\[0.0,100.0]。0.0或空则表示不做类间相似度判断逻辑。参考值见[人脸比对1:1](~~151891~~)接口的返回结果字段**Thresholds**。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
          ),
        ),
        4 => 
        array (
          'name' => 'Faces',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '人脸信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '1',
              'type' => 'object',
              'properties' => 
              array (
                'ExtraData' => 
                array (
                  'description' => '自定义信息。支持字母、数字、标点符号和汉字。不超过512个字符。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '王小二',
                ),
                'ImageURL' => 
                array (
                  'description' => '人脸图像URL地址。人脸必须是正面无遮挡单人人脸。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/1.png',
                  'isFileTransferUrl' => true,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 5,
          ),
        ),
        5 => 
        array (
          'name' => 'QualityScoreThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质量分阈值。对新增人脸图片进行质量分析判断，得到的质量分小于该阈值则表示新增人脸图片质量不符合要求，添加失败。取值范围\\[0.0,100.0]。0.0或空则表示不做质量分判断逻辑。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50.0',
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
            'description' => '1',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C46A46D0-3263-181A-A1EE-0901E4595390',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'InsertedFaces' => 
                  array (
                    'description' => '添加成功的记录结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '人脸图像地址，与输入的ImageUrl相同，用来标记图像记录。',
                          'type' => 'string',
                          'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png',
                        ),
                        'FaceId' => 
                        array (
                          'description' => '输出人脸ID。',
                          'type' => 'string',
                          'example' => '16350536',
                        ),
                        'QualitieScore' => 
                        array (
                          'description' => '输入图像中的人脸质量分。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '99.79581',
                        ),
                      ),
                    ),
                  ),
                  'FailedFaces' => 
                  array (
                    'description' => '添加失败的记录结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '1',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '人脸图像地址，与输入的ImageUrl相同，用来标记图像记录。',
                          'type' => 'string',
                          'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png',
                        ),
                        'Code' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'ClientError.IllegalArgument',
                        ),
                        'Message' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'not found the db=test',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C46A46D0-3263-181A-A1EE-0901E4595390\\",\\n  \\"Data\\": {\\n    \\"InsertedFaces\\": [\\n      {\\n        \\"ImageURL\\": \\"https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png\\",\\n        \\"FaceId\\": \\"16350536\\",\\n        \\"QualitieScore\\": 99.79581\\n      }\\n    ],\\n    \\"FailedFaces\\": [\\n      {\\n        \\"ImageURL\\": \\"https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png\\",\\n        \\"Code\\": \\"ClientError.IllegalArgument\\",\\n        \\"Message\\": \\"not found the db=test\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<BatchAddFacesResponse>\\n    <RequestId>C46A46D0-3263-181A-A1EE-0901E4595390</RequestId>\\n    <Data>\\n        <InsertedFaces>\\n            <ImageURL>https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png</ImageURL>\\n            <FaceId>16350536</FaceId>\\n            <QualitieScore>99.79581</QualitieScore>\\n        </InsertedFaces>\\n        <FailedFaces>\\n            <ImageURL>https://viapi-test.oss-cn-shanghai.aliyuncs.com/test/imgsearch/demo/xxxx.png</ImageURL>\\n            <Code>ClientError.IllegalArgument</Code>\\n            <Message>not found the db=test</Message>\\n        </FailedFaces>\\n    </Data>\\n</BatchAddFacesResponse>","errorExample":""}]',
      'title' => '批量添加人脸数据',
      'description' => '## 功能描述
批量添加人脸数据能力可以为已创建好的人脸样本中批量添加人脸数据，每个人脸样本最多可以添加5张人脸照片，所以批量添加最多一次添加5张人脸照片。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/BatchAddFaces?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG、BMP。
- 图像大小：不超过5 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素。人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。

>当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。 

## 限制说明
批量添加人脸数据接口提交任务并发默认为2QPS。

## 计费说明
批量添加人脸数据能力可免费调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的批量添加人脸数据能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于批量添加人脸数据的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。
- 平台针对超过6个月及以上没有API服务调用的用户的人脸特征向量数据进行动态释放和删除，确保无服务调用的客户信息安全。',
    ),
    'ExtractFingerPrint' => 
    array (
      'summary' => '本文介绍指纹提取ExtractFingerPrint的语法及示例。',
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> **ImageURL**与**ImageData**二选一，当URL方式与Base64编码方式共存时，URL方式优先。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/ExtractFingerPrint.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像的Base64编码字符串。文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。

> **ImageURL**与**ImageData**二选一，当URL方式与Base64编码方式共存时，URL方式优先。',
            'type' => 'string',
            'required' => false,
            'example' => 'iVBORw0KGgoAAAANSUhEUgAAASUAA****',
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
                'example' => 'D21978CC-C1E7-4A7A-A1B2-D5896BDC7ADF',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'FingerPrint' => 
                  array (
                    'description' => '指纹提取结果图像的Base64编码字符串。',
                    'type' => 'string',
                    'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D21978CC-C1E7-4A7A-A1B2-D5896BDC7ADF\\",\\n  \\"Data\\": {\\n    \\"FingerPrint\\": \\"/9j/4AAQSkZJRgABAQAAAQABAAD****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ExtractFingerPrintResponse>\\n    <RequestId>D21978CC-C1E7-4A7A-A1B2-D5896BDC7ADF</RequestId>\\n    <Data>\\n        <FingerPrint>/9j/4AAQSkZJRgABAQAAAQABAAD****</FingerPrint>\\n    </Data>\\n</ExtractFingerPrintResponse>","errorExample":""}]',
      'title' => '指纹提取',
      'description' => '## 功能描述
指纹提取能力可以对输入的一张手指拍照图像自动定位其手指区域，并生成二值化黑白按压式指纹图像。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=ExtractFingerPrint)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
线上信息采集：在云上办案过程中，上传当事人利用手机拍摄的自己的拇指图像，可通过指纹提取能力，生成一张按压式指纹图像，以此作为当事人的信息进行备案，让远程办案成为可能。

## 特色优势

- 智能定位：通过深度学习算法，实现手指区域的智能定位，降低手机拍摄采集的难度。
- 支持多角度拍摄：支持处理任意角度的手指图片，降低指纹采集难度。
- 精准还原：精准还原手指指纹，纹理视觉效果和真实按压指纹无差异。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。开通服务后请[提交申请](https://vision.console.aliyun.com/cn-shanghai/applyopen/facebody/ExtractFingerPrint)，申请通过后[购买QPS](https://common-buy.aliyun.com/?commodityCode=viapi_facebodyqps_public_cn#/buy)方可使用。

><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/ExtractFingerPrint?lang=JAVA&sdkStyle=old)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、JPEG、PNG。

- 图像大小：不超过10 MB。

- 图像分辨率：大于640×360像素，小于2560×1440像素。

- 拍摄镜头尽量靠近手指，对角拍摄。

- URL地址中不能包含中文字符。

## 计费说明
关于指纹提取的计费方式及报价，请参见[计费介绍](~~184049~~)。
',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的指纹提取能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 错误码
关于指纹提取的错误码，详情请参见[常见错误码](~~146756~~)。
## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'LiquifyFace' => 
    array (
      'summary' => '本文介绍智能瘦脸LiquifyFace的语法及示例。',
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过6 MB。
- 图像分辨率：大于等于128×128像素，小于等于5000×5000像素，最长边小于等于5000像素。
- 图像内容：至少包含1个人脸，最多不超过3个人脸，且人脸占比超过64x64像素。
- URL地址中不能包含中文字符。
> 图像内容：当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/LiquifyFace/LiquifyFace1.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'SlimDegree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '标准力度。取值范围为\\[0,2.0]，默认为1.0。数值越大，瘦脸效果越明显。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'maximum' => '2',
            'minimum' => '0',
            'example' => '1.0',
            'default' => '1',
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
                'example' => 'CA1C8937-B30C-15E6-B804-41C357BA413B',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '瘦脸后图像的URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-liquify/CA1C8937-B30C-15E6-B804-41C357BA413B_5eca_20210923-093411.jpg?Expires=1632391451&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=46apJQVNBz%2FFzDLEYn2M1w9MKA****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CA1C8937-B30C-15E6-B804-41C357BA413B\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-liquify/CA1C8937-B30C-15E6-B804-41C357BA413B_5eca_20210923-093411.jpg?Expires=1632391451&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=46apJQVNBz%2FFzDLEYn2M1w9MKA****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<LiquifyFaceResponse>\\n    <RequestId>CA1C8937-B30C-15E6-B804-41C357BA413B</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/face-liquify/CA1C8937-B30C-15E6-B804-41C357BA413B_5eca_20210923-093411.jpg?Expires=1632391451&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=46apJQVNBz%2FFzDLEYn2M1w9MKA****</ImageURL>\\n    </Data>\\n</LiquifyFaceResponse>","errorExample":""}]',
      'title' => '智能瘦脸',
      'description' => '## 功能描述
智能瘦脸功能可实现输入一张人物图像，输出脸部五官调整瘦脸后的图像。
关于该接口功能的示例图如下：
- 输入原图
![原始图像](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/smvg/LiquifyFace.png" width="250)

- 输出结果图
![瘦脸效果](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ssiz/LiquifyFaceshoulian.jpg" width="250)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=LiquifyFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 移动App：输入一张自拍照，通过智能瘦脸算法能力，生成更具魅力的面庞。
- 写真自拍：对大量修图需求进行批量智能瘦脸，助力婚纱影楼或图像直播场景，降本提效。

## 特色优势

- 精准刻画：通过深度学习算法，精准分析人脸五官特征，实现完美自然的面部美型效果。
- 支持多角度：正面侧面等多种角度的人脸均能智能判别和处理。
- 支持多人脸：支持单人脸或多人脸的精准美型。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/LiquifyFace?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FLiquifyFace%2FLiquifyFace1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[智能瘦脸示例代码](~~2253469~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPG、JPEG、PNG。
- 图像大小：不超过6 MB。
- 图像分辨率：大于等于128×128像素，小于等于5000×5000像素，最长边小于等于5000像素。
- 图像内容：至少包含1个人脸，最多不超过3个人脸，且人脸占比超过64x64像素。
- URL地址中不能包含中文字符。

>当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。 

## 计费说明
关于智能瘦脸的计费方式及报价，请参见[计费介绍](~~184049~~)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的智能瘦脸能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[智能瘦脸示例代码](~~2253469~~)。',
      'extraInfo' => '## 错误码
关于智能瘦脸的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[106点人脸关键点-通用领域-2D](https://www.modelscope.cn/models/damo/cv_mobilenet_face-2d-keypoints_alignment/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'MonitorExamination' => 
    array (
      'summary' => '本文介绍线上监考MonitorExamination的语法及示例。',
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
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '检测类型。

- 0：屏幕聊天工具检测
- 1：考生状态检测',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '1',
            'minimum' => '0',
            'example' => '1',
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
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MonitorExamination/1MonitorExamination1.jpg',
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
                'example' => 'D0F6EB94-73B6-4CB8-B266-22D2F221C475',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'FaceInfo' => 
                  array (
                    'description' => '中心人物的人脸信息。当请求参数Type取值为1时显示该参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Completeness' => 
                      array (
                        'description' => '人脸完整度分数，取值范围\\(0,1)。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '1',
                      ),
                      'FaceNumber' => 
                      array (
                        'description' => '检测到的人脸人数，0代表未检测到考生人脸。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                      'Pose' => 
                      array (
                        'description' => '正对摄像机时3个角度都为0， 取值范围正负90度之间。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Pitch' => 
                          array (
                            'description' => '上下俯仰角角度，抬头为正值，低头为负值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '-0.9185499548912048',
                          ),
                          'Roll' => 
                          array (
                            'description' => '人脸在画面中顺时针转动为正值，逆时针转动为负值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '-0.18541647493839264',
                          ),
                          'Yaw' => 
                          array (
                            'description' => '向左看为正值，向右看为负值。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '8.095342636108398',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'PersonInfo' => 
                  array (
                    'description' => '中心人物的属性行为信息。当请求参数Type取值为1时显示该参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CellPhone' => 
                      array (
                        'description' => '打电话。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Score' => 
                          array (
                            'description' => '打电话的概率分数，取值范围\\(0,1)。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.39076218008995056',
                          ),
                          'Threshold' => 
                          array (
                            'description' => '建议阈值。

> 仅作为参考，实际应用中根据测试情况选取合适的Score阈值即可。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.6',
                          ),
                        ),
                      ),
                      'EarPhone' => 
                      array (
                        'description' => '戴耳机。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Score' => 
                          array (
                            'description' => '戴耳机的概率分数，取值范围\\(0,1)。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.7980290651321411',
                          ),
                          'Threshold' => 
                          array (
                            'description' => '建议阈值。

> 仅作为参考，实际应用中根据测试情况选取合适的Score阈值即可。',
                            'type' => 'number',
                            'format' => 'float',
                            'example' => '0.6',
                          ),
                        ),
                      ),
                      'PersonNumber' => 
                      array (
                        'description' => '检测到的总人数，0代表未检测到考生。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                      ),
                    ),
                  ),
                  'ChatScore' => 
                  array (
                    'description' => '屏幕截图包含聊天工具的概率，取值范围\\(0,1)。
当请求参数Type取值为0时显示该参数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.28805577754974365',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '建议阈值，取值范围\\(0,1)。当ChatScore大于阈值时，系统判定输入屏幕截图中包含聊天工具。
当请求参数Type取值为0时显示该参数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0F6EB94-73B6-4CB8-B266-22D2F221C475\\",\\n  \\"Data\\": {\\n    \\"FaceInfo\\": {\\n      \\"Completeness\\": 1,\\n      \\"FaceNumber\\": 1,\\n      \\"Pose\\": {\\n        \\"Pitch\\": -0.9185499548912048,\\n        \\"Roll\\": -0.18541647493839264,\\n        \\"Yaw\\": 8.095342636108398\\n      }\\n    },\\n    \\"PersonInfo\\": {\\n      \\"CellPhone\\": {\\n        \\"Score\\": 0.39076218008995056,\\n        \\"Threshold\\": 0.6\\n      },\\n      \\"EarPhone\\": {\\n        \\"Score\\": 0.7980290651321411,\\n        \\"Threshold\\": 0.6\\n      },\\n      \\"PersonNumber\\": 1\\n    },\\n    \\"ChatScore\\": 0.28805577754974365,\\n    \\"Threshold\\": 0.5\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RequestId>D0F6EB94-73B6-4CB8-B266-22D2F221C475</RequestId>\\n<Data>\\n    <FaceInfo>\\n        <Completeness>1</Completeness>\\n        <FaceNumber>1</FaceNumber>\\n        <Pose>\\n            <Pitch>-0.91854995</Pitch>\\n            <Roll>-0.18541647</Roll>\\n            <Yaw>8.095343</Yaw>\\n        </Pose>\\n    </FaceInfo>\\n    <PersonInfo>\\n        <CellPhone>\\n            <Score>0.39076218</Score>\\n            <Threshold>0.6</Threshold>\\n        </CellPhone>\\n        <EarPhone>\\n            <Score>0.79802907</Score>\\n            <Threshold>0.6</Threshold>\\n        </EarPhone>\\n        <PersonNumber>1</PersonNumber>\\n    </PersonInfo>\\n    <ChatScore>0.28805578</ChatScore>\\n    <Threshold>0.5</Threshold>\\n</Data>","errorExample":""}]',
      'title' => '线上监考',
      'description' => '## 功能描述
在线监考能力可以对线上考试的考生行为进行识别，支持屏幕聊天工具检测和考生状态检测。

- 屏幕聊天工具检测：输入截屏图像，判断是否出现常见的聊天工具。
- 考生状态检测：利用考生的前置摄像机获取图像，判断出现的人脸人体个数、人脸角度朝向、是否戴耳机，是否使用手机。

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=MonitorExamination)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 个人远程在线考试。
- 个人线下固定机位考试。

## 特色优势

- 功能集成度高，一个接口可输出对当前考生的所有行为监测。
- 针对常见聊天工具有单独的页面检测，可杜绝考生远程聊天作弊。
- 可支持单机位（如PC），也可根据需求支持双机位算法（如手机架设）。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。

><notice>
本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/MonitorExamination?lang=JAVA&sdkStyle=old&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FMonitorExamination%2F1MonitorExamination1.jpg%22%2C%22Type%22%3A1%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[线上监考示例代码](~~2249024~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPG、PNG。
- 图像大小：小于5 MB。
- 图像分辨率：建议大于480×640像素，小于720×1280像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于线上监考的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=MonitorExamination)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的线上监考能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[线上监考示例代码](~~2249024~~)。',
      'extraInfo' => '## 错误码
关于在线监考的错误码，详情请参见[常见错误码](~~146756~~)。
## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RetouchBody' => 
    array (
      'summary' => '本文介绍身体美型RetouchBody的语法及示例。',
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
            'description' => '图像URL地址。当前仅支持上海地域的OSS链接，如何生成URL请参见[生成URL](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/photo-1562956335-14faa1a9aeeb.jpeg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'SlimDegree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '液化力度，取值范围为\\[-1.0,1.0]。正数表示变瘦，负数表示变壮。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '1.0',
          ),
        ),
        2 => 
        array (
          'name' => 'LengthenDegree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '拉伸力度，取值范围为\\[0,1.0]，1.0为标准值，小于0不做拉伸。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'example' => '1.0',
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
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '美型后图像的URL地址。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/body-beautifier/C0AFBD40-C705-52EB-90F5-37FA2FA62880_468d_20210926-075355.jpg?Expires=1632644635&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=O7M9ITFAExDmwnZ86BFDVGeE%2BZ****',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C0AFBD40-C705-52EB-90F5-37FA2FA62880',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/body-beautifier/C0AFBD40-C705-52EB-90F5-37FA2FA62880_468d_20210926-075355.jpg?Expires=1632644635&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=O7M9ITFAExDmwnZ86BFDVGeE%2BZ****\\"\\n  },\\n  \\"RequestId\\": \\"C0AFBD40-C705-52EB-90F5-37FA2FA62880\\"\\n}","errorExample":""},{"type":"xml","example":"<RetouchBodyResponse>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/body-beautifier/C0AFBD40-C705-52EB-90F5-37FA2FA62880_468d_20210926-075355.jpg?Expires=1632644635&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=O7M9ITFAExDmwnZ86BFDVGeE%2BZ****</ImageURL>\\n    </Data>\\n    <RequestId>C0AFBD40-C705-52EB-90F5-37FA2FA62880</RequestId>\\n</RetouchBodyResponse>","errorExample":""}]',
      'title' => '身体美型',
      'description' => '## 功能描述
可以对人物图像中头部以外区域（脖子、躯干和四肢等）进行优化，使其呈现出更符合大众审美的体态，让人体看起来更高挑、苗条和精致，同时保持身体线条流畅、弧度自然、力度适中。支持多人和不同体态（全身、半身）的处理。

如下图所示。

- 原始图像
![](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/photo-1562956335-14faa1a9aeeb.jpeg" width="200)

- 美型效果
![](https://viapi-oss.oss-cn-shanghai.aliyuncs.com/doc/facebody/D2BBA127-874D-50E7-A4FB-9D34616571F6_c0ea_20210926-093846.jpg" width="200)

## 应用场景

- 婚纱写真：对婚纱写真照片进行批量自动化人体美型处理，缩减修图周期，快速提供客户选片。
- 移动App： 输入一张人像照片，通过调用身体美型算法能力消除赘肉，打造完美身材。

## 特色优势

- 精准刻画：通过深度学习算法，精准分析人体姿态和胖瘦信息，实现完美自然身体美型效果。
- 支持多角度姿态：不论何种姿态角度，身体美型算法均能智能判别处理。
- 支持多人：支持同图中多个人像的身体美型。

## 前提条件
请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。


## 输入限制

- 图像格式：JPEG、JPG、PNG、BMP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于128×128像素，小于5000×5000像素。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 注意事项
建议您在集成使用平台该能力的应用界面提供滤镜的提示，并提供“关闭滤镜”的选项。
',
      'extraInfo' => '## 错误码
关于身体美型的错误码，详情请参见[常见错误码](~~146756~~)。

## SDK参考
阿里云视觉AI能力支持使用SDK调用，具体可参见[SDK总览](~~145033~~)下载安装。

## 安全声明

- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'RetouchSkin' => 
    array (
      'summary' => '本文介绍智能美肤RetouchSkin的语法及示例。',
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
            'description' => '图像URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。
图片格式要求：

- 图像格式：JPEG、JPG、PNG。
- 图像大小：不超过6 MB。
- 图像分辨率：大于128×128像素，小于等于5000×5000像素，最长边小于等于5000像素。
- 图像内容：包含1～10个人像，且皮肤占比明显的照片。
- URL地址中不能包含中文字符。

> 图像内容：当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/RetouchSkin/RetouchSkin3.png',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'RetouchDegree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '磨皮力度。取值范围为\\[0,1.5]，默认为1.0。数值越大皮肤纹理越不明显。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
          ),
        ),
        2 => 
        array (
          'name' => 'WhiteningDegree',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '美白力度。取值范围为\\[0,1.5]，默认为1.0。数值越大皮肤越白。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '1.0',
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
                'example' => 'FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347',
              ),
              'Data' => 
              array (
                'description' => '返回的数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImageURL' => 
                  array (
                    'description' => '美肤后图像的URL地址。
> 该URL地址为临时地址，有效期为30分钟，过期后将无法访问。若需要长时间或者永久保存文件，请在30分钟内访问URL地址，下载文件转存到自己的OSS或者其他存储空间。',
                    'type' => 'string',
                    'example' => 'http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/skin-retouch/FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347_3467_20210923-094238.jpg?Expires=1632391959&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=jXJcFTv3no7Gx%2BLuPvANhRSnc2****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347\\",\\n  \\"Data\\": {\\n    \\"ImageURL\\": \\"http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/skin-retouch/FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347_3467_20210923-094238.jpg?Expires=1632391959&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=jXJcFTv3no7Gx%2BLuPvANhRSnc2****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RetouchSkinResponse>\\n    <RequestId>FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347</RequestId>\\n    <Data>\\n        <ImageURL>http://vibktprfx-prod-prod-aic-gd-cn-shanghai.oss-cn-shanghai.aliyuncs.com/skin-retouch/FD2BF3DF-3D98-1D5D-85BB-C8EC3A9FE347_3467_20210923-094238.jpg?Expires=1632391959&amp;OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&amp;Signature=jXJcFTv3no7Gx%2BLuPvANhRSnc2****</ImageURL>\\n    </Data>\\n</RetouchSkinResponse>","errorExample":""}]',
      'title' => '智能美肤',
      'description' => '## 功能描述
智能美肤功能可实现输入一张人物图像，自动对脸部以及全身皮肤进行美肤，同时尽可能的保留皮肤质感。功能支持情况如下：
- 脸部美肤：脸部区域匀肤、去瑕疵，比如：痘、痘印、雀斑等。
- 全身皮肤：全身皮肤区域美白。
- 多人照片：支持不超过10人的多人图片处理。

关于该接口功能的示例图如下：
- 输入原图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/kruz/RetouchSkin.png" width="250)
- 输出结果图
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20221108/ffyu/RetouchSkinmeifu.jpg" width="250)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=RetouchSkin)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 专业修图：可用于影楼、电商、图片直播等专业摄影场景，利用智能美肤算法快速进行美肤修图，提高工作效率。
- 美颜拍摄：用于娱乐、生活等场景，提高人物美观度。

## 特色优势

- 保留皮肤质感：使用深度学习算法，实现精准美肤，皮肤光滑有质感。
- 保持背景稳定：仅对裸露的皮肤区域进行修饰，不影响背景区域。
- 支持多人美肤：支持单张图像中多人的美肤。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/RetouchSkin?lang=JAVA&sdkStyle=dara&params=%7B%22ImageURL%22%3A%22http%3A%2F%2Fviapi-test.oss-cn-shanghai.aliyuncs.com%2Fviapi-3.0domepic%2Ffacebody%2FRetouchSkin%2FRetouchSkin1.png%22%7D&tab=DEMO)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[智能美肤示例代码](~~605230~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：JPEG、JPG、PNG。
- 图像大小：不超过6 MB。
- 图像分辨率：大于128×128像素，小于等于5000×5000像素，最长边小于等于5000像素。
- 图像内容：包含1～10个人像，且皮肤占比明显的照片。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于智能美肤的计费方式及报价，请参见[计费介绍](~~184049~~)。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的智能美肤能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[智能美肤示例代码](~~605230~~)。',
      'extraInfo' => '## 错误码
关于智能美肤的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。',
    ),
    'CompareFaceWithMask' => 
    array (
      'summary' => '本文介绍口罩人脸比对1:1CompareFaceWithMask的语法及示例。',
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
          'name' => 'ImageURLA',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像A的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFaceWithMask/CompareFaceWithMask-left1.jpeg',
            'isFileTransferUrl' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ImageURLB',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图像B的URL地址。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFaceWithMask/CompareFaceWithMask-right1.jpeg',
            'isFileTransferUrl' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'QualityScoreThreshold',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '质量分阈值，对人脸图片进行质量分析判断，若某张人脸质量分小于该阈值，则会在返回结果上增加MessageTips说明。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '97.0',
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
                'example' => 'C6499918-E932-41B3-96F5-A18F50D262DD',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Confidence' => 
                  array (
                    'description' => '两张图片中的最大人脸属于同一个人的置信度，取值范围0~100。供参考的三个阈值是61，69，75分别对应千分之一，万分之一和十万分之一误识率。阈值设置越高，误识率越低，通过率也越低，对安全性要求越高的场合，可以设置更高的阈值。如果某张图片中没有人脸则报错误信息。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '88.025604248046875',
                  ),
                  'IsMaskA' => 
                  array (
                    'description' => '图片A中的人脸是否戴口罩。

- 0：不戴口罩
- 1：戴口罩',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'IsMaskB' => 
                  array (
                    'description' => '图片B中的人脸是否戴口罩。

- 0：不戴口罩
- 1：戴口罩',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'LandmarksAList' => 
                  array (
                    'description' => '图片A人脸框所对应的人脸关键点坐标数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片A人脸框所对应的人脸关键点坐标，顺序分别为左眼水平坐标，左眼垂直坐标，右眼水平坐标，右眼垂直坐标，鼻尖水平坐标，鼻尖垂直坐标，左嘴角水平坐标，左嘴角垂直坐标，右嘴角水平坐标，右嘴角垂直坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[348,490,523,478,446,577,386,677,514,668]',
                    ),
                  ),
                  'LandmarksBList' => 
                  array (
                    'description' => '图片B人脸框所对应的人脸关键点坐标数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片B人脸框所对应的人脸关键点坐标，顺序分别为左眼水平坐标，左眼垂直坐标，右眼水平坐标，右眼垂直坐标，鼻尖水平坐标，鼻尖垂直坐标，左嘴角水平坐标，左嘴角垂直坐标，右嘴角水平坐标，右嘴角垂直坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[356,590,487,589,410,676,368,754,476,753]',
                    ),
                  ),
                  'QualityScoreA' => 
                  array (
                    'description' => '输入图像A的质量分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '75.891258239746094',
                  ),
                  'QualityScoreB' => 
                  array (
                    'description' => '输入图像B的质量分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '98.716880798339844',
                  ),
                  'RectAList' => 
                  array (
                    'description' => '图片A中最大人脸矩形框。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片A中最大人脸矩形框\\[left, top, width, height]，例如\\[238,310,388,492]。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[238,310,388,492]',
                    ),
                  ),
                  'RectBList' => 
                  array (
                    'description' => '图片B中最大人脸矩形框。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '图片B中最大人脸矩形框\\[left, top, width, height]，例如\\[284,467,293,373]。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[284,467,293,373]',
                    ),
                  ),
                  'Thresholds' => 
                  array (
                    'description' => '不同误识率下置信度结果数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '误识率在1/1000，1/10000，1/100000的情况下分别对应的置信度阈值。例如`[61.0,69.0,75.0]`，表示误识率为1/1000的情况下，置信度（Confidence）超过61%就可以认为是同一个人。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '[61, 69, 75]',
                    ),
                  ),
                  'MessageTips' => 
                  array (
                    'description' => '提示信息，纯文字描述，以下提示信息单独出现或是几条提示信息的组合。
质量相关提示（某张人脸质量分小于请求参数质量分阈值时会出现）：

- `imageA quality score less threshold`：图像A的质量分小于输入参数设置的阈值。
- `imageB quality score less threshold`：图像B的质量分小于输入参数设置的阈值。

人脸尺寸相关提示（检测到人脸且人脸宽或高小于50像素时会有该提示信息。出现该提示信息时，请尽可能输入像素数大于64x64的人脸，并请酌情参考返回的对比置信度Confidence值）：

- `face in imageA is too small`：图像A中的人脸太小。
- `face in imageB is too small`：图像B中的人脸太小。',
                    'type' => 'string',
                    'example' => 'imageB quality score less threshold',
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
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C6499918-E932-41B3-96F5-A18F50D262DD\\",\\n  \\"Data\\": {\\n    \\"Confidence\\": 88.02560424804688,\\n    \\"IsMaskA\\": 1,\\n    \\"IsMaskB\\": 0,\\n    \\"LandmarksAList\\": [\\n      0\\n    ],\\n    \\"LandmarksBList\\": [\\n      0\\n    ],\\n    \\"QualityScoreA\\": 75.8912582397461,\\n    \\"QualityScoreB\\": 98.71688079833984,\\n    \\"RectAList\\": [\\n      0\\n    ],\\n    \\"RectBList\\": [\\n      0\\n    ],\\n    \\"Thresholds\\": [\\n      0\\n    ],\\n    \\"MessageTips\\": \\"imageB quality score less threshold\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CompareFaceWithMaskResponse>\\n    <RequestId>C6499918-E932-41B3-96F5-A18F50D262DD</RequestId>\\n    <Data>\\n        <Confidence>88.025604</Confidence>\\n        <IsMaskA>1</IsMaskA>\\n        <IsMaskB>0</IsMaskB>\\n        <LandmarksAList>348</LandmarksAList>\\n        <LandmarksAList>490</LandmarksAList>\\n        <LandmarksAList>523</LandmarksAList>\\n        <LandmarksAList>478</LandmarksAList>\\n        <LandmarksAList>446</LandmarksAList>\\n        <LandmarksAList>577</LandmarksAList>\\n        <LandmarksAList>386</LandmarksAList>\\n        <LandmarksAList>677</LandmarksAList>\\n        <LandmarksAList>514</LandmarksAList>\\n        <LandmarksAList>668</LandmarksAList>\\n        <LandmarksBList>356</LandmarksBList>\\n        <LandmarksBList>590</LandmarksBList>\\n        <LandmarksBList>487</LandmarksBList>\\n        <LandmarksBList>589</LandmarksBList>\\n        <LandmarksBList>410</LandmarksBList>\\n        <LandmarksBList>676</LandmarksBList>\\n        <LandmarksBList>368</LandmarksBList>\\n        <LandmarksBList>754</LandmarksBList>\\n        <LandmarksBList>476</LandmarksBList>\\n        <LandmarksBList>753</LandmarksBList>\\n        <QualityScoreA>75.89126</QualityScoreA>\\n        <QualityScoreB>98.71688</QualityScoreB>\\n        <RectAList>238</RectAList>\\n        <RectAList>310</RectAList>\\n        <RectAList>388</RectAList>\\n        <RectAList>492</RectAList>\\n        <RectBList>284</RectBList>\\n        <RectBList>467</RectBList>\\n        <RectBList>293</RectBList>\\n        <RectBList>373</RectBList>\\n        <Thresholds>61</Thresholds>\\n        <Thresholds>69</Thresholds>\\n        <Thresholds>75</Thresholds>\\n        <MessageTips>imageB quality score less threshold</MessageTips>\\n    </Data>\\n</CompareFaceWithMaskResponse>","errorExample":""}]',
      'title' => '口罩人脸比对1:1',
      'description' => '## 功能描述
口罩人脸比对1:1能力基于您输入的两张图片，分别挑选两张图片中的最大人脸进行比较，判断是否为同一人。融合戴口罩生成、抗遮挡关键点定位、抗遮挡特征注意力三大技术优化，实现戴口罩时的极速人脸识别。

- 两张人脸图片对比：比对两张图片中人脸的相似度，返回这两个人脸的矩形框坐标、人脸五点关键点坐标、比对的置信度，以及不同误识率的置信度阈值。
- 支持多种图片类型：支持生活照、证件照等类型的人脸对比。
- 支持佩戴口罩场景：针对佩戴口罩场景对带口罩的人脸进行对比识别。

关于该接口功能的示意图如下：
 ![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230206/cenz/CompareFaceWithMask.png" width="500)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=CompareFaceWithMask)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景

- 员工考勤：无接触式刷脸考勤，疫情防控场景下企业考勤首选，且能有效防止代打卡等作弊行为。
- 公共服务：佩戴口罩客户直接刷脸办理业务，通过人脸比对识别身份信息，减少身份证查验、复印存档等环节，提高公共服务窗口办理业务的效率。
- 外卖骑手人脸核验：戴口罩外卖骑手送餐业务人脸打卡和定期本身人脸核验，现场授权采集的戴口罩人脸照片，与本人认证照片进行1:1比对，确保外卖骑手身份真实性，提供不摘口罩人脸识别便捷体验。

## 特色优势
- 平台服务稳定：提供在高并发，大流量下的毫秒级识别响应和99.999%的可靠性保障。
- 抗遮挡五官定位：支持戴口罩、大部分遮挡情况下，实现准确度自评估的鲁棒性关键点定位。
- 抗遮挡特征建模：支持戴口罩、大部分遮挡情况下，实现基于注意力机制的鲁棒性特征建模。
- 简单易用：可直接调用的 API 接口，服务简单易用，易被集成，兼容性强。
- 佩戴口罩场景优化：针对佩戴口罩场景，优化戴口罩遮挡情境下的人脸比对。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/CompareFaceWithMask?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[口罩人脸比对1:1示例代码](~~601387~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：JPEG、JPG、PNG、BMP、WEBP。
- 图像大小：不超过3 MB。
- 图像分辨率：大于32×32像素，小于4096×4096像素，人脸占比不低于64×64像素。
- URL地址中不能包含中文字符。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 计费说明
关于口罩人脸比对1:1的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=CompareFaceWithMask)。

',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的口罩人脸比对1:1能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[口罩人脸比对1:1示例代码](~~601387~~)。',
      'extraInfo' => '## 错误码
关于口罩人脸比对1:1的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸识别OOD模型](https://modelscope.cn/models/damo/cv_ir_face-recognition-ood_rts/summary)、[ArcFace人脸识别模型](https://modelscope.cn/models/damo/cv_ir50_face-recognition_arcface/summary)、[IR人脸识别模型FRIR](https://modelscope.cn/models/damo/cv_manual_face-recognition_frir/summary)、[口罩人脸识别模型FRFM-large](https://modelscope.cn/models/damo/cv_manual_face-recognition_frfm/summary)、[口罩人脸识别模型FaceMask](https://modelscope.cn/models/damo/cv_resnet_face-recognition_facemask/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DetectInfraredLivingFace' => 
    array (
      'summary' => '本文为您介绍红外人脸活体检测DetectInfraredLivingFace的语法及示例。',
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
          'name' => 'Tasks',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '待检测的图像URL地址数组。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ImageURL' => 
                array (
                  'description' => '待检测的图像URL地址。JSON数组中的每个元素是一个图片检测任务结构体（image表）。最多支持10个元素，即同时最多对10张图片进行检测。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 对于该接口，系统会自动将OSS链接地址转成内网地址然后再下载文件，所以调用该接口并不会产生OSS流量计费。
',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectInfraredLivingFace/DetectInfraredLivingFace.jpeg',
                  'isFileTransferUrl' => true,
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
                'example' => '68DF6EC7-3B1D-11EE-9FA7-1122F1AE92DD',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回的结果数据内容。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'FaceNumber' => 
                        array (
                          'description' => '单张图片检测到的人脸数量。如果没有检测到人脸，FaceNumber返回为0。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'ImageURL' => 
                        array (
                          'description' => '对应请求中的图像URL地址。',
                          'type' => 'string',
                          'example' => 'http://viapi-demo.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/SegmentCommonImage/segmentimage-src-hu.jpeg',
                        ),
                        'Results' => 
                        array (
                          'description' => '返回人脸坐标和活体结果。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Label' => 
                              array (
                                'description' => '检测结果的分类，取值包括：
- normal：活体照片
- liveness：翻拍照片

如果没有检测到人脸，则Label返回为liveness。',
                                'type' => 'string',
                                'example' => 'liveness',
                              ),
                              'Rate' => 
                              array (
                                'description' => '结果为该分类的概率，取值范围为\\[0.00-100.00]。取值越大表示属于该分类的概率越大。
如果未检测到人脸，则Rate返回为100。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '83.3848',
                              ),
                              'Rect' => 
                              array (
                                'description' => '人脸检测框信息。如果未检测到人脸，则Rect人脸检测坐标返回全为0。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Height' => 
                                  array (
                                    'description' => '检测框高度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '20',
                                  ),
                                  'Width' => 
                                  array (
                                    'description' => '检测框宽度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '30',
                                  ),
                                  'Top' => 
                                  array (
                                    'description' => '检测框左上角的点y坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '50',
                                  ),
                                  'Left' => 
                                  array (
                                    'description' => '检测框左上角的点x坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '60',
                                  ),
                                ),
                              ),
                              'Suggestion' => 
                              array (
                                'description' => '建议您执行的操作，取值范围如下：

- pass：图片中的活体对象来自直接拍摄，无需进行其余操作。
- review：图片中的活体对象可能为攻击样本，建议您确认后再进行操作。
- block：图片中的活体对象大概率为攻击样本，建议您执行后续操作。

如果未检测到人脸，则Suggestion返回为block。',
                                'type' => 'string',
                                'example' => 'review',
                              ),
                              'MessageTips' => 
                              array (
                                'description' => '提示信息，纯文字描述。

- `blurred, occluded or large angle face, please check.`：如输入模糊、遮挡或大角度等的人脸。
- `no face detected, try again please.`：如没有检测到人脸。',
                                'type' => 'string',
                                'example' => 'blurred, occluded or large angle face, please check.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"68DF6EC7-3B1D-11EE-9FA7-1122F1AE92DD\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"FaceNumber\\": 1,\\n        \\"ImageURL\\": \\"http://viapi-demo.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/SegmentCommonImage/segmentimage-src-hu.jpeg\\",\\n        \\"Results\\": [\\n          {\\n            \\"Label\\": \\"liveness\\",\\n            \\"Rate\\": 83.3848,\\n            \\"Rect\\": {\\n              \\"Height\\": 20,\\n              \\"Width\\": 30,\\n              \\"Top\\": 50,\\n              \\"Left\\": 60\\n            },\\n            \\"Suggestion\\": \\"review\\",\\n            \\"MessageTips\\": \\"blurred, occluded or large angle face, please check.\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectInfraredLivingFaceResponse>\\n    <RequestId>68DF6EC7-3B1D-11EE-9FA7-1122F1AE92DD</RequestId>\\n    <Data>\\n        <Elements>\\n            <FaceNumber>1</FaceNumber>\\n            <ImageURL>http://viapi-demo.oss-cn-shanghai.aliyuncs.com/viapi-demo/images/SegmentCommonImage/segmentimage-src-hu.jpeg</ImageURL>\\n            <Results>\\n                <Label>liveness</Label>\\n                <Rate>83.3848</Rate>\\n                <Rect>\\n                    <Height>20</Height>\\n                    <Width>30</Width>\\n                    <Top>50</Top>\\n                    <Left>60</Left>\\n                </Rect>\\n                <Suggestion>review</Suggestion>\\n                <MessageTips>blurred, occluded or large angle face, please check.</MessageTips>\\n            </Results>\\n        </Elements>\\n    </Data>\\n</DetectInfraredLivingFaceResponse>","errorExample":""}]',
      'title' => '红外人脸活体检测',
      'description' => '## 功能描述
红外人脸活体检测能力可以检测红外图片中的人脸是否为来自认证设备端的近距离裸拍活体人脸对象，可广泛应用在红外设备人脸实时采集场景，满足红外人脸注册认证的真实性和安全性要求，判断的前置条件是红外图像中有人脸。
从能力范围来看：
1. 认证设备端是指借助近距离裸拍活体正面人脸用于认证、通行等服务场景的含红外摄像头的硬件设备，常见的认证设备端有门禁机、考勤机、PC等智能终端认证设备。
2. 裸拍活体正面人脸是指真人未经重度PS、风格化、人工合成等后处理的含正面人脸（非模糊、遮挡、大角度的正面人脸）的裸红外照片。常见的非真人有纸张人脸、3D模型人脸等。

关于该接口功能的示例图如下：
- 真人
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230202/dsjz/DetectInfraredLivingFacezhenren.png" width="400)
- 纸张人脸
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20230202/gfgt/DetectInfraredLivingFacezhizhang.png" width="400)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectInfraredLivingFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 系统人脸登录防攻击：通过检测上传的红外图像是否是真人实拍，而非攻击及PS等后处理照片，以防止攻击者登录系统带来安全风险。
- 门禁门锁闸机刷脸通行：面向人脸注册和认证环节设备端实时的红外活体检测，实现注册与认证过程中的真人校验，防止非法分子盗用、伪造他人身份打卡通行。
- 智慧酒店自助入住：在酒店前台自助办理入住场景中，运用红外活体检测技术实现无人监管场景下，住客非活体攻击（纸张人脸、电子屏人脸）的高效率拦截。

## 特色优势
- 高精度防伪：基于图片中人像目标的高维度特征（风格化、摩尔纹、成像畸形等），判断目标对象是否为活体，有效防止屏幕二次翻拍等作弊攻击，支持单张或多张判断逻辑。
- 高灵敏拦截：支持红外摄像头设备的实时活体检测，可有效防止翻拍、头模、打印图片等样本攻击。
- 使用范围广：对于门锁等可见光照不理想的场景，具有更佳的适用性。
- 简单易用：可直接调用的 API 接口，服务简单易用，易被集成，兼容性强。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
><notice>
本能力仅限企业认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
></notice>

3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DetectInfraredLivingFace?lang=JAVA)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 示例代码：该能力常用语言的示例代码，请参见[红外人脸活体检测示例代码](~~601305~~)。

7. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制
- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
- 图像大小：不超过10 MB。如您有大图需求，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。
- 图像分辨率：建议大于256×256，像素过低可能会影响识别效果。
- URL地址中不能包含中文字符。
> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 检测说明
- 最长检测时间是5秒，如果在该时间内没有完成检测，系统会强制返回超时错误码。
- 图像下载时间限制为3秒，如果下载时间超过3秒，系统会返回下载超时。
- 图像检测接口响应时间依赖图像的下载时间。请保证被检测图像所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存。
- 最多可检测10张图像。
- 目前平台提供的活体检测为静默活体，即基于图片进行检测，暂不支持摇头，张嘴、眨眼等动作的活体检测。

## 计费说明
关于红外人脸活体检测的计费方式及报价，请参见[计费介绍](~~184049~~)。
> 下方调试接口为付费接口，如需免费体验调试请前往[体验中心](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DetectInfraredLivingFace)。
',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的红外人脸活体检测能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。

## 示例代码
该能力常用语言的示例代码，请参见[红外人脸活体检测示例代码](~~601305~~)。',
      'extraInfo' => '## 活体阈值参考
关于图片活体检测的判断阈值选择，可参考以下列表数值信息：
| Label | Rate阈值   | 攻击拦截率 | 活体通过率 | 
| ---- | ------------ | ---- | ------------ |
|liveness     |0.39       |98.18%   |90.21%      |
|liveness     |0.55      |98.54%   |89.29%      |
|liveness     |0.7      |98.94%   |88.36%      |
|normal（推荐）     |0.8（推荐）       |99.11%   |87.00%      |
|normal     |0.95       |99.60%   |80.03%      |

当Label是normal时，表示的是活体，Rate表示活体置信度，Rate取值范围是\\[80,100]。
当Label是liveness时，表示的是非活体，Rate表示非活体置信度，Rate取值范围是\\[20,100]。
关于以上数值的概念定义：
- 攻击拦截率：如98%，代表100次作弊假体攻击，会有98次被API识破拒绝。
- 活体通过率：如98%，代表100次真人请求，会有98次顺利通过活体验证。

> 内部实验数据测算，仅供参考。

## 错误码
关于红外人脸活体检测的错误码，详情请参见[常见错误码](~~146756~~)。

## 开源模型体验
更多开源免费模型体验及下载，详见魔搭社区：[人脸活体检测模型-RGB](https://modelscope.cn/models/damo/cv_manual_face-liveness_flrgb/summary)、[人脸活体检测模型-IR](https://modelscope.cn/models/damo/cv_manual_face-liveness_flir/summary)、[静默人脸活体检测模型-炫彩](https://modelscope.cn/models/damo/cv_manual_face-liveness_flxc/summary)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
    'DeepfakeFace' => 
    array (
      'summary' => '本文介绍人脸人体（facebody）类目下的换脸鉴别DeepfakeFace的语法及示例。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'none',
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
            'description' => '输入人脸数据。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'ImageURL' => 
                array (
                  'description' => '待检测的图像URL地址。JSON数组中的每个元素是一个图片检测任务结构体（image表）。最多支持10个元素，即同时最多对10张图片进行检测。推荐使用上海地域的OSS链接，对于文件在本地或者非上海地域OSS链接的情况，请参见[文件URL处理](~~155645~~)。

> 对于该接口，系统会自动将OSS链接地址转成内网地址然后再下载文件，所以调用该接口并不会产生OSS流量计费。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DeepfakeFace/DeepfakeFace1.jpg',
                  'isFileTransferUrl' => true,
                ),
                'ImageData' => 
                array (
                  'description' => '图像Base64编码字符串。当与URL方式共存时，URL方式优先。
文件的Base64编码处理操作，请参见[文件Base64处理](~~468191~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2****',
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
                'example' => '8E6F65D5-62A1-1E5B-BC0B-00508034AC92',
              ),
              'Data' => 
              array (
                'description' => '返回的结果数据内容。',
                'type' => 'object',
                'properties' => 
                array (
                  'Elements' => 
                  array (
                    'description' => '返回识别的元素。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ImageURL' => 
                        array (
                          'description' => '对应请求中的图像URL地址。',
                          'type' => 'string',
                          'example' => 'http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DeepfakeFace/DeepfakeFace1.jpg',
                        ),
                        'TaskId' => 
                        array (
                          'description' => '该检测任务的ID。',
                          'type' => 'string',
                          'example' => '8E6F65D5-62A1-1E5B-BC0B-00508034AC92',
                        ),
                        'Results' => 
                        array (
                          'description' => '返回结果。调用成功时返回结果中包含一个或多个元素。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Label' => 
                              array (
                                'description' => '检测结果的分类，取值包括：

- normalface：真脸照片
- deepfakeface：换脸照片

如果未检测到人脸，则Label返回为`deepfake`。',
                                'type' => 'string',
                                'example' => 'normalface',
                              ),
                              'Confidence' => 
                              array (
                                'description' => '取值范围为\\[0.00,100.00]。数值越低表示属于真脸的概率越大。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '36.6455',
                              ),
                              'Rect' => 
                              array (
                                'description' => '人脸检测框信息。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Left' => 
                                  array (
                                    'description' => '检测框左上角的点x坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '373',
                                  ),
                                  'Top' => 
                                  array (
                                    'description' => '检测框左上角的点y坐标。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '111',
                                  ),
                                  'Width' => 
                                  array (
                                    'description' => '检测框宽度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '207',
                                  ),
                                  'Height' => 
                                  array (
                                    'description' => '检测框高度。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '284',
                                  ),
                                ),
                              ),
                              'MessageTips' => 
                              array (
                                'description' => '提示信息。
- 如输入模糊、遮挡或大角度等的人脸，则返回提示信息：`blurred, occluded or large angle face, please check.`  
- 如未检测到人脸，则返回提示信息：`no face detected, try again please.`',
                                'type' => 'string',
                                'example' => 'blurred, occluded or large angle face, please check.',
                              ),
                            ),
                          ),
                        ),
                        'FaceNumber' => 
                        array (
                          'description' => '单张图片检测到的人脸数量。
如果未检测到人脸，FaceNumber返回为0。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8E6F65D5-62A1-1E5B-BC0B-00508034AC92\\",\\n  \\"Data\\": {\\n    \\"Elements\\": [\\n      {\\n        \\"ImageURL\\": \\"http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DeepfakeFace/DeepfakeFace1.jpg\\",\\n        \\"TaskId\\": \\"8E6F65D5-62A1-1E5B-BC0B-00508034AC92\\",\\n        \\"Results\\": [\\n          {\\n            \\"Label\\": \\"normalface\\",\\n            \\"Confidence\\": 36.6455,\\n            \\"Rect\\": {\\n              \\"Left\\": 373,\\n              \\"Top\\": 111,\\n              \\"Width\\": 207,\\n              \\"Height\\": 284\\n            },\\n            \\"MessageTips\\": \\"blurred, occluded or large angle face, please check.\\"\\n          }\\n        ],\\n        \\"FaceNumber\\": 1\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DeepfakeFaceResponse>\\n    <RequestId>8E6F65D5-62A1-1E5B-BC0B-00508034AC92</RequestId>\\n    <Data>\\n        <Elements>\\n            <ImageURL>http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DeepfakeFace/DeepfakeFace1.jpg</ImageURL>\\n            <TaskId>8E6F65D5-62A1-1E5B-BC0B-00508034AC92</TaskId>\\n            <Results>\\n                <Label>normalface</Label>\\n                <Confidence>36.6455</Confidence>\\n                <Rect>\\n                    <Left>373</Left>\\n                    <Top>111</Top>\\n                    <Width>207</Width>\\n                    <Height>284</Height>\\n                </Rect>\\n                <MessageTips>blurred, occluded or large angle face, please check.</MessageTips>\\n            </Results>\\n            <FaceNumber>1</FaceNumber>\\n        </Elements>\\n    </Data>\\n</DeepfakeFaceResponse>","errorExample":""}]',
      'title' => '换脸鉴别',
      'description' => '## 功能描述
换脸鉴别基于图像算法AI技术，实现对图片人脸的真伪进行灵敏检测和深度分析。能力范围支持：

1. 鉴别图片中的人脸是否为AI换脸算法所深度合成的假脸。
2. 鉴别图片中的人脸是否为AI人脸属性编辑生成类算法所深度合成的假脸。深度伪造技术是指利用深度学习实现图片或视频换脸、人脸编辑生成的技术。

关于该接口功能的示例图如下：

- 未经算法合成：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231109/kpoj/real2.png)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231109/rvyz/real1.jpg)

- 经过算法合成：
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231109/vcgh/fake1.png)
![](https://static-aliyun-doc.oss-cn-hangzhou.aliyuncs.com/file-manage-files/zh-CN/20231109/xgjj/fake2.png)

> - 您可以进入[在线咨询](https://www.aliyun.com/core/online-consult?from=aZgW6LJHr2)获取在线人工帮助。
- 当前能力可在视觉智能开放平台有完整的免费产品体验，您可以单击[立即试用](https://vision.aliyun.com/experience/detail?&tagName=facebody&children=DeepfakeFace)对该能力进行更直观试用以及在线购买。
- 阿里云视觉智能开放平台视觉AI能力API接入、接口使用或问题咨询等，请通过钉钉群（23109592）加入阿里云视觉智能开放平台咨询群联系我们。

## 应用场景
- 打击换脸视频网络传播：互联网娱乐性质换脸小程序、APP应用爆火，换脸鉴别技术可以识别出网络短视频中的伪造视频人脸，杜绝视频换脸造假。
- 打击互联网ID换脸诈骗：深度伪造技术高频使用，假视频与社交网络结合深深影响舆论走向和诱导诈骗。换脸鉴别可识别网上业务办理中的人脸伪造视频，减少网络诈骗。
- 打击色情娱乐等黑灰产业：互联网的深度伪造合成的色情视频数量巨大，换脸鉴别可以识别此类伪造视频，减少伪造视频人脸色情内容传播，切断色情传播链路。
- 人脸特征编辑鉴别：真人ID版权核验，通过换脸鉴别可以识别出版权素材库中人脸属性编辑生成算法所深度合成的假脸图片素材，杜绝换脸造假，杜绝人脸版权侵权行为。

## 特色优势
- 反制AI技术滥用：换脸鉴别基于达摩院人脸图像算法和Deepfake鉴别技术，提供对图像中的人脸特征进行全方位分析，利用AI技术反制换脸、合成脸、人脸特征编辑生成这类AI技术的滥用，保护用户合法权益、维护社会公共安全。
- 领先鉴别技术：基于图片中人像目标的高维度全量特征，换脸鉴别服务涵盖依据视频图像的像素、纹理级别的低阶特征，到具有全局语义的高阶特征，对图像进行全方位、高语义、多层次组合分析，攻防一体式的训练，极大提升合成人脸图片检出率。
- 准确率高：换脸鉴别结合阿里云多年人脸识别技术能力和大数据安全技术能力，能对视频图像中 AI 换脸、AI人脸生成等技术进行准确识别判断，对AI换脸攻击识别准确率高。
- 支持单个或多个人脸判断逻辑，可直接调用的API接口，服务简单易用，易被集成，兼容性强。

## 接入指引
1. 注册阿里云账号：打开[阿里云官网](https://www.aliyun.com)，在阿里云官网右上角，单击**立即注册**，按照操作提示完成账号注册。
2. 开通能力：请确保您已开通[人脸人体服务](https://vision.aliyun.com/facebody)，若未开通服务请[立即开通](https://common-buy.aliyun.com/?commodityCode=viapi_facebody_public_cn#/open)。
> 本能力支持企业或个人认证用户开通。更多实名认证操作信息，请参见[实名认证](https://help.aliyun.com/knowledge_list/37170.html)。
3. 创建AccessKey：请确保您已[创建AccessKey](~~175144~~)，如果您使用的是子账号AccessKey，您需要给子账号赋予AliyunVIAPIFullAccess权限，具体操作，请参见[RAM授权](~~145025~~)。
4. 在线调试（可选）：您可以通过[OpenAPI Explorer](https://next.api.aliyun.com/api/facebody/2019-12-30/DeepfakeFace)在线调试能力，查看完整的调用示例代码及SDK依赖信息，也可以下载完整的工程。
5. 开发接入步骤：
- 在[SDK总览](~~145033~~)中选择您要接入使用的SDK语言。
- 在对应语言的SDK文档中找到AI类目为人脸人体（facebody）的SDK包进行安装。
- 参考文档中提供的示例代码进行适当修改后调用。

6. 客户端直接调用：该能力常用的客户端调用方式包括以下几种。
- [Web前端直接调用](~~467779~~)
- [小程序场景下直接调用](~~467780~~)
- [Android端直接调用](~~467781~~)
- [iOS端直接调用](~~467782~~)

## 输入限制

- 图像格式：PNG、JPG、JPEG、BMP、GIF、WEBP。
- 图像大小：不超过10 MB。如您有大图需求，请通过钉钉群（23109592）联系我们。
- 图像分辨率：建议大于256×256像素，人脸区域大于128*128，像素过低可能会影响识别效果。
- URL地址中不能包含中文字符。

> 当图像分辨率超过最大限制时，请先将图片进行缩放，调整图片大小，具体请参见[图片缩放](~~44688~~)。

## 检测说明

- 最长检测时间是5秒，如果在该时间内没有完成检测，系统会强制返回超时错误码。
- 图像下载时间限制为3秒，如果下载时间超过3秒，系统会返回下载超时。
- 图像检测接口响应时间依赖图像的下载时间。请保证被检测图像所在的存储服务稳定可靠，建议您使用阿里云OSS存储或者CDN缓存。
- 最多可检测10张图像。

## 计费说明
换脸鉴别能力目前处于公测期，可免费调用。',
      'responseParamsDescription' => '## SDK参考
阿里云视觉AI人脸人体类目下的换脸鉴别能力推荐使用SDK调用，支持多种编程语言，调用时请选择AI类目为人脸人体（facebody）的SDK包，文件参数通过SDK调用可支持本地文件及任意URL，具体可参见[SDK总览](~~145033~~)。',
      'extraInfo' => '## 换脸鉴别阈值参考
接口返回Label默认按照Confidence的阈值为50，当Confidence小于50，**Lable**为`normalface`；当Confidence大于50，**Lable**为`deepfakeface`。
Confidence为模型置信度，取值范围是\\[0,100]，越低表示属于真脸的概率越大。您也可以通过卡Confidence阈值的方法匹配不同使用场景更灵活使用，内部实验参考数据如下。

| Confidence阈值 | 伪造人脸拦截率   | 真实人脸通过率 |
| ---- | ------------ | ---- |
|15   |98.21%  |80.27%   |
|30   |97.56%  |87.59%   |
|40   |97.04%  |90.67%   |
|50（默认）   |95.09%  |96.61%   |
|60   |92.50%  |98.13%   |
|70   |90.59%  |98.77%   |

关于以上数值的概念定义：
- 伪造人脸拦截率：如98%，代表100次作弊伪造人脸攻击，会有98次被API识破拒绝。
- 真实人脸通过率：如98%，代表100次真实人脸请求，会有98次顺利通过活体验证。

> 内部实验数据测算，仅供参考。

## 错误码
关于换脸鉴别的错误码，详情请参见[常见错误码](~~146756~~)。

## 安全声明
- 请确保上传的图片或文件来源符合相应的法律法规。
- 通过体验调试上传的临时文件有效期为1小时，在24小时后会被系统自动清理删除。
- 平台不存储用户在使用服务过程中涉及的原始人脸图片或文件信息。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'facebody.cn-shanghai.aliyuncs.com',
    ),
  ),
);
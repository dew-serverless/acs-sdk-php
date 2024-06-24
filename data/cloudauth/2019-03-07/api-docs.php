<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Cloudauth',
    'version' => '2019-03-07',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 172202,
      'title' => '金融级实人认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribePageFaceVerifyData',
        1 => 'InitFaceVerify',
        2 => 'DescribeFaceVerify',
        3 => 'ContrastFaceVerify',
        4 => 'CompareFaceVerify',
        5 => 'LivenessFaceVerify',
      ),
    ),
    1 => 
    array (
      'id' => 187371,
      'title' => '增强版实人认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 187373,
          'title' => '控制台接口',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'DescribeSmartStatisticsPageList',
          ),
        ),
      ),
    ),
    2 => 
    array (
      'id' => 186118,
      'title' => '信息核验',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeepfakeDetect',
        1 => 'CredentialVerify',
        2 => 'BankMetaVerify',
        3 => 'MobileOnlineTime',
        4 => 'MobileDetect',
        5 => 'MobileOnlineStatus',
        6 => 'Mobile3MetaSimpleVerify',
        7 => 'Id2MetaVerify',
        8 => 'Mobile3MetaDetailVerify',
      ),
    ),
    3 => 
    array (
      'id' => 172203,
      'title' => '实人认证（已停止售卖，文档停止更新）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 172209,
          'title' => '其它',
          'type' => 'directory',
          'children' => 
          array (
            0 => 
            array (
              'id' => 59190,
              'title' => '用户',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateAuthKey',
                1 => 'DescribeOssUploadToken',
              ),
            ),
            1 => 
            array (
              'id' => 59198,
              'title' => '认证',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'CreateVerifySetting',
              ),
            ),
            2 => 
            array (
              'id' => 59208,
              'title' => 'SDK',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'DescribeVerifySDK',
              ),
            ),
            3 => 
            array (
              'id' => 59215,
              'title' => '设备',
              'type' => 'directory',
              'children' => 
              array (
                0 => 'ModifyDeviceInfo',
                1 => 'DescribeDeviceInfo',
              ),
            ),
          ),
        ),
        1 => 'DescribeVerifyToken',
        2 => 'DescribeVerifyResult',
        3 => 'VerifyMaterial',
        4 => 'CompareFaces',
        5 => 'DetectFaceAttributes',
      ),
    ),
    4 => 
    array (
      'id' => 190467,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AIGCFaceVerify',
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
    'DescribePageFaceVerifyData' => 
    array (
      'summary' => '金融级实人认证调用统计分页查询接口',
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
        'operationType' => 'none',
        'riskType' => 'none',
        'abilityTreeCode' => '216157',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthLNAN1F',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，开始时间，格式为yyyy-MM-dd，默认为yyyy-MM-dd 00:00:00，查询间隔最多为90天。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-10',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '必填，结束时间，格式为yyyy-MM-dd，默认为yyyy-MM-dd 00:00:00，查询间隔最多为90天。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-04-30',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '36**01
',
          ),
        ),
        3 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code。',
            'type' => 'string',
            'required' => false,
            'example' => 'ID_PLUS
',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认为1。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数，默认为10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-A***B-A3DC0DE3C83E',
              ),
              'Success' => 
              array (
                'description' => '是否成功响应。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'false' => 'false',
                  'true' => 'true',
                ),
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'string',
                'example' => '100',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示数量。',
                'type' => 'string',
                'example' => '10',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'string',
                'example' => '5',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'string',
                'example' => '1',
              ),
              'Items' => 
              array (
                'description' => '返回数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Date' => 
                    array (
                      'description' => '日期。',
                      'type' => 'string',
                      'example' => '2024-03-24T00:00:00.000Z',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '总数。',
                      'type' => 'string',
                      'example' => '19',
                    ),
                    'SuccessCount' => 
                    array (
                      'description' => '调用成功数。',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'SceneId' => 
                    array (
                      'description' => '场景ID。',
                      'type' => 'string',
                      'example' => '20**40',
                    ),
                    'SceneName' => 
                    array (
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => '****实名认证',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品方案Code，请参考金融级实人帮助文档。',
                      'type' => 'string',
                      'example' => 'ID_PLUS',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TotalCount\\": \\"100\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"TotalPage\\": \\"5\\",\\n  \\"CurrentPage\\": \\"1\\",\\n  \\"Items\\": [\\n    {\\n      \\"Date\\": \\"2024-03-24T00:00:00.000Z\\",\\n      \\"TotalCount\\": \\"19\\",\\n      \\"SuccessCount\\": \\"1\\",\\n      \\"SceneId\\": \\"20**40\\",\\n      \\"SceneName\\": \\"****实名认证\\",\\n      \\"ProductCode\\": \\"ID_PLUS\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '金融级数据统计',
      'requestParamsDescription' => 'StartDate和EndDate为必填参数',
    ),
    'InitFaceVerify' => 
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
        'operationType' => 'create',
        'abilityTreeCode' => '59164',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthGDLZVA',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000006',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户请求的唯一标识。

值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '固定值。在不同的产品方案中，该参数值不同：
- APP认证方案：参数固定值为ID_PRO
- 活体人脸验证方案：参数固定值为PV_FV
- 活体检测方案：参数固定值为LR_FR',
            'type' => 'string',
            'required' => false,
            'example' => 'ID_PRO',
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件类型。
当前支持身份证，传入 IDENTITY_CARD。',
            'type' => 'string',
            'required' => false,
            'example' => 'IDENTITY_CARD',
          ),
        ),
        4 => 
        array (
          'name' => 'CertName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '真实姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'CertNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件号码。',
            'type' => 'string',
            'required' => false,
            'example' => '330103xxxxxxxxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'ReturnUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户业务页面回跳的目标地址。	',
            'type' => 'string',
            'required' => false,
            'example' => 'www.aliyun.com',
          ),
        ),
        7 => 
        array (
          'name' => 'FaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '照片Base64编码。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。

',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'MetaInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Metainfo环境参数，需要通过客户端SDK获取。',
            'type' => 'string',
            'required' => false,
            'example' => '{"zimVer":"3.0.0","appVersion": "1","bioMetaInfo": "4.1.0:11501568,0","appName": "com.aliyun.antcloudauth","deviceType": "ios","osVersion": "iOS 10.3.2","apdidToken": "","deviceModel": "iPhone9,1"}',
          ),
        ),
        9 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户手机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '130xxxxxxxx',
          ),
        ),
        10 => 
        array (
          'name' => 'Ip',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '114.xxx.xxx.xxx',
          ),
        ),
        11 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户业务自定义的用户ID，请保持唯一。',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        12 => 
        array (
          'name' => 'FaceContrastPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        13 => 
        array (
          'name' => 'CertifyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '之前实人认证通过的CertifyId，认证时的照片作为比对照片。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '0bfa7c493f850e5178b9f8613634c9xx',
          ),
        ),
        14 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已授权OSS空间的Bucket名 。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
          ),
        ),
        15 => 
        array (
          'name' => 'OssObjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已授权OSS空间的文件名。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'verify/xxxxx/xxxxxx.jpeg',
          ),
        ),
        16 => 
        array (
          'name' => 'Model',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        17 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'CallbackToken',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        19 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        20 => 
        array (
          'name' => 'CertifyUrlType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        21 => 
        array (
          'name' => 'AuthId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        22 => 
        array (
          'name' => 'EncryptType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        23 => 
        array (
          'name' => 'VoluntaryCustomizedContent',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        24 => 
        array (
          'name' => 'SuitableType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        25 => 
        array (
          'name' => 'ProcedurePriority',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        26 => 
        array (
          'name' => 'Mode',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        27 => 
        array (
          'name' => 'ReadImg',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        28 => 
        array (
          'name' => 'Birthday',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        29 => 
        array (
          'name' => 'ValidityDate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        30 => 
        array (
          'name' => 'CertifyUrlStyle',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        31 => 
        array (
          'name' => 'FaceGuardOutput',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        32 => 
        array (
          'name' => 'RarelyCharacters',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        33 => 
        array (
          'name' => 'UiCustomUrl',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
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
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'description' => '实人认证唯一标识。',
                    'type' => 'string',
                    'example' => '91707dc296d469ad38e4c5efa6a0f24b',
                  ),
                  'CertifyUrl' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"91707dc296d469ad38e4c5efa6a0f24b\\",\\n    \\"CertifyUrl\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <CertifyId>91707dc296d469ad38e4c5efa6a0f24b</CertifyId>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '初始化接口',
      'summary' => '每次开始认证前，通过本接口获取CertifyId，用来串联认证请求中的各个接口',
      'description' => '- 服务地址：cloudauth.aliyuncs.com
- 请求方法：HTTPS POST和GET。

#### 传入图片格式要求
当您在进行实人认证的时候，请传入满足以下所有条件的图片。
- 近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。
- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。
- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。
- 照片大小：<1MB。
- 支持90、180 和270度照片，多人脸的情况会选取最大脸。
',
      'requestParamsDescription' => ' > 如果您选择OSS方式传入人脸图片，您必须传入OssBucketName和OssObjectName 字段。
OSS入参格式仅支持开通实人认证服务时授权的OSS生成的URL、Bucket和文件名 。关于如何查询授权的OSS，请参见[开通OSS空间并授权](https://help.aliyun.com/document_detail/163108.html?spm=a2c4g.11186623.2.14.7dd9f397RmV0jw#section-4w2-trd-8q6)。
如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过OSS方式上传较大的人脸照片。

根据选择的认证方案不同，所需传入的字段不太一样，具体可以参考下述表格中的说明。

字段|APP认证方案|活体人脸验证方案|活体检测方案
--|--|--|--
CertType|是|可选传入|可选传入
CertName|是|可选传入|可选传入
CertNo|是|可选传入|可选传入
UserId|可选传入|是|是
FaceContrastPicture|否|是|否
FaceContrastPictureUrl|否|是|否
CertifyId|否|是|否
OssBucketName|否|是|否
OssObjectName|否|是|否
',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ## 结果码

|结果码|返回信息|描述|
|----|-------|--|
|200|success|成功。|
|400|参数不能为空|参数不能为空。|
|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|
|402|应用配置不存在|应用配置不存在。|
|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|
|405|您的年龄未满14周岁，不允许使用此产品|未满14周岁的用户无法使用本产品，建议人工审核。|
|410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|
|411|RAM无权限|需要给子账号授予 AliyunAntCloudAuthFullAccess 的操作权限。|
|412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|
|414|设备类型不支持|当前移动设备不支持刷脸认证，请更换设备后操作。|
|415|SDK版本不支持|当前认证SDK版本不支持刷脸认证，请升级SDK后操作。|
|416|系统版本不支持|当前操作系统版本不支持刷脸认证，请升级系统或更换设备操作。|
|417|无法使用刷脸服务|当前身份信息比对源不可用。若信息正确，建议人工审核。|
|418|刷脸失败次数过多|当天刷脸认证次数过多，请明天再试。|
|419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|
|420|数据重复|图片传入方式超过1种。<ul> <li> FaceContrastPicture</li> <li> FaceContrastPictureUrl </li><li> Oss</li> <li> CertifyId</li><ul>|
421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。
422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。
423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。
|500|系统错误|系统内部错误，请反馈工程师排查。|

',
    ),
    'DescribeFaceVerify' => 
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
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000006',
          ),
        ),
        1 => 
        array (
          'name' => 'CertifyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人认证唯一标识。',
            'type' => 'string',
            'required' => false,
            'example' => '91707dc296d469ad38e4c5efa6a0f24b',
          ),
        ),
        2 => 
        array (
          'name' => 'PictureReturnType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片返回类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'JPG',
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
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'SubCode' => 
                  array (
                    'description' => '认证结果描述，详情见下方SubCode说明。',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'MaterialInfo' => 
                  array (
                    'description' => '认证主体附件信息，主要为图片类材料。JSON格式，见下方示例。',
                    'type' => 'string',
                    'example' => '{"faceAttack": "F","facialPictureFront": {"qualityScore": 88.3615493774414,"pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg","ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779","ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"}}',
                  ),
                  'IdentityInfo' => 
                  array (
                    'description' => '认证的主体信息，一般的认证场景返回为空。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'DeviceToken' => 
                  array (
                    'description' => '设备token。',
                    'type' => 'string',
                    'example' => 'McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx',
                  ),
                  'Passed' => 
                  array (
                    'description' => '是否通过，通过为 T，不通过为 F。',
                    'type' => 'string',
                    'example' => 'T',
                  ),
                  'DeviceRisk' => 
                  array (
                    'type' => 'string',
                  ),
                  'Success' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserInfo' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"SubCode\\": \\"200\\",\\n    \\"MaterialInfo\\": \\"{\\\\\\"faceAttack\\\\\\": \\\\\\"F\\\\\\",\\\\\\"facialPictureFront\\\\\\": {\\\\\\"qualityScore\\\\\\": 88.3615493774414,\\\\\\"pictureUrl\\\\\\": \\\\\\"https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg\\\\\\",\\\\\\"ossBucketName\\\\\\": \\\\\\"cn-shanghai-aliyun-cloudauth-1260051251634779\\\\\\",\\\\\\"ossObjectName\\\\\\": \\\\\\"verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg\\\\\\"}}\\",\\n    \\"IdentityInfo\\": \\"null\\",\\n    \\"DeviceToken\\": \\"McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx\\",\\n    \\"Passed\\": \\"T\\",\\n    \\"DeviceRisk\\": \\"\\",\\n    \\"Success\\": \\"\\",\\n    \\"UserInfo\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <Passed>T</Passed>\\n    <DeviceToken>McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx</DeviceToken>\\n    <IdentityInfo>null</IdentityInfo>\\n    <MaterialInfo>{\\"faceAttack\\": \\"F\\",\\"facialPictureFront\\": {\\"qualityScore\\": 88.3615493774414,\\"pictureUrl\\": \\"https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg\\",\\"ossBucketName\\": \\"cn-shanghai-aliyun-cloudauth-1260051251634779\\",\\"ossObjectName\\": \\"verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg\\"}}</MaterialInfo>\\n    <SubCode>200</SubCode>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '查询认证详情接口',
      'summary' => '当接入方移动端收到回调之后，其服务端可以调用此接口，来获取相应的认证状态和认证资料',
      'description' => '- 服务地址：cloudauth.aliyuncs.com。
- 请求方法：HTTPS POST和GET。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' > 判断认证结果请以ResultObject.Passed或ResultObject.SubCode字段为准。

#### ResultObject.MaterialInfo的JSON格式示例
- APP认证方案 & 活体人脸验证方案

    ```
    {
        // 是否为攻击：攻击为T，非攻击为F
        "faceAttack": "F",    
        // 认证的照片信息
        "facialPictureFront": {
            // 活体人脸质量分数
            "qualityScore": 88.3615493774414,
            // 人脸比对分数
            "verifyScore": 50.28594166529785,
            // 照片https地址，有效期15分钟，从查询时开始计时    
            "pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg",
            // 照片存放客户上海区域的OSS里，此为照片的bucket名
            "ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779",
            // 照片存放客户上海区域的OSS里，此为照片的文件名
            "ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"   
    }
    }
    ```

-  活体检测方案

    ```
    {
        // 是否为攻击：攻击为T，非攻击为F
        "faceAttack": "F",    
        // 认证的照片信息
        "facialPictureFront": {
            // 活体人脸质量分数
            "qualityScore": 88.3615493774414,
            // 照片https地址，有效期15分钟，从查询时开始计时    
            "pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg",
            // 照片存放客户上海区域的OSS里，此为照片的bucket名
            "ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779",
            // 照片存放客户上海区域的OSS里，此为照片的文件名
            "ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"   
    }
    }
    ```



#### ResultObject.SubCode说明

|错误码|认证描述文案|是否计费|可能原因和运营建议|
|---|------|----|---------|
 |200|认证通过|是| |
|201|姓名和身份证不一致|是|可能用户的信息有误或假信息，建议用户确认后重新操作。|
|202|查询不到身份信息|是|可能是用户户口迁移、军人等特殊状态导致，建议预留人工审核入口，进行人工审核。|
|203|查询不到照片或照片不可用|是|可能是公安库数据问题导致，建议预留人工审核入口，进行人工审核。|
|204|人脸比对不一致|是|可能不是同一人或活体照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。|
|205|活体检测存在风险|是|可能存在攻击风险，建议人工审核分层处理，若为真人可重新操作。|
|206|业务策略限制|是|可能存在异常风险操作，建议人工确认后操作。|

',
      'extraInfo' => ' ## 结果码

|Code|Message|描述|
|----|-------|--|
|200|success|成功。|
|400|参数不能为空|参数不能为空。|
|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|
|403|认证未完成|认证未完成。|
|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|
|406|无效的certifyId|无效的certifyId。|
|410|未开通服务|未开通OSS产品或未完成OSS读写授权。|
|411|RAM无权限|需要给子账号授予AliyunAntCloudAuthFullAccess的操作权限。|
|424|身份认证记录不存在|该certifyId还没有对应的身份认证提交记录。|
|500|系统错误|系统内部错误。|',
    ),
    'ContrastFaceVerify' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000006',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商户请求的唯一标识。
值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '固定值：ID_MIN。',
            'type' => 'string',
            'required' => false,
            'example' => 'ID_MIN',
          ),
        ),
        3 => 
        array (
          'name' => 'CertType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证件类型。
当前支持身份证，必须传入IDENTITY_CARD。',
            'type' => 'string',
            'required' => false,
            'example' => 'IDENTITY_CARD',
          ),
        ),
        4 => 
        array (
          'name' => 'CertName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '真实姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'CertNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '证件号码。',
            'type' => 'string',
            'required' => false,
            'example' => '330103xxxxxxxxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'FaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '照片Base64编码。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'DeviceToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '风险识别-设备token。',
            'type' => 'string',
            'required' => false,
            'example' => 'McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户手机号码。',
            'type' => 'string',
            'required' => false,
            'example' => '130xxxxxxxx',
          ),
        ),
        9 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '114.xxx.xxx.xxx',
          ),
        ),
        10 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户业务自定义的用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        11 => 
        array (
          'name' => 'FaceContrastPictureUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        12 => 
        array (
          'name' => 'CertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '之前实人认证通过的CertifyId，认证时的照片作为比对照片。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '0bfa7c493f850e5178b9f8613634c9xx',
          ),
        ),
        13 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的Bucket 名 。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
          ),
        ),
        14 => 
        array (
          'name' => 'OssObjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的文件名。

> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'verify/xxxxx/xxxxxx.jpeg',
          ),
        ),
        15 => 
        array (
          'name' => 'Model',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        16 => 
        array (
          'name' => 'FaceContrastFile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'isFileTransferUrl' => true,
          ),
        ),
        17 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        18 => 
        array (
          'name' => 'EncryptType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
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
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'description' => '请求结果',
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '认证结果描述。详情见下方SubCode 说明。',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'MaterialInfo' => 
                  array (
                    'description' => '认证主体附件信息，主要为图片类材料，JSON格式，如下。',
                    'type' => 'string',
                    'example' => '{"faceAttack": "F","facialPictureFront": {"qualityScore": 88.3615493774414,"verifyScore": 50.28594166529785}}',
                  ),
                  'IdentityInfo' => 
                  array (
                    'description' => '认证的主体信息，一般的认证场景返回为空。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'Passed' => 
                  array (
                    'description' => '是否通过，通过为T，不通过为F。',
                    'type' => 'string',
                    'example' => 'T',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"MaterialInfo\\": \\"{\\\\\\"faceAttack\\\\\\": \\\\\\"F\\\\\\",\\\\\\"facialPictureFront\\\\\\": {\\\\\\"qualityScore\\\\\\": 88.3615493774414,\\\\\\"verifyScore\\\\\\": 50.28594166529785}}\\",\\n    \\"IdentityInfo\\": \\"null\\",\\n    \\"Passed\\": \\"T\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <Passed>T</Passed>\\n    <IdentityInfo>null</IdentityInfo>\\n    <MaterialInfo>{\\"faceAttack\\": \\"F\\",\\"facialPictureFront\\": {\\"qualityScore\\": 88.3615493774414,\\"verifyScore\\": 50.28594166529785}}</MaterialInfo>\\n    <SubCode>200</SubCode>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
      'title' => '实人认证方案纯服务端API',
      'summary' => '该接口用于提交认证材料以进行核实比对，并同步返回认证结果',
      'description' => '- 接口名：ContrastFaceVerify。
- 服务地址：cloudauth.aliyuncs.com。
- 请求方法：HTTPS POST和GET。
- 接口说明：通过服务端接入实现实人认证的接口。

#### 传入图片格式要求
当您在进行实人认证的时候，请传入满足以下所有条件的图片。

- 近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。
- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。
- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。
- 照片大小：<1MB。
- 支持90、180 和270度照片，多人脸的情况会选取最大脸。
',
      'requestParamsDescription' => '>  如果您选择OSS方式传入人脸照片，您必须传入OssBucketName和OssObjectName 字段。OSS入参格式仅支持开通实人认证服务时授权的OSS生成的URL、Bucket和文件名 。
如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过 OSS方式上传较大的人脸照片。',
      'responseParamsDescription' => 'ResultObject.MaterialInfo的JSON格式示例：

```
{
    // 是否为攻击：攻击为T，非攻击为F
    "faceAttack": "F",
    "facialPictureFront": {
        // 活体人脸质量分数
        "qualityScore": 88.3615493774414,
        // 人脸比对分数
        "verifyScore": 50.28594166529785
    }
}
```

',
      'extraInfo' => '## 返回码

|返回码|返回信息|描述|
 |----|-------|--|
 |200|success|成功。|
 |400|参数不能为空|参数不能为空。|
 |401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|
 |402|应用配置不存在|应用配置不存在。|
 |404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|
 |405|您的年龄未满14周岁，不允许使用此产品|未满14周岁的用户无法使用本产品，建议人工审核。|
 |410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|
 |411|RAM无权限|需要给子账号授予 AliyunAntCloudAuthFullAccess 的操作权限。|
 |412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|
 |417|无法使用刷脸服务|当前身份信息比对源不可用。若信息正确，建议人工审核。|
 |418|刷脸失败次数过多|当天刷脸认证次数过多，请明天再试。|
 |419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|
 |420|数据重复|图片传入方式超过1种。<ul> <li> FaceContrastPicture</li>  <li> FaceContrastPictureUrl </li><li>  Oss</li> <li> CertifyId</li><ul>|
 |421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。|
|422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。|
|423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。|
|500|系统错误|系统内部错误，请反馈工程师排查。|


ResultObject.SubCode说明：

|错误码|认证描述文案|是否计费|可能原因和运营建议|
|---|------|----|---------|
|200|认证通过|是| |
|201|姓名和身份证不一致|是|可能用户的信息有误或假信息，建议用户确认后重新操作。|
|202|查询不到身份信息|是|可能是用户户口迁移、军人等特殊状态导致，建议预留人工审核入口，进行人工审核。|
|203|查询不到照片或照片不可用|是|可能是公安库数据问题导致，建议预留人工审核入口，进行人工审核。|
|204|人脸比对不一致|是|可能不是同一人或活体照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。|
|205|活体检测存在风险|是|可能存在攻击风险，建议人工审核分层处理，若为真人可重新操作。|
|206|业务策略限制|是|可能存在异常风险操作，建议人工确认后操作。|',
    ),
    'CompareFaceVerify' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '59095',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '认证场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1000000006',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '商户请求的唯一标识。

值为32位长度的字母数字组合前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '固定值：PV_FC。',
            'type' => 'string',
            'required' => false,
            'example' => 'PV_FC',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceFaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '照片Base64编码。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
            'maxLength' => 1048676,
          ),
        ),
        4 => 
        array (
          'name' => 'SourceFaceContrastPictureUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceCertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '之前实人认证通过的CertifyId，认证时的照片作为人脸比对照片。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '0bfa7c493f850e5178b9f8613634c9xx',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceOssBucketName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的 Bucket 名。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceOssObjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的文件名。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'verify/xxxxx/xxxxxx.jpeg',
          ),
        ),
        8 => 
        array (
          'name' => 'TargetFaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '底库照片Base64编码。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
            'maxLength' => 1048676,
          ),
        ),
        9 => 
        array (
          'name' => 'TargetFaceContrastPictureUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '底库OSS照片地址，目前只支持已授权OSS照片地址。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        10 => 
        array (
          'name' => 'TargetCertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '之前实人认证通过的 CertifyId，认证时的照片作为人脸比对照片。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '0bfa7c493f850e5178b9f8613634c9xx',
          ),
        ),
        11 => 
        array (
          'name' => 'TargetOssBucketName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的Bucket名 。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
          ),
        ),
        12 => 
        array (
          'name' => 'TargetOssObjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已授权OSS空间的文件名。

> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'verify/xxxxx/xxxxxx.jpeg',
          ),
        ),
        13 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
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
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '请求 ID。',
                'type' => 'string',
                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
              ),
              'ResultObject' => 
              array (
                'description' => '人脸比对结果信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'VerifyScore' => 
                  array (
                    'description' => '人脸比对分。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '99.60875',
                  ),
                  'Passed' => 
                  array (
                    'description' => '是否通过，通过为T，不通过为F。',
                    'type' => 'string',
                    'example' => 'T',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"\\",\\n    \\"VerifyScore\\": 99.60875,\\n    \\"Passed\\": \\"T\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '人脸比对方案纯服务端API',
      'summary' => '金融级人脸比对纯服务端API',
      'description' => '- 接口名：CompareFaceVerify。
- 服务地址：cloudauth.aliyuncs.com。
- 请求方法：HTTPS POST和GET。
- 接口说明：通过服务端接入实现实人认证的接口。

#### 传入照片格式要求
当您在进行人脸比对的时候，请传入满足以下所有条件的2张人脸照片。

- 近期照片/底库近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。
- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。
- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。
- 照片大小：<1MB。
- 支持 90、180 和270度照片，多人脸的情况会选取最大脸。',
      'requestParamsDescription' => '> 以Source开头的参数代表您要上传的近期人脸照片参数，以Target开头的参数代表您要上传的底库近期人脸照片参数。传入照片格式要求请参见[传入照片格式要求](#传入照片格式要求)。
如果您选择OSS方式传入人脸照片，您必须同时传入OssBucketName和OssObjectName字段。OSS入参格式仅支持开通实人认证时授权的OSS生成的URL、Bucket和文件名 。关于如何查询授权的OSS，请参见[开通OSS空间并授权](https://help.aliyun.com/document_detail/163532.html?spm=a2c4g.11186623.2.15.36945bc3y5uWz6#title-409-lcd-pp0) 。
如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过OSS方式上传较大的人脸照片。',
      'responseParamsDescription' => '返回值示例：

```
{
    "Code": "200",
    "Message": "success",
    "RequestId": "23699272-B263-4B6C-BC04-0EBA1AB6F6D5",
    "ResultObject": {
        "Passed": "T",
        "VerifyScore": 99.60875
    }
}
```',
      'extraInfo' => ' ## 返回码

|返回码|返回信息|描述|
|----|-------|--|
|200|success|成功。|
|400|参数不能为空|参数不能为空。|
|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|
|402|应用配置不存在|应用配置不存在。|
|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|
|410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|
|411|RAM 无权限|需要给子账号授予AliyunAntCloudAuthFullAccess的操作权限。|
|412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|
|419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|
|420|数据重复|图片传入方式超过2种。<ul> <li> FaceContrastPicture</li> <li> FaceContrastPictureUrl </li><li> Oss</li> <li> CertifyId</li><ul>|
|421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。|
|422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。|
|423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。|
|500|系统错误|系统内部错误，请联系工程师排查。|




',
    ),
    'LivenessFaceVerify' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ProductCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'FaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'DeviceToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'Mobile',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'Ip',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'FaceContrastPictureUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'CertifyId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'OssObjectName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'Model',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'Crop',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
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
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'ResultObject' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                  'SubCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'MaterialInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'Passed' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DescribeSmartStatisticsPageList' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59134',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，使用UTC时间格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2023-11-01 00:00:00 +0800',
          ),
        ),
        1 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，使用UTC时间格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
            'type' => 'string',
            'required' => true,
            'example' => '2022-11-16 23:59:59 +0800',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景ID。',
            'type' => 'string',
            'required' => true,
            'example' => '36**01',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'string',
            'required' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'string',
            'required' => true,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'ServiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人云产品的ServiceCode，仅取值：**cloudauthst**。',
            'type' => 'string',
            'required' => false,
            'example' => 'cloudauthst',
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
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'PageSize' => 
              array (
                'description' => '每页显示数量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '96943***4E39F805',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '29',
              ),
              'Items' => 
              array (
                'description' => '返回数据列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Date' => 
                    array (
                      'description' => '日期。格式为：<i>月/日</i>',
                      'type' => 'string',
                      'example' => '11/8',
                    ),
                    'SceneId' => 
                    array (
                      'description' => '场景ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '20**40',
                    ),
                    'SceneName' => 
                    array (
                      'description' => '场景名称。',
                      'type' => 'string',
                      'example' => '****实名认证',
                    ),
                    'TotalCount' => 
                    array (
                      'description' => '总数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'SuccessCount' => 
                    array (
                      'description' => '调用成功数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'PassRate' => 
                    array (
                      'description' => '通过率。',
                      'type' => 'string',
                      'example' => '25',
                    ),
                    'ProductCode' => 
                    array (
                      'description' => '产品方案Code，请参考增强版实人帮助文档。',
                      'type' => 'string',
                      'example' => 'SMART_VERIFY',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"TotalPage\\": 3,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"96943***4E39F805\\",\\n  \\"TotalCount\\": 29,\\n  \\"Items\\": [\\n    {\\n      \\"Date\\": \\"11/8\\",\\n      \\"SceneId\\": 0,\\n      \\"SceneName\\": \\"****实名认证\\",\\n      \\"TotalCount\\": 4,\\n      \\"SuccessCount\\": 1,\\n      \\"PassRate\\": \\"25\\",\\n      \\"ProductCode\\": \\"SMART_VERIFY\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '增强版实人认证调用统计分页查询接口',
      'summary' => '增强版实人认证调用统计分页查询接口',
    ),
    'DeepfakeDetect' => 
    array (
      'summary' => '面向人脸识别场景，提供基于图片或视频的deepfake算法原子检测能力，识别换脸、合成人脸等攻击场景。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '226413',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthS6WIN6',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户请求的唯一标识。

值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c******',
          ),
        ),
        1 => 
        array (
          'name' => 'FaceInputType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '传入的类型

- IMAGE ：图片类型',
            'type' => 'string',
            'required' => false,
            'example' => 'IMAGE',
          ),
        ),
        2 => 
        array (
          'name' => 'FaceUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸图片',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        3 => 
        array (
          'name' => 'FaceBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸图片base64',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx
',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '风险结果

- 0：低风险
- 1：高风险
- 2：可疑',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'RiskTag' => 
                  array (
                    'description' => '风险标签，多个标签用引文逗号隔开，包括：

- 疑似深度伪造  SuspectDeepForgery
- 疑似合成攻击  SuspectPSFace
- 疑似存在水印  SuspectWarterMark
- 疑似黑产攻击  SuspectTemple
- 疑似生成人脸  SuspectAIGC Face
- 疑似翻拍人脸  SuspectRemake',
                    'type' => 'string',
                    'example' => 'SuspectDeepForgery,SuspectWarterMark',
                  ),
                  'RiskScore' => 
                  array (
                    'description' => '风险分值map',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => '{
      "SuspectPSFace": "1.0000",
      "SuspectDeepForgery": "0.8619",
      "SuspectWaterMark": "0.0126",
      "SuspectTemple": "0.0985"
    }',
                      'description' => '风险分值标签及其分值',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"1\\",\\n    \\"RiskTag\\": \\"SuspectDeepForgery,SuspectWarterMark\\",\\n    \\"RiskScore\\": {\\n      \\"key\\": \\"{\\\\n      \\\\\\"SuspectPSFace\\\\\\": \\\\\\"1.0000\\\\\\",\\\\n      \\\\\\"SuspectDeepForgery\\\\\\": \\\\\\"0.8619\\\\\\",\\\\n      \\\\\\"SuspectWaterMark\\\\\\": \\\\\\"0.0126\\\\\\",\\\\n      \\\\\\"SuspectTemple\\\\\\": \\\\\\"0.0985\\\\\\"\\\\n    }\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '人脸凭证核验服务',
    ),
    'CredentialVerify' => 
    array (
      'summary' => '传入凭证图片信息，返回是否伪造、篡改等，检测风险包括：PS篡改、翻拍、截屏、打印复印、水印等。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '219634',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthNYJI62',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CredType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '凭证类型：

- 01：个人卡证类
- 02：经营场景类',
            'type' => 'string',
            'required' => false,
            'example' => '01',
          ),
        ),
        1 => 
        array (
          'name' => 'CredName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '01：个人卡证类
 
-    0104：教师资格证

02：经营场景类
 
-    0201：门头照
-    0202：柜台照
-    0203：场景照',
            'type' => 'string',
            'required' => false,
            'example' => '0104',
          ),
        ),
        2 => 
        array (
          'name' => 'ImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '图片地址，imageUrl与imageContext任选一个',
            'type' => 'string',
            'required' => false,
            'example' => 'http://marry.momocdn.com/avatar/3B/B6/3BB6527E-7467-926E-1048-B43614F20CC420230803_L.jpg',
          ),
        ),
        3 => 
        array (
          'name' => 'ImageContext',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图⽚BASE64编码，imageUrl与imageContext任选一个',
            'type' => 'string',
            'required' => false,
            'example' => 'base64',
          ),
        ),
        4 => 
        array (
          'name' => 'IsOCR',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启OCR识别

- 0：否
- 1：是

仅当CredType取值01时，isOCR可设置为1',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'IsCheck',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启权威认证

- 0：否
- 1：是',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名',
            'type' => 'string',
            'required' => false,
            'example' => '张*',
          ),
        ),
        7 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号码',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211',
          ),
        ),
        8 => 
        array (
          'name' => 'CertNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '相关证书编号',
            'type' => 'string',
            'required' => false,
            'example' => '4601*****',
          ),
        ),
        9 => 
        array (
          'name' => 'MerchantId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '风险结果

- 0：低风险
- 1：高风险
- 2：可疑',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'RiskTag' => 
                  array (
                    'description' => '风险标签，多个标签用引文逗号隔开，包括：

- PS：图片PS
- SCREEN_PHOTO：屏幕翻拍
- SCREENSHOT：屏幕截屏
- WATERMARK：水印
- COLOR_PRINT：彩打复印
- WEB_IMAGE:  网络照片
- SAME_FACE：人脸相似 
- SAME_BACKGROUND：背景相似',
                    'type' => 'string',
                    'example' => 'PS,SCREEN_PHOTO',
                  ),
                  'RiskScore' => 
                  array (
                    'description' => '风险分值map',
                    'type' => 'object',
                    'additionalProperties' => 
                    array (
                      'type' => 'string',
                      'example' => '{
   "PS": "0.9458",
   "SCREEN_PHOTO": "0.1781",
   "WATERMARK": "0.1863"
}',
                      'description' => '风险分值',
                    ),
                  ),
                  'OcrInfo' => 
                  array (
                    'description' => 'OCR识别结果',
                    'type' => 'string',
                    'example' => '{
   "certNo":"20216*********",
  "certType":"小学教师资格",
   "gender":"男",
   "subject":"美术",
    "name":"李**",
    "ext_info":"{}",
    "birthDate":"1998-07-28",
    "idNo":"620************",
    "certOrg":""
}',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '权威验证结果',
                    'type' => 'string',
                    'example' => ' *',
                  ),
                  'VerifyDetail' => 
                  array (
                    'description' => '权威验证详情',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'MaterialInfo' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"1\\",\\n    \\"RiskTag\\": \\"PS,SCREEN_PHOTO\\",\\n    \\"RiskScore\\": {\\n      \\"key\\": \\"{\\\\n   \\\\\\"PS\\\\\\": \\\\\\"0.9458\\\\\\",\\\\n   \\\\\\"SCREEN_PHOTO\\\\\\": \\\\\\"0.1781\\\\\\",\\\\n   \\\\\\"WATERMARK\\\\\\": \\\\\\"0.1863\\\\\\"\\\\n}\\"\\n    },\\n    \\"OcrInfo\\": \\"{\\\\n   \\\\\\"certNo\\\\\\":\\\\\\"20216*********\\\\\\",\\\\n  \\\\\\"certType\\\\\\":\\\\\\"小学教师资格\\\\\\",\\\\n   \\\\\\"gender\\\\\\":\\\\\\"男\\\\\\",\\\\n   \\\\\\"subject\\\\\\":\\\\\\"美术\\\\\\",\\\\n    \\\\\\"name\\\\\\":\\\\\\"李**\\\\\\",\\\\n    \\\\\\"ext_info\\\\\\":\\\\\\"{}\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\":\\\\\\"1998-07-28\\\\\\",\\\\n    \\\\\\"idNo\\\\\\":\\\\\\"620************\\\\\\",\\\\n    \\\\\\"certOrg\\\\\\":\\\\\\"\\\\\\"\\\\n}\\",\\n    \\"VerifyResult\\": \\" *\\",\\n    \\"VerifyDetail\\": \\"**\\",\\n    \\"MaterialInfo\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '凭证核验',
    ),
    'BankMetaVerify' => 
    array (
      'summary' => '银行卡核验，核验银行卡与身份信息是否真实一致，并返回卡状态详情。包含：银行卡二要素（姓名+银行卡号），银行卡三要素（姓名+身份证号码+银行卡号），四要素（姓名+身份证号码+银行卡号+手机号）',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '208613',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth883TGF',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'normal' => 'normal',
              'md5' => 'md5',
            ),
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'VerifyMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'VERIFY_BANK_CARD：银行卡认证模式。表示将传入的银行卡号和用户的真实姓名、身份证号，手机号是否匹配',
            'type' => 'string',
            'required' => false,
            'example' => 'VERIFY_BANK_CARD',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用产品类型：

- BANK_CARD_2_META: 姓名+银行卡号
- BANK_CARD_3_META: 姓名+身份证号码+银行卡号
- BANK_CARD_4_META: 姓名+身份证号码+银行卡号+手机号',
            'type' => 'string',
            'required' => false,
            'example' => 'BANK_CARD_2_META',
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名

- 当paramType取值normal时，输入姓名明文
- 当paramType取值md5是，输入姓名第一个字md5值（32位小写）+ 姓名其他部分明文',
            'type' => 'string',
            'required' => false,
            'example' => '张*',
          ),
        ),
        4 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号，当ProductType取值BANK_CARD_3_META和BANK_CARD_4_META时，此项必输入

- 当paramType取值normal时，输入身份证明文
- 当paramType取值md5是，输入身份证前6位明文+出生年月日md5值（32位小写）+身份证后4位',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211',
          ),
        ),
        5 => 
        array (
          'name' => 'BankCard',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '银行卡号

- 当paramType取值normal时，输入银行卡明文
- 当paramType取值md5是，输入卡号除最后6位其他部分明文+最后6位md5值（32位小写）',
            'type' => 'string',
            'required' => false,
            'example' => '610*************1181',
          ),
        ),
        6 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号 当ProductType取值BANK_CARD_4_META时，此项必输入

- 当paramType取值normal时，输入手机号明文
- 当paramType取值md5是，输入手机号md5值（32位小写）',
            'type' => 'string',
            'required' => false,
            'example' => '138******11',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => '473469C7-A***B-A3DC0DE3C83E',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：查无记录',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '核验详情

- 101:验证通过
- 201:认证信息不一致， 持卡人信息有误
- 202:认证信息不一致，银行卡未开通认证支付
- 203:认证信息不一致，银行卡已过期
- 204:认证信息不一致，银行卡为受限制的卡
- 205:认证信息不一致，此卡被没收
- 206:认证信息不一致，银行卡无效
- 207:认证信息不一致，此卡无对应发卡行
- 208:认证信息不一致，该卡未初始化或睡眠卡
- 209:认证信息不一致，此卡为作弊卡、吞卡
- 210:认证信息不一致，此卡已挂失
- 211:认证信息不一致，密码错误次数超限
- 212:认证信息不一致，发卡行不支持此交易
- 213:认证信息不一致，卡状态不正常
- 214:认证信息不一致，未预留手机号
- 215:认证信息不一致，输入的密码、有效期或CVN2有误
- 216:认证信息不一致，其他卡异常情况
- 301:无法验证，银行卡不支持该业务
- 302:无法验证，验证失败或银行拒绝验证，请联系发卡行
- 303:无法验证，银行卡暂不支持手机号验证
- 304:无法验证，银行卡号有误
- 305:无法验证，其他原因',
                    'type' => 'string',
                    'example' => '101',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\"\\n  }\\n}","type":"json"}]',
      'title' => '银行卡二，三，四要素核验',
    ),
    'MobileOnlineTime' => 
    array (
      'summary' => '查询手机号在网时长',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '216495',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthNOQ41U',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号码。

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '130********',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => 'B506328A-D84B-4750-82C7-6A207C585CF1',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：查无记录',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'IspName' => 
                  array (
                    'description' => '运营商名称

- CMCC：移动 
- CUCC：联通 
- CTCC：电信',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                  'TimeCode' => 
                  array (
                    'description' => '- 1:[0,3)表示在网时长是 0~3 个月 
- 2: [3,6)表示在网时长是 3~6 个月 
- 3: [6,12)表示在网时长是 6~12 个月 
- 4: [12,24)表示在网时长是 12~24 月 
- 5: [24,+)表示在网时长是 24 个月以上',
                    'type' => 'string',
                    'example' => '5',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B506328A-D84B-4750-82C7-6A207C585CF1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\",\\n    \\"TimeCode\\": \\"5\\"\\n  }\\n}","type":"json"}]',
      'title' => '手机号在网时长',
    ),
    'MobileDetect' => 
    array (
      'summary' => '号码检测',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '218021',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthPZCZ2I',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'Mobiles',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号

- 当paramType取值normal时，输入手机号明文
- 当paramType取值md5是，输入手机号md5值（32位小写）
- 最多可输入50个手机号，用英文逗号分隔',
            'type' => 'string',
            'required' => false,
            'example' => '138********,156********',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => '969434DF-926B-4997-9881-4DE94E39F805',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'ChargeCount' => 
                  array (
                    'description' => '计费次数，一次请求中所有计费次数',
                    'type' => 'string',
                    'example' => '2',
                  ),
                  'Items' => 
                  array (
                    'description' => '核验结果集',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回数据列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Mobile' => 
                        array (
                          'description' => '手机号',
                          'type' => 'string',
                          'example' => '131********',
                        ),
                        'BizCode' => 
                        array (
                          'description' => '核验结果

- 1: 在网可用 
- 2: 非在网可用状态
- 3: 无查询结果',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'SubCode' => 
                        array (
                          'description' => '核验详情

- 101:可用号
- 201:空号
- 202:停机 
- 203:沉默号（近半年不活跃小号，新号，非智能机用户） 
- 204:风险号 （长时间关机或未开通语音服务以及易投诉的用户）
- 301:查无记录',
                          'type' => 'string',
                          'example' => '101',
                        ),
                        'IspName' => 
                        array (
                          'description' => '运营商名称

- CMCC：移动 
- CUCC：联通 
- CTCC：电信',
                          'type' => 'string',
                          'example' => 'CMCC',
                        ),
                        'Area' => 
                        array (
                          'description' => '手机号归属地（只有明文手机号有）',
                          'type' => 'string',
                          'example' => '安徽-马**',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"969434DF-926B-4997-9881-4DE94E39F805\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"ChargeCount\\": \\"2\\",\\n    \\"Items\\": [\\n      {\\n        \\"Mobile\\": \\"131********\\",\\n        \\"BizCode\\": \\"1\\",\\n        \\"SubCode\\": \\"101\\",\\n        \\"IspName\\": \\"CMCC\\",\\n        \\"Area\\": \\"安徽-马**\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '号码批量检测',
    ),
    'MobileOnlineStatus' => 
    array (
      'summary' => '查询手机号在网状态',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '216535',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthNOQ41U',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户手机号码。

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '130********',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => 'B506328A-D84B-4750-82C7-6A207C585CF1',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果

- 1: 在网可用 
- 2: 非在网可用状态（详见subCode）
- 3: 无查询结果',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'IspName' => 
                  array (
                    'description' => '运营商名称

- CMCC：移动 
- CUCC：联通 
- CTCC：电信',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '核验详情

- 101:在网可用 
- 201:停机 
- 202:销号 
- 203:在网但不可用 
- 204:不在网 
- 301:查无记录',
                    'type' => 'string',
                    'example' => '101',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B506328A-D84B-4750-82C7-6A207C585CF1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\",\\n    \\"SubCode\\": \\"101\\"\\n  }\\n}","type":"json"}]',
      'title' => '手机号在网状态',
    ),
    'Mobile3MetaSimpleVerify' => 
    array (
      'summary' => '传入姓名和身份证号，通过权威数据源验证其真实性和一致性。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'normal' => 'normal',
              'md5' => 'md5',
            ),
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '张*',
          ),
        ),
        3 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号码。

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '150000****',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：查无记录',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'IspName' => 
                  array (
                    'description' => '运营商名称

- CMCC：移动 
- CUCC：联通 
- CTCC：电信',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '手机号三要素简版接口',
    ),
    'Id2MetaVerify' => 
    array (
      'summary' => '传入姓名和身份证号，通过权威数据源验证其真实性和一致性。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：原始值（明文）
- 说明：由于权威数据源限制，身份二要素核验不支持Md5加密方式。',
            'type' => 'string',
            'required' => false,
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名',
            'type' => 'string',
            'required' => false,
            'example' => '张*',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
              ),
              'Code' => 
              array (
                'description' => '返回码，**200**表示接口响应成功。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：查无记录',
                    'type' => 'string',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\"\\n  }\\n}","type":"json"}]',
      'title' => '身份二要素核验接口',
    ),
    'Mobile3MetaDetailVerify' => 
    array (
      'summary' => '传入手机号、姓名、身份证号，通过权威数据源验证其真实性和一致性，如果不一致，返回不一致的原因。',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数类型：

- normal：不加密
- md5：md5加密',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'normal' => 'normal',
              'md5' => 'md5',
            ),
            'example' => 'normal',
          ),
        ),
        1 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211',
          ),
        ),
        2 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '张*',
          ),
        ),
        3 => 
        array (
          'name' => 'Mobile',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户手机号码。

- 当paramType取值normal时，输入明文
- 当paramType取值md5时，输入32位小写md5字符串',
            'type' => 'string',
            'required' => false,
            'example' => '150000****',
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
                'description' => '请求Id',
                'type' => 'string',
                'example' => '5A6229C0-E156-48E4-B6EC-0F528BDF60D2',
              ),
              'Code' => 
              array (
                'description' => '返回码，**200**表示接口响应成功。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果信息',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：查无记录',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '核验详细结果

- 101:验证通过 
- 201:⼿机号和姓名不⼀致，⼿机号和证件号不⼀致 
- 202:⼿机号和姓名⼀致，⼿机号和证件号不⼀致 
- 203:⼿机号和证件号⼀致，⼿机号和姓名不⼀致 
- 204:其他不⼀致
- 301:查⽆记录',
                    'type' => 'string',
                    'example' => '101',
                  ),
                  'IspName' => 
                  array (
                    'description' => '运营商名称

- CMCC：移动 
- CUCC：联通 
- CTCC：电信',
                    'type' => 'string',
                    'example' => 'CMCC',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A6229C0-E156-48E4-B6EC-0F528BDF60D2\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '手机号三要素详版接口',
    ),
    'CreateAuthKey' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59098',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。不超过64字符。可用于对具体业务进行备注，例如可以取接入方不同的人脸使用场景，或者待交付的客户标识等。建议传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'FACE_TEST',
          ),
        ),
        1 => 
        array (
          'name' => 'UserDeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户设备ID。不超过64字符。可用于标识具体设备，建议可以使用设备物理编号。建议传入该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '3iJ1AY$oHcu7mC69',
          ),
        ),
        2 => 
        array (
          'name' => 'Test',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '测试标识。为true表示使用测试授权，授权时长默认为30天；为false，则授权时长根据AuthYears进行授权。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthYears',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当Test标识为false或空时，AuthYears必填，单位为年，范围为\\[1,100]，取值100表示永久授权。',
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
            'type' => 'object',
            'properties' => 
            array (
              'AuthKey' => 
              array (
                'description' => '可用于授权激活的key。授权key在30分钟内有效，且不可重复使用，建议在每次激活前重新获取。',
                'type' => 'string',
                'example' => 'auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthKey\\": \\"auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<CreateAuthKeyResponse>\\r\\n    <Data>\\r\\n        <AuthKey>auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$</AuthKey>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>1</Code>\\r\\n</CreateAuthKeyResponse>","errorExample":""}]',
      'title' => '获取授权key',
      'summary' => '获取授权key，用于离线人脸识别SDK激活。',
      'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。

> 授权key在30分钟内有效，且不可重复使用，建议在每次激活前重新获取。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeOssUploadToken' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59122',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '2FA2C773-47DB-4156-B1EE-5B047321A939',
              ),
              'OssUploadToken' => 
              array (
                'description' => 'OSS上传Token信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Key' => 
                  array (
                    'description' => '文件上传所需的Key。',
                    'type' => 'string',
                    'example' => 'STS.NU8rUBj****',
                  ),
                  'Token' => 
                  array (
                    'description' => '文件上传所需的Token。',
                    'type' => 'string',
                    'example' => 'uWia500nTS5knZaDzq4/KqpvhcLnO****',
                  ),
                  'Secret' => 
                  array (
                    'description' => '文件上传所需的Secret。',
                    'type' => 'string',
                    'example' => 'FwmnyoqT8dHj7nJLuM67T****',
                  ),
                  'Expired' => 
                  array (
                    'description' => '过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1582636610000',
                  ),
                  'Path' => 
                  array (
                    'description' => '文件存放路径。',
                    'type' => 'string',
                    'example' => 'prod/RdNLC@Ox2n-1s7NMt',
                  ),
                  'EndPoint' => 
                  array (
                    'description' => '接入端点。',
                    'type' => 'string',
                    'example' => 'https://oss-cn-zhangjiakou.aliyuncs.com',
                  ),
                  'Bucket' => 
                  array (
                    'description' => 'OSS文件存储的空间。',
                    'type' => 'string',
                    'example' => 'cloudauth-zhangjiakou-external',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FA2C773-47DB-4156-B1EE-5B047321A939\\",\\n  \\"OssUploadToken\\": {\\n    \\"Key\\": \\"STS.NU8rUBj****\\",\\n    \\"Token\\": \\"uWia500nTS5knZaDzq4/KqpvhcLnO****\\",\\n    \\"Secret\\": \\"FwmnyoqT8dHj7nJLuM67T****\\",\\n    \\"Expired\\": 1582636610000,\\n    \\"Path\\": \\"prod/RdNLC@Ox2n-1s7NMt\\",\\n    \\"EndPoint\\": \\"https://oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"Bucket\\": \\"cloudauth-zhangjiakou-external\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DescribeOssUploadTokenResponse>\\n     <OssUploadToken class=\\"object\\">\\n          <Bucket type=\\"string\\">cloudauth-zhangjiakou-external</Bucket>\\n          <EndPoint type=\\"string\\">https://oss-cn-zhangjiakou.aliyuncs.com</EndPoint>\\n          <Expired type=\\"number\\">1582636610000</Expired>\\n          <Key type=\\"string\\">STS.NU8rUBj****</Key>\\n          <Path type=\\"string\\">prod/RdNLC@Ox2n-1s7NMt</Path>\\n          <Secret type=\\"string\\">FwmnyoqT8dHj7nJLuM67T****</Secret>\\n          <Token type=\\"string\\">uWia500nTS5knZaDzq4/KqpvhcLnO****</Token>\\n     </OssUploadToken>\\n     <RequestId type=\\"string\\">46FF6F40-59F9-4108-BA2C-E6BA7E816F1F</RequestId>\\n</DescribeOssUploadTokenResponse>\\n","errorExample":""}]',
      'title' => '获取照片上传OSS所需要的Token',
      'summary' => '调用DescribeOssUploadToken获取照片上传OSS所需要的Token。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateVerifySetting' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59103',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证场景标识，支持英文/数字/中划线（-），最多20个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'UserRegister',
          ),
        ),
        1 => 
        array (
          'name' => 'BizName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证场景名称，支持中文/英文/数字/中划线（-），最多20个字符。',
            'type' => 'string',
            'required' => true,
            'example' => '用户注册',
          ),
        ),
        2 => 
        array (
          'name' => 'Solution',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要使用的认证方案的名称，例如**RPBasic**、**RPBioOnly**等。关于所有支持的认证方案，请参见 [认证方案](~~127521~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'RPBasic',
          ),
        ),
        3 => 
        array (
          'name' => 'GuideStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用系统默认的引导页。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        4 => 
        array (
          'name' => 'PrivacyStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用系统默认的授权页。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'ResultStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否使用系统默认的结果页。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
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
              'BizName' => 
              array (
                'description' => '认证场景名称。',
                'type' => 'string',
                'example' => '用户注册',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
              ),
              'Solution' => 
              array (
                'description' => '认证方案名称。',
                'type' => 'string',
                'example' => 'RPBasic',
              ),
              'BizType' => 
              array (
                'description' => '认证场景标识。',
                'type' => 'string',
                'example' => 'UserRegister',
              ),
              'StepList' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '认证步骤，GUIDE代表引导页，PRIVACY代表授权页，FACE_LIVENESS代表活体步骤，TAKE_ID_PHOTO代表拍身份证步骤，RESULT代表结果页。',
                  'type' => 'string',
                  'example' => '["GUIDE","PRIVACY","FACE_LIVENESS","TAKE_ID_PHOTO","RESULT"]',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"BizName\\": \\"用户注册\\",\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Solution\\": \\"RPBasic\\",\\n  \\"BizType\\": \\"UserRegister\\",\\n  \\"StepList\\": [\\n    \\"[\\\\\\"GUIDE\\\\\\",\\\\\\"PRIVACY\\\\\\",\\\\\\"FACE_LIVENESS\\\\\\",\\\\\\"TAKE_ID_PHOTO\\\\\\",\\\\\\"RESULT\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<CreateVerifySettingResponse>\\r\\n     <BizName type=\\"string\\">用户注册</BizName>\\r\\n     <BizType type=\\"string\\">UserRegister</BizType>\\r\\n     <RequestId type=\\"string\\">D6163397-15C5-419C-9ACC-B7C83E0B4C10</RequestId>\\r\\n     <Solution type=\\"string\\">RPBasic</Solution>\\r\\n     <StepList class=\\"array\\">\\r\\n          <e type=\\"string\\">GUIDE</e>\\r\\n          <e type=\\"string\\">PRIVACY</e>\\r\\n          <e type=\\"string\\">FACE_LIVENESS</e>\\r\\n          <e type=\\"string\\">TAKE_ID_PHOTO</e>\\r\\n          <e type=\\"string\\">RESULT</e>\\r\\n     </StepList>\\r\\n</CreateVerifySettingResponse>\\r\\n","errorExample":""}]',
      'title' => '创建认证场景配置',
      'summary' => '等同于在控制台上新建认证场景。',
      'description' => '请求方法：仅支持以HTTPS POST方法发送请求。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVerifySDK' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59152',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthK16DVB',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成SDK的任务ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1KQMcnLd4m37LN2D0F0WCD',
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
              'SdkUrl' => 
              array (
                'description' => 'SDK下载地址。不为空时，表示生成完成。',
                'type' => 'string',
                'example' => 'https://www.xxx.com',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"SdkUrl\\": \\"https://www.xxx.com\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifySDKResponse>\\r\\n    <Data>\\r\\n        <Url>https://www.xxx.com</Url>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n</DescribeVerifySDKResponse>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t","errorExample":""}]',
      'title' => '获取离线SDK下载地址',
      'summary' => '调用DescribeVerifySDK获取离线SDK下载地址。',
      'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。

接口描述：根据生成离线人脸识别SDK的任务ID获取SDK生成结果。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDeviceInfo' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59166',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthV1ZO7W',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人认证服务端为接入方设备生成的唯一ID，只有在设备成功激活后才会生成，该ID可通过离线人脸识别SDK里的getLicenseExtraInfo函数获得。',
            'type' => 'string',
            'required' => true,
            'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
          ),
        ),
        1 => 
        array (
          'name' => 'UserDeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新的用户设备ID。不超过64字符，由接入方自定义，可用于标识具体设备，建议可以使用设备物理编号。',
            'type' => 'string',
            'required' => false,
            'example' => '3iJ1AY$oHcu7mC69',
          ),
        ),
        2 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新的业务类型。不超过64字符。由接入方自定义，可用于对具体业务进行备注，例如可以取接入方不同的人脸使用场景，或者待交付的客户标识等。',
            'type' => 'string',
            'required' => false,
            'example' => 'FACE_TEST',
          ),
        ),
        3 => 
        array (
          'name' => 'Duration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '延长设备到期的时间。单位：年，范围为\\[1,100]，取值100表示永久使用。一年按365天计算。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'ExpiredDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前设备的失效时间。失效日期不正确（和实人认证服务端记录的失效时间相差超过一周），则报错。
> 该失效时间可以通过DescribeDeviceInfo接口查询获得，失效日期不正确则报错，这个校验是为了确保业务方不因为一些误操作导致重复激活一台设备，误消耗授权。',
            'type' => 'string',
            'required' => false,
            'example' => '20190401',
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
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'UserDeviceId' => 
              array (
                'description' => '对应于请求参数中的UserDeviceId。',
                'type' => 'string',
                'example' => '3iJ1AY$oHcu7mC69',
              ),
              'DeviceId' => 
              array (
                'description' => '对应于请求参数中的DeviceId。',
                'type' => 'string',
                'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
              ),
              'ExpiredDay' => 
              array (
                'description' => '若请求参数中Duration不为空，则该字段表示延长设备有效期后，授权到期时间。Duration的1年按365天计算。示例：20180101。',
                'type' => 'string',
                'example' => '20200330',
              ),
              'BeginDay' => 
              array (
                'description' => '若请求参数中Duration不为空，则该字段表示延长设备有效期后，授权开始时间。Duration的1年按365天计算。示例：20180101。',
                'type' => 'string',
                'example' => '20190401',
              ),
              'BizType' => 
              array (
                'description' => '对应于请求参数中的BizType。',
                'type' => 'string',
                'example' => 'FACE_TEST',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"UserDeviceId\\": \\"3iJ1AY$oHcu7mC69\\",\\n  \\"DeviceId\\": \\"wd.6ziUffspAeW5FVYbaqmexR-1qwNjM\\",\\n  \\"ExpiredDay\\": \\"20200330\\",\\n  \\"BeginDay\\": \\"20190401\\",\\n  \\"BizType\\": \\"FACE_TEST\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<ModifyDeviceInfoResponse>\\r\\n    <Data>\\r\\n        <DeviceId>wd.6ziUffspAeW5FVYbaqmexR-1qwNjM</DeviceId>\\r\\n        <UserDeviceId>3iJ1AY$oHcu7mC69</UserDeviceId>\\r\\n        <BizType>FACE_TEST</BizType>\\r\\n        <BeginDay>20190401</BeginDay>\\r\\n        <ExpiredDay>20200330</ExpiredDay>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>1</Code>\\r\\n</ModifyDeviceInfoResponse>\\t\\t\\t\\t","errorExample":""}]',
      'title' => '更新设备相关信息',
      'summary' => '比如设备授权有效期延长、更新业务方自定义的业务标识和设备ID等。适用于设备有效期续期等场景。',
      'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeDeviceInfo' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59114',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth0KJCLK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询每页数目。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前查询页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人认证服务端为接入方设备生成的唯一ID，只有在设备成功激活后才会生成，该ID可通过离线人脸识别SDK里的getLicenseExtraInfo函数获得。',
            'type' => 'string',
            'required' => false,
            'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
          ),
        ),
        3 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务类型。不超过64字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'FACE_TEST',
          ),
        ),
        4 => 
        array (
          'name' => 'UserDeviceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '不超过64字符，由接入方自定义，可用于标识具体设备。',
            'type' => 'string',
            'required' => false,
            'example' => '3iJ1AY$oHcu7mC69',
          ),
        ),
        5 => 
        array (
          'name' => 'ExpiredStartDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的开始时间，即查询在ExpiredStartDay和ExpiredEndDay之间要过期的授权。',
            'type' => 'string',
            'required' => false,
            'example' => '20190401',
          ),
        ),
        6 => 
        array (
          'name' => 'ExpiredEndDay',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间。即查询在ExpiredStartDay和ExpiredEndDay之间要过期的授权。',
            'type' => 'string',
            'required' => false,
            'example' => '20200330',
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
              'CurrentPage' => 
              array (
                'description' => '当前查询页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'PageSize' => 
              array (
                'description' => '每页数目。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'DeviceInfoList' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'DeviceInfo' => 
                  array (
                    'description' => '设备信息数组。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExpiredDay' => 
                        array (
                          'description' => '授权到期时间。',
                          'type' => 'string',
                          'example' => '20180101',
                        ),
                        'UserDeviceId' => 
                        array (
                          'description' => '对应于请求中的UserDeviceId。',
                          'type' => 'string',
                          'example' => '3iJ1AY$oHcu7mC69',
                        ),
                        'DeviceId' => 
                        array (
                          'description' => '对应于请求中的DeviceId。',
                          'type' => 'string',
                          'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
                        ),
                        'BeginDay' => 
                        array (
                          'description' => '授权开始时间。',
                          'type' => 'string',
                          'example' => '20180101',
                        ),
                        'BizType' => 
                        array (
                          'description' => '对应于请求中的BizType。',
                          'type' => 'string',
                          'example' => 'FACE_TEST',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"DeviceInfoList\\": {\\n    \\"DeviceInfo\\": [\\n      {\\n        \\"ExpiredDay\\": \\"20180101\\",\\n        \\"UserDeviceId\\": \\"3iJ1AY$oHcu7mC69\\",\\n        \\"DeviceId\\": \\"wd.6ziUffspAeW5FVYbaqmexR-1qwNjM\\",\\n        \\"BeginDay\\": \\"20180101\\",\\n        \\"BizType\\": \\"FACE_TEST\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeDeviceInfoResponse>\\r\\n    <Data>\\r\\n        <PageSize>20</PageSize>\\r\\n        <CurrentPage>1</CurrentPage>\\r\\n        <TotalCount>1</TotalCount>\\r\\n        <Devices>\\r\\n             <DeviceId>wd.6ziUffspAeW5FVYbaqmexR-1qwNjM</DeviceId>\\r\\n             <UserDeviceId>3iJ1AY$oHcu7mC69</UserDeviceId>\\r\\n             <BizType>FACE_TEST</BizType>\\r\\n             <BeginDay>20190101</BeginDay>\\r\\n             <ExpiredDay>20200101</ExpiredDay>\\r\\n        </Devices>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n</DescribeDeviceInfoResponse>","errorExample":""}]',
      'title' => '查询设备相关信息',
      'summary' => '比如授权有效期、接入方自定义的业务标识和设备ID等。',
      'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVerifyToken' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59156',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdCardBackImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证国徽面图片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => false,
            'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用实人认证服务的业务场景标识。请先参见[业务设置](~~127885~~)在控制台完成创建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RPBasicTest',
          ),
        ),
        2 => 
        array (
          'name' => 'FailedRedirectUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证失败跳转链接。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        3 => 
        array (
          'name' => 'FaceRetainedImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人像留底照片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => false,
            'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'CallbackSeed',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        5 => 
        array (
          'name' => 'IdCardFrontImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证人像面图片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => false,
            'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
          ),
        ),
        6 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端用户的ID，如终端用户的账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'user111',
          ),
        ),
        7 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证ID。标识一次认证任务的唯一ID，不超过64字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。

> 发起不同的认证任务时需要更换不同的BizId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '39ecf51e-2f81-4dc5-90ee-ff86125be683',
          ),
        ),
        8 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        9 => 
        array (
          'name' => 'IdCardNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号。',
            'type' => 'string',
            'required' => false,
            'example' => '330100xxxxxxxxxxxx',
          ),
        ),
        10 => 
        array (
          'name' => 'PassedRedirectUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证通过跳转链接。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        11 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '回调Url。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        12 => 
        array (
          'name' => 'UserIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户IP。',
            'type' => 'string',
            'required' => false,
            'example' => '192.168.***.***',
          ),
        ),
        13 => 
        array (
          'name' => 'UserPhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户电话号码。',
            'type' => 'string',
            'required' => false,
            'example' => '187********',
          ),
        ),
        14 => 
        array (
          'name' => 'UserRegistTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的注册时间。使用时间戳格式表达，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1577808000000',
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
              'VerifyPageUrl' => 
              array (
                'description' => '原H5认证方案入口链接，目前该方案已经下线，不支持新增接入。如果您有H5认证方案接入需求，建议您使用金融级实人认证的[PC或移动端H5网页接入方案](~~173779~~)。',
                'type' => 'string',
                'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'VerifyToken' => 
              array (
                'description' => '该次认证的Token，用来串联认证请求中的各个接口，在30分钟内有效。',
                'type' => 'string',
                'example' => 'c302c0797679457685410ee51a5ba375',
              ),
              'OssUploadToken' => 
              array (
                'description' => 'OSS上传Token信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'Key' => 
                  array (
                    'description' => '文件上传所需的Key。',
                    'type' => 'string',
                    'example' => 'STS.NU8rUBj****',
                  ),
                  'Token' => 
                  array (
                    'description' => '文件上传所需的Token。',
                    'type' => 'string',
                    'example' => 'uWia500nTS5knZaDzq4/KqpvhcLnO****',
                  ),
                  'Secret' => 
                  array (
                    'description' => '文件上传所需的Secret。',
                    'type' => 'string',
                    'example' => 'FwmnyoqT8dHj7nJLuM67T****',
                  ),
                  'Expired' => 
                  array (
                    'description' => '过期时间。使用时间戳格式表达，单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1582636610000',
                  ),
                  'Path' => 
                  array (
                    'description' => '文件存放路径。',
                    'type' => 'string',
                    'example' => 'prod/RdNLC@Ox2n-1s7NMt',
                  ),
                  'EndPoint' => 
                  array (
                    'description' => '接入端点。',
                    'type' => 'string',
                    'example' => 'https://oss-cn-zhangjiakou.aliyuncs.com',
                  ),
                  'Bucket' => 
                  array (
                    'description' => 'OSS文件存储的空间。',
                    'type' => 'string',
                    'example' => 'cloudauth-zhangjiakou-external',
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
            'errorCode' => 'InvalidParam.ImageValuePatternError',
            'errorMessage' => 'The pattern of value of given image is not acceptable.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'RAM caller has no permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"VerifyPageUrl\\": \\"http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg\\",\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"VerifyToken\\": \\"c302c0797679457685410ee51a5ba375\\",\\n  \\"OssUploadToken\\": {\\n    \\"Key\\": \\"STS.NU8rUBj****\\",\\n    \\"Token\\": \\"uWia500nTS5knZaDzq4/KqpvhcLnO****\\",\\n    \\"Secret\\": \\"FwmnyoqT8dHj7nJLuM67T****\\",\\n    \\"Expired\\": 1582636610000,\\n    \\"Path\\": \\"prod/RdNLC@Ox2n-1s7NMt\\",\\n    \\"EndPoint\\": \\"https://oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"Bucket\\": \\"cloudauth-zhangjiakou-external\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifyTokenResponse>\\r\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n    <VerifyToken>c302c0797679457685410ee51a5ba375</VerifyToken>\\r\\n</DescribeVerifyTokenResponse>","errorExample":""}]',
      'title' => '获取认证Token',
      'summary' => '发起认证请求，获取认证Token。该接口适用于使用SDK+服务端接入的认证方案',
      'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[实人认证方案接入流程概述](~~127536~~)、[活体人脸验证方案（活体检测方案）接入流程概述](~~127687~~)。

请求方法：HTTPS POST和GET

接口说明：每次开始认证前通过本接口获取认证Token（VerifyToken），用来串联认证请求中的各个接口。

适用范围：该接口适用于无线SDK接入。

图片地址：需使用HTTP或HTTPS地址，公网可访问的HTTP或HTTPS地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。

图片限制：

- 不支持本地图片的相对路径或绝对路径。
- 单张图片大小请控制在2 MB内，避免算法拉取超时。
- 图片中人脸区域的大小至少64*64像素（px）。
- 单个请求的Body有8 MB的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。',
      'requestParamsDescription' => ' 根据选择的认证方案不同，所需传入的字段不太一样，具体可以参考下述表格中的说明。

| 认证方案  | Name字段 | IdCardNumber字段 | IdCardFrontImageUrl字段 | IdCardBackImageUrl字段 | FaceRetainedImageUrl字段 |
|-----------|----------|------------------|-------------------------|------------------------|--------------------------|
| RPBasic   | 否       | 否               | 否                      | 否                     | 否                       |
| RPManual  | 否       | 否               | 否                      | 否                     | 否                       |
| RPBioID   | 是       | 是               | 否                      | 否                     | 否                       |
| RPBioOnly | 是       | 是               | 可选传入                | 可选传入               | 否                       |
| FVBioOnly | 否       | 否               | 否                | 否               | 是                       |
| FDBioOnly| 否       | 否               | 否                | 否              | 否                       |',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVerifyResult' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59150',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证ID。标识一次认证任务的唯一ID，不超过64个字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。
> 您发起不同的认证任务时需要更换不同的BizId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '39ecf51e-2f81-4dc5-90ee-ff86125b****',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人认证服务的业务场景标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FVBioOnlyTest',
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
              'AuthorityComparisionScore' => 
              array (
                'description' => '认证过程中所提交的人脸照片和权威数据的比对分，取值范围：**0**~**100**。

置信度阈值参考：

- 误识率为0.001%时，对应阈值为95。
- 误识率为0.01%时，对应阈值为90。
- 误识率为0.1%时，对应阈值为80。
- 误识率为1%时，对应阈值为60。

>  该字段只表示人脸与权威数据的比对结果，仅供您参考，通常不建议业务上仅以该值作为认证是否通过的标准。认证的综合结果请参考**VerifyStatus**字段。**VerifyStatus**的结果综合了人脸与权威数据的比对和其他多种策略，可以提高安全水平。',
                'type' => 'number',
                'format' => 'float',
                'example' => '97',
              ),
              'VerifyStatus' => 
              array (
                'description' => '认证状态，取值：

- **-1**：未认证
- **1**：认证通过
- **2**~**n**：各种不同原因导致的认证不通过。详细描述参见认证状态说明。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'FaceComparisonScore' => 
              array (
                'description' => '认证过程中所提交的人脸照片和人脸留底图片上人脸的比对分，取值范围：**0**~**100**。


置信度阈值参考：

- 误识率为0.001%时，对应阈值为95。
- 误识率为0.01%时，对应阈值为90。
- 误识率为0.1%时，对应阈值为80。
- 误识率为1%时，对应阈值为60。',
                'type' => 'number',
                'format' => 'float',
                'example' => '97',
              ),
              'IdCardFaceComparisonScore' => 
              array (
                'description' => '认证过程中所提交的人脸照片和身份证人脸面图片上人脸的比对分，取值范围：**0**~**100**。


置信度阈值参考：

- 误识率为0.001%时，对应阈值为95。
- 误识率为0.01%时，对应阈值为90。
- 误识率为0.1%时，对应阈值为80。
- 误识率为1%时，对应阈值为60。',
                'type' => 'number',
                'format' => 'float',
                'example' => '97',
              ),
              'Material' => 
              array (
                'description' => '认证材料。',
                'type' => 'object',
                'properties' => 
                array (
                  'IdCardNumber' => 
                  array (
                    'description' => '身份证号。',
                    'type' => 'string',
                    'example' => '02343218901123****',
                  ),
                  'FaceGlobalUrl' => 
                  array (
                    'description' => '实人认证SDK采集到的摄像头全局图。

> 该参数需要配置后才会生效。如果您需要使用该参数，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们。',
                    'type' => 'string',
                    'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg ',
                  ),
                  'FaceImageUrl' => 
                  array (
                    'description' => '人脸正面照图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议您进行转存以免影响使用。
> 如果人脸正面照图片的HTTP或HTTPS链接过期，可重新调用[DescribeVerifyResult](~~154606~~)获取链接。',
                    'type' => 'string',
                    'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg',
                  ),
                  'FaceMask' => 
                  array (
                    'description' => '人脸是否佩戴口罩。取值：
- **true**：佩戴了口罩
- **false**：未佩戴口罩',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'IdCardName' => 
                  array (
                    'description' => '姓名。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'FaceQuality' => 
                  array (
                    'description' => '人脸正面照图片的质量。取值：
- **UNQUALIFIED**：照片质量较差
- **LOW**：低
- **NORMAL**：一般
- **HIGH**：高',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'VideoUrls' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '历史RPH5BioOnly方案返回的录制视频的URL地址。',
                      'type' => 'string',
                      'example' => '-',
                    ),
                  ),
                  'IdCardInfo' => 
                  array (
                    'description' => '身份证信息的OCR结果。
> 认证过程中如果没有身份证正面和反面信息，实人认证服务则不会返回身份证的OCR结果。认证过程中如果有身份证正面和反面信息，实人认证服务也不一定保证会返回身份证上所有的信息，因身份证拍摄问题引起的OCR无法识别时，OCR信息就会不全，建议您的接入方业务上不强依赖身份证OCR信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EndDate' => 
                      array (
                        'description' => '证件有效期结束时间。格式为：yyyymmdd。',
                        'type' => 'string',
                        'example' => '20201101',
                      ),
                      'Authority' => 
                      array (
                        'description' => '签发机构。',
                        'type' => 'string',
                        'example' => '杭州市公安局',
                      ),
                      'Address' => 
                      array (
                        'description' => '地址。',
                        'type' => 'string',
                        'example' => '浙江省杭州市余杭区文一西路969号',
                      ),
                      'Number' => 
                      array (
                        'description' => '身份证号。',
                        'type' => 'string',
                        'example' => '02343218901123****',
                      ),
                      'StartDate' => 
                      array (
                        'description' => '证件有效期开始时间。格式为：yyyymmdd。',
                        'type' => 'string',
                        'example' => '20201101',
                      ),
                      'BackImageUrl' => 
                      array (
                        'description' => '身份证国徽面图片的HTTP/HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。
> 如果人像正面照图片的HTTP/HTTPS链接过期，可重新调用DescribeVerifyResult获取链接。',
                        'type' => 'string',
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
                      ),
                      'Nationality' => 
                      array (
                        'description' => '民族。',
                        'type' => 'string',
                        'example' => '汉',
                      ),
                      'Birth' => 
                      array (
                        'description' => '出生日期。',
                        'type' => 'string',
                        'example' => '19900101',
                      ),
                      'Name' => 
                      array (
                        'description' => '姓名。',
                        'type' => 'string',
                        'example' => '张三',
                      ),
                      'FrontImageUrl' => 
                      array (
                        'description' => '身份证人像面图片的HTTP/HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。
> 如果人像正面照图片的HTTP/HTTPS链接过期，可重新调用DescribeVerifyResult获取链接。',
                        'type' => 'string',
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
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
        410 => 
        array (
          0 => 
          array (
            'errorCode' => 'DataExpired',
            'errorMessage' => 'The data has expired and the records have been deleted.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorityComparisionScore\\": 97,\\n  \\"VerifyStatus\\": 1,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"FaceComparisonScore\\": 97,\\n  \\"IdCardFaceComparisonScore\\": 97,\\n  \\"Material\\": {\\n    \\"IdCardNumber\\": \\"02343218901123****\\",\\n    \\"FaceGlobalUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg \\",\\n    \\"FaceImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg\\",\\n    \\"FaceMask\\": false,\\n    \\"IdCardName\\": \\"张三\\",\\n    \\"FaceQuality\\": \\"NORMAL\\",\\n    \\"VideoUrls\\": [\\n      \\"-\\"\\n    ],\\n    \\"IdCardInfo\\": {\\n      \\"EndDate\\": \\"20201101\\",\\n      \\"Authority\\": \\"杭州市公安局\\",\\n      \\"Address\\": \\"浙江省杭州市余杭区文一西路969号\\",\\n      \\"Number\\": \\"02343218901123****\\",\\n      \\"StartDate\\": \\"20201101\\",\\n      \\"BackImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\",\\n      \\"Nationality\\": \\"汉\\",\\n      \\"Birth\\": \\"19900101\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"FrontImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifyResultResponse>\\r\\n    <Data>\\r\\n    <VerifyStatus>1</VerifyStatus>\\r\\n        <Material>\\r\\n            <FaceImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg\\r\\n            </FaceImageUrl>\\r\\n            <FaceMask>false</FaceMask>\\r\\n            <FaceQuality>HIGH</FaceQuality>\\r\\n            <IdCardName>张三</IdCardName>\\r\\n            <IdCardNumber>02343218901123****</IdCardNumber>\\r\\n            <IdCardInfo>\\r\\n                <FrontImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\r\\n                </FrontImageUrl>\\r\\n                <BackImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\r\\n                </BackImageUrl>\\r\\n                <Name>张三</Name>\\r\\n                <Number>02343218901123****</Number>\\r\\n                <Birth>19900101</Birth>\\r\\n                <Address>浙江省杭州市余杭区文一西路969号</Address>\\r\\n                <StartDate>20101101</StartDate>\\r\\n                <EndDate>20201101</EndDate>\\r\\n                <Authority>杭州市公安局</Authority>\\r\\n            </IdCardInfo>\\r\\n        </Material>\\r\\n        <AuthorityComparisonScore>97</AuthorityComparisonScore>\\r\\n    </Data>\\r\\n</DescribeVerifyResultResponse>","errorExample":""}]',
      'title' => '查询认证结果',
      'summary' => '查询实人认证结果',
      'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[实人认证服务端接入准备](~~127471~~)、[活体人脸验证服务端接入准备](~~127717~~)。

> 阿里云实人认证仅存储最近180天的认证数据，后续业务上要使用的认证数据，请您及时调用该接口获取并自行转存，以免影响使用。

请求方法：HTTPS POST和GET。

接口描述：当接入方移动端收到回调之后，其服务端可以调用此接口，来获取相应的认证状态和认证资料。

适用范围：该接口适用于SDK+服务端接入的认证方案。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '** 认证状态说明**

| VerifyStatus | 原因说明 | 备注 |
|--------------|--------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------|
| -1 | 未认证 | 出现该状态一般是因为客户端上的认证请求没有提交成功。例如用户中途主动退出认证流程，或者用户的姓名、身份证号实名校验不匹配等。 |
| 1 | 认证通过 | 该认证状态在实人认证方案和活体人脸验证方案均会出现。 |
| 2 | 认证不通过，可能原因：实名校验不通过。 | 该认证状态仅在实人认证方案中出现。 |
| 3 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别；身份证照片信息与需认证的身份证姓名不一致；提交的照片为非身份证照片。 | 该认证状态仅在实人认证方案中出现。 |
| 4 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别；身份证照片信息与需认证的身份证号码不一致、提交的照片为非身份证照片。 | 该认证状态仅在实人认证方案中出现。 |
| 5| 认证不通过，可能原因：身份证照片有效期已过期（或即将过期）。 | 该认证状态仅在实人认证方案中出现。 |
| 6 | 认证不通过，可能原因：人脸与身份证头像不一致。 | 该认证状态仅在实人认证方案中出现。 |
| 7 | 认证不通过，可能原因：人脸与公安网照片不一致。 | 该认证状态仅在实人认证方案中出现。 |
| 8| 认证不通过，可能原因：提交的身份证照片非身份证原照片或未提交有效的身份证照片。 | 该认证状态仅在实人认证方案中出现。 |
| 9 | 认证不通过，可能原因：非账户本人操作。 | 该认证状态在实人认证方案和活体人脸验证方案均会出现。 |
| 10 | 认证不通过，可能原因：非同一个人操作。 | 该认证状态仅在活体人脸验证方案中出现。 |
| 11 | 认证不通过，可能原因：公安网照片缺失、公安网照片格式错误、公安网照片未找到人脸。| 该认证状态仅在实人认证方案中出现。 |
| 12 | 认证不通过，可能原因：公安网系统异常、无法进行照片比对。 | 该认证状态仅在实人认证方案中出现。 ',
      'extraInfo' => ' ',
    ),
    'VerifyMaterial' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59176',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHOSIED',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IdCardBackImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证国徽面图片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'FaceImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人像正面照图片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
          ),
        ),
        2 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用实人认证服务的业务场景标识。请先参见[业务设置](~~127885~~)在控制台完成创建。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'RPMinTest',
          ),
        ),
        3 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标识一次认证任务的唯一ID，不超过64字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。

> 发起不同的认证任务时需要更换不同的BizId。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '39ecf51e-2f81-4dc5-90ee-ff86125b****',
          ),
        ),
        4 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        5 => 
        array (
          'name' => 'IdCardNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '02343218901123****',
          ),
        ),
        6 => 
        array (
          'name' => 'IdCardFrontImageUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证人像面图片的HTTP或HTTPS链接。',
            'type' => 'string',
            'required' => false,
            'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
          ),
        ),
        7 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端用户的ID，例如终端用户的账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => '54sdj',
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
              'AuthorityComparisionScore' => 
              array (
                'description' => '认证过程中所提交的人脸照片和权威数据的比对分，取值范围：**0**~**100**。

置信度阈值请参考：
- 误识率0.001%时，对应阈值95。
- 误识率0.01%时，对应阈值90。
- 误识率为0.1%时，对应阈值80。
- 误识率为1%时，对应阈值为60。

> 该字段只表示人脸与权威数据的比对结果，是个参考分，通常不建议业务上仅以该分数作为是否通过的标准。认证的综合结果请参考**VerifyStatus**字段。**VerifyStatus**的结果综合了人脸与权威数据的比对和其他多种策略，可以提高安全水位。',
                'type' => 'number',
                'format' => 'float',
                'example' => '97',
              ),
              'VerifyStatus' => 
              array (
                'description' => '认证状态。取值：

- **1**：认证通过。
- **2**~**n**：由于不同原因导致认证不通过。详细描述请参见下文的**认证状态说明**。
',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
              ),
              'VerifyToken' => 
              array (
                'description' => '该次认证的Token，用来串联认证请求中的各个接口，在30分钟内有效。',
                'type' => 'string',
                'example' => 'c302c0797679457685410ee51a5ba375',
              ),
              'IdCardFaceComparisonScore' => 
              array (
                'description' => '认证过程中所提交的人脸照片和身份证人像面图片上人脸的比对分，取值范围：**0**~**100**。

置信度阈值请参考：
- 误识率0.001%时，对应阈值95。
- 误识率0.01%时，对应阈值90。
- 误识率为0.1%时，对应阈值80。
- 误识率为1%时，对应阈值为60。',
                'type' => 'number',
                'format' => 'float',
                'example' => '97',
              ),
              'Material' => 
              array (
                'description' => '认证材料。',
                'type' => 'object',
                'properties' => 
                array (
                  'IdCardNumber' => 
                  array (
                    'description' => '身份证号，对应于请求参数**IdCardNumber**。',
                    'type' => 'string',
                    'example' => '02343218901123****',
                  ),
                  'FaceGlobalUrl' => 
                  array (
                    'description' => '实人认证SDK采集到的摄像头全局图。

> 该参数需要配置后才会生效。如果您需要使用该参数，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们。',
                    'type' => 'string',
                    'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg ',
                  ),
                  'FaceImageUrl' => 
                  array (
                    'description' => '人像正面照图片的HTTP或HTTPS链接，对应于请求参数**FaceImageUrl**。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                    'type' => 'string',
                    'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
                  ),
                  'FaceMask' => 
                  array (
                    'description' => '人脸是否佩戴口罩。取值：
- **true**：佩戴了口罩
- **false**：未佩戴口罩',
                    'type' => 'string',
                    'example' => 'false',
                  ),
                  'IdCardName' => 
                  array (
                    'description' => '姓名，对应于请求参数**Name**。',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'FaceQuality' => 
                  array (
                    'description' => '人脸正面照图片的质量。取值：
- **UNQUALIFIED**：照片质量较差
- **LOW**：低
- **NORMAL**：一般
- **HIGH**：高',
                    'type' => 'string',
                    'example' => 'NORMAL',
                  ),
                  'IdCardInfo' => 
                  array (
                    'description' => '身份证信息的OCR结果。

> 认证过程中如果没有身份证正面和身份证反面，则不会返回身份证信息的OCR结果。认证过程中如果有身份证正面和身份证反面，也不保证一定会返回身份证上所有的信息，因身份证拍摄问题等引起的OCR无法识别时，OCR信息就会不全，建议接入方业务上不强依赖身份证OCR信息。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'EndDate' => 
                      array (
                        'description' => '证件有效期结束时间。格式为：yyyymmdd。',
                        'type' => 'string',
                        'example' => '20201101',
                      ),
                      'Authority' => 
                      array (
                        'description' => '签发机构。',
                        'type' => 'string',
                        'example' => '杭州市公安局',
                      ),
                      'Address' => 
                      array (
                        'description' => '地址。',
                        'type' => 'string',
                        'example' => '浙江省杭州市余杭区文一西路969号',
                      ),
                      'Number' => 
                      array (
                        'description' => '身份证号。',
                        'type' => 'string',
                        'example' => '02343218901123****',
                      ),
                      'StartDate' => 
                      array (
                        'description' => '证件有效期开始时间。格式为：yyyymmdd。',
                        'type' => 'string',
                        'example' => '20201101',
                      ),
                      'BackImageUrl' => 
                      array (
                        'description' => '身份证国徽面图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                        'type' => 'string',
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
                      ),
                      'Nationality' => 
                      array (
                        'description' => '民族。',
                        'type' => 'string',
                        'example' => '汉',
                      ),
                      'Birth' => 
                      array (
                        'description' => '出生日期。',
                        'type' => 'string',
                        'example' => '19900101',
                      ),
                      'Name' => 
                      array (
                        'description' => '姓名。',
                        'type' => 'string',
                        'example' => '张三',
                      ),
                      'FrontImageUrl' => 
                      array (
                        'description' => '身份证人像面图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                        'type' => 'string',
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
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
            'errorCode' => 'InvalidParam.MaterialsNotValid',
            'errorMessage' => 'The param materials is not valid.',
          ),
        ),
        401 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorityComparisionScore\\": 97,\\n  \\"VerifyStatus\\": 1,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"VerifyToken\\": \\"c302c0797679457685410ee51a5ba375\\",\\n  \\"IdCardFaceComparisonScore\\": 97,\\n  \\"Material\\": {\\n    \\"IdCardNumber\\": \\"02343218901123****\\",\\n    \\"FaceGlobalUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg \\",\\n    \\"FaceImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg\\",\\n    \\"FaceMask\\": \\"false\\",\\n    \\"IdCardName\\": \\"张三\\",\\n    \\"FaceQuality\\": \\"NORMAL\\",\\n    \\"IdCardInfo\\": {\\n      \\"EndDate\\": \\"20201101\\",\\n      \\"Authority\\": \\"杭州市公安局\\",\\n      \\"Address\\": \\"浙江省杭州市余杭区文一西路969号\\",\\n      \\"Number\\": \\"02343218901123****\\",\\n      \\"StartDate\\": \\"20201101\\",\\n      \\"BackImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\",\\n      \\"Nationality\\": \\"汉\\",\\n      \\"Birth\\": \\"19900101\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"FrontImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n\\t<VerifyMaterialResponse>\\r\\n\\t\\t<VerifyToken>c302c0797679457685410ee51a5ba375</VerifyToken>\\r\\n\\t\\t<VerifyStatus>1</VerifyStatus>\\r\\n\\t\\t<Material>\\r\\n\\t\\t\\t<FaceImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg</FaceImageUrl>\\r\\n\\t\\t\\t<FaceMask>false</FaceMask>\\r\\n\\t\\t\\t<FaceQuality>NORMAL</FaceQuality>\\r\\n\\t\\t\\t<IdCardName>张三</IdCardName>\\r\\n\\t\\t\\t<IdCardNumber>02343218901123****</IdCardNumber>\\r\\n\\t\\t\\t<IdCardInfo>\\r\\n\\t\\t\\t\\t<FrontImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg</FrontImageUrl>\\r\\n\\t\\t\\t\\t<BackImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg</BackImageUrl>\\r\\n\\t\\t\\t\\t<Name>张三</Name>\\r\\n\\t\\t\\t\\t<Number>02343218901123****</Number>\\r\\n\\t\\t\\t\\t<Birth>19900101</Birth>\\r\\n\\t\\t\\t\\t<Address>浙江省杭州市余杭区文一西路969号</Address>\\r\\n\\t\\t\\t\\t<StartDate>20101101</StartDate>\\r\\n\\t\\t\\t\\t<EndDate>20201101</EndDate>\\r\\n\\t\\t\\t\\t<Authority>杭州市公安局</Authority>\\r\\n\\t\\t\\t</IdCardInfo>\\r\\n\\t\\t</Material>\\r\\n\\t\\t<AuthorityComparisonScore>97</AuthorityComparisonScore>\\r\\n\\t</VerifyMaterialResponse>","errorExample":""}]',
      'title' => '实人认证方案纯服务端API',
      'summary' => '传入姓名、身份证号、人像照、身份证正反面照片（可选）进行实人认证，并同步返回结果',
      'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[服务端接入准备](~~127471~~)。

请求方法：HTTPS POST和GET。

接口描述：接入方服务端提交认证材料到实人认证服务进行核实比对，结果同步返回。

适用范围：该接口仅适用于纯服务端接入的认证方案。

上传图片地址说明：

- HTTP或HTTPS地址：支持公网可访问的HTTP或HTTPS地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。
- OSS地址：接入方的图片如果是本地文件，阿里云也提供相应的上传SDK，支持业务方将图片上传到实人认证服务指定的OSS bucket中，并获取相应的OSS地址后，作为接口的图片地址入参。如果您的业务需要使用上传SDK，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们获取。

图片限制说明：

- 不支持本地图片的相对路径或绝对路径。
- 单张图片大小请控制在2 M内，避免算法拉取超时。
- 图片中人脸区域的大小至少64*64像素。
- 单个请求的Body有8 M的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '**认证状态说明**

|VerifyStatus|原因说明                                                                                                                             |
|--------------|--------------------------------------------------------------------------------------------------------------------------------------|
| 1 | 认证通过。                                                                                                                          |
| 2 | 认证不通过，原因：实名校验不通过。                                                                                                  |
| 3 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别、身份证照片信息与需认证的身份证姓名不一致、提交的照片为非身份证照片。 |
| 4 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别、身份证照片信息与需认证的身份证号码不一致、提交的照片为非身份证照片。 |
| 5 | 认证不通过，可能原因：身份证照片上的有效期已过期（或即将过期）。                                                             |
| 6 | 认证不通过，可能原因：人脸与身份证头像不一致。                                                 |
| 7 | 认证不通过，可能原因：人脸与公安网照片不一致。                                         |
| 8 | 认证不通过，可能原因：提交的身份证照片非身份证原照片、未提交有效身份证照片。              |
| 9 | 认证不通过，可能原因：非账户本人操作。                                                 |
| 11| 认证不通过，可能原因：公安网照片缺失、公安网照片格式错误、公安网照片未找到人脸。                  |
| 12 | 认证不通过，可能原因：公安网系统异常，无法进行照片比对等可能。                                |',
      'extraInfo' => ' ',
    ),
    'CompareFaces' => 
    array (
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '59094',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TargetImageType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片2的类型，取值：

- **FacePic**： 用户人脸照
- **IDPic**： 用户二代身份证芯片中的头像照（通常由二代身份证阅读仪设备读取并解码获得）',
            'type' => 'string',
            'required' => false,
            'example' => 'FacePic',
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'SourceImageType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片1的类型，取值：

- **FacePic**： 用户人脸照
- **IDPic**： 用户二代身份证芯片中的头像照（通常由二代身份证阅读仪设备读取并解码获得）',
            'type' => 'string',
            'required' => false,
            'example' => 'FacePic',
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'SourceImageValue',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片1的地址。具体请参见关于上传图片地址的说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'TargetImageValue',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '图片2的地址。具体请参见关于上传图片地址的说明。',
            'type' => 'string',
            'required' => false,
            'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
            'docRequired' => true,
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
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误代码。',
                'type' => 'string',
                'example' => 'Error.InternalError',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Success' => 
              array (
                'description' => '是否成功响应。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '人脸比对结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'SimilarityScore' => 
                  array (
                    'description' => '两个图片中人脸的相似程度。取值范围为\\[0, 100]，值越大相似度越高。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '98.7913',
                  ),
                  'ConfidenceThresholds' => 
                  array (
                    'description' => '人脸比对置信度阈值。返回内容是JSON Object，具体结构为`"key":"value"`。

- `key`是误识率，即将其他人误识别为指定人员的概率。
- `value`是对应的阈值。


> 关于示例中的人脸比对置信度阈值（confidenceThresholds）：
- `"0.0001": "90.07"`表示误识率为0.01%时的对应阈值为90.07。
- `"0.001": "80.01"`表示误识率为0.1%时的对应阈值为80.01。
- `"0.01": "70.02"`表示误识率为1%时的对应阈值为70.02。

置信度阈值会根据不同图像和算法动态给出，请不要将置信度阈值持久化。',
                    'type' => 'string',
                    'example' => '{"0.0001":"90.07","0.001":"80.01","0.01":"70.02"}',
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
            'errorCode' => 'Error.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.ParamsMissing',
            'errorMessage' => 'Please check if there is param empty in your imput',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParam.ImageTypeEmpty',
            'errorMessage' => 'The image type is empty',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParam.FacePicNotGiven',
            'errorMessage' => 'At least one of the two given images should have a type of FacePic',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidParam.ImageValuePatternError',
            'errorMessage' => 'The pattern of value of given image is not acceptable',
          ),
          5 => 
          array (
            'errorCode' => 'InvalidParam.ImageTypeInvalid',
            'errorMessage' => 'The image type is not valid',
          ),
          6 => 
          array (
            'errorCode' => 'Error.NoFaceDetected',
            'errorMessage' => 'No face detected from given images',
          ),
          7 => 
          array (
            'errorCode' => 'InvalidParam.ImageNotFound',
            'errorMessage' => 'No images founded with given image address',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error.NoPermissionAccess',
            'errorMessage' => 'No permission to access our service',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'RAM caller has no permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Error.InternalError\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SimilarityScore\\": 98.7913,\\n    \\"ConfidenceThresholds\\": \\"{\\\\\\"0.0001\\\\\\":\\\\\\"90.07\\\\\\",\\\\\\"0.001\\\\\\":\\\\\\"80.01\\\\\\",\\\\\\"0.01\\\\\\":\\\\\\"70.02\\\\\\"}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<CompareFacesResponse>\\r\\n    <Data>\\r\\n        <ConfidenceThresholds>{\\"0.0001\\":\\"90.07\\",\\"0.001\\":\\"80.01\\",\\"0.01\\":\\"70.02\\"}</ConfidenceThresholds>\\r\\n        <SimilarityScore>98.7913</SimilarityScore>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>200</Code>\\r\\n</CompareFacesResponse>\\r\\n\\t\\t\\t\\t\\t\\t","errorExample":""}]',
      'title' => '人脸比对纯服务端API',
      'summary' => '进行人脸比对',
      'description' => '请求方法：仅支持以HTTPS POST方法发送请求。

接口描述：指定两张人脸图片进行比对，输出两张图片中人脸的相似度分值作为结果。

- 指定的比对图片中至少应含有一个图片类型是人脸照（FacePic）。
- 一张图片中含有多个人脸时，算法会自动选取图片中占幅最大的人脸。
- 两张比对的图片中，如果其中一张检测不到人脸，系统会返回“未检测到人脸”的错误提示。

在传入图片时，您需要上传图片对应的HTTP地址或base64编码。

- HTTP地址：可访问的公网HTTP地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。
- base64编码：通过base64编码的图片，格式为`base64://<图片 base64 字符串>`。

图片限制

- 不支持本地图片的相对路径或绝对路径。
- 单张图片大小请控制在2M内，避免算法拉取超时。
- 单个请求的Body有8M的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。
- 使用base64传递图片时，接口的请求方法需要改成 POST；图片base64字符串需要去掉头部描述，如`data:image/png;base64`,。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DetectFaceAttributes' => 
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
        'operationType' => 'none',
        'abilityTreeCode' => '59162',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MaterialValue',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待检测照片，格式描述见上传图片地址的说明。同一张图片最多检测其中的5张人脸。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '使用实人认证服务的业务场景标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'RPBasicTest',
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
              'Code' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误代码。',
                'type' => 'string',
                'example' => 'Error.InternalError',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Success' => 
              array (
                'description' => '是否成功响应。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ImgHeight' => 
                  array (
                    'description' => '原图高度，单位为像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1920',
                  ),
                  'ImgWidth' => 
                  array (
                    'description' => '原图宽度，单位为像素。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1080',
                  ),
                  'FaceInfos' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FaceAttributesDetectInfo' => 
                      array (
                        'description' => '人脸检测结果。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FaceRect' => 
                            array (
                              'description' => '人脸在原图中的位置。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Left' => 
                                array (
                                  'description' => '人脸矩形左上角距原图左边的距离，单位为像素。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '354',
                                ),
                                'Top' => 
                                array (
                                  'description' => '人脸矩形左上角距原图上边的距离，单位为像素。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '453',
                                ),
                                'Width' => 
                                array (
                                  'description' => '人脸矩形的宽度。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '473',
                                ),
                                'Height' => 
                                array (
                                  'description' => '人脸矩形的高度。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '473',
                                ),
                              ),
                            ),
                            'FaceAttributes' => 
                            array (
                              'description' => '人脸属性。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Glasses' => 
                                array (
                                  'description' => '是否戴眼镜。取值：

- **None**：未戴眼镜
- **Wear**：戴普通眼镜
- **Sunglass**：戴墨镜',
                                  'type' => 'string',
                                  'example' => 'None',
                                ),
                                'Facequal' => 
                                array (
                                  'description' => '表示分数，取值范围：0~100。分数越高，质量越好，建议您使用大于或者等于50分认为质量合格。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '60',
                                ),
                                'Integrity' => 
                                array (
                                  'description' => '表示分数，取值范围：0~100。分数越高，人脸越完整，建议您使用大于等于70分为完整度合格。',
                                  'type' => 'integer',
                                  'format' => 'int32',
                                  'example' => '70',
                                ),
                                'Facetype' => 
                                array (
                                  'description' => '是否人脸。取值：

- **None**：不是人脸
- **Face**：人脸
- **Profile**：侧脸（左右转头超过30°）

> 若没有检测到人脸，接口返回的faceInfos即为空；这里的None代表检测到人脸，但认为是卡通或宠物等。',
                                  'type' => 'string',
                                  'example' => 'Face',
                                ),
                                'Respirator' => 
                                array (
                                  'description' => '是否戴口罩。取值：

- Wear：表示戴口罩。

- None：表示没有戴口罩。

 ',
                                  'type' => 'string',
                                  'example' => 'Wear',
                                ),
                                'Blur' => 
                                array (
                                  'description' => '人脸模糊度，分值越大越模糊。通常≥2.0已较模糊，建议根据实际业务数据测试调整。',
                                  'type' => 'number',
                                  'format' => 'float',
                                  'example' => '0.1419367790222168',
                                ),
                                'Smiling' => 
                                array (
                                  'description' => '是否笑脸。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '笑脸分值。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '97',
                                    ),
                                    'Threshold' => 
                                    array (
                                      'description' => '笑脸阈值。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '95',
                                    ),
                                  ),
                                ),
                                'Headpose' => 
                                array (
                                  'description' => '人脸姿态。',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'PitchAngle' => 
                                    array (
                                      'description' => '抬头角度，单位为度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '-1.5683923959732056',
                                    ),
                                    'RollAngle' => 
                                    array (
                                      'description' => '左右歪头角度，单位为度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '7.163370132446289',
                                    ),
                                    'YawAngle' => 
                                    array (
                                      'description' => '左右转头角度，单位为度。',
                                      'type' => 'number',
                                      'format' => 'float',
                                      'example' => '-6.925303936004639',
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
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidParam.ParamsMissing',
            'errorMessage' => 'Please check if there is param empty in your imput',
          ),
          2 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesParamError',
            'errorMessage' => 'detectFaceAttributes param error',
          ),
          3 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesHttpError',
            'errorMessage' => 'detectFaceAttributes fail to get image from http',
          ),
          4 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesOssError',
            'errorMessage' => 'detectFaceAttributes fail to get image from oss',
          ),
          5 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesAlgServiceError',
            'errorMessage' => 'detectFaceAttributes algService error',
          ),
          6 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesAlgServieReturnError',
            'errorMessage' => 'detectFaceAttributes algService return error',
          ),
          7 => 
          array (
            'errorCode' => 'Error.DetectFaceAttributesBase64Error',
            'errorMessage' => 'detectFaceAttributes fail to get image from base64',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Error.NoPermissionAccess',
            'errorMessage' => 'No permission to access our service',
          ),
          1 => 
          array (
            'errorCode' => 'NoPermission',
            'errorMessage' => 'RAM caller has no permission',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Error.InternalError\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ImgHeight\\": 1920,\\n    \\"ImgWidth\\": 1080,\\n    \\"FaceInfos\\": {\\n      \\"FaceAttributesDetectInfo\\": [\\n        {\\n          \\"FaceRect\\": {\\n            \\"Left\\": 354,\\n            \\"Top\\": 453,\\n            \\"Width\\": 473,\\n            \\"Height\\": 473\\n          },\\n          \\"FaceAttributes\\": {\\n            \\"Glasses\\": \\"None\\",\\n            \\"Facequal\\": 60,\\n            \\"Integrity\\": 70,\\n            \\"Facetype\\": \\"Face\\",\\n            \\"Respirator\\": \\"Wear\\",\\n            \\"Blur\\": 0.1419367790222168,\\n            \\"Smiling\\": {\\n              \\"Value\\": 97,\\n              \\"Threshold\\": 95\\n            },\\n            \\"Headpose\\": {\\n              \\"PitchAngle\\": -1.5683923959732056,\\n              \\"RollAngle\\": 7.163370132446289,\\n              \\"YawAngle\\": -6.925303936004639\\n            }\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectFaceAttributesResponse>\\n\\t<Code>200</Code>\\n\\t<Data>\\n\\t\\t<FaceInfos>\\n\\t\\t\\t<FaceAttributesDetectInfo>\\n\\t\\t\\t\\t<element>\\n\\t\\t\\t\\t\\t<FaceAttributes>\\n\\t\\t\\t\\t\\t\\t<Blur>0.14193678</Blur>\\n\\t\\t\\t\\t\\t\\t<Facetype>Face</Facetype>\\n\\t\\t\\t\\t\\t\\t<Glasses>None</Glasses>\\n\\t\\t\\t\\t\\t\\t<Headpose>\\n\\t\\t\\t\\t\\t\\t\\t<PitchAngle>-1.5683924</PitchAngle>\\n\\t\\t\\t\\t\\t\\t\\t<RollAngle>7.16337</RollAngle>\\n\\t\\t\\t\\t\\t\\t\\t<YawAngle>-6.925304</YawAngle>\\n\\t\\t\\t\\t\\t\\t</Headpose>\\n\\t\\t\\t\\t\\t\\t<Smiling></Smiling>\\n\\t\\t\\t\\t\\t</FaceAttributes>\\n\\t\\t\\t\\t\\t<FaceRect>\\n\\t\\t\\t\\t\\t\\t<Height>473</Height>\\n\\t\\t\\t\\t\\t\\t<Left>354</Left>\\n\\t\\t\\t\\t\\t\\t<Top>453</Top>\\n\\t\\t\\t\\t\\t\\t<Width>473</Width>\\n\\t\\t\\t\\t\\t</FaceRect>\\n\\t\\t\\t\\t</element>\\n\\t\\t\\t</FaceAttributesDetectInfo>\\n\\t\\t</FaceInfos>\\n\\t\\t<ImgHeight>1920</ImgHeight>\\n\\t\\t<ImgWidth>1080</ImgWidth>\\n\\t</Data>\\n\\t<Success>true</Success>\\n    </DetectFaceAttributesResponse>","errorExample":""}]',
      'title' => '人脸属性纯服务端API',
      'summary' => '检测人脸照片中的有效性属性',
      'description' => '请求方法：仅支持以HTTPS POST方法发送请求。

接口描述：对输入照片中人脸的有效性相关属性进行检测，便于业务方判定该照片是否满足自身业务留存或比对的要求。目前支持的人脸有效性相关属性有：是否人脸、是否模糊、是否戴眼镜、脸部姿态、是否笑脸等。

上传图片地址的说明：在传入图片时，您需要上传其对应的HTTP、OSS地址或Base64编码。

- HTTP地址：可访问的公网HTTP地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。
- Base64编码：通过base64编码的图片，格式为`base64://<图片 base64 字符串>`。

图片限制：

- 不支持本地图片的相对路径或绝对路径。
- 单张图片大小请控制在2 MB内，避免算法拉取超时。
- 单个请求的Body有8 MB的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。
- 使用Base64传递图片时，接口的请求方法需要改成 POST；图片Base64字符串需要去掉头部描述，如`data:image/png;base64`。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '

',
      'extraInfo' => ' ',
    ),
    'AIGCFaceVerify' => 
    array (
      'summary' => 'AIGC生成图片检测，输出检测标识',
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
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证场景ID。该ID在控制台创建认证场景后自动生成。关于如何创建认证场景，请参见添加认证场景。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100000xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'OuterOrderNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户服务端自定义的业务唯一标识，用于后续定位排查问题。取值最长为32位长度的字母数字组合，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品方案',
            'type' => 'string',
            'required' => false,
            'example' => 'LR_FR_AIGC',
          ),
        ),
        3 => 
        array (
          'name' => 'FaceContrastPicture',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '照片Base64编码。
> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx
',
          ),
        ),
        4 => 
        array (
          'name' => 'FaceContrastPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人像地址，公网可访问的HTTP、HTTPS链接。

> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
          ),
        ),
        5 => 
        array (
          'name' => 'OssBucketName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已授权OSS空间的Bucket名 。
> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx
',
          ),
        ),
        6 => 
        array (
          'name' => 'OssObjectName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '已授权OSS空间的文件名。
> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
            'type' => 'string',
            'required' => false,
            'example' => '	
verify/xxxxx/xxxxxx.jpeg
',
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
            'description' => '响应对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
              ),
              'Message' => 
              array (
                'description' => '消息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码：200为成功，其他为失败。',
                'type' => 'string',
                'example' => '200',
              ),
              'ResultObject' => 
              array (
                'description' => '返回的结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => '认证结果。取值：

●  Y：AIGC生成人脸。

●  N：未检测到',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'Y' => 'AIGC生成人脸',
                      'N' => '非AIGC生成人脸',
                    ),
                    'example' => 'Y',
                  ),
                  'Score' => 
                  array (
                    'description' => '检测的分数',
                    'type' => 'string',
                    'example' => '1.0000',
                  ),
                  'CertifyId' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"Y\\",\\n    \\"Score\\": \\"1.0000\\",\\n    \\"CertifyId\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => 'AIGC生成图片检测',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'cloudauth.aliyuncs.com',
    ),
  ),
);
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Cloudauth',
        'version' => '2019-03-07',
    ],
    'directories' => [
        [
            'id' => 172202,
            'title' => '金融级实人认证',
            'type' => 'directory',
            'children' => [
                'DescribePageFaceVerifyData',
                'InitFaceVerify',
                'DescribeFaceVerify',
                'ContrastFaceVerify',
                'CompareFaceVerify',
                'LivenessFaceVerify',
            ],
        ],
        [
            'id' => 187371,
            'title' => '增强版实人认证',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 187373,
                    'title' => '控制台接口',
                    'type' => 'directory',
                    'children' => [
                        'DescribeSmartStatisticsPageList',
                    ],
                ],
            ],
        ],
        [
            'id' => 186118,
            'title' => '信息核验',
            'type' => 'directory',
            'children' => [
                'DeepfakeDetect',
                'CredentialVerify',
                'BankMetaVerify',
                'MobileOnlineTime',
                'MobileDetect',
                'MobileOnlineStatus',
                'Mobile3MetaSimpleVerify',
                'Id2MetaVerify',
                'Mobile3MetaDetailVerify',
            ],
        ],
        [
            'id' => 172203,
            'title' => '实人认证（已停止售卖，文档停止更新）',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 172209,
                    'title' => '其它',
                    'type' => 'directory',
                    'children' => [
                        [
                            'id' => 59190,
                            'title' => '用户',
                            'type' => 'directory',
                            'children' => [
                                'CreateAuthKey',
                                'DescribeOssUploadToken',
                            ],
                        ],
                        [
                            'id' => 59198,
                            'title' => '认证',
                            'type' => 'directory',
                            'children' => [
                                'CreateVerifySetting',
                            ],
                        ],
                        [
                            'id' => 59208,
                            'title' => 'SDK',
                            'type' => 'directory',
                            'children' => [
                                'DescribeVerifySDK',
                            ],
                        ],
                        [
                            'id' => 59215,
                            'title' => '设备',
                            'type' => 'directory',
                            'children' => [
                                'ModifyDeviceInfo',
                                'DescribeDeviceInfo',
                            ],
                        ],
                    ],
                ],
                'DescribeVerifyToken',
                'DescribeVerifyResult',
                'VerifyMaterial',
                'CompareFaces',
                'DetectFaceAttributes',
            ],
        ],
        [
            'id' => 190467,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'AIGCFaceVerify',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribePageFaceVerifyData' => [
            'summary' => '金融级实人认证调用统计分页查询接口',
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'abilityTreeCode' => '216157',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthLNAN1F',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必填，开始时间，格式为yyyy-MM-dd，默认为yyyy-MM-dd 00:00:00，查询间隔最多为90天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-10',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必填，结束时间，格式为yyyy-MM-dd，默认为yyyy-MM-dd 00:00:00，查询间隔最多为90天。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-04-30',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '36**01'."\n",
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ID_PLUS'."\n",
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码，默认为1。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数据条数，默认为10。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-A***B-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '是否成功响应。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'false' => 'false',
                                    'true' => 'true',
                                ],
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'TotalCount' => [
                                'description' => '总数。',
                                'type' => 'string',
                                'example' => '100',
                            ],
                            'PageSize' => [
                                'description' => '每页显示数量。',
                                'type' => 'string',
                                'example' => '10',
                            ],
                            'TotalPage' => [
                                'description' => '总页数。',
                                'type' => 'string',
                                'example' => '5',
                            ],
                            'CurrentPage' => [
                                'description' => '当前页码。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Items' => [
                                'description' => '返回数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Date' => [
                                            'description' => '日期。',
                                            'type' => 'string',
                                            'example' => '2024-03-24T00:00:00.000Z',
                                        ],
                                        'TotalCount' => [
                                            'description' => '总数。',
                                            'type' => 'string',
                                            'example' => '19',
                                        ],
                                        'SuccessCount' => [
                                            'description' => '调用成功数。',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'SceneId' => [
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => '20**40',
                                        ],
                                        'SceneName' => [
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => '****实名认证',
                                        ],
                                        'ProductCode' => [
                                            'description' => '产品方案Code，请参考金融级实人帮助文档。',
                                            'type' => 'string',
                                            'example' => 'ID_PLUS',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"TotalCount\\": \\"100\\",\\n  \\"PageSize\\": \\"10\\",\\n  \\"TotalPage\\": \\"5\\",\\n  \\"CurrentPage\\": \\"1\\",\\n  \\"Items\\": [\\n    {\\n      \\"Date\\": \\"2024-03-24T00:00:00.000Z\\",\\n      \\"TotalCount\\": \\"19\\",\\n      \\"SuccessCount\\": \\"1\\",\\n      \\"SceneId\\": \\"20**40\\",\\n      \\"SceneName\\": \\"****实名认证\\",\\n      \\"ProductCode\\": \\"ID_PLUS\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '金融级数据统计',
            'requestParamsDescription' => 'StartDate和EndDate为必填参数',
        ],
        'InitFaceVerify' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '59164',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthGDLZVA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000000006',
                    ],
                ],
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户请求的唯一标识。'."\n"
                            ."\n"
                            .'值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '固定值。在不同的产品方案中，该参数值不同：'."\n"
                            .'- APP认证方案：参数固定值为ID_PRO'."\n"
                            .'- 活体人脸验证方案：参数固定值为PV_FV'."\n"
                            .'- 活体检测方案：参数固定值为LR_FR',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ID_PRO',
                    ],
                ],
                [
                    'name' => 'CertType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件类型。'."\n"
                            .'当前支持身份证，传入 IDENTITY_CARD。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IDENTITY_CARD',
                    ],
                ],
                [
                    'name' => 'CertName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '真实姓名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'CertNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330103xxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'ReturnUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户业务页面回跳的目标地址。	',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'www.aliyun.com',
                    ],
                ],
                [
                    'name' => 'FaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '照片Base64编码。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                    ],
                ],
                [
                    'name' => 'MetaInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Metainfo环境参数，需要通过客户端SDK获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"zimVer":"3.0.0","appVersion": "1","bioMetaInfo": "4.1.0:11501568,0","appName": "com.aliyun.antcloudauth","deviceType": "ios","osVersion": "iOS 10.3.2","apdidToken": "","deviceModel": "iPhone9,1"}',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户手机号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '114.xxx.xxx.xxx',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户业务自定义的用户ID，请保持唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'FaceContrastPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'CertifyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '之前实人认证通过的CertifyId，认证时的照片作为比对照片。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bfa7c493f850e5178b9f8613634c9xx',
                    ],
                ],
                [
                    'name' => 'OssBucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已授权OSS空间的Bucket名 。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
                    ],
                ],
                [
                    'name' => 'OssObjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已授权OSS空间的文件名。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'verify/xxxxx/xxxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallbackToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertifyUrlType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AuthId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EncryptType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'VoluntaryCustomizedContent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SuitableType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProcedurePriority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ReadImg',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Birthday',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ValidityDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertifyUrlStyle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaceGuardOutput',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RarelyCharacters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UiCustomUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
                            ],
                            'ResultObject' => [
                                'type' => 'object',
                                'properties' => [
                                    'CertifyId' => [
                                        'description' => '实人认证唯一标识。',
                                        'type' => 'string',
                                        'example' => '91707dc296d469ad38e4c5efa6a0f24b',
                                    ],
                                    'CertifyUrl' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"91707dc296d469ad38e4c5efa6a0f24b\\",\\n    \\"CertifyUrl\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <CertifyId>91707dc296d469ad38e4c5efa6a0f24b</CertifyId>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '初始化接口',
            'summary' => '每次开始认证前，通过本接口获取CertifyId，用来串联认证请求中的各个接口',
            'description' => '- 服务地址：cloudauth.aliyuncs.com'."\n"
                .'- 请求方法：HTTPS POST和GET。'."\n"
                ."\n"
                .'#### 传入图片格式要求'."\n"
                .'当您在进行实人认证的时候，请传入满足以下所有条件的图片。'."\n"
                .'- 近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。'."\n"
                .'- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。'."\n"
                .'- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。'."\n"
                .'- 照片大小：<1MB。'."\n"
                .'- 支持90、180 和270度照片，多人脸的情况会选取最大脸。'."\n",
            'requestParamsDescription' => ' > 如果您选择OSS方式传入人脸图片，您必须传入OssBucketName和OssObjectName 字段。'."\n"
                .'OSS入参格式仅支持开通实人认证服务时授权的OSS生成的URL、Bucket和文件名 。关于如何查询授权的OSS，请参见[开通OSS空间并授权](https://help.aliyun.com/document_detail/163108.html?spm=a2c4g.11186623.2.14.7dd9f397RmV0jw#section-4w2-trd-8q6)。'."\n"
                .'如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过OSS方式上传较大的人脸照片。'."\n"
                ."\n"
                .'根据选择的认证方案不同，所需传入的字段不太一样，具体可以参考下述表格中的说明。'."\n"
                ."\n"
                .'字段|APP认证方案|活体人脸验证方案|活体检测方案'."\n"
                .'--|--|--|--'."\n"
                .'CertType|是|可选传入|可选传入'."\n"
                .'CertName|是|可选传入|可选传入'."\n"
                .'CertNo|是|可选传入|可选传入'."\n"
                .'UserId|可选传入|是|是'."\n"
                .'FaceContrastPicture|否|是|否'."\n"
                .'FaceContrastPictureUrl|否|是|否'."\n"
                .'CertifyId|否|是|否'."\n"
                .'OssBucketName|否|是|否'."\n"
                .'OssObjectName|否|是|否'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ## 结果码'."\n"
                ."\n"
                .'|结果码|返回信息|描述|'."\n"
                .'|----|-------|--|'."\n"
                .'|200|success|成功。|'."\n"
                .'|400|参数不能为空|参数不能为空。|'."\n"
                .'|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|'."\n"
                .'|402|应用配置不存在|应用配置不存在。|'."\n"
                .'|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|'."\n"
                .'|405|您的年龄未满14周岁，不允许使用此产品|未满14周岁的用户无法使用本产品，建议人工审核。|'."\n"
                .'|410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|'."\n"
                .'|411|RAM无权限|需要给子账号授予 AliyunAntCloudAuthFullAccess 的操作权限。|'."\n"
                .'|412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|'."\n"
                .'|414|设备类型不支持|当前移动设备不支持刷脸认证，请更换设备后操作。|'."\n"
                .'|415|SDK版本不支持|当前认证SDK版本不支持刷脸认证，请升级SDK后操作。|'."\n"
                .'|416|系统版本不支持|当前操作系统版本不支持刷脸认证，请升级系统或更换设备操作。|'."\n"
                .'|417|无法使用刷脸服务|当前身份信息比对源不可用。若信息正确，建议人工审核。|'."\n"
                .'|418|刷脸失败次数过多|当天刷脸认证次数过多，请明天再试。|'."\n"
                .'|419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|'."\n"
                .'|420|数据重复|图片传入方式超过1种。<ul> <li> FaceContrastPicture</li> <li> FaceContrastPictureUrl </li><li> Oss</li> <li> CertifyId</li><ul>|'."\n"
                .'421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。'."\n"
                .'422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。'."\n"
                .'423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。'."\n"
                .'|500|系统错误|系统内部错误，请反馈工程师排查。|'."\n"
                ."\n",
        ],
        'DescribeFaceVerify' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000000006',
                    ],
                ],
                [
                    'name' => 'CertifyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人认证唯一标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '91707dc296d469ad38e4c5efa6a0f24b',
                    ],
                ],
                [
                    'name' => 'PictureReturnType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片返回类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'JPG',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'SubCode' => [
                                        'description' => '认证结果描述，详情见下方SubCode说明。',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'MaterialInfo' => [
                                        'description' => '认证主体附件信息，主要为图片类材料。JSON格式，见下方示例。',
                                        'type' => 'string',
                                        'example' => '{"faceAttack": "F","facialPictureFront": {"qualityScore": 88.3615493774414,"pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg","ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779","ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"}}',
                                    ],
                                    'IdentityInfo' => [
                                        'description' => '认证的主体信息，一般的认证场景返回为空。',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'DeviceToken' => [
                                        'description' => '设备token。',
                                        'type' => 'string',
                                        'example' => 'McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx',
                                    ],
                                    'Passed' => [
                                        'description' => '是否通过，通过为 T，不通过为 F。',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                    'DeviceRisk' => [
                                        'type' => 'string',
                                    ],
                                    'Success' => [
                                        'type' => 'string',
                                    ],
                                    'UserInfo' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"SubCode\\": \\"200\\",\\n    \\"MaterialInfo\\": \\"{\\\\\\"faceAttack\\\\\\": \\\\\\"F\\\\\\",\\\\\\"facialPictureFront\\\\\\": {\\\\\\"qualityScore\\\\\\": 88.3615493774414,\\\\\\"pictureUrl\\\\\\": \\\\\\"https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg\\\\\\",\\\\\\"ossBucketName\\\\\\": \\\\\\"cn-shanghai-aliyun-cloudauth-1260051251634779\\\\\\",\\\\\\"ossObjectName\\\\\\": \\\\\\"verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg\\\\\\"}}\\",\\n    \\"IdentityInfo\\": \\"null\\",\\n    \\"DeviceToken\\": \\"McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx\\",\\n    \\"Passed\\": \\"T\\",\\n    \\"DeviceRisk\\": \\"\\",\\n    \\"Success\\": \\"\\",\\n    \\"UserInfo\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <Passed>T</Passed>\\n    <DeviceToken>McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx</DeviceToken>\\n    <IdentityInfo>null</IdentityInfo>\\n    <MaterialInfo>{\\"faceAttack\\": \\"F\\",\\"facialPictureFront\\": {\\"qualityScore\\": 88.3615493774414,\\"pictureUrl\\": \\"https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg\\",\\"ossBucketName\\": \\"cn-shanghai-aliyun-cloudauth-1260051251634779\\",\\"ossObjectName\\": \\"verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg\\"}}</MaterialInfo>\\n    <SubCode>200</SubCode>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '查询认证详情接口',
            'summary' => '当接入方移动端收到回调之后，其服务端可以调用此接口，来获取相应的认证状态和认证资料',
            'description' => '- 服务地址：cloudauth.aliyuncs.com。'."\n"
                .'- 请求方法：HTTPS POST和GET。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' > 判断认证结果请以ResultObject.Passed或ResultObject.SubCode字段为准。'."\n"
                ."\n"
                .'#### ResultObject.MaterialInfo的JSON格式示例'."\n"
                .'- APP认证方案 & 活体人脸验证方案'."\n"
                ."\n"
                .'    ```'."\n"
                .'    {'."\n"
                .'        // 是否为攻击：攻击为T，非攻击为F'."\n"
                .'        "faceAttack": "F",    '."\n"
                .'        // 认证的照片信息'."\n"
                .'        "facialPictureFront": {'."\n"
                .'            // 活体人脸质量分数'."\n"
                .'            "qualityScore": 88.3615493774414,'."\n"
                .'            // 人脸比对分数'."\n"
                .'            "verifyScore": 50.28594166529785,'."\n"
                .'            // 照片https地址，有效期15分钟，从查询时开始计时    '."\n"
                .'            "pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg",'."\n"
                .'            // 照片存放客户上海区域的OSS里，此为照片的bucket名'."\n"
                .'            "ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779",'."\n"
                .'            // 照片存放客户上海区域的OSS里，此为照片的文件名'."\n"
                .'            "ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"   '."\n"
                .'    }'."\n"
                .'    }'."\n"
                .'    ```'."\n"
                ."\n"
                .'-  活体检测方案'."\n"
                ."\n"
                .'    ```'."\n"
                .'    {'."\n"
                .'        // 是否为攻击：攻击为T，非攻击为F'."\n"
                .'        "faceAttack": "F",    '."\n"
                .'        // 认证的照片信息'."\n"
                .'        "facialPictureFront": {'."\n"
                .'            // 活体人脸质量分数'."\n"
                .'            "qualityScore": 88.3615493774414,'."\n"
                .'            // 照片https地址，有效期15分钟，从查询时开始计时    '."\n"
                .'            "pictureUrl": "https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg",'."\n"
                .'            // 照片存放客户上海区域的OSS里，此为照片的bucket名'."\n"
                .'            "ossBucketName": "cn-shanghai-aliyun-cloudauth-1260051251634779",'."\n"
                .'            // 照片存放客户上海区域的OSS里，此为照片的文件名'."\n"
                .'            "ossObjectName": "verify/1260051251634779/6ba7bcfccf33f56cdb44ed086f36ce3e0.jpeg"   '."\n"
                .'    }'."\n"
                .'    }'."\n"
                .'    ```'."\n"
                ."\n\n"
                ."\n"
                .'#### ResultObject.SubCode说明'."\n"
                ."\n"
                .'|错误码|认证描述文案|是否计费|可能原因和运营建议|'."\n"
                .'|---|------|----|---------|'."\n"
                .' |200|认证通过|是| |'."\n"
                .'|201|姓名和身份证不一致|是|可能用户的信息有误或假信息，建议用户确认后重新操作。|'."\n"
                .'|202|查询不到身份信息|是|可能是用户户口迁移、军人等特殊状态导致，建议预留人工审核入口，进行人工审核。|'."\n"
                .'|203|查询不到照片或照片不可用|是|可能是公安库数据问题导致，建议预留人工审核入口，进行人工审核。|'."\n"
                .'|204|人脸比对不一致|是|可能不是同一人或活体照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。|'."\n"
                .'|205|活体检测存在风险|是|可能存在攻击风险，建议人工审核分层处理，若为真人可重新操作。|'."\n"
                .'|206|业务策略限制|是|可能存在异常风险操作，建议人工确认后操作。|'."\n"
                ."\n",
            'extraInfo' => ' ## 结果码'."\n"
                ."\n"
                .'|Code|Message|描述|'."\n"
                .'|----|-------|--|'."\n"
                .'|200|success|成功。|'."\n"
                .'|400|参数不能为空|参数不能为空。|'."\n"
                .'|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|'."\n"
                .'|403|认证未完成|认证未完成。|'."\n"
                .'|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|'."\n"
                .'|406|无效的certifyId|无效的certifyId。|'."\n"
                .'|410|未开通服务|未开通OSS产品或未完成OSS读写授权。|'."\n"
                .'|411|RAM无权限|需要给子账号授予AliyunAntCloudAuthFullAccess的操作权限。|'."\n"
                .'|424|身份认证记录不存在|该certifyId还没有对应的身份认证提交记录。|'."\n"
                .'|500|系统错误|系统内部错误。|',
        ],
        'ContrastFaceVerify' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '认证场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000000006',
                    ],
                ],
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商户请求的唯一标识。'."\n"
                            .'值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值：ID_MIN。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ID_MIN',
                    ],
                ],
                [
                    'name' => 'CertType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '证件类型。'."\n"
                            .'当前支持身份证，必须传入IDENTITY_CARD。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IDENTITY_CARD',
                    ],
                ],
                [
                    'name' => 'CertName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '真实姓名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'CertNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '证件号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330103xxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'FaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '照片Base64编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                    ],
                ],
                [
                    'name' => 'DeviceToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '风险识别-设备token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'McozS1ZWRcRZStlERcZZo_QOytx5jcgZoZJEoRLOxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户手机号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '114.xxx.xxx.xxx',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户业务自定义的用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'FaceContrastPictureUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'CertifyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '之前实人认证通过的CertifyId，认证时的照片作为比对照片。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bfa7c493f850e5178b9f8613634c9xx',
                    ],
                ],
                [
                    'name' => 'OssBucketName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的Bucket 名 。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
                    ],
                ],
                [
                    'name' => 'OssObjectName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的文件名。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种传入图片方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'verify/xxxxx/xxxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaceContrastFile',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'isFileTransferUrl' => true,
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EncryptType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
                            ],
                            'ResultObject' => [
                                'description' => '请求结果',
                                'type' => 'object',
                                'properties' => [
                                    'CertifyId' => [
                                        'type' => 'string',
                                    ],
                                    'SubCode' => [
                                        'description' => '认证结果描述。详情见下方SubCode 说明。',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'MaterialInfo' => [
                                        'description' => '认证主体附件信息，主要为图片类材料，JSON格式，如下。',
                                        'type' => 'string',
                                        'example' => '{"faceAttack": "F","facialPictureFront": {"qualityScore": 88.3615493774414,"verifyScore": 50.28594166529785}}',
                                    ],
                                    'IdentityInfo' => [
                                        'description' => '认证的主体信息，一般的认证场景返回为空。',
                                        'type' => 'string',
                                        'example' => 'null',
                                    ],
                                    'Passed' => [
                                        'description' => '是否通过，通过为T，不通过为F。',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"MaterialInfo\\": \\"{\\\\\\"faceAttack\\\\\\": \\\\\\"F\\\\\\",\\\\\\"facialPictureFront\\\\\\": {\\\\\\"qualityScore\\\\\\": 88.3615493774414,\\\\\\"verifyScore\\\\\\": 50.28594166529785}}\\",\\n    \\"IdentityInfo\\": \\"null\\",\\n    \\"Passed\\": \\"T\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResultObject>\\n    <Passed>T</Passed>\\n    <IdentityInfo>null</IdentityInfo>\\n    <MaterialInfo>{\\"faceAttack\\": \\"F\\",\\"facialPictureFront\\": {\\"qualityScore\\": 88.3615493774414,\\"verifyScore\\": 50.28594166529785}}</MaterialInfo>\\n    <SubCode>200</SubCode>\\n</ResultObject>\\n<RequestId>130A2C10-B9EE-4D84-88E3-5384FF039795</RequestId>\\n<Message>success</Message>\\n<Code>200</Code>","errorExample":""}]',
            'title' => '实人认证方案纯服务端API',
            'summary' => '该接口用于提交认证材料以进行核实比对，并同步返回认证结果',
            'description' => '- 接口名：ContrastFaceVerify。'."\n"
                .'- 服务地址：cloudauth.aliyuncs.com。'."\n"
                .'- 请求方法：HTTPS POST和GET。'."\n"
                .'- 接口说明：通过服务端接入实现实人认证的接口。'."\n"
                ."\n"
                .'#### 传入图片格式要求'."\n"
                .'当您在进行实人认证的时候，请传入满足以下所有条件的图片。'."\n"
                ."\n"
                .'- 近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。'."\n"
                .'- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。'."\n"
                .'- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。'."\n"
                .'- 照片大小：<1MB。'."\n"
                .'- 支持90、180 和270度照片，多人脸的情况会选取最大脸。'."\n",
            'requestParamsDescription' => '>  如果您选择OSS方式传入人脸照片，您必须传入OssBucketName和OssObjectName 字段。OSS入参格式仅支持开通实人认证服务时授权的OSS生成的URL、Bucket和文件名 。'."\n"
                .'如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过 OSS方式上传较大的人脸照片。',
            'responseParamsDescription' => 'ResultObject.MaterialInfo的JSON格式示例：'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'    // 是否为攻击：攻击为T，非攻击为F'."\n"
                .'    "faceAttack": "F",'."\n"
                .'    "facialPictureFront": {'."\n"
                .'        // 活体人脸质量分数'."\n"
                .'        "qualityScore": 88.3615493774414,'."\n"
                .'        // 人脸比对分数'."\n"
                .'        "verifyScore": 50.28594166529785'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n",
            'extraInfo' => '## 返回码'."\n"
                ."\n"
                .'|返回码|返回信息|描述|'."\n"
                .' |----|-------|--|'."\n"
                .' |200|success|成功。|'."\n"
                .' |400|参数不能为空|参数不能为空。|'."\n"
                .' |401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|'."\n"
                .' |402|应用配置不存在|应用配置不存在。|'."\n"
                .' |404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|'."\n"
                .' |405|您的年龄未满14周岁，不允许使用此产品|未满14周岁的用户无法使用本产品，建议人工审核。|'."\n"
                .' |410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|'."\n"
                .' |411|RAM无权限|需要给子账号授予 AliyunAntCloudAuthFullAccess 的操作权限。|'."\n"
                .' |412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|'."\n"
                .' |417|无法使用刷脸服务|当前身份信息比对源不可用。若信息正确，建议人工审核。|'."\n"
                .' |418|刷脸失败次数过多|当天刷脸认证次数过多，请明天再试。|'."\n"
                .' |419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|'."\n"
                .' |420|数据重复|图片传入方式超过1种。<ul> <li> FaceContrastPicture</li>  <li> FaceContrastPictureUrl </li><li>  Oss</li> <li> CertifyId</li><ul>|'."\n"
                .' |421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。|'."\n"
                .'|422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。|'."\n"
                .'|423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。|'."\n"
                .'|500|系统错误|系统内部错误，请反馈工程师排查。|'."\n"
                ."\n\n"
                .'ResultObject.SubCode说明：'."\n"
                ."\n"
                .'|错误码|认证描述文案|是否计费|可能原因和运营建议|'."\n"
                .'|---|------|----|---------|'."\n"
                .'|200|认证通过|是| |'."\n"
                .'|201|姓名和身份证不一致|是|可能用户的信息有误或假信息，建议用户确认后重新操作。|'."\n"
                .'|202|查询不到身份信息|是|可能是用户户口迁移、军人等特殊状态导致，建议预留人工审核入口，进行人工审核。|'."\n"
                .'|203|查询不到照片或照片不可用|是|可能是公安库数据问题导致，建议预留人工审核入口，进行人工审核。|'."\n"
                .'|204|人脸比对不一致|是|可能不是同一人或活体照片质量较低，建议根据业务情况分层处理，若为同一人可重新操作。|'."\n"
                .'|205|活体检测存在风险|是|可能存在攻击风险，建议人工审核分层处理，若为真人可重新操作。|'."\n"
                .'|206|业务策略限制|是|可能存在异常风险操作，建议人工确认后操作。|',
        ],
        'CompareFaceVerify' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '59095',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '认证场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1000000006',
                    ],
                ],
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '商户请求的唯一标识。'."\n"
                            ."\n"
                            .'值为32位长度的字母数字组合前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '固定值：PV_FC。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PV_FC',
                    ],
                ],
                [
                    'name' => 'SourceFaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '照片Base64编码。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                        'maxLength' => 1048676,
                    ],
                ],
                [
                    'name' => 'SourceFaceContrastPictureUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'OSS照片地址，目前只支持已授权OSS照片地址。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'SourceCertifyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '之前实人认证通过的CertifyId，认证时的照片作为人脸比对照片。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bfa7c493f850e5178b9f8613634c9xx',
                    ],
                ],
                [
                    'name' => 'SourceOssBucketName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的 Bucket 名。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
                    ],
                ],
                [
                    'name' => 'SourceOssObjectName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的文件名。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'verify/xxxxx/xxxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'TargetFaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '底库照片Base64编码。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                        'maxLength' => 1048676,
                    ],
                ],
                [
                    'name' => 'TargetFaceContrastPictureUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '底库OSS照片地址，目前只支持已授权OSS照片地址。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'TargetCertifyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '之前实人认证通过的 CertifyId，认证时的照片作为人脸比对照片。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bfa7c493f850e5178b9f8613634c9xx',
                    ],
                ],
                [
                    'name' => 'TargetOssBucketName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的Bucket名 。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx',
                    ],
                ],
                [
                    'name' => 'TargetOssObjectName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已授权OSS空间的文件名。'."\n"
                            ."\n"
                            .'> FaceContrastPicture、FaceContrastPictureUrl、CertifyId、OSS四种底库人脸照片传入方式，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'verify/xxxxx/xxxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '130A2C10-B9EE-4D84-88E3-5384FF039795',
                            ],
                            'ResultObject' => [
                                'description' => '人脸比对结果信息。',
                                'type' => 'object',
                                'properties' => [
                                    'CertifyId' => [
                                        'type' => 'string',
                                    ],
                                    'VerifyScore' => [
                                        'description' => '人脸比对分。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '99.60875',
                                    ],
                                    'Passed' => [
                                        'description' => '是否通过，通过为T，不通过为F。',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"130A2C10-B9EE-4D84-88E3-5384FF039795\\",\\n  \\"ResultObject\\": {\\n    \\"CertifyId\\": \\"\\",\\n    \\"VerifyScore\\": 99.60875,\\n    \\"Passed\\": \\"T\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '人脸比对方案纯服务端API',
            'summary' => '金融级人脸比对纯服务端API',
            'description' => '- 接口名：CompareFaceVerify。'."\n"
                .'- 服务地址：cloudauth.aliyuncs.com。'."\n"
                .'- 请求方法：HTTPS POST和GET。'."\n"
                .'- 接口说明：通过服务端接入实现实人认证的接口。'."\n"
                ."\n"
                .'#### 传入照片格式要求'."\n"
                .'当您在进行人脸比对的时候，请传入满足以下所有条件的2张人脸照片。'."\n"
                ."\n"
                .'- 近期照片/底库近期照片，人脸完整清晰无遮挡，表情自然，正对摄像头。'."\n"
                .'- 照片清晰、曝光正常，脸部无过黑、过亮、光晕等情况、角度无太大偏差。'."\n"
                .'- 分辨率不超过1920\\*1080，至少640\\*480，推荐短边缩放到720像素，压缩率大于0.9。'."\n"
                .'- 照片大小：<1MB。'."\n"
                .'- 支持 90、180 和270度照片，多人脸的情况会选取最大脸。',
            'requestParamsDescription' => '> 以Source开头的参数代表您要上传的近期人脸照片参数，以Target开头的参数代表您要上传的底库近期人脸照片参数。传入照片格式要求请参见[传入照片格式要求](#传入照片格式要求)。'."\n"
                .'如果您选择OSS方式传入人脸照片，您必须同时传入OssBucketName和OssObjectName字段。OSS入参格式仅支持开通实人认证时授权的OSS生成的URL、Bucket和文件名 。关于如何查询授权的OSS，请参见[开通OSS空间并授权](https://help.aliyun.com/document_detail/163532.html?spm=a2c4g.11186623.2.15.36945bc3y5uWz6#title-409-lcd-pp0) 。'."\n"
                .'如果您选择FaceContrastPicture（照片Base64编码）方式传入人脸照片，请注意检查照片大小，不要传入过大的照片；您可以通过OSS方式上传较大的人脸照片。',
            'responseParamsDescription' => '返回值示例：'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'    "Code": "200",'."\n"
                .'    "Message": "success",'."\n"
                .'    "RequestId": "23699272-B263-4B6C-BC04-0EBA1AB6F6D5",'."\n"
                .'    "ResultObject": {'."\n"
                .'        "Passed": "T",'."\n"
                .'        "VerifyScore": 99.60875'."\n"
                .'    }'."\n"
                .'}'."\n"
                .'```',
            'extraInfo' => ' ## 返回码'."\n"
                ."\n"
                .'|返回码|返回信息|描述|'."\n"
                .'|----|-------|--|'."\n"
                .'|200|success|成功。|'."\n"
                .'|400|参数不能为空|参数不能为空。|'."\n"
                .'|401|参数非法|非法参数。传入的姓名、身份证号码长度必须符合国家标准且不得包含英文字母等特殊字符。|'."\n"
                .'|402|应用配置不存在|应用配置不存在。|'."\n"
                .'|404|认证场景配置不存在|认证场景配置不存在，请先在控制台上创建认证场景。|'."\n"
                .'|410|未开通服务|未开通OSS产品或未完成OSS读写授权，请登录控制台完成授权。|'."\n"
                .'|411|RAM 无权限|需要给子账号授予AliyunAntCloudAuthFullAccess的操作权限。|'."\n"
                .'|412|欠费中|金融级实人认证或OSS存在欠费，请充值后操作。|'."\n"
                .'|419|传入图片不可用|图片无法下载、图片内容为空、图片分辨率不符合要求或提取不到人脸特征，建议更换图片。|'."\n"
                .'|420|数据重复|图片传入方式超过2种。<ul> <li> FaceContrastPicture</li> <li> FaceContrastPictureUrl </li><li> Oss</li> <li> CertifyId</li><ul>|'."\n"
                .'|421|传入图片过大|图片超过了1 MB，建议压缩图片或更换图片上传方式。|'."\n"
                .'|422|下载图片超时|图片下载超过了3秒，请排查网络后重新操作。|'."\n"
                .'|423|状态错误|传入的certifyID认证状态需要为T，您也可以更换其他方式传入图片。|'."\n"
                .'|500|系统错误|系统内部错误，请联系工程师排查。|'."\n"
                ."\n\n"
                ."\n\n",
        ],
        'LivenessFaceVerify' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaceContrastPictureUrl',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CertifyId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssBucketName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OssObjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'ResultObject' => [
                                'type' => 'object',
                                'properties' => [
                                    'CertifyId' => [
                                        'type' => 'string',
                                    ],
                                    'SubCode' => [
                                        'type' => 'string',
                                    ],
                                    'MaterialInfo' => [
                                        'type' => 'string',
                                    ],
                                    'Passed' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DescribeSmartStatisticsPageList' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59134',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，使用UTC时间格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2023-11-01 00:00:00 +0800',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，使用UTC时间格式，格式为yyyy-MM-ddTHH:mm:ssZ。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2022-11-16 23:59:59 +0800',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '36**01',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页数据条数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人云产品的ServiceCode，仅取值：**cloudauthst**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cloudauthst',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '当前页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalPage' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'PageSize' => [
                                'description' => '每页显示数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '96943***4E39F805',
                            ],
                            'TotalCount' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '29',
                            ],
                            'Items' => [
                                'description' => '返回数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Date' => [
                                            'description' => '日期。格式为：<i>月/日</i>',
                                            'type' => 'string',
                                            'example' => '11/8',
                                        ],
                                        'SceneId' => [
                                            'description' => '场景ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '20**40',
                                        ],
                                        'SceneName' => [
                                            'description' => '场景名称。',
                                            'type' => 'string',
                                            'example' => '****实名认证',
                                        ],
                                        'TotalCount' => [
                                            'description' => '总数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                        ],
                                        'SuccessCount' => [
                                            'description' => '调用成功数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'PassRate' => [
                                            'description' => '通过率。',
                                            'type' => 'string',
                                            'example' => '25',
                                        ],
                                        'ProductCode' => [
                                            'description' => '产品方案Code，请参考增强版实人帮助文档。',
                                            'type' => 'string',
                                            'example' => 'SMART_VERIFY',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"TotalPage\\": 3,\\n  \\"PageSize\\": 10,\\n  \\"RequestId\\": \\"96943***4E39F805\\",\\n  \\"TotalCount\\": 29,\\n  \\"Items\\": [\\n    {\\n      \\"Date\\": \\"11/8\\",\\n      \\"SceneId\\": 0,\\n      \\"SceneName\\": \\"****实名认证\\",\\n      \\"TotalCount\\": 4,\\n      \\"SuccessCount\\": 1,\\n      \\"PassRate\\": \\"25\\",\\n      \\"ProductCode\\": \\"SMART_VERIFY\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '增强版实人认证调用统计分页查询接口',
            'summary' => '增强版实人认证调用统计分页查询接口',
        ],
        'DeepfakeDetect' => [
            'summary' => '面向人脸识别场景，提供基于图片或视频的deepfake算法原子检测能力，识别换脸、合成人脸等攻击场景。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '226413',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthS6WIN6',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户请求的唯一标识。'."\n"
                            ."\n"
                            .'值为32位长度的字母数字组合。前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c******',
                    ],
                ],
                [
                    'name' => 'FaceInputType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '传入的类型'."\n"
                            ."\n"
                            .'- IMAGE ：图片类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'IMAGE',
                    ],
                ],
                [
                    'name' => 'FaceUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸图片',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'FaceBase64',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '人脸图片base64',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '风险结果'."\n"
                                            ."\n"
                                            .'- 0：低风险'."\n"
                                            .'- 1：高风险'."\n"
                                            .'- 2：可疑',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'RiskTag' => [
                                        'description' => '风险标签，多个标签用引文逗号隔开，包括：'."\n"
                                            ."\n"
                                            .'- 疑似深度伪造  SuspectDeepForgery'."\n"
                                            .'- 疑似合成攻击  SuspectPSFace'."\n"
                                            .'- 疑似存在水印  SuspectWarterMark'."\n"
                                            .'- 疑似黑产攻击  SuspectTemple'."\n"
                                            .'- 疑似生成人脸  SuspectAIGC Face'."\n"
                                            .'- 疑似翻拍人脸  SuspectRemake',
                                        'type' => 'string',
                                        'example' => 'SuspectDeepForgery,SuspectWarterMark',
                                    ],
                                    'RiskScore' => [
                                        'description' => '风险分值map',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'      "SuspectPSFace": "1.0000",'."\n"
                                                .'      "SuspectDeepForgery": "0.8619",'."\n"
                                                .'      "SuspectWaterMark": "0.0126",'."\n"
                                                .'      "SuspectTemple": "0.0985"'."\n"
                                                .'    }',
                                            'description' => '风险分值标签及其分值',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8FC3D6AC-9FED-4311-8DA7-C4BF47D9F260\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"1\\",\\n    \\"RiskTag\\": \\"SuspectDeepForgery,SuspectWarterMark\\",\\n    \\"RiskScore\\": {\\n      \\"key\\": \\"{\\\\n      \\\\\\"SuspectPSFace\\\\\\": \\\\\\"1.0000\\\\\\",\\\\n      \\\\\\"SuspectDeepForgery\\\\\\": \\\\\\"0.8619\\\\\\",\\\\n      \\\\\\"SuspectWaterMark\\\\\\": \\\\\\"0.0126\\\\\\",\\\\n      \\\\\\"SuspectTemple\\\\\\": \\\\\\"0.0985\\\\\\"\\\\n    }\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '人脸凭证核验服务',
        ],
        'CredentialVerify' => [
            'summary' => '传入凭证图片信息，返回是否伪造、篡改等，检测风险包括：PS篡改、翻拍、截屏、打印复印、水印等。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '219634',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthNYJI62',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CredType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '凭证类型：'."\n"
                            ."\n"
                            .'- 01：个人卡证类'."\n"
                            .'- 02：经营场景类',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01',
                    ],
                ],
                [
                    'name' => 'CredName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '01：个人卡证类'."\n"
                            .' '."\n"
                            .'-    0104：教师资格证'."\n"
                            ."\n"
                            .'02：经营场景类'."\n"
                            .' '."\n"
                            .'-    0201：门头照'."\n"
                            .'-    0202：柜台照'."\n"
                            .'-    0203：场景照',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0104',
                    ],
                ],
                [
                    'name' => 'ImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '图片地址，imageUrl与imageContext任选一个',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://marry.momocdn.com/avatar/3B/B6/3BB6527E-7467-926E-1048-B43614F20CC420230803_L.jpg',
                    ],
                ],
                [
                    'name' => 'ImageContext',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图⽚BASE64编码，imageUrl与imageContext任选一个',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'base64',
                    ],
                ],
                [
                    'name' => 'IsOCR',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启OCR识别'."\n"
                            ."\n"
                            .'- 0：否'."\n"
                            .'- 1：是'."\n"
                            ."\n"
                            .'仅当CredType取值01时，isOCR可设置为1',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'IsCheck',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启权威认证'."\n"
                            ."\n"
                            .'- 0：否'."\n"
                            .'- 1：是',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张*',
                    ],
                ],
                [
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211',
                    ],
                ],
                [
                    'name' => 'CertNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '相关证书编号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4601*****',
                    ],
                ],
                [
                    'name' => 'MerchantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '风险结果'."\n"
                                            ."\n"
                                            .'- 0：低风险'."\n"
                                            .'- 1：高风险'."\n"
                                            .'- 2：可疑',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'RiskTag' => [
                                        'description' => '风险标签，多个标签用引文逗号隔开，包括：'."\n"
                                            ."\n"
                                            .'- PS：图片PS'."\n"
                                            .'- SCREEN_PHOTO：屏幕翻拍'."\n"
                                            .'- SCREENSHOT：屏幕截屏'."\n"
                                            .'- WATERMARK：水印'."\n"
                                            .'- COLOR_PRINT：彩打复印'."\n"
                                            .'- WEB_IMAGE:  网络照片'."\n"
                                            .'- SAME_FACE：人脸相似 '."\n"
                                            .'- SAME_BACKGROUND：背景相似',
                                        'type' => 'string',
                                        'example' => 'PS,SCREEN_PHOTO',
                                    ],
                                    'RiskScore' => [
                                        'description' => '风险分值map',
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'   "PS": "0.9458",'."\n"
                                                .'   "SCREEN_PHOTO": "0.1781",'."\n"
                                                .'   "WATERMARK": "0.1863"'."\n"
                                                .'}',
                                            'description' => '风险分值',
                                        ],
                                    ],
                                    'OcrInfo' => [
                                        'description' => 'OCR识别结果',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'   "certNo":"20216*********",'."\n"
                                            .'  "certType":"小学教师资格",'."\n"
                                            .'   "gender":"男",'."\n"
                                            .'   "subject":"美术",'."\n"
                                            .'    "name":"李**",'."\n"
                                            .'    "ext_info":"{}",'."\n"
                                            .'    "birthDate":"1998-07-28",'."\n"
                                            .'    "idNo":"620************",'."\n"
                                            .'    "certOrg":""'."\n"
                                            .'}',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '权威验证结果',
                                        'type' => 'string',
                                        'example' => ' *',
                                    ],
                                    'VerifyDetail' => [
                                        'description' => '权威验证详情',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'MaterialInfo' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"1\\",\\n    \\"RiskTag\\": \\"PS,SCREEN_PHOTO\\",\\n    \\"RiskScore\\": {\\n      \\"key\\": \\"{\\\\n   \\\\\\"PS\\\\\\": \\\\\\"0.9458\\\\\\",\\\\n   \\\\\\"SCREEN_PHOTO\\\\\\": \\\\\\"0.1781\\\\\\",\\\\n   \\\\\\"WATERMARK\\\\\\": \\\\\\"0.1863\\\\\\"\\\\n}\\"\\n    },\\n    \\"OcrInfo\\": \\"{\\\\n   \\\\\\"certNo\\\\\\":\\\\\\"20216*********\\\\\\",\\\\n  \\\\\\"certType\\\\\\":\\\\\\"小学教师资格\\\\\\",\\\\n   \\\\\\"gender\\\\\\":\\\\\\"男\\\\\\",\\\\n   \\\\\\"subject\\\\\\":\\\\\\"美术\\\\\\",\\\\n    \\\\\\"name\\\\\\":\\\\\\"李**\\\\\\",\\\\n    \\\\\\"ext_info\\\\\\":\\\\\\"{}\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\":\\\\\\"1998-07-28\\\\\\",\\\\n    \\\\\\"idNo\\\\\\":\\\\\\"620************\\\\\\",\\\\n    \\\\\\"certOrg\\\\\\":\\\\\\"\\\\\\"\\\\n}\\",\\n    \\"VerifyResult\\": \\" *\\",\\n    \\"VerifyDetail\\": \\"**\\",\\n    \\"MaterialInfo\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '凭证核验',
        ],
        'BankMetaVerify' => [
            'summary' => '银行卡核验，核验银行卡与身份信息是否真实一致，并返回卡状态详情。包含：银行卡二要素（姓名+银行卡号），银行卡三要素（姓名+身份证号码+银行卡号），四要素（姓名+身份证号码+银行卡号+手机号）',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '208613',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth883TGF',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'normal' => 'normal',
                            'md5' => 'md5',
                        ],
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'VerifyMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'VERIFY_BANK_CARD：银行卡认证模式。表示将传入的银行卡号和用户的真实姓名、身份证号，手机号是否匹配',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VERIFY_BANK_CARD',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用产品类型：'."\n"
                            ."\n"
                            .'- BANK_CARD_2_META: 姓名+银行卡号'."\n"
                            .'- BANK_CARD_3_META: 姓名+身份证号码+银行卡号'."\n"
                            .'- BANK_CARD_4_META: 姓名+身份证号码+银行卡号+手机号',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BANK_CARD_2_META',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入姓名明文'."\n"
                            .'- 当paramType取值md5是，输入姓名第一个字md5值（32位小写）+ 姓名其他部分明文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张*',
                    ],
                ],
                [
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号，当ProductType取值BANK_CARD_3_META和BANK_CARD_4_META时，此项必输入'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入身份证明文'."\n"
                            .'- 当paramType取值md5是，输入身份证前6位明文+出生年月日md5值（32位小写）+身份证后4位',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211',
                    ],
                ],
                [
                    'name' => 'BankCard',
                    'in' => 'query',
                    'schema' => [
                        'description' => '银行卡号'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入银行卡明文'."\n"
                            .'- 当paramType取值md5是，输入卡号除最后6位其他部分明文+最后6位md5值（32位小写）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '610*************1181',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号 当ProductType取值BANK_CARD_4_META时，此项必输入'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入手机号明文'."\n"
                            .'- 当paramType取值md5是，输入手机号md5值（32位小写）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '138******11',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '473469C7-A***B-A3DC0DE3C83E',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：查无记录',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'SubCode' => [
                                        'description' => '核验详情'."\n"
                                            ."\n"
                                            .'- 101:验证通过'."\n"
                                            .'- 201:认证信息不一致， 持卡人信息有误'."\n"
                                            .'- 202:认证信息不一致，银行卡未开通认证支付'."\n"
                                            .'- 203:认证信息不一致，银行卡已过期'."\n"
                                            .'- 204:认证信息不一致，银行卡为受限制的卡'."\n"
                                            .'- 205:认证信息不一致，此卡被没收'."\n"
                                            .'- 206:认证信息不一致，银行卡无效'."\n"
                                            .'- 207:认证信息不一致，此卡无对应发卡行'."\n"
                                            .'- 208:认证信息不一致，该卡未初始化或睡眠卡'."\n"
                                            .'- 209:认证信息不一致，此卡为作弊卡、吞卡'."\n"
                                            .'- 210:认证信息不一致，此卡已挂失'."\n"
                                            .'- 211:认证信息不一致，密码错误次数超限'."\n"
                                            .'- 212:认证信息不一致，发卡行不支持此交易'."\n"
                                            .'- 213:认证信息不一致，卡状态不正常'."\n"
                                            .'- 214:认证信息不一致，未预留手机号'."\n"
                                            .'- 215:认证信息不一致，输入的密码、有效期或CVN2有误'."\n"
                                            .'- 216:认证信息不一致，其他卡异常情况'."\n"
                                            .'- 301:无法验证，银行卡不支持该业务'."\n"
                                            .'- 302:无法验证，验证失败或银行拒绝验证，请联系发卡行'."\n"
                                            .'- 303:无法验证，银行卡暂不支持手机号验证'."\n"
                                            .'- 304:无法验证，银行卡号有误'."\n"
                                            .'- 305:无法验证，其他原因',
                                        'type' => 'string',
                                        'example' => '101',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-A***B-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\"\\n  }\\n}","type":"json"}]',
            'title' => '银行卡二，三，四要素核验',
        ],
        'MobileOnlineTime' => [
            'summary' => '查询手机号在网时长',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '216495',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthNOQ41U',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码。'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'B506328A-D84B-4750-82C7-6A207C585CF1',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：查无记录',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'IspName' => [
                                        'description' => '运营商名称'."\n"
                                            ."\n"
                                            .'- CMCC：移动 '."\n"
                                            .'- CUCC：联通 '."\n"
                                            .'- CTCC：电信',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                    'TimeCode' => [
                                        'description' => '- 1:[0,3)表示在网时长是 0~3 个月 '."\n"
                                            .'- 2: [3,6)表示在网时长是 3~6 个月 '."\n"
                                            .'- 3: [6,12)表示在网时长是 6~12 个月 '."\n"
                                            .'- 4: [12,24)表示在网时长是 12~24 月 '."\n"
                                            .'- 5: [24,+)表示在网时长是 24 个月以上',
                                        'type' => 'string',
                                        'example' => '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B506328A-D84B-4750-82C7-6A207C585CF1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\",\\n    \\"TimeCode\\": \\"5\\"\\n  }\\n}","type":"json"}]',
            'title' => '手机号在网时长',
        ],
        'MobileDetect' => [
            'summary' => '号码检测',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '218021',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthPZCZ2I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'Mobiles',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入手机号明文'."\n"
                            .'- 当paramType取值md5是，输入手机号md5值（32位小写）'."\n"
                            .'- 最多可输入50个手机号，用英文逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => '138********,156********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '969434DF-926B-4997-9881-4DE94E39F805',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'ChargeCount' => [
                                        'description' => '计费次数，一次请求中所有计费次数',
                                        'type' => 'string',
                                        'example' => '2',
                                    ],
                                    'Items' => [
                                        'description' => '核验结果集',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '返回数据列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Mobile' => [
                                                    'description' => '手机号',
                                                    'type' => 'string',
                                                    'example' => '131********',
                                                ],
                                                'BizCode' => [
                                                    'description' => '核验结果'."\n"
                                                        ."\n"
                                                        .'- 1: 在网可用 '."\n"
                                                        .'- 2: 非在网可用状态'."\n"
                                                        .'- 3: 无查询结果',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'SubCode' => [
                                                    'description' => '核验详情'."\n"
                                                        ."\n"
                                                        .'- 101:可用号'."\n"
                                                        .'- 201:空号'."\n"
                                                        .'- 202:停机 '."\n"
                                                        .'- 203:沉默号（近半年不活跃小号，新号，非智能机用户） '."\n"
                                                        .'- 204:风险号 （长时间关机或未开通语音服务以及易投诉的用户）'."\n"
                                                        .'- 301:查无记录',
                                                    'type' => 'string',
                                                    'example' => '101',
                                                ],
                                                'IspName' => [
                                                    'description' => '运营商名称'."\n"
                                                        ."\n"
                                                        .'- CMCC：移动 '."\n"
                                                        .'- CUCC：联通 '."\n"
                                                        .'- CTCC：电信',
                                                    'type' => 'string',
                                                    'example' => 'CMCC',
                                                ],
                                                'Area' => [
                                                    'description' => '手机号归属地（只有明文手机号有）',
                                                    'type' => 'string',
                                                    'example' => '安徽-马**',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"969434DF-926B-4997-9881-4DE94E39F805\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"ChargeCount\\": \\"2\\",\\n    \\"Items\\": [\\n      {\\n        \\"Mobile\\": \\"131********\\",\\n        \\"BizCode\\": \\"1\\",\\n        \\"SubCode\\": \\"101\\",\\n        \\"IspName\\": \\"CMCC\\",\\n        \\"Area\\": \\"安徽-马**\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '号码批量检测',
        ],
        'MobileOnlineStatus' => [
            'summary' => '查询手机号在网状态',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '216535',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthNOQ41U',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户手机号码。'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '130********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'B506328A-D84B-4750-82C7-6A207C585CF1',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果'."\n"
                                            ."\n"
                                            .'- 1: 在网可用 '."\n"
                                            .'- 2: 非在网可用状态（详见subCode）'."\n"
                                            .'- 3: 无查询结果',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'IspName' => [
                                        'description' => '运营商名称'."\n"
                                            ."\n"
                                            .'- CMCC：移动 '."\n"
                                            .'- CUCC：联通 '."\n"
                                            .'- CTCC：电信',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                    'SubCode' => [
                                        'description' => '核验详情'."\n"
                                            ."\n"
                                            .'- 101:在网可用 '."\n"
                                            .'- 201:停机 '."\n"
                                            .'- 202:销号 '."\n"
                                            .'- 203:在网但不可用 '."\n"
                                            .'- 204:不在网 '."\n"
                                            .'- 301:查无记录',
                                        'type' => 'string',
                                        'example' => '101',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B506328A-D84B-4750-82C7-6A207C585CF1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\",\\n    \\"SubCode\\": \\"101\\"\\n  }\\n}","type":"json"}]',
            'title' => '手机号在网状态',
        ],
        'Mobile3MetaSimpleVerify' => [
            'summary' => '传入姓名和身份证号，通过权威数据源验证其真实性和一致性。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'normal' => 'normal',
                            'md5' => 'md5',
                        ],
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张*',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码。'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '150000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：查无记录',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'IspName' => [
                                        'description' => '运营商名称'."\n"
                                            ."\n"
                                            .'- CMCC：移动 '."\n"
                                            .'- CUCC：联通 '."\n"
                                            .'- CTCC：电信',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '手机号三要素简版接口',
        ],
        'Id2MetaVerify' => [
            'summary' => '传入姓名和身份证号，通过权威数据源验证其真实性和一致性。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：原始值（明文）'."\n"
                            .'- 说明：由于权威数据源限制，身份二要素核验不支持Md5加密方式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张*',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
                            ],
                            'Code' => [
                                'description' => '返回码，**200**表示接口响应成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：查无记录',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\"\\n  }\\n}","type":"json"}]',
            'title' => '身份二要素核验接口',
        ],
        'Mobile3MetaDetailVerify' => [
            'summary' => '传入手机号、姓名、身份证号，通过权威数据源验证其真实性和一致性，如果不一致，返回不一致的原因。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '参数类型：'."\n"
                            ."\n"
                            .'- normal：不加密'."\n"
                            .'- md5：md5加密',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'normal' => 'normal',
                            'md5' => 'md5',
                        ],
                        'example' => 'normal',
                    ],
                ],
                [
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张*',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户手机号码。'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '150000****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求Id',
                                'type' => 'string',
                                'example' => '5A6229C0-E156-48E4-B6EC-0F528BDF60D2',
                            ],
                            'Code' => [
                                'description' => '返回码，**200**表示接口响应成功。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果信息',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：查无记录',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'SubCode' => [
                                        'description' => '核验详细结果'."\n"
                                            ."\n"
                                            .'- 101:验证通过 '."\n"
                                            .'- 201:⼿机号和姓名不⼀致，⼿机号和证件号不⼀致 '."\n"
                                            .'- 202:⼿机号和姓名⼀致，⼿机号和证件号不⼀致 '."\n"
                                            .'- 203:⼿机号和证件号⼀致，⼿机号和姓名不⼀致 '."\n"
                                            .'- 204:其他不⼀致'."\n"
                                            .'- 301:查⽆记录',
                                        'type' => 'string',
                                        'example' => '101',
                                    ],
                                    'IspName' => [
                                        'description' => '运营商名称'."\n"
                                            ."\n"
                                            .'- CMCC：移动 '."\n"
                                            .'- CUCC：联通 '."\n"
                                            .'- CTCC：电信',
                                        'type' => 'string',
                                        'example' => 'CMCC',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5A6229C0-E156-48E4-B6EC-0F528BDF60D2\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"ResultObject\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '手机号三要素详版接口',
        ],
        'CreateAuthKey' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59098',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型。不超过64字符。可用于对具体业务进行备注，例如可以取接入方不同的人脸使用场景，或者待交付的客户标识等。建议传入该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FACE_TEST',
                    ],
                ],
                [
                    'name' => 'UserDeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户设备ID。不超过64字符。可用于标识具体设备，建议可以使用设备物理编号。建议传入该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3iJ1AY$oHcu7mC69',
                    ],
                ],
                [
                    'name' => 'Test',
                    'in' => 'query',
                    'schema' => [
                        'description' => '测试标识。为true表示使用测试授权，授权时长默认为30天；为false，则授权时长根据AuthYears进行授权。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AuthYears',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当Test标识为false或空时，AuthYears必填，单位为年，范围为\\[1,100]，取值100表示永久授权。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AuthKey' => [
                                'description' => '可用于授权激活的key。授权key在30分钟内有效，且不可重复使用，建议在每次激活前重新获取。',
                                'type' => 'string',
                                'example' => 'auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthKey\\": \\"auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<CreateAuthKeyResponse>\\r\\n    <Data>\\r\\n        <AuthKey>auth.1KQMcnLd4m37LN2D0F0WCD-1qtQI$</AuthKey>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>1</Code>\\r\\n</CreateAuthKeyResponse>","errorExample":""}]',
            'title' => '获取授权key',
            'summary' => '获取授权key，用于离线人脸识别SDK激活。',
            'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。'."\n"
                ."\n"
                .'> 授权key在30分钟内有效，且不可重复使用，建议在每次激活前重新获取。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeOssUploadToken' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59122',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth6RJHVQ',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '2FA2C773-47DB-4156-B1EE-5B047321A939',
                            ],
                            'OssUploadToken' => [
                                'description' => 'OSS上传Token信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'description' => '文件上传所需的Key。',
                                        'type' => 'string',
                                        'example' => 'STS.NU8rUBj****',
                                    ],
                                    'Token' => [
                                        'description' => '文件上传所需的Token。',
                                        'type' => 'string',
                                        'example' => 'uWia500nTS5knZaDzq4/KqpvhcLnO****',
                                    ],
                                    'Secret' => [
                                        'description' => '文件上传所需的Secret。',
                                        'type' => 'string',
                                        'example' => 'FwmnyoqT8dHj7nJLuM67T****',
                                    ],
                                    'Expired' => [
                                        'description' => '过期时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1582636610000',
                                    ],
                                    'Path' => [
                                        'description' => '文件存放路径。',
                                        'type' => 'string',
                                        'example' => 'prod/RdNLC@Ox2n-1s7NMt',
                                    ],
                                    'EndPoint' => [
                                        'description' => '接入端点。',
                                        'type' => 'string',
                                        'example' => 'https://oss-cn-zhangjiakou.aliyuncs.com',
                                    ],
                                    'Bucket' => [
                                        'description' => 'OSS文件存储的空间。',
                                        'type' => 'string',
                                        'example' => 'cloudauth-zhangjiakou-external',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2FA2C773-47DB-4156-B1EE-5B047321A939\\",\\n  \\"OssUploadToken\\": {\\n    \\"Key\\": \\"STS.NU8rUBj****\\",\\n    \\"Token\\": \\"uWia500nTS5knZaDzq4/KqpvhcLnO****\\",\\n    \\"Secret\\": \\"FwmnyoqT8dHj7nJLuM67T****\\",\\n    \\"Expired\\": 1582636610000,\\n    \\"Path\\": \\"prod/RdNLC@Ox2n-1s7NMt\\",\\n    \\"EndPoint\\": \\"https://oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"Bucket\\": \\"cloudauth-zhangjiakou-external\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\n<DescribeOssUploadTokenResponse>\\n     <OssUploadToken class=\\"object\\">\\n          <Bucket type=\\"string\\">cloudauth-zhangjiakou-external</Bucket>\\n          <EndPoint type=\\"string\\">https://oss-cn-zhangjiakou.aliyuncs.com</EndPoint>\\n          <Expired type=\\"number\\">1582636610000</Expired>\\n          <Key type=\\"string\\">STS.NU8rUBj****</Key>\\n          <Path type=\\"string\\">prod/RdNLC@Ox2n-1s7NMt</Path>\\n          <Secret type=\\"string\\">FwmnyoqT8dHj7nJLuM67T****</Secret>\\n          <Token type=\\"string\\">uWia500nTS5knZaDzq4/KqpvhcLnO****</Token>\\n     </OssUploadToken>\\n     <RequestId type=\\"string\\">46FF6F40-59F9-4108-BA2C-E6BA7E816F1F</RequestId>\\n</DescribeOssUploadTokenResponse>\\n","errorExample":""}]',
            'title' => '获取照片上传OSS所需要的Token',
            'summary' => '调用DescribeOssUploadToken获取照片上传OSS所需要的Token。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVerifySetting' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59103',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证场景标识，支持英文/数字/中划线（-），最多20个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'UserRegister',
                    ],
                ],
                [
                    'name' => 'BizName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证场景名称，支持中文/英文/数字/中划线（-），最多20个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '用户注册',
                    ],
                ],
                [
                    'name' => 'Solution',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要使用的认证方案的名称，例如**RPBasic**、**RPBioOnly**等。关于所有支持的认证方案，请参见 [认证方案](~~127521~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'RPBasic',
                    ],
                ],
                [
                    'name' => 'GuideStep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用系统默认的引导页。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PrivacyStep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用系统默认的授权页。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'ResultStep',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否使用系统默认的结果页。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'BizName' => [
                                'description' => '认证场景名称。',
                                'type' => 'string',
                                'example' => '用户注册',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6163397-15C5-419C-9ACC-B7C83E0B4C10',
                            ],
                            'Solution' => [
                                'description' => '认证方案名称。',
                                'type' => 'string',
                                'example' => 'RPBasic',
                            ],
                            'BizType' => [
                                'description' => '认证场景标识。',
                                'type' => 'string',
                                'example' => 'UserRegister',
                            ],
                            'StepList' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '认证步骤，GUIDE代表引导页，PRIVACY代表授权页，FACE_LIVENESS代表活体步骤，TAKE_ID_PHOTO代表拍身份证步骤，RESULT代表结果页。',
                                    'type' => 'string',
                                    'example' => '["GUIDE","PRIVACY","FACE_LIVENESS","TAKE_ID_PHOTO","RESULT"]',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"BizName\\": \\"用户注册\\",\\n  \\"RequestId\\": \\"D6163397-15C5-419C-9ACC-B7C83E0B4C10\\",\\n  \\"Solution\\": \\"RPBasic\\",\\n  \\"BizType\\": \\"UserRegister\\",\\n  \\"StepList\\": [\\n    \\"[\\\\\\"GUIDE\\\\\\",\\\\\\"PRIVACY\\\\\\",\\\\\\"FACE_LIVENESS\\\\\\",\\\\\\"TAKE_ID_PHOTO\\\\\\",\\\\\\"RESULT\\\\\\"]\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>\\r\\n<CreateVerifySettingResponse>\\r\\n     <BizName type=\\"string\\">用户注册</BizName>\\r\\n     <BizType type=\\"string\\">UserRegister</BizType>\\r\\n     <RequestId type=\\"string\\">D6163397-15C5-419C-9ACC-B7C83E0B4C10</RequestId>\\r\\n     <Solution type=\\"string\\">RPBasic</Solution>\\r\\n     <StepList class=\\"array\\">\\r\\n          <e type=\\"string\\">GUIDE</e>\\r\\n          <e type=\\"string\\">PRIVACY</e>\\r\\n          <e type=\\"string\\">FACE_LIVENESS</e>\\r\\n          <e type=\\"string\\">TAKE_ID_PHOTO</e>\\r\\n          <e type=\\"string\\">RESULT</e>\\r\\n     </StepList>\\r\\n</CreateVerifySettingResponse>\\r\\n","errorExample":""}]',
            'title' => '创建认证场景配置',
            'summary' => '等同于在控制台上新建认证场景。',
            'description' => '请求方法：仅支持以HTTPS POST方法发送请求。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVerifySDK' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59152',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthK16DVB',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成SDK的任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1KQMcnLd4m37LN2D0F0WCD',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SdkUrl' => [
                                'description' => 'SDK下载地址。不为空时，表示生成完成。',
                                'type' => 'string',
                                'example' => 'https://www.xxx.com',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SdkUrl\\": \\"https://www.xxx.com\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifySDKResponse>\\r\\n    <Data>\\r\\n        <Url>https://www.xxx.com</Url>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n</DescribeVerifySDKResponse>\\r\\n\\t\\t\\t\\t\\t\\t\\t\\t","errorExample":""}]',
            'title' => '获取离线SDK下载地址',
            'summary' => '调用DescribeVerifySDK获取离线SDK下载地址。',
            'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。'."\n"
                ."\n"
                .'接口描述：根据生成离线人脸识别SDK的任务ID获取SDK生成结果。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyDeviceInfo' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59166',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthV1ZO7W',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人认证服务端为接入方设备生成的唯一ID，只有在设备成功激活后才会生成，该ID可通过离线人脸识别SDK里的getLicenseExtraInfo函数获得。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
                    ],
                ],
                [
                    'name' => 'UserDeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新的用户设备ID。不超过64字符，由接入方自定义，可用于标识具体设备，建议可以使用设备物理编号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3iJ1AY$oHcu7mC69',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '更新的业务类型。不超过64字符。由接入方自定义，可用于对具体业务进行备注，例如可以取接入方不同的人脸使用场景，或者待交付的客户标识等。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FACE_TEST',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '延长设备到期的时间。单位：年，范围为\\[1,100]，取值100表示永久使用。一年按365天计算。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ExpiredDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前设备的失效时间。失效日期不正确（和实人认证服务端记录的失效时间相差超过一周），则报错。'."\n"
                            .'> 该失效时间可以通过DescribeDeviceInfo接口查询获得，失效日期不正确则报错，这个校验是为了确保业务方不因为一些误操作导致重复激活一台设备，误消耗授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20190401',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'UserDeviceId' => [
                                'description' => '对应于请求参数中的UserDeviceId。',
                                'type' => 'string',
                                'example' => '3iJ1AY$oHcu7mC69',
                            ],
                            'DeviceId' => [
                                'description' => '对应于请求参数中的DeviceId。',
                                'type' => 'string',
                                'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
                            ],
                            'ExpiredDay' => [
                                'description' => '若请求参数中Duration不为空，则该字段表示延长设备有效期后，授权到期时间。Duration的1年按365天计算。示例：20180101。',
                                'type' => 'string',
                                'example' => '20200330',
                            ],
                            'BeginDay' => [
                                'description' => '若请求参数中Duration不为空，则该字段表示延长设备有效期后，授权开始时间。Duration的1年按365天计算。示例：20180101。',
                                'type' => 'string',
                                'example' => '20190401',
                            ],
                            'BizType' => [
                                'description' => '对应于请求参数中的BizType。',
                                'type' => 'string',
                                'example' => 'FACE_TEST',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"UserDeviceId\\": \\"3iJ1AY$oHcu7mC69\\",\\n  \\"DeviceId\\": \\"wd.6ziUffspAeW5FVYbaqmexR-1qwNjM\\",\\n  \\"ExpiredDay\\": \\"20200330\\",\\n  \\"BeginDay\\": \\"20190401\\",\\n  \\"BizType\\": \\"FACE_TEST\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<ModifyDeviceInfoResponse>\\r\\n    <Data>\\r\\n        <DeviceId>wd.6ziUffspAeW5FVYbaqmexR-1qwNjM</DeviceId>\\r\\n        <UserDeviceId>3iJ1AY$oHcu7mC69</UserDeviceId>\\r\\n        <BizType>FACE_TEST</BizType>\\r\\n        <BeginDay>20190401</BeginDay>\\r\\n        <ExpiredDay>20200330</ExpiredDay>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>1</Code>\\r\\n</ModifyDeviceInfoResponse>\\t\\t\\t\\t","errorExample":""}]',
            'title' => '更新设备相关信息',
            'summary' => '比如设备授权有效期延长、更新业务方自定义的业务标识和设备ID等。适用于设备有效期续期等场景。',
            'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeDeviceInfo' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59114',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth0KJCLK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询每页数目。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前查询页数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人认证服务端为接入方设备生成的唯一ID，只有在设备成功激活后才会生成，该ID可通过离线人脸识别SDK里的getLicenseExtraInfo函数获得。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务类型。不超过64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FACE_TEST',
                    ],
                ],
                [
                    'name' => 'UserDeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '不超过64字符，由接入方自定义，可用于标识具体设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3iJ1AY$oHcu7mC69',
                    ],
                ],
                [
                    'name' => 'ExpiredStartDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间，即查询在ExpiredStartDay和ExpiredEndDay之间要过期的授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20190401',
                    ],
                ],
                [
                    'name' => 'ExpiredEndDay',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间。即查询在ExpiredStartDay和ExpiredEndDay之间要过期的授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20200330',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CurrentPage' => [
                                'description' => '当前查询页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'PageSize' => [
                                'description' => '每页数目。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalCount' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'DeviceInfoList' => [
                                'type' => 'object',
                                'properties' => [
                                    'DeviceInfo' => [
                                        'description' => '设备信息数组。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ExpiredDay' => [
                                                    'description' => '授权到期时间。',
                                                    'type' => 'string',
                                                    'example' => '20180101',
                                                ],
                                                'UserDeviceId' => [
                                                    'description' => '对应于请求中的UserDeviceId。',
                                                    'type' => 'string',
                                                    'example' => '3iJ1AY$oHcu7mC69',
                                                ],
                                                'DeviceId' => [
                                                    'description' => '对应于请求中的DeviceId。',
                                                    'type' => 'string',
                                                    'example' => 'wd.6ziUffspAeW5FVYbaqmexR-1qwNjM',
                                                ],
                                                'BeginDay' => [
                                                    'description' => '授权开始时间。',
                                                    'type' => 'string',
                                                    'example' => '20180101',
                                                ],
                                                'BizType' => [
                                                    'description' => '对应于请求中的BizType。',
                                                    'type' => 'string',
                                                    'example' => 'FACE_TEST',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"CurrentPage\\": 1,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"PageSize\\": 20,\\n  \\"TotalCount\\": 1,\\n  \\"DeviceInfoList\\": {\\n    \\"DeviceInfo\\": [\\n      {\\n        \\"ExpiredDay\\": \\"20180101\\",\\n        \\"UserDeviceId\\": \\"3iJ1AY$oHcu7mC69\\",\\n        \\"DeviceId\\": \\"wd.6ziUffspAeW5FVYbaqmexR-1qwNjM\\",\\n        \\"BeginDay\\": \\"20180101\\",\\n        \\"BizType\\": \\"FACE_TEST\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeDeviceInfoResponse>\\r\\n    <Data>\\r\\n        <PageSize>20</PageSize>\\r\\n        <CurrentPage>1</CurrentPage>\\r\\n        <TotalCount>1</TotalCount>\\r\\n        <Devices>\\r\\n             <DeviceId>wd.6ziUffspAeW5FVYbaqmexR-1qwNjM</DeviceId>\\r\\n             <UserDeviceId>3iJ1AY$oHcu7mC69</UserDeviceId>\\r\\n             <BizType>FACE_TEST</BizType>\\r\\n             <BeginDay>20190101</BeginDay>\\r\\n             <ExpiredDay>20200101</ExpiredDay>\\r\\n        </Devices>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n</DescribeDeviceInfoResponse>","errorExample":""}]',
            'title' => '查询设备相关信息',
            'summary' => '比如授权有效期、接入方自定义的业务标识和设备ID等。',
            'description' => '请求方法：支持以HTTPS POST和GET方法发送请求。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVerifyToken' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59156',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth6RJHVQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdCardBackImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证国徽面图片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用实人认证服务的业务场景标识。请先参见[业务设置](~~127885~~)在控制台完成创建。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RPBasicTest',
                    ],
                ],
                [
                    'name' => 'FailedRedirectUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证失败跳转链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'FaceRetainedImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人像留底照片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                    ],
                ],
                [
                    'name' => 'CallbackSeed',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'IdCardFrontImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证人像面图片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端用户的ID，如终端用户的账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user111',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证ID。标识一次认证任务的唯一ID，不超过64字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。'."\n"
                            ."\n"
                            .'> 发起不同的认证任务时需要更换不同的BizId。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '39ecf51e-2f81-4dc5-90ee-ff86125be683',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'IdCardNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '330100xxxxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'PassedRedirectUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证通过跳转链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调Url。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'UserIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户IP。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.***.***',
                    ],
                ],
                [
                    'name' => 'UserPhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户电话号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '187********',
                    ],
                ],
                [
                    'name' => 'UserRegistTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的注册时间。使用时间戳格式表达，单位：毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1577808000000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VerifyPageUrl' => [
                                'description' => '原H5认证方案入口链接，目前该方案已经下线，不支持新增接入。如果您有H5认证方案接入需求，建议您使用金融级实人认证的[PC或移动端H5网页接入方案](~~173779~~)。',
                                'type' => 'string',
                                'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'VerifyToken' => [
                                'description' => '该次认证的Token，用来串联认证请求中的各个接口，在30分钟内有效。',
                                'type' => 'string',
                                'example' => 'c302c0797679457685410ee51a5ba375',
                            ],
                            'OssUploadToken' => [
                                'description' => 'OSS上传Token信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Key' => [
                                        'description' => '文件上传所需的Key。',
                                        'type' => 'string',
                                        'example' => 'STS.NU8rUBj****',
                                    ],
                                    'Token' => [
                                        'description' => '文件上传所需的Token。',
                                        'type' => 'string',
                                        'example' => 'uWia500nTS5knZaDzq4/KqpvhcLnO****',
                                    ],
                                    'Secret' => [
                                        'description' => '文件上传所需的Secret。',
                                        'type' => 'string',
                                        'example' => 'FwmnyoqT8dHj7nJLuM67T****',
                                    ],
                                    'Expired' => [
                                        'description' => '过期时间。使用时间戳格式表达，单位：毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1582636610000',
                                    ],
                                    'Path' => [
                                        'description' => '文件存放路径。',
                                        'type' => 'string',
                                        'example' => 'prod/RdNLC@Ox2n-1s7NMt',
                                    ],
                                    'EndPoint' => [
                                        'description' => '接入端点。',
                                        'type' => 'string',
                                        'example' => 'https://oss-cn-zhangjiakou.aliyuncs.com',
                                    ],
                                    'Bucket' => [
                                        'description' => 'OSS文件存储的空间。',
                                        'type' => 'string',
                                        'example' => 'cloudauth-zhangjiakou-external',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParam.ImageValuePatternError',
                        'errorMessage' => 'The pattern of value of given image is not acceptable.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'RAM caller has no permission',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VerifyPageUrl\\": \\"http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg\\",\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"VerifyToken\\": \\"c302c0797679457685410ee51a5ba375\\",\\n  \\"OssUploadToken\\": {\\n    \\"Key\\": \\"STS.NU8rUBj****\\",\\n    \\"Token\\": \\"uWia500nTS5knZaDzq4/KqpvhcLnO****\\",\\n    \\"Secret\\": \\"FwmnyoqT8dHj7nJLuM67T****\\",\\n    \\"Expired\\": 1582636610000,\\n    \\"Path\\": \\"prod/RdNLC@Ox2n-1s7NMt\\",\\n    \\"EndPoint\\": \\"https://oss-cn-zhangjiakou.aliyuncs.com\\",\\n    \\"Bucket\\": \\"cloudauth-zhangjiakou-external\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifyTokenResponse>\\r\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n    <VerifyToken>c302c0797679457685410ee51a5ba375</VerifyToken>\\r\\n</DescribeVerifyTokenResponse>","errorExample":""}]',
            'title' => '获取认证Token',
            'summary' => '发起认证请求，获取认证Token。该接口适用于使用SDK+服务端接入的认证方案',
            'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[实人认证方案接入流程概述](~~127536~~)、[活体人脸验证方案（活体检测方案）接入流程概述](~~127687~~)。'."\n"
                ."\n"
                .'请求方法：HTTPS POST和GET'."\n"
                ."\n"
                .'接口说明：每次开始认证前通过本接口获取认证Token（VerifyToken），用来串联认证请求中的各个接口。'."\n"
                ."\n"
                .'适用范围：该接口适用于无线SDK接入。'."\n"
                ."\n"
                .'图片地址：需使用HTTP或HTTPS地址，公网可访问的HTTP或HTTPS地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。'."\n"
                ."\n"
                .'图片限制：'."\n"
                ."\n"
                .'- 不支持本地图片的相对路径或绝对路径。'."\n"
                .'- 单张图片大小请控制在2 MB内，避免算法拉取超时。'."\n"
                .'- 图片中人脸区域的大小至少64*64像素（px）。'."\n"
                .'- 单个请求的Body有8 MB的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。',
            'requestParamsDescription' => ' 根据选择的认证方案不同，所需传入的字段不太一样，具体可以参考下述表格中的说明。'."\n"
                ."\n"
                .'| 认证方案  | Name字段 | IdCardNumber字段 | IdCardFrontImageUrl字段 | IdCardBackImageUrl字段 | FaceRetainedImageUrl字段 |'."\n"
                .'|-----------|----------|------------------|-------------------------|------------------------|--------------------------|'."\n"
                .'| RPBasic   | 否       | 否               | 否                      | 否                     | 否                       |'."\n"
                .'| RPManual  | 否       | 否               | 否                      | 否                     | 否                       |'."\n"
                .'| RPBioID   | 是       | 是               | 否                      | 否                     | 否                       |'."\n"
                .'| RPBioOnly | 是       | 是               | 可选传入                | 可选传入               | 否                       |'."\n"
                .'| FVBioOnly | 否       | 否               | 否                | 否               | 是                       |'."\n"
                .'| FDBioOnly| 否       | 否               | 否                | 否              | 否                       |',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVerifyResult' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59150',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证ID。标识一次认证任务的唯一ID，不超过64个字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。'."\n"
                            .'> 您发起不同的认证任务时需要更换不同的BizId。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '39ecf51e-2f81-4dc5-90ee-ff86125b****',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人认证服务的业务场景标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FVBioOnlyTest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AuthorityComparisionScore' => [
                                'description' => '认证过程中所提交的人脸照片和权威数据的比对分，取值范围：**0**~**100**。'."\n"
                                    ."\n"
                                    .'置信度阈值参考：'."\n"
                                    ."\n"
                                    .'- 误识率为0.001%时，对应阈值为95。'."\n"
                                    .'- 误识率为0.01%时，对应阈值为90。'."\n"
                                    .'- 误识率为0.1%时，对应阈值为80。'."\n"
                                    .'- 误识率为1%时，对应阈值为60。'."\n"
                                    ."\n"
                                    .'>  该字段只表示人脸与权威数据的比对结果，仅供您参考，通常不建议业务上仅以该值作为认证是否通过的标准。认证的综合结果请参考**VerifyStatus**字段。**VerifyStatus**的结果综合了人脸与权威数据的比对和其他多种策略，可以提高安全水平。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '97',
                            ],
                            'VerifyStatus' => [
                                'description' => '认证状态，取值：'."\n"
                                    ."\n"
                                    .'- **-1**：未认证'."\n"
                                    .'- **1**：认证通过'."\n"
                                    .'- **2**~**n**：各种不同原因导致的认证不通过。详细描述参见认证状态说明。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'FaceComparisonScore' => [
                                'description' => '认证过程中所提交的人脸照片和人脸留底图片上人脸的比对分，取值范围：**0**~**100**。'."\n"
                                    ."\n\n"
                                    .'置信度阈值参考：'."\n"
                                    ."\n"
                                    .'- 误识率为0.001%时，对应阈值为95。'."\n"
                                    .'- 误识率为0.01%时，对应阈值为90。'."\n"
                                    .'- 误识率为0.1%时，对应阈值为80。'."\n"
                                    .'- 误识率为1%时，对应阈值为60。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '97',
                            ],
                            'IdCardFaceComparisonScore' => [
                                'description' => '认证过程中所提交的人脸照片和身份证人脸面图片上人脸的比对分，取值范围：**0**~**100**。'."\n"
                                    ."\n\n"
                                    .'置信度阈值参考：'."\n"
                                    ."\n"
                                    .'- 误识率为0.001%时，对应阈值为95。'."\n"
                                    .'- 误识率为0.01%时，对应阈值为90。'."\n"
                                    .'- 误识率为0.1%时，对应阈值为80。'."\n"
                                    .'- 误识率为1%时，对应阈值为60。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '97',
                            ],
                            'Material' => [
                                'description' => '认证材料。',
                                'type' => 'object',
                                'properties' => [
                                    'IdCardNumber' => [
                                        'description' => '身份证号。',
                                        'type' => 'string',
                                        'example' => '02343218901123****',
                                    ],
                                    'FaceGlobalUrl' => [
                                        'description' => '实人认证SDK采集到的摄像头全局图。'."\n"
                                            ."\n"
                                            .'> 该参数需要配置后才会生效。如果您需要使用该参数，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们。',
                                        'type' => 'string',
                                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg ',
                                    ],
                                    'FaceImageUrl' => [
                                        'description' => '人脸正面照图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议您进行转存以免影响使用。'."\n"
                                            .'> 如果人脸正面照图片的HTTP或HTTPS链接过期，可重新调用[DescribeVerifyResult](~~154606~~)获取链接。',
                                        'type' => 'string',
                                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg',
                                    ],
                                    'FaceMask' => [
                                        'description' => '人脸是否佩戴口罩。取值：'."\n"
                                            .'- **true**：佩戴了口罩'."\n"
                                            .'- **false**：未佩戴口罩',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'IdCardName' => [
                                        'description' => '姓名。',
                                        'type' => 'string',
                                        'example' => '张三',
                                    ],
                                    'FaceQuality' => [
                                        'description' => '人脸正面照图片的质量。取值：'."\n"
                                            .'- **UNQUALIFIED**：照片质量较差'."\n"
                                            .'- **LOW**：低'."\n"
                                            .'- **NORMAL**：一般'."\n"
                                            .'- **HIGH**：高',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'VideoUrls' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '历史RPH5BioOnly方案返回的录制视频的URL地址。',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                    ],
                                    'IdCardInfo' => [
                                        'description' => '身份证信息的OCR结果。'."\n"
                                            .'> 认证过程中如果没有身份证正面和反面信息，实人认证服务则不会返回身份证的OCR结果。认证过程中如果有身份证正面和反面信息，实人认证服务也不一定保证会返回身份证上所有的信息，因身份证拍摄问题引起的OCR无法识别时，OCR信息就会不全，建议您的接入方业务上不强依赖身份证OCR信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EndDate' => [
                                                'description' => '证件有效期结束时间。格式为：yyyymmdd。',
                                                'type' => 'string',
                                                'example' => '20201101',
                                            ],
                                            'Authority' => [
                                                'description' => '签发机构。',
                                                'type' => 'string',
                                                'example' => '杭州市公安局',
                                            ],
                                            'Address' => [
                                                'description' => '地址。',
                                                'type' => 'string',
                                                'example' => '浙江省杭州市余杭区文一西路969号',
                                            ],
                                            'Number' => [
                                                'description' => '身份证号。',
                                                'type' => 'string',
                                                'example' => '02343218901123****',
                                            ],
                                            'StartDate' => [
                                                'description' => '证件有效期开始时间。格式为：yyyymmdd。',
                                                'type' => 'string',
                                                'example' => '20201101',
                                            ],
                                            'BackImageUrl' => [
                                                'description' => '身份证国徽面图片的HTTP/HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。'."\n"
                                                    .'> 如果人像正面照图片的HTTP/HTTPS链接过期，可重新调用DescribeVerifyResult获取链接。',
                                                'type' => 'string',
                                                'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
                                            ],
                                            'Nationality' => [
                                                'description' => '民族。',
                                                'type' => 'string',
                                                'example' => '汉',
                                            ],
                                            'Birth' => [
                                                'description' => '出生日期。',
                                                'type' => 'string',
                                                'example' => '19900101',
                                            ],
                                            'Name' => [
                                                'description' => '姓名。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'FrontImageUrl' => [
                                                'description' => '身份证人像面图片的HTTP/HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。'."\n"
                                                    .'> 如果人像正面照图片的HTTP/HTTPS链接过期，可重新调用DescribeVerifyResult获取链接。',
                                                'type' => 'string',
                                                'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                410 => [
                    [
                        'errorCode' => 'DataExpired',
                        'errorMessage' => 'The data has expired and the records have been deleted.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorityComparisionScore\\": 97,\\n  \\"VerifyStatus\\": 1,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"FaceComparisonScore\\": 97,\\n  \\"IdCardFaceComparisonScore\\": 97,\\n  \\"Material\\": {\\n    \\"IdCardNumber\\": \\"02343218901123****\\",\\n    \\"FaceGlobalUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg \\",\\n    \\"FaceImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg\\",\\n    \\"FaceMask\\": false,\\n    \\"IdCardName\\": \\"张三\\",\\n    \\"FaceQuality\\": \\"NORMAL\\",\\n    \\"VideoUrls\\": [\\n      \\"-\\"\\n    ],\\n    \\"IdCardInfo\\": {\\n      \\"EndDate\\": \\"20201101\\",\\n      \\"Authority\\": \\"杭州市公安局\\",\\n      \\"Address\\": \\"浙江省杭州市余杭区文一西路969号\\",\\n      \\"Number\\": \\"02343218901123****\\",\\n      \\"StartDate\\": \\"20201101\\",\\n      \\"BackImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\",\\n      \\"Nationality\\": \\"汉\\",\\n      \\"Birth\\": \\"19900101\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"FrontImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<DescribeVerifyResultResponse>\\r\\n    <Data>\\r\\n    <VerifyStatus>1</VerifyStatus>\\r\\n        <Material>\\r\\n            <FaceImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/face-image-example.jpg\\r\\n            </FaceImageUrl>\\r\\n            <FaceMask>false</FaceMask>\\r\\n            <FaceQuality>HIGH</FaceQuality>\\r\\n            <IdCardName>张三</IdCardName>\\r\\n            <IdCardNumber>02343218901123****</IdCardNumber>\\r\\n            <IdCardInfo>\\r\\n                <FrontImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\r\\n                </FrontImageUrl>\\r\\n                <BackImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\r\\n                </BackImageUrl>\\r\\n                <Name>张三</Name>\\r\\n                <Number>02343218901123****</Number>\\r\\n                <Birth>19900101</Birth>\\r\\n                <Address>浙江省杭州市余杭区文一西路969号</Address>\\r\\n                <StartDate>20101101</StartDate>\\r\\n                <EndDate>20201101</EndDate>\\r\\n                <Authority>杭州市公安局</Authority>\\r\\n            </IdCardInfo>\\r\\n        </Material>\\r\\n        <AuthorityComparisonScore>97</AuthorityComparisonScore>\\r\\n    </Data>\\r\\n</DescribeVerifyResultResponse>","errorExample":""}]',
            'title' => '查询认证结果',
            'summary' => '查询实人认证结果',
            'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[实人认证服务端接入准备](~~127471~~)、[活体人脸验证服务端接入准备](~~127717~~)。'."\n"
                ."\n"
                .'> 阿里云实人认证仅存储最近180天的认证数据，后续业务上要使用的认证数据，请您及时调用该接口获取并自行转存，以免影响使用。'."\n"
                ."\n"
                .'请求方法：HTTPS POST和GET。'."\n"
                ."\n"
                .'接口描述：当接入方移动端收到回调之后，其服务端可以调用此接口，来获取相应的认证状态和认证资料。'."\n"
                ."\n"
                .'适用范围：该接口适用于SDK+服务端接入的认证方案。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '** 认证状态说明**'."\n"
                ."\n"
                .'| VerifyStatus | 原因说明 | 备注 |'."\n"
                .'|--------------|--------------------------------------------------------------------------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------|'."\n"
                .'| -1 | 未认证 | 出现该状态一般是因为客户端上的认证请求没有提交成功。例如用户中途主动退出认证流程，或者用户的姓名、身份证号实名校验不匹配等。 |'."\n"
                .'| 1 | 认证通过 | 该认证状态在实人认证方案和活体人脸验证方案均会出现。 |'."\n"
                .'| 2 | 认证不通过，可能原因：实名校验不通过。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 3 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别；身份证照片信息与需认证的身份证姓名不一致；提交的照片为非身份证照片。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 4 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别；身份证照片信息与需认证的身份证号码不一致、提交的照片为非身份证照片。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 5| 认证不通过，可能原因：身份证照片有效期已过期（或即将过期）。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 6 | 认证不通过，可能原因：人脸与身份证头像不一致。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 7 | 认证不通过，可能原因：人脸与公安网照片不一致。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 8| 认证不通过，可能原因：提交的身份证照片非身份证原照片或未提交有效的身份证照片。 | 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 9 | 认证不通过，可能原因：非账户本人操作。 | 该认证状态在实人认证方案和活体人脸验证方案均会出现。 |'."\n"
                .'| 10 | 认证不通过，可能原因：非同一个人操作。 | 该认证状态仅在活体人脸验证方案中出现。 |'."\n"
                .'| 11 | 认证不通过，可能原因：公安网照片缺失、公安网照片格式错误、公安网照片未找到人脸。| 该认证状态仅在实人认证方案中出现。 |'."\n"
                .'| 12 | 认证不通过，可能原因：公安网系统异常、无法进行照片比对。 | 该认证状态仅在实人认证方案中出现。 ',
            'extraInfo' => ' ',
        ],
        'VerifyMaterial' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59176',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHOSIED',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdCardBackImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证国徽面图片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
                    ],
                ],
                [
                    'name' => 'FaceImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人像正面照图片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用实人认证服务的业务场景标识。请先参见[业务设置](~~127885~~)在控制台完成创建。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RPMinTest',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标识一次认证任务的唯一ID，不超过64字符。针对一次认证任务，系统支持无限次发起提交，直到最终认证通过，该任务完结。'."\n"
                            ."\n"
                            .'> 发起不同的认证任务时需要更换不同的BizId。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '39ecf51e-2f81-4dc5-90ee-ff86125b****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'IdCardNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '02343218901123****',
                    ],
                ],
                [
                    'name' => 'IdCardFrontImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证人像面图片的HTTP或HTTPS链接。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端用户的ID，例如终端用户的账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '54sdj',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AuthorityComparisionScore' => [
                                'description' => '认证过程中所提交的人脸照片和权威数据的比对分，取值范围：**0**~**100**。'."\n"
                                    ."\n"
                                    .'置信度阈值请参考：'."\n"
                                    .'- 误识率0.001%时，对应阈值95。'."\n"
                                    .'- 误识率0.01%时，对应阈值90。'."\n"
                                    .'- 误识率为0.1%时，对应阈值80。'."\n"
                                    .'- 误识率为1%时，对应阈值为60。'."\n"
                                    ."\n"
                                    .'> 该字段只表示人脸与权威数据的比对结果，是个参考分，通常不建议业务上仅以该分数作为是否通过的标准。认证的综合结果请参考**VerifyStatus**字段。**VerifyStatus**的结果综合了人脸与权威数据的比对和其他多种策略，可以提高安全水位。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '97',
                            ],
                            'VerifyStatus' => [
                                'description' => '认证状态。取值：'."\n"
                                    ."\n"
                                    .'- **1**：认证通过。'."\n"
                                    .'- **2**~**n**：由于不同原因导致认证不通过。详细描述请参见下文的**认证状态说明**。'."\n",
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'VerifyToken' => [
                                'description' => '该次认证的Token，用来串联认证请求中的各个接口，在30分钟内有效。',
                                'type' => 'string',
                                'example' => 'c302c0797679457685410ee51a5ba375',
                            ],
                            'IdCardFaceComparisonScore' => [
                                'description' => '认证过程中所提交的人脸照片和身份证人像面图片上人脸的比对分，取值范围：**0**~**100**。'."\n"
                                    ."\n"
                                    .'置信度阈值请参考：'."\n"
                                    .'- 误识率0.001%时，对应阈值95。'."\n"
                                    .'- 误识率0.01%时，对应阈值90。'."\n"
                                    .'- 误识率为0.1%时，对应阈值80。'."\n"
                                    .'- 误识率为1%时，对应阈值为60。',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '97',
                            ],
                            'Material' => [
                                'description' => '认证材料。',
                                'type' => 'object',
                                'properties' => [
                                    'IdCardNumber' => [
                                        'description' => '身份证号，对应于请求参数**IdCardNumber**。',
                                        'type' => 'string',
                                        'example' => '02343218901123****',
                                    ],
                                    'FaceGlobalUrl' => [
                                        'description' => '实人认证SDK采集到的摄像头全局图。'."\n"
                                            ."\n"
                                            .'> 该参数需要配置后才会生效。如果您需要使用该参数，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们。',
                                        'type' => 'string',
                                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg ',
                                    ],
                                    'FaceImageUrl' => [
                                        'description' => '人像正面照图片的HTTP或HTTPS链接，对应于请求参数**FaceImageUrl**。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                                        'type' => 'string',
                                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
                                    ],
                                    'FaceMask' => [
                                        'description' => '人脸是否佩戴口罩。取值：'."\n"
                                            .'- **true**：佩戴了口罩'."\n"
                                            .'- **false**：未佩戴口罩',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'IdCardName' => [
                                        'description' => '姓名，对应于请求参数**Name**。',
                                        'type' => 'string',
                                        'example' => '张三',
                                    ],
                                    'FaceQuality' => [
                                        'description' => '人脸正面照图片的质量。取值：'."\n"
                                            .'- **UNQUALIFIED**：照片质量较差'."\n"
                                            .'- **LOW**：低'."\n"
                                            .'- **NORMAL**：一般'."\n"
                                            .'- **HIGH**：高',
                                        'type' => 'string',
                                        'example' => 'NORMAL',
                                    ],
                                    'IdCardInfo' => [
                                        'description' => '身份证信息的OCR结果。'."\n"
                                            ."\n"
                                            .'> 认证过程中如果没有身份证正面和身份证反面，则不会返回身份证信息的OCR结果。认证过程中如果有身份证正面和身份证反面，也不保证一定会返回身份证上所有的信息，因身份证拍摄问题等引起的OCR无法识别时，OCR信息就会不全，建议接入方业务上不强依赖身份证OCR信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EndDate' => [
                                                'description' => '证件有效期结束时间。格式为：yyyymmdd。',
                                                'type' => 'string',
                                                'example' => '20201101',
                                            ],
                                            'Authority' => [
                                                'description' => '签发机构。',
                                                'type' => 'string',
                                                'example' => '杭州市公安局',
                                            ],
                                            'Address' => [
                                                'description' => '地址。',
                                                'type' => 'string',
                                                'example' => '浙江省杭州市余杭区文一西路969号',
                                            ],
                                            'Number' => [
                                                'description' => '身份证号。',
                                                'type' => 'string',
                                                'example' => '02343218901123****',
                                            ],
                                            'StartDate' => [
                                                'description' => '证件有效期开始时间。格式为：yyyymmdd。',
                                                'type' => 'string',
                                                'example' => '20201101',
                                            ],
                                            'BackImageUrl' => [
                                                'description' => '身份证国徽面图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                                                'type' => 'string',
                                                'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg',
                                            ],
                                            'Nationality' => [
                                                'description' => '民族。',
                                                'type' => 'string',
                                                'example' => '汉',
                                            ],
                                            'Birth' => [
                                                'description' => '出生日期。',
                                                'type' => 'string',
                                                'example' => '19900101',
                                            ],
                                            'Name' => [
                                                'description' => '姓名。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'FrontImageUrl' => [
                                                'description' => '身份证人像面图片的HTTP或HTTPS链接。链接地址5分钟内有效，建议业务上进行转存以免影响使用。',
                                                'type' => 'string',
                                                'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParam.MaterialsNotValid',
                        'errorMessage' => 'The param materials is not valid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Error.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AuthorityComparisionScore\\": 97,\\n  \\"VerifyStatus\\": 1,\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"VerifyToken\\": \\"c302c0797679457685410ee51a5ba375\\",\\n  \\"IdCardFaceComparisonScore\\": 97,\\n  \\"Material\\": {\\n    \\"IdCardNumber\\": \\"02343218901123****\\",\\n    \\"FaceGlobalUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/face-global-example.jpg \\",\\n    \\"FaceImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg\\",\\n    \\"FaceMask\\": \\"false\\",\\n    \\"IdCardName\\": \\"张三\\",\\n    \\"FaceQuality\\": \\"NORMAL\\",\\n    \\"IdCardInfo\\": {\\n      \\"EndDate\\": \\"20201101\\",\\n      \\"Authority\\": \\"杭州市公安局\\",\\n      \\"Address\\": \\"浙江省杭州市余杭区文一西路969号\\",\\n      \\"Number\\": \\"02343218901123****\\",\\n      \\"StartDate\\": \\"20201101\\",\\n      \\"BackImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg\\",\\n      \\"Nationality\\": \\"汉\\",\\n      \\"Birth\\": \\"19900101\\",\\n      \\"Name\\": \\"张三\\",\\n      \\"FrontImageUrl\\": \\"http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg\\"\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n\\t<VerifyMaterialResponse>\\r\\n\\t\\t<VerifyToken>c302c0797679457685410ee51a5ba375</VerifyToken>\\r\\n\\t\\t<VerifyStatus>1</VerifyStatus>\\r\\n\\t\\t<Material>\\r\\n\\t\\t\\t<FaceImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg</FaceImageUrl>\\r\\n\\t\\t\\t<FaceMask>false</FaceMask>\\r\\n\\t\\t\\t<FaceQuality>NORMAL</FaceQuality>\\r\\n\\t\\t\\t<IdCardName>张三</IdCardName>\\r\\n\\t\\t\\t<IdCardNumber>02343218901123****</IdCardNumber>\\r\\n\\t\\t\\t<IdCardInfo>\\r\\n\\t\\t\\t\\t<FrontImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg</FrontImageUrl>\\r\\n\\t\\t\\t\\t<BackImageUrl>http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg</BackImageUrl>\\r\\n\\t\\t\\t\\t<Name>张三</Name>\\r\\n\\t\\t\\t\\t<Number>02343218901123****</Number>\\r\\n\\t\\t\\t\\t<Birth>19900101</Birth>\\r\\n\\t\\t\\t\\t<Address>浙江省杭州市余杭区文一西路969号</Address>\\r\\n\\t\\t\\t\\t<StartDate>20101101</StartDate>\\r\\n\\t\\t\\t\\t<EndDate>20201101</EndDate>\\r\\n\\t\\t\\t\\t<Authority>杭州市公安局</Authority>\\r\\n\\t\\t\\t</IdCardInfo>\\r\\n\\t\\t</Material>\\r\\n\\t\\t<AuthorityComparisonScore>97</AuthorityComparisonScore>\\r\\n\\t</VerifyMaterialResponse>","errorExample":""}]',
            'title' => '实人认证方案纯服务端API',
            'summary' => '传入姓名、身份证号、人像照、身份证正反面照片（可选）进行实人认证，并同步返回结果',
            'description' => '接入准备：接入该API时，请确保已经完成相应的准备工作，具体请参见[服务端接入准备](~~127471~~)。'."\n"
                ."\n"
                .'请求方法：HTTPS POST和GET。'."\n"
                ."\n"
                .'接口描述：接入方服务端提交认证材料到实人认证服务进行核实比对，结果同步返回。'."\n"
                ."\n"
                .'适用范围：该接口仅适用于纯服务端接入的认证方案。'."\n"
                ."\n"
                .'上传图片地址说明：'."\n"
                ."\n"
                .'- HTTP或HTTPS地址：支持公网可访问的HTTP或HTTPS地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。'."\n"
                .'- OSS地址：接入方的图片如果是本地文件，阿里云也提供相应的上传SDK，支持业务方将图片上传到实人认证服务指定的OSS bucket中，并获取相应的OSS地址后，作为接口的图片地址入参。如果您的业务需要使用上传SDK，请提交[工单](https://selfservice.console.aliyun.com/ticket/category/cloudauth/today)联系我们获取。'."\n"
                ."\n"
                .'图片限制说明：'."\n"
                ."\n"
                .'- 不支持本地图片的相对路径或绝对路径。'."\n"
                .'- 单张图片大小请控制在2 M内，避免算法拉取超时。'."\n"
                .'- 图片中人脸区域的大小至少64*64像素。'."\n"
                .'- 单个请求的Body有8 M的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => '**认证状态说明**'."\n"
                ."\n"
                .'|VerifyStatus|原因说明                                                                                                                             |'."\n"
                .'|--------------|--------------------------------------------------------------------------------------------------------------------------------------|'."\n"
                .'| 1 | 认证通过。                                                                                                                          |'."\n"
                .'| 2 | 认证不通过，原因：实名校验不通过。                                                                                                  |'."\n"
                .'| 3 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别、身份证照片信息与需认证的身份证姓名不一致、提交的照片为非身份证照片。 |'."\n"
                .'| 4 | 认证不通过，可能原因：身份证照片模糊、光线问题造成字体无法识别、身份证照片信息与需认证的身份证号码不一致、提交的照片为非身份证照片。 |'."\n"
                .'| 5 | 认证不通过，可能原因：身份证照片上的有效期已过期（或即将过期）。                                                             |'."\n"
                .'| 6 | 认证不通过，可能原因：人脸与身份证头像不一致。                                                 |'."\n"
                .'| 7 | 认证不通过，可能原因：人脸与公安网照片不一致。                                         |'."\n"
                .'| 8 | 认证不通过，可能原因：提交的身份证照片非身份证原照片、未提交有效身份证照片。              |'."\n"
                .'| 9 | 认证不通过，可能原因：非账户本人操作。                                                 |'."\n"
                .'| 11| 认证不通过，可能原因：公安网照片缺失、公安网照片格式错误、公安网照片未找到人脸。                  |'."\n"
                .'| 12 | 认证不通过，可能原因：公安网系统异常，无法进行照片比对等可能。                                |',
            'extraInfo' => ' ',
        ],
        'CompareFaces' => [
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59094',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth6RJHVQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TargetImageType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片2的类型，取值：'."\n"
                            ."\n"
                            .'- **FacePic**： 用户人脸照'."\n"
                            .'- **IDPic**： 用户二代身份证芯片中的头像照（通常由二代身份证阅读仪设备读取并解码获得）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FacePic',
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'SourceImageType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片1的类型，取值：'."\n"
                            ."\n"
                            .'- **FacePic**： 用户人脸照'."\n"
                            .'- **IDPic**： 用户二代身份证芯片中的头像照（通常由二代身份证阅读仪设备读取并解码获得）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FacePic',
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'SourceImageValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片1的地址。具体请参见关于上传图片地址的说明。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'TargetImageValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '图片2的地址。具体请参见关于上传图片地址的说明。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg',
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误代码。',
                                'type' => 'string',
                                'example' => 'Error.InternalError',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '是否成功响应。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '人脸比对结果。',
                                'type' => 'object',
                                'properties' => [
                                    'SimilarityScore' => [
                                        'description' => '两个图片中人脸的相似程度。取值范围为\\[0, 100]，值越大相似度越高。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '98.7913',
                                    ],
                                    'ConfidenceThresholds' => [
                                        'description' => '人脸比对置信度阈值。返回内容是JSON Object，具体结构为`"key":"value"`。'."\n"
                                            ."\n"
                                            .'- `key`是误识率，即将其他人误识别为指定人员的概率。'."\n"
                                            .'- `value`是对应的阈值。'."\n"
                                            ."\n\n"
                                            .'> 关于示例中的人脸比对置信度阈值（confidenceThresholds）：'."\n"
                                            .'- `"0.0001": "90.07"`表示误识率为0.01%时的对应阈值为90.07。'."\n"
                                            .'- `"0.001": "80.01"`表示误识率为0.1%时的对应阈值为80.01。'."\n"
                                            .'- `"0.01": "70.02"`表示误识率为1%时的对应阈值为70.02。'."\n"
                                            ."\n"
                                            .'置信度阈值会根据不同图像和算法动态给出，请不要将置信度阈值持久化。',
                                        'type' => 'string',
                                        'example' => '{"0.0001":"90.07","0.001":"80.01","0.01":"70.02"}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Error.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ParamsMissing',
                        'errorMessage' => 'Please check if there is param empty in your imput',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ImageTypeEmpty',
                        'errorMessage' => 'The image type is empty',
                    ],
                    [
                        'errorCode' => 'InvalidParam.FacePicNotGiven',
                        'errorMessage' => 'At least one of the two given images should have a type of FacePic',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ImageValuePatternError',
                        'errorMessage' => 'The pattern of value of given image is not acceptable',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ImageTypeInvalid',
                        'errorMessage' => 'The image type is not valid',
                    ],
                    [
                        'errorCode' => 'Error.NoFaceDetected',
                        'errorMessage' => 'No face detected from given images',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ImageNotFound',
                        'errorMessage' => 'No images founded with given image address',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Error.NoPermissionAccess',
                        'errorMessage' => 'No permission to access our service',
                    ],
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'RAM caller has no permission',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Error.InternalError\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SimilarityScore\\": 98.7913,\\n    \\"ConfidenceThresholds\\": \\"{\\\\\\"0.0001\\\\\\":\\\\\\"90.07\\\\\\",\\\\\\"0.001\\\\\\":\\\\\\"80.01\\\\\\",\\\\\\"0.01\\\\\\":\\\\\\"70.02\\\\\\"}\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\'1.0\' encoding=\'UTF-8\'?>\\r\\n<CompareFacesResponse>\\r\\n    <Data>\\r\\n        <ConfidenceThresholds>{\\"0.0001\\":\\"90.07\\",\\"0.001\\":\\"80.01\\",\\"0.01\\":\\"70.02\\"}</ConfidenceThresholds>\\r\\n        <SimilarityScore>98.7913</SimilarityScore>\\r\\n    </Data>\\r\\n    <Success>true</Success>\\r\\n    <Code>200</Code>\\r\\n</CompareFacesResponse>\\r\\n\\t\\t\\t\\t\\t\\t","errorExample":""}]',
            'title' => '人脸比对纯服务端API',
            'summary' => '进行人脸比对',
            'description' => '请求方法：仅支持以HTTPS POST方法发送请求。'."\n"
                ."\n"
                .'接口描述：指定两张人脸图片进行比对，输出两张图片中人脸的相似度分值作为结果。'."\n"
                ."\n"
                .'- 指定的比对图片中至少应含有一个图片类型是人脸照（FacePic）。'."\n"
                .'- 一张图片中含有多个人脸时，算法会自动选取图片中占幅最大的人脸。'."\n"
                .'- 两张比对的图片中，如果其中一张检测不到人脸，系统会返回“未检测到人脸”的错误提示。'."\n"
                ."\n"
                .'在传入图片时，您需要上传图片对应的HTTP地址或base64编码。'."\n"
                ."\n"
                .'- HTTP地址：可访问的公网HTTP地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。'."\n"
                .'- base64编码：通过base64编码的图片，格式为`base64://<图片 base64 字符串>`。'."\n"
                ."\n"
                .'图片限制'."\n"
                ."\n"
                .'- 不支持本地图片的相对路径或绝对路径。'."\n"
                .'- 单张图片大小请控制在2M内，避免算法拉取超时。'."\n"
                .'- 单个请求的Body有8M的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。'."\n"
                .'- 使用base64传递图片时，接口的请求方法需要改成 POST；图片base64字符串需要去掉头部描述，如`data:image/png;base64`,。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetectFaceAttributes' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '59162',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth6RJHVQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MaterialValue',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待检测照片，格式描述见上传图片地址的说明。同一张图片最多检测其中的5张人脸。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '使用实人认证服务的业务场景标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RPBasicTest',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误代码。',
                                'type' => 'string',
                                'example' => 'Error.InternalError',
                            ],
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Success' => [
                                'description' => '是否成功响应。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'ImgHeight' => [
                                        'description' => '原图高度，单位为像素。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1920',
                                    ],
                                    'ImgWidth' => [
                                        'description' => '原图宽度，单位为像素。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1080',
                                    ],
                                    'FaceInfos' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'FaceAttributesDetectInfo' => [
                                                'description' => '人脸检测结果。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FaceRect' => [
                                                            'description' => '人脸在原图中的位置。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Left' => [
                                                                    'description' => '人脸矩形左上角距原图左边的距离，单位为像素。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '354',
                                                                ],
                                                                'Top' => [
                                                                    'description' => '人脸矩形左上角距原图上边的距离，单位为像素。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '453',
                                                                ],
                                                                'Width' => [
                                                                    'description' => '人脸矩形的宽度。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '473',
                                                                ],
                                                                'Height' => [
                                                                    'description' => '人脸矩形的高度。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '473',
                                                                ],
                                                            ],
                                                        ],
                                                        'FaceAttributes' => [
                                                            'description' => '人脸属性。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Glasses' => [
                                                                    'description' => '是否戴眼镜。取值：'."\n"
                                                                        ."\n"
                                                                        .'- **None**：未戴眼镜'."\n"
                                                                        .'- **Wear**：戴普通眼镜'."\n"
                                                                        .'- **Sunglass**：戴墨镜',
                                                                    'type' => 'string',
                                                                    'example' => 'None',
                                                                ],
                                                                'Facequal' => [
                                                                    'description' => '表示分数，取值范围：0~100。分数越高，质量越好，建议您使用大于或者等于50分认为质量合格。',
                                                                    'type' => 'number',
                                                                    'format' => 'float',
                                                                    'example' => '60',
                                                                ],
                                                                'Integrity' => [
                                                                    'description' => '表示分数，取值范围：0~100。分数越高，人脸越完整，建议您使用大于等于70分为完整度合格。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '70',
                                                                ],
                                                                'Facetype' => [
                                                                    'description' => '是否人脸。取值：'."\n"
                                                                        ."\n"
                                                                        .'- **None**：不是人脸'."\n"
                                                                        .'- **Face**：人脸'."\n"
                                                                        .'- **Profile**：侧脸（左右转头超过30°）'."\n"
                                                                        ."\n"
                                                                        .'> 若没有检测到人脸，接口返回的faceInfos即为空；这里的None代表检测到人脸，但认为是卡通或宠物等。',
                                                                    'type' => 'string',
                                                                    'example' => 'Face',
                                                                ],
                                                                'Respirator' => [
                                                                    'description' => '是否戴口罩。取值：'."\n"
                                                                        ."\n"
                                                                        .'- Wear：表示戴口罩。'."\n"
                                                                        ."\n"
                                                                        .'- None：表示没有戴口罩。'."\n"
                                                                        ."\n"
                                                                        .' ',
                                                                    'type' => 'string',
                                                                    'example' => 'Wear',
                                                                ],
                                                                'Blur' => [
                                                                    'description' => '人脸模糊度，分值越大越模糊。通常≥2.0已较模糊，建议根据实际业务数据测试调整。',
                                                                    'type' => 'number',
                                                                    'format' => 'float',
                                                                    'example' => '0.1419367790222168',
                                                                ],
                                                                'Smiling' => [
                                                                    'description' => '是否笑脸。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'Value' => [
                                                                            'description' => '笑脸分值。',
                                                                            'type' => 'number',
                                                                            'format' => 'float',
                                                                            'example' => '97',
                                                                        ],
                                                                        'Threshold' => [
                                                                            'description' => '笑脸阈值。',
                                                                            'type' => 'number',
                                                                            'format' => 'float',
                                                                            'example' => '95',
                                                                        ],
                                                                    ],
                                                                ],
                                                                'Headpose' => [
                                                                    'description' => '人脸姿态。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'PitchAngle' => [
                                                                            'description' => '抬头角度，单位为度。',
                                                                            'type' => 'number',
                                                                            'format' => 'float',
                                                                            'example' => '-1.5683923959732056',
                                                                        ],
                                                                        'RollAngle' => [
                                                                            'description' => '左右歪头角度，单位为度。',
                                                                            'type' => 'number',
                                                                            'format' => 'float',
                                                                            'example' => '7.163370132446289',
                                                                        ],
                                                                        'YawAngle' => [
                                                                            'description' => '左右转头角度，单位为度。',
                                                                            'type' => 'number',
                                                                            'format' => 'float',
                                                                            'example' => '-6.925303936004639',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Error.InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error',
                    ],
                    [
                        'errorCode' => 'InvalidParam.ParamsMissing',
                        'errorMessage' => 'Please check if there is param empty in your imput',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesParamError',
                        'errorMessage' => 'detectFaceAttributes param error',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesHttpError',
                        'errorMessage' => 'detectFaceAttributes fail to get image from http',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesOssError',
                        'errorMessage' => 'detectFaceAttributes fail to get image from oss',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesAlgServiceError',
                        'errorMessage' => 'detectFaceAttributes algService error',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesAlgServieReturnError',
                        'errorMessage' => 'detectFaceAttributes algService return error',
                    ],
                    [
                        'errorCode' => 'Error.DetectFaceAttributesBase64Error',
                        'errorMessage' => 'detectFaceAttributes fail to get image from base64',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Error.NoPermissionAccess',
                        'errorMessage' => 'No permission to access our service',
                    ],
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'RAM caller has no permission',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"Error.InternalError\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ImgHeight\\": 1920,\\n    \\"ImgWidth\\": 1080,\\n    \\"FaceInfos\\": {\\n      \\"FaceAttributesDetectInfo\\": [\\n        {\\n          \\"FaceRect\\": {\\n            \\"Left\\": 354,\\n            \\"Top\\": 453,\\n            \\"Width\\": 473,\\n            \\"Height\\": 473\\n          },\\n          \\"FaceAttributes\\": {\\n            \\"Glasses\\": \\"None\\",\\n            \\"Facequal\\": 60,\\n            \\"Integrity\\": 70,\\n            \\"Facetype\\": \\"Face\\",\\n            \\"Respirator\\": \\"Wear\\",\\n            \\"Blur\\": 0.1419367790222168,\\n            \\"Smiling\\": {\\n              \\"Value\\": 97,\\n              \\"Threshold\\": 95\\n            },\\n            \\"Headpose\\": {\\n              \\"PitchAngle\\": -1.5683923959732056,\\n              \\"RollAngle\\": 7.163370132446289,\\n              \\"YawAngle\\": -6.925303936004639\\n            }\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DetectFaceAttributesResponse>\\n\\t<Code>200</Code>\\n\\t<Data>\\n\\t\\t<FaceInfos>\\n\\t\\t\\t<FaceAttributesDetectInfo>\\n\\t\\t\\t\\t<element>\\n\\t\\t\\t\\t\\t<FaceAttributes>\\n\\t\\t\\t\\t\\t\\t<Blur>0.14193678</Blur>\\n\\t\\t\\t\\t\\t\\t<Facetype>Face</Facetype>\\n\\t\\t\\t\\t\\t\\t<Glasses>None</Glasses>\\n\\t\\t\\t\\t\\t\\t<Headpose>\\n\\t\\t\\t\\t\\t\\t\\t<PitchAngle>-1.5683924</PitchAngle>\\n\\t\\t\\t\\t\\t\\t\\t<RollAngle>7.16337</RollAngle>\\n\\t\\t\\t\\t\\t\\t\\t<YawAngle>-6.925304</YawAngle>\\n\\t\\t\\t\\t\\t\\t</Headpose>\\n\\t\\t\\t\\t\\t\\t<Smiling></Smiling>\\n\\t\\t\\t\\t\\t</FaceAttributes>\\n\\t\\t\\t\\t\\t<FaceRect>\\n\\t\\t\\t\\t\\t\\t<Height>473</Height>\\n\\t\\t\\t\\t\\t\\t<Left>354</Left>\\n\\t\\t\\t\\t\\t\\t<Top>453</Top>\\n\\t\\t\\t\\t\\t\\t<Width>473</Width>\\n\\t\\t\\t\\t\\t</FaceRect>\\n\\t\\t\\t\\t</element>\\n\\t\\t\\t</FaceAttributesDetectInfo>\\n\\t\\t</FaceInfos>\\n\\t\\t<ImgHeight>1920</ImgHeight>\\n\\t\\t<ImgWidth>1080</ImgWidth>\\n\\t</Data>\\n\\t<Success>true</Success>\\n    </DetectFaceAttributesResponse>","errorExample":""}]',
            'title' => '人脸属性纯服务端API',
            'summary' => '检测人脸照片中的有效性属性',
            'description' => '请求方法：仅支持以HTTPS POST方法发送请求。'."\n"
                ."\n"
                .'接口描述：对输入照片中人脸的有效性相关属性进行检测，便于业务方判定该照片是否满足自身业务留存或比对的要求。目前支持的人脸有效性相关属性有：是否人脸、是否模糊、是否戴眼镜、脸部姿态、是否笑脸等。'."\n"
                ."\n"
                .'上传图片地址的说明：在传入图片时，您需要上传其对应的HTTP、OSS地址或Base64编码。'."\n"
                ."\n"
                .'- HTTP地址：可访问的公网HTTP地址。例如，`http://image-demo.img-cn-hangzhou.aliyuncs.com/example.jpg`。'."\n"
                .'- Base64编码：通过base64编码的图片，格式为`base64://<图片 base64 字符串>`。'."\n"
                ."\n"
                .'图片限制：'."\n"
                ."\n"
                .'- 不支持本地图片的相对路径或绝对路径。'."\n"
                .'- 单张图片大小请控制在2 MB内，避免算法拉取超时。'."\n"
                .'- 单个请求的Body有8 MB的大小限制，请计算好请求中所有图片和其他信息的大小，不要超限。'."\n"
                .'- 使用Base64传递图片时，接口的请求方法需要改成 POST；图片Base64字符串需要去掉头部描述，如`data:image/png;base64`。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => "\n"
                ."\n",
            'extraInfo' => ' ',
        ],
        'AIGCFaceVerify' => [
            'summary' => 'AIGC生成图片检测，输出检测标识',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证场景ID。该ID在控制台创建认证场景后自动生成。关于如何创建认证场景，请参见添加认证场景。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100000xxxx',
                    ],
                ],
                [
                    'name' => 'OuterOrderNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户服务端自定义的业务唯一标识，用于后续定位排查问题。取值最长为32位长度的字母数字组合，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品方案',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LR_FR_AIGC',
                    ],
                ],
                [
                    'name' => 'FaceContrastPicture',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '照片Base64编码。'."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx'."\n",
                    ],
                ],
                [
                    'name' => 'FaceContrastPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人像地址，公网可访问的HTTP、HTTPS链接。'."\n"
                            ."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cn-shanghai-aliyun-cloudauth-xxxxxx.oss-cn-shanghai.aliyuncs.com/verify/xxxxx/xxxxx.jpeg',
                    ],
                ],
                [
                    'name' => 'OssBucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已授权OSS空间的Bucket名 。'."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai-aliyun-cloudauth-xxxxx'."\n",
                    ],
                ],
                [
                    'name' => 'OssObjectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '已授权OSS空间的文件名。'."\n"
                            .'> 在FaceContrastPicture、FaceContrastPictureUrl、OSS三种图片传入方式中，选择其中一种传入即可。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '	'."\n"
                            .'verify/xxxxx/xxxxxx.jpeg'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'Message' => [
                                'description' => '消息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码：200为成功，其他为失败。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'ResultObject' => [
                                'description' => '返回的结果',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '认证结果。取值：'."\n"
                                            ."\n"
                                            .'●  Y：AIGC生成人脸。'."\n"
                                            ."\n"
                                            .'●  N：未检测到',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Y' => 'AIGC生成人脸',
                                            'N' => '非AIGC生成人脸',
                                        ],
                                        'example' => 'Y',
                                    ],
                                    'Score' => [
                                        'description' => '检测的分数',
                                        'type' => 'string',
                                        'example' => '1.0000',
                                    ],
                                    'CertifyId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"200\\",\\n  \\"ResultObject\\": {\\n    \\"Result\\": \\"Y\\",\\n    \\"Score\\": \\"1.0000\\",\\n    \\"CertifyId\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => 'AIGC生成图片检测',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cloudauth.aliyuncs.com',
        ],
    ],
];
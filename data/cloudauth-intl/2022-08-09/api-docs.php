<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Cloudauth-intl',
        'version' => '2022-08-09',
    ],
    'directories' => [
        [
            'id' => 182315,
            'title' => 'KYC',
            'type' => 'directory',
            'children' => [
                'Initialize',
                'CheckResult',
                'FaceCompare',
            ],
        ],
        [
            'id' => 182316,
            'title' => 'AML',
            'type' => 'directory',
            'children' => [
                'DescribeRiskScore',
                'DescribeAddressOverview',
                'DescribeAddressLabels',
                'DescribeMaliciousAddress',
                'DescribeTransactionsList',
            ],
        ],
        [
            'id' => 187491,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'FaceLiveness',
                'DocOcr',
                'FraudResultCallBack',
                'DeleteVerifyResult',
                'EkycVerify',
                'DescribeWeb3AddressLabels',
                'DescribeWeb3RiskScore',
                'DescribeWeb3TransactionLabels',
                'Id2MetaVerifyIntl',
                'Mobile3MetaVerifyIntl',
            ],
        ],
        [
            'id' => 187503,
            'title' => '已废弃',
            'type' => 'directory',
            'children' => [
                'CardOcr',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'Initialize' => [
            'summary' => '初始化。',
            'methods' => [
                'post',
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
                'abilityTreeCode' => '149600',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth6RJHVQ',
                    'FEATUREcloudauthCW0JNH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要接入的产品方案。取值为'."\n"
                            ."\n"
                            .'- KYC_GLOBAL(eKYC产品方案)'."\n"
                            .'- FV_GLOBAL(活体人脸验证)'."\n"
                            .'- FL_GLOBAL(活体检测)'."\n"
                            .'- IDR_GLOBAL(单证件验证)'."\n"
                            .'- OCR_GLOBAL(单证件OCR)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'KYC_GLOBAL',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a***353888',
                    ],
                ],
                [
                    'name' => 'MetaInfo',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Metainfo环境参数，需要通过客户端SDK获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"bioMetaInfo\\":\\"4.1.0:2916352,0\\",\\"deviceType\\":\\"web\\",\\"ua\\":\\"Mozilla/5.0 (Macintosh',
                    ],
                ],
                [
                    'name' => 'DocType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件类型，以8位数字组合作为唯一标识'."\n"
                            .'注：只有当ProductCode为KYC_GLOBAL、OCR_GLOBAL、IDR_GLOBAL需传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '​01560000'."\n"
                            ."\n",
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您自定义的用户ID，或者其他可以识别特定用户的标识，例如手机号码、邮箱地址等。强烈建议对该字段的值进行预先脱敏，例如对值进行哈希处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1221****6543',
                    ],
                ],
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景码。（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123****123',
                    ],
                ],
                [
                    'name' => 'FacePictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '人脸照片Base64编码。如果您选择FacePictureBase64方式传入人脸照片，请注意检查照片大小，不要传入超过1 MB的照片。'."\n"
                            .'当productCode为FV_GLOBAL时，和参数FacePictureUrl选择其中之一传入',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Base64',
                    ],
                ],
                [
                    'name' => 'FacePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸照片地址。公网可访问的HTTP、HTTPS链接。当productCode为FV_GLOBAL时，和参数FacePictureBase选择其中之一传入',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否裁剪。（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'Ocr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启OCR。（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'IdFaceQuality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸图片质量。（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'IdSpoof',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否启用证书防伪检测。（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'ReturnUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '端侧回调地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http*****',
                    ],
                ],
                [
                    'name' => 'Authorize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启身份权威核验，目前仅适用于中国大陆二代身份证（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'DocScanMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件采集拍照模式。'."\n"
                            ."\n"
                            .'- manual：手动拍照。'."\n"
                            .'- auto：自动拍照（默认）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'manual',
                    ],
                ],
                [
                    'name' => 'ProductFlow',
                    'in' => 'query',
                    'schema' => [
                        'description' => '支持卡证和人脸顺序编排：'."\n"
                            ."\n"
                            .'- DOC_FACE（默认）'."\n"
                            .'- FACE_DOC'."\n"
                            ."\n"
                            .'注：只有当ProductCode为KYC_GLOBAL需传',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DOC_FACE',
                    ],
                ],
                [
                    'name' => 'CallbackUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证结果的回调通知地址，回调请求方式默认为GET，回调地址必须以https开头。平台在完成认证后会回调该地址，并自动添加transactionId、passed和subcode字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.aliyun.com?callbackToken=1000004826&transactionId=shaxxxx&passed=Y&subCode=200',
                    ],
                ],
                [
                    'name' => 'CallbackToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '安全Token，用于防重复、防篡改校验。如果传入该参数会在回调地址显示CallbackToken字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7ca5c68d869344ea8eeb30cdfd544544-6358700',
                    ],
                ],
                [
                    'name' => 'LanguageConfig',
                    'in' => 'query',
                    'schema' => [
                        'description' => '语言配置（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'en',
                    ],
                ],
                [
                    'name' => 'SecurityLevel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代表认证流程不同安全水位的模式，可选值：'."\n"
                            ."\n"
                            .'01：普通模式（默认）。'."\n"
                            .'02：安全模式，相对严格的模式，可用于高风险场景（IDV产品入参）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '01',
                    ],
                ],
                [
                    'name' => 'StyleConfig',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExperienceCode',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '4EB35****87EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证ID',
                                        'type' => 'string',
                                        'example' => '08573be80f944d95ac812e019e3655a8',
                                    ],
                                    'ClientCfg' => [
                                        'description' => '客户端配置',
                                        'type' => 'string',
                                        'example' => '***',
                                    ],
                                    'TransactionUrl' => [
                                        'description' => 'Web认证Url',
                                        'type' => 'string',
                                        'example' => 'http****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"ClientCfg\\": \\"***\\",\\n    \\"TransactionUrl\\": \\"http****\\"\\n  }\\n}","type":"json"}]',
            'title' => '初始化',
        ],
        'CheckResult' => [
            'summary' => '查询认证结果。',
            'methods' => [
                'post',
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
                'operationType' => 'get',
                'abilityTreeCode' => '149753',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthCS0SDG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'djs20d***9-dsskc',
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4ab0b***cbde97',
                    ],
                ],
                [
                    'name' => 'IsReturnImage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回图片。'."\n"
                            .'- Y：返回'."\n"
                            .'- N：不返回',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'N',
                    ],
                ],
                [
                    'name' => 'ExtraImageControlList',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回附加信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '***',
                    ],
                ],
                [
                    'name' => 'ReturnFiveCategorySpoofResult',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回防伪检测结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'EkycResult' => [
                                        'description' => '认证结果。',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'ExtBasicInfo' => [
                                        'description' => '扩展基础信息。',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'ExtFaceInfo' => [
                                        'description' => '人脸信息。',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'ExtIdInfo' => [
                                        'description' => 'ID信息。',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'ExtRiskInfo' => [
                                        'description' => '风险信息。',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过。'."\n"
                                            ."\n"
                                            .'- Y：通过。'."\n"
                                            .'- N：不通过。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'SubCode' => [
                                        'description' => '子结果码。',
                                        'type' => 'string',
                                        'example' => '***',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"EkycResult\\": \\"**\\",\\n    \\"ExtBasicInfo\\": \\"**\\",\\n    \\"ExtFaceInfo\\": \\"**\\",\\n    \\"ExtIdInfo\\": \\"**\\",\\n    \\"ExtRiskInfo\\": \\"**\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"***\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询认证结果',
        ],
        'FaceCompare' => [
            'summary' => '通过人脸识别技术，可以对传入的两张人脸图片进行比对验证，返回人脸对比结果和相似度分值。',
            'methods' => [
                'post',
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
                'abilityTreeCode' => '165986',
                'abilityTreeNodes' => [
                    'FEATUREcloudauth0KJCLK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'SourceFacePicture',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceFacePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸图片的HTTPS或HTTP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://***face1.jpeg',
                    ],
                ],
                [
                    'name' => 'TargetFacePicture',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetFacePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '底库人脸图片的HTTPS或HTTP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://***face2.jpeg',
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
                                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码。'."\n"
                                    ."\n"
                                    .'200：表示成功。'."\n"
                                    .'其它：表示错误码。错误码详情，请参见错误码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识。',
                                        'type' => 'string',
                                        'example' => '08573be80f944d95ac812e019e3655a8',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过。'."\n"
                                            ."\n"
                                            .'- Y：通过。'."\n"
                                            .'- N：不通过。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'FaceComparisonScore' => [
                                        'description' => '认证过程中所提交的人脸照片和人脸留底图片上人脸的比对分，取值范围：**0**~**100**。',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '98',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"FaceComparisonScore\\": 98\\n  }\\n}","type":"json"}]',
            'title' => '人脸比对',
        ],
        'DescribeRiskScore' => [
            'summary' => '查询地址风险。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a***353888',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0xabds***djskjds',
                    ],
                ],
                [
                    'name' => 'Coin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '币种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETH',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否调用成功：'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'Score' => [
                                        'description' => '风险评分',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'DetailList' => [
                                        'description' => '明细数组',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '明细数组',
                                            'type' => 'string',
                                            'example' => 'Malicious Address',
                                        ],
                                    ],
                                    'HackingEvent' => [
                                        'description' => '违规行为',
                                        'type' => 'string',
                                        'example' => 'MMFinance Exploiter',
                                    ],
                                    'RiskLevel' => [
                                        'description' => '风险等级',
                                        'type' => 'string',
                                        'example' => 'Severe',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Score\\": 100,\\n    \\"DetailList\\": [\\n      \\"Malicious Address\\"\\n    ],\\n    \\"HackingEvent\\": \\"MMFinance Exploiter\\",\\n    \\"RiskLevel\\": \\"Severe\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询地址风险',
        ],
        'DescribeAddressOverview' => [
            'summary' => '查询地址概览。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a***353888',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0xabds***djskjds',
                    ],
                ],
                [
                    'name' => 'Coin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '币种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETH',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'Balance' => [
                                        'description' => '余额',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '54.4216',
                                    ],
                                    'TxsCount' => [
                                        'description' => '交易数量',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1697',
                                    ],
                                    'FirstSeen' => [
                                        'description' => '首次交易时间，unix timestamp格式。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1441800674',
                                    ],
                                    'LastSeen' => [
                                        'description' => '最后一次交易时间，unix timestamp格式。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1682056727',
                                    ],
                                    'TotalReceived' => [
                                        'description' => '收到的总金额',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '916263.8',
                                    ],
                                    'TotalSpent' => [
                                        'description' => '发出的总金额',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '916205.4',
                                    ],
                                    'ReceivedTxsCount' => [
                                        'description' => '收到的总交易笔数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1470',
                                    ],
                                    'SpentTxsCount' => [
                                        'description' => '发出的总交易笔数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '227',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Balance\\": 54.4216,\\n    \\"TxsCount\\": 1697,\\n    \\"FirstSeen\\": 1441800674,\\n    \\"LastSeen\\": 1682056727,\\n    \\"TotalReceived\\": 916263.8,\\n    \\"TotalSpent\\": 916205.4,\\n    \\"ReceivedTxsCount\\": 1470,\\n    \\"SpentTxsCount\\": 227\\n  }\\n}","type":"json"}]',
            'title' => '查询地址概览',
        ],
        'DescribeAddressLabels' => [
            'summary' => '查询地址标签。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dso9322***dsjsd22',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0xabds8292***dskkds',
                    ],
                ],
                [
                    'name' => 'Coin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '币种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETH',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '结果',
                                'type' => 'object',
                                'properties' => [
                                    'LabelList' => [
                                        'description' => '结果',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签',
                                            'type' => 'string',
                                            'example' => 'la***o.eth',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LabelList\\": [\\n      \\"la***o.eth\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询地址标签',
        ],
        'DescribeMaliciousAddress' => [
            'summary' => '恶意钱包地址库接口。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Start',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-07-20',
                    ],
                ],
                [
                    'name' => 'End',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2017-08-20',
                    ],
                ],
                [
                    'name' => 'Coin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '币种(支持：BTC、ETH、EOS、XRP、TRX、USDT)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BTC',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'djs20dsjk2-dsjd29-dsskc',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '返回结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回结果。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Coin' => [
                                            'description' => '币种',
                                            'type' => 'string',
                                            'example' => 'ETH',
                                        ],
                                        'Address' => [
                                            'description' => '钱包地址加密hash',
                                            'type' => 'string',
                                            'example' => 'f6d239ff***df816',
                                        ],
                                        'AddTime' => [
                                            'description' => '拉黑时间',
                                            'type' => 'string',
                                            'example' => '2017-07-18 00:00:00',
                                        ],
                                        'Tag' => [
                                            'description' => '恶意行为',
                                            'type' => 'string',
                                            'example' => '实施钓鱼活动',
                                        ],
                                        'Detail' => [
                                            'description' => '恶意行为说明',
                                            'type' => 'string',
                                            'example' => 'FAKE_Coindash_2',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"Coin\\": \\"ETH\\",\\n      \\"Address\\": \\"f6d239ff***df816\\",\\n      \\"AddTime\\": \\"2017-07-18 00:00:00\\",\\n      \\"Tag\\": \\"实施钓鱼活动\\",\\n      \\"Detail\\": \\"FAKE_Coindash_2\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '恶意钱包地址库',
        ],
        'DescribeTransactionsList' => [
            'summary' => '查询交易列表。',
            'methods' => [
                'post',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a***353888',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0xabds***djskjds',
                    ],
                ],
                [
                    'name' => 'Coin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '币种。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ETH',
                    ],
                ],
                [
                    'name' => 'StartTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的开始时间戳，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1682232649',
                    ],
                ],
                [
                    'name' => 'EndTimestamp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询的结束时间戳，单位：秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1682235649',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '交易类型。可选值 “in”、“out”、“all”，默认“all”。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'all' => 'all',
                            'in' => 'in',
                            'out' => 'out',
                        ],
                        'example' => 'in',
                    ],
                ],
                [
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Code' => [
                                'description' => '返回码。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Page' => [
                                        'description' => '当前页码。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6',
                                    ],
                                    'TransactionsOnPage' => [
                                        'description' => '当前页总交易数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '300',
                                    ],
                                    'Out' => [
                                        'description' => '转出交易列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Address' => [
                                                    'description' => '交易地址。',
                                                    'type' => 'string',
                                                    'example' => '0xd90e2***b90ad053324f31b',
                                                ],
                                                'TxHashList' => [
                                                    'description' => '交易hash列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '交易hash。',
                                                        'type' => 'string',
                                                        'example' => '0x7e87c61d***a12a',
                                                    ],
                                                ],
                                                'Amount' => [
                                                    'description' => '交易金额。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '743',
                                                ],
                                                'Type' => [
                                                    'description' => '类型。'."\n"
                                                        .'- 1: EOA address / bitcoin address'."\n"
                                                        .'- 2: malicious address'."\n"
                                                        .'- 3: entity label address'."\n"
                                                        .'- 4: contract address',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Label' => [
                                                    'description' => '标签。',
                                                    'type' => 'string',
                                                    'example' => 'Tor***uter',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'In' => [
                                        'description' => '转入交易列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Address' => [
                                                    'description' => '交易地址。',
                                                    'type' => 'string',
                                                    'example' => '0xd90e2***b90ad053324f31b'."\n",
                                                ],
                                                'TxHashList' => [
                                                    'description' => '交易hash列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '交易hash。',
                                                        'type' => 'string',
                                                        'example' => '0x7e87c61d***a12a'."\n",
                                                    ],
                                                ],
                                                'Amount' => [
                                                    'description' => '交易金额。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.0845',
                                                ],
                                                'Type' => [
                                                    'description' => '类型。'."\n"
                                                        ."\n"
                                                        .'1: EOA address / bitcoin address'."\n"
                                                        .'2: malicious address'."\n"
                                                        .'3: entity label address'."\n"
                                                        .'4: contract address',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Label' => [
                                                    'description' => '标签。',
                                                    'type' => 'string',
                                                    'example' => 'bi***ce',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Page\\": 1,\\n    \\"TotalPages\\": 6,\\n    \\"TransactionsOnPage\\": 300,\\n    \\"Out\\": [\\n      {\\n        \\"Address\\": \\"0xd90e2***b90ad053324f31b\\",\\n        \\"TxHashList\\": [\\n          \\"0x7e87c61d***a12a\\"\\n        ],\\n        \\"Amount\\": 743,\\n        \\"Type\\": 1,\\n        \\"Label\\": \\"Tor***uter\\"\\n      }\\n    ],\\n    \\"In\\": [\\n      {\\n        \\"Address\\": \\"0xd90e2***b90ad053324f31b\\\\n\\",\\n        \\"TxHashList\\": [\\n          \\"0x7e87c61d***a12a\\\\n\\"\\n        ],\\n        \\"Amount\\": 0.0845,\\n        \\"Type\\": 1,\\n        \\"Label\\": \\"bi***ce\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询交易列表',
        ],
        'FaceLiveness' => [
            'summary' => '静默活体纯服务端能力Api',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '175619',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FACE_LIVENESS_MIN',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户用户ID，或可用于识别特定用户的其他标识符，例如手机号码、电子邮件地址等。强烈建议对userId字段的值进行预脱敏处理，例如对该值进行hash处理',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'FacePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸照片地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg',
                    ],
                ],
                [
                    'name' => 'FacePictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FaceQuality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否输出人脸质量分，默认不允许，T/F'."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许裁剪，默认不允许，T/F'."\n"
                            ."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
                    ],
                ],
                [
                    'name' => 'Occlusion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行遮挡检测，默认不允许T/F'."\n"
                            ."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
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
                                'description' => '阿里云为该请求生成的唯一标识符',
                                'type' => 'string',
                                'example' => '42EA58CA-5DF4-55D5-82C4-5E7A40DA62BA',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回结果的提示信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识',
                                        'type' => 'string',
                                        'example' => '08573be80f944d95ac812e019e3655a8',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过'."\n"
                                            ."\n"
                                            .'- Y：通过'."\n"
                                            .'- N：不通过',
                                        'type' => 'string',
                                        'example' => 'N',
                                    ],
                                    'SubCode' => [
                                        'description' => '子结果码',
                                        'type' => 'string',
                                        'example' => '205',
                                    ],
                                    'ExtFaceInfo' => [
                                        'description' => '人脸结果信息',
                                        'type' => 'object',
                                        'properties' => [
                                            'FaceQualityScore' => [
                                                'description' => '人脸质量分(0～100)，当且仅当入参质量分开关打开时返回',
                                                'type' => 'number',
                                                'format' => 'double',
                                                'example' => '87.19',
                                            ],
                                            'OcclusionResult' => [
                                                'description' => '遮挡检测结果,Y (遮挡) /N (无遮挡),当且仅当遮挡检测开关打开时返回',
                                                'type' => 'string',
                                                'example' => 'Y',
                                            ],
                                            'FaceAttack' => [
                                                'description' => '活体检测结果，Y（攻击）/N（正常）',
                                                'type' => 'string',
                                                'example' => 'Y',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"42EA58CA-5DF4-55D5-82C4-5E7A40DA62BA\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"N\\",\\n    \\"SubCode\\": \\"205\\",\\n    \\"ExtFaceInfo\\": {\\n      \\"FaceQualityScore\\": 87.19,\\n      \\"OcclusionResult\\": \\"Y\\",\\n      \\"FaceAttack\\": \\"Y\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '静默活体纯服务端能力',
        ],
        'DocOcr' => [
            'summary' => '卡证OCR纯服务端能力Api',
            'methods' => [
                'post',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '181950',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthCW0JNH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dso9322***dsjsd22',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务中自定义的用户ID，请保持唯一',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'IdOcrPictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IdOcrPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件正面图片URL',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg'."\n",
                    ],
                ],
                [
                    'name' => 'DocType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00000006',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code',
                        'type' => 'string',
                        'required' => false,
                        'example' => '产品方案类型ID_OCR_MIN',
                    ],
                ],
                [
                    'name' => 'Ocr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行证件OCR'."\n"
                            .'- T：表示需要证件OCR'."\n"
                            .'- F：表示不需要',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
                    ],
                ],
                [
                    'name' => 'IdFaceQuality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行证脸质量检测'."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F',
                    ],
                ],
                [
                    'name' => 'Spoof',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启防伪检测'."\n"
                            .'- T：表示开启防伪'."\n"
                            .'- F：表示关闭',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F',
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
                                'example' => '86C40EC3-5940-5F47-995C-BFE90B70E540',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识',
                                        'type' => 'string',
                                        'example' => '08573be80f944d95ac812e019e3655a8',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过。'."\n"
                                            ."\n"
                                            .'- Y：通过'."\n"
                                            .'- N：不通过',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'SubCode' => [
                                        'description' => '子结果码',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'ExtIdInfo' => [
                                        'description' => '卡证识别结果	只有当接口响应成功时返回',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'  "idFaceQualityScore": 98.0'."\n"
                                            .'  "ocrIdInfo": {'."\n"
                                            .'    "expiryDate": "",'."\n"
                                            .'    "originOfIssue": "公安部出入境管理局",'."\n"
                                            .'    "englishName": "LI SI",'."\n"
                                            .'    "sex": "男",'."\n"
                                            .'    "name": "李四",'."\n"
                                            .'    "idNumber": "H11111112",'."\n"
                                            .'    "issueDate": "2013-01-02",'."\n"
                                            .'    "birthDate": "1990-02-21"'."\n"
                                            .'  },'."\n"
                                            .'  "spoofInfo": {'."\n"
                                            .'    "spoofResult": "Y",'."\n"
                                            .'    "spoofType": ['."\n"
                                            .'      "SCREEN_REMARK"'."\n"
                                            .'    ]'."\n"
                                            .'  }'."\n"
                                            .'}',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"86C40EC3-5940-5F47-995C-BFE90B70E540\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"ExtIdInfo\\": \\"{\\\\n  \\\\\\"idFaceQualityScore\\\\\\": 98.0\\\\n  \\\\\\"ocrIdInfo\\\\\\": {\\\\n    \\\\\\"expiryDate\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"originOfIssue\\\\\\": \\\\\\"公安部出入境管理局\\\\\\",\\\\n    \\\\\\"englishName\\\\\\": \\\\\\"LI SI\\\\\\",\\\\n    \\\\\\"sex\\\\\\": \\\\\\"男\\\\\\",\\\\n    \\\\\\"name\\\\\\": \\\\\\"李四\\\\\\",\\\\n    \\\\\\"idNumber\\\\\\": \\\\\\"H11111112\\\\\\",\\\\n    \\\\\\"issueDate\\\\\\": \\\\\\"2013-01-02\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\": \\\\\\"1990-02-21\\\\\\"\\\\n  },\\\\n  \\\\\\"spoofInfo\\\\\\": {\\\\n    \\\\\\"spoofResult\\\\\\": \\\\\\"Y\\\\\\",\\\\n    \\\\\\"spoofType\\\\\\": [\\\\n      \\\\\\"SCREEN_REMARK\\\\\\"\\\\n    ]\\\\n  }\\\\n}\\"\\n  }\\n}","type":"json"}]',
            'title' => '卡证OCR纯服务端能力Api',
        ],
        'FraudResultCallBack' => [
            'summary' => 'ekyc-global防伪回调接口',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '184671',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthCW0JNH',
                    'FEATUREcloudauthWSJE4H',
                    'FEATUREcloudauthHOSIED',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CertifyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '实人认证唯一标识,对应蚂蚁的verifyId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'shs2b27333914876c01de4cb22f5841f',
                    ],
                ],
                [
                    'name' => 'ResultCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '防伪是否通过'."\n"
                            .'- PASS (通过)'."\n"
                            .'- REJECT (不通过)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PASS',
                    ],
                ],
                [
                    'name' => 'VerifyDeployEnv',
                    'in' => 'query',
                    'schema' => [
                        'description' => '环境路由参数'."\n"
                            .'- staging (预发环境)'."\n"
                            .'- production (线上环境)',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'production',
                    ],
                ],
                [
                    'name' => 'ExtParams',
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
                                'example' => '4EB35****87EBA1',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
            'title' => '防伪回调接口',
        ],
        'DeleteVerifyResult' => [
            'summary' => '删除用户认证记录相关数据',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TransactionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证请求的唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4ab0b***cbde97',
                    ],
                ],
                [
                    'name' => 'DeleteAfterQuery',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除数据时是否依赖查询接口',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y / N',
                    ],
                ],
                [
                    'name' => 'DeleteType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除数据的类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Img / Text / All',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次请求的ID',
                                'type' => 'string',
                                'example' => '4EB35****87EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识',
                                        'type' => 'string',
                                        'example' => '4ab0b***cbde97',
                                    ],
                                    'DeleteResult' => [
                                        'description' => '删除的结果。其中Y表示删除成功，N表示删除失败',
                                        'type' => 'string',
                                        'example' => 'Y/N',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"4ab0b***cbde97\\",\\n    \\"DeleteResult\\": \\"Y/N\\"\\n  }\\n}","type":"json"}]',
            'title' => '认证记录逻辑删除接口',
        ],
        'EkycVerify' => [
            'summary' => 'ekyc方案纯服务端接口',
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
                'abilityTreeCode' => '190721',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthHJ4WQV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eKYC_MIN',
                    ],
                ],
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '您自定义的用户ID，或者其他可以识别特定用户的标识，例如：手机号码、邮箱地址等。强烈建议对该字段的值进行预先脱敏，例如对值进行哈希处理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'DocType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00000001',
                    ],
                ],
                [
                    'name' => 'DocName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的真实姓名。当Authorize=\'T\'且证件类型为大陆身份证时，证件关键信息（DocName、DocNo）与证件图片（IdOcrPictureBase64/URL)必须至少输入其中一组'."\n"
                            .'注：支持长度为1个汉字以上的汉字组合，无特殊字符，少数民族的点【·】除外',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张**',
                    ],
                ],
                [
                    'name' => 'DocNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的证件号。当Authorize=\'T\'且证件类型为大陆身份证时，证件关键信息（DocName、DocNo）与证件图片（IdOcrPictureBase64/URL)必须至少输入其中一组'."\n"
                            .'注：支持长度为18位的字母和数字组合',
                        'type' => 'string',
                        'required' => false,
                        'example' => '410***************',
                    ],
                ],
                [
                    'name' => 'IdOcrPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件正面图片URL',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg'."\n",
                    ],
                ],
                [
                    'name' => 'IdOcrPictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FacePictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '人脸照片地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg',
                    ],
                ],
                [
                    'name' => 'FacePictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Crop',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许裁剪，默认不允许，T/F'."\n"
                            ."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F',
                    ],
                ],
                [
                    'name' => 'Authorize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启身份权威核验，目前仅适用于中国大陆二代身份证',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
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
                                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识',
                                        'type' => 'string',
                                        'example' => '4ab0b***cbde97',
                                    ],
                                    'SubCode' => [
                                        'description' => '子结果码',
                                        'type' => 'string',
                                        'example' => '205',
                                    ],
                                    'Passed' => [
                                        'description' => '是否通过，通过为T，不通过为F。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'ExtFaceInfo' => [
                                        'description' => '人脸结果信息',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'"faceAttack": "N",'."\n"
                                            .'"faceComparisonScore": 52.57,'."\n"
                                            .'"facePassed": "N",'."\n"
                                            .'"authorityComparisonScore": 80.39'."\n"
                                            .'}'."\n"
                                            ."\n",
                                    ],
                                    'ExtIdInfo' => [
                                        'description' => '卡证识别结果	只有当接口响应成功时返回',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .' "ocrIdInfo": {'."\n"
                                            .' "firstName": "**龙",'."\n"
                                            .' "lastName": "**",'."\n"
                                            .' "countryCode": "CHN",'."\n"
                                            .' "docType": "01560001",'."\n"
                                            .' "dateOfBirth": "2002-08-04",'."\n"
                                            .' "idNumber": "410************19"'."\n"
                                            .' },'."\n"
                                            .' "ocrIdPassed": "N",'."\n"
                                            .' "spoofInfo": {'."\n"
                                            .' "spoofResult": "Y",'."\n"
                                            .' }'."\n"
                                            .'}'."\n"
                                            ."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"4ab0b***cbde97\\",\\n    \\"SubCode\\": \\"205\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"ExtFaceInfo\\": \\"{\\\\n\\\\\\"faceAttack\\\\\\": \\\\\\"N\\\\\\",\\\\n\\\\\\"faceComparisonScore\\\\\\": 52.57,\\\\n\\\\\\"facePassed\\\\\\": \\\\\\"N\\\\\\",\\\\n\\\\\\"authorityComparisonScore\\\\\\": 80.39\\\\n}\\\\n\\\\n\\",\\n    \\"ExtIdInfo\\": \\"{\\\\n \\\\\\"ocrIdInfo\\\\\\": {\\\\n \\\\\\"firstName\\\\\\": \\\\\\"**龙\\\\\\",\\\\n \\\\\\"lastName\\\\\\": \\\\\\"**\\\\\\",\\\\n \\\\\\"countryCode\\\\\\": \\\\\\"CHN\\\\\\",\\\\n \\\\\\"docType\\\\\\": \\\\\\"01560001\\\\\\",\\\\n \\\\\\"dateOfBirth\\\\\\": \\\\\\"2002-08-04\\\\\\",\\\\n \\\\\\"idNumber\\\\\\": \\\\\\"410************19\\\\\\"\\\\n },\\\\n \\\\\\"ocrIdPassed\\\\\\": \\\\\\"N\\\\\\",\\\\n \\\\\\"spoofInfo\\\\\\": {\\\\n \\\\\\"spoofResult\\\\\\": \\\\\\"Y\\\\\\",\\\\n }\\\\n}\\\\n\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => 'ekyc纯服务端接口',
        ],
        'DescribeWeb3AddressLabels' => [
            'summary' => 'Query the Information of address.',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dso932dsjsd22',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'The address hash.',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000980145045a5c5acad3d2df0cf3b2afxxxxxx',
                    ],
                ],
                [
                    'name' => 'ChainShortName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'This is the short name of blockchain。'."\n"
                            .'[ ETH, MATIC, BNB ]',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'MATIC' => 'MATIC',
                            'BNB' => 'BNB',
                            'ETH' => 'ETH',
                        ],
                        'example' => 'ETH',
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
                                'description' => 'The unique ID of the request, which can be used to locate issues.',
                                'type' => 'string',
                                'example' => '7F971622-38C0-5F56-B2EC-315367979B4F',
                            ],
                            'Code' => [
                                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => 'Response detailed message.',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => 'data',
                                'type' => 'object',
                                'properties' => [
                                    'ChainName' => [
                                        'description' => 'ChainNameEnumstring name of blockchain',
                                        'type' => 'string',
                                        'example' => 'Ethereum Mainnet',
                                    ],
                                    'ChainShortName' => [
                                        'description' => 'ChainShortName',
                                        'type' => 'string',
                                        'example' => 'eth',
                                    ],
                                    'Address' => [
                                        'description' => 'address',
                                        'type' => 'string',
                                        'example' => '2341980145045A5c5acad3d2Df0cF3B2Afxxxxxx',
                                    ],
                                    'ContractAddress' => [
                                        'description' => '0: EOA; 1: Contract',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'EOA',
                                            'Contract',
                                        ],
                                        'example' => '0',
                                    ],
                                    'IsProducerAddress' => [
                                        'description' => '0: Not validator; 1: validator',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Not validator',
                                            'validator',
                                        ],
                                        'example' => '0',
                                    ],
                                    'Tag' => [
                                        'description' => 'tag',
                                        'type' => 'string',
                                        'example' => 'contracts:Tether: Tether_USD,token_standard:erc20'."\n",
                                    ],
                                    'Balance' => [
                                        'description' => 'amount of native currency',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'BalanceSymbol' => [
                                        'description' => 'native currency of the chain',
                                        'type' => 'string',
                                        'example' => 'ETH',
                                    ],
                                    'TransactionCount' => [
                                        'description' => 'the number of transactions',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'SendAmount' => [
                                        'description' => 'the amount of native currency sent in 180 days',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'ReceiveAmount' => [
                                        'description' => 'the amount of native currency received in 180 days',
                                        'type' => 'string',
                                        'example' => '0',
                                    ],
                                    'TokenAmount' => [
                                        'description' => 'the number of erc20 tokens involved with current address in 180 days',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TokenList' => [
                                        'description' => 'address of erc20 tokens involved with current address in 180 days',
                                        'type' => 'string',
                                        'example' => '["{"ERC721":[]"]}"]',
                                    ],
                                    'CreateContractAddress' => [
                                        'description' => 'the address of deployer if the current address is a contract, null if the current address is an EOA',
                                        'type' => 'string',
                                        'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                                    ],
                                    'CreateContractTransactionHash' => [
                                        'description' => 'contract creation hash if the current address is a contract, null if the current address is an EOA',
                                        'type' => 'string',
                                        'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                                    ],
                                    'FirstTransactionTime' => [
                                        'description' => 'the first transaction hash sent by the address',
                                        'type' => 'string',
                                        'example' => '20230304',
                                    ],
                                    'LastTransactionTime' => [
                                        'description' => 'the latest transaction hash sent by the address',
                                        'type' => 'string',
                                        'example' => '20230304',
                                    ],
                                    'Token' => [
                                        'description' => 'if the address is an erc20 token, returns the token name',
                                        'type' => 'string',
                                        'example' => 'Tether USD',
                                    ],
                                    'CustomRiskAssessment' => [
                                        'description' => 'customized assessment detail',
                                        'type' => 'string',
                                        'example' => '""',
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'The HTTP status code',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7F971622-38C0-5F56-B2EC-315367979B4F\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ChainName\\": \\"Ethereum Mainnet\\",\\n    \\"ChainShortName\\": \\"eth\\",\\n    \\"Address\\": \\"2341980145045A5c5acad3d2Df0cF3B2Afxxxxxx\\",\\n    \\"ContractAddress\\": \\"0\\",\\n    \\"IsProducerAddress\\": \\"0\\",\\n    \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:erc20\\\\n\\",\\n    \\"Balance\\": \\"0\\",\\n    \\"BalanceSymbol\\": \\"ETH\\",\\n    \\"TransactionCount\\": 2,\\n    \\"SendAmount\\": \\"0\\",\\n    \\"ReceiveAmount\\": \\"0\\",\\n    \\"TokenAmount\\": 1,\\n    \\"TokenList\\": \\"[\\\\\\"{\\\\\\"ERC721\\\\\\":[]\\\\\\"]}\\\\\\"]\\",\\n    \\"CreateContractAddress\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n    \\"CreateContractTransactionHash\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n    \\"FirstTransactionTime\\": \\"20230304\\",\\n    \\"LastTransactionTime\\": \\"20230304\\",\\n    \\"Token\\": \\"Tether USD\\",\\n    \\"CustomRiskAssessment\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
            'title' => 'Address Information Query',
        ],
        'DescribeWeb3RiskScore' => [
            'summary' => 'Query risk score, risk detail list for a given address',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a353888',
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'The object of the analysis.'."\n"
                            .'[ TRANSACTION, ADDRESS ]',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ADDRESS' => 'ADDRESS',
                            'TRANSACTION' => 'TRANSACTION',
                        ],
                        'example' => 'TRANSACTION',
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'For TRANSACTION objects, you need to provide the transaction hash。'."\n"
                            .'For ADDRESS objects, you need to provide the address or reference address hash。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0000980145045a5c5acad3d2df0cf3b2afxxxxxx',
                    ],
                ],
                [
                    'name' => 'ChainShortName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'This is the short name of blockchain。'."\n"
                            .'[ ETH, MATIC, BNB ]',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'MATIC' => 'MATIC',
                            'BNB' => 'BNB',
                            'ETH' => 'ETH',
                        ],
                        'example' => 'ETH',
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'minimum: 1'."\n"
                            .'maximum: 100'."\n"
                            .'the maximum depth for risk analysis. For UTXO-based blockchains, default and maximum is enforced at 100.'."\n"
                            .'For account-based blockchains, default and maximum is enforced at 6',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
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
                                'description' => 'The unique ID of the request, which can be used to locate issues.',
                                'type' => 'string',
                                'example' => '5E63B760-0ECB-5C07-8503-A65C27876968',
                            ],
                            'Code' => [
                                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => 'Response detailed message.',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => 'data',
                                'type' => 'object',
                                'properties' => [
                                    'Score' => [
                                        'description' => 'Risk score',
                                        'type' => 'string',
                                        'example' => '80',
                                    ],
                                    'RiskResults' => [
                                        'description' => 'risk results',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Severity' => [
                                                    'description' => '[ CRITICAL, HIGH, MEDIUM, LOW, NO ]'."\n"
                                                        .'100: Critical'."\n"
                                                        .'67-99: High risk'."\n"
                                                        .'34-66: Medium risk'."\n"
                                                        .'1-33: Low risk'."\n"
                                                        .'0: No risk',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'NO' => '0',
                                                        'HIGH' => '67-99',
                                                        'MEDIUM' => '34-66',
                                                        'LOW' => '1-33',
                                                        'CRITICAL' => '100',
                                                    ],
                                                    'example' => 'HIGH',
                                                ],
                                                'Type' => [
                                                    'description' => 'Address'."\n"
                                                        .'Transaction',
                                                    'type' => 'string',
                                                    'example' => 'Address',
                                                ],
                                                'Description' => [
                                                    'description' => 'description',
                                                    'type' => 'string',
                                                    'example' => 'incoming address risk critical xxxxxx',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'The HTTP status code.',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5E63B760-0ECB-5C07-8503-A65C27876968\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Score\\": \\"80\\",\\n    \\"RiskResults\\": [\\n      {\\n        \\"Severity\\": \\"HIGH\\",\\n        \\"Type\\": \\"Address\\",\\n        \\"Description\\": \\"incoming address risk critical xxxxxx\\"\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
            'title' => 'Risk Score Query',
        ],
        'DescribeWeb3TransactionLabels' => [
            'summary' => 'Query the Information of transaction.',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e0c34a353888',
                    ],
                ],
                [
                    'name' => 'Transaction',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'The Transaction hash.',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c92880148d4896d8a2093a891a8f08916fe141fba474ede4101f81fb2bxxxxxx',
                    ],
                ],
                [
                    'name' => 'ChainShortName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'This is the short name of blockchain。'."\n"
                            .'[ ETH, MATIC, BNB ]',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'MATIC' => 'MATIC',
                            'BNB' => 'BNB',
                            'ETH' => 'ETH',
                        ],
                        'example' => 'ETH',
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
                                'description' => 'The unique ID of the request, which can be used to locate issues.',
                                'type' => 'string',
                                'example' => '7A0D192A-CC0C-5DE5-A3B6-A14CF45508F2',
                            ],
                            'Message' => [
                                'description' => 'Response detailed message.',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => 'data',
                                'type' => 'object',
                                'properties' => [
                                    'ChainName' => [
                                        'description' => 'chainName',
                                        'type' => 'string',
                                        'example' => 'ETH',
                                    ],
                                    'ChainShortName' => [
                                        'description' => 'short name of blockchain',
                                        'type' => 'string',
                                        'example' => 'eth',
                                    ],
                                    'Txid' => [
                                        'description' => 'Txid',
                                        'type' => 'string',
                                        'example' => 'c92880148d4896d8a2093a891a8f08916fe141fba474ede410xxxxxx',
                                    ],
                                    'Height' => [
                                        'description' => 'height',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '17087552',
                                    ],
                                    'TransactionTime' => [
                                        'description' => 'the block timestamp',
                                        'type' => 'string',
                                        'example' => '1681991807',
                                    ],
                                    'TransactionType' => [
                                        'description' => 'Integer	0: legacy; 1: eip 2930; 2: eip 1559',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Amount' => [
                                        'description' => 'the amount of native currency',
                                        'type' => 'string',
                                        'example' => '27',
                                    ],
                                    'TransactionSymbol' => [
                                        'description' => 'the symbol of native currency',
                                        'type' => 'string',
                                        'example' => 'ETH',
                                    ],
                                    'MethodId' => [
                                        'description' => 'the method name of contract call. For external transaction method: [\'CALL\',\'CALLCODE\',\'DELEGATECALL\',\'STATICCALL\']; for internal transaction method: the first 4 bytes of the hash of the method name',
                                        'type' => 'string',
                                        'example' => 'a9059cbb',
                                    ],
                                    'ErrorLog' => [
                                        'description' => 'error log',
                                        'type' => 'string',
                                        'example' => '“”',
                                    ],
                                    'InputData' => [
                                        'description' => 'input data',
                                        'type' => 'string',
                                        'example' => 'a9059cbb000000000000000000000000c7019579cb9bdb9204e61c7179ba2f88f9d2990b000000000xxxxxx',
                                    ],
                                    'Txfee' => [
                                        'description' => 'the transaction fee in eth',
                                        'type' => 'string',
                                        'example' => '0.002321489548255059',
                                    ],
                                    'Index' => [
                                        'description' => 'the position of the transaction in the block',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '94',
                                    ],
                                    'InputDetails' => [
                                        'description' => 'input details',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'InputHash' => [
                                                    'description' => 'the address hash',
                                                    'type' => 'string',
                                                    'example' => '21a31Ee1afC51d94C2eFcCAa2xxxxxx',
                                                ],
                                                'IsContract' => [
                                                    'description' => 'example: true. is it a contract',
                                                    'type' => 'string',
                                                    'example' => 'true',
                                                ],
                                                'Tag' => [
                                                    'description' => 'example: Dex . the tag of the address',
                                                    'type' => 'string',
                                                    'example' => 'contracts:Tether: Tether_USD,token_standard:xxxxxx'."\n",
                                                ],
                                                'Amount' => [
                                                    'description' => 'example: 15. the amount of transation sent by the address',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3234',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OutputDetails' => [
                                        'description' => 'output details',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'InputHash' => [
                                                    'description' => 'the address hash',
                                                    'type' => 'string',
                                                    'example' => '21a31Ee1afC51d94C2eFcCAa2xxxxxx',
                                                ],
                                                'IsContract' => [
                                                    'description' => 'example: true. is it a contract',
                                                    'type' => 'string',
                                                    'example' => 'true',
                                                ],
                                                'Tag' => [
                                                    'description' => 'example: Dex. the tag of the address',
                                                    'type' => 'string',
                                                    'example' => 'contracts:Tether: Tether_USD,token_standard:xxxxxx',
                                                ],
                                                'Amount' => [
                                                    'description' => 'example: 15. the amount of transation sent by the address',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1500',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'State' => [
                                        'description' => 'the transaction state. 1: success 0: fail',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'enumValueTitles' => [
                                            'fail',
                                            'success',
                                        ],
                                        'example' => '1',
                                    ],
                                    'GasLimit' => [
                                        'description' => 'gasLimit',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1232',
                                    ],
                                    'GasUsed' => [
                                        'description' => 'gasUsed',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '234',
                                    ],
                                    'GasPrice' => [
                                        'description' => 'gasPrice',
                                        'type' => 'string',
                                        'example' => '5034',
                                    ],
                                    'Nonce' => [
                                        'description' => 'nonce',
                                        'type' => 'string',
                                        'example' => '6242724',
                                    ],
                                    'TokenTransferDetails' => [
                                        'description' => 'token transfer details',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Index' => [
                                                    'description' => 'the call layer of to token transfer',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Token' => [
                                                    'description' => 'the token name',
                                                    'type' => 'string',
                                                    'example' => 'Tether USD',
                                                ],
                                                'TokenContractAddress' => [
                                                    'description' => 'the token address',
                                                    'type' => 'string',
                                                    'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                                                ],
                                                'Symbol' => [
                                                    'description' => 'the token symbol',
                                                    'type' => 'string',
                                                    'example' => 'USDT',
                                                ],
                                                'From' => [
                                                    'description' => 'the sender of the token',
                                                    'type' => 'string',
                                                    'example' => '21a31Ee1afC51d94C2eFcCAa2092aD1028xxxxxx',
                                                ],
                                                'To' => [
                                                    'description' => 'the receiver of the token',
                                                    'type' => 'string',
                                                    'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                                                ],
                                                'TokenId' => [
                                                    'description' => 'NFT ID, if the token is erc721',
                                                    'type' => 'string',
                                                    'example' => '-1',
                                                ],
                                                'Amount' => [
                                                    'description' => 'the token amount',
                                                    'type' => 'string',
                                                    'example' => '945.5',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ContractDetails' => [
                                        'description' => 'contract details',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Index' => [
                                                    'description' => 'the call layer of internal transaction',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'From' => [
                                                    'description' => 'the sender of internal transaction',
                                                    'type' => 'string',
                                                    'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                                                ],
                                                'To' => [
                                                    'description' => 'the receiver of internal transaction',
                                                    'type' => 'string',
                                                    'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                                                ],
                                                'Amount' => [
                                                    'description' => 'the value of internal transaction',
                                                    'type' => 'string',
                                                    'example' => '945.5'."\n",
                                                ],
                                                'GasLimit' => [
                                                    'description' => 'the gaslimit of internal transaction',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20712',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'The HTTP status code.',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A0D192A-CC0C-5DE5-A3B6-A14CF45508F2\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ChainName\\": \\"ETH\\",\\n    \\"ChainShortName\\": \\"eth\\",\\n    \\"Txid\\": \\"c92880148d4896d8a2093a891a8f08916fe141fba474ede410xxxxxx\\",\\n    \\"Height\\": 17087552,\\n    \\"TransactionTime\\": \\"1681991807\\",\\n    \\"TransactionType\\": \\"1\\",\\n    \\"Amount\\": \\"27\\",\\n    \\"TransactionSymbol\\": \\"ETH\\",\\n    \\"MethodId\\": \\"a9059cbb\\",\\n    \\"ErrorLog\\": \\"“”\\",\\n    \\"InputData\\": \\"a9059cbb000000000000000000000000c7019579cb9bdb9204e61c7179ba2f88f9d2990b000000000xxxxxx\\",\\n    \\"Txfee\\": \\"0.002321489548255059\\",\\n    \\"Index\\": 94,\\n    \\"InputDetails\\": [\\n      {\\n        \\"InputHash\\": \\"21a31Ee1afC51d94C2eFcCAa2xxxxxx\\",\\n        \\"IsContract\\": \\"true\\",\\n        \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:xxxxxx\\\\n\\",\\n        \\"Amount\\": 3234\\n      }\\n    ],\\n    \\"OutputDetails\\": [\\n      {\\n        \\"InputHash\\": \\"21a31Ee1afC51d94C2eFcCAa2xxxxxx\\",\\n        \\"IsContract\\": \\"true\\",\\n        \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:xxxxxx\\",\\n        \\"Amount\\": 1500\\n      }\\n    ],\\n    \\"State\\": 1,\\n    \\"GasLimit\\": 1232,\\n    \\"GasUsed\\": 234,\\n    \\"GasPrice\\": \\"5034\\",\\n    \\"Nonce\\": \\"6242724\\",\\n    \\"TokenTransferDetails\\": [\\n      {\\n        \\"Index\\": 0,\\n        \\"Token\\": \\"Tether USD\\",\\n        \\"TokenContractAddress\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n        \\"Symbol\\": \\"USDT\\",\\n        \\"From\\": \\"21a31Ee1afC51d94C2eFcCAa2092aD1028xxxxxx\\",\\n        \\"To\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"TokenId\\": \\"-1\\",\\n        \\"Amount\\": \\"945.5\\"\\n      }\\n    ],\\n    \\"ContractDetails\\": [\\n      {\\n        \\"Index\\": 1,\\n        \\"From\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"To\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"Amount\\": \\"945.5\\\\n\\",\\n        \\"GasLimit\\": 20712\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"Success\\"\\n}","type":"json"}]',
            'title' => 'Transaction Information Query',
        ],
        'Id2MetaVerifyIntl' => [
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
                'abilityTreeCode' => '199203',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthZN5W38',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入的产品方案，固定值：ID_2META',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ID_2META',
                    ],
                ],
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
                        'description' => '身份证号(输入明文)',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211'."\n",
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名(输入明文)',
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
                                'example' => 'EFA11401-C961-5E89-A2D3-BF9883E5CC3D',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：未查得',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA11401-C961-5E89-A2D3-BF9883E5CC3D\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\"\\n  }\\n}","type":"json"}]',
            'title' => '身份二要素认证接口',
        ],
        'Mobile3MetaVerifyIntl' => [
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
                'abilityTreeCode' => '199210',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthPZCZ2I',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接入的产品方案，固定值：MOBILE_3META',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MOBILE_3META',
                    ],
                ],
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
                    'name' => 'IdentifyNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份证号'."\n"
                            ."\n"
                            .'- 当paramType取值normal时，输入明文'."\n"
                            .'- 当paramType取值md5时，输入32位小写md5字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '429001********8211'."\n",
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
                        'example' => '张*'."\n",
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
                        'example' => '186****1234',
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
                                'example' => 'D241532C-4EE9-5A2A-A5A5-C1FD98CE2EDD',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'BizCode' => [
                                        'description' => '核验结果码。'."\n"
                                            .'- 1：核验一致'."\n"
                                            .'- 2：核验不一致'."\n"
                                            .'- 3：未查得',
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
                                            .'- CMCC：移动'."\n"
                                            .'- CUCC：联通'."\n"
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D241532C-4EE9-5A2A-A5A5-C1FD98CE2EDD\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
            'title' => '手机号三要素认证',
        ],
        'CardOcr' => [
            'summary' => '卡证Ocr纯服务端能力Api。',
            'methods' => [
                'post',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '178782',
                'abilityTreeNodes' => [
                    'FEATUREcloudauthCW0JNH',
                    'FEATUREcloudauthHOSIED',
                    'FEATUREcloudauthWSJE4H',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'MerchantBizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dso9322***dsjsd22',
                    ],
                ],
                [
                    'name' => 'MerchantUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '商户用户ID，或可用于识别特定用户的其他标识符，例如手机号码、电子邮件地址等。强烈建议对userId字段的值进行预脱敏处理，例如对该值进行hash处理',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456789',
                    ],
                ],
                [
                    'name' => 'IdOcrPictureBase64',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IdOcrPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件正面图片URL',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg'."\n",
                    ],
                ],
                [
                    'name' => 'DocType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证件类型。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00000006',
                    ],
                ],
                [
                    'name' => 'ProductCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品code',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ID_OCR_MIN',
                    ],
                ],
                [
                    'name' => 'Ocr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行证件OCR'."\n"
                            .'- T：表示需要证件OCR（默认T）'."\n"
                            .'- F：表示不需要',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T',
                    ],
                ],
                [
                    'name' => 'IdFaceQuality',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否进行证脸质量检测'."\n"
                            .'- T：表示需要检测'."\n"
                            .'- F：表示需要检测（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F',
                    ],
                ],
                [
                    'name' => 'Spoof',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启防伪检测'."\n"
                            .'- T：表示开启防伪'."\n"
                            .'- F：表示关闭（默认F）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'F',
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
                                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Result' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'TransactionId' => [
                                        'description' => '认证请求的唯一标识',
                                        'type' => 'string',
                                        'example' => '08573be80f944d95ac812e019e3655a8',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过。'."\n"
                                            ."\n"
                                            .'- Y：通过。'."\n"
                                            .'- N：不通过。',
                                        'type' => 'string',
                                        'example' => 'Y',
                                    ],
                                    'SubCode' => [
                                        'description' => '子结果码。',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'ExtIdInfo' => [
                                        'description' => '额外结果信息',
                                        'type' => 'string',
                                        'example' => '**',
                                    ],
                                    'ExtCardInfo' => [
                                        'description' => '卡证识别结果',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'  "idFaceQualityScore": 98.90,'."\n"
                                            .'  "ocrIdInfo": {'."\n"
                                            .'    "expiryDate": "2024-04-20",'."\n"
                                            .'    "placeOfIssue": "广东",'."\n"
                                            .'    "englishName": "ZHENGJIAN,YANGBEN",'."\n"
                                            .'    "originOfIssue": "公安部出入境管理局",'."\n"
                                            .'    "sex": "女",'."\n"
                                            .'    "name": "证件样本",'."\n"
                                            .'    "idNumber": "C00000000",'."\n"
                                            .'    "issueDate": "2014-04-21",'."\n"
                                            .'    "birthDate": "1981-08-03"'."\n"
                                            .'  },'."\n"
                                            .'  "spoofInfo": {'."\n"
                                            .'    "spoofResult": "N",'."\n"
                                            .'    "spoofType": ['."\n"
                                            .'      "SCREEN_REMARK"'."\n"
                                            .'    ]'."\n"
                                            .'  }'."\n"
                                            .'}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'Cloudauth-intl::2022-08-09::DocOcr',
                ],
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"ExtIdInfo\\": \\"**\\",\\n    \\"ExtCardInfo\\": \\"{\\\\n  \\\\\\"idFaceQualityScore\\\\\\": 98.90,\\\\n  \\\\\\"ocrIdInfo\\\\\\": {\\\\n    \\\\\\"expiryDate\\\\\\": \\\\\\"2024-04-20\\\\\\",\\\\n    \\\\\\"placeOfIssue\\\\\\": \\\\\\"广东\\\\\\",\\\\n    \\\\\\"englishName\\\\\\": \\\\\\"ZHENGJIAN,YANGBEN\\\\\\",\\\\n    \\\\\\"originOfIssue\\\\\\": \\\\\\"公安部出入境管理局\\\\\\",\\\\n    \\\\\\"sex\\\\\\": \\\\\\"女\\\\\\",\\\\n    \\\\\\"name\\\\\\": \\\\\\"证件样本\\\\\\",\\\\n    \\\\\\"idNumber\\\\\\": \\\\\\"C00000000\\\\\\",\\\\n    \\\\\\"issueDate\\\\\\": \\\\\\"2014-04-21\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\": \\\\\\"1981-08-03\\\\\\"\\\\n  },\\\\n  \\\\\\"spoofInfo\\\\\\": {\\\\n    \\\\\\"spoofResult\\\\\\": \\\\\\"N\\\\\\",\\\\n    \\\\\\"spoofType\\\\\\": [\\\\n      \\\\\\"SCREEN_REMARK\\\\\\"\\\\n    ]\\\\n  }\\\\n}\\"\\n  }\\n}","type":"json"}]',
            'title' => '卡证Ocr纯服务端能力Api',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudauth-intl.cn-hongkong.aliyuncs.com',
        ],
    ],
];
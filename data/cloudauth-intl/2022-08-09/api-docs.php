<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Cloudauth-intl',
    'version' => '2022-08-09',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 182315,
      'title' => 'KYC',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Initialize',
        1 => 'CheckResult',
        2 => 'FaceCompare',
      ),
    ),
    1 => 
    array (
      'id' => 182316,
      'title' => 'AML',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRiskScore',
        1 => 'DescribeAddressOverview',
        2 => 'DescribeAddressLabels',
        3 => 'DescribeMaliciousAddress',
        4 => 'DescribeTransactionsList',
      ),
    ),
    2 => 
    array (
      'id' => 187491,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'FaceLiveness',
        1 => 'DocOcr',
        2 => 'FraudResultCallBack',
        3 => 'DeleteVerifyResult',
        4 => 'EkycVerify',
        5 => 'DescribeWeb3AddressLabels',
        6 => 'DescribeWeb3RiskScore',
        7 => 'DescribeWeb3TransactionLabels',
        8 => 'Id2MetaVerifyIntl',
        9 => 'Mobile3MetaVerifyIntl',
      ),
    ),
    3 => 
    array (
      'id' => 187503,
      'title' => '已废弃',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CardOcr',
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
    'Initialize' => 
    array (
      'summary' => '初始化。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '149600',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth6RJHVQ',
          1 => 'FEATUREcloudauthCW0JNH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要接入的产品方案。取值为

- KYC_GLOBAL(eKYC产品方案)
- FV_GLOBAL(活体人脸验证)
- FL_GLOBAL(活体检测)
- IDR_GLOBAL(单证件验证)
- OCR_GLOBAL(单证件OCR)',
            'type' => 'string',
            'required' => false,
            'example' => 'KYC_GLOBAL',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a***353888',
          ),
        ),
        2 => 
        array (
          'name' => 'MetaInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Metainfo环境参数，需要通过客户端SDK获取。',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"bioMetaInfo\\":\\"4.1.0:2916352,0\\",\\"deviceType\\":\\"web\\",\\"ua\\":\\"Mozilla/5.0 (Macintosh',
          ),
        ),
        3 => 
        array (
          'name' => 'DocType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件类型，以8位数字组合作为唯一标识
注：只有当ProductCode为KYC_GLOBAL、OCR_GLOBAL、IDR_GLOBAL需传',
            'type' => 'string',
            'required' => false,
            'example' => '​01560000

',
          ),
        ),
        4 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您自定义的用户ID，或者其他可以识别特定用户的标识，例如手机号码、邮箱地址等。强烈建议对该字段的值进行预先脱敏，例如对值进行哈希处理。',
            'type' => 'string',
            'required' => false,
            'example' => '1221****6543',
          ),
        ),
        5 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '场景码。（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => '123****123',
          ),
        ),
        6 => 
        array (
          'name' => 'FacePictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '人脸照片Base64编码。如果您选择FacePictureBase64方式传入人脸照片，请注意检查照片大小，不要传入超过1 MB的照片。
当productCode为FV_GLOBAL时，和参数FacePictureUrl选择其中之一传入',
            'type' => 'string',
            'required' => false,
            'example' => 'Base64',
          ),
        ),
        7 => 
        array (
          'name' => 'FacePictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸照片地址。公网可访问的HTTP、HTTPS链接。当productCode为FV_GLOBAL时，和参数FacePictureBase选择其中之一传入',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        8 => 
        array (
          'name' => 'Crop',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否裁剪。（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'N',
          ),
        ),
        9 => 
        array (
          'name' => 'Ocr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启OCR。（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        10 => 
        array (
          'name' => 'IdFaceQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸图片质量。（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        11 => 
        array (
          'name' => 'IdSpoof',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否启用证书防伪检测。（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        12 => 
        array (
          'name' => 'ReturnUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '端侧回调地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'http*****',
          ),
        ),
        13 => 
        array (
          'name' => 'Authorize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启身份权威核验，目前仅适用于中国大陆二代身份证（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        14 => 
        array (
          'name' => 'DocScanMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件采集拍照模式。

- manual：手动拍照。
- auto：自动拍照（默认）',
            'type' => 'string',
            'required' => false,
            'example' => 'manual',
          ),
        ),
        15 => 
        array (
          'name' => 'ProductFlow',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '支持卡证和人脸顺序编排：

- DOC_FACE（默认）
- FACE_DOC

注：只有当ProductCode为KYC_GLOBAL需传',
            'type' => 'string',
            'required' => false,
            'example' => 'DOC_FACE',
          ),
        ),
        16 => 
        array (
          'name' => 'CallbackUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证结果的回调通知地址，回调请求方式默认为GET，回调地址必须以https开头。平台在完成认证后会回调该地址，并自动添加transactionId、passed和subcode字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://www.aliyun.com?callbackToken=1000004826&transactionId=shaxxxx&passed=Y&subCode=200',
          ),
        ),
        17 => 
        array (
          'name' => 'CallbackToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '安全Token，用于防重复、防篡改校验。如果传入该参数会在回调地址显示CallbackToken字段。',
            'type' => 'string',
            'required' => false,
            'example' => '7ca5c68d869344ea8eeb30cdfd544544-6358700',
          ),
        ),
        18 => 
        array (
          'name' => 'LanguageConfig',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '语言配置（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => 'en',
          ),
        ),
        19 => 
        array (
          'name' => 'SecurityLevel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代表认证流程不同安全水位的模式，可选值：

01：普通模式（默认）。
02：安全模式，相对严格的模式，可用于高风险场景（IDV产品入参）',
            'type' => 'string',
            'required' => false,
            'example' => '01',
          ),
        ),
        20 => 
        array (
          'name' => 'StyleConfig',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        21 => 
        array (
          'name' => 'ExperienceCode',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '4EB35****87EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证ID',
                    'type' => 'string',
                    'example' => '08573be80f944d95ac812e019e3655a8',
                  ),
                  'ClientCfg' => 
                  array (
                    'description' => '客户端配置',
                    'type' => 'string',
                    'example' => '***',
                  ),
                  'TransactionUrl' => 
                  array (
                    'description' => 'Web认证Url',
                    'type' => 'string',
                    'example' => 'http****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"ClientCfg\\": \\"***\\",\\n    \\"TransactionUrl\\": \\"http****\\"\\n  }\\n}","type":"json"}]',
      'title' => '初始化',
    ),
    'CheckResult' => 
    array (
      'summary' => '查询认证结果。',
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
        'operationType' => 'get',
        'abilityTreeCode' => '149753',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthCS0SDG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'djs20d***9-dsskc',
          ),
        ),
        1 => 
        array (
          'name' => 'TransactionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证ID。',
            'type' => 'string',
            'required' => false,
            'example' => '4ab0b***cbde97',
          ),
        ),
        2 => 
        array (
          'name' => 'IsReturnImage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回图片。
- Y：返回
- N：不返回',
            'type' => 'string',
            'required' => false,
            'example' => 'N',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtraImageControlList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回附加信息。',
            'type' => 'string',
            'required' => false,
            'example' => '***',
          ),
        ),
        4 => 
        array (
          'name' => 'ReturnFiveCategorySpoofResult',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回防伪检测结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
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
                'example' => '4EB35****87EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'EkycResult' => 
                  array (
                    'description' => '认证结果。',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'ExtBasicInfo' => 
                  array (
                    'description' => '扩展基础信息。',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'ExtFaceInfo' => 
                  array (
                    'description' => '人脸信息。',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'ExtIdInfo' => 
                  array (
                    'description' => 'ID信息。',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'ExtRiskInfo' => 
                  array (
                    'description' => '风险信息。',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过。

- Y：通过。
- N：不通过。',
                    'type' => 'string',
                    'example' => 'Y',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '子结果码。',
                    'type' => 'string',
                    'example' => '***',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"EkycResult\\": \\"**\\",\\n    \\"ExtBasicInfo\\": \\"**\\",\\n    \\"ExtFaceInfo\\": \\"**\\",\\n    \\"ExtIdInfo\\": \\"**\\",\\n    \\"ExtRiskInfo\\": \\"**\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"***\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询认证结果',
    ),
    'FaceCompare' => 
    array (
      'summary' => '通过人脸识别技术，可以对传入的两张人脸图片进行比对验证，返回人脸对比结果和相似度分值。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '165986',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauth0KJCLK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        1 => 
        array (
          'name' => 'SourceFacePicture',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'SourceFacePictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸图片的HTTPS或HTTP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://***face1.jpeg',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetFacePicture',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'TargetFacePictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '底库人脸图片的HTTPS或HTTP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://***face2.jpeg',
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
                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码。

200：表示成功。
其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识。',
                    'type' => 'string',
                    'example' => '08573be80f944d95ac812e019e3655a8',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过。

- Y：通过。
- N：不通过。',
                    'type' => 'string',
                    'example' => 'Y',
                  ),
                  'FaceComparisonScore' => 
                  array (
                    'description' => '认证过程中所提交的人脸照片和人脸留底图片上人脸的比对分，取值范围：**0**~**100**。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '98',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"FaceComparisonScore\\": 98\\n  }\\n}","type":"json"}]',
      'title' => '人脸比对',
    ),
    'DescribeRiskScore' => 
    array (
      'summary' => '查询地址风险。',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a***353888',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0xabds***djskjds',
          ),
        ),
        2 => 
        array (
          'name' => 'Coin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '币种。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETH',
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
                'example' => '4EB35****87EBA1',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：
- **true**：调用成功。
- **false**：调用失败。
',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Score' => 
                  array (
                    'description' => '风险评分',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'DetailList' => 
                  array (
                    'description' => '明细数组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '明细数组',
                      'type' => 'string',
                      'example' => 'Malicious Address',
                    ),
                  ),
                  'HackingEvent' => 
                  array (
                    'description' => '违规行为',
                    'type' => 'string',
                    'example' => 'MMFinance Exploiter',
                  ),
                  'RiskLevel' => 
                  array (
                    'description' => '风险等级',
                    'type' => 'string',
                    'example' => 'Severe',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Score\\": 100,\\n    \\"DetailList\\": [\\n      \\"Malicious Address\\"\\n    ],\\n    \\"HackingEvent\\": \\"MMFinance Exploiter\\",\\n    \\"RiskLevel\\": \\"Severe\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询地址风险',
    ),
    'DescribeAddressOverview' => 
    array (
      'summary' => '查询地址概览。',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a***353888',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0xabds***djskjds',
          ),
        ),
        2 => 
        array (
          'name' => 'Coin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '币种。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETH',
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
                'example' => '4EB35****87EBA1',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'Balance' => 
                  array (
                    'description' => '余额',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '54.4216',
                  ),
                  'TxsCount' => 
                  array (
                    'description' => '交易数量',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1697',
                  ),
                  'FirstSeen' => 
                  array (
                    'description' => '首次交易时间，unix timestamp格式。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1441800674',
                  ),
                  'LastSeen' => 
                  array (
                    'description' => '最后一次交易时间，unix timestamp格式。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1682056727',
                  ),
                  'TotalReceived' => 
                  array (
                    'description' => '收到的总金额',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '916263.8',
                  ),
                  'TotalSpent' => 
                  array (
                    'description' => '发出的总金额',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '916205.4',
                  ),
                  'ReceivedTxsCount' => 
                  array (
                    'description' => '收到的总交易笔数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1470',
                  ),
                  'SpentTxsCount' => 
                  array (
                    'description' => '发出的总交易笔数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '227',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Balance\\": 54.4216,\\n    \\"TxsCount\\": 1697,\\n    \\"FirstSeen\\": 1441800674,\\n    \\"LastSeen\\": 1682056727,\\n    \\"TotalReceived\\": 916263.8,\\n    \\"TotalSpent\\": 916205.4,\\n    \\"ReceivedTxsCount\\": 1470,\\n    \\"SpentTxsCount\\": 227\\n  }\\n}","type":"json"}]',
      'title' => '查询地址概览',
    ),
    'DescribeAddressLabels' => 
    array (
      'summary' => '查询地址标签。',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'dso9322***dsjsd22',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0xabds8292***dskkds',
          ),
        ),
        2 => 
        array (
          'name' => 'Coin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '币种。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETH',
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
                'example' => '4EB35****87EBA1',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果',
                'type' => 'object',
                'properties' => 
                array (
                  'LabelList' => 
                  array (
                    'description' => '结果',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签',
                      'type' => 'string',
                      'example' => 'la***o.eth',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"LabelList\\": [\\n      \\"la***o.eth\\"\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询地址标签',
    ),
    'DescribeMaliciousAddress' => 
    array (
      'summary' => '恶意钱包地址库接口。',
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
          'name' => 'Start',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-07-20',
          ),
        ),
        1 => 
        array (
          'name' => 'End',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。',
            'type' => 'string',
            'required' => false,
            'example' => '2017-08-20',
          ),
        ),
        2 => 
        array (
          'name' => 'Coin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '币种(支持：BTC、ETH、EOS、XRP、TRX、USDT)。',
            'type' => 'string',
            'required' => false,
            'example' => 'BTC',
          ),
        ),
        3 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'djs20dsjk2-dsjd29-dsskc',
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
                'example' => '4EB35****87EBA1',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回结果。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Coin' => 
                    array (
                      'description' => '币种',
                      'type' => 'string',
                      'example' => 'ETH',
                    ),
                    'Address' => 
                    array (
                      'description' => '钱包地址加密hash',
                      'type' => 'string',
                      'example' => 'f6d239ff***df816',
                    ),
                    'AddTime' => 
                    array (
                      'description' => '拉黑时间',
                      'type' => 'string',
                      'example' => '2017-07-18 00:00:00',
                    ),
                    'Tag' => 
                    array (
                      'description' => '恶意行为',
                      'type' => 'string',
                      'example' => '实施钓鱼活动',
                    ),
                    'Detail' => 
                    array (
                      'description' => '恶意行为说明',
                      'type' => 'string',
                      'example' => 'FAKE_Coindash_2',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": [\\n    {\\n      \\"Coin\\": \\"ETH\\",\\n      \\"Address\\": \\"f6d239ff***df816\\",\\n      \\"AddTime\\": \\"2017-07-18 00:00:00\\",\\n      \\"Tag\\": \\"实施钓鱼活动\\",\\n      \\"Detail\\": \\"FAKE_Coindash_2\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '恶意钱包地址库',
    ),
    'DescribeTransactionsList' => 
    array (
      'summary' => '查询交易列表。',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a***353888',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地址。',
            'type' => 'string',
            'required' => false,
            'example' => '0xabds***djskjds',
          ),
        ),
        2 => 
        array (
          'name' => 'Coin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '币种。',
            'type' => 'string',
            'required' => false,
            'example' => 'ETH',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的开始时间戳，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1682232649',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的结束时间戳，单位：秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1682235649',
          ),
        ),
        5 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '交易类型。可选值 “in”、“out”、“all”，默认“all”。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'all' => 'all',
              'in' => 'in',
              'out' => 'out',
            ),
            'example' => 'in',
          ),
        ),
        6 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询页数。',
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
                'example' => '4EB35****87EBA1',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Page' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'TotalPages' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '6',
                  ),
                  'TransactionsOnPage' => 
                  array (
                    'description' => '当前页总交易数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '300',
                  ),
                  'Out' => 
                  array (
                    'description' => '转出交易列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Address' => 
                        array (
                          'description' => '交易地址。',
                          'type' => 'string',
                          'example' => '0xd90e2***b90ad053324f31b',
                        ),
                        'TxHashList' => 
                        array (
                          'description' => '交易hash列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '交易hash。',
                            'type' => 'string',
                            'example' => '0x7e87c61d***a12a',
                          ),
                        ),
                        'Amount' => 
                        array (
                          'description' => '交易金额。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '743',
                        ),
                        'Type' => 
                        array (
                          'description' => '类型。
- 1: EOA address / bitcoin address
- 2: malicious address
- 3: entity label address
- 4: contract address',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Label' => 
                        array (
                          'description' => '标签。',
                          'type' => 'string',
                          'example' => 'Tor***uter',
                        ),
                      ),
                    ),
                  ),
                  'In' => 
                  array (
                    'description' => '转入交易列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Address' => 
                        array (
                          'description' => '交易地址。',
                          'type' => 'string',
                          'example' => '0xd90e2***b90ad053324f31b
',
                        ),
                        'TxHashList' => 
                        array (
                          'description' => '交易hash列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '交易hash。',
                            'type' => 'string',
                            'example' => '0x7e87c61d***a12a
',
                          ),
                        ),
                        'Amount' => 
                        array (
                          'description' => '交易金额。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.0845',
                        ),
                        'Type' => 
                        array (
                          'description' => '类型。

1: EOA address / bitcoin address
2: malicious address
3: entity label address
4: contract address',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Label' => 
                        array (
                          'description' => '标签。',
                          'type' => 'string',
                          'example' => 'bi***ce',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Page\\": 1,\\n    \\"TotalPages\\": 6,\\n    \\"TransactionsOnPage\\": 300,\\n    \\"Out\\": [\\n      {\\n        \\"Address\\": \\"0xd90e2***b90ad053324f31b\\",\\n        \\"TxHashList\\": [\\n          \\"0x7e87c61d***a12a\\"\\n        ],\\n        \\"Amount\\": 743,\\n        \\"Type\\": 1,\\n        \\"Label\\": \\"Tor***uter\\"\\n      }\\n    ],\\n    \\"In\\": [\\n      {\\n        \\"Address\\": \\"0xd90e2***b90ad053324f31b\\\\n\\",\\n        \\"TxHashList\\": [\\n          \\"0x7e87c61d***a12a\\\\n\\"\\n        ],\\n        \\"Amount\\": 0.0845,\\n        \\"Type\\": 1,\\n        \\"Label\\": \\"bi***ce\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询交易列表',
    ),
    'FaceLiveness' => 
    array (
      'summary' => '静默活体纯服务端能力Api',
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
        'abilityTreeCode' => '175619',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code',
            'type' => 'string',
            'required' => false,
            'example' => 'FACE_LIVENESS_MIN',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户用户ID，或可用于识别特定用户的其他标识符，例如手机号码、电子邮件地址等。强烈建议对userId字段的值进行预脱敏处理，例如对该值进行hash处理',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        3 => 
        array (
          'name' => 'FacePictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸照片地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg',
          ),
        ),
        4 => 
        array (
          'name' => 'FacePictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'FaceQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否输出人脸质量分，默认不允许，T/F
- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
          ),
        ),
        6 => 
        array (
          'name' => 'Crop',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许裁剪，默认不允许，T/F

- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
          ),
        ),
        7 => 
        array (
          'name' => 'Occlusion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行遮挡检测，默认不允许T/F

- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
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
                'description' => '阿里云为该请求生成的唯一标识符',
                'type' => 'string',
                'example' => '42EA58CA-5DF4-55D5-82C4-5E7A40DA62BA',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回结果的提示信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识',
                    'type' => 'string',
                    'example' => '08573be80f944d95ac812e019e3655a8',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过

- Y：通过
- N：不通过',
                    'type' => 'string',
                    'example' => 'N',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '子结果码',
                    'type' => 'string',
                    'example' => '205',
                  ),
                  'ExtFaceInfo' => 
                  array (
                    'description' => '人脸结果信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'FaceQualityScore' => 
                      array (
                        'description' => '人脸质量分(0～100)，当且仅当入参质量分开关打开时返回',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '87.19',
                      ),
                      'OcclusionResult' => 
                      array (
                        'description' => '遮挡检测结果,Y (遮挡) /N (无遮挡),当且仅当遮挡检测开关打开时返回',
                        'type' => 'string',
                        'example' => 'Y',
                      ),
                      'FaceAttack' => 
                      array (
                        'description' => '活体检测结果，Y（攻击）/N（正常）',
                        'type' => 'string',
                        'example' => 'Y',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"42EA58CA-5DF4-55D5-82C4-5E7A40DA62BA\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"N\\",\\n    \\"SubCode\\": \\"205\\",\\n    \\"ExtFaceInfo\\": {\\n      \\"FaceQualityScore\\": 87.19,\\n      \\"OcclusionResult\\": \\"Y\\",\\n      \\"FaceAttack\\": \\"Y\\"\\n    }\\n  }\\n}","type":"json"}]',
      'title' => '静默活体纯服务端能力',
    ),
    'DocOcr' => 
    array (
      'summary' => '卡证OCR纯服务端能力Api',
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
        'abilityTreeCode' => '181950',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthCW0JNH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
            'type' => 'string',
            'required' => false,
            'example' => 'dso9322***dsjsd22',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务中自定义的用户ID，请保持唯一',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        2 => 
        array (
          'name' => 'IdOcrPictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IdOcrPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件正面图片URL',
            'type' => 'string',
            'required' => false,
            'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
',
          ),
        ),
        4 => 
        array (
          'name' => 'DocType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件类型',
            'type' => 'string',
            'required' => false,
            'example' => '00000006',
          ),
        ),
        5 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code',
            'type' => 'string',
            'required' => false,
            'example' => '产品方案类型ID_OCR_MIN',
          ),
        ),
        6 => 
        array (
          'name' => 'Ocr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行证件OCR
- T：表示需要证件OCR
- F：表示不需要',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
          ),
        ),
        7 => 
        array (
          'name' => 'IdFaceQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行证脸质量检测
- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'F',
          ),
        ),
        8 => 
        array (
          'name' => 'Spoof',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启防伪检测
- T：表示开启防伪
- F：表示关闭',
            'type' => 'string',
            'required' => false,
            'example' => 'F',
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
                'example' => '86C40EC3-5940-5F47-995C-BFE90B70E540',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识',
                    'type' => 'string',
                    'example' => '08573be80f944d95ac812e019e3655a8',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过。

- Y：通过
- N：不通过',
                    'type' => 'string',
                    'example' => 'Y',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '子结果码',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'ExtIdInfo' => 
                  array (
                    'description' => '卡证识别结果	只有当接口响应成功时返回',
                    'type' => 'string',
                    'example' => '{
  "idFaceQualityScore": 98.0
  "ocrIdInfo": {
    "expiryDate": "",
    "originOfIssue": "公安部出入境管理局",
    "englishName": "LI SI",
    "sex": "男",
    "name": "李四",
    "idNumber": "H11111112",
    "issueDate": "2013-01-02",
    "birthDate": "1990-02-21"
  },
  "spoofInfo": {
    "spoofResult": "Y",
    "spoofType": [
      "SCREEN_REMARK"
    ]
  }
}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"86C40EC3-5940-5F47-995C-BFE90B70E540\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"ExtIdInfo\\": \\"{\\\\n  \\\\\\"idFaceQualityScore\\\\\\": 98.0\\\\n  \\\\\\"ocrIdInfo\\\\\\": {\\\\n    \\\\\\"expiryDate\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"originOfIssue\\\\\\": \\\\\\"公安部出入境管理局\\\\\\",\\\\n    \\\\\\"englishName\\\\\\": \\\\\\"LI SI\\\\\\",\\\\n    \\\\\\"sex\\\\\\": \\\\\\"男\\\\\\",\\\\n    \\\\\\"name\\\\\\": \\\\\\"李四\\\\\\",\\\\n    \\\\\\"idNumber\\\\\\": \\\\\\"H11111112\\\\\\",\\\\n    \\\\\\"issueDate\\\\\\": \\\\\\"2013-01-02\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\": \\\\\\"1990-02-21\\\\\\"\\\\n  },\\\\n  \\\\\\"spoofInfo\\\\\\": {\\\\n    \\\\\\"spoofResult\\\\\\": \\\\\\"Y\\\\\\",\\\\n    \\\\\\"spoofType\\\\\\": [\\\\n      \\\\\\"SCREEN_REMARK\\\\\\"\\\\n    ]\\\\n  }\\\\n}\\"\\n  }\\n}","type":"json"}]',
      'title' => '卡证OCR纯服务端能力Api',
    ),
    'FraudResultCallBack' => 
    array (
      'summary' => 'ekyc-global防伪回调接口',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'get',
        'abilityTreeCode' => '184671',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthCW0JNH',
          1 => 'FEATUREcloudauthWSJE4H',
          2 => 'FEATUREcloudauthHOSIED',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CertifyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实人认证唯一标识,对应蚂蚁的verifyId',
            'type' => 'string',
            'required' => false,
            'example' => 'shs2b27333914876c01de4cb22f5841f',
          ),
        ),
        1 => 
        array (
          'name' => 'ResultCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '防伪是否通过
- PASS (通过)
- REJECT (不通过)',
            'type' => 'string',
            'required' => false,
            'example' => 'PASS',
          ),
        ),
        2 => 
        array (
          'name' => 'VerifyDeployEnv',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境路由参数
- staging (预发环境)
- production (线上环境)',
            'type' => 'string',
            'required' => false,
            'example' => 'production',
          ),
        ),
        3 => 
        array (
          'name' => 'ExtParams',
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
                'example' => '4EB35****87EBA1',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。
- **true**：调用成功。
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\"\\n}","type":"json"}]',
      'title' => '防伪回调接口',
    ),
    'DeleteVerifyResult' => 
    array (
      'summary' => '删除用户认证记录相关数据',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TransactionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证请求的唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => '4ab0b***cbde97',
          ),
        ),
        1 => 
        array (
          'name' => 'DeleteAfterQuery',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除数据时是否依赖查询接口',
            'type' => 'string',
            'required' => false,
            'example' => 'Y / N',
          ),
        ),
        2 => 
        array (
          'name' => 'DeleteType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除数据的类型',
            'type' => 'string',
            'required' => false,
            'example' => 'Img / Text / All',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '本次请求的ID',
                'type' => 'string',
                'example' => '4EB35****87EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识',
                    'type' => 'string',
                    'example' => '4ab0b***cbde97',
                  ),
                  'DeleteResult' => 
                  array (
                    'description' => '删除的结果。其中Y表示删除成功，N表示删除失败',
                    'type' => 'string',
                    'example' => 'Y/N',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB35****87EBA1\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"4ab0b***cbde97\\",\\n    \\"DeleteResult\\": \\"Y/N\\"\\n  }\\n}","type":"json"}]',
      'title' => '认证记录逻辑删除接口',
    ),
    'EkycVerify' => 
    array (
      'summary' => 'ekyc方案纯服务端接口',
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
        'abilityTreeCode' => '190721',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthHJ4WQV',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code',
            'type' => 'string',
            'required' => false,
            'example' => 'eKYC_MIN',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持长度为32位的字母和数字的组合，请确保唯一。',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a77f5ac40a5aa5e6ed20c353888',
          ),
        ),
        2 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '您自定义的用户ID，或者其他可以识别特定用户的标识，例如：手机号码、邮箱地址等。强烈建议对该字段的值进行预先脱敏，例如对值进行哈希处理。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
          ),
        ),
        3 => 
        array (
          'name' => 'DocType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件类型',
            'type' => 'string',
            'required' => false,
            'example' => '00000001',
          ),
        ),
        4 => 
        array (
          'name' => 'DocName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的真实姓名。当Authorize=\'T\'且证件类型为大陆身份证时，证件关键信息（DocName、DocNo）与证件图片（IdOcrPictureBase64/URL)必须至少输入其中一组
注：支持长度为1个汉字以上的汉字组合，无特殊字符，少数民族的点【·】除外',
            'type' => 'string',
            'required' => false,
            'example' => '张**',
          ),
        ),
        5 => 
        array (
          'name' => 'DocNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户的证件号。当Authorize=\'T\'且证件类型为大陆身份证时，证件关键信息（DocName、DocNo）与证件图片（IdOcrPictureBase64/URL)必须至少输入其中一组
注：支持长度为18位的字母和数字组合',
            'type' => 'string',
            'required' => false,
            'example' => '410***************',
          ),
        ),
        6 => 
        array (
          'name' => 'IdOcrPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件正面图片URL',
            'type' => 'string',
            'required' => false,
            'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
',
          ),
        ),
        7 => 
        array (
          'name' => 'IdOcrPictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'FacePictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '人脸照片地址',
            'type' => 'string',
            'required' => false,
            'example' => 'https://digital-face-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg',
          ),
        ),
        9 => 
        array (
          'name' => 'FacePictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'Crop',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否允许裁剪，默认不允许，T/F

- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'F',
          ),
        ),
        11 => 
        array (
          'name' => 'Authorize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启身份权威核验，目前仅适用于中国大陆二代身份证',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
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
                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识',
                    'type' => 'string',
                    'example' => '4ab0b***cbde97',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '子结果码',
                    'type' => 'string',
                    'example' => '205',
                  ),
                  'Passed' => 
                  array (
                    'description' => '是否通过，通过为T，不通过为F。',
                    'type' => 'string',
                    'example' => 'Y',
                  ),
                  'ExtFaceInfo' => 
                  array (
                    'description' => '人脸结果信息',
                    'type' => 'string',
                    'example' => '{
"faceAttack": "N",
"faceComparisonScore": 52.57,
"facePassed": "N",
"authorityComparisonScore": 80.39
}

',
                  ),
                  'ExtIdInfo' => 
                  array (
                    'description' => '卡证识别结果	只有当接口响应成功时返回',
                    'type' => 'string',
                    'example' => '{
 "ocrIdInfo": {
 "firstName": "**龙",
 "lastName": "**",
 "countryCode": "CHN",
 "docType": "01560001",
 "dateOfBirth": "2002-08-04",
 "idNumber": "410************19"
 },
 "ocrIdPassed": "N",
 "spoofInfo": {
 "spoofResult": "Y",
 }
}

',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"4ab0b***cbde97\\",\\n    \\"SubCode\\": \\"205\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"ExtFaceInfo\\": \\"{\\\\n\\\\\\"faceAttack\\\\\\": \\\\\\"N\\\\\\",\\\\n\\\\\\"faceComparisonScore\\\\\\": 52.57,\\\\n\\\\\\"facePassed\\\\\\": \\\\\\"N\\\\\\",\\\\n\\\\\\"authorityComparisonScore\\\\\\": 80.39\\\\n}\\\\n\\\\n\\",\\n    \\"ExtIdInfo\\": \\"{\\\\n \\\\\\"ocrIdInfo\\\\\\": {\\\\n \\\\\\"firstName\\\\\\": \\\\\\"**龙\\\\\\",\\\\n \\\\\\"lastName\\\\\\": \\\\\\"**\\\\\\",\\\\n \\\\\\"countryCode\\\\\\": \\\\\\"CHN\\\\\\",\\\\n \\\\\\"docType\\\\\\": \\\\\\"01560001\\\\\\",\\\\n \\\\\\"dateOfBirth\\\\\\": \\\\\\"2002-08-04\\\\\\",\\\\n \\\\\\"idNumber\\\\\\": \\\\\\"410************19\\\\\\"\\\\n },\\\\n \\\\\\"ocrIdPassed\\\\\\": \\\\\\"N\\\\\\",\\\\n \\\\\\"spoofInfo\\\\\\": {\\\\n \\\\\\"spoofResult\\\\\\": \\\\\\"Y\\\\\\",\\\\n }\\\\n}\\\\n\\\\n\\"\\n  }\\n}","type":"json"}]',
      'title' => 'ekyc纯服务端接口',
    ),
    'DescribeWeb3AddressLabels' => 
    array (
      'summary' => 'Query the Information of address.',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
            'type' => 'string',
            'required' => false,
            'example' => 'dso932dsjsd22',
          ),
        ),
        1 => 
        array (
          'name' => 'Address',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'The address hash.',
            'type' => 'string',
            'required' => false,
            'example' => '0000980145045a5c5acad3d2df0cf3b2afxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ChainShortName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'This is the short name of blockchain。
[ ETH, MATIC, BNB ]',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'MATIC' => 'MATIC',
              'BNB' => 'BNB',
              'ETH' => 'ETH',
            ),
            'example' => 'ETH',
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
                'description' => 'The unique ID of the request, which can be used to locate issues.',
                'type' => 'string',
                'example' => '7F971622-38C0-5F56-B2EC-315367979B4F',
              ),
              'Code' => 
              array (
                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => 'Response detailed message.',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => 'data',
                'type' => 'object',
                'properties' => 
                array (
                  'ChainName' => 
                  array (
                    'description' => 'ChainNameEnumstring name of blockchain',
                    'type' => 'string',
                    'example' => 'Ethereum Mainnet',
                  ),
                  'ChainShortName' => 
                  array (
                    'description' => 'ChainShortName',
                    'type' => 'string',
                    'example' => 'eth',
                  ),
                  'Address' => 
                  array (
                    'description' => 'address',
                    'type' => 'string',
                    'example' => '2341980145045A5c5acad3d2Df0cF3B2Afxxxxxx',
                  ),
                  'ContractAddress' => 
                  array (
                    'description' => '0: EOA; 1: Contract',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      0 => 'EOA',
                      1 => 'Contract',
                    ),
                    'example' => '0',
                  ),
                  'IsProducerAddress' => 
                  array (
                    'description' => '0: Not validator; 1: validator',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      0 => 'Not validator',
                      1 => 'validator',
                    ),
                    'example' => '0',
                  ),
                  'Tag' => 
                  array (
                    'description' => 'tag',
                    'type' => 'string',
                    'example' => 'contracts:Tether: Tether_USD,token_standard:erc20
',
                  ),
                  'Balance' => 
                  array (
                    'description' => 'amount of native currency',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'BalanceSymbol' => 
                  array (
                    'description' => 'native currency of the chain',
                    'type' => 'string',
                    'example' => 'ETH',
                  ),
                  'TransactionCount' => 
                  array (
                    'description' => 'the number of transactions',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'SendAmount' => 
                  array (
                    'description' => 'the amount of native currency sent in 180 days',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'ReceiveAmount' => 
                  array (
                    'description' => 'the amount of native currency received in 180 days',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'TokenAmount' => 
                  array (
                    'description' => 'the number of erc20 tokens involved with current address in 180 days',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TokenList' => 
                  array (
                    'description' => 'address of erc20 tokens involved with current address in 180 days',
                    'type' => 'string',
                    'example' => '["{"ERC721":[]"]}"]',
                  ),
                  'CreateContractAddress' => 
                  array (
                    'description' => 'the address of deployer if the current address is a contract, null if the current address is an EOA',
                    'type' => 'string',
                    'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                  ),
                  'CreateContractTransactionHash' => 
                  array (
                    'description' => 'contract creation hash if the current address is a contract, null if the current address is an EOA',
                    'type' => 'string',
                    'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                  ),
                  'FirstTransactionTime' => 
                  array (
                    'description' => 'the first transaction hash sent by the address',
                    'type' => 'string',
                    'example' => '20230304',
                  ),
                  'LastTransactionTime' => 
                  array (
                    'description' => 'the latest transaction hash sent by the address',
                    'type' => 'string',
                    'example' => '20230304',
                  ),
                  'Token' => 
                  array (
                    'description' => 'if the address is an erc20 token, returns the token name',
                    'type' => 'string',
                    'example' => 'Tether USD',
                  ),
                  'CustomRiskAssessment' => 
                  array (
                    'description' => 'customized assessment detail',
                    'type' => 'string',
                    'example' => '""',
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'The HTTP status code',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7F971622-38C0-5F56-B2EC-315367979B4F\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ChainName\\": \\"Ethereum Mainnet\\",\\n    \\"ChainShortName\\": \\"eth\\",\\n    \\"Address\\": \\"2341980145045A5c5acad3d2Df0cF3B2Afxxxxxx\\",\\n    \\"ContractAddress\\": \\"0\\",\\n    \\"IsProducerAddress\\": \\"0\\",\\n    \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:erc20\\\\n\\",\\n    \\"Balance\\": \\"0\\",\\n    \\"BalanceSymbol\\": \\"ETH\\",\\n    \\"TransactionCount\\": 2,\\n    \\"SendAmount\\": \\"0\\",\\n    \\"ReceiveAmount\\": \\"0\\",\\n    \\"TokenAmount\\": 1,\\n    \\"TokenList\\": \\"[\\\\\\"{\\\\\\"ERC721\\\\\\":[]\\\\\\"]}\\\\\\"]\\",\\n    \\"CreateContractAddress\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n    \\"CreateContractTransactionHash\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n    \\"FirstTransactionTime\\": \\"20230304\\",\\n    \\"LastTransactionTime\\": \\"20230304\\",\\n    \\"Token\\": \\"Tether USD\\",\\n    \\"CustomRiskAssessment\\": \\"\\\\\\"\\\\\\"\\"\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => 'Address Information Query',
    ),
    'DescribeWeb3RiskScore' => 
    array (
      'summary' => 'Query risk score, risk detail list for a given address',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a353888',
          ),
        ),
        1 => 
        array (
          'name' => 'ObjectType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'The object of the analysis.
[ TRANSACTION, ADDRESS ]',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ADDRESS' => 'ADDRESS',
              'TRANSACTION' => 'TRANSACTION',
            ),
            'example' => 'TRANSACTION',
          ),
        ),
        2 => 
        array (
          'name' => 'ObjectId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'For TRANSACTION objects, you need to provide the transaction hash。
For ADDRESS objects, you need to provide the address or reference address hash。',
            'type' => 'string',
            'required' => false,
            'example' => '0000980145045a5c5acad3d2df0cf3b2afxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'ChainShortName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'This is the short name of blockchain。
[ ETH, MATIC, BNB ]',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'MATIC' => 'MATIC',
              'BNB' => 'BNB',
              'ETH' => 'ETH',
            ),
            'example' => 'ETH',
          ),
        ),
        4 => 
        array (
          'name' => 'Depth',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'minimum: 1
maximum: 100
the maximum depth for risk analysis. For UTXO-based blockchains, default and maximum is enforced at 100.
For account-based blockchains, default and maximum is enforced at 6',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
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
                'description' => 'The unique ID of the request, which can be used to locate issues.',
                'type' => 'string',
                'example' => '5E63B760-0ECB-5C07-8503-A65C27876968',
              ),
              'Code' => 
              array (
                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => 'Response detailed message.',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => 'data',
                'type' => 'object',
                'properties' => 
                array (
                  'Score' => 
                  array (
                    'description' => 'Risk score',
                    'type' => 'string',
                    'example' => '80',
                  ),
                  'RiskResults' => 
                  array (
                    'description' => 'risk results',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Severity' => 
                        array (
                          'description' => '[ CRITICAL, HIGH, MEDIUM, LOW, NO ]
100: Critical
67-99: High risk
34-66: Medium risk
1-33: Low risk
0: No risk',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'NO' => '0',
                            'HIGH' => '67-99',
                            'MEDIUM' => '34-66',
                            'LOW' => '1-33',
                            'CRITICAL' => '100',
                          ),
                          'example' => 'HIGH',
                        ),
                        'Type' => 
                        array (
                          'description' => 'Address
Transaction',
                          'type' => 'string',
                          'example' => 'Address',
                        ),
                        'Description' => 
                        array (
                          'description' => 'description',
                          'type' => 'string',
                          'example' => 'incoming address risk critical xxxxxx',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'The HTTP status code.',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5E63B760-0ECB-5C07-8503-A65C27876968\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"Score\\": \\"80\\",\\n    \\"RiskResults\\": [\\n      {\\n        \\"Severity\\": \\"HIGH\\",\\n        \\"Type\\": \\"Address\\",\\n        \\"Description\\": \\"incoming address risk critical xxxxxx\\"\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","type":"json"}]',
      'title' => 'Risk Score Query',
    ),
    'DescribeWeb3TransactionLabels' => 
    array (
      'summary' => 'Query the Information of transaction.',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
        1 => 'http',
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
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'A unique business ID for tracing purpose. For example，the sequence ID from the merchant\'s business-related database.',
            'type' => 'string',
            'required' => false,
            'example' => 'e0c34a353888',
          ),
        ),
        1 => 
        array (
          'name' => 'Transaction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'The Transaction hash.',
            'type' => 'string',
            'required' => false,
            'example' => 'c92880148d4896d8a2093a891a8f08916fe141fba474ede4101f81fb2bxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'ChainShortName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'This is the short name of blockchain。
[ ETH, MATIC, BNB ]',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'MATIC' => 'MATIC',
              'BNB' => 'BNB',
              'ETH' => 'ETH',
            ),
            'example' => 'ETH',
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
                'description' => 'The unique ID of the request, which can be used to locate issues.',
                'type' => 'string',
                'example' => '7A0D192A-CC0C-5DE5-A3B6-A14CF45508F2',
              ),
              'Message' => 
              array (
                'description' => 'Response detailed message.',
                'type' => 'string',
                'example' => 'success',
              ),
              'Data' => 
              array (
                'description' => 'data',
                'type' => 'object',
                'properties' => 
                array (
                  'ChainName' => 
                  array (
                    'description' => 'chainName',
                    'type' => 'string',
                    'example' => 'ETH',
                  ),
                  'ChainShortName' => 
                  array (
                    'description' => 'short name of blockchain',
                    'type' => 'string',
                    'example' => 'eth',
                  ),
                  'Txid' => 
                  array (
                    'description' => 'Txid',
                    'type' => 'string',
                    'example' => 'c92880148d4896d8a2093a891a8f08916fe141fba474ede410xxxxxx',
                  ),
                  'Height' => 
                  array (
                    'description' => 'height',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '17087552',
                  ),
                  'TransactionTime' => 
                  array (
                    'description' => 'the block timestamp',
                    'type' => 'string',
                    'example' => '1681991807',
                  ),
                  'TransactionType' => 
                  array (
                    'description' => 'Integer	0: legacy; 1: eip 2930; 2: eip 1559',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Amount' => 
                  array (
                    'description' => 'the amount of native currency',
                    'type' => 'string',
                    'example' => '27',
                  ),
                  'TransactionSymbol' => 
                  array (
                    'description' => 'the symbol of native currency',
                    'type' => 'string',
                    'example' => 'ETH',
                  ),
                  'MethodId' => 
                  array (
                    'description' => 'the method name of contract call. For external transaction method: [\'CALL\',\'CALLCODE\',\'DELEGATECALL\',\'STATICCALL\']; for internal transaction method: the first 4 bytes of the hash of the method name',
                    'type' => 'string',
                    'example' => 'a9059cbb',
                  ),
                  'ErrorLog' => 
                  array (
                    'description' => 'error log',
                    'type' => 'string',
                    'example' => '“”',
                  ),
                  'InputData' => 
                  array (
                    'description' => 'input data',
                    'type' => 'string',
                    'example' => 'a9059cbb000000000000000000000000c7019579cb9bdb9204e61c7179ba2f88f9d2990b000000000xxxxxx',
                  ),
                  'Txfee' => 
                  array (
                    'description' => 'the transaction fee in eth',
                    'type' => 'string',
                    'example' => '0.002321489548255059',
                  ),
                  'Index' => 
                  array (
                    'description' => 'the position of the transaction in the block',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '94',
                  ),
                  'InputDetails' => 
                  array (
                    'description' => 'input details',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InputHash' => 
                        array (
                          'description' => 'the address hash',
                          'type' => 'string',
                          'example' => '21a31Ee1afC51d94C2eFcCAa2xxxxxx',
                        ),
                        'IsContract' => 
                        array (
                          'description' => 'example: true. is it a contract',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'Tag' => 
                        array (
                          'description' => 'example: Dex . the tag of the address',
                          'type' => 'string',
                          'example' => 'contracts:Tether: Tether_USD,token_standard:xxxxxx
',
                        ),
                        'Amount' => 
                        array (
                          'description' => 'example: 15. the amount of transation sent by the address',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3234',
                        ),
                      ),
                    ),
                  ),
                  'OutputDetails' => 
                  array (
                    'description' => 'output details',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'InputHash' => 
                        array (
                          'description' => 'the address hash',
                          'type' => 'string',
                          'example' => '21a31Ee1afC51d94C2eFcCAa2xxxxxx',
                        ),
                        'IsContract' => 
                        array (
                          'description' => 'example: true. is it a contract',
                          'type' => 'string',
                          'example' => 'true',
                        ),
                        'Tag' => 
                        array (
                          'description' => 'example: Dex. the tag of the address',
                          'type' => 'string',
                          'example' => 'contracts:Tether: Tether_USD,token_standard:xxxxxx',
                        ),
                        'Amount' => 
                        array (
                          'description' => 'example: 15. the amount of transation sent by the address',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1500',
                        ),
                      ),
                    ),
                  ),
                  'State' => 
                  array (
                    'description' => 'the transaction state. 1: success 0: fail',
                    'type' => 'integer',
                    'format' => 'int32',
                    'enumValueTitles' => 
                    array (
                      0 => 'fail',
                      1 => 'success',
                    ),
                    'example' => '1',
                  ),
                  'GasLimit' => 
                  array (
                    'description' => 'gasLimit',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1232',
                  ),
                  'GasUsed' => 
                  array (
                    'description' => 'gasUsed',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '234',
                  ),
                  'GasPrice' => 
                  array (
                    'description' => 'gasPrice',
                    'type' => 'string',
                    'example' => '5034',
                  ),
                  'Nonce' => 
                  array (
                    'description' => 'nonce',
                    'type' => 'string',
                    'example' => '6242724',
                  ),
                  'TokenTransferDetails' => 
                  array (
                    'description' => 'token transfer details',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Index' => 
                        array (
                          'description' => 'the call layer of to token transfer',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Token' => 
                        array (
                          'description' => 'the token name',
                          'type' => 'string',
                          'example' => 'Tether USD',
                        ),
                        'TokenContractAddress' => 
                        array (
                          'description' => 'the token address',
                          'type' => 'string',
                          'example' => 'dAC17F958D2ee523a2206206994597C13Dxxxxxx',
                        ),
                        'Symbol' => 
                        array (
                          'description' => 'the token symbol',
                          'type' => 'string',
                          'example' => 'USDT',
                        ),
                        'From' => 
                        array (
                          'description' => 'the sender of the token',
                          'type' => 'string',
                          'example' => '21a31Ee1afC51d94C2eFcCAa2092aD1028xxxxxx',
                        ),
                        'To' => 
                        array (
                          'description' => 'the receiver of the token',
                          'type' => 'string',
                          'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                        ),
                        'TokenId' => 
                        array (
                          'description' => 'NFT ID, if the token is erc721',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'Amount' => 
                        array (
                          'description' => 'the token amount',
                          'type' => 'string',
                          'example' => '945.5',
                        ),
                      ),
                    ),
                  ),
                  'ContractDetails' => 
                  array (
                    'description' => 'contract details',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Index' => 
                        array (
                          'description' => 'the call layer of internal transaction',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'From' => 
                        array (
                          'description' => 'the sender of internal transaction',
                          'type' => 'string',
                          'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                        ),
                        'To' => 
                        array (
                          'description' => 'the receiver of internal transaction',
                          'type' => 'string',
                          'example' => 'C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx',
                        ),
                        'Amount' => 
                        array (
                          'description' => 'the value of internal transaction',
                          'type' => 'string',
                          'example' => '945.5
',
                        ),
                        'GasLimit' => 
                        array (
                          'description' => 'the gaslimit of internal transaction',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20712',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'The HTTP status code.',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => 'Return code. For the full list of codes, see Codes and Messages.',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A0D192A-CC0C-5DE5-A3B6-A14CF45508F2\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"ChainName\\": \\"ETH\\",\\n    \\"ChainShortName\\": \\"eth\\",\\n    \\"Txid\\": \\"c92880148d4896d8a2093a891a8f08916fe141fba474ede410xxxxxx\\",\\n    \\"Height\\": 17087552,\\n    \\"TransactionTime\\": \\"1681991807\\",\\n    \\"TransactionType\\": \\"1\\",\\n    \\"Amount\\": \\"27\\",\\n    \\"TransactionSymbol\\": \\"ETH\\",\\n    \\"MethodId\\": \\"a9059cbb\\",\\n    \\"ErrorLog\\": \\"“”\\",\\n    \\"InputData\\": \\"a9059cbb000000000000000000000000c7019579cb9bdb9204e61c7179ba2f88f9d2990b000000000xxxxxx\\",\\n    \\"Txfee\\": \\"0.002321489548255059\\",\\n    \\"Index\\": 94,\\n    \\"InputDetails\\": [\\n      {\\n        \\"InputHash\\": \\"21a31Ee1afC51d94C2eFcCAa2xxxxxx\\",\\n        \\"IsContract\\": \\"true\\",\\n        \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:xxxxxx\\\\n\\",\\n        \\"Amount\\": 3234\\n      }\\n    ],\\n    \\"OutputDetails\\": [\\n      {\\n        \\"InputHash\\": \\"21a31Ee1afC51d94C2eFcCAa2xxxxxx\\",\\n        \\"IsContract\\": \\"true\\",\\n        \\"Tag\\": \\"contracts:Tether: Tether_USD,token_standard:xxxxxx\\",\\n        \\"Amount\\": 1500\\n      }\\n    ],\\n    \\"State\\": 1,\\n    \\"GasLimit\\": 1232,\\n    \\"GasUsed\\": 234,\\n    \\"GasPrice\\": \\"5034\\",\\n    \\"Nonce\\": \\"6242724\\",\\n    \\"TokenTransferDetails\\": [\\n      {\\n        \\"Index\\": 0,\\n        \\"Token\\": \\"Tether USD\\",\\n        \\"TokenContractAddress\\": \\"dAC17F958D2ee523a2206206994597C13Dxxxxxx\\",\\n        \\"Symbol\\": \\"USDT\\",\\n        \\"From\\": \\"21a31Ee1afC51d94C2eFcCAa2092aD1028xxxxxx\\",\\n        \\"To\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"TokenId\\": \\"-1\\",\\n        \\"Amount\\": \\"945.5\\"\\n      }\\n    ],\\n    \\"ContractDetails\\": [\\n      {\\n        \\"Index\\": 1,\\n        \\"From\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"To\\": \\"C7019579cB9bdb9204e61C7179ba2F88F9dxxxxxx\\",\\n        \\"Amount\\": \\"945.5\\\\n\\",\\n        \\"GasLimit\\": 20712\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => 'Transaction Information Query',
    ),
    'Id2MetaVerifyIntl' => 
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
        'abilityTreeCode' => '199203',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthZN5W38',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入的产品方案，固定值：ID_2META',
            'type' => 'string',
            'required' => false,
            'example' => 'ID_2META',
          ),
        ),
        1 => 
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
        2 => 
        array (
          'name' => 'IdentifyNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '身份证号(输入明文)',
            'type' => 'string',
            'required' => false,
            'example' => '429001********8211
',
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '姓名(输入明文)',
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
                'example' => 'EFA11401-C961-5E89-A2D3-BF9883E5CC3D',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：未查得',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFA11401-C961-5E89-A2D3-BF9883E5CC3D\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\"\\n  }\\n}","type":"json"}]',
      'title' => '身份二要素认证接口',
    ),
    'Mobile3MetaVerifyIntl' => 
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
        'abilityTreeCode' => '199210',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthPZCZ2I',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接入的产品方案，固定值：MOBILE_3META',
            'type' => 'string',
            'required' => false,
            'example' => 'MOBILE_3META',
          ),
        ),
        1 => 
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
        2 => 
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
            'example' => '429001********8211
',
          ),
        ),
        3 => 
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
            'example' => '张*
',
          ),
        ),
        4 => 
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
            'example' => '186****1234',
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
                'example' => 'D241532C-4EE9-5A2A-A5A5-C1FD98CE2EDD',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'BizCode' => 
                  array (
                    'description' => '核验结果码。
- 1：核验一致
- 2：核验不一致
- 3：未查得',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D241532C-4EE9-5A2A-A5A5-C1FD98CE2EDD\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"BizCode\\": \\"1\\",\\n    \\"SubCode\\": \\"101\\",\\n    \\"IspName\\": \\"CMCC\\"\\n  }\\n}","type":"json"}]',
      'title' => '手机号三要素认证',
    ),
    'CardOcr' => 
    array (
      'summary' => '卡证Ocr纯服务端能力Api。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '178782',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREcloudauthCW0JNH',
          1 => 'FEATUREcloudauthHOSIED',
          2 => 'FEATUREcloudauthWSJE4H',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MerchantBizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户侧自定义的业务唯一标识，用于后续定位排查问题使用。支持字母和数字的组合，长度最长32位，请确保唯一',
            'type' => 'string',
            'required' => false,
            'example' => 'dso9322***dsjsd22',
          ),
        ),
        1 => 
        array (
          'name' => 'MerchantUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '商户用户ID，或可用于识别特定用户的其他标识符，例如手机号码、电子邮件地址等。强烈建议对userId字段的值进行预脱敏处理，例如对该值进行hash处理',
            'type' => 'string',
            'required' => false,
            'example' => '123456789',
          ),
        ),
        2 => 
        array (
          'name' => 'IdOcrPictureBase64',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'IdOcrPictureUrl',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件正面图片URL',
            'type' => 'string',
            'required' => false,
            'example' => 'https://digital-cardocr-prod8.oss-cn-hangzhou.aliyuncs.com/1669520556530-expo/default/face/20221127114236530_w3kx2e6t.jpg
',
          ),
        ),
        4 => 
        array (
          'name' => 'DocType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '证件类型。',
            'type' => 'string',
            'required' => false,
            'example' => '00000006',
          ),
        ),
        5 => 
        array (
          'name' => 'ProductCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品code',
            'type' => 'string',
            'required' => false,
            'example' => 'ID_OCR_MIN',
          ),
        ),
        6 => 
        array (
          'name' => 'Ocr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行证件OCR
- T：表示需要证件OCR（默认T）
- F：表示不需要',
            'type' => 'string',
            'required' => false,
            'example' => 'T',
          ),
        ),
        7 => 
        array (
          'name' => 'IdFaceQuality',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否进行证脸质量检测
- T：表示需要检测
- F：表示需要检测（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'F',
          ),
        ),
        8 => 
        array (
          'name' => 'Spoof',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启防伪检测
- T：表示开启防伪
- F：表示关闭（默认F）',
            'type' => 'string',
            'required' => false,
            'example' => 'F',
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
                'example' => '4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1',
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '返回信息',
                'type' => 'string',
                'example' => 'success',
              ),
              'Result' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'TransactionId' => 
                  array (
                    'description' => '认证请求的唯一标识',
                    'type' => 'string',
                    'example' => '08573be80f944d95ac812e019e3655a8',
                  ),
                  'Passed' => 
                  array (
                    'description' => '认证是否通过。

- Y：通过。
- N：不通过。',
                    'type' => 'string',
                    'example' => 'Y',
                  ),
                  'SubCode' => 
                  array (
                    'description' => '子结果码。',
                    'type' => 'string',
                    'example' => '200',
                  ),
                  'ExtIdInfo' => 
                  array (
                    'description' => '额外结果信息',
                    'type' => 'string',
                    'example' => '**',
                  ),
                  'ExtCardInfo' => 
                  array (
                    'description' => '卡证识别结果',
                    'type' => 'string',
                    'example' => '{
  "idFaceQualityScore": 98.90,
  "ocrIdInfo": {
    "expiryDate": "2024-04-20",
    "placeOfIssue": "广东",
    "englishName": "ZHENGJIAN,YANGBEN",
    "originOfIssue": "公安部出入境管理局",
    "sex": "女",
    "name": "证件样本",
    "idNumber": "C00000000",
    "issueDate": "2014-04-21",
    "birthDate": "1981-08-03"
  },
  "spoofInfo": {
    "spoofResult": "N",
    "spoofType": [
      "SCREEN_REMARK"
    ]
  }
}',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'substitutions' => 
        array (
          0 => 'Cloudauth-intl::2022-08-09::DocOcr',
        ),
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4EB356FE-BB6A-5DCC-B4C5-E8051787EBA1\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Result\\": {\\n    \\"TransactionId\\": \\"08573be80f944d95ac812e019e3655a8\\",\\n    \\"Passed\\": \\"Y\\",\\n    \\"SubCode\\": \\"200\\",\\n    \\"ExtIdInfo\\": \\"**\\",\\n    \\"ExtCardInfo\\": \\"{\\\\n  \\\\\\"idFaceQualityScore\\\\\\": 98.90,\\\\n  \\\\\\"ocrIdInfo\\\\\\": {\\\\n    \\\\\\"expiryDate\\\\\\": \\\\\\"2024-04-20\\\\\\",\\\\n    \\\\\\"placeOfIssue\\\\\\": \\\\\\"广东\\\\\\",\\\\n    \\\\\\"englishName\\\\\\": \\\\\\"ZHENGJIAN,YANGBEN\\\\\\",\\\\n    \\\\\\"originOfIssue\\\\\\": \\\\\\"公安部出入境管理局\\\\\\",\\\\n    \\\\\\"sex\\\\\\": \\\\\\"女\\\\\\",\\\\n    \\\\\\"name\\\\\\": \\\\\\"证件样本\\\\\\",\\\\n    \\\\\\"idNumber\\\\\\": \\\\\\"C00000000\\\\\\",\\\\n    \\\\\\"issueDate\\\\\\": \\\\\\"2014-04-21\\\\\\",\\\\n    \\\\\\"birthDate\\\\\\": \\\\\\"1981-08-03\\\\\\"\\\\n  },\\\\n  \\\\\\"spoofInfo\\\\\\": {\\\\n    \\\\\\"spoofResult\\\\\\": \\\\\\"N\\\\\\",\\\\n    \\\\\\"spoofType\\\\\\": [\\\\n      \\\\\\"SCREEN_REMARK\\\\\\"\\\\n    ]\\\\n  }\\\\n}\\"\\n  }\\n}","type":"json"}]',
      'title' => '卡证Ocr纯服务端能力Api',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'cloudauth-intl.cn-hongkong.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'ekyc-saas',
    'version' => '2023-01-12',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 178777,
      'title' => '原子服务API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ScanDocument',
        1 => 'VerifyDocument',
        2 => 'FaceRecognitionCompare',
        3 => 'FaceToFaceCompare',
      ),
    ),
    1 => 
    array (
      'id' => 178782,
      'title' => '综合服务API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'IdDetectionAndScanDocument',
        1 => 'IdDetectOcrCompareFaces',
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
    'ScanDocument' => 
    array (
      'summary' => '提供多个国家的身份证/驾照/护照/居留证的OCR识别服务。',
      'path' => '/scan_document',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166307',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'countryCode' => 
              array (
                'description' => '卡证的国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                'type' => 'string',
                'required' => false,
                'example' => 'JPN',
              ),
              'documentType' => 
              array (
                'description' => '卡证类型。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'IDENTITY_CARD' => '身份证',
                  'DRIVER_LICENSE' => '驾照',
                  'RESIDENCE_CARD' => '居留证',
                  'PASSPORT' => '护照',
                ),
                'example' => 'IDENTITY_CARD',
              ),
              'imageAType' => 
              array (
                'description' => '用来指明传入的imageDataA/imageUrlA图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageBType' => 
              array (
                'description' => '用来指明传入的imageDataB/imageUrlB图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageDataA' => 
              array (
                'description' => '图片数据(base64)，卡证正面照片，
与imageUrlA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageDataB' => 
              array (
                'description' => '图片数据(base64)，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageUrlA' => 
              array (
                'description' => '图片网址链接，卡证正面照片，
与imageDataA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'imageUrlB' => 
              array (
                'description' => '图片网址链接，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Address' => 
                  array (
                    'description' => '地址。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'AddressConfidence' => 
                  array (
                    'description' => 'Address字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'AddressPosition' => 
                  array (
                    'description' => 'Address字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'DateOfBirth' => 
                  array (
                    'description' => '出生日期。',
                    'type' => 'string',
                    'example' => '2009-01-16',
                  ),
                  'DateOfBirthConfidence' => 
                  array (
                    'description' => 'DateOfBirth字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'DateOfBirthPosition' => 
                  array (
                    'description' => 'DateOfBirth字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'DocumentNumber' => 
                  array (
                    'description' => '证件号。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'DocumentNumber2' => 
                  array (
                    'description' => '证件副号。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'DocumentNumber2Confidence' => 
                  array (
                    'description' => 'DocumentNumber2字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'DocumentNumber2Position' => 
                  array (
                    'description' => 'DocumentNumber2字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'DocumentNumberConfidence' => 
                  array (
                    'description' => 'DocumentNumber字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'DocumentNumberPosition' => 
                  array (
                    'description' => 'DocumentNumber字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'ExpirationDate' => 
                  array (
                    'description' => '证件有效期。',
                    'type' => 'string',
                    'example' => '2027.01.16',
                  ),
                  'ExpirationDateConfidence' => 
                  array (
                    'description' => 'ExpirationDate字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'ExpirationDatePosition' => 
                  array (
                    'description' => 'ExpirationDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'FirstName' => 
                  array (
                    'description' => '名字。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'FirstNameConfidence' => 
                  array (
                    'description' => 'FirstName字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'FirstNamePosition' => 
                  array (
                    'description' => 'FirstName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'FullName' => 
                  array (
                    'description' => '全名。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'FullNameConfidence' => 
                  array (
                    'description' => 'FullName字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'FullNamePosition' => 
                  array (
                    'description' => 'FullName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'IssuedDate' => 
                  array (
                    'description' => '签发日期。',
                    'type' => 'string',
                    'example' => 'Jan 16 2023',
                  ),
                  'IssuedDateConfidence' => 
                  array (
                    'description' => 'IssuedDate字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'IssuedDatePosition' => 
                  array (
                    'description' => 'IssuedDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'IssuingAuthority' => 
                  array (
                    'description' => '签发机构名称。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'IssuingAuthorityConfidence' => 
                  array (
                    'description' => 'IssuingAuthority字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'IssuingAuthorityPosition' => 
                  array (
                    'description' => 'IssuingAuthority字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'LastName' => 
                  array (
                    'description' => '姓氏。',
                    'type' => 'string',
                    'example' => 'null',
                  ),
                  'LastNameConfidence' => 
                  array (
                    'description' => 'LastName字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'LastNamePosition' => 
                  array (
                    'description' => 'LastName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'NationalityCode' => 
                  array (
                    'description' => '证件上的国家/地区代码。',
                    'type' => 'string',
                    'example' => 'JP',
                  ),
                  'NationalityCodeConfidence' => 
                  array (
                    'description' => 'NationalityCode字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'NationalityCodePosition' => 
                  array (
                    'description' => 'NationalityCode字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                  'NormalizedDateOfBirth' => 
                  array (
                    'description' => '格式化后的出生日期（格式: YYYY/MM/dd）',
                    'type' => 'string',
                    'example' => '2009/01/16',
                  ),
                  'NormalizedExpirationDate' => 
                  array (
                    'description' => '格式化后的失效时间（格式: YYYY/MM/dd）',
                    'type' => 'string',
                    'example' => '2027/01/16',
                  ),
                  'NormalizedIssuedDate' => 
                  array (
                    'description' => '格式化后的签发日期（格式: YYYY/MM/dd）',
                    'type' => 'string',
                    'example' => '2023/01/16',
                  ),
                  'NormalizedNationalityCode' => 
                  array (
                    'description' => '格式化后的国家/地区代码，遵循Alpha-3 code(ISO 3166)规则。',
                    'type' => 'string',
                    'example' => 'JPN',
                  ),
                  'NormalizedSex' => 
                  array (
                    'description' => '格式化后的性别。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'null' => '空',
                      'F' => '女性',
                      'M' => '男性',
                    ),
                    'example' => 'M',
                  ),
                  'Sex' => 
                  array (
                    'description' => '性别。',
                    'type' => 'string',
                    'example' => 'Male',
                  ),
                  'SexConfidence' => 
                  array (
                    'description' => 'Sex字段识别的置信度。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '0.92',
                  ),
                  'SexPosition' => 
                  array (
                    'description' => 'Sex字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '具体坐标。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1627',
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"Address\\": \\"null\\",\\n    \\"AddressConfidence\\": 0.92,\\n    \\"AddressPosition\\": [\\n      1627\\n    ],\\n    \\"DateOfBirth\\": \\"2009-01-16\\",\\n    \\"DateOfBirthConfidence\\": 0.92,\\n    \\"DateOfBirthPosition\\": [\\n      1627\\n    ],\\n    \\"DocumentNumber\\": \\"null\\",\\n    \\"DocumentNumber2\\": \\"null\\",\\n    \\"DocumentNumber2Confidence\\": 0.92,\\n    \\"DocumentNumber2Position\\": [\\n      1627\\n    ],\\n    \\"DocumentNumberConfidence\\": 0.92,\\n    \\"DocumentNumberPosition\\": [\\n      1627\\n    ],\\n    \\"ExpirationDate\\": \\"2027.01.16\\",\\n    \\"ExpirationDateConfidence\\": 0.92,\\n    \\"ExpirationDatePosition\\": [\\n      1627\\n    ],\\n    \\"FirstName\\": \\"null\\",\\n    \\"FirstNameConfidence\\": 0.92,\\n    \\"FirstNamePosition\\": [\\n      1627\\n    ],\\n    \\"FullName\\": \\"null\\",\\n    \\"FullNameConfidence\\": 0.92,\\n    \\"FullNamePosition\\": [\\n      1627\\n    ],\\n    \\"IssuedDate\\": \\"Jan 16 2023\\",\\n    \\"IssuedDateConfidence\\": 0.92,\\n    \\"IssuedDatePosition\\": [\\n      1627\\n    ],\\n    \\"IssuingAuthority\\": \\"null\\",\\n    \\"IssuingAuthorityConfidence\\": 0.92,\\n    \\"IssuingAuthorityPosition\\": [\\n      1627\\n    ],\\n    \\"LastName\\": \\"null\\",\\n    \\"LastNameConfidence\\": 0.92,\\n    \\"LastNamePosition\\": [\\n      1627\\n    ],\\n    \\"NationalityCode\\": \\"JP\\",\\n    \\"NationalityCodeConfidence\\": 0.92,\\n    \\"NationalityCodePosition\\": [\\n      1627\\n    ],\\n    \\"NormalizedDateOfBirth\\": \\"2009/01/16\\",\\n    \\"NormalizedExpirationDate\\": \\"2027/01/16\\",\\n    \\"NormalizedIssuedDate\\": \\"2023/01/16\\",\\n    \\"NormalizedNationalityCode\\": \\"JPN\\",\\n    \\"NormalizedSex\\": \\"M\\",\\n    \\"Sex\\": \\"Male\\",\\n    \\"SexConfidence\\": 0.92,\\n    \\"SexPosition\\": [\\n      1627\\n    ]\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-证件OCR',
      'description' => '上传卡证正面照片、背面照片（可选），返回结构化的OCR识别结果。
### 使用限制
- 图片格式：JPEG、PNG；
- 分辨率限：单个图像图像长边≤4000像素, 短边≥400像素，建议尺寸1024*768；
- 文件大小：单个图像数据大小取值范围 [4KB, 6MB]。
### 数据协议
- 请求：application/json；
- 响应：application/json；
- 二进制数据格式：base64。',
    ),
    'VerifyDocument' => 
    array (
      'summary' => '卡证类型检测及防伪服务接口。',
      'path' => '/verify_document',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166325',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'countryCode' => 
              array (
                'description' => '卡证的国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则，
建议传入该字段以提高识别准确率。',
                'type' => 'string',
                'required' => false,
                'example' => 'JPN',
              ),
              'detThickness' => 
              array (
                'description' => '是否检测证件厚度，以提高防伪识别准确率，
默认false。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'documentType' => 
              array (
                'description' => '卡证类型，
建议传入该字段以提高识别准确率。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'IDENTITY_CARD' => '身份证',
                  'DRIVER_LICENSE' => '驾照',
                  'RESIDENCE_CARD' => '居留证',
                  'PASSPORT' => '护照',
                ),
                'example' => ' IDENTITY_CARD',
              ),
              'imageAType' => 
              array (
                'description' => '用来指明传入的imageDataA/imageUrlA图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageBType' => 
              array (
                'description' => '用来指明传入的imageDataB/imageUrlB图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageCType' => 
              array (
                'description' => '用来指明传入的imageDataC/imageUrlC图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageDataA' => 
              array (
                'description' => '图片数据(base64)，卡证正面照片，
与imageUrlA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageDataB' => 
              array (
                'description' => '图片数据(base64)，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageDataC' => 
              array (
                'description' => '图片数据(base64)，卡证厚度照片（侧面照），
如果detThickness为true，则与imageUrlC之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageUrlA' => 
              array (
                'description' => '图片网址链接，卡证正面照片，
与imageDataA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'imageUrlB' => 
              array (
                'description' => '图片网址链接，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'imageUrlC' => 
              array (
                'description' => '图片网址链接，卡证厚度照片（侧面照），
如果detThickness为true，则与imageDataC之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AntiSpoofingResult' => 
                  array (
                    'description' => '卡证防伪结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Passed' => 
                      array (
                        'description' => '是否通过防伪检测。',
                        'type' => 'boolean',
                        'enumValueTitles' => 
                        array (
                          'true' => 'true',
                          'false' => 'false',
                        ),
                        'example' => 'true',
                      ),
                      'Risks' => 
                      array (
                        'description' => '命中的卡证照片伪造风险。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '风险名称。',
                          'type' => 'string',
                          'enumValueTitles' => 
                          array (
                            'BLUR_DOCUMENT' => '卡证照片模糊',
                            'NO_THICKNESS_DOCUMENT' => '未检测到证件厚度',
                            'FLASH_DOCUMENT' => '证件照片存在反光',
                            'PORTRAIT_PHY_DOCUMENT' => '证件人像照片存在物理篡改',
                            'CARD_INCOMPLETE' => '照片内卡证不完整',
                            'PORTRAIT_PS_DOCUMENT' => '证件人像照片存在PS篡改',
                            'FAKE_DOCUMENT' => '卡证疑似伪造假证',
                            'GRAY_PRINTED_DOCUMENT' => '卡证照片色彩黑白',
                            'SCREEN_SHOT_DOCUMENT' => '卡证照片为屏幕截图或屏幕翻拍',
                          ),
                          'example' => 'SCREEN_SHOT_DOCUMENT',
                        ),
                      ),
                    ),
                  ),
                  'CountryCode' => 
                  array (
                    'description' => '检测到的卡证国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                    'type' => 'string',
                    'example' => 'JPN',
                  ),
                  'DetectionResult' => 
                  array (
                    'description' => '卡证类型检测结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CardRectangle' => 
                      array (
                        'description' => '图片内卡证坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角；
当图像中有多个卡片，只取区域面积最大的卡片。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '600',
                        ),
                      ),
                      'Height' => 
                      array (
                        'description' => '卡证正面图片高度，单位：像素。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '382',
                      ),
                      'PortraitRectangle' => 
                      array (
                        'description' => '图片内卡证的证件照坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '572',
                        ),
                      ),
                      'Width' => 
                      array (
                        'description' => '卡证正面图片宽度，单位：像素。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '600',
                      ),
                    ),
                  ),
                  'DocumentType' => 
                  array (
                    'description' => '检测到的卡证类型。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'IDENTITY_CARD' => '身份证',
                      'DRIVER_LICENSE' => '驾照',
                      'RESIDENCE_CARD' => '居留证',
                      'PASSPORT' => '护照',
                    ),
                    'example' => 'IDENTITY_CARD',
                  ),
                  'Passed' => 
                  array (
                    'description' => '是否通过卡证检测及防伪识别。',
                    'type' => 'boolean',
                    'enumValueTitles' => 
                    array (
                      'true' => 'true',
                      'false' => 'false',
                    ),
                    'example' => 'true',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"AntiSpoofingResult\\": {\\n      \\"Passed\\": true,\\n      \\"Risks\\": [\\n        \\"SCREEN_SHOT_DOCUMENT\\"\\n      ]\\n    },\\n    \\"CountryCode\\": \\"JPN\\",\\n    \\"DetectionResult\\": {\\n      \\"CardRectangle\\": [\\n        600\\n      ],\\n      \\"Height\\": 382,\\n      \\"PortraitRectangle\\": [\\n        572\\n      ],\\n      \\"Width\\": 600\\n    },\\n    \\"DocumentType\\": \\"IDENTITY_CARD\\",\\n    \\"Passed\\": true\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-证件检测及防伪识别',
      'description' => '上传卡证照片，返回该证件所属国家、卡证类型，以及是否存在伪造证件照片风险。
### 使用限制
-   图片格式：JPEG、PNG；
-   分辨率限：单个图像不小于64x64像素，不大于4096x4096像素；
-   文件大小：单个图像数据大小取值范围 [4KB, 6MB]；
-   除卡证正面外，卡证背面及卡证厚度照片为选择性上传。

### 数据协议

-  请求：application/json；
-  响应：application/json；
-  二进制数据格式：base64。',
    ),
    'FaceRecognitionCompare' => 
    array (
      'summary' => '对比证件上的人像照片与上传的自拍照片是否是同一个人。',
      'path' => '/face_recognition_compare',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166322',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'idCardImageData' => 
              array (
                'description' => '图片数据(base64)，卡证正面照片，
与idCardImageUrl之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'idCardImageType' => 
              array (
                'description' => '用来指明传入的idCardImageData/idCardImageUrl图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'idCardImageUrl' => 
              array (
                'description' => '图片网址链接，卡证正面照片，
与idCardImageData之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'portraitImageData' => 
              array (
                'description' => '图片数据(base64)，人脸自拍照片，
与portraitImageUrl之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'portraitImageType' => 
              array (
                'description' => '用来指明传入的portraitImageData/portraitImageUrl图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'portraitImageUrl' => 
              array (
                'description' => '图片网址链接，人脸自拍照片，
与portraitImageData之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'qualityControl' => 
              array (
                'description' => '图片质量控制，可选参数，默认为NONE；
若图片质量不满足要求，则返回结果中会提示质量检测失败。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'HIGH' => '较高的质量要求',
                  'LOW' => '较低的质量要求',
                  'NONE' => '不进行控制',
                  'NORMAL' => '一般的质量要求',
                ),
                'example' => 'NONE',
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Match' => 
                  array (
                    'description' => '人脸匹配结果。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'fail' => '不匹配',
                      'pass' => '匹配',
                      'examine' => '建议人工审核',
                    ),
                    'example' => 'pass',
                  ),
                  'Score' => 
                  array (
                    'description' => '人脸相似度得分，范围：[0.0, 100.0]，越高则代表越相似。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '60.8',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"Match\\": \\"pass\\",\\n    \\"Score\\": 60.8\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-人证比对',
      'description' => '上传URL或base64编码的人脸自拍照及卡证照片，对二者进行人脸匹配识别，返回人脸相似度得分及匹配结果。
### 使用限制

- 图片格式：JPEG、PNG；
- 分辨率限：单个图像图像长边≤4096像素, 短边≥240像素；
- 文件大小：单个图像数据大小取值范围 [4KB, 6MB]。

### 数据协议

- 请求：application/json；
- 响应：application/json；
- 二进制数据格式：base64。',
    ),
    'FaceToFaceCompare' => 
    array (
      'summary' => '对比两张人脸自拍照片是否是同一人。',
      'path' => '/face_to_face_compare',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166320',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'portraitImageData1' => 
              array (
                'description' => '图片数据(base64)，第一张人脸自拍照片，
与portraitImageUrl1之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'portraitImageData2' => 
              array (
                'description' => '图片数据(base64)，第二张人脸自拍照片，
与portraitImageUrl2之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'portraitImageType1' => 
              array (
                'description' => '用来指明传入的portraitImageData1/portraitImageUrl1图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'portraitImageType2' => 
              array (
                'description' => '用来指明传入的portraitImageData2/portraitImageUrl2图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'portraitImageUrl1' => 
              array (
                'description' => '图片网址链接，第一张人脸自拍照片，
与portraitImageData1之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'portraitImageUrl2' => 
              array (
                'description' => '图片网址链接，第二张人脸自拍照片，
与portraitImageData2之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'qualityControl' => 
              array (
                'description' => '图片质量控制，可选参数，默认为NONE；
若图片质量不满足要求，则返回结果中会提示质量检测失败。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'HIGH' => '较高的质量要求',
                  'LOW' => '较低的质量要求',
                  'NONE' => '不进行控制',
                  'NORMAL' => '一般的质量要求',
                ),
                'example' => 'NONE',
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Match' => 
                  array (
                    'description' => '人脸匹配结果。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'fail' => '不匹配',
                      'pass' => '匹配',
                      'examine' => '建议人工审核',
                    ),
                    'example' => 'pass',
                  ),
                  'Score' => 
                  array (
                    'description' => '人脸相似度得分，范围：[0.0, 100.0]，越高表示越相似。',
                    'type' => 'number',
                    'format' => 'double',
                    'example' => '60.8',
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"Match\\": \\"pass\\",\\n    \\"Score\\": 60.8\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-人人比对',
      'description' => '上传URL或base64编码的两张人脸自拍照片，返回二者相似度得分及匹配结果。
### 使用限制
图片格式：JPEG、PNG；
分辨率限：单个图像图像长边≤4096像素, 短边≥240像素；
文件大小：单个图像Base64数据大小取值范围 [4KB, 6MB]。
### 数据协议
请求：application/json；
响应：application/json；
二进制数据格式：base64。',
    ),
    'IdDetectionAndScanDocument' => 
    array (
      'summary' => '包含证件类型检测、证件照片防伪识别、证件OCR服务。',
      'path' => '/id_detection_and_scan_document',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166300',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'countryCode' => 
              array (
                'description' => '卡证的国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                'type' => 'string',
                'required' => false,
                'example' => 'JPN',
              ),
              'documentType' => 
              array (
                'description' => '卡证类型。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'IDENTITY_CARD' => '身份证',
                  'DRIVER_LICENSE' => '驾照',
                  'RESIDENCE_CARD' => '居留证',
                  'PASSPORT' => '护照',
                ),
                'example' => 'IDENTITY_CARD',
              ),
              'imageAType' => 
              array (
                'description' => '用来指明传入的imageDataA/imageUrlA图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageBType' => 
              array (
                'description' => '用来指明传入的imageDataB/imageUrlB图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageDataA' => 
              array (
                'description' => '图片数据(base64)，卡证正面照片，
与imageUrlA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageDataB' => 
              array (
                'description' => '图片数据(base64)，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageUrlA' => 
              array (
                'description' => '图片网址链接，卡证正面照片，
与imageDataA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'imageUrlB' => 
              array (
                'description' => '图片网址链接，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
            ),
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'IdDetectResult' => 
                  array (
                    'description' => '证件类型检测及防伪识别结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'AntiSpoofingResult' => 
                      array (
                        'description' => '卡证照片防伪识别结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Passed' => 
                          array (
                            'description' => '是否通过防伪检测。',
                            'type' => 'boolean',
                            'enumValueTitles' => 
                            array (
                              'true' => 'true',
                              'false' => 'false',
                            ),
                            'example' => 'false',
                          ),
                          'Risks' => 
                          array (
                            'description' => '命中的卡证照片伪造风险。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '风险名称。',
                              'type' => 'string',
                              'enumValueTitles' => 
                              array (
                                'BLUR_DOCUMENT' => '卡证照片模糊',
                                'FLASH_DOCUMENT' => '证件照片存在反光',
                                'PORTRAIT_PHY_DOCUMENT' => '证件人像照片存在物理篡改',
                                'CARD_INCOMPLETE' => '照片内卡证不完整',
                                'PORTRAIT_PS_DOCUMENT' => '证件人像照片存在PS篡改',
                                'FAKE_DOCUMENT' => '卡证疑似伪造假证',
                                'GRAY_PRINTED_DOCUMENT' => '卡证照片色彩黑白',
                                'SCREEN_SHOT_DOCUMENT' => '卡证照片为屏幕截图或屏幕翻拍',
                              ),
                              'example' => 'SCREEN_SHOT_DOCUMENT',
                            ),
                          ),
                        ),
                      ),
                      'CountryCode' => 
                      array (
                        'description' => '检测到的卡证国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                        'type' => 'string',
                        'example' => 'JPN',
                      ),
                      'DetectionResult' => 
                      array (
                        'description' => '证件类型检测结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'CardRectangle' => 
                          array (
                            'description' => '图片内卡证坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角；
当图像中有多个卡片，只取区域面积最大的卡片。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '600',
                            ),
                          ),
                          'Height' => 
                          array (
                            'description' => '卡证正面图片高度，单位：像素。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '382',
                          ),
                          'PortraitRectangle' => 
                          array (
                            'description' => '图片内卡证的证件照坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '572',
                            ),
                          ),
                          'Width' => 
                          array (
                            'description' => '卡证正面图片宽度，单位：像素。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '600',
                          ),
                        ),
                      ),
                      'DocumentType' => 
                      array (
                        'description' => '检测到的卡证类型。',
                        'type' => 'string',
                        'enumValueTitles' => 
                        array (
                          'IDENTITY_CARD' => '身份证',
                          'DRIVER_LICENSE' => '驾照',
                          'RESIDENCE_CARD' => '居留证',
                          'PASSPORT' => '护照',
                        ),
                        'example' => 'IDENTITY_CARD',
                      ),
                      'Passed' => 
                      array (
                        'description' => '是否通过卡证检测及防伪识别。',
                        'type' => 'boolean',
                        'enumValueTitles' => 
                        array (
                          'true' => 'true',
                          'false' => 'false',
                        ),
                        'example' => 'false',
                      ),
                      'Warning' => 
                      array (
                        'description' => '警告信息，不影响Passed结果，仅作为参考信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体警告内容。',
                          'type' => 'string',
                          'example' => 'NOT_MATCH',
                        ),
                      ),
                    ),
                  ),
                  'OcrResult' => 
                  array (
                    'description' => '证件OCR结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Address' => 
                      array (
                        'description' => '地址。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'AddressConfidence' => 
                      array (
                        'description' => 'Address字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'AddressPosition' => 
                      array (
                        'description' => 'Address字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'DateOfBirth' => 
                      array (
                        'description' => '出生日期。',
                        'type' => 'string',
                        'example' => '2009-01-16',
                      ),
                      'DateOfBirthConfidence' => 
                      array (
                        'description' => 'DateOfBirth字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'DateOfBirthPosition' => 
                      array (
                        'description' => 'DateOfBirth字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'DocumentNumber' => 
                      array (
                        'description' => '证件号。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'DocumentNumber2' => 
                      array (
                        'description' => '证件副号。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'DocumentNumber2Confidence' => 
                      array (
                        'description' => 'DocumentNumber2字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'DocumentNumber2Position' => 
                      array (
                        'description' => 'DocumentNumber2字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'DocumentNumberConfidence' => 
                      array (
                        'description' => 'DocumentNumber字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'DocumentNumberPosition' => 
                      array (
                        'description' => 'DocumentNumber字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'ExpirationDate' => 
                      array (
                        'description' => '证件有效期。',
                        'type' => 'string',
                        'example' => '2027.01.16',
                      ),
                      'ExpirationDateConfidence' => 
                      array (
                        'description' => 'ExpirationDate字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'ExpirationDatePosition' => 
                      array (
                        'description' => 'ExpirationDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'FirstName' => 
                      array (
                        'description' => '名字。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'FirstNameConfidence' => 
                      array (
                        'description' => 'FirstName字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'FirstNamePosition' => 
                      array (
                        'description' => 'FirstName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'FullName' => 
                      array (
                        'description' => '全名。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'FullNameConfidence' => 
                      array (
                        'description' => 'FullName字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'FullNamePosition' => 
                      array (
                        'description' => 'FullName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'IssuedDate' => 
                      array (
                        'description' => '签发日期。',
                        'type' => 'string',
                        'example' => 'Jan 16 2023',
                      ),
                      'IssuedDateConfidence' => 
                      array (
                        'description' => 'IssuedDate字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'IssuedDatePosition' => 
                      array (
                        'description' => 'IssuedDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'IssuingAuthority' => 
                      array (
                        'description' => '签发机构名称。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'IssuingAuthorityConfidence' => 
                      array (
                        'description' => 'IssuingAuthority字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'IssuingAuthorityPosition' => 
                      array (
                        'description' => 'IssuingAuthority字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'LastName' => 
                      array (
                        'description' => '姓氏。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'LastNameConfidence' => 
                      array (
                        'description' => 'LastName字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'LastNamePosition' => 
                      array (
                        'description' => 'LastName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'NationalityCode' => 
                      array (
                        'description' => '证件上的国家/地区代码。',
                        'type' => 'string',
                        'example' => 'JP',
                      ),
                      'NationalityCodeConfidence' => 
                      array (
                        'description' => 'NationalityCode字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'NationalityCodePosition' => 
                      array (
                        'description' => 'NationalityCode字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                      'NormalizedDateOfBirth' => 
                      array (
                        'description' => '格式化后的出生日期（格式: YYYY/MM/dd）',
                        'type' => 'string',
                        'example' => '2009/01/16',
                      ),
                      'NormalizedExpirationDate' => 
                      array (
                        'description' => '格式化后的失效时间（格式: YYYY/MM/dd）',
                        'type' => 'string',
                        'example' => '2027/01/16',
                      ),
                      'NormalizedIssuedDate' => 
                      array (
                        'description' => '格式化后的签发日期（格式: YYYY/MM/dd）',
                        'type' => 'string',
                        'example' => '2023/01/16',
                      ),
                      'NormalizedNationalityCode' => 
                      array (
                        'description' => '格式化后的国家/地区代码，遵循Alpha-3 code(ISO 3166)规则。',
                        'type' => 'string',
                        'example' => 'JPN',
                      ),
                      'NormalizedSex' => 
                      array (
                        'description' => '格式化后的性别。',
                        'type' => 'string',
                        'enumValueTitles' => 
                        array (
                          'null' => '空',
                          'F' => '女',
                          'M' => '男',
                        ),
                        'example' => 'M',
                      ),
                      'Sex' => 
                      array (
                        'description' => '性别。',
                        'type' => 'string',
                        'example' => 'Male',
                      ),
                      'SexConfidence' => 
                      array (
                        'description' => 'Sex字段识别的置信度。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '0.92',
                      ),
                      'SexPosition' => 
                      array (
                        'description' => 'Sex字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '具体坐标。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1627',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Message' => 
              array (
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"IdDetectResult\\": {\\n      \\"AntiSpoofingResult\\": {\\n        \\"Passed\\": false,\\n        \\"Risks\\": [\\n          \\"SCREEN_SHOT_DOCUMENT\\"\\n        ]\\n      },\\n      \\"CountryCode\\": \\"JPN\\",\\n      \\"DetectionResult\\": {\\n        \\"CardRectangle\\": [\\n          600\\n        ],\\n        \\"Height\\": 382,\\n        \\"PortraitRectangle\\": [\\n          572\\n        ],\\n        \\"Width\\": 600\\n      },\\n      \\"DocumentType\\": \\"IDENTITY_CARD\\",\\n      \\"Passed\\": false,\\n      \\"Warning\\": [\\n        \\"NOT_MATCH\\"\\n      ]\\n    },\\n    \\"OcrResult\\": {\\n      \\"Address\\": \\"null\\",\\n      \\"AddressConfidence\\": 0.92,\\n      \\"AddressPosition\\": [\\n        1627\\n      ],\\n      \\"DateOfBirth\\": \\"2009-01-16\\",\\n      \\"DateOfBirthConfidence\\": 0.92,\\n      \\"DateOfBirthPosition\\": [\\n        1627\\n      ],\\n      \\"DocumentNumber\\": \\"null\\",\\n      \\"DocumentNumber2\\": \\"null\\",\\n      \\"DocumentNumber2Confidence\\": 0.92,\\n      \\"DocumentNumber2Position\\": [\\n        1627\\n      ],\\n      \\"DocumentNumberConfidence\\": 0.92,\\n      \\"DocumentNumberPosition\\": [\\n        1627\\n      ],\\n      \\"ExpirationDate\\": \\"2027.01.16\\",\\n      \\"ExpirationDateConfidence\\": 0.92,\\n      \\"ExpirationDatePosition\\": [\\n        1627\\n      ],\\n      \\"FirstName\\": \\"null\\",\\n      \\"FirstNameConfidence\\": 0.92,\\n      \\"FirstNamePosition\\": [\\n        1627\\n      ],\\n      \\"FullName\\": \\"null\\",\\n      \\"FullNameConfidence\\": 0.92,\\n      \\"FullNamePosition\\": [\\n        1627\\n      ],\\n      \\"IssuedDate\\": \\"Jan 16 2023\\",\\n      \\"IssuedDateConfidence\\": 0.92,\\n      \\"IssuedDatePosition\\": [\\n        1627\\n      ],\\n      \\"IssuingAuthority\\": \\"null\\",\\n      \\"IssuingAuthorityConfidence\\": 0.92,\\n      \\"IssuingAuthorityPosition\\": [\\n        1627\\n      ],\\n      \\"LastName\\": \\"null\\",\\n      \\"LastNameConfidence\\": 0.92,\\n      \\"LastNamePosition\\": [\\n        1627\\n      ],\\n      \\"NationalityCode\\": \\"JP\\",\\n      \\"NationalityCodeConfidence\\": 0.92,\\n      \\"NationalityCodePosition\\": [\\n        1627\\n      ],\\n      \\"NormalizedDateOfBirth\\": \\"2009/01/16\\",\\n      \\"NormalizedExpirationDate\\": \\"2027/01/16\\",\\n      \\"NormalizedIssuedDate\\": \\"2023/01/16\\",\\n      \\"NormalizedNationalityCode\\": \\"JPN\\",\\n      \\"NormalizedSex\\": \\"M\\",\\n      \\"Sex\\": \\"Male\\",\\n      \\"SexConfidence\\": 0.92,\\n      \\"SexPosition\\": [\\n        1627\\n      ]\\n    }\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-证件防伪检测及OCR二合一服务',
      'description' => '上传卡证正面照片、背面照片（可选），以及卡证所属的国家/地区代码及卡证类型，返回卡证检测结果、防伪结果、以及结构化的OCR结果。

如果上传的照片与参数中的证件类型不一致，证件检测结果会自动修正，完成对应证件的OCR服务调用，返回结果中会提示前二者“NOT_MATCH”，不影响对OCR结果的后续使用。
### 使用限制

- 图片格式：JPEG、PNG；
- 图片文件：单个图像不小于64x64像素，不大于4096x4096像素，单个图像数据大小取值范围 [4KB, 6MB]; 
- PDF文件：取值范围 [4KB, 6MB]。

### 数据协议

- 请求：application/json；
- 响应：application/json；
- 二进制数据格式：Base64。',
    ),
    'IdDetectOcrCompareFaces' => 
    array (
      'summary' => '包含证件类型检测、卡证照片防伪识别、证件OCR、及人证比对服务。',
      'path' => '/id_detect_ocr_compare_faces',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '166215',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURElearnH3UIAC',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数。',
            'type' => 'object',
            'properties' => 
            array (
              'cardDetect' => 
              array (
                'description' => '是否执行证件类型检测及防伪识别，默认为false。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'countryCode' => 
              array (
                'description' => '卡证的国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                'type' => 'string',
                'required' => false,
                'example' => 'JPN',
              ),
              'documentType' => 
              array (
                'description' => '卡证类型。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'IDENTITY_CARD' => '身份证',
                  'DRIVER_LICENSE' => '驾照',
                  'RESIDENCE_CARD' => '居留证',
                  'PASSPORT' => '护照',
                ),
                'example' => 'IDENTITY_CARD',
              ),
              'faceCompare' => 
              array (
                'description' => '是否执行人证比对，默认为false。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'imageAType' => 
              array (
                'description' => '用来指明传入的imageDataA/imageUrlA图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageBType' => 
              array (
                'description' => '用来指明传入的imageDataB/imageUrlB图片类型，是正常的图片还是pdf，默认为pic。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'pdf' => 'pdf',
                  'pic' => 'pic',
                ),
                'example' => 'pic',
              ),
              'imageDataA' => 
              array (
                'description' => '图片数据(base64)，卡证正面照片，
与imageUrlA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageDataB' => 
              array (
                'description' => '图片数据(base64)，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'imageUrlA' => 
              array (
                'description' => '图片网址链接，卡证正面照片，
与imageDataA之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'imageUrlB' => 
              array (
                'description' => '图片网址链接，卡证背面照片。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'OCR' => 
              array (
                'description' => '是否执行卡证OCR，默认为false。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
              'portraitImageData' => 
              array (
                'description' => '图片数据(base64)，人脸自拍照片；
faceCompare=true时，与portraitImageUrl之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => '/9j/4AAQSkZJRgABAQEAXgBeAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0a
HBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL******',
              ),
              'portraitImageUrl' => 
              array (
                'description' => '图片网址链接，人脸自拍照片；
faceCompare=true时，与portraitImageData之间必须上传一个参数。',
                'type' => 'string',
                'required' => false,
                'example' => 'https://your_test_image.jpg',
              ),
              'qualityControl' => 
              array (
                'description' => '图片质量控制，可选参数，默认为NONE；
若图片质量不满足要求，则返回结果中会提示质量检测失败。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'HIGH' => '较高的质量要求',
                  'LOW' => '较低的质量要求',
                  'NONE' => '不进行控制',
                  'NORMAL' => '一般的质量要求',
                ),
                'example' => 'NONE',
              ),
              'Unrepeat' => 
              array (
                'description' => '是否对portraitImage和证件图片进行人脸去重，避免用户的重复注册，默认为false。',
                'type' => 'boolean',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'false',
              ),
            ),
            'required' => false,
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
                'example' => '4D93120B-9A81-11F5-8307-B746390C644D',
              ),
              'Data' => 
              array (
                'description' => '返回结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'CompareResult' => 
                  array (
                    'description' => '人证比对结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Code' => 
                      array (
                        'description' => '错误码，服务执行成功时返回“0”。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'CompareResultData' => 
                      array (
                        'description' => '人证比对结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Match' => 
                          array (
                            'description' => '人脸匹配结果。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'fail' => '不匹配',
                              'pass' => '匹配',
                              'examine' => '建议人工审核',
                            ),
                            'example' => 'examine',
                          ),
                          'Risks' => 
                          array (
                            'description' => '人证比对风险信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体风险。',
                              'type' => 'string',
                              'example' => 'REPEAT_DOCUMENT',
                            ),
                          ),
                          'Score' => 
                          array (
                            'description' => '人脸相似度得分，范围：[0.0, 100.0]，越高则代表越相似。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '99.73',
                          ),
                        ),
                      ),
                      'Message' => 
                      array (
                        'description' => '错误信息描述。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                    ),
                  ),
                  'IdDetectResult' => 
                  array (
                    'description' => '证件类型检测及防伪识别结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Code' => 
                      array (
                        'description' => '错误码，服务执行成功时返回“0”。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'IdDetectResultData' => 
                      array (
                        'description' => '证件类型检测及防伪识别结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'AntiSpoofingResult' => 
                          array (
                            'description' => '卡证照片防伪识别结果。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Passed' => 
                              array (
                                'description' => '是否通过防伪检测。',
                                'type' => 'boolean',
                                'enumValueTitles' => 
                                array (
                                  'true' => 'true',
                                  'false' => 'false',
                                ),
                                'example' => 'false',
                              ),
                              'Risks' => 
                              array (
                                'description' => '命中的卡证照片伪造风险。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '风险名称。',
                                  'type' => 'string',
                                  'enumValueTitles' => 
                                  array (
                                    'BLUR_DOCUMENT' => '卡证照片模糊',
                                    'FLASH_DOCUMENT' => '证件照片存在反光',
                                    'PORTRAIT_PHY_DOCUMENT' => '证件人像照片存在物理篡改',
                                    'CARD_INCOMPLETE' => '照片内卡证不完整',
                                    'PORTRAIT_PS_DOCUMENT' => '证件人像照片存在PS篡改',
                                    'FAKE_DOCUMENT' => '卡证疑似伪造假证',
                                    'GRAY_PRINTED_DOCUMENT' => '卡证照片色彩黑白',
                                    'SCREEN_SHOT_DOCUMENT' => '卡证照片为屏幕截图或屏幕翻拍',
                                  ),
                                  'example' => 'SCREEN_SHOT_DOCUMENT',
                                ),
                              ),
                            ),
                          ),
                          'CountryCode' => 
                          array (
                            'description' => '检测到的卡证国家/地区缩写，遵循Alpha-3 code(ISO 3166)规则。',
                            'type' => 'string',
                            'example' => 'JPN',
                          ),
                          'DetectionResult' => 
                          array (
                            'description' => '证件类型检测结果。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'CardRectangle' => 
                              array (
                                'description' => '图片内卡证坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角；
当图像中有多个卡片，只取区域面积最大的卡片。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '具体坐标。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '600',
                                ),
                              ),
                              'Height' => 
                              array (
                                'description' => '卡证正面图片高度，单位：像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '382',
                              ),
                              'PortraitRectangle' => 
                              array (
                                'description' => '图片内卡证的证件照坐标区域；
格式为[x1,y1,x2,y2,x3,y3,x4,y4]，分别为卡片四个顶点的坐标（xi,yi) ，左上角、右上角、右下角、左下角。',
                                'type' => 'array',
                                'items' => 
                                array (
                                  'description' => '具体坐标。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '572',
                                ),
                              ),
                              'Width' => 
                              array (
                                'description' => '卡证正面图片宽度，单位：像素。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '600',
                              ),
                            ),
                          ),
                          'DocumentType' => 
                          array (
                            'description' => '检测到的卡证类型。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'IDENTITY_CARD' => '身份证',
                              'DRIVER_LICENSE' => '驾照',
                              'RESIDENCE_CARD' => '居留证',
                              'PASSPORT' => '护照',
                            ),
                            'example' => 'IDENTITY_CARD',
                          ),
                          'Passed' => 
                          array (
                            'description' => '是否通过卡证检测及防伪识别。',
                            'type' => 'boolean',
                            'enumValueTitles' => 
                            array (
                              'true' => 'true',
                              'false' => 'false',
                            ),
                            'example' => 'true',
                          ),
                          'Warning' => 
                          array (
                            'description' => '警告信息，不影响Passed结果，仅作为参考信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体警告内容。',
                              'type' => 'string',
                              'example' => 'NOT_MATCH',
                            ),
                          ),
                        ),
                      ),
                      'Message' => 
                      array (
                        'description' => '错误信息描述。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                    ),
                  ),
                  'OcrResult' => 
                  array (
                    'description' => '证件OCR结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Code' => 
                      array (
                        'description' => '错误码，服务执行成功时返回“0”。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'OcrResultData' => 
                      array (
                        'description' => '证件OCR结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Address' => 
                          array (
                            'description' => '地址。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'AddressConfidence' => 
                          array (
                            'description' => 'Address字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'AddressPosition' => 
                          array (
                            'description' => 'Address字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'DateOfBirth' => 
                          array (
                            'description' => '出生日期。',
                            'type' => 'string',
                            'example' => '2009-01-16',
                          ),
                          'DateOfBirthConfidence' => 
                          array (
                            'description' => 'DateOfBirth字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'DateOfBirthPosition' => 
                          array (
                            'description' => 'DateOfBirth字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'DocumentNumber' => 
                          array (
                            'description' => '证件号。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'DocumentNumber2' => 
                          array (
                            'description' => '证件副号。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'DocumentNumber2Confidence' => 
                          array (
                            'description' => 'DocumentNumber2字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'DocumentNumber2Position' => 
                          array (
                            'description' => 'DocumentNumber2字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'DocumentNumberConfidence' => 
                          array (
                            'description' => 'DocumentNumber字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'DocumentNumberPosition' => 
                          array (
                            'description' => 'DocumentNumber字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'ExpirationDate' => 
                          array (
                            'description' => '证件有效期。',
                            'type' => 'string',
                            'example' => '2027.01.16',
                          ),
                          'ExpirationDateConfidence' => 
                          array (
                            'description' => 'ExpirationDate字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'ExpirationDatePosition' => 
                          array (
                            'description' => 'ExpirationDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'FirstName' => 
                          array (
                            'description' => '名字。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'FirstNameConfidence' => 
                          array (
                            'description' => 'FirstName字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'FirstNamePosition' => 
                          array (
                            'description' => 'FirstName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'FullName' => 
                          array (
                            'description' => '全名。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'FullNameConfidence' => 
                          array (
                            'description' => 'FullName字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'FullNamePosition' => 
                          array (
                            'description' => 'FullName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'IssuedDate' => 
                          array (
                            'description' => '签发日期。',
                            'type' => 'string',
                            'example' => 'Jan 01 2023',
                          ),
                          'IssuedDateConfidence' => 
                          array (
                            'description' => 'IssuedDate字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'IssuedDatePosition' => 
                          array (
                            'description' => 'IssuedDate字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'IssuingAuthority' => 
                          array (
                            'description' => '签发机构名称。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'IssuingAuthorityConfidence' => 
                          array (
                            'description' => 'IssuingAuthority字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'IssuingAuthorityPosition' => 
                          array (
                            'description' => 'IssuingAuthority字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'LastName' => 
                          array (
                            'description' => '姓氏。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                          'LastNameConfidence' => 
                          array (
                            'description' => 'LastName字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'LastNamePosition' => 
                          array (
                            'description' => 'LastName字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'NationalityCode' => 
                          array (
                            'description' => '证件上的国家/地区代码。',
                            'type' => 'string',
                            'example' => 'JP',
                          ),
                          'NationalityCodeConfidence' => 
                          array (
                            'description' => 'NationalityCode字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'NationalityCodePosition' => 
                          array (
                            'description' => 'NationalityCode字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                          'NormalizedDateOfBirth' => 
                          array (
                            'description' => '格式化后的出生日期（格式: YYYY/MM/dd）',
                            'type' => 'string',
                            'example' => '2009/01/16',
                          ),
                          'NormalizedExpirationDate' => 
                          array (
                            'description' => '格式化后的失效时间（格式: YYYY/MM/dd）',
                            'type' => 'string',
                            'example' => '2027/01/16',
                          ),
                          'NormalizedIssuedDate' => 
                          array (
                            'description' => '格式化后的签发日期（格式: YYYY/MM/dd）',
                            'type' => 'string',
                            'example' => '2023/01/16',
                          ),
                          'NormalizedNationalityCode' => 
                          array (
                            'description' => '格式化后的国家/地区代码，遵循Alpha-3 code(ISO 3166)规则。',
                            'type' => 'string',
                            'example' => 'JPN',
                          ),
                          'NormalizedSex' => 
                          array (
                            'description' => '格式化后的性别。',
                            'type' => 'string',
                            'enumValueTitles' => 
                            array (
                              'null' => '空',
                              'F' => '女',
                              'M' => '男',
                            ),
                            'example' => 'M',
                          ),
                          'Sex' => 
                          array (
                            'description' => '性别。',
                            'type' => 'string',
                            'example' => 'Male',
                          ),
                          'SexConfidence' => 
                          array (
                            'description' => 'Sex字段识别的置信度。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.92',
                          ),
                          'SexPosition' => 
                          array (
                            'description' => 'Sex字段区域的4点坐标，从字段的左上开始顺时针，左上、右上、右下、左下的坐标。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '具体坐标。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1627',
                            ),
                          ),
                        ),
                      ),
                      'Message' => 
                      array (
                        'description' => '错误信息描述。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                    ),
                  ),
                  'UnrepeatResult' => 
                  array (
                    'description' => '人脸去重返回结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'CardImageResult' => 
                      array (
                        'description' => '证件上的人脸去重结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码，服务执行成功时返回“0”。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'CardImageResultData' => 
                          array (
                            'description' => '证件上的人脸去重结果。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Dbname' => 
                              array (
                                'description' => '命中的人脸数据库名称。',
                                'type' => 'string',
                                'example' => 'cardFace',
                              ),
                              'EntityId' => 
                              array (
                                'description' => '数据库中的ID。',
                                'type' => 'string',
                                'example' => '990614535008',
                              ),
                              'ExtraData' => 
                              array (
                                'description' => '额外信息。',
                                'type' => 'string',
                                'example' => 'null',
                              ),
                              'Score' => 
                              array (
                                'description' => '人脸相似度得分，范围：[0.0, 100.0]，越高则代表越相似。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '99.72',
                              ),
                            ),
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息描述。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                        ),
                      ),
                      'PortraitImageResult' => 
                      array (
                        'description' => '自拍照人脸去重结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Code' => 
                          array (
                            'description' => '错误码，服务执行成功时返回“0”。',
                            'type' => 'string',
                            'example' => '0',
                          ),
                          'PortraitImageResultData' => 
                          array (
                            'description' => '自拍照人脸去重结果。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Dbname' => 
                              array (
                                'description' => '命中的人脸数据库名称。',
                                'type' => 'string',
                                'example' => 'cardFace',
                              ),
                              'EntityId' => 
                              array (
                                'description' => '数据库中的ID。',
                                'type' => 'string',
                                'example' => '990614535008',
                              ),
                              'ExtraData' => 
                              array (
                                'description' => '额外信息。',
                                'type' => 'string',
                                'example' => 'null',
                              ),
                              'Score' => 
                              array (
                                'description' => '人脸相似度得分，范围：[0.0, 100.0]，越高则代表越相似。',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '99.72',
                              ),
                            ),
                          ),
                          'Message' => 
                          array (
                            'description' => '错误信息描述。',
                            'type' => 'string',
                            'example' => 'null',
                          ),
                        ),
                      ),
                    ),
                  ),
                  'LivenessResult' => 
                  array (
                    'description' => '人脸活体检测返回结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Code' => 
                      array (
                        'description' => '错误码，服务执行成功时返回“0”。',
                        'type' => 'string',
                        'example' => '0',
                      ),
                      'Message' => 
                      array (
                        'description' => '错误信息描述。',
                        'type' => 'string',
                        'example' => 'null',
                      ),
                      'LivenessResultData' => 
                      array (
                        'description' => '人脸活体检测结果。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Score' => 
                          array (
                            'description' => '人脸活体检测得分，范围：[0.0, 100.0]，越低表示越可能是真人照片。',
                            'type' => 'number',
                            'format' => 'double',
                            'example' => '0.05',
                          ),
                          'Liveness' => 
                          array (
                            'description' => '活体检测判定结果，true/false，代表是否通过。',
                            'type' => 'string',
                            'example' => 'true',
                          ),
                          'Risks' => 
                          array (
                            'description' => '人脸活体检测风险信息。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '风险名称。',
                              'type' => 'string',
                              'example' => '[]',
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
                'description' => '错误信息描述。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '错误码，服务执行成功时返回“0”。',
                'type' => 'string',
                'example' => '0',
              ),
              'Status' => 
              array (
                'description' => '服务执行状态。',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Ok' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'enumValueTitles' => 
                array (
                  'true' => 'true',
                  'false' => 'false',
                ),
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D93120B-9A81-11F5-8307-B746390C644D\\",\\n  \\"Data\\": {\\n    \\"CompareResult\\": {\\n      \\"Code\\": \\"0\\",\\n      \\"CompareResultData\\": {\\n        \\"Match\\": \\"examine\\",\\n        \\"Risks\\": [\\n          \\"REPEAT_DOCUMENT\\"\\n        ],\\n        \\"Score\\": 99.73\\n      },\\n      \\"Message\\": \\"null\\"\\n    },\\n    \\"IdDetectResult\\": {\\n      \\"Code\\": \\"0\\",\\n      \\"IdDetectResultData\\": {\\n        \\"AntiSpoofingResult\\": {\\n          \\"Passed\\": false,\\n          \\"Risks\\": [\\n            \\"SCREEN_SHOT_DOCUMENT\\"\\n          ]\\n        },\\n        \\"CountryCode\\": \\"JPN\\",\\n        \\"DetectionResult\\": {\\n          \\"CardRectangle\\": [\\n            600\\n          ],\\n          \\"Height\\": 382,\\n          \\"PortraitRectangle\\": [\\n            572\\n          ],\\n          \\"Width\\": 600\\n        },\\n        \\"DocumentType\\": \\"IDENTITY_CARD\\",\\n        \\"Passed\\": true,\\n        \\"Warning\\": [\\n          \\"NOT_MATCH\\"\\n        ]\\n      },\\n      \\"Message\\": \\"null\\"\\n    },\\n    \\"OcrResult\\": {\\n      \\"Code\\": \\"0\\",\\n      \\"OcrResultData\\": {\\n        \\"Address\\": \\"null\\",\\n        \\"AddressConfidence\\": 0.92,\\n        \\"AddressPosition\\": [\\n          1627\\n        ],\\n        \\"DateOfBirth\\": \\"2009-01-16\\",\\n        \\"DateOfBirthConfidence\\": 0.92,\\n        \\"DateOfBirthPosition\\": [\\n          1627\\n        ],\\n        \\"DocumentNumber\\": \\"null\\",\\n        \\"DocumentNumber2\\": \\"null\\",\\n        \\"DocumentNumber2Confidence\\": 0.92,\\n        \\"DocumentNumber2Position\\": [\\n          1627\\n        ],\\n        \\"DocumentNumberConfidence\\": 0.92,\\n        \\"DocumentNumberPosition\\": [\\n          1627\\n        ],\\n        \\"ExpirationDate\\": \\"2027.01.16\\",\\n        \\"ExpirationDateConfidence\\": 0.92,\\n        \\"ExpirationDatePosition\\": [\\n          1627\\n        ],\\n        \\"FirstName\\": \\"null\\",\\n        \\"FirstNameConfidence\\": 0.92,\\n        \\"FirstNamePosition\\": [\\n          1627\\n        ],\\n        \\"FullName\\": \\"null\\",\\n        \\"FullNameConfidence\\": 0.92,\\n        \\"FullNamePosition\\": [\\n          1627\\n        ],\\n        \\"IssuedDate\\": \\"Jan 01 2023\\",\\n        \\"IssuedDateConfidence\\": 0.92,\\n        \\"IssuedDatePosition\\": [\\n          1627\\n        ],\\n        \\"IssuingAuthority\\": \\"null\\",\\n        \\"IssuingAuthorityConfidence\\": 0.92,\\n        \\"IssuingAuthorityPosition\\": [\\n          1627\\n        ],\\n        \\"LastName\\": \\"null\\",\\n        \\"LastNameConfidence\\": 0.92,\\n        \\"LastNamePosition\\": [\\n          1627\\n        ],\\n        \\"NationalityCode\\": \\"JP\\",\\n        \\"NationalityCodeConfidence\\": 0.92,\\n        \\"NationalityCodePosition\\": [\\n          1627\\n        ],\\n        \\"NormalizedDateOfBirth\\": \\"2009/01/16\\",\\n        \\"NormalizedExpirationDate\\": \\"2027/01/16\\",\\n        \\"NormalizedIssuedDate\\": \\"2023/01/16\\",\\n        \\"NormalizedNationalityCode\\": \\"JPN\\",\\n        \\"NormalizedSex\\": \\"M\\",\\n        \\"Sex\\": \\"Male\\",\\n        \\"SexConfidence\\": 0.92,\\n        \\"SexPosition\\": [\\n          1627\\n        ]\\n      },\\n      \\"Message\\": \\"null\\"\\n    },\\n    \\"UnrepeatResult\\": {\\n      \\"CardImageResult\\": {\\n        \\"Code\\": \\"0\\",\\n        \\"CardImageResultData\\": {\\n          \\"Dbname\\": \\"cardFace\\",\\n          \\"EntityId\\": \\"990614535008\\",\\n          \\"ExtraData\\": \\"null\\",\\n          \\"Score\\": 99.72\\n        },\\n        \\"Message\\": \\"null\\"\\n      },\\n      \\"PortraitImageResult\\": {\\n        \\"Code\\": \\"0\\",\\n        \\"PortraitImageResultData\\": {\\n          \\"Dbname\\": \\"cardFace\\",\\n          \\"EntityId\\": \\"990614535008\\",\\n          \\"ExtraData\\": \\"null\\",\\n          \\"Score\\": 99.72\\n        },\\n        \\"Message\\": \\"null\\"\\n      }\\n    },\\n    \\"LivenessResult\\": {\\n      \\"Code\\": \\"0\\",\\n      \\"Message\\": \\"null\\",\\n      \\"LivenessResultData\\": {\\n        \\"Score\\": 0.05,\\n        \\"Liveness\\": \\"true\\",\\n        \\"Risks\\": [\\n          \\"[]\\"\\n        ]\\n      }\\n    }\\n  },\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"0\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"HttpCode\\": 200,\\n  \\"Ok\\": true\\n}","type":"json"}]',
      'title' => 'eKYC-综合服务',
      'description' => '上传卡证正面照片、背面照片（可选）、人脸自拍照片（可选），以及卡证所属的国家/地区代码及卡证类型，返回卡证检测结果、防伪结果、结构化的OCR结果、以及人证匹配结果。

如果上传的照片与参数中的证件类型不一致，证件检测结果会自动修正，完成对应证件的OCR服务调用，返回结果中会提示前二者“NOT_MATCH”，不影响对OCR结果的后续使用。
### 使用限制

- 图片格式：JPEG、PNG；
- 图片文件：单个图像不小于64x64像素，不大于4096x4096像素，单个图像数据大小取值范围 [4KB, 6MB]; 
- PDF文件：取值范围 [4KB, 6MB]。

### 数据协议

- 请求：application/json；
- 响应：application/json；
- 二进制数据格式：Base64。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ekyc-saas.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'moguan-sdk',
    'version' => '2021-04-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RegisterDevice',
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
    'RegisterDevice' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '端侧SDK授权时必填的appKey信息：用户使用阿里云账号登陆SDK授权中心客户平台后，对已发放授权进行分配和新建批次后，会得到此appKey。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'NWTtS623eqo6s070',
          ),
        ),
        1 => 
        array (
          'name' => 'SdkCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '端侧SDK授权时必填的SDKCode信息：每个发放的SDK授权都会有唯一的SDKCode信息，登录SDK授权中心客户平台后，可在授权列表获得此信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SDKCodeTest01',
          ),
        ),
        2 => 
        array (
          'name' => 'DeviceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '端侧SDK授权时必填的DeviceId信息：设备的唯一标识，设备端开发接入时生成，需保证唯一且不变。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '99daf4a623f2b623ae08e79d6d4bf686',
          ),
        ),
        3 => 
        array (
          'name' => 'UserDeviceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户填写的id信息，方便用户管理和记录的授权设备唯一标识，后续可用于排查用户侧授权出现的问题。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'D001',
          ),
        ),
        4 => 
        array (
          'name' => 'Extend',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '其他扩展信息，JSON结构，方便后续扩展参数。',
            'type' => 'object',
            'required' => true,
            'docRequired' => true,
            'example' => '{}',
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
              'Message' => 
              array (
                'description' => '授权接口调用是否成功',
                'type' => 'string',
                'example' => 'success',
              ),
              'ErrorMessage' => 
              array (
                'description' => '授权接口调用结果',
                'type' => 'string',
                'example' => '操作成功',
              ),
              'RequestId' => 
              array (
                'description' => '授权请求的RequestId',
                'type' => 'string',
                'example' => 'A68E0F1E-9CEE-4BB9-8880-943730FFD9A9',
              ),
              'ErrorCode' => 
              array (
                'description' => '授权接口调用成功或失败的错误码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'Data' => 
              array (
                'description' => '端侧授权返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'License' => 
                  array (
                    'description' => '云端下发的加密后的授权信息',
                    'type' => 'string',
                    'example' => 'rSDUqJEawcrhaHVDXgQQ2vV3eOQDzuos5TAJgx9uolqVaAKkgcBHfWd/jYknsiVeYxsLWyscP0U6ia0XL/u6t7ira9XnI3Jv9qHzosrAW09YrT68VigxqwrutxtexXGgrXFzYmcMMe05rYhEmyyoeNu0CB40HxggXIIw10vH0pvhMLd0ssz6FbaOGhZ/7WDzFAqeXlz7+whZFNlXwaCfIwHTDIj9nBHHsBzWWocOHO==',
                  ),
                  'Signature' => 
                  array (
                    'description' => '云端下发的授权信息加签后的结果',
                    'type' => 'string',
                    'example' => 'VnxhWhjL2D3kkGcv8Q/wHzyD6dTEYIDfnIgzDWLS7iQRiCWLu1K+EA+Q6iiH1lpaDNGeQ65zVpbB1wtGMmJymQMJeJ5RHzEo74wwXP48Yfn6tdAoZwtLkxXqZo5N99W/JyEyHyeisC44ZIpLcs1YPv3Wr+uRirUgjHhZXorxJ1E=',
                  ),
                  'PublicKey' => 
                  array (
                    'description' => '客户账户对应的公钥信息',
                    'type' => 'string',
                    'example' => 'SSTfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwdTbYqDHxAlmdSFowPthsG3wKyXdembceyc5j31FZIYGESE4x6ND0al5ejdx26d2ZMRDzlkjnLqUN3snezRA1x0qs92taGXMrIvYDi0dEsz3X/a/VXHPxNu0+/PBT9RYzakLDV9F/6QdYn4PQUvHSTfz2ghaS5SCj++VVDe4CBBIDAAPB',
                  ),
                  'Rid' => 
                  array (
                    'description' => '用户端侧SDK每一次授权记录标识',
                    'type' => 'string',
                    'example' => '1082f5e57a004a0799198d4a370c3efa',
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
            'errorCode' => 'Device.GetKeyNoAuthority',
            'errorMessage' => 'Failed to request public key. You are not authorized.',
          ),
          1 => 
          array (
            'errorCode' => 'Device.GetKeyParameterError',
            'errorMessage' => 'Failed to request public key. The parameter is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'Device.RegisterAlreadyReged',
            'errorMessage' => 'This device is already registered.',
          ),
          3 => 
          array (
            'errorCode' => 'Device.RegisterAppkeyInvalid',
            'errorMessage' => 'Failed to register device. The appKey is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'Device.RegisterDataError',
            'errorMessage' => 'Failed to register device. The data has an error.',
          ),
          5 => 
          array (
            'errorCode' => 'Device.RegisterNoAuthority',
            'errorMessage' => 'Failed to register device. You are not authorized.',
          ),
          6 => 
          array (
            'errorCode' => 'Device.RegisterNoAvailableQuota',
            'errorMessage' => 'Failed to register device. The quota is exhausted.',
          ),
          7 => 
          array (
            'errorCode' => 'Device.RegisterParameterError',
            'errorMessage' => 'Failed to register device. The parameter is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'Device.RegisterRetry',
            'errorMessage' => 'Failed to register device. Please try again.',
          ),
          9 => 
          array (
            'errorCode' => 'System.NoAuthority',
            'errorMessage' => 'You are not authorized.',
          ),
          10 => 
          array (
            'errorCode' => 'System.NotLogin',
            'errorMessage' => 'You need to login.',
          ),
          11 => 
          array (
            'errorCode' => 'System.ParameterError',
            'errorMessage' => 'The parameter is missing or has an error.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'System.InternalError',
            'errorMessage' => 'The request processing has failed due to some unknown error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"ErrorMessage\\": \\"操作成功\\",\\n  \\"RequestId\\": \\"A68E0F1E-9CEE-4BB9-8880-943730FFD9A9\\",\\n  \\"ErrorCode\\": 0,\\n  \\"Data\\": {\\n    \\"License\\": \\"rSDUqJEawcrhaHVDXgQQ2vV3eOQDzuos5TAJgx9uolqVaAKkgcBHfWd/jYknsiVeYxsLWyscP0U6ia0XL/u6t7ira9XnI3Jv9qHzosrAW09YrT68VigxqwrutxtexXGgrXFzYmcMMe05rYhEmyyoeNu0CB40HxggXIIw10vH0pvhMLd0ssz6FbaOGhZ/7WDzFAqeXlz7+whZFNlXwaCfIwHTDIj9nBHHsBzWWocOHO==\\",\\n    \\"Signature\\": \\"VnxhWhjL2D3kkGcv8Q/wHzyD6dTEYIDfnIgzDWLS7iQRiCWLu1K+EA+Q6iiH1lpaDNGeQ65zVpbB1wtGMmJymQMJeJ5RHzEo74wwXP48Yfn6tdAoZwtLkxXqZo5N99W/JyEyHyeisC44ZIpLcs1YPv3Wr+uRirUgjHhZXorxJ1E=\\",\\n    \\"PublicKey\\": \\"SSTfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwdTbYqDHxAlmdSFowPthsG3wKyXdembceyc5j31FZIYGESE4x6ND0al5ejdx26d2ZMRDzlkjnLqUN3snezRA1x0qs92taGXMrIvYDi0dEsz3X/a/VXHPxNu0+/PBT9RYzakLDV9F/6QdYn4PQUvHSTfz2ghaS5SCj++VVDe4CBBIDAAPB\\",\\n    \\"Rid\\": \\"1082f5e57a004a0799198d4a370c3efa\\"\\n  }\\n}","type":"json"}]',
      'title' => '设备SDK注册授权',
      'summary' => '设备端SDK注册授权服务。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'moguan-sdk.aliyuncs.com',
    ),
  ),
);
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dypnsapi-intl',
    'version' => '2017-07-25',
  ),
  'directories' => 
  array (
    0 => 'StartVerification',
    1 => 'SearchVerification',
    2 => 'CheckVerification',
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'StartVerification' => 
    array (
      'summary' => '通过指定的通道向最终用户发送验证码，支持的通道有短信、语音、和whatsapp。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '171584',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypnsL4YHVT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Channel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证通道，包括短信（SMS)、语音（VOCIE）、whatsApp(WHATSAPP)。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'SMS',
          ),
        ),
        1 => 
        array (
          'name' => 'To',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收短信号码。号码格式为：国际区号+号码。',
            'type' => 'string',
            'required' => true,
            'example' => '6212345****01',
          ),
        ),
        2 => 
        array (
          'name' => 'ServiceSid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制台配置的ServiceID。',
            'type' => 'string',
            'required' => true,
            'example' => 'FA00000000000001',
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
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据，如果请求成功则返回。',
                'type' => 'object',
                'example' => '{
    "verifyCode": "",
    "verificationId": "",
    "status": ""
  }',
              ),
              'Code' => 
              array (
                'description' => '返回code。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。
 
- **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'Invalid.Parameters',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"verifyCode\\": \\"\\",\\n    \\"verificationId\\": \\"\\",\\n    \\"status\\": \\"\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '发送验证码',
    ),
    'SearchVerification' => 
    array (
      'summary' => '查询验证结果详情。',
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
        'abilityTreeCode' => '171585',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypnsL4YHVT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceSid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制台配置的ServiceID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FA00000000000001',
          ),
        ),
        1 => 
        array (
          'name' => 'To',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收短信号码。号码格式为：国际区号+号码。',
            'type' => 'string',
            'required' => false,
            'example' => '6212345****01',
          ),
        ),
        2 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。',
            'type' => 'string',
            'required' => false,
            'example' => '1234',
          ),
        ),
        3 => 
        array (
          'name' => 'VerificationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送验证码接口返回的唯一认证ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'rJXlaR2q5LpKfREtpRPMBfDVQvELZwmBbK5yVR7gr3nLbNAcolLGPYCJaVHt/i+I',
          ),
        ),
        4 => 
        array (
          'name' => 'SendDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信发送日期，格式为毫秒时间戳。支持查询最近30天的记录。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1677600000000,',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页的大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数。取值从1开始。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62
',
              ),
              'Message' => 
              array (
                'description' => '描述信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据。',
                'type' => 'object',
                'example' => '{
    "records": [
      {
        "sendDate":,
        "channel": "",
        "serviceSid": "",
        "to": "",
        "updatedDate":,
        "verificationId": "",
        "status": ""
      }
    ],
    "pageNo": ,
    "totalPage": 1,
    "pageSize": 20,
    "totalCount": 1,
  }',
              ),
              'Code' => 
              array (
                'description' => '返回code。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。

 - **false**：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\\\n\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询验证结果',
    ),
    'CheckVerification' => 
    array (
      'summary' => '调用CheckVerification接口完成验证码校验。',
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
        'operationType' => 'create',
        'abilityTreeCode' => '171586',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypnsL4YHVT',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ServiceSid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '控制台配置的ServiceID。',
            'type' => 'string',
            'required' => false,
            'example' => 'FA00000000000001',
          ),
        ),
        1 => 
        array (
          'name' => 'To',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收短信号码。号码格式为：国际区号+号码。',
            'type' => 'string',
            'required' => false,
            'example' => '6212345****01',
          ),
        ),
        2 => 
        array (
          'name' => 'Code',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
          ),
        ),
        3 => 
        array (
          'name' => 'VerificationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送验证码接口返回的唯一认证ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'rJXlaR2q5LpKfREtpRPMBfDVQvELZwmBbK5yVR7gr3nLbNAcolLGPYCJaVHt/i+I',
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
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62',
              ),
              'Message' => 
              array (
                'description' => '描述信息。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据,请求正确返回。',
                'type' => 'object',
                'example' => ' {
    "phoneNumber": "",
    "channel": "",
    "verificationId": "",
    "status": "approved"
  }',
              ),
              'Code' => 
              array (
                'description' => '接口返回状态码。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- **true**：调用成功。

- **false**：调用失败。',
                'type' => 'string',
                'example' => 'true',
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
            'errorCode' => 'Invalid.Parameters',
            'errorMessage' => 'The parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"phoneNumber\\": \\"\\",\\n    \\"channel\\": \\"\\",\\n    \\"verificationId\\": \\"\\",\\n    \\"status\\": \\"approved\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '校验验证码',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dypnsapi-intl.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
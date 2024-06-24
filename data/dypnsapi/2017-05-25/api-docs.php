<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Dypnsapi',
    'version' => '2017-05-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 186295,
      'title' => '融合认证（基于原子能力）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 186296,
          'title' => '短信认证服务',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'SendSmsVerifyCode',
            1 => 'CheckSmsVerifyCode',
          ),
        ),
      ),
    ),
    1 => 
    array (
      'id' => 181112,
      'title' => '融合认证（基于场景）',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetFusionAuthToken',
        1 => 'VerifyWithFusionAuthToken',
      ),
    ),
    2 => 
    array (
      'id' => 134039,
      'title' => '号码认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 
        array (
          'id' => 182057,
          'title' => '客户端一键登录和本机号码校验',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'VerifyMobile',
            1 => 'GetMobile',
          ),
        ),
        1 => 
        array (
          'id' => 175693,
          'title' => 'H5一键登录和本机号码校验',
          'type' => 'directory',
          'children' => 
          array (
            0 => 'GetAuthToken',
            1 => 'GetPhoneWithToken',
            2 => 'VerifyPhoneWithToken',
          ),
        ),
      ),
    ),
    3 => 
    array (
      'id' => 134045,
      'title' => '短信认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetSmsAuthTokens',
        1 => 'VerifySmsCode',
      ),
    ),
    4 => 
    array (
      'id' => 134050,
      'title' => '通信授权服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAuthorizationUrl',
      ),
    ),
    5 => 
    array (
      'id' => 134035,
      'title' => '认证方案管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSchemeConfig',
        1 => 'CreateVerifyScheme',
        2 => 'DeleteVerifyScheme',
        3 => 'DescribeVerifyScheme',
      ),
    ),
    6 => 
    array (
      'id' => 134052,
      'title' => '用量及费用统计',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryGateVerifyStatisticPublic',
        1 => 'QueryGateVerifyBillingPublic',
      ),
    ),
    7 => 
    array (
      'id' => 190109,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QuerySendDetails',
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
    'SendSmsVerifyCode' => 
    array (
      'summary' => '发送短信验证码。',
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
        'abilityTreeCode' => '192247',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypnsZ7LLRH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案名称，如果不填则为“默认方案”。最多不超过20个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '方案名称',
            'default' => '默认方案',
          ),
        ),
        1 => 
        array (
          'name' => 'CountryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码国家编码，默认为86，目前也仅支持国内号码发送。',
            'type' => 'string',
            'required' => false,
            'example' => '国家码',
            'default' => '86',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'example' => '86130****0000',
          ),
        ),
        3 => 
        array (
          'name' => 'SignName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '签名名称。',
            'type' => 'string',
            'required' => true,
            'example' => '阿里云',
          ),
        ),
        4 => 
        array (
          'name' => 'TemplateCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信模板CODE。

您可以登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)，选择**国内消息**或**国际/港澳台消息**，在**模板管理**页面查看**模板CODE**。

>必须是已添加、并通过审核的短信模板；且发送国际/港澳台消息时，请使用国际/港澳台短信模板。',
            'type' => 'string',
            'required' => true,
            'example' => 'azsq_*****',
          ),
        ),
        5 => 
        array (
          'name' => 'TemplateParam',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信模板变量填写的参数值。验证码位置使用"##code##"替代。

示例：如模板内容为：“您的验证码是${authCode}，5分钟内有效，请勿告诉他人。”。此时，该字段传入：{"authCode":"##code##"}

<notice>上文中的authCode请替换成您实际申请的验证码模板中的参数名称</notice>

> - 如果JSON中需要带换行符，请参照标准的JSON协议处理。
> - 模板变量规范，请参见[短信模板规范](~~108253~~)。>',
            'type' => 'string',
            'required' => true,
            'example' => '{"code":"##code##"}',
          ),
        ),
        6 => 
        array (
          'name' => 'SmsUpExtendCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '上行短信扩展码。上行短信指发送给通信服务提供商的短信，用于定制某种服务、完成查询，或是办理某种业务等，需要收费，按运营商普通短信资费进行扣费。

>扩展码是生成签名时系统自动默认生成的，不支持自行传入。无特殊需要此字段的用户请忽略此字段。如需使用，请联系您的商务经理。',
            'type' => 'string',
            'required' => false,
            'example' => '1213123',
          ),
        ),
        7 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。',
            'type' => 'string',
            'required' => false,
            'example' => '外部流水号（透传）',
          ),
        ),
        8 => 
        array (
          'name' => 'CodeLength',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码长度支持4～8位长度，默认是4位。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '4',
            'default' => '4',
          ),
        ),
        9 => 
        array (
          'name' => 'ValidTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码有效时长，单位秒，默认为300秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '300',
            'default' => '300',
          ),
        ),
        10 => 
        array (
          'name' => 'DuplicatePolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '核验规则，当有效时间内对同场景内的同号码重复发送验证码时，旧验证码如何处理。

- 1：覆盖处理（默认），即旧验证码会失效掉。

- 2：保留，即多个验证码都是在有效期内都可以校验通过。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '覆盖',
              2 => '保留',
            ),
            'example' => '1',
            'default' => '1',
          ),
        ),
        11 => 
        array (
          'name' => 'Interval',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时间间隔，单位：秒。即多久间隔可以发送一次验证码，用于频控，默认60秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
            'default' => '60',
          ),
        ),
        12 => 
        array (
          'name' => 'CodeType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '生成的验证码类型，默认为1。
- 1：纯数字
- 2：纯大写字母
- 3：纯小写字母
- 4：大小字母混合
- 5：数字+大写字母混合
- 6：数字+小写字母混合
- 7：数字+大小写字母混合',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '纯数字',
              2 => '纯大写字母',
              3 => '纯小写字母',
              4 => '大小字母混合',
              5 => '数字+大写字母混合',
              6 => '数字+小写字母混合',
              7 => '数字+大小写字母混合',
            ),
            'example' => '1',
            'default' => '1',
          ),
        ),
        13 => 
        array (
          'name' => 'ReturnVerifyCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回验证码。
- **true**：返回。
- **false**：不返回。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
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
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '成功 ',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyCode' => 
                  array (
                    'description' => '验证码。',
                    'type' => 'string',
                    'example' => '42324',
                  ),
                  'RequestId' => 
                  array (
                    'description' => '请求ID。',
                    'type' => 'string',
                    'example' => 'API-reqelekrqkllkkewrlwrjlsdfsdf',
                  ),
                  'OutId' => 
                  array (
                    'description' => '外部流水号。',
                    'type' => 'string',
                    'example' => '1231231313',
                  ),
                  'BizId' => 
                  array (
                    'description' => '业务ID。',
                    'type' => 'string',
                    'example' => '112231421412414124123^4',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见[返回码列表](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11174283.0.0.70c5616bkj38Wa)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

- **true**：请求成功。

- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"成功 \\",\\n  \\"Model\\": {\\n    \\"VerifyCode\\": \\"42324\\",\\n    \\"RequestId\\": \\"API-reqelekrqkllkkewrlwrjlsdfsdf\\",\\n    \\"OutId\\": \\"1231231313\\",\\n    \\"BizId\\": \\"112231421412414124123^4\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '发送短信验证码',
    ),
    'CheckSmsVerifyCode' => 
    array (
      'summary' => '核验短信验证码。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案名称，如果不填则为“默认方案”。最多不超过20个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '测试方案',
            'default' => '默认方案',
          ),
        ),
        1 => 
        array (
          'name' => 'CountryCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '号码国家编码，默认为86。',
            'type' => 'string',
            'required' => false,
            'example' => '86',
            'default' => '86',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'example' => '186****0000',
          ),
        ),
        3 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。',
            'type' => 'string',
            'required' => false,
            'example' => '12123231',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'VerifyCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。',
            'type' => 'string',
            'required' => true,
            'example' => '1231',
          ),
        ),
        5 => 
        array (
          'name' => 'CaseAuthPolicy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码大小写字母核验策略。

- 1：不区分大小写。
- 2：区分大小写。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'enumValueTitles' => 
            array (
            ),
            'example' => '1',
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
            'type' => 'object',
            'properties' => 
            array (
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '成功',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'OutId' => 
                  array (
                    'description' => '外部流水号。',
                    'type' => 'string',
                    'example' => '1212312',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '认证结果。

- PASS：认证成功

- UNKNOWN：认证失败',
                    'type' => 'string',
                    'example' => 'PASS',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[返回码](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11174283.0.0.70c5616bkj38Wa)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。

- true：成功

- false：失败',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": {\\n    \\"OutId\\": \\"1212312\\",\\n    \\"VerifyResult\\": \\"PASS\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
      'title' => '核验验证码',
    ),
    'GetFusionAuthToken' => 
    array (
      'summary' => '融合认证客户端发起认证后，由开发者服务器向阿里云发起本次调用，使用从客户端SDK获取到的认证Token发起本次调用。获取认证结果。',
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
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方案Code。',
            'description' => '方案Code。',
            'type' => 'string',
            'required' => true,
            'example' => 'FA1000*************201',
          ),
        ),
        1 => 
        array (
          'name' => 'PackageName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Platform为Android时必须传入，App的包名信息。',
            'description' => 'Platform为Android时必须传入，App的包名信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.example.test',
          ),
        ),
        2 => 
        array (
          'name' => 'PackageSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Platform为Android时必须传入，App的包签名信息。',
            'description' => 'Platform为Android时必须传入，App的包签名信息。',
            'type' => 'string',
            'required' => false,
            'example' => '47fcc************************278',
          ),
        ),
        3 => 
        array (
          'name' => 'BundleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Platform为iOS时必须传入，App的bundleId信息。',
            'description' => 'Platform为iOS时必须传入，App的bundleId信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.example.test',
          ),
        ),
        4 => 
        array (
          'name' => 'Platform',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '平台，Android或者iOS。',
            'description' => '平台，Android或者iOS。',
            'type' => 'string',
            'required' => true,
            'example' => 'Android',
          ),
        ),
        5 => 
        array (
          'name' => 'DurationSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Token有效时长，单位是秒，最小值900，最大值43200。',
            'description' => 'Token有效时长，单位是秒，最小值900，最大值43200。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '900',
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
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '成功',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
              ),
              'Model' => 
              array (
                'description' => '返回的鉴权code字符串',
                'type' => 'string',
                'example' => 'FKcksloqk***********jalEc+',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见错误码列表。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '调用API是否成功。取值说明如下：true：成功。false：失败。',
                'type' => 'boolean',
                'example' => 'false',
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
            'errorCode' => 'SchemeNumberOverLimit',
            'errorMessage' => 'The maximum number of scheme is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'SmsCodeVerifyFail',
            'errorMessage' => 'The specified smsCode is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'SmsSignNameNotExist',
            'errorMessage' => 'The specified sms signName is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Throttling.System',
            'errorMessage' => 'The request was denied due to API flow control.',
          ),
          4 => 
          array (
            'errorCode' => 'UnknowError',
            'errorMessage' => 'The requested service is not available now, please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          6 => 
          array (
            'errorCode' => 'VerifySchemeNotExist',
            'errorMessage' => 'The specified verify scheme already exists.',
          ),
          7 => 
          array (
            'errorCode' => 'PackageSignedConflict',
            'errorMessage' => 'The specified package signed already exists.',
          ),
          8 => 
          array (
            'errorCode' => 'RamPermissionDeny',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          9 => 
          array (
            'errorCode' => 'SceneQueryFail',
            'errorMessage' => 'The specified scene does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'SchemeNotPassed',
            'errorMessage' => 'The scheme is not passed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'Failed to verify your access permissions.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'OutOfService',
            'errorMessage' => 'The account is suspended.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Model\\": \\"FKcksloqk***********jalEc+\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
      'title' => '融合认证获取鉴权token',
    ),
    'VerifyWithFusionAuthToken' => 
    array (
      'summary' => '融合认证客户端发起认证时，由开发者服务器向阿里云发起本次调用，通过鉴权token换取的认证token发起本次调用。获取认证结果。',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'VerifyToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统一认证Token，由客户端SDK返回。',
            'type' => 'string',
            'required' => true,
            'example' => 'LD108enNdlsl*******sFLKCks1==',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '示例值',
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47
',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PhoneNumber' => 
                  array (
                    'description' => '手机号，认证成功时返回该字段。',
                    'type' => 'string',
                    'example' => '180********',
                  ),
                  'VerifyResult' => 
                  array (
                    'description' => '认证结果，认证成功：PASS，认证失败：UNKNOWN',
                    'type' => 'string',
                    'example' => 'PASS',
                  ),
                  'PhoneScore' => 
                  array (
                    'description' => '手机号评分，只有开启手机号评分节点，并且认证通过后才会给出，取值范围[0，100]，分越大，风险系数越高。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见错误码列表。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '调用API是否成功。取值说明如下：true：成功。false：失败。',
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
            'errorCode' => 'SchemeNumberOverLimit',
            'errorMessage' => 'The maximum number of scheme is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'SmsCodeVerifyFail',
            'errorMessage' => 'The specified smsCode is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'SmsSignNameNotExist',
            'errorMessage' => 'The specified sms signName is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'Throttling.System',
            'errorMessage' => 'The request was denied due to API flow control.',
          ),
          4 => 
          array (
            'errorCode' => 'UnknowError',
            'errorMessage' => 'The requested service is not available now, please try again later.',
          ),
          5 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          6 => 
          array (
            'errorCode' => 'VerifySchemeNotExist',
            'errorMessage' => 'The specified verify scheme already exists.',
          ),
          7 => 
          array (
            'errorCode' => 'PackageSignedConflict',
            'errorMessage' => 'The specified package signed already exists.',
          ),
          8 => 
          array (
            'errorCode' => 'RamPermissionDeny',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          9 => 
          array (
            'errorCode' => 'SceneQueryFail',
            'errorMessage' => 'The specified scene does not exist.',
          ),
          10 => 
          array (
            'errorCode' => 'SchemeNotPassed',
            'errorMessage' => 'The scheme is not passed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'Failed to verify your access permissions.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred.',
          ),
          1 => 
          array (
            'errorCode' => 'OutOfService',
            'errorMessage' => 'The account is suspended.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"示例值\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\\\n\\",\\n  \\"Model\\": {\\n    \\"PhoneNumber\\": \\"180********\\",\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"PhoneScore\\": 20\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '融合认证获取认证结果',
    ),
    'VerifyMobile' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '92639',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypns8SCJSK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'App端SDK获取AccessCode参数值，即Token。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dfafdafad542****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'example' => '13800****00',
          ),
        ),
        2 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。',
            'type' => 'string',
            'required' => false,
            'example' => '123456',
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
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'GateVerifyResultDTO' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '认证结果。

- **PASS**：一致。

- **REJECT**：不一致。
 
- **UNKNOWN**：无法判断。',
                    'type' => 'string',
                    'example' => 'PASS',
                  ),
                  'VerifyId' => 
                  array (
                    'description' => '流水号。',
                    'type' => 'string',
                    'example' => '121343241',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GateVerifyResultDTO\\": {\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"VerifyId\\": \\"121343241\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VerifyMobileResponse>\\n<GateVerifyResultDTO>\\n    <VerifyResult>PASS</VerifyResult>\\n    <VerifyId>121343241</VerifyId>\\n</GateVerifyResultDTO>\\n<Message>请求成功</Message>\\n<RequestId>8906582E-6722</RequestId>\\n<Code>OK</Code>\\n</VerifyMobileResponse>","errorExample":""}]',
      'title' => '本机号码校验认证',
      'summary' => '调用VerifyMobile接口完成本机号码校验认证。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[快速入门](~~84541~~)。

>该接口仅适用于本机号码校验，如果您想使用一键登录，请参见[GetMobile](~~189865~~)。

### QPS限制

本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
    <groupId>com.aliyun</groupId>
    <artifactId>dypnsapi20170525</artifactId>
    <version>1.0.6</version>
</dependency>
```

',
    ),
    'GetMobile' => 
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'riskType' => 'none',
        'chargeType' => 'paid',
        'abilityTreeCode' => '92629',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypns8SCJSK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AccessToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'App端SDK获取的登录Token。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dfafdafad5422****',
          ),
        ),
        1 => 
        array (
          'name' => 'OutId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部流水号。






',
            'type' => 'string',
            'required' => false,
            'example' => '22345****',
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
                'description' => '状态码。

- 返回OK代表请求成功。
- 其他错误码，请参见[服务端API返回码](~~85198~~)。

',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'GetMobileResultDTO' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Mobile' => 
                  array (
                    'description' => '手机号。',
                    'type' => 'string',
                    'example' => '13900001234',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GetMobileResultDTO\\": {\\n    \\"Mobile\\": \\"13900001234\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetMobileResponse>\\n<Message>请求成功</Message>\\n<RequestId>8906582E-6722</RequestId>\\n<Code>OK</Code>\\n<GetMobileResultDTO>\\n    <Mobile>150****0000</Mobile>\\n</GetMobileResultDTO>\\n</GetMobileResponse>","errorExample":""}]',
      'title' => '一键登录取号',
      'summary' => '调用GetMobile接口完成一键登录取号。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作。更多信息，请参见[快速入门](~~84541~~)。
>本接口仅适用于一键登录或注册场景，需最终用户经过一键登录SDK提供的授权页确认授权后方可调用。开发者不得通过任何手段模拟或越过授权，否则我方有权终止服务并追究相应法律责任。
### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```',
    ),
    'GetAuthToken' => 
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求网页地址。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'https://www.aliyundoc.com/',
          ),
        ),
        1 => 
        array (
          'name' => 'Origin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求域名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'https://www.aliyundoc.com',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方案号',
            'description' => '方案号CODE。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'FC10000010643****',
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
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'TokenInfo' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'AccessToken' => 
                  array (
                    'description' => '业务鉴权Token。

> AccessToken有效期是10分钟，有效期内可以重复使用。',
                    'type' => 'string',
                    'example' => 'agag****',
                  ),
                  'JwtToken' => 
                  array (
                    'description' => 'API鉴权Token。

> JwtToken有效期是1小时，有效期内可以重复使用。',
                    'type' => 'string',
                    'example' => 'aweghd****',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"TokenInfo\\": {\\n    \\"AccessToken\\": \\"agag****\\",\\n    \\"JwtToken\\": \\"aweghd****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthTokenResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <TokenInfo>\\n        <AccessToken>agag****</AccessToken>\\n        <JwtToken>aweghd****</JwtToken>\\n    </TokenInfo>\\n</GetAuthTokenResponse>","errorExample":""}]',
      'title' => '获取 H5 认证授权 Token',
      'summary' => '获取授权token用于H5本机号码校验的鉴权，返回结果包括AccessToken和JwtToken。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[H5本机号码校验使用流程](~~169786~~)。
### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```',
    ),
    'GetPhoneWithToken' => 
    array (
      'summary' => '调用本接口完成一键登录取号（H5能力专用）。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SpToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JSSDK获取的号码认证Token。
Token的使用有效期，中国电信10分钟，仅可使用一次；中国联通30分钟，仅可使用一次；中国移动2分钟，仅可使用一次。',
            'type' => 'string',
            'required' => true,
            'example' => 'Dfafdafad542****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '结构体',
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '0F335F48-****-****-****-CA7914FE5D77',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'Mobile' => 
                  array (
                    'description' => '手机号。',
                    'type' => 'string',
                    'example' => '13900001234',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"0F335F48-****-****-****-CA7914FE5D77\\",\\n  \\"Data\\": {\\n    \\"Mobile\\": \\"13900001234\\"\\n  }\\n}","type":"json"}]',
      'title' => '一键登录取号（H5能力专用）',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作。更多信息，请参见[快速入门](~~84541~~)。
>本接口仅适用于H5场景下的一键登录或注册场景，需最终用户经过一键登录JS-SDK提供的授权页确认授权后方可调用。开发者不得通过任何手段模拟或越过授权，否则我方有权终止服务并追究相应法律责任。
### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'VerifyPhoneWithToken' => 
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1380000****',
          ),
        ),
        1 => 
        array (
          'name' => 'SpToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'JSSDK获取的号码认证Token。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Dfafdafad542****',
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
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'GateVerify' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'VerifyResult' => 
                  array (
                    'description' => '认证结果。

- PASS：一致。

- REJECT：不一致。

- UNKNOWN：无法判断。

',
                    'type' => 'string',
                    'example' => 'PASS',
                  ),
                  'VerifyId' => 
                  array (
                    'description' => '流水号。',
                    'type' => 'string',
                    'example' => '12134****',
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
            'errorCode' => 'RamPermissionDeny',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'UnknowError',
            'errorMessage' => 'The requested service is not available now, please try again later.',
          ),
          2 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberIllgeal',
            'errorMessage' => 'The specified mobile phone number is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidToken',
            'errorMessage' => 'The token is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'VerifySchemeNotExist',
            'errorMessage' => 'The specified verify scheme already exists.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GateVerify\\": {\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"VerifyId\\": \\"12134****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VerifyPhoneWithTokenResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <GateVerify>\\n        <VerifyResult>PASS</VerifyResult>\\n        <VerifyId>12134****</VerifyId>\\n    </GateVerify>\\n</VerifyPhoneWithTokenResponse>","errorExample":""}]',
      'title' => '本机号码校验（H5能力专用）',
      'summary' => '完成H5本机号码校验。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[H5本机号码校验使用流程](~~169786~~)。
### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'extraInfo' => '## 补充说明
### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```

### 校验失败返回示例
JSON格式

```
{
  "Code": "OK",
  "Message": "请求成功",
  "RequestId": "6CAB3AC6-B7C3",
  "GateVerify": {
    "VerifyResult": "REJECT",
    "VerifyId": "12134****"
  }
}
```

### 请求结果异常返回示例
JSON格式

```
{
  "Code": "isv.CARRIER_NOT_MATCH",
  "Message": "验证号码与实际流量号码运营商不一致",
  "RequestId": "6EA6E9F5-37CC"
}
```',
    ),
    'GetSmsAuthTokens' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '92630',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREdypnsZ7LLRH',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PackageName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包名。OsType为**Android**时必传。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliqin.mytel.test',
          ),
        ),
        1 => 
        array (
          'name' => 'SignName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '签名。OsType为**Android**时必传。',
            'type' => 'string',
            'required' => false,
            'example' => '47fcc6615485e83b4100433****',
          ),
        ),
        2 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC100000134840112',
          ),
        ),
        3 => 
        array (
          'name' => 'OsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统类型。取值：**Android**或**iOS**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'Android',
          ),
        ),
        4 => 
        array (
          'name' => 'BundleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'iOS应用ID。OsType为**iOS**时必传。',
            'type' => 'string',
            'required' => false,
            'example' => '12345****',
          ),
        ),
        5 => 
        array (
          'name' => 'Expire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Token有效期（单位：秒），最小900，最大43200。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '43200',
            'minimum' => '900',
            'example' => '900',
          ),
        ),
        6 => 
        array (
          'name' => 'SmsTemplateCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信模板Code。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'SMS_13987****',
          ),
        ),
        7 => 
        array (
          'name' => 'SmsCodeExpire',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信验证码有效期（单位：秒），默认180。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '60',
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
                'description' => '请求状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'BizToken' => 
                  array (
                    'description' => '业务Token。',
                    'type' => 'string',
                    'example' => 'FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****',
                  ),
                  'StsAccessKeySecret' => 
                  array (
                    'description' => '访问密钥。',
                    'type' => 'string',
                    'example' => 'VboZ4xbZ****',
                  ),
                  'StsAccessKeyId' => 
                  array (
                    'description' => '访问密钥ID。',
                    'type' => 'string',
                    'example' => 'STS.NSqC****',
                  ),
                  'ExpireTime' => 
                  array (
                    'description' => '过期时间。时间戳表示。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1631526326000',
                  ),
                  'StsToken' => 
                  array (
                    'description' => '安全令牌。',
                    'type' => 'string',
                    'example' => 'CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****',
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
            'errorCode' => 'SmsSignNameNotExist',
            'errorMessage' => 'The specified sms signName is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"BizToken\\": \\"FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****\\",\\n    \\"StsAccessKeySecret\\": \\"VboZ4xbZ****\\",\\n    \\"StsAccessKeyId\\": \\"STS.NSqC****\\",\\n    \\"ExpireTime\\": 1631526326000,\\n    \\"StsToken\\": \\"CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSmsAuthTokensResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <BizToken>FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****</BizToken>\\n        <StsAccessKeySecret>VboZ4xbZ****</StsAccessKeySecret>\\n        <StsAccessKeyId>STS.NSqC****</StsAccessKeyId>\\n        <ExpireTime>1631526326000</ExpireTime>\\n        <StsToken>CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****</StsToken>\\n    </Data>\\n</GetSmsAuthTokensResponse>","errorExample":""}]',
      'title' => '获取短信验证码授权Token',
      'summary' => '调用GetSmsAuthTokens接口获取短信验证码授权Token。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作，更多信息，请参见[短信认证使用流程](~~313209~~)。
### QPS限制
本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```',
    ),
    'VerifySmsCode' => 
    array (
      'summary' => '调用VerifySmsCode接口完成短信验证码校验。',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SmsCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '验证码。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '12****',
          ),
        ),
        1 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。获取短信验证码时返回。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1321111****',
          ),
        ),
        2 => 
        array (
          'name' => 'SmsToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信Token。
当您成功调用短信验证码SDK中发送验证码接口，终端用户会收到短信验证码，SDK侧会返回用于短信验证码校验的SmsToken。其中Android客户端调用sendVerifyCode接口发送验证码，iOS客户端调用sendVerifyCodeWithTimeout接口发送验证码。详情请参见[接入概述](~~400434~~)。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'sddsbvdbvjd****',
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
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'Data' => 
              array (
                'description' => '验证是否成功。取值：

- **true**：验证成功。

- **false**：验证失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
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
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          1 => 
          array (
            'errorCode' => 'SmsCodeVerifyFail',
            'errorMessage' => 'The specified smsCode is invalid.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"8906582E-6722\\"\\n}","errorExample":""},{"type":"xml","example":"<VerifySmsCodeResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <Data>true</Data>\\n    <RequestId>8906582E-6722</RequestId>\\n</VerifySmsCodeResponse>","errorExample":""}]',
      'title' => '完成短信验证码校验',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作，更多信息，请参见[短信认证使用流程](~~313209~~)。
### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```',
    ),
    'GetAuthorizationUrl' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PhoneNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1390000****',
          ),
        ),
        1 => 
        array (
          'name' => 'SchemeId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权场景ID。您可在**号码认证服务控制台**的**授权场景管理**页面查看授权场景ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '234****',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '授权结束日期，合约型方案不能为空，类型：yyyy-MM-dd。',
            'type' => 'string',
            'required' => false,
            'example' => '2020–12–28',
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
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'Data' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthorizationUrl' => 
                  array (
                    'description' => '授权链接。',
                    'type' => 'string',
                    'example' => 'https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&_env=prod',
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
            'errorCode' => 'InvalidParameters',
            'errorMessage' => 'The specified parameter is not valid.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingParameter',
            'errorMessage' => 'You must specify the parameter.',
          ),
          2 => 
          array (
            'errorCode' => 'Throttling.System',
            'errorMessage' => 'The request was denied due to API flow control.',
          ),
          3 => 
          array (
            'errorCode' => 'MobileNumberIllgeal',
            'errorMessage' => 'The specified mobile phone number is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'DataNotFound',
            'errorMessage' => 'The specified scheme does not exist.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalParameter',
            'errorMessage' => 'The specified endDate is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'SchemeNotPassed',
            'errorMessage' => 'The scheme is not passed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'Forbidden',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          1 => 
          array (
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'Failed to verify your access permissions.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'IdentityCertifyNotExist',
            'errorMessage' => 'The identity verification record does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred.',
          ),
          3 => 
          array (
            'errorCode' => 'OutOfService',
            'errorMessage' => 'The account is suspended.',
          ),
          4 => 
          array (
            'errorCode' => 'FunctionNotSubscribed',
            'errorMessage' => 'You have not subscribed to the function.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"AuthorizationUrl\\": \\"https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&_env=prod\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthorizationUrlResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <AuthorizationUrl>https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&amp;token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&amp;_env=prod</AuthorizationUrl>\\n    </Data>\\n</GetAuthorizationUrlResponse>","errorExample":""}]',
      'title' => '获取授权链接',
      'summary' => '获取支付宝授权链接。',
      'description' => '### 准备工作
请先完成阿里云账号注册、获取阿里云访问密钥，更多信息，请参见[通信授权服务使用流程](~~196922~~)。
### QPS限制
本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '### Java SDK
您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。

JAVA SDK MAVEN坐标
```
<dependency>
  <groupId>com.aliyun</groupId>
  <artifactId>dypnsapi20170525</artifactId>
  <version>1.0.6</version>
</dependency>
```',
    ),
    'CreateSchemeConfig' => 
    array (
      'summary' => '创建融合认证方案号。',
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
          'name' => 'SchemeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方案名称，由中、英文字母构成，长度限制为10个字符。
',
            'description' => '方案名称，由中、英文字母构成，长度限制为10个字符。
',
            'type' => 'string',
            'required' => true,
            'example' => 'Android APP测试方案',
          ),
        ),
        1 => 
        array (
          'name' => 'Platform',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '方案应用平台',
            'description' => '方案应用平台。',
            'type' => 'string',
            'required' => true,
            'example' => 'Android',
            'enum' => 
            array (
              0 => 'Android',
              1 => 'iOS',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用方案的App名称，由中、英文字母构成，长度限制20个字符。',
            'description' => '应用方案的App名称，由中、英文字母构成，长度限制20个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云通信',
          ),
        ),
        3 => 
        array (
          'name' => 'AndroidPackageName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '包名，Platform为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'description' => '包名，Platform为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyun.android',
          ),
        ),
        4 => 
        array (
          'name' => 'AndroidPackageSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '包签名，Platform为Android时必选。由数字和字母组成，长度为32个字符。',
            'description' => '包签名，Platform为Android时必选。由数字和字母组成，长度为32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'dfsfaawklll1****olkweklk***',
          ),
        ),
        5 => 
        array (
          'name' => 'IosBundleId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'description' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyun.ios',
          ),
        ),
        6 => 
        array (
          'name' => 'H5Url',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留字段，暂不支持H5方案',
            'description' => '保留字段，暂不支持H5方案。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
          ),
        ),
        7 => 
        array (
          'name' => 'H5Origin',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '保留字段，暂不支持H5方案。',
            'description' => '保留字段，暂不支持H5方案。',
            'type' => 'string',
            'required' => false,
            'example' => '-',
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
                'example' => 'B95B36EC-8108-4479-D3AA-2BB27F9B155A
',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '成功',
              ),
              'Model' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'SchemeCode' => 
                  array (
                    'description' => '方案Code',
                    'type' => 'string',
                    'example' => 'FA100000168468035',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[API返回码](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11186623.0.0.5c3a662fbgeAuk)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

- **true**：请求成功。

- **false**：请求失败。',
                'type' => 'boolean',
                'example' => 'false',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B95B36EC-8108-4479-D3AA-2BB27F9B155A\\\\n\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": {\\n    \\"SchemeCode\\": \\"FA100000168468035\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
      'title' => '创建融合认证方案号',
    ),
    'CreateVerifyScheme' => 
    array (
      'summary' => '调用CreateVerifyScheme创建认证方案。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案名称。',
            'type' => 'string',
            'required' => true,
            'example' => '一键登录认证方案',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'App名称。',
            'type' => 'string',
            'required' => true,
            'example' => '阿里云通信',
          ),
        ),
        2 => 
        array (
          'name' => 'OsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端操作系统类型，取值：iOS、Android或Web。',
            'type' => 'string',
            'required' => true,
            'example' => 'iOS',
          ),
        ),
        3 => 
        array (
          'name' => 'PackName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包名，osType为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'com.aliyun',
          ),
        ),
        4 => 
        array (
          'name' => 'PackSign',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '包签名，osType为Android时必选。由数字和字母组成，长度为32个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '123aliyun',
          ),
        ),
        5 => 
        array (
          'name' => 'BundleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'example.aliyundoc.com',
          ),
        ),
        6 => 
        array (
          'name' => 'Origin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'H5方案页面源地址（建议填写域名级别）。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://h5.minexiot.com',
          ),
        ),
        7 => 
        array (
          'name' => 'Url',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'H5方案使用的页面地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://h5.minexiot.com/',
          ),
        ),
        8 => 
        array (
          'name' => 'IpWhiteList',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'IP白名单，默认可不填。',
            'type' => 'string',
            'required' => false,
            'example' => '139.9.xx.xx
122.112.xx.xx
139.9.xx.xx/24',
          ),
        ),
        9 => 
        array (
          'name' => 'CmApiCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中国移动通道Code，默认可不填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'CuApiCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中国联通通道Code，默认可不填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        11 => 
        array (
          'name' => 'CtApiCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '中国电信通道Code，默认可不填。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '3',
          ),
        ),
        12 => 
        array (
          'name' => 'SceneType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案类型，默认可不填。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        13 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密钥获取接收邮箱地址，默认可不填。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@aliyundoc.com',
          ),
        ),
        14 => 
        array (
          'name' => 'AuthType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证类型，默认不填，只有支持号码认证时可多选，以英文逗号间隔。

- **1**：号码认证

- **2**：短信认证',
            'type' => 'string',
            'required' => false,
            'example' => '1,2',
          ),
        ),
        15 => 
        array (
          'name' => 'SmsSignName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '绑定的短信签名，只有AuthType包含2（短信认证）时才有效，且签名必须是号码认证产品下创建的已经审核通过的。',
            'type' => 'string',
            'required' => false,
            'example' => '阿里云短信测试专用',
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
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'A1E75E69-3049-5FDB-A376-D745837CD2B1',
              ),
              'GateVerifySchemeDTO' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'SchemeCode' => 
                  array (
                    'description' => '方案号。',
                    'type' => 'string',
                    'example' => 'FC10001287****',
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '状态码。

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。

- **true**：请求成功。

- **false**：请求失败。',
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
            'errorCode' => 'SchemeNumberOverLimit',
            'errorMessage' => 'The maximum number of scheme is exceeded.',
          ),
          1 => 
          array (
            'errorCode' => 'BundleIdConflict',
            'errorMessage' => 'The specified bundleId already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameters',
            'errorMessage' => 'The specified parameter is not valid.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidAccountStatus',
            'errorMessage' => 'Your account has been suspended.',
          ),
          4 => 
          array (
            'errorCode' => 'RamPermissionDeny',
            'errorMessage' => 'The user is not authorized to operate on the specified resource.',
          ),
          5 => 
          array (
            'errorCode' => 'PackageSignedConflict',
            'errorMessage' => 'The specified package signed already exists.',
          ),
          6 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"A1E75E69-3049-5FDB-A376-D745837CD2B1\\",\\n  \\"GateVerifySchemeDTO\\": {\\n    \\"SchemeCode\\": \\"FC10001287****\\"\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateVerifySchemeResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E6722</RequestId>\\n    <GateVerifySchemeDTO>\\n        <SchemeCode>FC10001287****</SchemeCode>\\n    </GateVerifySchemeDTO>\\n</CreateVerifySchemeResponse>","errorExample":""}]',
      'title' => '创建认证方案',
      'description' => '### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteVerifyScheme' => 
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案CODE。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC10000014164****',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '12345678',
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
                'description' => '请求成功。其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'E3754956-D0B1-5947-962A-AE767D354F01',
              ),
              'Result' => 
              array (
                'description' => '返回结果。取值：

- **true**：删除成功
- **false**：删除失败',
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
            'errorCode' => 'Throttling.System',
            'errorMessage' => 'The request was denied due to API flow control.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus',
            'errorMessage' => 'Your account has been suspended.',
          ),
          2 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidParameters',
            'errorMessage' => 'The specified parameter is not valid.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"E3754956-D0B1-5947-962A-AE767D354F01\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteVerifySchemeResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>E3754956-D0B1-5947-962A-AE767D354F01</RequestId>\\n    <Result>true</Result>\\n</DeleteVerifySchemeResponse>","errorExample":""}]',
      'title' => '删除认证方案',
      'summary' => '调用DeleteVerifyScheme接口删除认证方案。',
      'description' => '### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeVerifyScheme' => 
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SchemeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案CODE。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'FC10000010643****',
          ),
        ),
        1 => 
        array (
          'name' => 'CustomerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1234****',
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
                'description' => '请求成功。其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0C5380A7-2032-5F7D-9614-1BF8B54D16CB',
              ),
              'SchemeQueryResultDTO' => 
              array (
                'description' => '结构体。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppEncryptInfo' => 
                  array (
                    'description' => '在控制台创建方案号生成的密钥。',
                    'type' => 'string',
                    'example' => 'ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****',
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
            'errorCode' => 'Throttling.System',
            'errorMessage' => 'The request was denied due to API flow control.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccountStatus',
            'errorMessage' => 'Your account has been suspended.',
          ),
          2 => 
          array (
            'errorCode' => 'Unsupported.Account',
            'errorMessage' => 'Your account has not activated the product.',
          ),
          3 => 
          array (
            'errorCode' => 'SceneQueryFail',
            'errorMessage' => 'The specified scene does not exist.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnauthorizedOperation',
            'errorMessage' => 'You are not authorized to perform this operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'An error occurred while processing your request.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"0C5380A7-2032-5F7D-9614-1BF8B54D16CB\\",\\n  \\"SchemeQueryResultDTO\\": {\\n    \\"AppEncryptInfo\\": \\"ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>OK</Message>\\n<RequestId>0C5380A7-2032-5F7D-9614-1BF8B54D16CB</RequestId>\\n<Code>OK</Code>\\n<SchemeQueryResultDTO>\\n    <AppEncryptInfo>ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****</AppEncryptInfo>\\n</SchemeQueryResultDTO>","errorExample":""}]',
      'title' => '获取认证方案详情',
      'summary' => '调用DescribeVerifyScheme接口获取认证方案详细信息。',
      'description' => '### QPS限制
本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryGateVerifyStatisticPublic' => 
    array (
      'summary' => '调用QueryGateVerifyStatisticPublic接口查看用量情况。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '方案号。',
            'type' => 'string',
            'required' => false,
            'example' => 'FC100000038194004',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '起始日期。格式为YYYYMMDD，例如20220101。',
            'type' => 'string',
            'required' => true,
            'example' => '20220101',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束日期。格式为YYYYMMDD，例如20220106。',
            'type' => 'string',
            'required' => true,
            'example' => '20220106',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证方式。取值：

- **1**：一键登录。

- **2**：本机号码校验（含H5本机号码校验）。

- **3**：短信认证。

- **4**：活体认证。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '99',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'OsType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统类型。取值：

- **Android**。

- **iOS**。',
            'type' => 'string',
            'required' => false,
            'example' => 'Android',
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
                'description' => '状态码。取值：

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '请求成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'Data' => 
              array (
                'description' => '包括统计日期范围内的总的调用量、调用成功量、调用失败量、调用未知量，及每一天的用量统计。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalFail' => 
                  array (
                    'description' => '日期范围内的失败调用量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Total' => 
                  array (
                    'description' => '日期范围内总调用量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'TotalSuccess' => 
                  array (
                    'description' => '日期范围内的成功调用量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'TotalUnknown' => 
                  array (
                    'description' => '日期范围内的未知调用量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'DayStatistic' => 
                  array (
                    'description' => '每日的调用明细。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StatisticDateStr' => 
                        array (
                          'description' => '日期，精确到天。格式为YYYYMMDD，例如20220103。',
                          'type' => 'string',
                          'example' => '20220103',
                        ),
                        'TotalSuccess' => 
                        array (
                          'description' => '该日期的成功调用量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'TotalFail' => 
                        array (
                          'description' => '该日期的失败调用量。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'TotalUnknown' => 
                        array (
                          'description' => '该日期的未知调用量。',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"TotalFail\\": 20,\\n    \\"Total\\": 20,\\n    \\"TotalSuccess\\": 0,\\n    \\"TotalUnknown\\": 0,\\n    \\"DayStatistic\\": [\\n      {\\n        \\"StatisticDateStr\\": \\"20220103\\",\\n        \\"TotalSuccess\\": 0,\\n        \\"TotalFail\\": 20,\\n        \\"TotalUnknown\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGateVerifyStatisticPublicResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <TotalFail>20</TotalFail>\\n        <Total>20</Total>\\n        <TotalSuccess>0</TotalSuccess>\\n        <TotalUnknown>0</TotalUnknown>\\n        <DayStatistic>\\n            <StatisticDateStr>20220103</StatisticDateStr>\\n            <TotalSuccess>0</TotalSuccess>\\n            <TotalFail>20</TotalFail>\\n            <TotalUnknown>0</TotalUnknown>\\n        </DayStatistic>\\n    </Data>\\n</QueryGateVerifyStatisticPublicResponse>","errorExample":""}]',
      'title' => '查询用量情况',
      'description' => '### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'QueryGateVerifyBillingPublic' => 
    array (
      'summary' => '调用QueryGateVerifyBillingPublic接口查看费用情况。',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Month',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '月份费用账单。格式为YYYYMM，例如202111。',
            'type' => 'string',
            'required' => true,
            'example' => '202111',
          ),
        ),
        1 => 
        array (
          'name' => 'AuthenticationType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证方式。取值：

- **0**：本机号码校验。

- **1**：一键登录。

- **2**：全部。

- **3**：活体认证。

- **4**：短信认证。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '99',
            'minimum' => '0',
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
              'Code' => 
              array (
                'description' => '状态码。取值：

- 返回OK代表请求成功。

- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '8906582E-6722',
              ),
              'Data' => 
              array (
                'description' => '具体到每个方案号的计费量和金额。',
                'type' => 'object',
                'properties' => 
                array (
                  'AmountSum' => 
                  array (
                    'description' => '该方案的消费金额（单位：元）。',
                    'type' => 'string',
                    'example' => '1234',
                  ),
                  'SceneBillingList' => 
                  array (
                    'description' => '消费金额列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Add' => 
                        array (
                          'description' => '计费量。',
                          'type' => 'string',
                          'example' => '74',
                        ),
                        'SinglePrice' => 
                        array (
                          'description' => '单价（单位：元）。',
                          'type' => 'string',
                          'example' => '0.02',
                        ),
                        'Amount' => 
                        array (
                          'description' => '该方案的消费金额（单位：元）。',
                          'type' => 'string',
                          'example' => '1.48',
                        ),
                        'ItemName' => 
                        array (
                          'description' => '认证方式。',
                          'type' => 'string',
                          'example' => '本机号码校验',
                        ),
                        'SceneCode' => 
                        array (
                          'description' => '方案Code。',
                          'type' => 'string',
                          'example' => 'FC100000038194004',
                        ),
                        'AppName' => 
                        array (
                          'description' => 'App名称。',
                          'type' => 'string',
                          'example' => '阿里云',
                        ),
                        'SceneName' => 
                        array (
                          'description' => '方案名称。',
                          'type' => 'string',
                          'example' => '阿里云通信',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"AmountSum\\": \\"1234\\",\\n    \\"SceneBillingList\\": [\\n      {\\n        \\"Add\\": \\"74\\",\\n        \\"SinglePrice\\": \\"0.02\\",\\n        \\"Amount\\": \\"1.48\\",\\n        \\"ItemName\\": \\"本机号码校验\\",\\n        \\"SceneCode\\": \\"FC100000038194004\\",\\n        \\"AppName\\": \\"阿里云\\",\\n        \\"SceneName\\": \\"阿里云通信\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGateVerifyBillingPublicResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <AmountLongSum>92760</AmountLongSum>\\n        <AmountSum>1234</AmountSum>\\n        <SceneBillingList>\\n            <Add>74</Add>\\n            <ItemId>15810****</ItemId>\\n            <SinglePrice>0.02</SinglePrice>\\n            <Amount>1.48</Amount>\\n            <ItemName>本机号码校验</ItemName>\\n            <SceneCode>FC100000038194004</SceneCode>\\n            <AppName>阿里云</AppName>\\n            <SceneName>阿里云通信</SceneName>\\n            <Url>www.example.com</Url>\\n        </SceneBillingList>\\n    </Data>\\n</QueryGateVerifyBillingPublicResponse>","errorExample":""}]',
      'title' => '查询费用情况',
      'description' => '### QPS限制
本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
    ),
    'QuerySendDetails' => 
    array (
      'summary' => '查询短信验证码发送状态（仅能查询短信认证API版本的发送记录）。',
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
      'deprecated' => true,
      'systemTags' => 
      array (
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PhoneNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。',
            'type' => 'string',
            'required' => true,
            'example' => '186****9399',
          ),
        ),
        1 => 
        array (
          'name' => 'SendDate',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '短信发送日期，支持查询最近30天的记录。

格式为：yyyyMMdd，例如20181225。',
            'type' => 'string',
            'required' => true,
            'example' => '20181225',
          ),
        ),
        2 => 
        array (
          'name' => 'BizId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务的唯一标识号，由阿里云提供。',
            'type' => 'string',
            'required' => false,
            'example' => '1231891289318923^12',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '50',
            'default' => '',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前读取第几页消息，从1开始递增，读取消息时不可超过最大页数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1',
            'default' => '',
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
              'AccessDeniedDetail' => 
              array (
                'description' => '访问被拒绝详细信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'TotalCount' => 
              array (
                'description' => '列表数据总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '42',
              ),
              'Message' => 
              array (
                'description' => '状态码的描述。',
                'type' => 'string',
                'example' => '成功',
              ),
              'Model' => 
              array (
                'description' => '请求结果数据。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '请求结果数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TemplateCode' => 
                    array (
                      'description' => '短信模板CODE。

请在控制台**国内消息**或**国际/港澳台消息**页面中的**模板管理**页签下**模板CODE**一列查看。

>必须是已添加、并通过审核的模板CODE；且发送国际/港澳台消息时，请使用国际/港澳台短信模版。',
                      'type' => 'string',
                      'example' => 'SMS_12231****
',
                    ),
                    'ReceiveDate' => 
                    array (
                      'description' => '短信接收日期和时间。',
                      'type' => 'string',
                      'example' => '2019-01-08 16:44:13
',
                    ),
                    'PhoneNum' => 
                    array (
                      'description' => '手机号。',
                      'type' => 'string',
                      'example' => '1390000****
',
                    ),
                    'Content' => 
                    array (
                      'description' => '短信内容。',
                      'type' => 'string',
                      'example' => '203160',
                    ),
                    'SendStatus' => 
                    array (
                      'description' => '短信发送状态。
- 1：等待回执。
- 2：发送失败。
- 3：发送成功。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'enumValueTitles' => 
                      array (
                      ),
                      'example' => '3',
                    ),
                    'OutId' => 
                    array (
                      'description' => '外部流水扩展字段。',
                      'type' => 'string',
                      'example' => '12131231',
                    ),
                    'SendDate' => 
                    array (
                      'description' => '短信发送日期，支持查询最近30天的记录。

格式为yyyyMMdd，例如20181225。',
                      'type' => 'string',
                      'example' => '2019-01-08 16:44:13
',
                    ),
                    'ErrCode' => 
                    array (
                      'description' => '运营商短信状态码。

- 短信发送成功：DELIVERED。
- 短信发送失败：发送失败，详情请参见[错误码](https://help.aliyun.com/document_detail/101347.html?spm=a2c4g.419277.0.i8)。',
                      'type' => 'string',
                      'example' => 'DELIVERED',
                    ),
                  ),
                ),
                'example' => '',
              ),
              'Code' => 
              array (
                'description' => '请求状态码。

返回OK代表请求成功。
其他错误码，请参见[错误码列表](https://help.aliyun.com/document_detail/101346.html?spm=a2c4g.419277.0.i11)。',
                'type' => 'string',
                'example' => 'OK',
              ),
              'Success' => 
              array (
                'description' => '调用API是否成功。

- true：成功。

- false：失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '暂无替代API，请关注后续API最新发布。',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"TotalCount\\": 42,\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": [\\n    {\\n      \\"TemplateCode\\": \\"SMS_12231****\\\\n\\",\\n      \\"ReceiveDate\\": \\"2019-01-08 16:44:13\\\\n\\",\\n      \\"PhoneNum\\": \\"1390000****\\\\n\\",\\n      \\"Content\\": \\"203160\\",\\n      \\"SendStatus\\": 3,\\n      \\"OutId\\": \\"12131231\\",\\n      \\"SendDate\\": \\"2019-01-08 16:44:13\\\\n\\",\\n      \\"ErrCode\\": \\"DELIVERED\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询短信验证码发送状态',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'dypnsapi.aliyuncs.com',
    ),
  ),
);
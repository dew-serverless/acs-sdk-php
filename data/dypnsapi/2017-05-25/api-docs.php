<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dypnsapi',
        'version' => '2017-05-25',
    ],
    'directories' => [
        [
            'id' => 186295,
            'title' => '融合认证（基于原子能力）',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 186296,
                    'title' => '短信认证服务',
                    'type' => 'directory',
                    'children' => [
                        'SendSmsVerifyCode',
                        'CheckSmsVerifyCode',
                    ],
                ],
            ],
        ],
        [
            'id' => 181112,
            'title' => '融合认证（基于场景）',
            'type' => 'directory',
            'children' => [
                'GetFusionAuthToken',
                'VerifyWithFusionAuthToken',
            ],
        ],
        [
            'id' => 134039,
            'title' => '号码认证',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 182057,
                    'title' => '客户端一键登录和本机号码校验',
                    'type' => 'directory',
                    'children' => [
                        'VerifyMobile',
                        'GetMobile',
                    ],
                ],
                [
                    'id' => 175693,
                    'title' => 'H5一键登录和本机号码校验',
                    'type' => 'directory',
                    'children' => [
                        'GetAuthToken',
                        'GetPhoneWithToken',
                        'VerifyPhoneWithToken',
                    ],
                ],
            ],
        ],
        [
            'id' => 134045,
            'title' => '短信认证',
            'type' => 'directory',
            'children' => [
                'GetSmsAuthTokens',
                'VerifySmsCode',
            ],
        ],
        [
            'id' => 134050,
            'title' => '通信授权服务',
            'type' => 'directory',
            'children' => [
                'GetAuthorizationUrl',
            ],
        ],
        [
            'id' => 134035,
            'title' => '认证方案管理',
            'type' => 'directory',
            'children' => [
                'CreateSchemeConfig',
                'CreateVerifyScheme',
                'DeleteVerifyScheme',
                'DescribeVerifyScheme',
            ],
        ],
        [
            'id' => 134052,
            'title' => '用量及费用统计',
            'type' => 'directory',
            'children' => [
                'QueryGateVerifyStatisticPublic',
                'QueryGateVerifyBillingPublic',
            ],
        ],
        [
            'id' => 190109,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'QuerySendDetails',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'SendSmsVerifyCode' => [
            'summary' => '发送短信验证码。',
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
                'abilityTreeCode' => '192247',
                'abilityTreeNodes' => [
                    'FEATUREdypnsZ7LLRH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'SchemeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案名称，如果不填则为“默认方案”。最多不超过20个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '方案名称',
                        'default' => '默认方案',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码国家编码，默认为86，目前也仅支持国内号码发送。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '国家码',
                        'default' => '86',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '86130****0000',
                    ],
                ],
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板CODE。'."\n"
                            ."\n"
                            .'您可以登录[短信服务控制台](https://dysms.console.aliyun.com/dysms.htm?spm=5176.12818093.categories-n-products.ddysms.3b2816d0xml2NA#/overview)，选择**国内消息**或**国际/港澳台消息**，在**模板管理**页面查看**模板CODE**。'."\n"
                            ."\n"
                            .'>必须是已添加、并通过审核的短信模板；且发送国际/港澳台消息时，请使用国际/港澳台短信模板。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'azsq_*****',
                    ],
                ],
                [
                    'name' => 'TemplateParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板变量填写的参数值。验证码位置使用"##code##"替代。'."\n"
                            ."\n"
                            .'示例：如模板内容为：“您的验证码是${authCode}，5分钟内有效，请勿告诉他人。”。此时，该字段传入：{"authCode":"##code##"}'."\n"
                            ."\n"
                            .'<notice>上文中的authCode请替换成您实际申请的验证码模板中的参数名称</notice>'."\n"
                            ."\n"
                            .'> - 如果JSON中需要带换行符，请参照标准的JSON协议处理。'."\n"
                            .'> - 模板变量规范，请参见[短信模板规范](~~108253~~)。>',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{"code":"##code##"}',
                    ],
                ],
                [
                    'name' => 'SmsUpExtendCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '上行短信扩展码。上行短信指发送给通信服务提供商的短信，用于定制某种服务、完成查询，或是办理某种业务等，需要收费，按运营商普通短信资费进行扣费。'."\n"
                            ."\n"
                            .'>扩展码是生成签名时系统自动默认生成的，不支持自行传入。无特殊需要此字段的用户请忽略此字段。如需使用，请联系您的商务经理。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1213123',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '外部流水号（透传）',
                    ],
                ],
                [
                    'name' => 'CodeLength',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码长度支持4～8位长度，默认是4位。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '4',
                        'default' => '4',
                    ],
                ],
                [
                    'name' => 'ValidTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码有效时长，单位秒，默认为300秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300',
                        'default' => '300',
                    ],
                ],
                [
                    'name' => 'DuplicatePolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '核验规则，当有效时间内对同场景内的同号码重复发送验证码时，旧验证码如何处理。'."\n"
                            ."\n"
                            .'- 1：覆盖处理（默认），即旧验证码会失效掉。'."\n"
                            ."\n"
                            .'- 2：保留，即多个验证码都是在有效期内都可以校验通过。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '覆盖',
                            '保留',
                        ],
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时间间隔，单位：秒。即多久间隔可以发送一次验证码，用于频控，默认60秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '60',
                        'default' => '60',
                    ],
                ],
                [
                    'name' => 'CodeType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '生成的验证码类型，默认为1。'."\n"
                            .'- 1：纯数字'."\n"
                            .'- 2：纯大写字母'."\n"
                            .'- 3：纯小写字母'."\n"
                            .'- 4：大小字母混合'."\n"
                            .'- 5：数字+大写字母混合'."\n"
                            .'- 6：数字+小写字母混合'."\n"
                            .'- 7：数字+大小写字母混合',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '纯数字',
                            '纯大写字母',
                            '纯小写字母',
                            '大小字母混合',
                            '数字+大写字母混合',
                            '数字+小写字母混合',
                            '数字+大小写字母混合',
                        ],
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'ReturnVerifyCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回验证码。'."\n"
                            .'- **true**：返回。'."\n"
                            .'- **false**：不返回。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '成功 ',
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyCode' => [
                                        'description' => '验证码。',
                                        'type' => 'string',
                                        'example' => '42324',
                                    ],
                                    'RequestId' => [
                                        'description' => '请求ID。',
                                        'type' => 'string',
                                        'example' => 'API-reqelekrqkllkkewrlwrjlsdfsdf',
                                    ],
                                    'OutId' => [
                                        'description' => '外部流水号。',
                                        'type' => 'string',
                                        'example' => '1231231313',
                                    ],
                                    'BizId' => [
                                        'description' => '业务ID。',
                                        'type' => 'string',
                                        'example' => '112231421412414124123^4',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见[返回码列表](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11174283.0.0.70c5616bkj38Wa)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    ."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"成功 \\",\\n  \\"Model\\": {\\n    \\"VerifyCode\\": \\"42324\\",\\n    \\"RequestId\\": \\"API-reqelekrqkllkkewrlwrjlsdfsdf\\",\\n    \\"OutId\\": \\"1231231313\\",\\n    \\"BizId\\": \\"112231421412414124123^4\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '发送短信验证码',
        ],
        'CheckSmsVerifyCode' => [
            'summary' => '核验短信验证码。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SchemeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案名称，如果不填则为“默认方案”。最多不超过20个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试方案',
                        'default' => '默认方案',
                    ],
                ],
                [
                    'name' => 'CountryCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '号码国家编码，默认为86。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86',
                        'default' => '86',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '186****0000',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12123231',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'VerifyCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1231',
                    ],
                ],
                [
                    'name' => 'CaseAuthPolicy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码大小写字母核验策略。'."\n"
                            ."\n"
                            .'- 1：不区分大小写。'."\n"
                            .'- 2：区分大小写。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'object',
                                'properties' => [
                                    'OutId' => [
                                        'description' => '外部流水号。',
                                        'type' => 'string',
                                        'example' => '1212312',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '认证结果。'."\n"
                                            ."\n"
                                            .'- PASS：认证成功'."\n"
                                            ."\n"
                                            .'- UNKNOWN：认证失败',
                                        'type' => 'string',
                                        'example' => 'PASS',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[返回码](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11174283.0.0.70c5616bkj38Wa)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    ."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": {\\n    \\"OutId\\": \\"1212312\\",\\n    \\"VerifyResult\\": \\"PASS\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '核验验证码',
        ],
        'GetFusionAuthToken' => [
            'summary' => '融合认证客户端发起认证后，由开发者服务器向阿里云发起本次调用，使用从客户端SDK获取到的认证Token发起本次调用。获取认证结果。',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SchemeCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '方案Code。',
                        'description' => '方案Code。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FA1000*************201',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Platform为Android时必须传入，App的包名信息。',
                        'description' => 'Platform为Android时必须传入，App的包名信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.example.test',
                    ],
                ],
                [
                    'name' => 'PackageSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Platform为Android时必须传入，App的包签名信息。',
                        'description' => 'Platform为Android时必须传入，App的包签名信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47fcc************************278',
                    ],
                ],
                [
                    'name' => 'BundleId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Platform为iOS时必须传入，App的bundleId信息。',
                        'description' => 'Platform为iOS时必须传入，App的bundleId信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.example.test',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'query',
                    'schema' => [
                        'title' => '平台，Android或者iOS。',
                        'description' => '平台，Android或者iOS。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Android',
                    ],
                ],
                [
                    'name' => 'DurationSeconds',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Token有效时长，单位是秒，最小值900，最大值43200。',
                        'description' => 'Token有效时长，单位是秒，最小值900，最大值43200。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '900',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47',
                            ],
                            'Model' => [
                                'description' => '返回的鉴权code字符串',
                                'type' => 'string',
                                'example' => 'FKcksloqk***********jalEc+',
                            ],
                            'Code' => [
                                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见错误码列表。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '调用API是否成功。取值说明如下：true：成功。false：失败。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SchemeNumberOverLimit',
                        'errorMessage' => 'The maximum number of scheme is exceeded.',
                    ],
                    [
                        'errorCode' => 'SmsCodeVerifyFail',
                        'errorMessage' => 'The specified smsCode is invalid.',
                    ],
                    [
                        'errorCode' => 'SmsSignNameNotExist',
                        'errorMessage' => 'The specified sms signName is invalid.',
                    ],
                    [
                        'errorCode' => 'Throttling.System',
                        'errorMessage' => 'The request was denied due to API flow control.',
                    ],
                    [
                        'errorCode' => 'UnknowError',
                        'errorMessage' => 'The requested service is not available now, please try again later.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'VerifySchemeNotExist',
                        'errorMessage' => 'The specified verify scheme already exists.',
                    ],
                    [
                        'errorCode' => 'PackageSignedConflict',
                        'errorMessage' => 'The specified package signed already exists.',
                    ],
                    [
                        'errorCode' => 'RamPermissionDeny',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'SceneQueryFail',
                        'errorMessage' => 'The specified scene does not exist.',
                    ],
                    [
                        'errorCode' => 'SchemeNotPassed',
                        'errorMessage' => 'The scheme is not passed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'Failed to verify your access permissions.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'OutOfService',
                        'errorMessage' => 'The account is suspended.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"成功\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\",\\n  \\"Model\\": \\"FKcksloqk***********jalEc+\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '融合认证获取鉴权token',
        ],
        'VerifyWithFusionAuthToken' => [
            'summary' => '融合认证客户端发起认证时，由开发者服务器向阿里云发起本次调用，通过鉴权token换取的认证token发起本次调用。获取认证结果。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'VerifyToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '统一认证Token，由客户端SDK返回。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'LD108enNdlsl*******sFLKCks1==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '示例值',
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47'."\n",
                            ],
                            'Model' => [
                                'description' => '请求结果数据',
                                'type' => 'object',
                                'properties' => [
                                    'PhoneNumber' => [
                                        'description' => '手机号，认证成功时返回该字段。',
                                        'type' => 'string',
                                        'example' => '180********',
                                    ],
                                    'VerifyResult' => [
                                        'description' => '认证结果，认证成功：PASS，认证失败：UNKNOWN',
                                        'type' => 'string',
                                        'example' => 'PASS',
                                    ],
                                    'PhoneScore' => [
                                        'description' => '手机号评分，只有开启手机号评分节点，并且认证通过后才会给出，取值范围[0，100]，分越大，风险系数越高。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码。返回OK代表请求成功。其他错误码，请参见错误码列表。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '调用API是否成功。取值说明如下：true：成功。false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SchemeNumberOverLimit',
                        'errorMessage' => 'The maximum number of scheme is exceeded.',
                    ],
                    [
                        'errorCode' => 'SmsCodeVerifyFail',
                        'errorMessage' => 'The specified smsCode is invalid.',
                    ],
                    [
                        'errorCode' => 'SmsSignNameNotExist',
                        'errorMessage' => 'The specified sms signName is invalid.',
                    ],
                    [
                        'errorCode' => 'Throttling.System',
                        'errorMessage' => 'The request was denied due to API flow control.',
                    ],
                    [
                        'errorCode' => 'UnknowError',
                        'errorMessage' => 'The requested service is not available now, please try again later.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'VerifySchemeNotExist',
                        'errorMessage' => 'The specified verify scheme already exists.',
                    ],
                    [
                        'errorCode' => 'PackageSignedConflict',
                        'errorMessage' => 'The specified package signed already exists.',
                    ],
                    [
                        'errorCode' => 'RamPermissionDeny',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'SceneQueryFail',
                        'errorMessage' => 'The specified scene does not exist.',
                    ],
                    [
                        'errorCode' => 'SchemeNotPassed',
                        'errorMessage' => 'The scheme is not passed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'Failed to verify your access permissions.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'OutOfService',
                        'errorMessage' => 'The account is suspended.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"示例值\\",\\n  \\"RequestId\\": \\"CC3BB6D2-2FDF-4321-9DCE-B38165CE4C47\\\\n\\",\\n  \\"Model\\": {\\n    \\"PhoneNumber\\": \\"180********\\",\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"PhoneScore\\": 20\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '融合认证获取认证结果',
        ],
        'VerifyMobile' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
                'abilityTreeCode' => '92639',
                'abilityTreeNodes' => [
                    'FEATUREdypns8SCJSK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'AccessCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App端SDK获取AccessCode参数值，即Token。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dfafdafad542****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '13800****00',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'GateVerifyResultDTO' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '认证结果。'."\n"
                                            ."\n"
                                            .'- **PASS**：一致。'."\n"
                                            ."\n"
                                            .'- **REJECT**：不一致。'."\n"
                                            .' '."\n"
                                            .'- **UNKNOWN**：无法判断。',
                                        'type' => 'string',
                                        'example' => 'PASS',
                                    ],
                                    'VerifyId' => [
                                        'description' => '流水号。',
                                        'type' => 'string',
                                        'example' => '121343241',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GateVerifyResultDTO\\": {\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"VerifyId\\": \\"121343241\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VerifyMobileResponse>\\n<GateVerifyResultDTO>\\n    <VerifyResult>PASS</VerifyResult>\\n    <VerifyId>121343241</VerifyId>\\n</GateVerifyResultDTO>\\n<Message>请求成功</Message>\\n<RequestId>8906582E-6722</RequestId>\\n<Code>OK</Code>\\n</VerifyMobileResponse>","errorExample":""}]',
            'title' => '本机号码校验认证',
            'summary' => '调用VerifyMobile接口完成本机号码校验认证。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[快速入门](~~84541~~)。'."\n"
                ."\n"
                .'>该接口仅适用于本机号码校验，如果您想使用一键登录，请参见[GetMobile](~~189865~~)。'."\n"
                ."\n"
                .'### QPS限制'."\n"
                ."\n"
                .'本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.aliyun</groupId>'."\n"
                .'    <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'    <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```'."\n"
                ."\n",
        ],
        'GetMobile' => [
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
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'paid',
                'abilityTreeCode' => '92629',
                'abilityTreeNodes' => [
                    'FEATUREdypns8SCJSK',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'AccessToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App端SDK获取的登录Token。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dfafdafad5422****',
                    ],
                ],
                [
                    'name' => 'OutId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部流水号。'."\n"
                            ."\n\n"
                            ."\n\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '22345****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'GetMobileResultDTO' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Mobile' => [
                                        'description' => '手机号。',
                                        'type' => 'string',
                                        'example' => '13900001234',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GetMobileResultDTO\\": {\\n    \\"Mobile\\": \\"13900001234\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetMobileResponse>\\n<Message>请求成功</Message>\\n<RequestId>8906582E-6722</RequestId>\\n<Code>OK</Code>\\n<GetMobileResultDTO>\\n    <Mobile>150****0000</Mobile>\\n</GetMobileResultDTO>\\n</GetMobileResponse>","errorExample":""}]',
            'title' => '一键登录取号',
            'summary' => '调用GetMobile接口完成一键登录取号。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作。更多信息，请参见[快速入门](~~84541~~)。'."\n"
                .'>本接口仅适用于一键登录或注册场景，需最终用户经过一键登录SDK提供的授权页确认授权后方可调用。开发者不得通过任何手段模拟或越过授权，否则我方有权终止服务并追究相应法律责任。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```',
        ],
        'GetAuthToken' => [
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求网页地址。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'https://www.aliyundoc.com/',
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求域名。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'https://www.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '方案号',
                        'description' => '方案号CODE。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'FC10000010643****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'TokenInfo' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessToken' => [
                                        'description' => '业务鉴权Token。'."\n"
                                            ."\n"
                                            .'> AccessToken有效期是10分钟，有效期内可以重复使用。',
                                        'type' => 'string',
                                        'example' => 'agag****',
                                    ],
                                    'JwtToken' => [
                                        'description' => 'API鉴权Token。'."\n"
                                            ."\n"
                                            .'> JwtToken有效期是1小时，有效期内可以重复使用。',
                                        'type' => 'string',
                                        'example' => 'aweghd****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"TokenInfo\\": {\\n    \\"AccessToken\\": \\"agag****\\",\\n    \\"JwtToken\\": \\"aweghd****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthTokenResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <TokenInfo>\\n        <AccessToken>agag****</AccessToken>\\n        <JwtToken>aweghd****</JwtToken>\\n    </TokenInfo>\\n</GetAuthTokenResponse>","errorExample":""}]',
            'title' => '获取 H5 认证授权 Token',
            'summary' => '获取授权token用于H5本机号码校验的鉴权，返回结果包括AccessToken和JwtToken。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[H5本机号码校验使用流程](~~169786~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```',
        ],
        'GetPhoneWithToken' => [
            'summary' => '调用本接口完成一键登录取号（H5能力专用）。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'SpToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'JSSDK获取的号码认证Token。'."\n"
                            .'Token的使用有效期，中国电信10分钟，仅可使用一次；中国联通30分钟，仅可使用一次；中国移动2分钟，仅可使用一次。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Dfafdafad542****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '结构体',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '0F335F48-****-****-****-CA7914FE5D77',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'Mobile' => [
                                        'description' => '手机号。',
                                        'type' => 'string',
                                        'example' => '13900001234',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"0F335F48-****-****-****-CA7914FE5D77\\",\\n  \\"Data\\": {\\n    \\"Mobile\\": \\"13900001234\\"\\n  }\\n}","type":"json"}]',
            'title' => '一键登录取号（H5能力专用）',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作。更多信息，请参见[快速入门](~~84541~~)。'."\n"
                .'>本接口仅适用于H5场景下的一键登录或注册场景，需最终用户经过一键登录JS-SDK提供的授权页确认授权后方可调用。开发者不得通过任何手段模拟或越过授权，否则我方有权终止服务并追究相应法律责任。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'VerifyPhoneWithToken' => [
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
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1380000****',
                    ],
                ],
                [
                    'name' => 'SpToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'JSSDK获取的号码认证Token。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Dfafdafad542****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'GateVerify' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'VerifyResult' => [
                                        'description' => '认证结果。'."\n"
                                            ."\n"
                                            .'- PASS：一致。'."\n"
                                            ."\n"
                                            .'- REJECT：不一致。'."\n"
                                            ."\n"
                                            .'- UNKNOWN：无法判断。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'PASS',
                                    ],
                                    'VerifyId' => [
                                        'description' => '流水号。',
                                        'type' => 'string',
                                        'example' => '12134****',
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
                        'errorCode' => 'RamPermissionDeny',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'UnknowError',
                        'errorMessage' => 'The requested service is not available now, please try again later.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllgeal',
                        'errorMessage' => 'The specified mobile phone number is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidToken',
                        'errorMessage' => 'The token is invalid.',
                    ],
                    [
                        'errorCode' => 'VerifySchemeNotExist',
                        'errorMessage' => 'The specified verify scheme already exists.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"GateVerify\\": {\\n    \\"VerifyResult\\": \\"PASS\\",\\n    \\"VerifyId\\": \\"12134****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<VerifyPhoneWithTokenResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <GateVerify>\\n        <VerifyResult>PASS</VerifyResult>\\n        <VerifyId>12134****</VerifyId>\\n    </GateVerify>\\n</VerifyPhoneWithTokenResponse>","errorExample":""}]',
            'title' => '本机号码校验（H5能力专用）',
            'summary' => '完成H5本机号码校验。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案，更多信息，请参见[H5本机号码校验使用流程](~~169786~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'extraInfo' => '## 补充说明'."\n"
                .'### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```'."\n"
                ."\n"
                .'### 校验失败返回示例'."\n"
                .'JSON格式'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "Code": "OK",'."\n"
                .'  "Message": "请求成功",'."\n"
                .'  "RequestId": "6CAB3AC6-B7C3",'."\n"
                .'  "GateVerify": {'."\n"
                .'    "VerifyResult": "REJECT",'."\n"
                .'    "VerifyId": "12134****"'."\n"
                .'  }'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'### 请求结果异常返回示例'."\n"
                .'JSON格式'."\n"
                ."\n"
                .'```'."\n"
                .'{'."\n"
                .'  "Code": "isv.CARRIER_NOT_MATCH",'."\n"
                .'  "Message": "验证号码与实际流量号码运营商不一致",'."\n"
                .'  "RequestId": "6EA6E9F5-37CC"'."\n"
                .'}'."\n"
                .'```',
        ],
        'GetSmsAuthTokens' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '92630',
                'abilityTreeNodes' => [
                    'FEATUREdypnsZ7LLRH',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包名。OsType为**Android**时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliqin.mytel.test',
                    ],
                ],
                [
                    'name' => 'SignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '签名。OsType为**Android**时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '47fcc6615485e83b4100433****',
                    ],
                ],
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FC100000134840112',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型。取值：**Android**或**iOS**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Android',
                    ],
                ],
                [
                    'name' => 'BundleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'iOS应用ID。OsType为**iOS**时必传。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345****',
                    ],
                ],
                [
                    'name' => 'Expire',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Token有效期（单位：秒），最小900，最大43200。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '43200',
                        'minimum' => '900',
                        'example' => '900',
                    ],
                ],
                [
                    'name' => 'SmsTemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信模板Code。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SMS_13987****',
                    ],
                ],
                [
                    'name' => 'SmsCodeExpire',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信验证码有效期（单位：秒），默认180。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'BizToken' => [
                                        'description' => '业务Token。',
                                        'type' => 'string',
                                        'example' => 'FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****',
                                    ],
                                    'StsAccessKeySecret' => [
                                        'description' => '访问密钥。',
                                        'type' => 'string',
                                        'example' => 'VboZ4xbZ****',
                                    ],
                                    'StsAccessKeyId' => [
                                        'description' => '访问密钥ID。',
                                        'type' => 'string',
                                        'example' => 'STS.NSqC****',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '过期时间。时间戳表示。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1631526326000',
                                    ],
                                    'StsToken' => [
                                        'description' => '安全令牌。',
                                        'type' => 'string',
                                        'example' => 'CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****',
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
                        'errorCode' => 'SmsSignNameNotExist',
                        'errorMessage' => 'The specified sms signName is invalid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"BizToken\\": \\"FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****\\",\\n    \\"StsAccessKeySecret\\": \\"VboZ4xbZ****\\",\\n    \\"StsAccessKeyId\\": \\"STS.NSqC****\\",\\n    \\"ExpireTime\\": 1631526326000,\\n    \\"StsToken\\": \\"CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSmsAuthTokensResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <BizToken>FZSMeRbLCiapIBo65NXNHvGbkGDmhs23XWTZDOtZN0g5n/kqSc2FU27Gc9YhGb6dNn9/L9ZXSYiIB6C6LMLQJjyXjRzt5v6pzZXqnjO4cSuPWYUxJvdc8l8OpucEYe8Mx17HxsHDzj0VC4D5+atcrTpJE6jQ7e2QVNjZIPMwsfxELjQS7c****</BizToken>\\n        <StsAccessKeySecret>VboZ4xbZ****</StsAccessKeySecret>\\n        <StsAccessKeyId>STS.NSqC****</StsAccessKeyId>\\n        <ExpireTime>1631526326000</ExpireTime>\\n        <StsToken>CAISiQJ1q6Ft5B2yfSjIr5DEDP/BurtW9PemMEfBrEpsOr5K17XjuDz2IHtLfXFsBusYt/U2nWpX5v4clrxIToR7SFbFY9pb6ZhazBisebDGv8HtR3TcFEjiSwapEBfe8JL4QYeQFaHwGJqEb1TDiVUAo9/TfimjWFqIKICAjYUdAP0cQgi/a0gtZr4UXHwAzvUXLnzML/2gHwf3i27LdipStxF7lHl05NbUoKTeyGKH3AGqlLVF9tite8f9NpczBvolDYfpht4RX7HazStd5yJN8KpLl6Fe8V/FxIrGXAAJv0rdbbOFq4Q1c18hOLJHAKtfsvXmlPNpsevfmpnsx****</StsToken>\\n    </Data>\\n</GetSmsAuthTokensResponse>","errorExample":""}]',
            'title' => '获取短信验证码授权Token',
            'summary' => '调用GetSmsAuthTokens接口获取短信验证码授权Token。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作，更多信息，请参见[短信认证使用流程](~~313209~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为5000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```',
        ],
        'VerifySmsCode' => [
            'summary' => '调用VerifySmsCode接口完成短信验证码校验。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'SmsCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '12****',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。获取短信验证码时返回。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1321111****',
                    ],
                ],
                [
                    'name' => 'SmsToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信Token。'."\n"
                            .'当您成功调用短信验证码SDK中发送验证码接口，终端用户会收到短信验证码，SDK侧会返回用于短信验证码校验的SmsToken。其中Android客户端调用sendVerifyCode接口发送验证码，iOS客户端调用sendVerifyCodeWithTimeout接口发送验证码。详情请参见[接入概述](~~400434~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sddsbvdbvjd****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'Data' => [
                                'description' => '验证是否成功。取值：'."\n"
                                    ."\n"
                                    .'- **true**：验证成功。'."\n"
                                    ."\n"
                                    .'- **false**：验证失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'SmsCodeVerifyFail',
                        'errorMessage' => 'The specified smsCode is invalid.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"Data\\": true,\\n  \\"RequestId\\": \\"8906582E-6722\\"\\n}","errorExample":""},{"type":"xml","example":"<VerifySmsCodeResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <Data>true</Data>\\n    <RequestId>8906582E-6722</RequestId>\\n</VerifySmsCodeResponse>","errorExample":""}]',
            'title' => '完成短信验证码校验',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥、创建认证方案等操作，更多信息，请参见[短信认证使用流程](~~313209~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```',
        ],
        'GetAuthorizationUrl' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1390000****',
                    ],
                ],
                [
                    'name' => 'SchemeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权场景ID。您可在**号码认证服务控制台**的**授权场景管理**页面查看授权场景ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '234****',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '授权结束日期，合约型方案不能为空，类型：yyyy-MM-dd。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020–12–28',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'Data' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'AuthorizationUrl' => [
                                        'description' => '授权链接。',
                                        'type' => 'string',
                                        'example' => 'https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&_env=prod',
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
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'You must specify the parameter.',
                    ],
                    [
                        'errorCode' => 'Throttling.System',
                        'errorMessage' => 'The request was denied due to API flow control.',
                    ],
                    [
                        'errorCode' => 'MobileNumberIllgeal',
                        'errorMessage' => 'The specified mobile phone number is invalid.',
                    ],
                    [
                        'errorCode' => 'DataNotFound',
                        'errorMessage' => 'The specified scheme does not exist.',
                    ],
                    [
                        'errorCode' => 'IllegalParameter',
                        'errorMessage' => 'The specified endDate is invalid.',
                    ],
                    [
                        'errorCode' => 'SchemeNotPassed',
                        'errorMessage' => 'The scheme is not passed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'Failed to verify your access permissions.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'IdentityCertifyNotExist',
                        'errorMessage' => 'The identity verification record does not exist.',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred.',
                    ],
                    [
                        'errorCode' => 'OutOfService',
                        'errorMessage' => 'The account is suspended.',
                    ],
                    [
                        'errorCode' => 'FunctionNotSubscribed',
                        'errorMessage' => 'You have not subscribed to the function.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"AuthorizationUrl\\": \\"https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&_env=prod\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAuthorizationUrlResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <AuthorizationUrl>https://render.****.com/p/s/web-call-minapp/auth-bao?page=commauth/index&amp;token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJiaXpUeXBlIjoiQ29tbUF1dGgiLCJiaXpJZCI6IjVmNWZjNjAzZDQzMTQ0MWZiYTZiNjYzM2QyMjIyNzU0IiwiZXhwIjoxNjA4MTkxODQxfQ.5IvBj2nKgr60APtotaIB13vtPVrdsPQ6avIfWxte1pA&amp;_env=prod</AuthorizationUrl>\\n    </Data>\\n</GetAuthorizationUrlResponse>","errorExample":""}]',
            'title' => '获取授权链接',
            'summary' => '获取支付宝授权链接。',
            'description' => '### 准备工作'."\n"
                .'请先完成阿里云账号注册、获取阿里云访问密钥，更多信息，请参见[通信授权服务使用流程](~~196922~~)。'."\n"
                .'### QPS限制'."\n"
                .'本接口的单用户QPS限制为1000次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => '### Java SDK'."\n"
                .'您可以通过添加Maven依赖安装阿里云Java SDK。SDK版本会持续更新，具体版本请以[OpenAPI](https://next.api.aliyun.com/api/Dypnsapi/2017-05-25/)页面为准。'."\n"
                ."\n"
                .'JAVA SDK MAVEN坐标'."\n"
                .'```'."\n"
                .'<dependency>'."\n"
                .'  <groupId>com.aliyun</groupId>'."\n"
                .'  <artifactId>dypnsapi20170525</artifactId>'."\n"
                .'  <version>1.0.6</version>'."\n"
                .'</dependency>'."\n"
                .'```',
        ],
        'CreateSchemeConfig' => [
            'summary' => '创建融合认证方案号。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SchemeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '方案名称，由中、英文字母构成，长度限制为10个字符。'."\n",
                        'description' => '方案名称，由中、英文字母构成，长度限制为10个字符。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Android APP测试方案',
                    ],
                ],
                [
                    'name' => 'Platform',
                    'in' => 'query',
                    'schema' => [
                        'title' => '方案应用平台',
                        'description' => '方案应用平台。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Android',
                        'enum' => [
                            'Android',
                            'iOS',
                        ],
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用方案的App名称，由中、英文字母构成，长度限制20个字符。',
                        'description' => '应用方案的App名称，由中、英文字母构成，长度限制20个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云通信',
                    ],
                ],
                [
                    'name' => 'AndroidPackageName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '包名，Platform为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'description' => '包名，Platform为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyun.android',
                    ],
                ],
                [
                    'name' => 'AndroidPackageSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => '包签名，Platform为Android时必选。由数字和字母组成，长度为32个字符。',
                        'description' => '包签名，Platform为Android时必选。由数字和字母组成，长度为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dfsfaawklll1****olkweklk***',
                    ],
                ],
                [
                    'name' => 'IosBundleId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'description' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyun.ios',
                    ],
                ],
                [
                    'name' => 'H5Url',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留字段，暂不支持H5方案',
                        'description' => '保留字段，暂不支持H5方案。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
                [
                    'name' => 'H5Origin',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留字段，暂不支持H5方案。',
                        'description' => '保留字段，暂不支持H5方案。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B95B36EC-8108-4479-D3AA-2BB27F9B155A'."\n",
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                            'Model' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'SchemeCode' => [
                                        'description' => '方案Code',
                                        'type' => 'string',
                                        'example' => 'FA100000168468035',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[API返回码](https://help.aliyun.com/zh/pnvs/developer-reference/api-return-code?spm=a2c4g.11186623.0.0.5c3a662fbgeAuk)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    ."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B95B36EC-8108-4479-D3AA-2BB27F9B155A\\\\n\\",\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": {\\n    \\"SchemeCode\\": \\"FA100000168468035\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": false\\n}","type":"json"}]',
            'title' => '创建融合认证方案号',
        ],
        'CreateVerifyScheme' => [
            'summary' => '调用CreateVerifyScheme创建认证方案。',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SchemeName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '一键登录认证方案',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'App名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '阿里云通信',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端操作系统类型，取值：iOS、Android或Web。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'iOS',
                    ],
                ],
                [
                    'name' => 'PackName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包名，osType为Android时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyun',
                    ],
                ],
                [
                    'name' => 'PackSign',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包签名，osType为Android时必选。由数字和字母组成，长度为32个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123aliyun',
                    ],
                ],
                [
                    'name' => 'BundleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BundleID，osType为iOS时必选。由数字、字母、短划线（-）、下划线或点组成，长度限制为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'H5方案页面源地址（建议填写域名级别）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://h5.minexiot.com',
                    ],
                ],
                [
                    'name' => 'Url',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'H5方案使用的页面地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://h5.minexiot.com/',
                    ],
                ],
                [
                    'name' => 'IpWhiteList',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP白名单，默认可不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '139.9.xx.xx'."\n"
                            .'122.112.xx.xx'."\n"
                            .'139.9.xx.xx/24',
                    ],
                ],
                [
                    'name' => 'CmApiCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中国移动通道Code，默认可不填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CuApiCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中国联通通道Code，默认可不填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'CtApiCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '中国电信通道Code，默认可不填。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'SceneType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案类型，默认可不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密钥获取接收邮箱地址，默认可不填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'username@aliyundoc.com',
                    ],
                ],
                [
                    'name' => 'AuthType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证类型，默认不填，只有支持号码认证时可多选，以英文逗号间隔。'."\n"
                            ."\n"
                            .'- **1**：号码认证'."\n"
                            ."\n"
                            .'- **2**：短信认证',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1,2',
                    ],
                ],
                [
                    'name' => 'SmsSignName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '绑定的短信签名，只有AuthType包含2（短信认证）时才有效，且签名必须是号码认证产品下创建的已经审核通过的。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '阿里云短信测试专用',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A1E75E69-3049-5FDB-A376-D745837CD2B1',
                            ],
                            'GateVerifySchemeDTO' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'SchemeCode' => [
                                        'description' => '方案号。',
                                        'type' => 'string',
                                        'example' => 'FC10001287****',
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '状态码。'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。'."\n"
                                    ."\n"
                                    .'- **true**：请求成功。'."\n"
                                    ."\n"
                                    .'- **false**：请求失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SchemeNumberOverLimit',
                        'errorMessage' => 'The maximum number of scheme is exceeded.',
                    ],
                    [
                        'errorCode' => 'BundleIdConflict',
                        'errorMessage' => 'The specified bundleId already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus',
                        'errorMessage' => 'Your account has been suspended.',
                    ],
                    [
                        'errorCode' => 'RamPermissionDeny',
                        'errorMessage' => 'The user is not authorized to operate on the specified resource.',
                    ],
                    [
                        'errorCode' => 'PackageSignedConflict',
                        'errorMessage' => 'The specified package signed already exists.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"A1E75E69-3049-5FDB-A376-D745837CD2B1\\",\\n  \\"GateVerifySchemeDTO\\": {\\n    \\"SchemeCode\\": \\"FC10001287****\\"\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateVerifySchemeResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E6722</RequestId>\\n    <GateVerifySchemeDTO>\\n        <SchemeCode>FC10001287****</SchemeCode>\\n    </GateVerifySchemeDTO>\\n</CreateVerifySchemeResponse>","errorExample":""}]',
            'title' => '创建认证方案',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVerifyScheme' => [
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
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SchemeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案CODE。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FC10000014164****',
                    ],
                ],
                [
                    'name' => 'CustomerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12345678',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求成功。其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E3754956-D0B1-5947-962A-AE767D354F01',
                            ],
                            'Result' => [
                                'description' => '返回结果。取值：'."\n"
                                    ."\n"
                                    .'- **true**：删除成功'."\n"
                                    .'- **false**：删除失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Throttling.System',
                        'errorMessage' => 'The request was denied due to API flow control.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus',
                        'errorMessage' => 'Your account has been suspended.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'InvalidParameters',
                        'errorMessage' => 'The specified parameter is not valid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"E3754956-D0B1-5947-962A-AE767D354F01\\",\\n  \\"Result\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteVerifySchemeResponse>\\n    <Code>OK</Code>\\n    <Message>OK</Message>\\n    <RequestId>E3754956-D0B1-5947-962A-AE767D354F01</RequestId>\\n    <Result>true</Result>\\n</DeleteVerifySchemeResponse>","errorExample":""}]',
            'title' => '删除认证方案',
            'summary' => '调用DeleteVerifyScheme接口删除认证方案。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeVerifyScheme' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SchemeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案CODE。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FC10000010643****',
                    ],
                ],
                [
                    'name' => 'CustomerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1234****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '请求成功。其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0C5380A7-2032-5F7D-9614-1BF8B54D16CB',
                            ],
                            'SchemeQueryResultDTO' => [
                                'description' => '结构体。',
                                'type' => 'object',
                                'properties' => [
                                    'AppEncryptInfo' => [
                                        'description' => '在控制台创建方案号生成的密钥。',
                                        'type' => 'string',
                                        'example' => 'ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****',
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
                        'errorCode' => 'Throttling.System',
                        'errorMessage' => 'The request was denied due to API flow control.',
                    ],
                    [
                        'errorCode' => 'InvalidAccountStatus',
                        'errorMessage' => 'Your account has been suspended.',
                    ],
                    [
                        'errorCode' => 'Unsupported.Account',
                        'errorMessage' => 'Your account has not activated the product.',
                    ],
                    [
                        'errorCode' => 'SceneQueryFail',
                        'errorMessage' => 'The specified scene does not exist.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'UnauthorizedOperation',
                        'errorMessage' => 'You are not authorized to perform this operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'An error occurred while processing your request.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"RequestId\\": \\"0C5380A7-2032-5F7D-9614-1BF8B54D16CB\\",\\n  \\"SchemeQueryResultDTO\\": {\\n    \\"AppEncryptInfo\\": \\"ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>OK</Message>\\n<RequestId>0C5380A7-2032-5F7D-9614-1BF8B54D16CB</RequestId>\\n<Code>OK</Code>\\n<SchemeQueryResultDTO>\\n    <AppEncryptInfo>ZDMARqPkyQzWVJjB/sB/+fCp5TA4lNsRnY7rEC+HfGsOIOk1Brj8UyXFW2RBYIWqLieCSo8ZypEaEj+h9rLd3FgpXAjGYDfmOperod6jPUUwFHhBObxK+HuKVoi2jOqN7aDOlyPyGcATyq3BDdlf922JmnFLT8Hvnu4qgzzCZk0LXWTb0XVPnm5/fHUGHEA2Q+aTrGkaWcHjmTDqQ7BtvrAIIcJJkCJu4i1aeU++/0EzGWap4mcb2VhKROBs****</AppEncryptInfo>\\n</SchemeQueryResultDTO>","errorExample":""}]',
            'title' => '获取认证方案详情',
            'summary' => '调用DescribeVerifyScheme接口获取认证方案详细信息。',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为100次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryGateVerifyStatisticPublic' => [
            'summary' => '调用QueryGateVerifyStatisticPublic接口查看用量情况。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '方案号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FC100000038194004',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '起始日期。格式为YYYYMMDD，例如20220101。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20220101',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束日期。格式为YYYYMMDD，例如20220106。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20220106',
                    ],
                ],
                [
                    'name' => 'AuthenticationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证方式。取值：'."\n"
                            ."\n"
                            .'- **1**：一键登录。'."\n"
                            ."\n"
                            .'- **2**：本机号码校验（含H5本机号码校验）。'."\n"
                            ."\n"
                            .'- **3**：短信认证。'."\n"
                            ."\n"
                            .'- **4**：活体认证。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '99',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OsType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '系统类型。取值：'."\n"
                            ."\n"
                            .'- **Android**。'."\n"
                            ."\n"
                            .'- **iOS**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Android',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。取值：'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'Data' => [
                                'description' => '包括统计日期范围内的总的调用量、调用成功量、调用失败量、调用未知量，及每一天的用量统计。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalFail' => [
                                        'description' => '日期范围内的失败调用量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'Total' => [
                                        'description' => '日期范围内总调用量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'TotalSuccess' => [
                                        'description' => '日期范围内的成功调用量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'TotalUnknown' => [
                                        'description' => '日期范围内的未知调用量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'DayStatistic' => [
                                        'description' => '每日的调用明细。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'StatisticDateStr' => [
                                                    'description' => '日期，精确到天。格式为YYYYMMDD，例如20220103。',
                                                    'type' => 'string',
                                                    'example' => '20220103',
                                                ],
                                                'TotalSuccess' => [
                                                    'description' => '该日期的成功调用量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'TotalFail' => [
                                                    'description' => '该日期的失败调用量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'TotalUnknown' => [
                                                    'description' => '该日期的未知调用量。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"TotalFail\\": 20,\\n    \\"Total\\": 20,\\n    \\"TotalSuccess\\": 0,\\n    \\"TotalUnknown\\": 0,\\n    \\"DayStatistic\\": [\\n      {\\n        \\"StatisticDateStr\\": \\"20220103\\",\\n        \\"TotalSuccess\\": 0,\\n        \\"TotalFail\\": 20,\\n        \\"TotalUnknown\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGateVerifyStatisticPublicResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <TotalFail>20</TotalFail>\\n        <Total>20</Total>\\n        <TotalSuccess>0</TotalSuccess>\\n        <TotalUnknown>0</TotalUnknown>\\n        <DayStatistic>\\n            <StatisticDateStr>20220103</StatisticDateStr>\\n            <TotalSuccess>0</TotalSuccess>\\n            <TotalFail>20</TotalFail>\\n            <TotalUnknown>0</TotalUnknown>\\n        </DayStatistic>\\n    </Data>\\n</QueryGateVerifyStatisticPublicResponse>","errorExample":""}]',
            'title' => '查询用量情况',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QueryGateVerifyBillingPublic' => [
            'summary' => '调用QueryGateVerifyBillingPublic接口查看费用情况。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Month',
                    'in' => 'query',
                    'schema' => [
                        'description' => '月份费用账单。格式为YYYYMM，例如202111。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '202111',
                    ],
                ],
                [
                    'name' => 'AuthenticationType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证方式。取值：'."\n"
                            ."\n"
                            .'- **0**：本机号码校验。'."\n"
                            ."\n"
                            .'- **1**：一键登录。'."\n"
                            ."\n"
                            .'- **2**：全部。'."\n"
                            ."\n"
                            .'- **3**：活体认证。'."\n"
                            ."\n"
                            .'- **4**：短信认证。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '99',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码。取值：'."\n"
                                    ."\n"
                                    .'- 返回OK代表请求成功。'."\n"
                                    ."\n"
                                    .'- 其他错误码，请参见[服务端API返回码](~~85198~~)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '8906582E-6722',
                            ],
                            'Data' => [
                                'description' => '具体到每个方案号的计费量和金额。',
                                'type' => 'object',
                                'properties' => [
                                    'AmountSum' => [
                                        'description' => '该方案的消费金额（单位：元）。',
                                        'type' => 'string',
                                        'example' => '1234',
                                    ],
                                    'SceneBillingList' => [
                                        'description' => '消费金额列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Add' => [
                                                    'description' => '计费量。',
                                                    'type' => 'string',
                                                    'example' => '74',
                                                ],
                                                'SinglePrice' => [
                                                    'description' => '单价（单位：元）。',
                                                    'type' => 'string',
                                                    'example' => '0.02',
                                                ],
                                                'Amount' => [
                                                    'description' => '该方案的消费金额（单位：元）。',
                                                    'type' => 'string',
                                                    'example' => '1.48',
                                                ],
                                                'ItemName' => [
                                                    'description' => '认证方式。',
                                                    'type' => 'string',
                                                    'example' => '本机号码校验',
                                                ],
                                                'SceneCode' => [
                                                    'description' => '方案Code。',
                                                    'type' => 'string',
                                                    'example' => 'FC100000038194004',
                                                ],
                                                'AppName' => [
                                                    'description' => 'App名称。',
                                                    'type' => 'string',
                                                    'example' => '阿里云',
                                                ],
                                                'SceneName' => [
                                                    'description' => '方案名称。',
                                                    'type' => 'string',
                                                    'example' => '阿里云通信',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"RequestId\\": \\"8906582E-6722\\",\\n  \\"Data\\": {\\n    \\"AmountSum\\": \\"1234\\",\\n    \\"SceneBillingList\\": [\\n      {\\n        \\"Add\\": \\"74\\",\\n        \\"SinglePrice\\": \\"0.02\\",\\n        \\"Amount\\": \\"1.48\\",\\n        \\"ItemName\\": \\"本机号码校验\\",\\n        \\"SceneCode\\": \\"FC100000038194004\\",\\n        \\"AppName\\": \\"阿里云\\",\\n        \\"SceneName\\": \\"阿里云通信\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<QueryGateVerifyBillingPublicResponse>\\n    <Code>OK</Code>\\n    <Message>请求成功</Message>\\n    <RequestId>8906582E-6722</RequestId>\\n    <Data>\\n        <AmountLongSum>92760</AmountLongSum>\\n        <AmountSum>1234</AmountSum>\\n        <SceneBillingList>\\n            <Add>74</Add>\\n            <ItemId>15810****</ItemId>\\n            <SinglePrice>0.02</SinglePrice>\\n            <Amount>1.48</Amount>\\n            <ItemName>本机号码校验</ItemName>\\n            <SceneCode>FC100000038194004</SceneCode>\\n            <AppName>阿里云</AppName>\\n            <SceneName>阿里云通信</SceneName>\\n            <Url>www.example.com</Url>\\n        </SceneBillingList>\\n    </Data>\\n</QueryGateVerifyBillingPublicResponse>","errorExample":""}]',
            'title' => '查询费用情况',
            'description' => '### QPS限制'."\n"
                .'本接口的单用户QPS限制为500次/秒。超过限制，API调用会被限流，这可能会影响您的业务，请合理调用。',
        ],
        'QuerySendDetails' => [
            'summary' => '查询短信验证码发送状态（仅能查询短信认证API版本的发送记录）。',
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
            'deprecated' => true,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '186****9399',
                    ],
                ],
                [
                    'name' => 'SendDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信发送日期，支持查询最近30天的记录。'."\n"
                            ."\n"
                            .'格式为：yyyyMMdd，例如20181225。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20181225',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务的唯一标识号，由阿里云提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1231891289318923^12',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '50',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前读取第几页消息，从1开始递增，读取消息时不可超过最大页数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                        'default' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessDeniedDetail' => [
                                'description' => '访问被拒绝详细信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'TotalCount' => [
                                'description' => '列表数据总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '42',
                            ],
                            'Message' => [
                                'description' => '状态码的描述。',
                                'type' => 'string',
                                'example' => '成功',
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '请求结果数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TemplateCode' => [
                                            'description' => '短信模板CODE。'."\n"
                                                ."\n"
                                                .'请在控制台**国内消息**或**国际/港澳台消息**页面中的**模板管理**页签下**模板CODE**一列查看。'."\n"
                                                ."\n"
                                                .'>必须是已添加、并通过审核的模板CODE；且发送国际/港澳台消息时，请使用国际/港澳台短信模版。',
                                            'type' => 'string',
                                            'example' => 'SMS_12231****'."\n",
                                        ],
                                        'ReceiveDate' => [
                                            'description' => '短信接收日期和时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-08 16:44:13'."\n",
                                        ],
                                        'PhoneNum' => [
                                            'description' => '手机号。',
                                            'type' => 'string',
                                            'example' => '1390000****'."\n",
                                        ],
                                        'Content' => [
                                            'description' => '短信内容。',
                                            'type' => 'string',
                                            'example' => '203160',
                                        ],
                                        'SendStatus' => [
                                            'description' => '短信发送状态。'."\n"
                                                .'- 1：等待回执。'."\n"
                                                .'- 2：发送失败。'."\n"
                                                .'- 3：发送成功。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'enumValueTitles' => [],
                                            'example' => '3',
                                        ],
                                        'OutId' => [
                                            'description' => '外部流水扩展字段。',
                                            'type' => 'string',
                                            'example' => '12131231',
                                        ],
                                        'SendDate' => [
                                            'description' => '短信发送日期，支持查询最近30天的记录。'."\n"
                                                ."\n"
                                                .'格式为yyyyMMdd，例如20181225。',
                                            'type' => 'string',
                                            'example' => '2019-01-08 16:44:13'."\n",
                                        ],
                                        'ErrCode' => [
                                            'description' => '运营商短信状态码。'."\n"
                                                ."\n"
                                                .'- 短信发送成功：DELIVERED。'."\n"
                                                .'- 短信发送失败：发送失败，详情请参见[错误码](https://help.aliyun.com/document_detail/101347.html?spm=a2c4g.419277.0.i8)。',
                                            'type' => 'string',
                                            'example' => 'DELIVERED',
                                        ],
                                    ],
                                ],
                                'example' => '',
                            ],
                            'Code' => [
                                'description' => '请求状态码。'."\n"
                                    ."\n"
                                    .'返回OK代表请求成功。'."\n"
                                    .'其他错误码，请参见[错误码列表](https://help.aliyun.com/document_detail/101346.html?spm=a2c4g.419277.0.i11)。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '调用API是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功。'."\n"
                                    ."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'noSubstitutionReason' => '暂无替代API，请关注后续API最新发布。',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"AccessDeniedDetail\\": \\"无\\",\\n  \\"TotalCount\\": 42,\\n  \\"Message\\": \\"成功\\",\\n  \\"Model\\": [\\n    {\\n      \\"TemplateCode\\": \\"SMS_12231****\\\\n\\",\\n      \\"ReceiveDate\\": \\"2019-01-08 16:44:13\\\\n\\",\\n      \\"PhoneNum\\": \\"1390000****\\\\n\\",\\n      \\"Content\\": \\"203160\\",\\n      \\"SendStatus\\": 3,\\n      \\"OutId\\": \\"12131231\\",\\n      \\"SendDate\\": \\"2019-01-08 16:44:13\\\\n\\",\\n      \\"ErrCode\\": \\"DELIVERED\\"\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询短信验证码发送状态',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'dypnsapi.aliyuncs.com',
        ],
    ],
];
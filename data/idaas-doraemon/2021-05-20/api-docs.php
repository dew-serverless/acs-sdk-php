<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'idaas-doraemon',
        'version' => '2021-05-20',
    ],
    'directories' => [
        [
            'id' => 91754,
            'title' => '获取应用授权',
            'type' => 'directory',
            'children' => [
                'FetchAccessToken',
            ],
        ],
        [
            'id' => 91756,
            'title' => '认证器管理',
            'type' => 'directory',
            'children' => [
                'CreateAuthenticatorRegistration',
                'CreateUserAuthenticateOptions',
                'UpdateAuthenticatorAttribute',
                'GetAuthenticator',
                'ListAuthenticators',
                'ListUsers',
                'ListAuthenticationLogs',
                'ListAuthenticatorOpsLogs',
                'RegisterAuthenticator',
                'VerifyUserAuthentication',
                'DeregisterAuthenticator',
            ],
        ],
        [
            'id' => 91766,
            'title' => '号码认证',
            'type' => 'directory',
            'children' => [
                'ServiceInvoke',
            ],
        ],
        [
            'id' => 91768,
            'title' => '密码泄露检测',
            'type' => 'directory',
            'children' => [
                'ListPwnedPasswords',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'VerifyIdToken',
                'ListCostUnitOrders',
                'ListOrderConsumeStatisticRecords',
                'QuerySmsReports',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'FetchAccessToken' => [
            'summary' => '获取一个应用API授权访问的token, 用于后续认证器相关接口调用。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'MobileExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端扩展 JSON 参数，使用 Base64 编码 JSON 字符串后的值',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
                    ],
                ],
                [
                    'name' => 'MobileExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'description' => '使用应用秘钥签名 MobileExtendParamsJson 后的值，签名方式为 HmacSHA256 + Hex',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a3984bc27776bb6f65f82276f75d6a12d56e1b41e98ed6975d852b14309b8a20',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端扩展 JSON 参数，使用 Base64 编码 JSON 字符串后的值'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'secAuthApp',
                    ],
                ],
                [
                    'name' => 'XClientIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ip',
                        'type' => 'string',
                        'required' => false,
                        'example' => '124.127.214.94',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户标志',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6ba923abf6749536b7fd31c6a31360fboOFZQ8WbzmG',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD908DED-849D-5FDB-9C9B-52B1D3F9DC41',
                            ],
                            'Message' => [
                                'description' => '接口请求返回的消息',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Code' => [
                                'description' => '接口请求返回的状态码。',
                                'type' => 'string',
                                'example' => 'Operation.Success',
                            ],
                            'Success' => [
                                'description' => '本次操作是否成功，**true**表示成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Data' => [
                                'description' => '数据详情',
                                'type' => 'object',
                                'properties' => [
                                    'Access_token' => [
                                        'description' => '访问令牌',
                                        'type' => 'string',
                                        'example' => 'eyciOi...jV_PTsxgaNA',
                                    ],
                                    'Token_type' => [
                                        'description' => 'token类型',
                                        'type' => 'string',
                                        'example' => 'Bearer',
                                    ],
                                    'Scope' => [
                                        'description' => '访问范围',
                                        'type' => 'string',
                                        'example' => 'openid',
                                    ],
                                    'Expires_in' => [
                                        'description' => '过期时间',
                                        'type' => 'string',
                                        'example' => '7200',
                                    ],
                                    'Refresh_token' => [
                                        'description' => '刷新令牌',
                                        'type' => 'string',
                                        'example' => '7200',
                                    ],
                                    'Id_token' => [
                                        'description' => '身份令牌',
                                        'type' => 'string',
                                        'example' => 'NiwiZW...wcmlzZUlk',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD908DED-849D-5FDB-9C9B-52B1D3F9DC41\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"Code\\": \\"Operation.Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Access_token\\": \\"eyciOi...jV_PTsxgaNA\\",\\n    \\"Token_type\\": \\"Bearer\\",\\n    \\"Scope\\": \\"openid\\",\\n    \\"Expires_in\\": \\"7200\\",\\n    \\"Refresh_token\\": \\"7200\\",\\n    \\"Id_token\\": \\"NiwiZW...wcmlzZUlk\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取应用API授权访问token',
        ],
        'CreateAuthenticatorRegistration' => [
            'summary' => '创建认证器初始化。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器类型',
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauthn',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户姓名',
                        'description' => '用户姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ZhangSan',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户展示名',
                        'description' => '用户展示名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文',
                        'description' => '客户端SDK生成认证上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文签名信息',
                        'description' => '客户端SDK生成认证上下文签名信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务端配置项，决定认证要求属性',
                        'description' => '服务端配置项，决定认证要求属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'RegistrationContext',
                    'in' => 'query',
                    'schema' => [
                        'title' => '注册上下文',
                        'description' => '注册上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '注册上下文',
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
                                'example' => 'DA0A9BF3-029D-5968-B876-0DF49777B22D',
                            ],
                            'ChallengeBase64' => [
                                'title' => '防重放挑战码',
                                'description' => '防重放挑战码',
                                'type' => 'string',
                            ],
                            'Options' => [
                                'title' => '创建认证器的Options',
                                'description' => '创建认证器的Options',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA0A9BF3-029D-5968-B876-0DF49777B22D\\",\\n  \\"ChallengeBase64\\": \\"\\",\\n  \\"Options\\": \\"\\"\\n}","type":"json"}]',
            'title' => '创建认证器初始化',
        ],
        'CreateUserAuthenticateOptions' => [
            'summary' => '认证器-验证初始化。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器类型',
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauthn',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'BindHashBase64',
                    'in' => 'query',
                    'schema' => [
                        'title' => '操作hash，用来和认证绑定',
                        'description' => '操作hash，用来和认证绑定',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1111222',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文',
                        'description' => '客户端SDK生成认证上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文签名信息',
                        'description' => '客户端SDK生成认证上下文签名信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务端配置项，决定认证要求属性',
                        'description' => '服务端配置项，决定认证要求属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
                            ],
                            'ChallengeBase64' => [
                                'title' => '防重放挑战码',
                                'description' => '防重放挑战码',
                                'type' => 'string',
                                'example' => '2343246776',
                            ],
                            'Options' => [
                                'title' => '创建认证的Options，内容是JSON',
                                'description' => '创建认证的Options，内容是JSON',
                                'type' => 'string',
                                'example' => '{\\"subscribeEvent\\":false,\\"installAgent\\":false}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"ChallengeBase64\\": \\"2343246776\\",\\n  \\"Options\\": \\"{\\\\\\\\\\\\\\"subscribeEvent\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"installAgent\\\\\\\\\\\\\\":false}\\"\\n}","type":"json"}]',
            'title' => '认证器-验证初始化',
        ],
        'UpdateAuthenticatorAttribute' => [
            'summary' => '更新认证器名字。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器名字',
                        'description' => '认证器名字',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TOTP-DefaultName',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器uuid',
                        'description' => '认证器uuid',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
                        'maxLength' => 64,
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
                                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\"\\n}","type":"json"}]',
            'title' => '更新认证器信息',
        ],
        'GetAuthenticator' => [
            'summary' => '获取认证器详情。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户ID',
                        'description' => '用户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器uuid',
                        'description' => '认证器uuid',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1331311',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '123131312313',
                            ],
                            'Authenticator' => [
                                'description' => '认证器对象',
                                'type' => 'object',
                                'properties' => [
                                    'AuthenticatorUuid' => [
                                        'description' => '认证器UUID',
                                        'type' => 'string',
                                        'example' => '你好！3132',
                                    ],
                                    'CredentialId' => [
                                        'title' => '创建认证器的Options',
                                        'description' => '创建认证器的Options',
                                        'type' => 'string',
                                        'example' => '1313',
                                    ],
                                    'Type' => [
                                        'title' => '认证器类型',
                                        'description' => '认证器类型',
                                        'type' => 'string',
                                        'example' => 'TOTP',
                                    ],
                                    'AuthenticatorName' => [
                                        'title' => '认证器名字',
                                        'description' => '认证器名字',
                                        'type' => 'string',
                                        'example' => 'ceshi',
                                    ],
                                    'RegisterTime' => [
                                        'title' => '注册时间',
                                        'description' => '注册时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1231313123',
                                    ],
                                    'LastVerifyTime' => [
                                        'title' => '最后验证时间',
                                        'description' => '最后验证时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123123',
                                    ],
                                    'RegisterSourceIp' => [
                                        'title' => '用户注册IP',
                                        'description' => '用户注册IP',
                                        'type' => 'string',
                                        'example' => '127.0.0.1',
                                    ],
                                    'LastVerifySourceIp' => [
                                        'title' => '用户最后签名IP',
                                        'description' => '用户最后签名IP',
                                        'type' => 'string',
                                        'example' => '127.0.0.1',
                                    ],
                                    'LastVerifyUserAgent' => [
                                        'title' => '用户最后签名userAgent',
                                        'description' => '用户最后签名userAgent',
                                        'type' => 'string',
                                        'example' => '123123',
                                    ],
                                    'CustomAuthenticator' => [
                                        'description' => '认证器',
                                        'type' => 'string',
                                        'example' => '123123',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"123131312313\\",\\n  \\"Authenticator\\": {\\n    \\"AuthenticatorUuid\\": \\"你好！3132\\",\\n    \\"CredentialId\\": \\"1313\\",\\n    \\"Type\\": \\"TOTP\\",\\n    \\"AuthenticatorName\\": \\"ceshi\\",\\n    \\"RegisterTime\\": 1231313123,\\n    \\"LastVerifyTime\\": 123123,\\n    \\"RegisterSourceIp\\": \\"127.0.0.1\\",\\n    \\"LastVerifySourceIp\\": \\"127.0.0.1\\",\\n    \\"LastVerifyUserAgent\\": \\"123123\\",\\n    \\"CustomAuthenticator\\": \\"123123\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取认证器详情',
        ],
        'ListAuthenticators' => [
            'summary' => '获取所有的认证器。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器类型',
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TOTP',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前开始读取的位置，不设置时默认为1',
                        'description' => '当前开始读取的位置，不设置时默认为1',
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
                        'title' => '本次读取的最大数据记录数量，不指定时使用默认值',
                        'description' => '本次读取的最大数据记录数量，不指定时使用默认值',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '531FA210-6F3D-5368-9AE2-AD7B9D1D5CAA',
                            ],
                            'PageNumber' => [
                                'title' => '读取到的位置',
                                'description' => '读取到的位置',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '查询结果数据总数',
                                'description' => '查询结果数据总数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '13',
                            ],
                            'PageSize' => [
                                'title' => '每页记录数量',
                                'description' => '每页记录数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                            'Authenticator' => [
                                'description' => '认证器',
                                'type' => 'array',
                                'items' => [
                                    'description' => '认证器对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationExternalId' => [
                                            'title' => '应用ID',
                                            'description' => '应用ID',
                                            'type' => 'string',
                                            'example' => 'webauth_demo',
                                        ],
                                        'AuthenticatorUuid' => [
                                            'title' => '认证器uuid',
                                            'description' => '认证器uuid',
                                            'type' => 'string',
                                            'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
                                        ],
                                        'CredentialId' => [
                                            'title' => '身份认证ID',
                                            'description' => '身份认证ID',
                                            'type' => 'string',
                                            'example' => 'scimcred-00skzv5noh34r5aoci76',
                                        ],
                                        'Type' => [
                                            'title' => '认证器类型',
                                            'description' => '认证器类型',
                                            'type' => 'string',
                                            'example' => 'TOTP',
                                        ],
                                        'AuthenticatorName' => [
                                            'title' => '身份认证对应的认证器名称',
                                            'description' => '身份认证对应的认证器名称',
                                            'type' => 'string',
                                            'example' => 'TOTP-DefaultName',
                                        ],
                                        'RegisterTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1342800000000',
                                        ],
                                        'LastVerifyTime' => [
                                            'title' => '最后验证时间，如果新注册则为注册时间',
                                            'description' => '最后验证时间，如果新注册则为注册时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123123',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"531FA210-6F3D-5368-9AE2-AD7B9D1D5CAA\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 13,\\n  \\"PageSize\\": 5,\\n  \\"Authenticator\\": [\\n    {\\n      \\"ApplicationExternalId\\": \\"webauth_demo\\",\\n      \\"AuthenticatorUuid\\": \\"0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m\\",\\n      \\"CredentialId\\": \\"scimcred-00skzv5noh34r5aoci76\\",\\n      \\"Type\\": \\"TOTP\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"RegisterTime\\": 1342800000000,\\n      \\"LastVerifyTime\\": 123123\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取认证器列表',
        ],
        'ListUsers' => [
            'summary' => '查询指定应用下的用户信息。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
                            ],
                            'TotalCount' => [
                                'title' => '查询结果数据总数',
                                'description' => '查询结果数据总数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '13',
                            ],
                            'Users' => [
                                'description' => '用户列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'description' => '用户ID',
                                            'type' => 'string',
                                            'example' => '2323232676856745',
                                        ],
                                        'UserName' => [
                                            'description' => '用户名',
                                            'type' => 'string',
                                            'example' => 'lili',
                                        ],
                                        'UserDisplayName' => [
                                            'description' => '用户昵称',
                                            'type' => 'string',
                                            'example' => '李丽',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"TotalCount\\": 13,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"2323232676856745\\",\\n      \\"UserName\\": \\"lili\\",\\n      \\"UserDisplayName\\": \\"李丽\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '认证器用户列表',
        ],
        'ListAuthenticationLogs' => [
            'summary' => '查询认证日志。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauth_demo',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户标志',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10e8c224',
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证器唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TOTP',
                    ],
                ],
                [
                    'name' => 'CredentialId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证使用的凭据Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'scimcred-003o4e2wqxlaxjmjyz96',
                    ],
                ],
                [
                    'name' => 'LogTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '日志的标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'login',
                    ],
                ],
                [
                    'name' => 'FromTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证时间起始值',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640144294',
                    ],
                ],
                [
                    'name' => 'ToTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证时间结束值',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1640144694',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数',
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
                        'description' => '分页展示时，每页显示的条数',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F620E712-F325-520D-BE1A-E2421B062F57',
                            ],
                            'AuthenticationLogContent' => [
                                'description' => '日志内容',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志内容',
                                    'type' => 'object',
                                    'properties' => [
                                        'TenantId' => [
                                            'description' => '租户ID',
                                            'type' => 'string',
                                            'example' => '8cefc5fe5d10dffffdcff011a6b34a863hHmgm0SIrh',
                                        ],
                                        'AliUid' => [
                                            'description' => '阿里云账号id',
                                            'type' => 'string',
                                            'example' => '1588301417442737',
                                        ],
                                        'ApplicationUuid' => [
                                            'description' => '应用uuid',
                                            'type' => 'string',
                                            'example' => '0b6ba5da7bd4cef233ae7b48b5e5dcc1yx9aipQp0hD',
                                        ],
                                        'ApplicationExternalId' => [
                                            'description' => '应用外部Id',
                                            'type' => 'string',
                                            'example' => 'sms_auth',
                                        ],
                                        'UserId' => [
                                            'description' => '用户标志',
                                            'type' => 'string',
                                            'example' => 'xhtseqml',
                                        ],
                                        'AuthenticatorUuid' => [
                                            'description' => '认证器uuid',
                                            'type' => 'string',
                                            'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
                                        ],
                                        'AuthenticatorName' => [
                                            'description' => '认证器名字',
                                            'type' => 'string',
                                            'example' => 'TOTP-DefaultName',
                                        ],
                                        'CredentialId' => [
                                            'description' => '凭据标识',
                                            'type' => 'string',
                                            'example' => 'scimcred-00w9gcvpwueg7geg1a87',
                                        ],
                                        'AuthenticatorType' => [
                                            'description' => '认证器类型',
                                            'type' => 'string',
                                            'example' => 'TOTP',
                                        ],
                                        'AuthenticationAction' => [
                                            'description' => '认证器操作',
                                            'type' => 'string',
                                            'example' => 'send',
                                        ],
                                        'ChallengeBase64' => [
                                            'description' => '防重放挑战码',
                                            'type' => 'string',
                                            'example' => '3519',
                                        ],
                                        'AuthenticationTime' => [
                                            'description' => '认证时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1647233491138',
                                        ],
                                        'UserAgent' => [
                                            'description' => '用户代理',
                                            'type' => 'string',
                                            'example' => 'aoxis',
                                        ],
                                        'UserSourceIp' => [
                                            'description' => '用户源IP',
                                            'type' => 'string',
                                            'example' => '10.23.11.56',
                                        ],
                                        'RawAuthenticationContext' => [
                                            'description' => '认证上下文参数',
                                            'type' => 'string',
                                            'example' => '{"name":"lili"}',
                                        ],
                                        'VerifyResult' => [
                                            'description' => '认证结果',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '错误码',
                                            'type' => 'string',
                                            'example' => '200',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => 'Request was denied due to business check permission',
                                        ],
                                        'LogTag' => [
                                            'description' => '日志标签',
                                            'type' => 'string',
                                            'example' => 'login',
                                        ],
                                        'LogParams' => [
                                            'description' => '日志参数',
                                            'type' => 'string',
                                            'example' => 'khj',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '返回列表长度',
                                'description' => '返回列表长度',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F620E712-F325-520D-BE1A-E2421B062F57\\",\\n  \\"AuthenticationLogContent\\": [\\n    {\\n      \\"TenantId\\": \\"8cefc5fe5d10dffffdcff011a6b34a863hHmgm0SIrh\\",\\n      \\"AliUid\\": \\"1588301417442737\\",\\n      \\"ApplicationUuid\\": \\"0b6ba5da7bd4cef233ae7b48b5e5dcc1yx9aipQp0hD\\",\\n      \\"ApplicationExternalId\\": \\"sms_auth\\",\\n      \\"UserId\\": \\"xhtseqml\\",\\n      \\"AuthenticatorUuid\\": \\"c810731ad3af06e45171395abf19cf9cb00E7i97PhE\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"CredentialId\\": \\"scimcred-00w9gcvpwueg7geg1a87\\",\\n      \\"AuthenticatorType\\": \\"TOTP\\",\\n      \\"AuthenticationAction\\": \\"send\\",\\n      \\"ChallengeBase64\\": \\"3519\\",\\n      \\"AuthenticationTime\\": 1647233491138,\\n      \\"UserAgent\\": \\"aoxis\\",\\n      \\"UserSourceIp\\": \\"10.23.11.56\\",\\n      \\"RawAuthenticationContext\\": \\"{\\\\\\"name\\\\\\":\\\\\\"lili\\\\\\"}\\",\\n      \\"VerifyResult\\": true,\\n      \\"ErrorCode\\": \\"200\\",\\n      \\"ErrorMessage\\": \\"Request was denied due to business check permission\\",\\n      \\"LogTag\\": \\"login\\",\\n      \\"LogParams\\": \\"khj\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '认证器日志',
        ],
        'ListAuthenticatorOpsLogs' => [
            'summary' => '查询认证器操作日志。',
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
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauth_demo',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户标志',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wsnidfr',
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证器唯一标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'webauthn',
                    ],
                ],
                [
                    'name' => 'FromTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1647232996712',
                    ],
                ],
                [
                    'name' => 'ToTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1647232996812',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页记录条数',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                        'default' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '39FF2C8B-73E7-5BA5-AC25-20EEAC37BAB0',
                            ],
                            'AuthenticationLogContent' => [
                                'description' => '日志内容集合',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志内容',
                                    'type' => 'object',
                                    'properties' => [
                                        'TenantId' => [
                                            'description' => '租户Id',
                                            'type' => 'string',
                                            'example' => 'ed0222867189ad2bacfa746843d4b9692mlWC9sU3zl',
                                        ],
                                        'AliUid' => [
                                            'description' => '阿里云账号id',
                                            'type' => 'string',
                                            'example' => '1218758215717204',
                                        ],
                                        'ApplicationUuid' => [
                                            'description' => '应用UUid',
                                            'type' => 'string',
                                            'example' => '2bba0564edce2ff90c544dc623d1c1f5iPpCGAqTioA',
                                        ],
                                        'ApplicationExternalId' => [
                                            'description' => '应用外部Id',
                                            'type' => 'string',
                                            'example' => 'webauth_demo',
                                        ],
                                        'UserId' => [
                                            'description' => '用户标志',
                                            'type' => 'string',
                                            'example' => '3b323',
                                        ],
                                        'AuthenticatorUuid' => [
                                            'description' => '认证器uuid',
                                            'type' => 'string',
                                            'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
                                        ],
                                        'AuthenticatorName' => [
                                            'description' => '认证器名字',
                                            'type' => 'string',
                                            'example' => 'TOTP-DefaultName',
                                        ],
                                        'CredentialId' => [
                                            'description' => '身份认证ID',
                                            'type' => 'string',
                                            'example' => 'scimcred-00t3zfhiy2ylzvm2i287',
                                        ],
                                        'AuthenticatorType' => [
                                            'description' => '认证器类型',
                                            'type' => 'string',
                                            'example' => 'TOTP',
                                        ],
                                        'OperationAction' => [
                                            'description' => '操作动作',
                                            'type' => 'string',
                                            'example' => 'ListTagResources',
                                        ],
                                        'ChallengeBase64' => [
                                            'description' => '防重放挑战码',
                                            'type' => 'string',
                                            'example' => 'exfa',
                                        ],
                                        'OperationTime' => [
                                            'description' => '操作时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1647309893086',
                                        ],
                                        'UserAgent' => [
                                            'description' => '用户代理',
                                            'type' => 'string',
                                            'example' => '10.13.1.56',
                                        ],
                                        'UserSourceIp' => [
                                            'description' => '用户源IP',
                                            'type' => 'string',
                                            'example' => '10.13.1.56',
                                        ],
                                        'RawContext' => [
                                            'description' => '原始日志文本',
                                            'type' => 'string',
                                            'example' => '登录成功',
                                        ],
                                        'OperationResult' => [
                                            'description' => '操作是否成功',
                                            'type' => 'boolean',
                                            'example' => 'True',
                                        ],
                                        'ErrorCode' => [
                                            'description' => '错误码',
                                            'type' => 'string',
                                            'example' => 'Failed',
                                        ],
                                        'ErrorMessage' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => 'user not exist, alipayId=2088022534411015',
                                        ],
                                        'LogParams' => [
                                            'description' => '日志参数',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '返回列表长度',
                                'description' => '返回列表长度',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3',
                            ],
                            'PageNumber' => [
                                'description' => '当前页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '页面记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39FF2C8B-73E7-5BA5-AC25-20EEAC37BAB0\\",\\n  \\"AuthenticationLogContent\\": [\\n    {\\n      \\"TenantId\\": \\"ed0222867189ad2bacfa746843d4b9692mlWC9sU3zl\\",\\n      \\"AliUid\\": \\"1218758215717204\\",\\n      \\"ApplicationUuid\\": \\"2bba0564edce2ff90c544dc623d1c1f5iPpCGAqTioA\\",\\n      \\"ApplicationExternalId\\": \\"webauth_demo\\",\\n      \\"UserId\\": \\"3b323\\",\\n      \\"AuthenticatorUuid\\": \\"0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"CredentialId\\": \\"scimcred-00t3zfhiy2ylzvm2i287\\",\\n      \\"AuthenticatorType\\": \\"TOTP\\",\\n      \\"OperationAction\\": \\"ListTagResources\\",\\n      \\"ChallengeBase64\\": \\"exfa\\",\\n      \\"OperationTime\\": 1647309893086,\\n      \\"UserAgent\\": \\"10.13.1.56\\",\\n      \\"UserSourceIp\\": \\"10.13.1.56\\",\\n      \\"RawContext\\": \\"登录成功\\",\\n      \\"OperationResult\\": true,\\n      \\"ErrorCode\\": \\"Failed\\",\\n      \\"ErrorMessage\\": \\"user not exist, alipayId=2088022534411015\\",\\n      \\"LogParams\\": \\"1\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
            'title' => '认证器操作日志',
        ],
        'RegisterAuthenticator' => [
            'summary' => '注册认证器。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器类型',
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauthn',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器名字',
                        'description' => '认证器名字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ZhangSan\'s authenticator',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'RegistrationContext',
                    'in' => 'query',
                    'schema' => [
                        'title' => '注册上下文',
                        'description' => '注册上下文',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{}',
                        'maxLength' => 3096,
                    ],
                ],
                [
                    'name' => 'RequireChallengeBase64',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话绑定的challenge base64标识',
                        'description' => '会话绑定的challenge base64标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAdda',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文',
                        'description' => '客户端SDK生成认证上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文签名信息',
                        'description' => '客户端SDK生成认证上下文签名信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务端配置项，决定认证要求属性',
                        'description' => '服务端配置项，决定认证要求属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'UserSourceIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户端来源IP地址，用于审计',
                        'description' => '用户端来源IP地址，用于审计',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.0.1',
                    ],
                ],
                [
                    'name' => 'LogParams',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户自定义记录审计日志信息',
                        'description' => '用户自定义记录审计日志信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '23123',
                            ],
                            'AuthenticatorUuid' => [
                                'title' => '认证器UUID',
                                'description' => '认证器UUID',
                                'type' => 'string',
                                'example' => '123123123',
                            ],
                            'EtasResponseSting' => [
                                'title' => '仅IFAA认证器注册返回',
                                'description' => '仅IFAA认证器注册返回',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23123\\",\\n  \\"AuthenticatorUuid\\": \\"123123123\\",\\n  \\"EtasResponseSting\\": \\"\\"\\n}","type":"json"}]',
            'title' => '注册认证器',
        ],
        'VerifyUserAuthentication' => [
            'summary' => '认证器-验证。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器类型',
                        'description' => '认证器类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'webauthn',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticationContext',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证上下文，由AuthenticatorType决定格式',
                        'description' => '认证上下文，由AuthenticatorType决定格式',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'RequireChallengeBase64',
                    'in' => 'query',
                    'schema' => [
                        'title' => '会话绑定的challenge base64标识',
                        'description' => '会话绑定的challenge base64标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAdda',
                    ],
                ],
                [
                    'name' => 'RequireBindHashBase64',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证绑定的操作hash base64标识',
                        'description' => '认证绑定的操作hash base64标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAdda',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文',
                        'description' => '客户端SDK生成认证上下文',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ClientExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端SDK生成认证上下文签名信息',
                        'description' => '客户端SDK生成认证上下文签名信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'title' => '服务端配置项，决定认证要求属性',
                        'description' => '服务端配置项，决定认证要求属性',
                        'type' => 'string',
                        'required' => false,
                        'example' => '由具体认证方式决定',
                    ],
                ],
                [
                    'name' => 'UserSourceIp',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户端来源IP地址，用于审计',
                        'description' => '用户端来源IP地址，用于审计',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.0.1',
                    ],
                ],
                [
                    'name' => 'LogTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户自定义记录审计日志标签',
                        'description' => '用户自定义记录审计日志标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'login',
                    ],
                ],
                [
                    'name' => 'LogParams',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户自定义记录审计日志信息',
                        'description' => '用户自定义记录审计日志信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回对象',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '83ED3BC7-B36E-53B5-83D4-152CF2088DB9',
                            ],
                            'VerifyResult' => [
                                'title' => '认证结果，true or false',
                                'description' => '认证结果，true or false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'AuthenticateResultInfo' => [
                                'title' => '认证结果',
                                'description' => '认证结果',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'title' => '认证通过的用户Id',
                                        'description' => '认证通过的用户Id',
                                        'type' => 'string',
                                        'example' => '3b32',
                                    ],
                                    'CredentialId' => [
                                        'title' => '认证使用的凭据Id',
                                        'description' => '认证使用的凭据Id',
                                        'type' => 'string',
                                        'example' => 'scimcred-000vfaknfwlp8kesl520',
                                    ],
                                    'BindHashBase64' => [
                                        'title' => '这次认证绑定的操作hash',
                                        'description' => '这次认证绑定的操作hash',
                                        'type' => 'string',
                                        'example' => '10e8c224555bba8bfb780badebc4a08cc1Z6LmC6Hp9',
                                    ],
                                ],
                            ],
                            'EtasSDKString' => [
                                'description' => '生成的sdksdk的md5值。',
                                'type' => 'string',
                                'example' => 'zmtdjb',
                            ],
                            'IdToken' => [
                                'description' => '身份令牌',
                                'type' => 'string',
                                'example' => 'qacdfhigvbcvb',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"83ED3BC7-B36E-53B5-83D4-152CF2088DB9\\",\\n  \\"VerifyResult\\": true,\\n  \\"AuthenticateResultInfo\\": {\\n    \\"UserId\\": \\"3b32\\",\\n    \\"CredentialId\\": \\"scimcred-000vfaknfwlp8kesl520\\",\\n    \\"BindHashBase64\\": \\"10e8c224555bba8bfb780badebc4a08cc1Z6LmC6Hp9\\"\\n  },\\n  \\"EtasSDKString\\": \\"zmtdjb\\",\\n  \\"IdToken\\": \\"qacdfhigvbcvb\\"\\n}","type":"json"}]',
            'title' => '认证器-验证',
        ],
        'DeregisterAuthenticator' => [
            'summary' => '注销认证器。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用外部Id',
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user-11122223333',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthenticatorUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '认证器uuid',
                        'description' => '认证器uuid',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a00712a4e56196755059356c290793031xHdUrCPXUS',
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
                                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\"\\n}","type":"json"}]',
            'title' => '注销认证器',
        ],
        'ServiceInvoke' => [
            'summary' => '根据 ServiceCode 和 Action 决定是使用哪种认证方式认证。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'MobileExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '移动端SDK生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
                    ],
                ],
                [
                    'name' => 'MobileExtendParamsJsonSign',
                    'in' => 'query',
                    'schema' => [
                        'description' => '移动端SDK生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ba6f5596f00102cb1a7d971f8390b7ccb28e6bc4e8694d051f9299ccc69e1186',
                    ],
                ],
                [
                    'name' => 'ServerExtendParamsJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务端配置参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
                    ],
                ],
                [
                    'name' => 'ServiceCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证方式',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'IFAA',
                    ],
                ],
                [
                    'name' => 'DoraemonAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'SimpleAuthInit',
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用外部ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A0000003',
                    ],
                ],
                [
                    'name' => 'TestModel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否测试, 在生产环境下不生效',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'XClientIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端IP',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.0.1',
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
                                'description' => '请求的唯一ID',
                                'type' => 'string',
                                'example' => 'F8F63CAB-A96C-5017-AFB0-324593223817',
                            ],
                            'Data' => [
                                'description' => '根据不同的认证方式  返回不同的结果',
                                'type' => 'string',
                                'example' => '"{\\"ifaa\\"{\\"code\\":0,\\"message\\":\\"eyJo....BWUFBQUFBIn19\\"},\\"version\\":\\"1.0.0\\",\\"transaction\\":{\\"id\\":\\"sIFAA-ios\\",\\"type\\":\\"sIFAA-ios\\",\\"payload\\":\\"\\"},\\"action\\":\\"request/auth\\"}" }',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'Operation.Failure.ApiInvoke.ServiceInArrears',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'Operation.Success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'IdToken' => [
                                'description' => '身份令牌',
                                'type' => 'string',
                                'example' => 'qacdfhigvbcvb',
                            ],
                            'EventId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8F63CAB-A96C-5017-AFB0-324593223817\\",\\n  \\"Data\\": \\"\\\\\\"{\\\\\\\\\\\\\\"ifaa\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\"code\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"message\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"eyJo....BWUFBQUFBIn19\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"transaction\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sIFAA-ios\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sIFAA-ios\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"payload\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"action\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"request/auth\\\\\\\\\\\\\\"}\\\\\\" }\\",\\n  \\"Message\\": \\"Operation.Failure.ApiInvoke.ServiceInArrears\\",\\n  \\"Code\\": \\"Operation.Success\\",\\n  \\"Success\\": true,\\n  \\"IdToken\\": \\"qacdfhigvbcvb\\",\\n  \\"EventId\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ServiceInvokeResponse>\\n    <Success>true</Success>\\n    <Code>Operation.Success</Code>\\n    <Message>Operation.Success</Message>\\n    <RequestId>337848D2-FF8A-4EDD-BD4D-1B9BC80E58B6</RequestId>\\n    <Data>{\\"ifaa\\"{\\"code\\":0,\\"message\\":\\"eyJo....BWUFBQUFBIn19\\"},\\"version\\":\\"1.0.0\\",\\"transaction\\":{\\"id\\":\\"sIFAA-ios\\",\\"type\\":\\"sIFAA-ios\\",\\"payload\\":\\"\\"},\\"action\\":\\"request/auth\\"}</Data>\\n</ServiceInvokeResponse>","errorExample":""}]',
            'title' => '认证服务',
            'description' => '请确保在使用该接口前，已充分了解安全认证产品的[收费方式](https://help.aliyun.com/document_detail/262147.html?spm=5176.b80817263.help.dexternal.30c1549awhmdq6)和[价格](https://help.aliyun.com/document_detail/262147.html?spm=5176.b80817263.help.dexternal.30c1549awhmdq6)。',
        ],
        'ListPwnedPasswords' => [
            'summary' => '检测密码泄露。',
            'methods' => [
                'get',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PrefixHexPasswordSha1Hash',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码SHA1Hash值前六位',
                        'type' => 'string',
                        'required' => true,
                        'example' => '000000',
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
                                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
                            ],
                            'PageNumber' => [
                                'description' => '当前页数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'TotalCount' => [
                                'description' => '总数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '80',
                            ],
                            'PageSize' => [
                                'description' => '每页数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'PwnedPasswordInfos' => [
                                'description' => '泄露密码集合',
                                'type' => 'array',
                                'items' => [
                                    'description' => '泄露密码对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'HexPasswordSha1Hash' => [
                                            'description' => '密码Hash',
                                            'type' => 'string',
                                            'example' => '0000',
                                        ],
                                        'PwnedCount' => [
                                            'description' => '泄露次数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '84',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 80,\\n  \\"PageSize\\": 10,\\n  \\"PwnedPasswordInfos\\": [\\n    {\\n      \\"HexPasswordSha1Hash\\": \\"0000\\",\\n      \\"PwnedCount\\": 84\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPwnedPasswordsResponse>\\n    <RequestId>D0F570B0-89CE-07F2-B41E-F97E089E13C6</RequestId>\\n    <PageNumber>2</PageNumber>\\n    <TotalCount>80</TotalCount>\\n    <PageSize>10</PageSize>\\n    <PwnedPasswordInfos>\\n        <HexPasswordSha1Hash>0000</HexPasswordSha1Hash>\\n        <PwnedCount>84</PwnedCount>\\n    </PwnedPasswordInfos>\\n</ListPwnedPasswordsResponse>","errorExample":""}]',
            'title' => '密码泄露检测',
        ],
        'VerifyIdToken' => [
            'summary' => '用于验证 IdToken。号码认证或者 IFAA 认证通过后，获得的 IdToken 需要通过此接口验证。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'JwtIdToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'jwtIdToken',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJraWQiOiIzNj',
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用外部Id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'webauth_demo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'F620E712-F325-520D-BE1A-E2421B062F57',
                            ],
                            'UserId' => [
                                'description' => '用户ID',
                                'type' => 'string',
                                'example' => '123456',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F620E712-F325-520D-BE1A-E2421B062F57\\",\\n  \\"UserId\\": \\"123456\\"\\n}","type":"json"}]',
            'title' => '验证IdToken',
        ],
        'ListCostUnitOrders' => [
            'summary' => '分页查询订单及其 CU 用量信息，按创建时间倒序排列。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'BeginDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始创建时间',
                        'description' => '开始创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-11-16',
                    ],
                ],
                [
                    'name' => 'FinalDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束创建时间',
                        'description' => '结束创建时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2021-12-04 00',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '第几页',
                        'description' => '第几页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                        'default' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小',
                        'description' => '每页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A82621A5-715C-5486-80E9-9262EE43BA55',
                            ],
                            'TotalPages' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'TotalElements' => [
                                'description' => '总条目数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12',
                            ],
                            'PageSize' => [
                                'description' => '页大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Items' => [
                                'description' => '返回记录列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '记录详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'AliOrderCode' => [
                                            'title' => '阿里云订单编号',
                                            'description' => '阿里云订单编号',
                                            'type' => 'string',
                                            'example' => '215222637610732',
                                        ],
                                        'AliOrderInstanceId' => [
                                            'title' => '阿里云订单实例名称',
                                            'description' => '阿里云订单实例名称',
                                            'type' => 'string',
                                            'example' => 'idaas_auth_public_cn-pl32pciy101',
                                        ],
                                        'TotalCostUnit' => [
                                            'title' => '总计 CU 值，单位厘，实际购买 CU 乘以 1000',
                                            'description' => '总计 CU 值，单位厘，实际购买 CU 乘以 1000',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100000',
                                        ],
                                        'UsedCostUnit' => [
                                            'title' => '已用 CU 值，单位厘，实际使用 CU 乘以 1000',
                                            'description' => '已用 CU 值，单位厘，实际使用 CU 乘以 1000',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                        'OrderStatus' => [
                                            'title' => '订单状态。VALID：有效、REFUND：退款、EXPIRED：过期',
                                            'description' => '订单状态。VALID：有效、REFUND：退款、EXPIRED：过期',
                                            'type' => 'string',
                                            'example' => 'VALID',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1646028448000',
                                        ],
                                        'ExpiredTime' => [
                                            'title' => '过期时间',
                                            'description' => '过期时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1923321600000',
                                        ],
                                        'RefundTime' => [
                                            'title' => '退款时间，毫秒时间戳，退款时才有值',
                                            'description' => '退款时间，毫秒时间戳，退款时才有值',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1923321600000',
                                        ],
                                        'Exhausted' => [
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A82621A5-715C-5486-80E9-9262EE43BA55\\",\\n  \\"TotalPages\\": 2,\\n  \\"TotalElements\\": 12,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"AliOrderCode\\": \\"215222637610732\\",\\n      \\"AliOrderInstanceId\\": \\"idaas_auth_public_cn-pl32pciy101\\",\\n      \\"TotalCostUnit\\": 100000,\\n      \\"UsedCostUnit\\": 100,\\n      \\"OrderStatus\\": \\"VALID\\",\\n      \\"CreateTime\\": 1646028448000,\\n      \\"ExpiredTime\\": 1923321600000,\\n      \\"RefundTime\\": 1923321600000,\\n      \\"Exhausted\\": true\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取订单及CU用量列表',
        ],
        'ListOrderConsumeStatisticRecords' => [
            'summary' => '分页查询订单每日用量统计记录，按统计日期正序排列。统计日期最大区间范围为 31 天，如果超过从最大值向前推 31 天。T+1 出统计记录，当天12点前统计出昨天的用量。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'AliOrderCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '阿里订单编号',
                        'description' => '阿里云订单编号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '211283925690732',
                    ],
                ],
                [
                    'name' => 'StatisticTimeMin',
                    'in' => 'query',
                    'schema' => [
                        'title' => '统计时间最小值',
                        'description' => '统计日期最小值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-31',
                    ],
                ],
                [
                    'name' => 'StatisticTimeMax',
                    'in' => 'query',
                    'schema' => [
                        'title' => '统计时间最大值',
                        'description' => '统计日期最大值，默认为昨天',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-05-31',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页记录数',
                        'description' => '每页记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ApplicationExternalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceCode',
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
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '1655384783875',
                            ],
                            'TotalPages' => [
                                'title' => '总页数',
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'TotalElements' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'PageSize' => [
                                'title' => '每页记录数',
                                'description' => '每页记录数',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Items' => [
                                'title' => '数据项列表',
                                'description' => '数据项列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '数据项详情',
                                    'description' => '数据项详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'AliOrderCode' => [
                                            'title' => '阿里云订单编号',
                                            'description' => '阿里云订单编号',
                                            'type' => 'string',
                                            'example' => '23567876823',
                                        ],
                                        'StatisticTime' => [
                                            'title' => '统计日期，时间戳，精确到秒',
                                            'description' => '统计日期，时间戳，精确到秒',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1655388050',
                                        ],
                                        'ApplicationExternalId' => [
                                            'title' => '应用外部标志',
                                            'description' => '应用外部标志',
                                            'type' => 'string',
                                            'example' => 'sms_auth',
                                        ],
                                        'ServiceCode' => [
                                            'title' => '服务码',
                                            'description' => '服务码',
                                            'type' => 'string',
                                            'example' => 'SMS',
                                        ],
                                        'UnitPrice' => [
                                            'title' => '单价',
                                            'description' => '单价',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'ChargedCount' => [
                                            'title' => '计费数目',
                                            'description' => '计费数目',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TotalPrice' => [
                                            'title' => '总价',
                                            'description' => '总价',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1655384783875\\",\\n  \\"TotalPages\\": 10,\\n  \\"TotalElements\\": 100,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"AliOrderCode\\": \\"23567876823\\",\\n      \\"StatisticTime\\": 1655388050,\\n      \\"ApplicationExternalId\\": \\"sms_auth\\",\\n      \\"ServiceCode\\": \\"SMS\\",\\n      \\"UnitPrice\\": 10,\\n      \\"ChargedCount\\": 1,\\n      \\"TotalPrice\\": 10\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询订单每日用量统计记录',
        ],
        'QuerySmsReports' => [
            'summary' => '短信回执查询。',
            'methods' => [
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
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'doraemon_xxxxx',
                    ],
                ],
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '事件ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eventId_xxxxxx',
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
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '4581B16-xxxxx',
                            ],
                            'TotalElements' => [
                                'description' => '回执数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '15',
                            ],
                            'SmsReports' => [
                                'description' => '查询报表数据的返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询报表数据的返回结果',
                                    'type' => 'object',
                                    'properties' => [
                                        'Tid' => [
                                            'description' => '任务编号',
                                            'type' => 'string',
                                            'example' => '3514',
                                        ],
                                        'Mobile' => [
                                            'description' => '手机号',
                                            'type' => 'string',
                                            'example' => '156xxxxxxxx',
                                        ],
                                        'Code' => [
                                            'description' => "\n"
                                                .'错误码'."\n",
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'Stat' => [
                                            'description' => '短信状态',
                                            'type' => 'string',
                                            'example' => 'DELIVRD',
                                        ],
                                        'Sn' => [
                                            'description' => '扩展号',
                                            'type' => 'string',
                                            'example' => '"d36xxxxx3573772f159f616ebJ8KGPBg7Hr::appId::123456::Bird"',
                                        ],
                                        'TenantId' => [
                                            'description' => '租户ID',
                                            'type' => 'string',
                                            'example' => 'd36a370f33f037233573772f15xxxxxx',
                                        ],
                                        'AppId' => [
                                            'description' => '应用ID',
                                            'type' => 'string',
                                            'example' => 'appid',
                                        ],
                                        'EventId' => [
                                            'description' => '事件ID',
                                            'type' => 'string',
                                            'example' => 'event_xxxx',
                                        ],
                                        'Time' => [
                                            'description' => '回执时间',
                                            'type' => 'string',
                                            'example' => '20220823171446',
                                        ],
                                        'ChargedCount' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4581B16-xxxxx\\",\\n  \\"TotalElements\\": 15,\\n  \\"SmsReports\\": [\\n    {\\n      \\"Tid\\": \\"3514\\",\\n      \\"Mobile\\": \\"156xxxxxxxx\\",\\n      \\"Code\\": \\"0\\",\\n      \\"Stat\\": \\"DELIVRD\\",\\n      \\"Sn\\": \\"\\\\\\"d36xxxxx3573772f159f616ebJ8KGPBg7Hr::appId::123456::Bird\\\\\\"\\",\\n      \\"TenantId\\": \\"d36a370f33f037233573772f15xxxxxx\\",\\n      \\"AppId\\": \\"appid\\",\\n      \\"EventId\\": \\"event_xxxx\\",\\n      \\"Time\\": \\"20220823171446\\",\\n      \\"ChargedCount\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询短信回执',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'idaas-doraemon.aliyuncs.com',
        ],
    ],
];
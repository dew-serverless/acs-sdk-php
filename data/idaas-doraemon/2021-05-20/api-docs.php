<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'idaas-doraemon',
    'version' => '2021-05-20',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 91754,
      'title' => '获取应用授权',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'FetchAccessToken',
      ),
    ),
    1 => 
    array (
      'id' => 91756,
      'title' => '认证器管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateAuthenticatorRegistration',
        1 => 'CreateUserAuthenticateOptions',
        2 => 'UpdateAuthenticatorAttribute',
        3 => 'GetAuthenticator',
        4 => 'ListAuthenticators',
        5 => 'ListUsers',
        6 => 'ListAuthenticationLogs',
        7 => 'ListAuthenticatorOpsLogs',
        8 => 'RegisterAuthenticator',
        9 => 'VerifyUserAuthentication',
        10 => 'DeregisterAuthenticator',
      ),
    ),
    2 => 
    array (
      'id' => 91766,
      'title' => '号码认证',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ServiceInvoke',
      ),
    ),
    3 => 
    array (
      'id' => 91768,
      'title' => '密码泄露检测',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListPwnedPasswords',
      ),
    ),
    4 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyIdToken',
        1 => 'ListCostUnitOrders',
        2 => 'ListOrderConsumeStatisticRecords',
        3 => 'QuerySmsReports',
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
    'FetchAccessToken' => 
    array (
      'summary' => '获取一个应用API授权访问的token, 用于后续认证器相关接口调用。',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MobileExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端扩展 JSON 参数，使用 Base64 编码 JSON 字符串后的值',
            'type' => 'string',
            'required' => true,
            'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
          ),
        ),
        1 => 
        array (
          'name' => 'MobileExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '使用应用秘钥签名 MobileExtendParamsJson 后的值，签名方式为 HmacSHA256 + Hex',
            'type' => 'string',
            'required' => true,
            'example' => 'a3984bc27776bb6f65f82276f75d6a12d56e1b41e98ed6975d852b14309b8a20',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务端扩展 JSON 参数，使用 Base64 编码 JSON 字符串后的值

',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
          ),
        ),
        3 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => 'secAuthApp',
          ),
        ),
        4 => 
        array (
          'name' => 'XClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端ip',
            'type' => 'string',
            'required' => false,
            'example' => '124.127.214.94',
          ),
        ),
        5 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户标志',
            'type' => 'string',
            'required' => false,
            'example' => '6ba923abf6749536b7fd31c6a31360fboOFZQ8WbzmG',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BD908DED-849D-5FDB-9C9B-52B1D3F9DC41',
              ),
              'Message' => 
              array (
                'description' => '接口请求返回的消息',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Code' => 
              array (
                'description' => '接口请求返回的状态码。',
                'type' => 'string',
                'example' => 'Operation.Success',
              ),
              'Success' => 
              array (
                'description' => '本次操作是否成功，**true**表示成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Data' => 
              array (
                'description' => '数据详情',
                'type' => 'object',
                'properties' => 
                array (
                  'Access_token' => 
                  array (
                    'description' => '访问令牌',
                    'type' => 'string',
                    'example' => 'eyciOi...jV_PTsxgaNA',
                  ),
                  'Token_type' => 
                  array (
                    'description' => 'token类型',
                    'type' => 'string',
                    'example' => 'Bearer',
                  ),
                  'Scope' => 
                  array (
                    'description' => '访问范围',
                    'type' => 'string',
                    'example' => 'openid',
                  ),
                  'Expires_in' => 
                  array (
                    'description' => '过期时间',
                    'type' => 'string',
                    'example' => '7200',
                  ),
                  'Refresh_token' => 
                  array (
                    'description' => '刷新令牌',
                    'type' => 'string',
                    'example' => '7200',
                  ),
                  'Id_token' => 
                  array (
                    'description' => '身份令牌',
                    'type' => 'string',
                    'example' => 'NiwiZW...wcmlzZUlk',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD908DED-849D-5FDB-9C9B-52B1D3F9DC41\\",\\n  \\"Message\\": \\"Success\\",\\n  \\"Code\\": \\"Operation.Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Access_token\\": \\"eyciOi...jV_PTsxgaNA\\",\\n    \\"Token_type\\": \\"Bearer\\",\\n    \\"Scope\\": \\"openid\\",\\n    \\"Expires_in\\": \\"7200\\",\\n    \\"Refresh_token\\": \\"7200\\",\\n    \\"Id_token\\": \\"NiwiZW...wcmlzZUlk\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取应用API授权访问token',
    ),
    'CreateAuthenticatorRegistration' => 
    array (
      'summary' => '创建认证器初始化。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器类型',
            'description' => '认证器类型',
            'type' => 'string',
            'required' => true,
            'example' => 'webauthn',
            'maxLength' => 32,
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'UserName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户姓名',
            'description' => '用户姓名',
            'type' => 'string',
            'required' => false,
            'example' => 'ZhangSan',
            'maxLength' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'UserDisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户展示名',
            'description' => '用户展示名',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
            'maxLength' => 64,
          ),
        ),
        5 => 
        array (
          'name' => 'ClientExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文',
            'description' => '客户端SDK生成认证上下文',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文签名信息',
            'description' => '客户端SDK生成认证上下文签名信息',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        7 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端配置项，决定认证要求属性',
            'description' => '服务端配置项，决定认证要求属性',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        8 => 
        array (
          'name' => 'RegistrationContext',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '注册上下文',
            'description' => '注册上下文',
            'type' => 'string',
            'required' => false,
            'example' => '注册上下文',
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
                'example' => 'DA0A9BF3-029D-5968-B876-0DF49777B22D',
              ),
              'ChallengeBase64' => 
              array (
                'title' => '防重放挑战码',
                'description' => '防重放挑战码',
                'type' => 'string',
              ),
              'Options' => 
              array (
                'title' => '创建认证器的Options',
                'description' => '创建认证器的Options',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA0A9BF3-029D-5968-B876-0DF49777B22D\\",\\n  \\"ChallengeBase64\\": \\"\\",\\n  \\"Options\\": \\"\\"\\n}","type":"json"}]',
      'title' => '创建认证器初始化',
    ),
    'CreateUserAuthenticateOptions' => 
    array (
      'summary' => '认证器-验证初始化。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器类型',
            'description' => '认证器类型',
            'type' => 'string',
            'required' => true,
            'example' => 'webauthn',
            'maxLength' => 32,
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'BindHashBase64',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '操作hash，用来和认证绑定',
            'description' => '操作hash，用来和认证绑定',
            'type' => 'string',
            'required' => false,
            'example' => '1111222',
            'maxLength' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'ClientExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文',
            'description' => '客户端SDK生成认证上下文',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文签名信息',
            'description' => '客户端SDK生成认证上下文签名信息',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        6 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端配置项，决定认证要求属性',
            'description' => '服务端配置项，决定认证要求属性',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
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
                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
              ),
              'ChallengeBase64' => 
              array (
                'title' => '防重放挑战码',
                'description' => '防重放挑战码',
                'type' => 'string',
                'example' => '2343246776',
              ),
              'Options' => 
              array (
                'title' => '创建认证的Options，内容是JSON',
                'description' => '创建认证的Options，内容是JSON',
                'type' => 'string',
                'example' => '{\\"subscribeEvent\\":false,\\"installAgent\\":false}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"ChallengeBase64\\": \\"2343246776\\",\\n  \\"Options\\": \\"{\\\\\\\\\\\\\\"subscribeEvent\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"installAgent\\\\\\\\\\\\\\":false}\\"\\n}","type":"json"}]',
      'title' => '认证器-验证初始化',
    ),
    'UpdateAuthenticatorAttribute' => 
    array (
      'summary' => '更新认证器名字。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器名字',
            'description' => '认证器名字',
            'type' => 'string',
            'required' => true,
            'example' => 'TOTP-DefaultName',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticatorUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器uuid',
            'description' => '认证器uuid',
            'type' => 'string',
            'required' => true,
            'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
            'maxLength' => 64,
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
                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\"\\n}","type":"json"}]',
      'title' => '更新认证器信息',
    ),
    'GetAuthenticator' => 
    array (
      'summary' => '获取认证器详情。',
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
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户ID',
            'description' => '用户ID',
            'type' => 'string',
            'required' => true,
            'example' => '1',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器uuid',
            'description' => '认证器uuid',
            'type' => 'string',
            'required' => true,
            'example' => '1331311',
            'maxLength' => 64,
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
                'example' => '123131312313',
              ),
              'Authenticator' => 
              array (
                'description' => '认证器对象',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthenticatorUuid' => 
                  array (
                    'description' => '认证器UUID',
                    'type' => 'string',
                    'example' => '你好！3132',
                  ),
                  'CredentialId' => 
                  array (
                    'title' => '创建认证器的Options',
                    'description' => '创建认证器的Options',
                    'type' => 'string',
                    'example' => '1313',
                  ),
                  'Type' => 
                  array (
                    'title' => '认证器类型',
                    'description' => '认证器类型',
                    'type' => 'string',
                    'example' => 'TOTP',
                  ),
                  'AuthenticatorName' => 
                  array (
                    'title' => '认证器名字',
                    'description' => '认证器名字',
                    'type' => 'string',
                    'example' => 'ceshi',
                  ),
                  'RegisterTime' => 
                  array (
                    'title' => '注册时间',
                    'description' => '注册时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1231313123',
                  ),
                  'LastVerifyTime' => 
                  array (
                    'title' => '最后验证时间',
                    'description' => '最后验证时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123123',
                  ),
                  'RegisterSourceIp' => 
                  array (
                    'title' => '用户注册IP',
                    'description' => '用户注册IP',
                    'type' => 'string',
                    'example' => '127.0.0.1',
                  ),
                  'LastVerifySourceIp' => 
                  array (
                    'title' => '用户最后签名IP',
                    'description' => '用户最后签名IP',
                    'type' => 'string',
                    'example' => '127.0.0.1',
                  ),
                  'LastVerifyUserAgent' => 
                  array (
                    'title' => '用户最后签名userAgent',
                    'description' => '用户最后签名userAgent',
                    'type' => 'string',
                    'example' => '123123',
                  ),
                  'CustomAuthenticator' => 
                  array (
                    'description' => '认证器',
                    'type' => 'string',
                    'example' => '123123',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"123131312313\\",\\n  \\"Authenticator\\": {\\n    \\"AuthenticatorUuid\\": \\"你好！3132\\",\\n    \\"CredentialId\\": \\"1313\\",\\n    \\"Type\\": \\"TOTP\\",\\n    \\"AuthenticatorName\\": \\"ceshi\\",\\n    \\"RegisterTime\\": 1231313123,\\n    \\"LastVerifyTime\\": 123123,\\n    \\"RegisterSourceIp\\": \\"127.0.0.1\\",\\n    \\"LastVerifySourceIp\\": \\"127.0.0.1\\",\\n    \\"LastVerifyUserAgent\\": \\"123123\\",\\n    \\"CustomAuthenticator\\": \\"123123\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取认证器详情',
    ),
    'ListAuthenticators' => 
    array (
      'summary' => '获取所有的认证器。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器类型',
            'description' => '认证器类型',
            'type' => 'string',
            'required' => false,
            'example' => 'TOTP',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前开始读取的位置，不设置时默认为1',
            'description' => '当前开始读取的位置，不设置时默认为1',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '本次读取的最大数据记录数量，不指定时使用默认值',
            'description' => '本次读取的最大数据记录数量，不指定时使用默认值',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '5',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '531FA210-6F3D-5368-9AE2-AD7B9D1D5CAA',
              ),
              'PageNumber' => 
              array (
                'title' => '读取到的位置',
                'description' => '读取到的位置',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'TotalCount' => 
              array (
                'title' => '查询结果数据总数',
                'description' => '查询结果数据总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '13',
              ),
              'PageSize' => 
              array (
                'title' => '每页记录数量',
                'description' => '每页记录数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
              'Authenticator' => 
              array (
                'description' => '认证器',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '认证器对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ApplicationExternalId' => 
                    array (
                      'title' => '应用ID',
                      'description' => '应用ID',
                      'type' => 'string',
                      'example' => 'webauth_demo',
                    ),
                    'AuthenticatorUuid' => 
                    array (
                      'title' => '认证器uuid',
                      'description' => '认证器uuid',
                      'type' => 'string',
                      'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
                    ),
                    'CredentialId' => 
                    array (
                      'title' => '身份认证ID',
                      'description' => '身份认证ID',
                      'type' => 'string',
                      'example' => 'scimcred-00skzv5noh34r5aoci76',
                    ),
                    'Type' => 
                    array (
                      'title' => '认证器类型',
                      'description' => '认证器类型',
                      'type' => 'string',
                      'example' => 'TOTP',
                    ),
                    'AuthenticatorName' => 
                    array (
                      'title' => '身份认证对应的认证器名称',
                      'description' => '身份认证对应的认证器名称',
                      'type' => 'string',
                      'example' => 'TOTP-DefaultName',
                    ),
                    'RegisterTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1342800000000',
                    ),
                    'LastVerifyTime' => 
                    array (
                      'title' => '最后验证时间，如果新注册则为注册时间',
                      'description' => '最后验证时间，如果新注册则为注册时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123123',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"531FA210-6F3D-5368-9AE2-AD7B9D1D5CAA\\",\\n  \\"PageNumber\\": 1,\\n  \\"TotalCount\\": 13,\\n  \\"PageSize\\": 5,\\n  \\"Authenticator\\": [\\n    {\\n      \\"ApplicationExternalId\\": \\"webauth_demo\\",\\n      \\"AuthenticatorUuid\\": \\"0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m\\",\\n      \\"CredentialId\\": \\"scimcred-00skzv5noh34r5aoci76\\",\\n      \\"Type\\": \\"TOTP\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"RegisterTime\\": 1342800000000,\\n      \\"LastVerifyTime\\": 123123\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取认证器列表',
    ),
    'ListUsers' => 
    array (
      'summary' => '查询指定应用下的用户信息。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => false,
            'example' => 'user-11122223333',
            'maxLength' => 64,
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
                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
              ),
              'TotalCount' => 
              array (
                'title' => '查询结果数据总数',
                'description' => '查询结果数据总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '13',
              ),
              'Users' => 
              array (
                'description' => '用户列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserId' => 
                    array (
                      'description' => '用户ID',
                      'type' => 'string',
                      'example' => '2323232676856745',
                    ),
                    'UserName' => 
                    array (
                      'description' => '用户名',
                      'type' => 'string',
                      'example' => 'lili',
                    ),
                    'UserDisplayName' => 
                    array (
                      'description' => '用户昵称',
                      'type' => 'string',
                      'example' => '李丽',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"TotalCount\\": 13,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"2323232676856745\\",\\n      \\"UserName\\": \\"lili\\",\\n      \\"UserDisplayName\\": \\"李丽\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '认证器用户列表',
    ),
    'ListAuthenticationLogs' => 
    array (
      'summary' => '查询认证日志。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => 'webauth_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户标志',
            'type' => 'string',
            'required' => false,
            'example' => '10e8c224',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证器唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证器类型',
            'type' => 'string',
            'required' => false,
            'example' => 'TOTP',
          ),
        ),
        4 => 
        array (
          'name' => 'CredentialId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证使用的凭据Id',
            'type' => 'string',
            'required' => false,
            'example' => 'scimcred-003o4e2wqxlaxjmjyz96',
          ),
        ),
        5 => 
        array (
          'name' => 'LogTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '日志的标签',
            'type' => 'string',
            'required' => false,
            'example' => 'login',
          ),
        ),
        6 => 
        array (
          'name' => 'FromTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证时间起始值',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1640144294',
          ),
        ),
        7 => 
        array (
          'name' => 'ToTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证时间结束值',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1640144694',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页展示时，每页显示的条数',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F620E712-F325-520D-BE1A-E2421B062F57',
              ),
              'AuthenticationLogContent' => 
              array (
                'description' => '日志内容',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志内容',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TenantId' => 
                    array (
                      'description' => '租户ID',
                      'type' => 'string',
                      'example' => '8cefc5fe5d10dffffdcff011a6b34a863hHmgm0SIrh',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号id',
                      'type' => 'string',
                      'example' => '1588301417442737',
                    ),
                    'ApplicationUuid' => 
                    array (
                      'description' => '应用uuid',
                      'type' => 'string',
                      'example' => '0b6ba5da7bd4cef233ae7b48b5e5dcc1yx9aipQp0hD',
                    ),
                    'ApplicationExternalId' => 
                    array (
                      'description' => '应用外部Id',
                      'type' => 'string',
                      'example' => 'sms_auth',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户标志',
                      'type' => 'string',
                      'example' => 'xhtseqml',
                    ),
                    'AuthenticatorUuid' => 
                    array (
                      'description' => '认证器uuid',
                      'type' => 'string',
                      'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
                    ),
                    'AuthenticatorName' => 
                    array (
                      'description' => '认证器名字',
                      'type' => 'string',
                      'example' => 'TOTP-DefaultName',
                    ),
                    'CredentialId' => 
                    array (
                      'description' => '凭据标识',
                      'type' => 'string',
                      'example' => 'scimcred-00w9gcvpwueg7geg1a87',
                    ),
                    'AuthenticatorType' => 
                    array (
                      'description' => '认证器类型',
                      'type' => 'string',
                      'example' => 'TOTP',
                    ),
                    'AuthenticationAction' => 
                    array (
                      'description' => '认证器操作',
                      'type' => 'string',
                      'example' => 'send',
                    ),
                    'ChallengeBase64' => 
                    array (
                      'description' => '防重放挑战码',
                      'type' => 'string',
                      'example' => '3519',
                    ),
                    'AuthenticationTime' => 
                    array (
                      'description' => '认证时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1647233491138',
                    ),
                    'UserAgent' => 
                    array (
                      'description' => '用户代理',
                      'type' => 'string',
                      'example' => 'aoxis',
                    ),
                    'UserSourceIp' => 
                    array (
                      'description' => '用户源IP',
                      'type' => 'string',
                      'example' => '10.23.11.56',
                    ),
                    'RawAuthenticationContext' => 
                    array (
                      'description' => '认证上下文参数',
                      'type' => 'string',
                      'example' => '{"name":"lili"}',
                    ),
                    'VerifyResult' => 
                    array (
                      'description' => '认证结果',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码',
                      'type' => 'string',
                      'example' => '200',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误信息',
                      'type' => 'string',
                      'example' => 'Request was denied due to business check permission',
                    ),
                    'LogTag' => 
                    array (
                      'description' => '日志标签',
                      'type' => 'string',
                      'example' => 'login',
                    ),
                    'LogParams' => 
                    array (
                      'description' => '日志参数',
                      'type' => 'string',
                      'example' => 'khj',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '返回列表长度',
                'description' => '返回列表长度',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F620E712-F325-520D-BE1A-E2421B062F57\\",\\n  \\"AuthenticationLogContent\\": [\\n    {\\n      \\"TenantId\\": \\"8cefc5fe5d10dffffdcff011a6b34a863hHmgm0SIrh\\",\\n      \\"AliUid\\": \\"1588301417442737\\",\\n      \\"ApplicationUuid\\": \\"0b6ba5da7bd4cef233ae7b48b5e5dcc1yx9aipQp0hD\\",\\n      \\"ApplicationExternalId\\": \\"sms_auth\\",\\n      \\"UserId\\": \\"xhtseqml\\",\\n      \\"AuthenticatorUuid\\": \\"c810731ad3af06e45171395abf19cf9cb00E7i97PhE\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"CredentialId\\": \\"scimcred-00w9gcvpwueg7geg1a87\\",\\n      \\"AuthenticatorType\\": \\"TOTP\\",\\n      \\"AuthenticationAction\\": \\"send\\",\\n      \\"ChallengeBase64\\": \\"3519\\",\\n      \\"AuthenticationTime\\": 1647233491138,\\n      \\"UserAgent\\": \\"aoxis\\",\\n      \\"UserSourceIp\\": \\"10.23.11.56\\",\\n      \\"RawAuthenticationContext\\": \\"{\\\\\\"name\\\\\\":\\\\\\"lili\\\\\\"}\\",\\n      \\"VerifyResult\\": true,\\n      \\"ErrorCode\\": \\"200\\",\\n      \\"ErrorMessage\\": \\"Request was denied due to business check permission\\",\\n      \\"LogTag\\": \\"login\\",\\n      \\"LogParams\\": \\"khj\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '认证器日志',
    ),
    'ListAuthenticatorOpsLogs' => 
    array (
      'summary' => '查询认证器操作日志。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => 'webauth_demo',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户标志',
            'type' => 'string',
            'required' => false,
            'example' => 'wsnidfr',
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证器唯一标识',
            'type' => 'string',
            'required' => false,
            'example' => 'c810731ad3af06e45171395abf19cf9cb00E7i97PhE',
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证器类型',
            'type' => 'string',
            'required' => false,
            'example' => 'webauthn',
          ),
        ),
        4 => 
        array (
          'name' => 'FromTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1647232996712',
          ),
        ),
        5 => 
        array (
          'name' => 'ToTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1647232996812',
          ),
        ),
        6 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页记录条数',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
            'default' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '39FF2C8B-73E7-5BA5-AC25-20EEAC37BAB0',
              ),
              'AuthenticationLogContent' => 
              array (
                'description' => '日志内容集合',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '日志内容',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TenantId' => 
                    array (
                      'description' => '租户Id',
                      'type' => 'string',
                      'example' => 'ed0222867189ad2bacfa746843d4b9692mlWC9sU3zl',
                    ),
                    'AliUid' => 
                    array (
                      'description' => '阿里云账号id',
                      'type' => 'string',
                      'example' => '1218758215717204',
                    ),
                    'ApplicationUuid' => 
                    array (
                      'description' => '应用UUid',
                      'type' => 'string',
                      'example' => '2bba0564edce2ff90c544dc623d1c1f5iPpCGAqTioA',
                    ),
                    'ApplicationExternalId' => 
                    array (
                      'description' => '应用外部Id',
                      'type' => 'string',
                      'example' => 'webauth_demo',
                    ),
                    'UserId' => 
                    array (
                      'description' => '用户标志',
                      'type' => 'string',
                      'example' => '3b323',
                    ),
                    'AuthenticatorUuid' => 
                    array (
                      'description' => '认证器uuid',
                      'type' => 'string',
                      'example' => '0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m',
                    ),
                    'AuthenticatorName' => 
                    array (
                      'description' => '认证器名字',
                      'type' => 'string',
                      'example' => 'TOTP-DefaultName',
                    ),
                    'CredentialId' => 
                    array (
                      'description' => '身份认证ID',
                      'type' => 'string',
                      'example' => 'scimcred-00t3zfhiy2ylzvm2i287',
                    ),
                    'AuthenticatorType' => 
                    array (
                      'description' => '认证器类型',
                      'type' => 'string',
                      'example' => 'TOTP',
                    ),
                    'OperationAction' => 
                    array (
                      'description' => '操作动作',
                      'type' => 'string',
                      'example' => 'ListTagResources',
                    ),
                    'ChallengeBase64' => 
                    array (
                      'description' => '防重放挑战码',
                      'type' => 'string',
                      'example' => 'exfa',
                    ),
                    'OperationTime' => 
                    array (
                      'description' => '操作时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1647309893086',
                    ),
                    'UserAgent' => 
                    array (
                      'description' => '用户代理',
                      'type' => 'string',
                      'example' => '10.13.1.56',
                    ),
                    'UserSourceIp' => 
                    array (
                      'description' => '用户源IP',
                      'type' => 'string',
                      'example' => '10.13.1.56',
                    ),
                    'RawContext' => 
                    array (
                      'description' => '原始日志文本',
                      'type' => 'string',
                      'example' => '登录成功',
                    ),
                    'OperationResult' => 
                    array (
                      'description' => '操作是否成功',
                      'type' => 'boolean',
                      'example' => 'True',
                    ),
                    'ErrorCode' => 
                    array (
                      'description' => '错误码',
                      'type' => 'string',
                      'example' => 'Failed',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '错误信息',
                      'type' => 'string',
                      'example' => 'user not exist, alipayId=2088022534411015',
                    ),
                    'LogParams' => 
                    array (
                      'description' => '日志参数',
                      'type' => 'string',
                      'example' => '1',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'title' => '返回列表长度',
                'description' => '返回列表长度',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '3',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '页面记录数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39FF2C8B-73E7-5BA5-AC25-20EEAC37BAB0\\",\\n  \\"AuthenticationLogContent\\": [\\n    {\\n      \\"TenantId\\": \\"ed0222867189ad2bacfa746843d4b9692mlWC9sU3zl\\",\\n      \\"AliUid\\": \\"1218758215717204\\",\\n      \\"ApplicationUuid\\": \\"2bba0564edce2ff90c544dc623d1c1f5iPpCGAqTioA\\",\\n      \\"ApplicationExternalId\\": \\"webauth_demo\\",\\n      \\"UserId\\": \\"3b323\\",\\n      \\"AuthenticatorUuid\\": \\"0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m\\",\\n      \\"AuthenticatorName\\": \\"TOTP-DefaultName\\",\\n      \\"CredentialId\\": \\"scimcred-00t3zfhiy2ylzvm2i287\\",\\n      \\"AuthenticatorType\\": \\"TOTP\\",\\n      \\"OperationAction\\": \\"ListTagResources\\",\\n      \\"ChallengeBase64\\": \\"exfa\\",\\n      \\"OperationTime\\": 1647309893086,\\n      \\"UserAgent\\": \\"10.13.1.56\\",\\n      \\"UserSourceIp\\": \\"10.13.1.56\\",\\n      \\"RawContext\\": \\"登录成功\\",\\n      \\"OperationResult\\": true,\\n      \\"ErrorCode\\": \\"Failed\\",\\n      \\"ErrorMessage\\": \\"user not exist, alipayId=2088022534411015\\",\\n      \\"LogParams\\": \\"1\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 3,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10\\n}","type":"json"}]',
      'title' => '认证器操作日志',
    ),
    'RegisterAuthenticator' => 
    array (
      'summary' => '注册认证器。',
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
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器类型',
            'description' => '认证器类型',
            'type' => 'string',
            'required' => true,
            'example' => 'webauthn',
            'maxLength' => 32,
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticatorName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器名字',
            'description' => '认证器名字',
            'type' => 'string',
            'required' => false,
            'example' => 'ZhangSan\'s authenticator',
            'maxLength' => 64,
          ),
        ),
        4 => 
        array (
          'name' => 'RegistrationContext',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '注册上下文',
            'description' => '注册上下文',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
            'maxLength' => 3096,
          ),
        ),
        5 => 
        array (
          'name' => 'RequireChallengeBase64',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话绑定的challenge base64标识',
            'description' => '会话绑定的challenge base64标识',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAdda',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文',
            'description' => '客户端SDK生成认证上下文',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文签名信息',
            'description' => '客户端SDK生成认证上下文签名信息',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        8 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端配置项，决定认证要求属性',
            'description' => '服务端配置项，决定认证要求属性',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        9 => 
        array (
          'name' => 'UserSourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户端来源IP地址，用于审计',
            'description' => '用户端来源IP地址，用于审计',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        10 => 
        array (
          'name' => 'LogParams',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义记录审计日志信息',
            'description' => '用户自定义记录审计日志信息',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
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
                'example' => '23123',
              ),
              'AuthenticatorUuid' => 
              array (
                'title' => '认证器UUID',
                'description' => '认证器UUID',
                'type' => 'string',
                'example' => '123123123',
              ),
              'EtasResponseSting' => 
              array (
                'title' => '仅IFAA认证器注册返回',
                'description' => '仅IFAA认证器注册返回',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"23123\\",\\n  \\"AuthenticatorUuid\\": \\"123123123\\",\\n  \\"EtasResponseSting\\": \\"\\"\\n}","type":"json"}]',
      'title' => '注册认证器',
    ),
    'VerifyUserAuthentication' => 
    array (
      'summary' => '认证器-验证。',
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
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'AuthenticatorType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器类型',
            'description' => '认证器类型',
            'type' => 'string',
            'required' => true,
            'example' => 'webauthn',
            'maxLength' => 32,
          ),
        ),
        2 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        3 => 
        array (
          'name' => 'AuthenticationContext',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证上下文，由AuthenticatorType决定格式',
            'description' => '认证上下文，由AuthenticatorType决定格式',
            'type' => 'string',
            'required' => true,
            'example' => '{}',
          ),
        ),
        4 => 
        array (
          'name' => 'RequireChallengeBase64',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '会话绑定的challenge base64标识',
            'description' => '会话绑定的challenge base64标识',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAdda',
          ),
        ),
        5 => 
        array (
          'name' => 'RequireBindHashBase64',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证绑定的操作hash base64标识',
            'description' => '认证绑定的操作hash base64标识',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAdda',
          ),
        ),
        6 => 
        array (
          'name' => 'ClientExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文',
            'description' => '客户端SDK生成认证上下文',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        7 => 
        array (
          'name' => 'ClientExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '客户端SDK生成认证上下文签名信息',
            'description' => '客户端SDK生成认证上下文签名信息',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        8 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '服务端配置项，决定认证要求属性',
            'description' => '服务端配置项，决定认证要求属性',
            'type' => 'string',
            'required' => false,
            'example' => '由具体认证方式决定',
          ),
        ),
        9 => 
        array (
          'name' => 'UserSourceIp',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户端来源IP地址，用于审计',
            'description' => '用户端来源IP地址，用于审计',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        10 => 
        array (
          'name' => 'LogTag',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义记录审计日志标签',
            'description' => '用户自定义记录审计日志标签',
            'type' => 'string',
            'required' => false,
            'example' => 'login',
          ),
        ),
        11 => 
        array (
          'name' => 'LogParams',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户自定义记录审计日志信息',
            'description' => '用户自定义记录审计日志信息',
            'type' => 'string',
            'required' => false,
            'example' => '123123',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回对象',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '83ED3BC7-B36E-53B5-83D4-152CF2088DB9',
              ),
              'VerifyResult' => 
              array (
                'title' => '认证结果，true or false',
                'description' => '认证结果，true or false',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'AuthenticateResultInfo' => 
              array (
                'title' => '认证结果',
                'description' => '认证结果',
                'type' => 'object',
                'properties' => 
                array (
                  'UserId' => 
                  array (
                    'title' => '认证通过的用户Id',
                    'description' => '认证通过的用户Id',
                    'type' => 'string',
                    'example' => '3b32',
                  ),
                  'CredentialId' => 
                  array (
                    'title' => '认证使用的凭据Id',
                    'description' => '认证使用的凭据Id',
                    'type' => 'string',
                    'example' => 'scimcred-000vfaknfwlp8kesl520',
                  ),
                  'BindHashBase64' => 
                  array (
                    'title' => '这次认证绑定的操作hash',
                    'description' => '这次认证绑定的操作hash',
                    'type' => 'string',
                    'example' => '10e8c224555bba8bfb780badebc4a08cc1Z6LmC6Hp9',
                  ),
                ),
              ),
              'EtasSDKString' => 
              array (
                'description' => '生成的sdksdk的md5值。',
                'type' => 'string',
                'example' => 'zmtdjb',
              ),
              'IdToken' => 
              array (
                'description' => '身份令牌',
                'type' => 'string',
                'example' => 'qacdfhigvbcvb',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"83ED3BC7-B36E-53B5-83D4-152CF2088DB9\\",\\n  \\"VerifyResult\\": true,\\n  \\"AuthenticateResultInfo\\": {\\n    \\"UserId\\": \\"3b32\\",\\n    \\"CredentialId\\": \\"scimcred-000vfaknfwlp8kesl520\\",\\n    \\"BindHashBase64\\": \\"10e8c224555bba8bfb780badebc4a08cc1Z6LmC6Hp9\\"\\n  },\\n  \\"EtasSDKString\\": \\"zmtdjb\\",\\n  \\"IdToken\\": \\"qacdfhigvbcvb\\"\\n}","type":"json"}]',
      'title' => '认证器-验证',
    ),
    'DeregisterAuthenticator' => 
    array (
      'summary' => '注销认证器。',
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
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '应用外部Id',
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => true,
            'example' => '11122223333',
            'maxLength' => 64,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'example' => 'user-11122223333',
            'maxLength' => 64,
          ),
        ),
        2 => 
        array (
          'name' => 'AuthenticatorUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '认证器uuid',
            'description' => '认证器uuid',
            'type' => 'string',
            'required' => true,
            'example' => 'a00712a4e56196755059356c290793031xHdUrCPXUS',
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
                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\"\\n}","type":"json"}]',
      'title' => '注销认证器',
    ),
    'ServiceInvoke' => 
    array (
      'summary' => '根据 ServiceCode 和 Action 决定是使用哪种认证方式认证。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MobileExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '移动端SDK生成',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
          ),
        ),
        1 => 
        array (
          'name' => 'MobileExtendParamsJsonSign',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '移动端SDK生成',
            'type' => 'string',
            'required' => false,
            'example' => 'ba6f5596f00102cb1a7d971f8390b7ccb28e6bc4e8694d051f9299ccc69e1186',
          ),
        ),
        2 => 
        array (
          'name' => 'ServerExtendParamsJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务端配置参数',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '认证方式',
            'type' => 'string',
            'required' => true,
            'example' => 'IFAA',
          ),
        ),
        4 => 
        array (
          'name' => 'DoraemonAction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作类型',
            'type' => 'string',
            'required' => true,
            'example' => 'SimpleAuthInit',
          ),
        ),
        5 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用外部ID',
            'type' => 'string',
            'required' => true,
            'example' => 'A0000003',
          ),
        ),
        6 => 
        array (
          'name' => 'TestModel',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否测试, 在生产环境下不生效',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'XClientIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端IP',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
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
                'description' => '请求的唯一ID',
                'type' => 'string',
                'example' => 'F8F63CAB-A96C-5017-AFB0-324593223817',
              ),
              'Data' => 
              array (
                'description' => '根据不同的认证方式  返回不同的结果',
                'type' => 'string',
                'example' => '"{\\"ifaa\\"{\\"code\\":0,\\"message\\":\\"eyJo....BWUFBQUFBIn19\\"},\\"version\\":\\"1.0.0\\",\\"transaction\\":{\\"id\\":\\"sIFAA-ios\\",\\"type\\":\\"sIFAA-ios\\",\\"payload\\":\\"\\"},\\"action\\":\\"request/auth\\"}" }',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'Operation.Failure.ApiInvoke.ServiceInArrears',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'Operation.Success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'IdToken' => 
              array (
                'description' => '身份令牌',
                'type' => 'string',
                'example' => 'qacdfhigvbcvb',
              ),
              'EventId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8F63CAB-A96C-5017-AFB0-324593223817\\",\\n  \\"Data\\": \\"\\\\\\"{\\\\\\\\\\\\\\"ifaa\\\\\\\\\\\\\\"{\\\\\\\\\\\\\\"code\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"message\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"eyJo....BWUFBQUFBIn19\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"version\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1.0.0\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"transaction\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sIFAA-ios\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sIFAA-ios\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"payload\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"action\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"request/auth\\\\\\\\\\\\\\"}\\\\\\" }\\",\\n  \\"Message\\": \\"Operation.Failure.ApiInvoke.ServiceInArrears\\",\\n  \\"Code\\": \\"Operation.Success\\",\\n  \\"Success\\": true,\\n  \\"IdToken\\": \\"qacdfhigvbcvb\\",\\n  \\"EventId\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<ServiceInvokeResponse>\\n    <Success>true</Success>\\n    <Code>Operation.Success</Code>\\n    <Message>Operation.Success</Message>\\n    <RequestId>337848D2-FF8A-4EDD-BD4D-1B9BC80E58B6</RequestId>\\n    <Data>{\\"ifaa\\"{\\"code\\":0,\\"message\\":\\"eyJo....BWUFBQUFBIn19\\"},\\"version\\":\\"1.0.0\\",\\"transaction\\":{\\"id\\":\\"sIFAA-ios\\",\\"type\\":\\"sIFAA-ios\\",\\"payload\\":\\"\\"},\\"action\\":\\"request/auth\\"}</Data>\\n</ServiceInvokeResponse>","errorExample":""}]',
      'title' => '认证服务',
      'description' => '请确保在使用该接口前，已充分了解安全认证产品的[收费方式](https://help.aliyun.com/document_detail/262147.html?spm=5176.b80817263.help.dexternal.30c1549awhmdq6)和[价格](https://help.aliyun.com/document_detail/262147.html?spm=5176.b80817263.help.dexternal.30c1549awhmdq6)。',
    ),
    'ListPwnedPasswords' => 
    array (
      'summary' => '检测密码泄露。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PrefixHexPasswordSha1Hash',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '密码SHA1Hash值前六位',
            'type' => 'string',
            'required' => true,
            'example' => '000000',
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
                'example' => 'D0F570B0-89CE-07F2-B41E-F97E089E13C6',
              ),
              'PageNumber' => 
              array (
                'description' => '当前页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'TotalCount' => 
              array (
                'description' => '总数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '80',
              ),
              'PageSize' => 
              array (
                'description' => '每页数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'PwnedPasswordInfos' => 
              array (
                'description' => '泄露密码集合',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '泄露密码对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HexPasswordSha1Hash' => 
                    array (
                      'description' => '密码Hash',
                      'type' => 'string',
                      'example' => '0000',
                    ),
                    'PwnedCount' => 
                    array (
                      'description' => '泄露次数',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '84',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D0F570B0-89CE-07F2-B41E-F97E089E13C6\\",\\n  \\"PageNumber\\": 2,\\n  \\"TotalCount\\": 80,\\n  \\"PageSize\\": 10,\\n  \\"PwnedPasswordInfos\\": [\\n    {\\n      \\"HexPasswordSha1Hash\\": \\"0000\\",\\n      \\"PwnedCount\\": 84\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPwnedPasswordsResponse>\\n    <RequestId>D0F570B0-89CE-07F2-B41E-F97E089E13C6</RequestId>\\n    <PageNumber>2</PageNumber>\\n    <TotalCount>80</TotalCount>\\n    <PageSize>10</PageSize>\\n    <PwnedPasswordInfos>\\n        <HexPasswordSha1Hash>0000</HexPasswordSha1Hash>\\n        <PwnedCount>84</PwnedCount>\\n    </PwnedPasswordInfos>\\n</ListPwnedPasswordsResponse>","errorExample":""}]',
      'title' => '密码泄露检测',
    ),
    'VerifyIdToken' => 
    array (
      'summary' => '用于验证 IdToken。号码认证或者 IFAA 认证通过后，获得的 IdToken 需要通过此接口验证。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'JwtIdToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'jwtIdToken',
            'type' => 'string',
            'required' => false,
            'example' => 'eyJraWQiOiIzNj',
          ),
        ),
        1 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用外部Id',
            'type' => 'string',
            'required' => false,
            'example' => 'webauth_demo',
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
            'description' => '响应',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'F620E712-F325-520D-BE1A-E2421B062F57',
              ),
              'UserId' => 
              array (
                'description' => '用户ID',
                'type' => 'string',
                'example' => '123456',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F620E712-F325-520D-BE1A-E2421B062F57\\",\\n  \\"UserId\\": \\"123456\\"\\n}","type":"json"}]',
      'title' => '验证IdToken',
    ),
    'ListCostUnitOrders' => 
    array (
      'summary' => '分页查询订单及其 CU 用量信息，按创建时间倒序排列。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'BeginDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始创建时间',
            'description' => '开始创建时间',
            'type' => 'string',
            'required' => false,
            'example' => '2021-11-16',
          ),
        ),
        1 => 
        array (
          'name' => 'FinalDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束创建时间',
            'description' => '结束创建时间',
            'type' => 'string',
            'required' => false,
            'example' => '2021-12-04 00',
          ),
        ),
        2 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '第几页',
            'description' => '第几页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小',
            'description' => '每页大小',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '0',
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
                'example' => 'A82621A5-715C-5486-80E9-9262EE43BA55',
              ),
              'TotalPages' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'TotalElements' => 
              array (
                'description' => '总条目数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12',
              ),
              'PageSize' => 
              array (
                'description' => '页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Items' => 
              array (
                'description' => '返回记录列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '记录详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AliOrderCode' => 
                    array (
                      'title' => '阿里云订单编号',
                      'description' => '阿里云订单编号',
                      'type' => 'string',
                      'example' => '215222637610732',
                    ),
                    'AliOrderInstanceId' => 
                    array (
                      'title' => '阿里云订单实例名称',
                      'description' => '阿里云订单实例名称',
                      'type' => 'string',
                      'example' => 'idaas_auth_public_cn-pl32pciy101',
                    ),
                    'TotalCostUnit' => 
                    array (
                      'title' => '总计 CU 值，单位厘，实际购买 CU 乘以 1000',
                      'description' => '总计 CU 值，单位厘，实际购买 CU 乘以 1000',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100000',
                    ),
                    'UsedCostUnit' => 
                    array (
                      'title' => '已用 CU 值，单位厘，实际使用 CU 乘以 1000',
                      'description' => '已用 CU 值，单位厘，实际使用 CU 乘以 1000',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '100',
                    ),
                    'OrderStatus' => 
                    array (
                      'title' => '订单状态。VALID：有效、REFUND：退款、EXPIRED：过期',
                      'description' => '订单状态。VALID：有效、REFUND：退款、EXPIRED：过期',
                      'type' => 'string',
                      'example' => 'VALID',
                    ),
                    'CreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1646028448000',
                    ),
                    'ExpiredTime' => 
                    array (
                      'title' => '过期时间',
                      'description' => '过期时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1923321600000',
                    ),
                    'RefundTime' => 
                    array (
                      'title' => '退款时间，毫秒时间戳，退款时才有值',
                      'description' => '退款时间，毫秒时间戳，退款时才有值',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1923321600000',
                    ),
                    'Exhausted' => 
                    array (
                      'type' => 'boolean',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A82621A5-715C-5486-80E9-9262EE43BA55\\",\\n  \\"TotalPages\\": 2,\\n  \\"TotalElements\\": 12,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"AliOrderCode\\": \\"215222637610732\\",\\n      \\"AliOrderInstanceId\\": \\"idaas_auth_public_cn-pl32pciy101\\",\\n      \\"TotalCostUnit\\": 100000,\\n      \\"UsedCostUnit\\": 100,\\n      \\"OrderStatus\\": \\"VALID\\",\\n      \\"CreateTime\\": 1646028448000,\\n      \\"ExpiredTime\\": 1923321600000,\\n      \\"RefundTime\\": 1923321600000,\\n      \\"Exhausted\\": true\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取订单及CU用量列表',
    ),
    'ListOrderConsumeStatisticRecords' => 
    array (
      'summary' => '分页查询订单每日用量统计记录，按统计日期正序排列。统计日期最大区间范围为 31 天，如果超过从最大值向前推 31 天。T+1 出统计记录，当天12点前统计出昨天的用量。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
          'name' => 'AliOrderCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '阿里订单编号',
            'description' => '阿里云订单编号',
            'type' => 'string',
            'required' => false,
            'example' => '211283925690732',
          ),
        ),
        1 => 
        array (
          'name' => 'StatisticTimeMin',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计时间最小值',
            'description' => '统计日期最小值',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-31',
          ),
        ),
        2 => 
        array (
          'name' => 'StatisticTimeMax',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '统计时间最大值',
            'description' => '统计日期最大值，默认为昨天',
            'type' => 'string',
            'required' => false,
            'example' => '2022-05-31',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'description' => '页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页记录数',
            'description' => '每页记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'ApplicationExternalId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'ServiceCode',
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
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求 ID',
                'type' => 'string',
                'example' => '1655384783875',
              ),
              'TotalPages' => 
              array (
                'title' => '总页数',
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'TotalElements' => 
              array (
                'title' => '总记录数',
                'description' => '总记录数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'PageSize' => 
              array (
                'title' => '每页记录数',
                'description' => '每页记录数',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Items' => 
              array (
                'title' => '数据项列表',
                'description' => '数据项列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '数据项详情',
                  'description' => '数据项详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AliOrderCode' => 
                    array (
                      'title' => '阿里云订单编号',
                      'description' => '阿里云订单编号',
                      'type' => 'string',
                      'example' => '23567876823',
                    ),
                    'StatisticTime' => 
                    array (
                      'title' => '统计日期，时间戳，精确到秒',
                      'description' => '统计日期，时间戳，精确到秒',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1655388050',
                    ),
                    'ApplicationExternalId' => 
                    array (
                      'title' => '应用外部标志',
                      'description' => '应用外部标志',
                      'type' => 'string',
                      'example' => 'sms_auth',
                    ),
                    'ServiceCode' => 
                    array (
                      'title' => '服务码',
                      'description' => '服务码',
                      'type' => 'string',
                      'example' => 'SMS',
                    ),
                    'UnitPrice' => 
                    array (
                      'title' => '单价',
                      'description' => '单价',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                    'ChargedCount' => 
                    array (
                      'title' => '计费数目',
                      'description' => '计费数目',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'TotalPrice' => 
                    array (
                      'title' => '总价',
                      'description' => '总价',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1655384783875\\",\\n  \\"TotalPages\\": 10,\\n  \\"TotalElements\\": 100,\\n  \\"PageSize\\": 10,\\n  \\"Items\\": [\\n    {\\n      \\"AliOrderCode\\": \\"23567876823\\",\\n      \\"StatisticTime\\": 1655388050,\\n      \\"ApplicationExternalId\\": \\"sms_auth\\",\\n      \\"ServiceCode\\": \\"SMS\\",\\n      \\"UnitPrice\\": 10,\\n      \\"ChargedCount\\": 1,\\n      \\"TotalPrice\\": 10\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询订单每日用量统计记录',
    ),
    'QuerySmsReports' => 
    array (
      'summary' => '短信回执查询。',
      'methods' => 
      array (
        0 => 'get',
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
          'name' => 'AppId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID',
            'type' => 'string',
            'required' => false,
            'example' => 'doraemon_xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件ID',
            'type' => 'string',
            'required' => false,
            'example' => 'eventId_xxxxxx',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '4581B16-xxxxx',
              ),
              'TotalElements' => 
              array (
                'description' => '回执数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
              'SmsReports' => 
              array (
                'description' => '查询报表数据的返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询报表数据的返回结果',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Tid' => 
                    array (
                      'description' => '任务编号',
                      'type' => 'string',
                      'example' => '3514',
                    ),
                    'Mobile' => 
                    array (
                      'description' => '手机号',
                      'type' => 'string',
                      'example' => '156xxxxxxxx',
                    ),
                    'Code' => 
                    array (
                      'description' => '
错误码
',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'Stat' => 
                    array (
                      'description' => '短信状态',
                      'type' => 'string',
                      'example' => 'DELIVRD',
                    ),
                    'Sn' => 
                    array (
                      'description' => '扩展号',
                      'type' => 'string',
                      'example' => '"d36xxxxx3573772f159f616ebJ8KGPBg7Hr::appId::123456::Bird"',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '租户ID',
                      'type' => 'string',
                      'example' => 'd36a370f33f037233573772f15xxxxxx',
                    ),
                    'AppId' => 
                    array (
                      'description' => '应用ID',
                      'type' => 'string',
                      'example' => 'appid',
                    ),
                    'EventId' => 
                    array (
                      'description' => '事件ID',
                      'type' => 'string',
                      'example' => 'event_xxxx',
                    ),
                    'Time' => 
                    array (
                      'description' => '回执时间',
                      'type' => 'string',
                      'example' => '20220823171446',
                    ),
                    'ChargedCount' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4581B16-xxxxx\\",\\n  \\"TotalElements\\": 15,\\n  \\"SmsReports\\": [\\n    {\\n      \\"Tid\\": \\"3514\\",\\n      \\"Mobile\\": \\"156xxxxxxxx\\",\\n      \\"Code\\": \\"0\\",\\n      \\"Stat\\": \\"DELIVRD\\",\\n      \\"Sn\\": \\"\\\\\\"d36xxxxx3573772f159f616ebJ8KGPBg7Hr::appId::123456::Bird\\\\\\"\\",\\n      \\"TenantId\\": \\"d36a370f33f037233573772f15xxxxxx\\",\\n      \\"AppId\\": \\"appid\\",\\n      \\"EventId\\": \\"event_xxxx\\",\\n      \\"Time\\": \\"20220823171446\\",\\n      \\"ChargedCount\\": 0\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询短信回执',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-northeast-2-pop',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'cn-beijing-finance-pop',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'cn-beijing-gov-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'cn-beijing-nu16-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'cn-edge-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'cn-fujian',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-haidian-cm12-c01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-bj-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-hangzhou-internal-prod-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-2',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    26 => 
    array (
      'regionId' => 'cn-hangzhou-internal-test-3',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    27 => 
    array (
      'regionId' => 'cn-hangzhou-test-306',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    28 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    29 => 
    array (
      'regionId' => 'cn-hongkong-finance-pop',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    30 => 
    array (
      'regionId' => 'cn-huhehaote-nebula-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    31 => 
    array (
      'regionId' => 'cn-north-2-gov-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    32 => 
    array (
      'regionId' => 'cn-qingdao-nebula',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    33 => 
    array (
      'regionId' => 'cn-shanghai-et15-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    34 => 
    array (
      'regionId' => 'cn-shanghai-et2-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    35 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    36 => 
    array (
      'regionId' => 'cn-shanghai-inner',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    37 => 
    array (
      'regionId' => 'cn-shanghai-internal-test-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    38 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    39 => 
    array (
      'regionId' => 'cn-shenzhen-inner',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    40 => 
    array (
      'regionId' => 'cn-shenzhen-st4-d01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    41 => 
    array (
      'regionId' => 'cn-shenzhen-su18-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    42 => 
    array (
      'regionId' => 'cn-wuhan',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    43 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    44 => 
    array (
      'regionId' => 'cn-yushanfang',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    45 => 
    array (
      'regionId' => 'cn-zhangbei',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    46 => 
    array (
      'regionId' => 'cn-zhangbei-na61-b01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    47 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    48 => 
    array (
      'regionId' => 'cn-zhangjiakou-na62-a01',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    49 => 
    array (
      'regionId' => 'cn-zhengzhou-nebula-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    50 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    51 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    52 => 
    array (
      'regionId' => 'eu-west-1-oxs',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    53 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    54 => 
    array (
      'regionId' => 'rus-west-1-pop',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    55 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
    56 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'idaas-doraemon.aliyuncs.com',
    ),
  ),
);
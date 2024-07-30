<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Eiam-developerapi',
        'version' => '2022-02-25',
    ],
    'directories' => [
        [
            'id' => 166897,
            'title' => 'OIDC API',
            'type' => 'directory',
            'children' => [
                'GenerateToken',
                'GenerateDeviceCode',
                'GetUserInfo',
                'RevokeToken',
            ],
        ],
        [
            'id' => 166895,
            'title' => '授权范围 API',
            'type' => 'directory',
            'children' => [
                'GetApplicationProvisioningScope',
            ],
        ],
        [
            'id' => 166902,
            'title' => '组织管理 API',
            'type' => 'directory',
            'children' => [
                'CreateOrganizationalUnit',
                'PatchOrganizationalUnit',
                'GetOrganizationalUnit',
                'DeleteOrganizationalUnit',
                'ListOrganizationalUnits',
                'ListOrganizationalUnitParentIds',
                'GetOrganizationalUnitIdByExternalId',
            ],
        ],
        [
            'id' => 166910,
            'title' => '账户管理 API',
            'type' => 'directory',
            'children' => [
                'CreateUser',
                'PatchUser',
                'GetUser',
                'UpdateUserPassword',
                'DeleteUser',
                'ListUsers',
                'EnableUser',
                'DisableUser',
                'GetUserIdByEmail',
                'GetUserIdByPhoneNumber',
                'GetUserIdByUserExternalId',
                'GetUserIdByUsername',
                'SetUserPrimaryOrganizationalUnit',
                'AddUserToOrganizationalUnits',
                'RemoveUserFromOrganizationalUnits',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GenerateToken' => [
            'summary' => '调用GenerateToken接口，生成指定实例下的访问应用的access token。',
            'path' => '/v2/{instanceId}/{applicationId}/oauth2/token',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'produces' => [],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'client_secret',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端密钥，赋值场景：'."\n"
                            .'当grant\\_type为client\\_credentials"，采用client\\_secret\\_post方式时，需填写此值。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
                    ],
                ],
                [
                    'name' => 'grant_type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '授权类型',
                        'description' => '授权类型，目前支持的类型如下：'."\n"
                            .'- client\\_credentials 客户端模式，需要传入client\\_id和client\\_secret'."\n"
                            .'- refresh\\_token 刷新令牌'."\n"
                            .'- authorization\\_code 授权码模式'."\n"
                            .'- urn:ietf:params:oauth:grant-type:device_code 设备流模式'."\n"
                            .'- password 帐密模式【暂不支持】',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'client_credentials',
                        'enum' => [
                            'authorization_code',
                            'urn:ietf:params:oauth:grant-type:device_code',
                            'refresh_token',
                            'client_credentials',
                            'password',
                        ],
                    ],
                ],
                [
                    'name' => 'code',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'code码',
                        'description' => '授权code码，传入场景：'."\n"
                            .'grant\\_type=authorization_code 授权码模式时，必须参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxx',
                    ],
                ],
                [
                    'name' => 'username',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户名',
                        'description' => '账户名，在帐密模式下，必须传入，暂不支持',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'uesrname_001',
                    ],
                ],
                [
                    'name' => 'password',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码',
                        'description' => '账户名，在帐密模式下，必须传入，暂不支持',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxxxx',
                    ],
                ],
                [
                    'name' => 'device_code',
                    'in' => 'query',
                    'schema' => [
                        'title' => '设备码',
                        'description' => '设备code码，传入场景：'."\n"
                            .'grant\\_type=urn:ietf:params:oauth:grant-type:device_code即设备流模式时，必须参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxx',
                    ],
                ],
                [
                    'name' => 'redirect_uri',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重定向URI',
                        'description' => '重定向URI，传入场景：'."\n"
                            .'grant_type=authorization_code 授权码模式时，必须参数，与获取授权码请求中的重定向URI必须是一致的'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'refresh_token',
                    'in' => 'query',
                    'schema' => [
                        'title' => '更新token',
                        'description' => '刷新token，传入场景：'."\n"
                            .'grant\\_type=refresh_token即刷新令牌模式时，必须参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ATxxx',
                    ],
                ],
                [
                    'name' => 'code_verifier',
                    'in' => 'query',
                    'schema' => [
                        'title' => '验证code',
                        'description' => '验证code',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                ],
                [
                    'name' => 'exclusive_tag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排除的tag',
                        'description' => '排除的tag',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ATxxx',
                    ],
                ],
                [
                    'name' => 'scope',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'scope范围',
                        'description' => 'scope范围, 非必须，可选的值'."\n"
                            .'- openid '."\n"
                            .'- email'."\n"
                            .'- phone'."\n"
                            .'- profile',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'token信息',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'token_type' => [
                                'title' => 'token类型，包含Basic,Bearer',
                                'description' => 'token类型，取值可选范围：'."\n"
                                    .'Basic - Basic类型'."\n"
                                    .'Bearer - Bearer类型',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'Basic' => 'Basic',
                                    'Bearer' => 'Bearer',
                                ],
                                'example' => 'Bearer',
                            ],
                            'access_token' => [
                                'title' => 'access_token',
                                'description' => 'access_token。',
                                'type' => 'string',
                                'example' => 'ATxxx',
                            ],
                            'refresh_token' => [
                                'title' => 'refresh_token',
                                'description' => 'refresh_token。',
                                'type' => 'string',
                                'example' => 'RTxxx',
                            ],
                            'expires_in' => [
                                'title' => '有效时长，单位秒',
                                'description' => '有效时长，单位秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1200',
                            ],
                            'expires_at' => [
                                'title' => '过期时间',
                                'description' => '失效时间，格式为Unix时间戳，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1653288641',
                            ],
                            'id_token' => [
                                'title' => 'id_token',
                                'description' => 'id_token。',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"token_type\\": \\"Bearer\\",\\n  \\"access_token\\": \\"ATxxx\\",\\n  \\"refresh_token\\": \\"RTxxx\\",\\n  \\"expires_in\\": 1200,\\n  \\"expires_at\\": 1653288641,\\n  \\"id_token\\": \\"xxxxx\\"\\n}","type":"json"}]',
            'title' => '生成应用认证token',
            'description' => "\n"
                .'> - 目前支持的方式：授权码模式、设备流、刷新token、客户端模式',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_grant | Invalid or not supported grant\\_type: client\\_credentials| 应用API未开放 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GenerateDeviceCode' => [
            'summary' => '调用GenerateDeviceCode接口，生成设备流code。',
            'path' => '/v2/{instanceId}/{applicationId}/oauth2/device/code',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'scope',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'scope范围',
                        'description' => 'scope范围。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DeviceCodeResponse',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'device_code' => [
                                'title' => '设备验证码',
                                'description' => '设备码。',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                            'user_code' => [
                                'title' => '终端用户验证码',
                                'description' => '用户授权码。',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                            'verification_uri' => [
                                'title' => '验证URI',
                                'description' => '检验uri。',
                                'type' => 'string',
                                'example' => 'https://example.com/authorize/device',
                            ],
                            'verification_uri_complete' => [
                                'title' => '包含user_code的完整验证URI',
                                'description' => '完整的检验uri。',
                                'type' => 'string',
                                'example' => 'https://example.com/authorize/device?user_code='."\n"
                                    .'xxxx',
                            ],
                            'expires_in' => [
                                'title' => 'device_code和user_code的有效时长，单位秒',
                                'description' => '有效时长，单位秒',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1200',
                            ],
                            'expires_at' => [
                                'title' => '过期时间',
                                'description' => '失效时间，格式为Unix时间戳，单位为秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1653288641',
                            ],
                            'interval' => [
                                'title' => '请求token节点的超时时间，单位秒',
                                'description' => '请求token节点的超时时间，单位秒',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"device_code\\": \\"xxxxx\\",\\n  \\"user_code\\": \\"xxxxx\\",\\n  \\"verification_uri\\": \\"https://example.com/authorize/device\\",\\n  \\"verification_uri_complete\\": \\"https://example.com/authorize/device?user_code=\\\\nxxxx\\",\\n  \\"expires_in\\": 1200,\\n  \\"expires_at\\": 1653288641,\\n  \\"interval\\": 5\\n}","type":"json"}]',
            'title' => '生成设备Code',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_request | Application is not turn device grant flow on| 设备流授权未开启 |'."\n"
                .'| 400  | invalid\\_request | Invalid client id| client id无效 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetUserInfo' => [
            'summary' => '调用GetUserInfo接口，通过用户token获取账户信息。',
            'path' => '/v2/{instanceId}/{applicationId}/oauth2/userinfo',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Map',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                            'description' => '账户信息',
                            'example' => '无',
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"key\\": \\"无\\"\\n}","type":"json"}]',
            'title' => '获取账户信息',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_request | Application is not OIDC application| 非OIDC应用 |'."\n"
                .'| 400  | invalid\\_token | Invalid token| token无效 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'RevokeToken' => [
            'summary' => '调用RevokeToken接口，吊销指定的access_token或refresh_token。',
            'path' => '/v2/{instanceId}/{applicationId}/oauth2/revoke',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'client_secret',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
                    ],
                ],
                [
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'title' => '撤销的token',
                        'description' => '待撤销的token。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ATxxxx',
                    ],
                ],
                [
                    'name' => 'token_type_hint',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'token类型',
                        'description' => 'token类型，取值可选范围：'."\n"
                            .'access_token'."\n"
                            .'refresh\\_token',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'access_token' => 'access_token',
                            'refresh_token' => 'refresh_token',
                        ],
                        'example' => 'access_token',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'RevokeResponse',
                        'description' => '响应结果。',
                        'type' => 'object',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"test\\": \\"test\\",\\n  \\"test2\\": 1\\n}","type":"json"}]',
            'title' => '吊销指定的token',
        ],
        'GetApplicationProvisioningScope' => [
            'summary' => '调用GetApplicationProvisioningScope接口，获取指定实例下对应应用的同步范围信息。',
            'path' => '/v2/{instanceId}/{applicationId}/provisioningScope',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '	'."\n"
                            .'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '同步授权范围',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitIds' => [
                                'title' => '机构ID列表',
                                'description' => '组织ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织ID。',
                                    'type' => 'string',
                                    'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                ],
                                'example' => '[ou_xxx001]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitIds\\": [\\n    \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取应用同步范围信息',
            'description' => '> - 同步范围在IDaaS控制台的应用管理中设置，创建应用之后，默认拥有此API的权限'."\n",
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_001| 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'CreateOrganizationalUnit' => [
            'summary' => '调用CreateOrganizationalUnit接口，在指定组织下创建新组织资源。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitName' => [
                                'title' => '机构名称',
                                'description' => '组织名称，长度限制最长为64字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'name001',
                            ],
                            'parentId' => [
                                'title' => '父机构ID',
                                'description' => '父组织ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'organizationalUnitExternalId' => [
                                'title' => '机构外部ID',
                                'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID，长度限制最长为64字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'description' => [
                                'title' => '描述',
                                'description' => '组织描述，长度限制最长为128字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试组织',
                            ],
                        ],
                        'required' => false,
                        'example' => 'app_xx001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OrganizationalUnitIdObject',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitId' => [
                                'title' => '机构ID',
                                'description' => '组织ID。',
                                'type' => 'string',
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM组织',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|'."\n"
                .'| 400  | MissingParameter.OrganizationalUnitName | The specified parameter:OrganizationalUnitName is required!  | 缺少组织名称参数|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx| 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'PatchOrganizationalUnit' => [
            'summary' => '调用PatchOrganizationalUnit接口，更新一个EIAM组织信息。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'organizationalUnitId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '机构ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitName' => [
                                'title' => '机构名称',
                                'description' => '组织名称，长度限制最长为64字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'name001',
                            ],
                            'description' => [
                                'title' => '机构描述',
                                'description' => '组织描述，长度限制最长为128字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试组织',
                            ],
                        ],
                        'required' => false,
                        'example' => 'ou_xxx001',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '更新一个EIAM组织',
            'description' => '接口符合HTTP Patch方法语义，只修改传入的参数值，不传则默认不修改。',
            'responseParamsDescription' => "\n"
                .'> 成功则，默认返回http code为200'."\n",
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|'."\n"
                .'| 400  | ResourceDuplicated.OrganizationalUnitName | The specified OrganizationalUnitName resource: xxx already exist!  | 组织名称已存在|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetOrganizationalUnit' => [
            'summary' => '调用GetOrganizationalUnit接口，获取指定组织的详细信息。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'organizationalUnitId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '机构ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DeveloperOrganizationalUnitDTO',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'instanceId' => [
                                'title' => '实例ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                            ],
                            'organizationalUnitId' => [
                                'title' => '机构ID',
                                'description' => '组织ID。',
                                'type' => 'string',
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'organizationalUnitName' => [
                                'title' => '机构名称',
                                'description' => '组织名称。',
                                'type' => 'string',
                                'example' => 'name001',
                            ],
                            'parentId' => [
                                'title' => '父机构ID',
                                'description' => '父组织ID。',
                                'type' => 'string',
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'organizationalUnitExternalId' => [
                                'title' => '外部ID',
                                'description' => '外部ID。',
                                'type' => 'string',
                                'example' => 'id_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'organizationalUnitSourceType' => [
                                'title' => '来源类型',
                                'description' => '来源类型，取值可选范围：'."\n"
                                    .'- build_in - 自建。'."\n"
                                    .'- ding\\_talk - 钉钉导入。'."\n"
                                    .'- ad  -  AD导入。'."\n"
                                    .'- ldap  -  LDAP导入。',
                                'type' => 'string',
                                'example' => 'build_in',
                            ],
                            'organizationalUnitSourceId' => [
                                'title' => '来源ID',
                                'description' => '来源ID。',
                                'type' => 'string',
                                'example' => 'id_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'createTime' => [
                                'title' => '创建时间，毫秒',
                                'description' => '创建时间，格式为Unix时间戳，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652083425923',
                            ],
                            'updateTime' => [
                                'title' => '最近一次更新时间，毫秒',
                                'description' => '最近更新时间，格式为Unix时间戳，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652083425923',
                            ],
                            'description' => [
                                'title' => '描述',
                                'description' => '描述。',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitName\\": \\"name001\\",\\n  \\"parentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitExternalId\\": \\"id_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitSourceType\\": \\"build_in\\",\\n  \\"organizationalUnitSourceId\\": \\"id_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"createTime\\": 1652083425923,\\n  \\"updateTime\\": 1652083425923,\\n  \\"description\\": \\"xxxxx\\"\\n}","type":"json"}]',
            'title' => '查询一个EIAM组织信息',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'DeleteOrganizationalUnit' => [
            'summary' => '调用DeleteOrganizationalUnit接口，删除指定组织。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij'."\n",
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'organizationalUnitId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '机构ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除一个EIAM组织',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内或不存在|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'ListOrganizationalUnits' => [
            'summary' => '调用ListOrganizationalUnits接口，分页查询EIAM组织信息。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij'."\n",
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'parentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '父机构ID',
                        'description' => '父组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码，默认1',
                        'description' => '页码，默认1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '单页大小，默认20',
                        'description' => '单页大小读取记录数，默认20，范围为1～100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'GeneralDataListResponse',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'title' => '记录总数',
                                'description' => '数据总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'data' => [
                                'description' => '返回数据对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'instanceId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'organizationalUnitId' => [
                                            'title' => '机构ID',
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'organizationalUnitName' => [
                                            'title' => '机构名称',
                                            'description' => '组织名称。',
                                            'type' => 'string',
                                            'example' => 'name001',
                                        ],
                                        'parentId' => [
                                            'title' => '父机构ID',
                                            'description' => '父组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'organizationalUnitExternalId' => [
                                            'title' => '外部ID',
                                            'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。'."\n"
                                                ."\n"
                                                .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'organizationalUnitSourceType' => [
                                            'title' => '来源类型',
                                            'description' => '组织来源类型，取值可选范围：'."\n"
                                                .'- build\\_in：自建。'."\n"
                                                .'- ding\\_talk：钉钉导入。'."\n"
                                                .'- ad：AD导入。'."\n"
                                                .'- ldap：LDAP导入。',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                        'organizationalUnitSourceId' => [
                                            'title' => '来源ID',
                                            'description' => '组织来源ID。'."\n"
                                                ."\n"
                                                .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'createTime' => [
                                            'title' => '创建时间，毫秒',
                                            'description' => '组织创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652083425923',
                                        ],
                                        'updateTime' => [
                                            'title' => '最近一次更新时间，毫秒',
                                            'description' => '组织最近更新时间，Unix时间戳格式，单位为毫秒。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652083425923',
                                        ],
                                        'description' => [
                                            'title' => '描述',
                                            'description' => '组织描述。',
                                            'type' => 'string',
                                            'example' => '测试组织',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 1000,\\n  \\"data\\": [\\n    {\\n      \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitName\\": \\"name001\\",\\n      \\"parentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitExternalId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitSourceType\\": \\"build_in\\",\\n      \\"organizationalUnitSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"createTime\\": 1652083425923,\\n      \\"updateTime\\": 1652083425923,\\n      \\"description\\": \\"测试组织\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM组织列表信息',
            'description' => "\n",
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'ListOrganizationalUnitParentIds' => [
            'summary' => '调用ListOrganizationalUnitParentIds接口，查询指定组织所有先代节点信息。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}/parentIds',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'organizationalUnitId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '机构ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '父机构列表响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'parentIds' => [
                                'title' => '父机构ID列表，顺序层级从上到下',
                                'description' => '先代组织ID列表，顺序层级从上到下，只展示在授权范围内的组织ID。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织ID。',
                                    'type' => 'string',
                                    'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                ],
                                'example' => '[ou_xxx001]',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parentIds\\": [\\n    \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询组织先代节点',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetOrganizationalUnitIdByExternalId' => [
            'summary' => '调用GetOrganizationalUnitIdByExternalId接口，通过组织外部ID获取组织内部ID。',
            'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/_/actions/getOrganizationalUnitIdByExternalId',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij'."\n",
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitExternalId' => [
                                'title' => '组织外部ID',
                                'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。'."\n"
                                    ."\n"
                                    .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'organizationalUnitSourceType' => [
                                'title' => '组织来源类型, 取值可选范围： build_in(自建), ding_talk(钉钉导入),ad(AD导入),ldap(LDAP导入)',
                                'description' => '组织来源类型，取值可选范围：'."\n"
                                    .'- build\\_in：自建。'."\n"
                                    .'- ding\\_talk：钉钉导入。'."\n"
                                    .'- ad：AD导入。'."\n"
                                    .'- ldap：LDAP导入。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'build_in',
                            ],
                            'organizationalUnitSourceId' => [
                                'title' => '组织来源ID,自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId',
                                'description' => '组织来源ID。'."\n"
                                    ."\n"
                                    .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                            ],
                        ],
                        'required' => false,
                        'example' => 'xxx001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'OrganizationalUnitIdObject',
                        'description' => 'OrganizationalUnitIdObject',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitId' => [
                                'title' => '机构ID',
                                'description' => '组织ID。',
                                'type' => 'string',
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n}","type":"json"}]',
            'title' => '通过组织外部ID获取组织ID',
        ],
        'CreateUser' => [
            'summary' => '调用CreateUser接口在指定组织下，创建新的EIAM的账户资源。',
            'path' => '/v2/{instanceId}/{applicationId}/users',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'username' => [
                                'title' => '账户名称。',
                                'description' => '账户名称，可包含英文字母、数字、符号“_” 、“ .”、“@”、“-”，长度最大限制64字符。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'name001',
                            ],
                            'displayName' => [
                                'title' => '账户展示名。',
                                'description' => '账户展示名。长度限制最长为64字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'display_name001',
                            ],
                            'password' => [
                                'title' => '密码, 参考密码策略',
                                'description' => '账户密码，密码规则参考IDaaS控制台密码策略。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxxxx',
                            ],
                            'phoneRegion' => [
                                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '86',
                            ],
                            'phoneNumber' => [
                                'title' => '手机号',
                                'description' => '账户手机号，格式为6～15位数字。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '156xxxxxxx',
                            ],
                            'phoneNumberVerified' => [
                                'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                                'description' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'email' => [
                                'title' => '邮箱',
                                'description' => '邮箱，邮箱前缀可包含大写英文字母、小写英文字母、数字、点、下划线或中划线，长度限制最长为64字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'example@example.com',
                            ],
                            'emailVerified' => [
                                'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                                'description' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'userExternalId' => [
                                'title' => '账户外部ID',
                                'description' => '账户外部ID，用于与外部系统的关联，最大长度限制64字符，若不设置，默认设置为账户ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                            'primaryOrganizationalUnitId' => [
                                'title' => '账户主机构ID',
                                'description' => '主组织ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'description' => [
                                'title' => '描述',
                                'description' => '账户描述，长度限制最长为256字符。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '测试账户',
                            ],
                            'passwordInitializationConfig' => [
                                'title' => '密码初始化配置',
                                'description' => '密码初始化配置。',
                                'type' => 'object',
                                'properties' => [
                                    'passwordInitializationPolicyPriority' => [
                                        'title' => '密码初始化策略优先级，不传不生效。枚举取值:global(全局优先)、custom(自定义优先)',
                                        'description' => '密码初始化策略优先级，默认不生效，取值可选范围：'."\n"
                                            .'- global：全局优先，采用实例级别的密码初始化策略，即本次设置的密码初始化策略均无效，参考密码相关策略的密码初始化策略。'."\n"
                                            .'- custom：自定义优先，以当前定义的密码初始化策略为准，包括是否开启强制改密、密码初始化方式以及通知渠道。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'global',
                                    ],
                                    'passwordForcedUpdateStatus' => [
                                        'title' => '强制修改密码状态,默认不启用。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '强制修改密码状态,默认不启用，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'enabled',
                                    ],
                                    'userNotificationChannels' => [
                                        'title' => '密码通知渠道。枚举取值:email(邮件)、sms(短信)',
                                        'description' => '密码通知渠道，取值可选范围：'."\n"
                                            .'- email：邮件。'."\n"
                                            .'- sms：短信。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '密码通知渠道。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'email',
                                        ],
                                        'required' => false,
                                        'example' => 'sms',
                                    ],
                                    'passwordInitializationType' => [
                                        'title' => '密码初始化方式。枚举取值:random(随机)',
                                        'description' => '密码初始化方式，取值可选范围：'."\n"
                                            .'- random：随机。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'random',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'customFields' => [
                                'title' => '扩展字段列表',
                                'description' => '账户扩展字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '扩展字段标识和值对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'fieldName' => [
                                            'title' => '扩展字段标识',
                                            'description' => '扩展字段标识。类型和值域可通过控制台查看对应扩展字段值的详细信息。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'age',
                                        ],
                                        'fieldValue' => [
                                            'title' => '扩展字段值',
                                            'description' => '扩展字段值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'fieldValue_001',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                        'example' => 'app_xx001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '调用CreateUser接口在指定组织下，创建新的EIAM的账户资源',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'userId' => [
                                'title' => '账户ID。',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM账户',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | invalid_request | Access token application id not match  | 请求无效，token信息与参数应用ID不一致|'."\n"
                .'| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不存在或组织不在同步范围内|'."\n"
                .'| 404  | instance\\_not\\_found | Instance id not found: idaas_ue2jvisn35ea5lmthk267xxxxx | 实例不存在 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 400  | MissingParameter.Username | The specified parameter:Username is required!  | 缺少账户名参数 |'."\n"
                .'| 400  | MissingParameter.PhoneRegion | The specified parameter:PhoneRegion is required!  | 缺少手机区号参数，若已设置手机号，此为必填项 |'."\n"
                .'| 400  | MissingParameter.PhoneNumberVerified | The specified parameter:PhoneRegion is required!  | 缺少手机区号是否已验证参数，若已设置手机号，此为必填项 |'."\n"
                .'| 400  | MissingParameter.Email | The specified parameter:Email is required!  | 缺少邮箱是否已验证参数，若已设置邮箱，此为必填项 |'."\n"
                .'| 400  | MissingParameter.Username | The specified parameter:Username is required!  | 缺少账户名参数 |'."\n"
                .'| 400  | MissingParameter.PrimaryOrganizationalUnitId | The specified parameter:PrimaryOrganizationalUnitId is required!  | 缺少主组织参数 |'."\n"
                .'| 400  | InvalidParameter.PhoneNumber | The specified parameter:PhoneNumber is invalid.  | 无效的手机号 |'."\n"
                .'| 400  | InvalidParameter.PhoneRegion | The specified parameter:PhoneRegion is invalid.  | 无效的手机区号 |'."\n"
                .'| 400  | InvalidParameter.Password | The specified parameter:Password is invalid.  | 密码不符合规则，请参考IDaaS控制台密码规则 |'."\n"
                .'| 400  | InvalidParameter.Email | The specified parameter:Email is invalid.  | 无效的邮箱 |'."\n"
                .'| 400  | InvalidParameter.DisplayName | The specified parameter:DisplayName is invalid.  | 账户显示名过长 |'."\n"
                .'| 400  | InvalidParameter.Description | The specified parameter:Description is invalid.  | 账户描述过长 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'PatchUser' => [
            'summary' => '调用PatchUser接口，更新一个EIAM账户信息。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
            'methods' => [
                'patch',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'username' => [
                                'title' => '账户名',
                                'description' => '账户名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'name001',
                            ],
                            'displayName' => [
                                'title' => '账户展示名',
                                'description' => '账户展示名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'display_name001',
                            ],
                            'phoneRegion' => [
                                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '86',
                            ],
                            'phoneNumber' => [
                                'title' => '手机号',
                                'description' => '账户手机号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '156xxxxxxx',
                            ],
                            'phoneNumberVerified' => [
                                'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                                'description' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'email' => [
                                'title' => '邮箱',
                                'description' => '账户邮箱。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'example@example.com',
                            ],
                            'emailVerified' => [
                                'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                                'description' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'customFields' => [
                                'title' => '扩展字段列表',
                                'description' => '账户扩展字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '扩展字段更新操作对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'operator' => [
                                            'description' => '字段操作类型，已废弃，请采用operation替换使用。',
                                            'type' => 'string',
                                            'deprecated' => true,
                                            'required' => false,
                                            'example' => 'replace',
                                        ],
                                        'fieldName' => [
                                            'title' => '扩展字段标识',
                                            'description' => '扩展字段标识，类型和值域可通过控制台查看对应扩展字段值的详细信息。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'age',
                                        ],
                                        'fieldValue' => [
                                            'title' => '扩展字段值',
                                            'description' => '扩展字段值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'test_value',
                                        ],
                                        'operation' => [
                                            'description' => '字段操作类型，取值可选范围：'."\n"
                                                .'- add：添加。'."\n"
                                                .'- replace：替换。若对应扩展字段无设置值，会转换为add操作。'."\n"
                                                .'- remove：移除。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'replace',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                        'example' => 'user_001',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '更新一个EIAM账户信息',
            'description' => '接口符合HTTP Patch方法语义，只修改传入的参数值，不传则默认不修改。',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | MissingParameter.xxxx | The specified parameter:xxx is required!  | 缺少xxxx参数 |'."\n"
                .'| 400  | InvalidParameter.xxxx | The specified parameter:xxxx is required!  | xxxx参数无效 |'."\n"
                .'| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetUser' => [
            'summary' => '调用GetUser接口，查询一个EIAM账户详细信息。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'DeveloperUserDetailDTO',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'instanceId' => [
                                'title' => '实例ID',
                                'description' => '实例ID。',
                                'type' => 'string',
                                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                            ],
                            'organizationalUnits' => [
                                'title' => '账户所属组织列表',
                                'description' => '账户所属组织列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'organizationalUnitId' => [
                                            'title' => '机构ID',
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'organizationalUnitName' => [
                                            'title' => '机构名称',
                                            'description' => '组织名称。',
                                            'type' => 'string',
                                            'example' => 'name001',
                                        ],
                                        'primary' => [
                                            'title' => '是否主机构',
                                            'description' => '是否主组织。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                    ],
                                ],
                            ],
                            'primaryOrganizationalUnitId' => [
                                'title' => '账户主机构ID',
                                'description' => '账户主组织ID。',
                                'type' => 'string',
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                            'customFields' => [
                                'title' => '账户扩展字段列表',
                                'description' => '账户扩展字段列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '扩展字段数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'fieldName' => [
                                            'title' => '字段标识',
                                            'description' => '扩展字段标识。',
                                            'type' => 'string',
                                            'example' => 'xxxx',
                                        ],
                                        'fieldValue' => [
                                            'title' => '字段数据值',
                                            'description' => '字段数据值。'."\n"
                                                .'任何数据类型的字段值均以字符串的方式返回。比如布尔类型返回的值为"true"或"false"',
                                            'type' => 'string',
                                            'example' => '字段数据值',
                                        ],
                                    ],
                                ],
                            ],
                            'userId' => [
                                'title' => '账户ID',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                            'username' => [
                                'title' => '账户名',
                                'description' => '账户名。',
                                'type' => 'string',
                                'example' => 'name001',
                            ],
                            'displayName' => [
                                'title' => '显示名',
                                'description' => '账户显示名。',
                                'type' => 'string',
                                'example' => 'display_name001',
                            ],
                            'passwordSet' => [
                                'title' => '密码是否已设置',
                                'description' => '密码是否已设置。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'phoneRegion' => [
                                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +',
                                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                                'type' => 'string',
                                'example' => '86',
                            ],
                            'phoneNumber' => [
                                'title' => '手机号',
                                'description' => '账户手机号。',
                                'type' => 'string',
                                'example' => '156xxxxxxx',
                            ],
                            'phoneNumberVerified' => [
                                'title' => '手机号是否验证',
                                'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'email' => [
                                'title' => '邮箱',
                                'description' => '邮箱。',
                                'type' => 'string',
                                'example' => 'example@example.com',
                            ],
                            'emailVerified' => [
                                'title' => '邮箱是否验证',
                                'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'userExternalId' => [
                                'title' => '外部ID',
                                'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。'."\n"
                                    ."\n"
                                    .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                            'userSourceType' => [
                                'title' => '来源类型，build_in[自建],ding_talk[钉钉导入],ad[AD导入],ldap[LDAP导入]',
                                'description' => '账户来源类型，取值可选范围：'."\n"
                                    .'- build_in：自建。'."\n"
                                    .'- ding_talk：钉钉导入。'."\n"
                                    .'- ad：AD导入。'."\n"
                                    .'- ldap：LDAP导入',
                                'type' => 'string',
                                'example' => 'build_in',
                            ],
                            'userSourceId' => [
                                'title' => '来源ID',
                                'description' => '账户来源ID。'."\n"
                                    ."\n"
                                    .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                'type' => 'string',
                                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                            ],
                            'status' => [
                                'title' => '账户状态, enabled:启用,disabled:禁用',
                                'description' => '账户状态，取值可选范围：'."\n"
                                    .'enabled - 启用中。'."\n"
                                    .'disabled - 禁用中。',
                                'type' => 'string',
                                'example' => 'enabled',
                            ],
                            'accountExpireTime' => [
                                'title' => '账户过期时间, 毫秒时间',
                                'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652085686179',
                            ],
                            'registerTime' => [
                                'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652085686179',
                            ],
                            'lockExpireTime' => [
                                'title' => '锁定过期时间, 毫秒时间',
                                'description' => '账户锁定过期时间，Unix时间戳格式，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652085686179',
                            ],
                            'createTime' => [
                                'title' => '创建时间, 毫秒时间',
                                'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652085686179',
                            ],
                            'updateTime' => [
                                'title' => '最近一次更新时间, 毫秒时间',
                                'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1652085686179',
                            ],
                            'description' => [
                                'title' => '账号描述',
                                'description' => '账户描述。',
                                'type' => 'string',
                                'example' => '测试账户',
                            ],
                            'groups' => [
                                'title' => '账户所属组列表',
                                'description' => '账户所属组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户所属组对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'groupId' => [
                                            'title' => '组ID。',
                                            'description' => '组ID。',
                                            'type' => 'string',
                                            'example' => 'group_ufdsasn35ea5lmthk267xxxxx',
                                        ],
                                        'groupName' => [
                                            'title' => '组名称。',
                                            'description' => '组名称。',
                                            'type' => 'string',
                                            'example' => 'name_test',
                                        ],
                                        'description' => [
                                            'title' => '组描述。',
                                            'description' => '组描述。',
                                            'type' => 'string',
                                            'example' => 'description_demo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"organizationalUnits\\": [\\n    {\\n      \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitName\\": \\"name001\\",\\n      \\"primary\\": true\\n    }\\n  ],\\n  \\"primaryOrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"customFields\\": [\\n    {\\n      \\"fieldName\\": \\"xxxx\\",\\n      \\"fieldValue\\": \\"字段数据值\\"\\n    }\\n  ],\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n  \\"username\\": \\"name001\\",\\n  \\"displayName\\": \\"display_name001\\",\\n  \\"passwordSet\\": true,\\n  \\"phoneRegion\\": \\"86\\",\\n  \\"phoneNumber\\": \\"156xxxxxxx\\",\\n  \\"phoneNumberVerified\\": true,\\n  \\"email\\": \\"example@example.com\\",\\n  \\"emailVerified\\": true,\\n  \\"userExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n  \\"userSourceType\\": \\"build_in\\",\\n  \\"userSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"status\\": \\"enabled\\",\\n  \\"accountExpireTime\\": 1652085686179,\\n  \\"registerTime\\": 1652085686179,\\n  \\"lockExpireTime\\": 1652085686179,\\n  \\"createTime\\": 1652085686179,\\n  \\"updateTime\\": 1652085686179,\\n  \\"description\\": \\"测试账户\\",\\n  \\"groups\\": [\\n    {\\n      \\"groupId\\": \\"group_ufdsasn35ea5lmthk267xxxxx\\",\\n      \\"groupName\\": \\"name_test\\",\\n      \\"description\\": \\"description_demo\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM账户详细信息',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 400  | MissingParameter.xxxx | The specified parameter:xxx is required!  | 缺少xxxx参数 |'."\n"
                .'| 400  | InvalidParameter.xxxx | The specified parameter:xxxx is required!  | xxxx参数无效 |'."\n"
                .'| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'UpdateUserPassword' => [
            'summary' => '更新指定EIAM账户的密码信息。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/updateUserPassword',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'password' => [
                                'title' => '密码',
                                'description' => '新密码，相关规则参考控制台密码策略说明。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '更新一个EIAM账户的密码',
        ],
        'DeleteUser' => [
            'summary' => '调用DeleteUser接口，删除一个EIAM账户信息。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除一个EIAM账户',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'ListUsers' => [
            'summary' => '调用ListUsers接口，分页查询EIAM账户信息。',
            'path' => '/v2/{instanceId}/{applicationId}/users',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'organizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '机构ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码，默认1',
                        'description' => '页码，默认1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '单页大小，默认20',
                        'description' => '单页大小读取记录数，默认20，范围为1～100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询账户列表响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'totalCount' => [
                                'title' => '记录总数',
                                'description' => '数据总记录数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'data' => [
                                'description' => '返回数据对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'instanceId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'userId' => [
                                            'title' => '账户ID',
                                            'description' => '账户ID。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'username' => [
                                            'title' => '账户名',
                                            'description' => '账户名。',
                                            'type' => 'string',
                                            'example' => 'name001',
                                        ],
                                        'displayName' => [
                                            'title' => '显示名',
                                            'description' => '账户显示名。',
                                            'type' => 'string',
                                            'example' => 'display_name001',
                                        ],
                                        'passwordSet' => [
                                            'title' => '密码是否已设置',
                                            'description' => '密码是否已设置',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'phoneRegion' => [
                                            'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +',
                                            'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                                            'type' => 'string',
                                            'example' => '86',
                                        ],
                                        'phoneNumber' => [
                                            'title' => '手机号',
                                            'description' => '账户手机号。',
                                            'type' => 'string',
                                            'example' => '156xxxxxxx',
                                        ],
                                        'phoneNumberVerified' => [
                                            'title' => '手机号是否验证',
                                            'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'email' => [
                                            'title' => '邮箱',
                                            'description' => '账户邮箱。',
                                            'type' => 'string',
                                            'example' => 'example@example.com',
                                        ],
                                        'emailVerified' => [
                                            'title' => '邮箱是否验证',
                                            'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'userExternalId' => [
                                            'title' => '外部ID',
                                            'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。'."\n"
                                                ."\n"
                                                .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'userSourceType' => [
                                            'title' => '来源类型，build_in[自建],ding_talk[钉钉导入],ad[AD导入],ldap[LDAP导入]',
                                            'description' => '账户来源类型，取值可选范围：'."\n"
                                                .'- build_in：自建。'."\n"
                                                .'- ding_talk：钉钉导入。'."\n"
                                                .'- ad：AD导入。'."\n"
                                                .'- ldap：LDAP导入',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                        'userSourceId' => [
                                            'title' => '来源ID',
                                            'description' => '账户来源ID。'."\n"
                                                ."\n"
                                                .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'status' => [
                                            'title' => '账户状态, enabled:启用,disabled:禁用',
                                            'description' => '账户状态，取值可选范围：'."\n"
                                                .'enabled - 启用中。'."\n"
                                                .'disabled - 禁用中。',
                                            'type' => 'string',
                                            'example' => 'enabled',
                                        ],
                                        'accountExpireTime' => [
                                            'title' => '账户过期时间, 毫秒时间',
                                            'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'registerTime' => [
                                            'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'lockExpireTime' => [
                                            'title' => '锁定过期时间, 毫秒时间',
                                            'description' => '账户锁定过期时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'createTime' => [
                                            'title' => '创建时间, 毫秒时间',
                                            'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'updateTime' => [
                                            'title' => '最近一次更新时间, 毫秒时间',
                                            'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'description' => [
                                            'title' => '账号描述',
                                            'description' => '账户描述。',
                                            'type' => 'string',
                                            'example' => '测试账户',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 1000,\\n  \\"data\\": [\\n    {\\n      \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"username\\": \\"name001\\",\\n      \\"displayName\\": \\"display_name001\\",\\n      \\"passwordSet\\": true,\\n      \\"phoneRegion\\": \\"86\\",\\n      \\"phoneNumber\\": \\"156xxxxxxx\\",\\n      \\"phoneNumberVerified\\": true,\\n      \\"email\\": \\"example@example.com\\",\\n      \\"emailVerified\\": true,\\n      \\"userExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"userSourceType\\": \\"build_in\\",\\n      \\"userSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"status\\": \\"enabled\\",\\n      \\"accountExpireTime\\": 1652085686179,\\n      \\"registerTime\\": 1652085686179,\\n      \\"lockExpireTime\\": 1652085686179,\\n      \\"createTime\\": 1652085686179,\\n      \\"updateTime\\": 1652085686179,\\n      \\"description\\": \\"测试账户\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM账户',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid\\_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app\\_001| 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read\\_all] | 缺少API授权信息 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'EnableUser' => [
            'summary' => '调用EnableUser接口，启用指定的EIAM账户。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/enable',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_001',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '启用一个EIAM账户',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400 | invalid_token | Access token is not valid | '."\n"
                .'| 404 | ResourceNotFound.User | The specified User resource: user_xxxx not found. | '."\n"
                .'| 404 | application_not_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | '."\n"
                .'| 403 | application_disabled | Application is disabled | '."\n"
                .'| 403 | application_api_disabled | Application api invoke disabled | '."\n"
                .'| 403 | permission_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | '."\n"
                .'| 500 | Internal Server Error | Internal Server Error |',
        ],
        'DisableUser' => [
            'summary' => '调用DisableUser接口，禁用指定的EIAM账户。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/disable',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_001',
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '禁用一个EIAM账户',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400 | invalid_token | Access token is not valid | '."\n"
                .'| 404 | ResourceNotFound.User | The specified User resource: user_xxxx not found. | '."\n"
                .'| 404 | application_not_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | '."\n"
                .'| 403 | application_disabled | Application is disabled | '."\n"
                .'| 403 | application_api_disabled | Application api invoke disabled | '."\n"
                .'| 403 | permission_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | '."\n"
                .'| 500 | Internal Server Error | Internal Server Error |',
        ],
        'GetUserIdByEmail' => [
            'summary' => '调用GetUserIdByEmail接口，通过邮箱获取EIAM对应账户ID。',
            'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByEmail',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'email' => [
                                'title' => '邮箱',
                                'description' => '账户邮箱。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'example@example.com',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'userId' => [
                                'title' => '账户ID',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '通过邮箱获取EIAM账户ID',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 400  | MissingParameter.Email | The specified parameter: Email is required!  | 缺少Email参数 |'."\n"
                .'| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetUserIdByPhoneNumber' => [
            'summary' => '调用GetUserIdByPhoneNumber接口，通过手机号获取EIAM对应账户ID。',
            'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByPhoneNumber',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij'."\n",
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'phoneNumber' => [
                                'title' => '手机号',
                                'description' => '账户手机号。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '156xxxxxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'userId' => [
                                'title' => '账户ID',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '通过手机号获取EIAM账户ID',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 400  | MissingParameter.PhoneNumber| The specified parameter: PhoneNumber is required!  | 缺少Email参数 |'."\n"
                .'| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetUserIdByUserExternalId' => [
            'summary' => '调用GetUserIdByUserExternalId接口，通过账户外部ID获取EIAM账户ID。',
            'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByExternalId',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息，格式:Bearer access_token',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer AT8csE2seYxxxxxij',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'userExternalId' => [
                                'title' => '账户外部ID',
                                'description' => '账户外部ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'xxx001',
                            ],
                            'userSourceType' => [
                                'title' => '账户来源类型, 取值可选范围： build_in(自建), ding_talk(钉钉导入),ad(AD导入),ldap(LDAP导入)',
                                'description' => '账户来源类型，取值可选范围：'."\n"
                                    .'- build_in：自建。'."\n"
                                    .'- ding_talk：钉钉导入。'."\n"
                                    .'- ad：AD导入。'."\n"
                                    .'- ldap：LDAP导入',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'build_in',
                            ],
                            'userSourceId' => [
                                'title' => '账户来源ID,自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId',
                                'description' => '账户来源ID。'."\n"
                                    .'自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'userId' => [
                                'title' => '账户ID',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '通过账户外部ID获取EIAM账户ID',
            'extraInfo' => '### 错误码'."\n"
                .'|  HttpCode   | Error Code  | 错误信息 | 说明 |'."\n"
                .'|  ----  | ----  | ----  | ----  |'."\n"
                .'| 400  | invalid_token | Access token is not valid  | token无效|'."\n"
                .'| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |'."\n"
                .'| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |'."\n"
                .'| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |'."\n"
                .'| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |'."\n"
                .'| 400  | MissingParameter.UserExternalId | The specified parameter: UserExternalId is required!  | 缺少UserExternalId参数 |'."\n"
                .'| 400  | MissingParameter.UserSourceType | The specified parameter: UserSourceType is required!  | 缺少UserSourceType参数 |'."\n"
                .'| 400  | MissingParameter.UserSourceId | The specified parameter: UserSourceId is required!  | 缺少UserSourceId参数 |'."\n"
                .'| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |'."\n"
                .'| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
        ],
        'GetUserIdByUsername' => [
            'summary' => '调用GetUserIdByUsername接口，通过账户名获取EIAM对应账户ID。',
            'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByUsername',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'username' => [
                                'title' => '账户名。',
                                'description' => '账户名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'username_001',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'userId' => [
                                'title' => '账户ID。',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '通过账户名获取EIAM账户ID',
        ],
        'SetUserPrimaryOrganizationalUnit' => [
            'summary' => '设置一个EIAM账户的所属主组织，账户会从旧主组织移除，并加入到新的组织下。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/setUserPrimaryOrganizationalUnit',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitId' => [
                                'title' => '主组织ID。',
                                'description' => '主组织ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '设置一个EIAM账户所属主组织',
        ],
        'AddUserToOrganizationalUnits' => [
            'summary' => '将一个EIAM账户加入到多个EIAM组织中，这些组织作为账户的从属组织，如果账户已属于相关组织，则不做更新。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/addUserToOrganizationalUnits',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitIds' => [
                                'title' => '组织ID列表。',
                                'description' => '组织ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                ],
                                'required' => true,
                                'example' => '[ou_wovwffm62xifdziem7an7xxxxx]',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '将一个EIAM账户加入到多个EIAM组织中',
        ],
        'RemoveUserFromOrganizationalUnits' => [
            'summary' => '将一个EIAM账户从多个EIAM组织中移除，如果账户已不属于这些组织，则默认成功。',
            'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/removeUserFromOrganizationalUnits',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Authorization',
                    'in' => 'header',
                    'schema' => [
                        'title' => '认证信息。'."\n"
                            .'格式:Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'description' => '认证信息。'."\n"
                            .'格式：Bearer ${access_token}。'."\n"
                            .'示例：Bearer ATxxxx。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Bearer xxxx',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ],
                ],
                [
                    'name' => 'applicationId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'userId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'organizationalUnitIds' => [
                                'title' => '组织ID列表。',
                                'description' => '组织ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                ],
                                'required' => true,
                                'example' => '[ou_wovwffm62xifdziem7an7xxxxx]',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '将一个EIAM账户从多个EIAM组织中移除',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'eiam-developerapi.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'eiam-developerapi.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
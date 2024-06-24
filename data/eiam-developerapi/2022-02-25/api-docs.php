<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'Eiam-developerapi',
    'version' => '2022-02-25',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 166897,
      'title' => 'OIDC API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GenerateToken',
        1 => 'GenerateDeviceCode',
        2 => 'GetUserInfo',
        3 => 'RevokeToken',
      ),
    ),
    1 => 
    array (
      'id' => 166895,
      'title' => '授权范围 API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetApplicationProvisioningScope',
      ),
    ),
    2 => 
    array (
      'id' => 166902,
      'title' => '组织管理 API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOrganizationalUnit',
        1 => 'PatchOrganizationalUnit',
        2 => 'GetOrganizationalUnit',
        3 => 'DeleteOrganizationalUnit',
        4 => 'ListOrganizationalUnits',
        5 => 'ListOrganizationalUnitParentIds',
        6 => 'GetOrganizationalUnitIdByExternalId',
      ),
    ),
    3 => 
    array (
      'id' => 166910,
      'title' => '账户管理 API',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUser',
        1 => 'PatchUser',
        2 => 'GetUser',
        3 => 'UpdateUserPassword',
        4 => 'DeleteUser',
        5 => 'ListUsers',
        6 => 'EnableUser',
        7 => 'DisableUser',
        8 => 'GetUserIdByEmail',
        9 => 'GetUserIdByPhoneNumber',
        10 => 'GetUserIdByUserExternalId',
        11 => 'GetUserIdByUsername',
        12 => 'SetUserPrimaryOrganizationalUnit',
        13 => 'AddUserToOrganizationalUnits',
        14 => 'RemoveUserFromOrganizationalUnits',
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
    'GenerateToken' => 
    array (
      'summary' => '调用GenerateToken接口，生成指定实例下的访问应用的access token。',
      'path' => '/v2/{instanceId}/{applicationId}/oauth2/token',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'produces' => 
      array (
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。
',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'client_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'client_secret',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端密钥，赋值场景：
当grant\\_type为client\\_credentials"，采用client\\_secret\\_post方式时，需填写此值。
',
            'type' => 'string',
            'required' => false,
            'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'grant_type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '授权类型',
            'description' => '授权类型，目前支持的类型如下：
- client\\_credentials 客户端模式，需要传入client\\_id和client\\_secret
- refresh\\_token 刷新令牌
- authorization\\_code 授权码模式
- urn:ietf:params:oauth:grant-type:device_code 设备流模式
- password 帐密模式【暂不支持】',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'client_credentials',
            'enum' => 
            array (
              0 => 'authorization_code',
              1 => 'urn:ietf:params:oauth:grant-type:device_code',
              2 => 'refresh_token',
              3 => 'client_credentials',
              4 => 'password',
            ),
          ),
        ),
        5 => 
        array (
          'name' => 'code',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'code码',
            'description' => '授权code码，传入场景：
grant\\_type=authorization_code 授权码模式时，必须参数',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'username',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户名',
            'description' => '账户名，在帐密模式下，必须传入，暂不支持',
            'type' => 'string',
            'required' => false,
            'example' => 'uesrname_001',
          ),
        ),
        7 => 
        array (
          'name' => 'password',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '密码',
            'description' => '账户名，在帐密模式下，必须传入，暂不支持',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'device_code',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '设备码',
            'description' => '设备code码，传入场景：
grant\\_type=urn:ietf:params:oauth:grant-type:device_code即设备流模式时，必须参数',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxx',
          ),
        ),
        9 => 
        array (
          'name' => 'redirect_uri',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '重定向URI',
            'description' => '重定向URI，传入场景：
grant_type=authorization_code 授权码模式时，必须参数，与获取授权码请求中的重定向URI必须是一致的

',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        10 => 
        array (
          'name' => 'refresh_token',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '更新token',
            'description' => '刷新token，传入场景：
grant\\_type=refresh_token即刷新令牌模式时，必须参数',
            'type' => 'string',
            'required' => false,
            'example' => 'ATxxx',
          ),
        ),
        11 => 
        array (
          'name' => 'code_verifier',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '验证code',
            'description' => '验证code',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
        12 => 
        array (
          'name' => 'exclusive_tag',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排除的tag',
            'description' => '排除的tag',
            'type' => 'string',
            'required' => false,
            'example' => 'ATxxx',
          ),
        ),
        13 => 
        array (
          'name' => 'scope',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'scope范围',
            'description' => 'scope范围, 非必须，可选的值
- openid 
- email
- phone
- profile',
            'type' => 'string',
            'required' => false,
            'example' => 'xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'token信息',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'token_type' => 
              array (
                'title' => 'token类型，包含Basic,Bearer',
                'description' => 'token类型，取值可选范围：
Basic - Basic类型
Bearer - Bearer类型',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'Basic' => 'Basic',
                  'Bearer' => 'Bearer',
                ),
                'example' => 'Bearer',
              ),
              'access_token' => 
              array (
                'title' => 'access_token',
                'description' => 'access_token。',
                'type' => 'string',
                'example' => 'ATxxx',
              ),
              'refresh_token' => 
              array (
                'title' => 'refresh_token',
                'description' => 'refresh_token。',
                'type' => 'string',
                'example' => 'RTxxx',
              ),
              'expires_in' => 
              array (
                'title' => '有效时长，单位秒',
                'description' => '有效时长，单位秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1200',
              ),
              'expires_at' => 
              array (
                'title' => '过期时间',
                'description' => '失效时间，格式为Unix时间戳，单位为秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1653288641',
              ),
              'id_token' => 
              array (
                'title' => 'id_token',
                'description' => 'id_token。',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"token_type\\": \\"Bearer\\",\\n  \\"access_token\\": \\"ATxxx\\",\\n  \\"refresh_token\\": \\"RTxxx\\",\\n  \\"expires_in\\": 1200,\\n  \\"expires_at\\": 1653288641,\\n  \\"id_token\\": \\"xxxxx\\"\\n}","type":"json"}]',
      'title' => '生成应用认证token',
      'description' => '
> - 目前支持的方式：授权码模式、设备流、刷新token、客户端模式',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_grant | Invalid or not supported grant\\_type: client\\_credentials| 应用API未开放 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GenerateDeviceCode' => 
    array (
      'summary' => '调用GenerateDeviceCode接口，生成设备流code。',
      'path' => '/v2/{instanceId}/{applicationId}/oauth2/device/code',
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
          'Anonymous' => 
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'scope',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'scope范围',
            'description' => 'scope范围。',
            'type' => 'string',
            'required' => false,
            'example' => 'xxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DeviceCodeResponse',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'device_code' => 
              array (
                'title' => '设备验证码',
                'description' => '设备码。',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'user_code' => 
              array (
                'title' => '终端用户验证码',
                'description' => '用户授权码。',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'verification_uri' => 
              array (
                'title' => '验证URI',
                'description' => '检验uri。',
                'type' => 'string',
                'example' => 'https://example.com/authorize/device',
              ),
              'verification_uri_complete' => 
              array (
                'title' => '包含user_code的完整验证URI',
                'description' => '完整的检验uri。',
                'type' => 'string',
                'example' => 'https://example.com/authorize/device?user_code=
xxxx',
              ),
              'expires_in' => 
              array (
                'title' => 'device_code和user_code的有效时长，单位秒',
                'description' => '有效时长，单位秒',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1200',
              ),
              'expires_at' => 
              array (
                'title' => '过期时间',
                'description' => '失效时间，格式为Unix时间戳，单位为秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1653288641',
              ),
              'interval' => 
              array (
                'title' => '请求token节点的超时时间，单位秒',
                'description' => '请求token节点的超时时间，单位秒',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"device_code\\": \\"xxxxx\\",\\n  \\"user_code\\": \\"xxxxx\\",\\n  \\"verification_uri\\": \\"https://example.com/authorize/device\\",\\n  \\"verification_uri_complete\\": \\"https://example.com/authorize/device?user_code=\\\\nxxxx\\",\\n  \\"expires_in\\": 1200,\\n  \\"expires_at\\": 1653288641,\\n  \\"interval\\": 5\\n}","type":"json"}]',
      'title' => '生成设备Code',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_request | Application is not turn device grant flow on| 设备流授权未开启 |
| 400  | invalid\\_request | Invalid client id| client id无效 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetUserInfo' => 
    array (
      'summary' => '调用GetUserInfo接口，通过用户token获取账户信息。',
      'path' => '/v2/{instanceId}/{applicationId}/oauth2/userinfo',
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
          'Anonymous' => 
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
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Map',
            'description' => '响应结果。',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'any',
              'description' => '账户信息',
              'example' => '无',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"key\\": \\"无\\"\\n}","type":"json"}]',
      'title' => '获取账户信息',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_request | Application is not OIDC application| 非OIDC应用 |
| 400  | invalid\\_token | Invalid token| token无效 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'RevokeToken' => 
    array (
      'summary' => '调用RevokeToken接口，吊销指定的access_token或refresh_token。',
      'path' => '/v2/{instanceId}/{applicationId}/oauth2/revoke',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'client_id',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'client_secret',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户端密钥。',
            'type' => 'string',
            'required' => false,
            'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'token',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '撤销的token',
            'description' => '待撤销的token。',
            'type' => 'string',
            'required' => true,
            'example' => 'ATxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'token_type_hint',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'token类型',
            'description' => 'token类型，取值可选范围：
access_token
refresh\\_token',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'access_token' => 'access_token',
              'refresh_token' => 'refresh_token',
            ),
            'example' => 'access_token',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'RevokeResponse',
            'description' => '响应结果。',
            'type' => 'object',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"test\\": \\"test\\",\\n  \\"test2\\": 1\\n}","type":"json"}]',
      'title' => '吊销指定的token',
    ),
    'GetApplicationProvisioningScope' => 
    array (
      'summary' => '调用GetApplicationProvisioningScope接口，获取指定实例下对应应用的同步范围信息。',
      'path' => '/v2/{instanceId}/{applicationId}/provisioningScope',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => '	
Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '同步授权范围',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitIds' => 
              array (
                'title' => '机构ID列表',
                'description' => '组织ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织ID。',
                  'type' => 'string',
                  'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                ),
                'example' => '[ou_xxx001]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitIds\\": [\\n    \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取应用同步范围信息',
      'description' => '> - 同步范围在IDaaS控制台的应用管理中设置，创建应用之后，默认拥有此API的权限
',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 404  | application\\_not\\_found | Application id not found: app_001| 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'CreateOrganizationalUnit' => 
    array (
      'summary' => '调用CreateOrganizationalUnit接口，在指定组织下创建新组织资源。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitName' => 
              array (
                'title' => '机构名称',
                'description' => '组织名称，长度限制最长为64字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'name001',
              ),
              'parentId' => 
              array (
                'title' => '父机构ID',
                'description' => '父组织ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'organizationalUnitExternalId' => 
              array (
                'title' => '机构外部ID',
                'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID，长度限制最长为64字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'description' => 
              array (
                'title' => '描述',
                'description' => '组织描述，长度限制最长为128字符。',
                'type' => 'string',
                'required' => false,
                'example' => '测试组织',
              ),
            ),
            'required' => false,
            'example' => 'app_xx001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'OrganizationalUnitIdObject',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitId' => 
              array (
                'title' => '机构ID',
                'description' => '组织ID。',
                'type' => 'string',
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n}","type":"json"}]',
      'title' => '创建一个EIAM组织',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|
| 400  | MissingParameter.OrganizationalUnitName | The specified parameter:OrganizationalUnitName is required!  | 缺少组织名称参数|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx| 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'PatchOrganizationalUnit' => 
    array (
      'summary' => '调用PatchOrganizationalUnit接口，更新一个EIAM组织信息。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
      'methods' => 
      array (
        0 => 'patch',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'organizationalUnitId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机构ID',
            'description' => '组织ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitName' => 
              array (
                'title' => '机构名称',
                'description' => '组织名称，长度限制最长为64字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'name001',
              ),
              'description' => 
              array (
                'title' => '机构描述',
                'description' => '组织描述，长度限制最长为128字符。',
                'type' => 'string',
                'required' => false,
                'example' => '测试组织',
              ),
            ),
            'required' => false,
            'example' => 'ou_xxx001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新一个EIAM组织',
      'description' => '接口符合HTTP Patch方法语义，只修改传入的参数值，不传则默认不修改。',
      'responseParamsDescription' => '
> 成功则，默认返回http code为200
',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|
| 400  | ResourceDuplicated.OrganizationalUnitName | The specified OrganizationalUnitName resource: xxx already exist!  | 组织名称已存在|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetOrganizationalUnit' => 
    array (
      'summary' => '调用GetOrganizationalUnit接口，获取指定组织的详细信息。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'organizationalUnitId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机构ID',
            'description' => '组织ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DeveloperOrganizationalUnitDTO',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'instanceId' => 
              array (
                'title' => '实例ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
              ),
              'organizationalUnitId' => 
              array (
                'title' => '机构ID',
                'description' => '组织ID。',
                'type' => 'string',
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'organizationalUnitName' => 
              array (
                'title' => '机构名称',
                'description' => '组织名称。',
                'type' => 'string',
                'example' => 'name001',
              ),
              'parentId' => 
              array (
                'title' => '父机构ID',
                'description' => '父组织ID。',
                'type' => 'string',
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'organizationalUnitExternalId' => 
              array (
                'title' => '外部ID',
                'description' => '外部ID。',
                'type' => 'string',
                'example' => 'id_wovwffm62xifdziem7an7xxxxx',
              ),
              'organizationalUnitSourceType' => 
              array (
                'title' => '来源类型',
                'description' => '来源类型，取值可选范围：
- build_in - 自建。
- ding\\_talk - 钉钉导入。
- ad  -  AD导入。
- ldap  -  LDAP导入。',
                'type' => 'string',
                'example' => 'build_in',
              ),
              'organizationalUnitSourceId' => 
              array (
                'title' => '来源ID',
                'description' => '来源ID。',
                'type' => 'string',
                'example' => 'id_wovwffm62xifdziem7an7xxxxx',
              ),
              'createTime' => 
              array (
                'title' => '创建时间，毫秒',
                'description' => '创建时间，格式为Unix时间戳，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652083425923',
              ),
              'updateTime' => 
              array (
                'title' => '最近一次更新时间，毫秒',
                'description' => '最近更新时间，格式为Unix时间戳，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652083425923',
              ),
              'description' => 
              array (
                'title' => '描述',
                'description' => '描述。',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitName\\": \\"name001\\",\\n  \\"parentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitExternalId\\": \\"id_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"organizationalUnitSourceType\\": \\"build_in\\",\\n  \\"organizationalUnitSourceId\\": \\"id_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"createTime\\": 1652083425923,\\n  \\"updateTime\\": 1652083425923,\\n  \\"description\\": \\"xxxxx\\"\\n}","type":"json"}]',
      'title' => '查询一个EIAM组织信息',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'DeleteOrganizationalUnit' => 
    array (
      'summary' => '调用DeleteOrganizationalUnit接口，删除指定组织。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij
',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'organizationalUnitId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机构ID',
            'description' => '组织ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除一个EIAM组织',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内或不存在|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:manage_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'ListOrganizationalUnits' => 
    array (
      'summary' => '调用ListOrganizationalUnits接口，分页查询EIAM组织信息。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij
',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'parentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '父机构ID',
            'description' => '父组织ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码，默认1',
            'description' => '页码，默认1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '单页大小，默认20',
            'description' => '单页大小读取记录数，默认20，范围为1～100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'GeneralDataListResponse',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'title' => '记录总数',
                'description' => '数据总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'data' => 
              array (
                'description' => '返回数据对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'instanceId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ),
                    'organizationalUnitId' => 
                    array (
                      'title' => '机构ID',
                      'description' => '组织ID。',
                      'type' => 'string',
                      'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ),
                    'organizationalUnitName' => 
                    array (
                      'title' => '机构名称',
                      'description' => '组织名称。',
                      'type' => 'string',
                      'example' => 'name001',
                    ),
                    'parentId' => 
                    array (
                      'title' => '父机构ID',
                      'description' => '父组织ID。',
                      'type' => 'string',
                      'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ),
                    'organizationalUnitExternalId' => 
                    array (
                      'title' => '外部ID',
                      'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。

说明：外部ID在同一来源类型和来源ID下唯一。',
                      'type' => 'string',
                      'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ),
                    'organizationalUnitSourceType' => 
                    array (
                      'title' => '来源类型',
                      'description' => '组织来源类型，取值可选范围：
- build\\_in：自建。
- ding\\_talk：钉钉导入。
- ad：AD导入。
- ldap：LDAP导入。',
                      'type' => 'string',
                      'example' => 'build_in',
                    ),
                    'organizationalUnitSourceId' => 
                    array (
                      'title' => '来源ID',
                      'description' => '组织来源ID。

自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                      'type' => 'string',
                      'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ),
                    'createTime' => 
                    array (
                      'title' => '创建时间，毫秒',
                      'description' => '组织创建时间，Unix时间戳格式，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652083425923',
                    ),
                    'updateTime' => 
                    array (
                      'title' => '最近一次更新时间，毫秒',
                      'description' => '组织最近更新时间，Unix时间戳格式，单位为毫秒。

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652083425923',
                    ),
                    'description' => 
                    array (
                      'title' => '描述',
                      'description' => '组织描述。',
                      'type' => 'string',
                      'example' => '测试组织',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 1000,\\n  \\"data\\": [\\n    {\\n      \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitName\\": \\"name001\\",\\n      \\"parentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitExternalId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitSourceType\\": \\"build_in\\",\\n      \\"organizationalUnitSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"createTime\\": 1652083425923,\\n      \\"updateTime\\": 1652083425923,\\n      \\"description\\": \\"测试组织\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列表查询EIAM组织列表信息',
      'description' => '
',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'ListOrganizationalUnitParentIds' => 
    array (
      'summary' => '调用ListOrganizationalUnitParentIds接口，查询指定组织所有先代节点信息。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/{organizationalUnitId}/parentIds',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'organizationalUnitId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '机构ID',
            'description' => '组织ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '父机构列表响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'parentIds' => 
              array (
                'title' => '父机构ID列表，顺序层级从上到下',
                'description' => '先代组织ID列表，顺序层级从上到下，只展示在授权范围内的组织ID。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织ID。',
                  'type' => 'string',
                  'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                ),
                'example' => '[ou_xxx001]',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"parentIds\\": [\\n    \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n  ]\\n}","type":"json"}]',
      'title' => '列表查询组织先代节点',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不在同步范围内|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:organizational_unit:read_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetOrganizationalUnitIdByExternalId' => 
    array (
      'summary' => '调用GetOrganizationalUnitIdByExternalId接口，通过组织外部ID获取组织内部ID。',
      'path' => '/v2/{instanceId}/{applicationId}/organizationalUnits/_/actions/getOrganizationalUnitIdByExternalId',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij
',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitExternalId' => 
              array (
                'title' => '组织外部ID',
                'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。

说明：外部ID在同一来源类型和来源ID下唯一。',
                'type' => 'string',
                'required' => true,
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'organizationalUnitSourceType' => 
              array (
                'title' => '组织来源类型, 取值可选范围： build_in(自建), ding_talk(钉钉导入),ad(AD导入),ldap(LDAP导入)',
                'description' => '组织来源类型，取值可选范围：
- build\\_in：自建。
- ding\\_talk：钉钉导入。
- ad：AD导入。
- ldap：LDAP导入。',
                'type' => 'string',
                'required' => true,
                'example' => 'build_in',
              ),
              'organizationalUnitSourceId' => 
              array (
                'title' => '组织来源ID,自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId',
                'description' => '组织来源ID。

自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                'type' => 'string',
                'required' => true,
                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
              ),
            ),
            'required' => false,
            'example' => 'xxx001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'OrganizationalUnitIdObject',
            'description' => 'OrganizationalUnitIdObject',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitId' => 
              array (
                'title' => '机构ID',
                'description' => '组织ID。',
                'type' => 'string',
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n}","type":"json"}]',
      'title' => '通过组织外部ID获取组织ID',
    ),
    'CreateUser' => 
    array (
      'summary' => '调用CreateUser接口在指定组织下，创建新的EIAM的账户资源。',
      'path' => '/v2/{instanceId}/{applicationId}/users',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'username' => 
              array (
                'title' => '账户名称。',
                'description' => '账户名称，可包含英文字母、数字、符号“_” 、“ .”、“@”、“-”，长度最大限制64字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'name001',
              ),
              'displayName' => 
              array (
                'title' => '账户展示名。',
                'description' => '账户展示名。长度限制最长为64字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'display_name001',
              ),
              'password' => 
              array (
                'title' => '密码, 参考密码策略',
                'description' => '账户密码，密码规则参考IDaaS控制台密码策略。',
                'type' => 'string',
                'required' => false,
                'example' => 'xxxxx',
              ),
              'phoneRegion' => 
              array (
                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填。',
                'type' => 'string',
                'required' => false,
                'example' => '86',
              ),
              'phoneNumber' => 
              array (
                'title' => '手机号',
                'description' => '账户手机号，格式为6～15位数字。',
                'type' => 'string',
                'required' => false,
                'example' => '156xxxxxxx',
              ),
              'phoneNumberVerified' => 
              array (
                'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                'description' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'email' => 
              array (
                'title' => '邮箱',
                'description' => '邮箱，邮箱前缀可包含大写英文字母、小写英文字母、数字、点、下划线或中划线，长度限制最长为64字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'example@example.com',
              ),
              'emailVerified' => 
              array (
                'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                'description' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'userExternalId' => 
              array (
                'title' => '账户外部ID',
                'description' => '账户外部ID，用于与外部系统的关联，最大长度限制64字符，若不设置，默认设置为账户ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
              'primaryOrganizationalUnitId' => 
              array (
                'title' => '账户主机构ID',
                'description' => '主组织ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'description' => 
              array (
                'title' => '描述',
                'description' => '账户描述，长度限制最长为256字符。',
                'type' => 'string',
                'required' => false,
                'example' => '测试账户',
              ),
              'passwordInitializationConfig' => 
              array (
                'title' => '密码初始化配置',
                'description' => '密码初始化配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'passwordInitializationPolicyPriority' => 
                  array (
                    'title' => '密码初始化策略优先级，不传不生效。枚举取值:global(全局优先)、custom(自定义优先)',
                    'description' => '密码初始化策略优先级，默认不生效，取值可选范围：
- global：全局优先，采用实例级别的密码初始化策略，即本次设置的密码初始化策略均无效，参考密码相关策略的密码初始化策略。
- custom：自定义优先，以当前定义的密码初始化策略为准，包括是否开启强制改密、密码初始化方式以及通知渠道。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'global',
                  ),
                  'passwordForcedUpdateStatus' => 
                  array (
                    'title' => '强制修改密码状态,默认不启用。枚举取值:enabled(开启)、disabled(禁用)',
                    'description' => '强制修改密码状态,默认不启用，取值可选范围：
- enabled：开启。
- disabled：禁用。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'enabled',
                  ),
                  'userNotificationChannels' => 
                  array (
                    'title' => '密码通知渠道。枚举取值:email(邮件)、sms(短信)',
                    'description' => '密码通知渠道，取值可选范围：
- email：邮件。
- sms：短信。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '密码通知渠道。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'email',
                    ),
                    'required' => false,
                    'example' => 'sms',
                  ),
                  'passwordInitializationType' => 
                  array (
                    'title' => '密码初始化方式。枚举取值:random(随机)',
                    'description' => '密码初始化方式，取值可选范围：
- random：随机。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'random',
                  ),
                ),
                'required' => false,
              ),
              'customFields' => 
              array (
                'title' => '扩展字段列表',
                'description' => '账户扩展字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '扩展字段标识和值对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'fieldName' => 
                    array (
                      'title' => '扩展字段标识',
                      'description' => '扩展字段标识。类型和值域可通过控制台查看对应扩展字段值的详细信息。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'age',
                    ),
                    'fieldValue' => 
                    array (
                      'title' => '扩展字段值',
                      'description' => '扩展字段值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'fieldValue_001',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => 'app_xx001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '调用CreateUser接口在指定组织下，创建新的EIAM的账户资源',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'userId' => 
              array (
                'title' => '账户ID。',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
      'title' => '创建一个EIAM账户',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid_token | Access token is not valid  | token无效|
| 400  | invalid_request | Access token application id not match  | 请求无效，token信息与参数应用ID不一致|
| 400  | OrganizationUnitIdNotInScopes | organizationUnitId : ou_wovwffm62xifdziem7an7xxxxx not in provisioning scope!  | 组织不存在或组织不在同步范围内|
| 404  | instance\\_not\\_found | Instance id not found: idaas_ue2jvisn35ea5lmthk267xxxxx | 实例不存在 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 400  | MissingParameter.Username | The specified parameter:Username is required!  | 缺少账户名参数 |
| 400  | MissingParameter.PhoneRegion | The specified parameter:PhoneRegion is required!  | 缺少手机区号参数，若已设置手机号，此为必填项 |
| 400  | MissingParameter.PhoneNumberVerified | The specified parameter:PhoneRegion is required!  | 缺少手机区号是否已验证参数，若已设置手机号，此为必填项 |
| 400  | MissingParameter.Email | The specified parameter:Email is required!  | 缺少邮箱是否已验证参数，若已设置邮箱，此为必填项 |
| 400  | MissingParameter.Username | The specified parameter:Username is required!  | 缺少账户名参数 |
| 400  | MissingParameter.PrimaryOrganizationalUnitId | The specified parameter:PrimaryOrganizationalUnitId is required!  | 缺少主组织参数 |
| 400  | InvalidParameter.PhoneNumber | The specified parameter:PhoneNumber is invalid.  | 无效的手机号 |
| 400  | InvalidParameter.PhoneRegion | The specified parameter:PhoneRegion is invalid.  | 无效的手机区号 |
| 400  | InvalidParameter.Password | The specified parameter:Password is invalid.  | 密码不符合规则，请参考IDaaS控制台密码规则 |
| 400  | InvalidParameter.Email | The specified parameter:Email is invalid.  | 无效的邮箱 |
| 400  | InvalidParameter.DisplayName | The specified parameter:DisplayName is invalid.  | 账户显示名过长 |
| 400  | InvalidParameter.Description | The specified parameter:Description is invalid.  | 账户描述过长 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'PatchUser' => 
    array (
      'summary' => '调用PatchUser接口，更新一个EIAM账户信息。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
      'methods' => 
      array (
        0 => 'patch',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'username' => 
              array (
                'title' => '账户名',
                'description' => '账户名。',
                'type' => 'string',
                'required' => false,
                'example' => 'name001',
              ),
              'displayName' => 
              array (
                'title' => '账户展示名',
                'description' => '账户展示名。',
                'type' => 'string',
                'required' => false,
                'example' => 'display_name001',
              ),
              'phoneRegion' => 
              array (
                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填。',
                'type' => 'string',
                'required' => false,
                'example' => '86',
              ),
              'phoneNumber' => 
              array (
                'title' => '手机号',
                'description' => '账户手机号。',
                'type' => 'string',
                'required' => false,
                'example' => '156xxxxxxx',
              ),
              'phoneNumberVerified' => 
              array (
                'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                'description' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'email' => 
              array (
                'title' => '邮箱',
                'description' => '账户邮箱。',
                'type' => 'string',
                'required' => false,
                'example' => 'example@example.com',
              ),
              'emailVerified' => 
              array (
                'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                'description' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'customFields' => 
              array (
                'title' => '扩展字段列表',
                'description' => '账户扩展字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '扩展字段更新操作对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'operator' => 
                    array (
                      'description' => '字段操作类型，已废弃，请采用operation替换使用。',
                      'type' => 'string',
                      'deprecated' => true,
                      'required' => false,
                      'example' => 'replace',
                    ),
                    'fieldName' => 
                    array (
                      'title' => '扩展字段标识',
                      'description' => '扩展字段标识，类型和值域可通过控制台查看对应扩展字段值的详细信息。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'age',
                    ),
                    'fieldValue' => 
                    array (
                      'title' => '扩展字段值',
                      'description' => '扩展字段值。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'test_value',
                    ),
                    'operation' => 
                    array (
                      'description' => '字段操作类型，取值可选范围：
- add：添加。
- replace：替换。若对应扩展字段无设置值，会转换为add操作。
- remove：移除。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'replace',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
            ),
            'required' => false,
            'example' => 'user_001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新一个EIAM账户信息',
      'description' => '接口符合HTTP Patch方法语义，只修改传入的参数值，不传则默认不修改。',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | MissingParameter.xxxx | The specified parameter:xxx is required!  | 缺少xxxx参数 |
| 400  | InvalidParameter.xxxx | The specified parameter:xxxx is required!  | xxxx参数无效 |
| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetUser' => 
    array (
      'summary' => '调用GetUser接口，查询一个EIAM账户详细信息。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'DeveloperUserDetailDTO',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'instanceId' => 
              array (
                'title' => '实例ID',
                'description' => '实例ID。',
                'type' => 'string',
                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
              ),
              'organizationalUnits' => 
              array (
                'title' => '账户所属组织列表',
                'description' => '账户所属组织列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'organizationalUnitId' => 
                    array (
                      'title' => '机构ID',
                      'description' => '组织ID。',
                      'type' => 'string',
                      'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ),
                    'organizationalUnitName' => 
                    array (
                      'title' => '机构名称',
                      'description' => '组织名称。',
                      'type' => 'string',
                      'example' => 'name001',
                    ),
                    'primary' => 
                    array (
                      'title' => '是否主机构',
                      'description' => '是否主组织。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                  ),
                ),
              ),
              'primaryOrganizationalUnitId' => 
              array (
                'title' => '账户主机构ID',
                'description' => '账户主组织ID。',
                'type' => 'string',
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
              ),
              'customFields' => 
              array (
                'title' => '账户扩展字段列表',
                'description' => '账户扩展字段列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '扩展字段数据对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'fieldName' => 
                    array (
                      'title' => '字段标识',
                      'description' => '扩展字段标识。',
                      'type' => 'string',
                      'example' => 'xxxx',
                    ),
                    'fieldValue' => 
                    array (
                      'title' => '字段数据值',
                      'description' => '字段数据值。
任何数据类型的字段值均以字符串的方式返回。比如布尔类型返回的值为"true"或"false"',
                      'type' => 'string',
                      'example' => '字段数据值',
                    ),
                  ),
                ),
              ),
              'userId' => 
              array (
                'title' => '账户ID',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
              'username' => 
              array (
                'title' => '账户名',
                'description' => '账户名。',
                'type' => 'string',
                'example' => 'name001',
              ),
              'displayName' => 
              array (
                'title' => '显示名',
                'description' => '账户显示名。',
                'type' => 'string',
                'example' => 'display_name001',
              ),
              'passwordSet' => 
              array (
                'title' => '密码是否已设置',
                'description' => '密码是否已设置。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'phoneRegion' => 
              array (
                'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +',
                'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                'type' => 'string',
                'example' => '86',
              ),
              'phoneNumber' => 
              array (
                'title' => '手机号',
                'description' => '账户手机号。',
                'type' => 'string',
                'example' => '156xxxxxxx',
              ),
              'phoneNumberVerified' => 
              array (
                'title' => '手机号是否验证',
                'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'email' => 
              array (
                'title' => '邮箱',
                'description' => '邮箱。',
                'type' => 'string',
                'example' => 'example@example.com',
              ),
              'emailVerified' => 
              array (
                'title' => '邮箱是否验证',
                'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'userExternalId' => 
              array (
                'title' => '外部ID',
                'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。

说明：外部ID在同一来源类型和来源ID下唯一。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
              'userSourceType' => 
              array (
                'title' => '来源类型，build_in[自建],ding_talk[钉钉导入],ad[AD导入],ldap[LDAP导入]',
                'description' => '账户来源类型，取值可选范围：
- build_in：自建。
- ding_talk：钉钉导入。
- ad：AD导入。
- ldap：LDAP导入',
                'type' => 'string',
                'example' => 'build_in',
              ),
              'userSourceId' => 
              array (
                'title' => '来源ID',
                'description' => '账户来源ID。

自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                'type' => 'string',
                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
              ),
              'status' => 
              array (
                'title' => '账户状态, enabled:启用,disabled:禁用',
                'description' => '账户状态，取值可选范围：
enabled - 启用中。
disabled - 禁用中。',
                'type' => 'string',
                'example' => 'enabled',
              ),
              'accountExpireTime' => 
              array (
                'title' => '账户过期时间, 毫秒时间',
                'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652085686179',
              ),
              'registerTime' => 
              array (
                'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652085686179',
              ),
              'lockExpireTime' => 
              array (
                'title' => '锁定过期时间, 毫秒时间',
                'description' => '账户锁定过期时间，Unix时间戳格式，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652085686179',
              ),
              'createTime' => 
              array (
                'title' => '创建时间, 毫秒时间',
                'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652085686179',
              ),
              'updateTime' => 
              array (
                'title' => '最近一次更新时间, 毫秒时间',
                'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1652085686179',
              ),
              'description' => 
              array (
                'title' => '账号描述',
                'description' => '账户描述。',
                'type' => 'string',
                'example' => '测试账户',
              ),
              'groups' => 
              array (
                'title' => '账户所属组列表',
                'description' => '账户所属组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '账户所属组对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'groupId' => 
                    array (
                      'title' => '组ID。',
                      'description' => '组ID。',
                      'type' => 'string',
                      'example' => 'group_ufdsasn35ea5lmthk267xxxxx',
                    ),
                    'groupName' => 
                    array (
                      'title' => '组名称。',
                      'description' => '组名称。',
                      'type' => 'string',
                      'example' => 'name_test',
                    ),
                    'description' => 
                    array (
                      'title' => '组描述。',
                      'description' => '组描述。',
                      'type' => 'string',
                      'example' => 'description_demo',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"organizationalUnits\\": [\\n    {\\n      \\"organizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"organizationalUnitName\\": \\"name001\\",\\n      \\"primary\\": true\\n    }\\n  ],\\n  \\"primaryOrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n  \\"customFields\\": [\\n    {\\n      \\"fieldName\\": \\"xxxx\\",\\n      \\"fieldValue\\": \\"字段数据值\\"\\n    }\\n  ],\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n  \\"username\\": \\"name001\\",\\n  \\"displayName\\": \\"display_name001\\",\\n  \\"passwordSet\\": true,\\n  \\"phoneRegion\\": \\"86\\",\\n  \\"phoneNumber\\": \\"156xxxxxxx\\",\\n  \\"phoneNumberVerified\\": true,\\n  \\"email\\": \\"example@example.com\\",\\n  \\"emailVerified\\": true,\\n  \\"userExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n  \\"userSourceType\\": \\"build_in\\",\\n  \\"userSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n  \\"status\\": \\"enabled\\",\\n  \\"accountExpireTime\\": 1652085686179,\\n  \\"registerTime\\": 1652085686179,\\n  \\"lockExpireTime\\": 1652085686179,\\n  \\"createTime\\": 1652085686179,\\n  \\"updateTime\\": 1652085686179,\\n  \\"description\\": \\"测试账户\\",\\n  \\"groups\\": [\\n    {\\n      \\"groupId\\": \\"group_ufdsasn35ea5lmthk267xxxxx\\",\\n      \\"groupName\\": \\"name_test\\",\\n      \\"description\\": \\"description_demo\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询一个EIAM账户详细信息',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 400  | MissingParameter.xxxx | The specified parameter:xxx is required!  | 缺少xxxx参数 |
| 400  | InvalidParameter.xxxx | The specified parameter:xxxx is required!  | xxxx参数无效 |
| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'UpdateUserPassword' => 
    array (
      'summary' => '更新指定EIAM账户的密码信息。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/updateUserPassword',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'password' => 
              array (
                'title' => '密码',
                'description' => '新密码，相关规则参考控制台密码策略说明。',
                'type' => 'string',
                'required' => false,
                'example' => 'xxxx',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '更新一个EIAM账户的密码',
    ),
    'DeleteUser' => 
    array (
      'summary' => '调用DeleteUser接口，删除一个EIAM账户信息。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}',
      'methods' => 
      array (
        0 => 'delete',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除一个EIAM账户',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 404  | ResourceNotFound.User | The specified User resource: user_d6sbsuumeta4h66ec3il7yxxxx not found.  | 账户不存在 |
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'ListUsers' => 
    array (
      'summary' => '调用ListUsers接口，分页查询EIAM账户信息。',
      'path' => '/v2/{instanceId}/{applicationId}/users',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'organizationalUnitId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '机构ID',
            'description' => '组织ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码，默认1',
            'description' => '页码，默认1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '单页大小，默认20',
            'description' => '单页大小读取记录数，默认20，范围为1～100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '查询账户列表响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'totalCount' => 
              array (
                'title' => '记录总数',
                'description' => '数据总记录数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1000',
              ),
              'data' => 
              array (
                'description' => '返回数据对象列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '返回数据对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'instanceId' => 
                    array (
                      'title' => '实例ID',
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ),
                    'userId' => 
                    array (
                      'title' => '账户ID',
                      'description' => '账户ID。',
                      'type' => 'string',
                      'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ),
                    'username' => 
                    array (
                      'title' => '账户名',
                      'description' => '账户名。',
                      'type' => 'string',
                      'example' => 'name001',
                    ),
                    'displayName' => 
                    array (
                      'title' => '显示名',
                      'description' => '账户显示名。',
                      'type' => 'string',
                      'example' => 'display_name001',
                    ),
                    'passwordSet' => 
                    array (
                      'title' => '密码是否已设置',
                      'description' => '密码是否已设置',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'phoneRegion' => 
                    array (
                      'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +',
                      'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                      'type' => 'string',
                      'example' => '86',
                    ),
                    'phoneNumber' => 
                    array (
                      'title' => '手机号',
                      'description' => '账户手机号。',
                      'type' => 'string',
                      'example' => '156xxxxxxx',
                    ),
                    'phoneNumberVerified' => 
                    array (
                      'title' => '手机号是否验证',
                      'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'email' => 
                    array (
                      'title' => '邮箱',
                      'description' => '账户邮箱。',
                      'type' => 'string',
                      'example' => 'example@example.com',
                    ),
                    'emailVerified' => 
                    array (
                      'title' => '邮箱是否验证',
                      'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'userExternalId' => 
                    array (
                      'title' => '外部ID',
                      'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。

说明：外部ID在同一来源类型和来源ID下唯一。',
                      'type' => 'string',
                      'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ),
                    'userSourceType' => 
                    array (
                      'title' => '来源类型，build_in[自建],ding_talk[钉钉导入],ad[AD导入],ldap[LDAP导入]',
                      'description' => '账户来源类型，取值可选范围：
- build_in：自建。
- ding_talk：钉钉导入。
- ad：AD导入。
- ldap：LDAP导入',
                      'type' => 'string',
                      'example' => 'build_in',
                    ),
                    'userSourceId' => 
                    array (
                      'title' => '来源ID',
                      'description' => '账户来源ID。

自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                      'type' => 'string',
                      'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                    ),
                    'status' => 
                    array (
                      'title' => '账户状态, enabled:启用,disabled:禁用',
                      'description' => '账户状态，取值可选范围：
enabled - 启用中。
disabled - 禁用中。',
                      'type' => 'string',
                      'example' => 'enabled',
                    ),
                    'accountExpireTime' => 
                    array (
                      'title' => '账户过期时间, 毫秒时间',
                      'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652085686179',
                    ),
                    'registerTime' => 
                    array (
                      'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652085686179',
                    ),
                    'lockExpireTime' => 
                    array (
                      'title' => '锁定过期时间, 毫秒时间',
                      'description' => '账户锁定过期时间，Unix时间戳格式，单位为毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652085686179',
                    ),
                    'createTime' => 
                    array (
                      'title' => '创建时间, 毫秒时间',
                      'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652085686179',
                    ),
                    'updateTime' => 
                    array (
                      'title' => '最近一次更新时间, 毫秒时间',
                      'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。

',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1652085686179',
                    ),
                    'description' => 
                    array (
                      'title' => '账号描述',
                      'description' => '账户描述。',
                      'type' => 'string',
                      'example' => '测试账户',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"totalCount\\": 1000,\\n  \\"data\\": [\\n    {\\n      \\"instanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"username\\": \\"name001\\",\\n      \\"displayName\\": \\"display_name001\\",\\n      \\"passwordSet\\": true,\\n      \\"phoneRegion\\": \\"86\\",\\n      \\"phoneNumber\\": \\"156xxxxxxx\\",\\n      \\"phoneNumberVerified\\": true,\\n      \\"email\\": \\"example@example.com\\",\\n      \\"emailVerified\\": true,\\n      \\"userExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"userSourceType\\": \\"build_in\\",\\n      \\"userSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"status\\": \\"enabled\\",\\n      \\"accountExpireTime\\": 1652085686179,\\n      \\"registerTime\\": 1652085686179,\\n      \\"lockExpireTime\\": 1652085686179,\\n      \\"createTime\\": 1652085686179,\\n      \\"updateTime\\": 1652085686179,\\n      \\"description\\": \\"测试账户\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '列表查询EIAM账户',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid\\_token | Access token is not valid  | token无效|
| 404  | application\\_not\\_found | Application id not found: app\\_001| 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:read\\_all] | 缺少API授权信息 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'EnableUser' => 
    array (
      'summary' => '调用EnableUser接口，启用指定的EIAM账户。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/enable',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID',
            'type' => 'string',
            'required' => true,
            'example' => 'user_001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '启用一个EIAM账户',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400 | invalid_token | Access token is not valid | 
| 404 | ResourceNotFound.User | The specified User resource: user_xxxx not found. | 
| 404 | application_not_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 
| 403 | application_disabled | Application is disabled | 
| 403 | application_api_disabled | Application api invoke disabled | 
| 403 | permission_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 
| 500 | Internal Server Error | Internal Server Error |',
    ),
    'DisableUser' => 
    array (
      'summary' => '调用DisableUser接口，禁用指定的EIAM账户。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/disable',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID',
            'type' => 'string',
            'required' => true,
            'example' => 'user_001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '禁用一个EIAM账户',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400 | invalid_token | Access token is not valid | 
| 404 | ResourceNotFound.User | The specified User resource: user_xxxx not found. | 
| 404 | application_not_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 
| 403 | application_disabled | Application is disabled | 
| 403 | application_api_disabled | Application api invoke disabled | 
| 403 | permission_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 
| 500 | Internal Server Error | Internal Server Error |',
    ),
    'GetUserIdByEmail' => 
    array (
      'summary' => '调用GetUserIdByEmail接口，通过邮箱获取EIAM对应账户ID。',
      'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByEmail',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'email' => 
              array (
                'title' => '邮箱',
                'description' => '账户邮箱。',
                'type' => 'string',
                'required' => true,
                'example' => 'example@example.com',
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
            'title' => '响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'userId' => 
              array (
                'title' => '账户ID',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
      'title' => '通过邮箱获取EIAM账户ID',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid_token | Access token is not valid  | token无效|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 400  | MissingParameter.Email | The specified parameter: Email is required!  | 缺少Email参数 |
| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetUserIdByPhoneNumber' => 
    array (
      'summary' => '调用GetUserIdByPhoneNumber接口，通过手机号获取EIAM对应账户ID。',
      'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByPhoneNumber',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij
',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'phoneNumber' => 
              array (
                'title' => '手机号',
                'description' => '账户手机号。',
                'type' => 'string',
                'required' => true,
                'example' => '156xxxxxxx',
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
            'title' => '响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'userId' => 
              array (
                'title' => '账户ID',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
      'title' => '通过手机号获取EIAM账户ID',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid_token | Access token is not valid  | token无效|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 400  | MissingParameter.PhoneNumber| The specified parameter: PhoneNumber is required!  | 缺少Email参数 |
| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetUserIdByUserExternalId' => 
    array (
      'summary' => '调用GetUserIdByUserExternalId接口，通过账户外部ID获取EIAM账户ID。',
      'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByExternalId',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息，格式:Bearer access_token',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer AT8csE2seYxxxxxij',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID',
            'description' => '应用ID',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'userExternalId' => 
              array (
                'title' => '账户外部ID',
                'description' => '账户外部ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'xxx001',
              ),
              'userSourceType' => 
              array (
                'title' => '账户来源类型, 取值可选范围： build_in(自建), ding_talk(钉钉导入),ad(AD导入),ldap(LDAP导入)',
                'description' => '账户来源类型，取值可选范围：
- build_in：自建。
- ding_talk：钉钉导入。
- ad：AD导入。
- ldap：LDAP导入',
                'type' => 'string',
                'required' => true,
                'example' => 'build_in',
              ),
              'userSourceId' => 
              array (
                'title' => '账户来源ID,自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId',
                'description' => '账户来源ID。
自建类型(build_in)值为实例ID，非自建类型，为对应企业ID，比如钉钉，对应的corpId。',
                'type' => 'string',
                'required' => true,
                'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
            'title' => '响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'userId' => 
              array (
                'title' => '账户ID',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
      'title' => '通过账户外部ID获取EIAM账户ID',
      'extraInfo' => '### 错误码
|  HttpCode   | Error Code  | 错误信息 | 说明 |
|  ----  | ----  | ----  | ----  |
| 400  | invalid_token | Access token is not valid  | token无效|
| 404  | application\\_not\\_found | Application id not found: app_mkv7rgt4d7i4u7zqtzev2mxxxx | 应用不存在 |
| 403  | application\\_disabled | Application is disabled| 应用处于禁用状态 |
| 403  | application\\_api\\_disabled | Application api invoke disabled| 应用API未开放 |
| 403  | permission\\_denied | Require scopes: [urn:alibaba:idaas:scope:user:manager_all] | 缺少API授权信息 |
| 400  | MissingParameter.UserExternalId | The specified parameter: UserExternalId is required!  | 缺少UserExternalId参数 |
| 400  | MissingParameter.UserSourceType | The specified parameter: UserSourceType is required!  | 缺少UserSourceType参数 |
| 400  | MissingParameter.UserSourceId | The specified parameter: UserSourceId is required!  | 缺少UserSourceId参数 |
| 400  | ResourceNotFound.UserId| The specified UserId resource: %s not found.  | 账户ID不存在 |
| 500  | Internal Server Error | Internal Server Error  | 服务器内部错误|',
    ),
    'GetUserIdByUsername' => 
    array (
      'summary' => '调用GetUserIdByUsername接口，通过账户名获取EIAM对应账户ID。',
      'path' => '/v2/{instanceId}/{applicationId}/users/_/actions/getUserIdByUsername',
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
          'Anonymous' => 
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
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'username' => 
              array (
                'title' => '账户名。',
                'description' => '账户名。',
                'type' => 'string',
                'required' => true,
                'example' => 'username_001',
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
            'title' => '响应结果',
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'userId' => 
              array (
                'title' => '账户ID。',
                'description' => '账户ID。',
                'type' => 'string',
                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"userId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
      'title' => '通过账户名获取EIAM账户ID',
    ),
    'SetUserPrimaryOrganizationalUnit' => 
    array (
      'summary' => '设置一个EIAM账户的所属主组织，账户会从旧主组织移除，并加入到新的组织下。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/setUserPrimaryOrganizationalUnit',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitId' => 
              array (
                'title' => '主组织ID。',
                'description' => '主组织ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '设置一个EIAM账户所属主组织',
    ),
    'AddUserToOrganizationalUnits' => 
    array (
      'summary' => '将一个EIAM账户加入到多个EIAM组织中，这些组织作为账户的从属组织，如果账户已属于相关组织，则不做更新。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/addUserToOrganizationalUnits',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitIds' => 
              array (
                'title' => '组织ID列表。',
                'description' => '组织ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                ),
                'required' => true,
                'example' => '[ou_wovwffm62xifdziem7an7xxxxx]',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '将一个EIAM账户加入到多个EIAM组织中',
    ),
    'RemoveUserFromOrganizationalUnits' => 
    array (
      'summary' => '将一个EIAM账户从多个EIAM组织中移除，如果账户已不属于这些组织，则默认成功。',
      'path' => '/v2/{instanceId}/{applicationId}/users/{userId}/actions/removeUserFromOrganizationalUnits',
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
          'Anonymous' => 
          array (
          ),
        ),
      ),
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Authorization',
          'in' => 'header',
          'schema' => 
          array (
            'title' => '认证信息。
格式:Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'description' => '认证信息。
格式：Bearer ${access_token}。
示例：Bearer ATxxxx。',
            'type' => 'string',
            'required' => true,
            'example' => 'Bearer xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'instanceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '实例ID。',
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'applicationId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '应用ID。',
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'userId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '账户ID',
            'description' => '账户ID',
            'type' => 'string',
            'required' => true,
            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'organizationalUnitIds' => 
              array (
                'title' => '组织ID列表。',
                'description' => '组织ID列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                ),
                'required' => true,
                'example' => '[ou_wovwffm62xifdziem7an7xxxxx]',
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
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '将一个EIAM账户从多个EIAM组织中移除',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'eiam-developerapi.cn-hangzhou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eiam-developerapi.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
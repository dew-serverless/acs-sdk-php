<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eds-user',
    'version' => '2021-03-08',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 165074,
      'title' => '用户',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateUsers',
        1 => 'RemoveUsers',
        2 => 'ModifyUser',
        3 => 'ResetUserPassword',
        4 => 'LockUsers',
        5 => 'UnlockUsers',
        6 => 'DescribeUsers',
        7 => 'FilterUsers',
        8 => 'GetManagerInfoByAuthCode',
      ),
    ),
    1 => 
    array (
      'id' => 165068,
      'title' => '用户属性',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProperty',
        1 => 'RemoveProperty',
        2 => 'DeleteUserPropertyValue',
        3 => 'UpdateProperty',
        4 => 'SetUserPropertyValue',
        5 => 'ListProperty',
        6 => 'ListPropertyValue',
        7 => 'CheckUsedProperty',
        8 => 'CheckUsedPropertyValue',
      ),
    ),
    2 => 
    array (
      'id' => 188957,
      'title' => '组织',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeOrgs',
      ),
    ),
    3 => 
    array (
      'id' => 165058,
      'title' => 'MFA设备',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RemoveMfaDevice',
        1 => 'LockMfaDevice',
        2 => 'UnlockMfaDevice',
        3 => 'DescribeMfaDevices',
      ),
    ),
    4 => 
    array (
      'id' => 168203,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'SyncAllEduInfo',
        1 => 'QuerySyncStatusByAliUid',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'GroupResources' => 
      array (
        'title' => 'A short description of struct',
        'description' => '资源组中的资源元数据',
        'type' => 'object',
        'properties' => 
        array (
          'Region' => 
          array (
            'title' => 'Region',
            'type' => 'string',
          ),
          'ResourceType' => 
          array (
            'title' => 'ResourceType',
            'type' => 'string',
          ),
          'ResourceId' => 
          array (
            'title' => 'ResourceId',
            'type' => 'string',
          ),
        ),
      ),
      'WaIdPermissions' => 
      array (
        'title' => 'permission',
        'type' => 'object',
        'properties' => 
        array (
          'Name' => 
          array (
            'title' => 'name',
            'type' => 'string',
          ),
          'Type' => 
          array (
            'title' => 'type',
            'type' => 'string',
          ),
          'Code' => 
          array (
            'title' => 'code',
            'type' => 'string',
          ),
          'SubPermissions' => 
          array (
            'title' => 'subPermissions',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/WaIdPermissions',
            ),
          ),
          'IsBasicChild' => 
          array (
            'title' => 'basic',
            'type' => 'boolean',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateUsers' => 
    array (
      'summary' => '为终端用户创建便捷账号。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '便捷账号信息。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '便捷账号信息。',
              'type' => 'object',
              'properties' => 
              array (
                'EndUserId' => 
                array (
                  'description' => '用户名。自定义设置，由小写字母、数字和下划线组成，长度为3~24个字符。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'alice',
                ),
                'Email' => 
                array (
                  'description' => '邮箱。用于接收相关邮件，如分配云电脑的通知邮件。邮箱和手机号二选一必填。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'username@example.com',
                ),
                'Phone' => 
                array (
                  'description' => '<props="china">手机号。用于接收相关短信，如分配云电脑的通知短信。邮箱和手机号二选一必填。</props>

<props="intl">国际站不支持手机号。</props>',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1381111****',
                ),
                'Password' => 
                array (
                  'description' => '用户密码。

> 密码长度不少于10位，且至少包含大写字母、小写字母、数字、特殊字符（除空格）中的任意三种。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Wuying1234',
                ),
                'OwnerType' => 
                array (
                  'description' => '账号激活类型。',
                  'type' => 'string',
                  'required' => false,
                  'enumValueTitles' => 
                  array (
                    'CreateFromManager' => '管理员激活',
                    'Normal' => '用户激活',
                  ),
                  'example' => 'Normal',
                ),
                'OrgId' => 
                array (
                  'description' => '用户所属的组织。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'design',
                ),
                'Remark' => 
                array (
                  'description' => '用户备注。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'remark1',
                ),
                'RealNickName' => 
                array (
                  'description' => '用户的显示名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Bean',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'example' => 'CreateUsers',
            'maxItems' => 20,
          ),
        ),
        1 => 
        array (
          'name' => 'Password',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '初始密码。如果不设置，将发送重置密码邮件到用户邮箱。',
            'type' => 'string',
            'required' => false,
            'example' => 'Test123****',
            'maxLength' => 256,
          ),
        ),
        2 => 
        array (
          'name' => 'AutoLockTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动锁定账号的日期。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-03',
          ),
        ),
        3 => 
        array (
          'name' => 'IsLocalAdmin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否将该便捷账号设为本地管理员。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        4 => 
        array (
          'name' => 'PasswordExpireDays',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户账号的密码默认为永久有效，可通过此参数设置30\\~365天的密码有效期，当密码到期后，终端用户必须先修改密码才能继续登录。

> 该功能目前处于邀测中，如需体验，请提交工单申请开通。',
            'type' => 'string',
            'required' => false,
            'example' => '30',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'CreateResult' => 
              array (
                'description' => '创建便捷账号操作的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CreatedUsers' => 
                  array (
                    'description' => '创建成功的便捷账号信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建成功的便捷账号信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'test1',
                        ),
                        'Email' => 
                        array (
                          'description' => '邮箱。',
                          'type' => 'string',
                          'example' => 'username@example.com',
                        ),
                        'Phone' => 
                        array (
                          'description' => '手机号。',
                          'type' => 'string',
                          'example' => '1381111****',
                        ),
                        'Remark' => 
                        array (
                          'description' => '用户备注。',
                          'type' => 'string',
                          'example' => 'remark1',
                        ),
                        'RealNickName' => 
                        array (
                          'description' => '用户的显示名。',
                          'type' => 'string',
                          'example' => 'Bean',
                        ),
                      ),
                    ),
                  ),
                  'FailedUsers' => 
                  array (
                    'description' => '创建失败的便捷账号信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '创建失败的便捷账号信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '用户名。',
                          'type' => 'string',
                          'example' => 'test2',
                        ),
                        'Email' => 
                        array (
                          'description' => '邮箱。',
                          'type' => 'string',
                          'example' => 'username2@example.com',
                        ),
                        'Phone' => 
                        array (
                          'description' => '手机号。',
                          'type' => 'string',
                          'example' => '1390000****',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'ExistedEndUserId',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'The username test is used by another user.',
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
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'INTERNAL_ERROR',
            'errorMessage' => 'Internal error.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"CreateResult\\": {\\n    \\"CreatedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test1\\",\\n        \\"Email\\": \\"username@example.com\\",\\n        \\"Phone\\": \\"1381111****\\",\\n        \\"Remark\\": \\"remark1\\",\\n        \\"RealNickName\\": \\"Bean\\"\\n      }\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test2\\",\\n        \\"Email\\": \\"username2@example.com\\",\\n        \\"Phone\\": \\"1390000****\\",\\n        \\"ErrorCode\\": \\"ExistedEndUserId\\",\\n        \\"ErrorMessage\\": \\"The username test is used by another user.\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '创建便捷账号',
      'description' => '<props="china">便捷账号是无影专用的账号体系，适用于不希望对接企业AD的简单场景。便捷账号信息包括用户名、邮箱和手机号。其中，用户名为必填信息，邮箱和手机号至少填写一项。</props>

<props="intl">便捷账号是无影专用的账号体系，适用于不希望对接企业AD的简单场景。便捷账号信息包括用户名和邮箱，均为必填信息。</props>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'RemoveUsers' => 
    array (
      'summary' => '删除一个或者多个便捷账号。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要删除的便捷账号的用户名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要删除的便捷账号的用户名。用户名可以通过[DescribeUsers](~~DescribeUsers~~)接口获取。',
              'type' => 'string',
              'required' => true,
              'example' => 'test1',
            ),
            'required' => true,
            'example' => 'test1',
            'maxItems' => 100,
            'minItems' => 1,
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'RemoveUsersResult' => 
              array (
                'description' => '删除便捷账号操作的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'RemovedUsers' => 
                  array (
                    'description' => '删除成功的便捷账号。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除成功的便捷账号。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                  ),
                  'FailedUsers' => 
                  array (
                    'description' => '删除失败的用户信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '删除失败的便捷账号。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '删除失败的便捷账号。',
                          'type' => 'string',
                          'example' => 'test2',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'InvalidUsername',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'test2 is an invalid username.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"RemoveUsersResult\\": {\\n    \\"RemovedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test2\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test2 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveUsersResponse>\\n    <RequestId>45341120-2560-4087-8359-B936E58DDB90</RequestId>\\n    <RemoveUsersResult>\\n        <FailedUsers>\\n            <EndUserId>test2</EndUserId>\\n            <ErrorCode>InvalidUsername</ErrorCode>\\n            <ErrorMessage>test2 is invalid username</ErrorMessage>\\n        </FailedUsers>\\n        <RemovedUsers>test1</RemovedUsers>\\n    </RemoveUsersResult>\\n</RemoveUsersResponse>","errorExample":""}]',
      'title' => '删除便捷账号',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyUser' => 
    array (
      'summary' => '修改用户信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EndUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => true,
            'example' => 'Alice',
          ),
        ),
        1 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱。
如果便捷用户的类型为用户激活，需要验证邮箱或手机号码。邮箱或手机号码二选一。如果便捷账号的类型为管理员激活，邮箱和手机均可以为空。',
            'type' => 'string',
            'required' => false,
            'example' => 'username@example.com',
          ),
        ),
        2 => 
        array (
          'name' => 'Phone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号。
如果便捷用户的类型为用户激活，需要验证邮箱或手机号码。邮箱或手机号码二选一。如果便捷账号的类型为管理员激活，邮箱和手机均可以为空。 
 ><notice>国际站账号不支持手机号认证。></notice>',
            'type' => 'string',
            'required' => false,
            'example' => '1381111****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
      'title' => '修改用户',
    ),
    'ResetUserPassword' => 
    array (
      'summary' => '调用ResetUserPassword重置便捷用户的密码，包括生成重置密码Token，并发送重置密码邮件到便捷用户的邮箱。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要重置密码的便捷用户的用户名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要重置密码的便捷用户的用户名。',
              'type' => 'string',
              'required' => true,
              'example' => 'test1',
            ),
            'required' => true,
            'example' => 'test1',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'NotifyType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '重置密码后通知用户的方式。

> 国际站账号不支持通过短信通知用户的方式。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'enumValueTitles' => 
            array (
              1 => '通过邮箱通知用户',
              2 => '通过短信通知用户',
              3 => '邮箱和短信都发送通知',
            ),
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '32D05B39-E6EE-4D7A-9FD0-762A26859D0D',
              ),
              'ResetUsersResult' => 
              array (
                'description' => '重置便捷用户密码操作的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ResetUsers' => 
                  array (
                    'description' => '已发送重置密码邮件的便捷用户。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '已发送重置密码邮件的便捷用户。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                  ),
                  'FailedUsers' => 
                  array (
                    'description' => '重置密码失败的便捷用户信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '重置密码失败的便捷用户信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '重置密码失败的便捷用户。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'InvalidUsername',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'test123 is an invalid username.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"32D05B39-E6EE-4D7A-9FD0-762A26859D0D\\",\\n  \\"ResetUsersResult\\": {\\n    \\"ResetUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResetUserPasswordResponse>\\n    <RequestId>32D05B39-E6EE-4D7A-9FD0-762A26859D0D</RequestId>\\n    <ResetUsersResult>\\n        <ResetUsers>test1</ResetUsers>\\n    </ResetUsersResult>\\n</ResetUserPasswordResponse>","errorExample":""}]',
      'title' => '重置便捷用户账号的密码',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LockUsers' => 
    array (
      'summary' => '锁定一个或者多个便捷用户。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要锁定的便捷用户的用户名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要锁定的便捷用户的用户名。',
              'type' => 'string',
              'required' => true,
              'example' => 'test1',
            ),
            'required' => true,
            'example' => 'test1',
            'maxItems' => 100,
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'LockUsersResult' => 
              array (
                'description' => '锁定便捷用户操作的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'LockedUsers' => 
                  array (
                    'description' => '锁定成功的便捷用户。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '锁定成功的便捷用户。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                  ),
                  'FailedUsers' => 
                  array (
                    'description' => '锁定失败的便捷用户信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '锁定失败的便捷用户。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '锁定失败的便捷用户。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'InvalidUsername',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'test123 is an invalid username.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"LockUsersResult\\": {\\n    \\"LockedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<LockUsersResponse>\\n    <LockUsersResult>\\n        <LockedUsers>test1</LockedUsers>\\n    </LockUsersResult>\\n    <RequestId>EC4A8495-3323-4364-A374-FEE8584644F8</RequestId>\\n</LockUsersResponse>","errorExample":""}]',
      'title' => '锁定便捷用户',
      'description' => '出于安全考虑，您可以锁定便捷用户。被锁定的便捷用户无法登录云桌面。

> 您可以调用[DescribeUsers](~~283609~~)查询便捷用户信息。返回数据中`Status`取值为0，表示该便捷用户未被锁定；`Status`取值为9，表示该便捷用户已被锁定。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnlockUsers' => 
    array (
      'summary' => '解锁一个或者多个便捷用户。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Users',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要解锁的便捷用户的用户名列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要解锁的便捷用户的用户名。',
              'type' => 'string',
              'required' => true,
              'example' => 'test1',
            ),
            'required' => true,
            'example' => 'test1',
            'maxItems' => 100,
          ),
        ),
        1 => 
        array (
          'name' => 'AutoLockTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '自动锁定用户的日期，到期后用户将自动锁定。',
            'type' => 'string',
            'required' => false,
            'example' => '2023-03-03',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '023F4EC4-3602-4A3E-A514-4970847D59DB',
              ),
              'UnlockUsersResult' => 
              array (
                'description' => '解锁便捷用户操作的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'UnlockedUsers' => 
                  array (
                    'description' => '解锁成功的便捷用户。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '解锁成功的便捷用户。',
                      'type' => 'string',
                      'example' => 'test1',
                    ),
                  ),
                  'FailedUsers' => 
                  array (
                    'description' => '解锁失败的便捷用户信息集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '解锁失败的便捷用户。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EndUserId' => 
                        array (
                          'description' => '解锁失败的便捷用户。',
                          'type' => 'string',
                          'example' => 'test123',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'InvalidUsername',
                        ),
                        'ErrorMessage' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'test123 is an invalid username.',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"023F4EC4-3602-4A3E-A514-4970847D59DB\\",\\n  \\"UnlockUsersResult\\": {\\n    \\"UnlockedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UnlockUsersResponse>\\n    <RequestId>023F4EC4-3602-4A3E-A514-4970847D59DB</RequestId>\\n    <UnlockUsersResult>\\n        <UnlockedUsers>test1</UnlockedUsers>\\n    </UnlockUsersResult>\\n</UnlockUsersResponse>","errorExample":""}]',
      'title' => '解锁便捷用户',
      'description' => '被锁定的便捷用户无法登录云桌面，需要解锁后才能登录。

> 您可以调用[DescribeUsers](~~283609~~)查询便捷用户信息。返回数据中`Status`取值为0，表示该便捷用户未被锁定；`Status`取值为9，表示该便捷用户已被锁定。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeUsers' => 
    array (
      'summary' => '查询便捷用户信息，例如便捷用户的用户名、邮箱地址、备注名称等等。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数。  

- 取值范围：1~500。  
- 默认值：500。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'enumValueTitles' => 
            array (
            ),
            'example' => '10',
            'default' => '500',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次查询的Token。首次调用接口时无需设置该参数。      
如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊搜索字符串，支持匹配用户名（EndUserId）和邮箱（Email）。该字段支持使用通配符（*），例如将该字段设为`a*m`，则返回用户名或邮箱以`a`开头、以`m`结尾的所有结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'a*m',
          ),
        ),
        3 => 
        array (
          'name' => 'EndUserIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需精确匹配的用户名（EndUserId）列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '按用户名（EndUserId）精确匹配，查询用户名一致的用户信息。',
              'type' => 'string',
              'required' => false,
              'example' => 'alice',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        4 => 
        array (
          'name' => 'ExcludeEndUserIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需精确排除的用户名（EndUserId）列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '按用户名（EndUserId）精确排除，查询不包含该用户名的用户列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'tony',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'OrgId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按组织ID精确匹配，查询归属该组织的用户列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'org-4mdgc1cocc59z****',
          ),
        ),
        6 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '按用户组ID精确匹配，查询归属该用户组的用户列表。',
            'type' => 'string',
            'required' => false,
            'example' => 'ug-12341234****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'NextToken' => 
              array (
                'description' => '下一次查询的Token。NextToken为空表示没有下一次。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'Users' => 
              array (
                'title' => 'users',
                'description' => '便捷用户信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '便捷用户信息集合。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4205**',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'alice',
                    ),
                    'Email' => 
                    array (
                      'description' => '邮箱。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'Phone' => 
                    array (
                      'description' => '手机号，如未设置该参数则不返回该参数。',
                      'type' => 'string',
                      'example' => '1381111****',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'enumValueTitles' => 
                      array (
                        0 => '正常',
                        9 => '锁定',
                      ),
                      'example' => '0',
                    ),
                    'OwnerType' => 
                    array (
                      'description' => '便捷账号类型，包括：

* 管理员激活类型，管理员设置用户名及用户密码，重置密码等用户通知将发送到管理员的邮箱或手机。
* 用户激活类型，管理员设置用户名及用户接收通知的邮件或手机，云桌面开通通知（含初始密码）等用户通知将发送到用户的邮件或手机。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'CreateFromManager' => '管理员激活',
                        'Normal' => '用户激活',
                      ),
                      'example' => 'Normal',
                    ),
                    'Remark' => 
                    array (
                      'description' => '用户的备注。',
                      'type' => 'string',
                      'example' => '测试专用用户',
                    ),
                    'OrgId' => 
                    array (
                      'description' => '用户归属的部门ID。
> 该参数即将废弃。',
                      'type' => 'string',
                      'example' => 'org-4mdgc1cocc59z****',
                    ),
                    'WyId' => 
                    array (
                      'description' => '用户全局唯一ID。',
                      'type' => 'string',
                      'example' => '41fd1254d8f7****',
                    ),
                    'IsTenantManager' => 
                    array (
                      'description' => '是否为用户管理员。如果创建的便捷用户是管理员激活类型，则必须指定一位用户管理员，终端用户通过客户端重置密码等通知将发送到该用户管理员的邮箱或手机，详情参见[创建便捷用户](~~214472~~)。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'Groups' => 
                    array (
                      'description' => '用户归属的用户组集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户归属的用户组属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'GroupId' => 
                          array (
                            'description' => '用户组ID。',
                            'type' => 'string',
                            'example' => 'ug-12341234****',
                          ),
                          'GroupName' => 
                          array (
                            'description' => '用户组名称。',
                            'type' => 'string',
                            'example' => '用户组1',
                          ),
                        ),
                      ),
                    ),
                    'Orgs' => 
                    array (
                      'description' => '用户归属的部门集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户归属的部门属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'OrgId' => 
                          array (
                            'description' => '部门ID。',
                            'type' => 'string',
                            'example' => 'org-4mdgc1cocc59z****',
                          ),
                          'OrgName' => 
                          array (
                            'description' => '部门名称。',
                            'type' => 'string',
                            'example' => '部门1',
                          ),
                        ),
                      ),
                    ),
                    'Avatar' => 
                    array (
                      'description' => '用户头像。',
                      'type' => 'string',
                      'example' => 'https://cdn.*****',
                    ),
                    'Address' => 
                    array (
                      'description' => '用户工作地址。',
                      'type' => 'string',
                      'example' => '杭州市***',
                    ),
                    'JobNumber' => 
                    array (
                      'description' => '用户工号。',
                      'type' => 'string',
                      'example' => 'A10000**',
                    ),
                    'NickName' => 
                    array (
                      'description' => '用户昵称。',
                      'type' => 'string',
                      'example' => '李**',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"Users\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"EndUserId\\": \\"alice\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": 0,\\n      \\"OwnerType\\": \\"Normal\\",\\n      \\"Remark\\": \\"测试专用用户\\",\\n      \\"OrgId\\": \\"org-4mdgc1cocc59z****\\",\\n      \\"WyId\\": \\"41fd1254d8f7****\\",\\n      \\"IsTenantManager\\": true,\\n      \\"Groups\\": [\\n        {\\n          \\"GroupId\\": \\"ug-12341234****\\",\\n          \\"GroupName\\": \\"用户组1\\"\\n        }\\n      ],\\n      \\"Orgs\\": [\\n        {\\n          \\"OrgId\\": \\"org-4mdgc1cocc59z****\\",\\n          \\"OrgName\\": \\"部门1\\"\\n        }\\n      ],\\n      \\"Avatar\\": \\"https://cdn.*****\\",\\n      \\"Address\\": \\"杭州市***\\",\\n      \\"JobNumber\\": \\"A10000**\\",\\n      \\"NickName\\": \\"李**\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUsersResponse>\\n    <RequestId>BA75EDC9-8A5F-40C2-ABD5-EBAE56A4D67C</RequestId>\\n    <Users>\\n        <Status>0</Status>\\n        <Email>test1@example***.com</Email>\\n        <EndUserId>test1</EndUserId>\\n        <Id>12345</Id>\\n    </Users>\\n</DescribeUsersResponse>","errorExample":""}]',
      'title' => '查询便捷用户信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FilterUsers' => 
    array (
      'summary' => '按用户属性筛选查询便捷账号信息。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时每页行数（大于100时会自动重置为100）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'example' => '10',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次查询的Token。首次调用接口时无需设置该参数。如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a****',
          ),
        ),
        2 => 
        array (
          'name' => 'Filter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊搜索字符串，支持匹配用户名（EndUserId）和邮箱（Email）。该字段支持使用通配符（\\*），例如将该字段设为a*m，则返回用户名或邮箱以a开头、以m结尾的所有结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'a*m',
          ),
        ),
        3 => 
        array (
          'name' => 'PropertyFilterParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要模糊查询的用户属性列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要模糊查询的用户属性。',
              'type' => 'object',
              'properties' => 
              array (
                'PropertyId' => 
                array (
                  'description' => '属性ID。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '328',
                ),
                'PropertyValueIds' => 
                array (
                  'description' => '属性值ID。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '1255',
                  'maxItems' => 100,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'PropertyKeyValueFilterParam',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '属性名和属性值信息列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '属性名和属性值信息。',
              'type' => 'object',
              'properties' => 
              array (
                'PropertyKey' => 
                array (
                  'description' => '属性名。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'job',
                ),
                'PropertyValues' => 
                array (
                  'description' => '属性值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'dev',
                  'maxItems' => 100,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        5 => 
        array (
          'name' => 'IncludeDesktopCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回已分配给该用户的云电脑数量。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '返回分配的云电脑数量',
              'false' => '不返回分配的云电脑数量',
            ),
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'IncludeDesktopGroupCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否返回已分配给该用户的云电脑池数量。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => '返回分配的云电脑池数量',
              'false' => '不返回分配的云电脑池数量',
            ),
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'OrgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '企业组织ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'org-aliyun-wy-org-id',
          ),
        ),
        8 => 
        array (
          'name' => 'OwnerType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '账号激活类型。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CreateFromManager' => '管理员激活',
              'Normal' => '用户激活',
            ),
            'example' => 'Normal',
          ),
        ),
        9 => 
        array (
          'name' => 'ExcludeEndUserIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '需精确排除的用户名（EndUserId）列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '按用户名（EndUserId）精确排除，查询不包含该用户名的用户列表。',
              'type' => 'string',
              'required' => false,
              'example' => 'tony',
            ),
            'required' => false,
            'maxItems' => 2000,
          ),
        ),
        10 => 
        array (
          'name' => 'OrderParam',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '支持的排序参数。',
            'type' => 'object',
            'properties' => 
            array (
              'OrderField' => 
              array (
                'description' => '按此参数排序。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'EndUserId' => '用户名',
                  'id' => '用户主键ID',
                  'gmt_created' => '创建时间',
                ),
                'example' => 'id',
              ),
              'OrderType' => 
              array (
                'description' => '升序或降序。',
                'type' => 'string',
                'required' => false,
                'enumValueTitles' => 
                array (
                  'ASC' => '升序',
                  'DESC' => '降序 [默认值]',
                ),
                'example' => 'DESC',
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
            'title' => 'Schema of Response',
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'NextToken' => 
              array (
                'description' => '下一次查询的Token。如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
              ),
              'Users' => 
              array (
                'title' => 'users',
                'description' => '便捷账号信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '便捷账号信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '用户ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '4205**',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '用户名。',
                      'type' => 'string',
                      'example' => 'alice',
                    ),
                    'Email' => 
                    array (
                      'description' => '邮箱。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'Phone' => 
                    array (
                      'description' => '手机号。',
                      'type' => 'string',
                      'example' => '1381111****',
                    ),
                    'Status' => 
                    array (
                      'description' => '便捷账号的状态。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'enumValueTitles' => 
                      array (
                        0 => '正常',
                        9 => '锁定',
                      ),
                      'example' => '0',
                    ),
                    'UserSetPropertiesModels' => 
                    array (
                      'description' => '用户属性集合。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '用户属性。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'UserId' => 
                          array (
                            'description' => '绑定属性的用户ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '4205**',
                          ),
                          'UserName' => 
                          array (
                            'description' => '绑定属性的用户名。',
                            'type' => 'string',
                            'example' => 'alice',
                          ),
                          'PropertyId' => 
                          array (
                            'description' => '用户属性ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '12',
                          ),
                          'PropertyKey' => 
                          array (
                            'description' => '用户属性名称。',
                            'type' => 'string',
                            'example' => 'department',
                          ),
                          'PropertyType' => 
                          array (
                            'description' => '用户属性编号。',
                            'type' => 'integer',
                            'format' => 'int32',
                            'example' => '2',
                          ),
                          'PropertyValues' => 
                          array (
                            'description' => '用户属性值。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => '用户属性值。',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'PropertyValueId' => 
                                array (
                                  'description' => '用户属性值ID。',
                                  'type' => 'integer',
                                  'format' => 'int64',
                                  'example' => '42',
                                ),
                                'PropertyValue' => 
                                array (
                                  'description' => '用户属性值。',
                                  'type' => 'string',
                                  'example' => 'dev',
                                ),
                              ),
                            ),
                          ),
                        ),
                      ),
                    ),
                    'DesktopCount' => 
                    array (
                      'description' => '分配给该用户的云电脑数量。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'ExternalInfo' => 
                    array (
                      'description' => '用户扩展信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ExternalName' => 
                        array (
                          'description' => '用户对接的账号名称。',
                          'type' => 'string',
                          'example' => 'account',
                        ),
                        'JobNumber' => 
                        array (
                          'description' => '用户对接的账号、学号或工号。',
                          'type' => 'string',
                          'example' => '030801',
                        ),
                      ),
                    ),
                    'DesktopGroupCount' => 
                    array (
                      'description' => '用户拥有授权的云电脑池数量。当`IncludeDesktopGroupCount`取值为`true`时，返回该值。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'OwnerType' => 
                    array (
                      'description' => '账号归属类型。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'CreateFromManager' => '管理员激活',
                        'Normal' => '用户激活',
                      ),
                      'example' => 'Normal',
                    ),
                    'Remark' => 
                    array (
                      'description' => '用户备注。',
                      'type' => 'string',
                      'example' => '测试专用',
                    ),
                    'IsTenantManager' => 
                    array (
                      'description' => '是否租户管理员。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '是',
                        'false' => '否',
                      ),
                      'example' => 'true',
                    ),
                    'EnableAdminAccess' => 
                    array (
                      'description' => '是否本地管理员。',
                      'type' => 'boolean',
                      'enumValueTitles' => 
                      array (
                        'true' => '是',
                        'false' => '否',
                      ),
                      'example' => 'true',
                    ),
                    'RealNickName' => 
                    array (
                      'description' => '用户昵称。',
                      'type' => 'string',
                      'example' => '小明',
                    ),
                    'AutoLockTime' => 
                    array (
                      'description' => '自动锁定账号的日期。',
                      'type' => 'string',
                      'example' => '2023-03-03',
                    ),
                    'PasswordExpireDays' => 
                    array (
                      'description' => '用户账号的密码默认为永久有效，可通过此参数设置30\\~365天的密码有效期，当密码到期后，终端用户必须先修改密码才能继续登录。

> 该功能目前处于邀测中，如需体验，请提交工单申请开通。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '30',
                    ),
                    'PasswordExpireRestDays' => 
                    array (
                      'description' => '账号密码有效期的剩余天数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '10',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"Users\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"EndUserId\\": \\"alice\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": 0,\\n      \\"UserSetPropertiesModels\\": [\\n        {\\n          \\"UserId\\": 0,\\n          \\"UserName\\": \\"alice\\",\\n          \\"PropertyId\\": 12,\\n          \\"PropertyKey\\": \\"department\\",\\n          \\"PropertyType\\": 2,\\n          \\"PropertyValues\\": [\\n            {\\n              \\"PropertyValueId\\": 42,\\n              \\"PropertyValue\\": \\"dev\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"DesktopCount\\": 1,\\n      \\"ExternalInfo\\": {\\n        \\"ExternalName\\": \\"account\\",\\n        \\"JobNumber\\": \\"030801\\"\\n      },\\n      \\"DesktopGroupCount\\": 2,\\n      \\"OwnerType\\": \\"Normal\\",\\n      \\"Remark\\": \\"测试专用\\",\\n      \\"IsTenantManager\\": true,\\n      \\"EnableAdminAccess\\": true,\\n      \\"RealNickName\\": \\"小明\\",\\n      \\"AutoLockTime\\": \\"2023-03-03\\",\\n      \\"PasswordExpireDays\\": 30,\\n      \\"PasswordExpireRestDays\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<FilterUsersResponse>\\n    <RequestId>DBD276B5-00FF-5E04-8EF7-5CBA09BF112A</RequestId>\\n    <Users>\\n        <Status>0</Status>\\n        <EndUserId>testName</EndUserId>\\n        <Email>testName@example.com</Email>\\n        <Phone/>\\n        <Id>12345</Id>\\n        <UserSetPropertiesModels>\\n            <PropertyValues>\\n                <PropertyValueId>184</PropertyValueId>\\n                <PropertyValue>true</PropertyValue>\\n            </PropertyValues>\\n            <UserId>12345</UserId>\\n            <PropertyType>1</PropertyType>\\n            <PropertyKey>enableAdminAccess</PropertyKey>\\n            <PropertyId>145</PropertyId>\\n        </UserSetPropertiesModels>\\n        <UserSetPropertiesModels>\\n            <PropertyValues>\\n                <PropertyValueId>42</PropertyValueId>\\n                <PropertyValue>A</PropertyValue>\\n            </PropertyValues>\\n            <UserId>12345</UserId>\\n            <PropertyType>2</PropertyType>\\n            <PropertyKey>department</PropertyKey>\\n            <PropertyId>30</PropertyId>\\n        </UserSetPropertiesModels>\\n    </Users>\\n</FilterUsersResponse>","errorExample":""}]',
      'title' => '筛选查询便捷账号信息',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetManagerInfoByAuthCode' => 
    array (
      'summary' => '根据authcode获取当前登录的管理员信息。',
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
          'name' => 'AuthCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '授权码',
            'description' => '授权码。',
            'type' => 'string',
            'required' => true,
            'example' => 'e49cd070452f0044813a467d4743****',
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
            'description' => '响应结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'WaId' => 
              array (
                'title' => '租户无影账号ID',
                'description' => '租户无影账号ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '12345678901234****',
              ),
              'OrgId' => 
              array (
                'title' => '组织ID',
                'description' => '组织ID。',
                'type' => 'string',
                'example' => '12345678901234****',
              ),
              'UserName' => 
              array (
                'title' => '租户名称',
                'description' => '租户名称。',
                'type' => 'string',
                'example' => 'zhangsan',
              ),
              'Phone' => 
              array (
                'title' => '手机号',
                'description' => '手机号。',
                'type' => 'string',
                'example' => '1301234****',
              ),
              'TeamName' => 
              array (
                'title' => '团队名称',
                'description' => '团队名称。',
                'type' => 'string',
                'example' => 'devteam',
              ),
            ),
          ),
        ),
        201 => 
        array (
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"WaId\\": 0,\\n  \\"OrgId\\": \\"12345678901234****\\",\\n  \\"UserName\\": \\"zhangsan\\",\\n  \\"Phone\\": \\"1301234****\\",\\n  \\"TeamName\\": \\"devteam\\"\\n}","type":"json"}]',
      'title' => '根据authcode获取当前登录的管理员信息',
    ),
    'CreateProperty' => 
    array (
      'summary' => '创建一个用户属性。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PropertyKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性名。',
            'type' => 'string',
            'required' => true,
            'example' => 'department',
          ),
        ),
        1 => 
        array (
          'name' => 'PropertyValues',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '属性值。一个属性下最多可以添加50个不同的属性值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '属性值。',
              'type' => 'string',
              'required' => false,
              'example' => 'HR',
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'CreateResult' => 
              array (
                'description' => '创建结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PropertyId' => 
                  array (
                    'description' => '属性ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '390',
                  ),
                  'PropertyKey' => 
                  array (
                    'description' => '属性名。',
                    'type' => 'string',
                    'example' => 'department',
                  ),
                  'SavePropertyValueModel' => 
                  array (
                    'description' => '属性值创建结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SavePropertyValues' => 
                      array (
                        'description' => '创建成功的属性值。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '创建成功的属性值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PropertyValueId' => 
                            array (
                              'description' => '属性值ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '978',
                            ),
                            'PropertyValue' => 
                            array (
                              'description' => '属性值。',
                              'type' => 'string',
                              'example' => 'HR',
                            ),
                          ),
                        ),
                      ),
                      'FailedPropertyValues' => 
                      array (
                        'description' => '创建失败的属性值。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '修改失败的属性值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PropertyId' => 
                            array (
                              'description' => '属性值ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '390',
                            ),
                            'PropertyValue' => 
                            array (
                              'description' => '属性值。',
                              'type' => 'string',
                              'example' => 'HR',
                            ),
                            'ErrorCode' => 
                            array (
                              'description' => '错误码。',
                              'type' => 'string',
                              'example' => 'ExistedPropertyValue',
                            ),
                            'ErrorMessage' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'The property value is used by another property.',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"CreateResult\\": {\\n    \\"PropertyId\\": 390,\\n    \\"PropertyKey\\": \\"department\\",\\n    \\"SavePropertyValueModel\\": {\\n      \\"SavePropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 978,\\n          \\"PropertyValue\\": \\"HR\\"\\n        }\\n      ],\\n      \\"FailedPropertyValues\\": [\\n        {\\n          \\"PropertyId\\": 390,\\n          \\"PropertyValue\\": \\"HR\\",\\n          \\"ErrorCode\\": \\"ExistedPropertyValue\\",\\n          \\"ErrorMessage\\": \\"The property value is used by another property.\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreatePropertyResponse>\\n    <RequestId>499B0E01-8AE3-5099-95CE-E69CF4DBE177</RequestId>\\n    <CreateResult>\\n        <PropertyId>390</PropertyId>\\n        <PropertyKey>department</PropertyKey>\\n        <SavePropertyValueModel>\\n            <SavePropertyValues>\\n                <PropertyValueId>978</PropertyValueId>\\n                <PropertyValue>HR</PropertyValue>\\n            </SavePropertyValues>\\n            <FailedPropertyValues>\\n                <PropertyId>390</PropertyId>\\n                <PropertyValue>HR</PropertyValue>\\n                <ErrorCode>ExistedPropertyValue</ErrorCode>\\n                <ErrorMessage>property value is used by other property</ErrorMessage>\\n            </FailedPropertyValues>\\n        </SavePropertyValueModel>\\n    </CreateResult>\\n</CreatePropertyResponse>","errorExample":""}]',
      'title' => '创建用户自定义属性',
      'description' => '- 一个阿里云账号下最多可以创建10个不同的属性。每个属性包括一个属性名（PropertyKey）和多个属性值（PropertyValue）。
- 一个属性下最多可以添加50个不同的属性值。',
    ),
    'RemoveProperty' => 
    array (
      'summary' => '删除一组用户属性。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PropertyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性ID。您可以调用[ListProperty](~~410890~~)进行查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '390',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemovePropertyResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</RemovePropertyResponse>","errorExample":""}]',
      'title' => '删除用户自定义属性',
    ),
    'DeleteUserPropertyValue' => 
    array (
      'summary' => '解除一个用户与某个用户属性的绑定关系。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'PropertyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '390',
          ),
        ),
        2 => 
        array (
          'name' => 'PropertyValueId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性值ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '978',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D6C62E40-F937-5803-B008-92E813399BA5',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6C62E40-F937-5803-B008-92E813399BA5\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserPropertyValueResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</DeleteUserPropertyValueResponse>","errorExample":""}]',
      'title' => '删除用户自定义属性值',
      'description' => '操作前，您可以调用FilterUsers查询用户绑定的用户属性情况。',
    ),
    'UpdateProperty' => 
    array (
      'summary' => '修改用户属性。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PropertyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要修改的属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '390',
          ),
        ),
        1 => 
        array (
          'name' => 'PropertyKey',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '修改后的属性名。',
            'type' => 'string',
            'required' => true,
            'example' => 'testkey',
          ),
        ),
        2 => 
        array (
          'name' => 'PropertyValues',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '要修改的属性值。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '要修改的属性值。',
              'type' => 'object',
              'properties' => 
              array (
                'PropertyValueId' => 
                array (
                  'description' => '要修改的属性值ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
                  'type' => 'integer',
                  'format' => 'int64',
                  'required' => false,
                  'example' => '978',
                ),
                'PropertyValue' => 
                array (
                  'description' => '修改后的属性值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'testvalue',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 100,
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'UpdateResult' => 
              array (
                'description' => '修改结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PropertyId' => 
                  array (
                    'description' => '属性ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '390',
                  ),
                  'PropertyKey' => 
                  array (
                    'description' => '属性名。',
                    'type' => 'string',
                    'example' => 'testkey2',
                  ),
                  'SavePropertyValueModel' => 
                  array (
                    'description' => '属性值修改结果。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SavePropertyValues' => 
                      array (
                        'description' => '修改成功的属性值。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '修改成功的属性值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PropertyValueId' => 
                            array (
                              'description' => '属性值ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '978',
                            ),
                            'PropertyValue' => 
                            array (
                              'description' => '属性值。',
                              'type' => 'string',
                              'example' => 'testvalue2',
                            ),
                          ),
                        ),
                      ),
                      'FailedPropertyValues' => 
                      array (
                        'description' => '修改失败的属性值。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '修改失败的属性值。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'PropertyId' => 
                            array (
                              'description' => '属性ID。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '390',
                            ),
                            'PropertyValue' => 
                            array (
                              'description' => '属性值。',
                              'type' => 'string',
                              'example' => 'testvalue',
                            ),
                            'ErrorCode' => 
                            array (
                              'description' => '错误码。',
                              'type' => 'string',
                              'example' => 'ExistedPropertyValue',
                            ),
                            'ErrorMessage' => 
                            array (
                              'description' => '错误信息。',
                              'type' => 'string',
                              'example' => 'The property value is used by another property.',
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
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"UpdateResult\\": {\\n    \\"PropertyId\\": 390,\\n    \\"PropertyKey\\": \\"testkey2\\",\\n    \\"SavePropertyValueModel\\": {\\n      \\"SavePropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 978,\\n          \\"PropertyValue\\": \\"testvalue2\\"\\n        }\\n      ],\\n      \\"FailedPropertyValues\\": [\\n        {\\n          \\"PropertyId\\": 390,\\n          \\"PropertyValue\\": \\"testvalue\\",\\n          \\"ErrorCode\\": \\"ExistedPropertyValue\\",\\n          \\"ErrorMessage\\": \\"The property value is used by another property.\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdatePropertyResponse>\\n    <RequestId>FF3CE680-7710-5ECD-8565-8B103C5301F1</RequestId>\\n    <UpdateResult>\\n        <SavePropertyValueModel>\\n            <SavePropertyValues>\\n                <PropertyValueId>978</PropertyValueId>\\n                <PropertyValue>testvalue</PropertyValue>\\n            </SavePropertyValues>\\n        </SavePropertyValueModel>\\n        <PropertyKey>testkey</PropertyKey>\\n        <PropertyId>390</PropertyId>\\n    </UpdateResult>\\n</UpdatePropertyResponse>","errorExample":""}]',
      'title' => '修改自定义属性',
    ),
    'SetUserPropertyValue' => 
    array (
      'summary' => '为某个用户关联一个用户属性。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户ID。可以调用[DescribeUsers](~~DescribeUsers~~)获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '11',
          ),
        ),
        1 => 
        array (
          'name' => 'UserName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '用户名。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'PropertyId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '390',
          ),
        ),
        3 => 
        array (
          'name' => 'PropertyValueId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '属性值ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '978',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<SetUserPropertyValueResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</SetUserPropertyValueResponse>","errorExample":""}]',
      'title' => '用户关联自定义属性值',
    ),
    'ListProperty' => 
    array (
      'summary' => '查询当前账号下已有的用户属性列表。',
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
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                'type' => 'string',
                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
              ),
              'Properties' => 
              array (
                'title' => 'users',
                'description' => '属性信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '属性信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PropertyId' => 
                    array (
                      'description' => '属性ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '30',
                    ),
                    'PropertyKey' => 
                    array (
                      'description' => '属性名。',
                      'type' => 'string',
                      'example' => 'department',
                    ),
                    'PropertyValues' => 
                    array (
                      'description' => '属性值信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '属性值信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'PropertyValueId' => 
                          array (
                            'description' => '属性值ID。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '42',
                          ),
                          'PropertyValue' => 
                          array (
                            'description' => '属性值。',
                            'type' => 'string',
                            'example' => 'A',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"Properties\\": [\\n    {\\n      \\"PropertyId\\": 30,\\n      \\"PropertyKey\\": \\"department\\",\\n      \\"PropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 42,\\n          \\"PropertyValue\\": \\"A\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPropertyResponse>\\n    <RequestId>2F4FD101-8D7B-5C97-96D6-8ACB711A7EAA</RequestId>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <Properties>\\n        <PropertyId>30</PropertyId>\\n        <PropertyKey>department</PropertyKey>\\n        <PropertyValues>\\n            <PropertyValueId>42</PropertyValueId>\\n            <PropertyValue>A</PropertyValue>\\n        </PropertyValues>\\n    </Properties>\\n</ListPropertyResponse>","errorExample":""}]',
      'title' => '查询属性',
    ),
    'ListPropertyValue' => 
    array (
      'summary' => '查询某一用户属性包含的属性值列表。',
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
          'name' => 'PropertyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '390',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'C52013A5-3422-5D1F-B22C-A57110972AD9',
              ),
              'PropertyValueInfos' => 
              array (
                'title' => 'users',
                'description' => '属性值列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '属性值信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PropertyValueId' => 
                    array (
                      'description' => '属性值ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '978',
                    ),
                    'PropertyValue' => 
                    array (
                      'description' => '属性值。',
                      'type' => 'string',
                      'example' => 'HR',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C52013A5-3422-5D1F-B22C-A57110972AD9\\",\\n  \\"PropertyValueInfos\\": [\\n    {\\n      \\"PropertyValueId\\": 978,\\n      \\"PropertyValue\\": \\"HR\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPropertyValueResponse>\\n    <RequestId>C52013A5-3422-5D1F-B22C-A57110972AD9</RequestId>\\n    <PropertyValueInfos>\\n        <PropertyValueId>978</PropertyValueId>\\n        <PropertyValue>HR</PropertyValue>\\n    </PropertyValueInfos>\\n</ListPropertyValueResponse>","errorExample":""}]',
      'title' => '查询用户自定义属性值',
    ),
    'CheckUsedProperty' => 
    array (
      'summary' => '校验某一用户属性是否已关联便捷用户。',
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
          'name' => 'PropertyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '390',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '22C97624-2405-54AC-BD44-A63FBE97CC2D',
              ),
              'UseCount' => 
              array (
                'description' => '已关联用户属性的用户数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '7',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"22C97624-2405-54AC-BD44-A63FBE97CC2D\\",\\n  \\"UseCount\\": 7\\n}","errorExample":""},{"type":"xml","example":"<CheckUsedPropertyResponse>\\n    <RequestId>22C97624-2405-54AC-BD44-A63FBE97CC2D</RequestId>\\n    <UseCount>7</UseCount>\\n</CheckUsedPropertyResponse>","errorExample":""}]',
      'title' => '校验自定义属性是否有关联用户',
    ),
    'CheckUsedPropertyValue' => 
    array (
      'summary' => '校验自定义属性值是否有关联用户。',
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
          'name' => 'PropertyId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属性ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '380',
          ),
        ),
        1 => 
        array (
          'name' => 'PropertyValueId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '属性值ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '978',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
              'UseCount' => 
              array (
                'description' => '已关联用户属性值的便捷用户数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"UseCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<CheckUsedPropertyValueResponse>\\n    <RequestId>9E7F03BD-8DA9-5130-A675-0191DC1D8910</RequestId>\\n    <UseCount>1</UseCount>\\n</CheckUsedPropertyValueResponse>","errorExample":""}]',
      'title' => '校验自定义属性值是否使用',
    ),
    'DescribeOrgs' => 
    array (
      'summary' => '查询组织列表。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的最大数量。取值范围：1~100。    
默认值：100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '500',
            'minimum' => '1',
            'example' => '20',
            'default' => '500',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'AAAAAV3MpHK****',
          ),
        ),
        2 => 
        array (
          'name' => 'OrgName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '组织名称。',
            'type' => 'string',
            'required' => false,
            'example' => '产品部',
          ),
        ),
        3 => 
        array (
          'name' => 'ParentOrgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '父组织ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'org-11fs****',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0B4BB****',
              ),
              'NextToken' => 
              array (
                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK****',
              ),
              'Orgs' => 
              array (
                'description' => '组织列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '组织详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'OrgName' => 
                    array (
                      'description' => '组织名称。',
                      'type' => 'string',
                      'example' => '设计部****',
                    ),
                    'OrgId' => 
                    array (
                      'description' => '组织ID。',
                      'type' => 'string',
                      'example' => 'org-1mox****',
                    ),
                    'ParentOrgId' => 
                    array (
                      'description' => '父组织ID。',
                      'type' => 'string',
                      'example' => 'org-ezqr****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B4BB****\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK****\\",\\n  \\"Orgs\\": [\\n    {\\n      \\"OrgName\\": \\"设计部****\\",\\n      \\"OrgId\\": \\"org-1mox****\\",\\n      \\"ParentOrgId\\": \\"org-ezqr****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '查询组织列表',
      'description' => '组织为树形结构，其根组织ID值为：org-aliyun-wy-org-id。',
    ),
    'RemoveMfaDevice' => 
    array (
      'summary' => '调用RemoveMfaDevice删除便捷用户绑定的虚拟MFA设备。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SerialNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟MFA设备序列号，唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc856334-446b-4035-bfbc-18af261e****',
          ),
        ),
        1 => 
        array (
          'name' => 'AdDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD工作区地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'alpha.lftltd.net',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FB550AAB-FB36-4A91-93F6-F4374AF65403',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FB550AAB-FB36-4A91-93F6-F4374AF65403\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveMfaDeviceResponse>\\r\\n    <RequestId>FB550AAB-FB36-4A91-93F6-F4374AF65403</RequestId>\\r\\n</RemoveMfaDeviceResponse>","errorExample":""}]',
      'title' => '删除便捷用户绑定的虚拟MFA设备',
      'description' => '删除便捷用户绑定的虚拟MFA设备表示解除MFA设备绑定，等同于重置、禁用该MFA设备。对应便捷用户在登录云桌面时，需要重新绑定新的MFA设备。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'LockMfaDevice' => 
    array (
      'summary' => '调用LockMfaDevice锁定便捷用户绑定的虚拟MFA设备。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SerialNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟MFA设备序列号，唯一标识。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'dc856334-446b-4035-bfbc-18af261e****',
          ),
        ),
        1 => 
        array (
          'name' => 'AdDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD工作区地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'upower.vip',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '42FE70D8-4336-471B-8314-CCCFCE4159FD',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"42FE70D8-4336-471B-8314-CCCFCE4159FD\\"\\n}","errorExample":""},{"type":"xml","example":"<LockMfaDeviceResponse>\\r\\n    <RequestId>42FE70D8-4336-471B-8314-CCCFCE4159FD</RequestId>\\r\\n</LockMfaDeviceResponse>","errorExample":""}]',
      'title' => '锁定用户MFA设备',
      'description' => '锁定后，虚拟MFA设备的状态将变为锁定（LOCKED）。对应的便捷用户在登录启用了MFA的工作区时，将因为无法认证MFA设备而无法登录客户端。您可以调用[UnlockMfaDevice](~~286534~~)解锁。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UnlockMfaDevice' => 
    array (
      'summary' => '调用UnlockMfaDevice解锁便捷用户绑定的虚拟MFA设备。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SerialNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '虚拟MFA设备序列号，唯一标识。',
            'type' => 'string',
            'required' => true,
            'example' => 'dc856334-446b-4035-bfbc-18af261e****',
          ),
        ),
        1 => 
        array (
          'name' => 'AdDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD工作区地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'welab.co.id',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '9BD39C60-4E38-43BE-BA2F-69136C6C5190',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9BD39C60-4E38-43BE-BA2F-69136C6C5190\\"\\n}","errorExample":""},{"type":"xml","example":"<UnlockMfaDeviceResponse>\\r\\n    <RequestId>9BD39C60-4E38-43BE-BA2F-69136C6C5190</RequestId>\\r\\n</UnlockMfaDeviceResponse>","errorExample":""}]',
      'title' => '解锁用户MFA设备',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeMfaDevices' => 
    array (
      'summary' => '查询便捷用户绑定的虚拟MFA设备。',
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
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回结果的最大数量。取值范围：1~500。    
默认值：100。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'example' => '100',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询凭证。取值为上一次API调用时返回的NextToken参数值。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
          ),
        ),
        2 => 
        array (
          'name' => 'EndUserIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '便捷用户的用户名。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '便捷用户的用户名。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'example' => 'test',
            'maxItems' => 100,
          ),
        ),
        3 => 
        array (
          'name' => 'SerialNumbers',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '虚拟MFA设备序列号，唯一标识。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '虚拟MFA设备序列号，唯一标识。',
              'type' => 'string',
              'required' => false,
              'example' => 'c2d9ae94-a64b-4a0d-8024-9519ca50****',
            ),
            'required' => false,
            'example' => 'c2d9ae94-a64b-4a0d-8024-9519ca50****',
            'maxItems' => 100,
          ),
        ),
        4 => 
        array (
          'name' => 'AdDomain',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AD工作区地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn.misumi.pri',
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
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '33DBB8EC-6E68-4726-91C4-E09C59D9A7D8',
              ),
              'NextToken' => 
              array (
                'description' => '下一个查询开始的Token。',
                'type' => 'string',
                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp',
              ),
              'MfaDevices' => 
              array (
                'title' => 'mfa device list',
                'description' => '虚拟MFA设备信息集合。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '虚拟MFA设备信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '> 该参数暂未开放使用。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '36',
                    ),
                    'EndUserId' => 
                    array (
                      'description' => '使用该虚拟MFA设备的便捷用户名。',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Email' => 
                    array (
                      'description' => '> 该参数暂未开放使用。',
                      'type' => 'string',
                      'example' => 'username@example.com',
                    ),
                    'GmtEnabled' => 
                    array (
                      'description' => '虚拟MFA设备启用时间。按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-06-22T06:20:49Z',
                    ),
                    'GmtUnlock' => 
                    array (
                      'description' => '虚拟MFA设备被锁定后的自动解锁时间。按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2021-06-23T06:20:49Z',
                    ),
                    'ConsecutiveFails' => 
                    array (
                      'description' => '连续绑定或者认证虚拟MFA设备失败的次数。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'SerialNumber' => 
                    array (
                      'description' => '虚拟MFA设备序列号，唯一标识。',
                      'type' => 'string',
                      'example' => 'dc856334-446b-4035-bfbc-18af261e****',
                    ),
                    'Status' => 
                    array (
                      'description' => '虚拟MFA设备状态。',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'LOCKED' => '已锁定',
                        'UNBOUND' => '未绑定',
                        'NORMAL' => '正常',
                      ),
                      'example' => 'NORMAL',
                    ),
                    'DeviceType' => 
                    array (
                      'description' => '虚拟MFA设备类型。目前仅支持TOTP_VIRTUAL，即遵循TOTP算法的虚拟MFA设备。',
                      'type' => 'string',
                      'example' => 'TOTP_VIRTUAL',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"33DBB8EC-6E68-4726-91C4-E09C59D9A7D8\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp\\",\\n  \\"MfaDevices\\": [\\n    {\\n      \\"Id\\": 36,\\n      \\"EndUserId\\": \\"test\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"GmtEnabled\\": \\"2021-06-22T06:20:49Z\\",\\n      \\"GmtUnlock\\": \\"2021-06-23T06:20:49Z\\",\\n      \\"ConsecutiveFails\\": 0,\\n      \\"SerialNumber\\": \\"dc856334-446b-4035-bfbc-18af261e****\\",\\n      \\"Status\\": \\"NORMAL\\",\\n      \\"DeviceType\\": \\"TOTP_VIRTUAL\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMfaDevicesResponse>\\n    <NextToken>AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp</NextToken>\\n    <RequestId>8C09C087-99C3-43F0-BFEA-03E651E04696</RequestId>\\n    <MfaDevices>\\n        <Status>NORMAL</Status>\\n        <DeviceType>TOTP_VIRTUAL</DeviceType>\\n        <GmtEnabled>2021-06-22T06:20:49Z</GmtEnabled>\\n        <EndUserId>test</EndUserId>\\n        <SerialNumber>dc856334-446b-4035-bfbc-18af261e****</SerialNumber>\\n        <ConsecutiveFails>0</ConsecutiveFails>\\n        <Id>36</Id>\\n    </MfaDevices>\\n</DescribeMfaDevicesResponse>","errorExample":""}]',
      'title' => '查询便捷用户绑定的虚拟MFA设备',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SyncAllEduInfo' => 
    array (
      'summary' => '同步所有教育信息。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'BaseResult',
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
      'title' => '同步所有教育信息',
    ),
    'QuerySyncStatusByAliUid' => 
    array (
      'summary' => '查询用户同步状态。',
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
      ),
      'parameters' => 
      array (
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PlainResult<UserSyncHistoryDo>',
            'description' => '返回信息集合。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Id' => 
                  array (
                    'title' => 'auto-increased id',
                    'description' => '自增ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '18500',
                  ),
                  'GmtCreated' => 
                  array (
                    'title' => 'created time',
                    'description' => '创建时间。',
                    'type' => 'string',
                    'example' => '2020-06-30 07:50:42',
                  ),
                  'GmtModified' => 
                  array (
                    'title' => 'modified time',
                    'description' => '修改时间。',
                    'type' => 'string',
                    'example' => '2022-03-02 14:27:39',
                  ),
                  'AliUid' => 
                  array (
                    'title' => 'aliUid of the customer',
                    'description' => '阿里云账号ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '131239236086****',
                  ),
                  'Status' => 
                  array (
                    'title' => 'user sync status',
                    'description' => '用户同步状态。',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'CorpId' => 
                  array (
                    'title' => 'corp id',
                    'description' => '企业ID。',
                    'type' => 'string',
                    'example' => 'cdrs948144195608****',
                  ),
                  'LatestBeginTime' => 
                  array (
                    'title' => 'latestBeginTime',
                    'description' => '最后开始时间。',
                    'type' => 'string',
                    'example' => '2022-03-02 14:31:39',
                  ),
                  'LatestEndTime' => 
                  array (
                    'title' => 'atest_end_time,Whether it is success or failure',
                    'description' => '最后结束时间，不论成功或失败。',
                    'type' => 'string',
                    'example' => '2022-03-02 16:13:12',
                  ),
                  'LatestSuccessTime' => 
                  array (
                    'title' => 'latestSuccessTime',
                    'description' => '最后成功时间。',
                    'type' => 'string',
                    'example' => '2022-03-02 18:24:01',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'Code' => 
              array (
                'description' => '系统状态码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '请求失败的提示信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Id\\": 18500,\\n    \\"GmtCreated\\": \\"2020-06-30 07:50:42\\",\\n    \\"GmtModified\\": \\"2022-03-02 14:27:39\\",\\n    \\"AliUid\\": 0,\\n    \\"Status\\": \\"success\\",\\n    \\"CorpId\\": \\"cdrs948144195608****\\",\\n    \\"LatestBeginTime\\": \\"2022-03-02 14:31:39\\",\\n    \\"LatestEndTime\\": \\"2022-03-02 16:13:12\\",\\n    \\"LatestSuccessTime\\": \\"2022-03-02 18:24:01\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
      'title' => '查询用户同步状态',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eds-user.cn-shanghai.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eds-user.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
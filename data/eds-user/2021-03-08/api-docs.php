<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'eds-user',
        'version' => '2021-03-08',
    ],
    'directories' => [
        [
            'id' => 165074,
            'title' => '用户',
            'type' => 'directory',
            'children' => [
                'CreateUsers',
                'RemoveUsers',
                'ModifyUser',
                'ResetUserPassword',
                'LockUsers',
                'UnlockUsers',
                'DescribeUsers',
                'FilterUsers',
                'GetManagerInfoByAuthCode',
            ],
        ],
        [
            'id' => 165068,
            'title' => '用户属性',
            'type' => 'directory',
            'children' => [
                'CreateProperty',
                'RemoveProperty',
                'DeleteUserPropertyValue',
                'UpdateProperty',
                'SetUserPropertyValue',
                'ListProperty',
                'ListPropertyValue',
                'CheckUsedProperty',
                'CheckUsedPropertyValue',
            ],
        ],
        [
            'id' => 188957,
            'title' => '组织',
            'type' => 'directory',
            'children' => [
                'DescribeOrgs',
            ],
        ],
        [
            'id' => 165058,
            'title' => 'MFA设备',
            'type' => 'directory',
            'children' => [
                'RemoveMfaDevice',
                'LockMfaDevice',
                'UnlockMfaDevice',
                'DescribeMfaDevices',
            ],
        ],
        [
            'id' => 168203,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'SyncAllEduInfo',
                'QuerySyncStatusByAliUid',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'GroupResources' => [
                'title' => 'A short description of struct',
                'description' => '资源组中的资源元数据',
                'type' => 'object',
                'properties' => [
                    'Region' => [
                        'title' => 'Region',
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'title' => 'ResourceType',
                        'type' => 'string',
                    ],
                    'ResourceId' => [
                        'title' => 'ResourceId',
                        'type' => 'string',
                    ],
                ],
            ],
            'WaIdPermissions' => [
                'title' => 'permission',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => 'name',
                        'type' => 'string',
                    ],
                    'Type' => [
                        'title' => 'type',
                        'type' => 'string',
                    ],
                    'Code' => [
                        'title' => 'code',
                        'type' => 'string',
                    ],
                    'SubPermissions' => [
                        'title' => 'subPermissions',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WaIdPermissions',
                        ],
                    ],
                    'IsBasicChild' => [
                        'title' => 'basic',
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateUsers' => [
            'summary' => '为终端用户创建便捷账号。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '便捷账号信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '便捷账号信息。',
                            'type' => 'object',
                            'properties' => [
                                'EndUserId' => [
                                    'description' => '用户名。自定义设置，由小写字母、数字和下划线组成，长度为3~24个字符。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'alice',
                                ],
                                'Email' => [
                                    'description' => '邮箱。用于接收相关邮件，如分配云电脑的通知邮件。邮箱和手机号二选一必填。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'username@example.com',
                                ],
                                'Phone' => [
                                    'description' => '<props="china">手机号。用于接收相关短信，如分配云电脑的通知短信。邮箱和手机号二选一必填。</props>'."\n"
                                        ."\n"
                                        .'<props="intl">国际站不支持手机号。</props>',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1381111****',
                                ],
                                'Password' => [
                                    'description' => '用户密码。'."\n"
                                        ."\n"
                                        .'> 密码长度不少于10位，且至少包含大写字母、小写字母、数字、特殊字符（除空格）中的任意三种。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Wuying1234',
                                ],
                                'OwnerType' => [
                                    'description' => '账号激活类型。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'CreateFromManager' => '管理员激活',
                                        'Normal' => '用户激活',
                                    ],
                                    'example' => 'Normal',
                                ],
                                'OrgId' => [
                                    'description' => '用户所属的组织。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'design',
                                ],
                                'Remark' => [
                                    'description' => '用户备注。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'remark1',
                                ],
                                'RealNickName' => [
                                    'description' => '用户的显示名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Bean',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'example' => 'CreateUsers',
                        'maxItems' => 20,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '初始密码。如果不设置，将发送重置密码邮件到用户邮箱。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test123****',
                        'maxLength' => 256,
                    ],
                ],
                [
                    'name' => 'AutoLockTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动锁定账号的日期。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-03',
                    ],
                ],
                [
                    'name' => 'IsLocalAdmin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否将该便捷账号设为本地管理员。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'PasswordExpireDays',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户账号的密码默认为永久有效，可通过此参数设置30\\~365天的密码有效期，当密码到期后，终端用户必须先修改密码才能继续登录。'."\n"
                            ."\n"
                            .'> 该功能目前处于邀测中，如需体验，请提交工单申请开通。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'CreateResult' => [
                                'description' => '创建便捷账号操作的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedUsers' => [
                                        'description' => '创建成功的便捷账号信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '创建成功的便捷账号信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => 'test1',
                                                ],
                                                'Email' => [
                                                    'description' => '邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'username@example.com',
                                                ],
                                                'Phone' => [
                                                    'description' => '手机号。',
                                                    'type' => 'string',
                                                    'example' => '1381111****',
                                                ],
                                                'Remark' => [
                                                    'description' => '用户备注。',
                                                    'type' => 'string',
                                                    'example' => 'remark1',
                                                ],
                                                'RealNickName' => [
                                                    'description' => '用户的显示名。',
                                                    'type' => 'string',
                                                    'example' => 'Bean',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'FailedUsers' => [
                                        'description' => '创建失败的便捷账号信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '创建失败的便捷账号信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => 'test2',
                                                ],
                                                'Email' => [
                                                    'description' => '邮箱。',
                                                    'type' => 'string',
                                                    'example' => 'username2@example.com',
                                                ],
                                                'Phone' => [
                                                    'description' => '手机号。',
                                                    'type' => 'string',
                                                    'example' => '1390000****',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => 'ExistedEndUserId',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'The username test is used by another user.',
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
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'INTERNAL_ERROR',
                        'errorMessage' => 'Internal error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"CreateResult\\": {\\n    \\"CreatedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test1\\",\\n        \\"Email\\": \\"username@example.com\\",\\n        \\"Phone\\": \\"1381111****\\",\\n        \\"Remark\\": \\"remark1\\",\\n        \\"RealNickName\\": \\"Bean\\"\\n      }\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test2\\",\\n        \\"Email\\": \\"username2@example.com\\",\\n        \\"Phone\\": \\"1390000****\\",\\n        \\"ErrorCode\\": \\"ExistedEndUserId\\",\\n        \\"ErrorMessage\\": \\"The username test is used by another user.\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '创建便捷账号',
            'description' => '<props="china">便捷账号是无影专用的账号体系，适用于不希望对接企业AD的简单场景。便捷账号信息包括用户名、邮箱和手机号。其中，用户名为必填信息，邮箱和手机号至少填写一项。</props>'."\n"
                ."\n"
                .'<props="intl">便捷账号是无影专用的账号体系，适用于不希望对接企业AD的简单场景。便捷账号信息包括用户名和邮箱，均为必填信息。</props>',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveUsers' => [
            'summary' => '删除一个或者多个便捷账号。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要删除的便捷账号的用户名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要删除的便捷账号的用户名。用户名可以通过[DescribeUsers](~~DescribeUsers~~)接口获取。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'test1',
                        ],
                        'required' => true,
                        'example' => 'test1',
                        'maxItems' => 100,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'RemoveUsersResult' => [
                                'description' => '删除便捷账号操作的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'RemovedUsers' => [
                                        'description' => '删除成功的便捷账号。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除成功的便捷账号。',
                                            'type' => 'string',
                                            'example' => 'test1',
                                        ],
                                    ],
                                    'FailedUsers' => [
                                        'description' => '删除失败的用户信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '删除失败的便捷账号。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '删除失败的便捷账号。',
                                                    'type' => 'string',
                                                    'example' => 'test2',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => 'InvalidUsername',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'test2 is an invalid username.',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"RemoveUsersResult\\": {\\n    \\"RemovedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test2\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test2 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveUsersResponse>\\n    <RequestId>45341120-2560-4087-8359-B936E58DDB90</RequestId>\\n    <RemoveUsersResult>\\n        <FailedUsers>\\n            <EndUserId>test2</EndUserId>\\n            <ErrorCode>InvalidUsername</ErrorCode>\\n            <ErrorMessage>test2 is invalid username</ErrorMessage>\\n        </FailedUsers>\\n        <RemovedUsers>test1</RemovedUsers>\\n    </RemoveUsersResult>\\n</RemoveUsersResponse>","errorExample":""}]',
            'title' => '删除便捷账号',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyUser' => [
            'summary' => '修改用户信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'EndUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Alice',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱。'."\n"
                            .'如果便捷用户的类型为用户激活，需要验证邮箱或手机号码。邮箱或手机号码二选一。如果便捷账号的类型为管理员激活，邮箱和手机均可以为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'username@example.com',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号。'."\n"
                            .'如果便捷用户的类型为用户激活，需要验证邮箱或手机号码。邮箱或手机号码二选一。如果便捷账号的类型为管理员激活，邮箱和手机均可以为空。 '."\n"
                            .' ><notice>国际站账号不支持手机号认证。></notice>',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1381111****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '修改用户',
        ],
        'ResetUserPassword' => [
            'summary' => '调用ResetUserPassword重置便捷用户的密码，包括生成重置密码Token，并发送重置密码邮件到便捷用户的邮箱。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要重置密码的便捷用户的用户名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要重置密码的便捷用户的用户名。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'test1',
                        ],
                        'required' => true,
                        'example' => 'test1',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'NotifyType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '重置密码后通知用户的方式。'."\n"
                            ."\n"
                            .'> 国际站账号不支持通过短信通知用户的方式。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enumValueTitles' => [
                            1 => '通过邮箱通知用户',
                            '通过短信通知用户',
                            '邮箱和短信都发送通知',
                        ],
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '32D05B39-E6EE-4D7A-9FD0-762A26859D0D',
                            ],
                            'ResetUsersResult' => [
                                'description' => '重置便捷用户密码操作的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'ResetUsers' => [
                                        'description' => '已发送重置密码邮件的便捷用户。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '已发送重置密码邮件的便捷用户。',
                                            'type' => 'string',
                                            'example' => 'test1',
                                        ],
                                    ],
                                    'FailedUsers' => [
                                        'description' => '重置密码失败的便捷用户信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '重置密码失败的便捷用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '重置密码失败的便捷用户。',
                                                    'type' => 'string',
                                                    'example' => 'test123',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => 'InvalidUsername',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'test123 is an invalid username.',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"32D05B39-E6EE-4D7A-9FD0-762A26859D0D\\",\\n  \\"ResetUsersResult\\": {\\n    \\"ResetUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ResetUserPasswordResponse>\\n    <RequestId>32D05B39-E6EE-4D7A-9FD0-762A26859D0D</RequestId>\\n    <ResetUsersResult>\\n        <ResetUsers>test1</ResetUsers>\\n    </ResetUsersResult>\\n</ResetUserPasswordResponse>","errorExample":""}]',
            'title' => '重置便捷用户账号的密码',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'LockUsers' => [
            'summary' => '锁定一个或者多个便捷用户。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要锁定的便捷用户的用户名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要锁定的便捷用户的用户名。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'test1',
                        ],
                        'required' => true,
                        'example' => 'test1',
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'LockUsersResult' => [
                                'description' => '锁定便捷用户操作的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'LockedUsers' => [
                                        'description' => '锁定成功的便捷用户。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '锁定成功的便捷用户。',
                                            'type' => 'string',
                                            'example' => 'test1',
                                        ],
                                    ],
                                    'FailedUsers' => [
                                        'description' => '锁定失败的便捷用户信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '锁定失败的便捷用户。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '锁定失败的便捷用户。',
                                                    'type' => 'string',
                                                    'example' => 'test123',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => 'InvalidUsername',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'test123 is an invalid username.',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"LockUsersResult\\": {\\n    \\"LockedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<LockUsersResponse>\\n    <LockUsersResult>\\n        <LockedUsers>test1</LockedUsers>\\n    </LockUsersResult>\\n    <RequestId>EC4A8495-3323-4364-A374-FEE8584644F8</RequestId>\\n</LockUsersResponse>","errorExample":""}]',
            'title' => '锁定便捷用户',
            'description' => '出于安全考虑，您可以锁定便捷用户。被锁定的便捷用户无法登录云桌面。'."\n"
                ."\n"
                .'> 您可以调用[DescribeUsers](~~283609~~)查询便捷用户信息。返回数据中`Status`取值为0，表示该便捷用户未被锁定；`Status`取值为9，表示该便捷用户已被锁定。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnlockUsers' => [
            'summary' => '解锁一个或者多个便捷用户。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Users',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要解锁的便捷用户的用户名列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要解锁的便捷用户的用户名。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'test1',
                        ],
                        'required' => true,
                        'example' => 'test1',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'AutoLockTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自动锁定用户的日期，到期后用户将自动锁定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2023-03-03',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '023F4EC4-3602-4A3E-A514-4970847D59DB',
                            ],
                            'UnlockUsersResult' => [
                                'description' => '解锁便捷用户操作的结果。',
                                'type' => 'object',
                                'properties' => [
                                    'UnlockedUsers' => [
                                        'description' => '解锁成功的便捷用户。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '解锁成功的便捷用户。',
                                            'type' => 'string',
                                            'example' => 'test1',
                                        ],
                                    ],
                                    'FailedUsers' => [
                                        'description' => '解锁失败的便捷用户信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '解锁失败的便捷用户。',
                                            'type' => 'object',
                                            'properties' => [
                                                'EndUserId' => [
                                                    'description' => '解锁失败的便捷用户。',
                                                    'type' => 'string',
                                                    'example' => 'test123',
                                                ],
                                                'ErrorCode' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => 'InvalidUsername',
                                                ],
                                                'ErrorMessage' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'test123 is an invalid username.',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"023F4EC4-3602-4A3E-A514-4970847D59DB\\",\\n  \\"UnlockUsersResult\\": {\\n    \\"UnlockedUsers\\": [\\n      \\"test1\\"\\n    ],\\n    \\"FailedUsers\\": [\\n      {\\n        \\"EndUserId\\": \\"test123\\",\\n        \\"ErrorCode\\": \\"InvalidUsername\\",\\n        \\"ErrorMessage\\": \\"test123 is an invalid username.\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UnlockUsersResponse>\\n    <RequestId>023F4EC4-3602-4A3E-A514-4970847D59DB</RequestId>\\n    <UnlockUsersResult>\\n        <UnlockedUsers>test1</UnlockedUsers>\\n    </UnlockUsersResult>\\n</UnlockUsersResponse>","errorExample":""}]',
            'title' => '解锁便捷用户',
            'description' => '被锁定的便捷用户无法登录云桌面，需要解锁后才能登录。'."\n"
                ."\n"
                .'> 您可以调用[DescribeUsers](~~283609~~)查询便捷用户信息。返回数据中`Status`取值为0，表示该便捷用户未被锁定；`Status`取值为9，表示该便捷用户已被锁定。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeUsers' => [
            'summary' => '查询便捷用户信息，例如便捷用户的用户名、邮箱地址、备注名称等等。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数。  '."\n"
                            ."\n"
                            .'- 取值范围：1~500。  '."\n"
                            .'- 默认值：500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'enumValueTitles' => [],
                        'example' => '10',
                        'default' => '500',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次查询的Token。首次调用接口时无需设置该参数。      '."\n"
                            .'如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊搜索字符串，支持匹配用户名（EndUserId）和邮箱（Email）。该字段支持使用通配符（*），例如将该字段设为`a*m`，则返回用户名或邮箱以`a`开头、以`m`结尾的所有结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a*m',
                    ],
                ],
                [
                    'name' => 'EndUserIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需精确匹配的用户名（EndUserId）列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '按用户名（EndUserId）精确匹配，查询用户名一致的用户信息。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'alice',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'ExcludeEndUserIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需精确排除的用户名（EndUserId）列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '按用户名（EndUserId）精确排除，查询不包含该用户名的用户列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tony',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'OrgId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '按组织ID精确匹配，查询归属该组织的用户列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'org-4mdgc1cocc59z****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '按用户组ID精确匹配，查询归属该用户组的用户列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ug-12341234****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'NextToken' => [
                                'description' => '下一次查询的Token。NextToken为空表示没有下一次。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'Users' => [
                                'title' => 'users',
                                'description' => '便捷用户信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '便捷用户信息集合。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '用户ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4205**',
                                        ],
                                        'EndUserId' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => 'alice',
                                        ],
                                        'Email' => [
                                            'description' => '邮箱。',
                                            'type' => 'string',
                                            'example' => 'username@example.com',
                                        ],
                                        'Phone' => [
                                            'description' => '手机号，如未设置该参数则不返回该参数。',
                                            'type' => 'string',
                                            'example' => '1381111****',
                                        ],
                                        'Status' => [
                                            'description' => '状态。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'enumValueTitles' => [
                                                '正常',
                                                9 => '锁定',
                                            ],
                                            'example' => '0',
                                        ],
                                        'OwnerType' => [
                                            'description' => '便捷账号类型，包括：'."\n"
                                                ."\n"
                                                .'* 管理员激活类型，管理员设置用户名及用户密码，重置密码等用户通知将发送到管理员的邮箱或手机。'."\n"
                                                .'* 用户激活类型，管理员设置用户名及用户接收通知的邮件或手机，云桌面开通通知（含初始密码）等用户通知将发送到用户的邮件或手机。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'CreateFromManager' => '管理员激活',
                                                'Normal' => '用户激活',
                                            ],
                                            'example' => 'Normal',
                                        ],
                                        'Remark' => [
                                            'description' => '用户的备注。',
                                            'type' => 'string',
                                            'example' => '测试专用用户',
                                        ],
                                        'OrgId' => [
                                            'description' => '用户归属的部门ID。'."\n"
                                                .'> 该参数即将废弃。',
                                            'type' => 'string',
                                            'example' => 'org-4mdgc1cocc59z****',
                                        ],
                                        'WyId' => [
                                            'description' => '用户全局唯一ID。',
                                            'type' => 'string',
                                            'example' => '41fd1254d8f7****',
                                        ],
                                        'IsTenantManager' => [
                                            'description' => '是否为用户管理员。如果创建的便捷用户是管理员激活类型，则必须指定一位用户管理员，终端用户通过客户端重置密码等通知将发送到该用户管理员的邮箱或手机，详情参见[创建便捷用户](~~214472~~)。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Groups' => [
                                            'description' => '用户归属的用户组集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户归属的用户组属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'GroupId' => [
                                                        'description' => '用户组ID。',
                                                        'type' => 'string',
                                                        'example' => 'ug-12341234****',
                                                    ],
                                                    'GroupName' => [
                                                        'description' => '用户组名称。',
                                                        'type' => 'string',
                                                        'example' => '用户组1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Orgs' => [
                                            'description' => '用户归属的部门集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户归属的部门属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'OrgId' => [
                                                        'description' => '部门ID。',
                                                        'type' => 'string',
                                                        'example' => 'org-4mdgc1cocc59z****',
                                                    ],
                                                    'OrgName' => [
                                                        'description' => '部门名称。',
                                                        'type' => 'string',
                                                        'example' => '部门1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Avatar' => [
                                            'description' => '用户头像。',
                                            'type' => 'string',
                                            'example' => 'https://cdn.*****',
                                        ],
                                        'Address' => [
                                            'description' => '用户工作地址。',
                                            'type' => 'string',
                                            'example' => '杭州市***',
                                        ],
                                        'JobNumber' => [
                                            'description' => '用户工号。',
                                            'type' => 'string',
                                            'example' => 'A10000**',
                                        ],
                                        'NickName' => [
                                            'description' => '用户昵称。',
                                            'type' => 'string',
                                            'example' => '李**',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"Users\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"EndUserId\\": \\"alice\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": 0,\\n      \\"OwnerType\\": \\"Normal\\",\\n      \\"Remark\\": \\"测试专用用户\\",\\n      \\"OrgId\\": \\"org-4mdgc1cocc59z****\\",\\n      \\"WyId\\": \\"41fd1254d8f7****\\",\\n      \\"IsTenantManager\\": true,\\n      \\"Groups\\": [\\n        {\\n          \\"GroupId\\": \\"ug-12341234****\\",\\n          \\"GroupName\\": \\"用户组1\\"\\n        }\\n      ],\\n      \\"Orgs\\": [\\n        {\\n          \\"OrgId\\": \\"org-4mdgc1cocc59z****\\",\\n          \\"OrgName\\": \\"部门1\\"\\n        }\\n      ],\\n      \\"Avatar\\": \\"https://cdn.*****\\",\\n      \\"Address\\": \\"杭州市***\\",\\n      \\"JobNumber\\": \\"A10000**\\",\\n      \\"NickName\\": \\"李**\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeUsersResponse>\\n    <RequestId>BA75EDC9-8A5F-40C2-ABD5-EBAE56A4D67C</RequestId>\\n    <Users>\\n        <Status>0</Status>\\n        <Email>test1@example***.com</Email>\\n        <EndUserId>test1</EndUserId>\\n        <Id>12345</Id>\\n    </Users>\\n</DescribeUsersResponse>","errorExample":""}]',
            'title' => '查询便捷用户信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'FilterUsers' => [
            'summary' => '按用户属性筛选查询便捷账号信息。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时每页行数（大于100时会自动重置为100）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次查询的Token。首次调用接口时无需设置该参数。如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊搜索字符串，支持匹配用户名（EndUserId）和邮箱（Email）。该字段支持使用通配符（\\*），例如将该字段设为a*m，则返回用户名或邮箱以a开头、以m结尾的所有结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a*m',
                    ],
                ],
                [
                    'name' => 'PropertyFilterParam',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要模糊查询的用户属性列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要模糊查询的用户属性。',
                            'type' => 'object',
                            'properties' => [
                                'PropertyId' => [
                                    'description' => '属性ID。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '328',
                                ],
                                'PropertyValueIds' => [
                                    'description' => '属性值ID。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1255',
                                    'maxItems' => 100,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'PropertyKeyValueFilterParam',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '属性名和属性值信息列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '属性名和属性值信息。',
                            'type' => 'object',
                            'properties' => [
                                'PropertyKey' => [
                                    'description' => '属性名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'job',
                                ],
                                'PropertyValues' => [
                                    'description' => '属性值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'dev',
                                    'maxItems' => 100,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'IncludeDesktopCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回已分配给该用户的云电脑数量。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '返回分配的云电脑数量',
                            'false' => '不返回分配的云电脑数量',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'IncludeDesktopGroupCount',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否返回已分配给该用户的云电脑池数量。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '返回分配的云电脑池数量',
                            'false' => '不返回分配的云电脑池数量',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'OrgId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '企业组织ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'org-aliyun-wy-org-id',
                    ],
                ],
                [
                    'name' => 'OwnerType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '账号激活类型。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CreateFromManager' => '管理员激活',
                            'Normal' => '用户激活',
                        ],
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'ExcludeEndUserIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '需精确排除的用户名（EndUserId）列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '按用户名（EndUserId）精确排除，查询不包含该用户名的用户列表。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tony',
                        ],
                        'required' => false,
                        'maxItems' => 2000,
                    ],
                ],
                [
                    'name' => 'OrderParam',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '支持的排序参数。',
                        'type' => 'object',
                        'properties' => [
                            'OrderField' => [
                                'description' => '按此参数排序。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'EndUserId' => '用户名',
                                    'id' => '用户主键ID',
                                    'gmt_created' => '创建时间',
                                ],
                                'example' => 'id',
                            ],
                            'OrderType' => [
                                'description' => '升序或降序。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'ASC' => '升序',
                                    'DESC' => '降序 [默认值]',
                                ],
                                'example' => 'DESC',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'NextToken' => [
                                'description' => '下一次查询的Token。如果一次查询结果并没有完整返回所有的结果，则返回的NextToken不为空。您可以在查询中上传返回的NextToken继续查询。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'Users' => [
                                'title' => 'users',
                                'description' => '便捷账号信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '便捷账号信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '用户ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '4205**',
                                        ],
                                        'EndUserId' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => 'alice',
                                        ],
                                        'Email' => [
                                            'description' => '邮箱。',
                                            'type' => 'string',
                                            'example' => 'username@example.com',
                                        ],
                                        'Phone' => [
                                            'description' => '手机号。',
                                            'type' => 'string',
                                            'example' => '1381111****',
                                        ],
                                        'Status' => [
                                            'description' => '便捷账号的状态。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'enumValueTitles' => [
                                                '正常',
                                                9 => '锁定',
                                            ],
                                            'example' => '0',
                                        ],
                                        'UserSetPropertiesModels' => [
                                            'description' => '用户属性集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserId' => [
                                                        'description' => '绑定属性的用户ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '4205**',
                                                    ],
                                                    'UserName' => [
                                                        'description' => '绑定属性的用户名。',
                                                        'type' => 'string',
                                                        'example' => 'alice',
                                                    ],
                                                    'PropertyId' => [
                                                        'description' => '用户属性ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '12',
                                                    ],
                                                    'PropertyKey' => [
                                                        'description' => '用户属性名称。',
                                                        'type' => 'string',
                                                        'example' => 'department',
                                                    ],
                                                    'PropertyType' => [
                                                        'description' => '用户属性编号。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '2',
                                                    ],
                                                    'PropertyValues' => [
                                                        'description' => '用户属性值。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '用户属性值。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'PropertyValueId' => [
                                                                    'description' => '用户属性值ID。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                    'example' => '42',
                                                                ],
                                                                'PropertyValue' => [
                                                                    'description' => '用户属性值。',
                                                                    'type' => 'string',
                                                                    'example' => 'dev',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'DesktopCount' => [
                                            'description' => '分配给该用户的云电脑数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'ExternalInfo' => [
                                            'description' => '用户扩展信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ExternalName' => [
                                                    'description' => '用户对接的账号名称。',
                                                    'type' => 'string',
                                                    'example' => 'account',
                                                ],
                                                'JobNumber' => [
                                                    'description' => '用户对接的账号、学号或工号。',
                                                    'type' => 'string',
                                                    'example' => '030801',
                                                ],
                                            ],
                                        ],
                                        'DesktopGroupCount' => [
                                            'description' => '用户拥有授权的云电脑池数量。当`IncludeDesktopGroupCount`取值为`true`时，返回该值。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'OwnerType' => [
                                            'description' => '账号归属类型。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'CreateFromManager' => '管理员激活',
                                                'Normal' => '用户激活',
                                            ],
                                            'example' => 'Normal',
                                        ],
                                        'Remark' => [
                                            'description' => '用户备注。',
                                            'type' => 'string',
                                            'example' => '测试专用',
                                        ],
                                        'IsTenantManager' => [
                                            'description' => '是否租户管理员。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '是',
                                                'false' => '否',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'EnableAdminAccess' => [
                                            'description' => '是否本地管理员。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '是',
                                                'false' => '否',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'RealNickName' => [
                                            'description' => '用户昵称。',
                                            'type' => 'string',
                                            'example' => '小明',
                                        ],
                                        'AutoLockTime' => [
                                            'description' => '自动锁定账号的日期。',
                                            'type' => 'string',
                                            'example' => '2023-03-03',
                                        ],
                                        'PasswordExpireDays' => [
                                            'description' => '用户账号的密码默认为永久有效，可通过此参数设置30\\~365天的密码有效期，当密码到期后，终端用户必须先修改密码才能继续登录。'."\n"
                                                ."\n"
                                                .'> 该功能目前处于邀测中，如需体验，请提交工单申请开通。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'PasswordExpireRestDays' => [
                                            'description' => '账号密码有效期的剩余天数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"Users\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"EndUserId\\": \\"alice\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": 0,\\n      \\"UserSetPropertiesModels\\": [\\n        {\\n          \\"UserId\\": 0,\\n          \\"UserName\\": \\"alice\\",\\n          \\"PropertyId\\": 12,\\n          \\"PropertyKey\\": \\"department\\",\\n          \\"PropertyType\\": 2,\\n          \\"PropertyValues\\": [\\n            {\\n              \\"PropertyValueId\\": 42,\\n              \\"PropertyValue\\": \\"dev\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"DesktopCount\\": 1,\\n      \\"ExternalInfo\\": {\\n        \\"ExternalName\\": \\"account\\",\\n        \\"JobNumber\\": \\"030801\\"\\n      },\\n      \\"DesktopGroupCount\\": 2,\\n      \\"OwnerType\\": \\"Normal\\",\\n      \\"Remark\\": \\"测试专用\\",\\n      \\"IsTenantManager\\": true,\\n      \\"EnableAdminAccess\\": true,\\n      \\"RealNickName\\": \\"小明\\",\\n      \\"AutoLockTime\\": \\"2023-03-03\\",\\n      \\"PasswordExpireDays\\": 30,\\n      \\"PasswordExpireRestDays\\": 10\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<FilterUsersResponse>\\n    <RequestId>DBD276B5-00FF-5E04-8EF7-5CBA09BF112A</RequestId>\\n    <Users>\\n        <Status>0</Status>\\n        <EndUserId>testName</EndUserId>\\n        <Email>testName@example.com</Email>\\n        <Phone/>\\n        <Id>12345</Id>\\n        <UserSetPropertiesModels>\\n            <PropertyValues>\\n                <PropertyValueId>184</PropertyValueId>\\n                <PropertyValue>true</PropertyValue>\\n            </PropertyValues>\\n            <UserId>12345</UserId>\\n            <PropertyType>1</PropertyType>\\n            <PropertyKey>enableAdminAccess</PropertyKey>\\n            <PropertyId>145</PropertyId>\\n        </UserSetPropertiesModels>\\n        <UserSetPropertiesModels>\\n            <PropertyValues>\\n                <PropertyValueId>42</PropertyValueId>\\n                <PropertyValue>A</PropertyValue>\\n            </PropertyValues>\\n            <UserId>12345</UserId>\\n            <PropertyType>2</PropertyType>\\n            <PropertyKey>department</PropertyKey>\\n            <PropertyId>30</PropertyId>\\n        </UserSetPropertiesModels>\\n    </Users>\\n</FilterUsersResponse>","errorExample":""}]',
            'title' => '筛选查询便捷账号信息',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetManagerInfoByAuthCode' => [
            'summary' => '根据authcode获取当前登录的管理员信息。',
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
                    'name' => 'AuthCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '授权码',
                        'description' => '授权码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e49cd070452f0044813a467d4743****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'WaId' => [
                                'title' => '租户无影账号ID',
                                'description' => '租户无影账号ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '12345678901234****',
                            ],
                            'OrgId' => [
                                'title' => '组织ID',
                                'description' => '组织ID。',
                                'type' => 'string',
                                'example' => '12345678901234****',
                            ],
                            'UserName' => [
                                'title' => '租户名称',
                                'description' => '租户名称。',
                                'type' => 'string',
                                'example' => 'zhangsan',
                            ],
                            'Phone' => [
                                'title' => '手机号',
                                'description' => '手机号。',
                                'type' => 'string',
                                'example' => '1301234****',
                            ],
                            'TeamName' => [
                                'title' => '团队名称',
                                'description' => '团队名称。',
                                'type' => 'string',
                                'example' => 'devteam',
                            ],
                        ],
                    ],
                ],
                [],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"WaId\\": 0,\\n  \\"OrgId\\": \\"12345678901234****\\",\\n  \\"UserName\\": \\"zhangsan\\",\\n  \\"Phone\\": \\"1301234****\\",\\n  \\"TeamName\\": \\"devteam\\"\\n}","type":"json"}]',
            'title' => '根据authcode获取当前登录的管理员信息',
        ],
        'CreateProperty' => [
            'summary' => '创建一个用户属性。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PropertyKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'department',
                    ],
                ],
                [
                    'name' => 'PropertyValues',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '属性值。一个属性下最多可以添加50个不同的属性值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '属性值。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'HR',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'CreateResult' => [
                                'description' => '创建结果。',
                                'type' => 'object',
                                'properties' => [
                                    'PropertyId' => [
                                        'description' => '属性ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '390',
                                    ],
                                    'PropertyKey' => [
                                        'description' => '属性名。',
                                        'type' => 'string',
                                        'example' => 'department',
                                    ],
                                    'SavePropertyValueModel' => [
                                        'description' => '属性值创建结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SavePropertyValues' => [
                                                'description' => '创建成功的属性值。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '创建成功的属性值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PropertyValueId' => [
                                                            'description' => '属性值ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '978',
                                                        ],
                                                        'PropertyValue' => [
                                                            'description' => '属性值。',
                                                            'type' => 'string',
                                                            'example' => 'HR',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'FailedPropertyValues' => [
                                                'description' => '创建失败的属性值。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '修改失败的属性值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PropertyId' => [
                                                            'description' => '属性值ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '390',
                                                        ],
                                                        'PropertyValue' => [
                                                            'description' => '属性值。',
                                                            'type' => 'string',
                                                            'example' => 'HR',
                                                        ],
                                                        'ErrorCode' => [
                                                            'description' => '错误码。',
                                                            'type' => 'string',
                                                            'example' => 'ExistedPropertyValue',
                                                        ],
                                                        'ErrorMessage' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'The property value is used by another property.',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"CreateResult\\": {\\n    \\"PropertyId\\": 390,\\n    \\"PropertyKey\\": \\"department\\",\\n    \\"SavePropertyValueModel\\": {\\n      \\"SavePropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 978,\\n          \\"PropertyValue\\": \\"HR\\"\\n        }\\n      ],\\n      \\"FailedPropertyValues\\": [\\n        {\\n          \\"PropertyId\\": 390,\\n          \\"PropertyValue\\": \\"HR\\",\\n          \\"ErrorCode\\": \\"ExistedPropertyValue\\",\\n          \\"ErrorMessage\\": \\"The property value is used by another property.\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreatePropertyResponse>\\n    <RequestId>499B0E01-8AE3-5099-95CE-E69CF4DBE177</RequestId>\\n    <CreateResult>\\n        <PropertyId>390</PropertyId>\\n        <PropertyKey>department</PropertyKey>\\n        <SavePropertyValueModel>\\n            <SavePropertyValues>\\n                <PropertyValueId>978</PropertyValueId>\\n                <PropertyValue>HR</PropertyValue>\\n            </SavePropertyValues>\\n            <FailedPropertyValues>\\n                <PropertyId>390</PropertyId>\\n                <PropertyValue>HR</PropertyValue>\\n                <ErrorCode>ExistedPropertyValue</ErrorCode>\\n                <ErrorMessage>property value is used by other property</ErrorMessage>\\n            </FailedPropertyValues>\\n        </SavePropertyValueModel>\\n    </CreateResult>\\n</CreatePropertyResponse>","errorExample":""}]',
            'title' => '创建用户自定义属性',
            'description' => '- 一个阿里云账号下最多可以创建10个不同的属性。每个属性包括一个属性名（PropertyKey）和多个属性值（PropertyValue）。'."\n"
                .'- 一个属性下最多可以添加50个不同的属性值。',
        ],
        'RemoveProperty' => [
            'summary' => '删除一组用户属性。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PropertyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性ID。您可以调用[ListProperty](~~410890~~)进行查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '390',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<RemovePropertyResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</RemovePropertyResponse>","errorExample":""}]',
            'title' => '删除用户自定义属性',
        ],
        'DeleteUserPropertyValue' => [
            'summary' => '解除一个用户与某个用户属性的绑定关系。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'PropertyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '390',
                    ],
                ],
                [
                    'name' => 'PropertyValueId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性值ID。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '978',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D6C62E40-F937-5803-B008-92E813399BA5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D6C62E40-F937-5803-B008-92E813399BA5\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserPropertyValueResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</DeleteUserPropertyValueResponse>","errorExample":""}]',
            'title' => '删除用户自定义属性值',
            'description' => '操作前，您可以调用FilterUsers查询用户绑定的用户属性情况。',
        ],
        'UpdateProperty' => [
            'summary' => '修改用户属性。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PropertyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要修改的属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '390',
                    ],
                ],
                [
                    'name' => 'PropertyKey',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '修改后的属性名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testkey',
                    ],
                ],
                [
                    'name' => 'PropertyValues',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '要修改的属性值。',
                        'type' => 'array',
                        'items' => [
                            'description' => '要修改的属性值。',
                            'type' => 'object',
                            'properties' => [
                                'PropertyValueId' => [
                                    'description' => '要修改的属性值ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '978',
                                ],
                                'PropertyValue' => [
                                    'description' => '修改后的属性值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'testvalue',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'UpdateResult' => [
                                'description' => '修改结果。',
                                'type' => 'object',
                                'properties' => [
                                    'PropertyId' => [
                                        'description' => '属性ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '390',
                                    ],
                                    'PropertyKey' => [
                                        'description' => '属性名。',
                                        'type' => 'string',
                                        'example' => 'testkey2',
                                    ],
                                    'SavePropertyValueModel' => [
                                        'description' => '属性值修改结果。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SavePropertyValues' => [
                                                'description' => '修改成功的属性值。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '修改成功的属性值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PropertyValueId' => [
                                                            'description' => '属性值ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '978',
                                                        ],
                                                        'PropertyValue' => [
                                                            'description' => '属性值。',
                                                            'type' => 'string',
                                                            'example' => 'testvalue2',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'FailedPropertyValues' => [
                                                'description' => '修改失败的属性值。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '修改失败的属性值。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PropertyId' => [
                                                            'description' => '属性ID。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '390',
                                                        ],
                                                        'PropertyValue' => [
                                                            'description' => '属性值。',
                                                            'type' => 'string',
                                                            'example' => 'testvalue',
                                                        ],
                                                        'ErrorCode' => [
                                                            'description' => '错误码。',
                                                            'type' => 'string',
                                                            'example' => 'ExistedPropertyValue',
                                                        ],
                                                        'ErrorMessage' => [
                                                            'description' => '错误信息。',
                                                            'type' => 'string',
                                                            'example' => 'The property value is used by another property.',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"UpdateResult\\": {\\n    \\"PropertyId\\": 390,\\n    \\"PropertyKey\\": \\"testkey2\\",\\n    \\"SavePropertyValueModel\\": {\\n      \\"SavePropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 978,\\n          \\"PropertyValue\\": \\"testvalue2\\"\\n        }\\n      ],\\n      \\"FailedPropertyValues\\": [\\n        {\\n          \\"PropertyId\\": 390,\\n          \\"PropertyValue\\": \\"testvalue\\",\\n          \\"ErrorCode\\": \\"ExistedPropertyValue\\",\\n          \\"ErrorMessage\\": \\"The property value is used by another property.\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdatePropertyResponse>\\n    <RequestId>FF3CE680-7710-5ECD-8565-8B103C5301F1</RequestId>\\n    <UpdateResult>\\n        <SavePropertyValueModel>\\n            <SavePropertyValues>\\n                <PropertyValueId>978</PropertyValueId>\\n                <PropertyValue>testvalue</PropertyValue>\\n            </SavePropertyValues>\\n        </SavePropertyValueModel>\\n        <PropertyKey>testkey</PropertyKey>\\n        <PropertyId>390</PropertyId>\\n    </UpdateResult>\\n</UpdatePropertyResponse>","errorExample":""}]',
            'title' => '修改自定义属性',
        ],
        'SetUserPropertyValue' => [
            'summary' => '为某个用户关联一个用户属性。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户ID。可以调用[DescribeUsers](~~DescribeUsers~~)获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '11',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PropertyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '390',
                    ],
                ],
                [
                    'name' => 'PropertyValueId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '属性值ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '978',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","errorExample":""},{"type":"xml","example":"<SetUserPropertyValueResponse>\\n    <RequestId>D6C62E40-F937-5803-B008-92E813399BA5</RequestId>\\n</SetUserPropertyValueResponse>","errorExample":""}]',
            'title' => '用户关联自定义属性值',
        ],
        'ListProperty' => [
            'summary' => '查询当前账号下已有的用户属性列表。',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始的Token，NextToken为空表示没有下一个。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                            ],
                            'Properties' => [
                                'title' => 'users',
                                'description' => '属性信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '属性信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PropertyId' => [
                                            'description' => '属性ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'PropertyKey' => [
                                            'description' => '属性名。',
                                            'type' => 'string',
                                            'example' => 'department',
                                        ],
                                        'PropertyValues' => [
                                            'description' => '属性值信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '属性值信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PropertyValueId' => [
                                                        'description' => '属性值ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '42',
                                                    ],
                                                    'PropertyValue' => [
                                                        'description' => '属性值。',
                                                        'type' => 'string',
                                                        'example' => 'A',
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
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a4883\\",\\n  \\"Properties\\": [\\n    {\\n      \\"PropertyId\\": 30,\\n      \\"PropertyKey\\": \\"department\\",\\n      \\"PropertyValues\\": [\\n        {\\n          \\"PropertyValueId\\": 42,\\n          \\"PropertyValue\\": \\"A\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPropertyResponse>\\n    <RequestId>2F4FD101-8D7B-5C97-96D6-8ACB711A7EAA</RequestId>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <Properties>\\n        <PropertyId>30</PropertyId>\\n        <PropertyKey>department</PropertyKey>\\n        <PropertyValues>\\n            <PropertyValueId>42</PropertyValueId>\\n            <PropertyValue>A</PropertyValue>\\n        </PropertyValues>\\n    </Properties>\\n</ListPropertyResponse>","errorExample":""}]',
            'title' => '查询属性',
        ],
        'ListPropertyValue' => [
            'summary' => '查询某一用户属性包含的属性值列表。',
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
                    'name' => 'PropertyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '390',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C52013A5-3422-5D1F-B22C-A57110972AD9',
                            ],
                            'PropertyValueInfos' => [
                                'title' => 'users',
                                'description' => '属性值列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '属性值信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PropertyValueId' => [
                                            'description' => '属性值ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '978',
                                        ],
                                        'PropertyValue' => [
                                            'description' => '属性值。',
                                            'type' => 'string',
                                            'example' => 'HR',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C52013A5-3422-5D1F-B22C-A57110972AD9\\",\\n  \\"PropertyValueInfos\\": [\\n    {\\n      \\"PropertyValueId\\": 978,\\n      \\"PropertyValue\\": \\"HR\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPropertyValueResponse>\\n    <RequestId>C52013A5-3422-5D1F-B22C-A57110972AD9</RequestId>\\n    <PropertyValueInfos>\\n        <PropertyValueId>978</PropertyValueId>\\n        <PropertyValue>HR</PropertyValue>\\n    </PropertyValueInfos>\\n</ListPropertyValueResponse>","errorExample":""}]',
            'title' => '查询用户自定义属性值',
        ],
        'CheckUsedProperty' => [
            'summary' => '校验某一用户属性是否已关联便捷用户。',
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
                    'name' => 'PropertyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '属性ID。您可以调用[ListProperty](~~ListProperty~~)进行查询。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '390',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '22C97624-2405-54AC-BD44-A63FBE97CC2D',
                            ],
                            'UseCount' => [
                                'description' => '已关联用户属性的用户数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"22C97624-2405-54AC-BD44-A63FBE97CC2D\\",\\n  \\"UseCount\\": 7\\n}","errorExample":""},{"type":"xml","example":"<CheckUsedPropertyResponse>\\n    <RequestId>22C97624-2405-54AC-BD44-A63FBE97CC2D</RequestId>\\n    <UseCount>7</UseCount>\\n</CheckUsedPropertyResponse>","errorExample":""}]',
            'title' => '校验自定义属性是否有关联用户',
        ],
        'CheckUsedPropertyValue' => [
            'summary' => '校验自定义属性值是否有关联用户。',
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
                    'name' => 'PropertyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '属性ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '380',
                    ],
                ],
                [
                    'name' => 'PropertyValueId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '属性值ID。可以调用[ListProperty](~~ListProperty~~)获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '978',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                            'UseCount' => [
                                'description' => '已关联用户属性值的便捷用户数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\",\\n  \\"UseCount\\": 1\\n}","errorExample":""},{"type":"xml","example":"<CheckUsedPropertyValueResponse>\\n    <RequestId>9E7F03BD-8DA9-5130-A675-0191DC1D8910</RequestId>\\n    <UseCount>1</UseCount>\\n</CheckUsedPropertyValueResponse>","errorExample":""}]',
            'title' => '校验自定义属性值是否使用',
        ],
        'DescribeOrgs' => [
            'summary' => '查询组织列表。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的最大数量。取值范围：1~100。    '."\n"
                            .'默认值：100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '500',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '500',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AAAAAV3MpHK****',
                    ],
                ],
                [
                    'name' => 'OrgName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '组织名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '产品部',
                    ],
                ],
                [
                    'name' => 'ParentOrgId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '父组织ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'org-11fs****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0B4BB****',
                            ],
                            'NextToken' => [
                                'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。',
                                'type' => 'string',
                                'example' => 'AAAAAV3MpHK****',
                            ],
                            'Orgs' => [
                                'description' => '组织列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OrgName' => [
                                            'description' => '组织名称。',
                                            'type' => 'string',
                                            'example' => '设计部****',
                                        ],
                                        'OrgId' => [
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'org-1mox****',
                                        ],
                                        'ParentOrgId' => [
                                            'description' => '父组织ID。',
                                            'type' => 'string',
                                            'example' => 'org-ezqr****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B4BB****\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK****\\",\\n  \\"Orgs\\": [\\n    {\\n      \\"OrgName\\": \\"设计部****\\",\\n      \\"OrgId\\": \\"org-1mox****\\",\\n      \\"ParentOrgId\\": \\"org-ezqr****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询组织列表',
            'description' => '组织为树形结构，其根组织ID值为：org-aliyun-wy-org-id。',
        ],
        'RemoveMfaDevice' => [
            'summary' => '调用RemoveMfaDevice删除便捷用户绑定的虚拟MFA设备。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟MFA设备序列号，唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dc856334-446b-4035-bfbc-18af261e****',
                    ],
                ],
                [
                    'name' => 'AdDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD工作区地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alpha.lftltd.net',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'FB550AAB-FB36-4A91-93F6-F4374AF65403',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FB550AAB-FB36-4A91-93F6-F4374AF65403\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveMfaDeviceResponse>\\r\\n    <RequestId>FB550AAB-FB36-4A91-93F6-F4374AF65403</RequestId>\\r\\n</RemoveMfaDeviceResponse>","errorExample":""}]',
            'title' => '删除便捷用户绑定的虚拟MFA设备',
            'description' => '删除便捷用户绑定的虚拟MFA设备表示解除MFA设备绑定，等同于重置、禁用该MFA设备。对应便捷用户在登录云桌面时，需要重新绑定新的MFA设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'LockMfaDevice' => [
            'summary' => '调用LockMfaDevice锁定便捷用户绑定的虚拟MFA设备。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟MFA设备序列号，唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dc856334-446b-4035-bfbc-18af261e****',
                    ],
                ],
                [
                    'name' => 'AdDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD工作区地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'upower.vip',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '42FE70D8-4336-471B-8314-CCCFCE4159FD',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"42FE70D8-4336-471B-8314-CCCFCE4159FD\\"\\n}","errorExample":""},{"type":"xml","example":"<LockMfaDeviceResponse>\\r\\n    <RequestId>42FE70D8-4336-471B-8314-CCCFCE4159FD</RequestId>\\r\\n</LockMfaDeviceResponse>","errorExample":""}]',
            'title' => '锁定用户MFA设备',
            'description' => '锁定后，虚拟MFA设备的状态将变为锁定（LOCKED）。对应的便捷用户在登录启用了MFA的工作区时，将因为无法认证MFA设备而无法登录客户端。您可以调用[UnlockMfaDevice](~~286534~~)解锁。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnlockMfaDevice' => [
            'summary' => '调用UnlockMfaDevice解锁便捷用户绑定的虚拟MFA设备。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '虚拟MFA设备序列号，唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dc856334-446b-4035-bfbc-18af261e****',
                    ],
                ],
                [
                    'name' => 'AdDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD工作区地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'welab.co.id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9BD39C60-4E38-43BE-BA2F-69136C6C5190',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9BD39C60-4E38-43BE-BA2F-69136C6C5190\\"\\n}","errorExample":""},{"type":"xml","example":"<UnlockMfaDeviceResponse>\\r\\n    <RequestId>9BD39C60-4E38-43BE-BA2F-69136C6C5190</RequestId>\\r\\n</UnlockMfaDeviceResponse>","errorExample":""}]',
            'title' => '解锁用户MFA设备',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeMfaDevices' => [
            'summary' => '查询便捷用户绑定的虚拟MFA设备。',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的最大数量。取值范围：1~500。    '."\n"
                            .'默认值：100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询凭证。取值为上一次API调用时返回的NextToken参数值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'EndUserIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '便捷用户的用户名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '便捷用户的用户名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test',
                        ],
                        'required' => false,
                        'example' => 'test',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'SerialNumbers',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '虚拟MFA设备序列号，唯一标识。',
                        'type' => 'array',
                        'items' => [
                            'description' => '虚拟MFA设备序列号，唯一标识。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'c2d9ae94-a64b-4a0d-8024-9519ca50****',
                        ],
                        'required' => false,
                        'example' => 'c2d9ae94-a64b-4a0d-8024-9519ca50****',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'AdDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AD工作区地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn.misumi.pri',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '33DBB8EC-6E68-4726-91C4-E09C59D9A7D8',
                            ],
                            'NextToken' => [
                                'description' => '下一个查询开始的Token。',
                                'type' => 'string',
                                'example' => 'AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp',
                            ],
                            'MfaDevices' => [
                                'title' => 'mfa device list',
                                'description' => '虚拟MFA设备信息集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '虚拟MFA设备信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '> 该参数暂未开放使用。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '36',
                                        ],
                                        'EndUserId' => [
                                            'description' => '使用该虚拟MFA设备的便捷用户名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Email' => [
                                            'description' => '> 该参数暂未开放使用。',
                                            'type' => 'string',
                                            'example' => 'username@example.com',
                                        ],
                                        'GmtEnabled' => [
                                            'description' => '虚拟MFA设备启用时间。按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2021-06-22T06:20:49Z',
                                        ],
                                        'GmtUnlock' => [
                                            'description' => '虚拟MFA设备被锁定后的自动解锁时间。按照ISO8601标准表示，并使用UTC +0时间，格式为yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2021-06-23T06:20:49Z',
                                        ],
                                        'ConsecutiveFails' => [
                                            'description' => '连续绑定或者认证虚拟MFA设备失败的次数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'SerialNumber' => [
                                            'description' => '虚拟MFA设备序列号，唯一标识。',
                                            'type' => 'string',
                                            'example' => 'dc856334-446b-4035-bfbc-18af261e****',
                                        ],
                                        'Status' => [
                                            'description' => '虚拟MFA设备状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'LOCKED' => '已锁定',
                                                'UNBOUND' => '未绑定',
                                                'NORMAL' => '正常',
                                            ],
                                            'example' => 'NORMAL',
                                        ],
                                        'DeviceType' => [
                                            'description' => '虚拟MFA设备类型。目前仅支持TOTP_VIRTUAL，即遵循TOTP算法的虚拟MFA设备。',
                                            'type' => 'string',
                                            'example' => 'TOTP_VIRTUAL',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"33DBB8EC-6E68-4726-91C4-E09C59D9A7D8\\",\\n  \\"NextToken\\": \\"AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp\\",\\n  \\"MfaDevices\\": [\\n    {\\n      \\"Id\\": 36,\\n      \\"EndUserId\\": \\"test\\",\\n      \\"Email\\": \\"username@example.com\\",\\n      \\"GmtEnabled\\": \\"2021-06-22T06:20:49Z\\",\\n      \\"GmtUnlock\\": \\"2021-06-23T06:20:49Z\\",\\n      \\"ConsecutiveFails\\": 0,\\n      \\"SerialNumber\\": \\"dc856334-446b-4035-bfbc-18af261e****\\",\\n      \\"Status\\": \\"NORMAL\\",\\n      \\"DeviceType\\": \\"TOTP_VIRTUAL\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<DescribeMfaDevicesResponse>\\n    <NextToken>AAAAAV3MpHK1AP0pfERHZN5pu6na6YlN9asMM31MsMcdQNpp</NextToken>\\n    <RequestId>8C09C087-99C3-43F0-BFEA-03E651E04696</RequestId>\\n    <MfaDevices>\\n        <Status>NORMAL</Status>\\n        <DeviceType>TOTP_VIRTUAL</DeviceType>\\n        <GmtEnabled>2021-06-22T06:20:49Z</GmtEnabled>\\n        <EndUserId>test</EndUserId>\\n        <SerialNumber>dc856334-446b-4035-bfbc-18af261e****</SerialNumber>\\n        <ConsecutiveFails>0</ConsecutiveFails>\\n        <Id>36</Id>\\n    </MfaDevices>\\n</DescribeMfaDevicesResponse>","errorExample":""}]',
            'title' => '查询便捷用户绑定的虚拟MFA设备',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SyncAllEduInfo' => [
            'summary' => '同步所有教育信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'BaseResult',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '同步所有教育信息',
        ],
        'QuerySyncStatusByAliUid' => [
            'summary' => '查询用户同步状态。',
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
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PlainResult<UserSyncHistoryDo>',
                        'description' => '返回信息集合。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => 'auto-increased id',
                                        'description' => '自增ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '18500',
                                    ],
                                    'GmtCreated' => [
                                        'title' => 'created time',
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-06-30 07:50:42',
                                    ],
                                    'GmtModified' => [
                                        'title' => 'modified time',
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-03-02 14:27:39',
                                    ],
                                    'AliUid' => [
                                        'title' => 'aliUid of the customer',
                                        'description' => '阿里云账号ID。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '131239236086****',
                                    ],
                                    'Status' => [
                                        'title' => 'user sync status',
                                        'description' => '用户同步状态。',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                    'CorpId' => [
                                        'title' => 'corp id',
                                        'description' => '企业ID。',
                                        'type' => 'string',
                                        'example' => 'cdrs948144195608****',
                                    ],
                                    'LatestBeginTime' => [
                                        'title' => 'latestBeginTime',
                                        'description' => '最后开始时间。',
                                        'type' => 'string',
                                        'example' => '2022-03-02 14:31:39',
                                    ],
                                    'LatestEndTime' => [
                                        'title' => 'atest_end_time,Whether it is success or failure',
                                        'description' => '最后结束时间，不论成功或失败。',
                                        'type' => 'string',
                                        'example' => '2022-03-02 16:13:12',
                                    ],
                                    'LatestSuccessTime' => [
                                        'title' => 'latestSuccessTime',
                                        'description' => '最后成功时间。',
                                        'type' => 'string',
                                        'example' => '2022-03-02 18:24:01',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '请求失败的提示信息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1CBAFFAB-B697-4049-A9B1-67E1FC5F****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Id\\": 18500,\\n    \\"GmtCreated\\": \\"2020-06-30 07:50:42\\",\\n    \\"GmtModified\\": \\"2022-03-02 14:27:39\\",\\n    \\"AliUid\\": 0,\\n    \\"Status\\": \\"success\\",\\n    \\"CorpId\\": \\"cdrs948144195608****\\",\\n    \\"LatestBeginTime\\": \\"2022-03-02 14:31:39\\",\\n    \\"LatestEndTime\\": \\"2022-03-02 16:13:12\\",\\n    \\"LatestSuccessTime\\": \\"2022-03-02 18:24:01\\"\\n  },\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"success\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"RequestId\\": \\"1CBAFFAB-B697-4049-A9B1-67E1FC5F****\\"\\n}","type":"json"}]',
            'title' => '查询用户同步状态',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'eds-user.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'eds-user.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
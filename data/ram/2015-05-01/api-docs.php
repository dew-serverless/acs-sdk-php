<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Ram',
        'version' => '2015-05-01',
    ],
    'directories' => [
        [
            'id' => 67227,
            'title' => '用户管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 186630,
                    'title' => '用户',
                    'type' => 'directory',
                    'children' => [
                        'CreateUser',
                        'GetUser',
                        'UpdateUser',
                        'DeleteUser',
                        'ListUsers',
                    ],
                ],
                [
                    'id' => 186631,
                    'title' => '登录信息',
                    'type' => 'directory',
                    'children' => [
                        'CreateLoginProfile',
                        'GetLoginProfile',
                        'UpdateLoginProfile',
                        'DeleteLoginProfile',
                        'ChangePassword',
                    ],
                ],
                [
                    'id' => 186632,
                    'title' => '访问密钥',
                    'type' => 'directory',
                    'children' => [
                        'CreateAccessKey',
                        'UpdateAccessKey',
                        'DeleteAccessKey',
                        'ListAccessKeys',
                        'GetAccessKeyLastUsed',
                    ],
                ],
                [
                    'id' => 186633,
                    'title' => '多因素认证',
                    'type' => 'directory',
                    'children' => [
                        'CreateVirtualMFADevice',
                        'GetUserMFAInfo',
                        'DeleteVirtualMFADevice',
                        'ListVirtualMFADevices',
                        'BindMFADevice',
                        'UnbindMFADevice',
                    ],
                ],
            ],
        ],
        [
            'id' => 67248,
            'title' => '用户组管理',
            'type' => 'directory',
            'children' => [
                'CreateGroup',
                'GetGroup',
                'UpdateGroup',
                'DeleteGroup',
                'ListGroups',
                'ListGroupsForUser',
                'ListUsersForGroup',
                'AddUserToGroup',
                'RemoveUserFromGroup',
            ],
        ],
        [
            'id' => 67221,
            'title' => '角色管理',
            'type' => 'directory',
            'children' => [
                'CreateRole',
                'DeleteRole',
                'UpdateRole',
                'GetRole',
                'ListRoles',
            ],
        ],
        [
            'id' => 67201,
            'title' => '权限管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 186634,
                    'title' => '权限策略管理',
                    'type' => 'directory',
                    'children' => [
                        'CreatePolicy',
                        'GetPolicy',
                        'UpdatePolicyDescription',
                        'DeletePolicy',
                        'ListPolicies',
                        'CreatePolicyVersion',
                        'GetPolicyVersion',
                        'DeletePolicyVersion',
                        'ListPolicyVersions',
                        'SetDefaultPolicyVersion',
                    ],
                ],
                [
                    'id' => 186635,
                    'title' => '授权管理',
                    'type' => 'directory',
                    'children' => [
                        'AttachPolicyToUser',
                        'DetachPolicyFromUser',
                        'AttachPolicyToGroup',
                        'DetachPolicyFromGroup',
                        'AttachPolicyToRole',
                        'DetachPolicyFromRole',
                        'ListPoliciesForUser',
                        'ListPoliciesForGroup',
                        'ListPoliciesForRole',
                        'ListEntitiesForPolicy',
                    ],
                ],
            ],
        ],
        [
            'id' => 67192,
            'title' => '安全设置',
            'type' => 'directory',
            'children' => [
                'SetAccountAlias',
                'GetAccountAlias',
                'ClearAccountAlias',
                'SetPasswordPolicy',
                'GetPasswordPolicy',
                'SetSecurityPreference',
                'GetSecurityPreference',
            ],
        ],
        [
            'id' => 183186,
            'title' => '权限分析与诊断',
            'type' => 'directory',
            'children' => [
                'DecodeDiagnosticMessage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的显示名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice',
                    ],
                ],
                [
                    'name' => 'MobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的手机号码。'."\n"
                            ."\n"
                            .'格式：国际区号-号码。'."\n"
                            ."\n"
                            .'> 该参数仅适用于中国站。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-1868888****',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的电子邮箱。'."\n"
                            ."\n"
                            .'> 该参数仅适用于中国站。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice@example.com',
                    ],
                ],
                [
                    'name' => 'Comments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a cloud computing engineer.',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'User' => [
                                'description' => 'RAM用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => 'RAM用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'alice',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            ."\n"
                                            .'> 该参数仅适用于中国站。'."\n",
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => '86-1868888****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户的唯一标识。',
                                        'type' => 'string',
                                        'example' => '122748924538****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a cloud computing engineer.',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'UserName' => [
                                        'description' => 'RAM用户的名称。',
                                        'type' => 'string',
                                        'example' => 'alice',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"alice\\",\\n    \\"Email\\": \\"alice@example.com\\",\\n    \\"MobilePhone\\": \\"86-1868888****\\",\\n    \\"UserId\\": \\"122748924538****\\",\\n    \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"UserName\\": \\"alice\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <User>\\n        <UserId>122748924538****</UserId>\\n        <UserName>alice</UserName>\\n        <DisplayName>alice</DisplayName>\\n        <MobilePhone>86-1868888****</MobilePhone>\\n        <Email>alice@example.com</Email>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </User>\\n</CreateUserResponse>","errorExample":""}]',
            'title' => '创建RAM用户',
            'summary' => '调用CreateUser接口创建RAM用户。',
            'description' => '本文将提供一个示例，创建一个名为`alice`的RAM用户。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => "\n"
                .' 成功创建RAM用户后，您可以进行以下的后续操作：'."\n"
                ."\n"
                .'- 调用CreateLoginProfile接口为RAM用户启用Web控制台登录，可以配置登录密码等信息。更多信息，请参见[CreateLoginProfile](~~28685~~)。'."\n"
                .'- 调用CreateAccessKey接口为RAM用户创建访问密钥。更多信息，请参见[CreateAccessKey](~~28689~~)。'."\n"
                ."\n\n",
        ],
        'GetUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'alice',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'User' => [
                                'description' => 'RAM用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '显示名称。',
                                        'type' => 'string',
                                        'example' => 'alice',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            .'> 该参数仅适用于中国站。 ',
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM用户的更新时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-02-11T03:15:21Z',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            ."\n"
                                            .'> 该参数仅适用于中国站。 ',
                                        'type' => 'string',
                                        'example' => '86-1860000****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户的唯一标识。',
                                        'type' => 'string',
                                        'example' => '222748924538****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '这是一位云计算工程师',
                                    ],
                                    'LastLoginDate' => [
                                        'description' => '上次使用密码登录时间（UTC时间）。'."\n",
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'UserName' => [
                                        'description' => 'RAM用户的名称。',
                                        'type' => 'string',
                                        'example' => 'alice',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2D69A58F-345C-4FDE-88E4-BF5189484043',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"alice\\",\\n    \\"Email\\": \\"alice@example.com\\",\\n    \\"UpdateDate\\": \\"2015-02-11T03:15:21Z\\",\\n    \\"MobilePhone\\": \\"86-1860000****\\",\\n    \\"UserId\\": \\"222748924538****\\",\\n    \\"Comments\\": \\"这是一位云计算工程师\\",\\n    \\"LastLoginDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"UserName\\": \\"alice\\"\\n  },\\n  \\"RequestId\\": \\"2D69A58F-345C-4FDE-88E4-BF5189484043\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserResponse>\\n    <RequestId>2D69A58F-345C-4FDE-88E4-BF5189484043</RequestId>\\n    <User>\\n        <UserId>222748924538****</UserId>\\n        <UserName>alice</UserName>\\n        <DisplayName>alice</DisplayName>\\n        <MobilePhone>86-1860000****</MobilePhone>\\n        <Email>alice@example.com</Email>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-02-11T03:15:21Z</UpdateDate>\\n        <LastLoginDate>2015-01-23T12:33:18Z</LastLoginDate>\\n    </User>\\n</GetUserResponse>","errorExample":""}]',
            'title' => '查询RAM用户的详细信息',
            'summary' => '调用GetUser接口查询RAM用户的详细信息。',
            'description' => '本文将提供一个示例，查询RAM用户`alice`的详细信息。 ',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'NewUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'xiaoq****',
                    ],
                ],
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新显示名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xiaoq****',
                    ],
                ],
                [
                    'name' => 'NewMobilePhone',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新手机号码。'."\n"
                            ."\n"
                            .'格式：国际区号-号码。'."\n"
                            ."\n"
                            .'> 该参数仅适用于中国站。 '."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-1860000****',
                    ],
                ],
                [
                    'name' => 'NewEmail',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新电子邮箱。'."\n"
                            ."\n"
                            .'> 该参数仅适用于中国站。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xiaoq****@example.com',
                    ],
                ],
                [
                    'name' => 'NewComments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新备注。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a cloud computing engineer.',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'User' => [
                                'description' => 'RAM用户信息。'."\n",
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => 'RAM用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'xiaoq****',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            .'> 该参数仅适用于中国站。 ',
                                        'type' => 'string',
                                        'example' => 'xiaoq****@example.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM用户的更新时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-02-11T03:15:21Z',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            .'> 该参数仅适用于中国站。 ',
                                        'type' => 'string',
                                        'example' => '86-1860000****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户的唯一标识。',
                                        'type' => 'string',
                                        'example' => '122748924538****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a cloud computing engineer.',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'UserName' => [
                                        'description' => 'RAM用户的名称。',
                                        'type' => 'string',
                                        'example' => 'xiaoq****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"xiaoq****\\",\\n    \\"Email\\": \\"xiaoq****@example.com\\",\\n    \\"UpdateDate\\": \\"2015-02-11T03:15:21Z\\",\\n    \\"MobilePhone\\": \\"86-1860000****\\",\\n    \\"UserId\\": \\"122748924538****\\",\\n    \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"UserName\\": \\"xiaoq****\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <User>\\n        <UserId>122748924538****</UserId>\\n        <UserName>xiaoq****</UserName>\\n        <DisplayName>xiaoq*****</DisplayName>\\n        <MobilePhone>86-1860000****</MobilePhone>\\n        <Email>xiaoq****@example.com</Email>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-02-11T03:15:21Z</UpdateDate>\\n    </User>\\n</UpdateUserResponse>","errorExample":""}]',
            'title' => '更新RAM用户的基本信息',
            'summary' => '调用UpdateUser接口更新RAM用户的基本信息。',
            'description' => '本文将提供一个示例，将RAM用户的名称由`zhangq****`修改为`xiaoq****`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1C488B66-B819-4D14-8711-C4EAAA13AC01',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}"},{"type":"xml","example":"<RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>","errorExample":"<DeleteUserResponse>\\n    <RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>\\n</DeleteUserResponse>"}]',
            'title' => '删除一个RAM用户',
            'summary' => '调用DeleteUser接口删除一个RAM用户。',
            'description' => '删除用户前，需要保证用户不拥有任何权限且不属于任何用户组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUsers' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数，当返回结果达到MaxItems限制被截断时，返回参数`IsTruncated`将等于`true`。'."\n"
                            ."\n"
                            .'取值范围：1~1000。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4B450CA1-36E8-4AA2-8461-86B42BF4CC4E',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此字段，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容 。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'description' => 'RAM用户列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'RAM用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => 'RAM用户的显示名称。',
                                                    'type' => 'string',
                                                    'example' => '张*',
                                                ],
                                                'Email' => [
                                                    'description' => 'RAM用户邮箱。'."\n"
                                                        ."\n"
                                                        .'> 暂不提供该参数。',
                                                    'type' => 'string',
                                                    'example' => 'zhangq****@example.com',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => 'RAM用户的更新时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'MobilePhone' => [
                                                    'description' => 'RAM用户手机号码。'."\n"
                                                        ."\n"
                                                        .'> 暂不提供该参数。 ',
                                                    'type' => 'string',
                                                    'example' => '86-1860000****',
                                                ],
                                                'UserId' => [
                                                    'description' => 'RAM用户ID。',
                                                    'type' => 'string',
                                                    'example' => '20732900249392****',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注。'."\n",
                                                    'type' => 'string',
                                                    'example' => '这是一位云计算工程师',
                                                ],
                                                'CreateDate' => [
                                                    'description' => 'RAM用户的创建时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'UserName' => [
                                                    'description' => 'RAM用户的登录名称。',
                                                    'type' => 'string',
                                                    'example' => 'zhangq****',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\",\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"DisplayName\\": \\"张*\\",\\n        \\"Email\\": \\"zhangq****@example.com\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"MobilePhone\\": \\"86-1860000****\\",\\n        \\"UserId\\": \\"20732900249392****\\",\\n        \\"Comments\\": \\"这是一位云计算工程师\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UserName\\": \\"zhangq****\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\" : \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\",\\n  \\"Users\\" : {\\n    \\"User\\" : [\\n      {\\n        \\"UserId\\" : \\"1227489245380721\\",\\n        \\"UserName\\" : \\"zhangqiang\\",\\n        \\"DisplayName\\": \\"张强\\",\\n        \\"MobilePhone\\": \\"86-18600008888\\",\\n        \\"Email\\": \\"zhangqiang@example.com\\",\\n        \\"Comments\\": \\"这是一位云计算工程师\\",\\n        \\"CreateDate\\" : \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\" : \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"UserId\\" : \\"1406498224724456\\",\\n        \\"UserName\\" : \\"lili\\",\\n        \\"DisplayName\\": \\"李丽\\",\\n        \\"MobilePhone\\": \\"86-18600009999\\",\\n        \\"Email\\": \\"lili@example.com\\",\\n        \\"Comments\\": \\"权限管理员\\",\\n        \\"CreateDate\\" : \\"2015-02-18T17:22:08Z\\",\\n        \\"UpdateDate\\" : \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListUsersResponse>\\r\\n\\t<RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\r\\n\\t<IsTruncated>true</IsTruncated>\\r\\n\\t<Marker>EXAMPLE</Marker>\\r\\n\\t<Users>\\r\\n\\t\\t<User>\\r\\n\\t\\t\\t<UserId>122748924538****</UserId>\\r\\n\\t\\t\\t<UserName>zhangq****</UserName>\\r\\n\\t\\t\\t<DisplayName>张*</DisplayName>\\r\\n\\t\\t\\t<Comments>这是一位云计算工程师</Comments>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\r\\n\\t\\t</User>\\r\\n\\t\\t<User>\\r\\n\\t\\t\\t<UserId>140649822472****</UserId>\\r\\n\\t\\t\\t<UserName>li****</UserName>\\r\\n\\t\\t\\t<DisplayName>李*</DisplayName>\\r\\n\\t\\t\\t<Comments>权限管理员</Comments>\\r\\n\\t\\t\\t<CreateDate>2015-02-18T17:22:08Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-02-18T17:22:08Z</UpdateDate>\\r\\n\\t\\t</User>\\r\\n\\t</Users>\\r\\n</ListUsersResponse>\\t\\r\\n","errorExample":"<ListUsersResponse>\\n  <RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n  <Users>\\n    <User>\\n      <UserId>1227489245380721</UserId>\\n      <UserName>zhangqiang</UserName>\\n      <DisplayName>张强</DisplayName>\\n      <MobilePhone>86-18600008888</MobilePhone>\\n      <Email>zhangqiang@example.com</Email>\\n      <Comments>这是一位云计算工程师</Comments>\\n      <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n      <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n    </User>\\n    <User>\\n      <UserId>1406498224724456</UserId>\\n      <UserName>lili</UserName>\\n      <DisplayName>李丽</DisplayName>\\n      <MobilePhone>86-18600009999</MobilePhone>\\n      <Email>lili@example.com</Email>\\n      <Comments>权限管理员</Comments>\\n      <CreateDate>2015-02-18T17:22:08Z</CreateDate>\\n      <UpdateDate>2015-02-18T17:22:08Z</UpdateDate>\\n    </User>\\n  </Users>\\n  <IsTruncated>true</IsTruncated>\\n  <Marker>EXAMPLE</Marker>\\n</ListUsersResponse>"}]',
            'title' => '查询所有RAM用户',
            'summary' => '查询所有RAM用户的详细信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateLoginProfile' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定密码，密码必须符合密码强度要求。关于密码强度设置要求，请参见[GetPasswordPolicy](~~2337691~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'mypassword',
                    ],
                ],
                [
                    'name' => 'PasswordResetRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户在登录时是否需要修改密码。默认为`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MFABindRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户在下次登录时是否必须绑定多因素认证器。默认为`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'LoginProfile' => [
                                'description' => '登录配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordResetRequired' => [
                                        'description' => '要求下次登录时重设密码。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'UserName' => [
                                        'description' => '用户名。',
                                        'type' => 'string',
                                        'example' => 'zhangq****',
                                    ],
                                    'MFABindRequired' => [
                                        'description' => '要求必须绑定多因素认证设备。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"LoginProfile\\": {\\n    \\"PasswordResetRequired\\": false,\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"UserName\\": \\"zhangq****\\",\\n    \\"MFABindRequired\\": false\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"LoginProfile\\": {\\n        \\"UserName\\": \\"zhangqiang\\",\\n        \\"PasswordResetRequired\\": true,\\n        \\"MFABindRequired\\": true,\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<LoginProfile>\\n    <UserName>zhangq****</UserName>\\n    <PasswordResetRequired>true</PasswordResetRequired>\\n    <MFABindRequired>true</MFABindRequired>\\n    <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n</LoginProfile>","errorExample":"<CreateLoginProfile>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <LoginProfile>\\n        <UserName>zhangqiang</UserName>\\n        <PasswordResetRequired>true</PasswordResetRequired>\\n        <MFABindRequired>true</MFABindRequired>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </LoginProfile>\\n</CreateLoginProfile>"}]',
            'title' => '为一个RAM用户启用Web控制台登录',
            'summary' => '调用CreateLoginProfile接口为一个RAM用户启用Web控制台登录。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetLoginProfile' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'LoginProfile' => [
                                'description' => '登录配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordResetRequired' => [
                                        'description' => '要求下次登录时重设密码。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'UserName' => [
                                        'description' => '用户名。',
                                        'type' => 'string',
                                        'example' => 'zhangq****',
                                    ],
                                    'MFABindRequired' => [
                                        'description' => '要求必须绑定多因素认证设备。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"LoginProfile\\": {\\n    \\"PasswordResetRequired\\": true,\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"UserName\\": \\"zhangq****\\",\\n    \\"MFABindRequired\\": true\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"LoginProfile\\": {\\n        \\"UserName\\": \\"zhangqiang\\",\\n        \\"PasswordResetRequired\\": true,\\n        \\"MFABindRequired\\": true,\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<LoginProfile>\\n    <UserName>zhangq****</UserName>\\n    <PasswordResetRequired>true</PasswordResetRequired>\\n    <MFABindRequired>true</MFABindRequired>\\n    <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n</LoginProfile>","errorExample":"<GetLoginProfile>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <LoginProfile>\\n        <UserName>zhangqiang</UserName>\\n        <PasswordResetRequired>true</PasswordResetRequired>\\n        <MFABindRequired>true</MFABindRequired>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </LoginProfile>\\n</GetLoginProfile>"}]',
            'title' => '查看一个RAM用户的登录配置',
            'summary' => '调用GetLoginProfile接口查看一个RAM用户的登录配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateLoginProfile' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定密码，密码必须符合云账号的密码强度要求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mypassword',
                    ],
                ],
                [
                    'name' => 'PasswordResetRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户在登录时是否需要修改密码。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MFABindRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户在下次登录时是否必须绑定多因素认证设备。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<UpdateLoginProfile>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</UpdateLoginProfile>"}]',
            'title' => '修改用户的登录配置',
            'summary' => '调用UpdateLoginProfile接口修改用户的登录配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteLoginProfile' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1C488B66-B819-4D14-8711-C4EAAA13AC01',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"1C488B66-B819-4D14-8711-C4EAAA13AC01\\"\\n}"},{"type":"xml","example":"<RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>","errorExample":"<DeleteLoginProfileResponse>\\n    <RequestId>1C488B66-B819-4D14-8711-C4EAAA13AC01</RequestId>\\n</DeleteLoginProfileResponse>"}]',
            'title' => '关闭RAM用户登录Web控制台功能',
            'summary' => '关闭指定RAM用户登录Web控制台的功能。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ChangePassword' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'OldPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录旧密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '12****',
                    ],
                ],
                [
                    'name' => 'NewPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录新密码。'."\n"
                            ."\n"
                            .'密码必须符合密码强度要求。更多信息，请参见[SetPasswordPolicy](~~28739~~)。 ',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'aw$2****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<ChangePassword>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</ChangePassword>","errorExample":"<ChangePassword>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</ChangePassword>"}]',
            'title' => '修改RAM用户密码',
            'summary' => 'RAM用户调用ChangePassword修改自己的控制台登录密码。',
            'description' => '> 该API仅限RAM用户调用。调用前，请确保已将[SetSecurityPreference](~~43765~~)中的`AllowUserToChangePassword`设置为`True`，即允许RAM用户自主管理密码。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccessKey' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名，RAM用户调用此接口时，默认为自己创建访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'AccessKey' => [
                                'description' => '访问密钥。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态，激活或禁用。',
                                        'type' => 'string',
                                        'example' => 'Active',
                                    ],
                                    'AccessKeySecret' => [
                                        'description' => '访问密钥。',
                                        'type' => 'string',
                                        'example' => 'PupkTg8jdmau1cXxYacgE736PJ****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '访问密钥标识。',
                                        'type' => 'string',
                                        'example' => '0wNEpMMlzy7s****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"AccessKey\\": {\\n    \\"Status\\": \\"Active\\",\\n    \\"AccessKeySecret\\": \\"PupkTg8jdmau1cXxYacgE736PJ****\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"AccessKeyId\\": \\"0wNEpMMlzy7s****\\"\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"AccessKey\\": {\\n        \\"AccessKeyId\\": \\"0wNEpMMlzy7szvai\\",\\n        \\"AccessKeySecret\\": \\"PupkTg8jdmau1cXxYacgE736PJj4cA\\",\\n        \\"Status\\": \\"Active\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<AccessKey>\\n    <AccessKeyId>0wNEpMMlzy7s****</AccessKeyId>\\n    <AccessKeySecret>PupkTg8jdmau1cXxYacgE736PJ****</AccessKeySecret>\\n    <Status>Active</Status>\\n    <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n</AccessKey>","errorExample":"<CreateAccessKeyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <AccessKey>\\n        <AccessKeyId>0wNEpMMlzy7szvai</AccessKeyId>\\n        <AccessKeySecret>PupkTg8jdmau1cXxYacgE736PJj4cA</AccessKeySecret>\\n        <Status>Active</Status>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </AccessKey>\\n</CreateAccessKeyResponse>"}]',
            'title' => '为RAM用户创建访问密钥',
            'summary' => '调用CreateAccessKey接口为RAM用户创建访问密钥。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateAccessKey' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要更新的`AccessKeyId`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0wNEpMMlzy7s****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AccessKey的状态，取值为`Active`或`Inactive`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Inactive',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<UpdateAccessKeyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</UpdateAccessKeyResponse>"}]',
            'title' => '更新RAM用户访问密钥的状态',
            'summary' => '调用UpdateAccessKey接口更新RAM用户访问密钥的状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAccessKey' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定要删除的`AccessKeyId`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0wNEpMMlzy7s****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<DeleteAccessKeyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</DeleteAccessKeyResponse>"}]',
            'title' => '删除RAM用户的访问密钥',
            'summary' => '调用DeleteAccessKey接口删除RAM用户的访问密钥。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAccessKeys' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户，RAM用户访问时不提供此参数则表示列出自己的访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'AccessKeys' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessKey' => [
                                        'description' => '用户信息集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户信息集合。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态，激活或禁用。',
                                                    'type' => 'string',
                                                    'example' => 'Active',
                                                ],
                                                'AccessKeyId' => [
                                                    'description' => '访问密钥标识。',
                                                    'type' => 'string',
                                                    'example' => '0wNEpMMlzy7s****',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4B450CA1-36E8-4AA2-8461-86B42BF4CC4E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessKeys\\": {\\n    \\"AccessKey\\": [\\n      {\\n        \\"Status\\": \\"Active\\",\\n        \\"AccessKeyId\\": \\"0wNEpMMlzy7s****\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\"\\n}","errorExample":"{\\n  \\"RequestId\\" : \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"AccessKeys\\":{\\n    \\"AccessKey\\":[\\n      {\\n        \\"AccessKeyId\\": \\"0wNEpMMlzy7szvai\\",\\n        \\"Status\\": \\"Active\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"AccessKeyId\\": \\"WnIWUruvfaDT37vQ\\",\\n        \\"Status\\": \\"Inactive\\",\\n        \\"CreateDate\\": \\"2015-03-24T21:12:21Z\\"\\n      }\\n    ]\\n  }\\n}"},{"type":"xml","example":"<RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n<AccessKeys>\\n    <AccessKey>\\n        <AccessKeyId>0wNEpMMlzy7s****</AccessKeyId>\\n        <Status>Active</Status>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </AccessKey>\\n    <AccessKey>\\n        <AccessKeyId>WnIWUruvfaDT****</AccessKeyId>\\n        <Status>Inactive</Status>\\n        <CreateDate>2015-03-24T21:12:21Z</CreateDate>\\n    </AccessKey>\\n</AccessKeys>","errorExample":"<ListAccessKeysResponse>\\n  <RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n  <AccessKeys>\\n    <AccessKey>\\n        <AccessKeyId>0wNEpMMlzy7szvai</AccessKeyId>\\n        <Status>Active</Status>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </AccessKey>\\n    <AccessKey>\\n        <AccessKeyId>WnIWUruvfaDT37vQ</AccessKeyId>\\n        <Status>Inactive</Status>\\n        <CreateDate>2015-03-24T21:12:21Z</CreateDate>\\n    </AccessKey>\\n  </AccessKeys>\\n</ListAccessKeysResponse>"}]',
            'title' => '列出指定用户的访问密钥',
            'summary' => '调用ListAccessKeys接口列出指定用户的访问密钥。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccessKeyLastUsed' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的访问密钥ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LTAI4GFTgcR8m8cZQDTH****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessKeyLastUsed' => [
                                'description' => '访问密钥的最后使用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'LastUsedDate' => [
                                        'description' => '最后使用时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-21T06:37:40Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5CCE804C-6450-49A7-B1DB-2460F7A97416',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessKeyLastUsed\\": {\\n    \\"LastUsedDate\\": \\"2020-10-21T06:37:40Z\\"\\n  },\\n  \\"RequestId\\": \\"5CCE804C-6450-49A7-B1DB-2460F7A97416\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetAccessKeyLastUsedResponse>\\r\\n\\t<AccessKeyLastUsed>\\r\\n\\t\\t<LastUsedDate>2020-10-21T06:37:40Z</LastUsedDate>\\r\\n\\t</AccessKeyLastUsed>\\r\\n\\t<RequestId>5CCE804C-6450-49A7-B1DB-2460F7A97416</RequestId>\\r\\n</GetAccessKeyLastUsedResponse>\\r\\n","errorExample":""}]',
            'title' => '查询指定访问密钥的最后使用时间',
            'summary' => '调用GetAccessKeyLastUsed查询指定访问密钥的最后使用时间。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateVirtualMFADevice' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'VirtualMFADeviceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '多因素认证设备名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'device001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'VirtualMFADevice' => [
                                'description' => '多因素认证设备。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:mfa/device001',
                                    ],
                                    'QRCodePNG' => [
                                        'description' => '密钥二维码PNG，使用Base64编码。',
                                        'type' => 'string',
                                        'example' => 'YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****',
                                    ],
                                    'Base32StringSeed' => [
                                        'description' => '多因素认证设备密钥。',
                                        'type' => 'string',
                                        'example' => 'DSF98HAD982KJA9SDFNAS9D8FU839B8ADHBGS****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VirtualMFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::123456789012****:mfa/device001\\",\\n    \\"QRCodePNG\\": \\"YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****\\",\\n    \\"Base32StringSeed\\": \\"DSF98HAD982KJA9SDFNAS9D8FU839B8ADHBGS****\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"VirtualMFADevice\\": {\\n        \\"SerialNumber\\": \\"acs:ram::1234567890123:mfa/device001\\",\\n        \\"Base32StringSeed\\": \\"DSF98HAD982KJA9SDFNAS9D8FU839B8ADHBGSD7A8\\",\\n        \\"QRCodePNG\\": \\"YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEzdCAg\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateVirtualMFADeviceResponse>\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n\\t<VirtualMFADevice>\\n\\t\\t<SerialNumber>acs:ram::123456789012****:mfa/device001</SerialNumber>\\n\\t\\t<Base32StringSeed>DSF98HAD982KJA9SDFNAS9D8FU839B8ADHBGS****</Base32StringSeed>\\n\\t\\t<QRCodePNG>YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****</QRCodePNG>\\n\\t</VirtualMFADevice>\\n</CreateVirtualMFADeviceResponse>","errorExample":"<CreateVirtualMFADeviceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <VirtualMFADevice>\\n        <SerialNumber>acs:ram::1234567890123:mfa/device001</VirtualMFASerialNumber>\\n        <Base32StringSeed>DSF98HAD982KJA9SDFNAS9D8FU839B8ADHBGSD7A8</Base32StringSeed>\\n        <QRCodePNG>YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEzdCAg</QRCodePNG>\\n    </VirtualMFADevice>\\n</CreateVirtualMFADeviceResponse>"}]',
            'title' => '创建多因素认证设备',
            'summary' => '调用CreateVirtualMFADevice接口创建多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetUserMFAInfo' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'MFADevice' => [
                                'description' => 'MFA设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:mfa/test',
                                    ],
                                    'Type' => [
                                        'description' => '多因素认证设备类型。取值：'."\n"
                                            ."\n"
                                            .'- VMFA：虚拟MFA设备。'."\n"
                                            .'- U2F：U2F安全密钥。',
                                        'type' => 'string',
                                        'example' => 'VMFA',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::177242285274****:mfa/test\\",\\n    \\"Type\\": \\"VMFA\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"MFADevice\\": {\\n        \\"SerialNumber\\":\\"Virtual-MFA-device002\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetUserMFAInfoResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<MFADevice>\\r\\n\\t\\t<SerialNumber>acs:ram::177242285274****:mfa/test</SerialNumber>\\r\\n\\t\\t<Type>VMFA</Type>\\r\\n\\t</MFADevice>\\r\\n</GetUserMFAInfoResponse>\\t\\r\\n","errorExample":"<GetUserMFAInfoResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <MFADevice>\\n        <SerialNumber>Virtual-MFA-device002</SerialNumber>\\n    </MFADevice>\\n</GetUserMFAInfoResponse>"}]',
            'title' => '获取多因素认证设备信息',
            'summary' => '获取指定RAM用户的多因素认证设备信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteVirtualMFADevice' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定多因素认证设备的序列号。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'acs:ram::123456789012****:mfa/device002',
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
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<DeleteVirtualMFADeviceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</DeleteVirtualMFADeviceResponse>"}]',
            'title' => '删除多因素认证设备',
            'summary' => '调用DeleteVirtualMFADevice接口删除多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListVirtualMFADevices' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'VirtualMFADevices' => [
                                'type' => 'object',
                                'properties' => [
                                    'VirtualMFADevice' => [
                                        'description' => '多因素认证设备列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '多因素认证设备列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SerialNumber' => [
                                                    'description' => '多因素认证设备序列号。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::123456789012****:mfa/device002',
                                                ],
                                                'User' => [
                                                    'description' => '绑定用户的基本信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'DisplayName' => [
                                                            'description' => '显示名称。',
                                                            'type' => 'string',
                                                            'example' => '张*',
                                                        ],
                                                        'UserId' => [
                                                            'description' => '用户唯一标识。',
                                                            'type' => 'string',
                                                            'example' => '122748924538****',
                                                        ],
                                                        'UserName' => [
                                                            'description' => '用户名称。',
                                                            'type' => 'string',
                                                            'example' => 'zhangq****',
                                                        ],
                                                    ],
                                                ],
                                                'ActivateDate' => [
                                                    'description' => '激活日期。',
                                                    'type' => 'string',
                                                    'example' => '2015-02-18T17:22:08Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VirtualMFADevices\\": {\\n    \\"VirtualMFADevice\\": [\\n      {\\n        \\"SerialNumber\\": \\"acs:ram::123456789012****:mfa/device002\\",\\n        \\"User\\": {\\n          \\"DisplayName\\": \\"张*\\",\\n          \\"UserId\\": \\"122748924538****\\",\\n          \\"UserName\\": \\"zhangq****\\"\\n        },\\n        \\"ActivateDate\\": \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"VirtualMFADevices\\": {\\n        \\"VirtualMFADevice\\": [\\n            {\\n                \\"SerialNumber\\": \\"acs:ram::1234567890123:mfa/device001\\"\\n            },\\n            {\\n                \\"SerialNumber\\": \\"acs:ram::1234567890123:mfa/device002\\",\\n                \\"ActivateDate\\": \\"2015-02-18T17:22:08Z\\",\\n                \\"User\\": {\\n                    \\"UserId\\": \\"1227489245380721\\",\\n                    \\"UserName\\": \\"zhangqiang\\",\\n                    \\"DisplayName\\": \\"张强\\"\\n                }\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<VirtualMFADevices>\\n    <VirtualMFADevice>\\n        <SerialNumber>acs:ram::123456789012****:mfa/device001</SerialNumber>\\n    </VirtualMFADevice>\\n    <VirtualMFADevice>\\n        <SerialNumber>acs:ram::123456789012****:mfa/device002</SerialNumber>\\n        <ActivateDate>2015-02-18T17:22:08Z</ActivateDate>\\n        <User>\\n            <UserId>122748924538****</UserId>\\n            <UserName>zhangq****</UserName>\\n            <DisplayName>张*</DisplayName>\\n        </User>\\n    </VirtualMFADevice>\\n</VirtualMFADevices>","errorExample":"<ListVirtualMFADevicesResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <VirtualMFADevices>\\n        <VirtualMFADevice>\\n            <SerialNumber>acs:ram::1234567890123:mfa/device001</SerialNumber>\\n        </VirtualMFADevice>\\n        <VirtualMFADevice>\\n            <SerialNumber>acs:ram::1234567890123:mfa/device002</MFASerialNumber>\\n            <ActivateDate>2015-02-18T17:22:08Z<Activate>\\n            <User>\\n                <UserId>1227489245380721</UserId>\\n                <UserName>zhangqiang</UserName>\\n                <DisplayName>张强</DisplayName>\\n            </User>\\n        </VirtualMFADevice>\\n    <VirtualMFADevicess>\\n</ListVirtualMFADevicesResponse>"}]',
            'title' => '列出多因素认证设备',
            'summary' => '调用ListVirtualMFADevices接口列出多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'BindMFADevice' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定多因素认证设备的序列号。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'acs:ram::123456789012****:mfa/device002',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'AuthenticationCode1',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证第一组动态密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '11****',
                    ],
                ],
                [
                    'name' => 'AuthenticationCode2',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证第二组动态密码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '33****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<BindMFADeviceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</BindMFADeviceResponse>"}]',
            'title' => '绑定多因素认证设备',
            'summary' => '调用BindMFADevice接口绑定多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UnbindMFADevice' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'MFADevice' => [
                                'description' => '多因素认证设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:mfa/device002',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::123456789012****:mfa/device002\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"MFADevice\\": {\\n        \\"SerialNumber\\":\\"acs:ram::1234567890123:mfa/device002\\"\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<MFADevice>\\n    <SerialNumber>acs:ram::123456789012****:mfa/device002</SerialNumber>\\n</MFADevice>","errorExample":"<UnbindMFADeviceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <MFADevice>\\n        <SerialNumber>acs:ram::1234567890123:mfa/device002</SerialNumber>\\n    </MFADevice>\\n</UnbindMFADeviceResponse>"}]',
            'title' => '解绑多因素认证设备',
            'summary' => '调用UnbindMFADevice接口解绑多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、英文句点（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
                [
                    'name' => 'Comments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注信息。'."\n"
                            ."\n"
                            .'最大长度128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '开发团队',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => 'g-FpMEHiMysofp****',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注信息。',
                                        'type' => 'string',
                                        'example' => '开发团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D3F0679E-9757-95DB-AF2D-04D5188C69C5',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupId\\": \\"g-FpMEHiMysofp****\\",\\n    \\"GroupName\\": \\"Dev-Team\\",\\n    \\"Comments\\": \\"开发团队\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"D3F0679E-9757-95DB-AF2D-04D5188C69C5\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"D3F0679E-9757-95DB-AF2D-04D5188C69C5\\",\\n    \\"Group\\": {\\n        \\"GroupName\\": \\"Dev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateGroupResponse>\\n\\t<RequestId>D3F0679E-9757-95DB-AF2D-04D5188C69C5</RequestId>\\n\\t<Group>\\n\\t\\t<GroupName>Dev-Team</GroupName>\\n\\t\\t<Comments>开发团队</Comments>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <GroupId>g-FpMEHiMysofp****</GroupId>\\n\\t</Group>\\n</CreateGroupResponse>","errorExample":"<CreateGroupResponse>\\n    <RequestId>D3F0679E-9757-95DB-AF2D-04D5188C69C5</RequestId>\\n    <Group>\\n        <GroupName>Dev-Team</GroupName>\\n        <Comments>开发团队</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </Group>\\n</CreateGroupResponse>"}]',
            'title' => '创建用户组',
            'summary' => '调用CreateGroup接口创建用户组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => 'g-FpMEHiMysofp****',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2015-02-11T03:15:21Z',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注信息。',
                                        'type' => 'string',
                                        'example' => '开发团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D4065824-E422-3ED6-68B1-1AF7D5C7804C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupId\\": \\"g-FpMEHiMysofp****\\",\\n    \\"UpdateDate\\": \\"2015-02-11T03:15:21Z\\",\\n    \\"GroupName\\": \\"Dev-Team\\",\\n    \\"Comments\\": \\"开发团队\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"D4065824-E422-3ED6-68B1-1AF7D5C7804C\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"D4065824-E422-3ED6-68B1-1AF7D5C7804C\\",\\n    \\"Group\\": {\\n        \\"GroupName\\": \\"Dev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\": \\"2015-02-11T03:15:21Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<GetGroupResponse>\\n\\t<RequestId>D4065824-E422-3ED6-68B1-1AF7D5C7804C</RequestId>\\n\\t<Group>\\n\\t\\t<GroupName>Dev-Team</GroupName>\\n\\t\\t<Comments>开发团队</Comments>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t<UpdateDate>2015-02-11T03:15:21Z</UpdateDate>\\n        <GroupId>g-FpMEHiMysofp****</GroupId>\\n\\t</Group>\\n</GetGroupResponse>\\t\\n","errorExample":"<GetGroupResponse>\\n    <RequestId>D4065824-E422-3ED6-68B1-1AF7D5C7804C</RequestId>\\n    <Group>\\n        <GroupName>Dev-Team</GroupName>\\n        <Comments>开发团队</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-02-11T03:15:21Z</UpdateDate>\\n    </Group>\\n</GetGroupResponse>"}]',
            'title' => '查询用户组信息',
            'summary' => '调用GetGroup接口查询用户组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
                [
                    'name' => 'NewGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的用户组名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、英文句点（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NewDev-Team',
                    ],
                ],
                [
                    'name' => 'NewComments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的备注信息。'."\n"
                            ."\n"
                            .'长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '开发团队',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => 'g-FpMEHiMysofp****',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'NewDev-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注信息。',
                                        'type' => 'string',
                                        'example' => '开发团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EC6647CC-0A36-EC7A-BA72-CC81BF3DE182',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupId\\": \\"g-FpMEHiMysofp****\\",\\n    \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"GroupName\\": \\"NewDev-Team\\",\\n    \\"Comments\\": \\"开发团队\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"EC6647CC-0A36-EC7A-BA72-CC81BF3DE182\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"EC6647CC-0A36-EC7A-BA72-CC81BF3DE182\\",\\n    \\"Group\\": {\\n        \\"GroupName\\": \\"NewDev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"CreateDate\\" : \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\" : \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<UpdateGroupResponse>\\n\\t<RequestId>EC6647CC-0A36-EC7A-BA72-CC81BF3DE182</RequestId>\\n\\t<Group>\\n\\t\\t<GroupName>NewDev-Team</GroupName>\\n\\t\\t<Comments>开发团队</Comments>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n        <GroupId>g-FpMEHiMysofp****</GroupId>\\n\\t</Group>\\n</UpdateGroupResponse>\\t\\n","errorExample":"<UpdateGroupResponse>\\n    <RequestId>EC6647CC-0A36-EC7A-BA72-CC81BF3DE182</RequestId>\\n    <Group>\\n        <GroupName>NewDev-Team</GroupName>\\n        <Comments>开发团队</Comments>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n    </Group>\\n</UpdateGroupResponse>"}]',
            'title' => '修改用户组信息',
            'summary' => '调用UpdateGroup接口修改用户组信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。'."\n"
                            ."\n"
                            .'您可以通过[ListGroups](~~28703~~)查看用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
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
                                'example' => 'FCF40AB5-881C-A0F9-334C-B0AD423AA69D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FCF40AB5-881C-A0F9-334C-B0AD423AA69D\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"FCF40AB5-881C-A0F9-334C-B0AD423AA69D\\"\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteGroupResponse>\\r\\n\\t<RequestId>FCF40AB5-881C-A0F9-334C-B0AD423AA69D</RequestId>\\r\\n</DeleteGroupResponse>","errorExample":"<DeleteGroupResponse>\\n    <RequestId>FCF40AB5-881C-A0F9-334C-B0AD423AA69D</RequestId>\\n</DeleteGroupResponse>"}]',
            'title' => '删除指定的用户组',
            'summary' => '调用DeleteGroup接口删除指定的用户组。',
            'description' => '删除用户组前，请确保用户组没有绑定任何权限策略且用户组内没有RAM用户。'."\n",
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListGroups' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果的条数，当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。'."\n"
                            ."\n"
                            .'取值范围：1 ~ 1000，默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '065527AA-2F2E-AD7C-7484-F2626CFE4934',
                            ],
                            'Groups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Group' => [
                                        'description' => '用户组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户组信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupId' => [
                                                    'description' => '用户组ID。',
                                                    'type' => 'string',
                                                    'example' => 'g-FpMEHiMysofp****',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'GroupName' => [
                                                    'description' => '用户组名称。',
                                                    'type' => 'string',
                                                    'example' => 'Dev-Team',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '开发团队',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此字段，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"065527AA-2F2E-AD7C-7484-F2626CFE4934\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"GroupId\\": \\"g-FpMEHiMysofp****\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"GroupName\\": \\"Dev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n      }\\n    ]\\n  },\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"065527AA-2F2E-AD7C-7484-F2626CFE4934\\",\\n    \\"IsTruncated\\": true,\\n    \\"Marker\\": \\"EXAMPLE\\",\\n    \\"Groups\\": {\\n        \\"Group\\": [\\n            {\\n                \\"GroupName\\": \\"Dev-Team\\",\\n                \\"Comments\\": \\"开发团队\\",\\n                \\"CreateDate\\" : \\"2015-01-23T12:33:18Z\\",\\n                \\"UpdateDate\\" : \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"GroupName\\": \\"QA-Team\\",\\n                \\"Comments\\": \\"测试团队\\",\\n                \\"CreateDate\\" : \\"2015-02-18T17:22:08Z\\",\\n                \\"UpdateDate\\" : \\"2015-02-18T17:22:08Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListGroupsResponse>\\r\\n\\t<RequestId>065527AA-2F2E-AD7C-7484-F2626CFE4934</RequestId>\\r\\n\\t<IsTruncated>true</IsTruncated>\\r\\n\\t<Marker>EXAMPLE</Marker>\\r\\n\\t<Groups>\\r\\n\\t\\t<Group>\\r\\n\\t\\t\\t<GroupName>Dev-Team</GroupName>\\r\\n\\t\\t\\t<Comments>开发团队</Comments>\\r\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\r\\n\\t\\t\\t<GroupId>g-FpMEHiMysofp****</GroupId>\\r\\n\\t\\t</Group>\\r\\n\\t\\t<Group>\\r\\n\\t\\t\\t<GroupName>QA-Team</GroupName>\\r\\n\\t\\t\\t<Comments>测试团队</Comments>\\r\\n\\t\\t\\t<CreateDate>2015-02-18T17:22:08Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2015-02-18T17:22:08Z</UpdateDate>\\r\\n\\t\\t\\t<GroupId>g-zYtroLrgbZR1****</GroupId>\\r\\n\\t\\t</Group>\\r\\n\\t</Groups>\\r\\n</ListGroupsResponse>\\r\\n\\t\\r\\n","errorExample":"<ListGroupsResponse>\\n  <RequestId>065527AA-2F2E-AD7C-7484-F2626CFE4934</RequestId>\\n  <IsTruncated>true</IsTruncated>\\n  <Marker>EXAMPLE</Marker>\\n  <Groups>\\n    <Group>\\n      <GroupName>Dev-Team</GroupName>\\n      <Comments>开发团队</Comments>\\n      <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n      <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n    </Group>\\n    <Group>\\n      <GroupName>QA-Team</GroupName>\\n      <Comments>测试团队</Comments>\\n      <CreateDate>2015-02-18T17:22:08Z</CreateDate>\\n      <UpdateDate>2015-02-18T17:22:08Z</UpdateDate>\\n    </Group>\\n  </Groups>\\n</ListGroupsResponse>"}]',
            'title' => '查询用户组列表',
            'summary' => '调用ListGroups接口查询用户组列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListGroupsForUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Alice',
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
                                'example' => 'DA772B52-BF9F-54CA-AC77-AA7A2DA89D46',
                            ],
                            'Groups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Group' => [
                                        'description' => '用户组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户组信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupId' => [
                                                    'description' => '用户组ID。',
                                                    'type' => 'string',
                                                    'example' => 'g-zYtroLrgbZR1****',
                                                ],
                                                'GroupName' => [
                                                    'description' => '用户组名称。',
                                                    'type' => 'string',
                                                    'example' => 'Dev-Team',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '开发团队',
                                                ],
                                                'JoinDate' => [
                                                    'description' => '加入时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA772B52-BF9F-54CA-AC77-AA7A2DA89D46\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"GroupId\\": \\"g-zYtroLrgbZR1****\\",\\n        \\"GroupName\\": \\"Dev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"JoinDate\\": \\"2015-01-23T12:33:18Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListGroupsForUserResponse>\\n    <RequestId>DA772B52-BF9F-54CA-AC77-AA7A2DA89D46</RequestId>\\n    <Groups>\\n        <Group>\\n            <GroupName>Dev-Team</GroupName>\\n            <Comments>开发团队</Comments>\\n            <JoinDate>2015-01-23T12:33:18Z</JoinDate>\\n            <GroupId>g-zYtroLrgbZR1****</GroupId>\\n        </Group>\\n    </Groups>\\n</ListGroupsForUserResponse>","errorExample":""}]',
            'title' => '列出指定RAM用户所加入的用户组信息',
            'summary' => '调用ListGroupsForUser接口查询指定RAM用户所加入的用户组信息。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，查询RAM用户`Alice`加入的用户组信息。返回结果显示，`Alice`加入了名为`Dev-Team`的用户组。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUsersForGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。'."\n"
                            ."\n"
                            .'取值范围：1 ~ 1000，默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4B450CA1-36E8-4AA2-8461-86B42BF4CC4E',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此字段。当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'description' => '用户信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Alice',
                                                ],
                                                'JoinDate' => [
                                                    'description' => '加入日期。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'UserName' => [
                                                    'description' => '用户名称。',
                                                    'type' => 'string',
                                                    'example' => 'Alice',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\",\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"DisplayName\\": \\"Alice\\",\\n        \\"JoinDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UserName\\": \\"Alice\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\" : \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"Users\\" : {\\n    \\"User\\" : [\\n      {\\n        \\"UserId\\" : \\"1227489245380721\\",\\n        \\"UserName\\" : \\"zhangqiang\\",\\n        \\"DisplayName\\" : \\"张强\\",\\n        \\"JoinDate\\" : \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"UserId\\" : \\"1406498224724456\\",\\n        \\"UserName\\" : \\"lili\\",\\n        \\"DisplayName\\" : \\"李丽\\",\\n        \\"JoinDate\\" : \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  }\\n}"},{"type":"xml","example":"<RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n<Users>\\n    <User>\\n        <UserName>zhangqiang</UserName>\\n        <DisplayName>张强</DisplayName>\\n        <JoinDate>2015-01-23T12:33:18Z</JoinDate>\\n    </User>\\n    <User>\\n        <UserName>lili</UserName>\\n        <DisplayName>李丽</DisplayName>\\n        <JoinDate>2015-02-18T17:22:08Z</JoinDate>\\n    </User>\\n</Users>","errorExample":"<ListUsersForGroupResponse>\\n  <RequestId>5756784B-79C4-E82E-24C2-FC3E171E5AB3</RequestId>\\n  <Users>\\n    <User>\\n      <UserId>1227489245380721</UserId>\\n      <UserName>zhangqiang</UserName>\\n      <DisplayName>张强</DisplayName>\\n      <JoinDate>2015-01-23T12:33:18Z</JoinDate>\\n    </User>\\n    <User>\\n      <UserId>1406498224724456</UserId>\\n      <UserName>lili</UserName>\\n      <DisplayName>李丽</DisplayName>\\n      <JoinDate>2015-02-18T17:22:08Z</JoinDate>\\n    </User>\\n  </Users>\\n</ListUsersForGroupResponse>"}]',
            'title' => '列出指定用户组所包含的RAM用户',
            'summary' => '调用ListUsersForGroup接口列出指定用户组所包含的RAM用户。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AddUserToGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1B968853-B423-63A6-FE1F-45E81BC2AD61',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1B968853-B423-63A6-FE1F-45E81BC2AD61\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"1B968853-B423-63A6-FE1F-45E81BC2AD61\\"\\n}"},{"type":"xml","example":"<RequestId>1B968853-B423-63A6-FE1F-45E81BC2AD61</RequestId>","errorExample":"<AddUserToGroupResponse>\\n    <RequestId>1B968853-B423-63A6-FE1F-45E81BC2AD61</RequestId>\\n</AddUserToGroupResponse>"}]',
            'title' => '将RAM用户添加到指定的用户组',
            'summary' => '调用AddUserToGroup接口将RAM用户添加到指定的用户组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'RemoveUserFromGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Dev-Team',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A07EF215-B9B3-8CB2-2899-3F9575C6E320',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07EF215-B9B3-8CB2-2899-3F9575C6E320\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"A07EF215-B9B3-8CB2-2899-3F9575C6E320\\"\\n}"},{"type":"xml","example":"<RemoveUserFromGroupResponse>\\n    <RequestId>A07EF215-B9B3-8CB2-2899-3F9575C6E320</RequestId>\\n</RemoveUserFromGroupResponse>","errorExample":"<RemoveUserFromGroupResponse>\\n    <RequestId>A07EF215-B9B3-8CB2-2899-3F9575C6E320</RequestId>\\n</RemoveUserFromGroupResponse>"}]',
            'title' => '将RAM用户从用户组中移除',
            'summary' => '调用RemoveUserFromGroup接口将RAM用户从用户组中移除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECSAdmin',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS管理角色',
                    ],
                ],
                [
                    'name' => 'AssumeRolePolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '信任策略。指定允许扮演该RAM角色的一个或多个主体，这个主体可以是阿里云账号、阿里云服务或身份提供商。'."\n"
                            .'>RAM用户不能扮演可信实体为阿里云服务的RAM角色。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"Statement":[{"Action":"sts:AssumeRole","Effect":"Allow","Principal":{"RAM":"acs:ram::123456789012****:root"}}],"Version":"1"}',
                    ],
                ],
                [
                    'name' => 'MaxSessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色最大会话时间。'."\n"
                            ."\n\n"
                            .'取值范围：3600秒~43200秒。默认值：3600秒。'."\n"
                            ."\n"
                            .'取值为空时将采用默认值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Role' => [
                                'description' => 'RAM角色信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AssumeRolePolicyDocument' => [
                                        'description' => 'RAM角色的信任策略。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::123456789012****:root" } } ], "Version": "1" }',
                                    ],
                                    'Description' => [
                                        'description' => 'RAM角色描述。',
                                        'type' => 'string',
                                        'example' => 'ECS管理角色',
                                    ],
                                    'MaxSessionDuration' => [
                                        'description' => 'RAM角色最大会话时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3600',
                                    ],
                                    'RoleName' => [
                                        'description' => 'RAM角色名称。',
                                        'type' => 'string',
                                        'example' => 'ECSAdmin',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'RoleId' => [
                                        'description' => 'RAM角色ID。',
                                        'type' => 'string',
                                        'example' => '901234567890****',
                                    ],
                                    'Arn' => [
                                        'description' => 'RAM角色的资源描述符。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012****:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"RoleId\\": \\"901234567890****\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"Role\\": {\\n        \\"RoleId\\": \\"901234567890123\\",\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"Arn\\": \\"acs:ram::1234567890123456:role/ECSAdmin\\",\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012345678:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreateRoleResponse>\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n\\t<Role>\\n\\t\\t<RoleId>901234567890****</RoleId>\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\n\\t\\t<Description>ECS管理角色</Description>\\n\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::123456789012****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t</Role>\\n</CreateRoleResponse>","errorExample":"<CreateRoleResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <Role>\\n        <RoleId>901234567890123</RoleId>\\n        <RoleName>ECSAdmin</RoleName>\\n        <Arn>acs:ram::1234567890123456:role/ECSAdmin</Arn>\\n        <Description>ECS管理角色</Description>\\n        <AssumeRolePolicyDocument>{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::123456789012345678:root\\" } } ], \\"Version\\": \\"1\\" }</AssumeRolePolicyDocument>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </Role>\\n</CreateRoleResponse>"}]',
            'title' => '创建角色',
            'summary' => '调用CreateRole接口创建RAM角色。',
            'description' => '### 使用说明'."\n"
                .'关于RAM角色的介绍，请参见[RAM角色概览](~~93689~~)。',
            'requestParamsDescription' => '**AssumeRolePolicyDocument示例**'."\n"
                ."\n"
                .'- 以下策略表示：允许扮演该RAM角色的可信实体为阿里云账号（AccountID=`123456789012****`）下被授权的任何RAM用户。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Statement": [{'."\n"
                .'		"Action": "sts:AssumeRole",'."\n"
                .'		"Effect": "Allow",'."\n"
                .'		"Principal": {'."\n"
                .'			"RAM": ['."\n"
                .'				"acs:ram::123456789012****:root"'."\n"
                .'			]'."\n"
                .'		}'."\n"
                .'	}],'."\n"
                .'	"Version": "1"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'- 以下策略表示：允许扮演该RAM角色的可信实体为阿里云账号（AccountID=`123456789012****`）下被授权的RAM用户`testuser`。'."\n"
                .'>创建该角色前，请确保已创建RAM用户`testuser`（其登录名称为：`testuser@123456789012****.onaliyun.com`）。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Statement": [{'."\n"
                .'		"Action": "sts:AssumeRole",'."\n"
                .'		"Effect": "Allow",'."\n"
                .'		"Principal": {'."\n"
                .'			"RAM": ['."\n"
                .'				"acs:ram::123456789012****:user/testuser"'."\n"
                .'			]'."\n"
                .'		}'."\n"
                .'	}],'."\n"
                .'	"Version": "1"'."\n"
                .'}'."\n"
                .'```'."\n"
                .'- 以下策略表示：允许扮演该RAM角色的可信实体为当前阿里云账号下的ECS服务。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Statement": [{'."\n"
                .'		"Action": "sts:AssumeRole",'."\n"
                .'		"Effect": "Allow",'."\n"
                .'		"Principal": {'."\n"
                .'			"Service": ['."\n"
                .'				"ecs.aliyuncs.com"'."\n"
                .'			]'."\n"
                .'		}'."\n"
                .'	}],'."\n"
                .'	"Version": "1"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n"
                .'- 以下策略表示：允许扮演该RAM角色的可信实体为当前阿里云账号（AccountID=`123456789012****`）下的SAML身份提供商`testprovider`。'."\n"
                .'>创建此角色前，请确保已创建SAML身份提供商`testprovider`。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Statement": [{'."\n"
                .'		"Action": "sts:AssumeRole",'."\n"
                .'		"Effect": "Allow",'."\n"
                .'		"Principal": {'."\n"
                .'			"Federated": ['."\n"
                .'				"acs:ram::123456789012****:saml-provider/testprovider"'."\n"
                .'			]'."\n"
                .'		},'."\n"
                .'		"Condition": {'."\n"
                .'			"StringEquals": {'."\n"
                .'				"saml:recipient": "https://signin.aliyun.com/saml-role/sso"'."\n"
                .'			}'."\n"
                .'		}'."\n"
                .'	}],'."\n"
                .'	"Version": "1"'."\n"
                .'}'."\n"
                .'```'."\n"
                ."\n\n"
                .'- 以下策略表示：允许扮演该RAM角色的可信实体为当前阿里云账号（AccountID=`123456789012****`）下的OIDC身份提供商`TestOIDCProvider`。'."\n"
                .'>创建此角色前，请确保已创建OIDC身份提供商`TestOIDCProvider`。'."\n"
                .'```'."\n"
                .'{'."\n"
                .'	"Statement": [{'."\n"
                .'		"Action": "sts:AssumeRole",'."\n"
                .'		"Effect": "Allow",'."\n"
                .'		"Principal": {'."\n"
                .'			"Federated": ['."\n"
                .'				"acs:ram::123456789012****:oidc-provider/TestOIDCProvider"'."\n"
                .'			]'."\n"
                .'		},'."\n"
                .'		"Condition": {'."\n"
                .'			"StringEquals": {'."\n"
                .'				"oidc:aud": ['."\n"
                .'					"496271242565057****"'."\n"
                .'				],'."\n"
                .'				"oidc:iss": "https://dev-xxxxxx.okta.com",'."\n"
                .'				"oidc:sub": "KryrkIdjylZb7agUgCEf****"'."\n"
                .'			}'."\n"
                .'		}'."\n"
                .'	}],'."\n"
                .'	"Version": "1"'."\n"
                .'}'."\n"
                .'```',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定角色名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECSAdmin',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '898FAB24-7509-43EE-A287-086FE4C44394',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}"},{"type":"xml","example":"<DeleteRoleResponse>\\n    <RequestId>898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\n</DeleteRoleResponse>","errorExample":"<DeleteRoleResponse>\\n    <RequestId>898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\n</DeleteRoleResponse>"}]',
            'title' => '删除指定的角色',
            'summary' => '调用DeleteRole接口删除指定的角色。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色名称。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、半角句号（.）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECSAdmin',
                    ],
                ],
                [
                    'name' => 'NewAssumeRolePolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色的信任策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::12345678901234****:root" } } ], "Version": "1" }',
                    ],
                ],
                [
                    'name' => 'NewMaxSessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色最大会话时间。'."\n"
                            ."\n"
                            .'取值范围：3600秒~43200秒。默认值：3600秒。'."\n"
                            ."\n"
                            .'取值为空时将采用默认值。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM角色描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS管理角色',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Role' => [
                                'description' => 'RAM角色信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AssumeRolePolicyDocument' => [
                                        'description' => 'RAM角色的信任策略。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::123456789012****:root" } } ], "Version": "1" }',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM角色的更新时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'Description' => [
                                        'description' => 'RAM角色描述。',
                                        'type' => 'string',
                                        'example' => 'ECS管理角色',
                                    ],
                                    'MaxSessionDuration' => [
                                        'description' => 'RAM角色最大会话时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3600',
                                    ],
                                    'RoleName' => [
                                        'description' => 'RAM角色名称。',
                                        'type' => 'string',
                                        'example' => 'ECSAdmin',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM角色的创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'RoleId' => [
                                        'description' => 'RAM角色ID。',
                                        'type' => 'string',
                                        'example' => '901234567890****',
                                    ],
                                    'Arn' => [
                                        'description' => 'RAM角色的资源描述符。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012****:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n    \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"RoleId\\": \\"901234567890****\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"Role\\": {\\n        \\"RoleId\\": \\"901234567890123\\",\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"Arn\\": \\"acs:ram::1234567890123456:role/ECSAdmin\\",\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012345678:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<UpdateRoleResponse>\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n\\t<Role>\\n\\t\\t<RoleId>901234567890****</RoleId>\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\n\\t\\t<Description>ECS管理角色</Description>\\n\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::123456789012****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n\\t</Role>\\n</UpdateRoleResponse>","errorExample":"<UpdateRoleResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <Role>\\n        <RoleId>901234567890123</RoleId>\\n        <RoleName>ECSAdmin</RoleName>\\n        <Arn>acs:ram::1234567890123456:role/ECSAdmin</Arn>\\n        <Description>ECS管理角色</Description>\\n        <AssumeRolePolicyDocument>{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::123456789012345678:root\\" } } ], \\"Version\\": \\"1\\" }</AssumeRolePolicyDocument>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n    </Role>\\n</UpdateRoleResponse>"}]',
            'title' => '更新角色信息',
            'summary' => '调用UpdateRole接口更新RAM角色信息。',
            'description' => '本文将提供一个示例，更新RAM角色`ECSAdmin`的描述信息为`ECS管理员`。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定角色名。'."\n"
                            ."\n"
                            .'长度为1~64个字符，可包含英文字母、数字、点号（.）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ECSAdmin',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Role' => [
                                'description' => '角色信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AssumeRolePolicyDocument' => [
                                        'description' => '扮演角色的权限策略。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::123456789012****:root" } } ], "Version": "1" }',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'Description' => [
                                        'description' => '角色描述。',
                                        'type' => 'string',
                                        'example' => 'ECS管理角色',
                                    ],
                                    'MaxSessionDuration' => [
                                        'description' => '角色最大会话时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3600',
                                    ],
                                    'RoleName' => [
                                        'description' => '角色名称。',
                                        'type' => 'string',
                                        'example' => 'ECSAdmin',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'RoleId' => [
                                        'description' => '角色ID。',
                                        'type' => 'string',
                                        'example' => '901234567890****',
                                    ],
                                    'Arn' => [
                                        'description' => '角色的资源描述符。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Role\\": {\\n    \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012****:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n    \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Description\\": \\"ECS管理角色\\",\\n    \\"MaxSessionDuration\\": 3600,\\n    \\"RoleName\\": \\"ECSAdmin\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"RoleId\\": \\"901234567890****\\",\\n    \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\"\\n  },\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"Role\\": {\\n        \\"RoleId\\": \\"901234567890123\\",\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"Arn\\": \\"acs:ram::1234567890123456:role/ECSAdmin\\",\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"AssumeRolePolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [ { \\\\\\"Action\\\\\\": \\\\\\"sts:AssumeRole\\\\\\", \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Principal\\\\\\": { \\\\\\"RAM\\\\\\": \\\\\\"acs:ram::123456789012345678:root\\\\\\" } } ], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\" }\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetRoleResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n\\t<Role>\\r\\n\\t\\t<RoleId>901234567890****</RoleId>\\r\\n\\t\\t<RoleName>ECSAdmin</RoleName>\\r\\n\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\r\\n\\t\\t<Description>ECS管理角色</Description>\\r\\n\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\r\\n\\t\\t<AssumeRolePolicyDocument>{ &quot;Statement&quot;: [ { &quot;Action&quot;: &quot;sts:AssumeRole&quot;, &quot;Effect&quot;: &quot;Allow&quot;, &quot;Principal&quot;: { &quot;RAM&quot;: &quot;acs:ram::123456789012****:root&quot; } } ], &quot;Version&quot;: &quot;1&quot; }</AssumeRolePolicyDocument>\\r\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\r\\n\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\r\\n\\t</Role>\\r\\n</GetRoleResponse>\\r\\n\\t\\r\\n","errorExample":"<GetRoleResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <Role>\\n        <RoleId>901234567890123</RoleId>\\n        <RoleName>ECSAdmin</RoleName>\\n        <Arn>acs:ram::1234567890123456:role/ECSAdmin</Arn>\\n        <Description>ECS管理角色</Description>\\n        <AssumeRolePolicyDocument>{ \\"Statement\\": [ { \\"Action\\": \\"sts:AssumeRole\\", \\"Effect\\": \\"Allow\\", \\"Principal\\": { \\"RAM\\": \\"acs:ram::123456789012345678:root\\" } } ], \\"Version\\": \\"1\\" }</AssumeRolePolicyDocument>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n    </Role>\\n</GetRoleResponse>"}]',
            'title' => '获取角色信息',
            'summary' => '调用GetRole接口获取角色信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRoles' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。'."\n"
                            ."\n"
                            .'取值范围：1 ~ 1000。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
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
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Roles' => [
                                'type' => 'object',
                                'properties' => [
                                    'Role' => [
                                        'description' => '角色信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '角色信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '角色描述。',
                                                    'type' => 'string',
                                                    'example' => 'ECS管理角色',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'MaxSessionDuration' => [
                                                    'description' => '角色最大会话时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '3600',
                                                ],
                                                'RoleName' => [
                                                    'description' => '角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'ECSAdmin',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'RoleId' => [
                                                    'description' => '角色ID。',
                                                    'type' => 'string',
                                                    'example' => '901234567890****',
                                                ],
                                                'Arn' => [
                                                    'description' => '角色的资源描述符。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此字段。当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"IsTruncated\\": true,\\n  \\"Roles\\": {\\n    \\"Role\\": [\\n      {\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"MaxSessionDuration\\": 3600,\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"RoleId\\": \\"901234567890****\\",\\n        \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\"\\n      }\\n    ]\\n  },\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"Roles\\": {\\n        \\"Role\\": [\\n            {\\n                \\"RoleId\\": \\"901234567890123\\",\\n                \\"RoleName\\": \\"ECSAdmin\\",\\n                \\"Arn\\": \\"acs:ram::1234567890123456:role/ECSAdmin\\",\\n                \\"Description\\": \\"ECS管理角色\\",\\n                \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n                \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"RoleId\\": \\"901234567890456\\",\\n                \\"RoleName\\": \\"OSSReadonlyAccess\\",\\n                \\"Arn\\": \\"acs:ram::1234567890123456:role/OSSReadonlyAccess\\",\\n                \\"Description\\": \\"OSS只读访问角色\\",\\n                \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n                \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<ListRolesResponse>\\n\\t<RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n\\t<IsTruncated>true</IsTruncated>\\n\\t<Marker>EXAMPLE</Marker>\\n\\t<Roles>\\n\\t\\t<Role>\\n\\t\\t\\t<RoleId>901234567890****</RoleId>\\n\\t\\t\\t<RoleName>ECSAdmin</RoleName>\\n\\t\\t\\t<Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\n\\t\\t\\t<Description>ECS管理角色</Description>\\n\\t\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n\\t\\t</Role>\\n\\t\\t<Role>\\n\\t\\t\\t<RoleId>901234567890****</RoleId>\\n\\t\\t\\t<RoleName>OSSReadonlyAccess</RoleName>\\n\\t\\t\\t<Arn>acs:ram::123456789012****:role/OSSReadonlyAccess</Arn>\\n\\t\\t\\t<Description>OSS只读访问角色</Description>\\n\\t\\t\\t<MaxSessionDuration>3600</MaxSessionDuration>\\n\\t\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t\\t<UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n\\t\\t</Role>\\n\\t</Roles>\\n</ListRolesResponse>\\t\\n","errorExample":"<ListRolesResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Roles>\\n        <Role>\\n            <RoleId>901234567890123</RoleId>\\n            <RoleName>ECSAdmin</RoleName>\\n            <Arn>acs:ram::1234567890123456:role/ECSAdmin</Arn>\\n            <Description>ECS管理角色</Description>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n        </Role>\\n        <Role>\\n            <RoleId>901234567890456</RoleId>\\n            <RoleName>OSSReadonlyAccess</RoleName>\\n            <Arn>acs:ram::1234567890123456:role/OSSReadonlyAccess</Arn>\\n            <Description>OSS只读访问角色</Description>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n        </Role>\\n    </Roles>\\n</ListRolesResponse>"}]',
            'title' => '获取角色列表',
            'summary' => '列出角色。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreatePolicy' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。'."\n"
                            ."\n"
                            .'长度为1~128个字符，可包含英文字母、数字和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'View-ECS-instances-in-a-specific-region',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '查看指定地域ECS实例',
                    ],
                ],
                [
                    'name' => 'PolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略内容。'."\n"
                            ."\n"
                            .'长度为1~6144个字符。'."\n"
                            ."\n"
                            .'关于权限策略元素和示例，请参见[权限策略基本元素](~~93738~~)和[权限策略示例库](~~210969~~)。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"Statement": [{"Effect": "Allow","Action": "ecs:Describe*","Resource": "acs:ecs:cn-qingdao:*:instance/*"}],"Version": "1"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Policy' => [
                                'description' => '权限策略信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DefaultVersion' => [
                                        'description' => '权限策略版本。默认值：v1。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Description' => [
                                        'description' => '权限策略描述。',
                                        'type' => 'string',
                                        'example' => '查看指定地域ECS实例',
                                    ],
                                    'PolicyName' => [
                                        'description' => '权限策略名称。',
                                        'type' => 'string',
                                        'example' => 'View-ECS-instances-in-a-specific-region',
                                    ],
                                    'CreateDate' => [
                                        'description' => '权限策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-10-13T02:46:57Z',
                                    ],
                                    'PolicyType' => [
                                        'description' => '权限策略类型。取值：'."\n"
                                            ."\n"
                                            .'- Custom：自定义策略。'."\n"
                                            .'- System：系统策略。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BA34C54A-C2B1-5A65-B6B0-B5842C1DB4DA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": {\\n    \\"DefaultVersion\\": \\"v1\\",\\n    \\"Description\\": \\"查看指定地域ECS实例\\",\\n    \\"PolicyName\\": \\"View-ECS-instances-in-a-specific-region\\",\\n    \\"CreateDate\\": \\"2021-10-13T02:46:57Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"BA34C54A-C2B1-5A65-B6B0-B5842C1DB4DA\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<CreatePolicyResponse>\\n\\t<Policy>\\n\\t\\t<PolicyType>Custom</PolicyType>\\n\\t\\t<Description>查看指定地域ECS实例</Description>\\n\\t\\t<DefaultVersion>v1</DefaultVersion>\\n\\t\\t<PolicyName>View-ECS-instances-in-a-specific-region</PolicyName>\\n\\t\\t<CreateDate>2021-10-13T02:46:57Z</CreateDate>\\n\\t</Policy>\\n\\t<RequestId>BA34C54A-C2B1-5A65-B6B0-B5842C1DB4DA</RequestId>\\n</CreatePolicyResponse>","errorExample":""}]',
            'title' => '创建一个权限策略',
            'summary' => '调用CreatePolicy接口创建一个自定义权限策略。',
            'description' => '关于权限策略的介绍，请参见[权限策略概览](~~93732~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，创建一个权限策略，用来查看指定地域的ECS实例。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPolicy' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'Policy' => [
                                'description' => '权限策略的基本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DefaultVersion' => [
                                        'description' => '默认版本。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'Description' => [
                                        'description' => '权限策略描述。',
                                        'type' => 'string',
                                        'example' => 'OSS管理员权限',
                                    ],
                                    'PolicyDocument' => [
                                        'description' => '已废弃。',
                                        'type' => 'string',
                                        'example' => 'N/A',
                                    ],
                                    'AttachmentCount' => [
                                        'description' => '引用次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'PolicyName' => [
                                        'description' => '权限策略名称。',
                                        'type' => 'string',
                                        'example' => 'OSS-Administrator',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                    'PolicyType' => [
                                        'description' => '权限策略类型。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                            'DefaultPolicyVersion' => [
                                'description' => '权限策略的默认版本。',
                                'type' => 'object',
                                'properties' => [
                                    'IsDefaultVersion' => [
                                        'description' => '`DefaultPolicyVersion`返回的数据结构固定为默认版本，因此`IsDefaultVersion`的取值固定为`true`。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'PolicyDocument' => [
                                        'description' => '权限策略内容。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
                                    ],
                                    'VersionId' => [
                                        'description' => '权限策略版本。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policy\\": {\\n    \\"DefaultVersion\\": \\"v1\\",\\n    \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"Description\\": \\"OSS管理员权限\\",\\n    \\"PolicyDocument\\": \\"N/A\\",\\n    \\"AttachmentCount\\": 0,\\n    \\"PolicyName\\": \\"OSS-Administrator\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n    \\"PolicyType\\": \\"Custom\\"\\n  },\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\",\\n  \\"DefaultPolicyVersion\\": {\\n    \\"IsDefaultVersion\\": true,\\n    \\"PolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\",\\n    \\"VersionId\\": \\"v1\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\",\\n    \\"Policy\\": {\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"PolicyType\\": \\"Custom\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"AttachmentCount\\": 0\\n    }\\n}"},{"type":"xml","example":"<GetPolicyResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n    <Policy>\\n        <PolicyName>OSS-Administrator</PolicyName>\\n        <PolicyType>Custom</PolicyType>\\n        <Description>OSS管理员权限</Description>\\n        <DefaultVersion>v1</DefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n        <AttachmentCount>0</AttachmentCount>\\n    </Policy>\\n    <DefaultPolicyVersion>\\n\\t\\t<VersionId>v1</VersionId>\\n\\t\\t<IsDefaultVersion>true</IsDefaultVersion>\\n\\t\\t<CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n\\t\\t<PolicyDocument>{ \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}</PolicyDocument>\\n    </DefaultPolicyVersion>\\n</GetPolicyResponse>","errorExample":"<GetPolicyResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n    <Policy>\\n        <PolicyName>OSS-Administrator</PolicyName>\\n        <PolicyType>Custom</PolicyType>\\n        <Description>OSS管理员权限</Description>\\n        <DefaultVersion>v1</DefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n        <AttachmentCount>0</AttachmentCount>\\n    </Policy>\\n</GetPolicyResponse>"}]',
            'title' => '获取指定的权限策略信息',
            'summary' => '调用GetPolicy接口获取指定的权限策略信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdatePolicyDescription' => [
            'summary' => '调用UpdatePolicyDescription更新自定义策略的描述信息。',
            'methods' => [
                'post',
                'get',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestPolicy',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略描述。'."\n"
                            ."\n"
                            .'长度为1~1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test policy.',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7572DEBD-0ECE-518E-8682-D8CB82F8FE8E',
                            ],
                            'Policy' => [
                                'description' => '权限策略信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyName' => [
                                        'description' => '权限策略名称。',
                                        'type' => 'string',
                                        'example' => 'TestPolicy',
                                    ],
                                    'PolicyType' => [
                                        'description' => '权限策略类型。取值：'."\n"
                                            ."\n"
                                            .'- Custom：自定义策略。'."\n"
                                            .'- System：系统策略。',
                                        'type' => 'string',
                                        'example' => 'Custom',
                                    ],
                                    'CreateDate' => [
                                        'description' => '权限策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-02-28T07:04:15Z',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '权限策略更新时间。',
                                        'type' => 'string',
                                        'example' => '2022-02-28T07:05:37Z',
                                    ],
                                    'Description' => [
                                        'description' => '权限策略描述。',
                                        'type' => 'string',
                                        'example' => 'This is a test policy.',
                                    ],
                                    'DefaultVersion' => [
                                        'description' => '权限策略版本。默认值：v1。',
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7572DEBD-0ECE-518E-8682-D8CB82F8FE8E\\",\\n  \\"Policy\\": {\\n    \\"PolicyName\\": \\"TestPolicy\\",\\n    \\"PolicyType\\": \\"Custom\\",\\n    \\"CreateDate\\": \\"2022-02-28T07:04:15Z\\",\\n    \\"UpdateDate\\": \\"2022-02-28T07:05:37Z\\",\\n    \\"Description\\": \\"This is a test policy.\\",\\n    \\"DefaultVersion\\": \\"v1\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdatePolicyDescriptionResponse>\\n    <Policy>\\n        <PolicyType>Custom</PolicyType>\\n        <UpdateDate>2022-02-28T07:05:37Z</UpdateDate>\\n        <Description>This is a test policy.</Description>\\n        <PolicyName>TestPolicy</PolicyName>\\n        <DefaultVersion>v1</DefaultVersion>\\n        <CreateDate>2022-02-28T07:04:15Z</CreateDate>\\n    </Policy>\\n    <RequestId>7572DEBD-0ECE-518E-8682-D8CB82F8FE8E</RequestId>\\n</UpdatePolicyDescriptionResponse>","errorExample":""}]',
            'title' => '更新自定义策略的描述信息',
            'description' => '### 使用说明'."\n"
                .'本API仅限更新自定义策略的描述信息，系统策略的描述信息不支持更新。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~28676~~)。',
        ],
        'DeletePolicy' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '898FAB24-7509-43EE-A287-086FE4C44394',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"898FAB24-7509-43EE-A287-086FE4C44394\\"\\n}"},{"type":"xml","example":"<DeletePolicyResponse>\\n    <RequestId>898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\n</DeletePolicyResponse>","errorExample":"<DeletePolicyResponse>\\n    <RequestId>898FAB24-7509-43EE-A287-086FE4C44394</RequestId>\\n</DeletePolicyResponse>"}]',
            'title' => '删除指定的权限策略',
            'summary' => '调用DeletePolicy接口删除指定的权限策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPolicies' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定`Policy`的类型，取值为`System`或`Custom`，如果没有指定则列出所有权限策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定返回结果的条数，当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。'."\n"
                            ."\n"
                            .'取值范围：1 ~ 1000，默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'description' => '权限策略信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DefaultVersion' => [
                                                    'description' => '默认版本。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'Description' => [
                                                    'description' => '权限策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'OSS管理员权限',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '修改时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'AttachmentCount' => [
                                                    'description' => '引用次数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'OSS-Administrator',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '权限策略类型。',
                                                    'type' => 'string',
                                                    'example' => 'System',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此字段，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"AttachmentCount\\": 3,\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"System\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"IsTruncated\\": true,\\n    \\"Marker\\": \\"EXAMPLE\\",\\n    \\"Policies\\": {\\n        \\"Policy\\": [\\n            {\\n                \\"PolicyName\\": \\"OSS-Administrator\\",\\n                \\"PolicyType\\": \\"Custom\\",\\n                \\"Description\\": \\"OSS管理员权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n                \\"UpdateDate\\": \\"2015-01-23T12:33:18Z\\",\\n                \\"AttachmentCount\\": 3\\n            },\\n            {\\n                \\"PolicyName\\": \\"ReadOnlyAccess\\",\\n                \\"PolicyType\\": \\"System\\",\\n                \\"Description\\": \\"只读权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"CreateDate\\": \\"2015-02-11T18:39:12Z\\",\\n                \\"UpdateDate\\": \\"2015-02-19T09:43:16Z\\",\\n                \\"AttachmentCount\\": 1\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<ListPoliciesResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <IsTruncated>true</IsTruncated>\\n    <Marker>EXAMPLE</Marker>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n            <AttachmentCount>0</AttachmentCount>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-02-11T18:39:12Z</CreateDate>\\n            <UpdateDate>2015-02-19T09:43:16Z</UpdateDate>\\n            <AttachmentCount>0</AttachmentCount>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesResponse>","errorExample":"<ListPoliciesResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <IsTruncated>true</IsTruncated>\\n    <Marker>EXAMPLE</Marker>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <UpdateDate>2015-01-23T12:33:18Z</UpdateDate>\\n            <AttachmentCount>0</AttachmentCount>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <CreateDate>2015-02-11T18:39:12Z</CreateDate>\\n            <UpdateDate>2015-02-19T09:43:16Z</UpdateDate>\\n            <AttachmentCount>0</AttachmentCount>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesResponse>"}]',
            'title' => '列出权限策略',
            'summary' => '调用ListPolicies接口列出权限策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreatePolicyVersion' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'PolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略内容，最大长度6144字节。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"Statement":[{"Action":["oss:*"],"Effect":"Allow","Resource":["acs:oss:*:*:*"]}],"Version":"1"}',
                    ],
                ],
                [
                    'name' => 'SetAsDefault',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否设置为默认权限策略，默认值为`false`。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RotateStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略版本自动化轮转机制，可以删除历史权限策略版本。'."\n"
                            ."\n"
                            .'目前包含：'."\n"
                            ."\n"
                            .'- `None`：关闭轮转机制。'."\n"
                            .'- `DeleteOldestNonDefaultVersionWhenLimitExceeded`：当权限策略版本数量超限时，删除最早且非活跃的版本。'."\n"
                            ."\n"
                            .'默认值：`None`。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PolicyVersion' => [
                                'description' => '新建的权限策略版本的信息。',
                                'type' => 'object',
                                'properties' => [
                                    'IsDefaultVersion' => [
                                        'description' => '是否默认版本。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PolicyDocument' => [
                                        'description' => '权限策略内容。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
                                    ],
                                    'VersionId' => [
                                        'description' => '权限策略标识。'."\n",
                                        'type' => 'string',
                                        'example' => 'v3',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PolicyVersion\\": {\\n    \\"IsDefaultVersion\\": false,\\n    \\"PolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\",\\n    \\"VersionId\\": \\"v3\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n    \\"PolicyVersion\\": {\\n        \\"VersionId\\": \\"v3\\",\\n        \\"IsDefaultVersion\\": false,\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n    }\\n}"},{"type":"xml","example":"<CreatePolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PolicyVersion>\\n        <VersionId>v3</VersionId>\\n        <IsDefaultVersion>false</IsDefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <PolicyDocument>{ \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}</PolicyDocument>\\n    </PolicyVersion>\\n</CreatePolicyVersionResponse>","errorExample":"<CreatePolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PolicyVersion>\\n        <VersionId>v3</VersionId>\\n        <IsDefaultVersion>false</IsDefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n    </Policy>\\n</CreatePolicyVersionResponse>"}]',
            'title' => '为权限策略创建新的版本',
            'summary' => '调用CreatePolicyVersion接口为权限策略创建新的版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPolicyVersion' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定目标版本的ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PolicyVersion' => [
                                'description' => '权限策略版本信息。',
                                'type' => 'object',
                                'properties' => [
                                    'IsDefaultVersion' => [
                                        'description' => '是否默认版本。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PolicyDocument' => [
                                        'description' => '权限策略内容。',
                                        'type' => 'string',
                                        'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
                                    ],
                                    'VersionId' => [
                                        'description' => '权限策略标识。',
                                        'type' => 'string',
                                        'example' => 'v3',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2015-01-23T12:33:18Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PolicyVersion\\": {\\n    \\"IsDefaultVersion\\": false,\\n    \\"PolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\",\\n    \\"VersionId\\": \\"v3\\",\\n    \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n  },\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\",\\n    \\"PolicyVersion\\": {\\n        \\"VersionId\\": \\"v3\\",\\n        \\"IsDefaultVersion\\": false,\\n        \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\"\\n    }\\n}"},{"type":"xml","example":"<GetPolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PolicyVersion>\\n        <VersionId>v3</VersionId>\\n        <IsDefaultVersion>false</IsDefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <PolicyDocument>\\n            { \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}\\n        </PolicyDocument>\\n    </PolicyVersion>\\n</GetPolicyVersionResponse>","errorExample":"<GetPolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n    <PolicyVersion>\\n        <VersionId>v3</VersionId>\\n        <IsDefaultVersion>false</IsDefaultVersion>\\n        <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        <PolicyDocument>\\n            { \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}\\n        </PolicyDocument>\\n    </PolicyVersion>\\n</GetPolicyVersionResponse>"}]',
            'title' => '获取某个权限策略的版本',
            'summary' => '调用GetPolicyVersion接口获取某个权限策略的版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeletePolicyVersion' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定目标版本的ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}"},{"type":"xml","example":"<DeletePolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</DeletePolicyVersionResponse>","errorExample":"<DeletePolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</DeletePolicyVersionResponse>"}]',
            'title' => '删除指定的权限策略的某个版本',
            'summary' => '调用DeletePolicyVersion接口删除指定的权限策略的某个版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPolicyVersions' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
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
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'PolicyVersions' => [
                                'type' => 'object',
                                'properties' => [
                                    'PolicyVersion' => [
                                        'description' => '权限策略版本信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略版本信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'IsDefaultVersion' => [
                                                    'description' => '是否默认版本。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'PolicyDocument' => [
                                                    'description' => '权限策略内容。',
                                                    'type' => 'string',
                                                    'example' => '{ "Statement": [{ "Action": ["oss:*"], "Effect": "Allow", "Resource": ["acs:oss:*:*:*"]}], "Version": "1"}',
                                                ],
                                                'VersionId' => [
                                                    'description' => '权限策略标识。',
                                                    'type' => 'string',
                                                    'example' => 'v3',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-02-26T01:25:52Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"PolicyVersions\\": {\\n    \\"PolicyVersion\\": [\\n      {\\n        \\"IsDefaultVersion\\": false,\\n        \\"PolicyDocument\\": \\"{ \\\\\\"Statement\\\\\\": [{ \\\\\\"Action\\\\\\": [\\\\\\"oss:*\\\\\\"], \\\\\\"Effect\\\\\\": \\\\\\"Allow\\\\\\", \\\\\\"Resource\\\\\\": [\\\\\\"acs:oss:*:*:*\\\\\\"]}], \\\\\\"Version\\\\\\": \\\\\\"1\\\\\\"}\\",\\n        \\"VersionId\\": \\"v3\\",\\n        \\"CreateDate\\": \\"2015-02-26T01:25:52Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"PolicyVersions\\": {\\n        \\"PolicyVersion\\": [\\n            {\\n                \\"VersionId\\": \\"v3\\",\\n                \\"IsDefaultVersion\\": false,\\n                \\"CreateDate\\": \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"VersionId\\": \\"v5\\",\\n                \\"IsDefaultVersion\\": true,\\n                \\"CreateDate\\": \\"2015-02-26T01:25:52Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<ListPolicyVersionsResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PolicyVersions>\\n        <PolicyVersion>\\n            <VersionId>v3</VersionId>\\n            <IsDefaultVersion>false</IsDefaultVersion>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n            <PolicyDocument>{ \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}</PolicyDocument>\\n        </PolicyVersion>\\n        <PolicyVersion>\\n            <VersionId>v5</VersionId>\\n            <IsDefaultVersion>true</IsDefaultVersion>\\n            <CreateDate>2015-02-26T01:25:52Z</CreateDate>\\n            <PolicyDocument>{ \\"Statement\\": [{ \\"Action\\": [\\"oss:*\\"], \\"Effect\\": \\"Allow\\", \\"Resource\\": [\\"acs:oss:*:*:*\\"]}], \\"Version\\": \\"1\\"}</PolicyDocument>\\n        </PolicyVersion>\\n    </PolicyVersions>\\n</ListPolicyVersionsResponse>","errorExample":"<ListPolicyVersionsResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <PolicyVersions>\\n        <PolicyVersion>\\n            <VersionId>v3</VersionId>\\n            <IsDefaultVersion>false</IsDefaultVersion>\\n            <CreateDate>2015-01-23T12:33:18Z</CreateDate>\\n        </PolicyVersion>\\n        <PolicyVersion>\\n            <VersionId>v5</VersionId>\\n            <IsDefaultVersion>true</IsDefaultVersion>\\n            <CreateDate>2015-02-26T01:25:52Z</CreateDate>\\n        </PolicyVersion>\\n    </PolicyVersions>\\n</ListPolicyVersionsResponse>"}]',
            'title' => '列出权限策略版本',
            'summary' => '调用ListPolicyVersions接口列出权限策略版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetDefaultPolicyVersion' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新默认版本的ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'v2',
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
                                'example' => '9B34724D-54B0-4A51-B34D-4512372FE1BE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"9B34724D-54B0-4A51-B34D-4512372FE1BE\\"\\n}"},{"type":"xml","example":"<SetDefaultPolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</SetDefaultPolicyVersionResponse>","errorExample":"<SetDefaultPolicyVersionResponse>\\n    <RequestId>9B34724D-54B0-4A51-B34D-4512372FE1BE</RequestId>\\n</SetDefaultPolicyVersionResponse>"}]',
            'title' => '设置权限策略默认版本',
            'summary' => '调用SetDefaultPolicyVersion接口设置权限策略默认版本。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachPolicyToUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<AttachPolicyToUserResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToUserResponse>","errorExample":"<AttachPolicyToUserResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToUserResponse>"}]',
            'title' => '为指定用户添加权限',
            'summary' => '调用AttachPolicyToUser接口为指定用户添加权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachPolicyFromUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
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
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<DetachPolicyFromUserResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromUserResponse>","errorExample":"<DetachPolicyFromUserResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromUserResponse>"}]',
            'title' => '为用户撤销指定的权限',
            'summary' => '调用DetachPolicyFromUser接口为用户撤销指定的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachPolicyToGroup' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dev',
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
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<AttachPolicyToGroupResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToGroupResponse>","errorExample":"<AttachPolicyToGroupResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToGroupResponse>"}]',
            'title' => '为指定用户组添加权限',
            'summary' => '调用AttachPolicyToGroup接口为指定用户组添加权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachPolicyFromGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dev',
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
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<DetachPolicyFromGroupResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromGroupResponse>","errorExample":"<DetachPolicyFromGroupResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromGroupResponse>"}]',
            'title' => '为用户组撤销指定的权限',
            'summary' => '调用DetachPolicyFromGroup接口为用户组撤销指定的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AttachPolicyToRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定角色名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSSAdminRole',
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
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<AttachPolicyToRoleResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToRoleResponse>","errorExample":"<AttachPolicyToRoleResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</AttachPolicyToRoleResponse>"}]',
            'title' => '为指定角色添加权限',
            'summary' => '调用AttachPolicyToRole接口为指定角色添加权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DetachPolicyFromRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定角色名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSSAdminRole',
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
                                'example' => '697852FB-50D7-44D9-9774-530C31EAC572',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"697852FB-50D7-44D9-9774-530C31EAC572\\"\\n}"},{"type":"xml","example":"<DetachPolicyFromRoleResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromRoleResponse>","errorExample":"<DetachPolicyFromRoleResponse>\\n    <RequestId>697852FB-50D7-44D9-9774-530C31EAC572</RequestId>\\n</DetachPolicyFromRoleResponse>"}]',
            'title' => '为角色撤销指定的权限',
            'summary' => '调用DetachPolicyFromRole接口为角色撤销指定的权限。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPoliciesForUser' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'zhangq****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'description' => '权限策略信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DefaultVersion' => [
                                                    'description' => '当前版本。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'Description' => [
                                                    'description' => '权限策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'OSS管理员权限',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'OSS-Administrator',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '权限策略类型。取值：'."\n"
                                                        .'- System：系统策略。'."\n"
                                                        .'- Custom：自定义策略。',
                                                    'type' => 'string',
                                                    'example' => 'Custom',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"Policies\\": {\\n        \\"Policy\\": [\\n            {\\n                \\"PolicyName\\": \\"OSS-Administrator\\",\\n                \\"PolicyType\\": \\"Custom\\",\\n                \\"Description\\": \\"OSS管理员权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"PolicyName\\": \\"ReadOnlyAccess\\",\\n                \\"PolicyType\\": \\"System\\",\\n                \\"Description\\": \\"只读权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-02-18T17:22:08Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n<Policies>\\n    <Policy>\\n        <PolicyName>OSS-Administrator</PolicyName>\\n        <PolicyType>Custom</PolicyType>\\n        <Description>OSS管理员权限</Description>\\n        <DefaultVersion>v1</DefaultVersion>\\n        <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n    </Policy>\\n    <Policy>\\n        <PolicyName>ReadOnlyAccess</PolicyName>\\n        <PolicyType>System</PolicyType>\\n        <Description>只读权限</Description>\\n        <DefaultVersion>v1</DefaultVersion>\\n        <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n    </Policy>\\n</Policies>","errorExample":"<ListPoliciesForUserResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyPolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyPolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesForUserResponse>"}]',
            'title' => '查询RAM用户的授权列表',
            'summary' => '调用ListPoliciesForUser接口查询RAM用户的授权列表。',
            'description' => '> 本接口只能查询授权范围为云账号的授权列表，不能查询授权范围为资源组的授权列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPoliciesForGroup' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'dev',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'description' => '权限策略信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DefaultVersion' => [
                                                    'description' => '默认版本。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'Description' => [
                                                    'description' => '权限策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'OSS管理员权限',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'OSS-Administrator',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '权限策略类型。',
                                                    'type' => 'string',
                                                    'example' => 'Custom',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"Policies\\": {\\n        \\"Policy\\": [\\n            {\\n                \\"PolicyName\\": \\"OSS-Administrator\\",\\n                \\"PolicyType\\": \\"Custom\\",\\n                \\"Description\\": \\"OSS管理员权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"PolicyName\\": \\"ReadOnlyAccess\\",\\n                \\"PolicyType\\": \\"System\\",\\n                \\"Description\\": \\"只读权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-02-18T17:22:08Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<ListPoliciesForGroupResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesForGroupResponse>","errorExample":"<ListPoliciesForGroupResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesForGroupResponse>"}]',
            'title' => '列出用户组的权限策略',
            'summary' => '调用ListPoliciesForGroup接口列出用户组的权限策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPoliciesForRole' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RoleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定角色名。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'AdminRole',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Policies' => [
                                'type' => 'object',
                                'properties' => [
                                    'Policy' => [
                                        'description' => '权限策略信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '权限策略信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DefaultVersion' => [
                                                    'description' => '默认版本。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'Description' => [
                                                    'description' => '权限策略描述。',
                                                    'type' => 'string',
                                                    'example' => 'OSS管理员权限',
                                                ],
                                                'PolicyName' => [
                                                    'description' => '权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'OSS-Administrator',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '权限策略类型。',
                                                    'type' => 'string',
                                                    'example' => 'Custom',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Policies\\": {\\n    \\"Policy\\": [\\n      {\\n        \\"DefaultVersion\\": \\"v1\\",\\n        \\"Description\\": \\"OSS管理员权限\\",\\n        \\"PolicyName\\": \\"OSS-Administrator\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"PolicyType\\": \\"Custom\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n    \\"Policies\\": {\\n        \\"Policy\\": [\\n            {\\n                \\"PolicyName\\": \\"OSS-Administrator\\",\\n                \\"PolicyType\\": \\"Custom\\",\\n                \\"Description\\": \\"OSS管理员权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\"\\n            },\\n            {\\n                \\"PolicyName\\": \\"ReadOnlyAccess\\",\\n                \\"PolicyType\\": \\"System\\",\\n                \\"Description\\": \\"只读权限\\",\\n                \\"DefaultVersion\\": \\"v1\\",\\n                \\"AttachDate\\": \\"2015-02-18T17:22:08Z\\"\\n            }\\n        ]\\n    }\\n}"},{"type":"xml","example":"<ListPoliciesForRoleResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesForRoleResponse>","errorExample":"<ListPoliciesForRoleResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Policies>\\n        <Policy>\\n            <PolicyName>OSS-Administrator</PolicyName>\\n            <PolicyType>Custom</PolicyType>\\n            <Description>OSS管理员权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Policy>\\n        <Policy>\\n            <PolicyName>ReadOnlyAccess</PolicyName>\\n            <PolicyType>System</PolicyType>\\n            <Description>只读权限</Description>\\n            <DefaultVersion>v1</DefaultVersion>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Policy>\\n    </Policies>\\n</ListPoliciesForRoleResponse>"}]',
            'title' => '列出角色的权限策略',
            'summary' => '调用ListPoliciesForRole接口列出角色的权限策略。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListEntitiesForPolicy' => [
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定权限策略的类型，取值为`System`或`Custom`。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Custom',
                    ],
                ],
                [
                    'name' => 'PolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'OSS-Administrator',
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
                                'example' => '7B8A4E7D-6CFF-471D-84DF-195A7A241ECB',
                            ],
                            'Groups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Group' => [
                                        'description' => '用户组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户组信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupName' => [
                                                    'description' => '组名称。',
                                                    'type' => 'string',
                                                    'example' => 'QA-Team',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注信息。',
                                                    'type' => 'string',
                                                    'example' => '测试团队',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-02-18T17:22:08Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Roles' => [
                                'type' => 'object',
                                'properties' => [
                                    'Role' => [
                                        'description' => '角色信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '角色信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '角色的文字描述。',
                                                    'type' => 'string',
                                                    'example' => 'ECS管理角色',
                                                ],
                                                'RoleName' => [
                                                    'description' => '角色名称。',
                                                    'type' => 'string',
                                                    'example' => 'ECSAdmin',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
                                                ],
                                                'Arn' => [
                                                    'description' => '角色的资源描述符。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::123456789012****:role/ECSAdmin',
                                                ],
                                                'RoleId' => [
                                                    'description' => '角色ID。',
                                                    'type' => 'string',
                                                    'example' => '122748924538****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'description' => '用户信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '显示名称。',
                                                    'type' => 'string',
                                                    'example' => '张*',
                                                ],
                                                'UserId' => [
                                                    'description' => '用户唯一标识。',
                                                    'type' => 'string',
                                                    'example' => '122748924538****',
                                                ],
                                                'UserName' => [
                                                    'description' => '用户名称。',
                                                    'type' => 'string',
                                                    'example' => 'zhangq****',
                                                ],
                                                'AttachDate' => [
                                                    'description' => '授权时间。',
                                                    'type' => 'string',
                                                    'example' => '2015-01-23T12:33:18Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"GroupName\\": \\"QA-Team\\",\\n        \\"Comments\\": \\"测试团队\\",\\n        \\"AttachDate\\": \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"Roles\\": {\\n    \\"Role\\": [\\n      {\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"RoleName\\": \\"ECSAdmin\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\",\\n        \\"Arn\\": \\"acs:ram::123456789012****:role/ECSAdmin\\",\\n        \\"RoleId\\": \\"122748924538****\\"\\n      }\\n    ]\\n  },\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"DisplayName\\": \\"张*\\",\\n        \\"UserId\\": \\"122748924538****\\",\\n        \\"UserName\\": \\"zhangq****\\",\\n        \\"AttachDate\\": \\"2015-01-23T12:33:18Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":"{\\n  \\"RequestId\\" : \\"7B8A4E7D-6CFF-471D-84DF-195A7A241ECB\\",\\n  \\"Groups\\" : {\\n    \\"Group\\" : [\\n      {\\n        \\"GroupName\\": \\"QA-Team\\",\\n        \\"Comments\\": \\"测试团队\\",\\n        \\"AttachDate\\" : \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"GroupName\\": \\"Dev-Team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"AttachDate\\" : \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"Users\\" : {\\n    \\"User\\" : [\\n      {\\n        \\"UserId\\" : \\"1227489245380721\\",\\n        \\"UserName\\" : \\"zhangqiang\\",\\n        \\"DisplayName\\": \\"张强\\",\\n        \\"AttachDate\\" : \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"UserId\\" : \\"1406498224724456\\",\\n        \\"UserName\\" : \\"lili\\",\\n        \\"DisplayName\\": \\"李丽\\",\\n        \\"AttachDate\\" : \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  },\\n  \\"Roles\\" : {\\n    \\"Role\\" : [\\n      {\\n        \\"RoleId\\" : \\"1227489245380721\\",\\n        \\"RoleName\\" : \\"ECSAdmin\\",\\n        \\"Arn\\": \\"acs:ram::1234567890123456:role/ECSAdmin\\",\\n        \\"Description\\": \\"ECS管理角色\\",\\n        \\"AttachDate\\" : \\"2015-01-23T12:33:18Z\\"\\n      },\\n      {\\n        \\"RoleId\\" : \\"1406498224724456\\",\\n        \\"RoleName\\" : \\"OSSReadonlyAccess\\",\\n        \\"Arn\\": \\"acs:ram::1234567890123456:role/OSSReadonlyAccess\\",\\n        \\"Description\\": \\"OSS只读访问角色\\",\\n        \\"AttachDate\\" : \\"2015-02-18T17:22:08Z\\"\\n      }\\n    ]\\n  }\\n}"},{"type":"xml","example":"<ListEntitiesForPolicyResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Groups>\\n        <Group>\\n            <GroupName>QA-Team</GroupName>\\n            <Comments>测试团队</Comments>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Group>\\n        <Group>\\n            <GroupName>Dev-Team</GroupName>\\n            <Comments>开发团队</Comments>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Group>\\n    </Groups>\\n    <Users>\\n        <User>\\n            <UserId>122748924538****</UserId>\\n            <UserName>zhangq****</UserName>\\n            <DisplayName>张*</DisplayName>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </User>\\n        <User>\\n            <UserId>140649822472****</UserId>\\n            <UserName>li****</UserName>\\n            <DisplayName>李*</DisplayName>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </User>\\n    </Users>\\n    <Roles>\\n        <Role>\\n            <RoleId>122748924538****</RoleId>\\n            <RoleName>ECSAdmin</RoleName>\\n            <Arn>acs:ram::123456789012****:role/ECSAdmin</Arn>\\n            <Description>ECS管理角色</Description>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Role>\\n        <Role>\\n            <RoleId>140649822472****</RoleId>\\n            <RoleName>OSSReadonlyAccess</RoleName>\\n            <Description>OSS只读访问角色</Description>\\n            <Arn>acs:ram::123456789012****:role/OSSReadonlyAccess</Arn>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Role>\\n    </Roles>\\n</ListEntitiesForPolicyResponse>","errorExample":"<ListEntitiesForPolicyResponse>\\n    <RequestId>7B8A4E7D-6CFF-471D-84DF-195A7A241ECB</RequestId>\\n    <Groups>\\n        <Group>\\n            <GroupName>QA-Team</GroupName>\\n            <Comments>测试团队</Comments>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Group>\\n        <Group>\\n            <GroupName>Dev-Team</GroupName>\\n            <Comments>开发团队</Comments>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </Group>\\n    </Groups>\\n    <Users>\\n        <User>\\n            <UserId>1227489245380721</UserId>\\n            <UserName>zhangqiang</UserName>\\n            <DisplayName>张强</DisplayName>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </User>\\n        <User>\\n            <UserId>1406498224724456</UserId>\\n            <UserName>lili</UserName>\\n            <DisplayName>李丽</DisplayName>\\n            <AttachDate>2015-02-18T17:22:08Z</AttachDate>\\n        </User>\\n    </Users>\\n    <Roles>\\n        <Role>\\n            <RoleId>901234567890123</RoleId>\\n            <RoleName>ECSAdmin</RoleName>\\n            <Arn>acs:ram::1234567890123456:role/ECSAdmin</Arn>\\n            <Description>ECS管理角色</Description>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Role>\\n        <Role>\\n            <RoleId>901234567890456</RoleId>\\n            <RoleName>OSSReadonlyAccess</RoleName>\\n            <Description>OSS只读访问角色</Description>\\n            <Arn>acs:ram::1234567890123456:role/OSSReadonlyAccess</Arn>\\n            <AttachDate>2015-01-23T12:33:18Z</AttachDate>\\n        </Role>\\n    </Roles>\\n</ListEntitiesForPolicyResponse>"}]',
            'title' => '列出引用权限策略的实体',
            'summary' => '调用ListEntitiesForPolicy接口列出引用权限策略的实体。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetAccountAlias' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AccountAlias',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定云账号的别名。'."\n"
                            ."\n"
                            .'长度为3~32个字符，可以包含小写字母、数字和短划线（-）。'."\n"
                            .'>云账号别名不能以短横线开头或结尾且不能有两个连续的短横线。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'myalias',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n",
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>","errorExample":"<SetAccountAliasResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</SetAccountAliasResponse>"}]',
            'title' => '设置云账号别名',
            'summary' => '调用SetAccountAlias接口设置云账号别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccountAlias' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'AccountAlias' => [
                                'description' => '账号别名。',
                                'type' => 'string',
                                'example' => 'myalias',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"AccountAlias\\": \\"myalias\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"AccountAlias\\": \\"myalias\\"\\n}"},{"type":"xml","example":"<GetAccountAliasResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <AccountAlias>myalias</AccountAlias>\\n</GetAccountAliasResponse>","errorExample":"<GetAccountAliasResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <AccountAlias>myalias</AccountAlias>\\n</GetAccountAliasResponse>"}]',
            'title' => '查看云账号别名',
            'summary' => '调用GetAccountAlias接口查看云账号别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ClearAccountAlias' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}"},{"type":"xml","example":"<ClearAccountAliasResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</ClearAccountAliasResponse>","errorExample":"<ClearAccountAliasResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n</ClearAccountAliasResponse>"}]',
            'title' => '清除云账号别名',
            'summary' => '调用ClearAccountAlias接口清除云账号别名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetPasswordPolicy' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'MinimumPasswordLength',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最小密码长度。'."\n"
                            ."\n"
                            .'取值范围：8~32。默认值：8。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'RequireLowercaseCharacters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必须含有小写字母。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RequireUppercaseCharacters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必须含有大写字母。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RequireNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必须含有数字。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'RequireSymbols',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必须含有特殊字符。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'HardExpiry',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码是否过期。'."\n"
                            .'取值为`true`或`false`，如果未指定此参数的值，系统默认为`false`。'."\n"
                            ."\n"
                            .'- 如果取值为`true`，此时必须由主账号重置密码后，RAM用户才能正常登录。'."\n"
                            .'- 如果取值为`false`，此时RAM用户可以在密码过期后自行更改密码，并继续以用户身份登录。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MaxPasswordAge',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码有效期，单位是天（重置密码将重置密码过期时间）。0表示不启用密码过期策略，默认不启用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PasswordReusePrevention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '禁止使用前N次密码。0表示不启用历史密码检查策略，默认不启用。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaxLoginAttemps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一小时内使用错误密码尝试登录最大次数（重置密码可清除尝试登录计数）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '5',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'PasswordPolicy' => [
                                'description' => '密码策略。',
                                'type' => 'object',
                                'properties' => [
                                    'RequireNumbers' => [
                                        'description' => '必须包含数字。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RequireLowercaseCharacters' => [
                                        'description' => '必须包含小写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'HardExpiry' => [
                                        'description' => '密码是否过期。'."\n"
                                            .'取值为`true`或`false`，如果未指定此参数的值，系统默认为`false`。'."\n"
                                            ."\n"
                                            .'- 如果取值为`true`，此时必须由主账号重置密码后，RAM用户才能正常登录。'."\n"
                                            .'- 如果取值为`false`，此时RAM用户可以在密码过期后自行更改密码，并继续以用户身份登录。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordReusePrevention' => [
                                        'description' => '禁止使用前N次密码。0表示不启用历史密码检查策略，默认不启用。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RequireSymbols' => [
                                        'description' => '必须包含字符。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxPasswordAge' => [
                                        'description' => '密码有效期，单位是天（重置密码将重置密码过期时间）。0表示不启用密码过期策略，默认不启用。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MinimumPasswordLength' => [
                                        'description' => '最小密码长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'RequireUppercaseCharacters' => [
                                        'description' => '必须包含大写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxLoginAttemps' => [
                                        'description' => '一小时内使用错误密码尝试登录最大次数（重置密码可清除尝试登录计数）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"PasswordPolicy\\": {\\n    \\"RequireNumbers\\": true,\\n    \\"RequireLowercaseCharacters\\": true,\\n    \\"HardExpiry\\": false,\\n    \\"PasswordReusePrevention\\": 0,\\n    \\"RequireSymbols\\": true,\\n    \\"MaxPasswordAge\\": 0,\\n    \\"MinimumPasswordLength\\": 12,\\n    \\"RequireUppercaseCharacters\\": true,\\n    \\"MaxLoginAttemps\\": 5\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"PasswordPolicy\\": {\\n        \\"MinimumPasswordLength\\": 12,\\n        \\"RequireLowercaseCharacters\\": true,\\n        \\"RequireUppercaseCharacters\\": true,\\n        \\"RequireNumbers\\": true,\\n        \\"RequireSymbols\\": true\\n    }\\n}"},{"type":"xml","example":"<SetPasswordPolicyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <PasswordPolicy>\\n        <HardExpiry>false</HardExpiry>\\n        <MaxLoginAttemps>5</MaxLoginAttemps>\\n        <MaxPasswordAge>0</MaxPasswordAge>\\n        <PasswordReusePrevention>0</PasswordReusePrevention>\\n        <MinimumPasswordLength>12</MinimumPasswordLength>\\n        <RequireLowercaseCharacters>true</RequireLowercaseCharacters>\\n        <RequireUppercaseCharacters>true</RequireUppercaseCharacters>\\n        <RequireNumbers>true</RequireNumbers>\\n        <RequireSymbols>true</RequireSymbols>\\n    </PasswordPolicy>\\n</SetPasswordPolicyResponse>","errorExample":"<SetPasswordPolicyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <PasswordPolicy>\\n        <MinimumPasswordLength>12</MinimumPasswordLength>\\n        <RequireLowercaseCharacters>true</RequireLowercaseCharacters>\\n        <RequireUppercaseCharacters>true</RequireUppercaseCharacters>\\n        <RequireNumbers>true</RequireNumbers>\\n        <RequireSymbols>true</RequireSymbols>\\n    </PasswordPolicy>\\n</SetPasswordPolicyResponse>"}]',
            'title' => '设置RAM用户密码强度等策略信息',
            'summary' => '调用SetPasswordPolicy接口设置RAM用户密码强度等策略信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPasswordPolicy' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '04F0F334-1335-436C-A1D7-6C044FE73368',
                            ],
                            'PasswordPolicy' => [
                                'description' => '密码策略。',
                                'type' => 'object',
                                'properties' => [
                                    'RequireNumbers' => [
                                        'description' => '必须包含数字。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RequireLowercaseCharacters' => [
                                        'description' => '必须包含小写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'HardExpiry' => [
                                        'description' => '密码是否过期。'."\n"
                                            .'取值为`true`或`false`，如果未指定此参数的值，系统默认为`false`。'."\n"
                                            ."\n"
                                            .'- 如果取值为`true`，此时必须由主账号重置密码后，RAM用户才能正常登录。'."\n"
                                            .'- 如果取值为`false`，此时RAM用户可以在密码过期后自行更改密码，并继续以用户身份登录。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordReusePrevention' => [
                                        'description' => '禁止使用前N次密码。0表示不启用历史密码检查策略，默认不启用。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RequireSymbols' => [
                                        'description' => '必须包含字符。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxPasswordAge' => [
                                        'description' => '密码有效期，单位为天（重置密码将重置密码过期时间）。0表示不启用密码过期策略，默认不启用。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MinimumPasswordLength' => [
                                        'description' => '最小密码长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '12',
                                    ],
                                    'RequireUppercaseCharacters' => [
                                        'description' => '必须包含大写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxLoginAttemps' => [
                                        'description' => '一小时内使用错误密码尝试登录最大次数（重置密码可清除尝试登录计数）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n  \\"PasswordPolicy\\": {\\n    \\"RequireNumbers\\": true,\\n    \\"RequireLowercaseCharacters\\": true,\\n    \\"HardExpiry\\": false,\\n    \\"PasswordReusePrevention\\": 0,\\n    \\"RequireSymbols\\": true,\\n    \\"MaxPasswordAge\\": 0,\\n    \\"MinimumPasswordLength\\": 12,\\n    \\"RequireUppercaseCharacters\\": true,\\n    \\"MaxLoginAttemps\\": 5\\n  }\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"PasswordPolicy\\": {\\n        \\"MinimumPasswordLength\\": 12,\\n        \\"RequireLowercaseCharacters\\": true,\\n        \\"RequireUppercaseCharacters\\": true,\\n        \\"RequireNumbers\\": true,\\n        \\"RequireSymbols\\": true\\n    }\\n}"},{"type":"xml","example":"<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n<PasswordPolicy>\\n    <HardExpiry>false</HardExpiry>\\n    <MaxLoginAttemps>5</MaxLoginAttemps>\\n    <MaxPasswordAge>0</MaxPasswordAge>\\n    <PasswordReusePrevention>0</PasswordReusePrevention>\\n    <MinimumPasswordLength>12</MinimumPasswordLength>\\n    <RequireLowercaseCharacters>true</RequireLowercaseCharacters>\\n    <RequireUppercaseCharacters>true</RequireUppercaseCharacters>\\n    <RequireNumbers>true</RequireNumbers>\\n    <RequireSymbols>true</RequireSymbols>\\n</PasswordPolicy>","errorExample":"<GetPasswordPolicyResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <PasswordPolicy>\\n        <MinimumPasswordLength>12</MinimumPasswordLength>\\n        <RequireLowercaseCharacters>true</RequireLowercaseCharacters>\\n        <RequireUppercaseCharacters>true</RequireUppercaseCharacters>\\n        <RequireNumbers>true</RequireNumbers>\\n        <RequireSymbols>true</RequireSymbols>\\n    </PasswordPolicy>\\n</GetPasswordPolicyResponse>"}]',
            'title' => '获取RAM用户密码强度等策略信息',
            'summary' => '调用GetPasswordPolicy接口获取RAM用户密码强度等策略信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetSecurityPreference' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'EnableSaveMFATicket',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户在登录时保存多因素设备认证状态，有效期为7天。取值：'."\n"
                            .'- true：允许。'."\n"
                            .'- false（默认值）：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AllowUserToChangePassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理密码。取值：'."\n"
                            .'- true（默认值）：允许。'."\n"
                            .'- false：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AllowUserToManageAccessKeys',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理访问密钥。取值：'."\n"
                            .'- true：允许。'."\n"
                            .'- false（默认值）：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AllowUserToManagePublicKeys',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理公钥。取值：'."\n"
                            .'- true：允许。'."\n"
                            .'- false（默认值）：不允许。'."\n"
                            ."\n"
                            .'> 该参数仅在日本站有效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AllowUserToManageMFADevices',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理多因素认证设备。取值：'."\n"
                            .'- true（默认值）：允许。'."\n"
                            .'- false：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'LoginSessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户登录有效期。'."\n"
                            ."\n"
                            .'取值范围：1~24。默认值：6。单位：小时。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'LoginNetworkMasks',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录掩码。登录掩码决定哪些IP地址会受到登录控制台的影响，包括密码登录和单点登录（SSO），但使用访问密钥发起的API调用并不受影响。'."\n"
                            ."\n"
                            .'- 如果指定掩码，RAM用户只能从指定的IP地址进行登录。'."\n"
                            .'- 如果不指定任何掩码，登录控制台功能将适用于整个网络。'."\n"
                            ."\n"
                            .'当需要配置多个登录掩码时，请使用分号（;）来分隔，例如：192.168.0.0/16;10.0.0.0/8。'."\n"
                            ."\n"
                            .'最多配置25个登录掩码，总长度最大512个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.0/8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'SecurityPreference' => [
                                'description' => '安全首选项。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKeyPreference' => [
                                        'description' => '访问密钥首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManageAccessKeys' => [
                                                'description' => '是否允许RAM用户自主管理访问密钥。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'MFAPreference' => [
                                        'description' => '多因素认证首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManageMFADevices' => [
                                                'description' => '是否允许RAM用户自主管理多因素认证设备。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'LoginProfilePreference' => [
                                        'description' => '登录首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnableSaveMFATicket' => [
                                                'description' => '是否允许RAM用户在登录时保存多因素认证设备安全码。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'LoginSessionDuration' => [
                                                'description' => 'RAM用户登录有效期。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '6',
                                            ],
                                            'LoginNetworkMasks' => [
                                                'description' => '登录掩码。',
                                                'type' => 'string',
                                                'example' => '10.0.0.0/8',
                                            ],
                                            'AllowUserToChangePassword' => [
                                                'description' => '是否允许RAM用户自主管理密码。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                    'PublicKeyPreference' => [
                                        'description' => '公钥首选项。'."\n"
                                            .'> 该参数仅在日本站有效。'."\n",
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManagePublicKeys' => [
                                                'description' => '是否允许RAM用户自主管理公钥。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A978915D-F279-4CA0-A89B-9A71219FFB3E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityPreference\\": {\\n    \\"AccessKeyPreference\\": {\\n      \\"AllowUserToManageAccessKeys\\": false\\n    },\\n    \\"MFAPreference\\": {\\n      \\"AllowUserToManageMFADevices\\": false\\n    },\\n    \\"LoginProfilePreference\\": {\\n      \\"EnableSaveMFATicket\\": false,\\n      \\"LoginSessionDuration\\": 6,\\n      \\"LoginNetworkMasks\\": \\"10.0.0.0/8\\",\\n      \\"AllowUserToChangePassword\\": true\\n    },\\n    \\"PublicKeyPreference\\": {\\n      \\"AllowUserToManagePublicKeys\\": false\\n    }\\n  },\\n  \\"RequestId\\": \\"A978915D-F279-4CA0-A89B-9A71219FFB3E\\"\\n}","errorExample":"{\\n    \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\",\\n    \\"SecurityPreference\\": {\\n        \\"LoginProfilePreference\\": {\\n            \\"EnableSaveMFATicket\\": true,\\n            \\"AllowUserToChangePassword\\": true\\n        },\\n        \\"AccessKeyPreference\\": {\\n            \\"AllowUserToManageAccessKeys\\": false\\n        },\\n        \\"MFAPreference\\": {\\n            \\"AllowUserToManageMFADevices\\": true\\n        }\\n    }\\n}"},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetSecurityPreferenceResponse>\\r\\n\\t<SecurityPreference>\\r\\n\\t\\t<LoginProfilePreference>\\r\\n\\t\\t\\t<LoginSessionDuration>6</LoginSessionDuration>\\r\\n\\t\\t\\t<LoginNetworkMasks></LoginNetworkMasks>\\r\\n\\t\\t\\t<AllowUserToChangePassword>true</AllowUserToChangePassword>\\r\\n\\t\\t\\t<EnableSaveMFATicket>false</EnableSaveMFATicket>\\r\\n\\t\\t</LoginProfilePreference>\\r\\n\\t\\t<AccessKeyPreference>\\r\\n\\t\\t\\t<AllowUserToManageAccessKeys>false</AllowUserToManageAccessKeys>\\r\\n\\t\\t</AccessKeyPreference>\\r\\n\\t\\t<PublicKeyPreference>\\r\\n\\t\\t\\t<AllowUserToManagePublicKeys>false</AllowUserToManagePublicKeys>\\r\\n\\t\\t</PublicKeyPreference>\\r\\n\\t\\t<MFAPreference>\\r\\n\\t\\t\\t<AllowUserToManageMFADevices>true</AllowUserToManageMFADevices>\\r\\n\\t\\t</MFAPreference>\\r\\n\\t</SecurityPreference>\\r\\n\\t<RequestId>A978915D-F279-4CA0-A89B-9A71219FFB3E</RequestId>\\r\\n</SetSecurityPreferenceResponse>\\t\\r\\n","errorExample":"<SetSecurityPreferenceResponse>\\n    <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\n    <SecurityPreference>\\n        <LoginProfilePreference>\\n            <EnableSaveMFATicket>true</EnableSaveMFATicket>\\n            <AllowUserToChangePassword>true</AllowUserToChangePassword>\\n        </LoginProfilePreference>LoginProfilePreference>\\n        <AccessKeyPreference>\\n            <AllowUserToManageAccessKeys>false</AllowUserToManageAccessKeys>\\n        </AccessKeyPreference>\\n        <MFAPreference>\\n            <AllowUserToManageMFADevices>false</AllowUserToManageMFADevices>\\n        </MFAPreference>\\n    </SecurityPreference>\\n</SetSecurityPreferenceResponse>"}]',
            'title' => '设置全局安全首选项',
            'summary' => '调用SetSecurityPreference接口设置全局安全首选项。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecurityPreference' => [
            'methods' => [
                'post',
                'get',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecurityPreference' => [
                                'description' => '安全首选项。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKeyPreference' => [
                                        'description' => '访问密钥首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManageAccessKeys' => [
                                                'description' => '是否允许用户自主管理访问密钥。取值：'."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'MFAPreference' => [
                                        'description' => '多因素认证首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManageMFADevices' => [
                                                'description' => '是否允许RAM用户自主管理多因素认证设备。取值：'."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                    'LoginProfilePreference' => [
                                        'description' => '登录首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnableSaveMFATicket' => [
                                                'description' => '是否允许RAM用户登录时保存多因素认证设备安全码，安全码有效期为7天。取值：'."\n"
                                                    ."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'LoginSessionDuration' => [
                                                'description' => 'RAM用户登录有效期。单位：小时。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '6',
                                            ],
                                            'LoginNetworkMasks' => [
                                                'description' => '登录掩码。登录掩码决定哪些IP地址会受到登录控制台的影响，包括密码登录和SSO登录，但使用AccessKey发起的API访问并不受影响。'."\n"
                                                    ."\n"
                                                    .'- 如果指定掩码，RAM用户只能从指定的IP地址进行登录。'."\n"
                                                    .'- 如果不指定任何掩码，登录控制台功能将适用于整个网络。'."\n"
                                                    ."\n"
                                                    .'当需要配置多个登录掩码时，请使用分号（;）来分隔登录掩码，例如：192.168.0.0/16;10.0.0.0/8。',
                                                'type' => 'string',
                                                'example' => '10.0.0.0/8',
                                            ],
                                            'AllowUserToChangePassword' => [
                                                'description' => '是否允许RAM用户自主管理密码。取值：'."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                    'PublicKeyPreference' => [
                                        'description' => '公钥首选项。'."\n"
                                            ."\n"
                                            .'> 该参数仅在日本站有效。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManagePublicKeys' => [
                                                'description' => '是否允许RAM用户自主管理公钥。取值：'."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC1213F1-A9D5-4A01-A996-44983689126C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityPreference\\": {\\n    \\"AccessKeyPreference\\": {\\n      \\"AllowUserToManageAccessKeys\\": false\\n    },\\n    \\"MFAPreference\\": {\\n      \\"AllowUserToManageMFADevices\\": true\\n    },\\n    \\"LoginProfilePreference\\": {\\n      \\"EnableSaveMFATicket\\": false,\\n      \\"LoginSessionDuration\\": 6,\\n      \\"LoginNetworkMasks\\": \\"10.0.0.0/8\\",\\n      \\"AllowUserToChangePassword\\": true\\n    },\\n    \\"PublicKeyPreference\\": {\\n      \\"AllowUserToManagePublicKeys\\": false\\n    }\\n  },\\n  \\"RequestId\\": \\"DC1213F1-A9D5-4A01-A996-44983689126C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetSecurityPreferenceResponse>\\r\\n\\t<SecurityPreference>\\r\\n\\t\\t<LoginProfilePreference>\\r\\n\\t\\t\\t<LoginSessionDuration>6</LoginSessionDuration>\\r\\n\\t\\t\\t<LoginNetworkMasks></LoginNetworkMasks>\\r\\n\\t\\t\\t<AllowUserToChangePassword>true</AllowUserToChangePassword>\\r\\n\\t\\t\\t<EnableSaveMFATicket>false</EnableSaveMFATicket>\\r\\n\\t\\t</LoginProfilePreference>\\r\\n\\t\\t<AccessKeyPreference>\\r\\n\\t\\t\\t<AllowUserToManageAccessKeys>false</AllowUserToManageAccessKeys>\\r\\n\\t\\t</AccessKeyPreference>\\r\\n\\t\\t<PublicKeyPreference>\\r\\n\\t\\t\\t<AllowUserToManagePublicKeys>false</AllowUserToManagePublicKeys>\\r\\n\\t\\t</PublicKeyPreference>\\r\\n\\t\\t<MFAPreference>\\r\\n\\t\\t\\t<AllowUserToManageMFADevices>true</AllowUserToManageMFADevices>\\r\\n\\t\\t</MFAPreference>\\r\\n\\t</SecurityPreference>\\r\\n\\t<RequestId>DC1213F1-A9D5-4A01-A996-44983689126C</RequestId>\\r\\n</GetSecurityPreferenceResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '获取全局安全首选项详情',
            'summary' => '调用GetSecurityPreference接口获取全局安全首选项详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DecodeDiagnosticMessage' => [
            'summary' => '从因无RAM权限导致的请求被拒绝访问的响应体中解码无权限诊断信息。',
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
                    'name' => 'EncodedDiagnosticMessage',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API请求因无权限被拒绝访问时，请求响应体中返回的编码的诊断信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AQEAAAAAZBgxr0U1MjA1NTM1LUM4BBktMzE5RS1CODgxLUU1QTI0RDNFQTM1****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'D2331703-AADF-5564-BA9B-26CD51A33BA0',
                            ],
                            'DecodedDiagnosticMessage' => [
                                'description' => '解码的诊断信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ExplicitDeny' => [
                                        'description' => '是否是显式拒绝。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [
                                            'true' => '是显示拒绝',
                                            'false' => '不是显示拒绝',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'NoPermissionPolicyType' => [
                                        'description' => '产生无权限的策略类型。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'AssumeRolePolicy' => '角色信任策略',
                                            'ControlPolicy' => '管控策略',
                                            'AccountLevelIdentityBasedPolicy' => '基于身份策略（账号级）',
                                            'ResourceGroupLevelIdentityBasedPolicy' => '基于身份策略（资源组级）',
                                            'SessionPolicy' => '会话策略',
                                        ],
                                        'example' => 'AccountLevelIdentityBasedPolicy',
                                    ],
                                    'AuthAction' => [
                                        'description' => '用户请求中用于鉴权的操作信息。',
                                        'type' => 'string',
                                        'example' => 'ram:DecodeDiagnosticMessage',
                                    ],
                                    'AuthResource' => [
                                        'description' => '用户请求中用于鉴权的资源信息。',
                                        'type' => 'string',
                                        'example' => '*',
                                    ],
                                    'AuthPrincipal' => [
                                        'description' => '用户请求中用于鉴权的主体信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AuthPrincipalType' => [
                                                'description' => '用户请求中用于鉴权的身份类型。',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'SubUser' => 'RAM用户',
                                                    'AssumedRoleUser' => 'RAM角色',
                                                    'Federated' => 'SSO联合身份',
                                                ],
                                                'example' => 'SubUser',
                                            ],
                                            'AuthPrincipalOwnerId' => [
                                                'description' => '用户请求中用于鉴权的身份所属的阿里云账号UID信息。',
                                                'type' => 'string',
                                                'example' => '196813200012****',
                                            ],
                                            'AuthPrincipalDisplayName' => [
                                                'description' => '用户请求中用于鉴权的身份标识。具体如下：'."\n"
                                                    ."\n"
                                                    .'- RAM用户：提供的是RAM用户的UID信息。'."\n"
                                                    .'- RAM角色：提供的是角色名称和角色会话名称（例如：RoleName:RoleSessionName）。'."\n"
                                                    .'- SSO联合身份：提供的是身份提供商类型和身份提供商名称（例如：saml-provider/AzureAD）。',
                                                'type' => 'string',
                                                'example' => '28877424437521****',
                                            ],
                                        ],
                                    ],
                                    'AuthConditions' => [
                                        'description' => '用户请求中用于鉴权的条件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '鉴权条件。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ConditionKey' => [
                                                    'description' => '鉴权条件Key。',
                                                    'type' => 'string',
                                                    'example' => 'acs:SourceIp',
                                                ],
                                                'ConditionValues' => [
                                                    'description' => '鉴权条件Key对应的值列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '鉴权条件Key对应的条件值。',
                                                        'type' => 'string',
                                                        'example' => '172.16.215.218',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'MatchedPolicies' => [
                                        'description' => '鉴权命中的策略列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '鉴权命中的策略。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Effect' => [
                                                    'description' => '策略效果。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Deny' => '拒绝',
                                                        'Allow' => '允许',
                                                    ],
                                                    'example' => 'Deny',
                                                ],
                                                'PolicyIdentifier' => [
                                                    'description' => '策略名称信息。具体如下：'."\n"
                                                        .'- 管控策略：管控策略ID。'."\n"
                                                        .'- RAM权限策略：权限策略名称。',
                                                    'type' => 'string',
                                                    'example' => 'MyPolicyName',
                                                ],
                                                'PolicyType' => [
                                                    'description' => '策略类型。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Custom' => '自定义策略',
                                                        'System' => '系统策略',
                                                    ],
                                                    'example' => 'Custom',
                                                ],
                                                'PolicyVersion' => [
                                                    'description' => '策略版本号。'."\n"
                                                        .'> 仅自定义策略有版本号。',
                                                    'type' => 'string',
                                                    'example' => 'v1',
                                                ],
                                                'AttachedEntityType' => [
                                                    'description' => '策略授权的实体类型。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'RamUser' => 'RAM用户',
                                                        'RamRole' => 'RAM角色',
                                                        'ResourceDirectoryTarget' => '资源目录实体',
                                                        'RamGroup' => 'RAM用户组',
                                                    ],
                                                    'example' => 'RamUser',
                                                ],
                                                'AttachedScope' => [
                                                    'description' => '策略授权范围。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Account' => '阿里云账号',
                                                        'Folder' => '资源目录资源夹',
                                                        'ResourceGroup' => '资源组',
                                                    ],
                                                    'example' => 'Account',
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
                        'errorCode' => 'NotSupport',
                        'errorMessage' => 'This method can only be invoked by customer, sub user and assumed role user.',
                    ],
                    [
                        'errorCode' => 'EncodedMessageExpire',
                        'errorMessage' => 'The EncodedDiagnosticMessage is expired.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'NoPermission',
                        'errorMessage' => 'You do not have the required permissions.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'SearchInaccurate',
                        'errorMessage' => 'The search result is inaccurate, please retry later.',
                    ],
                    [
                        'errorCode' => 'EntityNotExist',
                        'errorMessage' => 'The specific DecodedDiagnosticMessage cannot be found.',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'TooManyRequests',
                        'errorMessage' => 'Too many search requests at same time, please retry later.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2331703-AADF-5564-BA9B-26CD51A33BA0\\",\\n  \\"DecodedDiagnosticMessage\\": {\\n    \\"ExplicitDeny\\": true,\\n    \\"NoPermissionPolicyType\\": \\"AccountLevelIdentityBasedPolicy\\",\\n    \\"AuthAction\\": \\"ram:DecodeDiagnosticMessage\\",\\n    \\"AuthResource\\": \\"*\\",\\n    \\"AuthPrincipal\\": {\\n      \\"AuthPrincipalType\\": \\"SubUser\\",\\n      \\"AuthPrincipalOwnerId\\": \\"196813200012****\\",\\n      \\"AuthPrincipalDisplayName\\": \\"28877424437521****\\"\\n    },\\n    \\"AuthConditions\\": [\\n      {\\n        \\"ConditionKey\\": \\"acs:SourceIp\\",\\n        \\"ConditionValues\\": [\\n          \\"172.16.215.218\\"\\n        ]\\n      }\\n    ],\\n    \\"MatchedPolicies\\": [\\n      {\\n        \\"Effect\\": \\"Deny\\",\\n        \\"PolicyIdentifier\\": \\"MyPolicyName\\",\\n        \\"PolicyType\\": \\"Custom\\",\\n        \\"PolicyVersion\\": \\"v1\\",\\n        \\"AttachedEntityType\\": \\"RamUser\\",\\n        \\"AttachedScope\\": \\"Account\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '解码无权限诊断信息',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ram.aliyuncs.com',
        ],
    ],
];
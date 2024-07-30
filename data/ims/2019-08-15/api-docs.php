<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Ims',
        'version' => '2019-08-15',
    ],
    'directories' => [
        [
            'id' => 72617,
            'title' => '用户管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 182501,
                    'title' => '用户',
                    'type' => 'directory',
                    'children' => [
                        'CreateUser',
                        'GetUser',
                        'UpdateUser',
                        'DeleteUser',
                        'ListUsers',
                        'ListUserBasicInfos',
                        'GetAccountSummary',
                    ],
                ],
                [
                    'id' => 72624,
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
                    'id' => 72618,
                    'title' => '访问密钥',
                    'type' => 'directory',
                    'children' => [
                        'CreateAccessKey',
                        'DeleteAccessKey',
                        'UpdateAccessKey',
                        'GetAccessKeyLastUsed',
                        'ListAccessKeys',
                    ],
                ],
                [
                    'id' => 182510,
                    'title' => '多因素认证',
                    'type' => 'directory',
                    'children' => [
                        'GetVerificationInfo',
                        'CreateVirtualMFADevice',
                        'ListVirtualMFADevices',
                        'DeleteVirtualMFADevice',
                        'DisableVirtualMFA',
                        'BindMFADevice',
                        'UnbindMFADevice',
                        'GetAccountMFAInfo',
                        'GetUserMFAInfo',
                    ],
                ],
                [
                    'id' => 176627,
                    'title' => '标签',
                    'type' => 'directory',
                    'children' => [
                        'TagResources',
                        'UntagResources',
                        'ListTagResources',
                    ],
                ],
            ],
        ],
        [
            'id' => 72577,
            'title' => '用户组管理',
            'type' => 'directory',
            'children' => [
                'CreateGroup',
                'GetGroup',
                'UpdateGroup',
                'DeleteGroup',
                'ListGroups',
                'AddUserToGroup',
                'RemoveUserFromGroup',
                'ListUsersForGroup',
                'ListGroupsForUser',
            ],
        ],
        [
            'id' => 72587,
            'title' => '单点登录（SSO）管理',
            'type' => 'directory',
            'children' => [
                'SetUserSsoSettings',
                'GetUserSsoSettings',
                'CreateSAMLProvider',
                'DeleteSAMLProvider',
                'UpdateSAMLProvider',
                'GetSAMLProvider',
                'ListSAMLProviders',
                'CreateOIDCProvider',
                'GetOIDCProvider',
                'UpdateOIDCProvider',
                'ListOIDCProviders',
                'DeleteOIDCProvider',
                'AddClientIdToOIDCProvider',
                'RemoveClientIdFromOIDCProvider',
                'AddFingerprintToOIDCProvider',
                'RemoveFingerprintFromOIDCProvider',
            ],
        ],
        [
            'id' => 72595,
            'title' => '开放授权（OAuth）管理',
            'type' => 'directory',
            'children' => [
                'CreateApplication',
                'GetApplication',
                'UpdateApplication',
                'DeleteApplication',
                'ListApplications',
                'ListPredefinedScopes',
                'CreateAppSecret',
                'GetAppSecret',
                'ListAppSecretIds',
                'DeleteAppSecret',
            ],
        ],
        [
            'id' => 72607,
            'title' => '安全设置',
            'type' => 'directory',
            'children' => [
                'SetPasswordPolicy',
                'GetPasswordPolicy',
                'SetSecurityPreference',
                'GetSecurityPreference',
                'SetDefaultDomain',
                'GetDefaultDomain',
                'GetCredentialReport',
                'GetAccountSecurityPracticeReport',
                'GenerateCredentialReport',
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
                'http',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'格式为`<username>@<AccountAlias>.onaliyun.com`，其中`<username>`为RAM用户名称，`<AccountAlias>.onaliyun.com`为默认域名。 关于如何获取默认域名，请参见[GetDefaultDomain](~~186720~~)。'."\n"
                            ."\n"
                            .'`UserPrincipalName`总长度为`1~128`个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。其中`<username>`的长度为`1~64`个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [],
                        'example' => 'Test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的显示名称。'."\n"
                            ."\n"
                            .'长度为1~24个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test',
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
                            .'> 该参数仅适用于中国站。'."\n"
                            ."\n",
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
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表。最多包含20个标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。最多包含20个标签。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'operator',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20。可以为空字符串。最多支持128个字符，不能以`acs:`开头，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'alice',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'User' => [
                                'description' => 'RAM用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => 'RAM用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'test@example.onaliyun.com',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM用户的更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => '86-1868888****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户ID。',
                                        'type' => 'string',
                                        'example' => '20732900249392****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a cloud computing engineer.',
                                    ],
                                    'LastLoginDate' => [
                                        'description' => 'RAM用户最近一次登录控制台的时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '同步类型。取值：'."\n"
                                            .'- Manual：在RAM中手动创建的RAM用户。'."\n"
                                            .'- SCIM：通过SCIM协议同步创建的RAM用户。'."\n"
                                            .'- CloudSSO：通过云SSO同步创建的用户。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'Tags' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Tag' => [
                                                'description' => '标签列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '标签列表。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TagKey' => [
                                                            'description' => '标签键。',
                                                            'type' => 'string',
                                                            'example' => 'operator',
                                                        ],
                                                        'TagValue' => [
                                                            'description' => '标签值。',
                                                            'type' => 'string',
                                                            'example' => 'alice',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2BB8C44A-2862-4922-AD43-03924749173B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"test\\",\\n    \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n    \\"Email\\": \\"alice@example.com\\",\\n    \\"UpdateDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"MobilePhone\\": \\"86-1868888****\\",\\n    \\"UserId\\": \\"20732900249392****\\",\\n    \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n    \\"LastLoginDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"CreateDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"Tags\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"TagKey\\": \\"operator\\",\\n          \\"TagValue\\": \\"alice\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RequestId\\": \\"2BB8C44A-2862-4922-AD43-03924749173B\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <User>\\n        <DisplayName>test</DisplayName>\\n        <UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\n        <Email>alice@example.com</Email>\\n        <UpdateDate>2020-10-12T09:12:00Z</UpdateDate>\\n        <MobilePhone>86-1868888****</MobilePhone>\\n        <UserId>20732900249392****</UserId>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <LastLoginDate>2020-10-12T09:12:00Z</LastLoginDate>\\n        <CreateDate>2020-10-12T09:12:00Z</CreateDate>\\n        <ProvisionType>Manual</ProvisionType>\\n        <Tags>\\n            <TagKey>operator</TagKey>\\n            <TagValue>alice</TagValue>\\n        </Tags>\\n    </User>\\n    <RequestId>2BB8C44A-2862-4922-AD43-03924749173B</RequestId>\\n</CreateUserResponse>","errorExample":""}]',
            'title' => '创建RAM用户',
            'summary' => '创建RAM用户。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetUser' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'格式为`<username>@<AccountAlias>.onaliyun.com`，其中`<username>`为RAM用户名称，`<AccountAlias>.onaliyun.com`为默认域名。 '."\n"
                            ."\n"
                            .'`UserPrincipalName`长度为`1~128`个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。其中`<username>`的长度为`1~64`个字符。'."\n"
                            ."\n"
                            .'>必须指定 `UserPrincipalName`、`UserId`和`UserAccessKeyId`三个参数中的一个参数，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户ID。'."\n"
                            .'>必须指定 `UserPrincipalName`、`UserId`和`UserAccessKeyId`三个参数中的一个参数，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20732900249392****',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的访问密钥ID。'."\n"
                            .'>必须指定 `UserPrincipalName`、`UserId`和`UserAccessKeyId`三个参数中的一个参数，但不能同时指定。',
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
                            'User' => [
                                'description' => 'RAM用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => 'RAM用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'test@example.onaliyun.com',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM用户的更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-13T07:39:22Z',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => '86-1868888****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户ID。',
                                        'type' => 'string',
                                        'example' => '20732900249392****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a cloud computing engineer.',
                                    ],
                                    'LastLoginDate' => [
                                        'description' => 'RAM用户最近一次登录控制台的时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '同步类型。取值：'."\n"
                                            .'- Manual：在RAM中手动创建的RAM用户。'."\n"
                                            .'- SCIM：通过SCIM协议同步创建的RAM用户。'."\n"
                                            .'- CloudSSO：通过云SSO同步创建的用户。',
                                        'type' => 'string',
                                        'example' => 'CloudSSO',
                                    ],
                                    'Tags' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Tag' => [
                                                'description' => '标签列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TagKey' => [
                                                            'description' => '标签键。',
                                                            'type' => 'string',
                                                            'example' => 'operator',
                                                        ],
                                                        'TagValue' => [
                                                            'description' => '标签值。',
                                                            'type' => 'string',
                                                            'example' => 'alice',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4507D1CD-526A-4E2B-A1E2-3AB045D1EE0B',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"test\\",\\n    \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n    \\"Email\\": \\"alice@example.com\\",\\n    \\"UpdateDate\\": \\"2020-10-13T07:39:22Z\\",\\n    \\"MobilePhone\\": \\"86-1868888****\\",\\n    \\"UserId\\": \\"20732900249392****\\",\\n    \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n    \\"LastLoginDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"CreateDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"ProvisionType\\": \\"CloudSSO\\",\\n    \\"Tags\\": {\\n      \\"Tag\\": [\\n        {\\n          \\"TagKey\\": \\"operator\\",\\n          \\"TagValue\\": \\"alice\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"RequestId\\": \\"4507D1CD-526A-4E2B-A1E2-3AB045D1EE0B\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserResponse>\\n    <User>\\n        <DisplayName>test</DisplayName>\\n        <UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\n        <Email>alice@example.com</Email>\\n        <UpdateDate>2020-10-13T07:39:22Z</UpdateDate>\\n        <MobilePhone>86-1868888****</MobilePhone>\\n        <UserId>20732900249392****</UserId>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <LastLoginDate>2020-10-12T09:12:00Z</LastLoginDate>\\n        <CreateDate>2020-10-12T09:12:00Z</CreateDate>\\n        <ProvisionType>CloudSSO</ProvisionType>\\n        <Tags>\\n            <TagKey>operator</TagKey>\\n            <TagValue>alice</TagValue>\\n        </Tags>\\n    </User>\\n    <RequestId>4507D1CD-526A-4E2B-A1E2-3AB045D1EE0B</RequestId>\\n</GetUserResponse>","errorExample":""}]',
            'title' => '查询RAM用户的详细信息',
            'summary' => '查询指定的RAM用户的详细信息。',
            'description' => '本文将提供一个示例，查询RAM用户`test@example.onaliyun.com`的详细信息。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateUser' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的RAM用户登录名称。'."\n"
                            ."\n"
                            .'> `UserPrincipalName`与`UserId`参数，必须指定一个，但不能同时指定。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的RAM用户ID。'."\n"
                            .'> `UserPrincipalName`与`UserId`参数，必须指定一个，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20732900249392****',
                    ],
                ],
                [
                    'name' => 'NewUserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新登录名称。'."\n"
                            ."\n"
                            .'格式为`<username>@<AccountAlias>.onaliyun.com`，其中`<username>`为RAM用户名称，`<AccountAlias>.onaliyun.com`为默认域名。'."\n"
                            ."\n"
                            .'`UserPrincipalName`长度为`1~128`个字符，可包含英文字母、数字、半角句号（.）、短划线（-）和下划线（_）。其中`<username>`的长度为`1~64`个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'new@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新显示名称。'."\n"
                            ."\n"
                            .'长度为1~24个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'new',
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
                            .'> 该参数仅适用于中国站。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86-1868888****',
                    ],
                ],
                [
                    'name' => 'NewEmail',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的新电子邮箱。'."\n"
                            ."\n"
                            .'> 该参数仅适用于中国站。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'alice@example.com',
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
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'User' => [
                                'description' => 'RAM用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => 'RAM用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'new',
                                    ],
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'new@example.onaliyun.com',
                                    ],
                                    'Email' => [
                                        'description' => 'RAM用户的电子邮箱。'."\n"
                                            ."\n"
                                            .'> 该参数仅适用于中国站。',
                                        'type' => 'string',
                                        'example' => 'alice@example.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => 'RAM用户的更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-13T09:19:49Z',
                                    ],
                                    'MobilePhone' => [
                                        'description' => 'RAM用户的手机号码。'."\n"
                                            ."\n"
                                            .'> 该参数仅适用于中国站。'."\n",
                                        'type' => 'string',
                                        'example' => '86-1868888****',
                                    ],
                                    'UserId' => [
                                        'description' => 'RAM用户ID。',
                                        'type' => 'string',
                                        'example' => '20732900249392****',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a cloud computing engineer.',
                                    ],
                                    'LastLoginDate' => [
                                        'description' => 'RAM用户最近一次登录控制台的时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'CreateDate' => [
                                        'description' => 'RAM用户的创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-12T09:12:00Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '同步类型。取值：'."\n"
                                            .'- Manual：在RAM中手动创建的RAM用户。'."\n"
                                            .'- SCIM：通过SCIM协议同步创建的RAM用户。'."\n"
                                            .'- CloudSSO：通过云SSO同步创建的用户。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1B56DD42-6962-4F89-A19C-079EED1F0FE3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"DisplayName\\": \\"new\\",\\n    \\"UserPrincipalName\\": \\"new@example.onaliyun.com\\",\\n    \\"Email\\": \\"alice@example.com\\",\\n    \\"UpdateDate\\": \\"2020-10-13T09:19:49Z\\",\\n    \\"MobilePhone\\": \\"86-1868888****\\",\\n    \\"UserId\\": \\"20732900249392****\\",\\n    \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n    \\"LastLoginDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"CreateDate\\": \\"2020-10-12T09:12:00Z\\",\\n    \\"ProvisionType\\": \\"Manual\\"\\n  },\\n  \\"RequestId\\": \\"1B56DD42-6962-4F89-A19C-079EED1F0FE3\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateUserResponse>\\r\\n\\t<User>\\r\\n\\t\\t<UpdateDate>2020-10-13T09:19:49Z</UpdateDate>\\r\\n\\t\\t<Email>alice@example.com</Email>\\r\\n\\t\\t<Comments>This is a cloud computing engineer.</Comments>\\r\\n\\t\\t<UserId>20732900249392****</UserId>\\r\\n\\t\\t<LastLoginDate>2020-10-12T09:12:00Z</LastLoginDate>\\r\\n\\t\\t<DisplayName>new</DisplayName>\\r\\n\\t\\t<UserPrincipalName>new@example.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t<CreateDate>2020-10-12T09:12:00Z</CreateDate>\\r\\n\\t\\t<MobilePhone>86-1868888****</MobilePhone>\\r\\n\\t</User>\\r\\n\\t<RequestId>1B56DD42-6962-4F89-A19C-079EED1F0FE3</RequestId>\\r\\n</UpdateUserResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '修改RAM用户信息',
            'summary' => '调用UpdateUser修改RAM用户信息。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUser' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的RAM用户登录名称。'."\n"
                            ."\n"
                            .'> `UserPrincipalName`与`UserId`参数，必须指定一个，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的RAM用户ID。'."\n"
                            .'> `UserPrincipalName`与`UserId`参数，必须指定一个，但不能同时指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20732900249392****',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserResponse>\\r\\n    <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteUserResponse>","errorExample":""}]',
            'title' => '删除RAM用户',
            'summary' => '删除指定的RAM用户。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于true。 '."\n"
                            ."\n"
                            .'取值范围：1~1000。默认值：1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表，最多包含20个子项。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'operator',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'alice',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
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
                                'example' => '4B450CA1-36E8-4AA2-8461-86B42BF4CC4E',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '此参数在`IsTruncated`为`true`时生效，用于获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'description' => 'RAM用户信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'RAM用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => 'RAM用户的显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'UserPrincipalName' => [
                                                    'description' => 'RAM用户的登录名称。',
                                                    'type' => 'string',
                                                    'example' => 'test@example.onaliyun.com',
                                                ],
                                                'Email' => [
                                                    'description' => 'RAM用户的电子邮箱。'."\n"
                                                        ."\n"
                                                        .'> 该参数仅适用于中国站。',
                                                    'type' => 'string',
                                                    'example' => 'alice@example.com',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => 'RAM用户的更新时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2023-08-21T06:12:47Z',
                                                ],
                                                'MobilePhone' => [
                                                    'description' => 'RAM用户的手机号码。'."\n"
                                                        ."\n"
                                                        .'> 该参数仅适用于中国站。',
                                                    'type' => 'string',
                                                    'example' => '86-1868888****',
                                                ],
                                                'UserId' => [
                                                    'description' => 'RAM用户ID。',
                                                    'type' => 'string',
                                                    'example' => '20732900249392****',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => 'This is a cloud computing engineer.',
                                                ],
                                                'LastLoginDate' => [
                                                    'description' => 'RAM用户最近一次登录控制台的时间（时间戳）。',
                                                    'type' => 'string',
                                                    'example' => '1692598367586',
                                                ],
                                                'CreateDate' => [
                                                    'description' => 'RAM用户的创建时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2020-08-25T09:23:57Z',
                                                ],
                                                'ProvisionType' => [
                                                    'description' => '同步类型。取值：'."\n"
                                                        .'- Manual：在RAM中手动创建的RAM用户。'."\n"
                                                        .'- SCIM：通过SCIM协议同步创建的RAM用户。'."\n"
                                                        .'- CloudSSO：通过云SSO同步创建的用户。',
                                                    'type' => 'string',
                                                    'example' => 'Manual',
                                                ],
                                                'Tags' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Tag' => [
                                                            'description' => '标签列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '标签列表。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'TagKey' => [
                                                                        'description' => '标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'oparator',
                                                                    ],
                                                                    'TagValue' => [
                                                                        'description' => '标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'alice',
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
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\",\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"DisplayName\\": \\"test\\",\\n        \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n        \\"Email\\": \\"alice@example.com\\",\\n        \\"UpdateDate\\": \\"2023-08-21T06:12:47Z\\",\\n        \\"MobilePhone\\": \\"86-1868888****\\",\\n        \\"UserId\\": \\"20732900249392****\\",\\n        \\"Comments\\": \\"This is a cloud computing engineer.\\",\\n        \\"LastLoginDate\\": \\"1692598367586\\",\\n        \\"CreateDate\\": \\"2020-08-25T09:23:57Z\\",\\n        \\"ProvisionType\\": \\"Manual\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"TagKey\\": \\"oparator\\",\\n              \\"TagValue\\": \\"alice\\"\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListUsersResponse>\\n    <RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\n    <IsTruncated>true</IsTruncated>\\n    <Marker>EXAMPLE</Marker>\\n    <Users>\\n        <DisplayName>test</DisplayName>\\n        <UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\n        <Email>alice@example.com</Email>\\n        <UpdateDate>2020-10-13T09:19:49Z</UpdateDate>\\n        <MobilePhone>86-1868888****</MobilePhone>\\n        <UserId>20732900249392****</UserId>\\n        <Comments>This is a cloud computing engineer.</Comments>\\n        <LastLoginDate>2020-10-12T09:12:00Z</LastLoginDate>\\n        <CreateDate>2020-10-12T09:12:00Z</CreateDate>\\n        <ProvisionType>CloudSSO</ProvisionType>\\n        <Tags>\\n            <TagKey>oparator</TagKey>\\n            <TagValue>alice</TagValue>\\n        </Tags>\\n    </Users>\\n</ListUsersResponse>","errorExample":""}]',
            'title' => '查询所有RAM用户的详细信息',
            'summary' => '调用ListUsers查询所有RAM用户的详细信息。',
            'description' => '### 使用说明'."\n"
                .'您可以通过以下两个API查询所有RAM用户的信息，区别如下：'."\n"
                ."\n"
                .'- ListUsers：查询RAM用户的详细信息。'."\n"
                .'- ListUserBasicInfos：查询RAM用户的基本信息，仅包括RAM用户登录名称`UserPrincipalName`、RAM用户显示名称`DisplayName`和RAM用户ID`UserId`。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUserBasicInfos' => [
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。 '."\n"
                            ."\n"
                            .'取值范围：1~1000。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'operator',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'alice',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EF2B25FD-CADE-445B-BE4D-E082E0FF1A0F',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'UserBasicInfos' => [
                                'type' => 'object',
                                'properties' => [
                                    'UserBasicInfo' => [
                                        'description' => 'RAM用户的基本信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'RAM用户的基本信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserPrincipalName' => [
                                                    'description' => 'RAM用户的登录名称。',
                                                    'type' => 'string',
                                                    'example' => 'test@example.onaliyun.com',
                                                ],
                                                'DisplayName' => [
                                                    'description' => 'RAM用户的显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'UserId' => [
                                                    'description' => 'RAM用户ID。',
                                                    'type' => 'string',
                                                    'example' => '20732900249392****',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此参数，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EF2B25FD-CADE-445B-BE4D-E082E0FF1A0F\\",\\n  \\"IsTruncated\\": true,\\n  \\"UserBasicInfos\\": {\\n    \\"UserBasicInfo\\": [\\n      {\\n        \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n        \\"DisplayName\\": \\"test\\",\\n        \\"UserId\\": \\"20732900249392****\\"\\n      }\\n    ]\\n  },\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<ListUserBasicInfosResponse>\\n    <RequestId>EF2B25FD-CADE-445B-BE4D-E082E0FF1A0F</RequestId>\\n    <IsTruncated>true</IsTruncated>\\n    <UserBasicInfos>\\n        <UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\n        <DisplayName>test</DisplayName>\\n        <UserId>20732900249392****</UserId>\\n    </UserBasicInfos>\\n    <Marker>EXAMPLE</Marker>\\n</ListUserBasicInfosResponse>","errorExample":""}]',
            'title' => '查询所有RAM用户的基本信息',
            'summary' => '调用ListUserBasicInfos查询所有RAM用户的基本信息。',
            'description' => '您可以通过以下两个API查询所有RAM用户的信息，区别如下：'."\n"
                ."\n"
                .'- ListUsers：查询RAM用户的详细信息。'."\n"
                .'- ListUserBasicInfos：查询RAM用户的基本信息，仅包括RAM用户登录名称`UserPrincipalName`、RAM用户显示名称`DisplayName`和RAM用户ID`UserId`。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccountSummary' => [
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
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '81313F5E-3C85-478F-BCC9-E1B70E4556DB',
                            ],
                            'SummaryMap' => [
                                'description' => '阿里云账号概览信息。',
                                'type' => 'object',
                                'properties' => [
                                    'MFADevices' => [
                                        'description' => '虚拟多因素认证设备的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '13',
                                    ],
                                    'AccessKeysPerUserQuota' => [
                                        'description' => '每个RAM用户允许拥有访问密钥的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'AttachedPoliciesPerGroupQuota' => [
                                        'description' => '每个用户组允许添加自定义策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'AttachedSystemPoliciesPerRoleQuota' => [
                                        'description' => '每个RAM角色允许添加系统策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'AttachedPoliciesPerRoleQuota' => [
                                        'description' => '每个RAM角色允许添加自定义策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'GroupsPerUserQuota' => [
                                        'description' => '每个RAM用户允许加入的用户组最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'Roles' => [
                                        'description' => 'RAM角色数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '19',
                                    ],
                                    'PolicySizeQuota' => [
                                        'description' => '权限策略内容的最大长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2048',
                                    ],
                                    'AttachedSystemPoliciesPerGroupQuota' => [
                                        'description' => '每个用户组允许添加系统策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'AttachedSystemPoliciesPerUserQuota' => [
                                        'description' => '每个RAM用户允许添加系统策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'AttachedPoliciesPerUserQuota' => [
                                        'description' => '每个RAM用户允许添加自定义策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'GroupsQuota' => [
                                        'description' => '允许创建用户组的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '50',
                                    ],
                                    'Groups' => [
                                        'description' => '用户组数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'PoliciesQuota' => [
                                        'description' => '允许创建自定义策略的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1500',
                                    ],
                                    'VirtualMFADevicesQuota' => [
                                        'description' => '允许创建虚拟多因素认证设备的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'VersionsPerPolicyQuota' => [
                                        'description' => '权限策略版本的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'RolesQuota' => [
                                        'description' => '允许创建RAM角色的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'UsersQuota' => [
                                        'description' => '允许创建RAM用户的最大数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'Policies' => [
                                        'description' => '自定义策略数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '13',
                                    ],
                                    'Users' => [
                                        'description' => 'RAM用户数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '9',
                                    ],
                                    'MFADevicesInUse' => [
                                        'description' => '使用中的虚拟多因素认证设备的数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"81313F5E-3C85-478F-BCC9-E1B70E4556DB\\",\\n  \\"SummaryMap\\": {\\n    \\"MFADevices\\": 13,\\n    \\"AccessKeysPerUserQuota\\": 2,\\n    \\"AttachedPoliciesPerGroupQuota\\": 5,\\n    \\"AttachedSystemPoliciesPerRoleQuota\\": 20,\\n    \\"AttachedPoliciesPerRoleQuota\\": 5,\\n    \\"GroupsPerUserQuota\\": 5,\\n    \\"Roles\\": 19,\\n    \\"PolicySizeQuota\\": 2048,\\n    \\"AttachedSystemPoliciesPerGroupQuota\\": 20,\\n    \\"AttachedSystemPoliciesPerUserQuota\\": 20,\\n    \\"AttachedPoliciesPerUserQuota\\": 10,\\n    \\"GroupsQuota\\": 50,\\n    \\"Groups\\": 7,\\n    \\"PoliciesQuota\\": 1500,\\n    \\"VirtualMFADevicesQuota\\": 1000,\\n    \\"VersionsPerPolicyQuota\\": 5,\\n    \\"RolesQuota\\": 1000,\\n    \\"UsersQuota\\": 1000,\\n    \\"Policies\\": 13,\\n    \\"Users\\": 9,\\n    \\"MFADevicesInUse\\": 2\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetAccountSummaryResponse>\\r\\n\\t<RequestId>81313F5E-3C85-478F-BCC9-E1B70E4556DB</RequestId>\\r\\n\\t<SummaryMap>\\r\\n\\t\\t<Policies>13</Policies>\\r\\n\\t\\t<GroupsPerUserQuota>5</GroupsPerUserQuota>\\r\\n\\t\\t<AttachedPoliciesPerUserQuota>10</AttachedPoliciesPerUserQuota>\\r\\n\\t\\t<Roles>19</Roles>\\r\\n\\t\\t<Users>9</Users>\\r\\n\\t\\t<RolesQuota>1000</RolesQuota>\\r\\n\\t\\t<PoliciesQuota>1500</PoliciesQuota>\\r\\n\\t\\t<VirtualMFADevicesQuota>1000</VirtualMFADevicesQuota>\\r\\n\\t\\t<AttachedSystemPoliciesPerGroupQuota>20</AttachedSystemPoliciesPerGroupQuota>\\r\\n\\t\\t<MFADevicesInUse>2</MFADevicesInUse>\\r\\n\\t\\t<AccessKeysPerUserQuota>2</AccessKeysPerUserQuota>\\r\\n\\t\\t<VersionsPerPolicyQuota>5</VersionsPerPolicyQuota>\\r\\n\\t\\t<PolicySizeQuota>2048</PolicySizeQuota>\\r\\n\\t\\t<AttachedPoliciesPerGroupQuota>5</AttachedPoliciesPerGroupQuota>\\r\\n\\t\\t<AttachedSystemPoliciesPerUserQuota>20</AttachedSystemPoliciesPerUserQuota>\\r\\n\\t\\t<Groups>7</Groups>\\r\\n\\t\\t<AttachedPoliciesPerRoleQuota>5</AttachedPoliciesPerRoleQuota>\\r\\n\\t\\t<UsersQuota>1000</UsersQuota>\\r\\n\\t\\t<AttachedSystemPoliciesPerRoleQuota>20</AttachedSystemPoliciesPerRoleQuota>\\r\\n\\t\\t<MFADevices>13</MFADevices>\\r\\n\\t\\t<GroupsQuota>50</GroupsQuota>\\r\\n\\t</SummaryMap>\\r\\n</GetAccountSummaryResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询主账号概览信息',
            'summary' => '查询阿里云账号（主账号）的概览信息。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录密码。'."\n"
                            ."\n"
                            .'密码必须符合密码强度要求。',
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
                        'description' => 'RAM用户在下次登录时是否必须重置密码。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MFABindRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制要求RAM用户开启多因素认证。取值：'."\n"
                            ."\n"
                            .'- true：要求开启。RAM用户在下次登录时必须绑定多因素认证设备。'."\n"
                            .'- false（默认值）：不要求开启。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启或禁用控制台密码登录。取值：'."\n"
                            ."\n"
                            .'- Active（默认值）：开启。'."\n"
                            .'- Inactive：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Active',
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
                                'example' => '29CB303C-1F05-43A6-A6BC-EBC5A797F8DB',
                            ],
                            'LoginProfile' => [
                                'description' => '控制台登录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'test@example.onaliyun.com',
                                    ],
                                    'Status' => [
                                        'description' => '开启或禁用控制台密码登录。',
                                        'type' => 'string',
                                        'example' => 'Active',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-14T03:47:51Z',
                                    ],
                                    'PasswordResetRequired' => [
                                        'description' => 'RAM用户在下次登录时是否必须重置密码。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MFABindRequired' => [
                                        'description' => '是否强制要求RAM用户开启多因素认证。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"29CB303C-1F05-43A6-A6BC-EBC5A797F8DB\\",\\n  \\"LoginProfile\\": {\\n    \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n    \\"Status\\": \\"Active\\",\\n    \\"UpdateDate\\": \\"2020-10-14T03:47:51Z\\",\\n    \\"PasswordResetRequired\\": false,\\n    \\"MFABindRequired\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateLoginProfileResponse>\\r\\n\\t<RequestId>29CB303C-1F05-43A6-A6BC-EBC5A797F8DB</RequestId>\\r\\n\\t<LoginProfile>\\r\\n\\t\\t<Status>Active</Status>\\r\\n\\t\\t<UpdateDate>2020-10-14T03:47:51Z</UpdateDate>\\r\\n\\t\\t<PasswordResetRequired>false</PasswordResetRequired>\\r\\n\\t\\t<UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t<MFABindRequired>false</MFABindRequired>\\r\\n\\t</LoginProfile>\\r\\n</CreateLoginProfileResponse>","errorExample":""}]',
            'title' => '开启指定RAM用户的控制台登录',
            'summary' => '为RAM用户创建登录配置。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => 'E517F18B-632C-48FC-93F1-CDCBCC6F8444',
                            ],
                            'LoginProfile' => [
                                'description' => '控制台登录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '开启或禁用控制台密码登录。',
                                        'type' => 'string',
                                        'example' => 'Active',
                                    ],
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'test@example.onaliyun.com',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-14T06:56:45Z',
                                    ],
                                    'LastLoginTime' => [
                                        'description' => '上次登录控制台时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-14T07:25:25Z',
                                    ],
                                    'PasswordResetRequired' => [
                                        'description' => 'RAM用户在下次登录时是否必须重置密码。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MFABindRequired' => [
                                        'description' => '是否强制要求用户开启多因素认证。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E517F18B-632C-48FC-93F1-CDCBCC6F8444\\",\\n  \\"LoginProfile\\": {\\n    \\"Status\\": \\"Active\\",\\n    \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n    \\"UpdateDate\\": \\"2020-10-14T06:56:45Z\\",\\n    \\"LastLoginTime\\": \\"2020-10-14T07:25:25Z\\",\\n    \\"PasswordResetRequired\\": false,\\n    \\"MFABindRequired\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetLoginProfileResponse>\\r\\n\\t<RequestId>E517F18B-632C-48FC-93F1-CDCBCC6F8444</RequestId>\\r\\n\\t<LoginProfile>\\r\\n\\t\\t<Status>Active</Status>\\r\\n\\t\\t<LastLoginTime>2020-10-14T07:25:25Z</LastLoginTime>\\r\\n\\t\\t<UpdateDate>2020-10-14T07:25:00Z</UpdateDate>\\r\\n\\t\\t<PasswordResetRequired>false</PasswordResetRequired>\\r\\n\\t\\t<UserPrincipalName>test@example11.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t<MFABindRequired>false</MFABindRequired>\\r\\n\\t</LoginProfile>\\r\\n</GetLoginProfileResponse>","errorExample":""}]',
            'title' => '查询指定RAM用户的登录信息',
            'summary' => '查询指定用户的控制台登录配置信息。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录新密码。'."\n"
                            ."\n"
                            .'密码必须符合密码强度要求。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'mypassword',
                    ],
                ],
                [
                    'name' => 'PasswordResetRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户在下次登录时是否必须重置密码。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MFABindRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制要求RAM用户开启多因素认证。取值：'."\n"
                            ."\n"
                            .'- true：要求开启。RAM用户在下次登录时必须绑定多因素认证设备。'."\n"
                            .'- false：不要求开启。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开启或禁用控制台密码登录。取值：'."\n"
                            ."\n"
                            .'- Active：开启。'."\n"
                            .'- Inactive：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Active',
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
                                'example' => 'BCDB6A7F-2199-41D9-B577-4FA536A5ADE1',
                            ],
                            'LoginProfile' => [
                                'description' => '控制台登录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UserPrincipalName' => [
                                        'description' => 'RAM用户的登录名称。',
                                        'type' => 'string',
                                        'example' => 'test@example11.onaliyun.com',
                                    ],
                                    'Status' => [
                                        'description' => '开启或禁用控制台密码登录。',
                                        'type' => 'string',
                                        'example' => 'Active',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-14T07:48:41Z',
                                    ],
                                    'PasswordResetRequired' => [
                                        'description' => 'RAM用户在下次登录时是否必须重置密码。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MFABindRequired' => [
                                        'description' => '是否强制要求用户开启多因素认证。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BCDB6A7F-2199-41D9-B577-4FA536A5ADE1\\",\\n  \\"LoginProfile\\": {\\n    \\"UserPrincipalName\\": \\"test@example11.onaliyun.com\\",\\n    \\"Status\\": \\"Active\\",\\n    \\"UpdateDate\\": \\"2020-10-14T07:48:41Z\\",\\n    \\"PasswordResetRequired\\": false,\\n    \\"MFABindRequired\\": false\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateLoginProfileResponse>\\r\\n\\t<RequestId>BCDB6A7F-2199-41D9-B577-4FA536A5ADE1</RequestId>\\r\\n\\t<LoginProfile>\\r\\n\\t\\t<Status>Active</Status>\\r\\n\\t\\t<UpdateDate>2020-10-14T07:48:41Z</UpdateDate>\\r\\n\\t\\t<PasswordResetRequired>false</PasswordResetRequired>\\r\\n\\t\\t<UserPrincipalName>test@example11.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t<MFABindRequired>false</MFABindRequired>\\r\\n\\t</LoginProfile>\\r\\n</UpdateLoginProfileResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '修改RAM用户的控制台登录信息',
            'summary' => '修改指定RAM用户的控制台登录信息。',
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
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => 'B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteLoginProfileResponse>\\r\\n          <RequestId>B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC</RequestId>\\r\\n</DeleteLoginProfileResponse>","errorExample":""}]',
            'title' => '关闭指定RAM用户的控制台登录',
            'summary' => '删除RAM用户的控制台登录配置。',
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
                    'name' => 'OldPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录旧密码。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'mypassword',
                    ],
                ],
                [
                    'name' => 'NewPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的控制台登录新密码。'."\n"
                            ."\n"
                            .'密码必须符合密码强度要求。关于如何获取密码强度要求，请参见[GetPasswordPolicy](~~186691~~)。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'newpassword',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ChangePasswordResponse>\\r\\n\\t<RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n</ChangePasswordResponse>","errorExample":""}]',
            'title' => 'RAM用户修改自己的登录密码',
            'summary' => 'RAM用户为自己修改控制台登录密码。',
            'description' => '> 该API仅限RAM用户调用。调用前，请确保已将[SetSecurityPreference](~~43765~~)中的`AllowUserToChangePassword`设置为`True`，即允许RAM用户自主管理密码。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAccessKey' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'如果为空，默认为当前用户创建访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => '19DDD9F7-AFCC-4D72-8CBA-CCE5A142E7AB',
                            ],
                            'AccessKey' => [
                                'description' => '访问密钥。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '访问密钥的状态。取值：'."\n"
                                            ."\n"
                                            .'- Active：已激活。'."\n"
                                            .'- Inactive：已禁用。',
                                        'type' => 'string',
                                        'example' => 'Active',
                                    ],
                                    'AccessKeySecret' => [
                                        'description' => '访问密钥。',
                                        'type' => 'string',
                                        'example' => 'Y3MSLE6OgizS4qrz5LVFDoyZEL****',
                                    ],
                                    'AccessKeyId' => [
                                        'description' => '访问密钥ID。',
                                        'type' => 'string',
                                        'example' => 'LTAI4G3HaMmeHpay2gcq****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '访问密钥的创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-15T08:08:54Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"19DDD9F7-AFCC-4D72-8CBA-CCE5A142E7AB\\",\\n  \\"AccessKey\\": {\\n    \\"Status\\": \\"Active\\",\\n    \\"AccessKeySecret\\": \\"Y3MSLE6OgizS4qrz5LVFDoyZEL****\\",\\n    \\"AccessKeyId\\": \\"LTAI4G3HaMmeHpay2gcq****\\",\\n    \\"CreateDate\\": \\"2020-10-15T08:08:54Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateAccessKeyResponse>\\r\\n\\t<RequestId>19DDD9F7-AFCC-4D72-8CBA-CCE5A142E7AB</RequestId>\\r\\n\\t<AccessKey>\\r\\n\\t\\t<Status>Active</Status>\\r\\n\\t\\t<AccessKeyId>LTAI4G3HaMmeHpay2gcq****</AccessKeyId>\\r\\n\\t\\t<AccessKeySecret>Y3MSLE6OgizS4qrz5LVFDoyZEL****</AccessKeySecret>\\r\\n\\t\\t<CreateDate>2020-10-15T08:08:54Z</CreateDate>\\r\\n\\t</AccessKey>\\r\\n</CreateAccessKeyResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '创建主账号或RAM用户访问密钥',
            'summary' => '创建阿里云账号（主账号）或RAM用户的访问密钥。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要删除的访问密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'LTAI4GFTgcR8m8cZQDTH****',
                    ],
                ],
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'如果为空，默认删除当前用户的访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => 'B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccessKeyResponse>\\r\\n        <RequestId>B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC</RequestId>\\r\\n</DeleteAccessKeyResponse>","errorExample":""}]',
            'title' => '删除用户的访问密钥',
            'summary' => '删除阿里云账号（主账号）或RAM用户的访问密钥。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'如果为空，默认修改当前用户的访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改状态的访问密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'LTAI4GFTgcR8m8cZQDTH****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问密钥的状态。取值：'."\n"
                            ."\n"
                            .'- Active：已激活。'."\n"
                            .'- Inactive：已禁用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Active',
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
                                'example' => 'B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateAccessKeyResponse>\\r\\n      <RequestId>B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC</RequestId>\\r\\n</UpdateAccessKeyResponse>","errorExample":""}]',
            'title' => '修改访问密钥状态',
            'summary' => '修改阿里云账号（主账号）或RAM用户的访问密钥状态。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'如果为空，默认查询当前用户的访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'UserAccessKeyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要查询的访问密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'LTAI4GFTgcR8m8cZQDTH****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'AccessKeyLastUsed' => [
                                'description' => '访问密钥的最后使用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'LastUsedDate' => [
                                        'description' => '最后使用时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-16T01:37:37Z',
                                    ],
                                    'ServiceName' => [
                                        'description' => '最后使用的云服务。',
                                        'type' => 'string',
                                        'example' => 'Ram',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B29C79F6-354B-4297-A994-1338CC22A2EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessKeyLastUsed\\": {\\n    \\"LastUsedDate\\": \\"2020-10-16T01:37:37Z\\",\\n    \\"ServiceName\\": \\"Ram\\"\\n  },\\n  \\"RequestId\\": \\"B29C79F6-354B-4297-A994-1338CC22A2EC\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAccessKeyLastUsedResponse>\\n    <AccessKeyLastUsed>\\n        <LastUsedDate>2020-10-16T01:37:37Z</LastUsedDate>\\n        <ServiceName>Ram</ServiceName>\\n    </AccessKeyLastUsed>\\n    <RequestId>B29C79F6-354B-4297-A994-1338CC22A2EC</RequestId>\\n</GetAccessKeyLastUsedResponse>","errorExample":""}]',
            'title' => '查询指定访问密钥的最后使用时间',
            'summary' => '查询某个指定访问密钥的最后使用时间。',
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
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。'."\n"
                            ."\n"
                            .'如果为空，默认查询当前用户的所有访问密钥。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessKeys' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessKey' => [
                                        'description' => '访问密钥信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '访问密钥状态。取值：'."\n"
                                                        ."\n"
                                                        .'- Active：已激活。'."\n"
                                                        .'- Inactive：已禁用。',
                                                    'type' => 'string',
                                                    'example' => 'Active',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '访问密钥更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-13T12:33:18Z',
                                                ],
                                                'AccessKeyId' => [
                                                    'description' => '访问密钥ID。',
                                                    'type' => 'string',
                                                    'example' => '0wNEpMMlzy7s****',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '访问密钥创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-13T12:33:18Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessKeys\\": {\\n    \\"AccessKey\\": [\\n      {\\n        \\"Status\\": \\"Active\\",\\n        \\"UpdateDate\\": \\"2020-10-13T12:33:18Z\\",\\n        \\"AccessKeyId\\": \\"0wNEpMMlzy7s****\\",\\n        \\"CreateDate\\": \\"2020-10-13T12:33:18Z\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"4B450CA1-36E8-4AA2-8461-86B42BF4CC4E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListAccessKeysResponse>\\r\\n\\t<RequestId>4B450CA1-36E8-4AA2-8461-86B42BF4CC4E</RequestId>\\r\\n\\t<AccessKeys>\\r\\n\\t\\t<AccessKey>\\r\\n\\t\\t\\t<AccessKeyId>0wNEpMMlzy7s****</AccessKeyId>\\r\\n\\t\\t\\t<Status>Active</Status>\\r\\n\\t\\t\\t<CreateDate>2020-10-13T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2020-10-13T12:33:18Z</UpdateDate>\\r\\n\\t\\t</AccessKey>\\r\\n\\t\\t<AccessKey>\\r\\n\\t\\t\\t<AccessKeyId>WnIWUruvfaDT****</AccessKeyId>\\r\\n\\t\\t\\t<Status>Inactive</Status>\\r\\n\\t\\t\\t<CreateDate>2020-10-14T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<UpdateDate>2020-10-14T21:12:21Z</UpdateDate>\\r\\n\\t\\t</AccessKey>\\r\\n\\t</AccessKeys>\\r\\n</ListAccessKeysResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询主账号或RAM用户访问密钥列表',
            'summary' => '查询阿里云账号（主账号）或RAM用户的访问密钥列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetVerificationInfo' => [
            'summary' => '查询RAM用户的安全手机或安全邮箱状态。',
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
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B182C041-8C64-5F2F-A07B-FC67FAF89CF9',
                            ],
                            'SecurityPhoneDevice' => [
                                'description' => '安全手机信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AreaCode' => [
                                        'description' => '区号。',
                                        'type' => 'string',
                                        'example' => '86',
                                    ],
                                    'PhoneNumber' => [
                                        'description' => '手机号码。',
                                        'type' => 'string',
                                        'example' => '13900001234',
                                    ],
                                    'Status' => [
                                        'description' => '安全手机的状态。取值：'."\n"
                                            .'- active：已激活。'."\n"
                                            .'- pending：待激活。',
                                        'type' => 'string',
                                        'example' => 'active',
                                    ],
                                ],
                            ],
                            'SecurityEmailDevice' => [
                                'description' => '安全邮箱信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Email' => [
                                        'description' => '安全邮箱地址。',
                                        'type' => 'string',
                                        'example' => 'username@example.com',
                                    ],
                                    'Status' => [
                                        'description' => '安全邮箱的状态。取值：'."\n"
                                            .'- active：已激活。'."\n"
                                            .'- pending：待激活。',
                                        'type' => 'string',
                                        'example' => 'active',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B182C041-8C64-5F2F-A07B-FC67FAF89CF9\\",\\n  \\"SecurityPhoneDevice\\": {\\n    \\"AreaCode\\": \\"86\\",\\n    \\"PhoneNumber\\": \\"13900001234\\",\\n    \\"Status\\": \\"active\\"\\n  },\\n  \\"SecurityEmailDevice\\": {\\n    \\"Email\\": \\"username@example.com\\",\\n    \\"Status\\": \\"active\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetVerificationInfoResponse>\\n    <RequestId>B182C041-8C64-5F2F-A07B-FC67FAF89CF9</RequestId>\\n    <SecurityPhoneDevice>\\n        <AreaCode>86</AreaCode>\\n        <PhoneNumber>13900001234</PhoneNumber>\\n        <Status>active</Status>\\n    </SecurityPhoneDevice>\\n    <SecurityEmailDevice>\\n        <Email>username@example.com</Email>\\n        <Status>active</Status>\\n    </SecurityEmailDevice>\\n</GetVerificationInfoResponse>","errorExample":""}]',
            'title' => '获取用户手机邮箱的安全认证信息',
        ],
        'CreateVirtualMFADevice' => [
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
            'operationType' => 'write',
            'deprecated' => false,
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
                            .'长度为1~64个字符，可包含英文字母、数字和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'device001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VirtualMFADevice' => [
                                'description' => '多因素认证设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:mfa/device001',
                                    ],
                                    'QRCodePNG' => [
                                        'description' => '密钥的二维码，使用Base64编码。',
                                        'type' => 'string',
                                        'example' => 'YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****',
                                    ],
                                    'Base32StringSeed' => [
                                        'description' => '多因素认证设备密钥。',
                                        'type' => 'string',
                                        'example' => 'LD3CJ23Z2VGEX6R7ZTQCOA4XL2KODS5PKH7442NLKYX2PVHSHYB7UT3TS5HA****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C609CC97-10FE-43EB-BE32-BDC219D8F1E4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VirtualMFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::177242285274****:mfa/device001\\",\\n    \\"QRCodePNG\\": \\"YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****\\",\\n    \\"Base32StringSeed\\": \\"LD3CJ23Z2VGEX6R7ZTQCOA4XL2KODS5PKH7442NLKYX2PVHSHYB7UT3TS5HA****\\"\\n  },\\n  \\"RequestId\\": \\"C609CC97-10FE-43EB-BE32-BDC219D8F1E4\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateVirtualMFADeviceResponse>\\r\\n\\t<VirtualMFADevice>\\r\\n\\t\\t<SerialNumber>acs:ram::177242285274****:mfa/device001</SerialNumber>\\r\\n\\t\\t<QRCodePNG>YXNkZmFzZDlmeW5hc2Q5OGZoODd4bXJmcThhaGU5aSBmYXNkZiBzYWRmIGFGIDRxd2VjIGEgdHEz****</QRCodePNG>\\r\\n\\t\\t<Base32StringSeed>LD3CJ23Z2VGEX6R7ZTQCOA4XL2KODS5PKH7442NLKYX2PVHSHYB7UT3TS5HA****</Base32StringSeed>\\r\\n\\t</VirtualMFADevice>\\r\\n\\t<RequestId>C609CC97-10FE-43EB-BE32-BDC219D8F1E4</RequestId>\\r\\n</CreateVirtualMFADeviceResponse>","errorExample":""}]',
            'title' => '创建多因素认证设备',
            'summary' => '创建一个虚拟多因素认证设备。',
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
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。 '."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：100。',
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
                            'VirtualMFADevices' => [
                                'type' => 'object',
                                'properties' => [
                                    'VirtualMFADevice' => [
                                        'description' => '多因素认证设备信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SerialNumber' => [
                                                    'description' => '设备序列号。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::177242285274****:mfa/test',
                                                ],
                                                'User' => [
                                                    'description' => '绑定了多因素认证设备的RAM用户信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'UserPrincipalName' => [
                                                            'description' => 'RAM用户的登录名称。',
                                                            'type' => 'string',
                                                            'example' => 'test@177242285274****.onaliyun.com',
                                                        ],
                                                        'DisplayName' => [
                                                            'description' => 'RAM用户的显示名称。',
                                                            'type' => 'string',
                                                            'example' => 'test',
                                                        ],
                                                        'UserId' => [
                                                            'description' => 'RAM用户ID。',
                                                            'type' => 'string',
                                                            'example' => '20732900249392****',
                                                        ],
                                                    ],
                                                ],
                                                'ActivateDate' => [
                                                    'description' => '激活时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-16T06:02:09Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '32272612-DF82-485E-8BA9-AFA4E0C3D0BA',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此参数，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容 。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"VirtualMFADevices\\": {\\n    \\"VirtualMFADevice\\": [\\n      {\\n        \\"SerialNumber\\": \\"acs:ram::177242285274****:mfa/test\\",\\n        \\"User\\": {\\n          \\"UserPrincipalName\\": \\"test@177242285274****.onaliyun.com\\",\\n          \\"DisplayName\\": \\"test\\",\\n          \\"UserId\\": \\"20732900249392****\\"\\n        },\\n        \\"ActivateDate\\": \\"2020-10-16T06:02:09Z\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"32272612-DF82-485E-8BA9-AFA4E0C3D0BA\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListVirtualMFADevicesResponse>\\r\\n\\t<VirtualMFADevices>\\r\\n\\t\\t<VirtualMFADevice>\\r\\n\\t\\t\\t<User />\\r\\n\\t\\t\\t<SerialNumber>acs:ram::177242285274****:mfa/dev-01</SerialNumber>\\r\\n\\t\\t</VirtualMFADevice>\\r\\n\\t\\t<VirtualMFADevice>\\r\\n\\t\\t\\t<User>\\r\\n\\t\\t\\t\\t<UserId>20732900249392****</UserId>\\r\\n\\t\\t\\t\\t<DisplayName>test</DisplayName>\\r\\n\\t\\t\\t\\t<UserPrincipalName>test@177242285274****.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t\\t</User>\\r\\n\\t\\t\\t<SerialNumber>acs:ram::177242285274****:mfa/test</SerialNumber>\\r\\n\\t\\t\\t<ActivateDate>2020-10-16T06:02:09Z</ActivateDate>\\r\\n\\t\\t</VirtualMFADevice>\\r\\n\\t</VirtualMFADevices>\\r\\n\\t<RequestId>32272612-DF82-485E-8BA9-AFA4E0C3D0BA</RequestId>\\r\\n\\t<IsTruncated>true</IsTruncated>\\r\\n\\t<Marker>EXAMPLE</Marker>\\r\\n</ListVirtualMFADevicesResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询多因素认证设备列表',
            'summary' => '列出多因素认证设备列表。',
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
                'http',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SerialNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备序列号。',
                        'type' => 'string',
                        'required' => true,
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"04F0F334-1335-436C-A1D7-6C044FE73368\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVirtualMFADeviceResponse>\\r\\n          <RequestId>04F0F334-1335-436C-A1D7-6C044FE73368</RequestId>\\r\\n</DeleteVirtualMFADeviceResponse>","errorExample":""}]',
            'title' => '删除多因素认证设备',
            'summary' => '删除指定的多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DisableVirtualMFA' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => 'B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableVirtualMFAResponse>\\r\\n            <RequestId>B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC</RequestId>\\r\\n</DisableVirtualMFAResponse>","errorExample":""}]',
            'title' => '解绑并删除多因素认证设备',
            'summary' => '解绑并删除一个指定RAM用户的多因素认证设备。',
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
                        'description' => '多因素认证设备的序列号。'."\n"
                            ."\n"
                            .'> 您可以调用[CreateVirtualMFADevice](~~186179~~)获取多因素认证设备的序列号。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'acs:ram::177242285274****:mfa/device001',
                    ],
                ],
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
                [
                    'name' => 'AuthenticationCode1',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第一组安全验证码。'."\n"
                            ."\n"
                            .'> 您可以调用[CreateVirtualMFADevice](~~186179~~)创建多因素认证设备并生成密钥（`Base32StringSeed`的值），然后使用该密钥在移动端阿里云应用中手动添加多因素认证设备，最后获取连续的两组安全验证码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'AuthenticationCode2',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第二组安全验证码。'."\n"
                            ."\n"
                            .'> 您可以调用[CreateVirtualMFADevice](~~186179~~)创建多因素认证设备并生成密钥（`Base32StringSeed`的值），然后使用该密钥在移动端阿里云应用中手动添加多因素认证设备，最后获取连续的两组安全验证码。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '654321',
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
                                'example' => 'B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC\\"\\n}","errorExample":""},{"type":"xml","example":"<BindMFADeviceResponse>\\r\\n          <RequestId>B9AF80E4-1565-42D9-9256-0B8B0D9FD3EC</RequestId>\\r\\n</BindMFADeviceResponse>","errorExample":""}]',
            'title' => '为RAM用户绑定多因素认证设备',
            'summary' => '为RAM用户绑定指定的多因素认证设备。',
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
                'http',
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
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MFADevice' => [
                                'description' => '多因素认证设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::151298381312****:mfa/device001',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A26CB3E9-1021-452A-AC57-3134B3BA0E4C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::151298381312****:mfa/device001\\"\\n  },\\n  \\"RequestId\\": \\"A26CB3E9-1021-452A-AC57-3134B3BA0E4C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UnbindMFADeviceResponse>\\r\\n\\t<MFADevice>\\r\\n\\t\\t<SerialNumber>acs:ram::151298381312****:mfa/device001</SerialNumber>\\r\\n\\t</MFADevice>\\r\\n\\t<RequestId>A26CB3E9-1021-452A-AC57-3134B3BA0E4C</RequestId>\\r\\n</UnbindMFADeviceResponse>\\r\\n","errorExample":""}]',
            'title' => '为RAM用户解绑多因素认证设备',
            'summary' => '为RAM用户解绑定多因素认证设备。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccountMFAInfo' => [
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
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4BE83135-0B08-467C-B3A2-27B312FD0F57',
                            ],
                            'IsMFAEnable' => [
                                'description' => '是否已启用多因素认证设备。取值：'."\n"
                                    ."\n"
                                    .'- true：已启用。'."\n"
                                    .'- false：未启用。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4BE83135-0B08-467C-B3A2-27B312FD0F57\\",\\n  \\"IsMFAEnable\\": false\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetAccountMFAInfoResponse>\\r\\n\\t<RequestId>4BE83135-0B08-467C-B3A2-27B312FD0F57</RequestId>\\r\\n\\t<IsMFAEnable>false</IsMFAEnable>\\r\\n</GetAccountMFAInfoResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询主账号多因素认证设备信息',
            'summary' => '查询阿里云账号（主账号）的多因素认证设备信息。',
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
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。存在以下两种情况：'."\n"
                            ."\n"
                            .'- 当RAM用户调用时，该参数可以为空，为空时默认查询当前RAM用户的多因素认证设备信息。'."\n"
                            .'- 当阿里云账号（主账号）调用时，该参数不能为空，必须指定需要查询的RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test@example.onaliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MFADevice' => [
                                'description' => '多因素认证设备信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SerialNumber' => [
                                        'description' => '设备序列号。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:mfa/device001',
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
                                'example' => 'FCF7322A-20A9-4F68-8B7F-F86958839BC0',
                            ],
                            'IsMFAEnable' => [
                                'description' => '是否已启用多因素认证设备。取值：'."\n"
                                    ."\n"
                                    .'- true：已启用。'."\n"
                                    .'- false：未启用。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"MFADevice\\": {\\n    \\"SerialNumber\\": \\"acs:ram::177242285274****:mfa/device001\\",\\n    \\"Type\\": \\"VMFA\\"\\n  },\\n  \\"RequestId\\": \\"FCF7322A-20A9-4F68-8B7F-F86958839BC0\\",\\n  \\"IsMFAEnable\\": true\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetUserMFAInfoResponse>\\r\\n\\t<MFADevice>\\r\\n\\t\\t<SerialNumber>acs:ram::177242285274****:mfa/device001</SerialNumber>\\r\\n        <Type>VMFA</Type>\\r\\n\\t</MFADevice>\\r\\n\\t<RequestId>FCF7322A-20A9-4F68-8B7F-F86958839BC0</RequestId>\\r\\n\\t<IsMFAEnable>true</IsMFAEnable>\\r\\n</GetUserMFAInfoResponse>","errorExample":""}]',
            'title' => '查询RAM用户多因素认证设备信息',
            'summary' => '查询指定RAM用户的多因素认证设备信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'TagResources' => [
            'summary' => '调用TagResources接口给资源打上标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- user：RAM用户。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多50个子项',
                        'description' => '资源ID。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。'."\n"
                            .'当资源类型为user时，资源ID为RAM用户ID。'."\n"
                            .'>必须指定 `ResourceId`、`ResourcePrincipalName`两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。'."\n"
                                .'当资源类型为user时，资源ID为RAM用户ID。'."\n"
                                .'>必须指定 `ResourceId`、`ResourcePrincipalName`两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '20732900249392****',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'ResourcePrincipalName',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源名,最多50个子项',
                        'description' => '资源名称。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。'."\n"
                            .'当资源类型为user时，资源名称为RAM用户名。'."\n"
                            .'>必须指定 `ResourceId`、`ResourcePrincipalName`两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源名称。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。'."\n"
                                .'当资源类型为user时，资源名称为RAM用户名。'."\n"
                                .'>必须指定 `ResourceId`、`ResourcePrincipalName`两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test@example.onaliyun.com',
                        ],
                        'required' => false,
                        'example' => 'TagResources',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '资源的标签键。'."\n"
                            ."\n"
                            .'N的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签键。'."\n"
                                ."\n"
                                .'N的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以aliyun和acs:开头，不能包含`http://`或者`https://`。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '资源的标签键。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20。一旦传入该值，则不允许为空字符串。最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。'."\n",
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'operator',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '资源的标签值。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20。可以为空字符串。最多支持128个字符，不能包含`http://`或者`https://`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'alice',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'maxItems' => 21,
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
                                'example' => '3687BD52-49FD-585B-AB14-CD05B7C76963',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3687BD52-49FD-585B-AB14-CD05B7C76963\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\n    <RequestId>3687BD52-49FD-585B-AB14-CD05B7C76963</RequestId>\\n</TagResourcesResponse>","errorExample":""}]',
            'title' => '资源打上标签',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'UntagResources' => [
            'summary' => '调用UntagResources接口解绑资源的标签。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值：'."\n"
                            ."\n"
                            .'- user：RAM用户。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否全部删除，只针对TagKey.N为空时有效。 取值范围： true  false True False  默认是 false',
                        'description' => '是否解绑资源上全部的标签。取值：'."\n"
                            .'- true：解绑全部标签。'."\n"
                            .'- false（默认值）：不解绑全部标签。'."\n"
                            ."\n"
                            .'> 当请求中未设置TagKey时，该参数才有效。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ResourcePrincipalName',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源名,最多50个子项',
                        'description' => '资源名称。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。 当资源类型为user时，资源名称为RAM用户名。'."\n"
                            .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源名称。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。 当资源类型为user时，资源名称为RAM用户名。'."\n"
                                .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test@example.onaliyun.com',
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。 当资源类型为user时，资源ID为RAM用户ID。'."\n"
                            ."\n"
                            .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。 当资源类型为user时，资源ID为RAM用户ID。'."\n"
                                ."\n"
                                .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '20732900249392****',
                        ],
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'UntagResources',
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签键，最多20个子项',
                        'description' => '资源的标签键。'."\n"
                            ."\n"
                            .'N的取值范围：1~20，N必须连续。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源的标签键。'."\n"
                                ."\n"
                                .'N的取值范围：1~20，N必须连续。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'operator',
                        ],
                        'required' => false,
                        'maxItems' => 21,
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
                                'example' => '6AC79B74-9A78-58E2-818B-1D38EDC64D67',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6AC79B74-9A78-58E2-818B-1D38EDC64D67\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\n    <RequestId>6AC79B74-9A78-58E2-818B-1D38EDC64D67</RequestId>\\n</UntagResourcesResponse>","errorExample":""}]',
            'title' => '解绑资源的标签',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'ListTagResources' => [
            'summary' => '调用ListTagResources查询资源与标签的关系。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ResourcePrincipalName',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源名,最多50个子项',
                        'description' => '资源名称。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。 当资源类型为user时，资源名称为RAM用户名。'."\n"
                            .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源名称。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。 当资源类型为user时，资源名称为RAM用户名。'."\n"
                                .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'test@example.onaliyun.com',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下一个查询开始Token',
                        'description' => '当请求的返回结果被截断时，可以使用NextToken获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'caeba0bbb2be03f84eb48b699f0a4883',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到PageSize限制被截断时，返回参数IsTruncated将等于true。'."\n"
                            .'取值范围：1~100。默认值：100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型',
                        'description' => '资源类型。取值：'."\n"
                            .'- user：RAM用户。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '资源ID,最多 50个子项',
                        'description' => '资源ID。'."\n"
                            ."\n"
                            .'N的取值范围为：1~50。 当资源类型为user时，资源ID为RAM用户ID。'."\n"
                            .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                        'type' => 'array',
                        'items' => [
                            'description' => '资源ID。'."\n"
                                ."\n"
                                .'N的取值范围为：1~50。 当资源类型为user时，资源ID为RAM用户ID。'."\n"
                                .'> 必须指定 ResourceId、ResourcePrincipalName两个参数中的一个参数，但不能同时指定。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '20732900249392****',
                        ],
                        'required' => false,
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '标签列表，最多包含20个子项',
                        'description' => '标签列表，最多包含20个子项。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表，最多包含20个子项。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'title' => '标签键',
                                    'description' => '标签键。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'operator',
                                ],
                                'Value' => [
                                    'title' => '标签值',
                                    'description' => '标签值。'."\n"
                                        ."\n"
                                        .'N的取值范围：1~20，N必须连续。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'alice',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 21,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'title' => '下一个查询开始Token，NextToken为空说明没有下一个',
                                'description' => '当IsTruncated为true时才有此参数，当返回true时，需要继续调用此接口，使用NextToken获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'caeba0bbb2be03f84eb48b699f0a****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4BE83135-0B08-467C-B3A2-27B312FD0F57',
                            ],
                            'TagResources' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagResource' => [
                                        'title' => '资源列表',
                                        'description' => '资源绑定的标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '资源绑定的标签列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ResourceType' => [
                                                    'title' => '资源类型',
                                                    'description' => '资源类型。取值：'."\n"
                                                        .'- user：RAM用户。',
                                                    'type' => 'string',
                                                    'example' => 'user',
                                                ],
                                                'TagValue' => [
                                                    'title' => '标签值',
                                                    'description' => '标签值。',
                                                    'type' => 'string',
                                                    'example' => 'alice',
                                                ],
                                                'ResourceId' => [
                                                    'title' => '资源ID',
                                                    'description' => '资源ID。',
                                                    'type' => 'string',
                                                    'example' => '20732900249392****',
                                                ],
                                                'TagKey' => [
                                                    'title' => '标签键',
                                                    'description' => '标签键。',
                                                    'type' => 'string',
                                                    'example' => 'operator',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'title' => '请求返回结果是否被截断',
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0bbb2be03f84eb48b699f0a****\\",\\n  \\"RequestId\\": \\"4BE83135-0B08-467C-B3A2-27B312FD0F57\\",\\n  \\"TagResources\\": {\\n    \\"TagResource\\": [\\n      {\\n        \\"ResourceType\\": \\"user\\",\\n        \\"TagValue\\": \\"alice\\",\\n        \\"ResourceId\\": \\"20732900249392****\\",\\n        \\"TagKey\\": \\"operator\\"\\n      }\\n    ]\\n  },\\n  \\"IsTruncated\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n    <NextToken>caeba0bbb2be03f84eb48b699f0a4883</NextToken>\\n    <RequestId>4BE83135-0B08-467C-B3A2-27B312FD0F57</RequestId>\\n    <TagResources>\\n        <ResourceType>user</ResourceType>\\n        <ResourceId>20732900249392****</ResourceId>\\n        <TagKey>operator</TagKey>\\n        <TagValue>alice</TagValue>\\n    </TagResources>\\n    <TagResources>\\n        <ResourceType>user</ResourceType>\\n        <ResourceId>20732900249392****</ResourceId>\\n        <TagKey>owner</TagKey>\\n        <TagValue>bob</TagValue>\\n    </TagResources>\\n    <IsTruncated>true</IsTruncated>\\n</ListTagResourcesResponse>","errorExample":""}]',
            'title' => '查询资源与标签的关系',
            'description' => '### 使用说明'."\n"
                .'请求中至少指定以下任一参数，以确定查询对象：'."\n"
                .'- `ResourceId.N`'."\n"
                .'- `Tag.N.Key`'."\n"
                .'- `Tag.N.Key`和`Tag.N.Value`',
        ],
        'CreateGroup' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组显示名称。'."\n"
                            ."\n"
                            .'最大长度24个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Dev-Team',
                    ],
                ],
                [
                    'name' => 'Comments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注。'."\n"
                            ."\n"
                            .'最大长度128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '开发团队',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。该参数必须指定。'."\n"
                            ."\n"
                            .'最大长度64个字符，可包含英文字母、数字、英文句点（.）、下划线（_）和短划线（-）。'."\n"
                            ."\n",
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
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '用户组显示名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => '740317625433843****',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-19T16:15:17Z',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '开发团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-19T16:15:17Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3C38192B-7BF8-45DA-8F0A-E670EA51426C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"DisplayName\\": \\"Dev-Team\\",\\n    \\"GroupId\\": \\"740317625433843****\\",\\n    \\"UpdateDate\\": \\"2020-10-19T16:15:17Z\\",\\n    \\"GroupName\\": \\"Dev-Team\\",\\n    \\"Comments\\": \\"开发团队\\",\\n    \\"CreateDate\\": \\"2020-10-19T16:15:17Z\\"\\n  },\\n  \\"RequestId\\": \\"3C38192B-7BF8-45DA-8F0A-E670EA51426C\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateGroupResponse>\\r\\n\\t<Group>\\r\\n\\t\\t<GroupName>Dev-Team</GroupName>\\r\\n\\t\\t<UpdateDate>2020-10-19T16:15:17Z</UpdateDate>\\r\\n        <GroupId>740317625433843****</GroupId>\\r\\n\\t\\t<Comments>开发团队</Comments>\\r\\n\\t\\t<DisplayName>Dev-Team</DisplayName>\\r\\n\\t\\t<CreateDate>2020-10-19T16:15:17Z</CreateDate>\\r\\n\\t</Group>\\r\\n\\t<RequestId>3C38192B-7BF8-45DA-8F0A-E670EA51426C</RequestId>\\r\\n</CreateGroupResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '创建用户组',
            'summary' => '创建一个用户组。',
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
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '用户组显示名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => '740317625433843****',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-19T16:15:17Z',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'Dev-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '开发团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-19T16:15:17Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '86ECEC3C-7262-4C3C-94B4-A98F7CC1F060',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"DisplayName\\": \\"Dev-Team\\",\\n    \\"GroupId\\": \\"740317625433843****\\",\\n    \\"UpdateDate\\": \\"2020-10-19T16:15:17Z\\",\\n    \\"GroupName\\": \\"Dev-Team\\",\\n    \\"Comments\\": \\"开发团队\\",\\n    \\"CreateDate\\": \\"2020-10-19T16:15:17Z\\"\\n  },\\n  \\"RequestId\\": \\"86ECEC3C-7262-4C3C-94B4-A98F7CC1F060\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetGroupResponse>\\r\\n\\t<Group>\\r\\n\\t\\t<GroupName>Dev-Team</GroupName>\\r\\n\\t\\t<UpdateDate>2020-10-19T16:15:17Z</UpdateDate>\\r\\n\\t\\t<Comments>开发团队</Comments>\\r\\n        <GroupId>740317625433843****</GroupId>\\r\\n\\t\\t<DisplayName>Dev-Team</DisplayName>\\r\\n\\t\\t<CreateDate>2020-10-19T16:15:17Z</CreateDate>\\r\\n\\t</Group>\\r\\n\\t<RequestId>86ECEC3C-7262-4C3C-94B4-A98F7CC1F060</RequestId>\\r\\n</GetGroupResponse>","errorExample":""}]',
            'title' => '查询指定用户组信息',
            'summary' => '查询指定的用户组信息。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'NewComments',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的备注。'."\n"
                            ."\n"
                            .'最大长度128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试团队',
                    ],
                ],
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的用户组显示名称。'."\n"
                            ."\n"
                            .'最大长度24个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test-Team',
                    ],
                ],
                [
                    'name' => 'NewGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的用户组名称。'."\n"
                            ."\n"
                            .'最大长度64个字符，可包含英文字母、数字、英文句点（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Test-Team',
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
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'description' => '用户组信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '用户组显示名称。',
                                        'type' => 'string',
                                        'example' => 'Test-Team',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => '740317625433843****',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-20T03:44:27Z',
                                    ],
                                    'GroupName' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'Test-Team',
                                    ],
                                    'Comments' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '测试团队',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-19T16:15:17Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CDA656E3-3CE9-4A03-A8A3-B42A0C3C3287',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"DisplayName\\": \\"Test-Team\\",\\n    \\"GroupId\\": \\"740317625433843****\\",\\n    \\"UpdateDate\\": \\"2020-10-20T03:44:27Z\\",\\n    \\"GroupName\\": \\"Test-Team\\",\\n    \\"Comments\\": \\"测试团队\\",\\n    \\"CreateDate\\": \\"2020-10-19T16:15:17Z\\"\\n  },\\n  \\"RequestId\\": \\"CDA656E3-3CE9-4A03-A8A3-B42A0C3C3287\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateGroupResponse>\\r\\n\\t<Group>\\r\\n\\t\\t<GroupName>Test-Team</GroupName>\\r\\n\\t\\t<UpdateDate>2020-10-20T03:44:27Z</UpdateDate>\\r\\n\\t\\t<Comments>测试团队</Comments>\\r\\n        <GroupId>740317625433843****</GroupId>\\r\\n\\t\\t<DisplayName>Test-Team</DisplayName>\\r\\n\\t\\t<CreateDate>2020-10-19T16:15:17Z</CreateDate>\\r\\n\\t</Group>\\r\\n\\t<RequestId>CDA656E3-3CE9-4A03-A8A3-B42A0C3C3287</RequestId>\\r\\n</UpdateGroupResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '修改指定用户组的信息',
            'summary' => '修改指定用户组的基础信息。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupResponse>\\r\\n      <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteGroupResponse>","errorExample":""}]',
            'title' => '删除指定的用户组',
            'summary' => '删除一个指定的用户组。',
            'description' => '删除用户组前，请确保用户组没有绑定任何权限策略且用户组内没有RAM用户。',
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
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
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
                            .' 取值范围：1~100。默认值：100。',
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
                                                'DisplayName' => [
                                                    'description' => '用户组显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Dev-Team',
                                                ],
                                                'GroupId' => [
                                                    'description' => '用户组ID。',
                                                    'type' => 'string',
                                                    'example' => '740317625433843****',
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-19T12:33:18Z',
                                                ],
                                                'GroupName' => [
                                                    'description' => '用户组名称。',
                                                    'type' => 'string',
                                                    'example' => 'dev-team',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '开发团队',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-19T12:33:18Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此参数，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容 。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"065527AA-2F2E-AD7C-7484-F2626CFE4934\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"DisplayName\\": \\"Dev-Team\\",\\n        \\"GroupId\\": \\"740317625433843****\\",\\n        \\"UpdateDate\\": \\"2020-10-19T12:33:18Z\\",\\n        \\"GroupName\\": \\"dev-team\\",\\n        \\"Comments\\": \\"开发团队\\",\\n        \\"CreateDate\\": \\"2020-10-19T12:33:18Z\\"\\n      }\\n    ]\\n  },\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListGroupsResponse>\\r\\n\\t<Groups>\\r\\n\\t\\t<Group>\\r\\n\\t\\t\\t<Comments>开发团队</Comments>\\r\\n\\t\\t\\t<CreateDate>2020-10-19T12:33:18Z</CreateDate>\\r\\n\\t\\t\\t<DisplayName>Dev-Team</DisplayName>\\r\\n\\t\\t\\t<GroupName>Dev-Team</GroupName>\\r\\n            <GroupId>740317625433843****</GroupId>\\r\\n\\t\\t\\t<UpdateDate>2020-10-19T12:33:18Z</UpdateDate>\\r\\n\\t\\t</Group>\\r\\n\\t</Groups>\\r\\n\\t<IsTruncated>true</IsTruncated>\\r\\n\\t<Marker>EXAMPLE</Marker>\\r\\n\\t<RequestId>065527AA-2F2E-AD7C-7484-F2626CFE4934</RequestId>\\r\\n</ListGroupsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询用户组列表',
            'summary' => '列出用户组的信息列表。',
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
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
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
                        'example' => 'Test-Team',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<AddUserToGroupResponse>\\r\\n      <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</AddUserToGroupResponse>","errorExample":""}]',
            'title' => '将RAM用户添加到指定的用户组',
            'summary' => '将指定的RAM用户添加到指定的用户组。',
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
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'alice@example.onaliyun.com',
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
                        'example' => 'Test-Team',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveUserFromGroupResponse>\\r\\n        <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</RemoveUserFromGroupResponse>","errorExample":""}]',
            'title' => '将RAM用户从用户组中移除',
            'summary' => '将指定RAM用户从指定用户组中移除。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUsersForGroup' => [
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
            'parameters' => [
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'Test-Team',
                    ],
                ],
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`Marker`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxItems`限制，数据会被截断，只返回`MaxItems`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`Marker`。您可以使用上一次返回的`Marker`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到`IsTruncated`为`false`时，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：100。',
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
                                'example' => '789FF581-B3C8-43A8-9115-54304B46D05C',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                            'Users' => [
                                'type' => 'object',
                                'properties' => [
                                    'User' => [
                                        'description' => 'RAM用户信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'RAM用户信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserPrincipalName' => [
                                                    'description' => 'RAM用户的登录名称。',
                                                    'type' => 'string',
                                                    'example' => 'test@example.onaliyun.com',
                                                ],
                                                'DisplayName' => [
                                                    'description' => 'RAM用户的显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'test',
                                                ],
                                                'UserId' => [
                                                    'description' => 'RAM用户ID。',
                                                    'type' => 'string',
                                                    'example' => '20732900249392****',
                                                ],
                                                'JoinDate' => [
                                                    'description' => 'RAM用户的加入时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-20T06:57:00Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"789FF581-B3C8-43A8-9115-54304B46D05C\\",\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\",\\n  \\"Users\\": {\\n    \\"User\\": [\\n      {\\n        \\"UserPrincipalName\\": \\"test@example.onaliyun.com\\",\\n        \\"DisplayName\\": \\"test\\",\\n        \\"UserId\\": \\"20732900249392****\\",\\n        \\"JoinDate\\": \\"2020-10-20T06:57:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListUsersForGroupResponse>\\r\\n\\t<RequestId>789FF581-B3C8-43A8-9115-54304B46D05C</RequestId>\\r\\n    <IsTruncated>true</IsTruncated>\\r\\n    <Marker>EXAMPLE</Marker>\\r\\n\\t<Users>\\r\\n\\t\\t<User>\\r\\n\\t\\t\\t<UserId>20732900249392****</UserId>\\r\\n\\t\\t\\t<DisplayName>test</DisplayName>\\r\\n\\t\\t\\t<UserPrincipalName>test@example.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t\\t<JoinDate>2020-10-20T06:57:00Z</JoinDate>\\r\\n\\t\\t</User>\\r\\n\\t\\t<User>\\r\\n\\t\\t\\t<UserId>21096280076542****</UserId>\\r\\n\\t\\t\\t<DisplayName>alice</DisplayName>\\r\\n\\t\\t\\t<UserPrincipalName>alice@example.onaliyun.com</UserPrincipalName>\\r\\n\\t\\t\\t<JoinDate>2020-10-20T07:12:42Z</JoinDate>\\r\\n\\t\\t</User>\\r\\n\\t</Users>\\r\\n</ListUsersForGroupResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询用户组内的RAM用户列表',
            'summary' => '查询指定用户组内的RAM用户列表。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserPrincipalName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户的登录名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test@example.onaliyun.com',
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
                                'example' => '7158A935-FB5E-49A7-8E52-FDA5B2B67247',
                            ],
                            'Groups' => [
                                'type' => 'object',
                                'properties' => [
                                    'Group' => [
                                        'description' => '用户组信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '用户组显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'Test-Team',
                                                ],
                                                'GroupName' => [
                                                    'description' => '用户组名称。',
                                                    'type' => 'string',
                                                    'example' => 'Test-Team',
                                                ],
                                                'GroupId' => [
                                                    'description' => '用户组ID。',
                                                    'type' => 'string',
                                                    'example' => '740317625433843****',
                                                ],
                                                'Comments' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '测试团队',
                                                ],
                                                'JoinDate' => [
                                                    'description' => 'RAM用户加入时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-20T06:57:00Z',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7158A935-FB5E-49A7-8E52-FDA5B2B67247\\",\\n  \\"Groups\\": {\\n    \\"Group\\": [\\n      {\\n        \\"DisplayName\\": \\"Test-Team\\",\\n        \\"GroupName\\": \\"Test-Team\\",\\n        \\"GroupId\\": \\"740317625433843****\\",\\n        \\"Comments\\": \\"测试团队\\",\\n        \\"JoinDate\\": \\"2020-10-20T06:57:00Z\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListGroupsForUserResponse>\\r\\n\\t<RequestId>7158A935-FB5E-49A7-8E52-FDA5B2B67247</RequestId>\\r\\n\\t<Groups>\\r\\n\\t\\t<Group>\\r\\n\\t\\t\\t<GroupName>Test-Team</GroupName>\\r\\n\\t\\t\\t<Comments>测试团队</Comments>\\r\\n            <GroupId>740317625433843****</GroupId>\\r\\n\\t\\t\\t<DisplayName>Test-Team</DisplayName>\\r\\n\\t\\t\\t<JoinDate>2020-10-20T06:57:00Z</JoinDate>\\r\\n\\t\\t</Group>\\r\\n\\t</Groups>\\r\\n</ListGroupsForUserResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询RAM用户加入的用户组列表',
            'summary' => '查询指定的RAM用户加入的组的列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetUserSsoSettings' => [
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
            'parameters' => [
                [
                    'name' => 'MetadataDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '元数据文档。经过Base64编码。'."\n"
                            ."\n"
                            .'由支持SAML2.0协议的身份提供商提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PD94bWwgdmVy****',
                    ],
                ],
                [
                    'name' => 'SsoEnabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启RAM用户的SSO功能。取值：'."\n"
                            ."\n"
                            .'- true：开启。'."\n"
                            .'- false（默认值）：关闭。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AuxiliaryDomain',
                    'in' => 'query',
                    'schema' => [
                        'description' => '辅助域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UserSsoSettings' => [
                                'description' => '用户SSO配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AuxiliaryDomain' => [
                                        'description' => '辅助域名。',
                                        'type' => 'string',
                                        'example' => 'example.com',
                                    ],
                                    'MetadataDocument' => [
                                        'description' => '元数据文档。经过Base64编码。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVy****',
                                    ],
                                    'SsoEnabled' => [
                                        'description' => '是否开启用户SSO。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '87F2E3F6-28A0-43F3-A77F-F7760E62F61E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserSsoSettings\\": {\\n    \\"AuxiliaryDomain\\": \\"example.com\\",\\n    \\"MetadataDocument\\": \\"PD94bWwgdmVy****\\",\\n    \\"SsoEnabled\\": true\\n  },\\n  \\"RequestId\\": \\"87F2E3F6-28A0-43F3-A77F-F7760E62F61E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetUserSsoSettingsResponse>\\r\\n\\t<UserSsoSettings>\\r\\n\\t\\t<MetadataDocument>PD94bWwgdmVy****</MetadataDocument>\\r\\n\\t\\t<SsoEnabled>true</SsoEnabled>\\r\\n\\t\\t<AuxiliaryDomain>example.com</AuxiliaryDomain>\\r\\n\\t</UserSsoSettings>\\r\\n\\t<RequestId>87F2E3F6-28A0-43F3-A77F-F7760E62F61E</RequestId>\\r\\n</SetUserSsoSettingsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '设置用户SSO身份提供商信息',
            'summary' => '设置用户SSO的身份提供商信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetUserSsoSettings' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'UserSsoSettings' => [
                                'description' => '用户SSO配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AuxiliaryDomain' => [
                                        'description' => '辅助域名。',
                                        'type' => 'string',
                                        'example' => 'example.com',
                                    ],
                                    'MetadataDocument' => [
                                        'description' => '元数据文档。经过Base64编码。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVy****',
                                    ],
                                    'SsoEnabled' => [
                                        'description' => '是否开启用户SSO。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '69FC3E5E-D3D9-434B-90CA-BBA8E0551A47',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserSsoSettings\\": {\\n    \\"AuxiliaryDomain\\": \\"example.com\\",\\n    \\"MetadataDocument\\": \\"PD94bWwgdmVy****\\",\\n    \\"SsoEnabled\\": false\\n  },\\n  \\"RequestId\\": \\"69FC3E5E-D3D9-434B-90CA-BBA8E0551A47\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetUserSsoSettingsResponse>\\r\\n\\t<UserSsoSettings>\\r\\n\\t\\t<MetadataDocument>PD94bWwgdmVy****</MetadataDocument>\\r\\n\\t\\t<SsoEnabled>false</SsoEnabled>\\r\\n\\t\\t<AuxiliaryDomain>example.com</AuxiliaryDomain>\\r\\n\\t</UserSsoSettings>\\r\\n\\t<RequestId>69FC3E5E-D3D9-434B-90CA-BBA8E0551A47</RequestId>\\r\\n</GetUserSsoSettingsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询用户SSO身份提供商信息',
            'summary' => '查询用户SSO身份提供商配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateSAMLProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'SAMLProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份提供商名称。'."\n"
                            ."\n"
                            .'最大长度128个字符，允许英文字母、数字、特殊字符`.-_`，不能以特殊字符`.-_`开头或结尾。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-provider',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '备注。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a provider.',
                    ],
                ],
                [
                    'name' => 'EncodedSAMLMetadataDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '元数据文档。经过Base64编码。'."\n"
                            ."\n"
                            .'由支持SAML2.0协议的身份提供商提供。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'PD94bWwgdmVy****',
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
                                'example' => '请求ID。',
                            ],
                            'SAMLProvider' => [
                                'description' => '身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '更新时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:51:20Z',
                                    ],
                                    'Description' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a provider.',
                                    ],
                                    'SAMLProviderName' => [
                                        'description' => '身份提供商名称。',
                                        'type' => 'string',
                                        'example' => 'test-provider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:37:05Z',
                                    ],
                                    'Arn' => [
                                        'description' => '身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:saml-provider/test-provider',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"请求ID。\\",\\n  \\"SAMLProvider\\": {\\n    \\"UpdateDate\\": \\"2020-10-22T02:51:20Z\\",\\n    \\"Description\\": \\"This is a provider.\\",\\n    \\"SAMLProviderName\\": \\"test-provider\\",\\n    \\"CreateDate\\": \\"2020-10-22T02:37:05Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:saml-provider/test-provider\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSAMLProviderResponse>\\r\\n      <RequestId>E5EDDFD2-3654-4F9F-9780-4AE7D81823EF</RequestId>\\r\\n      <SAMLProvider>\\r\\n            <UpdateDate>2020-10-22T02:51:20Z</UpdateDate>\\r\\n            <SAMLProviderName>test-provider</SAMLProviderName>\\r\\n            <Description>This is a provider.</Description>\\r\\n            <Arn>acs:ram::177242285274****:saml-provider/test-provider</Arn>\\r\\n            <CreateDate>2020-10-22T02:37:05Z</CreateDate>\\r\\n      </SAMLProvider>\\r\\n</CreateSAMLProviderResponse>","errorExample":""}]',
            'title' => '创建角色SSO身份提供商',
            'summary' => '创建一个角色SSO的身份提供商配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteSAMLProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'SAMLProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要删除的身份提供商名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-provider',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSAMLProviderResponse>\\r\\n        <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteSAMLProviderResponse>","errorExample":""}]',
            'title' => '删除指定的角色SSO身份提供商',
            'summary' => '删除一个角色SSO的身份提供商配置。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateSAMLProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'SAMLProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要修改的身份提供商名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-provider',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的备注。'."\n"
                            ."\n"
                            .'> `NewDescription`与`NewEncodedSAMLMetadataDocument`参数必须至少填写一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a new provider.',
                    ],
                ],
                [
                    'name' => 'NewEncodedSAMLMetadataDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的元数据文档。'."\n"
                            .'> `NewDescription`与`NewEncodedSAMLMetadataDocument`参数必须至少填写一个。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PD94bWwgdmVy****',
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E5EDDFD2-3654-4F9F-9780-4AE7D81823EF',
                            ],
                            'SAMLProvider' => [
                                'description' => '身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '身份提供商的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:51:20Z',
                                    ],
                                    'Description' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a new provider.',
                                    ],
                                    'SAMLProviderName' => [
                                        'description' => '身份提供商名称。',
                                        'type' => 'string',
                                        'example' => 'test-provider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '身份提供商的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:37:05Z',
                                    ],
                                    'Arn' => [
                                        'description' => '身份提供商ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:saml-provider/test-provider',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E5EDDFD2-3654-4F9F-9780-4AE7D81823EF\\",\\n  \\"SAMLProvider\\": {\\n    \\"UpdateDate\\": \\"2020-10-22T02:51:20Z\\",\\n    \\"Description\\": \\"This is a new provider.\\",\\n    \\"SAMLProviderName\\": \\"test-provider\\",\\n    \\"CreateDate\\": \\"2020-10-22T02:37:05Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:saml-provider/test-provider\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateSAMLProviderResponse>\\r\\n        <RequestId>E5EDDFD2-3654-4F9F-9780-4AE7D81823EF</RequestId>\\r\\n        <SAMLProvider>\\r\\n                <UpdateDate>2020-10-22T02:51:20Z</UpdateDate>\\r\\n                <SAMLProviderName>test-provider</SAMLProviderName>\\r\\n                <Description>This is a new provider.</Description>\\r\\n                <Arn>acs:ram::177242285274****:saml-provider/test-provider</Arn>\\r\\n                <CreateDate>2020-10-22T02:37:05Z</CreateDate>\\r\\n        </SAMLProvider>\\r\\n</UpdateSAMLProviderResponse>","errorExample":""}]',
            'title' => '修改角色SSO身份提供商信息',
            'summary' => '修改指定的角色SSO身份提供商信息。',
            'description' => '本文将提供一个示例，为`test-provider`身份提供商修改备注信息为`This is a new provider.`。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSAMLProvider' => [
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
            'parameters' => [
                [
                    'name' => 'SAMLProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份提供商名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-provider',
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
                                'example' => 'BAADB995-0C7A-476D-B293-7E94568EEDFB',
                            ],
                            'SAMLProvider' => [
                                'description' => '身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => 'This is a provider.',
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:51:20Z',
                                    ],
                                    'SAMLProviderName' => [
                                        'description' => '身份提供商名称。',
                                        'type' => 'string',
                                        'example' => 'test-provider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-22T02:37:05Z',
                                    ],
                                    'EncodedSAMLMetadataDocument' => [
                                        'description' => '元数据文档。经过Base64编码。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVy****',
                                    ],
                                    'Arn' => [
                                        'description' => '身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:saml-provider/test-provider',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BAADB995-0C7A-476D-B293-7E94568EEDFB\\",\\n  \\"SAMLProvider\\": {\\n    \\"Description\\": \\"This is a provider.\\",\\n    \\"UpdateDate\\": \\"2020-10-22T02:51:20Z\\",\\n    \\"SAMLProviderName\\": \\"test-provider\\",\\n    \\"CreateDate\\": \\"2020-10-22T02:37:05Z\\",\\n    \\"EncodedSAMLMetadataDocument\\": \\"PD94bWwgdmVy****\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:saml-provider/test-provider\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetSAMLProviderResponse>\\r\\n\\t<RequestId>E5EDDFD2-3654-4F9F-9780-4AE7D81823EF</RequestId>\\r\\n\\t<SAMLProvider>\\r\\n\\t\\t<UpdateDate>2020-10-22T02:51:20Z</UpdateDate>\\r\\n\\t\\t<SAMLProviderName>test-provider</SAMLProviderName>\\r\\n\\t\\t<Description>This is a provider.</Description>\\r\\n\\t\\t<EncodedSAMLMetadataDocument>PD94bWwgdmVy****</EncodedSAMLMetadataDocument>\\r\\n\\t\\t<Arn>acs:ram::177242285274****:saml-provider/test-provider</Arn>\\r\\n\\t\\t<CreateDate>2020-10-22T02:37:05Z</CreateDate>\\r\\n\\t</SAMLProvider>\\r\\n</GetSAMLProviderResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询角色SSO身份提供商信息',
            'summary' => '查询指定的角色SSO身份提供商信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSAMLProviders' => [
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
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于`true`。 '."\n"
                            ."\n"
                            .'取值范围：1~100。默认值：100。',
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
                                'example' => '2D8B70D3-E194-41C9-93C5-F6A10D716D24',
                            ],
                            'SAMLProviders' => [
                                'type' => 'object',
                                'properties' => [
                                    'SAMLProvider' => [
                                        'description' => '身份提供商信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'UpdateDate' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-22T06:26:15Z',
                                                ],
                                                'Description' => [
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => 'This is a provider.',
                                                ],
                                                'SAMLProviderName' => [
                                                    'description' => '身份提供商名称。',
                                                    'type' => 'string',
                                                    'example' => 'test-provider',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-22T06:26:15Z',
                                                ],
                                                'Arn' => [
                                                    'description' => '身份提供商的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::177242285274****:saml-provider/test-provider',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此参数，当返回`true`时，需要继续调用此接口，并且使用`Marker`获取截断后的内容 。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D8B70D3-E194-41C9-93C5-F6A10D716D24\\",\\n  \\"SAMLProviders\\": {\\n    \\"SAMLProvider\\": [\\n      {\\n        \\"UpdateDate\\": \\"2020-10-22T06:26:15Z\\",\\n        \\"Description\\": \\"This is a provider.\\",\\n        \\"SAMLProviderName\\": \\"test-provider\\",\\n        \\"CreateDate\\": \\"2020-10-22T06:26:15Z\\",\\n        \\"Arn\\": \\"acs:ram::177242285274****:saml-provider/test-provider\\"\\n      }\\n    ]\\n  },\\n  \\"IsTruncated\\": true,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListSAMLProvidersResponse>\\r\\n\\t<RequestId>2D8B70D3-E194-41C9-93C5-F6A10D716D24</RequestId>\\r\\n\\t<SAMLProviders>\\r\\n\\t\\t<SAMLProvider>\\r\\n\\t\\t\\t<UpdateDate>2020-10-22T06:26:15Z</UpdateDate>\\r\\n\\t\\t\\t<SAMLProviderName>test-provider</SAMLProviderName>\\r\\n\\t\\t\\t<Description>This is a provider.</Description>\\r\\n\\t\\t\\t<Arn>acs:ram::177242285274****:saml-provider/test-provider</Arn>\\r\\n\\t\\t\\t<CreateDate>2020-10-22T06:26:15Z</CreateDate>\\r\\n\\t\\t</SAMLProvider>\\r\\n\\t</SAMLProviders>\\r\\n\\t<IsTruncated>true</IsTruncated>\\r\\n\\t<Marker>EXAMPLE</Marker>\\r\\n</ListSAMLProvidersResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询角色SSO身份提供商列表',
            'summary' => '查询所有角色SSO身份提供商信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字、特殊字符`.-_`，不能以特殊字符`.-_`开头或结尾。'."\n"
                            ."\n"
                            .'长度：最大128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'IssuerUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '颁发者URL。由外部IdP提供。同一个阿里云账号下必须唯一。'."\n"
                            ."\n"
                            .'格式：该URL必须以`https`开头，符合标准URL格式，不允许带有query参数（以`?`标识）、fragment片段（以`#`标识）和登录信息（以`@`标识）。'."\n"
                            ."\n"
                            .'长度：最大255个字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'https://xxxxxx.example.com',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的描述。'."\n"
                            ."\n"
                            .'长度：最大256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is an OIDC Provider.',
                    ],
                ],
                [
                    'name' => 'ClientIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。由外部IdP提供。多个之间用半角逗号（,）分隔。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字、特殊字符`.-_:/`，不能以特殊字符`.-_:/`开头。'."\n"
                            ."\n"
                            .'长度：单个客户端ID最大64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '498469743454717****',
                    ],
                ],
                [
                    'name' => 'Fingerprints',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS CA证书的验证指纹。由外部IdP提供。多个之间用半角逗号（,）分隔。'."\n"
                            ."\n\n"
                            .'格式：允许英文字母和数字。'."\n"
                            ."\n"
                            .'长度：单个验证指纹最大40个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                    ],
                ],
                [
                    'name' => 'IssuanceLimitTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                            .'单位：小时。取值范围：1~168。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '6',
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
                                'example' => '64B11B41-636D-51E3-A39B-C8703CD2218C',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is an OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => '颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。',
                                        'type' => 'string',
                                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。',
                                        'type' => 'string',
                                        'example' => '498469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"64B11B41-636D-51E3-A39B-C8703CD2218C\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Description\\": \\"This is an OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"498469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636613763000\\",\\n    \\"IssuanceLimitTime\\": 6\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateOIDCProviderResponse>\\n    <RequestId>64B11B41-636D-51E3-A39B-C8703CD2218C</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-11T06:56:03Z</UpdateDate>\\n        <Description>This is an OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636613763000</GmtModified>\\n        <IssuanceLimitTime>6</IssuanceLimitTime>\\n    </OIDCProvider>\\n</CreateOIDCProviderResponse>","errorExample":""}]',
            'title' => '创建OIDC身份供应商',
            'summary' => '调用CreateOIDCProvider创建OIDC身份提供商，配置阿里云与外部身份提供商（IdP）的信任关系。',
            'description' => '### 前提条件'."\n"
                .'调用前，请提前从外部IdP（例如：Google G Suite或Okta等）获取颁发者URL、HTTPS CA证书的验证指纹和客户端ID等信息。'."\n"
                ."\n"
                .'### 使用限制'."\n"
                ."\n"
                .'- 一个阿里云账号中可创建的OIDC身份提供商最大个数：100个。'."\n"
                .'- 一个OIDC身份提供商中的客户端ID最大个数：20个。'."\n"
                .'- 一个OIDC身份提供商中的验证指纹最大个数：5个。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                ."\n"
                .'本文将提供一个示例，创建一个名为`TestOIDCProvider`的身份提供商，配置外部IdP与阿里云的信任关系。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'GetOIDCProvider' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
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
                                'example' => 'E5E1A300-279D-5FBD-A8CF-F4EDC20C4896',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => 'OIDC身份提供商的颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '498469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E5E1A300-279D-5FBD-A8CF-F4EDC20C4896\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"498469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 12\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetOIDCProviderResponse>\\n    <RequestId>E5E1A300-279D-5FBD-A8CF-F4EDC20C4896</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</GetOIDCProviderResponse>","errorExample":""}]',
            'title' => '查询OIDC身份提供商信息',
            'summary' => '调用GetOIDCProvider查询OIDC身份提供商信息。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，查询名为`TestOIDCProvider`的OIDC身份提供商信息。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'UpdateOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'ClientIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字、特殊字符`.-_:/`，不能以特殊字符`.-_:/`开头。'."\n"
                            ."\n"
                            .'长度：单个客户端ID最大64个字符。'."\n"
                            ."\n"
                            .'> 如果指定该参数，会将OIDC身份提供商的客户端ID全部替换。如果您只想新增或删除其中一个客户端ID，请使用AddClientIdToOIDCProvider或RemoveClientIdFromOIDCProvider。更多信息，请参见[AddClientIdToOIDCProvider](~~332057~~)或[RemoveClientIdFromOIDCProvider](~~332058~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '498469743454717****',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的描述。'."\n"
                            ."\n"
                            .'长度：最大256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a new OIDC Provider.',
                    ],
                ],
                [
                    'name' => 'IssuanceLimitTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                            .'单位：小时。取值范围：1~168。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '6',
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
                                'example' => 'E4C4D1BD-2558-5BD1-8C26-A5D7FB174A55',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => '颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '498469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '6',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E4C4D1BD-2558-5BD1-8C26-A5D7FB174A55\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"498469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 6\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateOIDCProviderResponse>\\n    <RequestId>E4C4D1BD-2558-5BD1-8C26-A5D7FB174A55</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</UpdateOIDCProviderResponse>","errorExample":""}]',
            'title' => '修改OIDC身份提供商',
            'summary' => '调用UpdateOIDCProvider修改OIDC身份提供商的描述和客户端ID。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，将名为`TestOIDCProvider`的OIDC身份提供商的描述修改为`This is a new OIDC Provider.`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'ListOIDCProviders' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Marker',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`Marker`获取从当前截断位置之后的内容。 ',
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
                            .' '."\n"
                            .'取值范围：1~100。默认值：100。',
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
                                'example' => 'D2148337-B86A-57F0-8B31-EB7BE0125226',
                            ],
                            'OIDCProviders' => [
                                'type' => 'object',
                                'properties' => [
                                    'OIDCProvider' => [
                                        'description' => 'OIDC身份提供商信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'OIDC身份提供商信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UpdateDate' => [
                                                    'description' => '修改时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-11-12T08:38:29Z',
                                                ],
                                                'Description' => [
                                                    'description' => 'OIDC身份提供商的描述。',
                                                    'type' => 'string',
                                                    'example' => 'This is a new OIDC Provider.',
                                                ],
                                                'OIDCProviderName' => [
                                                    'description' => 'OIDC身份提供商的名称。',
                                                    'type' => 'string',
                                                    'example' => 'TestOIDCProvider',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间（UTC时间）。',
                                                    'type' => 'string',
                                                    'example' => '2021-11-11T06:56:03Z',
                                                ],
                                                'Arn' => [
                                                    'description' => 'OIDC身份提供商的ARN。',
                                                    'type' => 'string',
                                                    'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                                ],
                                                'IssuerUrl' => [
                                                    'description' => '颁发者URL。',
                                                    'type' => 'string',
                                                    'example' => 'https://xxxxxx.example.com',
                                                ],
                                                'Fingerprints' => [
                                                    'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                                    'type' => 'string',
                                                    'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                                ],
                                                'ClientIds' => [
                                                    'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                                    'type' => 'string',
                                                    'example' => '498469743454717****',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建时间（时间戳）。',
                                                    'type' => 'string',
                                                    'example' => '1636613763000',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '修改时间（时间戳）。',
                                                    'type' => 'string',
                                                    'example' => '1636706309000',
                                                ],
                                                'IssuanceLimitTime' => [
                                                    'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                                        .'单位：小时。取值范围：1~168。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '12',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Marker' => [
                                'description' => '当`IsTruncated`为`true`时才有此参数，当返回`true`时，需要继续调用该接口，并且使用`Marker`获取截断后的内容 。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D2148337-B86A-57F0-8B31-EB7BE0125226\\",\\n  \\"OIDCProviders\\": {\\n    \\"OIDCProvider\\": [\\n      {\\n        \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n        \\"Description\\": \\"This is a new OIDC Provider.\\",\\n        \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n        \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n        \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n        \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n        \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n        \\"ClientIds\\": \\"498469743454717****\\",\\n        \\"GmtCreate\\": \\"1636613763000\\",\\n        \\"GmtModified\\": \\"1636706309000\\",\\n        \\"IssuanceLimitTime\\": 12\\n      }\\n    ]\\n  },\\n  \\"IsTruncated\\": false,\\n  \\"Marker\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<ListOIDCProvidersResponse>\\n    <RequestId>D2148337-B86A-57F0-8B31-EB7BE0125226</RequestId>\\n    <OIDCProviders>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProviders>\\n    <IsTruncated>false</IsTruncated>\\n    <Marker>EXAMPLE</Marker>\\n</ListOIDCProvidersResponse>","errorExample":""}]',
            'title' => '查询OIDC身份提供商列表',
            'summary' => '调用ListOIDCProviders查询OIDC身份提供商列表。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，查询当前阿里云账号下的全部OIDC身份提供商列表。返回结果显示，只有一个名为`TestOIDCProvider`的OIDC身份提供商。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'DeleteOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteOIDCProviderResponse>\\r\\n\\t<RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteOIDCProviderResponse>\\t","errorExample":""}]',
            'title' => '删除OIDC身份提供商',
            'summary' => '调用DeleteOIDCProvider删除OIDC身份提供商。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，删除名为`TestOIDCProvider`的OIDC身份提供商。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'AddClientIdToOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的客户端ID。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字、特殊字符`.-_:/`，不能以特殊字符`.-_:/`开头。'."\n"
                            ."\n"
                            .'长度：最大64个字符。'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '598469743454717****',
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
                                'example' => 'B49B8FA7-87FC-5308-AE75-5EC9E36C360A',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => '颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '498469743454717****,598469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B49B8FA7-87FC-5308-AE75-5EC9E36C360A\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"498469743454717****,598469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 12\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddClientIdToOIDCProviderResponse>\\n    <RequestId>B49B8FA7-87FC-5308-AE75-5EC9E36C360A</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****,598469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</AddClientIdToOIDCProviderResponse>","errorExample":""}]',
            'title' => '为OIDC身份提供商添加指定客户端ID',
            'summary' => '调用AddClientIdToOIDCProvider为OIDC身份提供商添加指定客户端ID。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，为名为`TestOIDCProvider`的OIDC身份提供商添加客户端ID`598469743454717****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'RemoveClientIdFromOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的客户端ID。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字、特殊字符`.-_:/`，不能以特殊字符`.-_:/`开头。'."\n"
                            ."\n"
                            .'长度：最大64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '498469743454717****',
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
                                'example' => 'EC9A8F3B-AFA5-5C8F-999D-F97BC7CF1FC5',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => '颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '598469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EC9A8F3B-AFA5-5C8F-999D-F97BC7CF1FC5\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"598469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 12\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveClientIdFromOIDCProviderResponse>\\n    <RequestId>EC9A8F3B-AFA5-5C8F-999D-F97BC7CF1FC5</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>598469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</RemoveClientIdFromOIDCProviderResponse>","errorExample":""}]',
            'title' => '移除OIDC身份提供商中的指定客户端ID',
            'summary' => '调用RemoveClientIdFromOIDCProvider移除OIDC身份提供商中的指定客户端ID。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，为名为`TestOIDCProvider`的OIDC身份提供商移除客户端ID`498469743454717****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'AddFingerprintToOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'Fingerprint',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'HTTPS CA证书的验证指纹。'."\n"
                            ."\n"
                            .'格式：允许英文字母和数字。'."\n"
                            ."\n"
                            .'长度：最大40个字符。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '902ef2deeb3c5b13ea4c3d5193629309e231****',
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
                                'example' => '4B809BBC-0E78-544A-A91A-648926412E3E',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商的名称。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/OIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => 'OIDC身份提供商的颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '502ef2deeb3c5b13ea4c3d5193629309e231****,902ef2deeb3c5b13ea4c3d5193629309e231****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '498469743454717****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4B809BBC-0E78-544A-A91A-648926412E3E\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/OIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"502ef2deeb3c5b13ea4c3d5193629309e231****,902ef2deeb3c5b13ea4c3d5193629309e231****\\",\\n    \\"ClientIds\\": \\"498469743454717****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 12\\n  }\\n}","errorExample":""},{"type":"xml","example":"<AddFingerprintToOIDCProviderResponse>\\n    <RequestId>4B809BBC-0E78-544A-A91A-648926412E3E</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/OIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>502ef2deeb3c5b13ea4c3d5193629309e231****,902ef2deeb3c5b13ea4c3d5193629309e231****</Fingerprints>\\n        <ClientIds>498469743454717****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</AddFingerprintToOIDCProviderResponse>","errorExample":""}]',
            'title' => '为OIDC身份提供商添加验证指纹',
            'summary' => '调用AddFingerprintToOIDCProvider为OIDC身份提供商添加验证指纹。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，为名为`TestOIDCProvider`的OIDC身份提供商添加一个验证指纹`902ef2deeb3c5b13ea4c3d5193629309e231****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'RemoveFingerprintFromOIDCProvider' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'OIDCProviderName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OIDC身份提供商的名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'TestOIDCProvider',
                    ],
                ],
                [
                    'name' => 'Fingerprint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '将要移除的验证指纹。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '6938fd4d98bab03faadb97b34396831e3780****',
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
                                'example' => 'C90CE971-4C7F-5D93-BD3E-2D0E79D03C01',
                            ],
                            'OIDCProvider' => [
                                'description' => 'OIDC身份提供商信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UpdateDate' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-12T08:38:29Z',
                                    ],
                                    'Description' => [
                                        'description' => 'OIDC身份提供商的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a new OIDC Provider.',
                                    ],
                                    'OIDCProviderName' => [
                                        'description' => 'OIDC身份提供商的名称。',
                                        'type' => 'string',
                                        'example' => 'TestOIDCProvider',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-11-11T06:56:03Z',
                                    ],
                                    'Arn' => [
                                        'description' => 'OIDC身份提供商的ARN。',
                                        'type' => 'string',
                                        'example' => 'acs:ram::177242285274****:oidc-provider/TestOIDCProvider',
                                    ],
                                    'IssuerUrl' => [
                                        'description' => 'OIDC身份提供商的颁发者URL。',
                                        'type' => 'string',
                                        'example' => 'https://xxxxxx.example.com',
                                    ],
                                    'Fingerprints' => [
                                        'description' => 'HTTPS CA证书的验证指纹。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '5938fd4d98bab03faadb97b34396831e3780****',
                                    ],
                                    'ClientIds' => [
                                        'description' => '客户端ID。多个之间用半角逗号（,）分隔。',
                                        'type' => 'string',
                                        'example' => '0oa4u6l8x5WoaVbd****',
                                    ],
                                    'GmtCreate' => [
                                        'description' => '创建时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636613763000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '修改时间（时间戳）。',
                                        'type' => 'string',
                                        'example' => '1636706309000',
                                    ],
                                    'IssuanceLimitTime' => [
                                        'description' => '允许外部IdP颁发ID Token的最早签发时间。ID Token中的iat字段如果距离当前时间大于这个值则请求会被拒绝。'."\n"
                                            .'单位：小时。取值范围：1~168。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C90CE971-4C7F-5D93-BD3E-2D0E79D03C01\\",\\n  \\"OIDCProvider\\": {\\n    \\"UpdateDate\\": \\"2021-11-12T08:38:29Z\\",\\n    \\"Description\\": \\"This is a new OIDC Provider.\\",\\n    \\"OIDCProviderName\\": \\"TestOIDCProvider\\",\\n    \\"CreateDate\\": \\"2021-11-11T06:56:03Z\\",\\n    \\"Arn\\": \\"acs:ram::177242285274****:oidc-provider/TestOIDCProvider\\",\\n    \\"IssuerUrl\\": \\"https://xxxxxx.example.com\\",\\n    \\"Fingerprints\\": \\"5938fd4d98bab03faadb97b34396831e3780****\\",\\n    \\"ClientIds\\": \\"0oa4u6l8x5WoaVbd****\\",\\n    \\"GmtCreate\\": \\"1636613763000\\",\\n    \\"GmtModified\\": \\"1636706309000\\",\\n    \\"IssuanceLimitTime\\": 12\\n  }\\n}","errorExample":""},{"type":"xml","example":"<RemoveFingerprintFromOIDCProviderResponse>\\n    <RequestId>C90CE971-4C7F-5D93-BD3E-2D0E79D03C01</RequestId>\\n    <OIDCProvider>\\n        <UpdateDate>2021-11-12T08:38:29Z</UpdateDate>\\n        <Description>This is a new OIDC Provider.</Description>\\n        <OIDCProviderName>TestOIDCProvider</OIDCProviderName>\\n        <CreateDate>2021-11-11T06:56:03Z</CreateDate>\\n        <Arn>acs:ram::177242285274****:oidc-provider/TestOIDCProvider</Arn>\\n        <IssuerUrl>https://dev-xxxxxx.okta.com</IssuerUrl>\\n        <Fingerprints>5938fd4d98bab03faadb97b34396831e3780****</Fingerprints>\\n        <ClientIds>0oa4u6l8x5WoaVbd****</ClientIds>\\n        <GmtCreate>1636613763000</GmtCreate>\\n        <GmtModified>1636706309000</GmtModified>\\n        <IssuanceLimitTime>12</IssuanceLimitTime>\\n    </OIDCProvider>\\n</RemoveFingerprintFromOIDCProviderResponse>","errorExample":""}]',
            'title' => '移除OIDC身份提供商中指定的验证指纹',
            'summary' => '调用RemoveFingerprintFromOIDCProvider移除OIDC身份提供商中指定的验证指纹。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，为名为`TestOIDCProvider`的OIDC身份提供商移除验证指纹`6938fd4d98bab03faadb97b34396831e3780****`。',
            'requestParamsDescription' => '关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
        ],
        'CreateApplication' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用的显示名称。'."\n"
                            ."\n"
                            .'最大长度为24个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'myapp',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型。取值：'."\n"
                            ."\n"
                            .'- WebApp：指基于浏览器交互的网络应用。 '."\n"
                            .'- NativeApp：指操作系统中运行的本地应用，主要为运行在桌面操作系统或移动操作系统中的应用。 '."\n"
                            .'- ServerApp：指直接访问阿里云服务，而无需依赖用户登录的应用，目前仅支持基于SCIM协议的用户同步应用。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'WebApp',
                    ],
                ],
                [
                    'name' => 'RedirectUris',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调地址。'."\n"
                            ."\n"
                            .'输入多个时，以英文分号（;）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com',
                    ],
                ],
                [
                    'name' => 'SecretRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要应用密钥。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false'."\n"
                            ."\n"
                            .'> - 对于WebApp和ServerApp类型的应用，该值会被强制设置为true，不支持修改。'."\n"
                            .'- 对于NativeApp类型的应用，可以设置为true或false，如不设置，默认为false。由于此类应用往往运行在非可信环境，无法有效保护应用密钥，因此建议您如无明确需要，不要设置为true。更多信息，请参见[Native应用登录阿里云](~~93697~~)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'AccessTokenValidity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问令牌有效期。'."\n"
                            ."\n"
                            .'取值范围：900~10800。单位：秒。'."\n"
                            ."\n"
                            .'默认值：3600。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
                [
                    'name' => 'RefreshTokenValidity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '刷新令牌有效期。'."\n"
                            ."\n"
                            .'取值范围：7200~31536000。单位：秒。'."\n"
                            ."\n"
                            .'默认值：'."\n"
                            ."\n"
                            .'- 对于NativeApp和ServerApp类型的应用，如果该值为空，则默认为2592000秒（即30天）。'."\n"
                            .'- 对于WebApp类型的应用，如果该值为空，则默认为7776000秒（即90天）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2592000',
                    ],
                ],
                [
                    'name' => 'PredefinedScopes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用权限范围。'."\n"
                            ."\n"
                            .'关于应用权限范围的取值和描述，请参见[OAuth范围](~~93693~~)。您也可以调用[ListPredefinedScopes](~~187206~~)获取不同应用类型支持的应用权限范围。'."\n"
                            ."\n"
                            .'输入多个应用权限范围时，以英文分号（;）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliuid;profile',
                    ],
                ],
                [
                    'name' => 'RequiredScopes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必选的应用权限范围。'."\n"
                            ."\n"
                            .'您可以将`RequiredScopes`中设置的一个或多个范围设为必选，设为必选后，当用户进行应用授权时，必选范围默认选中且不可取消。'."\n"
                            ."\n"
                            .'输入多个应用权限范围时，以英文分号（;）分隔。'."\n"
                            ."\n"
                            .'> 如果您设置的`RequiredScopes`项不在`PredefinedScopes`的范围内，则该项必选范围不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aliuid',
                    ],
                ],
                [
                    'name' => 'IsMultiTenant',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许被其他账号安装。取值：'."\n"
                            ."\n"
                            .'- true：对于NativeApp和ServerApp类型的应用，如果该值为空，则默认为true。'."\n"
                            .'- false：对于WebApp类型的应用，如果该值为空，则默认为false。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。'."\n"
                            ."\n"
                            .'最大长度为64 个字符，允许输入英文字母、数字、英文句点（.）、下划线（_）或中划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'myapp',
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
                                'example' => '6616F09B-2768-4C11-8866-A8EE4C4A583E',
                            ],
                            'Application' => [
                                'description' => '应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '应用的显示名称。',
                                        'type' => 'string',
                                        'example' => 'myapp',
                                    ],
                                    'AccessTokenValidity' => [
                                        'description' => '访问令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'SecretRequired' => [
                                        'description' => '是否需要应用密钥。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AccountId' => [
                                        'description' => '应用所属的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '177242285274****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'AppName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'myapp',
                                    ],
                                    'RedirectUris' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RedirectUri' => [
                                                'description' => '回调地址。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '回调地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://www.example.com',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'DelegatedScope' => [
                                        'description' => '应用权限范围信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PredefinedScopes' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'PredefinedScope' => [
                                                        'description' => '应用权限范围信息。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '应用权限范围信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Description' => [
                                                                    'description' => '范围描述。',
                                                                    'type' => 'string',
                                                                    'example' => '用于获取用户的OpenID（默认权限范围，不可移除）',
                                                                ],
                                                                'Required' => [
                                                                    'description' => '安装应用时，此权限范围是否默认必选。取值：'."\n"
                                                                        ."\n"
                                                                        .'- true：必选。'."\n"
                                                                        .'- false：非必选。'."\n"
                                                                        ."\n"
                                                                        .'其中`openid`默认为必选。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                                'Name' => [
                                                                    'description' => '范围名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'openid',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => '472457090344041****',
                                    ],
                                    'RefreshTokenValidity' => [
                                        'description' => '刷新令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7776000',
                                    ],
                                    'IsMultiTenant' => [
                                        'description' => '是否允许被其他账号安装。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AppType' => [
                                        'description' => '应用类型。',
                                        'type' => 'string',
                                        'example' => 'WebApp',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6616F09B-2768-4C11-8866-A8EE4C4A583E\\",\\n  \\"Application\\": {\\n    \\"DisplayName\\": \\"myapp\\",\\n    \\"AccessTokenValidity\\": 3600,\\n    \\"SecretRequired\\": true,\\n    \\"AccountId\\": \\"177242285274****\\",\\n    \\"CreateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"AppName\\": \\"myapp\\",\\n    \\"RedirectUris\\": {\\n      \\"RedirectUri\\": [\\n        \\"https://www.example.com\\"\\n      ]\\n    },\\n    \\"UpdateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"DelegatedScope\\": {\\n      \\"PredefinedScopes\\": {\\n        \\"PredefinedScope\\": [\\n          {\\n            \\"Description\\": \\"用于获取用户的OpenID（默认权限范围，不可移除）\\",\\n            \\"Required\\": true,\\n            \\"Name\\": \\"openid\\"\\n          }\\n        ]\\n      }\\n    },\\n    \\"AppId\\": \\"472457090344041****\\",\\n    \\"RefreshTokenValidity\\": 7776000,\\n    \\"IsMultiTenant\\": true,\\n    \\"AppType\\": \\"WebApp\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateApplicationResponse>\\r\\n\\t<RequestId>6616F09B-2768-4C11-8866-A8EE4C4A583E</RequestId>\\r\\n\\t<Application>\\r\\n\\t\\t<AccountId>177242285274****</AccountId>\\r\\n\\t\\t<SecretRequired>true</SecretRequired>\\r\\n\\t\\t<IsMultiTenant>true</IsMultiTenant>\\r\\n\\t\\t<CreateDate>2020-10-23T08:06:57Z</CreateDate>\\r\\n\\t\\t<AppName>myapp</AppName>\\r\\n\\t\\t<UpdateDate>2020-10-23T08:06:57Z</UpdateDate>\\r\\n\\t\\t<DelegatedScope>\\r\\n\\t\\t\\t<PredefinedScopes>\\r\\n\\t\\t\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t\\t\\t<Description>用于获取用户的OpenID（默认权限范围，不可移除）</Description>\\r\\n\\t\\t\\t\\t\\t<Name>openid</Name>\\r\\n\\t\\t\\t\\t</PredefinedScope>\\r\\n\\t\\t\\t</PredefinedScopes>\\r\\n\\t\\t</DelegatedScope>\\r\\n\\t\\t<AppId>472457090344041****</AppId>\\r\\n\\t\\t<DisplayName>myapp</DisplayName>\\r\\n\\t\\t<AccessTokenValidity>3600</AccessTokenValidity>\\r\\n\\t\\t<RedirectUris>\\r\\n\\t\\t\\t<RedirectUri>https://www.example.com</RedirectUri>\\r\\n\\t\\t</RedirectUris>\\r\\n\\t\\t<RefreshTokenValidity>7776000</RefreshTokenValidity>\\r\\n\\t\\t<AppType>WebApp</AppType>\\r\\n\\t</Application>\\r\\n</CreateApplicationResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '创建应用',
            'summary' => '创建一个应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetApplication' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
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
                                'example' => '6616F09B-2768-4C11-8866-A8EE4C4A583E',
                            ],
                            'Application' => [
                                'description' => '应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '应用的显示名称。',
                                        'type' => 'string',
                                        'example' => 'myapp',
                                    ],
                                    'AccessTokenValidity' => [
                                        'description' => '访问令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'SecretRequired' => [
                                        'description' => '是否需要应用密钥。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AccountId' => [
                                        'description' => '应用所属的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '177242285274****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'AppName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'myapp',
                                    ],
                                    'RedirectUris' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RedirectUri' => [
                                                'description' => '回调地址。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '回调地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://www.example.com',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'DelegatedScope' => [
                                        'description' => '应用权限范围信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PredefinedScopes' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'PredefinedScope' => [
                                                        'description' => '应用权限范围信息。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '应用权限范围信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Description' => [
                                                                    'description' => '范围描述。',
                                                                    'type' => 'string',
                                                                    'example' => '用于获取用户的OpenID（默认权限范围，不可移除）',
                                                                ],
                                                                'Name' => [
                                                                    'description' => '范围名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'openid',
                                                                ],
                                                                'Required' => [
                                                                    'description' => '安装应用时，此权限范围是否默认必选。取值：'."\n"
                                                                        ."\n"
                                                                        .'- true：必选。'."\n"
                                                                        .'- false：非必选。'."\n"
                                                                        ."\n"
                                                                        .'其中`openid`默认为必选。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => '472457090344041****',
                                    ],
                                    'RefreshTokenValidity' => [
                                        'description' => '刷新令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7776000',
                                    ],
                                    'IsMultiTenant' => [
                                        'description' => '是否允许被其他账号安装。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AppType' => [
                                        'description' => '应用类型。取值：'."\n"
                                            ."\n"
                                            .'- WebApp：指基于浏览器交互的网络应用。'."\n"
                                            .'- NativeApp：指操作系统中运行的本地应用，主要为运行在桌面操作系统或移动操作系统中的应用。'."\n"
                                            .'- ServerApp：指直接访问阿里云服务，而无需依赖用户登录的应用，目前仅支持基于SCIM协议的用户同步应用。',
                                        'type' => 'string',
                                        'example' => 'WebApp',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6616F09B-2768-4C11-8866-A8EE4C4A583E\\",\\n  \\"Application\\": {\\n    \\"DisplayName\\": \\"myapp\\",\\n    \\"AccessTokenValidity\\": 3600,\\n    \\"SecretRequired\\": true,\\n    \\"AccountId\\": \\"177242285274****\\",\\n    \\"CreateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"AppName\\": \\"myapp\\",\\n    \\"RedirectUris\\": {\\n      \\"RedirectUri\\": [\\n        \\"https://www.example.com\\"\\n      ]\\n    },\\n    \\"UpdateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"DelegatedScope\\": {\\n      \\"PredefinedScopes\\": {\\n        \\"PredefinedScope\\": [\\n          {\\n            \\"Description\\": \\"用于获取用户的OpenID（默认权限范围，不可移除）\\",\\n            \\"Name\\": \\"openid\\",\\n            \\"Required\\": true\\n          }\\n        ]\\n      }\\n    },\\n    \\"AppId\\": \\"472457090344041****\\",\\n    \\"RefreshTokenValidity\\": 7776000,\\n    \\"IsMultiTenant\\": true,\\n    \\"AppType\\": \\"WebApp\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetApplicationResponse>\\r\\n        <RequestId>6616F09B-2768-4C11-8866-A8EE4C4A583E</RequestId>\\r\\n        <Application>\\r\\n                <AccountId>177242285274****</AccountId>\\r\\n                <SecretRequired>true</SecretRequired>\\r\\n                <IsMultiTenant>true</IsMultiTenant>\\r\\n                <CreateDate>2020-10-23T08:06:57Z</CreateDate>\\r\\n                <AppName>myapp</AppName>\\r\\n                <UpdateDate>2020-10-23T08:06:57Z</UpdateDate>\\r\\n                <DelegatedScope>\\r\\n                        <PredefinedScopes>\\r\\n                                <PredefinedScope>\\r\\n                                        <Description>用于获取用户的OpenID（默认权限范围，不可移除）</Description>\\r\\n                                        <Name>openid</Name>\\r\\n                                </PredefinedScope>\\r\\n                        </PredefinedScopes>\\r\\n                </DelegatedScope>\\r\\n                <AppId>472457090344041****</AppId>\\r\\n                <DisplayName>myapp</DisplayName>\\r\\n                <AccessTokenValidity>3600</AccessTokenValidity>\\r\\n                <RedirectUris>\\r\\n                        <RedirectUri>https://www.example.com</RedirectUri>\\r\\n                </RedirectUris>\\r\\n                <RefreshTokenValidity>7776000</RefreshTokenValidity>\\r\\n                <AppType>WebApp</AppType>\\r\\n        </Application>\\r\\n</GetApplicationResponse>","errorExample":""}]',
            'title' => '查询应用的配置信息',
            'summary' => '查询指定应用的配置信息。',
            'description' => '本文将提供一个示例，查询应用`472457090344041****`的配置信息。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateApplication' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
                    ],
                ],
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '显示名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NewApp',
                    ],
                ],
                [
                    'name' => 'NewRedirectUris',
                    'in' => 'query',
                    'schema' => [
                        'description' => '回调地址。'."\n"
                            ."\n"
                            .'输入多个时，以英文分号（;）分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://www.example.com',
                    ],
                ],
                [
                    'name' => 'NewPredefinedScopes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用权限范围。'."\n"
                            ."\n"
                            .'关于应用权限范围的取值和描述，请参见[OAuth范围](~~93693~~)。您也可以调用[ListPredefinedScopes](~~187206~~)获取不同应用类型支持的应用权限范围。'."\n"
                            ."\n"
                            .'输入多个应用权限范围时，以英文分号（;）分隔。'."\n"
                            ."\n"
                            .'新的应用权限范围会覆盖原来的应用权限范围。例如：如果原来的应用权限范围是`/acs/ccc`，新设置的应用权限范围为`/acs/alidns`，则最终生效的应用权限范围为`/acs/alidns`。如果您想在原有范围基础上新增`/acs/alidns`，请将新的应用权限范围设置为`/acs/ccc;/acs/alidns`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'openid',
                    ],
                ],
                [
                    'name' => 'NewRequiredScopes',
                    'in' => 'query',
                    'schema' => [
                        'description' => '必选的应用权限范围。'."\n"
                            ."\n"
                            .'您可以将`RequiredScopes`中设置的一个或多个范围设为必选，设为必选后，当用户进行应用授权时，必选范围默认选中且不可取消。'."\n"
                            ."\n"
                            .'如果您同时传入了`NewPredefinedScopes`，则会先通过`NewPredefinedScopes`重新设置应用的范围列表，再通过本参数进行范围是否必选的设置。'."\n"
                            ."\n"
                            .'输入多个应用权限范围时，以英文分号（;）分隔。'."\n"
                            ."\n"
                            .'新的必选范围会覆盖原来的必选范围。'."\n"
                            ."\n"
                            .'> 如果您设置的`RequiredScopes`项不在`PredefinedScopes`的范围内，则该项必选范围不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'profile;aliuid',
                    ],
                ],
                [
                    'name' => 'NewSecretRequired',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否需要应用密钥。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false'."\n"
                            ."\n"
                            .'> - 对于WebApp和ServerApp类型的应用，该值会被强制设置为true，不支持修改。'."\n"
                            .'- 对于NativeApp类型的应用，可以设置为true或false，如不设置，默认为false。由于此类应用往往运行在非可信环境，无法有效保护应用密钥，因此建议您如无明确需要，不要设置为true。更多信息，请参见[Native应用登录阿里云](~~93697~~)。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NewAccessTokenValidity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问令牌有效期。'."\n"
                            ."\n"
                            .'取值范围：900~10800。单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
                [
                    'name' => 'NewRefreshTokenValidity',
                    'in' => 'query',
                    'schema' => [
                        'description' => '刷新令牌有效期。'."\n"
                            ."\n"
                            .'取值范围：7200~31536000。单位：秒。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7776000',
                    ],
                ],
                [
                    'name' => 'NewIsMultiTenant',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许被其他账号安装。取值：'."\n"
                            ."\n"
                            .'- true：允许。'."\n"
                            ."\n"
                            .'- false：不允许。',
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
                                'example' => '6616F09B-2768-4C11-8866-A8EE4C4A583E',
                            ],
                            'Application' => [
                                'description' => '应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'description' => '应用的显示名称。',
                                        'type' => 'string',
                                        'example' => 'NewApp',
                                    ],
                                    'AccessTokenValidity' => [
                                        'description' => '访问令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'SecretRequired' => [
                                        'description' => '是否需要应用密钥。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AccountId' => [
                                        'description' => '应用所属的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '177242285274****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'AppName' => [
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'myapp',
                                    ],
                                    'RedirectUris' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'RedirectUri' => [
                                                'description' => '回调地址。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '回调地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://www.example.com',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'UpdateDate' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-23T08:06:57Z',
                                    ],
                                    'DelegatedScope' => [
                                        'description' => '应用权限范围信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'PredefinedScopes' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'PredefinedScope' => [
                                                        'description' => '应用权限范围信息。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '应用权限范围信息。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Description' => [
                                                                    'description' => '范围描述。',
                                                                    'type' => 'string',
                                                                    'example' => '用于获取用户的OpenID（默认权限范围，不可移除）',
                                                                ],
                                                                'Name' => [
                                                                    'description' => '范围名称。',
                                                                    'type' => 'string',
                                                                    'example' => 'openid',
                                                                ],
                                                                'Required' => [
                                                                    'description' => '安装应用时，此权限范围是否默认必选。取值：'."\n"
                                                                        ."\n"
                                                                        .'- true：必选。'."\n"
                                                                        .'- false：非必选。'."\n"
                                                                        ."\n"
                                                                        .'其中`openid`默认为必选。',
                                                                    'type' => 'boolean',
                                                                    'example' => 'true',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => '472457090344041****',
                                    ],
                                    'RefreshTokenValidity' => [
                                        'description' => '刷新令牌有效期。单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7776000',
                                    ],
                                    'IsMultiTenant' => [
                                        'description' => '是否允许被其他账号安装。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'AppType' => [
                                        'description' => '应用类型。',
                                        'type' => 'string',
                                        'example' => 'WebApp',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"6616F09B-2768-4C11-8866-A8EE4C4A583E\\",\\n  \\"Application\\": {\\n    \\"DisplayName\\": \\"NewApp\\",\\n    \\"AccessTokenValidity\\": 3600,\\n    \\"SecretRequired\\": true,\\n    \\"AccountId\\": \\"177242285274****\\",\\n    \\"CreateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"AppName\\": \\"myapp\\",\\n    \\"RedirectUris\\": {\\n      \\"RedirectUri\\": [\\n        \\"https://www.example.com\\"\\n      ]\\n    },\\n    \\"UpdateDate\\": \\"2020-10-23T08:06:57Z\\",\\n    \\"DelegatedScope\\": {\\n      \\"PredefinedScopes\\": {\\n        \\"PredefinedScope\\": [\\n          {\\n            \\"Description\\": \\"用于获取用户的OpenID（默认权限范围，不可移除）\\",\\n            \\"Name\\": \\"openid\\",\\n            \\"Required\\": true\\n          }\\n        ]\\n      }\\n    },\\n    \\"AppId\\": \\"472457090344041****\\",\\n    \\"RefreshTokenValidity\\": 7776000,\\n    \\"IsMultiTenant\\": true,\\n    \\"AppType\\": \\"WebApp\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateApplicationResponse>\\r\\n\\t<RequestId>A4AE08F4-36FB-4274-BE4A-6BCAF7F15E85</RequestId>\\r\\n\\t<Application>\\r\\n\\t\\t<AccountId>177242285274****</AccountId>\\r\\n\\t\\t<SecretRequired>true</SecretRequired>\\r\\n\\t\\t<IsMultiTenant>true</IsMultiTenant>\\r\\n\\t\\t<CreateDate>2020-10-23T08:06:57Z</CreateDate>\\r\\n\\t\\t<AppName>myapp</AppName>\\r\\n\\t\\t<UpdateDate>2020-11-02T07:02:06Z</UpdateDate>\\r\\n\\t\\t<DelegatedScope>\\r\\n\\t\\t\\t<PredefinedScopes>\\r\\n\\t\\t\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t\\t\\t<Description>用于获取用户的OpenID（默认权限范围，不可移除）</Description>\\r\\n\\t\\t\\t\\t\\t<Name>openid</Name>\\r\\n\\t\\t\\t\\t</PredefinedScope>\\r\\n\\t\\t\\t</PredefinedScopes>\\r\\n\\t\\t</DelegatedScope>\\r\\n\\t\\t<AppId>472457090344041****</AppId>\\r\\n\\t\\t<DisplayName>NewApp</DisplayName>\\r\\n\\t\\t<AccessTokenValidity>3600</AccessTokenValidity>\\r\\n\\t\\t<RedirectUris>\\r\\n\\t\\t\\t<RedirectUri>https://www.example.com</RedirectUri>\\r\\n\\t\\t</RedirectUris>\\r\\n\\t\\t<RefreshTokenValidity>7776000</RefreshTokenValidity>\\r\\n\\t\\t<AppType>WebApp</AppType>\\r\\n\\t</Application>\\r\\n</UpdateApplicationResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '修改应用的配置信息',
            'summary' => '修改指定应用的配置信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteApplication' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteApplicationResponse>\\r\\n          <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteApplicationResponse>","errorExample":""}]',
            'title' => '删除一个应用',
            'summary' => '删除指定的应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListApplications' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CE458B58-8C40-46F7-A9D4-CB85136B0C06',
                            ],
                            'Applications' => [
                                'type' => 'object',
                                'properties' => [
                                    'Application' => [
                                        'description' => '应用信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '应用的显示名称。',
                                                    'type' => 'string',
                                                    'example' => 'myapp',
                                                ],
                                                'AccessTokenValidity' => [
                                                    'description' => '访问令牌有效期。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3600',
                                                ],
                                                'SecretRequired' => [
                                                    'description' => '是否需要应用密钥。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'AccountId' => [
                                                    'description' => '应用所属的阿里云账号ID。',
                                                    'type' => 'string',
                                                    'example' => '177242285274****',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-23T09:33:22Z',
                                                ],
                                                'AppName' => [
                                                    'description' => '应用名称。',
                                                    'type' => 'string',
                                                    'example' => 'myapp',
                                                ],
                                                'RedirectUris' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RedirectUri' => [
                                                            'description' => '回调地址。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '回调地址。',
                                                                'type' => 'string',
                                                                'example' => 'https://www.example.com',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'UpdateDate' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-23T09:33:22Z',
                                                ],
                                                'DelegatedScope' => [
                                                    'description' => '应用权限范围信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'PredefinedScopes' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'PredefinedScope' => [
                                                                    'description' => '应用权限范围信息。',
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'description' => '应用权限范围信息。',
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'Description' => [
                                                                                'description' => '范围描述。',
                                                                                'type' => 'string',
                                                                                'example' => '用于获取用户的OpenID（默认权限范围，不可移除）',
                                                                            ],
                                                                            'Name' => [
                                                                                'description' => '范围名称。',
                                                                                'type' => 'string',
                                                                                'example' => 'openid',
                                                                            ],
                                                                            'Required' => [
                                                                                'description' => '安装应用时，此权限范围是否默认必选。取值：'."\n"
                                                                                    ."\n"
                                                                                    .'- true：必选。'."\n"
                                                                                    .'- false：非必选。'."\n"
                                                                                    ."\n"
                                                                                    .'其中`openid`默认为必选。',
                                                                                'type' => 'boolean',
                                                                                'example' => 'true',
                                                                            ],
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'AppId' => [
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => '441442900344560****',
                                                ],
                                                'RefreshTokenValidity' => [
                                                    'description' => '刷新令牌有效期。单位：秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '7776000',
                                                ],
                                                'IsMultiTenant' => [
                                                    'description' => '是否允许被其他账号安装。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'AppType' => [
                                                    'description' => '应用类型。取值：'."\n"
                                                        ."\n"
                                                        .'- WebApp：指基于浏览器交互的网络应用。'."\n"
                                                        .'- NativeApp：指操作系统中运行的本地应用，主要为运行在桌面操作系统或移动操作系统中的应用。'."\n"
                                                        .'- ServerApp：指直接访问阿里云服务，而无需依赖用户登录的应用，目前仅支持基于SCIM协议的用户同步应用。',
                                                    'type' => 'string',
                                                    'example' => 'WebApp',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CE458B58-8C40-46F7-A9D4-CB85136B0C06\\",\\n  \\"Applications\\": {\\n    \\"Application\\": [\\n      {\\n        \\"DisplayName\\": \\"myapp\\",\\n        \\"AccessTokenValidity\\": 3600,\\n        \\"SecretRequired\\": true,\\n        \\"AccountId\\": \\"177242285274****\\",\\n        \\"CreateDate\\": \\"2020-10-23T09:33:22Z\\",\\n        \\"AppName\\": \\"myapp\\",\\n        \\"RedirectUris\\": {\\n          \\"RedirectUri\\": [\\n            \\"https://www.example.com\\"\\n          ]\\n        },\\n        \\"UpdateDate\\": \\"2020-10-23T09:33:22Z\\",\\n        \\"DelegatedScope\\": {\\n          \\"PredefinedScopes\\": {\\n            \\"PredefinedScope\\": [\\n              {\\n                \\"Description\\": \\"用于获取用户的OpenID（默认权限范围，不可移除）\\",\\n                \\"Name\\": \\"openid\\",\\n                \\"Required\\": true\\n              }\\n            ]\\n          }\\n        },\\n        \\"AppId\\": \\"441442900344560****\\",\\n        \\"RefreshTokenValidity\\": 7776000,\\n        \\"IsMultiTenant\\": true,\\n        \\"AppType\\": \\"WebApp\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListApplicationsResponse>\\r\\n\\t<RequestId>CE458B58-8C40-46F7-A9D4-CB85136B0C06</RequestId>\\r\\n\\t<Applications>\\r\\n\\t\\t<Application>\\r\\n\\t\\t\\t<AccountId>177242285274****</AccountId>\\r\\n\\t\\t\\t<SecretRequired>true</SecretRequired>\\r\\n\\t\\t\\t<IsMultiTenant>true</IsMultiTenant>\\r\\n\\t\\t\\t<CreateDate>2020-10-23T09:33:22Z</CreateDate>\\r\\n\\t\\t\\t<AppName>myapp</AppName>\\r\\n\\t\\t\\t<UpdateDate>2020-10-23T09:33:22Z</UpdateDate>\\r\\n\\t\\t\\t<DelegatedScope>\\r\\n\\t\\t\\t\\t<PredefinedScopes>\\r\\n\\t\\t\\t\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t\\t\\t\\t<Description>用于获取用户的OpenID（默认权限范围，不可移除）</Description>\\r\\n\\t\\t\\t\\t\\t\\t<Name>openid</Name>\\r\\n\\t\\t\\t\\t\\t</PredefinedScope>\\r\\n\\t\\t\\t\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t\\t\\t\\t<Description>用于获取阿里云UID</Description>\\r\\n\\t\\t\\t\\t\\t\\t<Name>aliuid</Name>\\r\\n\\t\\t\\t\\t\\t</PredefinedScope>\\r\\n\\t\\t\\t\\t</PredefinedScopes>\\r\\n\\t\\t\\t</DelegatedScope>\\r\\n\\t\\t\\t<AppId>441442900344560****</AppId>\\r\\n\\t\\t\\t<DisplayName>myapp</DisplayName>\\r\\n\\t\\t\\t<AccessTokenValidity>3600</AccessTokenValidity>\\r\\n\\t\\t\\t<RedirectUris>\\r\\n\\t\\t\\t\\t<RedirectUri>https://www.example.com</RedirectUri>\\r\\n\\t\\t\\t</RedirectUris>\\r\\n\\t\\t\\t<RefreshTokenValidity>7776000</RefreshTokenValidity>\\r\\n\\t\\t\\t<AppType>WebApp</AppType>\\r\\n\\t\\t</Application>\\r\\n\\t</Applications>\\r\\n</ListApplicationsResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询应用列表',
            'summary' => '列出创建的应用列表。',
            'description' => '本文将提供一个示例，查询当前账号下的应用列表。返回结果显示，当前账号下只有一个名为`myapp`的应用。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPredefinedScopes' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型。取值：'."\n"
                            ."\n"
                            .'- WebApp'."\n"
                            .'- NativeApp'."\n"
                            .'- ServerApp'."\n"
                            ."\n"
                            .'如果不设置该参数，则查询所有应用类型的应用权限范围列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WebApp',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PredefinedScopes' => [
                                'type' => 'object',
                                'properties' => [
                                    'PredefinedScope' => [
                                        'description' => '应用权限范围信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '范围描述。',
                                                    'type' => 'string',
                                                    'example' => '用于获取用户的OpenID（默认权限范围，不可移除）',
                                                ],
                                                'Name' => [
                                                    'description' => '范围名称。',
                                                    'type' => 'string',
                                                    'example' => 'openid',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '955C096D-EC99-480B-AF37-3921109107D0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PredefinedScopes\\": {\\n    \\"PredefinedScope\\": [\\n      {\\n        \\"Description\\": \\"用于获取用户的OpenID（默认权限范围，不可移除）\\",\\n        \\"Name\\": \\"openid\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"955C096D-EC99-480B-AF37-3921109107D0\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListPredefinedScopesResponse>\\r\\n\\t<PredefinedScopes>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于获取用户的OpenID（默认权限范围，不可移除）</Description>\\r\\n\\t\\t\\t<Name>openid</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问阿里云呼叫中心服务API</Description>\\r\\n\\t\\t\\t<Name>/acs/ccc</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于获取阿里云UID</Description>\\r\\n\\t\\t\\t<Name>aliuid</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于获取用户名称等个人信息</Description>\\r\\n\\t\\t\\t<Name>profile</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问阿里云解析API</Description>\\r\\n\\t\\t\\t<Name>/acs/alidns</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问阿里云跨域身份管理服务</Description>\\r\\n\\t\\t\\t<Name>/acs/scim</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问数字化门店(Digital Store)</Description>\\r\\n\\t\\t\\t<Name>/acs/digitalstore</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问智能客服平台（Smart Customer Service Platform）</Description>\\r\\n\\t\\t\\t<Name>/acs/scsp</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问云游戏平台（Cloud Gaming Platform）</Description>\\r\\n\\t\\t\\t<Name>/acs/cloudgame</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t\\t<PredefinedScope>\\r\\n\\t\\t\\t<Description>用于访问智能联络中心</Description>\\r\\n\\t\\t\\t<Name>/acs/aiccs</Name>\\r\\n\\t\\t</PredefinedScope>\\r\\n\\t</PredefinedScopes>\\r\\n\\t<RequestId>955C096D-EC99-480B-AF37-3921109107D0</RequestId>\\r\\n</ListPredefinedScopesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询系统预设的Scope列表',
            'summary' => '列出系统预定义的应用权限范围列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateAppSecret' => [
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
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
                                'example' => 'EE46FC3C-3BDE-4771-B531-27B7B6EB533D',
                            ],
                            'AppSecret' => [
                                'description' => '应用密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppSecretValue' => [
                                        'description' => '应用密钥内容。该值可作为OAuth的应用密钥（Client Secret）使用。',
                                        'type' => 'string',
                                        'example' => 'ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****',
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => '472457090344041****',
                                    ],
                                    'AppSecretId' => [
                                        'description' => '应用密钥ID。',
                                        'type' => 'string',
                                        'example' => '2efd5004-005c-4f05-83c6-5b1dd176****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-26T02:52:31Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EE46FC3C-3BDE-4771-B531-27B7B6EB533D\\",\\n  \\"AppSecret\\": {\\n    \\"AppSecretValue\\": \\"ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****\\",\\n    \\"AppId\\": \\"472457090344041****\\",\\n    \\"AppSecretId\\": \\"2efd5004-005c-4f05-83c6-5b1dd176****\\",\\n    \\"CreateDate\\": \\"2020-10-26T02:52:31Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<CreateAppSecretResponse>\\r\\n\\t<RequestId>EE46FC3C-3BDE-4771-B531-27B7B6EB533D</RequestId>\\r\\n\\t<AppSecret>\\r\\n\\t\\t<AppId>472457090344041****</AppId>\\r\\n\\t\\t<AppSecretValue>ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****</AppSecretValue>\\r\\n\\t\\t<AppSecretId>2efd5004-005c-4f05-83c6-5b1dd176****</AppSecretId>\\r\\n\\t\\t<CreateDate>2020-10-26T02:52:31Z</CreateDate>\\r\\n\\t</AppSecret>\\r\\n</CreateAppSecretResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '为指定的应用创建应用密钥',
            'summary' => '为指定的应用创建一个应用密钥。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAppSecret' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
                    ],
                ],
                [
                    'name' => 'AppSecretId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2efd5004-005c-4f05-83c6-5b1dd176****',
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
                                'example' => 'EE46FC3C-3BDE-4771-B531-27B7B6EB533D',
                            ],
                            'AppSecret' => [
                                'description' => '应用密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AppSecretValue' => [
                                        'description' => '应用密钥内容。',
                                        'type' => 'string',
                                        'example' => 'ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****',
                                    ],
                                    'AppId' => [
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => '472457090344041****',
                                    ],
                                    'AppSecretId' => [
                                        'description' => '应用密钥ID。',
                                        'type' => 'string',
                                        'example' => '2efd5004-005c-4f05-83c6-5b1dd176****',
                                    ],
                                    'CreateDate' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-26T02:52:31Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EE46FC3C-3BDE-4771-B531-27B7B6EB533D\\",\\n  \\"AppSecret\\": {\\n    \\"AppSecretValue\\": \\"ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****\\",\\n    \\"AppId\\": \\"472457090344041****\\",\\n    \\"AppSecretId\\": \\"2efd5004-005c-4f05-83c6-5b1dd176****\\",\\n    \\"CreateDate\\": \\"2020-10-26T02:52:31Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAppSecretResponse>\\r\\n      <RequestId>EE46FC3C-3BDE-4771-B531-27B7B6EB533D</RequestId>\\r\\n      <AppSecret>\\r\\n            <AppId>472457090344041****</AppId>\\r\\n            <AppSecretValue>ai78ZmmxnlUG1jXlBZRDFKos9DIjY4m17Q7dCpMwn1rqXsTGb1X1XmrmveMp****</AppSecretValue>\\r\\n            <AppSecretId>2efd5004-005c-4f05-83c6-5b1dd176****</AppSecretId>\\r\\n            <CreateDate>2020-10-26T02:52:31Z</CreateDate>\\r\\n      </AppSecret>\\r\\n</GetAppSecretResponse>","errorExample":""}]',
            'title' => '查询指定应用密钥信息',
            'summary' => '查询指定应用的密钥信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListAppSecretIds' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AppSecrets' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppSecret' => [
                                        'description' => '应用密钥信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'AppId' => [
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => '472457090344041****',
                                                ],
                                                'AppSecretId' => [
                                                    'description' => '应用密钥ID。',
                                                    'type' => 'string',
                                                    'example' => '2efd5004-005c-4f05-83c6-5b1dd176****',
                                                ],
                                                'CreateDate' => [
                                                    'description' => '创建时间。',
                                                    'type' => 'string',
                                                    'example' => '2020-10-26T03:18:39Z',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5F2FD500-7173-47D6-BD2F-EB60879B4F16',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AppSecrets\\": {\\n    \\"AppSecret\\": [\\n      {\\n        \\"AppId\\": \\"472457090344041****\\",\\n        \\"AppSecretId\\": \\"2efd5004-005c-4f05-83c6-5b1dd176****\\",\\n        \\"CreateDate\\": \\"2020-10-26T03:18:39Z\\"\\n      }\\n    ]\\n  },\\n  \\"RequestId\\": \\"5F2FD500-7173-47D6-BD2F-EB60879B4F16\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListAppSecretIdsResponse>\\r\\n\\t<AppSecrets>\\r\\n\\t\\t<AppSecret>\\r\\n\\t\\t\\t<AppId>472457090344041****</AppId>\\r\\n\\t\\t\\t<AppSecretId>2efd5004-005c-4f05-83c6-5b1dd176****</AppSecretId>\\r\\n\\t\\t\\t<CreateDate>2020-10-26T02:52:31Z</CreateDate>\\r\\n\\t\\t</AppSecret>\\r\\n\\t\\t<AppSecret>\\r\\n\\t\\t\\t<AppId>472457090344041****</AppId>\\r\\n\\t\\t\\t<AppSecretId>7be32a14-d4c5-4f19-84e7-c37c1515****</AppSecretId>\\r\\n\\t\\t\\t<CreateDate>2020-10-26T03:18:39Z</CreateDate>\\r\\n\\t\\t</AppSecret>\\r\\n\\t</AppSecrets>\\r\\n\\t<RequestId>5F2FD500-7173-47D6-BD2F-EB60879B4F16</RequestId>\\r\\n</ListAppSecretIdsResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询指定应用的应用密钥ID列表',
            'summary' => '列出指定应用的应用密钥信息列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteAppSecret' => [
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '472457090344041****',
                    ],
                ],
                [
                    'name' => 'AppSecretId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '2efd5004-005c-4f05-83c6-5b1dd176****',
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
                                'example' => '85836703-8D4F-485F-9726-4D1C730F957E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"85836703-8D4F-485F-9726-4D1C730F957E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAppSecretResponse>\\r\\n            <RequestId>85836703-8D4F-485F-9726-4D1C730F957E</RequestId>\\r\\n</DeleteAppSecretResponse>","errorExample":""}]',
            'title' => '删除指定应用的应用密钥',
            'summary' => '删除指定的应用密钥。',
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
                    'name' => 'MinimumPasswordLength',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最小密码长度。'."\n"
                            ."\n"
                            .'取值范围：8~32。默认值：8。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8',
                    ],
                ],
                [
                    'name' => 'RequireLowercaseCharacters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否必须包含小写字母。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RequireUppercaseCharacters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否必须包含大写字母。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RequireNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否必须包含数字。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'RequireSymbols',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否必须包含符号。取值：'."\n"
                            ."\n"
                            .'- true'."\n"
                            .'- false（默认值）',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'HardExpire',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码过期后是否限制登录。取值：'."\n"
                            ."\n"
                            .'- true：密码过期后，不能登录控制台。需要通过主账号或具有管理员权限的RAM用户重置该RAM用户的密码后，才能正常登录。'."\n"
                            .'- false（默认值）：密码过期后，RAM用户可以自行更改密码，然后正常登录。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'MaxLoginAttemps',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码重试次数约束。连续输入错误密码达到设定次数后，账号将被锁定一小时。'."\n"
                            ."\n"
                            .'取值范围：0~32。'."\n"
                            ."\n"
                            .'默认值：0，表示不启用密码重试约束。',
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
                        'description' => '历史密码检查策略。'."\n"
                            ."\n"
                            .'禁止使用前N次的历史密码，N的取值范围：0~24。'."\n"
                            ."\n"
                            .'默认值：0，表示不启用历史密码检查策略。 ',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaxPasswordAge',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码有效期。'."\n"
                            ."\n"
                            .'取值范围：0~1095。单位：天。'."\n"
                            ."\n"
                            .'默认值：0，表示永不过期。 ',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MinimumPasswordDifferentCharacter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中最少包含的不同字符数量。'."\n"
                            ."\n"
                            .'取值范围：0~8。'."\n"
                            ."\n"
                            .'默认值：0，表示不限制密码中的不同字符数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PasswordNotContainUserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否不允许包含用户名。取值：'."\n"
                            ."\n"
                            .'- true：密码中不能包含用户名。'."\n"
                            .'- false（默认值）：密码中可以包含用户名。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
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
                                'example' => '3FB5551F-B2ED-40D4-8392-1E4AC2384EFD',
                            ],
                            'PasswordPolicy' => [
                                'description' => '密码强度策略信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RequireNumbers' => [
                                        'description' => '密码中是否必须包含数字。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'RequireLowercaseCharacters' => [
                                        'description' => '密码中是否必须包含小写字母。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordReusePrevention' => [
                                        'description' => '历史密码检查策略。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RequireSymbols' => [
                                        'description' => '密码中是否必须包含符号。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordNotContainUserName' => [
                                        'description' => '密码中是否不允许包含用户名。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MinimumPasswordDifferentCharacter' => [
                                        'description' => '密码中最少包含的不同字符数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MaxPasswordAge' => [
                                        'description' => '密码有效期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'HardExpire' => [
                                        'description' => '密码过期后是否限制登录。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MinimumPasswordLength' => [
                                        'description' => '最小密码长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'RequireUppercaseCharacters' => [
                                        'description' => '密码中是否必须包含大写字母。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MaxLoginAttemps' => [
                                        'description' => '密码重试次数约束。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3FB5551F-B2ED-40D4-8392-1E4AC2384EFD\\",\\n  \\"PasswordPolicy\\": {\\n    \\"RequireNumbers\\": false,\\n    \\"RequireLowercaseCharacters\\": false,\\n    \\"PasswordReusePrevention\\": 0,\\n    \\"RequireSymbols\\": false,\\n    \\"PasswordNotContainUserName\\": false,\\n    \\"MinimumPasswordDifferentCharacter\\": 0,\\n    \\"MaxPasswordAge\\": 0,\\n    \\"HardExpire\\": false,\\n    \\"MinimumPasswordLength\\": 8,\\n    \\"RequireUppercaseCharacters\\": false,\\n    \\"MaxLoginAttemps\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetPasswordPolicyResponse>\\r\\n\\t<RequestId>3FB5551F-B2ED-40D4-8392-1E4AC2384EFD</RequestId>\\r\\n\\t<PasswordPolicy>\\r\\n\\t\\t<MinimumPasswordLength>8</MinimumPasswordLength>\\r\\n\\t\\t<RequireLowercaseCharacters>false</RequireLowercaseCharacters>\\r\\n\\t\\t<HardExpire>false</HardExpire>\\r\\n\\t\\t<RequireNumbers>false</RequireNumbers>\\r\\n\\t\\t<MaxLoginAttemps>0</MaxLoginAttemps>\\r\\n\\t\\t<PasswordReusePrevention>0</PasswordReusePrevention>\\r\\n\\t\\t<MaxPasswordAge>0</MaxPasswordAge>\\r\\n\\t\\t<PasswordNotContainUserName>false</PasswordNotContainUserName>\\r\\n\\t\\t<RequireUppercaseCharacters>false</RequireUppercaseCharacters>\\r\\n\\t\\t<MinimumPasswordDifferentCharacter>0</MinimumPasswordDifferentCharacter>\\r\\n\\t\\t<RequireSymbols>false</RequireSymbols>\\r\\n\\t</PasswordPolicy>\\r\\n</SetPasswordPolicyResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '设置RAM用户密码强度策略',
            'summary' => '设置RAM用户的密码强度策略。',
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
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BDAA8408-E67C-428B-BFF0-1B2AC05C9610',
                            ],
                            'PasswordPolicy' => [
                                'description' => '密码强度策略信息。',
                                'type' => 'object',
                                'properties' => [
                                    'RequireNumbers' => [
                                        'description' => '密码中是否必须包含数字。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'RequireLowercaseCharacters' => [
                                        'description' => '密码中是否必须包含小写字母。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordReusePrevention' => [
                                        'description' => '历史密码检查策略。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RequireSymbols' => [
                                        'description' => '密码中是否必须包含符号。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PasswordNotContainUserName' => [
                                        'description' => '密码中是否不允许包含用户名。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MinimumPasswordDifferentCharacter' => [
                                        'description' => '密码中最少包含的不同字符数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'MaxPasswordAge' => [
                                        'description' => '密码有效期。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'HardExpire' => [
                                        'description' => '密码过期后是否限制登录。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MinimumPasswordLength' => [
                                        'description' => '最小密码长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'RequireUppercaseCharacters' => [
                                        'description' => '密码中是否必须包含大写字母。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'MaxLoginAttemps' => [
                                        'description' => '密码重试次数约束。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BDAA8408-E67C-428B-BFF0-1B2AC05C9610\\",\\n  \\"PasswordPolicy\\": {\\n    \\"RequireNumbers\\": false,\\n    \\"RequireLowercaseCharacters\\": false,\\n    \\"PasswordReusePrevention\\": 0,\\n    \\"RequireSymbols\\": false,\\n    \\"PasswordNotContainUserName\\": false,\\n    \\"MinimumPasswordDifferentCharacter\\": 0,\\n    \\"MaxPasswordAge\\": 0,\\n    \\"HardExpire\\": false,\\n    \\"MinimumPasswordLength\\": 8,\\n    \\"RequireUppercaseCharacters\\": false,\\n    \\"MaxLoginAttemps\\": 0\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetPasswordPolicyResponse>\\r\\n\\t<RequestId>BDAA8408-E67C-428B-BFF0-1B2AC05C9610</RequestId>\\r\\n\\t<PasswordPolicy>\\r\\n\\t\\t<MinimumPasswordLength>8</MinimumPasswordLength>\\r\\n\\t\\t<HardExpire>false</HardExpire>\\r\\n\\t\\t<RequireLowercaseCharacters>false</RequireLowercaseCharacters>\\r\\n\\t\\t<RequireNumbers>false</RequireNumbers>\\r\\n\\t\\t<MaxPasswordAge>0</MaxPasswordAge>\\r\\n\\t\\t<MaxLoginAttemps>0</MaxLoginAttemps>\\r\\n\\t\\t<PasswordReusePrevention>0</PasswordReusePrevention>\\r\\n\\t\\t<PasswordNotContainUserName>false</PasswordNotContainUserName>\\r\\n\\t\\t<RequireUppercaseCharacters>false</RequireUppercaseCharacters>\\r\\n\\t\\t<MinimumPasswordDifferentCharacter>0</MinimumPasswordDifferentCharacter>\\r\\n\\t\\t<RequireSymbols>false</RequireSymbols>\\r\\n\\t</PasswordPolicy>\\r\\n</GetPasswordPolicyResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询RAM用户密码强度策略信息',
            'summary' => '查询RAM用户的密码强度策略信息。',
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
                    'name' => 'EnableSaveMFATicket',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户使用多因素认证登录后，是否允许保存多因素认证的验证状态，其有效期为7天。取值：'."\n"
                            ."\n"
                            .'- true：允许。'."\n"
                            .'- false（默认值）：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'AllowUserToChangePassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理密码。取值：'."\n"
                            ."\n"
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
                            ."\n"
                            .'- true：允许。'."\n"
                            .'- false（默认值）：不允许。',
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
                            ."\n"
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
                            .'取值范围：1~24。单位：小时。'."\n"
                            ."\n"
                            .'默认值：6。',
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
                            .'最多配置40个登录掩码，总长度最大512个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10.0.0.0/8',
                    ],
                ],
                [
                    'name' => 'VerificationTypes',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '多因素认证的手段。',
                        'type' => 'array',
                        'items' => [
                            'description' => '多因素认证的手段。取值：'."\n"
                                .'- sms：安全手机。'."\n"
                                .'- email：安全邮箱。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["sms", "email"]',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AllowUserToManagePersonalDingTalk',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否允许RAM用户自主管理个人钉钉的绑定与解绑。取值：'."\n"
                            ."\n"
                            .'- true（默认值）：允许。'."\n"
                            .'- false：不允许。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'OperationForRiskLogin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '异常登录时是否二次验证MFA。取值：'."\n"
                            ."\n"
                            .'- autonomous（默认值）：可跳过，不强制绑定。'."\n"
                            .'- enforceVerify：强制绑定验证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'autonomous',
                    ],
                ],
                [
                    'name' => 'MFAOperationForLogin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录时必须使用MFA（取代原EnforceMFAForLogin参数，原参数仍然有效，建议更新为新参数）。取值：'."\n"
                            ."\n"
                            .'- mandatory：强制所有RAM用户。原EnforceMFAForLogin对应取值为true。'."\n"
                            .'- independent（默认值）：依赖每个RAM用户的独立配置。原EnforceMFAForLogin对应取值为false。'."\n"
                            .'- adaptive：仅异常登录时使用。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'adaptive',
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
                                'description' => '安全首选项信息。',
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
                                    'LoginProfilePreference' => [
                                        'description' => '登录首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'EnableSaveMFATicket' => [
                                                'description' => 'RAM用户使用多因素认证登录后，是否允许保存多因素认证的验证状态，其有效期为7天。',
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
                                            'OperationForRiskLogin' => [
                                                'description' => '异常登录时是否二次验证MFA。',
                                                'type' => 'string',
                                                'example' => 'autonomous',
                                            ],
                                            'MFAOperationForLogin' => [
                                                'description' => '登录时必须使用MFA（取代原EnforceMFAForLogin参数，原参数仍然有效，建议更新为新参数）。',
                                                'type' => 'string',
                                                'example' => 'adaptive',
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
                                    'VerificationPreference' => [
                                        'description' => '多因素认证手段的首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VerificationTypes' => [
                                                'description' => '多因素认证的手段。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '多因素认证的手段。',
                                                    'type' => 'string',
                                                    'example' => '["sms", "email"]',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PersonalInfoPreference' => [
                                        'description' => '个人信息首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManagePersonalDingTalk' => [
                                                'description' => '是否允许RAM用户自主管理个人钉钉的绑定与解绑。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '17494710-B4BA-4185-BBBB-C1A6ABDE1639',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityPreference\\": {\\n    \\"AccessKeyPreference\\": {\\n      \\"AllowUserToManageAccessKeys\\": false\\n    },\\n    \\"LoginProfilePreference\\": {\\n      \\"EnableSaveMFATicket\\": false,\\n      \\"LoginSessionDuration\\": 6,\\n      \\"LoginNetworkMasks\\": \\"10.0.0.0/8\\",\\n      \\"AllowUserToChangePassword\\": true,\\n      \\"OperationForRiskLogin\\": \\"autonomous\\",\\n      \\"MFAOperationForLogin\\": \\"adaptive\\"\\n    },\\n    \\"MFAPreference\\": {\\n      \\"AllowUserToManageMFADevices\\": false\\n    },\\n    \\"VerificationPreference\\": {\\n      \\"VerificationTypes\\": [\\n        \\"[\\\\\\"sms\\\\\\", \\\\\\"email\\\\\\"]\\"\\n      ]\\n    },\\n    \\"PersonalInfoPreference\\": {\\n      \\"AllowUserToManagePersonalDingTalk\\": true\\n    }\\n  },\\n  \\"RequestId\\": \\"17494710-B4BA-4185-BBBB-C1A6ABDE1639\\"\\n}","errorExample":""},{"type":"xml","example":"<SetSecurityPreferenceResponse>\\n    <SecurityPreference>\\n        <AccessKeyPreference>\\n            <AllowUserToManageAccessKeys>false</AllowUserToManageAccessKeys>\\n        </AccessKeyPreference>\\n        <LoginProfilePreference>\\n            <EnableSaveMFATicket>false</EnableSaveMFATicket>\\n            <LoginSessionDuration>6</LoginSessionDuration>\\n            <LoginNetworkMasks>10.0.0.0/8</LoginNetworkMasks>\\n            <AllowUserToChangePassword>true</AllowUserToChangePassword>\\n            <OperationForRiskLogin>autonomous</OperationForRiskLogin>\\n            <MFAOperationForLogin>adaptive</MFAOperationForLogin>\\n        </LoginProfilePreference>\\n        <MFAPreference>\\n            <AllowUserToManageMFADevices>false</AllowUserToManageMFADevices>\\n        </MFAPreference>\\n        <VerificationPreference>\\n            <VerificationTypes>[\\"sms\\", \\"email\\"]</VerificationTypes>\\n        </VerificationPreference>\\n        <PersonalInfoPreference>\\n            <AllowUserToManagePersonalDingTalk>true</AllowUserToManagePersonalDingTalk>\\n        </PersonalInfoPreference>\\n    </SecurityPreference>\\n    <RequestId>17494710-B4BA-4185-BBBB-C1A6ABDE1639</RequestId>\\n</SetSecurityPreferenceResponse>","errorExample":""}]',
            'title' => '设置RAM用户的全局安全首选项',
            'summary' => '设置RAM用户的全局安全首选项信息。',
            'description' => '### 使用说明'."\n"
                .'本文将提供一个示例，引导用户进行安全设置，实现在仅在RAM用户异常登录时要求进行多因素认证。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetSecurityPreference' => [
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
            'deprecated' => false,
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
                            'SecurityPreference' => [
                                'description' => '安全首选项信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessKeyPreference' => [
                                        'description' => '访问密钥首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManageAccessKeys' => [
                                                'description' => '是否允许RAM用户自主管理访问密钥。取值：'."\n"
                                                    ."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
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
                                                'description' => 'RAM用户使用多因素认证登录后，是否允许保存多因素认证的验证状态，其有效期为7天。取值：'."\n"
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
                                                'description' => '登录掩码。',
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
                                            'OperationForRiskLogin' => [
                                                'description' => '异常登录时是否二次验证MFA。取值：'."\n"
                                                    ."\n"
                                                    .'- autonomous（默认值）：可跳过，不强制绑定。'."\n"
                                                    .'- enforceVerify：强制绑定验证。',
                                                'type' => 'string',
                                                'example' => 'autonomous',
                                            ],
                                            'MFAOperationForLogin' => [
                                                'description' => '登录时必须使用MFA（取代原EnforceMFAForLogin参数，原参数仍然有效，建议更新为新参数）。取值：'."\n"
                                                    ."\n"
                                                    .'- mandatory：强制所有RAM用户。原EnforceMFAForLogin对应取值为true。'."\n"
                                                    .'- independent（默认值）：依赖每个RAM用户的独立配置。原EnforceMFAForLogin对应取值为false。'."\n"
                                                    .'- adaptive：仅异常登录时使用。'."\n"
                                                    ."\n",
                                                'type' => 'string',
                                                'example' => 'adaptive',
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
                                                'example' => 'false',
                                            ],
                                        ],
                                    ],
                                    'VerificationPreference' => [
                                        'description' => '多因素认证手段首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VerificationTypes' => [
                                                'description' => '多因素认证手段。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '多因素认证手段。取值：'."\n"
                                                        ."\n"
                                                        .'- sms：安全手机。'."\n"
                                                        .'- email：安全邮箱。',
                                                    'type' => 'string',
                                                    'example' => '["sms","email"]',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PersonalInfoPreference' => [
                                        'description' => '个人信息首选项。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllowUserToManagePersonalDingTalk' => [
                                                'description' => '是否允许RAM用户自主管理个人钉钉的绑定与解绑。取值：'."\n"
                                                    ."\n"
                                                    .'- true：允许。'."\n"
                                                    .'- false：不允许。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '30C9068D-FBAA-4998-9986-8A562FED0BC3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SecurityPreference\\": {\\n    \\"AccessKeyPreference\\": {\\n      \\"AllowUserToManageAccessKeys\\": false\\n    },\\n    \\"LoginProfilePreference\\": {\\n      \\"EnableSaveMFATicket\\": false,\\n      \\"LoginSessionDuration\\": 6,\\n      \\"LoginNetworkMasks\\": \\"10.0.0.0/8\\",\\n      \\"AllowUserToChangePassword\\": true,\\n      \\"OperationForRiskLogin\\": \\"autonomous\\",\\n      \\"MFAOperationForLogin\\": \\"adaptive\\"\\n    },\\n    \\"MFAPreference\\": {\\n      \\"AllowUserToManageMFADevices\\": false\\n    },\\n    \\"VerificationPreference\\": {\\n      \\"VerificationTypes\\": [\\n        \\"[\\\\\\"sms\\\\\\",\\\\\\"email\\\\\\"]\\"\\n      ]\\n    },\\n    \\"PersonalInfoPreference\\": {\\n      \\"AllowUserToManagePersonalDingTalk\\": true\\n    }\\n  },\\n  \\"RequestId\\": \\"30C9068D-FBAA-4998-9986-8A562FED0BC3\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSecurityPreferenceResponse>\\n    <SecurityPreference>\\n        <AccessKeyPreference>\\n            <AllowUserToManageAccessKeys>false</AllowUserToManageAccessKeys>\\n        </AccessKeyPreference>\\n        <LoginProfilePreference>\\n            <EnableSaveMFATicket>false</EnableSaveMFATicket>\\n            <LoginSessionDuration>6</LoginSessionDuration>\\n            <LoginNetworkMasks>10.0.0.0/8</LoginNetworkMasks>\\n            <AllowUserToChangePassword>true</AllowUserToChangePassword>\\n            <OperationForRiskLogin>autonomous</OperationForRiskLogin>\\n            <MFAOperationForLogin>adaptive</MFAOperationForLogin>\\n        </LoginProfilePreference>\\n        <MFAPreference>\\n            <AllowUserToManageMFADevices>false</AllowUserToManageMFADevices>\\n        </MFAPreference>\\n        <VerificationPreference>\\n            <VerificationTypes>[\\"sms\\",\\"email\\"]</VerificationTypes>\\n        </VerificationPreference>\\n        <PersonalInfoPreference>\\n            <AllowUserToManagePersonalDingTalk>true</AllowUserToManagePersonalDingTalk>\\n        </PersonalInfoPreference>\\n    </SecurityPreference>\\n    <RequestId>30C9068D-FBAA-4998-9986-8A562FED0BC3</RequestId>\\n</GetSecurityPreferenceResponse>","errorExample":""}]',
            'title' => '查询RAM用户全局安全首选项',
            'summary' => '调用GetSecurityPreference查询RAM用户的全局安全首选项。',
            'requestParamsDescription' => ' 关于公共请求参数的详情，请参见[公共参数](~~187377~~)。',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SetDefaultDomain' => [
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
            'parameters' => [
                [
                    'name' => 'DefaultDomainName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '默认域名。'."\n"
                            ."\n"
                            .'格式：`<AccountAlias>.onaliyun.com`。其中`<AccountAlias>`为账号别名，默认值是阿里云账号ID。默认域名必须以`.onaliyun.com`后缀结尾。'."\n"
                            ."\n"
                            .'默认域名（含后缀）最大长度为64个字符。可包含英文字母、数字、英文句点（.）、短划线（-）和下划线（_）。'."\n"
                            .'> 默认域名不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'examplecompany.onaliyun.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DefaultDomainName' => [
                                'description' => '默认域名。',
                                'type' => 'string',
                                'example' => 'examplecompany.onaliyun.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66815255-7CCE-4759-AC37-9755794C3626',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DefaultDomainName\\": \\"examplecompany.onaliyun.com\\",\\n  \\"RequestId\\": \\"66815255-7CCE-4759-AC37-9755794C3626\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<SetDefaultDomainResponse>\\r\\n\\t<DefaultDomainName>examplecompany.onaliyun.com</DefaultDomainName>\\r\\n\\t<RequestId>66815255-7CCE-4759-AC37-9755794C3626</RequestId>\\r\\n</SetDefaultDomainResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '设置默认域名',
            'summary' => '为阿里云账号（主账号）设置默认域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDefaultDomain' => [
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
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DefaultDomainName' => [
                                'description' => '默认域名。',
                                'type' => 'string',
                                'example' => 'examplecompany.onaliyun.com',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66815255-7CCE-4759-AC37-9755794C3626',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"DefaultDomainName\\": \\"examplecompany.onaliyun.com\\",\\n  \\"RequestId\\": \\"66815255-7CCE-4759-AC37-9755794C3626\\"\\n}","errorExample":""},{"type":"xml","example":"<GetDefaultDomainResponse>\\r\\n      <DefaultDomainName>examplecompany.onaliyun.com</DefaultDomainName>\\r\\n      <RequestId>66815255-7CCE-4759-AC37-9755794C3626</RequestId>\\r\\n</GetDefaultDomainResponse>","errorExample":""}]',
            'title' => '查询默认域名',
            'summary' => '查询阿里云账号（主账号）下的默认域名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetCredentialReport' => [
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当请求的返回结果被截断时，可以使用`NextToken`获取从当前截断位置之后的内容。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'EXAMPLE',
                    ],
                ],
                [
                    'name' => 'MaxItems',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回结果的条数。当返回结果达到`MaxItems`限制被截断时，返回参数`IsTruncated`将等于true。'."\n"
                            ."\n"
                            .'取值范围：1~3501。默认值：3501。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GeneratedTime' => [
                                'description' => '用户凭证报告的生成时间。',
                                'type' => 'string',
                                'example' => '2020-10-19T15:06:52Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '7A01826E-7601-44B0-B4DF-2B0C509836DE',
                            ],
                            'Content' => [
                                'description' => '用户凭证报告内容。'."\n"
                                    ."\n"
                                    .'采用Base64编码，解码后是CSV格式的用户凭证报告内容。',
                                'type' => 'string',
                                'example' => 'OVZWK4RMOVZW****',
                            ],
                            'IsTruncated' => [
                                'description' => '请求返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true'."\n"
                                    .'- false',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'NextToken' => [
                                'description' => '此参数在`IsTruncated`为true时生效，用于获取截断后的内容。',
                                'type' => 'string',
                                'example' => 'EXAMPLE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"GeneratedTime\\": \\"2020-10-19T15:06:52Z\\",\\n  \\"RequestId\\": \\"7A01826E-7601-44B0-B4DF-2B0C509836DE\\",\\n  \\"Content\\": \\"OVZWK4RMOVZW****\\",\\n  \\"IsTruncated\\": \\"true\\",\\n  \\"NextToken\\": \\"EXAMPLE\\"\\n}","errorExample":""},{"type":"xml","example":"<GetCredentialReportResponse>\\n    <GeneratedTime>2020-10-19T15:06:52Z</GeneratedTime>\\n    <RequestId>7A01826E-7601-44B0-B4DF-2B0C509836DE</RequestId>\\n    <Content>OVZWK4RMOVZW****</Content>\\n    <IsTruncated>true</IsTruncated>\\n    <NextToken>EXAMPLE</NextToken>\\n</GetCredentialReportResponse>","errorExample":""}]',
            'title' => '查询用户凭证报告内容',
            'summary' => '查询阿里云账号（主账号）下的用户凭证报告。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetAccountSecurityPracticeReport' => [
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
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ABA822EE-85C2-4418-9577-A1831FC8466D',
                            ],
                            'AccountSecurityPracticeInfo' => [
                                'description' => '阿里云账号安全报告信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccountSecurityPracticeUserInfo' => [
                                        'description' => '阿里云账号安全报告信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'UnusedAkNum' => [
                                                'description' => '阿里云账号中未使用的访问密钥的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'SubUserWithUnusedAccessKey' => [
                                                'description' => '拥有未使用访问密钥的RAM用户的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'RootWithAccessKey' => [
                                                'description' => '阿里云账号访问密钥（AccessKey）的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'SubUser' => [
                                                'description' => '阿里云账号中RAM用户的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '9',
                                            ],
                                            'BindMfa' => [
                                                'description' => '是否已开启多因素认证。取值：'."\n"
                                                    ."\n"
                                                    .'- true：已开启。'."\n"
                                                    .'- false：未开启。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'OldAkNum' => [
                                                'description' => '阿里云账号中旧访问密钥的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'SubUserPwdLevel' => [
                                                'description' => 'RAM用户密码强度的等级。取值：'."\n"
                                                    ."\n"
                                                    .'- low'."\n"
                                                    .'- mid'."\n"
                                                    .'- high',
                                                'type' => 'string',
                                                'example' => 'low',
                                            ],
                                            'SubUserWithOldAccessKey' => [
                                                'description' => '使用旧访问密钥的RAM用户的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                            'SubUserBindMfa' => [
                                                'description' => '绑定了多因素认证设备的RAM用户的个数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '0',
                                            ],
                                        ],
                                    ],
                                    'Score' => [
                                        'description' => '阿里云账号安全最终得分。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '63',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ABA822EE-85C2-4418-9577-A1831FC8466D\\",\\n  \\"AccountSecurityPracticeInfo\\": {\\n    \\"AccountSecurityPracticeUserInfo\\": {\\n      \\"UnusedAkNum\\": 0,\\n      \\"SubUserWithUnusedAccessKey\\": 0,\\n      \\"RootWithAccessKey\\": 1,\\n      \\"SubUser\\": 9,\\n      \\"BindMfa\\": false,\\n      \\"OldAkNum\\": 0,\\n      \\"SubUserPwdLevel\\": \\"low\\",\\n      \\"SubUserWithOldAccessKey\\": 0,\\n      \\"SubUserBindMfa\\": 0\\n    },\\n    \\"Score\\": 63\\n  }\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GetAccountSecurityPracticeReportResponse>\\r\\n\\t<RequestId>ABA822EE-85C2-4418-9577-A1831FC8466D</RequestId>\\r\\n\\t<AccountSecurityPracticeInfo>\\r\\n\\t\\t<Score>63</Score>\\r\\n\\t\\t<AccountSecurityPracticeUserInfo>\\r\\n\\t\\t\\t<SubUser>9</SubUser>\\r\\n\\t\\t\\t<SubUserBindMfa>0</SubUserBindMfa>\\r\\n\\t\\t\\t<SubUserWithUnusedAccessKey>0</SubUserWithUnusedAccessKey>\\r\\n\\t\\t\\t<RootWithAccessKey>1</RootWithAccessKey>\\r\\n\\t\\t\\t<SubUserWithOldAccessKey>0</SubUserWithOldAccessKey>\\r\\n\\t\\t\\t<SubUserPwdLevel>low</SubUserPwdLevel>\\r\\n\\t\\t\\t<UnusedAkNum>0</UnusedAkNum>\\r\\n\\t\\t\\t<OldAkNum>0</OldAkNum>\\r\\n\\t\\t\\t<BindMfa>false</BindMfa>\\r\\n\\t\\t</AccountSecurityPracticeUserInfo>\\r\\n\\t</AccountSecurityPracticeInfo>\\r\\n</GetAccountSecurityPracticeReportResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '查询阿里云账号的安全报告',
            'summary' => '获取阿里云账号（主账号）下的用户凭证报告。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GenerateCredentialReport' => [
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
            'operationType' => 'write',
            'deprecated' => false,
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
                                'example' => 'BBCCA90A-A1F0-4B16-B355-692247197805',
                            ],
                            'State' => [
                                'description' => '用户凭证报告的生成状态。取值：'."\n"
                                    ."\n"
                                    .'- STARTED：用户凭证报告开始生成。'."\n"
                                    .'- INPROGRESS：用户凭证报告生成中。'."\n"
                                    .'- COMPLETED：用户凭证报告已经生成。'."\n",
                                'type' => 'string',
                                'example' => 'STARTED',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BBCCA90A-A1F0-4B16-B355-692247197805\\",\\n  \\"State\\": \\"STARTED\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<GenerateCredentialReportResponse>\\r\\n\\t<RequestId>BBCCA90A-A1F0-4B16-B355-692247197805</RequestId>\\r\\n\\t<State>STARTED</State>\\r\\n</GenerateCredentialReportResponse>\\r\\n\\t\\r\\n","errorExample":""}]',
            'title' => '生成用户凭证报告',
            'summary' => '生成阿里云账号（主账号）下的用户凭证报告。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ims.aliyuncs.com',
        ],
    ],
];
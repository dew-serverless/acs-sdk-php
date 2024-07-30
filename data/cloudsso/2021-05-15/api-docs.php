<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'cloudsso',
        'version' => '2021-05-15',
    ],
    'directories' => [
        [
            'id' => 96221,
            'title' => '管理云SSO',
            'type' => 'directory',
            'children' => [
                'EnableService',
                'DisableService',
                'GetServiceStatus',
                'CreateDirectory',
                'ListDirectories',
                'GetDirectory',
                'GetDirectoryStatistics',
                'UpdateDirectory',
                'DeleteDirectory',
                'EnableDelegateAccount',
                'DisableDelegateAccount',
            ],
        ],
        [
            'id' => 96231,
            'title' => '管理用户',
            'type' => 'directory',
            'children' => [
                'CreateUser',
                'ListUsers',
                'GetUser',
                'UpdateUser',
                'UpdateUserStatus',
                'DeleteUser',
                'ResetUserPassword',
                'ListMFADevicesForUser',
                'DeleteMFADeviceForUser',
                'UpdateMFAAuthenticationSettings',
                'GetMFAAuthenticationSettings',
                'UpdateUserMFAAuthenticationSettings',
                'GetUserMFAAuthenticationSettings',
                'GetMFAAuthenticationSettingInfo',
                'SetLoginPreference',
                'GetLoginPreference',
                'SetPasswordPolicy',
                'GetPasswordPolicy',
                'GetUserId',
            ],
        ],
        [
            'id' => 96243,
            'title' => '管理用户组',
            'type' => 'directory',
            'children' => [
                'CreateGroup',
                'ListGroups',
                'GetGroup',
                'UpdateGroup',
                'DeleteGroup',
                'AddUserToGroup',
                'RemoveUserFromGroup',
                'ListJoinedGroupsForUser',
                'ListGroupMembers',
            ],
        ],
        [
            'id' => 96261,
            'title' => '管理SCIM同步',
            'type' => 'directory',
            'children' => [
                'CreateSCIMServerCredential',
                'ListSCIMServerCredentials',
                'UpdateSCIMServerCredentialStatus',
                'DeleteSCIMServerCredential',
                'SetSCIMSynchronizationStatus',
                'GetSCIMSynchronizationStatus',
            ],
        ],
        [
            'id' => 96253,
            'title' => '管理单点登录',
            'type' => 'directory',
            'children' => [
                'GetDirectorySAMLServiceProviderInfo',
                'SetExternalSAMLIdentityProvider',
                'GetExternalSAMLIdentityProvider',
                'ClearExternalSAMLIdentityProvider',
                'AddExternalSAMLIdPCertificate',
                'ListExternalSAMLIdPCertificates',
                'RemoveExternalSAMLIdPCertificate',
            ],
        ],
        [
            'id' => 96268,
            'title' => '管理访问配置',
            'type' => 'directory',
            'children' => [
                'CreateAccessConfiguration',
                'ListAccessConfigurations',
                'GetAccessConfiguration',
                'UpdateAccessConfiguration',
                'DeleteAccessConfiguration',
                'AddPermissionPolicyToAccessConfiguration',
                'RemovePermissionPolicyFromAccessConfiguration',
                'UpdateInlinePolicyForAccessConfiguration',
                'ListPermissionPoliciesInAccessConfiguration',
            ],
        ],
        [
            'id' => 96278,
            'title' => '管理多账号授权',
            'type' => 'directory',
            'children' => [
                'ProvisionAccessConfiguration',
                'DeprovisionAccessConfiguration',
                'ListAccessConfigurationProvisionings',
                'CreateAccessAssignment',
                'ListAccessAssignments',
                'DeleteAccessAssignment',
                'ListTasks',
                'GetTask',
                'GetTaskStatus',
            ],
        ],
        [
            'id' => 187283,
            'title' => '管理RAM用户同步',
            'type' => 'directory',
            'children' => [
                'CreateUserProvisioning',
                'GetUserProvisioning',
                'ListUserProvisionings',
                'UpdateUserProvisioning',
                'DeleteUserProvisioning',
                'UpdateUserProvisioningConfiguration',
                'GetUserProvisioningConfiguration',
                'ListUserProvisioningEvents',
                'GetUserProvisioningEvent',
                'DeleteUserProvisioningEvent',
                'RetryUserProvisioningEvent',
                'GetUserProvisioningStatistics',
                'GetUserProvisioningRdAccountStatistics',
            ],
        ],
        [
            'id' => 180902,
            'title' => '其他（不维护）',
            'type' => 'directory',
            'children' => [
                'SetMFAAuthenticationStatus',
                'GetMFAAuthenticationStatus',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'EnableService' => [
            'summary' => '调用EnableService开通云SSO。',
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
                                'example' => '3D57EAD2-8723-1F26-B69C-F8707D8B565D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3D57EAD2-8723-1F26-B69C-F8707D8B565D\\"\\n}","errorExample":""},{"type":"xml","example":"<EnableServiceResponse>\\n    <RequestId>3D57EAD2-8723-1F26-B69C-F8707D8B565D</RequestId>\\n</EnableServiceResponse>","errorExample":""}]',
            'title' => '开通云SSO',
            'description' => '只有资源目录的管理账号下具有开通云SSO权限的用户才能调用本API。更多信息，请参见[开通云SSO](~~262819~~)。'."\n"
                ."\n"
                .'调用该API视同您同意<props="china">[产品协议](https://terms.aliyun.com/legal-agreement/terms/suit_bu1_ali_cloud/suit_bu1_ali_cloud202108161009_32808.html)</props><props="intl">[产品协议](https://www.alibabacloud.com/help/doc-detail/42416.htm)</props>。',
        ],
        'DisableService' => [
            'summary' => '调用DisableService关闭云SSO。',
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
                                'example' => '3257EAD2-8723-1F26-B69C-F8707D8B565D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3257EAD2-8723-1F26-B69C-F8707D8B565D\\"\\n}","errorExample":""},{"type":"xml","example":"<DisableServiceResponse>\\n    <RequestId>3257EAD2-8723-1F26-B69C-F8707D8B565D</RequestId>\\n</DisableServiceResponse>","errorExample":""}]',
            'title' => '关闭云SSO',
            'description' => '当云SSO内没有任何目录时，您可以根据需要关闭云SSO。关闭后，您也可以随时开启它。',
        ],
        'GetServiceStatus' => [
            'summary' => '调用GetServiceStatus查询云SSO状态。',
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
            'deprecated' => false,
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
                                'example' => 'ADADC31D-90EE-5459-99B0-D83DF07769A3',
                            ],
                            'ServiceStatus' => [
                                'description' => '云SSO状态。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '云SSO开通状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：开通。'."\n"
                                            .'- Disabled：关闭。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'AccountId' => [
                                        'description' => '阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '151266687691****',
                                    ],
                                    'PrerequisiteCheckResult' => [
                                        'description' => '检查是否满足云SSO的开通条件。取值：'."\n"
                                            ."\n"
                                            .'- Success：满足。'."\n"
                                            .'- Failed：不满足。'."\n"
                                            ."\n"
                                            .'> 当`Status`为`Disabled`时，返回该参数。',
                                        'type' => 'string',
                                        'example' => 'Success',
                                    ],
                                    'RegionsInUse' => [
                                        'description' => '地域ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '地域ID。取值：'."\n"
                                                ."\n"
                                                .'- 如果已创建目录，该参数为目录所在的地域ID。'."\n"
                                                .'- 如果未创建目录，该参数为空。'."\n"
                                                ."\n"
                                                .'> 当`Status`为`Enabled`时，返回该参数。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADADC31D-90EE-5459-99B0-D83DF07769A3\\",\\n  \\"ServiceStatus\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"AccountId\\": \\"151266687691****\\",\\n    \\"PrerequisiteCheckResult\\": \\"Success\\",\\n    \\"RegionsInUse\\": [\\n      \\"cn-shanghai\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetServiceStatusResponse>\\n    <RequestId>ADADC31D-90EE-5459-99B0-D83DF07769A3</RequestId>\\n    <ServiceStatus>\\n        <Status>Enabled</Status>\\n        <AccountId>151266687691****</AccountId>\\n        <RegionsInUse>cn-shanghai</RegionsInUse>\\n    </ServiceStatus>\\n</GetServiceStatusResponse>","errorExample":""}]',
            'title' => '查询云SSO状态',
        ],
        'CreateDirectory' => [
            'summary' => '调用CreateDirectory创建目录。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录名称。该参数必须全局唯一。'."\n"
                            ."\n"
                            .'格式：包含小写字母、数字或短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。不能以`d-`开头。'."\n"
                            ."\n"
                            .'长度：2~64个字符。'."\n"
                            ."\n"
                            .'> 如果不指定，则由系统自动生成。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example',
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
                                'example' => 'ADADC31D-90EE-5459-99B0-D83DF07769A3',
                            ],
                            'Directory' => [
                                'description' => '目录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '目录创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-10T04:04:04Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '目录修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-10T04:04:04Z',
                                    ],
                                    'Region' => [
                                        'description' => '目录所在的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'DirectoryName' => [
                                        'description' => '目录名称。',
                                        'type' => 'string',
                                        'example' => 'example',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ADADC31D-90EE-5459-99B0-D83DF07769A3\\",\\n  \\"Directory\\": {\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"CreateTime\\": \\"2021-10-10T04:04:04Z\\",\\n    \\"UpdateTime\\": \\"2021-10-10T04:04:04Z\\",\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DirectoryName\\": \\"example\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDirectoryResponse>\\n    <RequestId>ADADC31D-90EE-5459-99B0-D83DF07769A3</RequestId>\\n    <Directory>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <CreateTime>2021-10-10T04:04:04Z</CreateTime>\\n        <UpdateTime>2021-10-10T04:04:04Z</UpdateTime>\\n        <Region>cn-shanghai</Region>\\n        <DirectoryName>example</DirectoryName>\\n    </Directory>\\n</CreateDirectoryResponse>","errorExample":""}]',
            'title' => '创建目录',
            'description' => '### 使用说明'."\n"
                .'目录是云SSO中的实例。使用云SSO前必须先创建一个目录，所有云SSO资源都必须在目录中维护。'."\n"
                ."\n"
                .'您需要选择一个地域作为云SSO目录的所在地域。阿里云确保所有云SSO相关数据都只会保存在该地域，但与您在何处部署ECS、RDS等云资源无关，您在全球都可以登录并访问任何地域的云资源。您可以根据安全合规需求及目标用户所在地理位置选择适合您的地域。如果没有特殊的安全合规需求，一般情况下建议您选择与目标用户所在地理位置最为接近的地域，这样可以进一步提升用户的访问速度。目前，支持在华东2（上海）、中国（香港）、美国（硅谷）和德国（法兰克福）四个地域创建目录。'."\n"
                ."\n"
                .'本文将提供一个示例，在华东2（上海）地域创建名为`example`的目录。'."\n"
                ."\n"
                .'### 使用限制'."\n"
                ."\n"
                .'- 一个管理账号只能创建一个目录。'."\n"
                .'- 如果您想修改目录所在的地域，您必须先删除已有目录，然后在其他地域创建新的目录。',
        ],
        'ListDirectories' => [
            'summary' => '调用ListDirectories查询目录列表。',
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
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Directories' => [
                                'description' => '目录列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '目录列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DirectoryId' => [
                                            'description' => '目录ID。',
                                            'type' => 'string',
                                            'example' => 'd-00fc2p61****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '目录创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T08:35:26Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '目录修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-10-25T09:13:24Z',
                                        ],
                                        'Region' => [
                                            'description' => '目录所在的地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'DirectoryName' => [
                                            'description' => '目录名称。',
                                            'type' => 'string',
                                            'example' => 'new-example',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '9A504392-F06D-5029-AB64-6654CB9F1DC1',
                            ],
                            'TotalCounts' => [
                                'description' => '目录数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Directories\\": [\\n    {\\n      \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n      \\"CreateTime\\": \\"2021-06-30T08:35:26Z\\",\\n      \\"UpdateTime\\": \\"2021-10-25T09:13:24Z\\",\\n      \\"Region\\": \\"cn-shanghai\\",\\n      \\"DirectoryName\\": \\"new-example\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"9A504392-F06D-5029-AB64-6654CB9F1DC1\\",\\n  \\"TotalCounts\\": 1\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<ListDirectoriesResponse>\\r\\n\\t<Directories>\\r\\n\\t\\t<DirectoryId>d-00fc2p61****</DirectoryId>\\r\\n\\t\\t<CreateTime>2021-06-30T08:35:26Z</CreateTime>\\r\\n\\t\\t<UpdateTime>2021-10-25T09:13:24Z</UpdateTime>\\r\\n\\t\\t<Region>cn-shanghai</Region>\\r\\n\\t\\t<DirectoryName>new-example</DirectoryName>\\r\\n\\t</Directories>\\r\\n\\t<RequestId>9A504392-F06D-5029-AB64-6654CB9F1DC1</RequestId>\\r\\n\\t<TotalCounts>1</TotalCounts>\\r\\n</ListDirectoriesResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '查询目录列表',
            'description' => '本文将提供一个示例，查询当前阿里云账号下的目录列表。返回结果显示，当前阿里云账号下只有一个ID为`d-00fc2p61****`的目录。',
        ],
        'GetDirectory' => [
            'summary' => '调用GetDirectory查询目录信息。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'AA6A9E4B-8A61-59E1-AA87-F61CA18258A3',
                            ],
                            'Directory' => [
                                'description' => '目录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '目录创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-06-30T08:35:26Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '目录修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-10-25T07:18:46Z',
                                    ],
                                    'Region' => [
                                        'description' => '目录所在的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'DirectoryName' => [
                                        'description' => '目录名称。',
                                        'type' => 'string',
                                        'example' => 'example',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"AA6A9E4B-8A61-59E1-AA87-F61CA18258A3\\",\\n  \\"Directory\\": {\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"CreateTime\\": \\"2021-06-30T08:35:26Z\\",\\n    \\"UpdateTime\\": \\"2021-10-25T07:18:46Z\\",\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DirectoryName\\": \\"example\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDirectoryResponse>\\n    <RequestId>AA6A9E4B-8A61-59E1-AA87-F61CA18258A3</RequestId>\\n    <Directory>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <CreateTime>2021-06-30T08:35:26Z</CreateTime>\\n        <UpdateTime>2021-10-25T07:18:46Z</UpdateTime>\\n        <Region>cn-shanghai</Region>\\n        <DirectoryName>example</DirectoryName>\\n    </Directory>\\n</GetDirectoryResponse>","errorExample":""}]',
            'title' => '查询目录信息',
            'description' => '本文将提供一个示例，查询ID为`d-00fc2p61****`的目录信息。',
        ],
        'GetDirectoryStatistics' => [
            'summary' => '调用GetDirectoryStatistics查询目录的统计信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '7B7228B0-A435-5D27-A6B2-ED3571F0654B',
                            ],
                            'DirectoryStatistics' => [
                                'description' => '目录的统计信息。',
                                'type' => 'object',
                                'properties' => [
                                    'UserCount' => [
                                        'description' => '用户数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '16',
                                    ],
                                    'GroupCount' => [
                                        'description' => '用户组数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                    ],
                                    'UserQuota' => [
                                        'description' => '用户配额。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'GroupQuota' => [
                                        'description' => '用户组配额。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '500',
                                    ],
                                    'AccessConfigurationQuota' => [
                                        'description' => '访问配置配额。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'AccessAssignmentCount' => [
                                        'description' => '授权数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'SCIMServerCredentialCount' => [
                                        'description' => 'SCIM同步密钥数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'SSOEnabled' => [
                                        'description' => '是否已启用SSO登录。取值：'."\n"
                                            ."\n"
                                            .'- true：已启用。'."\n"
                                            .'- false：未启用。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Region' => [
                                        'description' => '目录所在的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'AccessConfigurationCount' => [
                                        'description' => '访问配置数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '6',
                                    ],
                                    'DirectoryName' => [
                                        'description' => '目录名称。',
                                        'type' => 'string',
                                        'example' => 'new-example',
                                    ],
                                    'InProgressTaskCount' => [
                                        'description' => '执行中的任务数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'SCIMSyncEnabled' => [
                                        'description' => '是否已启用SCIM同步。取值：'."\n"
                                            ."\n"
                                            .'- true：已启用。'."\n"
                                            .'- false：未启用。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'SystemPolicyPerAccessConfigurationQuota' => [
                                        'description' => '访问配置绑定的系统策略配额。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'InlinePolicyPerAccessConfigurationQuota' => [
                                        'description' => '访问配置绑定的内置策略配额。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7B7228B0-A435-5D27-A6B2-ED3571F0654B\\",\\n  \\"DirectoryStatistics\\": {\\n    \\"UserCount\\": 16,\\n    \\"GroupCount\\": 4,\\n    \\"UserQuota\\": 1000,\\n    \\"GroupQuota\\": 500,\\n    \\"AccessConfigurationQuota\\": 1000,\\n    \\"AccessAssignmentCount\\": 5,\\n    \\"SCIMServerCredentialCount\\": 2,\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"SSOEnabled\\": false,\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"AccessConfigurationCount\\": 6,\\n    \\"DirectoryName\\": \\"new-example\\",\\n    \\"InProgressTaskCount\\": 0,\\n    \\"SCIMSyncEnabled\\": true,\\n    \\"SystemPolicyPerAccessConfigurationQuota\\": 20,\\n    \\"InlinePolicyPerAccessConfigurationQuota\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDirectoryStatisticsResponse>\\n    <RequestId>7B7228B0-A435-5D27-A6B2-ED3571F0654B</RequestId>\\n    <DirectoryStatistics>\\n        <UserCount>16</UserCount>\\n        <GroupCount>4</GroupCount>\\n        <UserQuota>1000</UserQuota>\\n        <GroupQuota>500</GroupQuota>\\n        <AccessConfigurationQuota>1000</AccessConfigurationQuota>\\n        <SCIMSyncEnabled>true</SCIMSyncEnabled>\\n        <AccessAssignmentCount>5</AccessAssignmentCount>\\n        <SCIMServerCredentialCount>2</SCIMServerCredentialCount>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <SSOEnabled>false</SSOEnabled>\\n        <Region>cn-shanghai</Region>\\n        <AccessConfigurationCount>6</AccessConfigurationCount>\\n        <DirectoryName>new-example</DirectoryName>\\n        <InProgressTaskCount>0</InProgressTaskCount>\\n    </DirectoryStatistics>\\n</GetDirectoryStatisticsResponse>","errorExample":""}]',
            'title' => '查询目录的统计信息',
            'description' => '本文将提供一个示例，查询ID为`d-00fc2p61****`目录的统计信息，包括用户数量、用户配额、用户组数量、用户组配额、访问配置数量、访问配置配额、访问配置绑定的系统策略配额、授权数量、SCIM同步密钥数量、SSO登录启用状态、SCIM启用状态和异步任务数量等信息。',
        ],
        'UpdateDirectory' => [
            'summary' => '调用UpdateDirectory修改目录名称。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'NewDirectoryName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的目录名称。该参数必须全局唯一。'."\n"
                            ."\n"
                            .'格式：包含小写字母、数字和短划线（-）。不能以短划线（-）开头或结尾，且不能有两个连续的短划线（-）。如果新的目录名以`d-`开头，则只能与本目录ID相同，而不能设置为其他值。'."\n"
                            ."\n"
                            .'长度：2~64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'new-example',
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
                                'example' => 'B182C041-8C64-5F2F-A07B-FC67FAF89CF9',
                            ],
                            'Directory' => [
                                'description' => '目录信息。',
                                'type' => 'object',
                                'properties' => [
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '目录创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-06-30T08:35:26Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '目录修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-10-25T09:13:24Z',
                                    ],
                                    'Region' => [
                                        'description' => '目录所在的地域ID。',
                                        'type' => 'string',
                                        'example' => 'cn-shanghai',
                                    ],
                                    'DirectoryName' => [
                                        'description' => '目录名称。',
                                        'type' => 'string',
                                        'example' => 'new-example',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B182C041-8C64-5F2F-A07B-FC67FAF89CF9\\",\\n  \\"Directory\\": {\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"CreateTime\\": \\"2021-06-30T08:35:26Z\\",\\n    \\"UpdateTime\\": \\"2021-10-25T09:13:24Z\\",\\n    \\"Region\\": \\"cn-shanghai\\",\\n    \\"DirectoryName\\": \\"new-example\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateDirectoryResponse>\\n    <RequestId>B182C041-8C64-5F2F-A07B-FC67FAF89CF9</RequestId>\\n    <Directory>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <CreateTime>2021-06-30T08:35:26Z</CreateTime>\\n        <UpdateTime>2021-10-25T09:13:24Z</UpdateTime>\\n        <Region>cn-shanghai</Region>\\n        <DirectoryName>new-example</DirectoryName>\\n    </Directory>\\n</UpdateDirectoryResponse>","errorExample":""}]',
            'title' => '修改目录名称',
            'description' => '修改目录名称会影响云SSO用户的登录地址，请在修改后务必将新的登录地址通知用户。'."\n"
                ."\n"
                .'本文将提供一个示例，将目录名称修改为`new-example`。',
        ],
        'DeleteDirectory' => [
            'summary' => '调用DeleteDirectory删除目录。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'B182C041-8C64-5F2F-A07B-FC67FAF89CF9',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B182C041-8C64-5F2F-A07B-FC67FAF89CF9\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDirectoryResponse>\\n    <RequestId>B182C041-8C64-5F2F-A07B-FC67FAF89CF9</RequestId>\\n</DeleteDirectoryResponse>","errorExample":""}]',
            'title' => '删除目录',
            'description' => '### 前提条件'."\n"
                .'删除目录前，请确保目录中没有任何资源。具体如下：'."\n"
                ."\n"
                .'- 移除所有用户和用户组在RD账号上的授权。具体操作，请参见[DeleteAccessAssignment](~~338350~~)。'."\n"
                .'- 删除用户：具体操作，请参见[DeleteUser](~~341671~~)。'."\n"
                .'- 删除用户组：具体操作，请参见[DeleteGroup](~~341821~~)。'."\n"
                .'- 删除访问配置：具体操作，请参见[DeleteAccessConfiguration](~~336907~~)。'."\n"
                .'- 删除SCIM密钥：具体操作，请参见[DeleteSCIMServerCredential](~~341842~~)。'."\n"
                .'- 删除单点登录配置：具体操作，请参见[ClearExternalSAMLIdentityProvider](~~341573~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                .'本文将提供一个示例，删除ID为`d-00fc2p61****`的目录。',
        ],
        'EnableDelegateAccount' => [
            'summary' => '调用EnableDelegateAccount启用云SSO委派管理员账号。',
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
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO委派管理员账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '180658567986****',
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
                                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\"\\n}","type":"json"}]',
            'title' => '启用云SSO委派管理员账号',
            'description' => '资源目录管理账号可以将资源目录的成员设置为云SSO的委派管理员账号。具体操作，请参见[添加委派管理员账号](~~208117~~)。'."\n"
                ."\n"
                .'设置成功后，您可以调用本接口启用云SSO的委派管理员账号，实现云SSO委派管理员管理云SSO的目的。',
        ],
        'DisableDelegateAccount' => [
            'summary' => '调用DisableDelegateAccount禁用云SSO委派管理员账号。',
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
                    'name' => 'AccountId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要禁用的云SSO委派管理员账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1200971777065046',
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
                                'example' => '12B3E332-DD16-515B-B695-39BA233AA172',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"12B3E332-DD16-515B-B695-39BA233AA172\\"\\n}","type":"json"}]',
            'title' => '禁用云SSO委派管理员账号',
        ],
        'CreateUser' => [
            'summary' => '调用CreateUser创建用户。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。目录内必须唯一。不支持修改。'."\n"
                            ."\n"
                            .'格式：包含数字、英文字母和特殊符号`@_-.`。'."\n"
                            ."\n"
                            .'长度：最大64个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Alice',
                    ],
                ],
                [
                    'name' => 'FirstName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的名。'."\n"
                            ."\n"
                            .'长度：最大64个字符。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alice',
                    ],
                ],
                [
                    'name' => 'LastName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的姓。'."\n"
                            ."\n"
                            .'长度：最大64个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Lee',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的显示名称。'."\n"
                            ."\n"
                            .'长度：最大256个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alice',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的描述。'."\n"
                            ."\n"
                            .'长度：最大1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a user.',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的电子邮箱。目录内必须唯一。'."\n"
                            ."\n"
                            .'长度：最大128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alice@example.com',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的状态。取值：'."\n"
                            ."\n"
                            .'- Enabled（默认值）：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enabled',
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
                                'description' => '用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '用户的状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'UserName' => [
                                        'description' => '用户名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'Email' => [
                                        'description' => '用户的电子邮箱。',
                                        'type' => 'string',
                                        'example' => 'Alice@example.com',
                                    ],
                                    'Description' => [
                                        'description' => '用户的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user.',
                                    ],
                                    'UserId' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'FirstName' => [
                                        'description' => '用户的名。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T03:03:42Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户类型。取值：'."\n"
                                            ."\n"
                                            .'- Manual：手动创建。'."\n"
                                            .'- Synchronized：外部同步。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'DisplayName' => [
                                        'description' => '用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T03:03:42Z',
                                    ],
                                    'LastName' => [
                                        'description' => '用户的姓。',
                                        'type' => 'string',
                                        'example' => 'Lee',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"UserName\\": \\"Alice\\",\\n    \\"Email\\": \\"Alice@example.com\\",\\n    \\"Description\\": \\"This is a user.\\",\\n    \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"FirstName\\": \\"Alice\\",\\n    \\"CreateTime\\": \\"2021-10-26T03:03:42Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"DisplayName\\": \\"Alice\\",\\n    \\"UpdateTime\\": \\"2021-10-26T03:03:42Z\\",\\n    \\"LastName\\": \\"Lee\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserResponse>\\n    <User>\\n        <Status>Enabled</Status>\\n        <UserName>Alice</UserName>\\n        <Email/>\\n        <Description/>\\n        <UserId>u-00q8wbq42wiltcrk****</UserId>\\n        <FirstName/>\\n        <CreateTime>2021-10-26T03:03:42Z</CreateTime>\\n        <ProvisionType>Manual</ProvisionType>\\n        <DisplayName/>\\n        <UpdateTime>2021-10-26T03:03:42Z</UpdateTime>\\n        <LastName/>\\n    </User>\\n    <RequestId>F6F90F3D-4502-5877-B80B-97476F6AE2CC</RequestId>\\n</CreateUserResponse>","errorExample":""}]',
            'title' => '创建用户',
        ],
        'ListUsers' => [
            'summary' => '调用ListUsers查询用户列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户状态，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'ProvisionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- Manual：手动创建。'."\n"
                            .'- Synchronized：外部同步。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Manual',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件。'."\n"
                            ."\n"
                            .'格式：`<Attribute> <Operator> <Value>`，不区分大小写。目前`<Attribute>`只支持`UserName`，`Operator`只支持`eq`（Equals）和`sw`（Start With）。'."\n"
                            ."\n"
                            .'示例：Filter = "UserName sw test"，表示查询用户名称以test开头的全部用户。Filter = "UserName eq testuser"，表示查询用户名称为`testuser`的用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UserName sw test',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到`IsTruncated`为`false`时，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。 '."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '734D9AAC-9A8E-5DF6-A633-ADE70FF2A9B1',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Users' => [
                                'description' => '用户列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '用户的状态。取值：'."\n"
                                                ."\n"
                                                .'- Enabled：启用。'."\n"
                                                .'- Disabled：禁用。',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'UserName' => [
                                            'description' => '用户名称。',
                                            'type' => 'string',
                                            'example' => 'AliceLee@example.onmicrosoft.com',
                                        ],
                                        'Email' => [
                                            'description' => '用户的电子邮箱。',
                                            'type' => 'string',
                                            'example' => 'AliceLee@example.onmicrosoft.com',
                                        ],
                                        'Description' => [
                                            'description' => '用户的描述。',
                                            'type' => 'string',
                                            'example' => 'This is a user.',
                                        ],
                                        'UserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'u-00bikzkuzbb58luh****',
                                        ],
                                        'FirstName' => [
                                            'description' => '用户的名。',
                                            'type' => 'string',
                                            'example' => 'Alice',
                                        ],
                                        'CreateTime' => [
                                            'description' => '用户的创建时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T09:20:08Z',
                                        ],
                                        'ProvisionType' => [
                                            'description' => '用户的类型。取值：'."\n"
                                                ."\n"
                                                .'- Manual：手动创建。'."\n"
                                                .'- Synchronized：外部同步。',
                                            'type' => 'string',
                                            'example' => 'Synchronized',
                                        ],
                                        'DisplayName' => [
                                            'description' => '用户的显示名称。',
                                            'type' => 'string',
                                            'example' => 'AliceLee',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '用户的修改时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2021-06-30T09:20:08Z',
                                        ],
                                        'LastName' => [
                                            'description' => '用户的姓。',
                                            'type' => 'string',
                                            'example' => 'Lee',
                                        ],
                                        'ExternalId' => [
                                            'description' => '外部身份提供商的用户标识符信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '外部身份提供商的用户标识符。',
                                                    'type' => 'string',
                                                    'example' => 'c73******a5fdd5'."\n",
                                                ],
                                                'Issuer' => [
                                                    'description' => '外部身份同步渠道，当前仅支持SCIM同步。',
                                                    'type' => 'string',
                                                    'example' => 'SCIM',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"734D9AAC-9A8E-5DF6-A633-ADE70FF2A9B1\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCounts\\": 2,\\n  \\"IsTruncated\\": false,\\n  \\"Users\\": [\\n    {\\n      \\"Status\\": \\"Enabled\\",\\n      \\"UserName\\": \\"AliceLee@example.onmicrosoft.com\\",\\n      \\"Email\\": \\"AliceLee@example.onmicrosoft.com\\",\\n      \\"Description\\": \\"This is a user.\\",\\n      \\"UserId\\": \\"u-00bikzkuzbb58luh****\\",\\n      \\"FirstName\\": \\"Alice\\",\\n      \\"CreateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"ProvisionType\\": \\"Synchronized\\",\\n      \\"DisplayName\\": \\"AliceLee\\",\\n      \\"UpdateTime\\": \\"2021-06-30T09:20:08Z\\",\\n      \\"LastName\\": \\"Lee\\",\\n      \\"ExternalId\\": {\\n        \\"Id\\": \\"c73******a5fdd5\\\\n\\",\\n        \\"Issuer\\": \\"SCIM\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListUsersResponse>\\n\\t<RequestId>734D9AAC-9A8E-5DF6-A633-ADE70FF2A9B1</RequestId>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>2</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n\\t<Users>\\n\\t\\t<User>\\n\\t\\t\\t<Status>Enabled</Status>\\n\\t\\t\\t<UserName>AliceLee@example.onmicrosoft.com</UserName>\\n\\t\\t\\t<Email>AliceLee@example.onmicrosoft.com</Email>\\n\\t\\t\\t<Description>This is a user.</Description>\\n\\t\\t\\t<UserId>u-00bikzkuzbb58luh****</UserId>\\n\\t\\t\\t<FirstName>Alice</FirstName>\\n\\t\\t\\t<CreateTime>2021-06-30T09:20:08Z</CreateTime>\\n\\t\\t\\t<ProvisionType>Synchronized</ProvisionType>\\n\\t\\t\\t<DisplayName>AliceLee</DisplayName>\\n\\t\\t\\t<UpdateTime>2021-06-30T09:20:08Z</UpdateTime>\\n\\t\\t\\t<LastName>Lee</LastName>\\n\\t\\t</User>\\n\\t\\t<User>\\n\\t\\t\\t<Status>Enabled</Status>\\n\\t\\t\\t<UserName>user1</UserName>\\n\\t\\t\\t<Email></Email>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<UserId>u-00pkfll14gwm1mb9****</UserId>\\n\\t\\t\\t<FirstName></FirstName>\\n\\t\\t\\t<CreateTime>2021-07-12T03:11:38Z</CreateTime>\\n\\t\\t\\t<ProvisionType>Manual</ProvisionType>\\n\\t\\t\\t<DisplayName></DisplayName>\\n\\t\\t\\t<UpdateTime>2021-07-12T03:11:38Z</UpdateTime>\\n\\t\\t\\t<LastName></LastName>\\n\\t\\t</User>\\n\\t</Users>\\n</ListUsersResponse>\\t\\n","errorExample":""}]',
            'title' => '查询用户列表',
        ],
        'GetUser' => [
            'summary' => '调用GetUser查询指定用户信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'description' => '用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '用户的状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'UserName' => [
                                        'description' => '用户名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'Email' => [
                                        'description' => '用户的电子邮箱。',
                                        'type' => 'string',
                                        'example' => 'Alice@example.com',
                                    ],
                                    'Description' => [
                                        'description' => '用户的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user.',
                                    ],
                                    'UserId' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'FirstName' => [
                                        'description' => '用户的名。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T03:03:42Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户的类型。取值：'."\n"
                                            ."\n"
                                            .'- Manual：手动创建。'."\n"
                                            .'- Synchronized：外部同步。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'DisplayName' => [
                                        'description' => '用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T06:43:55Z',
                                    ],
                                    'LastName' => [
                                        'description' => '用户的姓。',
                                        'type' => 'string',
                                        'example' => 'Lee',
                                    ],
                                    'ExternalId' => [
                                        'description' => '外部身份提供商的用户标识符信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'description' => '外部身份提供商的用户标识符。',
                                                'type' => 'string',
                                                'example' => 'c73******a5fdd5',
                                            ],
                                            'Issuer' => [
                                                'description' => '外部身份同步渠道，当前仅支持SCIM同步。',
                                                'type' => 'string',
                                                'example' => 'SCIM',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'EE42D2C4-A30A-59B7-ACEB-6D22FB44174A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"UserName\\": \\"Alice\\",\\n    \\"Email\\": \\"Alice@example.com\\",\\n    \\"Description\\": \\"This is a user.\\",\\n    \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"FirstName\\": \\"Alice\\",\\n    \\"CreateTime\\": \\"2021-10-26T03:03:42Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"DisplayName\\": \\"Alice\\",\\n    \\"UpdateTime\\": \\"2021-10-26T06:43:55Z\\",\\n    \\"LastName\\": \\"Lee\\",\\n    \\"ExternalId\\": {\\n      \\"Id\\": \\"c73******a5fdd5\\",\\n      \\"Issuer\\": \\"SCIM\\"\\n    }\\n  },\\n  \\"RequestId\\": \\"EE42D2C4-A30A-59B7-ACEB-6D22FB44174A\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserResponse>\\n    <User>\\n        <Status>Enabled</Status>\\n        <UserName>Alice</UserName>\\n        <Email>Alice@example.com</Email>\\n        <Description>This is a user.</Description>\\n        <UserId>u-00q8wbq42wiltcrk****</UserId>\\n        <FirstName>Alice</FirstName>\\n        <CreateTime>2021-10-26T03:03:42Z</CreateTime>\\n        <ProvisionType>Manual</ProvisionType>\\n        <DisplayName>Alice</DisplayName>\\n        <UpdateTime>2021-10-26T06:43:55Z</UpdateTime>\\n        <LastName>Lee</LastName>\\n    </User>\\n    <RequestId>EE42D2C4-A30A-59B7-ACEB-6D22FB44174A</RequestId>\\n</GetUserResponse>","errorExample":""}]',
            'title' => '查询用户信息',
        ],
        'UpdateUser' => [
            'summary' => '调用UpdateUser修改用户信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'NewFirstName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Alice',
                    ],
                ],
                [
                    'name' => 'NewLastName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的姓。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Lee',
                    ],
                ],
                [
                    'name' => 'NewDisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的显示名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliceLee',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a user.',
                    ],
                ],
                [
                    'name' => 'NewEmail',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的电子邮箱。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AliceLee@example.com',
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
                                'description' => '用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '用户的状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'UserName' => [
                                        'description' => '用户名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'Email' => [
                                        'description' => '用户的电子邮箱。',
                                        'type' => 'string',
                                        'example' => 'AliceLee@example.com',
                                    ],
                                    'Description' => [
                                        'description' => '用户的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user.',
                                    ],
                                    'UserId' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'FirstName' => [
                                        'description' => '用户的名。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户的创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T03:03:42Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户的类型。取值：'."\n"
                                            ."\n"
                                            .'- Manual：手动创建。'."\n"
                                            .'- Synchronized：外部同步。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'DisplayName' => [
                                        'description' => '用户的显示名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户的修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2021-10-26T07:32:32Z',
                                    ],
                                    'LastName' => [
                                        'description' => '用户的姓。',
                                        'type' => 'string',
                                        'example' => 'Lee',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"User\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"UserName\\": \\"Alice\\",\\n    \\"Email\\": \\"AliceLee@example.com\\",\\n    \\"Description\\": \\"This is a user.\\",\\n    \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"FirstName\\": \\"Alice\\",\\n    \\"CreateTime\\": \\"2021-10-26T03:03:42Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"DisplayName\\": \\"Alice\\",\\n    \\"UpdateTime\\": \\"2021-10-26T07:32:32Z\\",\\n    \\"LastName\\": \\"Lee\\"\\n  },\\n  \\"RequestId\\": \\"F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateUserResponse>\\r\\n\\t<User>\\r\\n\\t\\t<Status>Enabled</Status>\\r\\n\\t\\t<UserName>Alice</UserName>\\r\\n\\t\\t<Email>AliceLee@example.com</Email>\\r\\n\\t\\t<Description>This is a user.</Description>\\r\\n\\t\\t<UserId>u-00q8wbq42wiltcrk****</UserId>\\r\\n\\t\\t<FirstName>Alice</FirstName>\\r\\n\\t\\t<CreateTime>2021-10-26T03:03:42Z</CreateTime>\\r\\n\\t\\t<ProvisionType>Manual</ProvisionType>\\r\\n\\t\\t<DisplayName>Alice</DisplayName>\\r\\n\\t\\t<UpdateTime>2021-10-26T07:32:32Z</UpdateTime>\\r\\n\\t\\t<LastName>Lee</LastName>\\r\\n\\t</User>\\r\\n\\t<RequestId>F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A</RequestId>\\r\\n</UpdateUserResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '修改用户信息',
            'description' => '您可以根据需要修改用户的`FirstName`、`LastName`、`DisplayName`、`Email`和`Description`，不能修改用户的`UserName` 。'."\n"
                ."\n"
                .'> 当启用SCIM同步时，不能修改SCIM同步用户的信息。',
        ],
        'UpdateUserStatus' => [
            'summary' => '调用UpdateUserStatus修改用户状态。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'NewStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户的状态。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Disabled',
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
                                'example' => 'EE598602-AC67-56EF-B7CC-2927C30AA0A8',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EE598602-AC67-56EF-B7CC-2927C30AA0A8\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<UpdateUserStatusResponse>\\r\\n\\t<RequestId>EE598602-AC67-56EF-B7CC-2927C30AA0A8</RequestId>\\r\\n</UpdateUserStatusResponse>\\t\\r\\n","errorExample":""}]',
            'title' => '修改用户状态',
            'description' => '本文将提供一个示例，将ID为`u-00q8wbq42wiltcrk****`的用户状态修改为禁用（Disabled）。处于禁用状态的用户，将不能正常登录云SSO用户门户。',
        ],
        'DeleteUser' => [
            'summary' => '调用DeleteUser删除用户。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
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
                                'example' => 'E598602-AC67-56EF-B7CC-2927C30AA0A8',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E598602-AC67-56EF-B7CC-2927C30AA0A8\\"\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\r\\n<DeleteUserResponse>\\r\\n\\t<RequestId>EE598602-AC67-56EF-B7CC-2927C30AA0A8</RequestId>\\r\\n</DeleteUserResponse>\\t","errorExample":""}]',
            'title' => '删除用户',
            'description' => '### 前提条件'."\n"
                .'删除用户前，请确保用户未关联以下资源，否则会删除失败。具体如下：'."\n"
                ."\n"
                .'- MFA设备：您需要删除用户绑定的MFA设备。具体操作，请参见[DeleteMFADeviceForUser](~~341675~~)。'."\n"
                .'- 授权：您需要移除用户在RD账号上的授权。具体操作，请参见[DeleteAccessAssignment](~~338350~~)。'."\n"
                .'- 用户组：您需要将用户从用户组中移除。具体操作，请参见[RemoveUserFromGroup](~~335116~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                ."\n"
                .'当启用SCIM同步时，不能删除SCIM同步用户。'."\n"
                ."\n"
                .'本文将提供一个示例，删除ID为`u-00q8wbq42wiltcrk****`的用户。',
        ],
        'ResetUserPassword' => [
            'summary' => '调用ResetUserPassword重置用户密码。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新密码。'."\n"
                            ."\n"
                            .'格式：必须包含大写英文字母、小写英文字母、数字、特殊符号每种至少各一个。'."\n"
                            ."\n"
                            .'长度：8~32个字符。'."\n"
                            ."\n"
                            .'> 当`GenerateRandomPassword`为`False`时，您需要设置`Password`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'uc)XK$?ictf72CKFDy9vtWaFmISl****',
                    ],
                ],
                [
                    'name' => 'GenerateRandomPassword',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否自动生成密码。取值：'."\n"
                            ."\n"
                            .'- True：自动生成密码。'."\n"
                            .'- False（默认值）：手动设置密码。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                    ],
                ],
                [
                    'name' => 'RequirePasswordResetForNextLogin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户下次登录时是否需要重置密码。取值：'."\n"
                            ."\n"
                            .'- True：需要重置。'."\n"
                            .'- False（默认值）：不需要重置。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'False',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NewPassword' => [
                                'description' => '新密码。'."\n"
                                    ."\n"
                                    .'> 该参数仅在系统自动生成密码时显示。',
                                'type' => 'string',
                                'example' => 'W2koInFIm0Wy2wVZ$oB)MzD$nY!G****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NewPassword\\": \\"W2koInFIm0Wy2wVZ$oB)MzD$nY!G****\\",\\n  \\"RequestId\\": \\"F44F02EC-70D1-5E51-8E8E-FA9AC4EF952A\\"\\n}","errorExample":""},{"type":"xml","example":"<ResetUserPasswordResponse>\\n    <NewPassword>W2koInFIm0Wy2wVZ$oB)MzD$nY!G****</NewPassword>\\n    <RequestId>F07A9FF3-B22F-5ACF-8825-89483B96F2FD</RequestId>\\n</ResetUserPasswordResponse>","errorExample":""}]',
            'title' => '重置用户密码',
            'description' => '当用户忘记密码、用户密码已过期或用户密码存在安全风险时，云SSO管理员可以为用户重置密码。'."\n"
                ."\n"
                .'> 启用单点登录后，不允许重置用户密码。'."\n"
                ."\n"
                .'本文将提供一个示例，通过系统自动生成密码的方式重置用户`u-00q8wbq42wiltcrk****`的密码。',
        ],
        'ListMFADevicesForUser' => [
            'summary' => '调用ListMFADevicesForUser查询用户的MFA设备列表。每个用户最多只能有2个MFA设备。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
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
                                'example' => '8B9982ED-FD0D-5622-8EA0-7B768685DCE7',
                            ],
                            'TotalCounts' => [
                                'description' => 'MFA设备总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'MFADevices' => [
                                'description' => 'MFA设备列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'MFA设备列表 。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceType' => [
                                            'description' => 'MFA设备类型。取值：TOTP，表示基于TOTP的虚拟MFA设备。',
                                            'type' => 'string',
                                            'example' => 'TOTP',
                                        ],
                                        'EffectiveTime' => [
                                            'description' => '生效时间。',
                                            'type' => 'string',
                                            'example' => '2021-10-29T09:14:06Z',
                                        ],
                                        'DeviceId' => [
                                            'description' => 'MFA设备ID。',
                                            'type' => 'string',
                                            'example' => 'mfa-00ujhet8pycljj7j****',
                                        ],
                                        'UserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'u-00q8wbq42wiltcrk****',
                                        ],
                                        'DeviceName' => [
                                            'description' => 'MFA设备名称。',
                                            'type' => 'string',
                                            'example' => 'Alice-MFA1',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8B9982ED-FD0D-5622-8EA0-7B768685DCE7\\",\\n  \\"TotalCounts\\": 1,\\n  \\"MFADevices\\": [\\n    {\\n      \\"DeviceType\\": \\"TOTP\\",\\n      \\"EffectiveTime\\": \\"2021-10-29T09:14:06Z\\",\\n      \\"DeviceId\\": \\"mfa-00ujhet8pycljj7j****\\",\\n      \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n      \\"DeviceName\\": \\"Alice-MFA1\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListMFADevicesForUserResponse>\\n\\t<RequestId>8B9982ED-FD0D-5622-8EA0-7B768685DCE7</RequestId>\\n\\t<TotalCounts>1</TotalCounts>\\n\\t<MFADevices>\\n\\t\\t<MFADevice>\\n\\t\\t\\t<DeviceType>TOTP</DeviceType>\\n\\t\\t\\t<EffectiveTime>2021-10-29T09:14:06Z</EffectiveTime>\\n\\t\\t\\t<DeviceId>mfa-00ujhet8pycljj7j****</DeviceId>\\n\\t\\t\\t<UserId>u-00q8wbq42wiltcrk****</UserId>\\n\\t\\t\\t<DeviceName>Alice-MFA1</DeviceName>\\n\\t\\t</MFADevice>\\n\\t</MFADevices>\\n</ListMFADevicesForUserResponse>\\t","errorExample":""}]',
            'title' => '查询用户的MFA设备列表',
            'description' => '本文将提供一个示例，查询用户`u-00q8wbq42wiltcrk****`的MFA设备列表。返回结果显示，该用户配置了一个名为`Alice-MFA1`的MFA设备。',
        ],
        'DeleteMFADeviceForUser' => [
            'summary' => '调用DeleteMFADeviceForUser删除用户的MFA设备。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'MFADeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MFA设备ID。'."\n"
                            ."\n"
                            .'您可以调用[ListMFADevicesForUser](~~333531~~)查询MFA设备ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'mfa-00ujhet8pycljj7j****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '8B9982ED-FD0D-5622-8EA0-7B768685DCE7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8B9982ED-FD0D-5622-8EA0-7B768685DCE7\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteMFADeviceForUserResponse>\\n    <RequestId>8B9982ED-FD0D-5622-8EA0-7B768685DCE7</RequestId>\\n</DeleteMFADeviceForUserResponse>","errorExample":""}]',
            'title' => '删除用户的MFA设备',
            'description' => '本文将提供一个示例，删除用户`u-00q8wbq42wiltcrk****`绑定的MFA设备`mfa-00ujhet8pycljj7j****`。',
        ],
        'UpdateMFAAuthenticationSettings' => [
            'summary' => '调用UpdateMFAAuthenticationSettings修改全局MFA配置。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'MFAAuthenticationSettings',
                    'in' => 'query',
                    'schema' => [
                        'description' => '全局MFA配置。取值：'."\n"
                            ."\n"
                            .'- Enabled：为所有用户启用MFA校验。'."\n"
                            .'- Byuser：依赖用户的MFA独立配置。关于用户MFA单独配置的详情，请参见[UpdateUserMFAAuthenticationSettings](~~450135~~)。'."\n"
                            .'- Disabled：为所有用户禁用MFA校验。'."\n"
                            .'- OnlyRiskyLogin：只在异常登录时验证。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'OperationForRiskLogin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当登录是否进行多因素配置选项值是只在异常登录时验证时。取值：'."\n"
                            ."\n"
                            .'Autonomous：异常登录时可以跳过绑定MFA, 但是已经绑定的必须验证MFA。'."\n"
                            .'EnforceVerify：未绑定MFA时需要强制绑定，已绑定的需验证。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Autonomous',
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
                                'example' => 'A1C748E3-8944-5593-81BC-7D96AE24F77B',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A1C748E3-8944-5593-81BC-7D96AE24F77B\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateMFAAuthenticationSettingsResponse>\\n    <RequestId>A1C748E3-8944-5593-81BC-7D96AE24F77B</RequestId>\\n</UpdateMFAAuthenticationSettingsResponse>","errorExample":""}]',
            'title' => '修改全局MFA配置',
            'description' => '当启用用户名密码登录时，您可以配置全局用户登录时的MFA校验策略。'."\n"
                ."\n"
                .'本文将提供一个示例，为目录`d-00fc2p61****`下所有云SSO用户启用MFA校验。',
        ],
        'GetMFAAuthenticationSettings' => [
            'summary' => '调用GetMFAAuthenticationSettings查询全局MFA配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'A2BC00C5-76A2-5FFC-A340-927940A98377',
                            ],
                            'MFAAuthenticationAdvanceSettings' => [
                                'description' => '全局MFA配置。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：为所有用户启用MFA校验。'."\n"
                                    .'- Byuser：依赖用户的MFA独立配置。'."\n"
                                    .'- Disabled：为所有用户禁用MFA校验。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A2BC00C5-76A2-5FFC-A340-927940A98377\\",\\n  \\"MFAAuthenticationAdvanceSettings\\": \\"Enabled\\"\\n}","errorExample":""},{"type":"xml","example":"<GetMFAAuthenticationSettingsResponse>\\n    <RequestId>A2BC00C5-76A2-5FFC-A340-927940A98377</RequestId>\\n    <MFAAuthenticationAdvanceSettings>Enabled</MFAAuthenticationAdvanceSettings>\\n</GetMFAAuthenticationSettingsResponse>","errorExample":""}]',
            'title' => '查询全局MFA配置',
            'description' => '> 该API后续将不再维护和更新，推荐您使用新API [GetMFAAuthenticationSettingInfo](~~611286~~)，查询更详细的信息。'."\n"
                ."\n"
                .'本文将提供一个示例，查询目录`d-00fc2p61****`的全局MFA配置。返回结果显示，全局MFA为已启用状态。',
        ],
        'UpdateUserMFAAuthenticationSettings' => [
            'summary' => '调用UpdateUserMFAAuthenticationSettings修改用户MFA独立配置。',
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
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'UserMFAAuthenticationSettings',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户MFA配置。取值：'."\n"
                            .'- Enabled：为指定用户启用MFA校验。'."\n"
                            .'- Disabled：为指定用户禁用MFA校验。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '5E6C6049-E9B0-5F6F-A104-6150E3B1F4D7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E6C6049-E9B0-5F6F-A104-6150E3B1F4D7\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserMFAAuthenticationSettingsResponse>\\n    <RequestId>5E6C6049-E9B0-5F6F-A104-6150E3B1F4D7</RequestId>\\n</UpdateUserMFAAuthenticationSettingsResponse>","errorExample":""}]',
            'title' => '修改用户MFA独立配置',
            'description' => '当您调用[UpdateMFAAuthenticationSettings](~~450134~~)将全局MFA配置为`Byuser`，即依赖用户MFA独立配置时，您需要调用UpdateUserMFAAuthenticationSettings完成用户MFA的独立配置。'."\n"
                ."\n"
                .'新创建用户的MFA独立配置默认为已启用`Enabled`状态。'."\n"
                ."\n"
                .'本文将提供一个示例，为用户`u-00q8wbq42wiltcrk****`启用MFA校验。',
        ],
        'GetUserMFAAuthenticationSettings' => [
            'summary' => '调用GetUserMFAAuthenticationSettings查询用户MFA独立配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '5B598B62-85E6-5792-9DF1-246D251B07DA',
                            ],
                            'UserMFAAuthenticationSettings' => [
                                'description' => '用户MFA配置。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：为指定用户启用MFA校验。'."\n"
                                    .'- Disabled：为指定用户禁用MFA校验。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5B598B62-85E6-5792-9DF1-246D251B07DA\\",\\n  \\"UserMFAAuthenticationSettings\\": \\"Enabled\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserMFAAuthenticationSettingsResponse>\\n    <UserMFAAuthenticationSettings>Enabled</UserMFAAuthenticationSettings>\\n    <RequestId>5B598B62-85E6-5792-9DF1-246D251B07DA</RequestId>\\n</GetUserMFAAuthenticationSettingsResponse>","errorExample":""}]',
            'title' => '查询用户MFA独立配置',
            'description' => '本文将提供一个示例，查询用户`u-00q8wbq42wiltcrk****`的MFA独立配置。返回结果显示，用户MFA为已启用状态。',
        ],
        'GetMFAAuthenticationSettingInfo' => [
            'summary' => '调用GetMFAAuthenticationSettingInfo查询全局MFA配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
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
                                'example' => '95D3B107-DA80-5B34-A3D0-9E82F8F0DA0E',
                            ],
                            'MFAAuthenticationSettingInfo' => [
                                'description' => '全局MFA校验配置。',
                                'type' => 'object',
                                'properties' => [
                                    'MfaAuthenticationAdvanceSettings' => [
                                        'description' => '全局MFA校验策略。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：为所有用户启用MFA校验。'."\n"
                                            .'- Byuser：依赖用户的独立MFA配置。关于用户MFA单独配置的详情，请参见[UpdateUserMFAAuthenticationSettings](~~450135~~)。'."\n"
                                            .'- Disabled：为所有用户禁用MFA校验。'."\n"
                                            .'- OnlyRiskyLogin：只在异常登录时验证。',
                                        'type' => 'string',
                                        'example' => 'OnlyRiskyLogin',
                                    ],
                                    'OperationForRiskLogin' => [
                                        'description' => '异常登录时的MFA校验策略。取值：'."\n"
                                            ."\n"
                                            .'- Autonomous：异常登录时可以跳过MFA绑定，但是已经绑定的必须验证。'."\n"
                                            .'- EnforceVerify：异常登录时强制绑定或验证MFA。'."\n"
                                            ."\n"
                                            .'> 仅当MfaAuthenticationAdvanceSettings值为Byuser或OnlyRiskyLogin时显示该参数。',
                                        'type' => 'string',
                                        'example' => 'EnforceVerify',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"95D3B107-DA80-5B34-A3D0-9E82F8F0DA0E\\",\\n  \\"MFAAuthenticationSettingInfo\\": {\\n    \\"MfaAuthenticationAdvanceSettings\\": \\"OnlyRiskyLogin\\",\\n    \\"OperationForRiskLogin\\": \\"EnforceVerify\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetMFAAuthenticationSettingInfoResponse>\\n    <RequestId>95D3B107-DA80-5B34-A3D0-9E82F8F0DA0E</RequestId>\\n    <MFAAuthenticationSettingInfo>\\n        <MfaAuthenticationAdvanceSettings>OnlyRiskyLogin</MfaAuthenticationAdvanceSettings>\\n        <OperationForRiskLogin>EnforceVerify</OperationForRiskLogin>\\n    </MFAAuthenticationSettingInfo>\\n</GetMFAAuthenticationSettingInfoResponse>","errorExample":""}]',
            'title' => '查询全局MFA配置',
            'description' => '当启用用户名密码登录时，您可以获取全局用户登录时的MFA校验策略。'."\n"
                ."\n"
                .'本文将提供一个示例，查询目录`u-00q8wbq42wiltcrk****`下云SSO用户的全局MFA校验策略。',
        ],
        'SetLoginPreference' => [
            'summary' => '调用SetLoginPreference设置云SSO用户的登录偏好。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'LoginNetworkMasks',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IP地址白名单，用于限制云SSO用户只能通过白名单中的IP地址登录云SSO用户门户。约束如下：'."\n"
                            ."\n"
                            .'- 可以输入IP地址或IP地址段，支持IPv4地址。'."\n"
                            .'- 最多允许输入100个IP地址或IP地址段，多值以`;`分隔。'."\n"
                            .'- 传入空值时，表示不修改原配置值。'."\n"
                            .'- 传入`;`时，表示清空原配置值。'."\n"
                            .'- 只能对云SSO用户通过用户名密码或单点登录方式登录到云SSO用户门户生效，从云SSO用户门户登录到RD账号不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.0/16;10.0.0.0/8',
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
                                'example' => '9B13E4EE-3853-5852-9165-597C32AD8FB7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B13E4EE-3853-5852-9165-597C32AD8FB7\\"\\n}","type":"json"}]',
            'title' => '设置登录偏好',
        ],
        'GetLoginPreference' => [
            'summary' => '调用GetLoginPreference查询登录偏好。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '8CE8B990-193D-50CE-A604-69F3E7DCE740',
                            ],
                            'LoginPreference' => [
                                'description' => '登录偏好。',
                                'type' => 'object',
                                'properties' => [
                                    'LoginNetworkMasks' => [
                                        'description' => 'IP地址白名单，用于限制云SSO用户只能通过白名单中的IP地址登录云SSO用户门户。'."\n"
                                            ."\n"
                                            .'只能对云SSO用户通过用户名密码或单点登录方式登录到云SSO用户门户生效，从云SSO用户门户登录到RD账号不生效。'."\n"
                                            ."\n"
                                            .'为空时，表示未设置IP地址白名单。',
                                        'type' => 'string',
                                        'example' => '192.168.0.0/16;10.0.0.0/8',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8CE8B990-193D-50CE-A604-69F3E7DCE740\\",\\n  \\"LoginPreference\\": {\\n    \\"LoginNetworkMasks\\": \\"192.168.0.0/16;10.0.0.0/8\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询登录偏好',
        ],
        'SetPasswordPolicy' => [
            'summary' => '调用SetPasswordPolicy设置云SSO用户的密码策略。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'MinPasswordLength',
                    'in' => 'query',
                    'schema' => [
                        'description' => '最小密码长度。'."\n"
                            ."\n"
                            .'取值范围：8~32。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8',
                    ],
                ],
                [
                    'name' => 'MinPasswordDifferentChars',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中最少包含的不同字符数量。'."\n"
                            ."\n"
                            .'最小值为0，表示不限制密码中的不同字符数量。最大值为`MinPasswordLength`设置的值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '8',
                    ],
                ],
                [
                    'name' => 'PasswordNotContainUsername',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码中是否不允许包含用户名。取值：'."\n"
                            ."\n"
                            .'- true：密码中不允许包含用户名。'."\n"
                            .'- false：密码中允许包含用户名。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MaxPasswordAge',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码有效期。'."\n"
                            ."\n"
                            .'取值范围：1~120。单位：天。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '90',
                    ],
                ],
                [
                    'name' => 'PasswordReusePrevention',
                    'in' => 'query',
                    'schema' => [
                        'description' => '历史密码检查策略。'."\n"
                            ."\n"
                            .'禁止使用前N次的历史密码，N的取值范围：0~24，0表示不启用历史密码检查策略。'."\n"
                            .'> 2024年1月5日之前修改的密码不计入历史密码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'MaxLoginAttempts',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码重试次数。'."\n"
                            ."\n"
                            .'连续输入错误密码达到设定次数后，账号将被锁定一小时。'."\n"
                            ."\n"
                            .'取值范围：0~32，0表示不限制密码重试次数。',
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
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\"\\n}","type":"json"}]',
            'title' => '设置密码策略',
        ],
        'GetPasswordPolicy' => [
            'summary' => '调用GetPasswordPolicy查询云SSO用户的密码策略。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'B7C6E839-FB65-59BE-B753-003AA8AF7DF7',
                            ],
                            'PasswordPolicy' => [
                                'description' => '密码策略。',
                                'type' => 'object',
                                'properties' => [
                                    'MinPasswordLength' => [
                                        'description' => '最小密码长度。'."\n"
                                            ."\n"
                                            .'取值范围：8~32。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'MinPasswordDifferentChars' => [
                                        'description' => '密码中最少包含的不同字符数量。'."\n"
                                            ."\n"
                                            .'最小值为0，表示不限制密码中的不同字符数量。最大值为`MinPasswordLength`设置的值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '8',
                                    ],
                                    'PasswordNotContainUsername' => [
                                        'description' => '密码中是否不允许包含用户名。取值：'."\n"
                                            ."\n"
                                            .'- true：密码中不允许包含用户名。'."\n"
                                            .'- false：密码中允许包含用户名。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxPasswordAge' => [
                                        'description' => '密码有效期。'."\n"
                                            ."\n"
                                            .'取值范围：1~120。单位：天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '90',
                                    ],
                                    'PasswordReusePrevention' => [
                                        'description' => '历史密码检查策略。'."\n"
                                            ."\n"
                                            .'禁止使用前N次的历史密码，N的取值范围：0~24，0表示不启用历史密码检查策略。'."\n"
                                            .'> 2024年1月5日之前修改的密码不计入历史密码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'MaxLoginAttempts' => [
                                        'description' => '密码重试次数。'."\n"
                                            ."\n"
                                            .'连续输入错误密码达到设定次数后，账号将被锁定一小时。'."\n"
                                            ."\n"
                                            .'取值范围：0~32，0表示不限制密码重试次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '5',
                                    ],
                                    'RequireNumbers' => [
                                        'description' => '密码中是否需要有数字。取值：'."\n"
                                            .'- true：密码中需要有数字。'."\n"
                                            .'- false：密码中不需要有数字。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RequireLowerCaseChars' => [
                                        'description' => '密码中是否需要有小写字母。取值：'."\n"
                                            .'- true：密码中需要有小写字母。'."\n"
                                            .'- false：密码中不需要有小写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'MaxPasswordLength' => [
                                        'description' => '最大密码长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '32',
                                    ],
                                    'RequireUpperCaseChars' => [
                                        'description' => '密码中是否需要有大写字母。取值：'."\n"
                                            .'- true：密码中需要有大写字母。'."\n"
                                            .'- false：密码中不需要有大写字母。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'RequireSymbols' => [
                                        'description' => '密码中是否需要有符号。取值：'."\n"
                                            .'- true：密码中需要有符号。'."\n"
                                            .'- false：密码中不需要有符号。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'HardExpire' => [
                                        'description' => '密码过期后是否限制登录。取值：'."\n"
                                            .'- true：密码过期后限制登录。'."\n"
                                            .'- false：密码过期后不限制登录。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B7C6E839-FB65-59BE-B753-003AA8AF7DF7\\",\\n  \\"PasswordPolicy\\": {\\n    \\"MinPasswordLength\\": 8,\\n    \\"MinPasswordDifferentChars\\": 8,\\n    \\"PasswordNotContainUsername\\": true,\\n    \\"MaxPasswordAge\\": 90,\\n    \\"PasswordReusePrevention\\": 1,\\n    \\"MaxLoginAttempts\\": 5,\\n    \\"RequireNumbers\\": true,\\n    \\"RequireLowerCaseChars\\": true,\\n    \\"MaxPasswordLength\\": 32,\\n    \\"RequireUpperCaseChars\\": true,\\n    \\"RequireSymbols\\": true,\\n    \\"HardExpire\\": true\\n  }\\n}","type":"json"}]',
            'title' => '查询密码策略',
        ],
        'GetUserId' => [
            'summary' => '调用GetUserId通过ExternalId获取目录下对应的用户ID。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'ExternalId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '外部身份提供商的用户标识符信息。',
                        'type' => 'object',
                        'properties' => [
                            'Id' => [
                                'description' => '外部身份提供商的用户标识符。',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'c73******a5fdd5',
                            ],
                            'Issuer' => [
                                'description' => '外部身份同步渠道，当前仅支持SCIM同步。',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'example' => 'SCIM',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
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
                                'example' => 'A3A41736-A050-50B6-ABC5-590F376A0044',
                            ],
                            'UserId' => [
                                'description' => '云SSO用户ID。',
                                'type' => 'string',
                                'example' => 'u-d8d1iox****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A3A41736-A050-50B6-ABC5-590F376A0044\\",\\n  \\"UserId\\": \\"u-d8d1iox****\\"\\n}","type":"json"}]',
            'title' => '通过ExternalId获取用户ID',
        ],
        'CreateGroup' => [
            'summary' => '调用CreateGroup创建用户组。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的名称。'."\n"
                            ."\n"
                            .'格式：允许英文字母、数字和特殊字符`_-.` 。'."\n"
                            ."\n"
                            .'长度：最大128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestGroup',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的描述。'."\n"
                            ."\n"
                            .'长度：最大1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a group.',
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
                                    'GroupName' => [
                                        'description' => '用户组的名称。',
                                        'type' => 'string',
                                        'example' => 'TestGroup',
                                    ],
                                    'Description' => [
                                        'description' => '用户组的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a group.',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户组的创建时间。 ',
                                        'type' => 'string',
                                        'example' => '2021-11-01T02:38:27Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户组的类型。取值：Manual，表示手动创建。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户组的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-01T02:38:27Z',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组的ID。',
                                        'type' => 'string',
                                        'example' => 'g-00jqzghi2n3o5hkh****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '20E9650E-EC23-593E-933F-EA0D280D040C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupName\\": \\"TestGroup\\",\\n    \\"Description\\": \\"This is a group.\\",\\n    \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"UpdateTime\\": \\"2021-11-01T02:38:27Z\\",\\n    \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n  },\\n  \\"RequestId\\": \\"20E9650E-EC23-593E-933F-EA0D280D040C\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateGroupResponse>\\n    <Group>\\n        <GroupName>TestGroup</GroupName>\\n        <Description>This is a group.</Description>\\n        <CreateTime>2021-11-01T02:38:27Z</CreateTime>\\n        <ProvisionType>Manual</ProvisionType>\\n        <UpdateTime>2021-11-01T02:38:27Z</UpdateTime>\\n        <GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n    </Group>\\n    <RequestId>20E9650E-EC23-593E-933F-EA0D280D040C</RequestId>\\n</CreateGroupResponse>","errorExample":""}]',
            'title' => '创建用户组',
            'description' => '本文将提供一个示例，创建一个名为`TestGroup`的用户组。',
        ],
        'ListGroups' => [
            'summary' => '调用ListGroups查询用户组列表。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件。'."\n"
                            ."\n"
                            .'格式：`<Attribute> <Operator> <Value>`，不区分大小写。目前，`<Attribute>`只支持`GroupName`，`<Operator>`只支持`eq`（Equals）和`sw`（Start With）。'."\n"
                            ."\n"
                            .'示例：Filter = "GroupName sw test"，表示查询名称以test开头的全部用户组。Filter = "GroupName eq testgroup"，表示查询名称为testgroup的用户组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GroupName eq testgroup',
                    ],
                ],
                [
                    'name' => 'ProvisionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- Manual：手动创建。'."\n"
                            .'- Synchronized：外部同步。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Manual',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
                            ],
                            'Groups' => [
                                'description' => '用户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户组列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupName' => [
                                            'description' => '用户组的名称。',
                                            'type' => 'string',
                                            'example' => 'TestGroup',
                                        ],
                                        'Description' => [
                                            'description' => '用户组的描述。',
                                            'type' => 'string',
                                            'example' => 'This is a group.',
                                        ],
                                        'CreateTime' => [
                                            'description' => '用户组的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-01T02:38:27Z',
                                        ],
                                        'ProvisionType' => [
                                            'description' => '用户组的类型。取值：'."\n"
                                                ."\n"
                                                .'- Manual：手动创建。'."\n"
                                                .'- Synchronized：外部同步。',
                                            'type' => 'string',
                                            'example' => 'Manual',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '用户组的修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-01T02:38:27Z',
                                        ],
                                        'GroupId' => [
                                            'description' => '用户组的ID。',
                                            'type' => 'string',
                                            'example' => 'g-00jqzghi2n3o5hkh****',
                                        ],
                                    ],
                                ],
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\",\\n  \\"Groups\\": [\\n    {\\n      \\"GroupName\\": \\"TestGroup\\",\\n      \\"Description\\": \\"This is a group.\\",\\n      \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n      \\"ProvisionType\\": \\"Manual\\",\\n      \\"UpdateTime\\": \\"2021-11-01T02:38:27Z\\",\\n      \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n    }\\n  ],\\n  \\"MaxResults\\": 10,\\n  \\"TotalCounts\\": 3,\\n  \\"IsTruncated\\": false\\n}","errorExample":""},{"type":"xml","example":"<ListGroupsResponse>\\n\\t<RequestId>768F908D-A66A-5A5D-816C-20C93CBBFEE3</RequestId>\\n\\t<Groups>\\n\\t\\t<Group>\\n\\t\\t\\t<GroupName>group1</GroupName>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<CreateTime>2021-06-30T08:52:17Z</CreateTime>\\n\\t\\t\\t<ProvisionType>Synchronized</ProvisionType>\\n\\t\\t\\t<UpdateTime>2021-07-09T03:27:23Z</UpdateTime>\\n\\t\\t\\t<GroupId>g-00dd217ozcicxqz0****</GroupId>\\n\\t\\t</Group>\\n\\t\\t<Group>\\n\\t\\t\\t<GroupName>group2</GroupName>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<CreateTime>2021-07-09T03:26:48Z</CreateTime>\\n\\t\\t\\t<ProvisionType>Synchronized</ProvisionType>\\n\\t\\t\\t<UpdateTime>2021-07-09T03:26:48Z</UpdateTime>\\n\\t\\t\\t<GroupId>g-00e2fbulf91zlsuu****</GroupId>\\n\\t\\t</Group>\\n\\t\\t<Group>\\n\\t\\t\\t<GroupName>TestGroup</GroupName>\\n\\t\\t\\t<Description>This is a group.</Description>\\n\\t\\t\\t<CreateTime>2021-11-01T02:38:27Z</CreateTime>\\n\\t\\t\\t<ProvisionType>Manual</ProvisionType>\\n\\t\\t\\t<UpdateTime>2021-11-01T02:38:27Z</UpdateTime>\\n\\t\\t\\t<GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n\\t\\t</Group>\\n\\t</Groups>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>3</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n</ListGroupsResponse>\\t","errorExample":""}]',
            'title' => '查询用户组列表',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下的用户组列表。返回结果显示，该目录下一共存在3个用户组，其中`group1`和`group2`是从外部同步的用户组，`TestGroup`是云SSO内部手动创建的用户组。',
        ],
        'GetGroup' => [
            'summary' => '调用GetGroup查询指定用户组信息。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                    'GroupName' => [
                                        'description' => '用户组的名称。',
                                        'type' => 'string',
                                        'example' => 'TestGroup',
                                    ],
                                    'Description' => [
                                        'description' => '用户组的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a group.',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户组的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-01T02:38:27Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户组的类型。取值：'."\n"
                                            ."\n"
                                            .'- Manual：手动创建。'."\n"
                                            .'- Synchronized：外部同步。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户组的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-01T02:38:27Z',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组的ID。',
                                        'type' => 'string',
                                        'example' => 'g-00jqzghi2n3o5hkh****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '768F908D-A66A-5A5D-816C-20C93CBBFEE3',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupName\\": \\"TestGroup\\",\\n    \\"Description\\": \\"This is a group.\\",\\n    \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"UpdateTime\\": \\"2021-11-01T02:38:27Z\\",\\n    \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n  },\\n  \\"RequestId\\": \\"768F908D-A66A-5A5D-816C-20C93CBBFEE3\\"\\n}","errorExample":""},{"type":"xml","example":"<GetGroupResponse>\\n    <Group>\\n        <GroupName>TestGroup</GroupName>\\n        <Description>This is a group.</Description>\\n        <CreateTime>2021-11-01T02:38:27Z</CreateTime>\\n        <ProvisionType>Manual</ProvisionType>\\n        <UpdateTime>2021-11-01T02:38:27Z</UpdateTime>\\n        <GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n    </Group>\\n    <RequestId>768F908D-A66A-5A5D-816C-20C93CBBFEE3</RequestId>\\n</GetGroupResponse>","errorExample":""}]',
            'title' => '查询用户组信息',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下用户组`g-00jqzghi2n3o5hkh****`的信息。',
        ],
        'UpdateGroup' => [
            'summary' => '调用UpdateGroup修改用户组信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
                    ],
                ],
                [
                    'name' => 'NewGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的用户组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NewTestGroup',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的用户组描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a group.',
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
                                    'GroupName' => [
                                        'description' => '用户组的名称。',
                                        'type' => 'string',
                                        'example' => 'NewTestGroup',
                                    ],
                                    'Description' => [
                                        'description' => '用户组的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a group.',
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户组的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-01T02:38:27Z',
                                    ],
                                    'ProvisionType' => [
                                        'description' => '用户组的类型。取值：'."\n"
                                            ."\n"
                                            .'- Manual：手动创建。'."\n"
                                            .'- Synchronized：外部同步。',
                                        'type' => 'string',
                                        'example' => 'Manual',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '用户组的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-01T06:06:11Z',
                                    ],
                                    'GroupId' => [
                                        'description' => '用户组的ID。',
                                        'type' => 'string',
                                        'example' => 'g-00jqzghi2n3o5hkh****',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F723DE01-6276-5DC4-9B1F-9CBE3E1748B2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Group\\": {\\n    \\"GroupName\\": \\"NewTestGroup\\",\\n    \\"Description\\": \\"This is a group.\\",\\n    \\"CreateTime\\": \\"2021-11-01T02:38:27Z\\",\\n    \\"ProvisionType\\": \\"Manual\\",\\n    \\"UpdateTime\\": \\"2021-11-01T06:06:11Z\\",\\n    \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n  },\\n  \\"RequestId\\": \\"F723DE01-6276-5DC4-9B1F-9CBE3E1748B2\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateGroupResponse>\\n    <Group>\\n        <GroupName>NewTestGroup</GroupName>\\n        <Description>This is a group.</Description>\\n        <CreateTime>2021-11-01T02:38:27Z</CreateTime>\\n        <ProvisionType>Manual</ProvisionType>\\n        <UpdateTime>2021-11-01T06:06:11Z</UpdateTime>\\n        <GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n    </Group>\\n    <RequestId>F723DE01-6276-5DC4-9B1F-9CBE3E1748B2</RequestId>\\n</UpdateGroupResponse>","errorExample":""}]',
            'title' => '修改用户组信息',
            'description' => '您可以根据需要修改用户组的`GroupName`和`Description`。'."\n"
                ."\n"
                .'> 当启用SCIM同步后，不能修改SCIM同步的用户组信息。'."\n"
                ."\n"
                .'本文将提供一个示例，修改用户组`g-00jqzghi2n3o5hkh****`的名称为`NewTestGroup`。',
        ],
        'DeleteGroup' => [
            'summary' => '调用DeleteGroup删除指定用户组。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
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
                                'example' => 'F723DE01-6276-5DC4-9B1F-9CBE3E1748B2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F723DE01-6276-5DC4-9B1F-9CBE3E1748B2\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteGroupResponse>\\n    <RequestId>F723DE01-6276-5DC4-9B1F-9CBE3E1748B2</RequestId>\\n</DeleteGroupResponse>","errorExample":""}]',
            'title' => '删除用户组',
            'description' => '### 前提条件'."\n"
                .'删除用户组前，请确保用户组未关联以下资源，否则会删除失败。具体如下：'."\n"
                ."\n"
                .'- 用户：您需要移除用户组中的用户。具体操作，请参见[RemoveUserFromGroup](~~335116~~)。'."\n"
                .'- 授权：您需要移除用户组在RD账号上的授权。具体操作，请参见[DeleteAccessAssignment](~~338350~~)。'."\n"
                ."\n"
                .'### 使用说明'."\n"
                ."\n"
                .'当启用SCIM同步后，不能删除SCIM同步的用户组。'."\n"
                ."\n"
                .'本文将提供一个示例，删除用户组`g-00jqzghi2n3o5hkh****`。',
        ],
        'AddUserToGroup' => [
            'summary' => '调用AddUserToGroup为用户组添加用户。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'F76AF4FC-25E4-5CF1-B7CB-74F3CB72F0F0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F76AF4FC-25E4-5CF1-B7CB-74F3CB72F0F0\\"\\n}","errorExample":""},{"type":"xml","example":"<AddUserToGroupResponse>\\n    <RequestId>F76AF4FC-25E4-5CF1-B7CB-74F3CB72F0F0</RequestId>\\n</AddUserToGroupResponse>","errorExample":""}]',
            'title' => '为用户组添加用户',
            'description' => '当启用SCIM同步后，不能为SCIM同步的用户组添加用户。'."\n"
                ."\n"
                .'本文将提供一个示例，将用户`u-00q8wbq42wiltcrk****`添加到用户组`g-00jqzghi2n3o5hkh****`。',
        ],
        'RemoveUserFromGroup' => [
            'summary' => '从用户组中移除用户。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'F723DE01-6276-5DC4-9B1F-9CBE3E1748B2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F723DE01-6276-5DC4-9B1F-9CBE3E1748B2\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveUserFromGroupResponse>\\n    <RequestId>F723DE01-6276-5DC4-9B1F-9CBE3E1748B2</RequestId>\\n</RemoveUserFromGroupResponse>","errorExample":""}]',
            'title' => '从用户组中移除用户',
            'description' => '当启用SCIM同步后，不能从SCIM同步的用户组中移除用户。'."\n"
                ."\n"
                .'本文将提供一个示例，从用户组`g-00jqzghi2n3o5hkh****`中移除用户`u-00q8wbq42wiltcrk****`。',
        ],
        'ListJoinedGroupsForUser' => [
            'summary' => '查询用户加入的用户组。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E9BBB45F-7877-5DE9-96A5-20E6CFA48929',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'JoinedGroups' => [
                                'description' => '加入的用户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '加入的用户组列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupName' => [
                                            'description' => '用户组的名称。',
                                            'type' => 'string',
                                            'example' => 'TestGroup',
                                        ],
                                        'Description' => [
                                            'description' => '用户组的描述。',
                                            'type' => 'string',
                                            'example' => 'This is a group.',
                                        ],
                                        'UserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'u-00q8wbq42wiltcrk****',
                                        ],
                                        'ProvisionType' => [
                                            'description' => '用户组的类型。取值：'."\n"
                                                ."\n"
                                                .'- Manual：手动创建。'."\n"
                                                .'- Synchronized：外部同步。',
                                            'type' => 'string',
                                            'example' => 'Manual',
                                        ],
                                        'JoinTime' => [
                                            'description' => '用户加入用户组的时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-01T06:58:18Z',
                                        ],
                                        'GroupId' => [
                                            'description' => '用户组ID。',
                                            'type' => 'string',
                                            'example' => 'g-00jqzghi2n3o5hkh****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"E9BBB45F-7877-5DE9-96A5-20E6CFA48929\\",\\n  \\"TotalCounts\\": 2,\\n  \\"MaxResults\\": 10,\\n  \\"IsTruncated\\": false,\\n  \\"JoinedGroups\\": [\\n    {\\n      \\"GroupName\\": \\"TestGroup\\",\\n      \\"Description\\": \\"This is a group.\\",\\n      \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n      \\"ProvisionType\\": \\"Manual\\",\\n      \\"JoinTime\\": \\"2021-11-01T06:58:18Z\\",\\n      \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListJoinedGroupsForUserResponse>\\n\\t<RequestId>E9BBB45F-7877-5DE9-96A5-20E6CFA48929</RequestId>\\n\\t<TotalCounts>2</TotalCounts>\\n\\t<MaxResults>10</MaxResults>\\n\\t<IsTruncated>false</IsTruncated>\\n\\t<JoinedGroups>\\n\\t\\t<JoinedGroup>\\n\\t\\t\\t<GroupName>TestGroup</GroupName>\\n\\t\\t\\t<Description>This is a group.</Description>\\n\\t\\t\\t<UserId>u-00q8wbq42wiltcrk****</UserId>\\n\\t\\t\\t<ProvisionType>Manual</ProvisionType>\\n\\t\\t\\t<JoinTime>2021-11-01T06:58:18Z</JoinTime>\\n\\t\\t\\t<GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n\\t\\t</JoinedGroup>\\n\\t\\t<JoinedGroup>\\n\\t\\t\\t<GroupName>group1</GroupName>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<UserId>u-00q8wbq42wiltcrk****</UserId>\\n\\t\\t\\t<ProvisionType>Synchronized</ProvisionType>\\n\\t\\t\\t<JoinTime>2021-11-01T07:16:44Z</JoinTime>\\n\\t\\t\\t<GroupId>g-00dd217ozcicxqz0****</GroupId>\\n\\t\\t</JoinedGroup>\\n\\t</JoinedGroups>\\n</ListJoinedGroupsForUserResponse>\\t\\n","errorExample":""}]',
            'title' => '查询用户加入的用户组',
            'description' => '本文将提供一个示例，查询用户`u-00q8wbq42wiltcrk****`加入的用户组。返回结果显示，该用户加入了`TestGroup`和`group1`两个用户组。',
        ],
        'ListGroupMembers' => [
            'summary' => '查询用户组中的用户列表。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-00jqzghi2n3o5hkh****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'BB759F84-2C64-5C36-B6C6-253172C5C370',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'GroupMembers' => [
                                'description' => '用户组中的用户列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户组中的用户列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '用户的状态。取值：'."\n"
                                                ."\n"
                                                .'- Enabled：启用。'."\n"
                                                .'- Disabled：禁用。',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'UserName' => [
                                            'description' => '用户名称。',
                                            'type' => 'string',
                                            'example' => 'Alice',
                                        ],
                                        'Email' => [
                                            'description' => '用户的电子邮箱。',
                                            'type' => 'string',
                                            'example' => 'AliceLee@example.com',
                                        ],
                                        'Description' => [
                                            'description' => '用户的描述。',
                                            'type' => 'string',
                                            'example' => 'This is a user.',
                                        ],
                                        'UserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'u-00q8wbq42wiltcrk****',
                                        ],
                                        'ProvisionType' => [
                                            'description' => '用户的类型。取值：'."\n"
                                                ."\n"
                                                .'- Manual：手动创建。'."\n"
                                                .'- Synchronized：外部同步。',
                                            'type' => 'string',
                                            'example' => 'Manual',
                                        ],
                                        'DisplayName' => [
                                            'description' => '用户的显示名称。',
                                            'type' => 'string',
                                            'example' => 'Alice',
                                        ],
                                        'JoinTime' => [
                                            'description' => '用户加入用户组的时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-01T06:58:18Z',
                                        ],
                                        'GroupId' => [
                                            'description' => '用户组ID。',
                                            'type' => 'string',
                                            'example' => 'g-00jqzghi2n3o5hkh****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"BB759F84-2C64-5C36-B6C6-253172C5C370\\",\\n  \\"TotalCounts\\": 2,\\n  \\"MaxResults\\": 10,\\n  \\"IsTruncated\\": false,\\n  \\"GroupMembers\\": [\\n    {\\n      \\"Status\\": \\"Enabled\\",\\n      \\"UserName\\": \\"Alice\\",\\n      \\"Email\\": \\"AliceLee@example.com\\",\\n      \\"Description\\": \\"This is a user.\\",\\n      \\"UserId\\": \\"u-00q8wbq42wiltcrk****\\",\\n      \\"ProvisionType\\": \\"Manual\\",\\n      \\"DisplayName\\": \\"Alice\\",\\n      \\"JoinTime\\": \\"2021-11-01T06:58:18Z\\",\\n      \\"GroupId\\": \\"g-00jqzghi2n3o5hkh****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListGroupMembersResponse>\\n\\t<RequestId>BB759F84-2C64-5C36-B6C6-253172C5C370</RequestId>\\n\\t<TotalCounts>2</TotalCounts>\\n\\t<MaxResults>10</MaxResults>\\n\\t<IsTruncated>false</IsTruncated>\\n\\t<GroupMembers>\\n\\t\\t<GroupMember>\\n\\t\\t\\t<Status>Enabled</Status>\\n\\t\\t\\t<UserName>Alice</UserName>\\n\\t\\t\\t<Email>AliceLee@example.com</Email>\\n\\t\\t\\t<Description>This is a user.</Description>\\n\\t\\t\\t<UserId>u-00q8wbq42wiltcrk****</UserId>\\n\\t\\t\\t<ProvisionType>Manual</ProvisionType>\\n\\t\\t\\t<DisplayName>Alice</DisplayName>\\n\\t\\t\\t<JoinTime>2021-11-01T06:58:18Z</JoinTime>\\n\\t\\t\\t<GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n\\t\\t</GroupMember>\\n\\t\\t<GroupMember>\\n\\t\\t\\t<Status>Enabled</Status>\\n\\t\\t\\t<UserName>user1</UserName>\\n\\t\\t\\t<Email></Email>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<UserId>u-00pkfll14gwm1mb9****</UserId>\\n\\t\\t\\t<ProvisionType>Manual</ProvisionType>\\n\\t\\t\\t<DisplayName></DisplayName>\\n\\t\\t\\t<JoinTime>2021-11-01T07:37:14Z</JoinTime>\\n\\t\\t\\t<GroupId>g-00jqzghi2n3o5hkh****</GroupId>\\n\\t\\t</GroupMember>\\n\\t</GroupMembers>\\n</ListGroupMembersResponse>\\t\\n","errorExample":""}]',
            'title' => '查询用户组中的用户列表',
            'description' => '本文将提供一个示例，查询用户组`g-00jqzghi2n3o5hkh****`中的用户列表。返回结果显示，该用户组中一共有`Alice`和`user1`两个用户。',
        ],
        'CreateSCIMServerCredential' => [
            'summary' => '调用CreateSCIMServerCredential创建SCIM密钥。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '2D2E5180-7ACF-57FF-A56C-26A49ABEBFF7',
                            ],
                            'SCIMServerCredential' => [
                                'description' => 'SCIM密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'SCIM密钥状态。取值：Enabled，表示启用状态。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'CredentialId' => [
                                        'description' => 'SCIM密钥ID。',
                                        'type' => 'string',
                                        'example' => 'scimcred-004whl0kvfwcypbi****',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'SCIM密钥的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-09T08:12:52Z',
                                    ],
                                    'CredentialType' => [
                                        'description' => 'SCIM密钥类型。',
                                        'type' => 'string',
                                        'example' => 'BearerToken',
                                    ],
                                    'ExpireTime' => [
                                        'description' => 'SCIM密钥的过期时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-09T08:12:52Z',
                                    ],
                                    'CredentialSecret' => [
                                        'description' => 'SCIM密钥。'."\n"
                                            ."\n"
                                            .'> SCIM密钥仅在创建时返回，后续不支持查询，请妥善保存。',
                                        'type' => 'string',
                                        'example' => '8aAJCtpbyPJ8saXeYDgyw****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"2D2E5180-7ACF-57FF-A56C-26A49ABEBFF7\\",\\n  \\"SCIMServerCredential\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"CredentialId\\": \\"scimcred-004whl0kvfwcypbi****\\",\\n    \\"CreateTime\\": \\"2021-11-09T08:12:52Z\\",\\n    \\"CredentialType\\": \\"BearerToken\\",\\n    \\"ExpireTime\\": \\"2022-11-09T08:12:52Z\\",\\n    \\"CredentialSecret\\": \\"8aAJCtpbyPJ8saXeYDgyw****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSCIMServerCredentialResponse>\\n    <RequestId>2D2E5180-7ACF-57FF-A56C-26A49ABEBFF7</RequestId>\\n    <SCIMServerCredential>\\n        <Status>Enabled</Status>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <CredentialId>scimcred-004whl0kvfwcypbi****</CredentialId>\\n        <CreateTime>2021-11-09T08:12:52Z</CreateTime>\\n        <CredentialType>BearerToken</CredentialType>\\n        <ExpireTime>2022-11-09T08:12:52Z</ExpireTime>\\n        <CredentialSecret>8aAJCtpbyPJ8saXeYDgyw****</CredentialSecret>\\n    </SCIMServerCredential>\\n</CreateSCIMServerCredentialResponse>","errorExample":""}]',
            'title' => '创建SCIM密钥',
            'description' => 'SCIM同步过程中需要使用SCIM密钥。您最多可以创建两个SCIM密钥。'."\n"
                ."\n"
                .'本文将提供一个示例，在目录`d-00fc2p61****`下创建一个SCIM密钥。',
        ],
        'ListSCIMServerCredentials' => [
            'summary' => '调用ListSCIMServerCredentials查询SCIM密钥列表。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'FE4B7037-C315-5DD5-826E-57A87950BCD1',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SCIMServerCredentials' => [
                                'description' => 'SCIM密钥列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SCIM密钥列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'SCIM密钥状态。取值：'."\n"
                                                ."\n"
                                                .'- Enabled：启用。'."\n"
                                                .'- Disabled：禁用。',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'DirectoryId' => [
                                            'description' => '目录ID。',
                                            'type' => 'string',
                                            'example' => 'd-00fc2p61****',
                                        ],
                                        'CredentialId' => [
                                            'description' => 'SCIM密钥ID。',
                                            'type' => 'string',
                                            'example' => 'scimcred-004whl0kvfwcypbi****',
                                        ],
                                        'CreateTime' => [
                                            'description' => 'SCIM密钥的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-09T08:12:52Z',
                                        ],
                                        'CredentialType' => [
                                            'description' => 'SCIM密钥类型。',
                                            'type' => 'string',
                                            'example' => 'BearerToken',
                                        ],
                                        'ExpireTime' => [
                                            'description' => 'SCIM密钥的过期时间。',
                                            'type' => 'string',
                                            'example' => '2022-11-09T08:12:52Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"FE4B7037-C315-5DD5-826E-57A87950BCD1\\",\\n  \\"TotalCounts\\": 1,\\n  \\"SCIMServerCredentials\\": [\\n    {\\n      \\"Status\\": \\"Enabled\\",\\n      \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n      \\"CredentialId\\": \\"scimcred-004whl0kvfwcypbi****\\",\\n      \\"CreateTime\\": \\"2021-11-09T08:12:52Z\\",\\n      \\"CredentialType\\": \\"BearerToken\\",\\n      \\"ExpireTime\\": \\"2022-11-09T08:12:52Z\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSCIMServerCredentialsResponse>\\n\\t<RequestId>FE4B7037-C315-5DD5-826E-57A87950BCD1</RequestId>\\n\\t<TotalCounts>1</TotalCounts>\\n\\t<SCIMServerCredentials>\\n\\t\\t<SCIMServerCredential>\\n\\t\\t\\t<Status>Enabled</Status>\\n\\t\\t\\t<DirectoryId>d-00fc2p61****</DirectoryId>\\n\\t\\t\\t<CredentialId>scimcred-004whl0kvfwcypbi****</CredentialId>\\n\\t\\t\\t<CreateTime>2021-11-09T08:12:52Z</CreateTime>\\n\\t\\t\\t<CredentialType>BearerToken</CredentialType>\\n\\t\\t\\t<ExpireTime>2022-11-09T08:12:52Z</ExpireTime>\\n\\t\\t</SCIMServerCredential>\\n\\t</SCIMServerCredentials>\\n</ListSCIMServerCredentialsResponse>\\t","errorExample":""}]',
            'title' => '查询SCIM密钥列表',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下的SCIM密钥列表。',
        ],
        'UpdateSCIMServerCredentialStatus' => [
            'summary' => '调用UpdateSCIMServerCredentialStatus启用或禁用SCIM密钥。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'CredentialId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCIM密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'scimcred-004whl0kvfwcypbi****',
                    ],
                ],
                [
                    'name' => 'NewStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCIM密钥状态。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Disabled',
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
                                'example' => '7C086C2F-1C66-57B3-B14E-2C1DA70727CD',
                            ],
                            'SCIMServerCredential' => [
                                'description' => 'SCIM密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'SCIM密钥状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Disabled',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'CredentialId' => [
                                        'description' => 'SCIM密钥ID。',
                                        'type' => 'string',
                                        'example' => 'scimcred-004whl0kvfwcypbi****',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'SCIM密钥的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-09T08:12:52Z',
                                    ],
                                    'CredentialType' => [
                                        'description' => 'SCIM密钥类型。',
                                        'type' => 'string',
                                        'example' => 'BearerToken',
                                    ],
                                    'ExpireTime' => [
                                        'description' => 'SCIM密钥的过期时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-09T08:12:52Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C086C2F-1C66-57B3-B14E-2C1DA70727CD\\",\\n  \\"SCIMServerCredential\\": {\\n    \\"Status\\": \\"Disabled\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"CredentialId\\": \\"scimcred-004whl0kvfwcypbi****\\",\\n    \\"CreateTime\\": \\"2021-11-09T08:12:52Z\\",\\n    \\"CredentialType\\": \\"BearerToken\\",\\n    \\"ExpireTime\\": \\"2022-11-09T08:12:52Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateSCIMServerCredentialStatusResponse>\\n    <RequestId>7C086C2F-1C66-57B3-B14E-2C1DA70727CD</RequestId>\\n    <SCIMServerCredential>\\n        <Status>Disabled</Status>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <CredentialId>scimcred-004whl0kvfwcypbi****</CredentialId>\\n        <CreateTime>2021-11-09T08:12:52Z</CreateTime>\\n        <CredentialType>BearerToken</CredentialType>\\n        <ExpireTime>2022-11-09T08:12:52Z</ExpireTime>\\n    </SCIMServerCredential>\\n</UpdateSCIMServerCredentialStatusResponse>","errorExample":""}]',
            'title' => '启用或禁用SCIM密钥',
            'description' => '本文将提供一个示例，禁用ID为`scimcred-004whl0kvfwcypbi****`的SCIM密钥。禁用后，使用该SCIM密钥的同步任务将会失败。您也可以再次调用本API启用SCIM密钥。',
        ],
        'DeleteSCIMServerCredential' => [
            'summary' => '调用DeleteSCIMServerCredential删除SCIM密钥。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'CredentialId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCIM密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'scimcred-004whl0kvfwcypbi****',
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
                                'example' => '8CE8B990-193D-50CE-A604-69F3E7DCE740',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8CE8B990-193D-50CE-A604-69F3E7DCE740\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSCIMServerCredentialResponse>\\n    <RequestId>8CE8B990-193D-50CE-A604-69F3E7DCE740</RequestId>\\n</DeleteSCIMServerCredentialResponse>","errorExample":""}]',
            'title' => '删除SCIM密钥',
            'description' => '删除SCIM密钥后，使用该SCIM密钥的同步任务将会失败。'."\n"
                ."\n"
                .'本文将提供一个示例，删除ID为`scimcred-004whl0kvfwcypbi****`的SCIM密钥。',
        ],
        'SetSCIMSynchronizationStatus' => [
            'summary' => '调用SetSCIMSynchronizationStatus启用或禁用SCIM同步。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'SCIMSynchronizationStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SCIM同步状态。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enabled',
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
                                'example' => '3BF1FC78-5D20-54CC-BAEB-8CC33AE21D01',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3BF1FC78-5D20-54CC-BAEB-8CC33AE21D01\\"\\n}","errorExample":""},{"type":"xml","example":"<SetSCIMSynchronizationStatusResponse>\\n    <RequestId>3BF1FC78-5D20-54CC-BAEB-8CC33AE21D01</RequestId>\\n</SetSCIMSynchronizationStatusResponse>","errorExample":""}]',
            'title' => '启用或禁用SCIM同步',
            'description' => '启用SCIM同步后，您才能从支持SCIM 2.0的外部IdP同步用户或用户组到云SSO。禁用后，您将不能同步用户或用户组到云SSO。启用或禁用SCIM同步的影响如下：'."\n"
                ."\n"
                .'- 在SCIM同步启用状态下，对于已同步到云SSO的SCIM用户和用户组，您不能修改和删除它们，也不能为SCIM用户组添加或移除用户，但可以修改用户的密码和状态。'."\n"
                .'- 在SCIM同步禁用状态下，对于已同步到云SSO的SCIM用户和用户组，您可以修改或删除它们，也可以为SCIM用户组添加或移除用户。'."\n"
                ."\n"
                .'本文将提供一个示例，启用目录`d-00fc2p61****`下的SCIM同步功能。',
        ],
        'GetSCIMSynchronizationStatus' => [
            'summary' => '调用GetSCIMSynchronizationStatus查询SCIM同步的状态。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '7C086C2F-1C66-57B3-B14E-2C1DA70727CD',
                            ],
                            'SCIMSynchronizationStatus' => [
                                'description' => 'SCIM同步状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：启用。'."\n"
                                    .'- Disabled：禁用。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"7C086C2F-1C66-57B3-B14E-2C1DA70727CD\\",\\n  \\"SCIMSynchronizationStatus\\": \\"Enabled\\"\\n}","errorExample":""},{"type":"xml","example":"<GetSCIMSynchronizationStatusResponse>\\n    <RequestId>7C086C2F-1C66-57B3-B14E-2C1DA70727CD</RequestId>\\n    <SCIMSynchronizationStatus>Enabled</SCIMSynchronizationStatus>\\n</GetSCIMSynchronizationStatusResponse>","errorExample":""}]',
            'title' => '查询SCIM同步状态',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下的SCIM同步状态。返回结果显示，SCIM同步为启用状态。',
        ],
        'GetDirectorySAMLServiceProviderInfo' => [
            'summary' => '调用GetDirectorySAMLServiceProviderInfo查询SAML服务提供商（SP）信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '4632107D-BCE1-5A96-B30B-182EE0709625',
                            ],
                            'SAMLServiceProvider' => [
                                'description' => 'SP信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EntityId' => [
                                        'description' => 'SP标识。',
                                        'type' => 'string',
                                        'example' => 'https://signin-cn-shanghai.alibabacloudsso.com/saml/sp/d-00fc2p61****',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'EncodedMetadataDocument' => [
                                        'description' => 'SP元数据文档（Base64编码）。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVyc2lv****',
                                    ],
                                    'AcsUrl' => [
                                        'description' => 'SP的ACS URL。',
                                        'type' => 'string',
                                        'example' => 'https://signin-cn-shanghai.alibabacloudsso.com/saml/acs/51d298a9-2a3f-4e23-97c7-7ad1cfa9****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4632107D-BCE1-5A96-B30B-182EE0709625\\",\\n  \\"SAMLServiceProvider\\": {\\n    \\"EntityId\\": \\"https://signin-cn-shanghai.alibabacloudsso.com/saml/sp/d-00fc2p61****\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"EncodedMetadataDocument\\": \\"PD94bWwgdmVyc2lv****\\",\\n    \\"AcsUrl\\": \\"https://signin-cn-shanghai.alibabacloudsso.com/saml/acs/51d298a9-2a3f-4e23-97c7-7ad1cfa9****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDirectorySAMLServiceProviderInfoResponse>\\n    <RequestId>4632107D-BCE1-5A96-B30B-182EE0709625</RequestId>\\n    <SAMLServiceProvider>\\n        <EntityId>https://signin-cn-shanghai.alibabacloudsso.com/saml/sp/d-00fc2p61****</EntityId>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <EncodedMetadataDocument>PD94bWwgdmVyc2lv****</EncodedMetadataDocument>\\n        <AcsUrl>https://signin-cn-shanghai.alibabacloudsso.com/saml/acs/51d298a9-2a3f-4e23-97c7-7ad1cfa9****</AcsUrl>\\n    </SAMLServiceProvider>\\n</GetDirectorySAMLServiceProviderInfoResponse>","errorExample":""}]',
            'title' => '查询SAML服务提供商信息',
            'description' => '在基于SAML 2.0的SSO登录过程中，云SSO目录是服务提供商（SP），而企业自有的身份管理系统则是身份提供商（IdP）。'."\n"
                ."\n"
                .'本文将提供一个示例，查询目录`d-00fc2p61****`下的SP信息。',
        ],
        'SetExternalSAMLIdentityProvider' => [
            'summary' => '调用SetExternalSAMLIdentityProvider配置SAML身份提供商（IdP）信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'EncodedMetadataDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IdP元数据文档（Base64编码）。'."\n"
                            ."\n"
                            .'由支持SAML 2.0协议的IdP提供。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PD94bWwgdmVyc2lvbj0iMS4****',
                    ],
                ],
                [
                    'name' => 'SSOStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'SSO登录的启用状态。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled（默认值）：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Disabled',
                    ],
                ],
                [
                    'name' => 'EntityId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IdP标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://www.okta.com/exk3qwgtjhetR2Od****',
                    ],
                ],
                [
                    'name' => 'LoginUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'IdP的登录地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml',
                    ],
                ],
                [
                    'name' => 'WantRequestSigned',
                    'in' => 'query',
                    'schema' => [
                        'description' => '在用户访问云SSO登录页面发起SAML SSO时，是否要求云SSO发送签名的SAML请求。取值：'."\n"
                            ."\n"
                            .'- true：要求云SSO发送签名的SAML请求。'."\n"
                            .'- false（默认值）：不要求云SSO发送签名的SAML请求。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'X509Certificate',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PEM格式的X509证书。指定该参数会替换所有已经存在的证书。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MIIC8DCCAdigAwIBAgIQP9eomUYGeoND****',
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
                                'example' => '63160579-2E1B-57B0-8273-B27427172385',
                            ],
                            'SAMLIdentityProviderConfiguration' => [
                                'description' => 'IdP配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EntityId' => [
                                        'description' => 'IdP标识。',
                                        'type' => 'string',
                                        'example' => 'http://www.okta.com/exk3qwgtjhetR2Od****',
                                    ],
                                    'SSOStatus' => [
                                        'description' => 'SSO登录的启用状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Disabled',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'EncodedMetadataDocument' => [
                                        'description' => 'IdP元数据文档（Base64编码）。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVyc2lvbj0iMS4****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '首次配置IdP的时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-10T02:57:16Z',
                                    ],
                                    'WantRequestSigned' => [
                                        'description' => '在用户访问云SSO登录页面发起SAML SSO时，是否要求云SSO发送签名的SAML请求。取值：'."\n"
                                            ."\n"
                                            .'- true：要求云SSO发送签名的SAML请求。'."\n"
                                            .'- false（默认值）：不要求云SSO发送签名的SAML请求。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '最近一次修改IdP配置的时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-10T02:57:16Z',
                                    ],
                                    'CertificateIds' => [
                                        'description' => 'SAML签名证书ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'SAML签名证书ID。'."\n"
                                                ."\n"
                                                .'多个ID之间用半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '[ "idp-c-00buzdx63z8ewtdf****", "idp-c-00gmuxnr2mrek3t2****" ]',
                                        ],
                                    ],
                                    'LoginUrl' => [
                                        'description' => 'IdP的登录地址。',
                                        'type' => 'string',
                                        'example' => 'https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63160579-2E1B-57B0-8273-B27427172385\\",\\n  \\"SAMLIdentityProviderConfiguration\\": {\\n    \\"EntityId\\": \\"http://www.okta.com/exk3qwgtjhetR2Od****\\",\\n    \\"SSOStatus\\": \\"Disabled\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"EncodedMetadataDocument\\": \\"PD94bWwgdmVyc2lvbj0iMS4****\\",\\n    \\"CreateTime\\": \\"2021-11-10T02:57:16Z\\",\\n    \\"WantRequestSigned\\": false,\\n    \\"UpdateTime\\": \\"2021-11-10T02:57:16Z\\",\\n    \\"CertificateIds\\": [\\n      \\"[ \\\\\\"idp-c-00buzdx63z8ewtdf****\\\\\\", \\\\\\"idp-c-00gmuxnr2mrek3t2****\\\\\\" ]\\"\\n    ],\\n    \\"LoginUrl\\": \\"https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SetExternalSAMLIdentityProviderResponse>\\n    <RequestId>63160579-2E1B-57B0-8273-B27427172385</RequestId>\\n    <SAMLIdentityProviderConfiguration>\\n        <EntityId>http://www.okta.com/exk3qwgtjhetR2Od****</EntityId>\\n        <SSOStatus>Disabled</SSOStatus>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <EncodedMetadataDocument>PD94bWwgdmVyc2lvbj0iMS4****</EncodedMetadataDocument>\\n        <CreateTime>2021-11-10T02:57:16Z</CreateTime>\\n        <WantRequestSigned>false</WantRequestSigned>\\n        <UpdateTime>2021-11-10T02:57:16Z</UpdateTime>\\n        <CertificateIds>idp-c-00buzdx63z8ewtdf****</CertificateIds>\\n        <CertificateIds>idp-c-00gmuxnr2mrek3t2****</CertificateIds>\\n        <LoginUrl>https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml</LoginUrl>\\n    </SAMLIdentityProviderConfiguration>\\n</SetExternalSAMLIdentityProviderResponse>","errorExample":""}]',
            'title' => '配置SAML身份提供商信息',
            'description' => '在基于SAML 2.0的SSO登录过程中，云SSO目录是服务提供商（SP），而企业自有的身份管理系统则是身份提供商（IdP）。'."\n"
                ."\n"
                .'配置SAML身份提供商（IdP）信息有以下两种方式，您可以任选其一进行配置，但不能同时进行配置。需要用到的元数据文档或相关参数，请从您的IdP中获取。'."\n"
                ."\n"
                .'- 元数据文档：通过`EncodedMetadataDocument`参数配置元数据文档。'."\n"
                .'- 手动配置：通过`EntityId`、`LoginUrl`、`WantRequestSigned`和`X509Certificate`参数手动配置IdP信息。'."\n"
                ."\n"
                .'如果已经配置过SAML IdP信息，则调用本API会替换已有的配置信息。具体如下：'."\n"
                ."\n"
                .'- 元数据文档：全部替换为新的配置信息。'."\n"
                .'- 手动配置：只替换提供的新参数值。'."\n"
                ."\n"
                .'> 如果SSO登录状态是已启用，替换后的配置信息会立即生效，请注意对生产环境的影响。'."\n"
                ."\n"
                .'本文将提供一个示例，在目录`d-00fc2p61****`下通过元数据文档配置IdP信息。',
        ],
        'GetExternalSAMLIdentityProvider' => [
            'summary' => '调用GetExternalSAMLIdentityProvider查询SAML身份提供商（IdP）的配置信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '96D1E5FF-0301-5636-8D33-071E033CFB82',
                            ],
                            'SAMLIdentityProviderConfiguration' => [
                                'description' => 'IdP配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EntityId' => [
                                        'description' => 'IdP标识。',
                                        'type' => 'string',
                                        'example' => 'http://www.okta.com/exk3qwgtjhetR2Od****',
                                    ],
                                    'SSOStatus' => [
                                        'description' => 'SSO登录的启用状态。取值：'."\n"
                                            ."\n"
                                            .'- Enabled：启用。'."\n"
                                            .'- Disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'EncodedMetadataDocument' => [
                                        'description' => 'IdP元数据文档（Base64编码）。',
                                        'type' => 'string',
                                        'example' => 'PD94bWwgdmVyc2lvbj0iMS4****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '首次配置IdP的时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-09T09:30:13Z',
                                    ],
                                    'WantRequestSigned' => [
                                        'description' => '在用户访问云SSO登录页面发起SAML SSO时，是否要求云SSO发送签名的SAML请求。取值：'."\n"
                                            ."\n"
                                            .'- true：要求签名。'."\n"
                                            .'- false（默认值）：不要求签名。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '最近一次修改IdP配置的时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-09T09:30:22Z',
                                    ],
                                    'CertificateIds' => [
                                        'description' => 'SAML签名证书列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'SAML签名证书ID。'."\n"
                                                ."\n"
                                                .'多个ID之间用半角逗号（,）分隔。',
                                            'type' => 'string',
                                            'example' => '[ "idp-c-00s6c04my7hvv1uj****" ]',
                                        ],
                                    ],
                                    'LoginUrl' => [
                                        'description' => 'IdP的登录地址。',
                                        'type' => 'string',
                                        'example' => 'https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"96D1E5FF-0301-5636-8D33-071E033CFB82\\",\\n  \\"SAMLIdentityProviderConfiguration\\": {\\n    \\"EntityId\\": \\"http://www.okta.com/exk3qwgtjhetR2Od****\\",\\n    \\"SSOStatus\\": \\"Enabled\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"EncodedMetadataDocument\\": \\"PD94bWwgdmVyc2lvbj0iMS4****\\",\\n    \\"CreateTime\\": \\"2021-11-09T09:30:13Z\\",\\n    \\"WantRequestSigned\\": false,\\n    \\"UpdateTime\\": \\"2021-11-09T09:30:22Z\\",\\n    \\"CertificateIds\\": [\\n      \\"[ \\\\\\"idp-c-00s6c04my7hvv1uj****\\\\\\" ]\\"\\n    ],\\n    \\"LoginUrl\\": \\"https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetExternalSAMLIdentityProviderResponse>\\n    <RequestId>96D1E5FF-0301-5636-8D33-071E033CFB82</RequestId>\\n    <SAMLIdentityProviderConfiguration>\\n        <EntityId>http://www.okta.com/exk3qwgtjhetR2Od****</EntityId>\\n        <SSOStatus>Enabled</SSOStatus>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <EncodedMetadataDocument>PD94bWwgdmVyc2lvbj0iMS4****</EncodedMetadataDocument>\\n        <CreateTime>2021-11-09T09:30:13Z</CreateTime>\\n        <WantRequestSigned>false</WantRequestSigned>\\n        <UpdateTime>2021-11-09T09:30:22Z</UpdateTime>\\n        <CertificateIds>idp-c-00s6c04my7hvv1uj****</CertificateIds>\\n        <LoginUrl>https://dev-xxxxxx.okta.com/app/dev-xxxxxx_cloudssodemo_1/exk3qwgtjhetR2Od****/sso/saml</LoginUrl>\\n    </SAMLIdentityProviderConfiguration>\\n</GetExternalSAMLIdentityProviderResponse>","errorExample":""}]',
            'title' => '查询SAML身份提供商配置信息',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下的SAML身份提供商的配置信息。',
        ],
        'ClearExternalSAMLIdentityProvider' => [
            'summary' => '调用ClearExternalSAMLIdentityProvider清空SAML身份提供商（IdP）的配置信息。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '96D1E5FF-0301-5636-8D33-071E033CFB82',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"96D1E5FF-0301-5636-8D33-071E033CFB82\\"\\n}","errorExample":""},{"type":"xml","example":"<ClearExternalSAMLIdentityProviderResponse>\\n    <RequestId>96D1E5FF-0301-5636-8D33-071E033CFB82</RequestId>\\n</ClearExternalSAMLIdentityProviderResponse>","errorExample":""}]',
            'title' => '清空SAML身份提供商配置信息',
            'description' => '当SSO登录处于禁用状态时，您可以清空SAML身份提供商信息。否则，您不能执行该操作。'."\n"
                ."\n"
                .'本文将提供一个示例，清空目录`d-00fc2p61****`下的SAML身份提供商的配置信息。',
        ],
        'AddExternalSAMLIdPCertificate' => [
            'summary' => '调用AddExternalSAMLIdPCertificate添加SAML签名证书。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'X509Certificate',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'PEM格式的X509证书。'."\n"
                            ."\n"
                            .'由SAML身份提供商提供。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MIIC8DCCAdigAwIBAgIQP9eomUYGeoND****',
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
                                'example' => '12B3E332-DD16-515B-B695-39BA233AA172',
                            ],
                            'CertificateId' => [
                                'description' => 'SAML签名证书ID。',
                                'type' => 'string',
                                'example' => 'idp-c-00wk2fb4foracls0****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12B3E332-DD16-515B-B695-39BA233AA172\\",\\n  \\"CertificateId\\": \\"idp-c-00wk2fb4foracls0****\\"\\n}","errorExample":""},{"type":"xml","example":"<AddExternalSAMLIdPCertificateResponse>\\n    <RequestId>12B3E332-DD16-515B-B695-39BA233AA172</RequestId>\\n    <CertificateId>idp-c-00wk2fb4foracls0****</CertificateId>\\n</AddExternalSAMLIdPCertificateResponse>","errorExample":""}]',
            'title' => '添加SAML签名证书',
            'description' => '您最多可以添加2个SAML签名证书。'."\n"
                ."\n"
                .'本文将提供一个示例，在`d-00fc2p61****`目录下添加一个新的SAML签名证书。',
        ],
        'ListExternalSAMLIdPCertificates' => [
            'summary' => '调用ListExternalSAMLIdPCertificates查询SAML签名证书列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '400979BC-92EC-58B9-B47C-6913BD56A6FD',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SAMLIdPCertificates' => [
                                'description' => 'SAML签名证书列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SAML签名证书列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SerialNumber' => [
                                            'description' => '证书序列号。',
                                            'type' => 'string',
                                            'example' => '159289587****',
                                        ],
                                        'Issuer' => [
                                            'description' => '证书颁发者。',
                                            'type' => 'string',
                                            'example' => '1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US',
                                        ],
                                        'Version' => [
                                            'description' => '证书版本。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3',
                                        ],
                                        'CertificateId' => [
                                            'description' => '证书ID。',
                                            'type' => 'string',
                                            'example' => 'idp-c-00dt9gnl7fmjaw9c****',
                                        ],
                                        'PublicKey' => [
                                            'description' => 'PEM格式的公钥证书（Base64编码）。',
                                            'type' => 'string',
                                            'example' => 'MIIBIjANBgkqhkiG****',
                                        ],
                                        'SignatureAlgorithm' => [
                                            'description' => '证书的签名算法。',
                                            'type' => 'string',
                                            'example' => 'SHA256withRSA',
                                        ],
                                        'NotAfter' => [
                                            'description' => '证书的过期时间。',
                                            'type' => 'string',
                                            'example' => '2030-06-23T07:04:37Z',
                                        ],
                                        'NotBefore' => [
                                            'description' => '证书的创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-06-23T07:03:37Z',
                                        ],
                                        'Subject' => [
                                            'description' => '证书的主体。',
                                            'type' => 'string',
                                            'example' => '1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US',
                                        ],
                                        'X509Certificate' => [
                                            'description' => 'PEM格式的X509证书。',
                                            'type' => 'string',
                                            'example' => 'MIIDpDCCAoygAwIBAgIG****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"400979BC-92EC-58B9-B47C-6913BD56A6FD\\",\\n  \\"TotalCounts\\": 1,\\n  \\"SAMLIdPCertificates\\": [\\n    {\\n      \\"SerialNumber\\": \\"159289587****\\",\\n      \\"Issuer\\": \\"1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US\\",\\n      \\"Version\\": 3,\\n      \\"CertificateId\\": \\"idp-c-00dt9gnl7fmjaw9c****\\",\\n      \\"PublicKey\\": \\"MIIBIjANBgkqhkiG****\\",\\n      \\"SignatureAlgorithm\\": \\"SHA256withRSA\\",\\n      \\"NotAfter\\": \\"2030-06-23T07:04:37Z\\",\\n      \\"NotBefore\\": \\"2020-06-23T07:03:37Z\\",\\n      \\"Subject\\": \\"1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US\\",\\n      \\"X509Certificate\\": \\"MIIDpDCCAoygAwIBAgIG****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListExternalSAMLIdPCertificatesResponse>\\n\\t<RequestId>400979BC-92EC-58B9-B47C-6913BD56A6FD</RequestId>\\n\\t<TotalCounts>1</TotalCounts>\\n\\t<SAMLIdPCertificates>\\n\\t\\t<SAMLIdPCertificate>\\n\\t\\t\\t<SerialNumber>159289587****</SerialNumber>\\n\\t\\t\\t<Issuer>1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US</Issuer>\\n\\t\\t\\t<Version>3</Version>\\n\\t\\t\\t<CertificateId>idp-c-00dt9gnl7fmjaw9c****</CertificateId>\\n\\t\\t\\t<PublicKey>MIIBIjANBgkqhkiG****</PublicKey>\\n\\t\\t\\t<SignatureAlgorithm>SHA256withRSA</SignatureAlgorithm>\\n\\t\\t\\t<NotAfter>2030-06-23T07:04:37Z</NotAfter>\\n\\t\\t\\t<NotBefore>2020-06-23T07:03:37Z</NotBefore>\\n\\t\\t\\t<Subject>1.2.840.113549.1.9.1=#160d696e666f406f6b74612e63****,CN=dev-xxxxxx,OU=SSOProvider,O=Okta,L=San Francisco,ST=California,C=US</Subject>\\n\\t\\t\\t<X509Certificate>MIIDpDCCAoygAwIBAgIG****</X509Certificate>\\n\\t\\t</SAMLIdPCertificate>\\n\\t</SAMLIdPCertificates>\\n</ListExternalSAMLIdPCertificatesResponse>\\t","errorExample":""}]',
            'title' => '查询SAML签名证书列表',
            'description' => '本文将提供一个示例，查询`d-00fc2p61****`目录下的SAML签名证书列表。返回结果显示，该目录下只有一个SAML签名证书。',
        ],
        'RemoveExternalSAMLIdPCertificate' => [
            'summary' => '调用RemoveExternalSAMLIdPCertificate移除SAML签名证书。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'CertificateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '证书ID。'."\n"
                            ."\n"
                            .'您可以通过[ListExternalSAMLIdPCertificates](~~341629~~)获取证书ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'idp-c-00dt9gnl7fmjaw9c****',
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
                                'example' => '400979BC-92EC-58B9-B47C-6913BD56A6FD',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"400979BC-92EC-58B9-B47C-6913BD56A6FD\\"\\n}","errorExample":""},{"type":"xml","example":"<RemoveExternalSAMLIdPCertificateResponse>\\n    <RequestId>400979BC-92EC-58B9-B47C-6913BD56A6FD</RequestId>\\n</RemoveExternalSAMLIdPCertificateResponse>","errorExample":""}]',
            'title' => '移除SAML签名证书',
            'description' => '本文将提供一个示例，移除ID为`idp-c-00dt9gnl7fmjaw9c****`的SAML签名证书。',
        ],
        'CreateAccessConfiguration' => [
            'summary' => '创建访问配置。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置名称。'."\n"
                            ."\n"
                            .'格式：包含英文字母、数字或短划线（-）。'."\n"
                            ."\n"
                            .'长度：最大32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ECS-Admin',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置的描述。'."\n"
                            ."\n"
                            .'长度：最大1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is an access configuration.',
                    ],
                ],
                [
                    'name' => 'SessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '会话持续时间。'."\n"
                            ."\n"
                            .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                            ."\n"
                            .'单位：秒。'."\n"
                            ."\n"
                            .'取值范围：900~43200（15分钟~12小时）。'."\n"
                            ."\n"
                            .'默认值：3600（1小时）。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
                [
                    'name' => 'RelayState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '初始访问页面。'."\n"
                            ."\n"
                            .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。'."\n"
                            ."\n"
                            .'该页面必须是阿里云控制台页面。默认为空，表示跳转到阿里云控制台首页。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cloudsso.console.aliyun.com',
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
                                'example' => 'A3A41736-A050-50B6-ABC5-590F376A0044',
                            ],
                            'AccessConfiguration' => [
                                'description' => '访问配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'ECS-Admin',
                                    ],
                                    'SessionDuration' => [
                                        'description' => '会话持续时间。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                                            ."\n"
                                            .'单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'Description' => [
                                        'description' => '访问配置的描述。',
                                        'type' => 'string',
                                        'example' => 'This is an access configuration.',
                                    ],
                                    'RelayState' => [
                                        'description' => '初始访问页面。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。',
                                        'type' => 'string',
                                        'example' => 'https://cloudsso.console.aliyun.com',
                                    ],
                                    'CreateTime' => [
                                        'description' => '访问配置的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-02T08:44:23Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '访问配置的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-02T08:44:23Z',
                                    ],
                                    'StatusNotifications' => [
                                        'description' => '状态通知信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '状态通知信息。取值：'."\n"
                                                ."\n"
                                                .'- 空：表示没有状态通知信息。'."\n"
                                                .'- ReprovisionRequired：表示该访问配置需要重新部署。'."\n",
                                            'type' => 'string',
                                            'example' => 'ReprovisionRequired',
                                        ],
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00jhtfl8thteu6uj****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A3A41736-A050-50B6-ABC5-590F376A0044\\",\\n  \\"AccessConfiguration\\": {\\n    \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n    \\"SessionDuration\\": 3600,\\n    \\"Description\\": \\"This is an access configuration.\\",\\n    \\"RelayState\\": \\"https://cloudsso.console.aliyun.com\\",\\n    \\"CreateTime\\": \\"2021-11-02T08:44:23Z\\",\\n    \\"UpdateTime\\": \\"2021-11-02T08:44:23Z\\",\\n    \\"StatusNotifications\\": [\\n      \\"ReprovisionRequired\\"\\n    ],\\n    \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateAccessConfigurationResponse>\\n    <RequestId>A3A41736-A050-50B6-ABC5-590F376A0044</RequestId>\\n    <AccessConfiguration>\\n        <AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n        <SessionDuration>3600</SessionDuration>\\n        <Description>This is an access configuration.</Description>\\n        <RelayState/>\\n        <CreateTime>2021-11-02T08:44:23Z</CreateTime>\\n        <UpdateTime>2021-11-02T08:44:23Z</UpdateTime>\\n        <AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n    </AccessConfiguration>\\n</CreateAccessConfigurationResponse>","errorExample":""}]',
            'title' => '创建访问配置',
            'description' => '关于访问配置的介绍，请参见[访问配置概述](~~266737~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，创建一个名为`ECS-Admin`的访问配置。',
        ],
        'ListAccessConfigurations' => [
            'summary' => '调用ListAccessConfigurations查询访问配置列表。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件。'."\n"
                            ."\n"
                            .'格式：<Attribute> <Operator> <Value>，不区分大小写。目前，<Attribute>只支持AccessConfigurationName，<Operator>只支持eq（Equals）和sw（Start With）。'."\n"
                            ."\n"
                            .'示例：Filter = "AccessConfigurationName sw test"，表示查询名称以test开头的全部访问配置。Filter = "AccessConfigurationName eq TestAccessConfiguration"，表示查询名称为TestAccessConfiguration的访问配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AccessConfigurationName sw test',
                    ],
                ],
                [
                    'name' => 'StatusNotifications',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态通知信息，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'取值：ReprovisionRequired，表示查询需要重新部署的访问配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ReprovisionRequired',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'AccessConfigurations' => [
                                'description' => '访问配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '访问配置列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'ECS-Admin',
                                        ],
                                        'SessionDuration' => [
                                            'description' => '会话持续时间。'."\n"
                                                ."\n"
                                                .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                                                ."\n"
                                                .'单位：秒。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '900',
                                        ],
                                        'Description' => [
                                            'description' => '访问配置的描述。',
                                            'type' => 'string',
                                            'example' => 'This is an access configuration.',
                                        ],
                                        'RelayState' => [
                                            'description' => '初始访问页面。'."\n"
                                                ."\n"
                                                .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。',
                                            'type' => 'string',
                                            'example' => 'https://cloudsso.console.aliyun.com',
                                        ],
                                        'CreateTime' => [
                                            'description' => '访问配置的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-02T08:44:23Z',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '访问配置的修改时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-02T08:44:23Z',
                                        ],
                                        'StatusNotifications' => [
                                            'description' => '状态通知信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '状态通知信息。取值：'."\n"
                                                    ."\n"
                                                    .'- 空：表示没有状态通知信息。'."\n"
                                                    .'- ReprovisionRequired：表示该访问配置需要重新部署。',
                                                'type' => 'string',
                                                'example' => 'ReprovisionRequired',
                                            ],
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00jhtfl8thteu6uj****',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '2BC0CBAC-45E1-5BD3-BF6E-F69D1D5391C2',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"AccessConfigurations\\": [\\n    {\\n      \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n      \\"SessionDuration\\": 900,\\n      \\"Description\\": \\"This is an access configuration.\\",\\n      \\"RelayState\\": \\"https://cloudsso.console.aliyun.com\\",\\n      \\"CreateTime\\": \\"2021-11-02T08:44:23Z\\",\\n      \\"UpdateTime\\": \\"2021-11-02T08:44:23Z\\",\\n      \\"StatusNotifications\\": [\\n        \\"ReprovisionRequired\\"\\n      ],\\n      \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"2BC0CBAC-45E1-5BD3-BF6E-F69D1D5391C2\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCounts\\": 2,\\n  \\"IsTruncated\\": false\\n}","errorExample":""},{"type":"xml","example":"<?xml version=\\"1.0\\" encoding=\\"UTF-8\\" ?>\\n<ListAccessConfigurationsResponse>\\n\\t<AccessConfigurations>\\n\\t\\t<AccessConfiguration>\\n\\t\\t\\t<AccessConfigurationName>VPC-Admin</AccessConfigurationName>\\n\\t\\t\\t<SessionDuration>3600</SessionDuration>\\n\\t\\t\\t<Description></Description>\\n\\t\\t\\t<RelayState></RelayState>\\n\\t\\t\\t<CreateTime>2021-06-30T09:39:44Z</CreateTime>\\n\\t\\t\\t<UpdateTime>2021-07-26T03:02:11Z</UpdateTime>\\n\\t\\t\\t<StatusNotifications>ReprovisionRequired</StatusNotifications>\\n\\t\\t\\t<AccessConfigurationId>ac-00ccule7tadaijxc****</AccessConfigurationId>\\n\\t\\t</AccessConfiguration>\\n\\t\\t<AccessConfiguration>\\n\\t\\t\\t<AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n\\t\\t\\t<SessionDuration>900</SessionDuration>\\n\\t\\t\\t<Description>This is an access configuration.</Description>\\n\\t\\t\\t<RelayState></RelayState>\\n\\t\\t\\t<CreateTime>2021-11-02T08:44:23Z</CreateTime>\\n\\t\\t\\t<UpdateTime>2021-11-02T08:44:23Z</UpdateTime>\\n\\t\\t\\t<AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n\\t\\t</AccessConfiguration>\\n\\t</AccessConfigurations>\\n\\t<RequestId>2BC0CBAC-45E1-5BD3-BF6E-F69D1D5391C2</RequestId>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>2</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n</ListAccessConfigurationsResponse>\\t\\n","errorExample":""}]',
            'title' => '查询访问配置列表',
            'description' => '本文将提供一个示例，查询目录`d-00fc2p61****`下的访问配置列表。返回结果显示，一共有`VPC-Admin`和`ECS-Admin`两个访问配置。',
        ],
        'GetAccessConfiguration' => [
            'summary' => '调用GetAccessConfiguration查询访问配置信息。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00ccule7tadaijxc****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => 'D5E40508-483B-52F6-993C-D880B0F87591',
                            ],
                            'AccessConfiguration' => [
                                'description' => '访问配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'VPC-Admin',
                                    ],
                                    'SessionDuration' => [
                                        'description' => '会话持续时间。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                                            ."\n"
                                            .'单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'Description' => [
                                        'description' => '访问配置的描述。',
                                        'type' => 'string',
                                        'example' => 'This is an access configuration.',
                                    ],
                                    'RelayState' => [
                                        'description' => '初始访问页面。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。',
                                        'type' => 'string',
                                        'example' => 'https://cloudsso.console.aliyun.com',
                                    ],
                                    'CreateTime' => [
                                        'description' => '访问配置的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-06-30T09:39:44Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '访问配置的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-07-26T03:02:11Z',
                                    ],
                                    'StatusNotifications' => [
                                        'description' => '状态通知信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '状态通知信息。取值：'."\n"
                                                ."\n"
                                                .'- 空：表示没有状态通知信息。'."\n"
                                                .'- ReprovisionRequired：表示该访问配置需要重新部署。',
                                            'type' => 'string',
                                            'example' => 'ReprovisionRequired',
                                        ],
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00ccule7tadaijxc****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D5E40508-483B-52F6-993C-D880B0F87591\\",\\n  \\"AccessConfiguration\\": {\\n    \\"AccessConfigurationName\\": \\"VPC-Admin\\",\\n    \\"SessionDuration\\": 3600,\\n    \\"Description\\": \\"This is an access configuration.\\",\\n    \\"RelayState\\": \\"https://cloudsso.console.aliyun.com\\",\\n    \\"CreateTime\\": \\"2021-06-30T09:39:44Z\\",\\n    \\"UpdateTime\\": \\"2021-07-26T03:02:11Z\\",\\n    \\"StatusNotifications\\": [\\n      \\"ReprovisionRequired\\"\\n    ],\\n    \\"AccessConfigurationId\\": \\"ac-00ccule7tadaijxc****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetAccessConfigurationResponse>\\n    <RequestId>D5E40508-483B-52F6-993C-D880B0F87591</RequestId>\\n    <AccessConfiguration>\\n        <AccessConfigurationName>VPC-Admin</AccessConfigurationName>\\n        <SessionDuration>3600</SessionDuration>\\n        <Description>This is an access configuration.</Description>\\n        <RelayState/>\\n        <CreateTime>2021-06-30T09:39:44Z</CreateTime>\\n        <UpdateTime>2021-07-26T03:02:11Z</UpdateTime>\\n        <StatusNotifications>ReprovisionRequired</StatusNotifications>\\n        <AccessConfigurationId>ac-00ccule7tadaijxc****</AccessConfigurationId>\\n    </AccessConfiguration>\\n</GetAccessConfigurationResponse>","errorExample":""}]',
            'title' => '查询访问配置信息',
            'description' => '本文将提供一个示例 ，查询ID为`ac-00ccule7tadaijxc****`的访问配置信息。',
        ],
        'UpdateAccessConfiguration' => [
            'summary' => '调用UpdateAccessConfiguration修改访问配置信息。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的访问配置描述。'."\n"
                            ."\n"
                            .'长度：最大1024个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is an access configuration.',
                    ],
                ],
                [
                    'name' => 'NewSessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的会话持续时间。'."\n"
                            ."\n"
                            .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                            ."\n"
                            .'单位：秒。'."\n"
                            ."\n"
                            .'取值范围：900~43200（15分钟~12小时）。'."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3600',
                    ],
                ],
                [
                    'name' => 'NewRelayState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的初始访问页面。'."\n"
                            ."\n"
                            .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。'."\n"
                            ."\n"
                            .'该页面必须是阿里云控制台页面。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://cloudsso.console.aliyun.com',
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
                                'example' => '9B13E4EE-3853-5852-9165-597C32AD8FB7',
                            ],
                            'AccessConfiguration' => [
                                'description' => '访问配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'ECS-Admin',
                                    ],
                                    'SessionDuration' => [
                                        'description' => '会话持续时间。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，会话最多保持的时间。'."\n"
                                            ."\n"
                                            .'单位：秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'Description' => [
                                        'description' => '访问配置的描述。',
                                        'type' => 'string',
                                        'example' => 'This is an access configuration.',
                                    ],
                                    'RelayState' => [
                                        'description' => '初始访问页面。'."\n"
                                            ."\n"
                                            .'云SSO用户使用访问配置访问RD账号时，初始访问的页面地址。',
                                        'type' => 'string',
                                        'example' => 'https://cloudsso.console.aliyun.com',
                                    ],
                                    'CreateTime' => [
                                        'description' => '访问配置的创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-02T08:44:23Z',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '访问配置的修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-02T10:10:01Z',
                                    ],
                                    'StatusNotifications' => [
                                        'description' => '状态通知信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '状态通知信息。取值：'."\n"
                                                ."\n"
                                                .'- 空：表示没有状态通知信息。'."\n"
                                                .'- ReprovisionRequired：表示该访问配置需要重新部署。',
                                            'type' => 'string',
                                            'example' => 'ReprovisionRequired',
                                        ],
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00jhtfl8thteu6uj****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B13E4EE-3853-5852-9165-597C32AD8FB7\\",\\n  \\"AccessConfiguration\\": {\\n    \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n    \\"SessionDuration\\": 3600,\\n    \\"Description\\": \\"This is an access configuration.\\",\\n    \\"RelayState\\": \\"https://cloudsso.console.aliyun.com\\",\\n    \\"CreateTime\\": \\"2021-11-02T08:44:23Z\\",\\n    \\"UpdateTime\\": \\"2021-11-02T10:10:01Z\\",\\n    \\"StatusNotifications\\": [\\n      \\"ReprovisionRequired\\"\\n    ],\\n    \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateAccessConfigurationResponse>\\n    <RequestId>9B13E4EE-3853-5852-9165-597C32AD8FB7</RequestId>\\n    <AccessConfiguration>\\n        <AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n        <SessionDuration>3600</SessionDuration>\\n        <Description>This is an access configuration.</Description>\\n        <RelayState>https://cloudsso.console.aliyun.com</RelayState>\\n        <CreateTime>2021-11-02T08:44:23Z</CreateTime>\\n        <UpdateTime>2021-11-02T10:10:01Z</UpdateTime>\\n        <AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n    </AccessConfiguration>\\n</UpdateAccessConfigurationResponse>","errorExample":""}]',
            'title' => '修改访问配置信息',
            'description' => '您可以根据需要修改访问配置的`Description`、`SessionDuration`和`RelayState`。'."\n"
                ."\n"
                .'本文将提供一个示例，修改访问配置`ac-00jhtfl8thteu6uj****`的初始访问页面为`https://cloudsso.console.aliyun.com`。',
        ],
        'DeleteAccessConfiguration' => [
            'summary' => '调用DeleteAccessConfiguration删除访问配置。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-001j9mcm3k7335bc****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'ForceRemovePermissionPolicies',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否强制移除系统策略和内置策略。取值：'."\n"
                            ."\n"
                            .'- true：删除访问配置时会强制移除关联的系统策略和内置策略。'."\n"
                            .'- false（默认值）：删除访问配置时不会强制移除关联的系统策略和内置策略。如果存在这些策略，会删除失败。您需要在删除访问配置前移除这些系统策略和内置策略。具体操作，请参见[RemovePermissionPolicyFromAccessConfiguration](~~336904~~)。',
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
                                'example' => '9B13E4EE-3853-5852-9165-597C32AD8FB7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B13E4EE-3853-5852-9165-597C32AD8FB7\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccessConfigurationResponse>\\n    <RequestId>9B13E4EE-3853-5852-9165-597C32AD8FB7</RequestId>\\n</DeleteAccessConfigurationResponse>","errorExample":""}]',
            'title' => '删除访问配置',
            'description' => '### 前提条件'."\n"
                .'删除访问配置前，您需要解除该访问配置在资源目录成员中的部署。具体操作，请参见[DeprovisionAccessConfiguration](~~338352~~)。'."\n"
                ."\n\n"
                .'### 使用说明'."\n"
                .'本文将提供一个示例，删除ID为`ac-001j9mcm3k7335bc****`的访问配置。',
        ],
        'AddPermissionPolicyToAccessConfiguration' => [
            'summary' => '为访问配置添加权限策略。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'PermissionPolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略类型。取值：'."\n"
                            ."\n"
                            .'- System：系统策略。复用RAM的系统策略。'."\n"
                            .'- Inline：内置策略。按照RAM权限策略语法和结构编写的自定义策略。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'PermissionPolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。具体如下：'."\n"
                            ."\n"
                            .'- 当`PermissionPolicyType`为`System`时，该参数为系统策略名称。由于复用的是RAM系统策略，请在RAM中获取系统策略名称。'."\n"
                            .'- 当`PermissionPolicyType`为`Inline`时，该参数为内置策略名称。您可以自定义该参数。长度最大为32个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'AliyunECSFullAccess',
                    ],
                ],
                [
                    'name' => 'InlinePolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内置策略内容。'."\n"
                            ."\n"
                            .'长度：最大4096个字符。'."\n"
                            ."\n"
                            .'当`PermissionPolicyType`为`Inline`时，该参数必须配置。关于权限策略的语法和结构，请参见[权限策略语法和结构](~~93739~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Statement": [{"Action": "*","Effect": "Allow","Resource": "*"}],"Version": "1"}',
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
                                'example' => 'B7C6E839-FB65-59BE-B753-003AA8AF7DF7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B7C6E839-FB65-59BE-B753-003AA8AF7DF7\\"\\n}","errorExample":""},{"type":"xml","example":"<AddPermissionPolicyToAccessConfigurationResponse>\\n    <RequestId>B7C6E839-FB65-59BE-B753-003AA8AF7DF7</RequestId>\\n</AddPermissionPolicyToAccessConfigurationResponse>","errorExample":""}]',
            'title' => '为访问配置添加权限策略',
            'description' => '本文将提供一个示例，为访问配置`ac-00jhtfl8thteu6uj****`添加一条系统策略`AliyunECSFullAccess`。',
        ],
        'RemovePermissionPolicyFromAccessConfiguration' => [
            'summary' => '为访问配置移除权限策略。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'PermissionPolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略类型。取值：'."\n"
                            ."\n"
                            .'- System：系统策略。'."\n"
                            .'- Inline：内置策略。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'System',
                    ],
                ],
                [
                    'name' => 'PermissionPolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略名称。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'AliyunECSFullAccess',
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
                                'example' => '9B13E4EE-3853-5852-9165-597C32AD8FB7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B13E4EE-3853-5852-9165-597C32AD8FB7\\"\\n}","errorExample":""},{"type":"xml","example":"<RemovePermissionPolicyFromAccessConfigurationResponse>\\n    <RequestId>9B13E4EE-3853-5852-9165-597C32AD8FB7</RequestId>\\n</RemovePermissionPolicyFromAccessConfigurationResponse>","errorExample":""}]',
            'title' => '为访问配置移除权限策略',
            'description' => '内置策略移除后不可恢复。'."\n"
                ."\n"
                .'本文将提供一个示例，为访问配置`ac-00jhtfl8thteu6uj****`移除一条系统策略`AliyunECSFullAccess`。',
        ],
        'UpdateInlinePolicyForAccessConfiguration' => [
            'summary' => '调用UpdateInlinePolicyForAccessConfiguration修改访问配置的内置策略。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'InlinePolicyName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内置策略名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'InlinePolicy',
                    ],
                ],
                [
                    'name' => 'NewInlinePolicyDocument',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的内置策略内容。'."\n"
                            ."\n"
                            .'长度：最大4096个字符。'."\n"
                            ."\n"
                            .'关于权限策略的语法和结构，请参见[权限策略语法和结构](~~93739~~)。'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"Statement": [{"Action": "*","Effect": "Allow","Resource": "*"}],"Version": "1"}',
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
                                'example' => '9B13E4EE-3853-5852-9165-597C32AD8FB7',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"9B13E4EE-3853-5852-9165-597C32AD8FB7\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateInlinePolicyForAccessConfigurationResponse>\\n    <RequestId>9B13E4EE-3853-5852-9165-597C32AD8FB7</RequestId>\\n</UpdateInlinePolicyForAccessConfigurationResponse>","errorExample":""}]',
            'title' => '修改访问配置的内置策略',
            'description' => '本文将提供一个示例，修改访问配置`ac-00jhtfl8thteu6uj****`的内置策略。',
        ],
        'ListPermissionPoliciesInAccessConfiguration' => [
            'summary' => '查询访问配置中的权限策略列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'PermissionPolicyType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '权限策略类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- System：系统策略。'."\n"
                            .'- Inline：内置策略。'."\n"
                            ."\n"
                            .'如不指定，则查询所有类型的权限策略。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'System',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'PermissionPolicies' => [
                                'description' => '权限策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '权限策略列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PermissionPolicyName' => [
                                            'description' => '权限策略名称。',
                                            'type' => 'string',
                                            'example' => 'AliyunECSFullAccess',
                                        ],
                                        'PermissionPolicyType' => [
                                            'description' => '权限策略类型。',
                                            'type' => 'string',
                                            'example' => 'System',
                                        ],
                                        'PermissionPolicyDocument' => [
                                            'description' => '内置策略内容。'."\n"
                                                ."\n"
                                                .'> 仅内置策略返回该参数。',
                                            'type' => 'string',
                                            'example' => '{\\"Statement\\": [{\\"Action\\": \\"*\\",\\"Effect\\": \\"Allow\\",\\"Resource\\": \\"*\\"}],\\"Version\\": \\"1\\"}',
                                        ],
                                        'AddTime' => [
                                            'description' => '权限策略被添加到访问配置的时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-03T06:37:25Z',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '3A5E771F-1F5A-5555-A64E-579748AAFD98',
                            ],
                            'TotalCounts' => [
                                'description' => '权限策略总个数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"PermissionPolicies\\": [\\n    {\\n      \\"PermissionPolicyName\\": \\"AliyunECSFullAccess\\",\\n      \\"PermissionPolicyType\\": \\"System\\",\\n      \\"PermissionPolicyDocument\\": \\"{\\\\\\\\\\\\\\"Statement\\\\\\\\\\\\\\": [{\\\\\\\\\\\\\\"Action\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"*\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Effect\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"Allow\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"Resource\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"*\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"Version\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"1\\\\\\\\\\\\\\"}\\",\\n      \\"AddTime\\": \\"2021-11-03T06:37:25Z\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"3A5E771F-1F5A-5555-A64E-579748AAFD98\\",\\n  \\"TotalCounts\\": 2\\n}","errorExample":""},{"type":"xml","example":"<ListPermissionPoliciesInAccessConfigurationResponse>\\n\\t<PermissionPolicies>\\n\\t\\t<PermissionPolicy>\\n\\t\\t\\t<PermissionPolicyName>InlinePolicy</PermissionPolicyName>\\n\\t\\t\\t<PermissionPolicyType>Inline</PermissionPolicyType>\\n\\t\\t\\t<PermissionPolicyDocument>{\\"Statement\\": [{\\"Action\\": \\"*\\",\\"Effect\\": \\"Allow\\",\\"Resource\\": \\"*\\"}],\\"Version\\": \\"1\\"}</PermissionPolicyDocument>\\n\\t\\t\\t<AddTime>2021-11-03T06:49:50Z</AddTime>\\n\\t\\t</PermissionPolicy>\\n\\t\\t<PermissionPolicy>\\n\\t\\t\\t<PermissionPolicyName>AliyunECSFullAccess</PermissionPolicyName>\\n\\t\\t\\t<PermissionPolicyType>System</PermissionPolicyType>\\n\\t\\t\\t<AddTime>2021-11-03T06:37:25Z</AddTime>\\n\\t\\t</PermissionPolicy>\\n\\t</PermissionPolicies>\\n\\t<RequestId>3A5E771F-1F5A-5555-A64E-579748AAFD98</RequestId>\\n\\t<TotalCounts>2</TotalCounts>\\n</ListPermissionPoliciesInAccessConfigurationResponse>","errorExample":""}]',
            'title' => '查询访问配置中的权限策略列表',
            'description' => '本文将提供一个示例，查询访问配置`ac-00jhtfl8thteu6uj****`中的权限策略列表。返回结果显示，该访问配置中存在一个系统策略和一个内置策略。',
        ],
        'ProvisionAccessConfiguration' => [
            'summary' => '调用ProvisionAccessConfiguration将访问配置部署到RD账号上。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '114240524784****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Tasks' => [
                                'description' => '任务信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- InProgress：任务执行中。'."\n"
                                                .'- Success：任务执行成功。'."\n"
                                                .'- Failed：任务执行失败。',
                                            'type' => 'string',
                                            'example' => 'InProgress',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 't-shqlhd8uvt280rtm****',
                                        ],
                                        'TargetPath' => [
                                            'description' => '任务目标在资源目录中的路径ID。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/r-Wm****/114240524784****',
                                        ],
                                        'TargetName' => [
                                            'description' => '任务目标名称。',
                                            'type' => 'string',
                                            'example' => 'dev-test',
                                        ],
                                        'TargetId' => [
                                            'description' => '部署目标ID。',
                                            'type' => 'string',
                                            'example' => '114240524784****',
                                        ],
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'ECS-Admin',
                                        ],
                                        'TargetPathName' => [
                                            'description' => '任务目标在资源目录中的路径名称。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/root/dev-test',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型。取值：ProvisionAccessConfiguration，表示部署访问配置任务。',
                                            'type' => 'string',
                                            'example' => 'ProvisionAccessConfiguration',
                                        ],
                                        'TargetType' => [
                                            'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00jhtfl8thteu6uj****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DFDC16B2-4509-5FA6-9FA5-3CD35E4292FB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Tasks\\": [\\n    {\\n      \\"Status\\": \\"InProgress\\",\\n      \\"TaskId\\": \\"t-shqlhd8uvt280rtm****\\",\\n      \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n      \\"TargetName\\": \\"dev-test\\",\\n      \\"TargetId\\": \\"114240524784****\\",\\n      \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n      \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n      \\"TaskType\\": \\"ProvisionAccessConfiguration\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"DFDC16B2-4509-5FA6-9FA5-3CD35E4292FB\\"\\n}","errorExample":""},{"type":"xml","example":"<ProvisionAccessConfigurationResponse>\\n\\t<Tasks>\\n\\t\\t<Task>\\n\\t\\t\\t<Status>InProgress</Status>\\n\\t\\t\\t<AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n\\t\\t\\t<TaskId>t-shqlhd8uvt280rtm****</TaskId>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n\\t\\t\\t<TaskType>ProvisionAccessConfiguration</TaskType>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<TargetName>dev-test</TargetName>\\n\\t\\t\\t<AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n\\t\\t\\t<TargetId>114240524784****</TargetId>\\n\\t\\t</Task>\\n\\t</Tasks>\\n\\t<RequestId>DFDC16B2-4509-5FA6-9FA5-3CD35E4292FB</RequestId>\\n</ProvisionAccessConfigurationResponse>\\t","errorExample":""}]',
            'title' => '将访问配置部署到RD账号上',
            'description' => '该API的操作为异步操作。您可以使用返回参数中的`TaskId`，调用[GetTask](~~340670~~)查询任务执行状态。'."\n"
                ."\n"
                .'本文将提供一个示例，将访问配置`ac-00jhtfl8thteu6uj****`部署到RD账号`114240524784****`上。',
        ],
        'DeprovisionAccessConfiguration' => [
            'summary' => '调用DeprovisionAccessConfiguration解除访问配置在RD账号上的部署。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '114240524784****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Tasks' => [
                                'description' => '任务信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- InProgress：任务执行中。'."\n"
                                                .'- Success：任务执行成功。'."\n"
                                                .'- Failed：任务执行失败。',
                                            'type' => 'string',
                                            'example' => 'InProgress',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 't-sh0655wnq8pdlrlc****',
                                        ],
                                        'TargetPath' => [
                                            'description' => '任务目标在资源目录中的路径ID。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/r-Wm****/114240524784****',
                                        ],
                                        'TargetName' => [
                                            'description' => '任务目标名称。',
                                            'type' => 'string',
                                            'example' => 'dev-test',
                                        ],
                                        'TargetId' => [
                                            'description' => '任务目标ID。',
                                            'type' => 'string',
                                            'example' => '114240524784****',
                                        ],
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'ECS-Admin',
                                        ],
                                        'TargetPathName' => [
                                            'description' => '任务目标在资源目录中的路径名称。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/root/dev-test',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型。取值：DeprovisionAccessConfiguration，表示解除访问配置部署任务。',
                                            'type' => 'string',
                                            'example' => 'DeprovisionAccessConfiguration',
                                        ],
                                        'TargetType' => [
                                            'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00jhtfl8thteu6uj****',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '584FE9D0-D1AC-5B19-A39C-8D244FC0538C',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Tasks\\": [\\n    {\\n      \\"Status\\": \\"InProgress\\",\\n      \\"TaskId\\": \\"t-sh0655wnq8pdlrlc****\\",\\n      \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n      \\"TargetName\\": \\"dev-test\\",\\n      \\"TargetId\\": \\"114240524784****\\",\\n      \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n      \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n      \\"TaskType\\": \\"DeprovisionAccessConfiguration\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"584FE9D0-D1AC-5B19-A39C-8D244FC0538C\\"\\n}","errorExample":""},{"type":"xml","example":"<DeprovisionAccessConfigurationResponse>\\n\\t<Tasks>\\n\\t\\t<Task>\\n\\t\\t\\t<Status>InProgress</Status>\\n\\t\\t\\t<AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n\\t\\t\\t<TaskId>t-sh0655wnq8pdlrlc****</TaskId>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n\\t\\t\\t<TaskType>DeprovisionAccessConfiguration</TaskType>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<TargetName>dev-test</TargetName>\\n\\t\\t\\t<AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n\\t\\t\\t<TargetId>114240524784****</TargetId>\\n\\t\\t</Task>\\n\\t</Tasks>\\n\\t<RequestId>584FE9D0-D1AC-5B19-A39C-8D244FC0538C</RequestId>\\n</DeprovisionAccessConfigurationResponse>\\t\\n","errorExample":""}]',
            'title' => '解除访问配置在RD账号上的部署',
            'description' => '该API的操作为异步操作。您可以使用返回参数中的`TaskId`，调用[GetTask](~~340670~~)查询任务执行状态。'."\n"
                ."\n"
                .'本文将提供一个示例，解除访问配置`ac-00jhtfl8thteu6uj****`在RD账号`114240524784****`上的部署。',
        ],
        'ListAccessConfigurationProvisionings' => [
            'summary' => '调用ListAccessConfigurationProvisionings查询访问配置部署列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID，用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac-00ccule7tadaijxc****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'取值：RD-Account，表示任务目标类型为RD账号。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '114240524784****',
                    ],
                ],
                [
                    'name' => 'ProvisioningStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署状态，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- Provisioned：部署成功。'."\n"
                            .'- ReprovisionRequired：需要重新部署。'."\n"
                            .'- DeprovisionFailed：部署失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Provisioned',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~20。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '6BA1BDF1-D845-5D2C-B742-74BE2970E4C1',
                            ],
                            'AccessConfigurationProvisionings' => [
                                'description' => '访问配置部署列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '访问配置部署列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '部署状态。取值：'."\n"
                                                ."\n"
                                                .'- Provisioned：部署成功。'."\n"
                                                .'- ReprovisionRequired：需要重新部署。'."\n"
                                                .'- DeprovisionFailed：部署失败。',
                                            'type' => 'string',
                                            'example' => 'Provisioned',
                                        ],
                                        'SAMLProviderName' => [
                                            'description' => '在RD账号中创建的SAML身份提供商名称。',
                                            'type' => 'string',
                                            'example' => 'AliyunReservedSSO-d-00fc2p61****',
                                        ],
                                        'TargetPath' => [
                                            'description' => '任务目标在资源目录中的路径ID。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/r-Wm****/fd-pjM8oy****/101522521960****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '首次部署成功的时间。',
                                            'type' => 'string',
                                            'example' => '2021-07-26T08:54:14Z',
                                        ],
                                        'TargetName' => [
                                            'description' => '任务目标名称。',
                                            'type' => 'string',
                                            'example' => 'SharedServices_5009****',
                                        ],
                                        'TargetId' => [
                                            'description' => '任务目标ID。'."\n"
                                                ."\n"
                                                .'当任务目标类型为`RD-Account`时，该参数为RD账号UID。',
                                            'type' => 'string',
                                            'example' => '101522521960****',
                                        ],
                                        'RAMRoleName' => [
                                            'description' => '在RD账号中创建的RAM角色名称。',
                                            'type' => 'string',
                                            'example' => 'AliyunReservedSSO-VPC-Admin',
                                        ],
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'VPC-Admin',
                                        ],
                                        'TargetPathName' => [
                                            'description' => '任务目标在资源目录中的路径名称。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/root/Core/SharedServices_5009****',
                                        ],
                                        'TargetType' => [
                                            'description' => '任务目标类型。'."\n"
                                                ."\n"
                                                .'取值：RD-Account，表示任务目标类型为RD账号。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '最近一次部署成功的时间。',
                                            'type' => 'string',
                                            'example' => '2021-07-26T08:54:18Z',
                                        ],
                                        'RAMPolicyNames' => [
                                            'description' => '在RD账号中创建的自定义策略名称。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '在RD账号中创建的自定义策略名称。'."\n"
                                                    ."\n"
                                                    .'> 只有访问配置存在内置策略，才显示该参数。',
                                                'type' => 'string',
                                                'example' => 'AliyunReservedSSO-VPC-Admin-InlinePolicy',
                                            ],
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00ccule7tadaijxc****',
                                        ],
                                    ],
                                ],
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"6BA1BDF1-D845-5D2C-B742-74BE2970E4C1\\",\\n  \\"AccessConfigurationProvisionings\\": [\\n    {\\n      \\"Status\\": \\"Provisioned\\",\\n      \\"SAMLProviderName\\": \\"AliyunReservedSSO-d-00fc2p61****\\",\\n      \\"TargetPath\\": \\"rd-3G****/r-Wm****/fd-pjM8oy****/101522521960****\\",\\n      \\"CreateTime\\": \\"2021-07-26T08:54:14Z\\",\\n      \\"TargetName\\": \\"SharedServices_5009****\\",\\n      \\"TargetId\\": \\"101522521960****\\",\\n      \\"RAMRoleName\\": \\"AliyunReservedSSO-VPC-Admin\\",\\n      \\"AccessConfigurationName\\": \\"VPC-Admin\\",\\n      \\"TargetPathName\\": \\"rd-3G****/root/Core/SharedServices_5009****\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"UpdateTime\\": \\"2021-07-26T08:54:18Z\\",\\n      \\"RAMPolicyNames\\": [\\n        \\"AliyunReservedSSO-VPC-Admin-InlinePolicy\\"\\n      ],\\n      \\"AccessConfigurationId\\": \\"ac-00ccule7tadaijxc****\\"\\n    }\\n  ],\\n  \\"MaxResults\\": 10,\\n  \\"IsTruncated\\": false,\\n  \\"TotalCounts\\": 2\\n}","errorExample":""},{"type":"xml","example":"<ListAccessConfigurationProvisioningsResponse>\\n\\t<RequestId>6BA1BDF1-D845-5D2C-B742-74BE2970E4C1</RequestId>\\n\\t<AccessConfigurationProvisionings>\\n\\t\\t<AccessConfigurationProvisioning>\\n\\t\\t\\t<Status>Provisioned</Status>\\n\\t\\t\\t<AccessConfigurationName>VPC-Admin</AccessConfigurationName>\\n\\t\\t\\t<SAMLProviderName>AliyunReservedSSO-d-00fc2p61****</SAMLProviderName>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/Core/SharedServices_5009****</TargetPathName>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/fd-pjM8oy****/101522521960****</TargetPath>\\n\\t\\t\\t<CreateTime>2021-07-26T08:54:14Z</CreateTime>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<UpdateTime>2021-07-26T08:54:18Z</UpdateTime>\\n\\t\\t\\t<TargetName>SharedServices_5009****</TargetName>\\n\\t\\t\\t<AccessConfigurationId>ac-00ccule7tadaijxc****</AccessConfigurationId>\\n\\t\\t\\t<TargetId>101522521960****</TargetId>\\n\\t\\t\\t<RAMRoleName>AliyunReservedSSO-VPC-Admin</RAMRoleName>\\n\\t\\t</AccessConfigurationProvisioning>\\n\\t\\t<AccessConfigurationProvisioning>\\n\\t\\t\\t<Status>ReprovisionRequired</Status>\\n\\t\\t\\t<AccessConfigurationName>VPC-Admin</AccessConfigurationName>\\n\\t\\t\\t<SAMLProviderName>AliyunReservedSSO-d-00fc2p61****</SAMLProviderName>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/部门1</TargetPathName>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/195320939469****</TargetPath>\\n\\t\\t\\t<CreateTime>2021-07-04T09:37:31Z</CreateTime>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<UpdateTime>2021-07-26T03:02:11Z</UpdateTime>\\n\\t\\t\\t<TargetName>部门1</TargetName>\\n\\t\\t\\t<AccessConfigurationId>ac-00ccule7tadaijxc****</AccessConfigurationId>\\n\\t\\t\\t<TargetId>195320939469****</TargetId>\\n\\t\\t\\t<RAMRoleName>AliyunReservedSSO-VPC-Admin</RAMRoleName>\\n\\t\\t</AccessConfigurationProvisioning>\\n\\t</AccessConfigurationProvisionings>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>2</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n</ListAccessConfigurationProvisioningsResponse>","errorExample":""}]',
            'title' => '查询访问配置部署列表',
            'description' => '本文将提供一个示例，查询访问配置`ac-00ccule7tadaijxc****`的部署列表。返回结果显示，该访问配置在两个RD账号上进行了部署。',
        ],
        'CreateAccessAssignment' => [
            'summary' => '为RD账号设置允许访问的用户或用户组，以及对应的访问权限（访问配置）。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部署目标ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '114240524784****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份类型。取值：'."\n"
                            ."\n"
                            .'- User：用户。'."\n"
                            .'- Group：用户组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份ID。具体如下：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`为`User`时，`PrincipalId`为云SSO用户ID。'."\n"
                            .'- 当`PrincipalType`为`Group`时，`PrincipalId`为云SSO用户组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Task' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态。取值：'."\n"
                                            ."\n"
                                            .'- InProgress：任务执行中。'."\n"
                                            .'- Success：任务执行成功。'."\n"
                                            .'- Failed：任务执行失败。',
                                        'type' => 'string',
                                        'example' => 'InProgress',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 't-sh6tceylhvgejpip****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => '云SSO身份ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'TargetPath' => [
                                        'description' => '任务目标在资源目录中的路径ID。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/r-Wm****/114240524784****',
                                    ],
                                    'PrincipalName' => [
                                        'description' => '云SSO身份名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'TargetName' => [
                                        'description' => '任务目标名称。',
                                        'type' => 'string',
                                        'example' => 'dev-test',
                                    ],
                                    'TargetId' => [
                                        'description' => '任务目标ID。',
                                        'type' => 'string',
                                        'example' => '114240524784****',
                                    ],
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'ECS-Admin',
                                    ],
                                    'TargetPathName' => [
                                        'description' => '任务目标在资源目录中的路径名称。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/root/dev-test',
                                    ],
                                    'TaskType' => [
                                        'description' => '任务类型。取值：CreateAccessAssignment，表示在RD账号上的授权任务。',
                                        'type' => 'string',
                                        'example' => 'CreateAccessAssignment',
                                    ],
                                    'TargetType' => [
                                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00jhtfl8thteu6uj****',
                                    ],
                                    'PrincipalType' => [
                                        'description' => '云SSO身份类型。取值：'."\n"
                                            ."\n"
                                            .'- User：用户。'."\n"
                                            .'- Group：用户组。',
                                        'type' => 'string',
                                        'example' => 'User',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4726AA56-E138-5C99-85E4-F493536D042F',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Task\\": {\\n    \\"Status\\": \\"InProgress\\",\\n    \\"TaskId\\": \\"t-sh6tceylhvgejpip****\\",\\n    \\"PrincipalId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n    \\"PrincipalName\\": \\"Alice\\",\\n    \\"TargetName\\": \\"dev-test\\",\\n    \\"TargetId\\": \\"114240524784****\\",\\n    \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n    \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n    \\"TaskType\\": \\"CreateAccessAssignment\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\",\\n    \\"PrincipalType\\": \\"User\\"\\n  },\\n  \\"RequestId\\": \\"4726AA56-E138-5C99-85E4-F493536D042F\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateAccessAssignmentResponse>\\n    <Task>\\n        <Status>InProgress</Status>\\n        <TaskId>t-sh6tceylhvgejpip****</TaskId>\\n        <PrincipalId>u-00q8wbq42wiltcrk****</PrincipalId>\\n        <TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n        <PrincipalName>Alice</PrincipalName>\\n        <TargetName>dev-test</TargetName>\\n        <TargetId>114240524784****</TargetId>\\n        <AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n        <TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n        <TaskType>CreateAccessAssignment</TaskType>\\n        <TargetType>RD-Account</TargetType>\\n        <AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n        <PrincipalType>User</PrincipalType>\\n    </Task>\\n    <RequestId>4726AA56-E138-5C99-85E4-F493536D042F</RequestId>\\n</CreateAccessAssignmentResponse>","errorExample":""}]',
            'title' => '在RD账号上授权',
            'description' => '该API操作为异步操作。您可以使用返回参数中的`TaskId`，调用[GetTask](~~340670~~)查询任务执行状态。'."\n"
                ."\n"
                .'关于在RD账号上授权的更多信息，请参见[多账号授权概述](~~266726~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，为云SSO的用户`u-00q8wbq42wiltcrk****`在RD账号`114240524784****`上使用访问配置`ac-00jhtfl8thteu6uj****`配置权限，实现云SSO用户访问RD账号中有权限的资源。',
        ],
        'ListAccessAssignments' => [
            'summary' => '调用ListAccessAssignments查询授权列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID，用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'取值：RD-Account，表示任务目标类型为RD账号。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '114240524784****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- User：用户。'."\n"
                            .'- Group：用户组。'."\n"
                            ."\n"
                            .'> `PrincipalId`与`PrincipalType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份ID，用于查询的过滤条件。具体如下：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`为User时，`PrincipalId`为云SSO用户ID。'."\n"
                            .'- 当`PrincipalType`为Group时，`PrincipalId`为云SSO用户组ID。'."\n"
                            ."\n"
                            .'> `PrincipalId`与`PrincipalType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~20。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '66898413-EB80-556D-9429-06FE3548F672',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'AccessAssignments' => [
                                'description' => '授权信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '授权信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'ECS-Admin',
                                        ],
                                        'TargetPathName' => [
                                            'description' => '任务目标在资源目录中的路径名称。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/root/dev-test',
                                        ],
                                        'PrincipalId' => [
                                            'description' => '云SSO身份ID。',
                                            'type' => 'string',
                                            'example' => 'u-00q8wbq42wiltcrk****',
                                        ],
                                        'TargetPath' => [
                                            'description' => '任务目标在资源目录中的路径ID。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/r-Wm****/114240524784****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '授权成功的时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-04T10:03:08Z',
                                        ],
                                        'TargetType' => [
                                            'description' => '任务目标类型。'."\n"
                                                ."\n"
                                                .'取值：RD-Account，表示任务目标类型为RD账号。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'PrincipalName' => [
                                            'description' => '云SSO身份名称。',
                                            'type' => 'string',
                                            'example' => 'Alice',
                                        ],
                                        'TargetName' => [
                                            'description' => '任务目标名称。',
                                            'type' => 'string',
                                            'example' => 'dev-test',
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00jhtfl8thteu6uj****',
                                        ],
                                        'PrincipalType' => [
                                            'description' => '云SSO身份类型。取值：'."\n"
                                                ."\n"
                                                .'- User：用户。'."\n"
                                                .'- Group：用户组。',
                                            'type' => 'string',
                                            'example' => 'User',
                                        ],
                                        'TargetId' => [
                                            'description' => '任务目标ID。',
                                            'type' => 'string',
                                            'example' => '114240524784****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"66898413-EB80-556D-9429-06FE3548F672\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCounts\\": 1,\\n  \\"IsTruncated\\": false,\\n  \\"AccessAssignments\\": [\\n    {\\n      \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n      \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n      \\"PrincipalId\\": \\"u-00q8wbq42wiltcrk****\\",\\n      \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n      \\"CreateTime\\": \\"2021-11-04T10:03:08Z\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"PrincipalName\\": \\"Alice\\",\\n      \\"TargetName\\": \\"dev-test\\",\\n      \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\",\\n      \\"PrincipalType\\": \\"User\\",\\n      \\"TargetId\\": \\"114240524784****\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListAccessAssignmentsResponse>\\n\\t<RequestId>66898413-EB80-556D-9429-06FE3548F672</RequestId>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>1</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n\\t<AccessAssignments>\\n\\t\\t<AccessAssignment>\\n\\t\\t\\t<AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n\\t\\t\\t<PrincipalId>u-00q8wbq42wiltcrk****</PrincipalId>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n\\t\\t\\t<CreateTime>2021-11-04T10:03:08Z</CreateTime>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<PrincipalName>Alice</PrincipalName>\\n\\t\\t\\t<TargetName>dev-test</TargetName>\\n\\t\\t\\t<AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n\\t\\t\\t<PrincipalType>User</PrincipalType>\\n\\t\\t\\t<TargetId>114240524784****</TargetId>\\n\\t\\t</AccessAssignment>\\n\\t</AccessAssignments>\\n</ListAccessAssignmentsResponse>\\t\\n","errorExample":""}]',
            'title' => '查询授权列表',
            'description' => '本文将提供一个示例，查询在RD账号`114240524784****`上的授权信息。返回结果显示，该RD账号上存在一条授权记录。',
        ],
        'DeleteAccessAssignment' => [
            'summary' => '调用DeleteAccessAssignment移除RD账号上的授权。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '114240524784****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份类型。取值：'."\n"
                            ."\n"
                            .'- User：用户。'."\n"
                            .'- Group：用户组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份ID。具体如下：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`为`User`时，`PrincipalId`为云SSO用户ID。'."\n"
                            .'- 当`PrincipalType`为`Group`时，`PrincipalId`为云SSO用户组ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'DeprovisionStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当您移除一个RD账号上使用某访问配置的最后一个授权时，是否同时解除访问配置部署。取值：'."\n"
                            ."\n"
                            .'- DeprovisionForLastAccessAssignmentOnAccount：解除访问配置部署。'."\n"
                            .'- None（默认值）：不解除访问配置部署。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'None',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Task' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态。取值：'."\n"
                                            ."\n"
                                            .'- InProgress：任务执行中。'."\n"
                                            .'- Success：任务执行成功。'."\n"
                                            .'- Failed：任务执行失败。',
                                        'type' => 'string',
                                        'example' => 'InProgress',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 't-shfqw1u1edszvxw5****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => '云SSO身份ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'TargetPath' => [
                                        'description' => '任务目标在资源目录中的路径ID。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/r-Wm****/114240524784****',
                                    ],
                                    'PrincipalName' => [
                                        'description' => '云SSO身份名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'TargetName' => [
                                        'description' => '任务目标名称。',
                                        'type' => 'string',
                                        'example' => 'dev-test',
                                    ],
                                    'TargetId' => [
                                        'description' => '任务目标ID。',
                                        'type' => 'string',
                                        'example' => '114240524784****',
                                    ],
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'ECS-Admin',
                                    ],
                                    'TargetPathName' => [
                                        'description' => '任务目标在资源目录中的路径名称。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/root/dev-test',
                                    ],
                                    'TaskType' => [
                                        'description' => '任务类型。取值：DeleteAccessAssignment，表示移除RD账号上的授权任务。',
                                        'type' => 'string',
                                        'example' => 'DeleteAccessAssignment',
                                    ],
                                    'TargetType' => [
                                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00jhtfl8thteu6uj****',
                                    ],
                                    'PrincipalType' => [
                                        'description' => '云SSO身份类型。取值：'."\n"
                                            ."\n"
                                            .'- User：用户。'."\n"
                                            .'- Group：用户组。',
                                        'type' => 'string',
                                        'example' => 'User',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '5C9D0CF4-5CE8-5CE6-932A-826EF4ADD007',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Task\\": {\\n    \\"Status\\": \\"InProgress\\",\\n    \\"TaskId\\": \\"t-shfqw1u1edszvxw5****\\",\\n    \\"PrincipalId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n    \\"PrincipalName\\": \\"Alice\\",\\n    \\"TargetName\\": \\"dev-test\\",\\n    \\"TargetId\\": \\"114240524784****\\",\\n    \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n    \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n    \\"TaskType\\": \\"DeleteAccessAssignment\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\",\\n    \\"PrincipalType\\": \\"User\\"\\n  },\\n  \\"RequestId\\": \\"5C9D0CF4-5CE8-5CE6-932A-826EF4ADD007\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAccessAssignmentResponse>\\n    <Task>\\n        <Status>InProgress</Status>\\n        <TaskId>t-shfqw1u1edszvxw5****</TaskId>\\n        <PrincipalId>u-00q8wbq42wiltcrk****</PrincipalId>\\n        <TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n        <PrincipalName>Alice</PrincipalName>\\n        <TargetName>dev-test</TargetName>\\n        <TargetId>114240524784****</TargetId>\\n        <AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n        <TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n        <TaskType>DeleteAccessAssignment</TaskType>\\n        <TargetType>RD-Account</TargetType>\\n        <AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n        <PrincipalType>User</PrincipalType>\\n    </Task>\\n    <RequestId>5C9D0CF4-5CE8-5CE6-932A-826EF4ADD007</RequestId>\\n</DeleteAccessAssignmentResponse>","errorExample":""}]',
            'title' => '移除RD账号上的授权',
            'description' => '该API操作为异步操作。您可以使用返回参数中的`TaskId`，调用[GetTask](~~340670~~)查询任务执行状态。'."\n"
                ."\n"
                .'本文将提供一个示例，移除RD账号`114240524784****`上云SSO用户`u-00q8wbq42wiltcrk****`使用访问配置`ac-00jhtfl8thteu6uj****`的授权。',
        ],
        'ListTasks' => [
            'summary' => '调用ListTasks查询异步任务列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'AccessConfigurationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '访问配置ID，用于查询的过滤条件。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ac-00jhtfl8thteu6uj****',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标类型，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'取值：RD-Account，表示任务目标类型为RD账号。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务目标ID，用于查询的过滤条件。'."\n"
                            ."\n"
                            .'> `TargetId`与`TargetType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '114240524784****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- User：用户。'."\n"
                            .'- Group：用户组。'."\n"
                            ."\n"
                            .'> `PrincipalId`与`PrincipalType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '云SSO身份ID，用于查询的过滤条件。具体如下：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`为`User`时，`PrincipalId`为云SSO用户ID。'."\n"
                            .'- 当`PrincipalType`为`Group`时，`PrincipalId`为云SSO用户组ID。'."\n"
                            ."\n"
                            .'> `PrincipalId`与`PrincipalType`必须同时配置才能作为有效的过滤条件进行查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'u-00q8wbq42wiltcrk****',
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- ProvisionAccessConfiguration：部署访问配置。'."\n"
                            .'- DeprovisionAccessConfiguration：解除访问配置部署。'."\n"
                            .'- CreateAccessAssignment：在RD账号上授权。'."\n"
                            .'- DeleteAccessAssignment：移除RD账号上的授权。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CreateAccessAssignment',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务状态，用于查询的过滤条件。取值：'."\n"
                            ."\n"
                            .'- InProgress：任务执行中。'."\n"
                            .'- Success：任务执行成功。'."\n"
                            .'- Failed：任务执行失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Success',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~20。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Filter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '过滤条件。'."\n"
                            ."\n"
                            .'格式：<Attribute> <Operator> <Value>，不区分大小写。其中，<Attribute>只支持StartTime，<Operator>只支持ge（Greater Than or Equals），<Value>格式为YYYY-MM-DDTHH:mm:SSZ，且只能填写距离当前时间不超过7天的值。'."\n"
                            ."\n"
                            .'示例：Filter = "StartTime ge 2021-03-15T01:12:23Z"，表示查询从2021-03-15T01:12:23 GMT（0时区）时间开始的任务列表。'."\n"
                            ."\n"
                            .'> 如不指定该参数，则默认返回距离当前时间24小时内的任务列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'StartTime ge 2021-03-15T01:12:23Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Tasks' => [
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '任务状态。取值：'."\n"
                                                ."\n"
                                                .'- InProgress：任务执行中。'."\n"
                                                .'- Success：任务执行成功。'."\n"
                                                .'- Failed：任务执行失败。',
                                            'type' => 'string',
                                            'example' => 'Success',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 't-sh5k4gesm6twlrqb****',
                                        ],
                                        'EndTime' => [
                                            'description' => '任务结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-09T05:50:50Z',
                                        ],
                                        'PrincipalId' => [
                                            'description' => '云SSO身份ID。',
                                            'type' => 'string',
                                            'example' => 'u-00q8wbq42wiltcrk****',
                                        ],
                                        'TargetPath' => [
                                            'description' => '任务目标在资源目录中的路径ID。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/r-Wm****/114240524784****',
                                        ],
                                        'StartTime' => [
                                            'description' => '任务开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-11-09T05:50:50Z',
                                        ],
                                        'PrincipalName' => [
                                            'description' => '云SSO身份名称。',
                                            'type' => 'string',
                                            'example' => 'Alice',
                                        ],
                                        'TargetName' => [
                                            'description' => '任务目标名称。',
                                            'type' => 'string',
                                            'example' => 'dev-test',
                                        ],
                                        'TargetId' => [
                                            'description' => '任务目标ID。',
                                            'type' => 'string',
                                            'example' => '114240524784****',
                                        ],
                                        'AccessConfigurationName' => [
                                            'description' => '访问配置名称。',
                                            'type' => 'string',
                                            'example' => 'ECS-Admin',
                                        ],
                                        'TargetPathName' => [
                                            'description' => '任务目标在资源目录中的路径名称。',
                                            'type' => 'string',
                                            'example' => 'rd-3G****/root/dev-test',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型。取值：'."\n"
                                                ."\n"
                                                .'- ProvisionAccessConfiguration：部署访问配置。'."\n"
                                                .'- DeprovisionAccessConfiguration：解除访问配置部署。'."\n"
                                                .'- CreateAccessAssignment：在RD账号上授权。'."\n"
                                                .'- DeleteAccessAssignment：移除RD账号上的授权。',
                                            'type' => 'string',
                                            'example' => 'CreateAccessAssignment',
                                        ],
                                        'FailureReason' => [
                                            'description' => '任务失败原因。'."\n"
                                                ."\n"
                                                .'> 只有`Status`为`Failed`，才显示该参数。',
                                            'type' => 'string',
                                            'example' => 'No Permission.',
                                        ],
                                        'TargetType' => [
                                            'description' => '任务目标类型。'."\n"
                                                ."\n"
                                                .'取值：RD-Account，表示任务目标类型为RD账号。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'AccessConfigurationId' => [
                                            'description' => '访问配置ID。',
                                            'type' => 'string',
                                            'example' => 'ac-00jhtfl8thteu6uj****',
                                        ],
                                        'PrincipalType' => [
                                            'description' => '云SSO身份类型。取值：'."\n"
                                                ."\n"
                                                .'- User：用户。'."\n"
                                                .'- Group：用户组。',
                                            'type' => 'string',
                                            'example' => 'User',
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。'."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`，才显示该参数。',
                                'type' => 'string',
                                'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'C0DA2DFC-EB18-59EF-BD82-C30862EBA3A3',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Tasks\\": [\\n    {\\n      \\"Status\\": \\"Success\\",\\n      \\"TaskId\\": \\"t-sh5k4gesm6twlrqb****\\",\\n      \\"EndTime\\": \\"2021-11-09T05:50:50Z\\",\\n      \\"PrincipalId\\": \\"u-00q8wbq42wiltcrk****\\",\\n      \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n      \\"StartTime\\": \\"2021-11-09T05:50:50Z\\",\\n      \\"PrincipalName\\": \\"Alice\\",\\n      \\"TargetName\\": \\"dev-test\\",\\n      \\"TargetId\\": \\"114240524784****\\",\\n      \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n      \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n      \\"TaskType\\": \\"CreateAccessAssignment\\",\\n      \\"FailureReason\\": \\"No Permission.\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\",\\n      \\"PrincipalType\\": \\"User\\"\\n    }\\n  ],\\n  \\"NextToken\\": \\"K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****\\",\\n  \\"RequestId\\": \\"C0DA2DFC-EB18-59EF-BD82-C30862EBA3A3\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCounts\\": 1,\\n  \\"IsTruncated\\": false\\n}","errorExample":""},{"type":"xml","example":"<ListTasksResponse>\\n\\t<Tasks>\\n\\t\\t<Task>\\n\\t\\t\\t<Status>Success</Status>\\n\\t\\t\\t<TaskId>t-sh5k4gesm6twlrqb****</TaskId>\\n\\t\\t\\t<EndTime>2021-11-09T05:50:50Z</EndTime>\\n\\t\\t\\t<PrincipalId>u-00q8wbq42wiltcrk****</PrincipalId>\\n\\t\\t\\t<TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n\\t\\t\\t<StartTime>2021-11-09T05:50:50Z</StartTime>\\n\\t\\t\\t<PrincipalName>Alice</PrincipalName>\\n\\t\\t\\t<TargetName>dev-test</TargetName>\\n\\t\\t\\t<TargetId>114240524784****</TargetId>\\n\\t\\t\\t<AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n\\t\\t\\t<TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n\\t\\t\\t<TaskType>CreateAccessAssignment</TaskType>\\n\\t\\t\\t<TargetType>RD-Account</TargetType>\\n\\t\\t\\t<AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n\\t\\t\\t<PrincipalType>User</PrincipalType>\\n\\t\\t</Task>\\n\\t</Tasks>\\n\\t<RequestId>C0DA2DFC-EB18-59EF-BD82-C30862EBA3A3</RequestId>\\n\\t<MaxResults>10</MaxResults>\\n\\t<TotalCounts>1</TotalCounts>\\n\\t<IsTruncated>false</IsTruncated>\\n</ListTasksResponse>\\t","errorExample":""}]',
            'title' => '查询异步任务列表',
            'description' => '本API默认查询距离当前时间24小时内的任务列表。最多支持查询7天内的任务列表。您可以通过`Filter`参数设置查询的开始时间。'."\n"
                ."\n"
                .'本文将提供一个示例，查询24小时内的任务列表。',
        ],
        'GetTask' => [
            'summary' => '调用GetTask查询异步任务信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 't-shfqw1u1edszvxw5****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'Task' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态。取值：'."\n"
                                            ."\n"
                                            .'- InProgress：任务执行中。'."\n"
                                            .'- Success：任务执行成功。'."\n"
                                            .'- Failed：任务执行失败。',
                                        'type' => 'string',
                                        'example' => 'Success',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 't-shfqw1u1edszvxw5****',
                                    ],
                                    'EndTime' => [
                                        'description' => '任务结束时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-05T02:58:08Z',
                                    ],
                                    'PrincipalId' => [
                                        'description' => '云SSO身份ID。',
                                        'type' => 'string',
                                        'example' => 'u-00q8wbq42wiltcrk****',
                                    ],
                                    'TargetPath' => [
                                        'description' => '任务目标在资源目录中的路径ID。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/r-Wm****/114240524784****',
                                    ],
                                    'StartTime' => [
                                        'description' => '任务开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-05T02:58:07Z',
                                    ],
                                    'PrincipalName' => [
                                        'description' => '云SSO身份名称。',
                                        'type' => 'string',
                                        'example' => 'Alice',
                                    ],
                                    'TargetName' => [
                                        'description' => '任务目标名称。',
                                        'type' => 'string',
                                        'example' => 'dev-test',
                                    ],
                                    'TargetId' => [
                                        'description' => '任务目标ID。',
                                        'type' => 'string',
                                        'example' => '114240524784****',
                                    ],
                                    'AccessConfigurationName' => [
                                        'description' => '访问配置名称。',
                                        'type' => 'string',
                                        'example' => 'ECS-Admin',
                                    ],
                                    'TargetPathName' => [
                                        'description' => '任务目标在资源目录中的路径名称。',
                                        'type' => 'string',
                                        'example' => 'rd-3G****/root/dev-test',
                                    ],
                                    'TaskType' => [
                                        'description' => '任务类型。取值：'."\n"
                                            ."\n"
                                            .'- ProvisionAccessConfiguration：部署访问配置。'."\n"
                                            .'- DeprovisionAccessConfiguration：解除访问配置部署。'."\n"
                                            .'- CreateAccessAssignment：在RD账号上授权。'."\n"
                                            .'- DeleteAccessAssignment：移除RD账号上的授权。'."\n",
                                        'type' => 'string',
                                        'example' => 'DeleteAccessAssignment',
                                    ],
                                    'FailureReason' => [
                                        'description' => '任务失败原因。'."\n"
                                            ."\n"
                                            .'> 只有`Status`为`Failed`，才会显示该参数。',
                                        'type' => 'string',
                                        'example' => 'No Permission.',
                                    ],
                                    'TargetType' => [
                                        'description' => '任务目标类型。取值：RD-Account，表示任务目标类型为RD账号。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'AccessConfigurationId' => [
                                        'description' => '访问配置ID。',
                                        'type' => 'string',
                                        'example' => 'ac-00jhtfl8thteu6uj****',
                                    ],
                                    'PrincipalType' => [
                                        'description' => '云SSO身份类型。取值：'."\n"
                                            ."\n"
                                            .'- User：用户。'."\n"
                                            .'- Group：用户组。',
                                        'type' => 'string',
                                        'example' => 'User',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '923CA5E8-57BF-5E15-8BA6-E75A966B7E3F',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Task\\": {\\n    \\"Status\\": \\"Success\\",\\n    \\"TaskId\\": \\"t-shfqw1u1edszvxw5****\\",\\n    \\"EndTime\\": \\"2021-11-05T02:58:08Z\\",\\n    \\"PrincipalId\\": \\"u-00q8wbq42wiltcrk****\\",\\n    \\"TargetPath\\": \\"rd-3G****/r-Wm****/114240524784****\\",\\n    \\"StartTime\\": \\"2021-11-05T02:58:07Z\\",\\n    \\"PrincipalName\\": \\"Alice\\",\\n    \\"TargetName\\": \\"dev-test\\",\\n    \\"TargetId\\": \\"114240524784****\\",\\n    \\"AccessConfigurationName\\": \\"ECS-Admin\\",\\n    \\"TargetPathName\\": \\"rd-3G****/root/dev-test\\",\\n    \\"TaskType\\": \\"DeleteAccessAssignment\\",\\n    \\"FailureReason\\": \\"No Permission.\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"AccessConfigurationId\\": \\"ac-00jhtfl8thteu6uj****\\",\\n    \\"PrincipalType\\": \\"User\\"\\n  },\\n  \\"RequestId\\": \\"923CA5E8-57BF-5E15-8BA6-E75A966B7E3F\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTaskResponse>\\n    <Task>\\n        <Status>Success</Status>\\n        <TaskId>t-shfqw1u1edszvxw5****</TaskId>\\n        <EndTime>2021-11-05T02:58:08Z</EndTime>\\n        <PrincipalId>u-00q8wbq42wiltcrk****</PrincipalId>\\n        <TargetPath>rd-3G****/r-Wm****/114240524784****</TargetPath>\\n        <StartTime>2021-11-05T02:58:07Z</StartTime>\\n        <PrincipalName>Alice</PrincipalName>\\n        <TargetName>dev-test</TargetName>\\n        <TargetId>114240524784****</TargetId>\\n        <AccessConfigurationName>ECS-Admin</AccessConfigurationName>\\n        <TargetPathName>rd-3G****/root/dev-test</TargetPathName>\\n        <TaskType>DeleteAccessAssignment</TaskType>\\n        <TargetType>RD-Account</TargetType>\\n        <AccessConfigurationId>ac-00jhtfl8thteu6uj****</AccessConfigurationId>\\n        <PrincipalType>User</PrincipalType>\\n    </Task>\\n    <RequestId>923CA5E8-57BF-5E15-8BA6-E75A966B7E3F</RequestId>\\n</GetTaskResponse>","errorExample":""}]',
            'title' => '查询异步任务信息',
            'description' => '本文将提供一个示例，查询ID为`t-shfqw1u1edszvxw5****`的任务信息。',
        ],
        'GetTaskStatus' => [
            'summary' => '调用GetTaskStatus查询异步任务的状态。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 't-shfqw1u1edszvxw5****',
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
                                'example' => '005F4623-AE53-504D-830F-44825F7DC211',
                            ],
                            'TaskStatus' => [
                                'description' => '任务状态信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态。取值：'."\n"
                                            ."\n"
                                            .'- InProgress：任务执行中。'."\n"
                                            .'- Success：任务执行成功。'."\n"
                                            .'- Failed：任务执行失败。',
                                        'type' => 'string',
                                        'example' => 'Success',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 't-shfqw1u1edszvxw5****',
                                    ],
                                    'EndTime' => [
                                        'description' => '任务结束时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-05T02:58:08Z',
                                    ],
                                    'TaskType' => [
                                        'description' => '任务类型。取值：'."\n"
                                            ."\n"
                                            .'- ProvisionAccessConfiguration：部署访问配置。'."\n"
                                            .'- DeprovisionAccessConfiguration：解除访问配置部署。'."\n"
                                            .'- CreateAccessAssignment：在RD账号上授权。'."\n"
                                            .'- DeleteAccessAssignment：移除RD账号上的授权。',
                                        'type' => 'string',
                                        'example' => 'DeleteAccessAssignment',
                                    ],
                                    'FailureReason' => [
                                        'description' => '任务失败原因。'."\n"
                                            ."\n"
                                            .'> 只有`Status`为`Failed`，才会显示该参数。',
                                        'type' => 'string',
                                        'example' => 'No Permission.',
                                    ],
                                    'StartTime' => [
                                        'description' => '任务开始时间。',
                                        'type' => 'string',
                                        'example' => '2021-11-05T02:58:07Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"005F4623-AE53-504D-830F-44825F7DC211\\",\\n  \\"TaskStatus\\": {\\n    \\"Status\\": \\"Success\\",\\n    \\"TaskId\\": \\"t-shfqw1u1edszvxw5****\\",\\n    \\"EndTime\\": \\"2021-11-05T02:58:08Z\\",\\n    \\"TaskType\\": \\"DeleteAccessAssignment\\",\\n    \\"FailureReason\\": \\"No Permission.\\",\\n    \\"StartTime\\": \\"2021-11-05T02:58:07Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTaskStatusResponse>\\n    <RequestId>005F4623-AE53-504D-830F-44825F7DC211</RequestId>\\n    <TaskStatus>\\n        <Status>Success</Status>\\n        <TaskId>t-shfqw1u1edszvxw5****</TaskId>\\n        <EndTime>2021-11-05T02:58:08Z</EndTime>\\n        <TaskType>DeleteAccessAssignment</TaskType>\\n        <StartTime>2021-11-05T02:58:07Z</StartTime>\\n    </TaskStatus>\\n</GetTaskStatusResponse>","errorExample":""}]',
            'title' => '查询异步任务的状态',
            'description' => '本API主要是查询异步任务的状态信息，如需查询异步任务的更多信息，请使用[GetTask](~~340670~~)。'."\n"
                ."\n"
                .'本文将提供一个示例，查询ID为`t-shfqw1u1edszvxw5****`的任务信息。',
        ],
        'CreateUserProvisioning' => [
            'summary' => '调用CreateUserProvisioning创建RAM用户同步。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'DuplicationStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                            ."\n"
                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'KeepBoth',
                    ],
                ],
                [
                    'name' => 'DeletionStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                            ."\n"
                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Delete',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a user provisioning.',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'g-02ha881d*****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Group',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1743382******',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RD-Account',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回参数。',
                        'type' => 'object',
                        'properties' => [
                            'UserProvisioning' => [
                                'description' => 'RAM用户同步信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'RAM用户同步的状态。取值：'."\n"
                                            .'- Enabled：RAM用户同步已启用。'."\n"
                                            .'- Disabled：RAM用户同步未启用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'Description' => [
                                        'description' => '描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user provisioning.',
                                    ],
                                    'UserProvisioningId' => [
                                        'description' => 'RAM用户同步的ID。',
                                        'type' => 'string',
                                        'example' => 'up-002axzhapcbz6e63****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                        'type' => 'string',
                                        'example' => 'g-02ha881d*****',
                                    ],
                                    'TargetPath' => [
                                        'description' => 'RAM用户同步的目标RD账号路径。',
                                        'type' => 'string',
                                        'example' => 'rd-******/root/test**',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '更新时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DuplicationStrategy' => [
                                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                        'type' => 'string',
                                        'example' => 'KeepBoth',
                                    ],
                                    'DeletionStrategy' => [
                                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                        'type' => 'string',
                                        'example' => 'Delete',
                                    ],
                                    'PrincipalName' => [
                                        'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                        'type' => 'string',
                                        'example' => 'testGroupName',
                                    ],
                                    'TargetName' => [
                                        'description' => 'RAM用户同步的目标名称。目前取值为RD账号名称。',
                                        'type' => 'string',
                                        'example' => 'testTargetName',
                                    ],
                                    'TargetId' => [
                                        'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                                        'type' => 'string',
                                        'example' => '1743382******',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'OwnerPk' => [
                                        'description' => '目录所属的主账号ID。',
                                        'type' => 'string',
                                        'example' => '1639738******',
                                    ],
                                    'TargetType' => [
                                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'PrincipalType' => [
                                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                        'type' => 'string',
                                        'example' => 'Group',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProvisioning\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"Description\\": \\"This is a user provisioning.\\",\\n    \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n    \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n    \\"TargetPath\\": \\"rd-******/root/test**\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n    \\"DeletionStrategy\\": \\"Delete\\",\\n    \\"PrincipalName\\": \\"testGroupName\\",\\n    \\"TargetName\\": \\"testTargetName\\",\\n    \\"TargetId\\": \\"1743382******\\",\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"OwnerPk\\": \\"1639738******\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"PrincipalType\\": \\"Group\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateUserProvisioningResponse>\\n    <UserProvisioning>\\n        <Status>Enabled</Status>\\n        <Description>描述</Description>\\n        <UserProvisioningId>up-002axzhapcbz6e63****</UserProvisioningId>\\n        <PrincipalId>g-02ha881d*****</PrincipalId>\\n        <TargetPath>/</TargetPath>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n        <DuplicationStrategy>KeepBoth</DuplicationStrategy>\\n        <DeletionStrategy>Delete</DeletionStrategy>\\n        <PrincipalName>testGroupName</PrincipalName>\\n        <TargetName>testTargetName</TargetName>\\n        <TargetId>1743382******</TargetId>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <OwnerPk>1639738******</OwnerPk>\\n        <TargetType>RD-Account</TargetType>\\n        <PrincipalType>Group</PrincipalType>\\n    </UserProvisioning>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</CreateUserProvisioningResponse>","errorExample":""}]',
            'title' => '创建RAM用户同步',
            'description' => '您可以创建RAM用户同步，在目标RD账号中同步创建一个与云SSO用户同名的RAM用户，然后通过该RAM用户访问该RD账号中的资源。',
        ],
        'GetUserProvisioning' => [
            'summary' => '调用GetUserProvisioning查询RAM用户同步信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'up-002axzhapcbz6e63****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'UserProvisioning' => [
                                'description' => 'RAM用户同步信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'RAM用户同步的状态。取值：'."\n"
                                            .'- Enabled：RAM用户同步已启用。'."\n"
                                            .'- Disabled：RAM用户同步未启用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'Description' => [
                                        'description' => '描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user provisioning.',
                                    ],
                                    'UserProvisioningId' => [
                                        'description' => 'RAM用户同步的ID。',
                                        'type' => 'string',
                                        'example' => 'up-002axzhapcbz6e63****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                        'type' => 'string',
                                        'example' => 'g-02ha881d*****',
                                    ],
                                    'TargetPath' => [
                                        'description' => 'RAM用户同步的目标的RD路径。',
                                        'type' => 'string',
                                        'example' => 'rd-******/root/test**',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DuplicationStrategy' => [
                                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                        'type' => 'string',
                                        'example' => 'KeepBoth',
                                    ],
                                    'DeletionStrategy' => [
                                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                        'type' => 'string',
                                        'example' => 'Delete',
                                    ],
                                    'PrincipalName' => [
                                        'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                        'type' => 'string',
                                        'example' => 'testGroupName',
                                    ],
                                    'TargetName' => [
                                        'description' => 'RAM用户同步的目标名称。目前取值为RD账号名称。',
                                        'type' => 'string',
                                        'example' => 'testRdMember',
                                    ],
                                    'TargetId' => [
                                        'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                                        'type' => 'string',
                                        'example' => '1743382******',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'OwnerPk' => [
                                        'description' => '目录所属的主账号ID。',
                                        'type' => 'string',
                                        'example' => '1639738******',
                                    ],
                                    'TargetType' => [
                                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'PrincipalType' => [
                                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                        'type' => 'string',
                                        'example' => 'Group',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProvisioning\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"Description\\": \\"This is a user provisioning.\\",\\n    \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n    \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n    \\"TargetPath\\": \\"rd-******/root/test**\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n    \\"DeletionStrategy\\": \\"Delete\\",\\n    \\"PrincipalName\\": \\"testGroupName\\",\\n    \\"TargetName\\": \\"testRdMember\\",\\n    \\"TargetId\\": \\"1743382******\\",\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"OwnerPk\\": \\"1639738******\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"PrincipalType\\": \\"Group\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserProvisioningResponse>\\n    <UserProvisioning>\\n        <Status>Enabled</Status>\\n        <Description>用户描述</Description>\\n        <UserProvisioningId>up-002axzhapcbz6e63****</UserProvisioningId>\\n        <PrincipalId>g-02ha881d*****</PrincipalId>\\n        <TargetPath>/</TargetPath>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n        <DuplicationStrategy>KeepBoth</DuplicationStrategy>\\n        <DeletionStrategy>Delete</DeletionStrategy>\\n        <PrincipalName>testGroupName</PrincipalName>\\n        <TargetName>testRdMember</TargetName>\\n        <TargetId>1743382******</TargetId>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <OwnerPk>1639738******</OwnerPk>\\n        <TargetType>RD-Account</TargetType>\\n        <PrincipalType>Group</PrincipalType>\\n    </UserProvisioning>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</GetUserProvisioningResponse>","errorExample":""}]',
            'title' => '查询RAM用户同步',
        ],
        'ListUserProvisionings' => [
            'summary' => '调用ListUserProvisionings查询RAM用户同步列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'PrincipalId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                            ."\n"
                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'u-88d73u*****',
                    ],
                ],
                [
                    'name' => 'PrincipalType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RD-Account',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1743382******',
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'User',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****',
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
                                'description' => '查询返回结果下一页的令牌。 '."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => '27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F76AF4FC-****-****-B7CB-74F3********',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。'."\n"
                                    ."\n"
                                    .'默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '110',
                            ],
                            'UserProvisionings' => [
                                'description' => 'RAM用户同步列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'RAM用户同步列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => 'RAM用户同步的状态。取值：'."\n"
                                                .'- Enabled：RAM用户同步已启用。'."\n"
                                                .'- Disabled：RAM用户同步未启用。',
                                            'type' => 'string',
                                            'example' => 'Enabled',
                                        ],
                                        'Description' => [
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'example' => 'this is a user provisioning.',
                                        ],
                                        'UserProvisioningId' => [
                                            'description' => 'RAM用户同步的ID。',
                                            'type' => 'string',
                                            'example' => 'up-002axzhapcbz6e63****',
                                        ],
                                        'PrincipalId' => [
                                            'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                                ."\n"
                                                .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                                .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                            'type' => 'string',
                                            'example' => 'g-02ha881d*****',
                                        ],
                                        'TargetPath' => [
                                            'description' => 'RAM用户同步的目标的RD路径。',
                                            'type' => 'string',
                                            'example' => 'rd-******/root/test**',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '修改时间。',
                                            'type' => 'string',
                                            'example' => '2022-11-28T03:55:42Z',
                                        ],
                                        'DuplicationStrategy' => [
                                            'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                                ."\n"
                                                .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                                .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                            'type' => 'string',
                                            'example' => 'KeepBoth',
                                        ],
                                        'DeletionStrategy' => [
                                            'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                                ."\n"
                                                .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                                .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                            'type' => 'string',
                                            'example' => 'Delete',
                                        ],
                                        'PrincipalName' => [
                                            'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                                ."\n"
                                                .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                                .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                            'type' => 'string',
                                            'example' => 'testGroupName',
                                        ],
                                        'TargetName' => [
                                            'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                            'type' => 'string',
                                            'example' => 'testRdMember',
                                        ],
                                        'TargetId' => [
                                            'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                                            'type' => 'string',
                                            'example' => '1743382******',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-11-28T03:55:42Z',
                                        ],
                                        'DirectoryId' => [
                                            'description' => '目录ID。',
                                            'type' => 'string',
                                            'example' => 'd-003qew84****',
                                        ],
                                        'OwnerPk' => [
                                            'description' => '目录所属的主账号ID。',
                                            'type' => 'string',
                                            'example' => '1639738******',
                                        ],
                                        'TargetType' => [
                                            'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'PrincipalType' => [
                                            'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                                .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                                .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                            'type' => 'string',
                                            'example' => 'Group',
                                        ],
                                    ],
                                ],
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"27EbL9j4ZgZjsMZFqbZFgbwQ1VXFU1Khcpx9e2vrW1zwzTBmTGWaM7ixHhRin8SCsxaJdazYVCzeKc2UF2QkyGb83cPhr8ZxrzoaiTd****\\",\\n  \\"RequestId\\": \\"F76AF4FC-****-****-B7CB-74F3********\\",\\n  \\"MaxResults\\": 100,\\n  \\"TotalCounts\\": 110,\\n  \\"UserProvisionings\\": [\\n    {\\n      \\"Status\\": \\"Enabled\\",\\n      \\"Description\\": \\"this is a user provisioning.\\",\\n      \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n      \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n      \\"TargetPath\\": \\"rd-******/root/test**\\",\\n      \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\",\\n      \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n      \\"DeletionStrategy\\": \\"Delete\\",\\n      \\"PrincipalName\\": \\"testGroupName\\",\\n      \\"TargetName\\": \\"testRdMember\\",\\n      \\"TargetId\\": \\"1743382******\\",\\n      \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n      \\"DirectoryId\\": \\"d-003qew84****\\",\\n      \\"OwnerPk\\": \\"1639738******\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"PrincipalType\\": \\"Group\\"\\n    }\\n  ],\\n  \\"IsTruncated\\": true\\n}","type":"json"}]',
            'title' => '查询RAM用户同步列表',
        ],
        'UpdateUserProvisioning' => [
            'summary' => '调用UpdateUserProvisioning修改RAM用户同步。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'up-002axzhapcbz6e63****',
                    ],
                ],
                [
                    'name' => 'NewDuplicationStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                            ."\n"
                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'KeepBoth',
                    ],
                ],
                [
                    'name' => 'NewDeletionStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                            ."\n"
                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Delete',
                    ],
                ],
                [
                    'name' => 'NewDescription',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新的RAM用户同步描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description*****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'UserProvisioning' => [
                                'description' => 'RAM用户同步信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => 'RAM用户同步的状态。取值：'."\n"
                                            .'- Enabled：RAM用户同步已启用。'."\n"
                                            .'- Disabled：RAM用户同步未启用。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'Description' => [
                                        'description' => 'RAM用户同步的描述。',
                                        'type' => 'string',
                                        'example' => 'This is a user provisioning.',
                                    ],
                                    'UserProvisioningId' => [
                                        'description' => 'RAM用户同步ID。',
                                        'type' => 'string',
                                        'example' => 'up-002axzhapcbz6e63****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                        'type' => 'string',
                                        'example' => 'g-02ha881d*****',
                                    ],
                                    'TargetPath' => [
                                        'description' => 'RAM用户同步的目标的RD路径。',
                                        'type' => 'string',
                                        'example' => 'rd-******/root/test**',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DuplicationStrategy' => [
                                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                        'type' => 'string',
                                        'example' => 'KeepBoth',
                                    ],
                                    'DeletionStrategy' => [
                                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                        'type' => 'string',
                                        'example' => 'Delete',
                                    ],
                                    'PrincipalName' => [
                                        'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                        'type' => 'string',
                                        'example' => 'testUserName',
                                    ],
                                    'TargetName' => [
                                        'description' => 'RAM用户同步的目标名称。目前取值为RD账号名称。',
                                        'type' => 'string',
                                        'example' => 'testMemberName',
                                    ],
                                    'TargetId' => [
                                        'description' => 'RAM用户同步的目标ID。目前取值为RD账号ID。',
                                        'type' => 'string',
                                        'example' => 'u-02ha881d*****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'OwnerPk' => [
                                        'description' => '目录所属的主账号ID。',
                                        'type' => 'string',
                                        'example' => '164987310*****',
                                    ],
                                    'TargetType' => [
                                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'PrincipalType' => [
                                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                        'type' => 'string',
                                        'example' => 'User',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProvisioning\\": {\\n    \\"Status\\": \\"Enabled\\",\\n    \\"Description\\": \\"This is a user provisioning.\\",\\n    \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n    \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n    \\"TargetPath\\": \\"rd-******/root/test**\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n    \\"DeletionStrategy\\": \\"Delete\\",\\n    \\"PrincipalName\\": \\"testUserName\\",\\n    \\"TargetName\\": \\"testMemberName\\",\\n    \\"TargetId\\": \\"u-02ha881d*****\\",\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"OwnerPk\\": \\"164987310*****\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"PrincipalType\\": \\"User\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserProvisioningResponse>\\n    <UserProvisioning>\\n        <Status>Enabled</Status>\\n        <Description>description****</Description>\\n        <UserProvisioningId>up-002axzhapcbz6e63****</UserProvisioningId>\\n        <PrincipalId>g-02ha881d*****</PrincipalId>\\n        <TargetPath>/</TargetPath>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n        <DuplicationStrategy>KeepBoth</DuplicationStrategy>\\n        <DeletionStrategy>Delete</DeletionStrategy>\\n        <PrincipalName>UserName</PrincipalName>\\n        <TargetName>TargetName</TargetName>\\n        <TargetId>u-02ha881d*****</TargetId>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <OwnerPk>164987310*****</OwnerPk>\\n        <TargetType>RD-Account</TargetType>\\n        <PrincipalType>User</PrincipalType>\\n    </UserProvisioning>\\n    <RequestId>66898413-EB80-556D-9429-06FE3548F672</RequestId>\\n</UpdateUserProvisioningResponse>","errorExample":""}]',
            'title' => '修改RAM用户同步',
        ],
        'DeleteUserProvisioning' => [
            'summary' => '调用DeleteUserProvisioning删除RAM用户同步。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'up-002axzhapcbz6e63****',
                    ],
                ],
                [
                    'name' => 'DeletionStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                            ."\n"
                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。'."\n"
                            ."\n"
                            .'> 该参数置空时，将采用创建RAM用户同步时设置的删除策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Delete',
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
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserProvisioningResponse>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</DeleteUserProvisioningResponse>","errorExample":""}]',
            'title' => '删除RAM用户同步',
        ],
        'UpdateUserProvisioningConfiguration' => [
            'summary' => '调用UpdateUserProvisioningConfiguration修改RAM用户同步全局配置。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'NewDefaultLandingPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新设置的用户登录后的默认落地页地址。'."\n"
                            ."\n"
                            .'默认值：https://homenew.console.aliyun.com。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://home.console.aliyun.com/home/dashboard/ProductAndService',
                    ],
                ],
                [
                    'name' => 'NewSessionDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '新设置的登录Session的持续时长。'."\n"
                            ."\n"
                            .'单位：小时。'."\n"
                            ."\n"
                            .'取值范围：1~24。'."\n"
                            ."\n"
                            .'默认值：6。',
                        'type' => 'integer',
                        'format' => 'int32',
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
                                'example' => 'BBC2ED1D-FAC5-3DF8-B63C-992B85B08DD9',
                            ],
                            'UserProvisioningConfiguration' => [
                                'description' => 'RAM用户同步的全局设置。',
                                'type' => 'object',
                                'properties' => [
                                    'SessionDuration' => [
                                        'description' => '登录Session的持续时长。'."\n"
                                            ."\n"
                                            .'单位：小时。'."\n"
                                            ."\n"
                                            .'取值范围：1~24。'."\n"
                                            ."\n"
                                            .'默认值：6。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '6',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'DefaultLandingPage' => [
                                        'description' => '用户登录后的默认落地页地址。'."\n"
                                            ."\n"
                                            .'默认值：https://homenew.console.aliyun.com。',
                                        'type' => 'string',
                                        'example' => 'https://homenew.console.aliyun.com',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BBC2ED1D-FAC5-3DF8-B63C-992B85B08DD9\\",\\n  \\"UserProvisioningConfiguration\\": {\\n    \\"SessionDuration\\": 6,\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"DefaultLandingPage\\": \\"https://homenew.console.aliyun.com\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateUserProvisioningConfigurationResponse>\\n    <RequestId>66898413-EB80-556D-9429-06FE3548F672</RequestId>\\n    <UserProvisioningConfiguration>\\n        <SessionDuration>7</SessionDuration>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <DefaultLandingPage>https://home.console.aliyun.com/home/dashboard/ProductAndService</DefaultLandingPage>\\n        <UserNameReplacementForAt>-</UserNameReplacementForAt>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n    </UserProvisioningConfiguration>\\n</UpdateUserProvisioningConfigurationResponse>","errorExample":""}]',
            'title' => '修改RAM用户同步全局配置',
        ],
        'GetUserProvisioningConfiguration' => [
            'summary' => '调用GetUserProvisioningConfiguration查询RAM用户同步全局配置。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '66898413-EB80-556D-9429-06FE3548F672',
                            ],
                            'UserProvisioningConfiguration' => [
                                'description' => 'RAM用户同步的全局配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SessionDuration' => [
                                        'description' => '登录Session的持续时长。'."\n"
                                            ."\n"
                                            .'单位：小时。'."\n"
                                            ."\n"
                                            .'取值范围：1~24。'."\n"
                                            ."\n"
                                            .'默认值：6。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-00fc2p61****',
                                    ],
                                    'DefaultLandingPage' => [
                                        'description' => '用户登录后的默认落地页地址。'."\n"
                                            ."\n"
                                            .'默认值：https://homenew.console.aliyun.com。',
                                        'type' => 'string',
                                        'example' => 'https://homenew.console.aliyun.com',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"66898413-EB80-556D-9429-06FE3548F672\\",\\n  \\"UserProvisioningConfiguration\\": {\\n    \\"SessionDuration\\": 10,\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-00fc2p61****\\",\\n    \\"DefaultLandingPage\\": \\"https://homenew.console.aliyun.com\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserProvisioningConfigurationResponse>\\n    <RequestId>66898413-EB80-556D-9429-06FE3548F672</RequestId>\\n    <UserProvisioningConfiguration>\\n        <SessionDuration>10</SessionDuration>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-00fc2p61****</DirectoryId>\\n        <DefaultLandingPage>https://home.console.aliyun.com/home/dashboard/ProductAndService</DefaultLandingPage>\\n        <UserNameReplacementForAt>-</UserNameReplacementForAt>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n    </UserProvisioningConfiguration>\\n</GetUserProvisioningConfigurationResponse>","errorExample":""}]',
            'title' => '查询RAM用户同步全局配置',
        ],
        'ListUserProvisioningEvents' => [
            'summary' => '调用ListUserProvisioningEvents查询执行失败的RAM用户同步事件列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'up-002axzhapcbz6e63****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00xz91nf****',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页的最大数据条数。'."\n"
                            ."\n"
                            .'取值范围：1~100。'."\n"
                            ."\n"
                            .'默认值：10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询返回结果下一页的令牌。首次调用API不需要`NextToken`。'."\n"
                            ."\n"
                            .'当您首次调用API时，如果返回数据总条数超过`MaxResults`限制，数据会被截断，只返回`MaxResults`条数据，同时，返回参数`IsTruncated`为`true`，返回一个`NextToken`。您可以使用上一次返回的`NextToken`继续调用API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到`IsTruncated`为`false`，表示全部数据查询完毕。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '查询返回结果下一页的令牌。 '."\n"
                                    ."\n"
                                    .'> 只有`IsTruncated`为`true`时，才显示该参数。',
                                'type' => 'string',
                                'example' => '2eEMmhmLa1b7Bbj9UzCgZUGj8DpDeG5TbNknuNKNP2h84KjJRnAb7vzzSDkYNmsidnAybyJYBfnPPB6xfgw54B1Wub2KQmC8LofzqBW2Y****',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0D85B43D-EF98-396D-B426-837E428D2D39',
                            ],
                            'TotalCounts' => [
                                'description' => '符合请求参数条件的数据总条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '110',
                            ],
                            'MaxResults' => [
                                'description' => '每页的最大数据条数。'."\n"
                                    ."\n"
                                    .'取值范围：1~100。'."\n"
                                    ."\n"
                                    .'默认值：10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'IsTruncated' => [
                                'description' => '返回结果是否被截断。取值：'."\n"
                                    ."\n"
                                    .'- true：已截断。'."\n"
                                    .'- false：未截断。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'UserProvisioningEvents' => [
                                'description' => 'RAM用户同步事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'RAM用户同步事件列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserProvisioningId' => [
                                            'description' => 'RAM用户同步的ID。',
                                            'type' => 'string',
                                            'example' => 'up-002axzhapcbz6e63****',
                                        ],
                                        'PrincipalId' => [
                                            'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                                ."\n"
                                                .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                                .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                            'type' => 'string',
                                            'example' => 'g-02ha881d*****',
                                        ],
                                        'TargetPath' => [
                                            'description' => 'RAM用户同步的目标的RD路径。',
                                            'type' => 'string',
                                            'example' => 'rd-******/root/test**',
                                        ],
                                        'ErrorInfo' => [
                                            'description' => 'RAM用户同步事件上次执行失败的错误信息。',
                                            'type' => 'string',
                                            'example' => 'OperationConflict.UserProvisioning.Process.fail.ImsUserExists',
                                        ],
                                        'SourceType' => [
                                            'description' => '源操作类型。取值：'."\n"
                                                .'- StartProvisioning：启用RAM用户同步。'."\n"
                                                .'- DeleteProvisioning：删除RAM用户同步。'."\n"
                                                .'- AddUserToGroup：用户加入用户组。'."\n"
                                                .'- RemoveUserFromGroup：用户从用户组移出。'."\n"
                                                .'- UserProvisioningDeletionClearing：删除RAM用户同步之后，后台进行资源清理。',
                                            'type' => 'string',
                                            'example' => 'StartProvisioning',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '修改时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-11-28T03:55:55Z',
                                        ],
                                        'DuplicationStrategy' => [
                                            'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                                ."\n"
                                                .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                                .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                            'type' => 'string',
                                            'example' => 'KeepBoth',
                                        ],
                                        'DeletionStrategy' => [
                                            'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                                ."\n"
                                                .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                                .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                            'type' => 'string',
                                            'example' => 'Keep',
                                        ],
                                        'PrincipalName' => [
                                            'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                                ."\n"
                                                .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                                .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                            'type' => 'string',
                                            'example' => 'exampleGroupName',
                                        ],
                                        'TargetName' => [
                                            'description' => 'RAM用户同步的目标名称。'."\n"
                                                ."\n"
                                                .'当`TargetType`为`RD-Account`时，取值为RD 账号名称。',
                                            'type' => 'string',
                                            'example' => 'exampleRdMember',
                                        ],
                                        'ErrorCount' => [
                                            'description' => '执行失败次数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'TargetId' => [
                                            'description' => 'RAM用户同步的目标ID。'."\n"
                                                ."\n"
                                                .'当`TargetType`为`RD-Account`时，取值为RD账号ID。',
                                            'type' => 'string',
                                            'example' => '153218*******',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-11-28T03:55:55Z',
                                        ],
                                        'DirectoryId' => [
                                            'description' => '目录ID。',
                                            'type' => 'string',
                                            'example' => 'd-003qew84****',
                                        ],
                                        'TargetType' => [
                                            'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                            'type' => 'string',
                                            'example' => 'RD-Account',
                                        ],
                                        'EventId' => [
                                            'description' => 'RAM用户同步事件ID。',
                                            'type' => 'string',
                                            'example' => 'upe-wjKyNDmZvyZOiRcJ****',
                                        ],
                                        'PrincipalType' => [
                                            'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                                .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                                .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                            'type' => 'string',
                                            'example' => 'Group',
                                        ],
                                        'LatestAsyncTime' => [
                                            'description' => '此事件上次执行的时间（UTC时间）。',
                                            'type' => 'string',
                                            'example' => '2022-11-28T03:55:55Z',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"NextToken\\": \\"2eEMmhmLa1b7Bbj9UzCgZUGj8DpDeG5TbNknuNKNP2h84KjJRnAb7vzzSDkYNmsidnAybyJYBfnPPB6xfgw54B1Wub2KQmC8LofzqBW2Y****\\",\\n  \\"RequestId\\": \\"0D85B43D-EF98-396D-B426-837E428D2D39\\",\\n  \\"TotalCounts\\": 110,\\n  \\"MaxResults\\": 10,\\n  \\"IsTruncated\\": false,\\n  \\"UserProvisioningEvents\\": [\\n    {\\n      \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n      \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n      \\"TargetPath\\": \\"rd-******/root/test**\\",\\n      \\"ErrorInfo\\": \\"OperationConflict.UserProvisioning.Process.fail.ImsUserExists\\",\\n      \\"SourceType\\": \\"StartProvisioning\\",\\n      \\"UpdateTime\\": \\"2022-11-28T03:55:55Z\\",\\n      \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n      \\"DeletionStrategy\\": \\"Keep\\",\\n      \\"PrincipalName\\": \\"exampleGroupName\\",\\n      \\"TargetName\\": \\"exampleRdMember\\",\\n      \\"ErrorCount\\": 1,\\n      \\"TargetId\\": \\"153218*******\\",\\n      \\"CreateTime\\": \\"2022-11-28T03:55:55Z\\",\\n      \\"DirectoryId\\": \\"d-003qew84****\\",\\n      \\"TargetType\\": \\"RD-Account\\",\\n      \\"EventId\\": \\"upe-wjKyNDmZvyZOiRcJ****\\",\\n      \\"PrincipalType\\": \\"Group\\",\\n      \\"LatestAsyncTime\\": \\"2022-11-28T03:55:55Z\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询RAM用户同步事件列表',
        ],
        'GetUserProvisioningEvent' => [
            'summary' => '调用GetUserProvisioningEvent查询执行失败的RAM用户同步事件。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步事件ID。'."\n"
                            ."\n"
                            .'您可以调用[ListUserProvisioningEvents](~~2636305~~)获取`EventId`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'upe-wjKyNDmZvyZOiRcJ****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
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
                                'example' => 'B801715C-97EA-3067-AC97-EF1EBECBB39C',
                            ],
                            'UserProvisioningEvent' => [
                                'description' => 'RAM用户同步事件。',
                                'type' => 'object',
                                'properties' => [
                                    'UserProvisioningId' => [
                                        'description' => 'RAM用户同步事件ID。',
                                        'type' => 'string',
                                        'example' => 'up-002axzhapcbz6e63****',
                                    ],
                                    'PrincipalId' => [
                                        'description' => 'RAM用户同步的身份ID。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组ID（g-\\*\\*\\*\\*\\*\\*\\*\\*）。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户ID（u-\\*\\*\\*\\*\\*\\*\\*\\*）。',
                                        'type' => 'string',
                                        'example' => 'g-02ha881d*****',
                                    ],
                                    'TargetPath' => [
                                        'description' => 'RAM用户同步的目标的RD路径。',
                                        'type' => 'string',
                                        'example' => 'rd-******/root/test**',
                                    ],
                                    'ErrorInfo' => [
                                        'description' => 'RAM用户同步事件上次执行失败的错误信息。',
                                        'type' => 'string',
                                        'example' => 'OperationConflict.UserProvisioning.Process.fail.ImsUserExists',
                                    ],
                                    'SourceType' => [
                                        'description' => '源操作类型。取值：'."\n"
                                            .'- StartProvisioning：启用RAM用户同步。'."\n"
                                            .'- DeleteProvisioning：删除RAM用户同步。'."\n"
                                            .'- AddUserToGroup：用户加入用户组。'."\n"
                                            .'- RemoveUserFromGroup：用户从用户组移出。'."\n"
                                            .'- UserProvisioningDeletionClearing：删除RAM用户同步之后，后台进行资源清理。',
                                        'type' => 'string',
                                        'example' => 'AddUserToGroup',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '修改时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DuplicationStrategy' => [
                                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                                        'type' => 'string',
                                        'example' => 'KeepBoth',
                                    ],
                                    'DeletionStrategy' => [
                                        'description' => '删除策略。删除RAM用户同步时，对已同步的RAM用户的处理策略。取值：'."\n"
                                            ."\n"
                                            .'- Delete：删除。删除RAM用户同步时，会删除从云SSO已经同步到RAM中的RAM用户。'."\n"
                                            .'- Keep：保留。删除RAM用户同步时，会保留从云SSO已经同步到RAM中的RAM用户。',
                                        'type' => 'string',
                                        'example' => 'Delete',
                                    ],
                                    'PrincipalName' => [
                                        'description' => 'RAM用户同步的身份名称。取值：'."\n"
                                            ."\n"
                                            .'- 当`PrincipalType`取值为`Group`时，该值为云SSO用户组名称。'."\n"
                                            .'- 当`PrincipalType`取值为`User`时，该值为云SSO用户名称。',
                                        'type' => 'string',
                                        'example' => 'exampleGroupName',
                                    ],
                                    'TargetName' => [
                                        'description' => 'RAM用户同步的目标名称。'."\n"
                                            ."\n"
                                            .'当`TargetType`为`RD-Account`时，取值为RD账号名称。',
                                        'type' => 'string',
                                        'example' => 'exampleRdMember',
                                    ],
                                    'ErrorCount' => [
                                        'description' => '执行失败次数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'TargetId' => [
                                        'description' => 'RAM用户同步的目标ID。'."\n"
                                            ."\n"
                                            .'当`TargetType`为`RD-Account`时，取值为RD账号ID。',
                                        'type' => 'string',
                                        'example' => '1743382******',
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'TargetType' => [
                                        'description' => 'RAM用户同步的目标类型。目前取值为`RD-Account`。',
                                        'type' => 'string',
                                        'example' => 'RD-Account',
                                    ],
                                    'EventId' => [
                                        'description' => 'RAM用户同步事件ID。',
                                        'type' => 'string',
                                        'example' => 'upe-wjKyNDmZvyZOiRcJ****',
                                    ],
                                    'PrincipalType' => [
                                        'description' => 'RAM用户同步的身份类型。取值：'."\n"
                                            .'- User：表示该RAM用户同步的身份是云SSO用户。'."\n"
                                            .'- Group：表示该RAM用户同步的身份是云SSO用户组。',
                                        'type' => 'string',
                                        'example' => 'Group',
                                    ],
                                    'LatestAsyncTime' => [
                                        'description' => '此事件上次执行的时间（UTC时间）。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B801715C-97EA-3067-AC97-EF1EBECBB39C\\",\\n  \\"UserProvisioningEvent\\": {\\n    \\"UserProvisioningId\\": \\"up-002axzhapcbz6e63****\\",\\n    \\"PrincipalId\\": \\"g-02ha881d*****\\",\\n    \\"TargetPath\\": \\"rd-******/root/test**\\",\\n    \\"ErrorInfo\\": \\"OperationConflict.UserProvisioning.Process.fail.ImsUserExists\\",\\n    \\"SourceType\\": \\"AddUserToGroup\\",\\n    \\"UpdateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DuplicationStrategy\\": \\"KeepBoth\\",\\n    \\"DeletionStrategy\\": \\"Delete\\",\\n    \\"PrincipalName\\": \\"exampleGroupName\\",\\n    \\"TargetName\\": \\"exampleRdMember\\",\\n    \\"ErrorCount\\": 3,\\n    \\"TargetId\\": \\"1743382******\\",\\n    \\"CreateTime\\": \\"2022-11-28T03:55:42Z\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"TargetType\\": \\"RD-Account\\",\\n    \\"EventId\\": \\"upe-wjKyNDmZvyZOiRcJ****\\",\\n    \\"PrincipalType\\": \\"Group\\",\\n    \\"LatestAsyncTime\\": \\"2022-11-28T03:55:42Z\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetUserProvisioningEventResponse>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n    <UserProvisioningEvent>\\n        <UserProvisioningId>up-002axzhapcbz6e63****</UserProvisioningId>\\n        <PrincipalId>g-02ha881d*****</PrincipalId>\\n        <TargetPath>/</TargetPath>\\n        <SourceType>AddUserToGroup</SourceType>\\n        <GmtModified>2022-11-28T03:55:42Z</GmtModified>\\n        <UpdateTime>2022-11-28T03:55:42Z</UpdateTime>\\n        <DuplicationStrategy>KeepBoth</DuplicationStrategy>\\n        <DeletionStrategy>Delete</DeletionStrategy>\\n        <PrincipalName>testRdMember</PrincipalName>\\n        <TargetName>testGroupName</TargetName>\\n        <ErrorCount>3</ErrorCount>\\n        <TargetId>1743382******</TargetId>\\n        <GmtCreate>2022-11-28T03:55:42Z</GmtCreate>\\n        <CreateTime>2022-11-28T03:55:42Z</CreateTime>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <TargetType>RD-Account</TargetType>\\n        <EventId>upe-wjKyNDmZvyZOiRcJ****</EventId>\\n        <PrincipalType>Group</PrincipalType>\\n        <GmtLastExec>2022-11-28T03:55:42Z</GmtLastExec>\\n    </UserProvisioningEvent>\\n</GetUserProvisioningEventResponse>","errorExample":""}]',
            'title' => '查询RAM用户同步事件',
        ],
        'DeleteUserProvisioningEvent' => [
            'summary' => '调用DeleteUserProvisioningEvent删除执行失败的RAM用户同步事件。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步事件ID。'."\n"
                            ."\n"
                            .'您可以调用[ListUserProvisioningEvents](~~2636305~~)获取`EventId`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'upe-wjKyNDmZvyZOiRcJ****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'up-002axzhapcbz6e63****',
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
                                'example' => 'A9287DA5-FD59-32A0-A810-1962E8B58ABB',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A9287DA5-FD59-32A0-A810-1962E8B58ABB\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteUserProvisioningEventResponse>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</DeleteUserProvisioningEventResponse>","errorExample":""}]',
            'title' => '删除RAM用户同步事件',
        ],
        'RetryUserProvisioningEvent' => [
            'summary' => '调用RetryUserProvisioningEvent重试执行失败的RAM用户同步事件。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EventId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步事件ID。'."\n"
                            ."\n"
                            .'您可以调用[ListUserProvisioningEvents](~~2636305~~)获取`EventId`。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'upe-wjKyNDmZvyZOiRcJ****',
                    ],
                ],
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'DuplicationStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '冲突策略。当云SSO用户同步到RAM时，如果RAM中存在同名用户时的处理策略。取值：'."\n"
                            ."\n"
                            .'- KeepBoth：两者都保留。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则对云SSO用户的用户名添加后缀`_sso`后尝试创建该用户名的RAM用户。'."\n"
                            .'- TakeOver：替换。当云SSO用户被同步到RAM时，如果RAM已经存在同名用户，则直接将已经存在的RAM用户替换为云SSO同步用户。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'KeepBoth',
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
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<RetryUserProvisioningEventResponse>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</RetryUserProvisioningEventResponse>","errorExample":""}]',
            'title' => '重试RAM用户同步事件',
        ],
        'GetUserProvisioningStatistics' => [
            'summary' => '调用GetUserProvisioningStatistics查询RAM用户同步的统计信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'UserProvisioningId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'RAM用户同步的ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'up-002axzhapcbz6e63****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'UserProvisioningStatistics' => [
                                'description' => 'RAM用户同步的统计信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EntityId' => [
                                        'description' => '实体ID，即RAM用户同步的ID。',
                                        'type' => 'string',
                                        'example' => 'up-002axzhapcbz6e63****',
                                    ],
                                    'Type' => [
                                        'description' => '实体类型，取值为`User Provisioning`。',
                                        'type' => 'string',
                                        'example' => 'User Provisioning',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'FailedEventCount' => [
                                        'description' => '该条RAM用户同步所关联的执行失败的RAM用户同步事件数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'OwnerPk' => [
                                        'description' => '目录所属的主账号ID。',
                                        'type' => 'string',
                                        'example' => '139665787317****',
                                    ],
                                    'LatestAsyncTime' => [
                                        'description' => '上次同步时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProvisioningStatistics\\": {\\n    \\"EntityId\\": \\"up-002axzhapcbz6e63****\\",\\n    \\"Type\\": \\"User Provisioning\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"FailedEventCount\\": 3,\\n    \\"OwnerPk\\": \\"139665787317****\\",\\n    \\"LatestAsyncTime\\": \\"2022-11-28T03:55:42Z\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserProvisioningStatisticsResponse>\\n    <UserProvisioningStatistics>\\n        <EntityId>up-002axzhapcbz6e63****</EntityId>\\n        <Type>User Provisioning</Type>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <FailedEventCount>3</FailedEventCount>\\n        <OwnerPk>139665787317****</OwnerPk>\\n        <LatestAsyncTime>2022-11-28T03:55:42Z</LatestAsyncTime>\\n    </UserProvisioningStatistics>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</GetUserProvisioningStatisticsResponse>","errorExample":""}]',
            'title' => '查询RAM用户同步的统计信息',
        ],
        'GetUserProvisioningRdAccountStatistics' => [
            'summary' => '调用GetUserProvisioningRdAccountStatistics查询资源目录成员账号中的RAM用户同步任务统计信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-003qew84****',
                    ],
                ],
                [
                    'name' => 'RdMemberId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源目录成员ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1743382******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'UserProvisioningStatistics' => [
                                'description' => 'RAM用户同步的统计信息。',
                                'type' => 'object',
                                'properties' => [
                                    'EntityId' => [
                                        'description' => '实体ID，即资源目录成员ID。',
                                        'type' => 'string',
                                        'example' => '1743382******',
                                    ],
                                    'Type' => [
                                        'description' => '实体类型，取值为`RD Account`。',
                                        'type' => 'string',
                                        'example' => 'RD Account',
                                    ],
                                    'DirectoryId' => [
                                        'description' => '目录ID。',
                                        'type' => 'string',
                                        'example' => 'd-003qew84****',
                                    ],
                                    'FailedEventCount' => [
                                        'description' => '失败的RAM用户同步事件数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4',
                                    ],
                                    'OwnerPk' => [
                                        'description' => '目录所属的主账号ID。',
                                        'type' => 'string',
                                        'example' => '1639738******',
                                    ],
                                    'LatestAsyncTime' => [
                                        'description' => '上次同步时间。',
                                        'type' => 'string',
                                        'example' => '2022-11-28T03:55:42Z',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F6F90F3D-4502-5877-B80B-97476F6AE2CC',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"UserProvisioningStatistics\\": {\\n    \\"EntityId\\": \\"1743382******\\",\\n    \\"Type\\": \\"RD Account\\",\\n    \\"DirectoryId\\": \\"d-003qew84****\\",\\n    \\"FailedEventCount\\": 4,\\n    \\"OwnerPk\\": \\"1639738******\\",\\n    \\"LatestAsyncTime\\": \\"2022-11-28T03:55:42Z\\"\\n  },\\n  \\"RequestId\\": \\"F6F90F3D-4502-5877-B80B-97476F6AE2CC\\"\\n}","errorExample":""},{"type":"xml","example":"<GetUserProvisioningRdAccountStatisticsResponse>\\n    <UserProvisioningStatistics>\\n        <EntityId>1743382******</EntityId>\\n        <Type>RD-Account</Type>\\n        <DirectoryId>d-003qew84****</DirectoryId>\\n        <FailedEventCount>4</FailedEventCount>\\n        <OwnerPk>1639738******</OwnerPk>\\n        <LatestAsyncTime>2022-11-28T03:55:42Z</LatestAsyncTime>\\n    </UserProvisioningStatistics>\\n    <RequestId>69A4AB33-****-****-****-29AA0B56****</RequestId>\\n</GetUserProvisioningRdAccountStatisticsResponse>","errorExample":""}]',
            'title' => '查询资源目录成员的RAM用户同步统计信息',
        ],
        'SetMFAAuthenticationStatus' => [
            'summary' => '调用SetMFAAuthenticationStatus为目录中的用户启用或禁用多因素认证（MFA）。',
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
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
                    ],
                ],
                [
                    'name' => 'MFAAuthenticationStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'MFA启用状态。取值：'."\n"
                            ."\n"
                            .'- Enabled：启用。'."\n"
                            .'- Disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enabled',
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
                                'example' => '14E2B1A9-7713-5E6F-8409-8DE12DF51AF4',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"14E2B1A9-7713-5E6F-8409-8DE12DF51AF4\\"\\n}","errorExample":""},{"type":"xml","example":"<SetMFAAuthenticationStatusResponse>\\n    <RequestId>14E2B1A9-7713-5E6F-8409-8DE12DF51AF4</RequestId>\\n</SetMFAAuthenticationStatusResponse>","errorExample":""}]',
            'title' => '为目录中的用户启用或禁用MFA',
            'description' => '当云SSO管理员为用户启用控制台的用户名密码登录时，为了提高安全性，云SSO默认会启用MFA。云SSO管理员也可以根据需要，调用该API禁用或再次启用MFA。'."\n"
                ."\n"
                .'本文将提供一个示例，为用户启用MFA。',
        ],
        'GetMFAAuthenticationStatus' => [
            'summary' => '查询用户的多因素认证（MFA）启用状态。',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'DirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'd-00fc2p61****',
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
                                'example' => '5E688346-DF1A-5537-9BFC-8A9974D29586',
                            ],
                            'MFAAuthenticationStatus' => [
                                'description' => 'MFA启用状态。取值：'."\n"
                                    ."\n"
                                    .'- Enabled：启用。'."\n"
                                    .'- Disabled：禁用。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"5E688346-DF1A-5537-9BFC-8A9974D29586\\",\\n  \\"MFAAuthenticationStatus\\": \\"Enabled\\"\\n}","errorExample":""},{"type":"xml","example":"<GetMFAAuthenticationStatusResponse>\\n    <RequestId>5E688346-DF1A-5537-9BFC-8A9974D29586</RequestId>\\n    <MFAAuthenticationStatus>Enabled</MFAAuthenticationStatus>\\n</GetMFAAuthenticationStatusResponse>","errorExample":""}]',
            'title' => '查询用户的MFA启用状态',
            'description' => '本文将提供一个示例，查询ID为`d-00fc2p61****`目录下的MFA启用状态。返回结果显示，MFA状态为已启用。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudsso.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudsso.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudsso.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudsso.eu-central-1.aliyuncs.com',
        ],
    ],
];
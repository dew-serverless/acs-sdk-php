<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'csas',
        'version' => '2023-01-20',
    ],
    'directories' => [
        [
            'id' => 191724,
            'title' => '身份源配置管理',
            'type' => 'directory',
            'children' => [
                'ListIdpConfigs',
                'GetIdpConfig',
                'GetActiveIdpConfig',
                [
                    'id' => 191728,
                    'title' => '自定义身份源',
                    'type' => 'directory',
                    'children' => [
                        'ListIdpDepartments',
                        'CreateIdpDepartment',
                        'ListClientUsers',
                        'UpdateClientUser',
                        'GetClientUser',
                        'DeleteIdpDepartment',
                        'CreateClientUser',
                        'UpdateIdpDepartment',
                        'UpdateClientUserStatus',
                        'DeleteClientUser',
                        'UpdateClientUserPassword',
                    ],
                ],
            ],
        ],
        [
            'id' => 185976,
            'title' => '终端设备管理',
            'type' => 'directory',
            'children' => [
                'UpdateUserDevicesStatus',
                'ListExcessiveDeviceRegistrationApplications',
                'UpdateExcessiveDeviceRegistrationApplicationsStatus',
                'UpdateUserDevicesSharingStatus',
                'ListUserDevices',
                'ExportUserDevices',
                'GetUserDevice',
                'DeleteUserDevices',
                'ListSoftwareForUserDevice',
            ],
        ],
        [
            'id' => 185984,
            'title' => '设备注册策略',
            'type' => 'directory',
            'children' => [
                'ListRegistrationPolicies',
                'ListUserGroupsForRegistrationPolicy',
                'ListRegistrationPoliciesForUserGroup',
                'GetRegistrationPolicy',
                'DeleteRegistrationPolicies',
                'UpdateRegistrationPolicy',
                'CreateRegistrationPolicy',
            ],
        ],
        [
            'id' => 181189,
            'title' => '用户组',
            'type' => 'directory',
            'children' => [
                'ListUserGroups',
                'ListPolicesForUserGroup',
                'GetUserGroup',
                'CreateUserGroup',
                'DeleteUserGroup',
                'UpdateUserGroup',
            ],
        ],
        [
            'id' => 190835,
            'title' => '用户管理',
            'type' => 'directory',
            'children' => [
                'ListUsers',
                'UpdateUsersStatus',
            ],
        ],
        [
            'id' => 181191,
            'title' => '内网访问应用',
            'type' => 'directory',
            'children' => [
                'ListPrivateAccessApplications',
                'ListTagsForPrivateAccessApplication',
                'ListPolicesForPrivateAccessApplication',
                'GetPrivateAccessApplication',
                'CreatePrivateAccessApplication',
                'DeletePrivateAccessApplication',
                'UpdatePrivateAccessApplication',
            ],
        ],
        [
            'id' => 181192,
            'title' => 'Connector',
            'type' => 'directory',
            'children' => [
                'ListConnectors',
                'AttachApplication2Connector',
                'DetachApplication2Connector',
            ],
        ],
        [
            'id' => 181193,
            'title' => '内网访问标签',
            'type' => 'directory',
            'children' => [
                'ListPrivateAccessTags',
                'ListApplicationsForPrivateAccessTag',
                'ListPolicesForPrivateAccessTag',
                'CreatePrivateAccessTag',
                'DeletePrivateAccessTag',
            ],
        ],
        [
            'id' => 181194,
            'title' => '内网访问策略',
            'type' => 'directory',
            'children' => [
                'ListPrivateAccessPolices',
                'ListUserGroupsForPrivateAccessPolicy',
                'ListApplicationsForPrivateAccessPolicy',
                'ListTagsForPrivateAccessPolicy',
                'GetPrivateAccessPolicy',
                'CreatePrivateAccessPolicy',
                'DeletePrivateAccessPolicy',
                'UpdatePrivateAccessPolicy',
            ],
        ],
        [
            'id' => 182283,
            'title' => '全球办公',
            'type' => 'directory',
            'children' => [
                'ListDynamicRoutes',
                'ListPrivateAccessApplicationsForDynamicRoute',
                'ListPrivateAccessTagsForDynamicRoute',
                'GetDynamicRoute',
                'ListDynamicRouteRegions',
                'CreateDynamicRoute',
                'UpdateDynamicRoute',
                'DeleteDynamicRoute',
            ],
        ],
        [
            'id' => 193109,
            'title' => '数字水印',
            'type' => 'directory',
            'children' => [
                'LookupWmInfoMapping',
                'CreateWmInfoMapping',
                'CreateWmBaseImage',
                'GetWmExtractTask',
                'GetWmEmbedTask',
                'CreateWmExtractTask',
                'CreateWmEmbedTask',
            ],
        ],
        [
            'id' => 190079,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'RevokeUserSession',
                'ListPopTrafficStatistics',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListIdpConfigs' => [
            'summary' => '查询当前阿里云账户身份源配置信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215351',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Include',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定的身份源配置类型。多个类型以","分隔。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CSAS,DingTalk,LDAP',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
                            ],
                            'Data' => [
                                'description' => '身份源配置。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalNum' => [
                                        'description' => '记录总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'DataList' => [
                                        'description' => '身份源配置列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '身份源配置ID。',
                                                    'type' => 'string',
                                                    'example' => '277',
                                                ],
                                                'Name' => [
                                                    'description' => '身份源配置名称。',
                                                    'type' => 'string',
                                                    'example' => '示例身份源',
                                                ],
                                                'Type' => [
                                                    'description' => '身份源配置类型。',
                                                    'type' => 'string',
                                                    'example' => 'DingTalk',
                                                ],
                                                'Description' => [
                                                    'description' => '身份源配置描述。',
                                                    'type' => 'string',
                                                    'example' => '示例描述',
                                                ],
                                                'Mfa' => [
                                                    'description' => '二次认证类型。',
                                                    'type' => 'string',
                                                    'example' => 'totp',
                                                ],
                                                'MobileLoginType' => [
                                                    'description' => '移动端登录类型。',
                                                    'type' => 'string',
                                                    'example' => 'password',
                                                ],
                                                'MobileMfaConfigType' => [
                                                    'description' => '移动端二次认证配置类型。',
                                                    'type' => 'string',
                                                    'example' => 'password',
                                                ],
                                                'MultiIdpInfo' => [
                                                    'description' => '多身份源配置ID列表。',
                                                    'type' => 'string',
                                                    'example' => '1482,1355',
                                                ],
                                                'PcLoginType' => [
                                                    'description' => 'PC端登录类型。',
                                                    'type' => 'string',
                                                    'example' => 'password',
                                                ],
                                                'Status' => [
                                                    'description' => '身份源配置启用状态。取值：'."\n"
                                                        .'- **Enabled**：开启。'."\n"
                                                        .'- **Disabled**：关闭。',
                                                    'type' => 'string',
                                                    'example' => 'Disabled',
                                                ],
                                                'UpdateTime' => [
                                                    'description' => '更新时间。',
                                                    'type' => 'string',
                                                    'example' => '2023-05-09T02:22:41.430Z',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 1,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"277\\",\\n        \\"Name\\": \\"示例身份源\\",\\n        \\"Type\\": \\"DingTalk\\",\\n        \\"Description\\": \\"示例描述\\",\\n        \\"Mfa\\": \\"totp\\",\\n        \\"MobileLoginType\\": \\"password\\",\\n        \\"MobileMfaConfigType\\": \\"password\\",\\n        \\"MultiIdpInfo\\": \\"1482,1355\\",\\n        \\"PcLoginType\\": \\"password\\",\\n        \\"Status\\": \\"Disabled\\",\\n        \\"UpdateTime\\": \\"2023-05-09T02:22:41.430Z\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询身份源配置信息',
        ],
        'GetIdpConfig' => [
            'summary' => '查询当前阿里云账户指定的身份源配置详情信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215357',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1465',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'Data' => [
                                'description' => '身份源配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '身份源配置ID。',
                                        'type' => 'string',
                                        'example' => '1465',
                                    ],
                                    'Name' => [
                                        'description' => '身份源配置名称。',
                                        'type' => 'string',
                                        'example' => '示例身份源',
                                    ],
                                    'Type' => [
                                        'description' => '身份源配置类型。',
                                        'type' => 'string',
                                        'example' => 'CSAS',
                                    ],
                                    'IdpMetadata' => [
                                        'description' => '身份提供商IdP的元数据。',
                                        'type' => 'string',
                                        'example' => '<?xml version="1.0" encoding="utf-8"?>***',
                                    ],
                                    'AccessKey' => [
                                        'description' => 'AccessKey ID',
                                        'type' => 'string',
                                        'example' => 'LTAI5tJVztnh6N****',
                                    ],
                                    'AccessKeySecret' => [
                                        'description' => 'AccessKey Secret',
                                        'type' => 'string',
                                        'example' => 'E75ktr5jENiR3ssj****',
                                    ],
                                    'Status' => [
                                        'description' => '身份源配置启用状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'example' => 'Enabled',
                                    ],
                                    'MfaConfigType' => [
                                        'description' => '二次认证配置类型。',
                                        'type' => 'string',
                                        'example' => 'totp',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '更新时间。',
                                        'type' => 'string',
                                        'example' => '2024-02-26T02:02:42Z',
                                    ],
                                    'GetGroupUrl' => [
                                        'description' => '自建身份源查询组织架构链接地址。',
                                        'type' => 'string',
                                        'example' => 'https://172.10.XX.XX:4321/getGroup?name=%s&pass=%s',
                                    ],
                                    'Description' => [
                                        'description' => '身份源配置描述。',
                                        'type' => 'string',
                                        'example' => '示例身份源',
                                    ],
                                    'MultiIdpInfo' => [
                                        'description' => '多身份源配置ID列表。',
                                        'type' => 'string',
                                        'example' => '1482,1355',
                                    ],
                                    'PcLoginType' => [
                                        'description' => 'PC端登录类型。',
                                        'type' => 'string',
                                        'example' => 'password',
                                    ],
                                    'MobileLoginType' => [
                                        'description' => '移动端登录类型。',
                                        'type' => 'string',
                                        'example' => 'password',
                                    ],
                                    'MobileMfaConfigType' => [
                                        'description' => '移动端二次认证配置类型。',
                                        'type' => 'string',
                                        'example' => 'totp',
                                    ],
                                    'VerifyToken' => [
                                        'description' => '自建二次认证服务请求签名校验Token',
                                        'type' => 'string',
                                        'example' => '7JAr3fYtn****',
                                    ],
                                    'VerifyAesKey' => [
                                        'description' => '自建二次认证服务请求加密密钥。',
                                        'type' => 'string',
                                        'example' => 'QVhaU0RDR0JIWV****',
                                    ],
                                    'VerifyUrl' => [
                                        'description' => '自建二次认证服务验证链接地址。',
                                        'type' => 'string',
                                        'example' => 'http://172.10.XX.XX:1234/otp_verify',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"1465\\",\\n    \\"Name\\": \\"示例身份源\\",\\n    \\"Type\\": \\"CSAS\\",\\n    \\"IdpMetadata\\": \\"<?xml version=\\\\\\"1.0\\\\\\" encoding=\\\\\\"utf-8\\\\\\"?>***\\",\\n    \\"AccessKey\\": \\"LTAI5tJVztnh6N****\\",\\n    \\"AccessKeySecret\\": \\"E75ktr5jENiR3ssj****\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MfaConfigType\\": \\"totp\\",\\n    \\"UpdateTime\\": \\"2024-02-26T02:02:42Z\\",\\n    \\"GetGroupUrl\\": \\"https://172.10.XX.XX:4321/getGroup?name=%s&pass=%s\\",\\n    \\"Description\\": \\"示例身份源\\",\\n    \\"MultiIdpInfo\\": \\"1482,1355\\",\\n    \\"PcLoginType\\": \\"password\\",\\n    \\"MobileLoginType\\": \\"password\\",\\n    \\"MobileMfaConfigType\\": \\"totp\\",\\n    \\"VerifyToken\\": \\"7JAr3fYtn****\\",\\n    \\"VerifyAesKey\\": \\"QVhaU0RDR0JIWV****\\",\\n    \\"VerifyUrl\\": \\"http://172.10.XX.XX:1234/otp_verify\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询身份源配置详情',
        ],
        'GetActiveIdpConfig' => [
            'summary' => '查询当前阿里云账户已启用的身份源配置。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215457',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                            'Data' => [
                                'description' => '身份源配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '身份源配置ID。',
                                        'type' => 'string',
                                        'example' => 'idp-cfg001',
                                    ],
                                    'Name' => [
                                        'description' => '身份源配置名称。',
                                        'type' => 'string',
                                        'example' => '测试身份源',
                                    ],
                                    'Type' => [
                                        'description' => '身份源配置类型。',
                                        'type' => 'string',
                                        'example' => 'DingTalk',
                                    ],
                                    'Description' => [
                                        'description' => '身份源配置描述。',
                                        'type' => 'string',
                                        'example' => '示例身份源',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"idp-cfg001\\",\\n    \\"Name\\": \\"测试身份源\\",\\n    \\"Type\\": \\"DingTalk\\",\\n    \\"Description\\": \\"示例身份源\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询已启用的身份源配置',
        ],
        'ListIdpDepartments' => [
            'summary' => '查询当前阿里云账户自定义身份源部门信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215359',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1440',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'Data' => [
                                'description' => '部门信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalNum' => [
                                        'description' => '记录总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'DataList' => [
                                        'description' => '部门信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '部门ID。',
                                                    'type' => 'string',
                                                    'example' => '30520',
                                                ],
                                                'Name' => [
                                                    'description' => '部门名称。',
                                                    'type' => 'string',
                                                    'example' => '示例部门',
                                                ],
                                                'IdpConfigId' => [
                                                    'description' => '自定义身份源配置ID。',
                                                    'type' => 'string',
                                                    'example' => '1440',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 2,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"30520\\",\\n        \\"Name\\": \\"示例部门\\",\\n        \\"IdpConfigId\\": \\"1440\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询自定义身份源部门',
        ],
        'CreateIdpDepartment' => [
            'summary' => '创建当前阿里云账户自定义身份源部门。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215362',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1222',
                    ],
                ],
                [
                    'name' => 'DepartmentName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '示例部门',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
                            ],
                            'Data' => [
                                'description' => '创建的部门ID。',
                                'type' => 'string',
                                'example' => '726',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": \\"726\\"\\n}","type":"json"}]',
            'title' => '创建自定义身份源部门',
        ],
        'ListClientUsers' => [
            'summary' => '查询当前阿里云账户自定义身份源的用户信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215379',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1071',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10785',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电子邮件地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'johndoe@example.com',
                    ],
                ],
                [
                    'name' => 'MobileNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码，不需要带国家编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18980976559',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户启用状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'exclusiveMinimum' => false,
                        'example' => '10',
                        'default' => '10',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
                            ],
                            'Data' => [
                                'description' => '用户信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalNum' => [
                                        'description' => '记录总数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2',
                                    ],
                                    'DataList' => [
                                        'description' => '用户信息列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => '1970',
                                                ],
                                                'IdpConfigId' => [
                                                    'description' => '自定义身份源配置ID。',
                                                    'type' => 'string',
                                                    'example' => '1026',
                                                ],
                                                'Username' => [
                                                    'description' => '用户名称。',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                                'UserId' => [
                                                    'description' => '用户唯一标识。',
                                                    'type' => 'string',
                                                    'example' => 'su_dead7216****',
                                                ],
                                                'Description' => [
                                                    'description' => '用户描述。',
                                                    'type' => 'string',
                                                    'example' => '示例用户',
                                                ],
                                                'Email' => [
                                                    'description' => '电子邮件地址。',
                                                    'type' => 'string',
                                                    'example' => 'johndoe@example.com',
                                                ],
                                                'MobileNumber' => [
                                                    'description' => '手机号码，不需要带国家编码。',
                                                    'type' => 'string',
                                                    'example' => '15800820468',
                                                ],
                                                'DepartmentId' => [
                                                    'description' => '部门ID。',
                                                    'type' => 'string',
                                                    'example' => '10800',
                                                ],
                                                'Status' => [
                                                    'description' => '用户启用状态。取值：'."\n"
                                                        .'- **Enabled**：开启。'."\n"
                                                        .'- **Disabled**：关闭。',
                                                    'type' => 'string',
                                                    'example' => 'Disabled',
                                                ],
                                                'Department' => [
                                                    'description' => '用户所属部门。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Id' => [
                                                            'description' => '部门ID。',
                                                            'type' => 'string',
                                                            'example' => '105',
                                                        ],
                                                        'Name' => [
                                                            'description' => '部门名称。',
                                                            'type' => 'string',
                                                            'example' => '示例部门',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 2,\\n    \\"DataList\\": [\\n      {\\n        \\"Id\\": \\"1970\\",\\n        \\"IdpConfigId\\": \\"1026\\",\\n        \\"Username\\": \\"张三\\",\\n        \\"UserId\\": \\"su_dead7216****\\",\\n        \\"Description\\": \\"示例用户\\",\\n        \\"Email\\": \\"johndoe@example.com\\",\\n        \\"MobileNumber\\": \\"15800820468\\",\\n        \\"DepartmentId\\": \\"10800\\",\\n        \\"Status\\": \\"Disabled\\",\\n        \\"Department\\": {\\n          \\"Id\\": \\"105\\",\\n          \\"Name\\": \\"示例部门\\"\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询自定义身份用户信息',
        ],
        'UpdateClientUser' => [
            'summary' => '设置当前阿里云账户自定义身份源指定用户的信息。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215389',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20644',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10701',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电子邮件地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'johndoe@example.com',
                    ],
                ],
                [
                    'name' => 'MobileNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码，不需要带国家编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13641966835',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '示例用户',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
            'title' => '设置自定义身份源指定用户信息',
        ],
        'GetClientUser' => [
            'summary' => '查询当前阿里云账户自定义身份源指定用户的详情信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215387',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '598',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张三',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'Data' => [
                                'description' => '用户详情信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => '83',
                                    ],
                                    'IdpConfigId' => [
                                        'description' => '自定义身份源配置ID。',
                                        'type' => 'string',
                                        'example' => '598',
                                    ],
                                    'Username' => [
                                        'description' => '用户名称。',
                                        'type' => 'string',
                                        'example' => '张三',
                                    ],
                                    'UserId' => [
                                        'description' => '用户唯一标识。',
                                        'type' => 'string',
                                        'example' => 'su_abcd7215****',
                                    ],
                                    'Description' => [
                                        'description' => '用户描述。',
                                        'type' => 'string',
                                        'example' => '示例用户',
                                    ],
                                    'Email' => [
                                        'description' => '电子邮件地址。',
                                        'type' => 'string',
                                        'example' => 'johndoe@example.com',
                                    ],
                                    'MobileNumber' => [
                                        'description' => '手机号码，不需要带国家编码。',
                                        'type' => 'string',
                                        'example' => '13641966835',
                                    ],
                                    'DepartmentId' => [
                                        'description' => '部门ID。',
                                        'type' => 'string',
                                        'example' => '10713',
                                    ],
                                    'Status' => [
                                        'description' => '用户启用状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'example' => 'Disabled',
                                    ],
                                    'Department' => [
                                        'description' => '用户所属部门。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'description' => '部门ID。',
                                                'type' => 'string',
                                                'example' => '107',
                                            ],
                                            'Name' => [
                                                'description' => '部门名称。',
                                                'type' => 'string',
                                                'example' => '示例部门',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"83\\",\\n    \\"IdpConfigId\\": \\"598\\",\\n    \\"Username\\": \\"张三\\",\\n    \\"UserId\\": \\"su_abcd7215****\\",\\n    \\"Description\\": \\"示例用户\\",\\n    \\"Email\\": \\"johndoe@example.com\\",\\n    \\"MobileNumber\\": \\"13641966835\\",\\n    \\"DepartmentId\\": \\"10713\\",\\n    \\"Status\\": \\"Disabled\\",\\n    \\"Department\\": {\\n      \\"Id\\": \\"107\\",\\n      \\"Name\\": \\"示例部门\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询自定义身份源用户详情',
        ],
        'DeleteIdpDepartment' => [
            'summary' => '删除当前阿里云账户自定义身份源指定的部门。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215371',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '507',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10829',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\"\\n}","type":"json"}]',
            'title' => '删除自定义身份源指定部门',
        ],
        'CreateClientUser' => [
            'summary' => '创建当前阿里云账户自定义身份源用户。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215388',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '727',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10797',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电子邮件地址。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'johndoe@example.com',
                    ],
                ],
                [
                    'name' => 'MobileNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号码，不需要带国家编码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '13641966835',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。若为空则自动生成随机密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kehudiyi',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '示例用户',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'Data' => [
                                'description' => '创建的用户ID。',
                                'type' => 'string',
                                'example' => '726',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": \\"726\\"\\n}","type":"json"}]',
            'title' => '创建自定义身份源用户',
        ],
        'UpdateIdpDepartment' => [
            'summary' => '删除当前阿里云账户自定义身份源指定的部门。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215363',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpConfigId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '自定义身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '598',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '10653',
                    ],
                ],
                [
                    'name' => 'DepartmentName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '示例部门',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
            'title' => '修改自定义身份源指定部门',
        ],
        'UpdateClientUserStatus' => [
            'summary' => '设置当前阿里云账户自定义身份源指定用户的启用状态。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215392',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1495',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户启用状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Enabled',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
            'title' => '设置自定义身份源用户启用状态',
        ],
        'DeleteClientUser' => [
            'summary' => '删除当前阿里云账户自定义身份源的指定用户。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215391',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的用户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '27058',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\"\\n}","type":"json"}]',
            'title' => '删除自定义身份源指定用户',
        ],
        'UpdateClientUserPassword' => [
            'summary' => '设置当前阿里云账户自定义身份源指定用户的密码。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '215390',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1128',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'description' => '密码。若为空则自动生成随机密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'kehudiyidj',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\"\\n}","type":"json"}]',
            'title' => '设置自定义身份源指定用户的密码',
            'requestParamsDescription' => 'Id或Username至少指定其一，优先使用Id。',
        ],
        'UpdateUserDevicesStatus' => [
            'summary' => '批量修改当前阿里云账号下终端设备状态。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceTags',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备ID。取值：'."\n"
                                .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                                .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceAction',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '终端设备状态操作。取值：'."\n"
                            .'- **Locked**：锁定。'."\n"
                            .'- **Lost**：挂失。'."\n"
                            .'- **Unbound**：解绑。只有终端设备为离线或长期离线状态时允许解绑。'."\n"
                            .'- **Unlocked**：解锁。只有终端设备为锁定状态时允许解锁。'."\n"
                            .'- **Found**：找回。只有终端设备为挂失状态时允许解锁。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Lost' => '挂失',
                            'Locked' => '锁定',
                            'Unlocked' => '解锁',
                            'Unbound' => '解绑',
                            'Found' => '找回',
                        ],
                        'example' => 'Unbound',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
                            ],
                            'Devices' => [
                                'description' => '终端设备列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端设备。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceTag' => [
                                            'description' => '终端设备ID。',
                                            'type' => 'string',
                                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备操作系统类型。取值：'."\n"
                                                .'- **Windows**：Windows系统。'."\n"
                                                .'- **macOS**：macOS系统。'."\n"
                                                .'- **Linux**：Linux系统。'."\n"
                                                .'- **Android**：Android系统。'."\n"
                                                .'- **iOS**：iOS系统。'."\n"
                                                .'- **Windows_Wuying**：无影云桌面系统。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Linux' => 'Linux系统',
                                                'Windows_Wuying' => '无影云桌面系统',
                                                'Windows' => 'Windows系统',
                                                'iOS' => 'iOS系统',
                                                'macOS' => 'macOS系统',
                                                'Android' => 'Android系统',
                                            ],
                                            'example' => 'Windows',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '终端设备型号。',
                                            'type' => 'string',
                                            'example' => 'MacBookPro17,1',
                                        ],
                                        'DeviceVersion' => [
                                            'description' => '终端设备操作系统版本。',
                                            'type' => 'string',
                                            'example' => '3.5.1',
                                        ],
                                        'Hostname' => [
                                            'description' => '终端设备名称。',
                                            'type' => 'string',
                                            'example' => 'win10-64bit',
                                        ],
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'InnerIP' => [
                                            'description' => '终端设备内网IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'SrcIP' => [
                                            'description' => '终端设备登录IP地址。',
                                            'type' => 'string',
                                            'example' => '11.49.XX.XX',
                                        ],
                                        'Memory' => [
                                            'description' => '终端设备内存容量。单位：GB。',
                                            'type' => 'string',
                                            'example' => '16',
                                        ],
                                        'CPU' => [
                                            'description' => '终端设备CPU型号。',
                                            'type' => 'string',
                                            'example' => 'Apple M1',
                                        ],
                                        'Disk' => [
                                            'description' => '终端设备磁盘型号。',
                                            'type' => 'string',
                                            'example' => 'APPLE SSD AP0512Q Media',
                                        ],
                                        'Mac' => [
                                            'description' => '终端设备MAC地址。',
                                            'type' => 'string',
                                            'example' => '00:16:XX:XX:7c:46',
                                        ],
                                        'AppVersion' => [
                                            'description' => '客户端版本。',
                                            'type' => 'string',
                                            'example' => '2.2.0',
                                        ],
                                        'DeviceBelong' => [
                                            'description' => '终端设备归属。取值：'."\n"
                                                .'- **Personal**：个人设备。'."\n"
                                                .'- **Company**：公司设备。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Company' => '公司设备',
                                                'Personal' => '个人设备',
                                            ],
                                            'example' => 'Company',
                                        ],
                                        'SharingStatus' => [
                                            'description' => '设备是否开启共享。取值：'."\n"
                                                .'- **true**：开启共享。'."\n"
                                                .'- **false**：关闭共享。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '开启共享',
                                                'false' => '关闭共享',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'DeviceStatus' => [
                                            'description' => '终端设备状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。'."\n"
                                                .'- **LongTermOffline**：长期离线。'."\n"
                                                .'- **Locked**：锁定。'."\n"
                                                .'- **Lost**：挂失。'."\n"
                                                .'- **Unbound**：解绑。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Lost' => '挂失',
                                                'Locked' => '锁定',
                                                'LongTermOffline' => '长期离线',
                                                'Offline' => '离线',
                                                'Unbound' => '解绑',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'AppStatus' => [
                                            'description' => '客户端状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Offline' => '离线',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'PaStatus' => [
                                            'description' => '内网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'IaStatus' => [
                                            'description' => '互联网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Diabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'DlpStatus' => [
                                            'description' => '办公数据保护状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。'."\n"
                                                .'- **Unauthorized**：未授权。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Unauthorized' => '未授权',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'NacStatus' => [
                                            'description' => '网络准入状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '终端设备注册时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-17 18:46:55',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '终端设备最后在线时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-24 19:04:42',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量修改用户终端设备状态',
        ],
        'ListExcessiveDeviceRegistrationApplications' => [
            'summary' => '查询当前阿里云账号下用户终端设备的超额注册申请列表。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值范围：1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '王先生',
                    ],
                ],
                [
                    'name' => 'SaseUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。取值来源：'."\n"
                            .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                            .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ],
                ],
                [
                    'name' => 'Department',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试部',
                    ],
                ],
                [
                    'name' => 'Hostname',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'win10-64bit',
                    ],
                ],
                [
                    'name' => 'Mac',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备MAC地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00:16:XX:XX:7c:46',
                    ],
                ],
                [
                    'name' => 'DeviceTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备ID。取值：'."\n"
                            .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                            .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
                    ],
                ],
                [
                    'name' => 'Statuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '超额注册申请状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '超额注册申请状态。取值：'."\n"
                                .'- **Pending**：待处理。'."\n"
                                .'- **Approved**：通过。'."\n"
                                .'- **Rejected**：拒绝。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Approved' => '通过',
                                'Rejected' => '拒绝',
                                'Pending' => '待处理',
                            ],
                            'example' => 'Pending',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '超额注册申请ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '超额注册申请ID。取值来源[ListExcessiveDeviceRegistrationApplications](~~ListExcessiveDeviceRegistrationApplications~~)：批量查询设备超额注册申请。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'reg-application-0f4a127b7e78****',
                        ],
                        'required' => false,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'TotalNum' => [
                                'description' => '超额注册申请总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Applications' => [
                                'description' => '超额注册申请列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '超额注册申请。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceTag' => [
                                            'description' => '终端设备ID。',
                                            'type' => 'string',
                                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备操作系统类型。取值：'."\n"
                                                .'- **Windows**：Windows系统。'."\n"
                                                .'- **macOS**：macOS系统。'."\n"
                                                .'- **Linux**：Linux系统。'."\n"
                                                .'- **Android**：Android系统。'."\n"
                                                .'- **iOS**：iOS系统。'."\n"
                                                .'- **Windows_Wuying**：无影云桌面系统。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Linux' => 'Linux系统',
                                                'Windows_Wuying' => '无影云桌面系统',
                                                'Windows' => 'Windows系统',
                                                'iOS' => 'iOS系统',
                                                'macOS' => 'macOS系统',
                                                'Android' => 'Android系统',
                                            ],
                                            'example' => 'Windows',
                                        ],
                                        'Hostname' => [
                                            'description' => '终端设备名称。',
                                            'type' => 'string',
                                            'example' => 'win10-64bit',
                                        ],
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'Mac' => [
                                            'description' => '终端设备MAC地址。',
                                            'type' => 'string',
                                            'example' => '00:16:XX:XX:7c:46',
                                        ],
                                        'IsUsed' => [
                                            'description' => '超额注册申请是否被使用。取值：'."\n"
                                                .'- **true**：被使用。'."\n"
                                                .'- **false**：尚未使用。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '被使用',
                                                'false' => '尚未使用',
                                            ],
                                            'example' => 'false',
                                        ],
                                        'Status' => [
                                            'description' => '超额注册申请状态。取值：'."\n"
                                                .'- **Pending**：待处理。'."\n"
                                                .'- **Approved**：通过。'."\n"
                                                .'- **Rejected**：拒绝。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Approved' => '通过',
                                                'Rejected' => '拒绝',
                                                'Pending' => '待处理',
                                            ],
                                            'example' => 'Approved',
                                        ],
                                        'CreateTime' => [
                                            'description' => '超额注册申请创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-17 18:46:55',
                                        ],
                                        'Description' => [
                                            'description' => '超额注册申请理由。',
                                            'type' => 'string',
                                            'example' => '这是一条超额注册申请',
                                        ],
                                        'ApplicationId' => [
                                            'description' => '超额注册申请ID。',
                                            'type' => 'string',
                                            'example' => 'reg-application-0f4a127b7e78****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Applications\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"IsUsed\\": false,\\n      \\"Status\\": \\"Approved\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"Description\\": \\"这是一条超额注册申请\\",\\n      \\"ApplicationId\\": \\"reg-application-0f4a127b7e78****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询设备超额注册申请',
        ],
        'UpdateExcessiveDeviceRegistrationApplicationsStatus' => [
            'summary' => '批量修改当前阿里云账号下超额注册申请状态。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '超额注册申请状态。取值：'."\n"
                            .'- **Approved**：通过。只有设备注册申请为待处理状态时允许通过。'."\n"
                            .'- **Rejected**：拒绝。只有设备注册申请为待处理状态时允许拒绝。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Approved' => '通过',
                            'Rejected' => '拒绝',
                        ],
                        'example' => 'Approved',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '超额注册申请ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '超额注册申请ID。取值来源[ListExcessiveDeviceRegistrationApplications](~~ListExcessiveDeviceRegistrationApplications~~)：批量查询设备超额注册申请。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'reg-application-0f4a127b7e78****'."\n",
                        ],
                        'required' => true,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'Applications' => [
                                'description' => '超额注册申请列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '超额注册申请。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceTag' => [
                                            'description' => '终端设备ID。',
                                            'type' => 'string',
                                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备操作系统类型。取值：'."\n"
                                                .'- **Windows**：Windows系统。'."\n"
                                                .'- **macOS**：macOS系统。'."\n"
                                                .'- **Linux**：Linux系统。'."\n"
                                                .'- **Android**：Android系统。'."\n"
                                                .'- **iOS**：iOS系统。'."\n"
                                                .'- **Windows_Wuying**：无影云桌面系统。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Linux' => 'Linux系统',
                                                'Windows_Wuying' => '无影云桌面系统',
                                                'Windows' => 'Windows系统',
                                                'iOS' => 'iOS系统',
                                                'macOS' => 'macOS系统',
                                                'Android' => 'Android系统',
                                            ],
                                            'example' => 'Windows',
                                        ],
                                        'Hostname' => [
                                            'description' => '终端设备名称。',
                                            'type' => 'string',
                                            'example' => 'win10-64bit',
                                        ],
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'Mac' => [
                                            'description' => '终端设备MAC地址。',
                                            'type' => 'string',
                                            'example' => '00:16:XX:XX:7c:46',
                                        ],
                                        'IsUsed' => [
                                            'description' => '超额注册申请是否被使用。取值：'."\n"
                                                .'- **true**：被使用。'."\n"
                                                .'- **false**：尚未使用。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '被使用',
                                                'false' => '尚未使用',
                                            ],
                                            'example' => 'false',
                                        ],
                                        'Status' => [
                                            'description' => '超额注册申请状态。取值：'."\n"
                                                .'- **Pending**：待处理。'."\n"
                                                .'- **Approved**：通过。'."\n"
                                                .'- **Rejected**：拒绝。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Approved' => '通过',
                                                'Rejected' => '拒绝',
                                                'Pending' => '待处理',
                                            ],
                                            'example' => 'Approved',
                                        ],
                                        'CreateTime' => [
                                            'description' => '超额注册申请创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-17 18:46:55',
                                        ],
                                        'Description' => [
                                            'description' => '超额注册申请理由。',
                                            'type' => 'string',
                                            'example' => '这是一条超额注册申请',
                                        ],
                                        'ApplicationId' => [
                                            'description' => '超额注册申请ID。',
                                            'type' => 'string',
                                            'example' => 'reg-application-0f4a127b7e78****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Applications\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"IsUsed\\": false,\\n      \\"Status\\": \\"Approved\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"Description\\": \\"这是一条超额注册申请\\",\\n      \\"ApplicationId\\": \\"reg-application-0f4a127b7e78****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量修改设备超额注册申请状态',
        ],
        'UpdateUserDevicesSharingStatus' => [
            'summary' => '批量修改企业用户的终端设备共享状态。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceTags',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备ID。取值：'."\n"
                                .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                                .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SharingStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备是否开启共享。取值：'."\n"
                            .'- **true**：开启共享。'."\n"
                            .'- **false**：关闭共享。',
                        'type' => 'boolean',
                        'required' => true,
                        'enumValueTitles' => [
                            'true' => '开启共享',
                            'false' => '关闭共享',
                        ],
                        'example' => 'true',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                            'Devices' => [
                                'description' => '终端设备列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端设备。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceTag' => [
                                            'description' => '终端设备ID。',
                                            'type' => 'string',
                                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备操作系统类型。取值：'."\n"
                                                .'- **Windows**：Windows系统。'."\n"
                                                .'- **macOS**：macOS系统。'."\n"
                                                .'- **Linux**：Linux系统。'."\n"
                                                .'- **Android**：Android系统。'."\n"
                                                .'- **iOS**：iOS系统。'."\n"
                                                .'- **Windows_Wuying**：无影云桌面系统。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Linux' => 'Linux系统',
                                                'Windows_Wuying' => '无影云桌面系统',
                                                'Windows' => 'Windows系统',
                                                'iOS' => 'iOS系统',
                                                'macOS' => 'macOS系统',
                                                'Android' => 'Android系统',
                                            ],
                                            'example' => 'Windows',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '终端设备型号。',
                                            'type' => 'string',
                                            'example' => 'MacBookPro17,1',
                                        ],
                                        'DeviceVersion' => [
                                            'description' => '终端设备操作系统版本。',
                                            'type' => 'string',
                                            'example' => '3.5.1',
                                        ],
                                        'Hostname' => [
                                            'description' => '终端设备名称。',
                                            'type' => 'string',
                                            'example' => 'win10-64bit',
                                        ],
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'InnerIP' => [
                                            'description' => '终端设备内网IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'SrcIP' => [
                                            'description' => '终端设备登录IP地址。',
                                            'type' => 'string',
                                            'example' => '11.49.XX.XX',
                                        ],
                                        'Memory' => [
                                            'description' => '终端设备内存容量。单位：GB。',
                                            'type' => 'string',
                                            'example' => '16',
                                        ],
                                        'CPU' => [
                                            'description' => '终端设备CPU型号。',
                                            'type' => 'string',
                                            'example' => 'Apple M1',
                                        ],
                                        'Disk' => [
                                            'description' => '终端设备磁盘型号。',
                                            'type' => 'string',
                                            'example' => 'APPLE SSD AP0512Q Media',
                                        ],
                                        'Mac' => [
                                            'description' => '终端设备MAC地址。',
                                            'type' => 'string',
                                            'example' => '00:16:XX:XX:7c:46',
                                        ],
                                        'AppVersion' => [
                                            'description' => '客户端版本。',
                                            'type' => 'string',
                                            'example' => '2.2.0',
                                        ],
                                        'DeviceBelong' => [
                                            'description' => '终端设备归属。取值：'."\n"
                                                .'- **Personal**：个人设备。'."\n"
                                                .'- **Company**：公司设备。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Company' => '公司设备',
                                                'Personal' => '个人设备',
                                            ],
                                            'example' => 'Company',
                                        ],
                                        'SharingStatus' => [
                                            'description' => '设备是否开启共享。取值：'."\n"
                                                .'- **true**：开启共享。'."\n"
                                                .'- **false**：关闭共享。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '开启共享',
                                                'false' => '关闭共享',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'DeviceStatus' => [
                                            'description' => '终端设备状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。'."\n"
                                                .'- **LongTermOffline**：长期离线。'."\n"
                                                .'- **Locked**：锁定。'."\n"
                                                .'- **Lost**：挂失。'."\n"
                                                .'- **Unbound**：解绑。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Lost' => '挂失',
                                                'Locked' => '锁定',
                                                'LongTermOffline' => '长期离线',
                                                'Offline' => '离线',
                                                'Unbound' => '解绑',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'AppStatus' => [
                                            'description' => '客户端状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Offline' => '离线',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'PaStatus' => [
                                            'description' => '内网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'IaStatus' => [
                                            'description' => '互联网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'DlpStatus' => [
                                            'description' => '办公数据保护状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。'."\n"
                                                .'- **Unauthorized**：未授权。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Unauthorized' => '未授权',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'NacStatus' => [
                                            'description' => '网络准入状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '终端设备注册时间。',
                                            'type' => 'string',
                                            'example' => '2023-05-16 17:18:46',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '终端设备最后在线时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-24 19:04:42',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量修改用户终端设备共享状态',
        ],
        'ListUserDevices' => [
            'summary' => '查询当前阿里云账号下用户终端设备列表。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '192473',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值范围：1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '王先生',
                    ],
                ],
                [
                    'name' => 'SaseUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户ID。取值来源：'."\n"
                            .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                            .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ],
                ],
                [
                    'name' => 'Department',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试部',
                    ],
                ],
                [
                    'name' => 'Hostname',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'win10-64bit',
                    ],
                ],
                [
                    'name' => 'DeviceBelong',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备归属。取值：'."\n"
                            .'- **Personal**：个人设备。'."\n"
                            .'- **Company**：公司设备。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Company' => '公司设备',
                            'Personal' => '个人设备',
                        ],
                        'example' => 'Company',
                    ],
                ],
                [
                    'name' => 'Mac',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备MAC地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00:16:XX:XX:7c:46',
                    ],
                ],
                [
                    'name' => 'SharingStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备是否开启共享。取值：'."\n"
                            .'- **true**：开启共享。'."\n"
                            .'- **false**：关闭共享。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '开启共享',
                            'false' => '关闭共享',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DeviceStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备状态。取值：'."\n"
                                .'- **Online**：在线。'."\n"
                                .'- **Offline**：离线。包括长期离线状态。'."\n"
                                .'- **LongTermOffline**：长期离线。'."\n"
                                .'- **Locked**：锁定。'."\n"
                                .'- **Lost**：挂失。'."\n"
                                .'- **Unbound**：解绑。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Lost' => '挂失',
                                'Locked' => '锁定',
                                'LongTermOffline' => '长期离线',
                                'Offline' => '离线(包括长期离线)',
                                'Unbound' => '解绑',
                                'Online' => '在线',
                            ],
                            'example' => 'Online',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '客户端状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '客户端状态。取值：'."\n"
                                .'- **Online**：在线。'."\n"
                                .'- **Offline**：离线。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Offline' => '离线',
                                'Online' => '在线',
                            ],
                            'example' => 'Online',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Enabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IaStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '互联网访问状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '互联网访问状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Disabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DlpStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '办公数据保护状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '办公数据保护状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。'."\n"
                                .'- **Unauthorized**：未授权。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Unauthorized' => '未授权',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Enabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NacStatuses',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网络准入状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络准入状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Unprovisioned',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceTypes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备操作系统类型集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备操作系统类型。取值：'."\n"
                                .'- **Windows**：Windows系统。'."\n"
                                .'- **macOS**：macOS系统。'."\n"
                                .'- **Linux**：Linux系统。'."\n"
                                .'- **Android**：Android系统。'."\n"
                                .'- **iOS**：iOS系统。'."\n"
                                .'- **Windows_Wuying**：无影云桌面系统。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Linux' => 'Linux系统',
                                'Windows_Wuying' => '无影云桌面系统',
                                'Windows' => 'Windows系统',
                                'iOS' => 'iOS系统',
                                'macOS' => 'macOS系统',
                                'Android' => 'Android系统',
                            ],
                            'example' => 'Windows',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceTags',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备ID。取值：'."\n"
                                .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                                .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序参数。取值：'."\n"
                            .'- **Username**：按Username升序排列。'."\n"
                            .'- **AppVersion**：按AppVersion降序排列。'."\n"
                            .'- **UpdateTime**：按UpdateTime降序排列。'."\n"
                            .'- **CreateTime**：按CreateTime降序排列。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'AppVersion' => '按AppVersion降序排列',
                            'Username' => '按Username升序排列',
                            'CreateTime' => '按CreateTime降序排列',
                            'UpdateTime' => '按UpdateTime降序排列',
                        ],
                        'example' => 'UpdateTime',
                    ],
                ],
                [
                    'name' => 'InnerIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备内网IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.XX.XX',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
                            ],
                            'TotalNum' => [
                                'description' => '终端设备总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Devices' => [
                                'description' => '终端设备列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端设备。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceTag' => [
                                            'description' => '终端设备ID。',
                                            'type' => 'string',
                                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备操作系统类型。取值：'."\n"
                                                .'- **Windows**：Windows系统。'."\n"
                                                .'- **macOS**：macOS系统。'."\n"
                                                .'- **Linux**：Linux系统。'."\n"
                                                .'- **Android**：Android系统。'."\n"
                                                .'- **iOS**：iOS系统。'."\n"
                                                .'- **Windows_Wuying**：无影云桌面系统。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Linux' => 'Linux系统',
                                                'Windows_Wuying' => '无影云桌面系统',
                                                'Windows' => 'Windows系统',
                                                'iOS' => 'iOS系统',
                                                'macOS' => 'macOS系统',
                                                'Android' => 'Android系统',
                                            ],
                                            'example' => 'Windows',
                                        ],
                                        'DeviceModel' => [
                                            'description' => '终端设备型号。',
                                            'type' => 'string',
                                            'example' => 'MacBookPro17,1',
                                        ],
                                        'DeviceVersion' => [
                                            'description' => '终端设备操作系统版本。',
                                            'type' => 'string',
                                            'example' => '3.5.1',
                                        ],
                                        'Hostname' => [
                                            'description' => '终端设备名称。',
                                            'type' => 'string',
                                            'example' => 'win10-64bit',
                                        ],
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'InnerIP' => [
                                            'description' => '终端设备内网IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.XX.XX',
                                        ],
                                        'SrcIP' => [
                                            'description' => '终端设备登录IP地址。',
                                            'type' => 'string',
                                            'example' => '11.49.XX.XX',
                                        ],
                                        'Memory' => [
                                            'description' => '终端设备内存容量。单位：GB。',
                                            'type' => 'string',
                                            'example' => '16',
                                        ],
                                        'CPU' => [
                                            'description' => '终端设备CPU型号。',
                                            'type' => 'string',
                                            'example' => 'Apple M1',
                                        ],
                                        'Disk' => [
                                            'description' => '终端设备磁盘型号。',
                                            'type' => 'string',
                                            'example' => 'APPLE SSD AP0512Q Media',
                                        ],
                                        'Mac' => [
                                            'description' => '终端设备MAC地址。',
                                            'type' => 'string',
                                            'example' => '00:16:XX:XX:7c:46',
                                        ],
                                        'AppVersion' => [
                                            'description' => '客户端版本。',
                                            'type' => 'string',
                                            'example' => '2.2.0',
                                        ],
                                        'DeviceBelong' => [
                                            'description' => '终端设备归属。取值：'."\n"
                                                .'- **Personal**：个人设备。'."\n"
                                                .'- **Company**：公司设备。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Company' => '公司设备',
                                                'Personal' => '个人设备',
                                            ],
                                            'example' => 'Company',
                                        ],
                                        'SharingStatus' => [
                                            'description' => '设备是否开启共享。取值：'."\n"
                                                .'- **true**：开启共享。'."\n"
                                                .'- **false**：关闭共享。',
                                            'type' => 'boolean',
                                            'enumValueTitles' => [
                                                'true' => '开启共享',
                                                'false' => '关闭共享',
                                            ],
                                            'example' => 'true',
                                        ],
                                        'DeviceStatus' => [
                                            'description' => '终端设备状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。'."\n"
                                                .'- **LongTermOffline**：长期离线。'."\n"
                                                .'- **Locked**：锁定。'."\n"
                                                .'- **Lost**：挂失。'."\n"
                                                .'- **Unbound**：解绑。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Lost' => '挂失',
                                                'Locked' => '锁定',
                                                'LongTermOffline' => '长期离线',
                                                'Offline' => '离线',
                                                'Unbound' => '解绑',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'AppStatus' => [
                                            'description' => '客户端状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Offline' => '离线',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'PaStatus' => [
                                            'description' => '内网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'IaStatus' => [
                                            'description' => '互联网访问状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'DlpStatus' => [
                                            'description' => '办公数据保护状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。'."\n"
                                                .'- **Unauthorized**：未授权。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Unauthorized' => '未授权',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'NacStatus' => [
                                            'description' => '网络准入状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。'."\n"
                                                .'- **Unprovisioned**：未配置。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                                'Unprovisioned' => '未配置',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '终端设备注册时间。',
                                            'type' => 'string',
                                            'example' => '2023-07-17 18:46:55',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '终端设备最后在线时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-24 19:04:42',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Devices\\": [\\n    {\\n      \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n      \\"DeviceType\\": \\"Windows\\",\\n      \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n      \\"DeviceVersion\\": \\"3.5.1\\",\\n      \\"Hostname\\": \\"win10-64bit\\",\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"InnerIP\\": \\"192.168.XX.XX\\",\\n      \\"SrcIP\\": \\"11.49.XX.XX\\",\\n      \\"Memory\\": \\"16\\",\\n      \\"CPU\\": \\"Apple M1\\",\\n      \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n      \\"Mac\\": \\"00:16:XX:XX:7c:46\\",\\n      \\"AppVersion\\": \\"2.2.0\\",\\n      \\"DeviceBelong\\": \\"Company\\",\\n      \\"SharingStatus\\": true,\\n      \\"DeviceStatus\\": \\"Online\\",\\n      \\"AppStatus\\": \\"Online\\",\\n      \\"PaStatus\\": \\"Enabled\\",\\n      \\"IaStatus\\": \\"Enabled\\",\\n      \\"DlpStatus\\": \\"Enabled\\",\\n      \\"NacStatus\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2023-07-17 18:46:55\\",\\n      \\"UpdateTime\\": \\"2023-08-24 19:04:42\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户终端设备',
        ],
        'ExportUserDevices' => [
            'summary' => '导出用户终端设备列表excel文件。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '197383',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Username',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '王先生',
                    ],
                ],
                [
                    'name' => 'SaseUserId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户ID。取值来源：'."\n"
                            .'- [ListUsers](~~ListUsers~~)：批量查询用户。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                    ],
                ],
                [
                    'name' => 'Department',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试部',
                    ],
                ],
                [
                    'name' => 'Hostname',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '终端设备名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（\\_）、分隔号（/）、at（@）和空格。单独输入下划线（\\_）将额外查询所有名称中带4字节utf-8字符的终端设备。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'win10-64bit',
                    ],
                ],
                [
                    'name' => 'DeviceBelong',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '终端设备归属。取值：'."\n"
                            .'- **Personal**：个人设备。'."\n"
                            .'- **Company**：公司设备。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Company' => '公司设备',
                            'Personal' => '个人设备',
                        ],
                        'example' => 'Company',
                    ],
                ],
                [
                    'name' => 'Mac',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '终端设备MAC地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '00:16:XX:XX:7c:46',
                    ],
                ],
                [
                    'name' => 'SharingStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备是否开启共享。取值：'."\n"
                            .'- **true**：开启共享。'."\n"
                            .'- **false**：关闭共享。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '开启共享',
                            'false' => '关闭共享',
                        ],
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DeviceStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备状态。取值：'."\n"
                                .'- **Online**：在线。'."\n"
                                .'- **Offline**：离线。包括长期离线状态。'."\n"
                                .'- **LongTermOffline**：长期离线。'."\n"
                                .'- **Locked**：锁定。'."\n"
                                .'- **Lost**：挂失。'."\n"
                                .'- **Unbound**：解绑。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Lost' => '挂失',
                                'Locked' => '锁定',
                                'LongTermOffline' => '长期离线',
                                'Offline' => '离线',
                                'Unbound' => '解绑',
                                'Online' => '在线',
                            ],
                            'example' => 'Online',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AppStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '客户端状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '客户端状态。取值：'."\n"
                                .'- **Online**：在线。'."\n"
                                .'- **Offline**：离线。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Offline' => '离线',
                                'Online' => '在线',
                            ],
                            'example' => 'Online',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Enabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IaStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '互联网访问状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '互联网访问状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Disabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DlpStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '办公数据保护状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '办公数据保护状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。'."\n"
                                .'- **Unauthorized**：未授权。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Unauthorized' => '未授权',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Enabled',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NacStatuses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '网络准入状态集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '网络准入状态。取值：'."\n"
                                .'- **Enabled**：开启。'."\n"
                                .'- **Disabled**：关闭。'."\n"
                                .'- **Unprovisioned**：未配置。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Enabled' => '开启',
                                'Disabled' => '关闭',
                                'Unprovisioned' => '未配置',
                            ],
                            'example' => 'Unprovisioned',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceTypes',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备操作系统类型集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备操作系统类型。取值：'."\n"
                                .'- **Windows**：Windows系统。'."\n"
                                .'- **macOS**：macOS系统。'."\n"
                                .'- **Linux**：Linux系统。'."\n"
                                .'- **Android**：Android系统。'."\n"
                                .'- **iOS**：iOS系统。'."\n"
                                .'- **Windows_Wuying**：无影云桌面系统。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'Linux' => 'Linux系统',
                                'Windows_Wuying' => '无影云桌面系统',
                                'Windows' => 'Windows系统',
                                'iOS' => 'iOS系统',
                                'macOS' => 'macOS系统',
                                'Android' => 'Android系统',
                            ],
                            'example' => 'Windows',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DeviceTags',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备ID。取值：'."\n"
                                .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                                .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
                        ],
                        'required' => false,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
                            ],
                            'SignedUrl' => [
                                'description' => '文件下载URL，有效时间1分钟。',
                                'type' => 'string',
                                'example' => 'https://sase-export.oss-cn-hangzhou.aliyuncs.com/export%2Fapp-device%2F20240607154831.xlsx?Expires=1717746571&OSSAccessKeyId=********************',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"SignedUrl\\": \\"https://sase-export.oss-cn-hangzhou.aliyuncs.com/export%2Fapp-device%2F20240607154831.xlsx?Expires=1717746571&OSSAccessKeyId=********************\\"\\n}","type":"json"}]',
            'title' => '导出用户终端设备列表',
        ],
        'GetUserDevice' => [
            'summary' => '查询当前阿里云账号下用户终端设备详情。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'DeviceTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备ID。取值：'."\n"
                            .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                            .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
                            ],
                            'Device' => [
                                'description' => '终端设备。',
                                'type' => 'object',
                                'properties' => [
                                    'DeviceTag' => [
                                        'description' => '终端设备ID。',
                                        'type' => 'string',
                                        'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                                    ],
                                    'DeviceType' => [
                                        'description' => '终端设备操作系统类型。取值：'."\n"
                                            .'- **Windows**：Windows系统。'."\n"
                                            .'- **macOS**：macOS系统。'."\n"
                                            .'- **Linux**：Linux系统。'."\n"
                                            .'- **Android**：Android系统。'."\n"
                                            .'- **iOS**：iOS系统。'."\n"
                                            .'- **Windows_Wuying**：无影云桌面系统。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Linux' => 'Linux系统',
                                            'Windows_Wuying' => '无影云桌面系统',
                                            'Windows' => 'Windows系统',
                                            'iOS' => 'iOS系统',
                                            'macOS' => 'macOS系统',
                                            'Android' => 'Android系统',
                                        ],
                                        'example' => 'Windows',
                                    ],
                                    'DeviceModel' => [
                                        'description' => '终端设备型号。',
                                        'type' => 'string',
                                        'example' => 'MacBookPro17,1',
                                    ],
                                    'DeviceVersion' => [
                                        'description' => '终端设备操作系统版本。',
                                        'type' => 'string',
                                        'example' => '3.5.1',
                                    ],
                                    'Hostname' => [
                                        'description' => '终端设备名称。',
                                        'type' => 'string',
                                        'example' => 'win10-64bit',
                                    ],
                                    'Username' => [
                                        'description' => '用户名。',
                                        'type' => 'string',
                                        'example' => '王先生',
                                    ],
                                    'SaseUserId' => [
                                        'description' => '用户ID。',
                                        'type' => 'string',
                                        'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                    ],
                                    'Department' => [
                                        'description' => '用户所属部门。',
                                        'type' => 'string',
                                        'example' => '测试部',
                                    ],
                                    'InnerIP' => [
                                        'description' => '终端设备内网IP地址。',
                                        'type' => 'string',
                                        'example' => '172.16.XX.XX',
                                    ],
                                    'SrcIP' => [
                                        'description' => '终端设备登录IP地址。',
                                        'type' => 'string',
                                        'example' => '106.14.XX.XX',
                                    ],
                                    'Memory' => [
                                        'description' => '终端设备内存容量。单位：GB。',
                                        'type' => 'string',
                                        'example' => '16',
                                    ],
                                    'CPU' => [
                                        'description' => '终端设备CPU型号。',
                                        'type' => 'string',
                                        'example' => 'Apple M1',
                                    ],
                                    'Disk' => [
                                        'description' => '终端设备磁盘型号。',
                                        'type' => 'string',
                                        'example' => 'APPLE SSD AP0512Q Media',
                                    ],
                                    'Mac' => [
                                        'description' => '终端设备MAC地址。',
                                        'type' => 'string',
                                        'example' => '48:9e:XX:XX:02:80',
                                    ],
                                    'AppVersion' => [
                                        'description' => '客户端版本。',
                                        'type' => 'string',
                                        'example' => '2.2.0',
                                    ],
                                    'DeviceBelong' => [
                                        'description' => '终端设备归属。取值：'."\n"
                                            .'- **Personal**：个人设备。'."\n"
                                            .'- **Company**：公司设备。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Company' => '公司设备',
                                            'Personal' => '个人设备',
                                        ],
                                        'example' => 'Company',
                                    ],
                                    'SharingStatus' => [
                                        'description' => '设备是否开启共享。取值：'."\n"
                                            .'- **true**：开启共享。'."\n"
                                            .'- **false**：关闭共享。',
                                        'type' => 'boolean',
                                        'enumValueTitles' => [
                                            'true' => '开启共享',
                                            'false' => '关闭共享',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'DeviceStatus' => [
                                        'description' => '终端设备状态。取值：'."\n"
                                            .'- **Online**：在线。'."\n"
                                            .'- **Offline**：离线。'."\n"
                                            .'- **LongTermOffline**：长期离线。'."\n"
                                            .'- **Locked**：锁定。'."\n"
                                            .'- **Lost**：挂失。'."\n"
                                            .'- **Unbound**：解绑。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Lost' => '挂失',
                                            'Locked' => '锁定',
                                            'LongTermOffline' => '长期离线',
                                            'Offline' => '离线',
                                            'Unbound' => '解绑',
                                            'Online' => '在线',
                                        ],
                                        'example' => 'Online',
                                    ],
                                    'AppStatus' => [
                                        'description' => '客户端状态。取值：'."\n"
                                            .'- **Online**：在线。'."\n"
                                            .'- **Offline**：离线。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Offline' => '离线',
                                            'Online' => '在线',
                                        ],
                                        'example' => 'Online',
                                    ],
                                    'PaStatus' => [
                                        'description' => '内网访问状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。'."\n"
                                            .'- **Unprovisioned**：未配置。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '在线',
                                            'Disabled' => '离线',
                                            'Unprovisioned' => '未配置',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'IaStatus' => [
                                        'description' => '互联网访问状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。'."\n"
                                            .'- **Unprovisioned**：未配置。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                            'Unprovisioned' => '未配置',
                                        ],
                                        'example' => 'Disabled',
                                    ],
                                    'DlpStatus' => [
                                        'description' => '办公数据保护状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。'."\n"
                                            .'- **Unprovisioned**：未配置。'."\n"
                                            .'- **Unauthorized**：未授权。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Unauthorized' => '未授权',
                                            'Disabled' => '关闭',
                                            'Unprovisioned' => '未配置',
                                        ],
                                        'example' => 'Unauthorized',
                                    ],
                                    'NacStatus' => [
                                        'description' => '网络准入状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。'."\n"
                                            .'- **Unprovisioned**：未配置。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                            'Unprovisioned' => '未配置',
                                        ],
                                        'example' => 'Unprovisioned',
                                    ],
                                    'CreateTime' => [
                                        'description' => '终端设备注册时间。',
                                        'type' => 'string',
                                        'example' => '2023-05-16 17:18:46',
                                    ],
                                    'UpdateTime' => [
                                        'description' => '终端设备最后在线时间。',
                                        'type' => 'string',
                                        'example' => '2023-08-24 19:04:42',
                                    ],
                                    'HistoryUsers' => [
                                        'description' => '终端设备历史用户集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '终端设备历史用户。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Username' => [
                                                    'description' => '用户名。',
                                                    'type' => 'string',
                                                    'example' => '张女士',
                                                ],
                                                'SaseUserId' => [
                                                    'description' => '用户ID。',
                                                    'type' => 'string',
                                                    'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"Device\\": {\\n    \\"DeviceTag\\": \\"36efa42d-2c32-c4dc-e3fc-8541e33a****\\",\\n    \\"DeviceType\\": \\"Windows\\",\\n    \\"DeviceModel\\": \\"MacBookPro17,1\\",\\n    \\"DeviceVersion\\": \\"3.5.1\\",\\n    \\"Hostname\\": \\"win10-64bit\\",\\n    \\"Username\\": \\"王先生\\",\\n    \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n    \\"Department\\": \\"测试部\\",\\n    \\"InnerIP\\": \\"172.16.XX.XX\\",\\n    \\"SrcIP\\": \\"106.14.XX.XX\\",\\n    \\"Memory\\": \\"16\\",\\n    \\"CPU\\": \\"Apple M1\\",\\n    \\"Disk\\": \\"APPLE SSD AP0512Q Media\\",\\n    \\"Mac\\": \\"48:9e:XX:XX:02:80\\",\\n    \\"AppVersion\\": \\"2.2.0\\",\\n    \\"DeviceBelong\\": \\"Company\\",\\n    \\"SharingStatus\\": true,\\n    \\"DeviceStatus\\": \\"Online\\",\\n    \\"AppStatus\\": \\"Online\\",\\n    \\"PaStatus\\": \\"Enabled\\",\\n    \\"IaStatus\\": \\"Disabled\\",\\n    \\"DlpStatus\\": \\"Unauthorized\\",\\n    \\"NacStatus\\": \\"Unprovisioned\\",\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"UpdateTime\\": \\"2023-08-24 19:04:42\\",\\n    \\"HistoryUsers\\": [\\n      {\\n        \\"Username\\": \\"张女士\\",\\n        \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询用户终端设备详情',
        ],
        'DeleteUserDevices' => [
            'summary' => '批量删除用户终端设备。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '197382',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DeviceTags',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '终端设备ID集合。最多100条。',
                        'type' => 'array',
                        'items' => [
                            'description' => '终端设备ID。取值：'."\n"
                                .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                                .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****',
                        ],
                        'required' => false,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D'."\n",
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\\\n\\"\\n}","type":"json"}]',
            'title' => '批量删除用户终端设备',
            'description' => '单次最多删除100台设备。每台设备的设备状态必须是离线或长期离线状态，若传入的终端设备ID集合中部分设备状态不符，则仅删除状态符合的设备，接口仍返回成功。',
        ],
        'ListSoftwareForUserDevice' => [
            'summary' => '查询当前阿里云账号下用户终端设备安装的软件列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'DeviceTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端设备ID。取值：'."\n"
                            .'- [GetUserDevice](~~GetUserDevice~~)：查询用户终端设备详情。'."\n"
                            .'- [ListUserDevices](~~ListUserDevices~~)：批量查询用户终端设备。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '36efa42d-2c32-c4dc-e3fc-8541e33a****'."\n",
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'TotalNum' => [
                                'description' => '终端设备安装的软件总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'Software' => [
                                'description' => '终端设备安装的软件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '终端设备安装的软件。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '软件名称。',
                                            'type' => 'string',
                                            'example' => '钉钉',
                                        ],
                                        'Inc' => [
                                            'description' => '软件出品公司。',
                                            'type' => 'string',
                                            'example' => 'Alibaba (China) Network Technology Co.,Ltd.',
                                        ],
                                        'Versions' => [
                                            'description' => '软件版本集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '软件版本。',
                                                'type' => 'string',
                                                'example' => '7.0.40',
                                            ],
                                        ],
                                        'InstallTime' => [
                                            'description' => '软件安装时间。',
                                            'type' => 'string',
                                            'example' => '2023-08-18 02:43:02',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"TotalNum\\": 1,\\n  \\"Software\\": [\\n    {\\n      \\"Name\\": \\"钉钉\\",\\n      \\"Inc\\": \\"Alibaba (China) Network Technology Co.,Ltd.\\",\\n      \\"Versions\\": [\\n        \\"7.0.40\\"\\n      ],\\n      \\"InstallTime\\": \\"2023-08-18 02:43:02\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户终端设备安装软件',
        ],
        'ListRegistrationPolicies' => [
            'summary' => '查询当前阿里云账号下设备注册策略列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'registration_policy_name',
                    ],
                ],
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。取值来源：'."\n"
                            .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                            .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'usergroup-6f1ef2fc56b6****',
                    ],
                ],
                [
                    'name' => 'CompanyLimitType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '公司设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitAll',
                    ],
                ],
                [
                    'name' => 'PersonalLimitType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '个人设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitDiff',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备注册策略状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'MatchMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '策略匹配目标类型。取值：'."\n"
                            .'- **UserGroupAll**：关联全体用户。'."\n"
                            .'- **UserGroupNormal**：关联部分用户组。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'UserGroupNormal' => '关联部分用户组',
                            'UserGroupAll' => '关联全体用户',
                        ],
                        'example' => 'UserGroupAll',
                    ],
                ],
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略ID集合。最多可输入100个设备注册策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略ID。取值来源：'."\n"
                                .'- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。'."\n"
                                .'- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。'."\n"
                                .'- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。'."\n"
                                .'- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'reg-policy-63b2f1844b86****',
                        ],
                        'required' => false,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7A8FE38A-E29C-5678-B84A-FEDBCB83552F',
                            ],
                            'TotalNum' => [
                                'description' => '设备注册策略总数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Policies' => [
                                'description' => '设备注册策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备注册策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '设备注册策略名称。',
                                            'type' => 'string',
                                            'example' => 'registration_policy_name',
                                        ],
                                        'PolicyId' => [
                                            'description' => '设备注册策略ID。',
                                            'type' => 'string',
                                            'example' => 'reg-policy-dcbfd33cb004****',
                                        ],
                                        'Description' => [
                                            'description' => '设备注册策略描述。',
                                            'type' => 'string',
                                            'example' => '这是一条设备注册策略。',
                                        ],
                                        'Priority' => [
                                            'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'Whitelist' => [
                                            'description' => '设备注册策略白名单用户列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备注册策略白名单用户。',
                                                'type' => 'string',
                                                'example' => '王先生',
                                            ],
                                        ],
                                        'Status' => [
                                            'description' => '设备注册策略状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'MatchMode' => [
                                            'description' => '策略匹配目标类型。取值：'."\n"
                                                .'- **UserGroupAll**：关联全体用户。'."\n"
                                                .'- **UserGroupNormal**：关联部分用户组。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'UserGroupNormal' => '关联部分用户组',
                                                'UserGroupAll' => '关联全体用户',
                                            ],
                                            'example' => 'UserGroupNormal',
                                        ],
                                        'UserGroupIds' => [
                                            'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                                                'type' => 'string',
                                                'example' => 'usergroup-086bcf2d650b****',
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '设备注册策略创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-05-16 17:18:46',
                                        ],
                                        'LimitDetail' => [
                                            'description' => '设备注册策略限制详情列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备注册策略限制详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DeviceBelong' => [
                                                        'description' => '设备归属。取值：'."\n"
                                                            .'- **Company**：公司设备。'."\n"
                                                            .'- **Personal**：个人设备。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Company' => '公司设备',
                                                            'Personal' => '个人设备',
                                                        ],
                                                        'example' => 'Company',
                                                    ],
                                                    'LimitType' => [
                                                        'description' => '设备注册限制类型。取值：'."\n"
                                                            .'- **Unlimited**：不限制。'."\n"
                                                            .'- **LimitAll**：按照总数限制。'."\n"
                                                            .'- **LimitDiff**：按照终端分类限制。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'LimitAll' => '按照总数限制',
                                                            'LimitDiff' => '按照终端分类限制',
                                                            'Unlimited' => '不限制',
                                                        ],
                                                        'example' => 'LimitAll',
                                                    ],
                                                    'LimitCount' => [
                                                        'description' => '设备注册限制数量。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'All' => [
                                                                'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '3',
                                                            ],
                                                            'PC' => [
                                                                'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '0',
                                                            ],
                                                            'Mobile' => [
                                                                'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7A8FE38A-E29C-5678-B84A-FEDBCB83552F\\",\\n  \\"TotalNum\\": \\"1\\",\\n  \\"Policies\\": [\\n    {\\n      \\"Name\\": \\"registration_policy_name\\",\\n      \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n      \\"Description\\": \\"这是一条设备注册策略。\\",\\n      \\"Priority\\": 1,\\n      \\"Whitelist\\": [\\n        \\"王先生\\"\\n      ],\\n      \\"Status\\": \\"Enabled\\",\\n      \\"MatchMode\\": \\"UserGroupNormal\\",\\n      \\"UserGroupIds\\": [\\n        \\"usergroup-086bcf2d650b****\\"\\n      ],\\n      \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n      \\"LimitDetail\\": [\\n        {\\n          \\"DeviceBelong\\": \\"Company\\",\\n          \\"LimitType\\": \\"LimitAll\\",\\n          \\"LimitCount\\": {\\n            \\"All\\": 3,\\n            \\"PC\\": 0,\\n            \\"Mobile\\": 0\\n          }\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询设备注册策略',
            'responseParamsDescription' => '策略列表按照优先级从高至低、创建时间由晚至早的顺序返回。',
        ],
        'ListUserGroupsForRegistrationPolicy' => [
            'summary' => '查询当前阿里云账号下设备注册策略相关用户组。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略ID集合。最多可输入100个设备注册策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略ID。取值来源：'."\n"
                                .'- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。'."\n"
                                .'- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。'."\n"
                                .'- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。'."\n"
                                .'- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'reg-policy-63b2f1844b86****'."\n",
                        ],
                        'required' => true,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D89009C7-54C6-51B6-BAE7-3F373920C6BF',
                            ],
                            'Policies' => [
                                'description' => '设备注册策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备注册策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '设备注册策略ID。',
                                            'type' => 'string',
                                            'example' => 'reg-policy-f25c9e5872e5****',
                                        ],
                                        'UserGroups' => [
                                            'description' => '设备注册策略的用户组集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备注册策略的用户组。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserGroupId' => [
                                                        'description' => '用户组ID。',
                                                        'type' => 'string',
                                                        'example' => 'usergroup-6f1ef2fc56b6****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '用户组名称。',
                                                        'type' => 'string',
                                                        'example' => 'user_group_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '用户组描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被设备注册策略引用的用户组。',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '用户组创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-27 18:10:25',
                                                    ],
                                                    'Attributes' => [
                                                        'description' => '用户组属性集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '用户组属性。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UserGroupType' => [
                                                                    'description' => '用户组的类型。取值：'."\n"
                                                                        .'- **username**：用户名。'."\n"
                                                                        .'- **department**：部门。'."\n"
                                                                        .'- **email**：邮箱。'."\n"
                                                                        .'- **telephone**：手机。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'telephone' => '手机',
                                                                        'department' => '部门',
                                                                        'email' => '邮箱',
                                                                        'username' => '用户名',
                                                                    ],
                                                                    'example' => 'department',
                                                                ],
                                                                'Relation' => [
                                                                    'description' => '用户组的关系。取值：'."\n"
                                                                        .'- **Equal**：等于。'."\n"
                                                                        .'- **Unequal**：不等于。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'Unequal' => '不等于',
                                                                        'Equal' => '等于',
                                                                    ],
                                                                    'example' => 'Equal',
                                                                ],
                                                                'Value' => [
                                                                    'description' => '用户组属性的值。'."\n"
                                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                                    'type' => 'string',
                                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                                ],
                                                                'IdpId' => [
                                                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '12',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D89009C7-54C6-51B6-BAE7-3F373920C6BF\\",\\n  \\"Policies\\": [\\n    {\\n      \\"PolicyId\\": \\"reg-policy-f25c9e5872e5****\\",\\n      \\"UserGroups\\": [\\n        {\\n          \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n          \\"Name\\": \\"user_group_name\\",\\n          \\"Description\\": \\"这是一条被设备注册策略引用的用户组。\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\",\\n          \\"Attributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询设备注册策略的用户组',
        ],
        'ListRegistrationPoliciesForUserGroup' => [
            'summary' => '查询当前阿里云账号下用户组相关的设备注册策略。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户组ID集合。最多可输入100个用户组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-6f1ef2fc56b6****',
                        ],
                        'required' => true,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'UserGroups' => [
                                'description' => '用户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserGroupId' => [
                                            'description' => '用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-6f1ef2fc56b6****',
                                        ],
                                        'Policies' => [
                                            'description' => '设备注册策略集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '设备注册策略。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'description' => '设备注册策略名称。',
                                                        'type' => 'string',
                                                        'example' => 'registration_policy_name',
                                                    ],
                                                    'PolicyId' => [
                                                        'description' => '设备注册策略ID。',
                                                        'type' => 'string',
                                                        'example' => 'reg-policy-dcbfd33cb004****',
                                                    ],
                                                    'Description' => [
                                                        'description' => '设备注册策略描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条设备注册策略。',
                                                    ],
                                                    'Priority' => [
                                                        'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1',
                                                    ],
                                                    'Status' => [
                                                        'description' => '设备注册策略状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'Whitelist' => [
                                                        'description' => '设备注册策略白名单用户列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '设备注册策略白名单用户。',
                                                            'type' => 'string',
                                                            'example' => '王先生',
                                                        ],
                                                    ],
                                                    'MatchMode' => [
                                                        'description' => '策略匹配目标类型。取值：'."\n"
                                                            .'- **UserGroupAll**：关联全体用户。'."\n"
                                                            .'- **UserGroupNormal**：关联部分用户组。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'UserGroupNormal' => '关联部分用户组',
                                                            'UserGroupAll' => '关联全体用户',
                                                        ],
                                                        'example' => 'UserGroupNormal',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '设备注册策略创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2023-05-16 17:18:46',
                                                    ],
                                                    'LimitDetail' => [
                                                        'description' => '设备注册策略限制详情列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '设备注册策略限制详情。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'DeviceBelong' => [
                                                                    'description' => '设备归属。取值：'."\n"
                                                                        .'- **Company**：公司设备。'."\n"
                                                                        .'- **Personal**：个人设备。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'Company' => '公司设备',
                                                                        'Personal' => '个人设备',
                                                                    ],
                                                                    'example' => 'Company',
                                                                ],
                                                                'LimitType' => [
                                                                    'description' => '设备注册限制类型。取值：'."\n"
                                                                        .'- **Unlimited**：不限制。'."\n"
                                                                        .'- **LimitAll**：按照总数限制。'."\n"
                                                                        .'- **LimitDiff**：按照终端分类限制。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'LimitAll' => '按照总数限制',
                                                                        'LimitDiff' => '按照终端分类限制',
                                                                        'Unlimited' => '不限制',
                                                                    ],
                                                                    'example' => 'LimitAll',
                                                                ],
                                                                'LimitCount' => [
                                                                    'description' => '设备注册限制数量。',
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'All' => [
                                                                            'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                                                            'type' => 'string',
                                                                            'example' => '3',
                                                                        ],
                                                                        'PC' => [
                                                                            'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                                            'type' => 'string',
                                                                            'example' => '0',
                                                                        ],
                                                                        'Mobile' => [
                                                                            'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                                            'type' => 'string',
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
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Policies\\": [\\n        {\\n          \\"Name\\": \\"registration_policy_name\\",\\n          \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n          \\"Description\\": \\"这是一条设备注册策略。\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"Whitelist\\": [\\n            \\"王先生\\"\\n          ],\\n          \\"MatchMode\\": \\"UserGroupNormal\\",\\n          \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n          \\"LimitDetail\\": [\\n            {\\n              \\"DeviceBelong\\": \\"Company\\",\\n              \\"LimitType\\": \\"LimitAll\\",\\n              \\"LimitCount\\": {\\n                \\"All\\": \\"3\\",\\n                \\"PC\\": \\"0\\",\\n                \\"Mobile\\": \\"0\\"\\n              }\\n            }\\n          ]\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户组的设备注册策略',
        ],
        'GetRegistrationPolicy' => [
            'summary' => '查询当前阿里云账号下设备注册策略详情。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备注册策略ID。取值来源：'."\n"
                            .'- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。'."\n"
                            .'- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。'."\n"
                            .'- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。'."\n"
                            .'- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reg-policy-dcbfd33cb004****'."\n",
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '47363C2B-1AAA-5954-8847-0E50FCC54117',
                            ],
                            'Name' => [
                                'description' => '设备注册策略名称。',
                                'type' => 'string',
                                'example' => 'registration_policy_name',
                            ],
                            'PolicyId' => [
                                'description' => '设备注册策略ID。',
                                'type' => 'string',
                                'example' => 'reg-policy-dcbfd33cb004****',
                            ],
                            'Description' => [
                                'description' => '设备注册策略描述。',
                                'type' => 'string',
                                'example' => '这是一条设备注册策略。',
                            ],
                            'Priority' => [
                                'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '99',
                            ],
                            'Whitelist' => [
                                'description' => '设备注册策略白名单用户列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备注册策略白名单用户。',
                                    'type' => 'string',
                                    'example' => '王先生',
                                ],
                            ],
                            'Status' => [
                                'description' => '设备注册策略状态。取值：'."\n"
                                    .'- **Enabled**：开启。'."\n"
                                    .'- **Disabled**：关闭。',
                                'type' => 'string',
                                'example' => 'Enabled',
                            ],
                            'MatchMode' => [
                                'description' => '策略匹配目标类型。取值：'."\n"
                                    .'- **UserGroupAll**：关联全体用户。'."\n"
                                    .'- **UserGroupNormal**：关联部分用户组。',
                                'type' => 'string',
                                'example' => 'UserGroupAll',
                            ],
                            'UserGroupIds' => [
                                'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                                    'type' => 'string',
                                    'example' => 'usergroup-086bcf2d650b****',
                                ],
                            ],
                            'CreateTime' => [
                                'description' => '设备注册策略创建时间。',
                                'type' => 'string',
                                'example' => '2023-05-16 17:18:46',
                            ],
                            'LimitDetail' => [
                                'description' => '设备注册策略限制详情列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '设备注册策略限制详情列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceBelong' => [
                                            'description' => '设备归属。取值：'."\n"
                                                .'- **Company**：公司设备。'."\n"
                                                .'- **Personal**：个人设备。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Company' => '公司设备',
                                                'Personal' => '个人设备',
                                            ],
                                            'example' => 'Personal',
                                        ],
                                        'LimitType' => [
                                            'description' => '设备注册限制类型。取值：'."\n"
                                                .'- **Unlimited**：不限制。'."\n"
                                                .'- **LimitAll**：按照总数限制。'."\n"
                                                .'- **LimitDiff**：按照终端分类限制。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'LimitAll' => '按照总数限制',
                                                'LimitDiff' => '按照终端分类限制',
                                                'Unlimited' => '不限制',
                                            ],
                                            'example' => 'LimitDiff',
                                        ],
                                        'LimitCount' => [
                                            'description' => '设备注册限制数量。',
                                            'type' => 'object',
                                            'properties' => [
                                                'All' => [
                                                    'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'PC' => [
                                                    'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'Mobile' => [
                                                    'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
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
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47363C2B-1AAA-5954-8847-0E50FCC54117\\",\\n  \\"Name\\": \\"registration_policy_name\\",\\n  \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n  \\"Description\\": \\"这是一条设备注册策略。\\",\\n  \\"Priority\\": 99,\\n  \\"Whitelist\\": [\\n    \\"王先生\\"\\n  ],\\n  \\"Status\\": \\"Enabled\\",\\n  \\"MatchMode\\": \\"UserGroupAll\\",\\n  \\"UserGroupIds\\": [\\n    \\"usergroup-086bcf2d650b****\\"\\n  ],\\n  \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n  \\"LimitDetail\\": [\\n    {\\n      \\"DeviceBelong\\": \\"Personal\\",\\n      \\"LimitType\\": \\"LimitDiff\\",\\n      \\"LimitCount\\": {\\n        \\"All\\": 0,\\n        \\"PC\\": 2,\\n        \\"Mobile\\": 2\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询设备注册策略详情',
        ],
        'DeleteRegistrationPolicies' => [
            'summary' => '批量删除当前阿里云账号下设备注册策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略ID。取值来源：'."\n"
                                .'- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。'."\n"
                                .'- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。'."\n"
                                .'- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。'."\n"
                                .'- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'reg-policy-63b2f1844b86****'."\n",
                        ],
                        'required' => true,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\"\\n}","type":"json"}]',
            'title' => '批量删除设备注册策略',
        ],
        'UpdateRegistrationPolicy' => [
            'summary' => '修改当前阿里云账号下设备注册策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'registration_policy_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条设备注册策略',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Whitelist',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略白名单用户列表。最多可输入1000个用户名。必传。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略白名单用户。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '王先生',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'CompanyLimitType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '公司设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitAll',
                    ],
                ],
                [
                    'name' => 'CompanyLimitCount',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '公司设备注册限制数量。',
                        'type' => 'object',
                        'properties' => [
                            'All' => [
                                'description' => '公司设备注册限制总数。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PC' => [
                                'description' => '公司设备注册限制PC端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Mobile' => [
                                'description' => '公司设备注册限制移动端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PersonalLimitType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '个人设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitDiff',
                    ],
                ],
                [
                    'name' => 'PersonalLimitCount',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '个人设备注册限制数量。',
                        'type' => 'object',
                        'properties' => [
                            'All' => [
                                'description' => '个人设备注册限制总数。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'PC' => [
                                'description' => '个人设备注册限制PC端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'Mobile' => [
                                'description' => '个人设备注册限制移动端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MatchMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略匹配目标类型。取值：'."\n"
                            .'- **UserGroupAll**：关联全体用户。'."\n"
                            .'- **UserGroupNormal**：关联部分用户组。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'UserGroupNormal' => '关联部分用户组',
                            'UserGroupAll' => '关联全体用户',
                        ],
                        'example' => 'UserGroupNormal',
                    ],
                ],
                [
                    'name' => 'UserGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略的用户组ID集合，当策略匹配目标类型为**UserGroupNormal**时，必填。单个策略的用户组最大支持100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-086bcf2d650b****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略ID。取值来源：'."\n"
                            .'- [ListRegistrationPolicies](~~ListRegistrationPolicies~~)：批量查询设备注册策略。'."\n"
                            .'- [GetRegistrationPolicy](~~GetRegistrationPolicy~~)：查询设备注册策略详情。'."\n"
                            .'- [CreateRegistrationPolicy](~~CreateRegistrationPolicy~~)：创建设备注册策略。'."\n"
                            .'- [UpdateRegistrationPolicy](~~UpdateRegistrationPolicy~~)：更新设备注册策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'reg-policy-63b2f1844b86****',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '27064ECA-0936-59F3-8A98-EC821E5BD08F',
                            ],
                            'Policy' => [
                                'description' => '设备注册策略。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '设备注册策略名称。',
                                        'type' => 'string',
                                        'example' => 'registration_policy_name',
                                    ],
                                    'PolicyId' => [
                                        'description' => '设备注册策略ID。',
                                        'type' => 'string',
                                        'example' => '设备注册策略ID',
                                    ],
                                    'Priority' => [
                                        'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Description' => [
                                        'description' => '设备注册策略描述。',
                                        'type' => 'string',
                                        'example' => '这是一条设备注册策略',
                                    ],
                                    'Whitelist' => [
                                        'description' => '设备注册策略白名单用户列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略白名单用户。',
                                            'type' => 'string',
                                            'example' => '韩梅梅',
                                        ],
                                    ],
                                    'Status' => [
                                        'description' => '设备注册策略状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'MatchMode' => [
                                        'description' => '策略匹配目标类型。取值：'."\n"
                                            .'- **UserGroupAll**：关联全体用户。'."\n"
                                            .'- **UserGroupNormal**：关联部分用户组。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'UserGroupNormal' => '关联部分用户组',
                                            'UserGroupAll' => '关联全体用户',
                                        ],
                                        'example' => 'UserGroupNormal',
                                    ],
                                    'UserGroupIds' => [
                                        'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-086bcf2d650b****',
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '设备注册策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-05-16 17:18:46',
                                    ],
                                    'LimitDetail' => [
                                        'description' => '设备注册策略限制详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略限制详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceBelong' => [
                                                    'description' => '设备归属。取值：'."\n"
                                                        .'- **Company**：公司设备。'."\n"
                                                        .'- **Personal**：个人设备。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Company' => '公司设备',
                                                        'Personal' => '个人设备',
                                                    ],
                                                    'example' => 'Company',
                                                ],
                                                'LimitType' => [
                                                    'description' => '设备注册限制类型。取值：'."\n"
                                                        .'- **Unlimited**：不限制。'."\n"
                                                        .'- **LimitAll**：按照总数限制。'."\n"
                                                        .'- **LimitDiff**：按照终端分类限制。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'LimitAll' => '按照总数限制',
                                                        'LimitDiff' => '按照终端分类限制',
                                                        'Unlimited' => '不限制',
                                                    ],
                                                    'example' => 'LimitAll',
                                                ],
                                                'LimitCount' => [
                                                    'description' => '设备注册限制数量。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'All' => [
                                                            'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '1',
                                                        ],
                                                        'PC' => [
                                                            'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'Mobile' => [
                                                            'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
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
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"27064ECA-0936-59F3-8A98-EC821E5BD08F\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"registration_policy_name\\",\\n    \\"PolicyId\\": \\"设备注册策略ID\\",\\n    \\"Priority\\": \\"1\\",\\n    \\"Description\\": \\"这是一条设备注册策略\\",\\n    \\"Whitelist\\": [\\n      \\"韩梅梅\\"\\n    ],\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MatchMode\\": \\"UserGroupNormal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-086bcf2d650b****\\"\\n    ],\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"LimitDetail\\": [\\n      {\\n        \\"DeviceBelong\\": \\"Company\\",\\n        \\"LimitType\\": \\"LimitAll\\",\\n        \\"LimitCount\\": {\\n          \\"All\\": 1,\\n          \\"PC\\": 0,\\n          \\"Mobile\\": 0\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '修改设备注册策略',
        ],
        'CreateRegistrationPolicy' => [
            'summary' => '创建当前阿里云账号下设备注册策略。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'registration_policy_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条设备注册策略',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Whitelist',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略白名单用户列表。最多可输入1000个用户名。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略白名单用户。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '王先生',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '99',
                    ],
                ],
                [
                    'name' => 'CompanyLimitType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '公司设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitAll',
                    ],
                ],
                [
                    'name' => 'CompanyLimitCount',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '公司设备注册限制数量。',
                        'type' => 'object',
                        'properties' => [
                            'All' => [
                                'description' => '公司设备注册限制总数。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'PC' => [
                                'description' => '公司设备注册限制PC端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Mobile' => [
                                'description' => '公司设备注册限制移动端登录数量。取值范围为0～100，默认为0。当公司设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PersonalLimitType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '个人设备注册限制类型。取值：'."\n"
                            .'- **Unlimited**：不限制。'."\n"
                            .'- **LimitAll**：按照总数限制。'."\n"
                            .'- **LimitDiff**：按照终端分类限制。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'LimitAll' => '按照总数限制',
                            'LimitDiff' => '按照终端分类限制',
                            'Unlimited' => '不限制',
                        ],
                        'example' => 'LimitDiff',
                    ],
                ],
                [
                    'name' => 'PersonalLimitCount',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '个人设备注册限制数量。',
                        'type' => 'object',
                        'properties' => [
                            'All' => [
                                'description' => '个人设备注册限制总数。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'PC' => [
                                'description' => '个人设备注册限制PC端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                            'Mobile' => [
                                'description' => '个人设备注册限制移动端登录数量。取值范围为0～100，默认为0。当个人设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MatchMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '策略匹配目标类型。取值：'."\n"
                            .'- **UserGroupAll**：关联全体用户。'."\n"
                            .'- **UserGroupNormal**：关联部分用户组。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'UserGroupNormal' => '关联部分用户组',
                            'UserGroupAll' => '关联全体用户',
                        ],
                        'example' => 'UserGroupAll',
                    ],
                ],
                [
                    'name' => 'UserGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '设备注册策略的用户组ID集合，当策略匹配目标类型为**UserGroupNormal**时必填。单个策略的用户组最大支持100个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-086bcf2d650b****',
                        ],
                        'required' => false,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE',
                            ],
                            'Policy' => [
                                'description' => '设备注册策略。',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '设备注册策略名称。',
                                        'type' => 'string',
                                        'example' => 'registration_policy_name',
                                    ],
                                    'PolicyId' => [
                                        'description' => '设备注册策略ID。',
                                        'type' => 'string',
                                        'example' => 'reg-policy-dcbfd33cb004****',
                                    ],
                                    'Priority' => [
                                        'description' => '设备注册策略优先级。数字0表示优先级最高，数字99表示优先级最低。',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Description' => [
                                        'description' => '设备注册策略描述。',
                                        'type' => 'string',
                                        'example' => '这是一条设备注册策略',
                                    ],
                                    'Whitelist' => [
                                        'description' => '设备注册策略白名单用户列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略白名单用户。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                    ],
                                    'Status' => [
                                        'description' => '设备注册策略状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'MatchMode' => [
                                        'description' => '策略匹配目标类型。取值：'."\n"
                                            .'- **UserGroupAll**：关联全体用户。'."\n"
                                            .'- **UserGroupNormal**：关联部分用户组。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'UserGroupNormal' => '关联部分用户组',
                                            'UserGroupAll' => '关联全体用户',
                                        ],
                                        'example' => 'UserGroupNormal',
                                    ],
                                    'UserGroupIds' => [
                                        'description' => '设备注册策略，用户组ID集合。当策略匹配目标类型为**UserGroupNormal**时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略，策略匹配目标类型为**UserGroupNormal**时的用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-086bcf2d650b****',
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '设备注册策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-05-16 17:18:46',
                                    ],
                                    'LimitDetail' => [
                                        'description' => '设备注册策略限制详情列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '设备注册策略限制详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DeviceBelong' => [
                                                    'description' => '设备归属。取值：'."\n"
                                                        .'- **Company**：公司设备。'."\n"
                                                        .'- **Personal**：个人设备。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Company' => '公司设备',
                                                        'Personal' => '个人设备',
                                                    ],
                                                    'example' => 'Company',
                                                ],
                                                'LimitType' => [
                                                    'description' => '设备注册限制类型。取值：'."\n"
                                                        .'- **Unlimited**：不限制。'."\n"
                                                        .'- **LimitAll**：按照总数限制。'."\n"
                                                        .'- **LimitDiff**：按照终端分类限制。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'LimitAll' => '按照总数限制',
                                                        'LimitDiff' => '按照终端分类限制',
                                                        'Unlimited' => '不限制',
                                                    ],
                                                    'example' => 'LimitDiff',
                                                ],
                                                'LimitCount' => [
                                                    'description' => '设备注册限制数量。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'All' => [
                                                            'description' => '设备注册限制总数。当设备注册限制类型为**LimitAll**时，该字段的值有效。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '0',
                                                        ],
                                                        'PC' => [
                                                            'description' => '设备注册限制PC端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '2',
                                                        ],
                                                        'Mobile' => [
                                                            'description' => '设备注册限制移动端登录数量。当设备注册限制类型为**LimitDiff**时，该字段的值有效。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '3',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE\\",\\n  \\"Policy\\": {\\n    \\"Name\\": \\"registration_policy_name\\",\\n    \\"PolicyId\\": \\"reg-policy-dcbfd33cb004****\\",\\n    \\"Priority\\": \\"1\\",\\n    \\"Description\\": \\"这是一条设备注册策略\\",\\n    \\"Whitelist\\": [\\n      \\"王先生\\"\\n    ],\\n    \\"Status\\": \\"Enabled\\",\\n    \\"MatchMode\\": \\"UserGroupNormal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-086bcf2d650b****\\"\\n    ],\\n    \\"CreateTime\\": \\"2023-05-16 17:18:46\\",\\n    \\"LimitDetail\\": [\\n      {\\n        \\"DeviceBelong\\": \\"Company\\",\\n        \\"LimitType\\": \\"LimitDiff\\",\\n        \\"LimitCount\\": {\\n          \\"All\\": 0,\\n          \\"PC\\": 2,\\n          \\"Mobile\\": 3\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '创建设备注册策略',
        ],
        'ListUserGroups' => [
            'summary' => '批量查询当前阿里云账号下所有用户组的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'UserGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户组ID集合。最多可输入100个用户组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-6f1ef2fc56b6****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user_group_name',
                    ],
                ],
                [
                    'name' => 'AttributeValue',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组属性的值。长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'username',
                    ],
                ],
                [
                    'name' => 'PAPolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-policy-54a7838a48bf****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4AB972E2-D702-5464-B132-B1911498B8BF',
                            ],
                            'TotalNum' => [
                                'description' => '用户组的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'UserGroups' => [
                                'description' => '用户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserGroupId' => [
                                            'description' => '用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-6f1ef2fc56b6****',
                                        ],
                                        'Name' => [
                                            'description' => '用户组名称。',
                                            'type' => 'string',
                                            'example' => 'user_group_name',
                                        ],
                                        'Description' => [
                                            'description' => '用户组描述。',
                                            'type' => 'string',
                                            'example' => '这是一条用户组',
                                        ],
                                        'Attributes' => [
                                            'description' => '用户组属性集合。多个用户组属性之间是或的关系，按照合集生效。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '用户组属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserGroupType' => [
                                                        'description' => '用户组的类型。取值：'."\n"
                                                            .'- **username**：用户名。'."\n"
                                                            .'- **department**：部门。'."\n"
                                                            .'- **email**：邮箱。'."\n"
                                                            .'- **telephone**：手机。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'telephone' => '手机',
                                                            'department' => '部门',
                                                            'email' => '邮箱',
                                                            'username' => '用户名',
                                                        ],
                                                        'example' => 'department',
                                                    ],
                                                    'Relation' => [
                                                        'description' => '用户组的关系。取值：'."\n"
                                                            .'- **Equal**：等于。'."\n"
                                                            .'- **Unequal**：不等于。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Unequal' => '不等于',
                                                            'Equal' => '等于',
                                                        ],
                                                        'example' => 'Equal',
                                                    ],
                                                    'Value' => [
                                                        'description' => '用户组属性的值。'."\n"
                                                            .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                            .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                            .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                            .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                        'type' => 'string',
                                                        'example' => 'OU=部门1,OU=SASE钉钉',
                                                    ],
                                                    'IdpId' => [
                                                        'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '12',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => '用户组创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-10 11:39:22',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4AB972E2-D702-5464-B132-B1911498B8BF\\",\\n  \\"TotalNum\\": 1,\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Name\\": \\"user_group_name\\",\\n      \\"Description\\": \\"这是一条用户组\\",\\n      \\"Attributes\\": [\\n        {\\n          \\"UserGroupType\\": \\"department\\",\\n          \\"Relation\\": \\"Equal\\",\\n          \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n          \\"IdpId\\": 12\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2022-10-10 11:39:22\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户组',
        ],
        'ListPolicesForUserGroup' => [
            'summary' => '批量查询当前阿里云账号下用户组的策略。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserGroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户组ID集合。最多可输入100个用户组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-6f1ef2fc56b6****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5F04DFBD-3F48-5F70-AE72-474026670128',
                            ],
                            'UserGroups' => [
                                'description' => '用户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserGroupId' => [
                                            'description' => '用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-6f1ef2fc56b6****',
                                        ],
                                        'Polices' => [
                                            'description' => '策略集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '策略。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PolicyId' => [
                                                        'description' => '策略ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-policy-ce2bf7236fab****',
                                                    ],
                                                    'PolicyType' => [
                                                        'description' => '策略类型。取值：'."\n"
                                                            .'- **PrivateAccess**：内网访问。'."\n"
                                                            .'- **URLFilter：URL**防护。'."\n"
                                                            .'- **AppAccessControl**：应用管控。'."\n"
                                                            .'- **DLP**：数据防泄漏。'."\n"
                                                            .'- **NAC**：网络准入。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'NAC' => '网络准入',
                                                            'URLFilter' => 'URL防护',
                                                            'DLP' => '数据防泄漏',
                                                            'PrivateAccess' => '内网访问',
                                                            'AppAccessControl' => '应用管控',
                                                        ],
                                                        'example' => 'PrivateAccess',
                                                    ],
                                                    'Name' => [
                                                        'description' => '策略名称。',
                                                        'type' => 'string',
                                                        'example' => 'private_access_policy_name',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5F04DFBD-3F48-5F70-AE72-474026670128\\",\\n  \\"UserGroups\\": [\\n    {\\n      \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n      \\"Polices\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-ce2bf7236fab****\\",\\n          \\"PolicyType\\": \\"PrivateAccess\\",\\n          \\"Name\\": \\"private_access_policy_name\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户组的策略',
        ],
        'GetUserGroup' => [
            'summary' => '查询当前阿里云账号下的用户组详情。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。取值来源：'."\n"
                            .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                            .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'usergroup-6f1ef2fc56b6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '1310DBC7-7E1F-55D3-B4B4-E4BE912517FB',
                            ],
                            'UserGroup' => [
                                'description' => '用户组。',
                                'type' => 'object',
                                'properties' => [
                                    'UserGroupId' => [
                                        'description' => '用户组ID。',
                                        'type' => 'string',
                                        'example' => 'usergroup-6f1ef2fc56b6****',
                                    ],
                                    'Name' => [
                                        'description' => '用户组名称。',
                                        'type' => 'string',
                                        'example' => 'user_group_name',
                                    ],
                                    'Description' => [
                                        'description' => '用户组描述。',
                                        'type' => 'string',
                                        'example' => '这是一条用户组'."\n",
                                    ],
                                    'Attributes' => [
                                        'description' => '用户组属性集合。多个用户组属性之间是或的关系，按照合集生效。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '用户组属性。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserGroupType' => [
                                                    'description' => '用户组的类型。取值：'."\n"
                                                        .'- **username**：用户名。'."\n"
                                                        .'- **department**：部门。'."\n"
                                                        .'- **email**：邮箱。'."\n"
                                                        .'- **telephone**：手机。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'telephone' => '手机',
                                                        'department' => '部门',
                                                        'email' => '邮箱',
                                                        'username' => '用户名',
                                                    ],
                                                    'example' => 'department',
                                                ],
                                                'Relation' => [
                                                    'description' => '用户组的关系。取值：'."\n"
                                                        .'- **Equal**：等于。'."\n"
                                                        .'- **Unequal**：不等于。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Unequal' => '不等于',
                                                        'Equal' => '等于',
                                                    ],
                                                    'example' => 'Equal',
                                                ],
                                                'Value' => [
                                                    'description' => '用户组属性的值。'."\n"
                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                    'type' => 'string',
                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                ],
                                                'IdpId' => [
                                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '用户组创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-10-10 11:39:22',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'UserGroup.NotFound',
                        'errorMessage' => 'The userGroup is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1310DBC7-7E1F-55D3-B4B4-E4BE912517FB\\",\\n  \\"UserGroup\\": {\\n    \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n    \\"Name\\": \\"user_group_name\\",\\n    \\"Description\\": \\"这是一条用户组\\\\n\\",\\n    \\"Attributes\\": [\\n      {\\n        \\"UserGroupType\\": \\"department\\",\\n        \\"Relation\\": \\"Equal\\",\\n        \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n        \\"IdpId\\": 12\\n      }\\n    ],\\n    \\"CreateTime\\": \\"2022-10-10 11:39:22\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询用户组详情',
        ],
        'CreateUserGroup' => [
            'summary' => '创建当前阿里云账号下用户组。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_group_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条用户组',
                    ],
                ],
                [
                    'name' => 'Attributes',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户组属性集合。最大数量3000个。多个用户组属性之间是或的关系，按照合集生效。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户组属性。',
                            'type' => 'object',
                            'properties' => [
                                'UserGroupType' => [
                                    'description' => '用户组的类型。取值：'."\n"
                                        .'- **username**：用户名。'."\n"
                                        .'- **department**：部门。'."\n"
                                        .'- **email**：邮箱。'."\n"
                                        .'- **telephone**：手机。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'telephone' => '手机',
                                        'department' => '部门',
                                        'email' => '邮箱',
                                        'username' => '用户名',
                                    ],
                                    'example' => 'department',
                                ],
                                'Relation' => [
                                    'description' => '用户组的关系。取值：'."\n"
                                        .'- **Equal**：等于。'."\n"
                                        .'- **Unequal**：不等于。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'Unequal' => '不等于',
                                        'Equal' => '等于',
                                    ],
                                    'example' => 'Equal',
                                ],
                                'Value' => [
                                    'description' => '用户组属性的值。'."\n"
                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。'."\n"
                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                ],
                                'IdpId' => [
                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '12',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'UserGroupId' => [
                                'description' => '用户组ID。',
                                'type' => 'string',
                                'example' => 'usergroup-6f1ef2fc56b6****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'UserGroup.NameExisted',
                        'errorMessage' => 'The userGroup name is existed.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\"\\n}","type":"json"}]',
            'title' => '创建用户组',
            'description' => '默认最多可创建500个用户组。',
        ],
        'DeleteUserGroup' => [
            'summary' => '删除当前阿里云账号下用户组。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组ID。取值来源：'."\n"
                            .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                            .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'usergroup-6f1ef2fc56b6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'UserGroup.NotFound',
                        'errorMessage' => 'The userGroup is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'UserGroup.UsedByPolicy',
                        'errorMessage' => 'The userGroup is used by policy.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\"\\n}","type":"json"}]',
            'title' => '删除用户组',
            'description' => '当存在策略引用时，不允许删除。'."\n"
                .'参考：'."\n"
                .'- [ListPolicesForUserGroup](~~ListPolicesForUserGroup~~)：批量查询用户组的策略。',
        ],
        'UpdateUserGroup' => [
            'summary' => '修改当前阿里云账号下用户组。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'UserGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组ID。取值来源：'."\n"
                            .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                            .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'usergroup-6f1ef2fc56b6****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条用户组'."\n",
                    ],
                ],
                [
                    'name' => 'Attributes',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户组属性集合。最大总数3000个。多个用户组属性之间是或的关系，按照合集生效。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户组属性。',
                            'type' => 'object',
                            'properties' => [
                                'UserGroupType' => [
                                    'description' => '用户组的类型。取值：'."\n"
                                        .'- **username**：用户名。'."\n"
                                        .'- **department**：部门。'."\n"
                                        .'- **email**：邮箱。'."\n"
                                        .'- **telephone**：手机。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'telephone' => '手机',
                                        'department' => '部门',
                                        'email' => '邮箱',
                                        'username' => '用户名',
                                    ],
                                    'example' => 'department',
                                ],
                                'Relation' => [
                                    'description' => '用户组的关系。取值：'."\n"
                                        .'- **Equal**：等于。'."\n"
                                        .'- **Unequal**：不等于。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'Unequal' => '不等于',
                                        'Equal' => '等于',
                                    ],
                                    'example' => 'Equal',
                                ],
                                'Value' => [
                                    'description' => '用户组属性的值。'."\n"
                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。'."\n"
                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                ],
                                'IdpId' => [
                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '12',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModifyType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '用户组的修改类型。取值：'."\n"
                            .'- **Cover**（默认）：使用**Attributes**参数的值覆盖原用户组属性集合。'."\n"
                            .'- **Append**：在用户组属性集合中分别增加**Attributes**参数中输入的值。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Cover' => '覆盖',
                            'Append' => '附加',
                        ],
                        'example' => 'Cover',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'UserGroup.NotFound',
                        'errorMessage' => 'The userGroup is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
            'title' => '修改用户组',
        ],
        'ListUsers' => [
            'summary' => '查询当前阿里云账号下登录用户列表。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~500。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'FuzzyUsername',
                    'in' => 'query',
                    'schema' => [
                        'description' => '模糊匹配用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '王先生',
                    ],
                ],
                [
                    'name' => 'PreciseUsername',
                    'in' => 'query',
                    'schema' => [
                        'description' => '精确匹配用户名。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '王先生@alibaba.com',
                    ],
                ],
                [
                    'name' => 'SaseUserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户ID。取值来源：'."\n"
                                ."\n"
                                .'ListUsers：批量查询登录用户。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户状态。取值：'."\n"
                            .'- **Enabled**：启用。'."\n"
                            .'- **Disabled**：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '启用',
                            'Disabled' => '禁用',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Department',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所属部门。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、半角逗号（,）、半角分号（;）、短划线（-）、下划线（_）、分隔号（/）、at（@）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试部',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
                            ],
                            'TotalNum' => [
                                'description' => '用户总数。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Users' => [
                                'description' => '用户列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Username' => [
                                            'description' => '用户名。',
                                            'type' => 'string',
                                            'example' => '王先生',
                                        ],
                                        'SaseUserId' => [
                                            'description' => '用户ID。',
                                            'type' => 'string',
                                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                                        ],
                                        'Department' => [
                                            'description' => '用户所属部门。',
                                            'type' => 'string',
                                            'example' => '测试部',
                                        ],
                                        'Email' => [
                                            'description' => '用户邮箱。',
                                            'type' => 'string',
                                            'example' => 'a***@example.net',
                                        ],
                                        'Phone' => [
                                            'description' => '用户手机号码。',
                                            'type' => 'string',
                                            'example' => '1381111****',
                                        ],
                                        'Status' => [
                                            'description' => '用户状态。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '启用',
                                                'Disabled' => '禁用',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'IdpName' => [
                                            'description' => '用户身份源名称。',
                                            'type' => 'string',
                                            'example' => '飞书',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\",\\n  \\"TotalNum\\": \\"1\\",\\n  \\"Users\\": [\\n    {\\n      \\"Username\\": \\"王先生\\",\\n      \\"SaseUserId\\": \\"su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****\\",\\n      \\"Department\\": \\"测试部\\",\\n      \\"Email\\": \\"a***@example.net\\",\\n      \\"Phone\\": \\"1381111****\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"IdpName\\": \\"飞书\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询用户',
        ],
        'UpdateUsersStatus' => [
            'summary' => '批量修改当前阿里云账号下登录用户的状态。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'SaseUserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '用户ID集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => '用户ID。取值来源：'."\n"
                                ."\n"
                                .' ListUsers：批量查询登录用户。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'su_e8f218fb171edd167c2ad917d21f53148bdefc510ca1f3c3cc0249d3643d****',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '登录用户状态。取值：'."\n"
                            .'- **Enabled**：启用。'."\n"
                            .'- **Disabled**：禁用。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Enabled' => '启用',
                            'Disabled' => '禁用',
                        ],
                        'example' => 'Enabled',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '47363C2B-1AAA-5954-8847-0E50FCC54117',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"47363C2B-1AAA-5954-8847-0E50FCC54117\\"\\n}","type":"json"}]',
            'title' => '批量修改用户状态',
        ],
        'ListPrivateAccessApplications' => [
            'summary' => '批量查询当前阿里云账号下所有内网访问应用的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'private_access_application_name',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.168.0.0/16',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-e12860ef6c48****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问标签ID。取值来源：'."\n"
                            .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                            .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag-d3f64e8bdd4a****',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-policy-54a7838a48bf****',
                    ],
                ],
                [
                    'name' => 'ConnectorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ConnectorID。取值来源：[ListConnectors](~~ListConnectors~~)批量查询Connector。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'connector-94db94e06b98****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
                            ],
                            'TotalNum' => [
                                'description' => '内网访问应用总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Applications' => [
                                'description' => '内网访问应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问应用。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationId' => [
                                            'description' => '内网访问应用ID。',
                                            'type' => 'string',
                                            'example' => 'pa-application-e12860ef6c48****',
                                        ],
                                        'Name' => [
                                            'description' => '内网访问应用名称。',
                                            'type' => 'string',
                                            'example' => 'private_access_application_name',
                                        ],
                                        'Description' => [
                                            'description' => '内网访问应用描述。',
                                            'type' => 'string',
                                            'example' => '这是一条内网访问应用',
                                        ],
                                        'Addresses' => [
                                            'description' => '内网访问应用地址集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                                                'type' => 'string',
                                                'example' => '192.168.0.0/16',
                                            ],
                                        ],
                                        'PortRanges' => [
                                            'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用端口范围。取值：1~65535。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Begin' => [
                                                        'description' => '起始端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '80',
                                                    ],
                                                    'End' => [
                                                        'description' => '结束端口。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '81',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Protocol' => [
                                            'description' => '内网访问应用协议。取值：'."\n"
                                                .'- **All**：全部。'."\n"
                                                .'- **TCP**'."\n"
                                                .'- **UDP**',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'All' => 'All',
                                                'TCP' => 'TCP',
                                                'UDP' => 'UDP',
                                            ],
                                            'example' => 'All',
                                        ],
                                        'Status' => [
                                            'description' => '内网访问应用状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '内网访问应用创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-12-16 15:03:42',
                                        ],
                                        'TagIds' => [
                                            'description' => '内网访问标签ID集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问标签ID。',
                                                'type' => 'string',
                                                'example' => 'tag-d3f64e8bdd4a****',
                                            ],
                                        ],
                                        'PolicyIds' => [
                                            'description' => '内网访问策略ID集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略ID。',
                                                'type' => 'string',
                                                'example' => 'pa-policy-54a7838a48bf****',
                                            ],
                                        ],
                                        'ConnectorIds' => [
                                            'description' => 'ConnectorID集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'ConnectorID。',
                                                'type' => 'string',
                                                'example' => 'connector-94db94e06b98****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\",\\n      \\"Name\\": \\"private_access_application_name\\",\\n      \\"Description\\": \\"这是一条内网访问应用\\",\\n      \\"Addresses\\": [\\n        \\"192.168.0.0/16\\"\\n      ],\\n      \\"PortRanges\\": [\\n        {\\n          \\"Begin\\": 80,\\n          \\"End\\": 81\\n        }\\n      ],\\n      \\"Protocol\\": \\"All\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2022-12-16 15:03:42\\",\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"PolicyIds\\": [\\n        \\"pa-policy-54a7838a48bf****\\"\\n      ],\\n      \\"ConnectorIds\\": [\\n        \\"connector-94db94e06b98****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问应用',
        ],
        'ListTagsForPrivateAccessApplication' => [
            'summary' => '批量查询当前阿里云账号下内网访问应用的标签。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-7a4445897856****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7241F45B-E8D3-5BA3-8172-8A58AC2AB0FC',
                            ],
                            'Applications' => [
                                'description' => '内网访问应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问应用。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationId' => [
                                            'description' => '内网访问应用ID。',
                                            'type' => 'string',
                                            'example' => 'pa-application-7a4445897856****',
                                        ],
                                        'Tags' => [
                                            'description' => '内网访问标签集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagId' => [
                                                        'description' => '内网访问标签ID。',
                                                        'type' => 'string',
                                                        'example' => 'tag-c0cb77857a99****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问标签名称。',
                                                        'type' => 'string',
                                                        'example' => 'tag_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问标签描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条内网访问标签',
                                                    ],
                                                    'TagType' => [
                                                        'description' => '内网访问标签类型。取值：'."\n"
                                                            .'- **Default**：默认。'."\n"
                                                            .'- **Custom**：自定义。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Custom' => '自定义',
                                                            'Default' => '默认',
                                                        ],
                                                        'example' => 'Default',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问标签创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-07-01 16:05:26',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7241F45B-E8D3-5BA3-8172-8A58AC2AB0FC\\",\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-7a4445897856****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-c0cb77857a99****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条内网访问标签\\",\\n          \\"TagType\\": \\"Default\\",\\n          \\"CreateTime\\": \\"2022-07-01 16:05:26\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问应用的标签',
        ],
        'ListPolicesForPrivateAccessApplication' => [
            'summary' => '批量查询当前阿里云账号下内网访问应用的策略。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-b927baf3e592****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4AB972E2-D702-5464-B132-B1911498B8BF',
                            ],
                            'Applications' => [
                                'description' => '内网访问应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问应用。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationId' => [
                                            'description' => '内网访问应用ID。',
                                            'type' => 'string',
                                            'example' => 'pa-application-b927baf3e592****',
                                        ],
                                        'Policies' => [
                                            'description' => '内网访问策略集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PolicyId' => [
                                                        'description' => '内网访问策略ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-policy-867ef4007c8a****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问策略名称。',
                                                        'type' => 'string',
                                                        'example' => 'private_access_policy_name'."\n",
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问策略描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条内网访问策略'."\n",
                                                    ],
                                                    'PolicyAction' => [
                                                        'description' => '内网访问策略动作。取值：'."\n"
                                                            .'- **Block**：阻断。'."\n"
                                                            .'- **Allow**：允许。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Block' => '阻断',
                                                            'Allow' => '允许',
                                                        ],
                                                        'example' => 'Allow',
                                                    ],
                                                    'Priority' => [
                                                        'description' => '内网访问策略优先级。数字1表示优先级最高。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Status' => [
                                                        'description' => '内网访问策略状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'ApplicationType' => [
                                                        'description' => '内网访问策略的应用类型。取值：'."\n"
                                                            .'- **Application**：应用。'."\n"
                                                            .'- **Tag**：标签。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Tag' => '标签',
                                                            'Application' => '应用',
                                                        ],
                                                        'example' => 'Application',
                                                    ],
                                                    'UserGroupType' => [
                                                        'description' => '内网访问策略的用户组类型。取值：'."\n"
                                                            .'- **Normal**：普通用户组。'."\n"
                                                            .'- **Custom**：自定义用户组。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Custom' => '自定义',
                                                            'Normal' => '普通',
                                                        ],
                                                        'example' => 'Normal',
                                                    ],
                                                    'CustomUserAttributes' => [
                                                        'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '自定义用户组属性。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UserGroupType' => [
                                                                    'description' => '用户组的类型。取值：'."\n"
                                                                        .'- **username**：用户名。'."\n"
                                                                        .'- **department**：部门。'."\n"
                                                                        .'- **email**：邮箱。'."\n"
                                                                        .'- **telephone**：手机。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'telephone' => '手机',
                                                                        'department' => '部门',
                                                                        'email' => '邮箱',
                                                                        'username' => '用户名',
                                                                    ],
                                                                    'example' => 'department',
                                                                ],
                                                                'Relation' => [
                                                                    'description' => '用户组的关系。取值：'."\n"
                                                                        .'- **Equal**：等于。'."\n"
                                                                        .'- **Unequal**：不等于。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'Unequal' => '不等于',
                                                                        'Equal' => '等于',
                                                                    ],
                                                                    'example' => 'Equal',
                                                                ],
                                                                'Value' => [
                                                                    'description' => '用户组属性的值。'."\n"
                                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                                    'type' => 'string',
                                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                                ],
                                                                'IdpId' => [
                                                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '12',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问策略创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-27 18:10:25',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4AB972E2-D702-5464-B132-B1911498B8BF\\",\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"pa-application-b927baf3e592****\\",\\n      \\"Policies\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\",\\n          \\"Name\\": \\"private_access_policy_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问策略\\\\n\\",\\n          \\"PolicyAction\\": \\"Allow\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"ApplicationType\\": \\"Application\\",\\n          \\"UserGroupType\\": \\"Normal\\",\\n          \\"CustomUserAttributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问应用的策略',
        ],
        'GetPrivateAccessApplication' => [
            'summary' => '查询当前阿里云账号下内网访问应用详情。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用ID。取值来源：'."\n"
                            .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '3ACC5EDC-2B7D-5032-8C58-D7615D66C1D4',
                            ],
                            'Application' => [
                                'description' => '内网访问应用。',
                                'type' => 'object',
                                'properties' => [
                                    'ApplicationId' => [
                                        'description' => '内网访问应用ID。',
                                        'type' => 'string',
                                        'example' => 'pa-application-e12860ef6c48****',
                                    ],
                                    'Name' => [
                                        'description' => '内网访问应用名称。',
                                        'type' => 'string',
                                        'example' => 'private_access_application_name',
                                    ],
                                    'Description' => [
                                        'description' => '内网访问应用描述。',
                                        'type' => 'string',
                                        'example' => '这是一条内网访问应用',
                                    ],
                                    'Addresses' => [
                                        'description' => '内网访问应用地址集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                                            'type' => 'string',
                                            'example' => '192.168.0.0/16',
                                        ],
                                    ],
                                    'PortRanges' => [
                                        'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问应用端口范围。取值：1~65535。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Begin' => [
                                                    'description' => '起始端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '80',
                                                ],
                                                'End' => [
                                                    'description' => '结束端口。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '81',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Protocol' => [
                                        'description' => '内网访问应用协议。取值：'."\n"
                                            .'- **All**：全部。'."\n"
                                            .'- **TCP**。'."\n"
                                            .'- **UDP**。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'All' => 'All',
                                            'TCP' => 'TCP',
                                            'UDP' => 'UDP',
                                        ],
                                        'example' => 'All',
                                    ],
                                    'Status' => [
                                        'description' => '内网访问应用状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'CreateTime' => [
                                        'description' => '内网访问应用创建时间。',
                                        'type' => 'string',
                                        'example' => '2022-08-30 16:50:32',
                                    ],
                                    'TagIds' => [
                                        'description' => '内网访问标签ID集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-d3f64e8bdd4a****',
                                        ],
                                    ],
                                    'PolicyIds' => [
                                        'description' => '内网访问策略ID集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问策略ID。',
                                            'type' => 'string',
                                            'example' => 'pa-policy-54a7838a48bf****',
                                        ],
                                    ],
                                    'ConnectorIds' => [
                                        'description' => 'ConnectorID集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'ConnectorID。',
                                            'type' => 'string',
                                            'example' => 'connector-94db94e06b98****',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'Application.NotFound',
                        'errorMessage' => 'The application is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3ACC5EDC-2B7D-5032-8C58-D7615D66C1D4\\",\\n  \\"Application\\": {\\n    \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\",\\n    \\"Name\\": \\"private_access_application_name\\",\\n    \\"Description\\": \\"这是一条内网访问应用\\",\\n    \\"Addresses\\": [\\n      \\"192.168.0.0/16\\"\\n    ],\\n    \\"PortRanges\\": [\\n      {\\n        \\"Begin\\": 80,\\n        \\"End\\": 81\\n      }\\n    ],\\n    \\"Protocol\\": \\"All\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"CreateTime\\": \\"2022-08-30 16:50:32\\",\\n    \\"TagIds\\": [\\n      \\"tag-d3f64e8bdd4a****\\"\\n    ],\\n    \\"PolicyIds\\": [\\n      \\"pa-policy-54a7838a48bf****\\"\\n    ],\\n    \\"ConnectorIds\\": [\\n      \\"connector-94db94e06b98****\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询内网访问应用详情',
        ],
        'CreatePrivateAccessApplication' => [
            'summary' => '创建当前阿里云账号下内网访问应用。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'private_access_application_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条内网访问应用',
                    ],
                ],
                [
                    'name' => 'Addresses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用地址集合。最多可输入1000个内网访问应用地址。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                            'type' => 'string',
                            'required' => true,
                            'example' => '192.168.0.0/16',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PortRanges',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用端口范围集合。最多可输入65535个端口范围。多个端口范围不可重复或重叠。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用端口范围。取值：1~65535。',
                            'type' => 'object',
                            'properties' => [
                                'Begin' => [
                                    'description' => '起始端口。小于等于结束端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '80',
                                ],
                                'End' => [
                                    'description' => '结束端口。大于等于起始端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '81',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用协议。取值：'."\n"
                            .'- **All**：全部。'."\n"
                            .'- **TCP**'."\n"
                            .'- **UDP**',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'All',
                        'enum' => [
                            'All',
                            'TCP',
                            'UDP',
                        ],
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                        'enum' => [
                            'Enabled',
                            'Disabled',
                        ],
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。1个内网访问应用最多可关联6个自定义类型的内网访问标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                            'ApplicationId' => [
                                'description' => '内网访问应用ID。',
                                'type' => 'string',
                                'example' => 'pa-application-e12860ef6c48****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Application.NameExisted',
                        'errorMessage' => 'The application name is existed.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\"\\n}","type":"json"}]',
            'title' => '创建内网访问应用',
            'description' => '默认最多可创建500个内网访问应用。',
        ],
        'DeletePrivateAccessApplication' => [
            'summary' => '删除当前阿里云账号下内网访问应用。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用ID。取值来源：'."\n"
                            .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'Application.NotFound',
                        'errorMessage' => 'The application is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Application.UsedByPolicy',
                        'errorMessage' => 'The application is used by policy.',
                    ],
                    [
                        'errorCode' => 'Application.UsedByWorkshop',
                        'errorMessage' => 'The application is used by workshop.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
            'title' => '删除内网访问应用',
            'description' => '当存在办公区识别、策略引用时，不允许删除。参考：'."\n"
                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。',
        ],
        'UpdatePrivateAccessApplication' => [
            'summary' => '修改当前阿里云账号下内网访问应用。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ApplicationId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用ID。取值来源：'."\n"
                            .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条内网访问应用',
                    ],
                ],
                [
                    'name' => 'Addresses',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用地址集合。最多可输入1000个内网访问应用地址。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '192.168.0.0/16',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PortRanges',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问应用端口范围集合。最多可输入65535个端口范围。多个端口范围不可重复或重叠。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问应用端口范围。取值：1~65535。',
                            'type' => 'object',
                            'properties' => [
                                'Begin' => [
                                    'description' => '起始端口。小于等于结束端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '80',
                                ],
                                'End' => [
                                    'description' => '结束端口。大于等于起始端口。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'maximum' => '65535',
                                    'minimum' => '1',
                                    'example' => '81',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Protocol',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用协议。取值：'."\n"
                            .'- **All**：全部。'."\n"
                            .'- **TCP**'."\n"
                            .'- **UDP**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'All',
                        'enum' => [
                            'All',
                            'TCP',
                            'UDP',
                        ],
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                        'enum' => [
                            'Enabled',
                            'Disabled',
                        ],
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。1个内网访问应用最多可关联6个自定义类型的内网访问标签。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ModifyType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问应用的修改类型。取值：'."\n"
                            .'- **Cover**（默认）：使用**Addresses**、**PortRanges**、**TagIds**参数的值覆盖原地址、端口范围、标签ID集合。'."\n"
                            .'- **Append**：在原地址、端口范围、标签ID集合中分别增加**Addresses**、**PortRanges**、**TagIds**参数中输入的值。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Cover' => '覆盖',
                            'Append' => '附加',
                        ],
                        'example' => 'Cover',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'Application.NotFound',
                        'errorMessage' => 'The application is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
            'title' => '修改内网访问应用',
        ],
        'ListConnectors' => [
            'summary' => '批量查询当前阿里云账号下Connector实例。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Connector名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'connector_name',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Connector连接状态。取值：'."\n"
                            .'- **Online**：在线。'."\n"
                            .'- **Offline**：离线。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Offline' => '离线',
                            'Online' => '在线',
                        ],
                        'example' => 'Online',
                    ],
                ],
                [
                    'name' => 'SwitchStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Connector实例状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'ConnectorIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => 'ConnectorID集合。最多可输入100个ConnectorID。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'ConnectorID。取值来源：[ListConnectors](~~ListConnectors~~)批量查询Connector。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'connector-94db94e06b98****',
                        ],
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'TotalNum' => [
                                'description' => 'Connector总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Connectors' => [
                                'description' => 'Connector列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Connector。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ConnectorId' => [
                                            'description' => 'ConnectorID。',
                                            'type' => 'string',
                                            'example' => 'connector-94db94e06b98****',
                                        ],
                                        'Name' => [
                                            'description' => 'Connector名称。',
                                            'type' => 'string',
                                            'example' => 'connector_name',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'SwitchStatus' => [
                                            'description' => 'Connector实例状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'Status' => [
                                            'description' => 'Connector连接状态。取值：'."\n"
                                                .'- **Online**：在线。'."\n"
                                                .'- **Offline**：离线。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Offline' => '离线',
                                                'Online' => '在线',
                                            ],
                                            'example' => 'Online',
                                        ],
                                        'Applications' => [
                                            'description' => '关联的内网访问应用集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联的内网访问应用。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ApplicationId' => [
                                                        'description' => '内网访问应用ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-application-e12860ef6c48****'."\n",
                                                    ],
                                                    'ApplicationName' => [
                                                        'description' => '内网访问应用名称。',
                                                        'type' => 'string',
                                                        'example' => 'application_name',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'UpgradeTime' => [
                                            'description' => 'Connector升级时间。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Start' => [
                                                    'description' => '开始时间。',
                                                    'type' => 'string',
                                                    'example' => '20:00',
                                                ],
                                                'End' => [
                                                    'description' => '结束时间。',
                                                    'type' => 'string',
                                                    'example' => '23:00',
                                                ],
                                            ],
                                        ],
                                        'ConnectorClients' => [
                                            'description' => '部署的ConnectorClient集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '部署的ConnectorClient。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DevTag' => [
                                                        'description' => 'ConnectorClient的设备唯一标识。',
                                                        'type' => 'string',
                                                        'example' => 'C50A2386-F851-4F11-920B-DF7148DA0C22',
                                                    ],
                                                    'Hostname' => [
                                                        'description' => 'ConnectorClient主机名。',
                                                        'type' => 'string',
                                                        'example' => 'connector_client',
                                                    ],
                                                    'ConnectionStatus' => [
                                                        'description' => 'ConnectorClient和ConnectorServer的连接状态。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Connected' => '已连接',
                                                            'Disconnected' => '未连接',
                                                        ],
                                                        'example' => 'Disconnected',
                                                    ],
                                                    'PublicIp' => [
                                                        'description' => 'ConnectorClient公网IP。',
                                                        'type' => 'string',
                                                        'example' => '192.0.2.1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'CreateTime' => [
                                            'description' => 'Connector创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-09-27 18:10:25',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Connectors\\": [\\n    {\\n      \\"ConnectorId\\": \\"connector-94db94e06b98****\\",\\n      \\"Name\\": \\"connector_name\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"SwitchStatus\\": \\"Enabled\\",\\n      \\"Status\\": \\"Online\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-e12860ef6c48****\\\\n\\",\\n          \\"ApplicationName\\": \\"application_name\\"\\n        }\\n      ],\\n      \\"UpgradeTime\\": {\\n        \\"Start\\": \\"20:00\\",\\n        \\"End\\": \\"23:00\\"\\n      },\\n      \\"ConnectorClients\\": [\\n        {\\n          \\"DevTag\\": \\"C50A2386-F851-4F11-920B-DF7148DA0C22\\",\\n          \\"Hostname\\": \\"connector_client\\",\\n          \\"ConnectionStatus\\": \\"Disconnected\\",\\n          \\"PublicIp\\": \\"192.0.2.1\\"\\n        }\\n      ],\\n      \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询Connector',
        ],
        'AttachApplication2Connector' => [
            'summary' => '挂载当前阿里云账号下Connector的内网访问应用。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ConnectorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ConnectorID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'connector-94db94e06b98****'."\n",
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '内网访问应用ID集合。一个Connector最多可挂载内网访问应用的数量不超过内网访问应用总数。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'pa-application-f4dd77bced90****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\"\\n}","type":"json"}]',
            'title' => '挂载Connector的应用',
        ],
        'DetachApplication2Connector' => [
            'summary' => '卸载当前阿里云账号下Connector的内网访问应用。',
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
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ConnectorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ConnectorID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'connector-94db94e06b98****',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '内网访问应用ID集合。最多可输入100个内网访问应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'pa-application-b927baf3e592****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
            'title' => '卸载Connector的应用',
        ],
        'ListPrivateAccessTags' => [
            'summary' => '批量查询当前阿里云账号下所有内网访问标签的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问标签名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag_name',
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用ID。取值来源：'."\n"
                            .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-policy-54a7838a48bf****',
                    ],
                ],
                [
                    'name' => 'SimpleMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '简单查询模式。如果值为true，表示不需要查询PolicyId字段。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '54C1D236-CDB9-586C-B44D-AFDCEA195545',
                            ],
                            'TotalNum' => [
                                'description' => '内网访问标签总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Tags' => [
                                'description' => '内网访问标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagId' => [
                                            'description' => '内网访问标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-d3f64e8bdd4a****',
                                        ],
                                        'Name' => [
                                            'description' => '内网访问标签名称。',
                                            'type' => 'string',
                                            'example' => 'tag_name',
                                        ],
                                        'Description' => [
                                            'description' => '内网访问标签描述。',
                                            'type' => 'string',
                                            'example' => '这是一条内网访问标签',
                                        ],
                                        'TagType' => [
                                            'description' => '内网访问标签类型。取值：'."\n"
                                                .'- **Default**：默认。'."\n"
                                                .'- **Custom**：自定义。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Custom' => '自定义',
                                                'Default' => '默认',
                                            ],
                                            'example' => 'Default',
                                        ],
                                        'CreateTime' => [
                                            'description' => '内网访问标签创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-10-10 11:39:34',
                                        ],
                                        'ApplicationIds' => [
                                            'description' => '内网访问应用ID集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用ID。',
                                                'type' => 'string',
                                                'example' => 'pa-application-e12860ef6c48****',
                                            ],
                                        ],
                                        'PolicyIds' => [
                                            'description' => '内网访问策略ID集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略ID。',
                                                'type' => 'string',
                                                'example' => 'pa-policy-54a7838a48bf****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"54C1D236-CDB9-586C-B44D-AFDCEA195545\\",\\n  \\"TotalNum\\": 1,\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n      \\"Name\\": \\"tag_name\\",\\n      \\"Description\\": \\"这是一条内网访问标签\\",\\n      \\"TagType\\": \\"Default\\",\\n      \\"CreateTime\\": \\"2022-10-10 11:39:34\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"PolicyIds\\": [\\n        \\"pa-policy-54a7838a48bf****\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问标签',
        ],
        'ListApplicationsForPrivateAccessTag' => [
            'summary' => '批量查询当前阿里云账号下内网访问标签的应用。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-7ffc82853476****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'B608C6AE-623D-55C4-9454-601B88AE937E',
                            ],
                            'Tags' => [
                                'description' => '内网访问标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagId' => [
                                            'description' => '内网访问标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-7ffc82853476****',
                                        ],
                                        'Applications' => [
                                            'description' => '内网访问应用集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ApplicationId' => [
                                                        'description' => '内网访问应用ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-application-7a9243dd02f4****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问应用名称。',
                                                        'type' => 'string',
                                                        'example' => 'private_access_application_name'."\n",
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问应用描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条内网访问应用'."\n",
                                                    ],
                                                    'Addresses' => [
                                                        'description' => '内网访问应用地址集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用地址。长度为1~128个字符，支持IPv4地址、CIDR、域名、泛域名。',
                                                            'type' => 'string',
                                                            'example' => '192.168.0.0/16',
                                                        ],
                                                    ],
                                                    'PortRanges' => [
                                                        'description' => '内网访问应用端口范围集合。多个端口范围不可重复或重叠。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用端口范围。取值：1~65535。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Begin' => [
                                                                    'description' => '起始端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '80',
                                                                ],
                                                                'End' => [
                                                                    'description' => '结束端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '81',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Protocol' => [
                                                        'description' => '内网访问应用协议。取值：'."\n"
                                                            .'- **All**：全部。'."\n"
                                                            .'- **TCP**'."\n"
                                                            .'- **UDP**',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'All' => 'All',
                                                            'TCP' => 'TCP',
                                                            'UDP' => 'UDP',
                                                        ],
                                                        'example' => 'All',
                                                    ],
                                                    'Status' => [
                                                        'description' => '内网访问应用状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问应用创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-27 18:10:25',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B608C6AE-623D-55C4-9454-601B88AE937E\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-7ffc82853476****\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"private_access_application_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问应用\\\\n\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"All\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问标签的应用',
        ],
        'ListPolicesForPrivateAccessTag' => [
            'summary' => '批量查询当前阿里云账号下内网访问标签的策略。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TagIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-b927baf3e592****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                            'Tags' => [
                                'description' => '内网访问标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问标签。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TagId' => [
                                            'description' => '内网访问标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-b927baf3e592****'."\n",
                                        ],
                                        'Polices' => [
                                            'description' => '内网访问策略集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'PolicyId' => [
                                                        'description' => '内网访问策略ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-policy-867ef4007c8a****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问策略名称。',
                                                        'type' => 'string',
                                                        'example' => 'private_access_policy_name'."\n",
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问策略描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条内网访问策略',
                                                    ],
                                                    'PolicyAction' => [
                                                        'description' => '内网访问策略动作。取值：'."\n"
                                                            .'- **Block**：阻断。'."\n"
                                                            .'- **Allow**：允许。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Block' => '阻断',
                                                            'Allow' => '允许',
                                                        ],
                                                        'example' => 'Allow',
                                                    ],
                                                    'Priority' => [
                                                        'description' => '内网访问策略优先级。数字1表示优先级最高。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '1',
                                                    ],
                                                    'Status' => [
                                                        'description' => '内网访问策略状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'ApplicationType' => [
                                                        'description' => '内网访问策略的应用类型。取值：'."\n"
                                                            .'- **Application**：应用。'."\n"
                                                            .'- **Tag**：标签。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Tag' => '标签',
                                                            'Application' => '应用',
                                                        ],
                                                        'example' => 'Application',
                                                    ],
                                                    'UserGroupType' => [
                                                        'description' => '内网访问策略的用户组类型。取值：'."\n"
                                                            .'- **Normal**：普通用户组。'."\n"
                                                            .'- **Custom**：自定义用户组。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Custom' => '自定义',
                                                            'Normal' => '普通',
                                                        ],
                                                        'example' => 'Normal',
                                                    ],
                                                    'CustomUserAttributes' => [
                                                        'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '自定义用户组属性。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UserGroupType' => [
                                                                    'description' => '用户组的类型。取值：'."\n"
                                                                        .'- **username**：用户名。'."\n"
                                                                        .'- **department**：部门。'."\n"
                                                                        .'- **email**：邮箱。'."\n"
                                                                        .'- **telephone**：手机。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'telephone' => '手机',
                                                                        'department' => '部门',
                                                                        'email' => '邮箱',
                                                                        'username' => '用户名',
                                                                    ],
                                                                    'example' => 'department'."\n",
                                                                ],
                                                                'Relation' => [
                                                                    'description' => '用户组的关系。取值：'."\n"
                                                                        .'- **Equal**：等于。'."\n"
                                                                        .'- **Unequal**：不等于。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'Unequal' => '不等于',
                                                                        'Equal' => '等于',
                                                                    ],
                                                                    'example' => 'Equal',
                                                                ],
                                                                'Value' => [
                                                                    'description' => '用户组属性的值。'."\n"
                                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                                    'type' => 'string',
                                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                                ],
                                                                'IdpId' => [
                                                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '12',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问策略创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2023-02-21 14:10:16',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Tags\\": [\\n    {\\n      \\"TagId\\": \\"tag-b927baf3e592****\\\\n\\",\\n      \\"Polices\\": [\\n        {\\n          \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\",\\n          \\"Name\\": \\"private_access_policy_name\\\\n\\",\\n          \\"Description\\": \\"这是一条内网访问策略\\",\\n          \\"PolicyAction\\": \\"Allow\\",\\n          \\"Priority\\": 1,\\n          \\"Status\\": \\"Enabled\\",\\n          \\"ApplicationType\\": \\"Application\\",\\n          \\"UserGroupType\\": \\"Normal\\",\\n          \\"CustomUserAttributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\\\n\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2023-02-21 14:10:16\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问标签的策略',
        ],
        'CreatePrivateAccessTag' => [
            'summary' => '创建当前阿里云账号下内网访问标签。',
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
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问标签名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问标签描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条内网访问标签',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'TagId' => [
                                'description' => '内网访问标签ID。',
                                'type' => 'string',
                                'example' => 'tag-d3f64e8bdd4a****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'Tag.NameExisted',
                        'errorMessage' => 'The tag name is existed.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"TagId\\": \\"tag-d3f64e8bdd4a****\\"\\n}","type":"json"}]',
            'title' => '创建内网访问标签',
            'description' => '默认最多可创建500个内网访问标签。',
        ],
        'DeletePrivateAccessTag' => [
            'summary' => '删除当前阿里云账号下内网访问标签。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'TagId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问标签ID。取值来源：'."\n"
                            .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                            .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tag-d3f64e8bdd4a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'FD724DBC-CD76-5235-BF76-59C51B73296D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'Tag.NotFound',
                        'errorMessage' => 'The tag is not found.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'Tag.UsedByApplication',
                        'errorMessage' => 'The tag is used by application.',
                    ],
                    [
                        'errorCode' => 'Tag.UsedByPolicy',
                        'errorMessage' => 'The tag is used by policy.',
                    ],
                    [
                        'errorCode' => 'Tag.UsedByWorkshop',
                        'errorMessage' => 'The tag is used by workshop.',
                    ],
                    [
                        'errorCode' => 'Tag.DefaultCannotDelete',
                        'errorMessage' => 'The default tag cannot be deleted.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"FD724DBC-CD76-5235-BF76-59C51B73296D\\"\\n}","type":"json"}]',
            'title' => '删除内网访问标签',
            'description' => '当存在应用、办公区识别、策略引用时，不允许删除。参考：'."\n"
                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。',
        ],
        'ListPrivateAccessPolices' => [
            'summary' => '获取当前阿里云账号下所有内网访问策略的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '163588',
                'abilityTreeNodes' => [
                    'FEATUREcsas7ZB8UX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'private_access_policy_name'."\n",
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'PolicyAction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略动作。取值：'."\n"
                            .'- **Block**：阻断。'."\n"
                            .'- **Allow**：允许。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Block' => '阻断',
                            'Allow' => '允许',
                        ],
                        'example' => 'Allow',
                    ],
                ],
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略ID。取值来源：'."\n"
                                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                                .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-policy-63b2f1844b86****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户组ID。取值来源：'."\n"
                            .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                            .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'usergroup-6f1ef2fc56b6****',
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用ID。无法和内网访问标签ID同时过滤。取值来源：'."\n"
                            .' - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .' - [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问标签ID。无法和应用ID同时过滤。取值来源：'."\n"
                            .' - [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                            .' - [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag-c0cb77857a99****',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '办公',
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '云产品',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
                            ],
                            'TotalNum' => [
                                'description' => '内网访问策略的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Polices' => [
                                'description' => '内网访问策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '内网访问策略ID。',
                                            'type' => 'string',
                                            'example' => 'pa-policy-63b2f1844b86****',
                                        ],
                                        'Name' => [
                                            'description' => '内网访问策略名称。',
                                            'type' => 'string',
                                            'example' => 'private_access_policy_name',
                                        ],
                                        'Description' => [
                                            'description' => '内网访问策略描述。',
                                            'type' => 'string',
                                            'example' => '这是一条内网访问策略',
                                        ],
                                        'PolicyAction' => [
                                            'description' => '内网访问策略动作。取值：'."\n"
                                                .'- **Block**：阻断。'."\n"
                                                .'- **Allow**：允许。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Block' => '阻断',
                                                'Allow' => '允许',
                                            ],
                                            'example' => 'Allow',
                                        ],
                                        'Priority' => [
                                            'description' => '内网访问策略优先级。数字1表示优先级最高。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'Status' => [
                                            'description' => '内网访问策略状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'CreateTime' => [
                                            'description' => '内网访问策略创建时间。',
                                            'type' => 'string',
                                            'example' => '2022-07-10 15:50:23',
                                        ],
                                        'UserGroupMode' => [
                                            'description' => '内网访问策略的用户组类型。取值：'."\n"
                                                .'- **Normal**：普通用户组。'."\n"
                                                .'- **Custom**：自定义用户组。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Custom' => '自定义用户组',
                                                'Normal' => '普通用户组',
                                            ],
                                            'example' => 'Normal',
                                        ],
                                        'UserGroupIds' => [
                                            'description' => '内网访问策略，用户组ID集合。当用户组类型为**Normal**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略，用户组类型为**Normal**的用户组ID。',
                                                'type' => 'string',
                                                'example' => 'usergroup-6f1ef2fc56b6****',
                                            ],
                                        ],
                                        'CustomUserAttributes' => [
                                            'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '自定义用户组属性。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserGroupType' => [
                                                        'description' => '用户组的类型。取值：'."\n"
                                                            .'- **username**：用户名。'."\n"
                                                            .'- **department**：部门。'."\n"
                                                            .'- **email**：邮箱。'."\n"
                                                            .'- **telephone**：手机。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'telephone' => '手机',
                                                            'department' => '部门',
                                                            'email' => '邮箱',
                                                            'username' => '用户名',
                                                        ],
                                                        'example' => 'department',
                                                    ],
                                                    'Relation' => [
                                                        'description' => '用户组的关系。取值：'."\n"
                                                            .'- **Equal**：等于。'."\n"
                                                            .'- **Unequal**：不等于。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Unequal' => '不等于',
                                                            'Equal' => '等于',
                                                        ],
                                                        'example' => 'Equal',
                                                    ],
                                                    'Value' => [
                                                        'description' => '用户组属性的值。'."\n"
                                                            .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                            .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                            .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                            .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                        'type' => 'string',
                                                        'example' => 'OU=部门1,OU=SASE钉钉',
                                                    ],
                                                    'IdpId' => [
                                                        'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '12',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ApplicationType' => [
                                            'description' => '内网访问策略的应用类型。取值：'."\n"
                                                .'- **Application**：应用。'."\n"
                                                .'- **Tag**：标签。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Tag' => '标签',
                                                'Application' => '应用',
                                            ],
                                            'example' => 'Application',
                                        ],
                                        'ApplicationIds' => [
                                            'description' => '内网访问策略的应用ID集合。当应用类型为**Application**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略的应用ID。',
                                                'type' => 'string',
                                                'example' => 'pa-application-e12860ef6c48****',
                                            ],
                                        ],
                                        'TagIds' => [
                                            'description' => '内网访问策略的标签ID集合。当应用类型为**Tag**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略的标签ID。',
                                                'type' => 'string',
                                                'example' => 'tag-d3f64e8bdd4a****',
                                            ],
                                        ],
                                        'DeviceAttributeId' => [
                                            'description' => '安全基线策略的ID。',
                                            'type' => 'string',
                                            'example' => 'dag-d3f64e8bdd4a****',
                                        ],
                                        'DeviceAttributeAction' => [
                                            'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\",\\n  \\"TotalNum\\": 1,\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-63b2f1844b86****\\",\\n      \\"Name\\": \\"private_access_policy_name\\",\\n      \\"Description\\": \\"这是一条内网访问策略\\",\\n      \\"PolicyAction\\": \\"Allow\\",\\n      \\"Priority\\": 1,\\n      \\"Status\\": \\"Enabled\\",\\n      \\"CreateTime\\": \\"2022-07-10 15:50:23\\",\\n      \\"UserGroupMode\\": \\"Normal\\",\\n      \\"UserGroupIds\\": [\\n        \\"usergroup-6f1ef2fc56b6****\\"\\n      ],\\n      \\"CustomUserAttributes\\": [\\n        {\\n          \\"UserGroupType\\": \\"department\\",\\n          \\"Relation\\": \\"Equal\\",\\n          \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n          \\"IdpId\\": 12\\n        }\\n      ],\\n      \\"ApplicationType\\": \\"Application\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"DeviceAttributeId\\": \\"dag-d3f64e8bdd4a****\\",\\n      \\"DeviceAttributeAction\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问策略',
        ],
        'ListUserGroupsForPrivateAccessPolicy' => [
            'summary' => '批量查询当前阿里云账号下内网访问策略的用户组。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略ID。取值来源：'."\n"
                                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                                .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'Polices' => [
                                'description' => '内网访问策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '内网访问策略ID。',
                                            'type' => 'string',
                                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                                        ],
                                        'UserGroups' => [
                                            'description' => '内网访问策略的用户组集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问策略的用户组。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'UserGroupId' => [
                                                        'description' => '用户组ID。',
                                                        'type' => 'string',
                                                        'example' => 'usergroup-6f1ef2fc56b6****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '用户组名称。',
                                                        'type' => 'string',
                                                        'example' => 'user_group_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '用户组描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被内网访问策略引用的用户组',
                                                    ],
                                                    'Attributes' => [
                                                        'description' => '用户组属性集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '用户组属性。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'UserGroupType' => [
                                                                    'description' => '用户组的类型。取值：'."\n"
                                                                        .'- **username**：用户名。'."\n"
                                                                        .'- **department**：部门。'."\n"
                                                                        .'- **email**：邮箱。'."\n"
                                                                        .'- **telephone**：手机。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'telephone' => '手机',
                                                                        'department' => '部门',
                                                                        'email' => '邮箱',
                                                                        'username' => '用户名',
                                                                    ],
                                                                    'example' => 'department',
                                                                ],
                                                                'Relation' => [
                                                                    'description' => '用户组的关系。取值：'."\n"
                                                                        .'- **Equal**：等于。'."\n"
                                                                        .'- **Unequal**：不等于。',
                                                                    'type' => 'string',
                                                                    'enumValueTitles' => [
                                                                        'Unequal' => '不等于',
                                                                        'Equal' => '等于',
                                                                    ],
                                                                    'example' => 'Equal',
                                                                ],
                                                                'Value' => [
                                                                    'description' => '用户组属性的值。'."\n"
                                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                                    'type' => 'string',
                                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                                ],
                                                                'IdpId' => [
                                                                    'description' => '用户组的身份源ID。当自定义用户组类型为**department**时，存在该值。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '12',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '用户组创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-27 18:10:25'."\n",
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"UserGroups\\": [\\n        {\\n          \\"UserGroupId\\": \\"usergroup-6f1ef2fc56b6****\\",\\n          \\"Name\\": \\"user_group_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的用户组\\",\\n          \\"Attributes\\": [\\n            {\\n              \\"UserGroupType\\": \\"department\\",\\n              \\"Relation\\": \\"Equal\\",\\n              \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n              \\"IdpId\\": 12\\n            }\\n          ],\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\\\n\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问策略的用户组',
        ],
        'ListApplicationsForPrivateAccessPolicy' => [
            'summary' => '批量查询当前阿里云账号下内网访问策略的应用。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略ID。取值来源：'."\n"
                                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                                .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                            'Polices' => [
                                'description' => '内网访问策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '策略ID。',
                                            'type' => 'string',
                                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                                        ],
                                        'Applications' => [
                                            'description' => '内网访问应用集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ApplicationId' => [
                                                        'description' => '内网访问应用ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-application-7a9243dd02f4****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问应用名称。',
                                                        'type' => 'string',
                                                        'example' => 'application_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问应用描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被内网访问策略引用的内网访问应用',
                                                    ],
                                                    'Addresses' => [
                                                        'description' => '内网访问应用地址集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用地址。',
                                                            'type' => 'string',
                                                            'example' => '192.168.0.0/16',
                                                        ],
                                                    ],
                                                    'PortRanges' => [
                                                        'description' => '内网访问应用端口范围集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用端口范围。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Begin' => [
                                                                    'description' => '起始端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '80',
                                                                ],
                                                                'End' => [
                                                                    'description' => '结束端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '81',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Protocol' => [
                                                        'description' => '内网访问应用协议。取值：'."\n"
                                                            .'- **All**：全部。'."\n"
                                                            .'- **TCP**'."\n"
                                                            .'- **UDP**',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'All' => 'All',
                                                            'TCP' => 'TCP',
                                                            'UDP' => 'UDP',
                                                        ],
                                                        'example' => 'TCP',
                                                    ],
                                                    'Status' => [
                                                        'description' => '内网访问应用状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问应用创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-09-27 18:10:25',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"application_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的内网访问应用\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"TCP\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-09-27 18:10:25\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问策略的应用',
        ],
        'ListTagsForPrivateAccessPolicy' => [
            'summary' => '批量查询当前阿里云账号下内网访问策略的标签。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略ID集合。最多可输入100个内网访问策略ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略ID。取值来源：'."\n"
                                .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                                .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '9EE61139-A6A8-5E13-80AF-83435C21B26B',
                            ],
                            'Polices' => [
                                'description' => '内网访问策略列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '内网访问策略。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PolicyId' => [
                                            'description' => '内网访问策略ID。',
                                            'type' => 'string',
                                            'example' => 'pa-policy-1b0d0e8b4bcf****',
                                        ],
                                        'Tags' => [
                                            'description' => '内网访问标签集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagId' => [
                                                        'description' => '内网访问标签ID。',
                                                        'type' => 'string',
                                                        'example' => 'tag-d3f64e8bdd4a****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问标签名称。',
                                                        'type' => 'string',
                                                        'example' => 'tag_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问标签描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被内网访问策略引用的标签',
                                                    ],
                                                    'TagType' => [
                                                        'description' => '内网访问标签类型。取值：'."\n"
                                                            .'- **Default**：默认。'."\n"
                                                            .'- **Custom**：自定义。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Custom' => '自定义',
                                                            'Default' => '默认',
                                                        ],
                                                        'example' => 'Default',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问标签创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2023-02-21 14:10:16',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9EE61139-A6A8-5E13-80AF-83435C21B26B\\",\\n  \\"Polices\\": [\\n    {\\n      \\"PolicyId\\": \\"pa-policy-1b0d0e8b4bcf****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条被内网访问策略引用的标签\\",\\n          \\"TagType\\": \\"Default\\",\\n          \\"CreateTime\\": \\"2023-02-21 14:10:16\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询内网访问策略的标签',
        ],
        'GetPrivateAccessPolicy' => [
            'summary' => '获取当前阿里云账号下指定内网访问策略的详情信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '163586',
                'abilityTreeNodes' => [
                    'FEATUREcsas7ZB8UX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-policy-63b2f1844b86****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
                            ],
                            'Policy' => [
                                'description' => '内网访问策略。',
                                'type' => 'object',
                                'properties' => [
                                    'PolicyId' => [
                                        'description' => '内网访问策略ID。',
                                        'type' => 'string',
                                        'example' => 'pa-policy-63b2f1844b86****',
                                    ],
                                    'Name' => [
                                        'description' => '内网访问策略名称。',
                                        'type' => 'string',
                                        'example' => 'private_access_policy_name',
                                    ],
                                    'Description' => [
                                        'description' => '内网访问策略描述。',
                                        'type' => 'string',
                                        'example' => '这是一条内网访问策略',
                                    ],
                                    'PolicyAction' => [
                                        'description' => '内网访问策略动作。取值：'."\n"
                                            .'- **Block**：阻断。'."\n"
                                            .'- **Allow**：允许。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Block' => '阻断',
                                            'Allow' => '允许',
                                        ],
                                        'example' => 'Allow',
                                    ],
                                    'Priority' => [
                                        'description' => '内网访问策略优先级。数字1表示优先级最高。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Status' => [
                                        'description' => '内网访问策略状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'CreateTime' => [
                                        'description' => '内网访问策略创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-07-29 11:26:02',
                                    ],
                                    'UserGroupMode' => [
                                        'description' => '内网访问策略的用户组类型。取值：'."\n"
                                            .'- **Normal**：普通用户组。'."\n"
                                            .'- **Custom**：自定义用户组。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Custom' => '自定义用户组',
                                            'Normal' => '普通用户组',
                                        ],
                                        'example' => 'Normal',
                                    ],
                                    'UserGroupIds' => [
                                        'description' => '内网访问策略，用户组ID集合。当用户组类型为Normal时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问策略，用户组类型为Normal的用户组ID。',
                                            'type' => 'string',
                                            'example' => 'usergroup-6f1ef2fc56b6****',
                                        ],
                                    ],
                                    'CustomUserAttributes' => [
                                        'description' => '自定义用户组属性集合。多个自定义用户组属性之间是或的关系，按照合集生效。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '自定义用户组属性。',
                                            'type' => 'object',
                                            'properties' => [
                                                'UserGroupType' => [
                                                    'description' => '自定义用户组的类型。取值：'."\n"
                                                        .'- **username**：用户名。'."\n"
                                                        .'- **department**：部门。'."\n"
                                                        .'- **email**：邮箱。'."\n"
                                                        .'- **telephone**：手机。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'telephone' => '手机',
                                                        'department' => '部门',
                                                        'email' => '邮箱',
                                                        'username' => '用户名',
                                                    ],
                                                    'example' => 'department',
                                                ],
                                                'Relation' => [
                                                    'description' => '自定义用户组的关系。取值：'."\n"
                                                        .'- **Equal**：等于。'."\n"
                                                        .'- **Unequal**：不等于。',
                                                    'type' => 'string',
                                                    'enumValueTitles' => [
                                                        'Unequal' => '不等于',
                                                        'Equal' => '等于',
                                                    ],
                                                    'example' => 'Equal',
                                                ],
                                                'Value' => [
                                                    'description' => '自定义用户组属性的值。'."\n"
                                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。'."\n"
                                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                                    'type' => 'string',
                                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                                ],
                                                'IdpId' => [
                                                    'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ApplicationType' => [
                                        'description' => '内网访问策略的应用类型。取值：'."\n"
                                            .'- **Application**：应用。'."\n"
                                            .'- **Tag**：标签。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Tag' => '标签',
                                            'Application' => '应用',
                                        ],
                                        'example' => 'Application',
                                    ],
                                    'ApplicationIds' => [
                                        'description' => '内网访问策略的应用ID集合。当应用类型为Application时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问策略的应用ID。',
                                            'type' => 'string',
                                            'example' => 'pa-application-e12860ef6c48****'."\n",
                                        ],
                                    ],
                                    'TagIds' => [
                                        'description' => '内网访问策略的标签ID集合。当应用类型为Tag时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '内网访问策略的标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-d3f64e8bdd4a****'."\n",
                                        ],
                                    ],
                                    'DeviceAttributeId' => [
                                        'description' => '安全基线策略的ID。',
                                        'type' => 'string',
                                        'example' => 'dag-d3f64e8bdd4a****',
                                    ],
                                    'DeviceAttributeAction' => [
                                        'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Policy\\": {\\n    \\"PolicyId\\": \\"pa-policy-63b2f1844b86****\\",\\n    \\"Name\\": \\"private_access_policy_name\\",\\n    \\"Description\\": \\"这是一条内网访问策略\\",\\n    \\"PolicyAction\\": \\"Allow\\",\\n    \\"Priority\\": 1,\\n    \\"Status\\": \\"Enabled\\",\\n    \\"CreateTime\\": \\"2021-07-29 11:26:02\\",\\n    \\"UserGroupMode\\": \\"Normal\\",\\n    \\"UserGroupIds\\": [\\n      \\"usergroup-6f1ef2fc56b6****\\"\\n    ],\\n    \\"CustomUserAttributes\\": [\\n      {\\n        \\"UserGroupType\\": \\"department\\",\\n        \\"Relation\\": \\"Equal\\",\\n        \\"Value\\": \\"OU=部门1,OU=SASE钉钉\\",\\n        \\"IdpId\\": 12\\n      }\\n    ],\\n    \\"ApplicationType\\": \\"Application\\",\\n    \\"ApplicationIds\\": [\\n      \\"pa-application-e12860ef6c48****\\\\n\\"\\n    ],\\n    \\"TagIds\\": [\\n      \\"tag-d3f64e8bdd4a****\\\\n\\"\\n    ],\\n    \\"DeviceAttributeId\\": \\"dag-d3f64e8bdd4a****\\",\\n    \\"DeviceAttributeAction\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询内网访问策略详情',
        ],
        'CreatePrivateAccessPolicy' => [
            'summary' => '创建当前阿里云账号下内网访问策略。',
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '163595',
                'abilityTreeNodes' => [
                    'FEATUREcsas7ZB8UX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'private_access_policy_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条内网访问策略',
                    ],
                ],
                [
                    'name' => 'PolicyAction',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略动作。取值：'."\n"
                            .'- **Block**：阻断。'."\n"
                            .'- **Allow**：允许。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Block' => '阻断',
                            'Allow' => '允许',
                        ],
                        'example' => 'Allow',
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的应用类型。取值：'."\n"
                            .'- **Application**：应用。'."\n"
                            .'- **Tag**：标签。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Tag' => '标签',
                            'Application' => '应用',
                        ],
                        'example' => 'Application',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的应用ID集合。最多可输入100个内网访问应用ID。当**ApplicationType**为**Application时**，必填。和**TagIds**互斥。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-f4dd77bced90****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。最多可输入100个内网访问标签ID。当**ApplicationType**为**Tag时**，必填。和**ApplicationIds**互斥。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserGroupMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的用户组类型。取值：'."\n"
                            .'- **Normal**：普通用户组。'."\n"
                            .'- **Custom**：自定义用户组。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Custom' => '自定义用户组',
                            'Normal' => '普通用户组',
                        ],
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'UserGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的用户组ID集合，当用户组类型为**Normal**时，必填。和自定义用户组集合互斥。最多可输入2000个用户组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略用户组类型为Normal的用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-927a4c7fee94****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomUserAttributes',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的自定义用户组集合，当用户组类型为**Custom**时，必填。和用户组ID集合互斥。最多可输入10个自定义用户组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的自定义用户组。',
                            'type' => 'object',
                            'properties' => [
                                'UserGroupType' => [
                                    'description' => '自定义用户组的类型。取值：'."\n"
                                        .'- **username**：用户名。'."\n"
                                        .'- **department**：部门。'."\n"
                                        .'- **email**：邮箱。'."\n"
                                        .'- **telephone**：手机。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'telephone' => '手机',
                                        'department' => '部门',
                                        'email' => '邮箱',
                                        'username' => '用户名',
                                    ],
                                    'example' => 'department',
                                ],
                                'Relation' => [
                                    'description' => '自定义用户组的关系。取值：'."\n"
                                        .'- **Equal**：等于。'."\n"
                                        .'- **Unequal**：不等于。',
                                    'type' => 'string',
                                    'required' => false,
                                    'enumValueTitles' => [
                                        'Unequal' => '不等于',
                                        'Equal' => '等于',
                                    ],
                                    'example' => 'Equal',
                                ],
                                'Value' => [
                                    'description' => '自定义用户组属性的值。'."\n"
                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。'."\n"
                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                ],
                                'IdpId' => [
                                    'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '12',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略优先级。数字1表示优先级最高。取值：1~1000，最大值为内网访问策略总数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'DeviceAttributeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '安全基线策略的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dag-d3f64e8bdd4a****',
                    ],
                ],
                [
                    'name' => 'DeviceAttributeAction',
                    'in' => 'formData',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
                            ],
                            'PolicyId' => [
                                'description' => '内网访问策略ID。',
                                'type' => 'string',
                                'example' => 'pa-policy-867ef4007c8a****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"PolicyId\\": \\"pa-policy-867ef4007c8a****\\"\\n}","type":"json"}]',
            'title' => '创建内网访问策略',
            'description' => '默认最多可创建500个内网访问策略。',
        ],
        'DeletePrivateAccessPolicy' => [
            'summary' => '删除当前阿里云账号下内网访问策略。',
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
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-policy-867ef4007c8a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '4D169859-A4F2-5EC8-853B-8447787C0D8A',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4D169859-A4F2-5EC8-853B-8447787C0D8A\\"\\n}","type":"json"}]',
            'title' => '删除内网访问策略',
        ],
        'UpdatePrivateAccessPolicy' => [
            'summary' => '修改当前阿里云账号下内网访问策略。',
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
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '163583',
                'abilityTreeNodes' => [
                    'FEATUREcsas7ZB8UX',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PolicyId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略ID。取值来源：'."\n"
                            .'- [ListPrivateAccessPolices](~~ListPrivateAccessPolices~~)：批量查询内网访问策略。'."\n"
                            .'- [CreatePrivateAccessPolicy](~~CreatePrivateAccessPolicy~~)：创建内网访问策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pa-policy-63b2f1844b86****',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条内网访问策略',
                    ],
                ],
                [
                    'name' => 'PolicyAction',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略动作。取值：'."\n"
                            .'- **Block**：阻断。'."\n"
                            .'- **Allow**：允许。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Block' => '阻断',
                            'Allow' => '允许',
                        ],
                        'example' => 'Allow',
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的应用类型。取值：'."\n"
                            .'- **Application**：应用。'."\n"
                            .'- **Tag**：标签。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Tag' => '标签',
                            'Application' => '应用',
                        ],
                        'example' => 'Application',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的应用ID集合。一条策略最多支持100个内网访问应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-f4dd77bced90****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问标签ID集合。一条策略最多支持100个内网访问标签ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-57c8238455b9****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserGroupMode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的用户组类型。取值：'."\n"
                            .'- **Normal**：普通用户组。'."\n"
                            .'- **Custom**：自定义用户组。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Custom' => '自定义用户组',
                            'Normal' => '普通用户组',
                        ],
                        'example' => 'Normal',
                    ],
                ],
                [
                    'name' => 'UserGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的用户组ID集合，当用户组类型为**Normal**时，必填。和自定义用户组集合互斥。单个策略的用户组最大支持10000个，单次修改的用户组ID数量最多2000个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略用户组类型为Normal的用户组ID。取值来源：'."\n"
                                .'- [ListUserGroups](~~ListUserGroups~~)：批量查询用户组。'."\n"
                                .'- [CreateUserGroup](~~CreateUserGroup~~)：创建用户组。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'usergroup-927a4c7fee94****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomUserAttributes',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '内网访问策略的自定义用户组集合，当用户组类型为**Custom**时，必填。和用户组ID集合互斥。自定义用户组总数最多10个。',
                        'type' => 'array',
                        'items' => [
                            'description' => '内网访问策略的自定义用户组。',
                            'type' => 'object',
                            'properties' => [
                                'UserGroupType' => [
                                    'description' => '自定义用户组的类型。取值：'."\n"
                                        .'- **username**：用户名。'."\n"
                                        .'- **department**：部门。'."\n"
                                        .'- **email**：邮箱。'."\n"
                                        .'- **telephone**：手机。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'telephone' => '手机',
                                        'department' => '部门',
                                        'email' => '邮箱',
                                        'username' => '用户名',
                                    ],
                                    'example' => 'department'."\n",
                                ],
                                'Relation' => [
                                    'description' => '自定义用户组的关系。取值：'."\n"
                                        .'- **Equal**：等于。'."\n"
                                        .'- **Unequal**：不等于。',
                                    'type' => 'string',
                                    'required' => true,
                                    'enumValueTitles' => [
                                        'Unequal' => '不等于',
                                        'Equal' => '等于',
                                    ],
                                    'example' => 'Equal',
                                ],
                                'Value' => [
                                    'description' => '自定义用户组属性的值。'."\n"
                                        .'- 当用户组类型为**username**时，表示用户名的值。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）、星号（*）、at（@）和空格。'."\n"
                                        .'- 当用户组类型为**department**时，表示部门的值。如：OU=部门1,OU=SASE钉钉。'."\n"
                                        .'- 当用户组类型为**email**时，表示邮箱的值。如：username@example.com。'."\n"
                                        .'- 当用户组类型为**telephone**时，表示手机的值。如：13900001234。',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'OU=部门1,OU=SASE钉钉',
                                ],
                                'IdpId' => [
                                    'description' => '自定义用户组的身份源ID。当自定义用户组类型为**department**时，必填。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '12',
                                ],
                            ],
                            'required' => true,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略优先级。数字1表示优先级最高。取值：1~1000，最大值为内网访问策略总数减一。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ModifyType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '内网访问策略的修改类型。取值：'."\n"
                            .'- **Cover**（默认）：使用**ApplicationIds**、**UserGroupIds**、**CustomUserAttributes**参数的值覆盖原应用ID集合、用户组ID集合、自定义用户组集合。'."\n"
                            .'- **Append**：在原应用ID集合、用户组ID集合、自定义用户组集合中分别增加**ApplicationIds**、**UserGroupIds**、**CustomUserAttributes**参数中输入的值。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Cover' => '覆盖',
                            'Append' => '附加',
                        ],
                        'example' => 'Cover',
                    ],
                ],
                [
                    'name' => 'DeviceAttributeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '安全基线策略的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dag-d3f64e8bdd4a****',
                    ],
                ],
                [
                    'name' => 'DeviceAttributeAction',
                    'in' => 'formData',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5FEF5CFA-14CC-5DE5-BD1F-AFFE0996E71D\\"\\n}","type":"json"}]',
            'title' => '修改内网访问策略',
        ],
        'ListDynamicRoutes' => [
            'summary' => '获取当前阿里云账号下所有动态路由的信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时显示的当前页的页码。取值：1~10000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的每页数量。取值：1~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dynamic_route_name',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Enabled',
                    ],
                ],
                [
                    'name' => 'DynamicRouteIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由ID。取值来源：'."\n"
                                .'- [ListDynamicRoutes](~~ListDynamicRoutes~~)：批量查询动态路由。'."\n"
                                .'- [CreateDynamicRoute](~~CreateDynamicRoute~~)：创建动态路由。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dr-30108b6c9d31****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => 'SASE的POP集群接入点支持的地域列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SASE的POP集群接入点支持的地域。取值来源：'."\n"
                                .' - [ListDynamicRouteRegions](~~ListDynamicRouteRegions~~)：批量查询动态路由已授权地域。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'cn-shenzhen' => '深圳',
                                'cn-beijing' => '北京',
                                'cn-shanghai' => '上海',
                                'ap-southeast-1' => '新加坡',
                                'us-east-1' => '弗吉尼亚',
                                'us-west-1' => '硅谷',
                                'cn-hangzhou' => '杭州',
                                'cn-chengdu' => '成都',
                            ],
                            'example' => 'ap-southeast-1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由的内网访问应用ID。无法和内网访问标签ID同时过滤。取值来源：'."\n"
                            .' - [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                            .' - [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pa-application-e12860ef6c48****',
                    ],
                ],
                [
                    'name' => 'TagId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由的内网访问标签ID。无法和内网访问应用ID同时过滤。取值来源：'."\n"
                            .' - [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                            .' - [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tag-d3f64e8bdd4a****',
                    ],
                ],
                [
                    'name' => 'NextHop',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由下一跳实例ID。取值来源：'."\n"
                            .' - [ListConnectors](~~ListConnectors~~)：批量查询Connector。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'connector-8ccb13b6f52c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'TotalNum' => [
                                'description' => '动态路由的总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'DynamicRoutes' => [
                                'description' => '动态路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '动态路由。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DynamicRouteId' => [
                                            'description' => '动态路由ID。',
                                            'type' => 'string',
                                            'example' => 'dr-a0ca843f53cf****',
                                        ],
                                        'Name' => [
                                            'description' => '动态路由的名称。',
                                            'type' => 'string',
                                            'example' => 'dynamic_route_name',
                                        ],
                                        'Description' => [
                                            'description' => '动态路由的描述。',
                                            'type' => 'string',
                                            'example' => '这是一条动态路由',
                                        ],
                                        'Status' => [
                                            'description' => '动态路由状态。取值：'."\n"
                                                .'- **Enabled**：开启。'."\n"
                                                .'- **Disabled**：关闭。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'Enabled' => '开启',
                                                'Disabled' => '关闭',
                                            ],
                                            'example' => 'Enabled',
                                        ],
                                        'Priority' => [
                                            'description' => '动态路由优先级。数字1表示优先级最高。优先级排序和列表查询从上到下保持一致。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'RegionIds' => [
                                            'description' => 'SASE的POP集群接入点支持的地域列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'SASE的POP集群接入点支持的地域。',
                                                'type' => 'string',
                                                'enumValueTitles' => [
                                                    'cn-shenzhen' => '深圳',
                                                    'cn-beijing' => '北京',
                                                    'cn-shanghai' => '上海',
                                                    'ap-southeast-1' => '新加坡',
                                                    'us-east-1' => '弗吉尼亚',
                                                    'us-west-1' => '硅谷',
                                                    'cn-hangzhou' => '杭州',
                                                    'cn-chengdu' => '成都',
                                                ],
                                                'example' => 'ap-southeast-1',
                                            ],
                                        ],
                                        'ApplicationType' => [
                                            'description' => '动态路由的应用类型。取值：'."\n"
                                                .'- **All**：全部应用。'."\n"
                                                .'- **Application**：应用。'."\n"
                                                .'- **Tag**：标签。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'All' => '全部应用',
                                                'Tag' => '标签',
                                                'Application' => '应用',
                                            ],
                                            'example' => 'Application',
                                        ],
                                        'ApplicationIds' => [
                                            'description' => '动态路由的内网访问应用ID集合。当应用类型为**Application**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '动态路由的内网访问应用ID。',
                                                'type' => 'string',
                                                'example' => 'pa-application-e12860ef6c48****',
                                            ],
                                        ],
                                        'TagIds' => [
                                            'description' => '动态路由的内网访问标签ID集合。当应用类型为**Tag**时，该字段有值。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '动态路由的内网访问标签ID。',
                                                'type' => 'string',
                                                'example' => 'tag-d3f64e8bdd4a****',
                                            ],
                                        ],
                                        'DynamicRouteType' => [
                                            'description' => '动态路由类型。取值：**connector**：自有专线。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'connector' => '自有专线',
                                            ],
                                            'example' => 'connector',
                                        ],
                                        'NextHop' => [
                                            'description' => '动态路由下一跳示例ID。',
                                            'type' => 'string',
                                            'example' => 'connector-8ccb13b6f52c****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '动态路由创建时间。',
                                            'type' => 'string',
                                            'example' => '2023-03-21 11:50:03',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-a0ca843f53cf****\\",\\n      \\"Name\\": \\"dynamic_route_name\\",\\n      \\"Description\\": \\"这是一条动态路由\\",\\n      \\"Status\\": \\"Enabled\\",\\n      \\"Priority\\": 1,\\n      \\"RegionIds\\": [\\n        \\"ap-southeast-1\\"\\n      ],\\n      \\"ApplicationType\\": \\"Application\\",\\n      \\"ApplicationIds\\": [\\n        \\"pa-application-e12860ef6c48****\\"\\n      ],\\n      \\"TagIds\\": [\\n        \\"tag-d3f64e8bdd4a****\\"\\n      ],\\n      \\"DynamicRouteType\\": \\"connector\\",\\n      \\"NextHop\\": \\"connector-8ccb13b6f52c****\\",\\n      \\"CreateTime\\": \\"2023-03-21 11:50:03\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询动态路由',
        ],
        'ListPrivateAccessApplicationsForDynamicRoute' => [
            'summary' => '批量查询当前阿里云账号下动态路由的应用。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DynamicRouteIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由ID。取值来源：'."\n"
                                .'- [ListDynamicRoutes](~~2525438~~)：批量查询动态路由。'."\n"
                                .'- [CreateDynamicRoute](~~2525443~~)：创建动态路由。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dr-ca9fddfac7c6****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                            'DynamicRoutes' => [
                                'description' => '动态路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '动态路由。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DynamicRouteId' => [
                                            'description' => '动态路由ID。',
                                            'type' => 'string',
                                            'example' => 'dr-ca9fddfac7c6****'."\n",
                                        ],
                                        'Applications' => [
                                            'description' => '内网访问应用集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问应用。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'ApplicationId' => [
                                                        'description' => '内网访问应用ID。',
                                                        'type' => 'string',
                                                        'example' => 'pa-application-7a9243dd02f4****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问应用名称。',
                                                        'type' => 'string',
                                                        'example' => 'application_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问应用描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被动态路由引用的内网访问应用',
                                                    ],
                                                    'Addresses' => [
                                                        'description' => '内网访问应用地址集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用地址。',
                                                            'type' => 'string',
                                                            'example' => '192.168.0.0/16',
                                                        ],
                                                    ],
                                                    'PortRanges' => [
                                                        'description' => '内网访问应用端口范围集合。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => '内网访问应用端口范围。',
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Begin' => [
                                                                    'description' => '起始端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '80',
                                                                ],
                                                                'End' => [
                                                                    'description' => '结束端口。',
                                                                    'type' => 'integer',
                                                                    'format' => 'int32',
                                                                    'example' => '81',
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'Protocol' => [
                                                        'description' => '内网访问应用协议。取值：'."\n"
                                                            .'- **All**：全部。'."\n"
                                                            .'- **TCP**'."\n"
                                                            .'- **UDP**',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'All' => 'All',
                                                            'TCP' => 'TCP',
                                                            'UDP' => 'UDP',
                                                        ],
                                                        'example' => 'All',
                                                    ],
                                                    'Status' => [
                                                        'description' => '内网访问应用状态。取值：'."\n"
                                                            .'- **Enabled**：开启。'."\n"
                                                            .'- **Disabled**：关闭。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Enabled' => '开启',
                                                            'Disabled' => '关闭',
                                                        ],
                                                        'example' => 'Enabled',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问应用创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-04-13 13:33:24',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\\\n\\",\\n      \\"Applications\\": [\\n        {\\n          \\"ApplicationId\\": \\"pa-application-7a9243dd02f4****\\",\\n          \\"Name\\": \\"application_name\\",\\n          \\"Description\\": \\"这是一条被动态路由引用的内网访问应用\\",\\n          \\"Addresses\\": [\\n            \\"192.168.0.0/16\\"\\n          ],\\n          \\"PortRanges\\": [\\n            {\\n              \\"Begin\\": 80,\\n              \\"End\\": 81\\n            }\\n          ],\\n          \\"Protocol\\": \\"All\\",\\n          \\"Status\\": \\"Enabled\\",\\n          \\"CreateTime\\": \\"2022-04-13 13:33:24\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询动态路由的应用',
        ],
        'ListPrivateAccessTagsForDynamicRoute' => [
            'summary' => '批量查询当前阿里云账号下动态路由的标签。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DynamicRouteIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由ID集合。最多可输入100个动态路由ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由ID。取值来源：'."\n"
                                .'- [ListDynamicRoutes](~~2525438~~)：批量查询动态路由。'."\n"
                                .'- [CreateDynamicRoute](~~2525443~~)：创建动态路由。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'dr-ca9fddfac7c6****',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'B608C6AE-623D-55C4-9454-601B88AE937E',
                            ],
                            'DynamicRoutes' => [
                                'description' => '动态路由列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '动态路由。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DynamicRouteId' => [
                                            'description' => '动态路由ID。',
                                            'type' => 'string',
                                            'example' => 'dr-ca9fddfac7c6****',
                                        ],
                                        'Tags' => [
                                            'description' => '内网访问标签集合。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '内网访问标签。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'TagId' => [
                                                        'description' => '内网访问标签ID。',
                                                        'type' => 'string',
                                                        'example' => 'tag-d3f64e8bdd4a****',
                                                    ],
                                                    'Name' => [
                                                        'description' => '内网访问标签名称。',
                                                        'type' => 'string',
                                                        'example' => 'tag_name',
                                                    ],
                                                    'Description' => [
                                                        'description' => '内网访问标签描述。',
                                                        'type' => 'string',
                                                        'example' => '这是一条被动态路由引用的内网访问标签',
                                                    ],
                                                    'TagType' => [
                                                        'description' => '内网访问标签类型。取值：'."\n"
                                                            .'- **Default**：默认。'."\n"
                                                            .'- **Custom**：自定义。',
                                                        'type' => 'string',
                                                        'enumValueTitles' => [
                                                            'Custom' => '自定义',
                                                            'Default' => '默认',
                                                        ],
                                                        'example' => 'Custom',
                                                    ],
                                                    'CreateTime' => [
                                                        'description' => '内网访问标签创建时间。',
                                                        'type' => 'string',
                                                        'example' => '2022-10-23 14:02:56',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B608C6AE-623D-55C4-9454-601B88AE937E\\",\\n  \\"DynamicRoutes\\": [\\n    {\\n      \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\",\\n      \\"Tags\\": [\\n        {\\n          \\"TagId\\": \\"tag-d3f64e8bdd4a****\\",\\n          \\"Name\\": \\"tag_name\\",\\n          \\"Description\\": \\"这是一条被动态路由引用的内网访问标签\\",\\n          \\"TagType\\": \\"Custom\\",\\n          \\"CreateTime\\": \\"2022-10-23 14:02:56\\"\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询动态路由的标签',
        ],
        'GetDynamicRoute' => [
            'summary' => '获取当前阿里云账号下指定动态路由的详情信息。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DynamicRouteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dr-16ff07c8207d****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'DynamicRoute' => [
                                'description' => '动态路由。',
                                'type' => 'object',
                                'properties' => [
                                    'DynamicRouteId' => [
                                        'description' => '动态路由ID。',
                                        'type' => 'string',
                                        'example' => 'dr-16ff07c8207d****'."\n",
                                    ],
                                    'Name' => [
                                        'description' => '动态路由名称。',
                                        'type' => 'string',
                                        'example' => 'dynamic_route_name',
                                    ],
                                    'Description' => [
                                        'description' => '动态路由的描述。',
                                        'type' => 'string',
                                        'example' => '这是一条动态路由'."\n",
                                    ],
                                    'Status' => [
                                        'description' => '动态路由状态。取值：'."\n"
                                            .'- **Enabled**：开启。'."\n"
                                            .'- **Disabled**：关闭。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Enabled' => '开启',
                                            'Disabled' => '关闭',
                                        ],
                                        'example' => 'Enabled',
                                    ],
                                    'Priority' => [
                                        'description' => '动态路由优先级。数字1表示优先级最高。优先级排序和列表查询从上到下保持一致。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'RegionIds' => [
                                        'description' => 'SASE的POP集群接入点支持的地域列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'SASE的POP集群接入点支持的地域。',
                                            'type' => 'string',
                                            'example' => 'ap-southeast-1',
                                        ],
                                    ],
                                    'ApplicationType' => [
                                        'description' => '动态路由的应用类型。取值：'."\n"
                                            .'- **All**：全部应用。'."\n"
                                            .'- **Application**：应用。'."\n"
                                            .'- **Tag**：标签。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'All' => '全部应用',
                                            'Tag' => '标签',
                                            'Application' => '应用',
                                        ],
                                        'example' => 'Application',
                                    ],
                                    'ApplicationIds' => [
                                        'description' => '动态路由的内网访问应用ID集合。当应用类型为**Application**时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '动态路由的内网访问应用ID。',
                                            'type' => 'string',
                                            'example' => 'pa-application-e12860ef6c48****'."\n",
                                        ],
                                    ],
                                    'TagIds' => [
                                        'description' => '动态路由的内网访问标签ID集合。当应用类型为**Tag**时，该字段有值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '动态路由的内网访问标签ID。',
                                            'type' => 'string',
                                            'example' => 'tag-fc0e2395e6f2****',
                                        ],
                                    ],
                                    'DynamicRouteType' => [
                                        'description' => '动态路由类型。取值：**connector**：自有专线。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'connector' => '自有专线',
                                        ],
                                        'example' => 'connector',
                                    ],
                                    'NextHop' => [
                                        'description' => '动态路由下一跳实例ID。',
                                        'type' => 'string',
                                        'example' => 'connector-8ccb13b6f52c****',
                                    ],
                                    'CreateTime' => [
                                        'description' => '动态路由创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-02-09 10:31:47',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'DynamicRoute.NotFound',
                        'errorMessage' => 'The dynamicRoute is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"DynamicRoute\\": {\\n    \\"DynamicRouteId\\": \\"dr-16ff07c8207d****\\\\n\\",\\n    \\"Name\\": \\"dynamic_route_name\\",\\n    \\"Description\\": \\"这是一条动态路由\\\\n\\",\\n    \\"Status\\": \\"Enabled\\",\\n    \\"Priority\\": 1,\\n    \\"RegionIds\\": [\\n      \\"ap-southeast-1\\"\\n    ],\\n    \\"ApplicationType\\": \\"Application\\",\\n    \\"ApplicationIds\\": [\\n      \\"pa-application-e12860ef6c48****\\\\n\\"\\n    ],\\n    \\"TagIds\\": [\\n      \\"tag-fc0e2395e6f2****\\"\\n    ],\\n    \\"DynamicRouteType\\": \\"connector\\",\\n    \\"NextHop\\": \\"connector-8ccb13b6f52c****\\",\\n    \\"CreateTime\\": \\"2023-02-09 10:31:47\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询动态路由详情',
        ],
        'ListDynamicRouteRegions' => [
            'summary' => '批量查询当前阿里云账号下查询SASE的POP集群接入点支持地域。',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'TotalNum' => [
                                'description' => '已授权SASE全球办公服务的POP集群接入点的地域总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Regions' => [
                                'description' => '已授权SASE全球办公服务的POP集群接入点的地域列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '已授权SASE全球办公服务的POP集群接入点的地域。',
                                    'type' => 'string',
                                    'enumValueTitles' => [
                                        'ap-southeast-1' => '新加坡',
                                        'us-east-1' => '弗吉尼亚',
                                        'us-west-1' => '硅谷',
                                    ],
                                    'example' => 'ap-southeast-1',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"TotalNum\\": 1,\\n  \\"Regions\\": [\\n    \\"ap-southeast-1\\"\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询动态路由已授权地域',
        ],
        'CreateDynamicRoute' => [
            'summary' => '创建当前阿里云账号下创建动态路由。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dynamic_route_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条动态路由',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Disabled',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由优先级。数字1表示优先级最高。取值：1-99。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '99',
                    ],
                ],
                [
                    'name' => 'RegionIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => 'SASE的POP集群接入点支持的地域列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SASE的POP集群接入点支持的地域。取值来源：'."\n"
                                .' - [ListDynamicRouteRegions](~~2525442~~)：批量查询动态路由已授权地域。',
                            'type' => 'string',
                            'required' => true,
                            'enumValueTitles' => [
                                'cn-shenzhen' => '深圳',
                                'cn-beijing' => '北京',
                                'cn-shanghai' => '上海',
                                'ap-southeast-1' => '新加坡',
                                'us-east-1' => '弗吉尼亚',
                                'us-west-1' => '硅谷',
                                'cn-hangzhou' => '杭州',
                                'cn-chengdu' => '成都',
                            ],
                            'example' => 'ap-southeast-1',
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由的应用类型。取值：'."\n"
                            .'- **All**：全部应用。'."\n"
                            .'- **Application**：应用。'."\n"
                            .'- **Tag**：标签。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'All' => '全部应用',
                            'Tag' => '标签',
                            'Application' => '应用',
                        ],
                        'example' => 'Application',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由的内网访问应用ID集合。最多可输入200个内网访问应用ID。当**ApplicationType**为**Application**时，必填。和**TagIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由的内网访问应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~611394~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~611541~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'pa-application-7a4445897856****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由的内网访问标签ID集合。最多可输入40个内网访问标签ID。当**ApplicationType**为**Tag**时，必填。和**ApplicationIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由的内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~611549~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~611552~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => true,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DynamicRouteType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由类型。取值：**connector**：自有专线。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'connector' => '自有专线',
                        ],
                        'example' => 'connector',
                    ],
                ],
                [
                    'name' => 'NextHop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由下一跳实例ID。取值来源：'."\n"
                            .' - [ListConnectors](~~611545~~)：批量查询Connector。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'connector-8ccb13b6f52c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'DynamicRouteId' => [
                                'description' => '动态路由ID。',
                                'type' => 'string',
                                'example' => 'dr-ca9fddfac7c6****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"DynamicRouteId\\": \\"dr-ca9fddfac7c6****\\"\\n}","type":"json"}]',
            'title' => '创建动态路由',
            'description' => '默认最多可创建100个动态路由。',
        ],
        'UpdateDynamicRoute' => [
            'summary' => '修改当前阿里云账号下动态路由。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DynamicRouteId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dr-ca9fddfac7c6****',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由名称。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）和短划线（-）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dynamic_route_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由描述。长度为1~128个字符，支持中文和大小写英文字母，可包含数字、半角句号（.）、下划线（_）、短划线（-）和空格。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '这是一条动态路由',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由状态。取值：'."\n"
                            .'- **Enabled**：开启。'."\n"
                            .'- **Disabled**：关闭。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Enabled' => '开启',
                            'Disabled' => '关闭',
                        ],
                        'example' => 'Disabled',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由优先级。数字1表示优先级最高。取值：1-99。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '99',
                    ],
                ],
                [
                    'name' => 'RegionIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => 'SASE的POP集群接入点支持的地域列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'SASE的POP集群接入点支持的地域。取值来源：'."\n"
                                .' - [ListDynamicRouteRegions](~~2525442~~)：批量查询动态路由已授权地域。',
                            'type' => 'string',
                            'required' => false,
                            'enumValueTitles' => [
                                'cn-shenzhen' => '深圳',
                                'cn-beijing' => '北京',
                                'cn-shanghai' => '上海',
                                'ap-southeast-1' => '新加坡',
                                'us-east-1' => '弗吉尼亚',
                                'us-west-1' => '硅谷',
                                'cn-hangzhou' => '杭州',
                                'cn-chengdu' => '成都',
                            ],
                            'example' => 'ap-southeast-1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ApplicationType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由的应用类型。取值：'."\n"
                            .'- **All**：全部应用。'."\n"
                            .'- **Application**：应用。'."\n"
                            .'- **Tag**：标签。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'All' => '全部应用',
                            'Tag' => '标签',
                            'Application' => '应用',
                        ],
                        'example' => 'Application',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由的应用ID集合。最多可输入200个内网访问应用ID。当**ApplicationType**为**Application**时，必填。和**TagIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由的内网访问应用ID。取值来源：'."\n"
                                .'- [ListPrivateAccessApplications](~~ListPrivateAccessApplications~~)：批量查询内网访问应用。'."\n"
                                .'- [CreatePrivateAccessApplication](~~CreatePrivateAccessApplication~~)：创建内网访问应用。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pa-application-f4dd77bced90****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '动态路由的内网访问标签ID集合。最多可输入40个内网访问标签ID。当**ApplicationType**为**Tag**时，必填。和**ApplicationIds**二选一。当**ApplicationType**为**All**时，禁止输入。',
                        'type' => 'array',
                        'items' => [
                            'description' => '动态路由的内网访问标签ID。取值来源：'."\n"
                                .'- [ListPrivateAccessTags](~~ListPrivateAccessTags~~)：批量查询内网访问标签。'."\n"
                                .'- [CreatePrivateAccessTag](~~CreatePrivateAccessTag~~)：创建内网访问标签。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'tag-d3f64e8bdd4a****',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DynamicRouteType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由类型。取值：**connector**：自由专线。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'connector' => '自有专线',
                        ],
                        'example' => 'connector',
                    ],
                ],
                [
                    'name' => 'NextHop',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由下一跳实例ID。取值来源：'."\n"
                            .' - [ListConnectors](~~ListConnectors~~)：批量查询Connector。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'connector-8ccb13b6f52c****',
                    ],
                ],
                [
                    'name' => 'ModifyType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动态路由的修改类型。取值：'."\n"
                            .'- **Cover**（默认）：使用**RegionIds**、**ApplicationIds**、**TagIds**、参数的值覆盖原SASE的POP集群接入点支持的地域、内网访问应用ID集合、内网访问标签集合。'."\n"
                            .'- **Append**：在原SASE的POP集群接入点支持的地域、内网访问应用ID集合、内网访问标签集合中分别增加**RegionIds**、**ApplicationIds**、**TagIds**参数中输入的值。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Cover' => '覆盖',
                            'Append' => '附加',
                        ],
                        'example' => 'Cover',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'DynamicRoute.NotFound',
                        'errorMessage' => 'The dynamicRoute is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\"\\n}","type":"json"}]',
            'title' => '修改动态路由',
        ],
        'DeleteDynamicRoute' => [
            'summary' => '删除当前阿里云账号下动态路由。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'DynamicRouteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '动态路由ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dr-ca9fddfac7c6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                404 => [
                    [
                        'errorCode' => 'DynamicRoute.NotFound',
                        'errorMessage' => 'The dynamicRoute is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"748CFDC7-1EB6-5B8B-9405-DA76ED5BB60D\\"\\n}","type":"json"}]',
            'title' => '删除动态路由',
        ],
        'LookupWmInfoMapping' => [
            'summary' => '通过查询已创建的水印信息映射关系，根据数字格式的水印信息查找得到对应的字符串格式的水印信息。',
            'methods' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '226773',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WmType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '水印类型，枚举值:'."\n"
                            .'PureDocument: 常规文档水印'."\n"
                            .'PureWebappInvisible: 常规网页水印'."\n"
                            .'PureAppInvisible: 常规APP水印'."\n"
                            .'PureScreenInvisible: 常规屏幕水印'."\n"
                            .'PureImage: 常规图片水印'."\n"
                            .'PureAudio: 常规音频水印'."\n"
                            .'PureVideo: 常规视频水印'."\n"
                            .'AigcDocument: AIGC文档水印'."\n"
                            .'AigcWebappInvisible: AIGC网页水印'."\n"
                            .'AigcAppInvisible: AIGCAPP水印'."\n"
                            .'AigcScreenInvisible: AIGC屏幕水印'."\n"
                            .'AigcImage: AIGC图片水印'."\n"
                            .'AigcAudio: AIGC音频水印'."\n"
                            .'AigcVideo: AIGC视频水印',
                        'description' => '水印类型。取值：'."\n"
                            .'- **PureWebappInvisible**：网页水印。'."\n"
                            .'- **PureAppInvisible**：App水印。'."\n"
                            .'- **PureScreenInvisible**：屏幕水印。'."\n"
                            .'- **PureDocument**：文档水印。'."\n"
                            .'- **PureImage**：图片水印。'."\n"
                            .'- **PureAudio**：音频水印。'."\n"
                            .'- **PureVideo**：视频水印。'."\n"
                            .'- **AigcWebappInvisible**：AIGC网页水印。'."\n"
                            .'- **AigcAppInvisible**：AIGC App水印。'."\n"
                            .'- **AigcScreenInvisible**：AIGC屏幕水印。'."\n"
                            .'- **AigcDocument**：AIGC文档水印。'."\n"
                            .'- **AigcImage**：AIGC图片水印。'."\n"
                            .'- **AigcAudio**：AIGC音频水印。'."\n"
                            .'- **AigcVideo**：AIGC视频水印。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'PureImage' => '图片水印',
                            'AigcAppInvisible' => 'AIGC App水印',
                            'PureWebappInvisible' => '网页水印',
                            'AigcAudio' => 'AIGC音频水印',
                            'PureDocument' => '文档水印',
                            'PureAudio' => '音频水印',
                            'AigcScreenInvisible' => 'AIGC屏幕水印',
                            'AigcVideo' => 'AIGC视频水印',
                            'AigcImage' => 'AIGC图片水印',
                            'AigcWebappInvisible' => 'AIGC网页水印',
                            'PureAppInvisible' => 'App水印',
                            'PureScreenInvisible' => '屏幕水印',
                            'PureVideo' => '视频水印',
                        ],
                        'example' => 'PureDocument',
                        'enum' => [
                            'PureWebappInvisible',
                            'PureAppInvisible',
                            'PureScreenInvisible',
                            'PureImage',
                            'PureAudio',
                            'PureVideo',
                            'AigcWebappInvisible',
                            'AigcAppInvisible',
                            'AigcScreenInvisible',
                            'AigcImage',
                            'AigcAudio',
                            'AigcVideo',
                            'PureDocument',
                        ],
                    ],
                ],
                [
                    'name' => 'WmInfoSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
                        'description' => '水印信息的容量位宽，默认为32。该参数应该和实际嵌入或者生成透明图时的容量位宽保持一致。取值范围：32~64。该参数的值应当和创建映射关系时保持一致。否则会导致查询不到映射关系。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '64',
                        'minimum' => '32',
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'WmInfoUint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数字格式的水印信息。取值来源：'."\n"
                            .'- [CreateWmInfoMapping](~~CreateWmInfoMapping~~)：创建水印信息映射关系接口的**WmInfoUint**返回值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
                            ],
                            'Data' => [
                                'description' => '映射关系查询结果。',
                                'type' => 'object',
                                'properties' => [
                                    'WmInfoBytesB64' => [
                                        'description' => '根据映射关系查询得到的字符串格式的水印信息。取值来源：'."\n"
                                            .'- [CreateWmInfoMapping](~~CreateWmInfoMapping~~)：创建水印信息映射关系接口的**WmInfoBytesB64**参数。',
                                        'type' => 'string',
                                        'example' => 'aGVsbG8gc2F*****'."\n",
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Data\\": {\\n    \\"WmInfoBytesB64\\": \\"aGVsbG8gc2F*****\\\\n\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询水印信息映射关系',
        ],
        'CreateWmInfoMapping' => [
            'summary' => '创建一条字符串格式的水印信息到数字格式的水印信息的映射关系。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '226693',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WmType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印类型，枚举值:'."\n"
                            .'PureDocument: 常规文档水印'."\n"
                            .'PureWebappInvisible: 常规网页水印'."\n"
                            .'PureAppInvisible: 常规APP水印'."\n"
                            .'PureScreenInvisible: 常规屏幕水印'."\n"
                            .'PureImage: 常规图片水印'."\n"
                            .'PureAudio: 常规音频水印'."\n"
                            .'PureVideo: 常规视频水印'."\n"
                            .'AigcDocument: AIGC文档水印'."\n"
                            .'AigcWebappInvisible: AIGC网页水印'."\n"
                            .'AigcAppInvisible: AIGCAPP水印'."\n"
                            .'AigcScreenInvisible: AIGC屏幕水印'."\n"
                            .'AigcImage: AIGC图片水印'."\n"
                            .'AigcAudio: AIGC音频水印'."\n"
                            .'AigcVideo: AIGC视频水印',
                        'description' => '水印类型。取值：'."\n"
                            .'- **PureWebappInvisible**：网页水印。'."\n"
                            .'- **PureAppInvisible**：App水印。'."\n"
                            .'- **PureScreenInvisible**：屏幕水印。'."\n"
                            .'- **PureDocument**：文档水印。'."\n"
                            .'- **PureImage**：图片水印。'."\n"
                            .'- **PureAudio**：音频水印。'."\n"
                            .'- **PureVideo**：视频水印。'."\n"
                            .'- **AigcWebappInvisible**：AIGC网页水印。'."\n"
                            .'- **AigcAppInvisible**：AIGC App水印。'."\n"
                            .'- **AigcScreenInvisible**：AIGC屏幕水印。'."\n"
                            .'- **AigcDocument**：AIGC文档水印。'."\n"
                            .'- **AigcImage**：AIGC图片水印。'."\n"
                            .'- **AigcAudio**：AIGC音频水印。'."\n"
                            .'- **AigcVideo**：AIGC视频水印。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'PureImage' => '图片水印',
                            'AigcAppInvisible' => 'AIGC App水印',
                            'PureWebappInvisible' => '网页水印',
                            'AigcAudio' => 'AIGC音频水印',
                            'PureDocument' => '文档水印',
                            'PureAudio' => '音频水印',
                            'AigcScreenInvisible' => 'AIGC屏幕水印',
                            'AigcVideo' => 'AIGC视频水印',
                            'AigcImage' => 'AIGC图片水印',
                            'AigcWebappInvisible' => 'AIGC网页水印',
                            'PureAppInvisible' => 'App水印',
                            'PureScreenInvisible' => '屏幕水印',
                            'PureVideo' => '视频水印',
                        ],
                        'example' => 'PureDocument',
                        'enum' => [
                            'PureWebappInvisible',
                            'PureAppInvisible',
                            'PureScreenInvisible',
                            'PureImage',
                            'PureAudio',
                            'PureVideo',
                            'AigcWebappInvisible',
                            'AigcAppInvisible',
                            'AigcScreenInvisible',
                            'AigcImage',
                            'AigcAudio',
                            'AigcVideo',
                            'PureDocument',
                        ],
                    ],
                ],
                [
                    'name' => 'WmInfoSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
                        'description' => '水印信息的容量位宽，默认为32。该参数应该和实际嵌入或者生成透明图时的容量位宽保持一致。取值范围：32~64。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '64',
                        'minimum' => '32',
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'WmInfoBytesB64',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 不能设置。',
                        'description' => 'Base64编码后的字符串格式水印信息 。长度1～300个字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aGVsbG8gc2F*****'."\n",
                        'maxLength' => 400,
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '7E9D7ACD-53D5-56EF-A913-79D148D06299',
                            ],
                            'Data' => [
                                'description' => '映射结果。',
                                'type' => 'object',
                                'properties' => [
                                    'WmInfoUint' => [
                                        'description' => '映射得到的数字格式的水印信息。后续可以使用该值查找到对应映射的字符串格式的水印信息。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123***',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7E9D7ACD-53D5-56EF-A913-79D148D06299\\",\\n  \\"Data\\": {\\n    \\"WmInfoUint\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '创建水印信息映射关系',
        ],
        'CreateWmBaseImage' => [
            'summary' => '获取网页水印、屏幕水印和App水印的暗水印透明底图。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '226309',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WmType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印类型'."\n"
                            .'PureWebappInvisible: 常规网页水印'."\n"
                            .'PureAppInvisible: 常规APP水印'."\n"
                            .'PureScreenInvisible: 常规屏幕水印'."\n"
                            .'AigcWebappInvisible: AIGC网页水印'."\n"
                            .'AigcAppInvisible: AIGCAPP水印'."\n"
                            .'AigcScreenInvisible: AIGC屏幕水印',
                        'description' => '水印类型。取值：'."\n"
                            .'- **PureWebappInvisible**：网页水印。'."\n"
                            .'- **PureAppInvisible**：App水印。'."\n"
                            .'- **PureScreenInvisible**：屏幕水印。'."\n"
                            .'- **AigcWebappInvisible**：AIGC网页水印。'."\n"
                            .'- **AigcAppInvisible**：AIGC App水印。'."\n"
                            .'- **AigcScreenInvisible**：AIGC屏幕水印。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'AigcAppInvisible' => 'AIGC App水印',
                            'PureWebappInvisible' => '网页水印',
                            'AigcWebappInvisible' => 'AIGC网页水印',
                            'PureAppInvisible' => 'App水印',
                            'PureScreenInvisible' => '屏幕水印',
                            'AigcScreenInvisible' => 'AIGC屏幕水印',
                        ],
                        'example' => 'PureWebappInvisible',
                        'enum' => [
                            'PureWebappInvisible',
                            'PureAppInvisible',
                            'PureScreenInvisible',
                            'AigcWebappInvisible',
                            'AigcAppInvisible',
                            'AigcScreenInvisible',
                        ],
                    ],
                ],
                [
                    'name' => 'WmInfoSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
                        'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'enumValueTitles' => [
                            32 => '32',
                            40 => '40',
                            64 => '64',
                        ],
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'WmInfoUint',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '10进制数字格式水印信息。若设置该值，则 WmInfoBytesB64 不能设置。'."\n"
                            ."\n"
                            .'取值范围取决于  WmInfoSize 参数：'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为**32**时，取值范围为 1~4294967295。'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为**40**时，取值范围为 1~1099511627775。'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为**64**时，取值范围为 1~18446744073709551615。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12*****',
                    ],
                ],
                [
                    'name' => 'WmInfoBytesB64',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 参数不能设置。',
                        'description' => 'Base64编码后的字符串格式水印信息 。长度1～300个字符。若设置该值，则 WmInfoUint 参数不能设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aGVsbG8gc2F*****',
                        'maxLength' => 400,
                    ],
                ],
                [
                    'name' => 'Scale',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印图片的缩放比例。',
                        'description' => '水印图片的缩放比例。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '3',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Width',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印图片的宽度，单位为像素。取值范围为 [100, 5000]',
                        'description' => '水印图片的宽度，单位为像素。取值：100~5000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '5000',
                        'minimum' => '100',
                        'example' => '1920',
                    ],
                ],
                [
                    'name' => 'Height',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印图片的高度，单位为像素。取值范围为 [100, 5000]',
                        'description' => '水印图片的高度，单位为像素。取值：100~5000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '5000',
                        'minimum' => '100',
                        'example' => '1080',
                    ],
                ],
                [
                    'name' => 'Opacity',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印图片的透明度。取值范围为 [1, 255]',
                        'description' => '水印图片的透明度。取值：1~255。取值越大，透明度越低。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '255',
                        'minimum' => '1',
                        'example' => '255',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '58D6B23E-E5DA-5418-8F61-51A3B5A30049',
                            ],
                            'Data' => [
                                'description' => '透明图信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ImageId' => [
                                        'description' => '透明图ID，相同的ID表示图片内容完全一致。',
                                        'type' => 'string',
                                        'example' => 'fafb432cdede9b20640e12105845386e-496883833-8242409229217337*****',
                                    ],
                                    'ImageUrl' => [
                                        'description' => '可用于下载图片的临时URL。',
                                        'type' => 'string',
                                        'example' => 'https://example.com/test-*****.png',
                                    ],
                                    'ImageUrlExp' => [
                                        'description' => '图片临时URL的有效截止时间，格式为Unix时间戳，单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '17185*****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58D6B23E-E5DA-5418-8F61-51A3B5A30049\\",\\n  \\"Data\\": {\\n    \\"ImageId\\": \\"fafb432cdede9b20640e12105845386e-496883833-8242409229217337*****\\",\\n    \\"ImageUrl\\": \\"https://example.com/test-*****.png\\",\\n    \\"ImageUrlExp\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '创建暗水印透明底图',
        ],
        'GetWmExtractTask' => [
            'summary' => '根据创建提取任务时获取的任务ID，查询水印提取任务结果。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '216135',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建提取任务返回的 task id',
                        'description' => '提取任务ID。取值来源：'."\n"
                            .'- [CreateWmExtractTask](~~CreateWmExtractTask~~)：创建水印提取任务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => '102350E7-1A20-58F5-9D63-ABEA820AE6E1',
                            ],
                            'Data' => [
                                'description' => '任务结果。',
                                'type' => 'object',
                                'properties' => [
                                    'CreateTime' => [
                                        'title' => '任务创建时间',
                                        'description' => '任务创建时间',
                                        'type' => 'string',
                                        'example' => '2024-01-01 11:22:33',
                                    ],
                                    'TaskId' => [
                                        'title' => '任务id',
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
                                    ],
                                    'Status' => [
                                        'title' => '任务状态'."\n"
                                            .'Running: 运行中'."\n"
                                            .'Success: 任务执行成功'."\n"
                                            .'Failed: 任务执行失败',
                                        'description' => '任务状态。取值：'."\n"
                                            .'- **Running**：运行中。'."\n"
                                            .'- **Success**：成功。'."\n"
                                            .'- **Failed**：失败。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Failed' => '失败',
                                            'Running' => '运行中',
                                            'Success' => '成功',
                                        ],
                                        'example' => 'Success',
                                        'enum' => [
                                            'Running',
                                            'Success',
                                            'Failed',
                                        ],
                                    ],
                                    'Filename' => [
                                        'title' => '创建提取任务时传入的文件名',
                                        'description' => '创建提取任务时传入的文件名。',
                                        'type' => 'string',
                                        'example' => 'test-****.pdf',
                                    ],
                                    'WmType' => [
                                        'title' => '创建提取任务时传入的水印类型',
                                        'description' => '创建提取任务时传入的水印类型。',
                                        'type' => 'string',
                                        'example' => 'PureDocument',
                                    ],
                                    'WmInfoSize' => [
                                        'title' => '创建提取任务时传入的参数',
                                        'description' => '创建提取任务时传入的参数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '32',
                                    ],
                                    'WmInfoUint' => [
                                        'title' => '提取得到的结果',
                                        'description' => '提取得到的10进制数字格式的水印信息。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123**',
                                    ],
                                    'WmInfoBytesB64' => [
                                        'title' => '提取得到的结果',
                                        'description' => '提取得到的base64编码字符串格式的水印信息。',
                                        'type' => 'string',
                                        'example' => 'aGVsbG8gc2Fz****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"102350E7-1A20-58F5-9D63-ABEA820AE6E1\\",\\n  \\"Data\\": {\\n    \\"CreateTime\\": \\"2024-01-01 11:22:33\\",\\n    \\"TaskId\\": \\"wmt-9648c22d2eb2cb57bb855dcae7898464********\\",\\n    \\"Status\\": \\"Success\\",\\n    \\"Filename\\": \\"test-****.pdf\\",\\n    \\"WmType\\": \\"PureDocument\\",\\n    \\"WmInfoSize\\": 32,\\n    \\"WmInfoUint\\": 0,\\n    \\"WmInfoBytesB64\\": \\"aGVsbG8gc2Fz****\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询水印提取任务详情',
        ],
        'GetWmEmbedTask' => [
            'summary' => '使用创建水印嵌入任务得到的任务ID，查询嵌入任务结果。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '216126',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '创建嵌入任务时得到的任务ID',
                        'description' => '创建嵌入任务时得到的任务ID。取值来源：'."\n"
                            .'- [CreateWmEmbedTask](~~CreateWmEmbedTask~~)：创建水印嵌入任务。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'job:5GfrJYsoaffmCE7Z5bZtjU********',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
                            ],
                            'Data' => [
                                'description' => '水印嵌入任务结果。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'title' => '嵌入任务ID',
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'job:5GfrJYsoaffmCE7Z5bZtjUxxxxxxxxxx',
                                    ],
                                    'TaskStatus' => [
                                        'title' => '任务状态'."\n"
                                            .'Running: 运行中'."\n"
                                            .'Success: 任务执行成功'."\n"
                                            .'Failed: 任务执行失败'."\n",
                                        'description' => '任务状态。取值：'."\n"
                                            .'- **Running**：运行中。'."\n"
                                            .'- **Success**：成功。'."\n"
                                            .'- **Failed**：失败。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'Failed' => '失败',
                                            'Running' => '运行中',
                                            'Success' => '成功',
                                        ],
                                        'example' => 'Success',
                                        'enum' => [
                                            'Running',
                                            'Success',
                                            'Failed',
                                        ],
                                    ],
                                    'FileUrl' => [
                                        'title' => '输入文件的下载 url',
                                        'description' => '嵌入水印信息得到的文件的临时URL。',
                                        'type' => 'string',
                                        'example' => 'https://example.com/embed-****.pdf',
                                    ],
                                    'FileUrlExp' => [
                                        'title' => 'fileUrl 的过期时间，格式为 unix 时间戳，单位为秒',
                                        'description' => 'FileUrl的过期时间，格式为Unix时间戳，精度为秒。',
                                        'type' => 'string',
                                        'example' => '171859****',
                                    ],
                                    'Filename' => [
                                        'title' => '输出文件的文件名',
                                        'description' => '嵌入水印信息得到的文件的文件名。',
                                        'type' => 'string',
                                        'example' => 'embed-****.pdf'."\n",
                                    ],
                                    'OutFileHashMd5' => [
                                        'title' => '输出文件的md5哈希，用于校验',
                                        'description' => '嵌入水印信息得到的文件的md5哈希，用于排查问题。',
                                        'type' => 'string',
                                        'example' => 'd41d8cd98f00b204e9800998ecf8****',
                                    ],
                                    'OutFileSize' => [
                                        'title' => '输入文件的大小（单位为字节），用于校验',
                                        'description' => '嵌入水印信息得到的文件的大小，单位为字节。用于排查问题。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '123**',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"job:5GfrJYsoaffmCE7Z5bZtjUxxxxxxxxxx\\",\\n    \\"TaskStatus\\": \\"Success\\",\\n    \\"FileUrl\\": \\"https://example.com/embed-****.pdf\\",\\n    \\"FileUrlExp\\": \\"171859****\\",\\n    \\"Filename\\": \\"embed-****.pdf\\\\n\\",\\n    \\"OutFileHashMd5\\": \\"d41d8cd98f00b204e9800998ecf8****\\",\\n    \\"OutFileSize\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '查询水印嵌入任务详情',
        ],
        'CreateWmExtractTask' => [
            'summary' => '创建数字水印提取任务。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '216136',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WmType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印类型，枚举值:'."\n"
                            .'PureDocument: 常规文档水印'."\n"
                            .'PureWebappInvisible: 常规网页水印'."\n"
                            .'PureAppInvisible: 常规APP水印'."\n"
                            .'PureScreenInvisible: 常规屏幕水印'."\n"
                            .'PureImage: 常规图片水印'."\n"
                            .'PureAudio: 常规音频水印'."\n"
                            .'PureVideo: 常规视频水印'."\n"
                            .'AigcDocument: AIGC文档水印'."\n"
                            .'AigcWebappInvisible: AIGC网页水印'."\n"
                            .'AigcAppInvisible: AIGCAPP水印'."\n"
                            .'AigcScreenInvisible: AIGC屏幕水印'."\n"
                            .'AigcImage: AIGC图片水印'."\n"
                            .'AigcAudio: AIGC音频水印'."\n"
                            .'AigcVideo: AIGC视频水印',
                        'description' => '水印类型。取值：'."\n"
                            .'- **PureWebappInvisible**：网页水印。'."\n"
                            .'- **PureAppInvisible**：App水印。'."\n"
                            .'- **PureScreenInvisible**：屏幕水印。'."\n"
                            .'- **PureDocument**：文档水印。'."\n"
                            .'- **PureImage**：图片水印。'."\n"
                            .'- **PureAudio**：音频水印。'."\n"
                            .'- **PureVideo**：视频水印。'."\n"
                            .'- **AigcWebappInvisible**：AIGC网页水印。'."\n"
                            .'- **AigcAppInvisible**：AIGC App水印。'."\n"
                            .'- **AigcScreenInvisible**：AIGC屏幕水印。'."\n"
                            .'- **AigcDocument**：AIGC文档水印。'."\n"
                            .'- **AigcImage**：AIGC图片水印。'."\n"
                            .'- **AigcAudio**：AIGC音频水印。'."\n"
                            .'- **AigcVideo**：AIGC视频水印。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'PureImage' => '图片水印',
                            'AigcAppInvisible' => 'AIGC App水印',
                            'PureWebappInvisible' => '网页水印',
                            'AigcAudio' => 'AIGC音频水印',
                            'PureDocument' => 'AIGC文档水印',
                            'PureAudio' => '音频水印',
                            'AigcScreenInvisible' => 'AIGC屏幕水印',
                            'AigcVideo' => 'AIGC视频水印',
                            'AigcImage' => 'AIGC图片水印',
                            'AigcWebappInvisible' => 'AIGC网页水印',
                            'PureAppInvisible' => 'App水印',
                            'PureScreenInvisible' => '屏幕水印',
                            'PureVideo' => '视频水印',
                        ],
                        'example' => 'PureDocument',
                        'enum' => [
                            'PureWebappInvisible',
                            'PureAppInvisible',
                            'PureScreenInvisible',
                            'PureImage',
                            'PureAudio',
                            'PureVideo',
                            'AigcWebappInvisible',
                            'AigcAppInvisible',
                            'AigcScreenInvisible',
                            'AigcImage',
                            'AigcAudio',
                            'AigcVideo',
                            'PureDocument',
                        ],
                    ],
                ],
                [
                    'name' => 'FileUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '可用于下载文件的 URL'."\n"
                            .'控制台调用时传递文件的 oss 路径',
                        'description' => '用于下载待提取文件的URL，需要可以公网访问。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://example.com/test-****.pdf',
                    ],
                ],
                [
                    'name' => 'Filename',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '文件名，后端需要根据文件名的后缀判断校验文件类型',
                        'description' => '待提取文件的文件名，后端需要根据文件名的后缀判断校验文件类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-****.pdf',
                    ],
                ],
                [
                    'name' => 'WmInfoSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
                        'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '64',
                        'minimum' => '32',
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'VideoSpeed',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '长视频水印参数：含义为视频倍速，浮点数字符串。默认1，代表添加水印时的采用倍速，或者添加水印之后，视频时间轴拉伸的倍速',
                        'description' => '长视频水印参数：含义为视频倍速，浮点数字符串。默认1，代表添加水印时的采用倍速，或者添加水印之后，视频时间轴拉伸的倍速。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'VideoIsLong',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '视频水印参数：在嵌入视频水印时，通过该值控制使用使用长视频的SDK。默认为 false，此时会使用短视频的 SDK',
                        'description' => '视频水印参数：是否使用长视频水印SDK，默认为false。取值：'."\n"
                            ."\n"
                            .'- **true**：是'."\n"
                            .'- **false**：否',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '是',
                            'false' => '否',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'DocumentIsCapture',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '文档水印参数：当提取文档截图中的背景暗水印信息时将该参数设为true。默认为 false',
                        'description' => '文档水印参数：指定待提取文件是否为添加了背景水文档的截图。服务会根据待提取文件是否为图像文件来判断是否走文档背景水印提取逻辑，因此默认无需设置该参数 。取值：'."\n"
                            ."\n"
                            .'- **true**：是'."\n"
                            .'- **false**：否',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '是',
                            'false' => '否',
                        ],
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
                            ],
                            'Data' => [
                                'description' => '水印提取任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'title' => 'task id, 用于查询任务结果',
                                        'description' => '任务ID，用于查询任务结果。',
                                        'type' => 'string',
                                        'example' => 'wmt-9648c22d2eb2cb57bb855dcae7898464********',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"wmt-9648c22d2eb2cb57bb855dcae7898464********\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建水印提取任务',
        ],
        'CreateWmEmbedTask' => [
            'summary' => '创建数字水印嵌入任务。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '216120',
                'abilityTreeNodes' => [
                    'FEATUREcsas3KYQ7V',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'WmType',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印类型'."\n"
                            .'PureDocument: 常规文档水印'."\n"
                            .'PureImage: 常规图片水印'."\n"
                            .'PureAudio: 常规音频水印'."\n"
                            .'PureVideo: 常规视频水印'."\n"
                            .'AigcDocument: AIGC文档水印'."\n"
                            .'AigcImage: AIGC图片水印'."\n"
                            .'AigcAudio: AIGC音频水印'."\n"
                            .'AigcVideo: AIGC视频水印',
                        'description' => '水印类型。取值：'."\n"
                            .'- **PureDocument**：文档水印。'."\n"
                            .'- **PureImage**：图片水印。'."\n"
                            .'- **PureAudio**：音频水印。'."\n"
                            .'- **PureVideo**：视频水印。'."\n"
                            .'- **AigcDocument**：AIGC文档水印。'."\n"
                            .'- **AigcImage**：AIGC图片水印。'."\n"
                            .'- **AigcAudio**：AIGC音频水印。'."\n"
                            .'- **AigcVideo**：AIGC视频水印。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'PureImage' => '图片水印',
                            'AigcImage' => 'AIGC图片水印',
                            'AigcAudio' => 'AIGC音频水印',
                            'PureDocument' => '文档水印',
                            'PureAudio' => '音频水印',
                            'PureVideo' => '视频水印',
                            'AigcDocument' => 'AIGC文档水印',
                            'AigcVideo' => 'AIGC视频水印',
                        ],
                        'example' => 'PureDocument',
                        'enum' => [
                            'PureDocument',
                            'PureImage',
                            'PureAudio',
                            'PureVideo',
                            'AigcDocument',
                            'AigcImage',
                            'AigcAudio',
                            'AigcVideo',
                        ],
                    ],
                ],
                [
                    'name' => 'Filename',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '文件名，后端需要根据文件名的后缀判断校验文件类型',
                        'description' => '待嵌入文件的文件名，后端需要根据文件名的后缀判断校验文件类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'abc****.pdf',
                    ],
                ],
                [
                    'name' => 'FileUrl',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '可用于下载文件的 URL'."\n"
                            .'控制台调用时传递文件的 oss 路径',
                        'description' => '可用于下载待嵌入文件的URL，需要可以公网访问。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://example.com/abc****.pdf',
                    ],
                ],
                [
                    'name' => 'WmInfoSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '水印信息的容量位宽，可用值为 32, 40, 64，不传时默认为32。非32时需显式指定。比如嵌入式使用的是 40 位的sdk，那么提取时也需要将该值设为 40。',
                        'description' => '水印信息的容量位宽，默认为32。该参数嵌入和提取时需要保持一致。比如嵌入式使用的是 40 位的SDK，那么提取时也需要将该值设为 40。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '64',
                        'minimum' => '32',
                        'enumValueTitles' => [
                            32 => '32',
                            40 => '40',
                            64 => '64',
                        ],
                        'example' => '32',
                    ],
                ],
                [
                    'name' => 'WmInfoUint',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '10进制数字格式水印信息。若设置该值，则 WmInfoBytesB64 不能设置。'."\n"
                            ."\n"
                            .'取值范围取决于 WmInfoSize 参数：'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为32时，取值范围为 1~4294967295。'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为40时，取值范围为 1~1099511627775。'."\n"
                            ."\n"
                            .'- 当 WmInfoSize 为64时，取值范围为 1~18446744073709551615。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'WmInfoBytesB64',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'base64 编码后的字符串格式水印信息 。若设置该值，则 wmInfoUint 不能设置。',
                        'description' => 'Base64 编码后的字符串格式水印信息 。若设置该值，则 WmInfoUint 不能设置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'aGVsbG8gc2F*****',
                        'maxLength' => 400,
                    ],
                ],
                [
                    'name' => 'VideoIsLong',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '视频水印参数：默认为 false，此时会使用短视频的 SDK，设为true时会使用使用长视频的SDK',
                        'description' => '视频水印参数：是否使用长视频水印SDK，默认为false。取值：'."\n"
                            ."\n"
                            .'- **true**: 是'."\n"
                            .'- **false**: 否',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => '是',
                            'false' => '否',
                        ],
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'VideoBitrate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '短视频水印参数，含义为视频的比特率(bitrate)，短视频时必须设置该参数。',
                        'description' => '短视频水印参数：含义为视频的比特率，默认会自动获取视频的比特率，可以通过该参数强制指定提取时使用的比特率。通常无需设置该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3000k',
                    ],
                ],
                [
                    'name' => 'ImageEmbedLevel',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '图像水印参数：取值范围为 [0, 4]，默认值为 2。更大的值意味着更高的鲁棒性，但是视觉质量会下降。',
                        'description' => '图像水印参数：更大的值意味着更高的鲁棒性，但是视觉质量会下降。默认值2。取值：0~4。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ImageEmbedJpegQuality',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '图像水印参数：期望的输出图像jpeg压缩质量因子，取值范围 [1, 100]，默认值 95',
                        'description' => '图像水印参数：期望的输出图像jpeg压缩质量因子，默认值 95。取值：1~100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '95',
                    ],
                ],
                [
                    'name' => 'DocumentControl',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '文档水印控制参数。',
                        'type' => 'object',
                        'properties' => [
                            'InvisibleAntiTextCopy' => [
                                'description' => '是否启用零宽字符暗水印。零宽字符暗水印可以抵抗文档增、删、改、另存（格式不变）、部分文本复制粘贴、CopytoTxt攻击。不能抵抗格式转换toPDF攻击。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '是',
                                    'false' => '否',
                                ],
                                'example' => 'true',
                            ],
                            'InvisibleAntiAllCopy' => [
                                'description' => '是否启用组件暗水印。组件暗水印可以抵抗文档增、删、改、另存（格式不变）、docx全选复制拷贝到新docx文档，不能抵抗格式转换攻击。取值：'."\n"
                                    ."\n"
                                    .'- **true**：是'."\n"
                                    .'- **false**：否',
                                'type' => 'boolean',
                                'required' => false,
                                'enumValueTitles' => [
                                    'true' => '是',
                                    'false' => '否',
                                ],
                                'example' => 'true',
                            ],
                            'BackgroundControl' => [
                                'description' => '背景水印控制参数。',
                                'type' => 'object',
                                'properties' => [
                                    'BgAddVisible' => [
                                        'description' => '是否启用背景明水印。取值：'."\n"
                                            ."\n"
                                            .'- **true**：是'."\n"
                                            .'- **false**：否',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'BgVisibleControl' => [
                                        'description' => '背景明水印控制参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VisibleText' => [
                                                'description' => '背景明水印文案。格式为utf8字符串。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'hello ****',
                                                'maxLength' => 1000,
                                            ],
                                            'Mode' => [
                                                'title' => '',
                                                'description' => '背景明水印模式。取值：'."\n"
                                                    ."\n"
                                                    .'- **pos**：在背景的特定位置嵌入一处明水印文案。'."\n"
                                                    .'- **repeat**：在文档背景中平铺嵌入多处明水印文案。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'pos',
                                                'enum' => [
                                                    'repeat',
                                                    'pos',
                                                ],
                                            ],
                                            'FontSize' => [
                                                'description' => '明水印文字字号。取值越大，字体越大。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '200',
                                                'example' => '30',
                                            ],
                                            'FontColor' => [
                                                'description' => '明水印文字颜色。格式为 0xFFFFFF RGB颜色格式。如 0x000000 表示黑色。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '0x000000',
                                                'pattern' => '^0[xX][0-9a-fA-F]{6}$',
                                            ],
                                            'Angle' => [
                                                'description' => '明水印文字逆时针旋转角度。取值范围1~360。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '360',
                                                'minimum' => '0',
                                                'example' => '30',
                                            ],
                                            'PosX' => [
                                                'description' => 'Mode为pos时生效。控制明水印水平位置的参数，以左下角为原点。数值在0～1之间时，为比例控制。数值大于1时，为精确的像素位置控制。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '0.5',
                                                'pattern' => '^[\\d.]+$',
                                            ],
                                            'PosY' => [
                                                'description' => 'Mode为pos时生效。控制明水印垂直位置的参数，以左下角为原点。数值在0～1之间时，为比例控制，数值大于1时，为精确的像素位置控制。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => '0.5',
                                                'pattern' => '^[\\d.]+$',
                                            ],
                                            'HorizontalNumber' => [
                                                'description' => 'Mode为repeat时生效。表示明水印在水平方向上重复出现的次数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '200',
                                                'example' => '3',
                                            ],
                                            'VerticalNumber' => [
                                                'description' => 'Mode为repeat时生效。表示明水印在垂直方向上重复出现的次数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '200',
                                                'example' => '3',
                                            ],
                                            'Opacity' => [
                                                'description' => '明水印透明度参数。取值范围1~255。取值越大，越不透明。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '255',
                                                'minimum' => '1',
                                                'example' => '100',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'BgAddInvisible' => [
                                        'description' => '是否添加背景暗水印。取值：'."\n"
                                            ."\n"
                                            .'- **true**：是'."\n"
                                            .'- **false**：否',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'enumValueTitles' => [
                                            'true' => '是',
                                            'false' => '否',
                                        ],
                                        'example' => 'true',
                                    ],
                                    'BgInvisibleControl' => [
                                        'description' => '背景暗水印控制参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Opacity' => [
                                                'description' => '背景暗水印透明度参数。取值范围1~13。取值越大，越不透明。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                                'maximum' => '255',
                                                'minimum' => '1',
                                                'example' => '10',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'BE4FB974-11BC-5453-9BE1-1606A73EACA6',
                            ],
                            'Data' => [
                                'description' => '任务信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'title' => '嵌入任务ID',
                                        'description' => '任务ID，用于后续查询任务执行结果。',
                                        'type' => 'string',
                                        'example' => 'job:5GfrJYsoaffmCE7Z5bZtjUefzxfd****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BE4FB974-11BC-5453-9BE1-1606A73EACA6\\",\\n  \\"Data\\": {\\n    \\"TaskId\\": \\"job:5GfrJYsoaffmCE7Z5bZtjUefzxfd****\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建水印嵌入任务',
        ],
        'RevokeUserSession' => [
            'summary' => '吊销用户登录会话',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '224559',
                'abilityTreeNodes' => [
                    'FEATUREcsas62O8LY',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IdpId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户所属身份源配置ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idp-cfg9vcrqylo39c39uxnw',
                    ],
                ],
                [
                    'name' => 'ExternalIds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部身份源用户唯一ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345678',
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
                                'description' => '本次请求的ID。',
                                'type' => 'string',
                                'example' => 'D6707286-A50E-57B1-B2CF-EFAC59E850D8',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D6707286-A50E-57B1-B2CF-EFAC59E850D8\\"\\n}","type":"json"}]',
            'title' => '吊销用户登录会话',
        ],
        'ListPopTrafficStatistics' => [
            'summary' => '查询SASE的POP节点带宽。',
            'methods' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据的起始时间。以秒为单位的UNIX时间戳。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1681035708',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间。以秒为单位的UNIX时间戳。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1681293719',
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
                                'example' => 'EFE7EBB2-449D-5BBB-B381-CA7839BC1649',
                            ],
                            'TrafficData' => [
                                'description' => 'POP点带宽数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '流入/流出带宽数据列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'MetricName' => [
                                            'description' => '统计指标名称。分为流入、流出两种。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'InternetTx' => 'InternetTx',
                                                'InternetRx' => 'InternetRx',
                                            ],
                                            'example' => 'InternetTx',
                                        ],
                                        'Datapoints' => [
                                            'description' => 'POP点带宽数据点列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'POP点带宽数据点。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'DateTime' => [
                                                        'description' => '该数据点对应时间。',
                                                        'type' => 'string',
                                                        'example' => '2023-12-06 15:29:00',
                                                    ],
                                                    'Average' => [
                                                        'description' => '以分钟为单位的平均带宽值。单位为Byte/s。',
                                                        'type' => 'number',
                                                        'format' => 'double',
                                                        'example' => '15325',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EFE7EBB2-449D-5BBB-B381-CA7839BC1649\\",\\n  \\"TrafficData\\": [\\n    {\\n      \\"MetricName\\": \\"InternetTx\\",\\n      \\"Datapoints\\": [\\n        {\\n          \\"DateTime\\": \\"2023-12-06 15:29:00\\",\\n          \\"Average\\": 15325\\n        }\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询POP点带宽统计',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'csas.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'csas.aliyuncs.com',
        ],
    ],
];
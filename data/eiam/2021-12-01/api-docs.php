<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Eiam',
        'version' => '2021-12-01',
    ],
    'directories' => [
        [
            'id' => 170714,
            'title' => '地域',
            'type' => 'directory',
            'children' => [
                'ListRegions',
            ],
        ],
        [
            'id' => 170018,
            'title' => '实例管理',
            'type' => 'directory',
            'children' => [
                'CreateInstance',
                'DeleteInstance',
                'UpdateInstanceDescription',
                'ListInstances',
                'GetInstance',
                'EnableInitDomainAutoRedirect',
                'DisableInitDomainAutoRedirect',
            ],
        ],
        [
            'id' => 185559,
            'title' => '域名管理',
            'type' => 'directory',
            'children' => [
                'GetDomainDnsChallenge',
                'CreateDomain',
                'GetDomain',
                'SetDefaultDomain',
                'ListDomains',
                'DeleteDomain',
                'CreateDomainProxyToken',
                'ObtainDomainProxyToken',
                'EnableDomainProxyToken',
                'DisableDomainProxyToken',
                'ListDomainProxyTokens',
                'DeleteDomainProxyToken',
            ],
        ],
        [
            'id' => 170019,
            'title' => '应用管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 170356,
                    'title' => '应用基本信息管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateApplication',
                        'DeleteApplication',
                        'UpdateApplicationDescription',
                        'EnableApplication',
                        'DisableApplication',
                        'GetApplication',
                        'ListApplications',
                    ],
                ],
                [
                    'id' => 170389,
                    'title' => '应用SSO配置管理',
                    'type' => 'directory',
                    'children' => [
                        'EnableApplicationSso',
                        'DisableApplicationSso',
                        'SetApplicationSsoConfig',
                        'GetApplicationSsoConfig',
                    ],
                ],
                [
                    'id' => 170359,
                    'title' => '应用授权管理',
                    'type' => 'directory',
                    'children' => [
                        'AuthorizeApplicationToUsers',
                        'AuthorizeApplicationToOrganizationalUnits',
                        'AuthorizeApplicationToGroups',
                        'RevokeApplicationFromUsers',
                        'RevokeApplicationFromOrganizationalUnits',
                        'RevokeApplicationFromGroups',
                        'UpdateApplicationAuthorizationType',
                        'ListUsersForApplication',
                        'ListOrganizationalUnitsForApplication',
                        'ListGroupsForApplication',
                        'ListApplicationsForUser',
                        'ListApplicationsForOrganizationalUnit',
                    ],
                ],
                [
                    'id' => 170366,
                    'title' => '应用ClientSecret管理',
                    'type' => 'directory',
                    'children' => [
                        'CreateApplicationClientSecret',
                        'DeleteApplicationClientSecret',
                        'DisableApplicationClientSecret',
                        'EnableApplicationClientSecret',
                        'ListApplicationClientSecrets',
                        'ObtainApplicationClientSecret',
                    ],
                ],
                [
                    'id' => 170361,
                    'title' => '应用API开放',
                    'type' => 'directory',
                    'children' => [
                        'EnableApplicationApiInvoke',
                        'DisableApplicationApiInvoke',
                        'SetApplicationGrantScope',
                        'GetApplicationGrantScope',
                    ],
                ],
                [
                    'id' => 170441,
                    'title' => '应用账户同步',
                    'type' => 'directory',
                    'children' => [
                        'DisableApplicationProvisioning',
                        'EnableApplicationProvisioning',
                        'SetApplicationProvisioningConfig',
                        'SetApplicationProvisioningScope',
                        'GetApplicationProvisioningConfig',
                        'GetApplicationProvisioningScope',
                    ],
                ],
            ],
        ],
        [
            'id' => 170398,
            'title' => '账户管理',
            'type' => 'directory',
            'children' => [
                'CreateUser',
                'AddUserToOrganizationalUnits',
                'DeleteUser',
                'RemoveUserFromOrganizationalUnits',
                'UpdateUser',
                'UpdateUserPassword',
                'UpdateUserDescription',
                'DisableUser',
                'EnableUser',
                'UnlockUser',
                'SetUserPrimaryOrganizationalUnit',
                'GetUser',
                'ListUsers',
            ],
        ],
        [
            'id' => 170401,
            'title' => '组织管理',
            'type' => 'directory',
            'children' => [
                'CreateOrganizationalUnit',
                'DeleteOrganizationalUnit',
                'UpdateOrganizationalUnit',
                'UpdateOrganizationalUnitDescription',
                'UpdateOrganizationalUnitParentId',
                'GetRootOrganizationalUnit',
                'GetOrganizationalUnit',
                'ListOrganizationalUnits',
                'ListOrganizationalUnitParents',
            ],
        ],
        [
            'id' => 180135,
            'title' => '账户组管理',
            'type' => 'directory',
            'children' => [
                'CreateGroup',
                'AddUsersToGroup',
                'DeleteGroup',
                'RemoveUsersFromGroup',
                'UpdateGroup',
                'UpdateGroupDescription',
                'GetGroup',
                'ListGroups',
                'ListUsersForGroup',
                'ListGroupsForUser',
            ],
        ],
        [
            'id' => 181262,
            'title' => '密码策略',
            'type' => 'directory',
            'children' => [
                'SetForgetPasswordConfiguration',
                'SetPasswordInitializationConfiguration',
                'SetPasswordHistoryConfiguration',
                'SetPasswordExpirationConfiguration',
                'SetPasswordComplexityConfiguration',
                'GetForgetPasswordConfiguration',
                'GetPasswordInitializationConfiguration',
                'GetPasswordHistoryConfiguration',
                'GetPasswordExpirationConfiguration',
                'GetPasswordComplexityConfiguration',
            ],
        ],
        [
            'id' => 183632,
            'title' => '网络端点',
            'type' => 'directory',
            'children' => [
                'CreateNetworkAccessEndpoint',
                'DeleteNetworkAccessEndpoint',
                'UpdateNetworkAccessEndpointName',
                'ListNetworkAccessEndpointAvailableRegions',
                'ListNetworkAccessEndpointAvailableZones',
                'GetNetworkAccessEndpoint',
                'ListNetworkAccessEndpoints',
                'ListNetworkAccessPaths',
            ],
        ],
        [
            'id' => 190113,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ListEiamRegions',
                'ListEiamInstances',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ListRegions' => [
            'summary' => '查询支持的阿里云地域列表。',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Regions' => [
                                'description' => '地域数据对象列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '地域ID。',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LocalName' => [
                                            'title' => '地域名称。',
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                        'RegionEndpoint' => [
                                            'title' => '地域对应的接入地址。',
                                            'description' => '地域对应的接入地址。',
                                            'type' => 'string',
                                            'example' => 'eiam.cn-hangzhou.aliyuncs.com',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\",\\n      \\"RegionEndpoint\\": \\"eiam.cn-hangzhou.aliyuncs.com\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询EIAM支持的地域列表',
        ],
        'CreateInstance' => [
            'summary' => '创建一个实例，EIAM所有产品能力都基于实例来提供。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例描述',
                        'description' => '实例描述，最大长度限制128字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'instance_for_test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'InstanceId' => [
                                'title' => '实例ID',
                                'description' => '本次接口调用创建的实例资源ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'idaas_wj5htncdvoc4q5xxxxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"InstanceId\\": \\"idaas_wj5htncdvoc4q5xxxxxxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM实例',
        ],
        'DeleteInstance' => [
            'summary' => '删除一个您不再使用的EIAM实例。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '待删除的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM实例',
            'description' => '请确保您当前的实例已经不再使用，当EIAM实例被删除后，所有相关的数据都将被删除。',
        ],
        'UpdateInstanceDescription' => [
            'summary' => '修改指定EIAM实例的描述信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '需要修改描述信息的实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例描述',
                        'description' => '您想要更改的实例描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '生产环境使用。',
                        'maxLength' => 128,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新EIAM实例描述信息',
        ],
        'ListInstances' => [
            'summary' => '查询一个或者多个EIAM实例信息。',
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
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码',
                        'description' => '列表页码。',
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
                        'title' => '列表大小',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '实例ID列表',
                        'description' => '实例ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例状态',
                        'description' => '实例状态，取值可选范围：'."\n"
                            .'- creating：创建中。'."\n"
                            .'- running：运行中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'running',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表条数目',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Instances' => [
                                'description' => '实例信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '由Instances组成的数组格式，返回实例的信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例Id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_eypq6ljgyeuwmlw672sulxxxxx',
                                        ],
                                        'CreateTime' => [
                                            'title' => '实例创建时间',
                                            'description' => '实例创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1550115455000',
                                        ],
                                        'Status' => [
                                            'title' => '实例状态',
                                            'description' => '实例状态，取值可选范围：'."\n"
                                                .'- creating：创建中。'."\n"
                                                .'- running：运行中。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'Description' => [
                                            'title' => '实例描述信息',
                                            'description' => '实例描述信息。',
                                            'type' => 'string',
                                            'example' => '正式环境',
                                        ],
                                        'DefaultEndpoint' => [
                                            'title' => '实例默认域名',
                                            'description' => '实例默认域名。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Endpoint' => [
                                                    'title' => '实例域名地址',
                                                    'description' => '实例域名地址。',
                                                    'type' => 'string',
                                                    'example' => 'example-xxx.aliyunidaas.com'."\n",
                                                ],
                                                'Status' => [
                                                    'title' => '实例域名状态',
                                                    'description' => '实例域名状态，取值可选范围：'."\n"
                                                        .'- resolved：已解析。'."\n"
                                                        .'- unresolved：未解析。',
                                                    'type' => 'string',
                                                    'example' => 'resolved',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Instances\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_eypq6ljgyeuwmlw672sulxxxxx\\",\\n      \\"CreateTime\\": 1550115455000,\\n      \\"Status\\": \\"running\\",\\n      \\"Description\\": \\"正式环境\\",\\n      \\"DefaultEndpoint\\": {\\n        \\"Endpoint\\": \\"example-xxx.aliyunidaas.com\\\\n\\",\\n        \\"Status\\": \\"resolved\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM实例',
        ],
        'GetInstance' => [
            'summary' => '查询一个EIAM实例的详细信息。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Instance' => [
                                'description' => '实例信息。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例Id',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_abt3pfwojojcq323si6g5xxxxx',
                                    ],
                                    'CreateTime' => [
                                        'title' => '实例创建时间',
                                        'description' => '实例创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1550115455000',
                                    ],
                                    'Status' => [
                                        'title' => '实例状态',
                                        'description' => '实例状态，取值可选范围：'."\n"
                                            .'- creating：创建中。'."\n"
                                            .'- running：运行中。',
                                        'type' => 'string',
                                        'example' => 'running',
                                    ],
                                    'Description' => [
                                        'title' => '实例描述信息',
                                        'description' => '实例描述信息。',
                                        'type' => 'string',
                                        'example' => '线上环境使用',
                                    ],
                                    'DefaultEndpoint' => [
                                        'title' => '实例默认域名',
                                        'description' => '实例默认域名，不再维护，请使用DomainConfig相关字段或参考查询域名列表接口。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Endpoint' => [
                                                'title' => '实例域名地址',
                                                'description' => '实例域名地址。',
                                                'type' => 'string',
                                                'example' => 'example-xxx.aliyunidaas.com'."\n",
                                            ],
                                            'Status' => [
                                                'title' => '实例域名状态',
                                                'description' => '实例域名状态，取值可选范围：'."\n"
                                                    .'- resolved：已解析。'."\n"
                                                    .'- unresolved：未解析。',
                                                'type' => 'string',
                                                'example' => 'resolved',
                                            ],
                                        ],
                                    ],
                                    'EgressAddresses' => [
                                        'title' => '实例出口公网地址段',
                                        'description' => '实例出口公网地址段。如在AD账户同步中，EIAM实例会通过如下公网地址段访问您的AD服务。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '实例出口公网地址。',
                                            'type' => 'string',
                                            'example' => '出口公网地址，具体以接口实际返回为准。'."\n"
                                                .'示例：203.0.XX.XX/27',
                                        ],
                                    ],
                                    'DomainConfig' => [
                                        'title' => '实例域名相关配置信息。',
                                        'description' => '实例域名相关配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'InitDomainAutoRedirectStatus' => [
                                                'title' => '初始化域名自动跳转状态。',
                                                'description' => '初始化域名自动跳转状态，取值可选范围：'."\n"
                                                    .'- enabled：开启。'."\n"
                                                    ."\n"
                                                    .'- disabled：关闭。',
                                                'type' => 'string',
                                                'example' => 'disabled',
                                            ],
                                            'DefaultDomain' => [
                                                'title' => '实例默认域名。',
                                                'description' => '实例默认域名。',
                                                'type' => 'string',
                                                'example' => 'login.example.com',
                                            ],
                                            'InitDomain' => [
                                                'title' => '实例初始化域名。',
                                                'description' => '实例初始化域名。',
                                                'type' => 'string',
                                                'example' => 'rx72nxxx.example.com',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Instance\\": {\\n    \\"InstanceId\\": \\"idaas_abt3pfwojojcq323si6g5xxxxx\\",\\n    \\"CreateTime\\": 1550115455000,\\n    \\"Status\\": \\"running\\",\\n    \\"Description\\": \\"线上环境使用\\",\\n    \\"DefaultEndpoint\\": {\\n      \\"Endpoint\\": \\"example-xxx.aliyunidaas.com\\\\n\\",\\n      \\"Status\\": \\"resolved\\"\\n    },\\n    \\"EgressAddresses\\": [\\n      \\"出口公网地址，具体以接口实际返回为准。\\\\n示例：203.0.XX.XX/27\\"\\n    ],\\n    \\"DomainConfig\\": {\\n      \\"InitDomainAutoRedirectStatus\\": \\"disabled\\",\\n      \\"DefaultDomain\\": \\"login.example.com\\",\\n      \\"InitDomain\\": \\"rx72nxxx.example.com\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询单个EIAM实例',
        ],
        'EnableInitDomainAutoRedirect' => [
            'summary' => '开启EIAM实例由初始化域名自动跳转到默认域名，开启后，通过初始化域名访问门户业会跳转到默认域名地址。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '开启EIAM实例由初始化域名自动跳转到默认域名',
        ],
        'DisableInitDomainAutoRedirect' => [
            'summary' => '关闭EIAM实例由初始化域名自动跳转到默认域名，关闭后，通过初始化域名访问门户业不会跳转到默认域名。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '关闭EIAM实例由初始化域名自动跳转到默认域名',
        ],
        'GetDomainDnsChallenge' => [
            'summary' => '查询指定EIAM域名的DNS Challenge记录，生成的记录用于做域名的所有权校验。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名。',
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'DomainDnsChallenge' => [
                                'description' => 'DNS Challenge记录。',
                                'type' => 'object',
                                'properties' => [
                                    'DnsChallengeName' => [
                                        'title' => 'DNS challenge名称。',
                                        'description' => 'DNS challenge名称。',
                                        'type' => 'string',
                                        'example' => '_idaas-challenge.login.example.com',
                                    ],
                                    'DnsType' => [
                                        'title' => 'DNS记录类型。',
                                        'description' => 'DNS记录类型。',
                                        'type' => 'string',
                                        'example' => '枚举，目前只支持TXT类型',
                                    ],
                                    'DnsChallengeValue' => [
                                        'title' => 'DNS challenge值。',
                                        'description' => 'DNS challenge值。',
                                        'type' => 'string',
                                        'example' => 'yriov8FD/rIGjQTU3/JjqkwxRbo5dyGftHWOtP5xfCI=',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"DomainDnsChallenge\\": {\\n    \\"DnsChallengeName\\": \\"_idaas-challenge.login.example.com\\",\\n    \\"DnsType\\": \\"枚举，目前只支持TXT类型\\",\\n    \\"DnsChallengeValue\\": \\"yriov8FD/rIGjQTU3/JjqkwxRbo5dyGftHWOtP5xfCI=\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM域名的DNS Challenge记录',
        ],
        'CreateDomain' => [
            'summary' => '创建EIAM实例的自定义域名。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Domain',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名。',
                        'description' => '域名。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'www.example.com',
                    ],
                ],
                [
                    'name' => 'Filing',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '备案信息参数。',
                        'description' => '备案信息参数。',
                        'type' => 'object',
                        'properties' => [
                            'IcpNumber' => [
                                'title' => '域名关联的备案号。',
                                'description' => '域名关联的备案号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '浙xx-xxxxxx',
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'DomainId' => [
                                'title' => '域名ID。',
                                'description' => '域名ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'dm_mtohn6mltdz3ibtly2rxvnvxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"DomainId\\": \\"dm_mtohn6mltdz3ibtly2rxvnvxxx\\"\\n}","type":"json"}]',
            'title' => '创建EIAM实例自定义域名',
        ],
        'GetDomain' => [
            'summary' => '查询EIAM实例的域名信息。',
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
                'riskType' => 'none',
                'abilityTreeCode' => '187288',
                'abilityTreeNodes' => [
                    'FEATUREidaas6GKEFM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Domain' => [
                                'description' => '域名信息对象。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例ID。',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'DomainId' => [
                                        'title' => '域名ID。',
                                        'description' => '域名ID。',
                                        'type' => 'string',
                                        'example' => 'dm_examplexxxxx',
                                    ],
                                    'Domain' => [
                                        'title' => '域名。',
                                        'description' => '域名。',
                                        'type' => 'string',
                                        'example' => 'login.example.com',
                                    ],
                                    'DomainType' => [
                                        'title' => '域名类型。',
                                        'description' => '域名类型，取值可选范围：'."\n"
                                            .'- system\\_init：初始化域名。'."\n"
                                            .'- user\\_custom：用户自定义域名。',
                                        'type' => 'string',
                                        'example' => 'system_init',
                                    ],
                                    'LockMode' => [
                                        'title' => '域名锁定状态。',
                                        'description' => '域名锁定状态，取值可选范围：'."\n"
                                            .'- unlock：正常。'."\n"
                                            .'- lockByLicense：因License限制不可用。',
                                        'type' => 'string',
                                        'example' => 'unlock',
                                    ],
                                    'DefaultDomain' => [
                                        'title' => '是否默认域名。',
                                        'description' => '是否默认域名。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CreateTime' => [
                                        'title' => '域名创建时间。',
                                        'description' => '域名创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '域名最近更新时间。',
                                        'description' => '域名最近更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'Filing' => [
                                        'title' => '域名备案信息。',
                                        'description' => '域名备案信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'IcpNumber' => [
                                                'title' => '域名关联的备案号。',
                                                'description' => '域名关联的备案号，支持主体备案号和网站备案号。',
                                                'type' => 'string',
                                                'example' => '浙xx-xxxxxx',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Domain\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"DomainId\\": \\"dm_examplexxxxx\\",\\n    \\"Domain\\": \\"login.example.com\\",\\n    \\"DomainType\\": \\"system_init\\",\\n    \\"LockMode\\": \\"unlock\\",\\n    \\"DefaultDomain\\": false,\\n    \\"CreateTime\\": 1649830226000,\\n    \\"UpdateTime\\": 1649830226000,\\n    \\"Filing\\": {\\n      \\"IcpNumber\\": \\"浙xx-xxxxxx\\"\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM实例的域名信息',
        ],
        'SetDefaultDomain' => [
            'summary' => '将指定EIAM实例域名设置为默认域名。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置指定EIAM实例域名为默认域名',
        ],
        'ListDomains' => [
            'summary' => '列表查询EIAM实例的域名信息，列表中包含实例初始化域名和自定义域名。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Domains' => [
                                'description' => '域名信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名信息对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'DomainId' => [
                                            'title' => '域名ID。',
                                            'description' => '域名ID。',
                                            'type' => 'string',
                                            'example' => 'dm_examplexxxxx',
                                        ],
                                        'Domain' => [
                                            'title' => '域名。',
                                            'description' => '域名。',
                                            'type' => 'string',
                                            'example' => 'www.example.com',
                                        ],
                                        'DomainType' => [
                                            'title' => '域名类型。',
                                            'description' => '域名类型，取值可选范围：'."\n"
                                                .'- system\\_init：初始化域名。'."\n"
                                                .'- user\\_custom：用户自定义域名。',
                                            'type' => 'string',
                                            'example' => 'system_init',
                                        ],
                                        'LockMode' => [
                                            'title' => '域名锁定状态。',
                                            'description' => '域名锁定状态，取值可选范围：'."\n"
                                                .'- unlock：正常。'."\n"
                                                .'- lockByLicense：因License限制不可用。',
                                            'type' => 'string',
                                            'example' => 'unlock',
                                        ],
                                        'DefaultDomain' => [
                                            'title' => '是否默认域名。',
                                            'description' => '是否默认域名。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'CreateTime' => [
                                            'title' => '域名创建时间。',
                                            'description' => '域名创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '域名最近更新时间。',
                                            'description' => '域名最近更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'Filing' => [
                                            'title' => '域名备案信息。',
                                            'description' => '域名备案信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'IcpNumber' => [
                                                    'title' => '域名关联的备案号。',
                                                    'description' => '域名关联的备案号，支持主体备案号和网站备案号。',
                                                    'type' => 'string',
                                                    'example' => '浙xx-xxxxxx',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Domains\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"DomainId\\": \\"dm_examplexxxxx\\",\\n      \\"Domain\\": \\"www.example.com\\",\\n      \\"DomainType\\": \\"system_init\\",\\n      \\"LockMode\\": \\"unlock\\",\\n      \\"DefaultDomain\\": false,\\n      \\"CreateTime\\": 1649830226000,\\n      \\"UpdateTime\\": 1649830226000,\\n      \\"Filing\\": {\\n        \\"IcpNumber\\": \\"浙xx-xxxxxx\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM实例的域名信息',
        ],
        'DeleteDomain' => [
            'summary' => '删除指定的EIAM实例自定义域名，实例初始化域名和默认域名的删除操作会被拒绝。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除指定的EIAM实例自定义域名',
        ],
        'CreateDomainProxyToken' => [
            'summary' => '创建EIAM实例域名的代理Token。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'DomainProxyTokenId' => [
                                'title' => '安全代理Token ID。',
                                'description' => '域名代理Token ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'pt_mtohn73423stghoivjmi4jwxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"DomainProxyTokenId\\": \\"pt_mtohn73423stghoivjmi4jwxxx\\"\\n}","type":"json"}]',
            'title' => '创建EIAM实例域名的代理Token',
        ],
        'ObtainDomainProxyToken' => [
            'summary' => '查询EIAM实例域名的代理Token。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
                [
                    'name' => 'DomainProxyTokenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名代理Token ID。',
                        'description' => '域名代理Token ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pt_examplexxxx'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'DomainProxyToken' => [
                                'description' => '代理Token信息对象。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例ID。',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'DomainProxyTokenId' => [
                                        'title' => '域名代理Token ID。',
                                        'description' => '域名代理Token ID。',
                                        'type' => 'string',
                                        'example' => 'pt_examplexxxx',
                                    ],
                                    'DomainProxyToken' => [
                                        'title' => '域名代理Token。',
                                        'description' => '域名代理Token。',
                                        'type' => 'string',
                                        'example' => 'PTxxxxxxxx',
                                    ],
                                    'DomainId' => [
                                        'title' => '域名ID。',
                                        'description' => '域名ID。',
                                        'type' => 'string',
                                        'example' => 'dm_examplexxxx',
                                    ],
                                    'Status' => [
                                        'title' => 'token状态。',
                                        'description' => 'token状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            ."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'CreateTime' => [
                                        'title' => '域名代理Token创建时间。',
                                        'description' => '域名代理Token创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '域名代理Token最近更新时间。',
                                        'description' => '域名代理Token最近更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'LastUsedTime' => [
                                        'title' => '域名代理Token最近使用时间。',
                                        'description' => '域名代理Token最近使用时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"DomainProxyToken\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"DomainProxyTokenId\\": \\"pt_examplexxxx\\",\\n    \\"DomainProxyToken\\": \\"PTxxxxxxxx\\",\\n    \\"DomainId\\": \\"dm_examplexxxx\\",\\n    \\"Status\\": \\"enabled\\",\\n    \\"CreateTime\\": 1649830226000,\\n    \\"UpdateTime\\": 1649830226000,\\n    \\"LastUsedTime\\": 1649830226000\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM实例域名的代理Token信息',
        ],
        'EnableDomainProxyToken' => [
            'summary' => '启用指定EIAM实例域名代理Token，用于校验域名安全性。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
                [
                    'name' => 'DomainProxyTokenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名代理Token ID。',
                        'description' => '域名代理Token ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pt_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用指定EIAM实例域名代理Token',
        ],
        'DisableDomainProxyToken' => [
            'summary' => '禁用指定EIAM实例域名代理Token，禁用之后，域名使用会受影响。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
                [
                    'name' => 'DomainProxyTokenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名代理Token ID。',
                        'description' => '域名代理Token ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pt_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用指定EIAM实例域名代理Token',
        ],
        'ListDomainProxyTokens' => [
            'summary' => '列表查询EIAM实例域名的代理Token。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'DomainProxyTokens' => [
                                'description' => '域名的代理Token信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '域名的代理Token信息对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'DomainProxyTokenId' => [
                                            'title' => '域名代理Token ID。',
                                            'description' => '域名代理Token ID。',
                                            'type' => 'string',
                                            'example' => 'pt_examplexxxx',
                                        ],
                                        'DomainProxyToken' => [
                                            'title' => '域名代理Token。',
                                            'description' => '域名代理Token。',
                                            'type' => 'string',
                                            'example' => 'PTxxxxxxxx',
                                        ],
                                        'DomainId' => [
                                            'title' => '域名ID。',
                                            'description' => '域名ID。',
                                            'type' => 'string',
                                            'example' => 'dm_examplexxxx',
                                        ],
                                        'Status' => [
                                            'title' => 'token状态。',
                                            'description' => 'token状态，取值可选范围：'."\n"
                                                .'- enabled：启用中。'."\n"
                                                ."\n"
                                                .'- disabled：禁用中。',
                                            'type' => 'string',
                                            'example' => 'enabled',
                                        ],
                                        'CreateTime' => [
                                            'title' => '域名代理Token创建时间。',
                                            'description' => '域名代理Token创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '域名代理Token最近更新时间。',
                                            'description' => '域名代理Token最近更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'LastUsedTime' => [
                                            'title' => '域名代理Token最近使用时间。',
                                            'description' => '域名代理Token最近使用时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"DomainProxyTokens\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"DomainProxyTokenId\\": \\"pt_examplexxxx\\",\\n      \\"DomainProxyToken\\": \\"PTxxxxxxxx\\",\\n      \\"DomainId\\": \\"dm_examplexxxx\\",\\n      \\"Status\\": \\"enabled\\",\\n      \\"CreateTime\\": 1649830226000,\\n      \\"UpdateTime\\": 1649830226000,\\n      \\"LastUsedTime\\": 1649830226000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM实例域名的代理Token',
        ],
        'DeleteDomainProxyToken' => [
            'summary' => '删除指定EIAM实例域名的代理Token，处于禁用状态的代理Token才能被删除。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DomainId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名ID。',
                        'description' => '域名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dm_examplexxxxx',
                    ],
                ],
                [
                    'name' => 'DomainProxyTokenId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '域名代理Token ID。',
                        'description' => '域名代理Token ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pt_examplexxxx'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除指定EIAM实例域名的代理Token',
        ],
        'CreateApplication' => [
            'summary' => '在指定EIAM实例下创建一个应用资源。',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk2676xxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Ram Account SSO',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述',
                        'description' => '应用描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'RAM账号SSO应用',
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'LogoUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用Logo地址',
                        'description' => '应用Logo地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://oss.cn-hangzhou.aliyuncs.com/logo.png',
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'ApplicationSourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用来源',
                        'description' => '应用创建来源，取值可选范围：'."\n"
                            .'- urn:alibaba:idaas:app:source:template：应用模板。'."\n"
                            .'- urn:alibaba:idaas:app:source:standard：标准协议。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'urn:alibaba:idaas:app:source:standard',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SsoType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '单点登录类型',
                        'description' => '单点登录协议，取值可选范围：'."\n"
                            .'- saml2：SAML 2.0 协议。'."\n"
                            .'- oidc：OpenID Connect 协议。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'saml2' => 'SAML 2.0协议',
                            'oidc' => 'OpenID Connect协议',
                        ],
                        'example' => 'saml2',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板ID',
                        'description' => '应用模板ID，当ApplicationSourceType参数指定为urn:alibaba:idaas:app:source:template时必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'apt_ramuser_mjqrsi',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationId' => [
                                'title' => '应用Id',
                                'description' => '应用ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'app_mkv7rgt4d7i4u7zqtzev2xxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2xxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM应用',
            'description' => 'EIAM目前支持两种标准应用SSO接入协议：SAML 2.0 和 OIDC，该参数指定后不可更改，请根据您的实际业务场景使用的SSO协议类型创建应用。',
        ],
        'DeleteApplication' => [
            'summary' => '删除一个EIAM应用资源。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM应用',
            'description' => '您在删除指定EIAM应用时，请确保对应应用已经不再使用，应用删除后所有配置数据都将被删除，无法进行恢复。',
        ],
        'UpdateApplicationDescription' => [
            'summary' => '更新一个EIAM应用的描述信息。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk2676xxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述信息',
                        'description' => '应用描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Demo应用-用于测试使用',
                        'maxLength' => 128,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM应用的描述信息',
        ],
        'EnableApplication' => [
            'summary' => '将一个应用从禁用状态变为启用状态。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM应用',
        ],
        'DisableApplication' => [
            'summary' => '将一个应用从启用状态变为禁用状态，此时应用全部能力不可用。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM应用',
            'description' => '将一个应用从启用状态变为禁用状态时，应用全部功能不可用（如SSO、账户同步等），请确认您已知该操作可能导致的风险。',
        ],
        'GetApplication' => [
            'summary' => '获取指定EIAM应用的详细信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Application' => [
                                'description' => '返回的应用信息。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => 'IDaaS EIAM实例Id',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'ApplicationId' => [
                                        'title' => '应用Id',
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'ClientId' => [
                                        'title' => '客户端ID',
                                        'description' => '应用的客户端ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'LogoUrl' => [
                                        'title' => '应用图标URL地址',
                                        'description' => '应用图标URL地址。',
                                        'type' => 'string',
                                        'example' => 'https://img.alicdn.com/imgextra/i4/O1CN01lvYwpv1aGowQXDML9_!!6000000003303-0-tps-580-580.jpg',
                                    ],
                                    'ApplicationName' => [
                                        'title' => '应用名称',
                                        'description' => '应用名称。',
                                        'type' => 'string',
                                        'example' => 'SAML 应用',
                                    ],
                                    'Description' => [
                                        'title' => '应用描述信息',
                                        'description' => '应用描述信息。',
                                        'type' => 'string',
                                        'example' => '某个应用，测试环境使用',
                                    ],
                                    'ApplicationSourceType' => [
                                        'title' => '应用来源',
                                        'description' => '应用创建来源，取值可选范围：'."\n"
                                            .'- urn:alibaba:idaas:app:source:template：应用模板。'."\n"
                                            .'- urn:alibaba:idaas:app:source:standard：标准协议。',
                                        'type' => 'string',
                                        'example' => 'urn:alibaba:idaas:app:source:template',
                                    ],
                                    'SsoType' => [
                                        'title' => '应用支持的SSO协议',
                                        'description' => '单点登录协议，可选范围：'."\n"
                                            .'- saml2：SAML 2.0 协议。'."\n"
                                            .'- oidc：OpenID Connect 协议。',
                                        'type' => 'string',
                                        'example' => 'saml2',
                                    ],
                                    'Features' => [
                                        'title' => '应用支持的特性',
                                        'description' => '应用支持的功能特性，JSON数组格式字符串返回。取值可选范围：'."\n"
                                            .'- sso：单点登录。'."\n"
                                            .'- provision：账户同步。'."\n"
                                            .'- api\\_invoke：API开放。 '."\n",
                                        'type' => 'string',
                                        'example' => '["sso", "provision"]',
                                    ],
                                    'Status' => [
                                        'title' => '应用状态',
                                        'description' => '应用状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'CreateTime' => [
                                        'title' => '应用创建时间',
                                        'description' => '应用创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '应用最近更新时间',
                                        'description' => '应用最近更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'AuthorizationType' => [
                                        'title' => '应用授权类型',
                                        'description' => '应用访问授权类型，取值可选范围：'."\n"
                                            .'- authorize\\_required：需要显式授权才可访问。'."\n"
                                            .'- default\\_all：默认所有成员具备访问权限。',
                                        'type' => 'string',
                                        'example' => 'authorize_required',
                                    ],
                                    'ApiInvokeStatus' => [
                                        'title' => '应用apiInvoke能力启用状态',
                                        'description' => '应用DeveloperAPI功能状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            .'- disabled：禁用中',
                                        'type' => 'string',
                                        'example' => 'disabled',
                                    ],
                                    'ServiceManaged' => [
                                        'title' => '应用模板是否被云产品托管',
                                        'description' => '应用模板是否被云产品托管。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ManagedServiceCode' => [
                                        'title' => '托管应用模板的云产品ServiceCode',
                                        'description' => '托管应用模板的云产品ServiceCode。',
                                        'type' => 'string',
                                        'example' => 'rpa',
                                    ],
                                    'ApplicationTemplateId' => [
                                        'title' => '创建来源应用模板id',
                                        'description' => '创建时关联的应用模板ID。当且仅当应用的创建来源为应用模板方式才会返回该值。',
                                        'type' => 'string',
                                        'example' => 'apt_rpa_tdsxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Application\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"ClientId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"LogoUrl\\": \\"https://img.alicdn.com/imgextra/i4/O1CN01lvYwpv1aGowQXDML9_!!6000000003303-0-tps-580-580.jpg\\",\\n    \\"ApplicationName\\": \\"SAML 应用\\",\\n    \\"Description\\": \\"某个应用，测试环境使用\\",\\n    \\"ApplicationSourceType\\": \\"urn:alibaba:idaas:app:source:template\\",\\n    \\"SsoType\\": \\"saml2\\",\\n    \\"Features\\": \\"[\\\\\\"sso\\\\\\", \\\\\\"provision\\\\\\"]\\",\\n    \\"Status\\": \\"enabled\\",\\n    \\"CreateTime\\": 1649830226000,\\n    \\"UpdateTime\\": 1649830226000,\\n    \\"AuthorizationType\\": \\"authorize_required\\",\\n    \\"ApiInvokeStatus\\": \\"disabled\\",\\n    \\"ServiceManaged\\": true,\\n    \\"ManagedServiceCode\\": \\"rpa\\",\\n    \\"ApplicationTemplateId\\": \\"apt_rpa_tdsxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的详细信息',
        ],
        'ListApplications' => [
            'summary' => '分页查询一个或者多个EIAM应用信息。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码',
                        'description' => '列表页码。',
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
                        'title' => '列表大小',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '应用Id列表',
                        'description' => '应用ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        ],
                        'required' => false,
                        'example' => 'Ram Account SSO',
                    ],
                ],
                [
                    'name' => 'ApplicationName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称，只支持左模糊匹配。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Ram Account SSO',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthorizationType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用授权类型。',
                        'description' => '应用访问授权类型，取值可选范围：'."\n"
                            .'- authorize\\_required：需要显式授权才可访问。'."\n"
                            .'- default\\_all：默认所有成员具备访问权限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'authorize_required',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用状态',
                        'description' => '应用状态，取值可选范围：'."\n"
                            .'- enabled：启用中。'."\n"
                            .'- disabled：禁用中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表条数目',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Applications' => [
                                'description' => '应用信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => 'IDaaS EIAM实例Id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'ApplicationId' => [
                                            'title' => '应用Id',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                        ],
                                        'ClientId' => [
                                            'title' => '客户端ID',
                                            'description' => '应用的客户端ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                        ],
                                        'LogoUrl' => [
                                            'title' => '应用图标URL地址',
                                            'description' => '应用图标URL地址。',
                                            'type' => 'string',
                                            'example' => 'https://img.alicdn.com/imgextra/i4/O1CN01lvYwpv1aGowQXDML9_!!6000000003303-0-tps-580-580.jpg',
                                        ],
                                        'ApplicationName' => [
                                            'title' => '应用名称',
                                            'description' => '应用名称。',
                                            'type' => 'string',
                                            'example' => 'SAML 应用',
                                        ],
                                        'Description' => [
                                            'title' => '应用描述信息',
                                            'description' => '应用描述信息。',
                                            'type' => 'string',
                                            'example' => '单个应用代码为pkces',
                                        ],
                                        'SsoType' => [
                                            'title' => '应用支持的SSO协议',
                                            'description' => '单点登录协议，取值可选范围：'."\n"
                                                .'- saml2：SAML 2.0 协议。'."\n"
                                                .'- oidc：OpenID Connect 协议。',
                                            'type' => 'string',
                                            'example' => 'saml2',
                                        ],
                                        'ApplicationSourceType' => [
                                            'title' => '应用来源',
                                            'description' => '应用创建来源，取值可选范围：'."\n"
                                                .'- urn:alibaba:idaas:app:source:template：应用模板。'."\n"
                                                .'- urn:alibaba:idaas:app:source:standard：标准协议。',
                                            'type' => 'string',
                                            'example' => 'urn:alibaba:idaas:app:source:standard',
                                        ],
                                        'Features' => [
                                            'title' => '应用支持的特性',
                                            'description' => '应用支持的功能特性，JSON数组格式字符串返回。取值可选范围：'."\n"
                                                .'- sso：单点登录。'."\n"
                                                .'- provision：账户同步。'."\n"
                                                .'- api\\_invoke：API开放。 '."\n",
                                            'type' => 'string',
                                            'example' => '["sso", "provision"]',
                                        ],
                                        'Status' => [
                                            'title' => '应用状态',
                                            'description' => '应用状态，取值可选范围：'."\n"
                                                .'- enabled：启用中。'."\n"
                                                .'- disabled：禁用中。',
                                            'type' => 'string',
                                            'example' => 'enabled',
                                        ],
                                        'CreateTime' => [
                                            'title' => '应用创建时间',
                                            'description' => '应用创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '应用最近更新时间',
                                            'description' => '应用最近更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'ServiceManaged' => [
                                            'title' => '应用模板是否被云产品托管',
                                            'description' => '应用模板是否被云产品托管。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'ManagedServiceCode' => [
                                            'title' => '托管应用模板的云产品ServiceCode',
                                            'description' => '托管应用模板的云产品ServiceCode。',
                                            'type' => 'string',
                                            'example' => 'rpa',
                                        ],
                                        'ApplicationTemplateId' => [
                                            'title' => '应用模板ID',
                                            'description' => '应用模板ID',
                                            'type' => 'string',
                                            'example' => 'apt_xxx_xxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Applications\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n      \\"ClientId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n      \\"LogoUrl\\": \\"https://img.alicdn.com/imgextra/i4/O1CN01lvYwpv1aGowQXDML9_!!6000000003303-0-tps-580-580.jpg\\",\\n      \\"ApplicationName\\": \\"SAML 应用\\",\\n      \\"Description\\": \\"单个应用代码为pkces\\",\\n      \\"SsoType\\": \\"saml2\\",\\n      \\"ApplicationSourceType\\": \\"urn:alibaba:idaas:app:source:standard\\",\\n      \\"Features\\": \\"[\\\\\\"sso\\\\\\", \\\\\\"provision\\\\\\"]\\",\\n      \\"Status\\": \\"enabled\\",\\n      \\"CreateTime\\": 1649830226000,\\n      \\"UpdateTime\\": 1649830226000,\\n      \\"ServiceManaged\\": true,\\n      \\"ManagedServiceCode\\": \\"rpa\\",\\n      \\"ApplicationTemplateId\\": \\"apt_xxx_xxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM应用',
        ],
        'EnableApplicationSso' => [
            'summary' => '启用一个EIAM应用的SSO功能。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM应用SSO功能',
        ],
        'DisableApplicationSso' => [
            'summary' => '禁用一个EIAM应用的SSO单点登录功能，此时应用不支持员工单点登录。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM应用的SSO功能',
        ],
        'SetApplicationSsoConfig' => [
            'summary' => '设置一个EIAM应用的单点登录SSO配置属性。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SamlSsoConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'SAML SSO配置',
                        'description' => 'SAML协议的应用SSO属性配置参数。',
                        'type' => 'object',
                        'properties' => [
                            'SpSsoAcsUrl' => [
                                'title' => 'SP的SSO地址',
                                'description' => '应用（SP）的SAML断言消费地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://signin.aliyun.com/saml-role/sso',
                            ],
                            'SpEntityId' => [
                                'title' => 'SP的EntityId',
                                'description' => '应用（SP）的SAML的EntityId。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'urn:alibaba:cloudcomputing',
                            ],
                            'NameIdFormat' => [
                                'title' => 'SAML标准的NameID格式',
                                'description' => 'SAML协议标准的NameID格式，取值可选范围：'."\n"
                                    .'- urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified：未指定的，由应用自行决定解析NameID。'."\n"
                                    .'- urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress：Email地址格式。'."\n"
                                    .'- urn:oasis:names:tc:SAML:2.0:nameid-format:persistent：持久化的NameID。'."\n"
                                    .'- urn:oasis:names:tc:SAML:2.0:nameid-format:transient：瞬时的NameID。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified' => '未指定的，默认值。',
                                    'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress' => 'Email地址格式',
                                    'urn:oasis:names:tc:SAML:2.0:nameid-format:persistent' => '持久化的。',
                                    'urn:oasis:names:tc:SAML:2.0:nameid-format:transient' => '瞬时的。',
                                ],
                                'example' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
                            ],
                            'NameIdValueExpression' => [
                                'title' => 'NameId取值表单式',
                                'description' => 'SAML协议的NameID真实取值生成表达式。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user.email',
                            ],
                            'DefaultRelayState' => [
                                'title' => '默认RelayState取值',
                                'description' => '默认RelayState取值。当用户的单点登录SSO请求是由EIAM发起时，EIAM提供的SAML Response会指定RelayState为当前值。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://home.console.aliyun.com',
                            ],
                            'SignatureAlgorithm' => [
                                'title' => 'SAML断言签名算法',
                                'description' => 'SAML断言签名算法。',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [
                                    'RSA-SHA256' => 'RSA-SHA256算法',
                                ],
                                'example' => 'RSA-SHA256',
                            ],
                            'ResponseSigned' => [
                                'title' => 'response是否签名',
                                'description' => 'Response是否需要签名。ResponseSigned和AssertionSigned不能同时为false。'."\n"
                                    .'- true：需要签名。'."\n"
                                    .'- false：不需要签名。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'AssertionSigned' => [
                                'title' => 'assertion是否签名',
                                'description' => 'Assertion是否需要签名。ResponseSigned和AssertionSigned不能同时为false。'."\n"
                                    .'- true：需要签名。'."\n"
                                    .'- false：不需要签名。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'AttributeStatements' => [
                                'title' => 'SAML断言的属性配置',
                                'description' => '在SAML断言中包含的额外用户属性配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AttributeName' => [
                                            'title' => 'SAML属性的Name',
                                            'description' => 'SAML断言中属性的Name。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'https://www.aliyun.com/SAML-Role/Attributes/RoleSessionName',
                                        ],
                                        'AttributeValueExpression' => [
                                            'title' => 'SAML属性取值表达式',
                                            'description' => 'SAML断言中的属性取值表达式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'user.username',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'OidcSsoConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'OIDC SSO配置',
                        'description' => 'OIDC协议的应用SSO属性配置参数。',
                        'type' => 'object',
                        'properties' => [
                            'RedirectUris' => [
                                'title' => '支持SSO回调的uri列表',
                                'description' => '应用支持的RedirectUri列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用支持的RedirectUri。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://example.com/oidc/login/callback',
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                            'PostLogoutRedirectUris' => [
                                'title' => 'Logout回调Uri列表',
                                'description' => '应用支持Logout登出回调地址列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用的Logout登出回调白名单地址，应用发起Logout请求时可以指定post\\_logout\\_redirect\\_uri参数。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'https://example.com/oidc/logout/callback',
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                            'GrantTypes' => [
                                'title' => '支持的授权类型',
                                'description' => '支持的OIDC协议授权模式列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '支持的OIDC协议授权模式，取值可选范围：'."\n"
                                        .'- authorization\\_code：授权码模式。'."\n"
                                        .'- implicit：隐式模式。'."\n"
                                        .'- refresh\\_token：令牌刷新模式。'."\n"
                                        .'- urn:ietf:params:oauth:grant-type:device\\_code：设备模式。'."\n"
                                        .'- password：密码模式。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'authorization_code',
                                ],
                                'required' => false,
                                'example' => 'authorization_code',
                            ],
                            'ResponseTypes' => [
                                'title' => '隐式流支持的返回类型',
                                'description' => '当OidcSsoConfig.GrantTypes包含指定implicit隐式模式后，应用支持的返回类型。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'OIDC协议标准参数ResponseType，只有指定了GrantTypes包含implicit隐式模式才生效，取值可选范围：'."\n"
                                        .'- token：只返回access token。'."\n"
                                        .'- id\\_token：只返回id token。'."\n"
                                        .'- token id\\_token：同时返回access token和id token。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'token id_token',
                                ],
                                'required' => false,
                                'example' => 'token id_token',
                            ],
                            'GrantScopes' => [
                                'title' => '支持的api授权范围',
                                'description' => 'OIDC协议标准参数 scope，用于指定userinfo端点或者id_token可以返回的用户属性范围。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'OIDC协议标准参数 scope，用于指定userinfo端点或者id_token可以返回的用户属性范围，取值可选范围：'."\n"
                                        .'- openid：OIDC标准参数，用户唯一id。'."\n"
                                        .'- profile：用户详细信息。'."\n"
                                        .'- email：用户邮箱信息。'."\n"
                                        .'- phone：用户手机信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'openid',
                                ],
                                'required' => false,
                                'example' => 'profile，email',
                            ],
                            'PasswordTotpMfaRequired' => [
                                'title' => '密码模式是否强制需要TOTP二次认证',
                                'description' => '密码模式是否强制需要TOTP二次认证，当且仅当OIDC协议应用指定的GrantTypes包含password模式才生效。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PasswordAuthenticationSourceId' => [
                                'title' => '密码模式使用的身份认证来源id',
                                'description' => '密码模式使用的身份认证源ID，当且仅当OIDC协议应用指定的GrantTypes包含password模式才生效。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ia_password',
                            ],
                            'PkceRequired' => [
                                'title' => '是否强制PKCE',
                                'description' => '应用SSO是否强制要求PKCE（RFC 7636）。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'PkceChallengeMethods' => [
                                'title' => 'PKCE算法',
                                'description' => 'PKCE中计算Code Challenge的算法。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'PKCE中计算Code Challenge的算法，取值可选范围：'."\n"
                                        .'- plain：原文。'."\n"
                                        .'- S256：SHA 256算法。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'S256',
                                ],
                                'required' => false,
                                'example' => 'S256',
                            ],
                            'AccessTokenEffectiveTime' => [
                                'title' => 'access token有效时间',
                                'description' => '签发的access token有效时间，单位为秒，默认1200秒（20分钟）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1200',
                            ],
                            'CodeEffectiveTime' => [
                                'title' => 'code有效时间',
                                'description' => '签发的code有效时间，单位为秒，默认为60秒（1分钟）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '60',
                            ],
                            'IdTokenEffectiveTime' => [
                                'title' => 'id token有效时间',
                                'description' => '签发的id token有效时间，单位为秒，默认为300秒（5分钟）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '300',
                            ],
                            'RefreshTokenEffective' => [
                                'title' => 'refresh token有效时间',
                                'description' => '签发的refresh token有效时间，单位为秒，默认为86400秒（1天）。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '86400',
                            ],
                            'CustomClaims' => [
                                'title' => '自定义id token返回信息',
                                'description' => '自定义id token返回包含的用户信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ClaimName' => [
                                            'title' => '返回的claim名称',
                                            'description' => '返回的claim名称。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '"Role"',
                                        ],
                                        'ClaimValueExpression' => [
                                            'title' => '返回的claim取值表达式',
                                            'description' => '返回的claim取值表达式。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'user.dict.applicationRole',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                            'SubjectIdExpression' => [
                                'title' => '自定义id token返回信息',
                                'description' => '自定义id token返回的sub取值表达式。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user.userid',
                                'maxLength' => 128,
                                'default' => 'user.userid',
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'InitLoginType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '初始化登录方式',
                        'description' => '初始化单点登录SSO方式，取值可选范围：'."\n"
                            .'- only\\_app\\_init\\_sso：仅应用发起SSO，OIDC协议应用默认取值。当SAML应用指定为该方式时，InitLoginUrl必须指定。'."\n"
                            .'- idaas\\_or\\_app\\_init\\_sso：支持IDaaS门户或者应用发起SSO，SAML协议应用默认取值范围。当OIDC协议指定为该方式时，InitLoginUrl必须指定。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'only_app_init_sso',
                    ],
                ],
                [
                    'name' => 'InitLoginUrl',
                    'in' => 'query',
                    'schema' => [
                        'title' => '仅only_app_init_sso情况下，SP指定的登录地址',
                        'description' => '初始化单点登录SSO触发地址。'."\n"
                            .'当OIDC协议类型应用设置InitLoginType为idaas\\_or\\_app\\_init\\_sso时，必须指定该参数。'."\n"
                            .'当SAML协议类型应用设置InitLoginType为only\\_app\\_init\\_sso时，必须指定该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://127.0.0.1:8000/start_login?enterprise_code=ABCDEF',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","errorExample":""},{"type":"xml","example":"<SetApplicationSsoConfigResponse>\\n    <RequestId>0441BD79-92F3-53AA-8657-F8CE4A2B912A</RequestId>\\n</SetApplicationSsoConfigResponse>","errorExample":""}]',
            'title' => '设置一个EIAM应用的单点登录SSO配置',
            'description' => '在EIAM中，应用管理支持添加多种单点登录SSO协议（SAML 2.0和OIDC）的应用，但是一个应用支持的SSO协议只能有一种，且在创建时指定后不可更改。您根据当前的应用支持的SSO协议类型，指定对应的SSO配置属性参数。',
        ],
        'GetApplicationSsoConfig' => [
            'summary' => '查询一个EIAM应用的单点登录SSO配置属性。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationSsoConfig' => [
                                'description' => '应用单点登录SSO配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'SamlSsoConfig' => [
                                        'title' => 'SAML SSO配置',
                                        'description' => 'SAML协议的应用SSO属性配置参数。当且仅当应用SSO协议为SAML 2.0时返回。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SpSsoAcsUrl' => [
                                                'title' => 'SP的SSO地址',
                                                'description' => '应用（SP）的SAML断言消费地址。',
                                                'type' => 'string',
                                                'example' => 'https://signin.aliyun.com/saml-role/sso',
                                            ],
                                            'SpEntityId' => [
                                                'title' => 'SP的EntityId',
                                                'description' => '应用（SP）的SAML的EntityId。'."\n"
                                                    ."\n",
                                                'type' => 'string',
                                                'example' => 'urn:alibaba:cloudcomputing',
                                            ],
                                            'NameIdFormat' => [
                                                'title' => 'SAML标准的NameID格式',
                                                'description' => 'SAML协议标准的NameID格式，取值可选范围：'."\n"
                                                    .'- urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified：未指定的，由应用自行决定解析NameID。'."\n"
                                                    .'- urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress：Email地址格式。'."\n"
                                                    .'- urn:oasis:names:tc:SAML:2.0:nameid-format:persistent：持久化的NameID。'."\n"
                                                    .'- urn:oasis:names:tc:SAML:2.0:nameid-format:transient：瞬时的NameID。',
                                                'type' => 'string',
                                                'example' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',
                                            ],
                                            'NameIdValueExpression' => [
                                                'title' => 'NameId取值表单式',
                                                'description' => 'SAML协议的NameID真实取值生成表达式。',
                                                'type' => 'string',
                                                'example' => 'user.username',
                                            ],
                                            'DefaultRelayState' => [
                                                'title' => '默认RelayState取值',
                                                'description' => '默认RelayState取值。当用户的单点登录SSO请求是由EIAM发起时，EIAM提供的SAML Response会指定RelayState为当前值。',
                                                'type' => 'string',
                                                'example' => 'https://home.console.aliyun.com',
                                            ],
                                            'SignatureAlgorithm' => [
                                                'title' => 'SAML断言签名算法',
                                                'description' => 'SAML断言签名算法。',
                                                'type' => 'string',
                                                'example' => 'RSA-SHA256',
                                            ],
                                            'ResponseSigned' => [
                                                'title' => 'response是否签名',
                                                'description' => 'Response是否需要签名。ResponseSigned和AssertionSigned不能同时为false。'."\n"
                                                    .'- true：需要签名。'."\n"
                                                    .'- false：不需要签名。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'AssertionSigned' => [
                                                'title' => 'assertion是否签名',
                                                'description' => 'Assertion是否需要签名。ResponseSigned和AssertionSigned不能同时为false。'."\n"
                                                    .'- true：需要签名。'."\n"
                                                    .'- false：不需要签名。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'AttributeStatements' => [
                                                'title' => 'SAML断言的属性配置',
                                                'description' => '在SAML断言中包含的额外用户属性配置。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AttributeName' => [
                                                            'title' => 'SAML属性的Name',
                                                            'description' => 'SAML断言中属性的Name。',
                                                            'type' => 'string',
                                                            'example' => 'https://www.aliyun.com/SAML-Role/Attributes/RoleSessionName',
                                                        ],
                                                        'AttributeValueExpression' => [
                                                            'title' => 'SAML属性取值表达式',
                                                            'description' => 'SAML断言中的属性取值表达式。'."\n"
                                                                ."\n",
                                                            'type' => 'string',
                                                            'example' => 'user.username',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OidcSsoConfig' => [
                                        'title' => 'OIDC SSO配置',
                                        'description' => 'OIDC协议的应用SSO属性配置参数。当且仅当应用SSO协议为OIDC类型时返回。',
                                        'type' => 'object',
                                        'properties' => [
                                            'RedirectUris' => [
                                                'title' => '支持SSO回调的uri列表',
                                                'description' => '应用支持的RedirectUri列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '应用支持的RedirectUri。',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/oidc/login/callback'."\n",
                                                ],
                                            ],
                                            'PostLogoutRedirectUris' => [
                                                'title' => 'Logout回调Uri列表',
                                                'description' => '应用支持Logout登出回调地址列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '应用的Logout登出回调白名单地址，应用发起Logout请求时可以指定post\\_logout\\_redirect\\_uri参数。',
                                                    'type' => 'string',
                                                    'example' => 'https://example.com/oidc/login/logout'."\n",
                                                ],
                                            ],
                                            'GrantTypes' => [
                                                'title' => '支持的授权类型',
                                                'description' => '支持的OIDC协议授权模式列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '支持的OIDC协议授权模式，取值可选范围：'."\n"
                                                        .'- authorization\\_code：授权码模式。'."\n"
                                                        .'- implicit：隐式模式。'."\n"
                                                        .'- refresh\\_token：令牌刷新模式。'."\n"
                                                        .'- urn:ietf:params:oauth:grant-type:device\\_code：设备模式。'."\n"
                                                        .'- password：密码模式。',
                                                    'type' => 'string',
                                                    'example' => 'refresh_token',
                                                ],
                                                'example' => 'authorization_code',
                                            ],
                                            'ResponseTypes' => [
                                                'title' => '隐式流支持的返回类型',
                                                'description' => '	'."\n"
                                                    .'当OidcSsoConfig.GrantTypes包含指定implicit隐式模式后，应用支持的返回类型。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'OIDC协议标准参数ResponseType，只有指定了GrantTypes包含implicit隐式模式才生效，取值可选范围：'."\n"
                                                        .'- token：只返回access token。'."\n"
                                                        .'- id\\_token：只返回id token。'."\n"
                                                        .'- token id\\_token：同时返回access token和id token。',
                                                    'type' => 'string',
                                                    'example' => 'token id_token',
                                                ],
                                                'example' => 'token id_token',
                                            ],
                                            'GrantScopes' => [
                                                'title' => '支持的api授权范围',
                                                'description' => 'OIDC协议标准参数 scope，用于指定userinfo端点或者id_token可以返回的用户属性范围。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'OIDC协议标准参数 scope，用于指定userinfo端点或者id_token可以返回的用户属性范围，取值可选范围：'."\n"
                                                        .'- openid：OIDC标准参数，用户唯一id。'."\n"
                                                        .'- profile：用户详细信息。'."\n"
                                                        .'- email：用户邮箱信息。'."\n"
                                                        .'- phone：用户手机信息。',
                                                    'type' => 'string',
                                                    'example' => 'openid',
                                                ],
                                                'example' => 'profile，email',
                                            ],
                                            'PasswordTotpMfaRequired' => [
                                                'title' => '密码模式是否强制需要TOTP二次认证',
                                                'description' => '密码模式是否强制需要TOTP二次认证，当且仅当OIDC协议应用指定的GrantTypes包含password模式才生效。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'PasswordAuthenticationSourceId' => [
                                                'title' => '密码模式使用的身份认证来源id',
                                                'description' => '密码模式使用的身份认证源ID，当且仅当OIDC协议应用指定的GrantTypes包含password模式才生效。',
                                                'type' => 'string',
                                                'example' => 'ia_password',
                                            ],
                                            'PkceRequired' => [
                                                'title' => '是否强制PKCE',
                                                'description' => '应用SSO是否强制要求PKCE（RFC 7636）。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'PkceChallengeMethods' => [
                                                'title' => 'PKCE算法',
                                                'description' => 'PKCE中计算Code Challenge的算法。'."\n"
                                                    ."\n",
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'PKCE中计算Code Challenge的算法，取值可选范围：'."\n"
                                                        .'- plain：原文。'."\n"
                                                        .'- S256：SHA 256算法。',
                                                    'type' => 'string',
                                                    'example' => 'S256',
                                                ],
                                                'example' => 'S256',
                                            ],
                                            'AccessTokenEffectiveTime' => [
                                                'title' => 'access token有效时间',
                                                'description' => '签发的access token有效时间，单位为秒，默认1200秒（20分钟）。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1200',
                                            ],
                                            'CodeEffectiveTime' => [
                                                'title' => 'code有效时间',
                                                'description' => '签发的code有效时间，单位为秒，默认为60秒（1分钟）。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '60',
                                            ],
                                            'IdTokenEffectiveTime' => [
                                                'title' => 'id token有效时间',
                                                'description' => '签发的id token有效时间，单位为秒，默认为300秒（5分钟）。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1200',
                                            ],
                                            'RefreshTokenEffective' => [
                                                'title' => 'refresh token有效时间',
                                                'description' => '签发的refresh token有效时间，单位为秒，默认为86400秒（1天）。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '86400',
                                            ],
                                            'CustomClaims' => [
                                                'title' => '自定义id token返回信息',
                                                'description' => '自定义id token返回包含的用户信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ClaimName' => [
                                                            'title' => '返回的claim名称',
                                                            'description' => '返回的claim名称。',
                                                            'type' => 'string',
                                                            'example' => 'userOuIds',
                                                        ],
                                                        'ClaimValueExpression' => [
                                                            'title' => '返回的claim取值表达式',
                                                            'description' => '返回的claim取值表达式。',
                                                            'type' => 'string',
                                                            'example' => 'ObjectToJsonString(user.organizationalUnits)',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'SubjectIdExpression' => [
                                                'title' => '自定义id token返回信息',
                                                'description' => '自定义id token返回的sub取值表达式。',
                                                'type' => 'string',
                                                'example' => 'user.userid',
                                            ],
                                        ],
                                    ],
                                    'ProtocolEndpointDomain' => [
                                        'title' => 'metadata 端点配置信息',
                                        'description' => '应用提供的Metadata 端点配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'SamlSsoEndpoint' => [
                                                'title' => 'SAML 单点登录地址',
                                                'description' => 'SAML协议AuthnRequest请求接受地址。当且仅当应用SSO协议为SAML 2.0时返回。',
                                                'type' => 'string',
                                                'example' => 'https://l1seshcn.aliyunidaas.com/login/app/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/sso',
                                            ],
                                            'SamlMetaEndpoint' => [
                                                'title' => 'IdP SAML EntityID',
                                                'description' => 'SAML协议的Metadata元数据地址。当且仅当应用SSO协议为SAML 2.0时返回。',
                                                'type' => 'string',
                                                'example' => 'https://l1seshcn.aliyunidaas.com/api/v2/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/meta',
                                            ],
                                            'OidcIssuer' => [
                                                'title' => 'OIDC issuer地址',
                                                'description' => 'OIDC issuer信息。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc',
                                            ],
                                            'OidcJwksEndpoint' => [
                                                'title' => 'OIDC jwks地址',
                                                'description' => 'OIDC jwks地址。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc/jwks',
                                            ],
                                            'Oauth2AuthorizationEndpoint' => [
                                                'title' => 'OIDC 授权地址',
                                                'description' => 'oAuth2 授权端点。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/authorize',
                                            ],
                                            'Oauth2RevokeEndpoint' => [
                                                'title' => 'OIDC access token 吊销端点',
                                                'description' => 'oAuth2 Token吊销端点。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/revoke',
                                            ],
                                            'Oauth2TokenEndpoint' => [
                                                'title' => 'oauth2 access token 换取端点',
                                                'description' => 'oAuth2 Token端点。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/token',
                                            ],
                                            'Oauth2DeviceAuthorizationEndpoint' => [
                                                'title' => 'oauth2 device 授权端点',
                                                'description' => 'oAuth2 Device 授权端点。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/device/code',
                                            ],
                                            'Oauth2UserinfoEndpoint' => [
                                                'title' => 'OIDC 获取用户信息端点',
                                                'description' => 'OIDC 获取用户信息端点。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/userinfo',
                                            ],
                                            'OidcLogoutEndpoint' => [
                                                'title' => 'OIDC RP-initial Logout端点',
                                                'description' => 'OIDC RP-initiated Logout Endpoint。当且仅当应用SSO协议为OIDC类型时返回。',
                                                'type' => 'string',
                                                'example' => 'https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/logout',
                                            ],
                                        ],
                                    ],
                                    'SsoStatus' => [
                                        'title' => '应用 SSO 启用状态',
                                        'description' => '应用 SSO 功能启用状态，取值可选范围：'."\n"
                                            .'- enabled：应用中。'."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'InitLoginType' => [
                                        'title' => '初始化登录方式',
                                        'description' => '初始化单点登录SSO方式，取值可选范围：'."\n"
                                            .'- only\\_app\\_init\\_sso：仅应用发起SSO，OIDC协议应用默认取值。当SAML应用指定为该方式时，InitLoginUrl必须指定。'."\n"
                                            .'- idaas\\_or\\_app\\_init\\_sso：支持IDaaS门户或者应用发起SSO，SAML协议应用默认取值范围。当OIDC协议指定为该方式时，InitLoginUrl必须指定。',
                                        'type' => 'string',
                                        'example' => 'only_app_init_sso',
                                    ],
                                    'InitLoginUrl' => [
                                        'title' => '仅SP-init情况下，SP指定的登录地址',
                                        'description' => '初始化单点登录SSO触发地址，当OIDC协议应用InitLoginType为idaas\\_or\\_app\\_init\\_sso，必须指定；当SAML协议应用InitLoginType为only\\_app\\_init\\_sso时，必须指定。',
                                        'type' => 'string',
                                        'example' => 'http://127.0.0.1:8000/start_login?enterprise_code=ABCDEF',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationSsoConfig\\": {\\n    \\"SamlSsoConfig\\": {\\n      \\"SpSsoAcsUrl\\": \\"https://signin.aliyun.com/saml-role/sso\\",\\n      \\"SpEntityId\\": \\"urn:alibaba:cloudcomputing\\",\\n      \\"NameIdFormat\\": \\"urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified\\",\\n      \\"NameIdValueExpression\\": \\"user.username\\",\\n      \\"DefaultRelayState\\": \\"https://home.console.aliyun.com\\",\\n      \\"SignatureAlgorithm\\": \\"RSA-SHA256\\",\\n      \\"ResponseSigned\\": true,\\n      \\"AssertionSigned\\": true,\\n      \\"AttributeStatements\\": [\\n        {\\n          \\"AttributeName\\": \\"https://www.aliyun.com/SAML-Role/Attributes/RoleSessionName\\",\\n          \\"AttributeValueExpression\\": \\"user.username\\"\\n        }\\n      ]\\n    },\\n    \\"OidcSsoConfig\\": {\\n      \\"RedirectUris\\": [\\n        \\"https://example.com/oidc/login/callback\\\\n\\"\\n      ],\\n      \\"PostLogoutRedirectUris\\": [\\n        \\"https://example.com/oidc/login/logout\\\\n\\"\\n      ],\\n      \\"GrantTypes\\": [\\n        \\"refresh_token\\"\\n      ],\\n      \\"ResponseTypes\\": [\\n        \\"token id_token\\"\\n      ],\\n      \\"GrantScopes\\": [\\n        \\"openid\\"\\n      ],\\n      \\"PasswordTotpMfaRequired\\": true,\\n      \\"PasswordAuthenticationSourceId\\": \\"ia_password\\",\\n      \\"PkceRequired\\": true,\\n      \\"PkceChallengeMethods\\": [\\n        \\"S256\\"\\n      ],\\n      \\"AccessTokenEffectiveTime\\": 1200,\\n      \\"CodeEffectiveTime\\": 60,\\n      \\"IdTokenEffectiveTime\\": 1200,\\n      \\"RefreshTokenEffective\\": 86400,\\n      \\"CustomClaims\\": [\\n        {\\n          \\"ClaimName\\": \\"userOuIds\\",\\n          \\"ClaimValueExpression\\": \\"ObjectToJsonString(user.organizationalUnits)\\"\\n        }\\n      ],\\n      \\"SubjectIdExpression\\": \\"user.userid\\"\\n    },\\n    \\"ProtocolEndpointDomain\\": {\\n      \\"SamlSsoEndpoint\\": \\"https://l1seshcn.aliyunidaas.com/login/app/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/sso\\",\\n      \\"SamlMetaEndpoint\\": \\"https://l1seshcn.aliyunidaas.com/api/v2/app_mltuxdwd4lq4eer6tmtlmaxm5e/saml2/meta\\",\\n      \\"OidcIssuer\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc\\",\\n      \\"OidcJwksEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oidc/jwks\\",\\n      \\"Oauth2AuthorizationEndpoint\\": \\"https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/authorize\\",\\n      \\"Oauth2RevokeEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/revoke\\",\\n      \\"Oauth2TokenEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/token\\",\\n      \\"Oauth2DeviceAuthorizationEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/device/code\\",\\n      \\"Oauth2UserinfoEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk2676rypm/app_mltta64q65enci54slingvvsgq/oauth2/userinfo\\",\\n      \\"OidcLogoutEndpoint\\": \\"https://l1seshcn.aliyunidaas.com/login/app/app_mltta64q65enci54slingvvsgq/oauth2/logout\\"\\n    },\\n    \\"SsoStatus\\": \\"enabled\\",\\n    \\"InitLoginType\\": \\"only_app_init_sso\\",\\n    \\"InitLoginUrl\\": \\"http://127.0.0.1:8000/start_login?enterprise_code=ABCDEF\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的单点登录SSO配置',
        ],
        'AuthorizeApplicationToUsers' => [
            'summary' => '批量授予多个EIAM账户访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk2676xxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，单次操作最多支持100个账户ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '授予多个EIAM账户访问一个应用的权限',
        ],
        'AuthorizeApplicationToOrganizationalUnits' => [
            'summary' => '批量授予多个EIAM组织访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk2676xxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID列表。',
                        'description' => '组织ID列表，单次操作最多支持100个组织ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '授予多个EIAM组织访问一个应用的权限',
        ],
        'AuthorizeApplicationToGroups' => [
            'summary' => '批量授予多个EIAM组访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk2676xxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组ID列表。',
                        'description' => '组ID列表，单次操作最多支持100个组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                        ],
                        'required' => true,
                        'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '授予多个EIAM组访问一个应用的权限',
        ],
        'RevokeApplicationFromUsers' => [
            'summary' => '批量取消多个EIAM账户访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，单次操作最多支持100个账户ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '取消多个EIAM账户访问一个应用的权限',
        ],
        'RevokeApplicationFromOrganizationalUnits' => [
            'summary' => '批量取消多个EIAM组织访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID列表。',
                        'description' => '组织ID列表，单次操作最多支持100个组织ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '取消多个EIAM组织访问一个应用的权限',
        ],
        'RevokeApplicationFromGroups' => [
            'summary' => '批量取消多个EIAM组访问一个应用的权限。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组ID列表。',
                        'description' => '组ID列表，单次操作最多支持100个组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                        ],
                        'required' => true,
                        'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '取消多个EIAM组访问一个应用的权限',
        ],
        'UpdateApplicationAuthorizationType' => [
            'summary' => '更改指定EIAM应用的访问授权类型。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'AuthorizationType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用授权类型',
                        'description' => '应用访问授权类型，取值可选范围：'."\n"
                            .'- authorize\\_required：需要显式授权才可访问。'."\n"
                            .'- default\\_all：默认所有成员具备访问权限。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'authorize_required',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更改一个应用的访问授权类型',
        ],
        'ListUsersForApplication' => [
            'summary' => '分页查询一个应用被授权访问的账户列表，返回的结果中，包含账户ID信息，如需获取账户详细信息，请调用GetUser接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，单次操作最多支持100个账户ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => false,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Users' => [
                                'description' => '账户ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户ID。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '账户ID。',
                                            'description' => '账户ID。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用被授权访问的账户列表',
        ],
        'ListOrganizationalUnitsForApplication' => [
            'summary' => '分页查询一个应用被授权访问的组织列表，返回的结果中，包含组织ID信息，如需获取组织详细信息，请调用GetOrganizationalUnit接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID列表。',
                        'description' => '组织ID列表，单次操作最多支持100个组织ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => false,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'OrganizationalUnits' => [
                                'description' => '组织ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织ID。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OrganizationalUnitId' => [
                                            'title' => '组织ID。',
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"OrganizationalUnits\\": [\\n    {\\n      \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用被授权访问的组织列表',
        ],
        'ListGroupsForApplication' => [
            'summary' => '分页查询一个应用被授权访问的组列表，返回的结果中，包含组ID信息，如需获取组详细信息，请调用GetGroup接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组ID列表。',
                        'description' => '组ID列表，单次操作最多支持100个组ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                        ],
                        'required' => false,
                        'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Groups' => [
                                'description' => '组ID列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组ID。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupId' => [
                                            'title' => '组ID。',
                                            'description' => '组ID。',
                                            'type' => 'string',
                                            'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Groups\\": [\\n    {\\n      \\"GroupId\\": \\"group_miu8e4t4d7i4u7uwezgr54xxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用被授权访问的组列表',
        ],
        'ListApplicationsForUser' => [
            'summary' => '分页查询一个EIAM账户可访问的应用列表，返回的结果中，包含应用ID信息，如需获取应用详细信息，请调用GetApplication接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '应用ID列表。',
                        'description' => '应用ID列表，单次操作最多支持100个应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        ],
                        'required' => false,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID。',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'QueryMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询模式。',
                        'description' => '查询模式，默认为 **OnlyDirect** ，取值可选范围：'."\n"
                            ."\n"
                            .'- OnlyDirect：代表只查询账户的直属权限，即直接分配给账户的应用。'."\n"
                            .'- IncludeInherit：代表既查询账户的直属权限，也查询账户的继承权限。继承权限是指账户通过其父级组织（或者其隶属的组）继承的权限。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OnlyDirect',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Applications' => [
                                'description' => '被授权访问的应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '被授权访问的应用。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationId' => [
                                            'title' => '应用ID。',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                        ],
                                        'HasDirectAuthorization' => [
                                            'title' => '是否存在直接授权。',
                                            'description' => '是否存在直属授权，取值范围：'."\n"
                                                ."\n"
                                                .'- true： 应用与账户存在直接的赋权关系记录。'."\n"
                                                .'- false： 应用与账户不存在直接的赋权关系记录。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'HasInheritAuthorization' => [
                                            'title' => '是否存在继承权限。',
                                            'description' => '是否存在继承授权，取值范围：'."\n"
                                                ."\n"
                                                .'- true：应用与账户的任意一个父级组织（或者账户隶属的组）存在直接的赋权关系记录。'."\n"
                                                .'- false：应用与账户的所有父级组织（或者账户隶属的组）都不存在直接的赋权关系记录。'."\n"
                                                ."\n",
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n      \\"HasDirectAuthorization\\": true,\\n      \\"HasInheritAuthorization\\": false\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM账户可访问的应用列表信息',
        ],
        'ListApplicationsForOrganizationalUnit' => [
            'summary' => '分页查询一个EIAM组织可访问的应用列表，返回的结果中，包含应用ID信息，如需获取应用详细信息，请调用GetApplication接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'ApplicationIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '应用ID列表。',
                        'description' => '应用ID列表，单次操作最多支持100个应用ID。',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        ],
                        'required' => false,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Applications' => [
                                'description' => '被授权访问的应用列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '被授权访问的应用。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApplicationId' => [
                                            'title' => '应用ID。',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Applications\\": [\\n    {\\n      \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM组织可访问的应用列表信息',
            'description' => '当前接口仅查询组织的直属权限，即直接分配给组织的应用。调用该接口时，可以通过 **ApplicationIds** 参数对应用进行筛选。',
        ],
        'CreateApplicationClientSecret' => [
            'summary' => '创建一个EIAM应用的客户端密钥，一个EIAM应用下，最多只能创建两个应用的客户端密钥。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationClientSecret' => [
                                'description' => '密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ClientId' => [
                                        'title' => '客户端ID',
                                        'description' => '应用的客户端ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'SecretId' => [
                                        'title' => 'IDaaS EIAM 客户端密钥Id',
                                        'description' => '应用的客户端密钥ID。',
                                        'type' => 'string',
                                        'example' => ' sci_k52x2ru63rlkflina5utgkxxxx',
                                    ],
                                    'ClientSecret' => [
                                        'title' => 'IDaaS EIAM 客户端密钥',
                                        'description' => '应用的客户端密钥secret。',
                                        'type' => 'string',
                                        'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationClientSecret\\": {\\n    \\"ClientId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"SecretId\\": \\" sci_k52x2ru63rlkflina5utgkxxxx\\",\\n    \\"ClientSecret\\": \\"CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建一个EIAM应用的客户端密钥',
        ],
        'DeleteApplicationClientSecret' => [
            'summary' => '删除一个EIAM应用的客户端密钥。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端秘钥',
                        'description' => '应用的客户端密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' sci_k52x2ru63rlkflina5utgkxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM应用的客户端密钥',
        ],
        'DisableApplicationClientSecret' => [
            'summary' => '禁用一个EIAM应用的客户端密钥。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx'."\n",
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx'."\n",
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端秘钥ID',
                        'description' => '应用的客户端密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sci_k52x2ru63rlkflina5utgkxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM应用的客户端密钥',
        ],
        'EnableApplicationClientSecret' => [
            'summary' => '启用一个EIAM应用的客户端密钥。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx'."\n",
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端秘钥',
                        'description' => '应用的客户端密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sci_k52x2ru63rlkflina5utgkxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM应用的客户端密钥',
        ],
        'ListApplicationClientSecrets' => [
            'summary' => '查询一个EIAM应用所属的全部客户端密钥，返回的密钥数据已脱敏，若需要获取未脱敏密钥，请调用ObtainApplicationClientSecret接口。',
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
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表条数目',
                                'description' => '列表条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'ApplicationClientSecrets' => [
                                'description' => '密钥信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => 'IDaaS EIAM实例Id',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_wdziy4vnjt33ehhf7z2o2nxxxx',
                                        ],
                                        'ApplicationId' => [
                                            'title' => '应用Id',
                                            'description' => '应用ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx'."\n",
                                        ],
                                        'ClientId' => [
                                            'title' => '客户端ID',
                                            'description' => '应用的客户端ID。',
                                            'type' => 'string',
                                            'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                        ],
                                        'SecretId' => [
                                            'title' => 'IDaaS EIAM 客户端密钥Id',
                                            'description' => '应用的客户端密钥ID。',
                                            'type' => 'string',
                                            'example' => 'sci_k52x2ru63rlkflina5utgkxxxx',
                                        ],
                                        'ClientSecret' => [
                                            'title' => '客户端密钥',
                                            'description' => '应用的客户端密钥secret（返回的ClientSecret已被脱敏）。',
                                            'type' => 'string',
                                            'example' => 'eyJh*****************************************************************************************************OQ',
                                        ],
                                        'Status' => [
                                            'title' => 'IDaaS EIAM 客户端密钥状态',
                                            'description' => '客户端密钥状态，取值可选范围：'."\n"
                                                .'- enabled：启用中。'."\n"
                                                .'- disabled：禁用中。',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'disabled' => '禁用',
                                                'enabled' => '启用',
                                            ],
                                            'example' => 'enabled',
                                        ],
                                        'LastUsedTime' => [
                                            'title' => 'IDaaS EIAM 客户端密钥最近使用时间',
                                            'description' => '客户端密钥最近使用时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"ApplicationClientSecrets\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_wdziy4vnjt33ehhf7z2o2nxxxx\\",\\n      \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\\\n\\",\\n      \\"ClientId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n      \\"SecretId\\": \\"sci_k52x2ru63rlkflina5utgkxxxx\\",\\n      \\"ClientSecret\\": \\"eyJh*****************************************************************************************************OQ\\",\\n      \\"Status\\": \\"enabled\\",\\n      \\"LastUsedTime\\": 1649830226000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用所属的全部客户端密钥',
        ],
        'ObtainApplicationClientSecret' => [
            'summary' => '获取EIAM应用的客户端密钥，返回的密钥未脱敏。若需要获取已脱敏密钥，请调用ListApplicationClientSecrets接口。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'SecretId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '客户端秘钥',
                        'description' => '应用的客户端密钥ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' sci_k52x2ru63rlkflina5utgkxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationClientSecret' => [
                                'description' => '密钥信息。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => 'IDaaS EIAM实例Id',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'ApplicationId' => [
                                        'title' => '应用Id',
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'ClientId' => [
                                        'title' => '客户端ID',
                                        'description' => '应用的客户端ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'SecretId' => [
                                        'title' => 'IDaaS EIAM 客户端密钥Id',
                                        'description' => '应用的客户端密钥ID。',
                                        'type' => 'string',
                                        'example' => ' sci_k52x2ru63rlkflina5utgkxxxx',
                                    ],
                                    'ClientSecret' => [
                                        'title' => '客户端密钥',
                                        'description' => '应用的客户端密钥secret。',
                                        'type' => 'string',
                                        'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
                                    ],
                                    'Status' => [
                                        'title' => 'IDaaS EIAM 客户端密钥状态',
                                        'description' => '客户端密钥状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'disabled' => '禁用',
                                            'enabled' => '启用',
                                        ],
                                        'example' => 'enabled',
                                    ],
                                    'LastUsedTime' => [
                                        'title' => 'IDaaS EIAM 客户端密钥最近使用时间',
                                        'description' => '客户端密钥最近使用时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationClientSecret\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"ClientId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"SecretId\\": \\" sci_k52x2ru63rlkflina5utgkxxxx\\",\\n    \\"ClientSecret\\": \\"CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx\\",\\n    \\"Status\\": \\"enabled\\",\\n    \\"LastUsedTime\\": 1649830226000\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的客户端密钥',
        ],
        'EnableApplicationApiInvoke' => [
            'summary' => '调用EnabledApplicationApiInvoke接口启用一个EIAM应用的Developer API调用功能。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => ' idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM应用的Developer API调用功能',
        ],
        'DisableApplicationApiInvoke' => [
            'summary' => '禁用一个EIAM应用的Developer API调用功能。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM应用的Developer API调用能力',
        ],
        'SetApplicationGrantScope' => [
            'summary' => '设置一个EIAM应用的Developer API授权范围。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx'."\n",
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GrantScopes',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'api 授权范围',
                        'description' => 'API授权范围集合。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'API授权范围，取值可选范围：'."\n"
                                .'- urn:alibaba:idaas:scope:user:read\\_all -查询所有用户的权限。'."\n"
                                .'- urn:alibaba:idaas:scope:user:manage\\_all  -管理所有用户的权限。'."\n"
                                .'- urn:alibaba:idaas:scope:organizational\\_unit:read\\_all  -查询所有组织机构的权限。'."\n"
                                .'- urn:alibaba:idaas:scope:organizational\\_unit:manage\\_all  -管理所有组织机构的权限。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'urn:alibaba:idaas:scope:user:read_all',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置一个EIAM应用的Developer API授权范围',
        ],
        'GetApplicationGrantScope' => [
            'summary' => '查询一个EIAM应用的Developer API授权范围。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx'."\n",
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx'."\n",
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationGrantScope' => [
                                'title' => '授权范围',
                                'description' => '授权范围。',
                                'type' => 'object',
                                'properties' => [
                                    'GrantScopes' => [
                                        'title' => 'api权限scope',
                                        'description' => 'API授权范围集合。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'API授权范围，取值可选范围：'."\n"
                                                .'- urn:alibaba:idaas:scope:user:read\\_all -查询所有用户的权限。'."\n"
                                                .'- urn:alibaba:idaas:scope:user:manage\\_all  -管理所有用户的权限。'."\n"
                                                .'- urn:alibaba:idaas:scope:organizational\\_unit:read\\_all  -查询所有组织机构的权限。'."\n"
                                                .'- urn:alibaba:idaas:scope:organizational\\_unit:manage\\_all  -管理所有组织机构的权限。',
                                            'type' => 'string',
                                            'example' => 'urn:alibaba:idaas:scope:user:read_all ',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationGrantScope\\": {\\n    \\"GrantScopes\\": [\\n      \\"urn:alibaba:idaas:scope:user:read_all \\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的Developer API授权范围',
        ],
        'DisableApplicationProvisioning' => [
            'summary' => '禁用一个EIAM应用的账户同步功能。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM应用的账户同步功能',
        ],
        'EnableApplicationProvisioning' => [
            'summary' => '启用一个EIAM应用的账户同步功能。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM应用的账户同步功能',
        ],
        'SetApplicationProvisioningConfig' => [
            'summary' => '设置一个EIAM应用的账户同步功能配置。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ProvisionProtocolType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '同步协议类型',
                        'description' => '账户同步协议类型，取值可选范围：'."\n"
                            .'- idaas\\_callback：IDaaS自定义事件回调账号同步方式。'."\n"
                            .'- scim2：SCIM协议同步方式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_callback',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'CallbackProvisioningConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'IDaaS 事件回调同步配置',
                        'description' => '应用事件回调同步配置，当ProvisionProtocolType为idaas\\_callback时，必须填写。',
                        'type' => 'object',
                        'properties' => [
                            'CallbackUrl' => [
                                'title' => 'IDaaS回调SP地址',
                                'description' => '应用接收IDaaS事件回调的目标地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://example.com/event/callback',
                            ],
                            'EncryptKey' => [
                                'title' => 'IDaaS回调对称加密秘钥',
                                'description' => 'IDaaS事件回调对称加解密密钥，AES256算法类型密钥，Hex编码格式。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ad3b248**************************b3561a73d7',
                            ],
                            'EncryptRequired' => [
                                'title' => 'IDaaS回调是否加密',
                                'description' => 'IDaaS事件回调消息是否加密，取值可选范围：'."\n"
                                    .'- true：加密。'."\n"
                                    .'- false：不加密，明文传递。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'ListenEventScopes' => [
                                'title' => 'IDaaS回调事件监听范围',
                                'description' => 'IDaaS事件回调监听消息类型列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '<props="china">IDaaS事件回调监听消息类型，取值可选范围参考文档：[通讯录事件](https://help.aliyun.com/document_detail/410178.htm)。</props>'."\n"
                                        .'<props="intl">IDaaS事件回调监听消息类型，取值可选范围参考文档：[通讯录事件](https://www.alibabacloud.com/help/zh/idaas/eiam/developer-reference/callback-events?spm=a2c63.p38356.0.0.3f1334e3ZckNrD)。</props>',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'urn:alibaba:idaas:app:event:ud:user:create'."\n",
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'ScimProvisioningConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'IDaaS SCIM同步配置',
                        'description' => 'IDaaS SCIM协议同步配置参数。当ProvisionProtocolType为scim2时，必须填写。',
                        'type' => 'object',
                        'properties' => [
                            'ScimBaseUrl' => [
                                'title' => 'scim同步端点',
                                'description' => '应用接受IDaaS同步SCIM协议的Base地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://example.com/scim',
                            ],
                            'AuthnConfiguration' => [
                                'title' => 'scim同步相关配置',
                                'description' => 'SCIM协议同步相关配置参数。',
                                'type' => 'object',
                                'properties' => [
                                    'AuthnMode' => [
                                        'title' => '认证类型',
                                        'description' => 'SCIM协议接口授权模式。取值可选范围：'."\n"
                                            .'- oauth2：OAuth2模式。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'oauth2',
                                    ],
                                    'GrantType' => [
                                        'title' => '授权模式',
                                        'description' => 'SCIM协议授权模式。取值可选范围：'."\n"
                                            .'- client\\_credentials：客户端模式。'."\n"
                                            .'- bearer\\_token：密钥模式。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'bearer_token',
                                    ],
                                    'AuthnParam' => [
                                        'title' => '授权相关配置',
                                        'description' => '授权相关配置参数。使用方式如下：'."\n"
                                            .'- 当GrantType为client\\_credentials时， 可以更新ClientId，ClientSecret，AuthnMethod。'."\n"
                                            .'- 当GrantType为bearer\\_token时，可以更新AccessToken。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AccessToken' => [
                                                'title' => 'accessToken',
                                                'description' => '访问令牌。bearer\\_token密钥模式时可以更新该字段。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'k52x2ru63rlkflina5utgkxxxx',
                                            ],
                                            'TokenEndpoint' => [
                                                'title' => 'oauth2 token端点',
                                                'description' => '令牌端点。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'https://www.example.com/oauth/token',
                                            ],
                                            'ClientId' => [
                                                'title' => 'oauth2 client id',
                                                'description' => '应用的客户端ID。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'mkv7rgt4d7i4u7zqtzev2mxxxx',
                                            ],
                                            'ClientSecret' => [
                                                'title' => 'oauth2 client secret',
                                                'description' => '应用的客户端密钥secret。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx',
                                            ],
                                            'AuthnMethod' => [
                                                'title' => 'oauth2 authentication method',
                                                'description' => 'SCIM协议认证模式， 返回值包括如下：'."\n"
                                                    .'- client\\_secret\\_basic：通过请求Header传递密钥。'."\n"
                                                    .'- client\\_secret\\_post：通过请求body传递密钥。',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'client_secret_basic',
                                            ],
                                        ],
                                        'required' => false,
                                        'example' => '',
                                    ],
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                            'ProvisioningActions' => [
                                'title' => '目标资源操作行为',
                                'description' => 'SCIM协议目标资源操作行为。取值可选范围：'."\n"
                                    .'- urn:alibaba:idaas:app:scim:User:CREATE 账户创建'."\n"
                                    .'- urn:alibaba:idaas:app:scim:User:UPDATE 账户更新'."\n"
                                    .'- urn:alibaba:idaas:app:scim:User:DELETE 账户删除',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SCIM协议目标资源操作行为。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'urn:alibaba:idaas:app:scim:User:CREATE',
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                            'FullPushScopes' => [
                                'title' => '全量推送范围',
                                'description' => 'SCIM协议全量推送范围。取值可选范围：'."\n"
                                    .'- urn:alibaba:idaas:app:scim:User:PUSH 用户全量同步。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SCIM协议全量推送范围。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'urn:alibaba:idaas:app:scim:User:PUSH',
                                ],
                                'required' => false,
                                'example' => '',
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'ProvisionPassword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '同步信息是否包含密码',
                        'description' => 'IDaaS用户事件回调是否同步密码，取值可选范围：'."\n"
                            .'- true：同步密码。'."\n"
                            .'- false：不同步密码。',
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
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置一个EIAM应用的账户同步功能配置',
        ],
        'SetApplicationProvisioningScope' => [
            'summary' => '设置一个EIAM应用的账户同步范围，该账户同步范围同时为DeveloperAPI可以查询和管理的账户范围。',
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
                'operationType' => 'update',
                'abilityTreeCode' => '137232',
                'abilityTreeNodes' => [
                    'FEATUREidaas60YEMV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '授权同步出的组织机构列表',
                        'description' => '账户同步授权的组织机构范围列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户同步授权的组织机构范围。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '授权同步出的组列表',
                        'description' => '同步授权的组范围列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '同步授权的组范围',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group_miu8e4t4d7i4u7uwezgr54xxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置一个EIAM应用的账户同步范围',
        ],
        'GetApplicationProvisioningConfig' => [
            'summary' => '查询一个EIAM应用的账户同步功能配置。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationProvisioningConfig' => [
                                'description' => '应用的账户同步功能配置。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例Id',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'ApplicationId' => [
                                        'title' => '应用Id',
                                        'description' => '应用ID。',
                                        'type' => 'string',
                                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
                                    ],
                                    'ProvisionProtocolType' => [
                                        'title' => '应用同步协议',
                                        'description' => '应用同步协议类型，取值范围可选：'."\n"
                                            .'- idaas_callback ： IDaaS自定义事件回调协议。'."\n"
                                            .'- scim2: SCIM协议。',
                                        'type' => 'string',
                                        'example' => 'idaas_callback',
                                    ],
                                    'ProvisionJwksEndpoint' => [
                                        'title' => '应用同步验签公钥端点',
                                        'description' => '应用同步回调信息验签公钥端点。',
                                        'type' => 'string',
                                        'example' => 'https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk267xxxxx/app_mkv7rgt4d7i4u7zqtzev2mxxxx/provisioning/jwks',
                                    ],
                                    'CallbackProvisioningConfig' => [
                                        'title' => 'IDaaS回调同步配置',
                                        'description' => 'IDaaS自定义事件回调协议配置参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'CallbackUrl' => [
                                                'title' => 'IDaaS回调SP地址',
                                                'description' => '应用接受IDaaS事件回调的目标地址。',
                                                'type' => 'string',
                                                'example' => 'https://example.com/event/callback',
                                            ],
                                            'EncryptKey' => [
                                                'title' => 'IDaaS回调对称加密秘钥',
                                                'description' => 'IDaaS事件回调对称加解密密钥，AES256算法类型密钥，Hex编码格式。',
                                                'type' => 'string',
                                                'example' => '1adfdfdfd******111',
                                            ],
                                            'EncryptRequired' => [
                                                'title' => 'IDaaS回调是否加密',
                                                'description' => 'IDaaS事件回调消息是否加密，取值可选范围：'."\n"
                                                    .'- true：加密。'."\n"
                                                    .'- false：不加密，明文传递。',
                                                'type' => 'boolean',
                                                'example' => 'true',
                                            ],
                                            'ListenEventScopes' => [
                                                'title' => 'IDaaS回调事件监听范围',
                                                'description' => 'IDaaS事件回调监听消息类型列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '<props="china">IDaaS事件回调监听消息类型，取值可选范围参考文档：[通讯录事件](https://www.alibabacloud.com/help/zh/idaas/eiam/developer-reference/callback-events?spm=a2c63.p38356.0.0.68ec1103TPulue)。</props>'."\n"
                                                        ."\n"
                                                        .'<props="intl">IDaaS事件回调监听消息类型，取值可选范围参考文档：[通讯录事件](https://help.aliyun.com/zh/idaas/eiam/developer-reference/callback-events?spm=openapi-amp.newDocPublishment.0.0.653c281f8RcX5R).</props>',
                                                    'type' => 'string',
                                                    'example' => 'urn:alibaba:idaas:app:event:ud:user:create',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ProvisionPassword' => [
                                        'title' => '同步信息是否包含密码',
                                        'description' => 'IDaaS用户事件回调是否同步密码，取值可选范围：'."\n"
                                            .'- true：同步密码。'."\n"
                                            .'- false：不同步密码。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'ScimProvisioningConfig' => [
                                        'title' => 'IDaaS SCIM同步配置',
                                        'description' => 'IDaaS SCIM协议同步配置参数。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ScimBaseUrl' => [
                                                'title' => 'scim同步端点',
                                                'description' => '应用接受IDaaS同步SCIM协议的Base地址。',
                                                'type' => 'string',
                                                'example' => 'https://example.com/scim',
                                            ],
                                            'AuthnConfiguration' => [
                                                'title' => 'scim同步相关配置',
                                                'description' => 'SCIM协议同步相关配置参数。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AuthnMode' => [
                                                        'title' => '认证类型',
                                                        'description' => 'SCIM协议接口授权模式。取值可选范围：'."\n"
                                                            .'- oauth2：OAuth2模式。',
                                                        'type' => 'string',
                                                        'example' => 'oauth2',
                                                    ],
                                                    'GrantType' => [
                                                        'title' => '授权模式',
                                                        'description' => 'SCIM协议授权模式。取值可选范围：'."\n"
                                                            .'- client\\_credentials：客户端模式。'."\n"
                                                            .'- bearer\\_token：密钥模式。',
                                                        'type' => 'string',
                                                        'example' => 'bearer_token',
                                                    ],
                                                    'AuthnParam' => [
                                                        'title' => '授权相关配置',
                                                        'description' => '授权相关配置参数。使用方式如下：'."\n"
                                                            .'- 当GrantType为client\\_credentials时， 需要填写ClientId, ClientSecret, AuthnMethod。'."\n"
                                                            .'- 当GrantType为bearer\\_token时，需要填写AccessToken。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'AccessToken' => [
                                                                'title' => 'accessToken',
                                                                'description' => '访问令牌。bearer\\_token密钥模式时需要填写该字段。',
                                                                'type' => 'string',
                                                                'example' => 'k52x2ru63rlkflina5utgkxxxx',
                                                            ],
                                                            'TokenEndpoint' => [
                                                                'title' => 'oauth2 token端点',
                                                                'description' => '令牌端点。',
                                                                'type' => 'string',
                                                                'example' => 'https://www.example.com/oauth/token',
                                                            ],
                                                            'ClientId' => [
                                                                'title' => 'oauth2 client id',
                                                                'description' => '应用的客户端ID。',
                                                                'type' => 'string',
                                                                'example' => 'mkv7rgt4d7i4u7zqtzev2mxxxx',
                                                            ],
                                                            'ClientSecret' => [
                                                                'title' => 'oauth2 client secret',
                                                                'description' => '应用的客户端密钥secret。',
                                                                'type' => 'string',
                                                                'example' => 'CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx'."\n",
                                                            ],
                                                            'AuthnMethod' => [
                                                                'title' => 'oauth2 authentication method',
                                                                'description' => 'SCIM协议认证模式， 取值可选范围：'."\n"
                                                                    .'- client\\_secret\\_basic： 通过请求Header传递密钥。'."\n"
                                                                    .'- client\\_secret\\_post：通过请求body传递密钥。',
                                                                'type' => 'string',
                                                                'example' => 'client_secret_basic',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ProvisioningActions' => [
                                                'title' => '目标资源操作行为',
                                                'description' => 'SCIM协议目标资源操作行为。取值可选范围：'."\n"
                                                    .'- urn:alibaba:idaas:app:scim:User:CREATE 账户创建'."\n"
                                                    .'- urn:alibaba:idaas:app:scim:User:UPDATE 账户更新'."\n"
                                                    .'- urn:alibaba:idaas:app:scim:User:DELETE 账户删除',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'SCIM协议目标资源操作行为。',
                                                    'type' => 'string',
                                                    'example' => 'urn:alibaba:idaas:app:scim:User:CREATE',
                                                ],
                                            ],
                                            'FullPushScopes' => [
                                                'title' => '全量推送范围',
                                                'description' => 'SCIM协议全量推送范围。取值可选范围：'."\n"
                                                    .'- urn:alibaba:idaas:app:scim:User:PUSH 用户全量同步。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'SCIM协议全量推送范围。',
                                                    'type' => 'string',
                                                    'example' => 'urn:alibaba:idaas:app:scim:User:PUSH',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Status' => [
                                        'title' => 'IDaaS 应用同步启用状态',
                                        'description' => 'IDaaS账户同步功能启用状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'ConfigOperateMode' => [
                                        'title' => '账户同步页面渲染方式',
                                        'description' => '账户同步页面渲染方式， 取值可选范围：'."\n"
                                            .'- standard：标准模式。'."\n"
                                            .'- template：模版模式。',
                                        'type' => 'string',
                                        'example' => 'standard',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationProvisioningConfig\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"ApplicationId\\": \\"app_mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n    \\"ProvisionProtocolType\\": \\"idaas_callback\\",\\n    \\"ProvisionJwksEndpoint\\": \\"https://eiam-api-cn-hangzhou.aliyuncs.com/v2/idaas_ue2jvisn35ea5lmthk267xxxxx/app_mkv7rgt4d7i4u7zqtzev2mxxxx/provisioning/jwks\\",\\n    \\"CallbackProvisioningConfig\\": {\\n      \\"CallbackUrl\\": \\"https://example.com/event/callback\\",\\n      \\"EncryptKey\\": \\"1adfdfdfd******111\\",\\n      \\"EncryptRequired\\": true,\\n      \\"ListenEventScopes\\": [\\n        \\"urn:alibaba:idaas:app:event:ud:user:create\\"\\n      ]\\n    },\\n    \\"ProvisionPassword\\": true,\\n    \\"ScimProvisioningConfig\\": {\\n      \\"ScimBaseUrl\\": \\"https://example.com/scim\\",\\n      \\"AuthnConfiguration\\": {\\n        \\"AuthnMode\\": \\"oauth2\\",\\n        \\"GrantType\\": \\"bearer_token\\",\\n        \\"AuthnParam\\": {\\n          \\"AccessToken\\": \\"k52x2ru63rlkflina5utgkxxxx\\",\\n          \\"TokenEndpoint\\": \\"https://www.example.com/oauth/token\\",\\n          \\"ClientId\\": \\"mkv7rgt4d7i4u7zqtzev2mxxxx\\",\\n          \\"ClientSecret\\": \\"CSEHDcHcrUKHw1CuxkJEHPveWRXBGqVqRsxxxx\\\\n\\",\\n          \\"AuthnMethod\\": \\"client_secret_basic\\"\\n        }\\n      },\\n      \\"ProvisioningActions\\": [\\n        \\"urn:alibaba:idaas:app:scim:User:CREATE\\"\\n      ],\\n      \\"FullPushScopes\\": [\\n        \\"urn:alibaba:idaas:app:scim:User:PUSH\\"\\n      ]\\n    },\\n    \\"Status\\": \\"enabled\\",\\n    \\"ConfigOperateMode\\": \\"standard\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的账户同步功能配置',
        ],
        'GetApplicationProvisioningScope' => [
            'summary' => '查询EIAM应用的账户同步范围，该账户同步范围同时为DeveloperAPI可以查询和管理的账户范围。',
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
                'abilityTreeCode' => '137231',
                'abilityTreeNodes' => [
                    'FEATUREidaas60YEMV',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ApplicationId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用ID。',
                        'description' => '应用ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'app_mkv7rgt4d7i4u7zqtzev2mxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'ApplicationProvisioningScope' => [
                                'title' => '同步实体范围',
                                'description' => '账户同步范围。',
                                'type' => 'object',
                                'properties' => [
                                    'OrganizationalUnitIds' => [
                                        'title' => '同步授权的组织机构列表',
                                        'description' => '账户同步授权的组织机构范围列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '账户同步授权的组织机构范围。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                    ],
                                    'GroupIds' => [
                                        'title' => '同步授权的组列表',
                                        'description' => '同步授权的组列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'UsedQuota' => [
                                        'title' => '已使用授权主体quota数量',
                                        'description' => '已使用授权主体quota数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'MaxQuota' => [
                                        'title' => '租户最大授权主体quota数量',
                                        'description' => '租户最大授权主体quota数量',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"ApplicationProvisioningScope\\": {\\n    \\"OrganizationalUnitIds\\": [\\n      \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n    ],\\n    \\"GroupIds\\": [\\n      \\"\\"\\n    ],\\n    \\"UsedQuota\\": 0,\\n    \\"MaxQuota\\": 0\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM应用的账户同步范围',
        ],
        'CreateUser' => [
            'summary' => '在指定EIAM实例下创建一个EIAM账户。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名',
                        'description' => '账户名称，可包含英文字母、数字、符号“_” 、“ .”、“@”、“-”，长度最大限制64字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_001',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户展示名',
                        'description' => '账户展示名称，长度最大限制64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name_001',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码',
                        'description' => '密码，具体格式要求参考密码策略。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123456',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PhoneRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                        'description' => '手机区号，格式为1～6位数字，不含"+"。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号',
                        'description' => '手机号，格式为6～15位数字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12345678901',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PhoneNumberVerified',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                        'description' => '手机号是否验证，为可信手机号，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱',
                        'description' => '邮箱，邮箱前缀可包含大写英文字母、小写英文字母、数字、点、下划线或中划线，长度限制最长为64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example@example.com',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'EmailVerified',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                        'description' => '邮箱是否已验证，为可信邮箱，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '外部ID',
                        'description' => '账户外部ID，用于与外部系统的关联，最大长度限制64字符，若不设置，默认设置为账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PrimaryOrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主组织ID',
                        'description' => '主组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '所属组织ID集合',
                        'description' => '从属组织ID列表，账户可从属于多个组织。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_adz2vmgiwpo4tu6jtss3mynjji',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '描述',
                        'description' => '描述，最大长度限制256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description text',
                        'maxLength' => 256,
                    ],
                ],
                [
                    'name' => 'CustomFields',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '扩展字段列表',
                        'description' => '扩展字段列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '扩展字段对象。',
                            'type' => 'object',
                            'properties' => [
                                'FieldName' => [
                                    'title' => '扩展字段标识',
                                    'description' => '扩展字段标识，需提前创建相关扩展字段，参考控制台扩展字段模块。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'age',
                                    'maxLength' => 64,
                                ],
                                'FieldValue' => [
                                    'title' => '扩展字段值',
                                    'description' => '扩展字段值，该值遵循对应扩展字段的相关属性限制。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '10',
                                    'maxLength' => 64,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => 'description',
                    ],
                ],
                [
                    'name' => 'PasswordInitializationConfig',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '密码初始化配置',
                        'description' => '密码初始化配置。',
                        'type' => 'object',
                        'properties' => [
                            'PasswordInitializationPolicyPriority' => [
                                'title' => '密码初始化策略优先级，默认不生效。枚举取值:global(全局优先)、custom(自定义优先)',
                                'description' => '密码初始化策略优先级，默认不生效，取值可选范围：'."\n"
                                    .'- global：全局优先，采用实例级别的密码初始化策略，即本次设置的密码初始化策略均无效，参考密码相关策略的密码初始化策略。'."\n"
                                    .'- custom：自定义优先，以当前定义的密码初始化策略为准，包括是否开启强制改密、密码初始化方式以及通知渠道。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'global',
                                'maxLength' => 64,
                            ],
                            'PasswordForcedUpdateStatus' => [
                                'title' => '强制修改密码状态,默认不启用。枚举取值:enabled(开启)、disabled(禁用)',
                                'description' => '强制修改密码状态，默认不启用，取值可选范围：'."\n"
                                    .'- enabled：开启。'."\n"
                                    .'- disabled：禁用。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'enabled',
                                'maxLength' => 64,
                            ],
                            'UserNotificationChannels' => [
                                'title' => '密码通知渠道。枚举取值:email(邮件)、sms(短信)',
                                'description' => '密码通知渠道列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '密码通知渠道，取值可选范围：'."\n"
                                        .'- email：邮件。'."\n"
                                        .'- sms：短信。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'sms',
                                ],
                                'required' => false,
                                'example' => 'sms',
                                'maxLength' => 64,
                            ],
                            'PasswordInitializationType' => [
                                'title' => '密码初始化方式。枚举取值:random(随机)',
                                'description' => '密码初始化方式，取值可选范围：'."\n"
                                    .'- random：随机。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'random',
                                'maxLength' => 64,
                            ],
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'UserId' => [
                                'title' => '账户Id',
                                'description' => '账户ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"UserId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM账户',
        ],
        'AddUserToOrganizationalUnits' => [
            'summary' => '将指定EIAM账户加入到多个EIAM组织中，如果该账户已在该组织中，则直接返回成功。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID集合',
                        'description' => '组织ID列表，列表元素数量不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => true,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '将一个EIAM账户加入到多个EIAM组织',
        ],
        'DeleteUser' => [
            'summary' => '删除一个指定的EIAM账户，会清除账户相关的所有信息。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM账户',
        ],
        'RemoveUserFromOrganizationalUnits' => [
            'summary' => '将指定EIAM账户从多个EIAM组织中移除，若该组织为EIAM的主组织，则不支持移除操作。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID集合',
                        'description' => '组织ID列表，列表元素数量不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => true,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '将一个EIAM账户从多个EIAM组织中移除',
        ],
        'UpdateUser' => [
            'summary' => '更新一个EIAM账户基本信息。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名',
                        'description' => '账户名称，可包含英文字母、数字、符号“_” 、“ .”、“@”、“-”，长度最大限制64。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'username_test',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户展示名',
                        'description' => '账户展示名称，长度最大限制64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_name',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PhoneRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填',
                        'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +, 手机号若设置，此参数必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号',
                        'description' => '手机号，格式为6～15位数字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '156xxxxxxxxx',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PhoneNumberVerified',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号是否验证，手机号若设置此字段必须设置，无特殊业务可直接设置为true',
                        'description' => '手机号是否验证，为可信手机号，手机号若设置此字段必须设置，无特殊业务可直接设置为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱',
                        'description' => '邮箱，邮箱前缀可包含大写英文字母、小写英文字母、数字、点、下划线或中划线。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'example@example.com',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'EmailVerified',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true',
                        'description' => '邮箱是否验证，邮箱若设置此字段必须设置，无特殊业务可直接设置为true。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'CustomFields',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '扩展字段列表',
                        'description' => '扩展字段对象列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '扩展字段对象。',
                            'type' => 'object',
                            'properties' => [
                                'FieldName' => [
                                    'title' => '扩展字段标识',
                                    'description' => '扩展字段标识，需提前创建相关扩展字段，参考控制台扩展字段模块。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'nick_name',
                                    'maxLength' => 64,
                                ],
                                'FieldValue' => [
                                    'title' => '扩展字段值',
                                    'description' => '扩展字段值，该值遵循对应扩展字段的相关属性限制。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test_value',
                                    'maxLength' => 64,
                                ],
                                'Operation' => [
                                    'title' => '扩展字段操作类型',
                                    'description' => '扩展字段操作类型，取值可选范围：'."\n"
                                        .'- add：新增账户扩展字段值。'."\n"
                                        .'- replace：替换已有账户扩展字段值，如扩展字段值不存在，会转换为add操作。'."\n"
                                        .'- remove：移除账户扩展字段值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'add',
                                    'maxLength' => 64,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM账户基本信息',
        ],
        'UpdateUserPassword' => [
            'summary' => '更新一个指定EIAM账户的密码，密码需符合控制台密码策略的规则要求。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码',
                        'description' => '账户新密码，密码格式参考密码策略。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123456',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PasswordForcedUpdateStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '强制修改密码状态,默认不启用。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '强制修改密码状态，默认不启用，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enabled',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserNotificationChannels',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '密码通知渠道。枚举取值:email(邮件)、sms(短信)',
                        'description' => '密码通知渠道列表。密码通知渠道取值可选范围：'."\n"
                            .'- email：邮件。'."\n"
                            .'- sms：短信。',
                        'type' => 'array',
                        'items' => [
                            'description' => '密码通知渠道，取值可选范围：'."\n"
                                .'- email：邮件。'."\n"
                                .'- sms：短信。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'email',
                        ],
                        'required' => false,
                        'example' => 'sms',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM账户密码',
        ],
        'UpdateUserDescription' => [
            'summary' => '更新账户标签或描述。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户描述',
                        'description' => '描述信息，最大限制长度256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'this is a test.',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM账户描述信息',
        ],
        'DisableUser' => [
            'summary' => '将账号状态设置为禁用状态，若账户已处于禁用状态，则直接返回成功。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '禁用一个EIAM账号',
        ],
        'EnableUser' => [
            'summary' => '将账号设置为启用状态。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '启用一个EIAM账号',
        ],
        'UnlockUser' => [
            'summary' => '将处于锁定的EIAM账户进行解锁操作。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '解锁一个EIAM账户',
        ],
        'SetUserPrimaryOrganizationalUnit' => [
            'summary' => '设置指定EIAM账户的主组织，账户将从旧主组织移除，加入到新主组织中。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主组织ID',
                        'description' => '主组织ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置指定EIAM账户的主组织',
        ],
        'GetUser' => [
            'summary' => '查询一个EIAM账户详情信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID',
                        'description' => '账户ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'User' => [
                                'description' => '账户对象数据。',
                                'type' => 'object',
                                'properties' => [
                                    'UserId' => [
                                        'title' => '账户ID',
                                        'description' => '账户ID。',
                                        'type' => 'string',
                                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                    ],
                                    'Username' => [
                                        'title' => '账户名',
                                        'description' => '账户名。',
                                        'type' => 'string',
                                        'example' => 'name001',
                                    ],
                                    'DisplayName' => [
                                        'title' => '账户显示名',
                                        'description' => '账户显示名。',
                                        'type' => 'string',
                                        'example' => 'display_name001',
                                    ],
                                    'PasswordSet' => [
                                        'title' => '密码是否已设置',
                                        'description' => '密码是否已设置',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'PhoneRegion' => [
                                        'title' => '手机地区编号',
                                        'description' => '手机地区编号，示例：中国大陆手区号为86，不带 00 或 +。',
                                        'type' => 'string',
                                        'example' => '86',
                                    ],
                                    'PhoneNumber' => [
                                        'title' => '手机号码',
                                        'description' => '账户手机号码。',
                                        'type' => 'string',
                                        'example' => '156xxxxxxx',
                                    ],
                                    'PhoneNumberVerified' => [
                                        'title' => '手机号是否已验证',
                                        'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Email' => [
                                        'title' => '邮箱',
                                        'description' => '账户邮箱。',
                                        'type' => 'string',
                                        'example' => 'user@example.com',
                                    ],
                                    'EmailVerified' => [
                                        'title' => '邮箱是否已验证',
                                        'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'UserExternalId' => [
                                        'title' => '外部ID',
                                        'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。'."\n"
                                            ."\n"
                                            .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                        'type' => 'string',
                                        'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                    ],
                                    'UserSourceType' => [
                                        'title' => '来源类型',
                                        'description' => '账户来源类型，取值可选范围：'."\n"
                                            ."\n"
                                            .'- build_in：自建。'."\n"
                                            ."\n"
                                            .'- ding_talk：钉钉导入。'."\n"
                                            .'- ad：AD导入。'."\n"
                                            .'- ldap：LDAP导入。'."\n"
                                            .'- we_com：企业微信导入。',
                                        'type' => 'string',
                                        'example' => 'build_in',
                                    ],
                                    'UserSourceId' => [
                                        'title' => '来源ID',
                                        'description' => '账户来源ID。'."\n"
                                            ."\n"
                                            .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'Status' => [
                                        'title' => '账户状态',
                                        'description' => '账户状态，取值可选范围：'."\n"
                                            .'- enabled：启用中。'."\n"
                                            ."\n"
                                            .'- disabled：禁用中。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'AccountExpireTime' => [
                                        'title' => '账户过期时间',
                                        'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'PasswordExpireTime' => [
                                        'title' => '密码过期时间',
                                        'description' => '密码过期时间，Unix时间戳格式，单位为毫秒。'."\n"
                                            ."\n"
                                            .'- 当返回值为-1时表示密码不过期'."\n"
                                            ."\n"
                                            .'- 当无返回值时表示密码不过期'."\n"
                                            ."\n"
                                            .'- 当返回值为具体的时间戳格式时表示具体的密码过期时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'RegisterTime' => [
                                        'title' => '账户注册时间, 毫秒时间',
                                        'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'LockExpireTime' => [
                                        'title' => '锁定过期时间, 毫秒时间',
                                        'description' => '锁定过期时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间, 毫秒时间',
                                        'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '最近一次更新时间, 毫秒时间',
                                        'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'Description' => [
                                        'title' => '账号描述',
                                        'description' => '账户描述信息。',
                                        'type' => 'string',
                                        'example' => '测试账户',
                                    ],
                                    'OrganizationalUnits' => [
                                        'title' => '账户所属组织列表',
                                        'description' => '账户所属组织列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '组织对象信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'OrganizationalUnitId' => [
                                                    'title' => '机构ID',
                                                    'description' => '组织ID。',
                                                    'type' => 'string',
                                                    'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                                ],
                                                'OrganizationalUnitName' => [
                                                    'title' => '机构名称',
                                                    'description' => '组织名称。',
                                                    'type' => 'string',
                                                    'example' => 'test_ou_name',
                                                ],
                                                'Primary' => [
                                                    'title' => '是否主机构',
                                                    'description' => '是否主组织。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PrimaryOrganizationalUnitId' => [
                                        'title' => '账户主机构ID',
                                        'description' => '账户所属主组织ID。',
                                        'type' => 'string',
                                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                    ],
                                    'CustomFields' => [
                                        'title' => '账户扩展字段列表',
                                        'description' => '账户扩展字段列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '扩展字段对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'FieldName' => [
                                                    'title' => '字段标识',
                                                    'description' => '扩展字段标识。',
                                                    'type' => 'string',
                                                    'example' => 'age',
                                                ],
                                                'FieldValue' => [
                                                    'title' => '字段数据值',
                                                    'description' => '扩展字段数据值。',
                                                    'type' => 'string',
                                                    'example' => '10',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Groups' => [
                                        'title' => '账户所属组列表',
                                        'description' => '账户所属组对象列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '账户所属组对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'GroupId' => [
                                                    'title' => '组ID。',
                                                    'description' => '组ID。',
                                                    'type' => 'string',
                                                    'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                                ],
                                                'GroupName' => [
                                                    'title' => '组名称。',
                                                    'description' => '组名称。',
                                                    'type' => 'string',
                                                    'example' => 'group_test_name',
                                                ],
                                                'Description' => [
                                                    'title' => '组描述。',
                                                    'description' => '组描述。',
                                                    'type' => 'string',
                                                    'example' => 'this is a test.',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'InstanceId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'PreferredLanguage' => [
                                        'title' => '偏好语言',
                                        'description' => '偏好语言',
                                        'type' => 'string',
                                        'example' => 'en-US',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"User\\": {\\n    \\"UserId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n    \\"Username\\": \\"name001\\",\\n    \\"DisplayName\\": \\"display_name001\\",\\n    \\"PasswordSet\\": false,\\n    \\"PhoneRegion\\": \\"86\\",\\n    \\"PhoneNumber\\": \\"156xxxxxxx\\",\\n    \\"PhoneNumberVerified\\": true,\\n    \\"Email\\": \\"user@example.com\\",\\n    \\"EmailVerified\\": true,\\n    \\"UserExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n    \\"UserSourceType\\": \\"build_in\\",\\n    \\"UserSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"Status\\": \\"enabled\\",\\n    \\"AccountExpireTime\\": 1652085686179,\\n    \\"PasswordExpireTime\\": 1652085686179,\\n    \\"RegisterTime\\": 1652085686179,\\n    \\"LockExpireTime\\": 1652085686179,\\n    \\"CreateTime\\": 1652085686179,\\n    \\"UpdateTime\\": 1652085686179,\\n    \\"Description\\": \\"测试账户\\",\\n    \\"OrganizationalUnits\\": [\\n      {\\n        \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n        \\"OrganizationalUnitName\\": \\"test_ou_name\\",\\n        \\"Primary\\": true\\n      }\\n    ],\\n    \\"PrimaryOrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n    \\"CustomFields\\": [\\n      {\\n        \\"FieldName\\": \\"age\\",\\n        \\"FieldValue\\": \\"10\\"\\n      }\\n    ],\\n    \\"Groups\\": [\\n      {\\n        \\"GroupId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n        \\"GroupName\\": \\"group_test_name\\",\\n        \\"Description\\": \\"this is a test.\\"\\n      }\\n    ],\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"PreferredLanguage\\": \\"en-US\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM账户信息',
        ],
        'ListUsers' => [
            'summary' => '分页查询EIAM账户信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码，默认1。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小，默认20，最大不超过100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID集合',
                        'description' => '账户ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'UsernameStartsWith',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户名',
                        'description' => '账户名前缀，采用左匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name_001',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'DisplayNameStartsWith',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户展示名',
                        'description' => '账户展示名前缀，采用左匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PhoneRegion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机区号',
                        'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号',
                        'description' => '账户手机号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '156xxxxxxx',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'title' => '邮箱',
                        'description' => '账户邮箱。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user@example.com',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '外部关联ID',
                        'description' => '外部ID，用于外部数据与IDaaS账户的数据关联映射。'."\n"
                            ."\n"
                            .'说明：外部ID在同一来源类型和来源ID下唯一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'id_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserSourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '来源ID',
                        'description' => '账户来源ID。'."\n"
                            ."\n"
                            .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'UserSourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '来源类型',
                        'description' => '账户来源类型，取值可选范围：'."\n"
                            .'- build\\_in：自建。'."\n"
                            .'- ding\\_talk：钉钉导入。'."\n"
                            .'- ad：AD导入。'."\n"
                            .'- ldap：LDAP导入'."\n"
                            .'- we\\_com：企业微信导入。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'build_in',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户状态',
                        'description' => '账户状态，取值可选范围：'."\n"
                            .'- enabled： 启用中。'."\n"
                            .'- disabled： 禁用中。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enable',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Users' => [
                                'description' => '账户数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户数据。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '账户ID',
                                            'description' => '账户ID。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'Username' => [
                                            'title' => '账户名',
                                            'description' => '账户名。',
                                            'type' => 'string',
                                            'example' => 'name001',
                                        ],
                                        'DisplayName' => [
                                            'title' => '账户显示名',
                                            'description' => '账户显示名。',
                                            'type' => 'string',
                                            'example' => 'display_name001',
                                        ],
                                        'PasswordSet' => [
                                            'title' => '密码是否已设置',
                                            'description' => '密码是否已设置',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'PhoneRegion' => [
                                            'title' => '手机地区编号',
                                            'description' => '手机地区编号,示例：中国大陆手区号为86，不带 00 或 +。',
                                            'type' => 'string',
                                            'example' => '86',
                                        ],
                                        'PhoneNumber' => [
                                            'title' => '手机号码',
                                            'description' => '账户手机号码。',
                                            'type' => 'string',
                                            'example' => '156xxxxxxx',
                                        ],
                                        'PhoneNumberVerified' => [
                                            'title' => '手机号是否已验证',
                                            'description' => '手机号是否已验证，true表示手机号已经过用户验证或被管理员设置为已验证，false表示未验证。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Email' => [
                                            'title' => '邮箱',
                                            'description' => '账户邮箱。',
                                            'type' => 'string',
                                            'example' => 'user@example.com',
                                        ],
                                        'EmailVerified' => [
                                            'title' => '邮箱是否已验证',
                                            'description' => '邮箱是否已验证，true表示邮箱已经过用户的验证或被管理员设置为已验证，false表示未验证。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'UserExternalId' => [
                                            'title' => '外部ID',
                                            'description' => '账户外部ID，用于外部数据与IDaaS账户的数据关联映射，默认为IDaaS账户ID。'."\n"
                                                ."\n"
                                                .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'UserSourceType' => [
                                            'title' => '来源类型',
                                            'description' => '账户来源类型，取值可选范围：'."\n"
                                                .'- build_in：自建。'."\n"
                                                .'- ding_talk：钉钉导入。'."\n"
                                                .'- ad：AD导入。'."\n"
                                                .'- ldap：LDAP导入',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                        'UserSourceId' => [
                                            'title' => '来源ID',
                                            'description' => '账户来源ID。'."\n"
                                                ."\n"
                                                .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'Status' => [
                                            'title' => '账户状态',
                                            'description' => '账户状态，取值可选范围：'."\n"
                                                .'- enabled： 启用中。'."\n"
                                                .'- disabled：禁用中。',
                                            'type' => 'string',
                                            'example' => 'enabled',
                                        ],
                                        'AccountExpireTime' => [
                                            'title' => '账户过期时间',
                                            'description' => '账户过期时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'PasswordExpireTime' => [
                                            'title' => '密码过期时间',
                                            'description' => '密码过期时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'RegisterTime' => [
                                            'title' => '账户注册时间, 毫秒时间',
                                            'description' => '账户注册时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'LockExpireTime' => [
                                            'title' => '锁定过期时间, 毫秒时间',
                                            'description' => '账户锁定过期时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间, 毫秒时间',
                                            'description' => '账户创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '最近一次更新时间, 毫秒时间',
                                            'description' => '账户最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'Description' => [
                                            'title' => '账号描述',
                                            'description' => '账户描述。',
                                            'type' => 'string',
                                            'example' => '测试账户',
                                        ],
                                        'InstanceId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"Username\\": \\"name001\\",\\n      \\"DisplayName\\": \\"display_name001\\",\\n      \\"PasswordSet\\": false,\\n      \\"PhoneRegion\\": \\"86\\",\\n      \\"PhoneNumber\\": \\"156xxxxxxx\\",\\n      \\"PhoneNumberVerified\\": true,\\n      \\"Email\\": \\"user@example.com\\",\\n      \\"EmailVerified\\": true,\\n      \\"UserExternalId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"UserSourceType\\": \\"build_in\\",\\n      \\"UserSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"Status\\": \\"enabled\\",\\n      \\"AccountExpireTime\\": 1652085686179,\\n      \\"PasswordExpireTime\\": 1652085686179,\\n      \\"RegisterTime\\": 1652085686179,\\n      \\"LockExpireTime\\": 1652085686179,\\n      \\"CreateTime\\": 1652085686179,\\n      \\"UpdateTime\\": 1652085686179,\\n      \\"Description\\": \\"测试账户\\",\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM账户信息',
        ],
        'CreateOrganizationalUnit' => [
            'summary' => '在指定组织下创建一个新的EIAM组织。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织名称。',
                        'description' => '组织名称，最大长度限制64字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test_ou_name',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '父组织ID。',
                        'description' => '父组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '外部ID。',
                        'description' => '组织外部ID，用于与外部系统关联，默认为组织ID，最大长度限制64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 128,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织描述。',
                        'description' => '描述信息，最大限制长度256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'description',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'OrganizationalUnitId' => [
                                'title' => '组织ID',
                                'description' => '组织ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM组织',
        ],
        'DeleteOrganizationalUnit' => [
            'summary' => '删除一个指定的EIAM组织，若该组织下含有EIAM账户或子组织，则会删除失败。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM组织',
        ],
        'UpdateOrganizationalUnit' => [
            'summary' => '更新一个EIAM组织基本信息，如果参数不传，则默认不更新。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织名称。',
                        'description' => '组织名称，最大长度限制64字符，且同一父组织下，组织名称不能相同。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ou_name',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM组织基本信息',
        ],
        'UpdateOrganizationalUnitDescription' => [
            'summary' => '更新一个EIAM组织描述信息，来标记或备注打标。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织描述。',
                        'description' => '组织描述，长度最大限制256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'organizationalUnit_test',
                        'maxLength' => 256,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM组织描述信息',
        ],
        'UpdateOrganizationalUnitParentId' => [
            'summary' => '更新一个EIAM组织的父组织ID，相当于将指定的EIAM组织从一个父节点移动到新节点下。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '父组织ID。',
                        'description' => '父组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM组织的父组织ID',
        ],
        'GetRootOrganizationalUnit' => [
            'summary' => '查询EIAM根组织信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'OrganizationalUnit' => [
                                'description' => '组织数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'OrganizationalUnitId' => [
                                        'title' => '组织ID',
                                        'description' => '组织ID。',
                                        'type' => 'string',
                                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                    ],
                                    'OrganizationalUnitName' => [
                                        'title' => '组织名称',
                                        'description' => '组织名称。',
                                        'type' => 'string',
                                        'example' => 'name001',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '组织创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '最近一次更新时间',
                                        'description' => '组织最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'Description' => [
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"OrganizationalUnit\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n    \\"OrganizationalUnitName\\": \\"name001\\",\\n    \\"CreateTime\\": 1652085686179,\\n    \\"UpdateTime\\": 1652085686179,\\n    \\"Description\\": \\"测试组织\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM根组织信息',
        ],
        'GetOrganizationalUnit' => [
            'summary' => '查询一个EIAM组织信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'OrganizationalUnit' => [
                                'description' => '组织数据对象。',
                                'type' => 'object',
                                'properties' => [
                                    'OrganizationalUnitId' => [
                                        'title' => '机构ID',
                                        'description' => '组织ID。',
                                        'type' => 'string',
                                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                    ],
                                    'OrganizationalUnitName' => [
                                        'title' => '机构名称',
                                        'description' => '组织名称。',
                                        'type' => 'string',
                                        'example' => 'test_organizationalUnit_name',
                                    ],
                                    'ParentId' => [
                                        'title' => '父机构ID',
                                        'description' => '父组织ID。',
                                        'type' => 'string',
                                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                    ],
                                    'OrganizationalUnitExternalId' => [
                                        'title' => '外部ID',
                                        'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。'."\n"
                                            ."\n"
                                            .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                        'type' => 'string',
                                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                    ],
                                    'OrganizationalUnitSourceType' => [
                                        'title' => '来源类型',
                                        'description' => '账户来源类型，取值可选范围：'."\n"
                                            .'- build\\_in：自建。'."\n"
                                            .'- ding\\_talk：钉钉导入。'."\n"
                                            .'- ad：AD导入。'."\n"
                                            .'- ldap：LDAP导入。'."\n"
                                            .'- we\\_com：企业微信导入。',
                                        'type' => 'string',
                                        'example' => 'build_in',
                                    ],
                                    'OrganizationalUnitSourceId' => [
                                        'title' => '来源ID',
                                        'description' => '组织来源ID。'."\n"
                                            ."\n"
                                            .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'CreateTime' => [
                                        'title' => '创建时间',
                                        'description' => '组织创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '最近一次更新时间',
                                        'description' => '最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'Description' => [
                                        'title' => '描述',
                                        'description' => '组织描述信息。',
                                        'type' => 'string',
                                        'example' => '测试组织',
                                    ],
                                    'InstanceId' => [
                                        'title' => '实例ID',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'Leaf' => [
                                        'title' => '是否叶子节点',
                                        'description' => '是否叶子节点，true表示该组织没有子节点，false表示该组织下存在子节点。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"OrganizationalUnit\\": {\\n    \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n    \\"OrganizationalUnitName\\": \\"test_organizationalUnit_name\\",\\n    \\"ParentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n    \\"OrganizationalUnitExternalId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n    \\"OrganizationalUnitSourceType\\": \\"build_in\\",\\n    \\"OrganizationalUnitSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"CreateTime\\": 1652085686179,\\n    \\"UpdateTime\\": 1652085686179,\\n    \\"Description\\": \\"测试组织\\",\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"Leaf\\": false\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM组织信息',
        ],
        'ListOrganizationalUnits' => [
            'summary' => '分页查询EIAM组织信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码，默认1。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小，默认20，最大不超过100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组织ID列表。',
                        'description' => '组织ID列表，列表元素数量最多不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组织ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        ],
                        'required' => false,
                        'example' => '[ou_wovwffm62xifdziem7an7xxxxx]',
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织名称。',
                        'description' => '组织名称，查询为精确匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name_001',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitNameStartsWith',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织名称。',
                        'description' => '组织名称前缀，查询为左匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '父组织ID。',
                        'description' => '父组织ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                        'maxLength' => 64,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '响应结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '数据总条数目，为匹配到的总数量，单次返回最大数量以pageSize为准。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'OrganizationalUnits' => [
                                'description' => '组织数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '组织数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OrganizationalUnitId' => [
                                            'title' => '组织ID',
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'OrganizationalUnitName' => [
                                            'title' => '组织名称',
                                            'description' => '组织名称。',
                                            'type' => 'string',
                                            'example' => 'test_organizationalUnit_name',
                                        ],
                                        'ParentId' => [
                                            'title' => '父组织ID',
                                            'description' => '父组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'OrganizationalUnitExternalId' => [
                                            'title' => '外部ID',
                                            'description' => '组织外部ID，用于外部数据与IDaaS组织的数据关联映射，默认为IDaaS组织ID。'."\n"
                                                ."\n"
                                                .'说明：外部ID在同一来源类型和来源ID下唯一。',
                                            'type' => 'string',
                                            'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
                                        ],
                                        'OrganizationalUnitSourceType' => [
                                            'title' => '来源类型',
                                            'description' => '组织来源类型，取值可选范围：'."\n"
                                                .'- build\\_in：自建。'."\n"
                                                .'- ding\\_talk：钉钉导入。'."\n"
                                                .'- ad：AD导入。'."\n"
                                                .'- ldap：LDAP导入。'."\n"
                                                .'- we\\_com：企业微信导入。',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                        'OrganizationalUnitSourceId' => [
                                            'title' => '来源ID',
                                            'description' => '组织来源ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '组织创建时间，格式为Unix时间戳，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '最近一次更新时间',
                                            'description' => '组织最近一次更新时间，格式为Unix时间戳，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'Description' => [
                                            'title' => '描述',
                                            'description' => '组织描述。',
                                            'type' => 'string',
                                            'example' => '测试组织',
                                        ],
                                        'InstanceId' => [
                                            'title' => '实例ID',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'Leaf' => [
                                            'title' => '是否叶子节点',
                                            'description' => '是否叶子节点，true表示该组织没有子节点，false表示该组织下存在子节点。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 1000,\\n  \\"OrganizationalUnits\\": [\\n    {\\n      \\"OrganizationalUnitId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"OrganizationalUnitName\\": \\"test_organizationalUnit_name\\",\\n      \\"ParentId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"OrganizationalUnitExternalId\\": \\"ou_wovwffm62xifdziem7an7xxxxx\\",\\n      \\"OrganizationalUnitSourceType\\": \\"build_in\\",\\n      \\"OrganizationalUnitSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"CreateTime\\": 1652085686179,\\n      \\"UpdateTime\\": 1652085686179,\\n      \\"Description\\": \\"测试组织\\",\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"Leaf\\": false\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM组织信息',
        ],
        'ListOrganizationalUnitParents' => [
            'summary' => '列表查询指定EIAM组织的所有先代组织信息，结果的组织列表以顶级到底级的层级顺序排列。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'OrganizationalUnitId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组织ID。',
                        'description' => '组织ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ou_wovwffm62xifdziem7an7xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Parents' => [
                                'description' => '父组织列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '父组织对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'OrganizationalUnitId' => [
                                            'title' => '组织ID',
                                            'description' => '组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_4lag76zc2km5ssg5vsmm2lznvu',
                                        ],
                                        'ParentId' => [
                                            'title' => '父组织ID',
                                            'description' => '父组织ID。',
                                            'type' => 'string',
                                            'example' => 'ou_x3beoyepv2ls5iwuge3xhjkwbm',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Parents\\": [\\n    {\\n      \\"OrganizationalUnitId\\": \\"ou_4lag76zc2km5ssg5vsmm2lznvu\\",\\n      \\"ParentId\\": \\"ou_x3beoyepv2ls5iwuge3xhjkwbm\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询一个EIAM组织的所有先代组织',
        ],
        'CreateGroup' => [
            'summary' => '创建一个EIAM账户组。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组名称。',
                        'description' => '组名称，最大长度限制64字符。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'name_test',
                    ],
                ],
                [
                    'name' => 'GroupExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组外部ID。',
                        'description' => '组外部ID，用于与外部系统关联，默认为组ID，最大长度限制64字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组描述。',
                        'description' => '描述信息，最大限制长度256字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'this is a test.',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'GroupId' => [
                                'title' => '组ID。',
                                'description' => '组ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"GroupId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个EIAM账户组',
        ],
        'AddUsersToGroup' => [
            'summary' => '将多个EIAM账户添加到指定EIAM账户组。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，列表元素个数不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => true,
                        'example' => '[ou_001]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '将多个EIAM账户添加到指定EIAM账户组',
        ],
        'DeleteGroup' => [
            'summary' => '删除一个EIAM账户组信息。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个EIAM账户组',
        ],
        'RemoveUsersFromGroup' => [
            'summary' => '将多个EIAM账户从指定EIAM账户组中移除。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，列表元素个数不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => true,
                        'example' => '[ou_001]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '将多个EIAM账户从指定EIAM账户组中移除',
        ],
        'UpdateGroup' => [
            'summary' => '更新一个EIAM账户组信息，如果信息为空，则默认不更新。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组名称。',
                        'description' => '组名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name_test',
                    ],
                ],
                [
                    'name' => 'GroupExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组外部ID。',
                        'description' => '组外部ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM账户组',
        ],
        'UpdateGroupDescription' => [
            'summary' => '更新一个EIAM账户组描述信息，可作为备注或标记。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组描述。',
                        'description' => '组描述，最大长度限制256。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新一个EIAM账户组描述',
        ],
        'GetGroup' => [
            'summary' => '查询一个EIAM账户组详情信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Group' => [
                                'description' => '账户组对象信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GroupId' => [
                                        'title' => '组ID。',
                                        'description' => '组ID。',
                                        'type' => 'string',
                                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                    ],
                                    'GroupName' => [
                                        'title' => '组名称。',
                                        'description' => '组名称。',
                                        'type' => 'string',
                                        'example' => 'group_name',
                                    ],
                                    'Description' => [
                                        'title' => '组描述。',
                                        'description' => '组描述。',
                                        'type' => 'string',
                                        'example' => 'test_group',
                                    ],
                                    'GroupExternalId' => [
                                        'title' => '组外部标识。',
                                        'description' => '组外部标识，用于与外部系统关联，默认为账户组ID。',
                                        'type' => 'string',
                                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                    ],
                                    'GroupSourceType' => [
                                        'title' => '组来源类型。',
                                        'description' => '组来源类型，目前只支持自建，取值可选范围：'."\n"
                                            .'- build_in：自建。',
                                        'type' => 'string',
                                        'example' => 'build_in',
                                    ],
                                    'GroupSourceId' => [
                                        'title' => '组来源ID。',
                                        'description' => '组来源ID，默认为实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'CreateTime' => [
                                        'title' => '组创建时间, Unix时间戳格式，单位为毫秒。',
                                        'description' => '组创建时间, Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '组最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                        'description' => '组最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1652085686179',
                                    ],
                                    'InstanceId' => [
                                        'title' => '实例ID。',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Group\\": {\\n    \\"GroupId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n    \\"GroupName\\": \\"group_name\\",\\n    \\"Description\\": \\"test_group\\",\\n    \\"GroupExternalId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n    \\"GroupSourceType\\": \\"build_in\\",\\n    \\"GroupSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"CreateTime\\": 1652085686179,\\n    \\"UpdateTime\\": 1652085686179,\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询一个EIAM账户组',
        ],
        'ListGroups' => [
            'summary' => '列表查询EIAM账户组列表信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '组ID列表。',
                        'description' => '组ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '组ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组名称,精确匹配。',
                        'description' => '组名称，查询为精确匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name_test',
                    ],
                ],
                [
                    'name' => 'GroupNameStartsWith',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组名称，左匹配。',
                        'description' => '组名称前缀，查询为左匹配查询。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'name',
                    ],
                ],
                [
                    'name' => 'GroupExternalId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组外部ID。',
                        'description' => '组外部ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'group_external_id',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '数据总条数目，为匹配到的总数量，单次返回最大数量以pageSize为准。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Groups' => [
                                'description' => '账户组列表对象。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户组对象信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupId' => [
                                            'title' => '组ID。',
                                            'description' => '组ID。',
                                            'type' => 'string',
                                            'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'GroupName' => [
                                            'title' => '组名称。',
                                            'description' => '组名称。',
                                            'type' => 'string',
                                            'example' => 'group_name',
                                        ],
                                        'Description' => [
                                            'title' => '组描述。',
                                            'description' => '组描述。',
                                            'type' => 'string',
                                            'example' => 'test group',
                                        ],
                                        'GroupExternalId' => [
                                            'title' => '组外部标识。',
                                            'description' => '组外部标识，用于与外部系统关联，默认为账户组ID。',
                                            'type' => 'string',
                                            'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'GroupSourceType' => [
                                            'title' => '组来源类型。',
                                            'description' => '组来源类型，目前只支持自建，取值可选范围：'."\n"
                                                .'- build_in：自建。',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                        'GroupSourceId' => [
                                            'title' => '组来源ID。',
                                            'description' => '组来源ID，若通过其他方式导入创建，此为外部来源ID，默认为实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'CreateTime' => [
                                            'title' => '组创建时间, Unix时间戳格式，单位为毫秒。',
                                            'description' => '组创建时间, Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '组最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                            'description' => '组最近一次更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1652085686179',
                                        ],
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"Groups\\": [\\n    {\\n      \\"GroupId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"GroupName\\": \\"group_name\\",\\n      \\"Description\\": \\"test group\\",\\n      \\"GroupExternalId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"GroupSourceType\\": \\"build_in\\",\\n      \\"GroupSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"CreateTime\\": 1652085686179,\\n      \\"UpdateTime\\": 1652085686179,\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询EIAM账户组信息',
        ],
        'ListUsersForGroup' => [
            'summary' => '查询指定EIAM账户组下的账户列表。',
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
                'abilityTreeCode' => '165220',
                'abilityTreeNodes' => [
                    'FEATUREidaasCRU1S2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码，默认1。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小，默认20，最大不超过100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组ID。',
                        'description' => '组ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                    ],
                ],
                [
                    'name' => 'UserIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '账户ID列表。',
                        'description' => '账户ID列表，列表元素最大数量不超过100。',
                        'type' => 'array',
                        'items' => [
                            'description' => '账户ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                        ],
                        'required' => false,
                        'example' => '[ou_001]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '总数总条数目，为匹配到的总数量，单次返回最大数量以pageSize为准。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'Users' => [
                                'description' => '账户对象信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户对象信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '账户Id',
                                            'description' => '账户ID。',
                                            'type' => 'string',
                                            'example' => 'user_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'GroupMemberRelationSourceId' => [
                                            'description' => '组成员关系来源ID。'."\n"
                                                ."\n"
                                                .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'GroupMemberRelationSourceType' => [
                                            'description' => '组成员关系来源类型，取值可选范围：'."\n"
                                                ."\n"
                                                .'build_in：自建。'."\n"
                                                ."\n"
                                                .'ding_talk：钉钉导入。'."\n"
                                                ."\n"
                                                .'ad：AD导入。'."\n"
                                                ."\n"
                                                .'ldap：LDAP导入。'."\n"
                                                ."\n"
                                                .'we_com：企业微信导入。',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 1000,\\n  \\"Users\\": [\\n    {\\n      \\"UserId\\": \\"user_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"GroupMemberRelationSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"GroupMemberRelationSourceType\\": \\"build_in\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询一个EIAM账户组下的账户信息',
        ],
        'ListGroupsForUser' => [
            'summary' => '查询指定EIAM账户的所属账户组列表。',
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
                'abilityTreeCode' => '165221',
                'abilityTreeNodes' => [
                    'FEATUREidaasCRU1S2',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '列表页码。',
                        'description' => '列表页码，默认1。',
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
                        'title' => '列表大小。',
                        'description' => '列表大小，默认20，最大不超过100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '账户ID。',
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
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '数据总条数目，为匹配到的总数量，单次返回最大数量以pageSize为准。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1000',
                            ],
                            'Groups' => [
                                'description' => '账户组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '账户组对象信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'GroupId' => [
                                            'title' => '组ID。',
                                            'description' => '账户组ID。',
                                            'type' => 'string',
                                            'example' => 'group_d6sbsuumeta4h66ec3il7yxxxx',
                                        ],
                                        'GroupMemberRelationSourceId' => [
                                            'description' => '组成员关系来源ID。'."\n"
                                                ."\n"
                                                .'自建类型默认为实例ID，其他类型，分别对应不同来源的企业ID，比如钉钉来源对应钉钉企业的corpId。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'GroupMemberRelationSourceType' => [
                                            'description' => '组成员关系来源类型，取值可选范围：'."\n"
                                                ."\n"
                                                .'build_in：自建。'."\n"
                                                ."\n"
                                                .'ding_talk：钉钉导入。'."\n"
                                                ."\n"
                                                .'ad：AD导入。'."\n"
                                                ."\n"
                                                .'ldap：LDAP导入。'."\n"
                                                ."\n"
                                                .'we_com：企业微信导入。',
                                            'type' => 'string',
                                            'example' => 'build_in',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 1000,\\n  \\"Groups\\": [\\n    {\\n      \\"GroupId\\": \\"group_d6sbsuumeta4h66ec3il7yxxxx\\",\\n      \\"GroupMemberRelationSourceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"GroupMemberRelationSourceType\\": \\"build_in\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表查询一个EIAM账户的所属账户组信息',
        ],
        'SetForgetPasswordConfiguration' => [
            'summary' => '设置EIAM忘记密码策略。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例Id',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eiam-111ccc1111',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'ForgetPasswordStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '忘记密码配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '忘记密码配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'AuthenticationChannels',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '身份认证渠道。枚举取值:email(邮件)、sms(短信)',
                        'description' => '身份认证渠道列表。枚举取值:email(邮件)、sms(短信)',
                        'type' => 'array',
                        'items' => [
                            'description' => '忘记密码认证渠道。当forgetPasswordStatus取值为enabled时必传。枚举取值:email(邮件)、sms(短信)',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'sms',
                        ],
                        'required' => false,
                        'example' => 'email',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置EIAM忘记密码策略',
        ],
        'SetPasswordInitializationConfiguration' => [
            'summary' => '设置指定EIAM实例下密码初始化策略。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PasswordInitializationStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码初始化配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '密码初始化配置状态，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordInitializationType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码初始化方式。当passwordInitializationStatus取值为enabled时必传。枚举取值:random(随机)',
                        'description' => '密码初始化方式。当PasswordInitializationStatus取值为enabled时必传，取值可选范围：'."\n"
                            .'- random：随机。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'random',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordForcedUpdateStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码强制更新状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '密码强制更新状态，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordInitializationNotificationChannels',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '密码初始化通知渠道。枚举取值:email(邮件)、sms(短信)',
                        'description' => '密码初始化通知渠道列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '密码初始化通知渠道。当PasswordForcedUpdateStatus取值为enabled时必传，取值可选范围：'."\n"
                                .'- email：邮件。'."\n"
                                .'- sms：短信。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'email',
                        ],
                        'required' => false,
                        'example' => 'email',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置EIAM密码初始化策略',
        ],
        'SetPasswordHistoryConfiguration' => [
            'summary' => '设置指定EIAM实例下的密码历史策略。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PasswordHistoryStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码历史配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '密码历史配置状态，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordHistoryMaxRetention',
                    'in' => 'query',
                    'schema' => [
                        'title' => '保留最近密码记录数。当passwordHistoryStatus取值为enabled时必传。',
                        'description' => '保留最近密码记录数。当PasswordHistoryStatus取值为enabled时必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '3',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置EIAM密码历史策略',
        ],
        'SetPasswordExpirationConfiguration' => [
            'summary' => '设置指定EIAM实例下密码过期策略。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PasswordExpirationStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码过期配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '密码过期配置状态，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordValidMaxDay',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码有效时长，单位是天。当passwordExpirationStatus取值为enabled时必传。',
                        'description' => '密码有效时长，单位是天。当PasswordExpirationStatus取值为enabled时必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '180',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordExpirationAction',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码过期动作。当passwordExpirationStatus取值为enabled时必传。枚举取值:forbid\\_login(禁止登录)、force\\_update\\_password(强制修改密码)、remind\\_update\\_password(提醒修改密码)',
                        'description' => '密码过期动作。当PasswordExpirationStatus取值为enabled时必传，取值可选范围：'."\n"
                            .'- forbid\\_login：禁止登录。'."\n"
                            .'- force\\_update\\_password：强制修改密码。'."\n"
                            .'- remind\\_update\\_password：提醒修改密码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'force_update_password',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordExpirationNotificationStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码过期通知状态。枚举取值:enabled(开启)、disabled(禁用)',
                        'description' => '密码过期通知状态，取值可选范围：'."\n"
                            .'- enabled：开启。'."\n"
                            .'- disabled：禁用。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'enabled',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordExpirationNotificationChannels',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '密码过期通知渠道。当passwordExpirationNotificationStatus取值为enabled时必传。枚举取值:login(用户登录)、email(邮件)、sms(短信)',
                        'description' => '密码过期通知渠道列表，当PasswordExpirationNotificationStatus取值为enabled时必传。',
                        'type' => 'array',
                        'items' => [
                            'description' => '密码过期通知渠道，取值可选范围：'."\n"
                                .'- login：用户登录。'."\n"
                                .'- email：邮件。'."\n"
                                .'- sms：短信。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'login',
                        ],
                        'required' => false,
                        'example' => 'login',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordExpirationNotificationDuration',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码过期通知时间，单位是天。当passwordExpirationNotificationStatus取值为enabled时必传。',
                        'description' => '密码过期通知时间，单位是天。当PasswordExpirationNotificationStatus取值为enabled时必传。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordForcedUpdateDuration',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码强制修改时间，单位是天。当前字段取值要比passwordExpirationNotificationDuration大。',
                        'description' => '密码强制修改时间，单位是天。当前字段取值要比PasswordExpirationNotificationDuration大。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '7',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置EIAM密码过期策略',
        ],
        'SetPasswordComplexityConfiguration' => [
            'summary' => '设置指定EIAM实例下密码复杂度策略。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'PasswordMinLength',
                    'in' => 'query',
                    'schema' => [
                        'title' => '密码最小长度',
                        'description' => '密码最小长度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'PasswordComplexityRules',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '密码复杂度规则',
                        'description' => '密码复杂度规则列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '规则检查对象。',
                            'type' => 'object',
                            'properties' => [
                                'PasswordCheckType' => [
                                    'title' => '密码检查类型。枚举取值:inclusion\\_upper\\_case(包含大写字母)、inclusion\\_lower\\_case(包含小写字母)、inclusion\\_special\\_case(包含特殊字符)、inclusion\\_number(包含数字)、exclusion\\_username(不能包含用户名)、exclusion\\_email(不能包含邮箱)、exclusion\\_phone\\_number(不能包含手机号)、exclusion\\_display\\_name(不能包含显示名)',
                                    'description' => '密码检查类型，取值可选范围：'."\n"
                                        .'- inclusion\\_upper\\_case：包含英文大写字母。'."\n"
                                        .'- inclusion\\_lower\\_case：包含英文小写字母。'."\n"
                                        .'- inclusion\\_special\\_case：包含特殊字符 ( @ % + \\ / \' ! # $ ^ ? : , ( ) { } [ ] ~ - _ . )。'."\n"
                                        .'- inclusion\\_number：包含数字。'."\n"
                                        .'- exclusion\\_username：不能包含账户名。'."\n"
                                        .'- exclusion\\_email：不能包含邮箱。'."\n"
                                        .'- exclusion\\_phone\\_number：不能包含手机号。'."\n"
                                        .'- exclusion\\_display\\_name：不能包含显示名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'inclusion_upper_case',
                                    'maxLength' => 64,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '设置EIAM密码复杂度策略',
        ],
        'GetForgetPasswordConfiguration' => [
            'summary' => '查询指定EIAM实例下忘记密码策略。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'OpenForgetPasswordConfiguration' => [
                                'description' => '忘记密码配置。',
                                'type' => 'object',
                                'properties' => [
                                    'Enable' => [
                                        'title' => '是否开启忘记密码',
                                        'description' => '是否开启忘记密码，已废弃，参考使用forgetPasswordStatus参数。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'EnableSms' => [
                                        'title' => '是否开启SMS做为忘记密码的认证方法',
                                        'description' => '表示是否开启SMS做为忘记密码的认证方法，已废弃，请参考使用authenticationChannels。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'EnableEmail' => [
                                        'title' => '是否开启邮件做为忘记密码的认证方法',
                                        'description' => '是否开启邮件做为忘记密码的认证方法，已废弃，请参考使用authenticationChannels。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'ForgetPasswordStatus' => [
                                        'title' => '忘记密码配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '忘记密码配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'AuthenticationChannels' => [
                                        'title' => '忘记密码认证渠道。当forgetPasswordStatus取值为enabled时必传。枚举取值:email(邮件)、sms(短信)',
                                        'description' => '忘记密码认证渠道列表。当forgetPasswordStatus取值为enabled时必传。枚举取值:email(邮件)、sms(短信)',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '忘记密码认证渠道。当forgetPasswordStatus取值为enabled时必传。枚举取值:email(邮件)、sms(短信)',
                                            'type' => 'string',
                                            'example' => 'sms',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"OpenForgetPasswordConfiguration\\": {\\n    \\"Enable\\": true,\\n    \\"EnableSms\\": true,\\n    \\"EnableEmail\\": false,\\n    \\"ForgetPasswordStatus\\": \\"enabled\\",\\n    \\"AuthenticationChannels\\": [\\n      \\"sms\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM忘记密码策略',
        ],
        'GetPasswordInitializationConfiguration' => [
            'summary' => '查询EIAM密码初始化策略。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'PasswordInitializationConfiguration' => [
                                'description' => '密码初始化配置。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordInitializationStatus' => [
                                        'title' => '密码初始化配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '密码初始化配置状态，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'PasswordInitializationType' => [
                                        'title' => '密码初始化方式。枚举取值:random(随机)',
                                        'description' => '密码初始化方式，取值可选范围：'."\n"
                                            .'- random：随机。',
                                        'type' => 'string',
                                        'example' => 'random',
                                    ],
                                    'PasswordForcedUpdateStatus' => [
                                        'title' => '密码强制更新状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '密码强制更新状态，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'PasswordInitializationNotificationChannels' => [
                                        'title' => '密码初始化通知渠道。枚举取值:email(邮件)、sms(短信)',
                                        'description' => '密码初始化通知渠道列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '密码初始化通知渠道，取值可选范围：'."\n"
                                                .'- email：邮件。'."\n"
                                                .'- sms：短信。',
                                            'type' => 'string',
                                            'example' => 'email',
                                        ],
                                        'example' => 'email',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"PasswordInitializationConfiguration\\": {\\n    \\"PasswordInitializationStatus\\": \\"enabled\\",\\n    \\"PasswordInitializationType\\": \\"random\\",\\n    \\"PasswordForcedUpdateStatus\\": \\"enabled\\",\\n    \\"PasswordInitializationNotificationChannels\\": [\\n      \\"email\\"\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM密码初始化策略',
        ],
        'GetPasswordHistoryConfiguration' => [
            'summary' => '查询指定EIAM实例下的密码历史策略。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'PasswordHistoryConfiguration' => [
                                'description' => '密码历史检查配置。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordHistoryStatus' => [
                                        'title' => '密码历史配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '密码历史配置状态，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'PasswordHistoryMaxRetention' => [
                                        'title' => '保留最近密码记录数。',
                                        'description' => '保留最近密码记录数。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"PasswordHistoryConfiguration\\": {\\n    \\"PasswordHistoryStatus\\": \\"enabled\\",\\n    \\"PasswordHistoryMaxRetention\\": 3\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM密码历史策略',
        ],
        'GetPasswordExpirationConfiguration' => [
            'summary' => '查询指定EIAM实例下密码过期策略。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'PasswordExpirationConfiguration' => [
                                'description' => '密码过期配置。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordExpirationStatus' => [
                                        'title' => '密码过期配置状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '密码过期配置状态，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'PasswordValidMaxDay' => [
                                        'title' => '密码有效时长，单位是天。',
                                        'description' => '密码有效时长，单位是天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '180',
                                    ],
                                    'PasswordExpirationAction' => [
                                        'title' => '密码过期动作。枚举取值:forbid\\_login(禁止登录)、force\\_update\\_password(强制修改密码)、remind\\_update\\_password(提醒修改密码)',
                                        'description' => '密码过期动作，取值可选范围：'."\n"
                                            .'- forbid\\_login：禁止登录。'."\n"
                                            .'- force\\_update\\_password：强制修改密码。'."\n"
                                            .'- remind\\_update\\_password：提醒修改密码。',
                                        'type' => 'string',
                                        'example' => 'forbid_login',
                                    ],
                                    'PasswordExpirationNotificationStatus' => [
                                        'title' => '密码过期通知状态。枚举取值:enabled(开启)、disabled(禁用)',
                                        'description' => '密码过期通知状态，取值可选范围：'."\n"
                                            .'- enabled：开启。'."\n"
                                            .'- disabled：禁用。',
                                        'type' => 'string',
                                        'example' => 'enabled',
                                    ],
                                    'PasswordExpirationNotificationChannels' => [
                                        'title' => '密码过期通知渠道。枚举取值:login(用户登录)、email(邮件)、sms(短信)',
                                        'description' => '密码过期通知渠道列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '密码过期通知渠道，取值可选范围：'."\n"
                                                .'- login：用户登录。'."\n"
                                                .'- email：邮件。'."\n"
                                                .'- sms：短信。',
                                            'type' => 'string',
                                            'example' => 'login',
                                        ],
                                        'example' => 'login',
                                    ],
                                    'PasswordExpirationNotificationDuration' => [
                                        'title' => '密码过期通知时间，单位是天。',
                                        'description' => '密码过期通知时间，单位是天。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '7',
                                    ],
                                    'PasswordForcedUpdateDuration' => [
                                        'title' => '密码强制修改时间，单位是天。',
                                        'description' => '密码强制修改时间，单位是天。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"PasswordExpirationConfiguration\\": {\\n    \\"PasswordExpirationStatus\\": \\"enabled\\",\\n    \\"PasswordValidMaxDay\\": 180,\\n    \\"PasswordExpirationAction\\": \\"forbid_login\\",\\n    \\"PasswordExpirationNotificationStatus\\": \\"enabled\\",\\n    \\"PasswordExpirationNotificationChannels\\": [\\n      \\"login\\"\\n    ],\\n    \\"PasswordExpirationNotificationDuration\\": 7,\\n    \\"PasswordForcedUpdateDuration\\": 3\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM密码过期策略',
        ],
        'GetPasswordComplexityConfiguration' => [
            'summary' => '查询指定EIAM实例下密码复杂度策略。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
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
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'PasswordComplexityConfiguration' => [
                                'description' => '密码复杂度策略配置。',
                                'type' => 'object',
                                'properties' => [
                                    'PasswordMinLength' => [
                                        'title' => '密码最短长度',
                                        'description' => '密码最短长度。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'PasswordComplexityRules' => [
                                        'title' => '密码复杂度规则',
                                        'description' => '密码复杂度规则列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '规则检查对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'PasswordCheckType' => [
                                                    'title' => '密码检查类型。枚举取值:inclusion\\_upper\\_case(包含大写字母)、inclusion\\_lower\\_case(包含小写字母)、inclusion\\_special\\_case(包含特殊字符)、inclusion\\_number(包含数字)、exclusion\\_username(不能包含用户名)、exclusion\\_email(不能包含邮箱)、exclusion\\_phone\\_number(不能包含手机号)、exclusion\\_display\\_name(不能包含显示名)',
                                                    'description' => '密码检查类型，取值可选范围：'."\n"
                                                        .'- inclusion\\_upper\\_case：包含英文大写字母。'."\n"
                                                        .'- inclusion\\_lower\\_case：包含英文小写字母。'."\n"
                                                        .'- inclusion\\_special\\_case：包含特殊字符 ( @ % + \\ / \' ! # $ ^ ? : , ( ) { } [ ] ~ - _ . )。'."\n"
                                                        .'- inclusion\\_number：包含数字。'."\n"
                                                        .'- exclusion\\_username：不能包含账户名。'."\n"
                                                        .'- exclusion\\_email：不能包含邮箱。'."\n"
                                                        .'- exclusion\\_phone\\_number：不能包含手机号。'."\n"
                                                        .'- exclusion\\_display\\_name：不能包含显示名。',
                                                    'type' => 'string',
                                                    'example' => 'inclusion_upper_case',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"PasswordComplexityConfiguration\\": {\\n    \\"PasswordMinLength\\": 3,\\n    \\"PasswordComplexityRules\\": [\\n      {\\n        \\"PasswordCheckType\\": \\"inclusion_upper_case\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询EIAM密码复杂度策略',
        ],
        'CreateNetworkAccessEndpoint' => [
            'summary' => '创建一个专属网络端点。',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点名称。',
                        'description' => '专属网络端点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xx业务VPC访问端点',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的VpcID。',
                        'description' => '专属网络端点连接的VPC ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpc-examplexxx',
                    ],
                ],
                [
                    'name' => 'VpcRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的VpcID所属地域。',
                        'description' => '专属网络端点连接的VPC ID所属地域。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VSwitchIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '专属网络端点连接的指定vSwitch。',
                        'description' => '专属网络端点连接的指定vSwitch列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '交换机ID。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'vsw-2vc8z0f90z4k6xxxxx'."\n",
                        ],
                        'required' => false,
                        'example' => 'vsw-examplexxx',
                        'maxLength' => 2,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '幂等Token。',
                        'description' => '保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多信息，请参考文档《[如何保证幂等性](https://www.alibabacloud.com/help/zh/ecs/developer-reference/how-to-ensure-idempotence)》。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'client-token-example',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'NetworkAccessEndpointId' => [
                                'title' => '网络端点ID。',
                                'description' => '网络端点ID。',
                                'type' => 'string',
                                'properties' => [],
                                'example' => 'nae_examplexxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"NetworkAccessEndpointId\\": \\"nae_examplexxxx\\"\\n}","type":"json"}]',
            'title' => '创建一个网络端点',
        ],
        'DeleteNetworkAccessEndpoint' => [
            'summary' => '删除一个专属类型的网络端点。',
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
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点ID。',
                        'description' => '专属网络端点ID。仅可删除NetworkEndpointType为专属类型（private）的网络端点。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nae_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '删除一个专属网络端点',
        ],
        'UpdateNetworkAccessEndpointName' => [
            'summary' => '修改一个专属类型的网络端点名称。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点ID。',
                        'description' => '专属网络端点ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nae_examplexxxx',
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点名称。',
                        'description' => '专属网络端点名称。仅可更新NetworkEndpointType为专属类型（private）的网络端点。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'xx业务VPC访问端点',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\"\\n}","type":"json"}]',
            'title' => '更新网络端点名称',
        ],
        'ListNetworkAccessEndpointAvailableRegions' => [
            'summary' => '查询IDaaS EIAM支持创建网络端点的地域列表。',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Regions' => [
                                'description' => '可用地域集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '地域ID。',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LocalName' => [
                                            'title' => '地域名称。',
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网络端点支持地域列表',
        ],
        'ListNetworkAccessEndpointAvailableZones' => [
            'summary' => '查询IDaaS EIAM指定地域支持创建网络端点的可用区列表。',
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
                    'name' => 'NaeRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点支持的地域',
                        'description' => '专属网络端点支持的地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Zones' => [
                                'description' => '当前地域支持的网络端点可用区列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '可用区信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ZoneId' => [
                                            'title' => '可用区ID。',
                                            'description' => '可用区ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou-j',
                                        ],
                                        'LocalName' => [
                                            'title' => '可用区名称。',
                                            'description' => '可用区名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）可用区J',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Zones\\": [\\n    {\\n      \\"ZoneId\\": \\"cn-hangzhou-j\\",\\n      \\"LocalName\\": \\"华东1（杭州）可用区J\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网络端点支持的可用区列表',
        ],
        'GetNetworkAccessEndpoint' => [
            'summary' => '查询指定的网络端点信息。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点ID。',
                        'description' => '专属网络端点ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nae-examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'NetworkAccessEndpoint' => [
                                'description' => '网络端点信息。',
                                'type' => 'object',
                                'properties' => [
                                    'InstanceId' => [
                                        'title' => '实例ID。',
                                        'description' => '实例ID。',
                                        'type' => 'string',
                                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                    ],
                                    'NetworkAccessEndpointId' => [
                                        'title' => '专属网络端点ID。',
                                        'description' => '专属网络端点ID。',
                                        'type' => 'string',
                                        'example' => 'nae_examplexxx',
                                    ],
                                    'NetworkAccessEndpointName' => [
                                        'title' => '专属网络端点名称。',
                                        'description' => '专属网络端点名称。',
                                        'type' => 'string',
                                        'example' => 'xx业务VPC访问端点',
                                    ],
                                    'VpcId' => [
                                        'title' => '专属网络端点连接的VpcID。',
                                        'description' => '专属网络端点连接的VPC ID。',
                                        'type' => 'string',
                                        'example' => 'vpc-examplexxx',
                                    ],
                                    'VpcRegionId' => [
                                        'title' => '专属网络端点连接的Vpc所属地域。',
                                        'description' => '专属网络端点连接的VPC所属地域。',
                                        'type' => 'string',
                                        'example' => 'cn-hangzhou',
                                    ],
                                    'VSwitchIds' => [
                                        'title' => '专属网络端点连接的指定vSwitch列表。',
                                        'description' => '专属网络端点连接的指定vSwitch列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '虚拟交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-2vc8z0f90z4k6xxxxx'."\n",
                                        ],
                                        'example' => 'vsw-examplexxx',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => '专属网络端点使用的安全组ID。',
                                        'description' => '专属网络端点使用的安全组ID。',
                                        'type' => 'string',
                                        'example' => 'sg-examplexxx',
                                    ],
                                    'Status' => [
                                        'title' => '专属网络端点状态。',
                                        'description' => '网络端点的状态，取值可选范围：'."\n"
                                            ."\n"
                                            .'- pending：待初始化。'."\n"
                                            .'- creating：创建中。'."\n"
                                            .'- running：运行中。'."\n"
                                            .'- deleting：删除中。',
                                        'type' => 'string',
                                        'example' => 'running',
                                    ],
                                    'NetworkAccessEndpointType' => [
                                        'title' => '专属网络端点连接的类型。',
                                        'description' => '网络端点的类型，取值可选范围：'."\n"
                                            ."\n"
                                            .'- shared：共享网络端点。'."\n"
                                            .'- private：专属网络端点。',
                                        'type' => 'string',
                                        'example' => 'private',
                                    ],
                                    'EgressPublicIpAddresses' => [
                                        'title' => '网络访问端点公网出口IP地址段。',
                                        'description' => '共享网络端点公网出口IP地址段，当且仅当NetworkEndpointType为共享网络端点（shared）时有返回值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '公网出口IP地址。',
                                            'type' => 'string',
                                            'example' => '公网出口IP地址，具体以接口实际返回为准。 示例：203.0.XX.XX/27',
                                        ],
                                        'example' => '8.xx.xx.xxx/27',
                                    ],
                                    'EgressPrivateIpAddresses' => [
                                        'title' => '网络访问端私网出口IP地址列表。',
                                        'description' => '专属网络端点公网出口IP地址段，当且仅当NetworkEndpointType为专属网络端点（private）时有返回值。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '私网出口IP地址。',
                                            'type' => 'string',
                                            'example' => '192.168.1.1',
                                        ],
                                        'example' => '172.168.x.x',
                                    ],
                                    'CreateTime' => [
                                        'title' => '专属网络端点创建时间。',
                                        'description' => '网络端点创建时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                    'UpdateTime' => [
                                        'title' => '专属网络端点最近更新时间。',
                                        'description' => '专属网络端点最近更新时间，Unix时间戳格式，单位为毫秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1649830226000',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"NetworkAccessEndpoint\\": {\\n    \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n    \\"NetworkAccessEndpointId\\": \\"nae_examplexxx\\",\\n    \\"NetworkAccessEndpointName\\": \\"xx业务VPC访问端点\\",\\n    \\"VpcId\\": \\"vpc-examplexxx\\",\\n    \\"VpcRegionId\\": \\"cn-hangzhou\\",\\n    \\"VSwitchIds\\": [\\n      \\"vsw-2vc8z0f90z4k6xxxxx\\\\n\\"\\n    ],\\n    \\"SecurityGroupId\\": \\"sg-examplexxx\\",\\n    \\"Status\\": \\"running\\",\\n    \\"NetworkAccessEndpointType\\": \\"private\\",\\n    \\"EgressPublicIpAddresses\\": [\\n      \\"公网出口IP地址，具体以接口实际返回为准。 示例：203.0.XX.XX/27\\"\\n    ],\\n    \\"EgressPrivateIpAddresses\\": [\\n      \\"192.168.1.1\\"\\n    ],\\n    \\"CreateTime\\": 1649830226000,\\n    \\"UpdateTime\\": 1649830226000\\n  }\\n}","type":"json"}]',
            'title' => '查询一个网络端点信息',
        ],
        'ListNetworkAccessEndpoints' => [
            'summary' => '查询IDaaS EIAM实例下的网络端点列表。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询凭证（Token）。',
                        'description' => '查询凭证（Token），取值为上一次API调用返回的NextToken参数值。首次查询为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'NTxxxxxexample',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页查询时每页行数。',
                        'description' => '分页查询时每页行数。最大值为100。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的类型。',
                        'description' => '网络端点的类型，取值可选范围：'."\n"
                            ."\n"
                            .'- shared：共享网络端点；'."\n"
                            .'- private：专属网络端点；'."\n"
                            ."\n"
                            .'默认值为private。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'private',
                        'default' => 'private',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的Vpc ID。',
                        'description' => '专属网络端点连接的VPC ID。NetworkAccessEndpointType取值为shared时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-examplexxx',
                    ],
                ],
                [
                    'name' => 'VpcRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的Vpc所属地域。',
                        'description' => '专属网络端点连接的VPC所属地域，该地域取值必须在ListNetworkAccessEndpointAvailableRegions接口中返回。NetworkAccessEndpointType取值为shared时不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点连接的状态。',
                        'description' => '网络端点的状态，取值可选范围：'."\n"
                            .' '."\n"
                            .'- pending：待初始化。'."\n"
                            .'- creating：创建中。'."\n"
                            .'- running：运行中。'."\n"
                            .'- deleting：删除中。'."\n"
                            ."\n"
                            .'NetworkAccessEndpointType取值为shared时，当前筛选参数不生效。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'running',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'TotalCount' => [
                                'title' => '列表总条数目。',
                                'description' => '列表总条数目。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'NextToken' => [
                                'title' => '本次调用返回的查询凭证（Token）值。',
                                'description' => '本次调用返回的查询凭证（Token）值。',
                                'type' => 'string',
                                'example' => 'NTxxxexample',
                            ],
                            'NetworkAccessEndpoints' => [
                                'description' => '网络端点集合。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网络端点信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'NetworkAccessEndpointId' => [
                                            'title' => '专属网络端点ID。',
                                            'description' => '网络端点ID。',
                                            'type' => 'string',
                                            'example' => 'nae_examplexxx',
                                        ],
                                        'NetworkAccessEndpointName' => [
                                            'title' => '专属网络端点名称。',
                                            'description' => '网络端点名称。',
                                            'type' => 'string',
                                            'example' => 'xx业务VPC访问端点',
                                        ],
                                        'VpcId' => [
                                            'title' => '专属网络端点连接的VpcID。',
                                            'description' => '专属网络端点连接的VPC ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-examplexxx',
                                        ],
                                        'VpcRegionId' => [
                                            'title' => '专属网络端点连接的Vpc所属地域。',
                                            'description' => '专属网络端点连接的VPC所属地域。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'VSwitchIds' => [
                                            'title' => '专属网络端点连接的指定vSwitch列表。',
                                            'description' => '专属网络端点连接的指定vSwitch列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '交换机ID。',
                                                'type' => 'string',
                                                'example' => 'vsw-2vc8z0f90z4k6xxxxx',
                                            ],
                                            'example' => 'vsw-examplexxx',
                                        ],
                                        'SecurityGroupId' => [
                                            'title' => '专属网络端点使用的安全组ID。',
                                            'description' => '专属网络端点使用的安全组ID。',
                                            'type' => 'string',
                                            'example' => 'sg-examplexxx',
                                        ],
                                        'Status' => [
                                            'title' => '专属网络端点状态。',
                                            'description' => '网络端点的状态，取值可选范围：'."\n"
                                                .' '."\n"
                                                .'- pending：待初始化。'."\n"
                                                .'- creating：创建中。'."\n"
                                                .'- running：运行中。'."\n"
                                                .'- deleting：删除中。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'NetworkAccessEndpointType' => [
                                            'title' => '专属网络端点连接的类型。',
                                            'description' => '网络端点的类型，取值可选范围：'."\n"
                                                ."\n"
                                                .'- shared：共享网络端点。'."\n"
                                                .'- private：专属网络端点。',
                                            'type' => 'string',
                                            'example' => 'private',
                                        ],
                                        'CreateTime' => [
                                            'title' => '专属网络端点创建时间。',
                                            'description' => '网络端点创建时间。Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '专属网络端点最近更新时间。',
                                            'description' => '网络端点最近更新时间。Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"TotalCount\\": 100,\\n  \\"NextToken\\": \\"NTxxxexample\\",\\n  \\"NetworkAccessEndpoints\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"NetworkAccessEndpointId\\": \\"nae_examplexxx\\",\\n      \\"NetworkAccessEndpointName\\": \\"xx业务VPC访问端点\\",\\n      \\"VpcId\\": \\"vpc-examplexxx\\",\\n      \\"VpcRegionId\\": \\"cn-hangzhou\\",\\n      \\"VSwitchIds\\": [\\n        \\"vsw-2vc8z0f90z4k6xxxxx\\"\\n      ],\\n      \\"SecurityGroupId\\": \\"sg-examplexxx\\",\\n      \\"Status\\": \\"running\\",\\n      \\"NetworkAccessEndpointType\\": \\"private\\",\\n      \\"CreateTime\\": 1649830226000,\\n      \\"UpdateTime\\": 1649830226000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网络端点列表',
        ],
        'ListNetworkAccessPaths' => [
            'summary' => '查询指定网络端点下的访问路径列表。',
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        'maxLength' => 64,
                    ],
                ],
                [
                    'name' => 'NetworkAccessEndpointId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '专属网络端点ID。',
                        'description' => '专属网络端点ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'nae_examplexxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'NetworkAccessPaths' => [
                                'description' => '网络端点访问路径列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '网络端点访问路径信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'InstanceId' => [
                                            'title' => '实例ID。',
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                                        ],
                                        'NetworkAccessEndpointId' => [
                                            'title' => '专属网络端点ID。',
                                            'description' => '专属网络端点ID。',
                                            'type' => 'string',
                                            'example' => 'nae_examplexxx',
                                        ],
                                        'NetworkAccessPathId' => [
                                            'title' => '专属网络端点访问路径ID。',
                                            'description' => '专属网络端点访问路径ID。',
                                            'type' => 'string',
                                            'example' => 'nap_examplexxx',
                                        ],
                                        'NetworkInterfaceId' => [
                                            'title' => '专属网络端点访问路径使用的ENI ID。',
                                            'description' => '专属网络端点访问路径使用的ENI ID。',
                                            'type' => 'string',
                                            'example' => 'eni-examplexxx',
                                        ],
                                        'VSwitchId' => [
                                            'title' => '专属网络端点访问路径的ENI归属的交换机ID。',
                                            'description' => '专属网络端点访问路径的ENI归属的交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-examplexxx',
                                        ],
                                        'PrivateIpAddress' => [
                                            'title' => '专属网络端点访问路径使用的ENI私网地址。',
                                            'description' => '专属网络端点访问路径使用的ENI私网地址。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Status' => [
                                            'title' => '专属网络端点访问路径状态。',
                                            'description' => '专属网络端点访问路径状态，取值可选范围：'."\n"
                                                .' '."\n"
                                                .'- pending：待初始化。'."\n"
                                                .'- creating：创建中。'."\n"
                                                .'- running：运行中。'."\n"
                                                .'- deleting：删除中。',
                                            'type' => 'string',
                                            'example' => 'running',
                                        ],
                                        'CreateTime' => [
                                            'title' => '专属网络端点访问路径创建时间。',
                                            'description' => '专属网络端点访问路径创建时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                        'UpdateTime' => [
                                            'title' => '专属网络端点访问路径最近更新时间。',
                                            'description' => '专属网络端点访问路径最近更新时间，Unix时间戳格式，单位为毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1649830226000',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"NetworkAccessPaths\\": [\\n    {\\n      \\"InstanceId\\": \\"idaas_ue2jvisn35ea5lmthk267xxxxx\\",\\n      \\"NetworkAccessEndpointId\\": \\"nae_examplexxx\\",\\n      \\"NetworkAccessPathId\\": \\"nap_examplexxx\\",\\n      \\"NetworkInterfaceId\\": \\"eni-examplexxx\\",\\n      \\"VSwitchId\\": \\"vsw-examplexxx\\",\\n      \\"PrivateIpAddress\\": \\"cn-hangzhou\\",\\n      \\"Status\\": \\"running\\",\\n      \\"CreateTime\\": 1649830226000,\\n      \\"UpdateTime\\": 1649830226000\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询网络端点的访问路径列表',
        ],
        'ListEiamRegions' => [
            'summary' => '查询EIAM2.0/EIAM1.0地域列表。',
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
            'systemTags' => [],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Regions' => [
                                'description' => '区域列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '地域数据对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'RegionId' => [
                                            'title' => '地域ID。',
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'LocalName' => [
                                            'title' => '地域名称。',
                                            'description' => '地域名称。',
                                            'type' => 'string',
                                            'example' => '华东1（杭州）',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Regions\\": [\\n    {\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"LocalName\\": \\"华东1（杭州）\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询EIAM2.0/EIAM1.0地域列表',
        ],
        'ListEiamInstances' => [
            'summary' => '查询EIAM2.0/EIAM1.0实例列表。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceIds',
                    'in' => 'query',
                    'style' => 'flat',
                    'schema' => [
                        'title' => '实例ID列表',
                        'description' => '实例ID列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '实例ID',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'idaas_ue2jvisn35ea5lmthk267xxxxx',
                        ],
                        'required' => false,
                        'example' => '',
                    ],
                ],
                [
                    'name' => 'InstanceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例所属Region',
                        'description' => '实例所属Region',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                        'maxLength' => 32,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0441BD79-92F3-53AA-8657-F8CE4A2B912A',
                            ],
                            'Instances' => [
                                'description' => '实例列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实例详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'title' => '实例描述信息',
                                            'description' => '实例描述信息',
                                            'type' => 'string',
                                            'example' => '正式环境',
                                        ],
                                        'InstanceId' => [
                                            'title' => '实例Id',
                                            'description' => '实例Id',
                                            'type' => 'string',
                                            'example' => 'idaas_eypq6ljgyeuwmlw672sulxxxxx',
                                        ],
                                        'StartTime' => [
                                            'title' => '实例创建时间',
                                            'description' => '实例创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1677810869300',
                                        ],
                                        'SSODomain' => [
                                            'title' => '实例sso域名地址',
                                            'description' => '实例sso域名地址',
                                            'type' => 'string',
                                            'example' => 'xxxx.aliyunidaas.com',
                                        ],
                                        'DeveloperAPIPrivateDomain' => [
                                            'title' => '实例developer私网域名地址',
                                            'description' => '实例developer私网域名地址',
                                            'type' => 'string',
                                            'example' => 'eiam-developerapi-cn.vpc-proxy.aliyuncs.com',
                                        ],
                                        'DeveloperAPIPublicDomain' => [
                                            'title' => '实例developer公网域名地址',
                                            'description' => '实例developer公网域名地址',
                                            'type' => 'string',
                                            'example' => 'eiam-developerapi.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'OpenAPIPrivateDomain' => [
                                            'title' => '实例openApi私网域名地址',
                                            'description' => '实例openApi私网域名地址',
                                            'type' => 'string',
                                            'example' => 'eiam-cn.vpc-proxy.aliyuncs.com',
                                        ],
                                        'OpenAPIPublicDomain' => [
                                            'title' => '实例openApi公网域名地址',
                                            'description' => '实例openApi公网域名地址',
                                            'type' => 'string',
                                            'example' => 'eiam.cn-hangzhou.aliyuncs.com',
                                        ],
                                        'InstanceStatus' => [
                                            'title' => '实例状态',
                                            'description' => '实例状态',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'InstanceVersion' => [
                                            'title' => '实例版本',
                                            'description' => '实例版本',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'EIAM 2.0' => 'EIAM 2.0',
                                                'EIAM 1.0' => 'EIAM 1.0',
                                            ],
                                            'example' => 'EIAM 2.0',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0441BD79-92F3-53AA-8657-F8CE4A2B912A\\",\\n  \\"Instances\\": [\\n    {\\n      \\"Description\\": \\"正式环境\\",\\n      \\"InstanceId\\": \\"idaas_eypq6ljgyeuwmlw672sulxxxxx\\",\\n      \\"StartTime\\": 1677810869300,\\n      \\"SSODomain\\": \\"xxxx.aliyunidaas.com\\",\\n      \\"DeveloperAPIPrivateDomain\\": \\"eiam-developerapi-cn.vpc-proxy.aliyuncs.com\\",\\n      \\"DeveloperAPIPublicDomain\\": \\"eiam-developerapi.cn-hangzhou.aliyuncs.com\\",\\n      \\"OpenAPIPrivateDomain\\": \\"eiam-cn.vpc-proxy.aliyuncs.com\\",\\n      \\"OpenAPIPublicDomain\\": \\"eiam.cn-hangzhou.aliyuncs.com\\",\\n      \\"InstanceStatus\\": \\"RUNNING\\",\\n      \\"InstanceVersion\\": \\"EIAM 2.0\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取IDaaS实例列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'eiam.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'eiam.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
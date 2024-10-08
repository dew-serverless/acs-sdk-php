<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'dataphin-public',
        'version' => '2023-06-30',
    ],
    'directories' => [
        [
            'id' => 184805,
            'title' => '平台管理',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 184812,
                    'title' => '用户与授权',
                    'type' => 'directory',
                    'children' => [
                        'BatchGetUsers',
                        'BatchAddTenantMember',
                        'UpdateTenantMembers',
                        'RemoveUser',
                        'QueryPagedAddableUsers',
                        'ListUsers',
                    ],
                ],
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'BatchGetUsers' => [
            'summary' => '批量获取租户成员信息。',
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
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'UserIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '用户ID列表',
                        'description' => '用户ID列表',
                        'type' => 'array',
                        'items' => [
                            'title' => '用户ID',
                            'description' => '用户ID',
                            'type' => 'string',
                            'required' => true,
                            'example' => '10003011',
                            'default' => '10003011',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求标识',
                                'description' => '请求标识',
                                'type' => 'string',
                                'example' => '75DD06F8-1661-5A6E-B0A6-7E23133BDC60',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端响应HttpCode',
                                'description' => '后端响应HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '请求错误码, OK表示请求正常',
                                'description' => '请求错误码, OK表示请求正常',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '响应结果, 用户列表',
                                'description' => '响应结果, 用户列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AccountName' => [
                                            'title' => '原始账号登录名',
                                            'description' => '原始账号登录名',
                                            'type' => 'string',
                                            'example' => 'zhangsan',
                                        ],
                                        'DingNumber' => [
                                            'title' => '钉钉',
                                            'description' => '钉钉',
                                            'type' => 'string',
                                            'example' => 'dingding123',
                                        ],
                                        'DisplayName' => [
                                            'title' => '账号显示名',
                                            'description' => '账号显示名',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1691051228662',
                                        ],
                                        'GmtModified' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1691051228662',
                                        ],
                                        'Mail' => [
                                            'title' => '邮箱',
                                            'description' => '邮箱',
                                            'type' => 'string',
                                            'example' => '11@xx.com',
                                        ],
                                        'MobilePhone' => [
                                            'title' => '手机号',
                                            'description' => '手机号',
                                            'type' => 'string',
                                            'example' => '13211111111',
                                        ],
                                        'NickName' => [
                                            'title' => '别名',
                                            'description' => '别名',
                                            'type' => 'string',
                                            'example' => 'zhangsan',
                                        ],
                                        'RealName' => [
                                            'title' => '真实名称',
                                            'description' => '真实名称',
                                            'type' => 'string',
                                            'example' => '张三',
                                        ],
                                        'SourceType' => [
                                            'title' => '用户来源',
                                            'description' => '用户来源',
                                            'type' => 'string',
                                            'example' => 'aliyun',
                                        ],
                                        'SourceUserId' => [
                                            'title' => '原始账号ID',
                                            'description' => '原始账号ID',
                                            'type' => 'string',
                                            'example' => '101323232',
                                        ],
                                        'TenantId' => [
                                            'title' => '租户ID',
                                            'description' => '租户ID',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30001011',
                                        ],
                                        'UserId' => [
                                            'title' => '用户ID',
                                            'description' => '用户ID',
                                            'type' => 'string',
                                            'example' => '10110110',
                                        ],
                                        'UserName' => [
                                            'title' => '用户名',
                                            'description' => '用户名',
                                            'type' => 'string',
                                            'example' => 'zhangsan',
                                        ],
                                        'UserTypes' => [
                                            'title' => '用户类型:SUPER_USER,OPS',
                                            'description' => '用户类型列表',
                                            'type' => 'array',
                                            'items' => [
                                                'title' => '用户类型',
                                                'description' => '用户类型：'."\n"
                                                    .'SUPER_USER：系统超级账号'."\n"
                                                    .'OPS：系统运维账号',
                                                'type' => 'string',
                                                'example' => 'OPS',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75DD06F8-1661-5A6E-B0A6-7E23133BDC60\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": [\\n    {\\n      \\"AccountName\\": \\"zhangsan\\",\\n      \\"DingNumber\\": \\"dingding123\\",\\n      \\"DisplayName\\": \\"张三\\",\\n      \\"GmtCreate\\": 1691051228662,\\n      \\"GmtModified\\": 1691051228662,\\n      \\"Mail\\": \\"11@xx.com\\",\\n      \\"MobilePhone\\": \\"13211111111\\",\\n      \\"NickName\\": \\"zhangsan\\",\\n      \\"RealName\\": \\"张三\\",\\n      \\"SourceType\\": \\"aliyun\\",\\n      \\"SourceUserId\\": \\"101323232\\",\\n      \\"TenantId\\": 30001011,\\n      \\"UserId\\": \\"10110110\\",\\n      \\"UserName\\": \\"zhangsan\\",\\n      \\"UserTypes\\": [\\n        \\"OPS\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量获取租户成员信息',
        ],
        'BatchAddTenantMember' => [
            'summary' => '批量添加租户成员。',
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
                'operationType' => 'update',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'BatchAddTenantMemberCommand',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求指令',
                        'description' => '请求指令',
                        'type' => 'object',
                        'properties' => [
                            'UserIds' => [
                                'title' => '用户ID列表, 一次请求不超过50个用户',
                                'description' => '用户ID列表, 一次请求不超过50个用户',
                                'type' => 'array',
                                'items' => [
                                    'title' => '用户ID',
                                    'description' => '用户ID',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '10110111',
                                ],
                                'required' => false,
                            ],
                            'MemberRoles' => [
                                'title' => '角色列表',
                                'description' => '角色列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '角色：'."\n"
                                        .'SYSTEM_ADMIN: 系统管理员'."\n"
                                        .'DATASOURCE_MANAGER: 数据源管理员'."\n"
                                        .'SECURITY_ADMIN: 安全管理员'."\n"
                                        .'QUALITY_MANAGER: 质量管理员'."\n"
                                        .'EXPORT_ADMIN: 跨租户发布使用人'."\n"
                                        .'DATA_STANDARD_MANAGER: 数据标准管理员'."\n"
                                        .'BUSINESS_MEMBER: 业务成员'."\n"
                                        .'LABELS_BUSINESS_MEMBER: 标签业务员'."\n"
                                        .'DATAPRO_OPERATE_ADMIN: 运营管理员'."\n"
                                        .'DATAPRO_OPERATE_MEMBER: 运营人员'."\n"
                                        .'DATAPRO_BUSINESS_ANALYST: 业务分析师',
                                    'description' => '角色：'."\n"
                                        .'SYSTEM_ADMIN: 系统管理员'."\n"
                                        .'DATASOURCE_MANAGER: 数据源管理员'."\n"
                                        .'SECURITY_ADMIN: 安全管理员'."\n"
                                        .'QUALITY_MANAGER: 质量管理员'."\n"
                                        .'EXPORT_ADMIN: 跨租户发布使用人'."\n"
                                        .'DATA_STANDARD_MANAGER: 数据标准管理员'."\n"
                                        .'BUSINESS_MEMBER: 业务成员'."\n"
                                        .'LABELS_BUSINESS_MEMBER: 标签业务员'."\n"
                                        .'DATAPRO_OPERATE_ADMIN: 运营管理员'."\n"
                                        .'DATAPRO_OPERATE_MEMBER: 运营人员'."\n"
                                        .'DATAPRO_BUSINESS_ANALYST: 业务分析师',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DATASOURCE_MANAGER',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求标识',
                                'description' => '请求标识',
                                'type' => 'string',
                                'example' => '75DD06F8-1661-5A6E-B0A6-7E23133BDC60',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端HttpCode响应码',
                                'description' => '后端HttpCode响应码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '错误码, OK 表示请求成功',
                                'description' => '错误码, OK 表示请求成功',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '请求结果',
                                'description' => '添加结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75DD06F8-1661-5A6E-B0A6-7E23133BDC60\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '添加租户成员',
        ],
        'UpdateTenantMembers' => [
            'summary' => '批量更新租户成员角色、电话等信息。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'UpdateTenantMembersCommand',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求指令',
                        'description' => '请求指令',
                        'type' => 'object',
                        'properties' => [
                            'UserContactIncludeRolesList' => [
                                'title' => '成员列表',
                                'description' => '成员列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '成员',
                                    'description' => '成员',
                                    'type' => 'object',
                                    'properties' => [
                                        'UserId' => [
                                            'title' => '用户ID',
                                            'description' => '用户ID',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '10110101',
                                        ],
                                        'MobilePhone' => [
                                            'title' => '电话',
                                            'description' => '电话',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '13200010001',
                                        ],
                                        'Mail' => [
                                            'title' => '邮箱',
                                            'description' => '邮箱',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '11@xx.com',
                                        ],
                                        'DingNumber' => [
                                            'title' => '钉钉',
                                            'description' => '钉钉',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'dingding123',
                                        ],
                                        'MemberRoles' => [
                                            'title' => '角色列表',
                                            'description' => '角色列表',
                                            'type' => 'array',
                                            'items' => [
                                                'title' => '角色:'."\n"
                                                    .'SYSTEM_ADMIN: 系统管理员'."\n"
                                                    .'DATASOURCE_MANAGER: 数据源管理员'."\n"
                                                    .'SECURITY_ADMIN: 安全管理员'."\n"
                                                    .'QUALITY_MANAGER: 质量管理员'."\n"
                                                    .'EXPORT_ADMIN: 跨租户发布使用人'."\n"
                                                    .'DATA_STANDARD_MANAGER: 数据标准管理员'."\n"
                                                    .'BUSINESS_MEMBER: 业务成员'."\n"
                                                    .'LABELS_BUSINESS_MEMBER: 标签业务员'."\n"
                                                    .'DATAPRO_OPERATE_ADMIN: 运营管理员'."\n"
                                                    .'DATAPRO_OPERATE_MEMBER: 运营人员'."\n"
                                                    .'DATAPRO_BUSINESS_ANALYST: 业务分析师',
                                                'description' => '角色:'."\n"
                                                    .'SYSTEM_ADMIN: 系统管理员'."\n"
                                                    .'DATASOURCE_MANAGER: 数据源管理员'."\n"
                                                    .'SECURITY_ADMIN: 安全管理员'."\n"
                                                    .'QUALITY_MANAGER: 质量管理员'."\n"
                                                    .'EXPORT_ADMIN: 跨租户发布使用人'."\n"
                                                    .'DATA_STANDARD_MANAGER: 数据标准管理员'."\n"
                                                    .'BUSINESS_MEMBER: 业务成员'."\n"
                                                    .'LABELS_BUSINESS_MEMBER: 标签业务员'."\n"
                                                    .'DATAPRO_OPERATE_ADMIN: 运营管理员'."\n"
                                                    .'DATAPRO_OPERATE_MEMBER: 运营人员'."\n"
                                                    .'DATAPRO_BUSINESS_ANALYST: 业务分析师',
                                                'type' => 'string',
                                                'required' => false,
                                                'example' => 'DATASOURCE_MANAGER',
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => true,
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求标识ID',
                                'description' => '请求标识ID',
                                'type' => 'string',
                                'example' => '75DD06F8-1661-5A6E-B0A6-7E23133BDC60',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端响应HttpCode',
                                'description' => '后端响应HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '请求错误码, OK表示请求正常',
                                'description' => '请求错误码, OK表示请求正常',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75DD06F8-1661-5A6E-B0A6-7E23133BDC60\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '更新租户成员信息',
        ],
        'RemoveUser' => [
            'summary' => '删除租户成员。',
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
                'operationType' => 'delete',
                'riskType' => 'high',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户条件',
                        'description' => '租户条件',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'RemoveUserCommand',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '删除条件',
                        'description' => '删除条件',
                        'type' => 'object',
                        'properties' => [
                            'SourceType' => [
                                'title' => '用户来源',
                                'description' => '用户来源',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'aliyun',
                            ],
                            'SourceId' => [
                                'title' => '用户原始ID',
                                'description' => '用户原始ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '10012323',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求标识ID',
                                'description' => '请求标识ID',
                                'type' => 'string',
                                'example' => '75DD06F8-1661-5A6E-B0A6-7E23133BDC60',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端响应HttpCode',
                                'description' => '后端响应HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '错误码, OK标识请求成功',
                                'description' => '错误码, OK标识请求成功',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '删除结果',
                                'description' => '删除结果',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75DD06F8-1661-5A6E-B0A6-7E23133BDC60\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": true\\n}","type":"json"}]',
            'title' => '删除租户成员',
        ],
        'QueryPagedAddableUsers' => [
            'summary' => '获取可添加至租户成员列表的用户。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'AddableUserPagedQuery',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页查询条件',
                        'description' => '分页查询条件',
                        'type' => 'object',
                        'properties' => [
                            'SearchText' => [
                                'title' => '用户名或账号或ID',
                                'description' => '用户名或账号或ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'zhangsan',
                            ],
                            'Page' => [
                                'title' => '页码',
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页记录数',
                                'description' => '每页记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '20',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '75DD06F8-1661-5A6E-B0A6-7E23133BDC60',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端响应HttpCode',
                                'description' => '后端响应HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '请求错误码, OK表示请求正常',
                                'description' => '请求错误码, OK表示请求正常',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'UserList' => [
                                        'title' => '用户列表',
                                        'description' => '用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '用户信息',
                                            'description' => '用户信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountName' => [
                                                    'title' => '原始账号登录名',
                                                    'description' => '原始账号登录名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'DingNumber' => [
                                                    'title' => '钉钉',
                                                    'description' => '钉钉',
                                                    'type' => 'string',
                                                    'example' => 'dingding123',
                                                ],
                                                'DisplayName' => [
                                                    'title' => '账号显示名',
                                                    'description' => '账号显示名',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                                'DisplayNameWithoutStatus' => [
                                                    'title' => '账号显示名,无状态后缀',
                                                    'description' => '账号显示名,无状态后缀',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1691051228662',
                                                ],
                                                'GmtModified' => [
                                                    'title' => '更新时间',
                                                    'description' => '更新时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1691051228662',
                                                ],
                                                'Mail' => [
                                                    'title' => '邮箱',
                                                    'description' => '邮箱',
                                                    'type' => 'string',
                                                    'example' => '11@xx.com',
                                                ],
                                                'MobilePhone' => [
                                                    'title' => '电话',
                                                    'description' => '电话',
                                                    'type' => 'string',
                                                    'example' => '13211111111',
                                                ],
                                                'NickName' => [
                                                    'title' => '别名',
                                                    'description' => '别名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'RealName' => [
                                                    'title' => '真实名',
                                                    'description' => '真实名',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                                'SourceType' => [
                                                    'title' => '账号来源',
                                                    'description' => '账号来源',
                                                    'type' => 'string',
                                                    'example' => 'aliyun',
                                                ],
                                                'SourceUserId' => [
                                                    'title' => '账号原始ID',
                                                    'description' => '账号原始ID',
                                                    'type' => 'string',
                                                    'example' => '12132322424323',
                                                ],
                                                'UserId' => [
                                                    'title' => '用户ID',
                                                    'description' => '用户ID',
                                                    'type' => 'string',
                                                    'example' => '20001212',
                                                ],
                                                'UserName' => [
                                                    'title' => '用户名',
                                                    'description' => '用户名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '总记录数',
                                        'description' => '总记录数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '102',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75DD06F8-1661-5A6E-B0A6-7E23133BDC60\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"UserList\\": [\\n      {\\n        \\"AccountName\\": \\"zhangsan\\",\\n        \\"DingNumber\\": \\"dingding123\\",\\n        \\"DisplayName\\": \\"张三\\",\\n        \\"DisplayNameWithoutStatus\\": \\"张三\\",\\n        \\"GmtCreate\\": 1691051228662,\\n        \\"GmtModified\\": 1691051228662,\\n        \\"Mail\\": \\"11@xx.com\\",\\n        \\"MobilePhone\\": \\"13211111111\\",\\n        \\"NickName\\": \\"zhangsan\\",\\n        \\"RealName\\": \\"张三\\",\\n        \\"SourceType\\": \\"aliyun\\",\\n        \\"SourceUserId\\": \\"12132322424323\\",\\n        \\"UserId\\": \\"20001212\\",\\n        \\"UserName\\": \\"zhangsan\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 102\\n  }\\n}","type":"json"}]',
            'title' => '获取可添加至租户用户列表',
        ],
        'ListUsers' => [
            'summary' => '获取租户成员列表。',
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
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '租户ID',
                        'description' => '租户ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '30001011',
                    ],
                ],
                [
                    'name' => 'UserPagedQuery',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '分页查询条件',
                        'description' => '分页查询条件',
                        'type' => 'object',
                        'properties' => [
                            'SearchText' => [
                                'title' => '用户名或账号或ID',
                                'description' => '用户名或账号或ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => '张三',
                            ],
                            'Page' => [
                                'title' => '页码, 默认值1',
                                'description' => '页码, 默认值1',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                                'default' => '1',
                            ],
                            'PageSize' => [
                                'title' => '每页包含的条数, 默认值20',
                                'description' => '每页包含的条数, 默认值20',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '20',
                                'default' => '20',
                            ],
                        ],
                        'deprecated' => false,
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应结果',
                        'description' => '响应结果',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求标识ID',
                                'description' => '请求标识ID',
                                'type' => 'string',
                                'example' => '72F479F0-EE9F-5511-85C1-3AF3B7668E25',
                            ],
                            'Success' => [
                                'title' => '请求成功与否',
                                'description' => '请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'title' => '后端响应HttpCode',
                                'description' => '后端响应HttpCode',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'title' => '请求错误码, OK表示请求正常',
                                'description' => '请求错误码, OK表示请求正常',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '请求错误信息',
                                'description' => '请求错误信息',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'title' => '响应结果',
                                'description' => '响应结果',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'title' => '总记录数',
                                        'description' => '总记录数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '202',
                                    ],
                                    'UserList' => [
                                        'title' => '用户列表',
                                        'description' => '用户列表',
                                        'type' => 'array',
                                        'items' => [
                                            'title' => '用户信息',
                                            'description' => '用户信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'AccountName' => [
                                                    'title' => '原始账号登录名',
                                                    'description' => '原始账号登录名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'DingNumber' => [
                                                    'title' => '钉钉',
                                                    'description' => '钉钉',
                                                    'type' => 'string',
                                                    'example' => 'dingding123',
                                                ],
                                                'DisplayName' => [
                                                    'title' => '账号显示名',
                                                    'description' => '账号显示名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'GmtCreate' => [
                                                    'title' => '创建时间戳',
                                                    'description' => '创建时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1691051228662',
                                                ],
                                                'GmtModified' => [
                                                    'title' => '更新时间戳',
                                                    'description' => '更新时间戳',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1691051228662',
                                                ],
                                                'Mail' => [
                                                    'title' => '邮箱',
                                                    'description' => '邮箱',
                                                    'type' => 'string',
                                                    'example' => '11@xx.com',
                                                ],
                                                'MobilePhone' => [
                                                    'title' => '电话号',
                                                    'description' => '电话号',
                                                    'type' => 'string',
                                                    'example' => '13011111111',
                                                ],
                                                'NickName' => [
                                                    'title' => '别名',
                                                    'description' => '别名',
                                                    'type' => 'string',
                                                    'example' => 'zhangsan',
                                                ],
                                                'RealName' => [
                                                    'title' => '真实名称',
                                                    'description' => '真实名称',
                                                    'type' => 'string',
                                                    'example' => '张三',
                                                ],
                                                'SourceType' => [
                                                    'title' => '用户来源',
                                                    'description' => '用户来源',
                                                    'type' => 'string',
                                                    'example' => 'aliyun',
                                                ],
                                                'SourceUserId' => [
                                                    'title' => '账号原始ID',
                                                    'description' => '账号原始ID',
                                                    'type' => 'string',
                                                    'example' => '1232322222',
                                                ],
                                                'UserId' => [
                                                    'title' => '用户ID',
                                                    'description' => '用户ID',
                                                    'type' => 'string',
                                                    'example' => '10021321',
                                                ],
                                                'UserName' => [
                                                    'title' => '用户名',
                                                    'description' => '用户名',
                                                    'type' => 'string',
                                                    'example' => '张三',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"72F479F0-EE9F-5511-85C1-3AF3B7668E25\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"TotalCount\\": 202,\\n    \\"UserList\\": [\\n      {\\n        \\"AccountName\\": \\"zhangsan\\",\\n        \\"DingNumber\\": \\"dingding123\\",\\n        \\"DisplayName\\": \\"zhangsan\\",\\n        \\"GmtCreate\\": 1691051228662,\\n        \\"GmtModified\\": 1691051228662,\\n        \\"Mail\\": \\"11@xx.com\\",\\n        \\"MobilePhone\\": \\"13011111111\\",\\n        \\"NickName\\": \\"zhangsan\\",\\n        \\"RealName\\": \\"张三\\",\\n        \\"SourceType\\": \\"aliyun\\",\\n        \\"SourceUserId\\": \\"1232322222\\",\\n        \\"UserId\\": \\"10021321\\",\\n        \\"UserName\\": \\"张三\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取租户成员列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dataphin-public.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dataphin-public.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dataphin-public.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dataphin-public.cn-shanghai.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'support-plan',
        'version' => '2021-07-06',
    ],
    'directories' => [
        [
            'id' => 133327,
            'title' => '企业服务群',
            'type' => 'directory',
            'children' => [
                'DeleteEnterpriseDingtalkGroupCustomerMember',
                'GetEnterpriseDingtalkGroup',
                'GetEnterpriseDingtalkGroupCustomerMember',
                'ListEnterpriseDingtalkGroupCustomerMembers',
                'ListEnterpriseDingtalkGroups',
            ],
        ],
        [
            'id' => 133333,
            'title' => '任务单管理',
            'type' => 'directory',
            'children' => [
                'CreateTaskOrderByEventReport',
                'CreateTaskOrder',
                'ListDdTaskOrder',
                'QueryTaskInfo',
                'ListProductByGroup',
                'RestOpenTaskOrder',
                'ReplyMessageApi',
                'CloseTaskOrder',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'EnterpriseDingtalkGroupMember' => [
                'title' => '企业服务群成员信息',
                'description' => '企业服务群成员',
                'type' => 'object',
                'properties' => [
                    'IsAdmin' => [
                        'title' => '是否企业钉群管理员',
                        'description' => '是否为管理员',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'Mobile' => [
                        'title' => '成员手机号',
                        'description' => '成员电话',
                        'type' => 'string',
                        'example' => '130xxxxxxxx',
                    ],
                    'Name' => [
                        'title' => '成员姓名',
                        'description' => '成员姓名',
                        'type' => 'string',
                        'example' => '张三',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'DeleteEnterpriseDingtalkGroupCustomerMember' => [
            'summary' => '删除企业服务群中的成员（注：只能删除企业侧人员）。',
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
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '企业服务群ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'Mobiles',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'description' => '要删除用户的手机号',
                            'type' => 'string',
                            'required' => false,
                            'example' => '130xxxxxxxx',
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
                                'title' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'description' => '接口请求的唯一ID, 每次调用requestID唯一'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Success' => [
                                'title' => '调用接口返回是否成功, true代表调用正常',
                                'description' => '调用接口返回是否成功, true代表调用正常'."\n"
                                    ."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '错误信息, 当success=false的时候, 可以取到message',
                                'description' => '错误信息, 当success=false的时候, 可以取到message'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'Invalid data',
                            ],
                            'Code' => [
                                'title' => '接口请求结果返回码',
                                'description' => '接口请求结果返回码'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"Invalid data\\",\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEnterpriseDingtalkGroupCustomerMemberResponse>\\n    <RequestId>123</RequestId>\\n    <Success>true</Success>\\n    <Message>Invalid data</Message>\\n    <Code>200</Code>\\n</DeleteEnterpriseDingtalkGroupCustomerMemberResponse>","errorExample":""}]',
            'title' => '删除企业服务群中的成员',
        ],
        'GetEnterpriseDingtalkGroup' => [
            'summary' => '获取企业服务群的详细信息。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'description' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Success' => [
                                'title' => '调用接口返回是否成功, true代表调用正常',
                                'description' => '调用接口返回是否成功, true代表调用正常',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '错误信息, 当success=false的时候, 可以取到message',
                                'description' => '错误信息, 当success=false的时候, 可以取到message',
                                'type' => 'string',
                                'example' => 'Invalid data',
                            ],
                            'Data' => [
                                'description' => '企业服务群详情',
                                'type' => 'object',
                                'properties' => [
                                    'OpenGroupId' => [
                                        'title' => '企业服务群的ID',
                                        'description' => '企业服务群的ID',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'GroupName' => [
                                        'title' => '企业服务群的群名',
                                        'description' => '企业服务群的群名',
                                        'type' => 'string',
                                        'example' => 'A企业服务群',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'title' => '接口请求结果返回码',
                                'description' => '接口请求结果返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"Invalid data\\",\\n  \\"Data\\": {\\n    \\"OpenGroupId\\": \\"123\\",\\n    \\"GroupName\\": \\"A企业服务群\\"\\n  },\\n  \\"Code\\": \\"200\\"\\n}","errorExample":""},{"type":"xml","example":"<GetEnterpriseDingtalkGroupResponse>\\n    <RequestId>123</RequestId>\\n    <Success>true</Success>\\n    <Message>Invalid data</Message>\\n    <Data>\\n        <OpenGroupId>123</OpenGroupId>\\n        <GroupName>A企业服务群</GroupName>\\n    </Data>\\n    <Code>200</Code>\\n</GetEnterpriseDingtalkGroupResponse>","errorExample":""}]',
            'title' => '获取企业服务群详情',
        ],
        'GetEnterpriseDingtalkGroupCustomerMember' => [
            'summary' => '获取企业服务群成员详情（注：只能获取到企业的成员）。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Mobile',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'example' => '13900001111',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'description' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'type' => 'string',
                                'example' => '12',
                            ],
                            'Success' => [
                                'title' => '调用接口返回是否成功, true代表调用正常',
                                'description' => '调用接口返回是否成功, true代表调用正常',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '错误信息, 当success=false的时候, 可以取到message',
                                'description' => '错误信息, 当success=false的时候, 可以取到message',
                                'type' => 'string',
                                'example' => 'Invalid data',
                            ],
                            'Code' => [
                                'title' => '接口请求结果返回码',
                                'description' => '接口请求结果返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'title' => '成员信息列表',
                                'description' => '成员信息列表',
                                '$ref' => '#/components/schemas/EnterpriseDingtalkGroupMember',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"Invalid data\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"IsAdmin\\": true,\\n    \\"Mobile\\": \\"130xxxxxxxx\\",\\n    \\"Name\\": \\"张三\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetEnterpriseDingtalkGroupCustomerMemberResponse>\\n    <RequestId>12</RequestId>\\n    <Success>true</Success>\\n    <Message>Invalid data</Message>\\n    <Code>200</Code>\\n    <Data>\\n        <IsAdmin>true</IsAdmin>\\n        <Mobile>130xxxxxxxx</Mobile>\\n        <Name>张三</Name>\\n    </Data>\\n</GetEnterpriseDingtalkGroupCustomerMemberResponse>","errorExample":""}]',
            'title' => '获取企业服务群成员详情',
        ],
        'ListEnterpriseDingtalkGroupCustomerMembers' => [
            'summary' => '获取企业服务群成员列表（注：只能获取企业侧成员）。',
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
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '企业服务群ID',
                        'description' => '企业服务群ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'description' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Success' => [
                                'title' => '调用接口返回是否成功, true代表调用正常',
                                'description' => '调用接口返回是否成功, true代表调用正常',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '错误信息, 当success=false的时候, 可以取到message',
                                'description' => '错误信息, 当success=false的时候, 可以取到message',
                                'type' => 'string',
                                'example' => 'Invalid data',
                            ],
                            'Code' => [
                                'title' => '接口请求结果返回码',
                                'description' => '接口请求结果返回码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Data' => [
                                'title' => '企业服务群成员列表',
                                'description' => '企业服务群成员列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '成员详情',
                                    '$ref' => '#/components/schemas/EnterpriseDingtalkGroupMember',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"Invalid data\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": [\\n    {\\n      \\"IsAdmin\\": true,\\n      \\"Mobile\\": \\"130xxxxxxxx\\",\\n      \\"Name\\": \\"张三\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEnterpriseDingtalkGroupCustomerMembersResponse>\\n    <RequestId>123</RequestId>\\n    <Success>true</Success>\\n    <Message>Invalid data</Message>\\n    <Code>200</Code>\\n    <Data>\\n        <IsAdmin>true</IsAdmin>\\n        <Mobile>130xxxxxxxx</Mobile>\\n        <Name>张三</Name>\\n    </Data>\\n</ListEnterpriseDingtalkGroupCustomerMembersResponse>","errorExample":""}]',
            'title' => '获取企业服务群成员列表',
        ],
        'ListEnterpriseDingtalkGroups' => [
            'summary' => '获取账户下关联的企业服务钉群列表。',
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
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'description' => '接口请求的唯一ID, 每次调用requestID唯一',
                                'type' => 'string',
                                'example' => '12xxxxx',
                            ],
                            'Success' => [
                                'title' => '调用接口返回是否成功, true代表调用正常',
                                'description' => '调用接口返回是否成功, true代表调用正常',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Message' => [
                                'title' => '错误信息, 当success=false的时候, 可以取到message',
                                'description' => '错误信息, 当success=false的时候, 可以取到message',
                                'type' => 'string',
                                'example' => 'Data Invalid',
                            ],
                            'Code' => [
                                'title' => '接口请求结果返回码',
                                'description' => '接口请求结果返回码',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'title' => '服务钉群数组',
                                'description' => '服务钉群列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'OpenGroupId' => [
                                            'title' => '钉群ID',
                                            'description' => '钉群ID',
                                            'type' => 'string',
                                            'example' => '123',
                                        ],
                                        'GroupName' => [
                                            'title' => '钉群名',
                                            'description' => '钉群名',
                                            'type' => 'string',
                                            'example' => 'A公司服务群',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"12xxxxx\\",\\n  \\"Success\\": true,\\n  \\"Message\\": \\"Data Invalid\\",\\n  \\"Code\\": \\"true\\",\\n  \\"Data\\": [\\n    {\\n      \\"OpenGroupId\\": \\"123\\",\\n      \\"GroupName\\": \\"A公司服务群\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEnterpriseDingtalkGroupsResponse>\\n    <RequestId>12xxxxx</RequestId>\\n    <Success>true</Success>\\n    <Message>Data Invalid</Message>\\n    <Code>true</Code>\\n    <Data>\\n        <OpenGroupId>123</OpenGroupId>\\n        <GroupName>A公司服务群</GroupName>\\n    </Data>\\n</ListEnterpriseDingtalkGroupsResponse>","errorExample":""}]',
            'title' => '获取企业服务群列表',
        ],
        'CreateTaskOrderByEventReport' => [
            'summary' => '告警建单。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Extinfo',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '扩展信息',
                        'description' => '扩展信息',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Value' => [
                                    'title' => '扩展信息value值',
                                    'description' => '扩展信息value值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '扩展信息value值',
                                ],
                                'Name' => [
                                    'title' => '扩展信息名称',
                                    'description' => '扩展信息名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '扩展信息名称',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '提交人userId',
                        'description' => '提交人userId',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1830426056957812',
                    ],
                ],
                [
                    'name' => 'Business',
                    'in' => 'query',
                    'schema' => [
                        'title' => '告警所属业务',
                        'description' => '告警所属业务',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'EventBody',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '告警描述',
                        'description' => '告警描述',
                        'type' => 'object',
                        'properties' => [
                            'EventDesc' => [
                                'title' => '当前告警描述信息',
                                'description' => '当前告警描述信息',
                                'type' => 'string',
                                'required' => true,
                                'example' => '告警内容',
                            ],
                            'EventLevel' => [
                                'title' => '事件级别',
                                'description' => '事件级别',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'info,warn,alarm,critical',
                            ],
                            'EventTime' => [
                                'title' => '事件上报时间',
                                'description' => '事件上报时间',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123456',
                            ],
                            'EventLocation' => [
                                'title' => '事件源标识，自定义和TAM在云企配置的Location指标一致',
                                'description' => '事件源标识，自定义和TAM在云企配置的Location指标一致',
                                'type' => 'object',
                                'properties' => [
                                    'Domain' => [
                                        'title' => 'domian域名',
                                        'description' => 'domian域名',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'flv13.bn.netease.com',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'EventId' => [
                                'title' => '事件id',
                                'description' => '事件id',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'j9uwe-34328987',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateRealName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '提交人姓名',
                        'description' => '提交人姓名',
                        'type' => 'string',
                        'required' => true,
                        'example' => '小明',
                    ],
                ],
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '告警关联主群id',
                        'description' => '告警关联主群id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cid+lUpHxTIXt7DYqJDcpVxlA==',
                    ],
                ],
                [
                    'name' => 'MonitorCongregation',
                    'in' => 'query',
                    'schema' => [
                        'title' => '监控集如：视频业务的质量监控',
                        'description' => '监控集如：视频业务的质量监控',
                        'type' => 'string',
                        'required' => false,
                        'example' => '监控集如：视频业务的质量监控 123',
                    ],
                ],
                [
                    'name' => 'JoinChildGroupUserIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '建单入群人员',
                        'description' => '建单入群人员',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123,456',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '问题分类',
                        'description' => '问题分类',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3270',
                    ],
                ],
                [
                    'name' => 'ImportantDesc',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当eventLevel为warn时，必传',
                        'description' => '当eventLevel为warn时，必传',
                        'type' => 'string',
                        'required' => false,
                        'example' => '紧急性原因描述',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => 'msg',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '接口交互动态值',
                            ],
                            'Data' => [
                                'title' => '返回信息',
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '{  "eid": "E211129DT18M06",     "status": "dealingNode"   }',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"接口交互动态值\\",\\n  \\"Data\\": \\"{  \\\\\\"eid\\\\\\": \\\\\\"E211129DT18M06\\\\\\",     \\\\\\"status\\\\\\": \\\\\\"dealingNode\\\\\\"   }\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '告警建单',
            'responseParamsDescription' => '{  '."\n"
                .'"eid": "E211129DT18M06", //任务单号  '."\n"
                .'  "status": "dealingNode"   //任务单状态'."\n"
                .'}',
        ],
        'CreateTaskOrder' => [
            'summary' => '创建任务订单。',
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
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主群关联Id',
                        'description' => '主群关联Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cid+lUpHxTIXt7DYqJDcpVxlA==',
                    ],
                ],
                [
                    'name' => 'ImportantDescription',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重要性描述',
                        'description' => '重要性描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '重要性说明原因',
                    ],
                ],
                [
                    'name' => 'IsImportant',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否紧急',
                        'description' => '是否紧急',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'normal或者hurry',
                    ],
                ],
                [
                    'name' => 'ProductTypeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '问题分类名称',
                        'description' => '问题分类名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '云服务器 ECS-ECS',
                    ],
                ],
                [
                    'name' => 'CustomerUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '建单人：固定值',
                        'description' => '建单人：固定值',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CustomerRealName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '建单人姓名：快手客户',
                        'description' => '建单人姓名：快手客户',
                        'type' => 'string',
                        'required' => false,
                        'example' => '小二',
                    ],
                ],
                [
                    'name' => 'TaskTitle',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务单标题',
                        'description' => 'taskTitle',
                        'type' => 'string',
                        'required' => true,
                        'example' => '建单标题',
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'productType',
                        'description' => 'productType',
                        'type' => 'string',
                        'required' => true,
                        'example' => '3270',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => 'msg',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Data' => [
                                'title' => '返回任务单号：OrderId',
                                'description' => '返回任务单号：OrderId',
                                'type' => 'string',
                                'example' => 'E21111796147LE',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"123\\",\\n  \\"Data\\": \\"E21111796147LE\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateTaskOrderResponse>\\n    <Message>ok</Message>\\n    <RequestId>请求的UUID值</RequestId>\\n    <Data>E21111796147LE</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateTaskOrderResponse>","errorExample":""}]',
            'title' => '创建任务订单',
            'requestParamsDescription' => 'openconversitionid(String) //主群的ID 和departmentId传一个即可'."\n"
                .'departmentId(String) //建单传对应的主群id（上线前有固定的主群配置）'."\n"
                ."\n"
                .'['."\n"
                .'  {'."\n"
                .'    "departmentId": 47742592,//建单传对应的主群id（上线前有固定的主群配置）'."\n"
                .'    "createType": "cusSelf",'."\n"
                .'    "importantDesc": "",//isImportent 为hurry时需要填写原因说明'."\n"
                .'    "createSource": "CUS_QUICK",'."\n"
                .'    "isImportent": "normal",//是否紧急normal或者hurry'."\n"
                .'    "requestId": "123",//每一次接口调用动态ID'."\n"
                .'    "productTypeName": "",//问题分类名称'."\n"
                .'    "customerUserId": "",//无对应的钉钉号不传'."\n"
                .'    "customerRealName": "王龙",//建单人姓名'."\n"
                .'    "taskTitle": "测试快手API建单16点32",'."\n"
                .'    "class": "com.aliyun.dingtalklanding.pop.dto.ddtask.CreateTaskInfoReq",'."\n"
                .'    "productType": "3270"'."\n"
                .'  }'."\n"
                .']',
            'responseParamsDescription' => '返回结果data 为任务单ID，后续其他接口操作也会用到',
        ],
        'ListDdTaskOrder' => [
            'summary' => '获取获取任务订单列表。',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'description' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'orderId',
                        'description' => 'orderId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'E2112019N14PBY',
                    ],
                ],
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'openGroupId',
                        'description' => 'openGroupId',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cid+lUpHxTIXt7DYqJDcpVxlA==',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'description' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2F8557E4-742B-1CF7-8E83-28CD0C1F7B48',
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'description' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'CallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerUid',
                        'description' => 'callerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'taskStatus',
                        'description' => 'taskStatus',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dealingNode',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => 'msg',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '2F8557E4-742B-1CF7-8E83-28CD0C1F7B48',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => 'data',
                                'type' => 'string',
                                'example' => '[     {         "wfNodeId":"dealingNode",         "createEmpId":null,         "createTime":1637571435000,         "orderId":"E2111221H1UKCZ",         "isImportant":"normal",         "closeTime":null,         "taskTitle":"测试单16点44",         "productType":"3270"     } ]',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"2F8557E4-742B-1CF7-8E83-28CD0C1F7B48\\",\\n  \\"Data\\": \\"[     {         \\\\\\"wfNodeId\\\\\\":\\\\\\"dealingNode\\\\\\",         \\\\\\"createEmpId\\\\\\":null,         \\\\\\"createTime\\\\\\":1637571435000,         \\\\\\"orderId\\\\\\":\\\\\\"E2111221H1UKCZ\\\\\\",         \\\\\\"isImportant\\\\\\":\\\\\\"normal\\\\\\",         \\\\\\"closeTime\\\\\\":null,         \\\\\\"taskTitle\\\\\\":\\\\\\"测试单16点44\\\\\\",         \\\\\\"productType\\\\\\":\\\\\\"3270\\\\\\"     } ]\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListDdTaskOrderResponse>\\n    <Message>请求成功</Message>\\n    <RequestId>2F8557E4-742B-1CF7-8E83-28CD0C1F7B48</RequestId>\\n    <Data>[     {         \\"wfNodeId\\":\\"dealingNode\\",         \\"createEmpId\\":null,         \\"createTime\\":1637571435000,         \\"orderId\\":\\"E2111221H1UKCZ\\",         \\"isImportant\\":\\"normal\\",         \\"closeTime\\":null,         \\"taskTitle\\":\\"测试单16点44\\",         \\"productType\\":\\"3270\\"     } ]</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDdTaskOrderResponse>","errorExample":""}]',
            'title' => '获取任务订单列表',
            'responseParamsDescription' => '[ {      '."\n"
                .' "wfNodeId": "dealingNode",//任务单状态       '."\n"
                .'"createEmpId": null,//创建人工号，可以忽略      '."\n"
                .' "createTime": 1637571435000,//任务单创建时间      '."\n"
                .' "orderId": "E2111221H1UKCZ",//任务单号  '."\n"
                .'   "isImportant": "normal",//是否紧急   '."\n"
                .'  "closeTime": null,//任务单关单时间      '."\n"
                .' "taskTitle": "测试单16点44",//标题      '."\n"
                .' "productType": "3270"//问题分类     '."\n"
                .'}, ]',
        ],
        'QueryTaskInfo' => [
            'summary' => '查询任务详情。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务单ID',
                        'description' => '任务单EID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E220303AE1BYY3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => '接口请求描述',
                                'type' => 'string',
                                'example' => 'ok',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '接口交互id',
                                'type' => 'string',
                                'example' => '43135C31-E47A-5AD7-A693-6DC635201CE4',
                            ],
                            'Data' => [
                                'description' => '任务单详情数据',
                                'type' => 'object',
                                'properties' => [
                                    'OrderId' => [
                                        'description' => '任务单EID',
                                        'type' => 'string',
                                        'example' => 'E220303AE1BYY3',
                                    ],
                                    'TaskStatus' => [
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'waitResponseNode' => '待响应',
                                            'alreadyFeedbackNode' => '已反馈',
                                            'temporarySaveNode' => '暂存',
                                            'dealingNode' => '处理中',
                                            'feedbackNode' => '待客户反馈',
                                            'forsureNode' => '待客户确认',
                                            'endNode' => '任务单完成',
                                        ],
                                        'example' => 'dealingNode',
                                    ],
                                ],
                                'example' => '{"taskStatus": "dealingNode","eid": "E21111796147LE",[{{         "senderId": null,         "msgType": "template",         "msgContent": "{\\"title\\":\\"小二回复\\",\\"text\\": \\"小二回复 \\\\n\\\\n ###### <font color=#13c2c2>Current handler:王龙</font> \\"}",         "groupId": "cidXcezGVQJjiWy2PzXylGwvg==",         "msgId": null,         "id": 27623677,         "senderNick": "阿里云服务台",         "gmtCreate": 1637138037000,         "class": "com.aliyun.dingtalklanding.dto.ChatRecordDTO",         "sendTime": 1637138037000,         "senderRole": null       }}]}',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '状态值',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"ok\\",\\n  \\"RequestId\\": \\"43135C31-E47A-5AD7-A693-6DC635201CE4\\",\\n  \\"Data\\": {\\n    \\"OrderId\\": \\"E220303AE1BYY3\\",\\n    \\"TaskStatus\\": \\"dealingNode\\"\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<QueryTaskInfoResponse>\\n    <Message>ok</Message>\\n    <RequestId>43135C31-E47A-5AD7-A693-6DC635201CE4</RequestId>\\n    <Data>{\\"taskStatus\\": \\"dealingNode\\",\\"eid\\": \\"E21111796147LE\\",[{{         \\"senderId\\": null,         \\"msgType\\": \\"template\\",         \\"msgContent\\": \\"{\\\\\\"title\\\\\\":\\\\\\"小二回复\\\\\\",\\\\\\"text\\\\\\": \\\\\\"小二回复 \\\\\\\\n\\\\\\\\n ###### &lt;font color=#13c2c2&gt;Current handler:王龙&lt;/font&gt; \\\\\\"}\\",         \\"groupId\\": \\"cidXcezGVQJjiWy2PzXylGwvg==\\",         \\"msgId\\": null,         \\"id\\": 27623677,         \\"senderNick\\": \\"阿里云服务台\\",         \\"gmtCreate\\": 1637138037000,         \\"class\\": \\"com.aliyun.dingtalklanding.dto.ChatRecordDTO\\",         \\"sendTime\\": 1637138037000,         \\"senderRole\\": null       }}]}</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</QueryTaskInfoResponse>","errorExample":""}]',
            'title' => '查询任务详情',
            'requestParamsDescription' => 'eid（String）任务单ID 必传',
            'responseParamsDescription' => 'taskStatus（String）：'."\n"
                .'工单状态：dealingNode:处理中;feedbackNode'."\0".':待反馈；forsureNode：待客户确认；temporarySaveNode：暂存'."\n"
                ."\n"
                .'senderId（String）发送人dingUserId 可忽略'."\n"
                .'msgType（String）消息类型：text（文本）; template（卡片类型消息）；image(图片消息)'."\n"
                .'msgContent(String) 消息体：text类型直接取值，template类型需处理取text内容'."\n"
                .'groupId： 消息对应的钉钉子群ID'."\n"
                .'msgId：消息ID，机器人消息对应为空'."\n"
                .'senderNick：发送人姓名'."\n"
                .'sendTime：发送时间'."\n"
                .'gmtCreate：入库时间'."\n"
                .'senderRole：发送人角色信息，可忽略',
        ],
        'ListProductByGroup' => [
            'summary' => '根据产品组获取产品列表（主要是获取产品id）。',
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
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主群关联Id',
                        'description' => '主群关联Id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cidXcezGVQJjiWy2PzXylGwvg==',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => 'msg',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => '接口交互动态值',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => 'data',
                                'type' => 'string',
                                'example' => '[     {         "classificationProductTypeId":3270,         "classificationProductName":"伏虎测试组",         "classificationProductDesc":"伏虎测试组",         "classificationProductTypeName":"lc-云享咨询",         "id":462,         "enabled":1     } ]',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"123\\",\\n  \\"Data\\": \\"[     {         \\\\\\"classificationProductTypeId\\\\\\":3270,         \\\\\\"classificationProductName\\\\\\":\\\\\\"伏虎测试组\\\\\\",         \\\\\\"classificationProductDesc\\\\\\":\\\\\\"伏虎测试组\\\\\\",         \\\\\\"classificationProductTypeName\\\\\\":\\\\\\"lc-云享咨询\\\\\\",         \\\\\\"id\\\\\\":462,         \\\\\\"enabled\\\\\\":1     } ]\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListProductByGroupResponse>\\n    <Message>请求成功</Message>\\n    <RequestId>123</RequestId>\\n    <Data>[     {         \\"classificationProductTypeId\\":3270,         \\"classificationProductName\\":\\"伏虎测试组\\",         \\"classificationProductDesc\\":\\"伏虎测试组\\",         \\"classificationProductTypeName\\":\\"lc-云享咨询\\",         \\"id\\":462,         \\"enabled\\":1     } ]</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListProductByGroupResponse>","errorExample":""}]',
            'title' => '根据产品组获取产品列表',
        ],
        'RestOpenTaskOrder' => [
            'summary' => '任务单重开。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务单ID',
                        'description' => '任务单EID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E21111796147LE',
                    ],
                ],
                [
                    'name' => 'ResetContent',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重开说明',
                        'description' => '重开说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => '重开补充说明原因',
                    ],
                ],
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主群关联Id',
                        'description' => '场景群ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cidXcezGVQJjiWy2PzXylGwvg==',
                    ],
                ],
                [
                    'name' => 'ResetType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '重开类型',
                        'description' => '重开类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => '枚举值：6:解决方案无效；7:当前问题仍有疑问需要咨询；8:问题重复出现',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '操作人姓名',
                        'description' => '操作人姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '操作人姓名',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => '接口返回描述',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '接口交互id',
                                'type' => 'string',
                                'example' => '123',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => '无返回值',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口交互是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"123\\",\\n  \\"Data\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RestOpenTaskOrderResponse>\\n    <Message>请求成功</Message>\\n    <RequestId>123</RequestId>\\n    <Data>null</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</RestOpenTaskOrderResponse>","errorExample":""}]',
            'title' => '任务单重开',
            'requestParamsDescription' => '请求示例：'."\n"
                .'eid（String）：任务单id（必传）'."\n"
                .'resetType（重开单原因类型）：枚举值：6:解决方案无效；7:当前问题仍有疑问需要咨询；8:问题重复出现'."\n"
                .'resetContent （String） ：重开补充说明',
        ],
        'ReplyMessageApi' => [
            'summary' => '消息回复。',
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
            ],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务单Id',
                        'description' => '任务单id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E2012312421',
                    ],
                ],
                [
                    'name' => 'MsgType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '消息类型',
                        'description' => '消息类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'text',
                    ],
                ],
                [
                    'name' => 'OpenGroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '群Id',
                        'description' => '场景群id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cid+lUpHxTIXt7DYqJDcpVxlA==',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '消息发送人',
                        'description' => '消息发送人',
                        'type' => 'string',
                        'required' => true,
                        'example' => '客户名',
                    ],
                ],
                [
                    'name' => 'MsgContent',
                    'in' => 'query',
                    'schema' => [
                        'title' => '消息内容',
                        'description' => '消息内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => '测试消息',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '消息发送人Id',
                        'description' => '用户dingUserId',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => '返回描述',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '接口交互id',
                                'type' => 'string',
                                'example' => '43135C31-E47A-5AD7-A693-6DC635201CE4',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => '无',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '状态值',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口请求成功与否',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"43135C31-E47A-5AD7-A693-6DC635201CE4\\",\\n  \\"Data\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ReplyMessageApiResponse>\\n    <Message>请求成功</Message>\\n    <RequestId>43135C31-E47A-5AD7-A693-6DC635201CE4</RequestId>\\n    <Data>null</Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ReplyMessageApiResponse>","errorExample":""}]',
            'title' => '消息回复',
            'description' => '消息加密入参固定值：'."\n"
                .'消息加密使用maven依赖：'."\n"
                .'<dependency>'."\n"
                .'    <groupId>com.laiwang.lippi</groupId>'."\n"
                .'    <artifactId>lippi.oapi.encryt</artifactId>'."\n"
                .'    <version>1.0.7-SNAPSHOT</version>'."\n"
                .'</dependency>'."\n"
                ."\n"
                .'AES加密约定值：'."\n"
                .'private final static String CORP_ID = "";//corpId'."\n"
                .'private final static String TOKEN = "";//客户信息'."\n"
                .'private final static String AES_KEY = "";//aesKey'."\n"
                .'private final static String NONCE = "";//'."\n"
                ."\n"
                .'加密和解密测试：'."\n"
                .'    public static void main(String[] args) {'."\n"
                .'        try{'."\n"
                .'            DingTalkEncryptor dingTalkEncryptor =  new DingTalkEncryptor(TOKEN,AES_KEY,CORP_ID);'."\n"
                .'            Long timeStamp = (new Date()).getTime();'."\n"
                .'            String plaintext = "{\'msgContent\':\'测试消息\'}";'."\n"
                .'//加密'."\n"
                .'            Map<String, String> map = dingTalkEncryptor.getEncryptedMap(plaintext,timeStamp,NONCE);'."\n"
                .'            String signature =  map.get("msg_signature");'."\n"
                .'            System.out.println(map.get("msg_signature"));'."\n"
                ."\n"
                .'            '."\n"
                .'//解密'."\n"
                .'            String encryptMsg = map.get("encrypt");'."\n"
                .'            String plainText = dingTalkEncryptor.getDecryptMsg(signature,timeStamp.toString(),NONCE,encryptMsg);'."\n"
                .'            JSONObject obj = JSON.parseObject(plainText);'."\n"
                .'            System.out.println(obj.get("msgContent"));'."\n"
                .'        }catch (Exception e){'."\n"
                .'            System.out.println(e.toString());'."\n"
                .'        }'."\n"
                .'    }',
            'requestParamsDescription' => "\n"
                .'eid (String) :任务单id'."\n"
                .'msgType(String)：消息类型（目前只接收text类型）'."\n"
                .'userName（String）：发送人姓名（必传）'."\n"
                .'msgContent（String）：消息内容'."\n"
                ."\n"
                .'请求示例：'."\n"
                .'['."\n"
                .'  {'."\n"
                .'    "callerParentId": 0,'."\n"
                .'    "eid": "E21111796147LE",'."\n"
                .'    "openconversitionid": "",'."\n"
                .'    "msgType": "",'."\n"
                .'    "departmentId": "",'."\n"
                .'    "userName": "王龙",'."\n"
                .'    "userId": "",//可不传'."\n"
                .'    "sendTime": 1637201617827,//发送时间'."\n"
                .'    "msgContent": "测试模拟快手发送消息4",'."\n"
                .'    "requestId": "123",'."\n"
                .'    "callerType": "",'."\n"
                .'    "callerUid": 0,'."\n"
                .'    "class": "com.aliyun.dingtalklanding.pop.dto.ddtask.AyDdTaskInfoReq"'."\n"
                .'  }'."\n"
                .']',
        ],
        'CloseTaskOrder' => [
            'summary' => '关闭任务订单。',
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
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'OrderId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务单id',
                        'description' => '任务单id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'E211129AE190Y3',
                    ],
                ],
                [
                    'name' => 'UserName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '操作人姓名',
                        'description' => '操作人姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '操作人姓名',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'msg',
                                'description' => 'msg',
                                'type' => 'string',
                                'example' => '请求成功',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'AQWFE#$#ASD',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => 'data',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => 'success',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"请求成功\\",\\n  \\"RequestId\\": \\"AQWFE#$#ASD\\",\\n  \\"Data\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '关闭任务订单',
            'responseParamsDescription' => '返回失败示例：'."\n"
                .'{'."\n"
                .'  "msg": "内部错误",'."\n"
                .'  "code": "301",'."\n"
                .'  "data": "任务单状态不是待客户确认",'."\n"
                .'  "success": false,'."\n"
                .'  "requestId": "123",'."\n"
                .'  "class": "com.aliyun.dingtalklanding.pop.dto.PopResultDTO"'."\n"
                .'}',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'supportplan.aliyuncs.com',
        ],
    ],
];
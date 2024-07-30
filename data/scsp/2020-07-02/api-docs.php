<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'scsp',
        'version' => '2020-07-02',
    ],
    'directories' => [
        [
            'id' => 102934,
            'title' => '薪资',
            'type' => 'directory',
            'children' => [
                'QueryHotlineDashboard',
            ],
        ],
        [
            'id' => 102936,
            'title' => '坐席',
            'type' => 'directory',
            'children' => [
                'QueryServicerById',
                'QueryServicerByDepartmentAndMixName',
                'CreateAgent',
                'DeleteAgent',
                'UpdateAgent',
                'GetAgent',
                'GetHotlineAgentDetail',
                'ListAgentBySkillGroupId',
                'ListOutboundPhoneNumber',
                'GetHotlineWaitingNumber',
                'TransferCallToAgent',
            ],
        ],
        [
            'id' => 102939,
            'title' => '部门',
            'type' => 'directory',
            'children' => [
                'GetAllDepartment',
            ],
        ],
        [
            'id' => 102941,
            'title' => '热线',
            'type' => 'directory',
            'children' => [
                'CreateOuterCallCenterData',
                'StartHotlineService',
                'ListHotlineRecord',
                'QueryHotlineSession',
                'GetHotlineAgentDetailReport',
                'GetHotlineAgentStatus',
                'GetHotlineGroupDetailReport',
                'GetOuterCallCenterDataList',
                'SendHotlineHeartBeat',
                'SuspendHotlineService',
                'TransferCallToPhone',
                'TransferCallToSkillGroup',
                'TransferToThirdCall',
                'FinishHotlineService',
            ],
        ],
        [
            'id' => 102966,
            'title' => '角色',
            'type' => 'directory',
            'children' => [
                'CreateRole',
                'DisableRole',
                'EnableRole',
            ],
        ],
        [
            'id' => 102970,
            'title' => '工单',
            'type' => 'directory',
            'children' => [
                'CreateTicket',
                'UpdateTicket',
                'QueryTicketActions',
                'QueryTicketCount',
                'QueryTickets',
                'SearchTicketById',
                'SearchTicketByPhone',
                'SearchTicketList',
                'AssignTicket',
                'CloseTicket',
                'ExecuteActivity',
            ],
        ],
        [
            'id' => 102982,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'AnswerCall',
                'AppMessagePush',
                'ChangeChatAgentStatus',
                'CreateCustomer',
                'CreateEntityIvrRoute',
                'CreateSkillGroup',
                'CreateSubTicket',
                'CreateThirdSsoAgent',
                'createTicketWithBizData',
                'DeleteEntityRoute',
                'EditEntityRoute',
                'FetchCall',
                'GenerateWebSocketSign',
                'GetAuthInfo',
                'GetByForeignId',
                'GetCallsPerDay',
                'GetCMSIdByForeignId',
                'GetEntityRoute',
                'GetEntityRouteList',
                'GetEntityTagRelation',
                'GetGrantedRoleIds',
                'GetNumLocation',
                'GetOutbounNumList',
                'GetTagList',
                'GetTicketByCaseId',
                'GetTicketTemplateSchema',
                'GetUserToken',
                'GrantRoles',
                'HangupCall',
                'HangupThirdCall',
                'HoldCall',
                'JoinThirdCall',
                'ListSkillGroup',
                'QueryRelationTickets',
                'QueryRingDetailList',
                'QueryServiceConfig',
                'QuerySkillGroups',
                'RemoveSkillGroup',
                'SendOutboundCommand',
                'StartCall',
                'StartCallV2',
                'StartChatWork',
                'UpdateCustomer',
                'UpdateEntityTagRelation',
                'UpdateRingStatus',
                'UpdateRole',
                'UpdateSkillGroup',
                'ListAllHotLineSkillGroups',
            ],
        ],
        [
            'id' => 168872,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'AnwserAgentMonitor',
                'GetForeignIdByCMSId',
                'HangUpAgentMonitor',
                'StartAgentMonitor',
            ],
        ],
        [
            'id' => 0,
            'title' => '其它',
            'type' => 'directory',
            'children' => [
                'BindAgentHotlinePhone',
                'GetHotlineAgentDetailWithChannel',
                'GetAgentHotlinePhone',
                'GetAgentHotline',
                'UnbindAgentHotlinePhone',
                'GetAgentWorkStatus',
                'SendVerificationCode',
                'StartHotlineWork',
                'FinishHotlineServiceNew',
                'GetOnlineTouchSessionList',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'QueryHotlineDashboard' => [
            'summary' => '调用QueryHotlineDashboard接口查询热线看板信息。',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => 'AICCS实例ID，登陆智能联络中心控制台(https://help.aliyun.com/product/126730.html)上可查看。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_***',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1636473600000',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'j结束时间',
                        'description' => '结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1636473600000',
                    ],
                ],
                [
                    'name' => 'DepartmentIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '部门标识列表',
                        'description' => '部门ID集合。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '10',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServicerIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '坐席标识列表',
                        'description' => '坐席ID集合。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '10',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortFieldList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '排序字段集合',
                        'description' => '排序字段集合。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => '10',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CurrentPageNum',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码',
                        'description' => '当前页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页面大小',
                        'description' => '页面大小。',
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
                        'title' => 'Schema of Response',
                        'description' => '请求响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'ccc_xp_pre-cn-***',
                            ],
                            'Success' => [
                                'description' => '接口调用状态。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '返回状态码，200为返回成功',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'description' => '返回状态描述。',
                                'type' => 'string',
                                'example' => 'successful',
                            ],
                            'Data' => [
                                'description' => 'Page数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'title' => '查询结果条数',
                                        'description' => '查询结果条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'Results' => [
                                        'description' => '热线看板数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '热线看板数据。',
                                            'type' => 'object',
                                            'properties' => [
                                                'DateId' => [
                                                    'title' => '日期',
                                                    'description' => '日期。',
                                                    'type' => 'string',
                                                    'example' => '20211101',
                                                ],
                                                'ServicerId' => [
                                                    'title' => '坐席标识',
                                                    'description' => '坐席ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '727272',
                                                ],
                                                'ServicerShowName' => [
                                                    'title' => '坐席对外展示名称',
                                                    'description' => '坐席对外展示名称。',
                                                    'type' => 'string',
                                                    'example' => '加油-小高',
                                                ],
                                                'ServicerRealName' => [
                                                    'title' => '坐席真实姓名',
                                                    'description' => '坐席真实姓名。',
                                                    'type' => 'string',
                                                    'example' => '加油-小高',
                                                ],
                                                'DepartmentId' => [
                                                    'title' => '部门标识',
                                                    'description' => '部门ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '11212121',
                                                ],
                                                'DepartmentName' => [
                                                    'title' => '部门名称',
                                                    'description' => '部门名称。',
                                                    'type' => 'string',
                                                    'example' => '加油组',
                                                ],
                                                'EffectiveInCalls' => [
                                                    'title' => '有效呼入量',
                                                    'description' => '有效呼入量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '10',
                                                ],
                                                'EffectiveInServiceNotes' => [
                                                    'title' => '有效呼入小计量',
                                                    'description' => '有效呼入小计量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '9',
                                                ],
                                                'EffectiveOutCalls' => [
                                                    'title' => '有效外呼量',
                                                    'description' => '有效外呼量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '20',
                                                ],
                                                'EffectiveOutServiceNotes' => [
                                                    'title' => '有效外呼小计量',
                                                    'description' => '有效外呼小计量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '12',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'title' => 'http状态编码',
                                'description' => 'http状态编码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ccc_xp_pre-cn-***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 100,\\n    \\"Results\\": [\\n      {\\n        \\"DateId\\": \\"20211101\\",\\n        \\"ServicerId\\": 727272,\\n        \\"ServicerShowName\\": \\"加油-小高\\",\\n        \\"ServicerRealName\\": \\"加油-小高\\",\\n        \\"DepartmentId\\": 11212121,\\n        \\"DepartmentName\\": \\"加油组\\",\\n        \\"EffectiveInCalls\\": 10,\\n        \\"EffectiveInServiceNotes\\": 9,\\n        \\"EffectiveOutCalls\\": 20,\\n        \\"EffectiveOutServiceNotes\\": 12\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<QueryHotlineDashboardResponse>\\n    <RequestId>ccc_xp_pre-cn-***</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <Data>\\n        <Total>100</Total>\\n        <Results>\\n            <DateId>20211101</DateId>\\n            <ServicerId>727272</ServicerId>\\n            <ServicerShowName>加油-小高</ServicerShowName>\\n            <ServicerRealName>加油-小高</ServicerRealName>\\n            <DepartmentId>11212121</DepartmentId>\\n            <DepartmentName>加油组</DepartmentName>\\n            <EffectiveInCalls>10</EffectiveInCalls>\\n            <EffectiveInServiceNotes>9</EffectiveInServiceNotes>\\n            <EffectiveOutCalls>20</EffectiveOutCalls>\\n            <EffectiveOutServiceNotes>12</EffectiveOutServiceNotes>\\n        </Results>\\n    </Data>\\n    <HttpStatusCode>200</HttpStatusCode>\\n</QueryHotlineDashboardResponse>","errorExample":""}]',
            'title' => 'QueryHotlineDashboard',
        ],
        'QueryServicerById' => [
            'summary' => '根据坐席标识查询坐席详细信息',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'ServicerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '坐席标识',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'title' => '状态码',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'ServicerId' => [
                                        'title' => '坐席标识',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'RealName' => [
                                        'title' => '真实名称',
                                        'type' => 'string',
                                    ],
                                    'UserStatus' => [
                                        'title' => '用户状态：0正常 1冻结 2删除 -2临时冻结',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ShowName' => [
                                        'title' => '对外展示名',
                                        'type' => 'string',
                                    ],
                                    'AccountName' => [
                                        'title' => '登录名',
                                        'type' => 'string',
                                    ],
                                    'DepartmentId' => [
                                        'title' => '部门标识',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'QueryServicerByDepartmentAndMixName' => [
            'summary' => '分页查询客服信息通过部门和关键字',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'DepartmentIdList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '部门标识列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '905',
                        ],
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关键字',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'CurrentPageNum',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页码',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '页大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Results' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ServicerId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'RealName' => [
                                                    'type' => 'string',
                                                ],
                                                'UserStatus' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'ShowName' => [
                                                    'type' => 'string',
                                                ],
                                                'AccountName' => [
                                                    'type' => 'string',
                                                ],
                                                'DepartmentId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'DepartmentName' => [
                                                    'type' => 'string',
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
        'CreateAgent' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'js sdk中自动生成的鉴权token',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席对外显示名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '刘测试',
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '坐席所属技能组id',
                        'type' => 'array',
                        'format' => 'int64',
                        'items' => [
                            'description' => '技能组',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '123456',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'SkillGroupIdList',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '坐席所属技能组id列表',
                        'type' => 'array',
                        'format' => 'int64',
                        'items' => [
                            'description' => '技能组列表',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '123456，145678',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '坐席id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '666666',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoSkillGroupSetFound',
                        'errorMessage' => 'The specified skill group set does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 666666,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>666666</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '创建坐席',
            'summary' => '创建悉犀客服工作台坐席账号，返回坐席ID。',
        ],
        'DeleteAgent' => [
            'methods' => [
                'delete',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '删除坐席',
            'summary' => '根据坐席账号名称，删除悉犀客服工作台坐席账号，逻辑删除，删除后重新添加，坐席ID不变。',
        ],
        'UpdateAgent' => [
            'methods' => [
                'put',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'SkillGroupIdList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetAgent' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '坐席数据',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '坐席状态，0:正常，1:冻结，2:删除。只有正常的状态，才可进行业务活动',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'DisplayName' => [
                                        'description' => '坐席对外显示名称',
                                        'type' => 'string',
                                        'example' => '刘测试',
                                    ],
                                    'AgentId' => [
                                        'description' => '坐席id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '222222',
                                    ],
                                    'GroupList' => [
                                        'description' => '坐席所属技能组信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '技能组信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'DisplayName' => [
                                                    'description' => '技能组对外显示名称',
                                                    'type' => 'string',
                                                    'example' => '自动化技能组',
                                                ],
                                                'Description' => [
                                                    'description' => '技能组描述',
                                                    'type' => 'string',
                                                    'example' => '自动化技能组',
                                                ],
                                                'ChannelType' => [
                                                    'description' => '技能组渠道类型',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'SkillGroupId' => [
                                                    'description' => '技能组id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '123456',
                                                ],
                                                'Name' => [
                                                    'description' => '技能组名称',
                                                    'type' => 'string',
                                                    'example' => '自动化技能组',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'AccountName' => [
                                        'description' => '坐席账号名称（登录名）',
                                        'type' => 'string',
                                        'example' => '123@123.com',
                                    ],
                                    'TenantId' => [
                                        'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"Status\\": 0,\\n    \\"DisplayName\\": \\"刘测试\\",\\n    \\"AgentId\\": 222222,\\n    \\"GroupList\\": [\\n      {\\n        \\"DisplayName\\": \\"自动化技能组\\",\\n        \\"Description\\": \\"自动化技能组\\",\\n        \\"ChannelType\\": 1,\\n        \\"SkillGroupId\\": 123456,\\n        \\"Name\\": \\"自动化技能组\\"\\n      }\\n    ],\\n    \\"AccountName\\": \\"123@123.com\\",\\n    \\"TenantId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0,\\n  \\"Message\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>0</Status>\\n    <DisplayName>刘测试</DisplayName>\\n    <AgentId>222222</AgentId>\\n    <GroupList>\\n        <DisplayName>自动化技能组</DisplayName>\\n        <Description>自动化技能组</Description>\\n        <ChannelType>1</ChannelType>\\n        <SkillGroupId>123456</SkillGroupId>\\n        <Name>自动化技能组</Name>\\n    </GroupList>\\n    <AccountName>123@123.com</AccountName>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取坐席详情',
            'summary' => '根据坐席账号名称查询悉犀客服工作台坐席信息。',
        ],
        'GetHotlineAgentDetail' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '坐席服务数据',
                                'type' => 'object',
                                'properties' => [
                                    'AgentStatusCode' => [
                                        'description' => '坐席状态编码'."\n"
                                            .'1:AgentCheckout（坐席下班）'."\n"
                                            .'3:AgentReady（坐席空闲）'."\n"
                                            .'4:AgentBreak（坐席小休）'."\n"
                                            .'5:AgentAcw（话后处理）'."\n"
                                            .'6:AgentBusyForCall（通话中）',
                                        'type' => 'string',
                                        'example' => 'AgentCheckout',
                                    ],
                                    'Token' => [
                                        'description' => '心跳签名',
                                        'type' => 'string',
                                        'example' => 'dnthF_oinHg7JMJDmKqex3UxDD7',
                                    ],
                                    'AgentId' => [
                                        'description' => '坐席id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '555555',
                                    ],
                                    'Assigned' => [
                                        'description' => '是否被分配，有以下枚举：'."\n"
                                            .'false：未分配（无通话）'."\n"
                                            .'true：已分配（有通话）'."\n",
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'RestType' => [
                                        'description' => '小休类型，有以下枚举：'."\n"
                                            .'1：小休'."\n"
                                            .'2：就餐 '."\n"
                                            .'3：会议 '."\n"
                                            .'4：辅导'."\n"
                                            .'5：培训',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'AgentStatus' => [
                                        'description' => '坐席状态，有以下枚举：1-6',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TenantId' => [
                                        'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"AgentStatusCode\\": \\"AgentCheckout\\",\\n    \\"Token\\": \\"dnthF_oinHg7JMJDmKqex3UxDD7\\",\\n    \\"AgentId\\": 555555,\\n    \\"Assigned\\": false,\\n    \\"RestType\\": 1,\\n    \\"AgentStatus\\": 1,\\n    \\"TenantId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <AgentStatusCode>AgentCheckout</AgentStatusCode>\\n    <Token>dnthF_oinHg7JMJDmKqex3UxDD7</Token>\\n    <AgentId>555555</AgentId>\\n    <Assigned>false</Assigned>\\n    <RestType>1</RestType>\\n    <AgentStatus>1</AgentStatus>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取热线坐席详情',
            'summary' => '根据坐席账号获取热线坐席当前服务详情。',
        ],
        'ListAgentBySkillGroupId' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '	'."\n"
                            .'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '666666',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '坐席信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '坐席状态，0:正常，1：冻结，2：删除。只有正常的状态，才可进行业务活动',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'DisplayName' => [
                                            'description' => '坐席对外显示名称',
                                            'type' => 'string',
                                            'example' => '刘测试',
                                        ],
                                        'AgentId' => [
                                            'description' => '坐席id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '666666',
                                        ],
                                        'AccountName' => [
                                            'description' => '坐席账号名称，实例内唯一（登录名）',
                                            'type' => 'string',
                                            'example' => '123@123.com',
                                        ],
                                        'TenantId' => [
                                            'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"DisplayName\\": \\"刘测试\\",\\n      \\"AgentId\\": 666666,\\n      \\"AccountName\\": \\"123@123.com\\",\\n      \\"TenantId\\": 0\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>0</Status>\\n    <DisplayName>刘测试</DisplayName>\\n    <AgentId>666666</AgentId>\\n    <AccountName>123@123.com</AccountName>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '根据技能组ID获取坐席列表',
            'summary' => '根据技能组ID查询悉犀客服工作台坐席列表。',
        ],
        'ListOutboundPhoneNumber' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '主叫外呼电话号码',
                                'type' => 'array',
                                'items' => [
                                    'description' => '主叫外呼电话号码',
                                    'type' => 'string',
                                    'example' => '{9065446}',
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    \\"{9065446}\\"\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{9065446}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取指定坐席下的外呼号码列表',
            'summary' => '获取指定坐席下的主叫外呼电话号码。',
        ],
        'GetHotlineWaitingNumber' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '热线会员排队数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>2</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查看当前坐席所在技能组热线排队数量',
            'summary' => '获取热线会员排队数。',
        ],
        'TransferCallToAgent' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'TargetAccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '转交坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '345@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（	仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '1:单步转，2:双步转，默认为1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'IsSingleTransfer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'true:单步转，false:双步转，默认单步转',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '转发热线到坐席',
            'summary' => '通话单\\双步转交到坐席。',
        ],
        'GetAllDepartment' => [
            'summary' => '获取指定租户下的部门列表',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DepartmentId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'DepartmentName' => [
                                            'type' => 'string',
                                        ],
                                        'Status' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateOuterCallCenterData' => [
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
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '机器人session_id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'a15ce370-1051-4040-9822',
                    ],
                ],
                [
                    'name' => 'InterveneTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '通话接通时间，呼入就等同于gmt_creae，呼出就是用户接通时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '16085570',
                    ],
                ],
                [
                    'name' => 'CallType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '电话类型，有以下枚举：'."\n"
                            .'1：呼入'."\n"
                            .'2：呼出',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'FromPhoneNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'string',
                        'required' => false,
                        'example' => '135615',
                    ],
                ],
                [
                    'name' => 'ToPhoneNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0571773',
                    ],
                ],
                [
                    'name' => 'EndReason',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '挂断原因，有以下枚举：'."\n"
                            .'1.转人工导致的结束'."\n"
                            .'2.未转人工在机器人阶段结束'."\n"
                            .'3.用户主动挂断电话'."\n"
                            .'4.机器人主动挂断电话'."\n"
                            .'5.网络异常原因导致的挂断电话',
                        'type' => 'string',
                        'required' => false,
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'UserInfo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '从上游系统带来的用户信息，json格式记录',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"level\\":25,\\"name\\":\\"Lee\\"}',
                    ],
                ],
                [
                    'name' => 'RecordUrl',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '录音文件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '单据号类型-如order,等',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHOP_ID',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关键单据号-如订单ID等',
                        'type' => 'string',
                        'required' => false,
                        'example' => '78604',
                    ],
                ],
                [
                    'name' => 'TenantId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '租户ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'json，上游系统的业务信息等，如机器人实例等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"isCallBack\\":\\"true\\"}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '热线数据同步',
            'summary' => '热线数据同步。',
        ],
        'StartHotlineService' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '请求调用成功后返回，发起心跳所需的Token',
                                'type' => 'string',
                                'example' => '0079e7a845e37334ff',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"0079e7a845e37334ff\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>0079e7a845e37334ff</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '开始热线服务',
            'summary' => '坐席签入，开始热线服务。',
        ],
        'ListHotlineRecord' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '100365558',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '热线会话信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '热线会话录音信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'EndTime' => [
                                            'description' => '录音结束时间戳（毫秒）',
                                            'type' => 'boolean',
                                            'example' => '16128694810',
                                        ],
                                        'StartTime' => [
                                            'description' => '录音开始时间戳（毫秒）',
                                            'type' => 'boolean',
                                            'example' => '16128694110',
                                        ],
                                        'ConnectionId' => [
                                            'description' => '连接id',
                                            'type' => 'string',
                                            'example' => '100365548',
                                        ],
                                        'CallId' => [
                                            'description' => '入呼后，websocket中的acid',
                                            'type' => 'string',
                                            'example' => '100365558',
                                        ],
                                        'Url' => [
                                            'description' => '录音文件URL',
                                            'type' => 'string',
                                            'example' => 'http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": true,\\n      \\"StartTime\\": true,\\n      \\"ConnectionId\\": \\"100365548\\",\\n      \\"CallId\\": \\"100365558\\",\\n      \\"Url\\": \\"http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <EndTime>false</EndTime>\\n    <StartTime>false</StartTime>\\n    <ConnectionId>100365548</ConnectionId>\\n    <CallId>100365558</CallId>\\n    <Url>http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com</Url>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取热线录音列表',
            'summary' => '根据热线会话ID查询热线录音列表。',
        ],
        'QueryHotlineSession' => [
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Acid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                    ],
                ],
                [
                    'name' => 'CallType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'default' => '',
                        'enum' => [
                            '1',
                            '2',
                        ],
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'QueryEndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'QueryStartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServicerName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServicerId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '50',
                        'minimum' => '1',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'CallResult',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'normal',
                            'touchRouteError',
                            'touchInQueue',
                            'touchInLoss',
                            'userHangup',
                            'sysHangup',
                            'transferAgent',
                            'dailing',
                            'TouchRingCallLoss',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageNumber' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'TotalCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CallDetailRecord' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CallResult' => [
                                                    'type' => 'string',
                                                ],
                                                'ServicerName' => [
                                                    'type' => 'string',
                                                ],
                                                'OutQueueTime' => [
                                                    'type' => 'string',
                                                ],
                                                'CallContinueTime' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'CreateTime' => [
                                                    'type' => 'string',
                                                ],
                                                'PickUpTime' => [
                                                    'type' => 'string',
                                                ],
                                                'RingContinueTime' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'CalledNumber' => [
                                                    'type' => 'string',
                                                ],
                                                'ServicerId' => [
                                                    'type' => 'string',
                                                ],
                                                'HangUpTime' => [
                                                    'type' => 'string',
                                                ],
                                                'EvaluationLevel' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'HangUpRole' => [
                                                    'type' => 'string',
                                                ],
                                                'MemberName' => [
                                                    'type' => 'string',
                                                ],
                                                'EvaluationScore' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'Acid' => [
                                                    'type' => 'string',
                                                ],
                                                'RingStartTime' => [
                                                    'type' => 'string',
                                                ],
                                                'CallType' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                ],
                                                'GroupId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'GroupName' => [
                                                    'type' => 'string',
                                                ],
                                                'RingEndTime' => [
                                                    'type' => 'string',
                                                ],
                                                'CallingNumber' => [
                                                    'type' => 'string',
                                                ],
                                                'InQueueTime' => [
                                                    'type' => 'string',
                                                ],
                                                'MemberId' => [
                                                    'type' => 'string',
                                                ],
                                                'QueueUpContinueTime' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
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
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetHotlineAgentDetailReport' => [
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
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DepIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Columns' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'Title' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rows' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetHotlineAgentStatus' => [
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
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '坐席状态（离线、空闲、话后处理、通话中、小休-休息、小休-就餐、小休-会议、小休-培训、小休-辅导）',
                                'type' => 'string',
                                'example' => '通话中',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"通话中\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>通话中</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取热线坐席状态',
            'summary' => '根据坐席账号名称查询悉犀客服工作台热线坐席状态。',
        ],
        'GetHotlineGroupDetailReport' => [
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
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '200',
                        'minimum' => '1',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'default' => '',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'DepIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Columns' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Key' => [
                                                    'type' => 'string',
                                                ],
                                                'Title' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Rows' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetOuterCallCenterDataList' => [
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
                    'name' => 'SessionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '机器人session_id',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'a15ce370-1051-4040-9822',
                    ],
                ],
                [
                    'name' => 'FromPhoneNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '135615',
                    ],
                ],
                [
                    'name' => 'ToPhoneNum',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0571773',
                    ],
                ],
                [
                    'name' => 'BizId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '关键单据号-如订单ID等',
                        'type' => 'string',
                        'required' => false,
                        'example' => '78604',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'QueryStartTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间戳（毫秒）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1614824872',
                    ],
                ],
                [
                    'name' => 'QueryEndTime',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间戳（毫秒）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1614824972',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '热线数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '热线数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'EndReason' => [
                                            'description' => '挂断原因，有以下枚举： 1.转人工导致的结束 2.未转人工在机器人阶段结束 3.用户主动挂断电话 4.机器人主动挂断电话 5.网络异常原因导致的挂断电话',
                                            'type' => 'string',
                                            'example' => '3',
                                        ],
                                        'CallType' => [
                                            'description' => '电话类型，有以下枚举： 1：呼入 2：呼出',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Acid' => [
                                            'description' => '入呼后，websocket中的acid',
                                            'type' => 'string',
                                            'example' => '100365558',
                                        ],
                                        'ToPhoneNum' => [
                                            'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
                                            'type' => 'string',
                                            'example' => '0571773',
                                        ],
                                        'UserInfo' => [
                                            'description' => '从上游系统带来的用户信息，json格式记录',
                                            'type' => 'string',
                                            'example' => '{\\"level\\":25,\\"name\\":\\"Lee\\"}',
                                        ],
                                        'InterveneTime' => [
                                            'description' => '通话接通时间，呼入就等同于gmt_creae，呼出就是用户接通时间',
                                            'type' => 'string',
                                            'example' => '16085570',
                                        ],
                                        'BizId' => [
                                            'description' => '关键单据号-如订单ID等',
                                            'type' => 'string',
                                            'example' => '78604',
                                        ],
                                        'SessionId' => [
                                            'description' => '机器人session_id',
                                            'type' => 'string',
                                            'example' => 'a15ce370-1051-4040-9822',
                                        ],
                                        'FromPhoneNum' => [
                                            'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
                                            'type' => 'string',
                                            'example' => '135615',
                                        ],
                                        'ExtInfo' => [
                                            'description' => 'json，上游系统的业务信息等，如机器人实例等信息',
                                            'type' => 'string',
                                            'example' => '{\\"isCallBack\\":\\"true\\"}',
                                        ],
                                        'BizType' => [
                                            'description' => '单据号类型-如order,等',
                                            'type' => 'string',
                                            'example' => 'SHOP_ID',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndReason\\": \\"3\\",\\n      \\"CallType\\": \\"1\\",\\n      \\"Acid\\": \\"100365558\\",\\n      \\"ToPhoneNum\\": \\"0571773\\",\\n      \\"UserInfo\\": \\"{\\\\\\\\\\\\\\"level\\\\\\\\\\\\\\":25,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Lee\\\\\\\\\\\\\\"}\\",\\n      \\"InterveneTime\\": \\"16085570\\",\\n      \\"BizId\\": \\"78604\\",\\n      \\"SessionId\\": \\"a15ce370-1051-4040-9822\\",\\n      \\"FromPhoneNum\\": \\"135615\\",\\n      \\"ExtInfo\\": \\"{\\\\\\\\\\\\\\"isCallBack\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\"}\\",\\n      \\"BizType\\": \\"SHOP_ID\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <EndReason>3</EndReason>\\n    <CallType>1</CallType>\\n    <Acid>100365558</Acid>\\n    <ToPhoneNum>0571773</ToPhoneNum>\\n    <UserInfo>{\\\\\\"level\\\\\\":25,\\\\\\"name\\\\\\":\\\\\\"Lee\\\\\\"}</UserInfo>\\n    <InterveneTime>16085570</InterveneTime>\\n    <BizId>78604</BizId>\\n    <SessionId>a15ce370-1051-4040-9822</SessionId>\\n    <FromPhoneNum>135615</FromPhoneNum>\\n    <ExtInfo>{\\\\\\"isCallBack\\\\\\":\\\\\\"true\\\\\\"}</ExtInfo>\\n    <BizType>SHOP_ID</BizType>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取外部热线数据列表',
            'summary' => '获取外部热线数据列表。',
        ],
        'SendHotlineHeartBeat' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '心跳签名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0079e7a845e37334ff',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '发送热线心跳',
            'summary' => '发送热线心跳。',
        ],
        'SuspendHotlineService' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '小休原因，有以下枚举：'."\n"
                            .'1：小休（默认）'."\n"
                            .'2：就餐'."\n"
                            .'3：会议'."\n"
                            .'4：辅导'."\n"
                            .'5：培训',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '暂停热线服务',
            'summary' => '坐席小休，暂停热线服。',
        ],
        'TransferCallToPhone' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线转交主叫号码',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '9065446',
                    ],
                ],
                [
                    'name' => 'Callee',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线转交被叫号码',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '136098792',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '1:单步转，2:双步转，默认为1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'IsSingleTransfer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'true:单步转，false:双步转，默认单步转',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'callerPhone',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'calleePhone',
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
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '转发热线到电话',
            'summary' => '通话单\\双步转交到电话。',
        ],
        'TransferCallToSkillGroup' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '356543',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '1:单步转，2:双步转，默认为1',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'IsSingleTransfer',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'true:单步转，false:双步转，默认单步转',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '转发热线到技能组',
            'summary' => '通话单\\双步转交到技能组。',
        ],
        'TransferToThirdCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '转发热线',
            'summary' => '通话单步转交到第三方。',
        ],
        'FinishHotlineService' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '结束热线服务',
            'summary' => '坐席签出，结束热线服务。',
        ],
        'CreateRole' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Operator',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PermissionId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Data' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'DisableRole' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'RoleId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '角色id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '555555',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '禁用角色',
            'summary' => '根据角色id禁用悉犀客服工作台角色权限。',
        ],
        'EnableRole' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'RoleId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '角色id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '555555',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '启用角色',
            'summary' => '根据角色id启用悉犀客服工作台角色权限。',
        ],
        'CreateTicket' => [
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
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单模板id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '546754',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务类目id（如果不传，取工单模板的类目）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '10000',
                    ],
                ],
                [
                    'name' => 'CreatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者id（坐席id）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'CreatorType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者角色（默认为4：客服），有以下枚举：'."\n"
                            .'1：会员'."\n"
                            .'4：客服',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'CreatorName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '刘测试',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会员id（匿名会员id：-1）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会员名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '匿名会员',
                    ],
                ],
                [
                    'name' => 'FromInfo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建来源',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'manual',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单优先级，有以下枚举：'."\n"
                            .'普通：4'."\n"
                            .'低：0'."\n"
                            .'中：1'."\n"
                            .'高：2'."\n"
                            .'紧急：3',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'CarbonCopy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '被抄送人账号id(多个抄送人用逗号分隔)',
                        'type' => 'string',
                        'required' => false,
                        'example' => '234432',
                    ],
                ],
                [
                    'name' => 'FormData',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单模板的表单配置，格式{"key":"value"}'."\n"
                            .'key:表单字段编码 value:记录值'."\n"
                            .'例：{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '工单id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2500000010',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2500000010,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '新建工单',
            'summary' => '创建工单。',
        ],
        'UpdateTicket' => [
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单id（工单编码）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2500000010',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '操作人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'FormData',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单修改信息，格式{"key":"value"} ',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新工单',
            'summary' => '根据工单id更新工单。',
        ],
        'QueryTicketActions' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'ActionCodeList',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                        'required' => false,
                        'maxItems' => 100,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [],
            'responseDemo' => '',
        ],
        'QueryTicketCount' => [
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
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '操作人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '666666',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '处理中工单总数',
                                'type' => 'string',
                                'example' => '45',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                202 => [
                    [
                        'errorCode' => 'GetTenantIdFailed',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"45\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>45</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询工单数量',
            'summary' => '根据操作人id查询其处理中的工单总数。',
        ],
        'QueryTickets' => [
            'summary' => '查询工单',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'CaseId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'CaseType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'CaseStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1000',
                    ],
                ],
                [
                    'name' => 'SrType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-10000000',
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ChannelType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-10000000',
                    ],
                ],
                [
                    'name' => 'TouchId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'DealId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'ParentCaseId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'StartCaseGmtCreate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'EndCaseGmtCreate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '5000',
                        'minimum' => '0',
                        'default' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'SearchTicketById' => [
            'summary' => '根据工单id查询工单详情。',
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单id（工单编号）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2500000010',
                    ],
                ],
                [
                    'name' => 'StatusCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单状态编码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '12001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '工单详情',
                                'type' => 'object',
                                'properties' => [
                                    'CarbonCopy' => [
                                        'description' => '抄送人',
                                        'type' => 'string',
                                        'example' => '234432',
                                    ],
                                    'MemberName' => [
                                        'description' => '会员名称',
                                        'type' => 'string',
                                        'example' => '匿名会员',
                                    ],
                                    'CreateTime' => [
                                        'description' => '工单创建时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1614824872',
                                    ],
                                    'ServiceId' => [
                                        'description' => '客服id/坐席id（工单操作人id）',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '555555',
                                    ],
                                    'TicketId' => [
                                        'description' => '工单id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '2500000010',
                                    ],
                                    'Priority' => [
                                        'description' => '工单优先级',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'CreatorId' => [
                                        'description' => '创建者id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '555555',
                                    ],
                                    'FormData' => [
                                        'description' => '工单业务信息（工单模板表单信息）',
                                        'type' => 'string',
                                        'example' => '{"questionInfo":"自动化创建工单"}',
                                    ],
                                    'Activities' => [
                                        'description' => '工单活动业务信息（工单活动表单信息）',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '工单活动表单信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'ActivityFormData' => [
                                                    'description' => '工单活动表单信息编码',
                                                    'type' => 'string',
                                                    'example' => '{\\"BQ73dGsSNs\\":\\"备注\\"}',
                                                ],
                                                'ActivityCode' => [
                                                    'description' => '活动编码',
                                                    'type' => 'string',
                                                    'example' => 'finish',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ActivityRecords' => [
                                        'description' => '动作记录',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '动作记录信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'ActionCode' => [
                                                    'description' => '动作记录活动编码',
                                                    'type' => 'string',
                                                    'example' => '997015',
                                                ],
                                                'ActionCodeDesc' => [
                                                    'description' => '动作记录活动编码名称',
                                                    'type' => 'string',
                                                    'example' => '创建工单',
                                                ],
                                                'OperatorName' => [
                                                    'description' => '工单操作人名称',
                                                    'type' => 'string',
                                                    'example' => '刘测试',
                                                ],
                                                'Operator' => [
                                                    'type' => 'string',
                                                ],
                                                'Memo' => [
                                                    'description' => '动作备注',
                                                    'type' => 'string',
                                                    'example' => '{"CFQyYAPjKb":"开胶"}',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '操作时间',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1614824772',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'FromInfo' => [
                                        'description' => '创建来源',
                                        'type' => 'string',
                                        'example' => 'hotline',
                                    ],
                                    'ModifiedTime' => [
                                        'description' => '工单处理时间',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1614824872',
                                    ],
                                    'CreatorName' => [
                                        'description' => '创建者名称',
                                        'type' => 'string',
                                        'example' => '刘测试',
                                    ],
                                    'CategoryId' => [
                                        'description' => '业务类目id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10000',
                                    ],
                                    'CreatorType' => [
                                        'description' => '创建者角色，有以下枚举：'."\n"
                                            .'系统：0'."\n"
                                            .'会员：1'."\n"
                                            .'客服：4',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '4',
                                    ],
                                    'MemberId' => [
                                        'description' => '会员id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1876543',
                                    ],
                                    'CaseStatus' => [
                                        'description' => '工单状态（工单状态数值）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '6',
                                    ],
                                    'TemplateId' => [
                                        'description' => '工单模板id',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '546754',
                                    ],
                                    'TicketName' => [
                                        'description' => '工单名称',
                                        'type' => 'string',
                                        'example' => '自动化工单',
                                    ],
                                    'ParentCaseId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"CarbonCopy\\": \\"234432\\",\\n    \\"MemberName\\": \\"匿名会员\\",\\n    \\"CreateTime\\": 1614824872,\\n    \\"ServiceId\\": 555555,\\n    \\"TicketId\\": 2500000010,\\n    \\"Priority\\": 1,\\n    \\"CreatorId\\": 555555,\\n    \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n    \\"Activities\\": [\\n      {\\n        \\"ActivityFormData\\": \\"{\\\\\\\\\\\\\\"BQ73dGsSNs\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"备注\\\\\\\\\\\\\\"}\\",\\n        \\"ActivityCode\\": \\"finish\\"\\n      }\\n    ],\\n    \\"ActivityRecords\\": [\\n      {\\n        \\"ActionCode\\": \\"997015\\",\\n        \\"ActionCodeDesc\\": \\"创建工单\\",\\n        \\"OperatorName\\": \\"刘测试\\",\\n        \\"Operator\\": \\"\\",\\n        \\"Memo\\": \\"{\\\\\\"CFQyYAPjKb\\\\\\":\\\\\\"开胶\\\\\\"}\\",\\n        \\"GmtCreate\\": 1614824772\\n      }\\n    ],\\n    \\"FromInfo\\": \\"hotline\\",\\n    \\"ModifiedTime\\": 1614824872,\\n    \\"CreatorName\\": \\"刘测试\\",\\n    \\"CategoryId\\": 10000,\\n    \\"CreatorType\\": 4,\\n    \\"MemberId\\": 1876543,\\n    \\"CaseStatus\\": 6,\\n    \\"TemplateId\\": 546754,\\n    \\"TicketName\\": \\"自动化工单\\",\\n    \\"ParentCaseId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <MemberName>匿名会员</MemberName>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <Activities>\\n        <ActivityFormData>{\\\\\\"BQ73dGsSNs\\\\\\":\\\\\\"备注\\\\\\"}</ActivityFormData>\\n        <ActivityCode>finish</ActivityCode>\\n    </Activities>\\n    <ActivityRecords>\\n        <ActionCode>997015</ActionCode>\\n        <ActionCodeDesc>创建工单</ActionCodeDesc>\\n        <OperatorName>刘测试</OperatorName>\\n        <Memo>{\\"CFQyYAPjKb\\":\\"开胶\\"}</Memo>\\n        <GmtCreate>1614824772</GmtCreate>\\n    </ActivityRecords>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n    <TicketName>自动化工单</TicketName>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '根据id查询工单',
        ],
        'SearchTicketByPhone' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '138999',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单模板id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '546754',
                    ],
                ],
                [
                    'name' => 'TicketStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单状态',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页（默认为1）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小（默认为10）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1614824872',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1614825972',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'OnePageSize' => [
                                'description' => '每页的数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '2',
                            ],
                            'TotalResults' => [
                                'description' => '总共记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '16',
                            ],
                            'PageNo' => [
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '工单信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工单信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'MemberName' => [
                                            'description' => '会员名称',
                                            'type' => 'string',
                                            'example' => '匿名会员',
                                        ],
                                        'CarbonCopy' => [
                                            'description' => '抄送人',
                                            'type' => 'string',
                                            'example' => '234432',
                                        ],
                                        'CreateTime' => [
                                            'description' => '工单创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1614824872',
                                        ],
                                        'ServiceId' => [
                                            'description' => '客服id/坐席id（工单操作人id）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '555555',
                                        ],
                                        'TicketId' => [
                                            'description' => '工单id（工单编码）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2500000010',
                                        ],
                                        'Priority' => [
                                            'description' => '工单优先级',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CreatorId' => [
                                            'description' => '创建者id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '555555',
                                        ],
                                        'FormData' => [
                                            'description' => '工单业务信息（工单模板表单信息）',
                                            'type' => 'string',
                                            'example' => '{"questionInfo":"自动化创建工单"}',
                                        ],
                                        'FromInfo' => [
                                            'description' => '创建来源',
                                            'type' => 'string',
                                            'example' => 'hotline',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '工单处理时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1614824872',
                                        ],
                                        'TaskStatus' => [
                                            'description' => '工单状态，有以下枚举：未处理，处理中，已结束，挂起，取消，待分配',
                                            'type' => 'string',
                                            'example' => '处理中',
                                        ],
                                        'CreatorName' => [
                                            'description' => '创建者名称',
                                            'type' => 'string',
                                            'example' => '刘测试',
                                        ],
                                        'CategoryId' => [
                                            'description' => '业务类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10000',
                                        ],
                                        'CreatorType' => [
                                            'description' => '创建者角色，有以下枚举： 系统：0 会员：1 客服：4',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                        ],
                                        'MemberId' => [
                                            'description' => '会员id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1876543',
                                        ],
                                        'CaseStatus' => [
                                            'description' => '工单状态（工单状态数值）',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '6',
                                        ],
                                        'TemplateId' => [
                                            'description' => '工单模板id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '546754',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 10,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"TotalPage\\": 2,\\n  \\"TotalResults\\": 16,\\n  \\"PageNo\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"MemberName\\": \\"匿名会员\\",\\n      \\"CarbonCopy\\": \\"234432\\",\\n      \\"CreateTime\\": 1614824872,\\n      \\"ServiceId\\": 555555,\\n      \\"TicketId\\": 2500000010,\\n      \\"Priority\\": 1,\\n      \\"CreatorId\\": 555555,\\n      \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n      \\"FromInfo\\": \\"hotline\\",\\n      \\"ModifiedTime\\": 1614824872,\\n      \\"TaskStatus\\": \\"处理中\\",\\n      \\"CreatorName\\": \\"刘测试\\",\\n      \\"CategoryId\\": 10000,\\n      \\"CreatorType\\": 4,\\n      \\"MemberId\\": 1876543,\\n      \\"CaseStatus\\": 6,\\n      \\"TemplateId\\": 546754\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>10</OnePageSize>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Message>xxxx</Message>\\n<TotalPage>2</TotalPage>\\n<TotalResults>16</TotalResults>\\n<PageNo>1</PageNo>\\n<Data>\\n    <MemberName>匿名会员</MemberName>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <TaskStatus>处理中</TaskStatus>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '根据电话查询工单',
            'summary' => '根据电话查询工单信息。',
        ],
        'SearchTicketList' => [
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
            ],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单操作人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'TicketStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单状态（工单状态数值）'."\n"
                            .'**说明：工单类型定义时需要自定义状态数值，例如配送员待处理的状态数值需手动改为3807且在工单创建前修改完成，工单状态的查询条件才可能生效。如下图：（该图复制链接下载后即可查看）**'."\n"
                            .'https://cdn.nlark.com/yuque/0/2020/png/2733660/1608724297862-da5150ed-71f0-47a5-8de4-c371cda23b97.png',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页（默认为1）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小（默认为20）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '20',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间戳（毫秒）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1614824872',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间戳（毫秒）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1614825972',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'OnePageSize' => [
                                'description' => '每页的数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                            'TotalResults' => [
                                'description' => '总共记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '45',
                            ],
                            'PageNo' => [
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Data' => [
                                'description' => '工单信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工单信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'MemberName' => [
                                            'description' => '会员名称',
                                            'type' => 'string',
                                            'example' => '匿名会员',
                                        ],
                                        'CarbonCopy' => [
                                            'description' => '抄送人',
                                            'type' => 'string',
                                            'example' => '234432',
                                        ],
                                        'CreateTime' => [
                                            'description' => '工单创建时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1614824872',
                                        ],
                                        'ServiceId' => [
                                            'description' => '服务id（工单操作人id）',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '555555',
                                        ],
                                        'TicketId' => [
                                            'description' => '工单id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2500000010',
                                        ],
                                        'Priority' => [
                                            'description' => '工单优先级',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'CreatorId' => [
                                            'description' => '创建者id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '555555',
                                        ],
                                        'FormData' => [
                                            'description' => '工单业务信息（工单模板表单信息）',
                                            'type' => 'string',
                                            'example' => '{"questionInfo":"自动化创建工单"}',
                                        ],
                                        'FromInfo' => [
                                            'description' => '创建来源',
                                            'type' => 'string',
                                            'example' => 'hotline',
                                        ],
                                        'ModifiedTime' => [
                                            'description' => '工单处理时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1614824872',
                                        ],
                                        'TaskStatus' => [
                                            'description' => '工单状态，有以下枚举：未处理，处理中，已结束，挂起，取消，待分配',
                                            'type' => 'string',
                                            'example' => '处理中',
                                        ],
                                        'CreatorName' => [
                                            'description' => '创建者名称',
                                            'type' => 'string',
                                            'example' => '刘测试',
                                        ],
                                        'CategoryId' => [
                                            'description' => '业务类目id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10000',
                                        ],
                                        'CreatorType' => [
                                            'description' => '创建者角色，有以下枚举： 系统：0 会员：1 客服：4',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '4',
                                        ],
                                        'MemberId' => [
                                            'description' => '会员id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1876543',
                                        ],
                                        'CaseStatus' => [
                                            'description' => '工单状态',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '6',
                                        ],
                                        'TemplateId' => [
                                            'description' => '工单模板id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '546754',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 20,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"TotalPage\\": 3,\\n  \\"TotalResults\\": 45,\\n  \\"PageNo\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"MemberName\\": \\"匿名会员\\",\\n      \\"CarbonCopy\\": \\"234432\\",\\n      \\"CreateTime\\": 1614824872,\\n      \\"ServiceId\\": 555555,\\n      \\"TicketId\\": 2500000010,\\n      \\"Priority\\": 1,\\n      \\"CreatorId\\": 555555,\\n      \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n      \\"FromInfo\\": \\"hotline\\",\\n      \\"ModifiedTime\\": 1614824872,\\n      \\"TaskStatus\\": \\"处理中\\",\\n      \\"CreatorName\\": \\"刘测试\\",\\n      \\"CategoryId\\": 10000,\\n      \\"CreatorType\\": 4,\\n      \\"MemberId\\": 1876543,\\n      \\"CaseStatus\\": 6,\\n      \\"TemplateId\\": 546754\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>20</OnePageSize>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Message>xxxx</Message>\\n<TotalPage>3</TotalPage>\\n<TotalResults>45</TotalResults>\\n<PageNo>1</PageNo>\\n<Data>\\n    <MemberName>匿名会员</MemberName>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <TaskStatus>处理中</TaskStatus>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询工单列表',
            'summary' => '根据工单操作人id查询工单列表信息。',
            'responseParamsDescription' => '1）默认按照工单的创建时间倒序排列，即最新的工单在最前面。',
        ],
        'AssignTicket' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单id（工单编号）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2500000010',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '分配人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '666666',
                    ],
                ],
                [
                    'name' => 'AcceptorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '被分配人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '234432',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '分配工单',
            'summary' => '根据工单id分配工单。',
        ],
        'CloseTicket' => [
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单id（工单编号）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2500000010',
                    ],
                ],
                [
                    'name' => 'ActionItems',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '自定义json动作记录，例如：{"reason":"业务系统强制关闭"}',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '{"reason":"业务系统强制关闭"}',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '操作人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '555555',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '关闭工单',
            'summary' => '根据工单id关闭工单，添加自定义动作记录。',
        ],
        'ExecuteActivity' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TicketId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '2500000010',
                    ],
                ],
                [
                    'name' => 'OperatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '操作人id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'ActivityCode',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '活动编码,可使用系统编码，也可修改系统编码使用自定义编码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'finish',
                    ],
                ],
                [
                    'name' => 'ActivityForm',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '动作记录扩展字段，如：{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}\'',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '处理工单',
            'summary' => '执行自定义活动。',
            'extraInfo' => '1）activityForm 传递的内容实例：{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}'."\n"
                .'2）活动编码定义时需要自定义编码（系统活动无法自定义编码），例如审计组长的活动编码需手动改为「group」且在工单创建前修改完成，指定活动才可能生效。如下图：'."\n"
                .'https://cdn.nlark.com/yuque/0/2021/png/21395124/1619081827743-b753b777-d37f-466c-9df4-62e386b46aa2.png',
        ],
        'AnswerCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '接听来电',
            'summary' => '接听来电。',
        ],
        'AppMessagePush' => [
            'summary' => '客户App处在离线状态.但客服人员处在上班状态的工单信息推送给客户。由客户这面进行自行推送。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-ss001',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户编号',
                        'description' => '用户编号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'APP状态',
                        'description' => 'APP状态 1: "在线",2: "离线"',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10',
                        'minimum' => '-1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'ExpirationTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '过期时间',
                        'description' => '过期时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '-9223372036854775808',
                        'exclusiveMinimum' => true,
                        'example' => '123',
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
                                'example' => '123-123143-4',
                            ],
                            'Data' => [
                                'title' => '返回数据',
                                'description' => '返回数据',
                                'type' => 'string',
                                'example' => 'null',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'SysytemError',
                            ],
                            'Success' => [
                                'title' => '通信码',
                                'description' => '通信码',
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
                503 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'System Error',
                    ],
                ],
                600 => [
                    [
                        'errorCode' => 'InvalidParam',
                        'errorMessage' => 'Invalid param',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123-123143-4\\",\\n  \\"Data\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"SysytemError\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>123-123143-4</RequestId>\\n<Data>null</Data>\\n<Code>200</Code>\\n<Message>SysytemError</Message>\\n<Success>true</Success>","errorExample":""}]',
            'title' => 'App消息推送',
        ],
        'ChangeChatAgentStatus' => [
            'summary' => '修改在线客服状态。',
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'clientToken',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '示例id',
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '账户名称',
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Method',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '修改到的状态类型',
                        'description' => '修改到的状态类型'."\n"
                            .' '."\n"
                            .'- requestRest   （申请小休）'."\n"
                            .'- requestLogout  （申请离线）'."\n"
                            .'- restToWork  （小休转上班）'."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'requestLogout',
                        'enum' => [
                            'requestRest',
                            'requestLogout',
                            'restToWork',
                        ],
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
                                'title' => 'message',
                                'description' => '错误描述'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'httpStatusCode',
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => 'data',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Agent.NotFound',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口调用是否成功'."\n"
                                    ."\n",
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"0\\",\\n  \\"Code\\": \\"Agent.NotFound\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ChangeChatAgentStatusResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>0</Data>\\n    <Code>Agent.NotFound</Code>\\n    <Success>true</Success>\\n</ChangeChatAgentStatusResponse>","errorExample":""}]',
            'title' => '修改在线客服状态',
        ],
        'CreateCustomer' => [
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
                    'name' => 'ProdLineId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品线ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '10552599',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xp_commerce_aliyun',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'TypeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1360000xxxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'ManagerName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管理人姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '管理人',
                    ],
                ],
                [
                    'name' => 'Contacter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建人',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Industry',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业',
                        'type' => 'string',
                        'required' => false,
                        'example' => '服饰',
                    ],
                ],
                [
                    'name' => 'Position',
                    'in' => 'query',
                    'schema' => [
                        'description' => '职位',
                        'type' => 'string',
                        'required' => false,
                        'example' => '主管',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Dingding',
                    'in' => 'query',
                    'schema' => [
                        'description' => '钉钉账号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123yiyo',
                    ],
                ],
                [
                    'name' => 'OuterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000011',
                    ],
                ],
                [
                    'name' => 'OuterIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => '创建成功',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '客户数据',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '{"CustomerId":"24027"}',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"创建成功\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 0,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>创建成功</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '创建客户',
            'summary' => '创建客户。',
        ],
        'CreateEntityIvrRoute' => [
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
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityBizCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityBizCodeType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityRelationNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CreateSkillGroup' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'SkillGroupName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '在线自动化技能组',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '在线自动化技能组',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组对外显示名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '在线自动化技能组',
                    ],
                ],
                [
                    'name' => 'ChannelType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组类型,有以下枚举值：'."\n"
                            .'1：热线 '."\n"
                            .'2：在线  '."\n"
                            .'4：工单',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '7',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => 'Message',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => 'RequestId',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '创建成功的技能组id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123456',
                            ],
                            'Code' => [
                                'description' => 'Code',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => 'Success',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 123456,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>123456</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '创建技能组',
            'summary' => '根据技能组名称和渠道类型创建技能组，可定义技能组的对外显示名、描述信息。',
        ],
        'CreateSubTicket' => [
            'summary' => '创建工单',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatorId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FromInfo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FormData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'ParentCaseId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'BizData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'AgentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'CreateThirdSsoAgent' => [
            'summary' => '根据用户账号创建免登到客服工作台的坐席。',
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'clientToken',
                        'description' => '客户请求唯一ID。用于幂等校验，可以用UUID生成。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'param1',
                        'description' => '实例ID。可在悉犀客服控制台上获取。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre***',
                    ],
                ],
                [
                    'name' => 'ClientId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'param2',
                        'description' => '颁发给租户实例的clientId',
                        'type' => 'string',
                        'required' => true,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'AccountId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'param3',
                        'description' => '要同步的账号ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'accountId1',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'param4',
                        'description' => '要同步的账号名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'accountName1',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'param5',
                        'description' => '坐席显示名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'SkillGroupIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'param6',
                        'description' => '技能组ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '技能组ID。'."\n"
                                ."\n"
                                .'所传技能组必须属于同一个技能组分组。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RoleIds',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'title' => 'param7',
                        'description' => '角色ID列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '角色id',
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                            'example' => '1',
                        ],
                        'required' => false,
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
                                'title' => 'message',
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'httpStatusCode',
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Data' => [
                                'title' => '新创建的坐席id',
                                'description' => '新创建的坐席id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '123456',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '错误状态码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口调用是否成功。',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 123456,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateThirdSsoAgentResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>123456</Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n</CreateThirdSsoAgentResponse>","errorExample":""}]',
            'title' => '创建三方免登坐席',
        ],
        'createTicketWithBizData' => [
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
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单模板id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '30401',
                    ],
                ],
                [
                    'name' => 'CategoryId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务类目id（如果不传，取工单模板的类目）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '397001',
                    ],
                ],
                [
                    'name' => 'CreatorId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者id（坐席id）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '555555',
                    ],
                ],
                [
                    'name' => 'CreatorType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者角色（默认为4：客服），有以下枚举： 1：会员 4：客服',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'CreatorName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建者名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '刘测试',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会员id（匿名会员id：-1）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '-1',
                    ],
                ],
                [
                    'name' => 'MemberName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '会员名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '匿名会员',
                    ],
                ],
                [
                    'name' => 'FromInfo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '创建来源',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'manual',
                    ],
                ],
                [
                    'name' => 'Priority',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '工单优先级，有以下枚举： 普通：4 低：0 中：1 高：2 紧急：3',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10',
                        'minimum' => '0',
                        'example' => '3',
                    ],
                ],
                [
                    'name' => 'CarbonCopy',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '被抄送人账号id(多个抄送人用逗号分隔)',
                        'type' => 'string',
                        'required' => false,
                        'example' => '234432',
                    ],
                ],
                [
                    'name' => 'FormData',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务字段',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{callout:"1356661xxxx",shoufangren:"晨曦测试公司",authKey:"f866b596d6b2edd409e1243a7xxxxxxx",onecompId:"6666666666"}',
                    ],
                ],
                [
                    'name' => 'BizData',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '业务方需要的识别字段，部分业务不传此字段，工单完结后数据回流失败，依情况添加',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{callout:"1356661xxxx",shoufangren:"晨曦测试公司",authKey:"f866b596d6b2edd409e1243a7xxxxxxx",onecompId:"6666666666"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '工单id',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2500000010',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2500000010,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>2500000010</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '创建工单和BIZ',
            'summary' => '创建工单加入BIZ字段。',
        ],
        'DeleteEntityRoute' => [
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
                    'name' => 'UniqueId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'EditEntityRoute' => [
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
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityBizCode',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityBizCodeType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityRelationNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'ServiceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'ExtInfo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UniqueId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'FetchCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '取回通话信息',
            'summary' => '取回\\恢复通话。',
        ],
        'GenerateWebSocketSign' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => 'messagebox消息通道签名码',
                                'type' => 'string',
                                'example' => 'dnthF_oinHg7JMJDmKqex3UxDD7',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"dnthF_oinHg7JMJDmKqex3UxDD7\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>dnthF_oinHg7JMJDmKqex3UxDD7</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '生成messagbox通道签名',
            'summary' => '生成消息通道访问签名。',
        ],
        'GetAuthInfo' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'ForeignId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'AppName' => [
                                        'type' => 'string',
                                    ],
                                    'Time' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'AppKey' => [
                                        'type' => 'string',
                                    ],
                                    'App' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Code' => [
                                        'type' => 'string',
                                    ],
                                    'SessionId' => [
                                        'type' => 'string',
                                    ],
                                    'UserName' => [
                                        'type' => 'string',
                                    ],
                                    'TenantId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                201 => [
                    [
                        'errorCode' => 'GetAuthInfoFailed',
                        'errorMessage' => 'Failed to get authorization information.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'GetTenantIdFailed',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetByForeignId' => [
            'summary' => '获取外部账号映射的会员账号关系信息',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ForeignId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetCallsPerDay' => [
            'summary' => '获取热线日来电次数。',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'DataIdStart',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20210316',
                    ],
                ],
                [
                    'name' => 'DataIdEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20210316',
                    ],
                ],
                [
                    'name' => 'DataId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果按日分组',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'HourId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果按小时分组',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'MinuteId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询结果按分钟分组',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Y',
                    ],
                ],
                [
                    'name' => 'PhoneNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号，多个手机号可以使用逗号隔开',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1583709xxxx',
                    ],
                ],
                [
                    'name' => 'HavePhoneNumbers',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号，多个手机号可以使用逗号隔开',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1583709xxxx',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'maximum' => '2147483647',
                        'minimum' => '0',
                        'example' => '10',
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
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'phoneNum and havePhoneNum must be either empty or not empty at the same time',
                            ],
                            'RequestId' => [
                                'description' => '	'."\n"
                                    .'阿里云请求ID',
                                'type' => 'string',
                                'example' => '45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9',
                            ],
                            'Code' => [
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'InvalidPhone',
                            ],
                            'Success' => [
                                'description' => '请求结果',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => 'data',
                                'type' => 'object',
                                'properties' => [
                                    'TotalNum' => [
                                        'description' => '总条数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '13',
                                    ],
                                    'PageSize' => [
                                        'description' => '页大小',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'PageNo' => [
                                        'description' => '当前页',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'CallsPerdayResponseList' => [
                                        'description' => 'array',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'object',
                                            'type' => 'object',
                                            'properties' => [
                                                'DataId' => [
                                                    'description' => '按天分组',
                                                    'type' => 'string',
                                                    'example' => '-1',
                                                ],
                                                'HourId' => [
                                                    'description' => '按小时分组',
                                                    'type' => 'string',
                                                    'example' => '-1',
                                                ],
                                                'TenantId' => [
                                                    'description' => '租户id',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'TenantName' => [
                                                    'description' => '租户名称',
                                                    'type' => 'string',
                                                    'example' => '50',
                                                ],
                                                'PhoneNum' => [
                                                    'description' => '手机号',
                                                    'type' => 'string',
                                                    'example' => '1583709xxxx',
                                                ],
                                                'CallOutCnt' => [
                                                    'description' => '外呼次数',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'CallInCnt' => [
                                                    'description' => '来电次数',
                                                    'type' => 'string',
                                                    'example' => '1',
                                                ],
                                                'MinuteId' => [
                                                    'description' => '按分钟分组',
                                                    'type' => 'string',
                                                    'example' => '-1',
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
                202 => [
                    [
                        'errorCode' => 'GetTenantIdFailed',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'DataIdEndError',
                        'errorMessage' => 'dataIdStart must be a time stamp and cannot be empty.',
                    ],
                    [
                        'errorCode' => 'DataIdStartError',
                        'errorMessage' => 'dataIdEnd must be a time stamp and cannot be empty.',
                    ],
                    [
                        'errorCode' => 'InvalidPhone',
                        'errorMessage' => 'phoneNum and havePhoneNum must be either empty or not empty at the same time.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InstanceIdCannotBeNull',
                        'errorMessage' => 'You must specify InstanceId.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"phoneNum and havePhoneNum must be either empty or not empty at the same time\\",\\n  \\"RequestId\\": \\"45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9\\",\\n  \\"Code\\": \\"InvalidPhone\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 13,\\n    \\"PageSize\\": 10,\\n    \\"PageNo\\": \\"1\\",\\n    \\"CallsPerdayResponseList\\": [\\n      {\\n        \\"DataId\\": \\"-1\\",\\n        \\"HourId\\": \\"-1\\",\\n        \\"TenantId\\": \\"0\\",\\n        \\"TenantName\\": \\"50\\",\\n        \\"PhoneNum\\": \\"1583709xxxx\\",\\n        \\"CallOutCnt\\": \\"1\\",\\n        \\"CallInCnt\\": \\"1\\",\\n        \\"MinuteId\\": \\"-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>phoneNum and havePhoneNum must be either empty or not empty at the same time</Message>\\n<RequestId>45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9</RequestId>\\n<Code>InvalidPhone</Code>\\n<Success>true</Success>\\n<Data>\\n    <TotalNum>13</TotalNum>\\n    <PageSize>10</PageSize>\\n    <PageNo>1</PageNo>\\n    <CallsPerdayResponseList>\\n        <DataId>-1</DataId>\\n        <HourId>-1</HourId>\\n        <TenantId>0</TenantId>\\n        <TenantName>50</TenantName>\\n        <PhoneNum>1583709xxxx</PhoneNum>\\n        <CallOutCnt>1</CallOutCnt>\\n        <CallInCnt>1</CallInCnt>\\n        <MinuteId>-1</MinuteId>\\n    </CallsPerdayResponseList>\\n</Data>","errorExample":""}]',
            'title' => '获取热线日来电次数',
        ],
        'GetCMSIdByForeignId' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'Nick',
                    'in' => 'query',
                    'schema' => [
                        'description' => '昵称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'ForeignId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'zhangsan',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户来源',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE339D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '账户信息',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '账号状态',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'CustomerTypeId' => [
                                        'description' => '客户类型',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Avatar' => [
                                        'description' => '头像',
                                        'type' => 'string',
                                        'example' => 'xxxx',
                                    ],
                                    'Gender' => [
                                        'description' => '性别',
                                        'type' => 'string',
                                        'example' => 'male',
                                    ],
                                    'ForeignId' => [
                                        'description' => '外部id',
                                        'type' => 'string',
                                        'example' => 'zhangsan',
                                    ],
                                    'UserId' => [
                                        'description' => '用户id',
                                        'type' => 'string',
                                        'example' => 'zhangsan',
                                    ],
                                    'Nick' => [
                                        'description' => '昵称',
                                        'type' => 'string',
                                        'example' => '张三',
                                    ],
                                    'Anonymity' => [
                                        'description' => '是否匿名',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Phone' => [
                                        'description' => '电话',
                                        'type' => 'string',
                                        'example' => '131111111111',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE339D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"Status\\": 1,\\n    \\"CustomerTypeId\\": 1,\\n    \\"Avatar\\": \\"xxxx\\",\\n    \\"Gender\\": \\"male\\",\\n    \\"ForeignId\\": \\"zhangsan\\",\\n    \\"UserId\\": \\"zhangsan\\",\\n    \\"Nick\\": \\"张三\\",\\n    \\"Anonymity\\": false,\\n    \\"Phone\\": \\"131111111111\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE339D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>1</Status>\\n    <CustomerTypeId>1</CustomerTypeId>\\n    <Avatar>xxxx</Avatar>\\n    <Gender>male</Gender>\\n    <ForeignId>zhangsan</ForeignId>\\n    <UserId>zhangsan</UserId>\\n    <Nick>张三</Nick>\\n    <Anonymity>false</Anonymity>\\n    <Phone>131111111111</Phone>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '根据foreignId获取cmsId',
            'summary' => '根据外部id获取客户id。',
        ],
        'GetEntityRoute' => [
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
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'UniqueId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityRelationNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityBizCode',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'EntityBizCodeType' => [
                                        'type' => 'string',
                                    ],
                                    'GroupId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'EntityId' => [
                                        'type' => 'string',
                                    ],
                                    'ServiceId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'EntityBizCode' => [
                                        'type' => 'string',
                                    ],
                                    'DepartmentId' => [
                                        'type' => 'string',
                                    ],
                                    'UniqueId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'EntityName' => [
                                        'type' => 'string',
                                    ],
                                    'ExtInfo' => [
                                        'type' => 'string',
                                    ],
                                    'EntityRelationNumber' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetEntityRouteList' => [
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
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'EntityRelationNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EntityName',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'PageNo' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'PageSize' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Total' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'EntityRouteList' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'EntityBizCodeType' => [
                                                    'type' => 'string',
                                                ],
                                                'GroupId' => [
                                                    'type' => 'string',
                                                ],
                                                'EntityId' => [
                                                    'type' => 'string',
                                                ],
                                                'ServiceId' => [
                                                    'type' => 'string',
                                                ],
                                                'DepartmentId' => [
                                                    'type' => 'string',
                                                ],
                                                'EntityBizCode' => [
                                                    'type' => 'string',
                                                ],
                                                'UniqueId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'EntityName' => [
                                                    'type' => 'string',
                                                ],
                                                'ExtInfo' => [
                                                    'type' => 'string',
                                                ],
                                                'EntityRelationNumber' => [
                                                    'type' => 'string',
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
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetEntityTagRelation' => [
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
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 9.223372036854776E+18,
                        'minLength' => -1,
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'maxLength' => 9.223372036854776E+18,
                        'minLength' => -1,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TagName' => [
                                            'type' => 'string',
                                        ],
                                        'TagGroupCode' => [
                                            'type' => 'string',
                                        ],
                                        'EntityId' => [
                                            'type' => 'string',
                                        ],
                                        'TagCode' => [
                                            'type' => 'string',
                                        ],
                                        'EntityType' => [
                                            'type' => 'string',
                                        ],
                                        'TagGroupName' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetGrantedRoleIds' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '角色id',
                                'type' => 'array',
                                'items' => [
                                    'description' => '角色id',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '{555555，777777}',
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    0\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取授权给用户的角色id',
            'summary' => '根据坐席账号名称查询悉犀客服工作台坐席的角色权限。',
        ],
        'GetNumLocation' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'PhoneNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '136098792',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '号码归属地',
                                'type' => 'string',
                                'example' => '杭州',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"杭州\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>杭州</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取电话位置',
            'summary' => '获取号码归属地。',
        ],
        'GetOutbounNumList' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '号码列表信息',
                                'type' => 'object',
                                'properties' => [
                                    'NumGroup' => [
                                        'description' => '号码组信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '号码组信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '类型，有以下枚举：'."\n"
                                                        .'1：号码'."\n"
                                                        .'2：号码组',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                                'Value' => [
                                                    'description' => '号码组id',
                                                    'type' => 'string',
                                                    'example' => 'Jella',
                                                ],
                                                'Description' => [
                                                    'description' => '号码组描述（号码组名称）',
                                                    'type' => 'string',
                                                    'example' => '76',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Num' => [
                                        'description' => '主叫号码信息',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '主叫号码信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Type' => [
                                                    'description' => '类型，有以下枚举：'."\n"
                                                        .'1：号码'."\n"
                                                        .'2：号码组',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'Value' => [
                                                    'description' => '主叫号码',
                                                    'type' => 'string',
                                                    'example' => '9065446',
                                                ],
                                                'Description' => [
                                                    'description' => '主叫号码描述（归属地信息）',
                                                    'type' => 'string',
                                                    'example' => '浙江省杭州市',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"NumGroup\\": [\\n      {\\n        \\"Type\\": 2,\\n        \\"Value\\": \\"Jella\\",\\n        \\"Description\\": \\"76\\"\\n      }\\n    ],\\n    \\"Num\\": [\\n      {\\n        \\"Type\\": 1,\\n        \\"Value\\": \\"9065446\\",\\n        \\"Description\\": \\"浙江省杭州市\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <NumGroup>\\n        <Type>2</Type>\\n        <Value>Jella</Value>\\n        <Description>76</Description>\\n    </NumGroup>\\n    <Num>\\n        <Type>1</Type>\\n        <Value>9065446</Value>\\n        <Description>浙江省杭州市</Description>\\n    </Num>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取外呼号码列表',
            'summary' => '获取外部热线号码列表。',
        ],
        'GetTagList' => [
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
                    'name' => 'EntityId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 9.223372036854776E+18,
                        'minLength' => -1,
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'maxLength' => 9.223372036854776E+18,
                        'minLength' => -1,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ScenarioCode' => [
                                            'type' => 'string',
                                        ],
                                        'TagGroupCode' => [
                                            'type' => 'string',
                                        ],
                                        'TagGroupName' => [
                                            'type' => 'string',
                                        ],
                                        'TagValues' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Status' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Description' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TagName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TagGroupCode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TagCode' => [
                                                        'type' => 'string',
                                                    ],
                                                    'TagGroupName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'EntityRelationNumber' => [
                                                        'type' => 'string',
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
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetTicketByCaseId' => [
            'summary' => '查询工单信息-DB',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CaseId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'MemberId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'QuestionId' => [
                                        'type' => 'string',
                                    ],
                                    'QuestionInfo' => [
                                        'type' => 'string',
                                    ],
                                    'MemberName' => [
                                        'type' => 'string',
                                    ],
                                    'SopCateId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'CaseType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Priority' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ExtAttrs' => [
                                        'type' => 'object',
                                    ],
                                    'BuId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'GmtCreate' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'GmtModified' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'EndTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'SrType' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Owner' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'OwnerName' => [
                                        'type' => 'string',
                                    ],
                                    'CaseStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'ChannelId' => [
                                        'type' => 'string',
                                    ],
                                    'DepartmentId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'FromInfo' => [
                                        'type' => 'string',
                                    ],
                                    'ParentId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'CaseId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'GetTicketTemplateSchema' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工单模板id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483648',
                        'minimum' => '0',
                        'example' => '546754',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '工单模板信息',
                                'type' => 'string',
                                'example' => '{\\"buId\\":{\\"title\\":\\"租户编码\\",\\"type\\":\\"string\\"},\\"sopCateId\\":{\\"title\\":\\"业务类目\\"}',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'InvalidOperation',
                        'errorMessage' => 'The operation is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\\\\\\\\\"buId\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"租户编码\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"sopCateId\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"业务类目\\\\\\\\\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\\\\\"buId\\\\\\":{\\\\\\"title\\\\\\":\\\\\\"租户编码\\\\\\",\\\\\\"type\\\\\\":\\\\\\"string\\\\\\"},\\\\\\"sopCateId\\\\\\":{\\\\\\"title\\\\\\":\\\\\\"业务类目\\\\\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询模板元数据',
            'summary' => '根据工单模板id查询工单模板信息。',
        ],
        'GetUserToken' => [
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
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例id',
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '875436',
                    ],
                ],
                [
                    'name' => 'Nick',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '昵称',
                        'description' => '用户昵称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '花花',
                    ],
                ],
                [
                    'name' => 'AppKey',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'appKey',
                        'description' => '应用访问标识(由服务方颁发)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '54678765',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => '错误信息',
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'title' => '鹰眼id',
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-xxxx',
                            ],
                            'Data' => [
                                'description' => 'token信息',
                                'type' => 'object',
                                'properties' => [
                                    'Expires' => [
                                        'description' => 'token失效日期',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1614528000000',
                                    ],
                                    'Token' => [
                                        'description' => '用户访问token',
                                        'type' => 'string',
                                        'example' => 'xxx-xxx-xxxx',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'title' => '是否调用成功',
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                200 => [
                    [
                        'errorCode' => 'AppInvalid',
                        'errorMessage' => 'The APPKEY is invalid.',
                    ],
                    [
                        'errorCode' => 'UserIdNotNull',
                        'errorMessage' => 'UserId cannot be null.',
                    ],
                    [
                        'errorCode' => 'InvalidForeignId',
                        'errorMessage' => 'The ForeignId is invalid.',
                    ],
                ],
                400 => [
                    [
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-xxxx\\",\\n  \\"Data\\": {\\n    \\"Expires\\": 1614528000000,\\n    \\"Token\\": \\"xxx-xxx-xxxx\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-xxxx</RequestId>\\n<Data>\\n    <Expires>1614528000000</Expires>\\n    <Token>xxx-xxx-xxxx</Token>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '获取用户token',
            'summary' => '根据用户id获取访问悉犀客服工作台用户token信息。',
        ],
        'GrantRoles' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'Operator',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'RoleId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => true,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'HangupCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '挂断通话',
            'summary' => '坐席挂机。',
        ],
        'HangupThirdCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '挂断三方通话',
            'summary' => '挂断第三方通话。',
        ],
        'HoldCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '通话保持',
            'summary' => '保持通话。',
        ],
        'JoinThirdCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的acid',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719786',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的jobId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719787',
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的connId',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '7719788',
                    ],
                ],
                [
                    'name' => 'HoldConnectionId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '加入三方通话',
            'summary' => '将第三方加入到通话中。',
        ],
        'ListSkillGroup' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'ChannelType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组渠道类型,有以下枚举值：'."\n"
                            .'0：返回所有技能组'."\n"
                            .'1：热线技能组'."\n"
                            .'2：在线技能组'."\n"
                            .'3：在线+热线技能组'."\n"
                            .'4：工单技能组'."\n"
                            .'5：热线+工单节能组'."\n"
                            .'6：在线+工单技能组'."\n"
                            .'7：在线+热线+工单技能组',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '7',
                        'minimum' => '0',
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '技能组信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'description' => '技能组对外显示名称',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                        'Description' => [
                                            'description' => '技能组描述',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                        'ChannelType' => [
                                            'description' => '技能组渠道类型',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'SkillGroupId' => [
                                            'description' => '技能组id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123456',
                                        ],
                                        'Name' => [
                                            'description' => '技能组名称',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"DisplayName\\": \\"自动化技能组\\",\\n      \\"Description\\": \\"自动化技能组\\",\\n      \\"ChannelType\\": 2,\\n      \\"SkillGroupId\\": 123456,\\n      \\"Name\\": \\"自动化技能组\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <DisplayName>自动化技能组</DisplayName>\\n    <Description>自动化技能组</Description>\\n    <ChannelType>2</ChannelType>\\n    <SkillGroupId>123456</SkillGroupId>\\n    <Name>自动化技能组</Name>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询技能组',
            'summary' => '根据技能组渠道类型查询悉犀客服工作台技能组。',
        ],
        'QueryRelationTickets' => [
            'summary' => '查询相关工单',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CaseId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'CaseType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'SrType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'ChannelId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'ChannelType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'TouchId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'DealId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                    ],
                ],
                [
                    'name' => 'MemberId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'StartCaseGmtCreate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'EndCaseGmtCreate',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'CurrentPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'CnePageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'FirstResult' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'TotalResults' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'TotalPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'NextPage' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'GmtCreate' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'GmtModified' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseGmtCreate' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'GaseGmtModified' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'SrType' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Owner' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseStatus' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'ChannelId' => [
                                            'type' => 'string',
                                        ],
                                        'MemberId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'ExtAttrs' => [
                                            'type' => 'object',
                                        ],
                                        'ChannelType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'QuestionInfo' => [
                                            'type' => 'string',
                                        ],
                                        'QuestionId' => [
                                            'type' => 'string',
                                        ],
                                        'OwnerName' => [
                                            'type' => 'string',
                                        ],
                                        'MemberName' => [
                                            'type' => 'string',
                                        ],
                                        'RefCaseId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseDepartmentId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseBuId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'FormId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TaskStatus' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'CreatorId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'DealId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'GroupId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'Priority' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'Title' => [
                                            'type' => 'string',
                                        ],
                                        'DealTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'DeadLine' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TaskType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'AssignTime' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'UserServiceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'GroupName' => [
                                            'type' => 'string',
                                        ],
                                        'BuId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'DepartmentId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TemplateId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'FromInfo' => [
                                            'type' => 'string',
                                        ],
                                        'ServiceType' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'ParentId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'CaseId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'TaskId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'RelationCase' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'GmtCreate' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'GmtModified' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseGmtCreate' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseGmtModified' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'Owner' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseStatus' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'ChannelId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MemberId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'ExtAttrs' => [
                                                        'type' => 'object',
                                                    ],
                                                    'ChannelType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'QuestionInfoQuestionInfo' => [
                                                        'type' => 'string',
                                                    ],
                                                    'QuestionId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'OwnerName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'MemberName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'RefCaseId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseDepartmentId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseBuId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'FormId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'TaskStatus' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'CreatorId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'DealId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'GroupId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'Priority' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'Title' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DealTime' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'DeadLine' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'TaskType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'AssignTime' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'UserServiceId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'GroupName' => [
                                                        'type' => 'string',
                                                    ],
                                                    'BuId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'DepartmentId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'TemplateId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'FromInfo' => [
                                                        'type' => 'string',
                                                    ],
                                                    'ServiceType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'ParentId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'CaseId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'TaskId' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
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
            'responseDemo' => '',
        ],
        'QueryRingDetailList' => [
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
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页大小（默认为20）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '当前页（默认为1）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始时间戳（毫秒）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '1614824872',
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '结束时间戳（毫秒）',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '1614824972',
                    ],
                ],
                [
                    'name' => 'CallOutStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '更新的回访状态，有以下枚举'."\n"
                            .'0：未回访'."\n"
                            .'1：无人接听'."\n"
                            .'2：需再次回访'."\n"
                            .'3：号码无效'."\n"
                            .'4：回访成功'."\n"
                            .'5：无需回访',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '扩展字段，json字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"isCallBack\\":\\"true\\"}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'FromPhoneNumList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '主叫号码列表-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ToPhoneNumList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '被叫号码列表-用户手机号码、客服坐席号码、机器号码等',
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '呼损数据信息',
                                'type' => 'string',
                                'example' => '{"buId": 0,"gmtModified": "2021-03-08T11:10Z","lstVisitCnt": 3,"fromPhoneNum": "130196","gmtCreate": "2021-03-08T09:52Z","uniqueBizId": "13019651928","toPhoneNum": "057126","dateId": "20210308","lstVisitTime": "2021-03-08 10:17:48", "id":555555 ,  "callOutStatus": "4" }',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"buId\\\\\\": 0,\\\\\\"gmtModified\\\\\\": \\\\\\"2021-03-08T11:10Z\\\\\\",\\\\\\"lstVisitCnt\\\\\\": 3,\\\\\\"fromPhoneNum\\\\\\": \\\\\\"130196\\\\\\",\\\\\\"gmtCreate\\\\\\": \\\\\\"2021-03-08T09:52Z\\\\\\",\\\\\\"uniqueBizId\\\\\\": \\\\\\"13019651928\\\\\\",\\\\\\"toPhoneNum\\\\\\": \\\\\\"057126\\\\\\",\\\\\\"dateId\\\\\\": \\\\\\"20210308\\\\\\",\\\\\\"lstVisitTime\\\\\\": \\\\\\"2021-03-08 10:17:48\\\\\\", \\\\\\"id\\\\\\":555555 ,  \\\\\\"callOutStatus\\\\\\": \\\\\\"4\\\\\\" }\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"buId\\": 0,\\"gmtModified\\": \\"2021-03-08T11:10Z\\",\\"lstVisitCnt\\": 3,\\"fromPhoneNum\\": \\"130196\\",\\"gmtCreate\\": \\"2021-03-08T09:52Z\\",\\"uniqueBizId\\": \\"13019651928\\",\\"toPhoneNum\\": \\"057126\\",\\"dateId\\": \\"20210308\\",\\"lstVisitTime\\": \\"2021-03-08 10:17:48\\", \\"id\\":555555 ,  \\"callOutStatus\\": \\"4\\" }</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询呼损数据',
            'summary' => '查询呼损数据。',
        ],
        'QueryServiceConfig' => [
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'ViewCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视图编码，有以下枚举：'."\n"
                            .'在线：serviceContextViewChatStand'."\n"
                            .'热线：serviceContextViewHotlineStand',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'serviceContextViewChatStand',
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补充参数，JSON类型字符串',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{"memberId":64007246863,"channelType":2,"channelId":"3a184074ee34426795f3986d306b2689"},"sdkInstance":"9JKPvcl8xaN2"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '服务摘要信息',
                                'type' => 'string',
                                'example' => '{"binds": {"hk9xtvX6usP2": {"ref": {"fieldCode": "historyCntOf7","label": "7天内服务次数","type": "object","boCode": "serviceContextObj"},"jPath": "children","source": "data"},"hYUi5kwGf0Pm": {"ref": {"fieldCode": "groupName","label": "进线技能组","type": "object","boCode": "serviceContextObj"},"jPath": "children","source": "data"}',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                202 => [
                    [
                        'errorCode' => 'GetTenantIdFailed',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'callRnderFailed',
                        'errorMessage' => 'Failed to call the viewRenderService.Render operation.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InstanceIdCannotBeNull',
                        'errorMessage' => 'You must specify InstanceId.',
                    ],
                    [
                        'errorCode' => 'ViewCodeNotNull',
                        'errorMessage' => 'You must specify ViewCode.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"binds\\\\\\": {\\\\\\"hk9xtvX6usP2\\\\\\": {\\\\\\"ref\\\\\\": {\\\\\\"fieldCode\\\\\\": \\\\\\"historyCntOf7\\\\\\",\\\\\\"label\\\\\\": \\\\\\"7天内服务次数\\\\\\",\\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\\\"boCode\\\\\\": \\\\\\"serviceContextObj\\\\\\"},\\\\\\"jPath\\\\\\": \\\\\\"children\\\\\\",\\\\\\"source\\\\\\": \\\\\\"data\\\\\\"},\\\\\\"hYUi5kwGf0Pm\\\\\\": {\\\\\\"ref\\\\\\": {\\\\\\"fieldCode\\\\\\": \\\\\\"groupName\\\\\\",\\\\\\"label\\\\\\": \\\\\\"进线技能组\\\\\\",\\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\\\"boCode\\\\\\": \\\\\\"serviceContextObj\\\\\\"},\\\\\\"jPath\\\\\\": \\\\\\"children\\\\\\",\\\\\\"source\\\\\\": \\\\\\"data\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"binds\\": {\\"hk9xtvX6usP2\\": {\\"ref\\": {\\"fieldCode\\": \\"historyCntOf7\\",\\"label\\": \\"7天内服务次数\\",\\"type\\": \\"object\\",\\"boCode\\": \\"serviceContextObj\\"},\\"jPath\\": \\"children\\",\\"source\\": \\"data\\"},\\"hYUi5kwGf0Pm\\": {\\"ref\\": {\\"fieldCode\\": \\"groupName\\",\\"label\\": \\"进线技能组\\",\\"type\\": \\"object\\",\\"boCode\\": \\"serviceContextObj\\"},\\"jPath\\": \\"children\\",\\"source\\": \\"data\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '查询服务配置',
            'summary' => '根据视图code获取服务摘要信息。',
        ],
        'QuerySkillGroups' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页（默认为1）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页大小（默认为20）',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '自动化技能组',
                    ],
                ],
                [
                    'name' => 'GroupType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组类型,有以下枚举值： 1：热线 2：在线'."\n"
                            .'4：工单',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '-1',
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'OnePageSize' => [
                                'description' => '每页的数量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'TotalPage' => [
                                'description' => '总页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '4',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'CurrentPage' => [
                                'description' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalResults' => [
                                'description' => '总共记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '76',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'description' => '技能组对外显示名称',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                        'Description' => [
                                            'description' => '技能组描述',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                        'ChannelType' => [
                                            'description' => '技能组渠道类型',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'SkillGroupName' => [
                                            'description' => '技能组名称',
                                            'type' => 'string',
                                            'example' => '自动化技能组',
                                        ],
                                        'SkillGroupId' => [
                                            'description' => '技能组id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '123456',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 20,\\n  \\"TotalPage\\": 4,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"CurrentPage\\": 1,\\n  \\"TotalResults\\": 76,\\n  \\"Data\\": [\\n    {\\n      \\"DisplayName\\": \\"自动化技能组\\",\\n      \\"Description\\": \\"自动化技能组\\",\\n      \\"ChannelType\\": 2,\\n      \\"SkillGroupName\\": \\"自动化技能组\\",\\n      \\"SkillGroupId\\": 123456\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>20</OnePageSize>\\n<TotalPage>4</TotalPage>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<CurrentPage>1</CurrentPage>\\n<TotalResults>76</TotalResults>\\n<Data>\\n    <DisplayName>自动化技能组</DisplayName>\\n    <Description>自动化技能组</Description>\\n    <ChannelType>2</ChannelType>\\n    <SkillGroupName>自动化技能组</SkillGroupName>\\n    <SkillGroupId>123456</SkillGroupId>\\n</Data>","errorExample":""}]',
            'title' => '查询技能组',
            'summary' => '通过技能组渠道类型、技能组名称、技能组id查询悉犀客服工作台技能组列表。',
        ],
        'RemoveSkillGroup' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '技能组id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
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
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '删除技能组',
            'summary' => '根据技能组id删除悉犀客服工作台技能组。',
        ],
        'SendOutboundCommand' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'CallingNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'default' => '-1',
                    ],
                ],
                [
                    'name' => 'CalledNumber',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'CustomerInfo',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'StartCall' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线外呼主叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9065446',
                    ],
                ],
                [
                    'name' => 'Callee',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线外呼被叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '136098792',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '发起外呼',
            'summary' => '发起外呼。',
        ],
        'StartCallV2' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '坐席账号名称（坐席登录名）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线外呼主叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '9065446',
                    ],
                ],
                [
                    'name' => 'Callee',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '热线外呼被叫号码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '136098792',
                    ],
                ],
                [
                    'name' => 'JsonMsg',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'JsonMsg',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"外呼原因":"工单处理"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '发起外呼',
            'summary' => '发起外呼V2。',
        ],
        'StartChatWork' => [
            'summary' => '修改在线客服状态为上班。',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'instanceId',
                        'description' => '实例id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ccc_xspace***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'accountName',
                        'description' => '坐席账号名称，实例内唯一（登录名）',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'account1',
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
                                'title' => 'message',
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxx',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-xxxx',
                            ],
                            'HttpStatusCode' => [
                                'title' => 'httpStatusCode',
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Data' => [
                                'title' => 'data',
                                'description' => ' 调用结果',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Agent.NotFound',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'description' => '接口调用是否成功',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-xxxx\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"1\\",\\n  \\"Code\\": \\"Agent.NotFound\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartChatWorkResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-xxxx</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>1</Data>\\n    <Code>Agent.NotFound</Code>\\n    <Success>true</Success>\\n</StartChatWorkResponse>","errorExample":""}]',
            'title' => '在线客服上班',
        ],
        'UpdateCustomer' => [
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
                    'name' => 'ProdLineId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '产品线ID',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '10552599',
                    ],
                ],
                [
                    'name' => 'BizType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'BizType',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'xp_commerce_aliyun',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '张三',
                    ],
                ],
                [
                    'name' => 'TypeCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户类型',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '电话号码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1560000xxxx',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'ManagerName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '管理人姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '管理人',
                    ],
                ],
                [
                    'name' => 'Contacter',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建人',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123',
                    ],
                ],
                [
                    'name' => 'Industry',
                    'in' => 'query',
                    'schema' => [
                        'description' => '行业',
                        'type' => 'string',
                        'required' => false,
                        'example' => '服饰',
                    ],
                ],
                [
                    'name' => 'Position',
                    'in' => 'query',
                    'schema' => [
                        'description' => '职位',
                        'type' => 'string',
                        'required' => false,
                        'example' => '主管',
                    ],
                ],
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Dingding',
                    'in' => 'query',
                    'schema' => [
                        'description' => '钉钉账号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123yiyo',
                    ],
                ],
                [
                    'name' => 'OuterId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部id',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10000011',
                    ],
                ],
                [
                    'name' => 'OuterIdType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '外部类型',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'CustomerId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '24027',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '客户数据',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '{"CustomerId":"24027"}',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 0,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新客户信息',
            'summary' => '更新客户。',
        ],
        'UpdateEntityTagRelation' => [
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
                    'name' => 'EntityTagParam',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'maxLength' => 9.223372036854776E+18,
                        'minLength' => -1,
                        'default' => '20',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'UpdateRingStatus' => [
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
                    'name' => 'UniqueBizId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '数据唯一主键',
                        'type' => 'string',
                        'required' => false,
                        'example' => '78604',
                    ],
                ],
                [
                    'name' => 'CallOutStatus',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '更新的回访状态，有以下枚举'."\n"
                            .'0：未回访'."\n"
                            .'1：无人接听'."\n"
                            .'2：需再次回访'."\n"
                            .'3：号码无效'."\n"
                            .'4：回访成功'."\n"
                            .'5：无需回访',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4',
                    ],
                ],
                [
                    'name' => 'Extra',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '扩展字段，json字符串',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"isCallBack\\":\\"true\\"}',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Data' => [
                                'description' => '查询结果，json字符串',
                                'type' => 'string',
                                'example' => '{"BizId": "78604"}',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"BizId\\\\\\": \\\\\\"78604\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"BizId\\": \\"78604\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新外呼状态',
            'summary' => '更新回访状态。',
        ],
        'UpdateRole' => [
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'RoleId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'RoleName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Operator',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PermissionId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'required' => false,
                        'maxItems' => 200,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'UpdateSkillGroup' => [
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'SkillGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组id',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '9223372036854775807',
                        'minimum' => '1',
                        'example' => '123456',
                    ],
                ],
                [
                    'name' => 'SkillGroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '自动化测试',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '自动化测试',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '技能组对外显示名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '自动化测试',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'ChannelType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '渠道类型',
                        'description' => '渠道类型',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误描述',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                            'Code' => [
                                'description' => '错误编码',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidInstanceId',
                        'errorMessage' => 'The specified instance is unavailable or does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
            'title' => '更新技能组',
            'summary' => '根据技能组id修改悉犀客服工作台技能组信息。',
        ],
        'ListAllHotLineSkillGroups' => [
            'summary' => '查询某个租户下所有热线类型技能组及技能组分类',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'DepGroup' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'DepGroupName' => [
                                                    'type' => 'string',
                                                ],
                                                'DepGroupId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                            ],
                                        ],
                                        'SkillGroupAgents' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'SkillGroup' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'DisplayName' => [
                                                                'type' => 'string',
                                                            ],
                                                            'SkillGroupId' => [
                                                                'type' => 'integer',
                                                                'format' => 'int64',
                                                            ],
                                                        ],
                                                    ],
                                                    'Agents' => [
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'AccountName' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'DisplayName' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'AgentId' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                ],
                                                                'Status' => [
                                                                    'type' => 'integer',
                                                                    'format' => 'int64',
                                                                ],
                                                                'Acid' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'JobId' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'ConnId' => [
                                                                    'type' => 'string',
                                                                ],
                                                                'CustomerPhone' => [
                                                                    'type' => 'string',
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
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                ],
            ],
        ],
        'AnwserAgentMonitor' => [
            'summary' => '接通坐席监听',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'clientToken',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StsTokenCallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'InstanceId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AccountName',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CallId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'JobId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ConnectionId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'message',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetForeignIdByCMSId' => [
            'summary' => '通过CMSId获取ForeignId',
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
            'parameters' => [
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CustomerTypeId' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Avatar' => [
                                        'type' => 'string',
                                    ],
                                    'Gender' => [
                                        'type' => 'string',
                                    ],
                                    'ForeignId' => [
                                        'type' => 'string',
                                    ],
                                    'UserId' => [
                                        'type' => 'string',
                                    ],
                                    'Nick' => [
                                        'type' => 'string',
                                    ],
                                    'Anonymity' => [
                                        'type' => 'boolean',
                                    ],
                                    'Phone' => [
                                        'type' => 'string',
                                    ],
                                    'Code' => [
                                        'type' => 'string',
                                    ],
                                    'Success' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'HangUpAgentMonitor' => [
            'summary' => '挂断坐席监听',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'clientToken',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StsTokenCallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'InstanceId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AccountName',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'CallId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'JobId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ConnectionId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'message',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartAgentMonitor' => [
            'summary' => '发起坐席监听',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'CallerParentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerParentId',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'requestId',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'clientToken',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerType',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'callerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StsTokenCallerUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'stsTokenCallerUid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'param1',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'param2',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CallId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'param4',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'param5',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ConnectionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'param6',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'result',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'title' => 'message',
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'title' => 'requestId',
                                'type' => 'string',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'type' => 'string',
                            ],
                            'Success' => [
                                'title' => 'success',
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BindAgentHotlinePhone' => [
            'summary' => '更新小二扩展手机号信息。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '手机号',
                        'description' => '手机号',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '136********',
                    ],
                ],
                [
                    'name' => 'VerifyCode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '验证码',
                        'description' => '验证码',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123456',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Void>',
                        'description' => 'Result<Void>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误编码，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'NoTenantFound',
                            ],
                            'Message' => [
                                'description' => '错误描述，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<BindAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</BindAgentHotlinePhoneResponse>","errorExample":""}]',
            'title' => '绑定坐席手机号',
        ],
        'GetHotlineAgentDetailWithChannel' => [
            'summary' => '同 GetHotlineAgentDetail，返回上班渠道',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
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
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'AgentStatusCode' => [
                                        'type' => 'string',
                                    ],
                                    'Token' => [
                                        'type' => 'string',
                                    ],
                                    'AgentId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Assigned' => [
                                        'type' => 'boolean',
                                    ],
                                    'RestType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'AgentStatus' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'TenantId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'WorkChannel' => [
                                        'title' => '上班渠道，PC电脑上班，PSTN手机上班',
                                        'type' => 'string',
                                    ],
                                    'ExtAttr' => [
                                        'title' => '扩展字段',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
        ],
        'GetAgentHotlinePhone' => [
            'summary' => '获取小二扩展信息。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<String>',
                        'description' => 'Result<String>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误编码，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'NoTenantFound',
                            ],
                            'Message' => [
                                'description' => '错误描述，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'Data' => [
                                'title' => '手机号',
                                'description' => '手机号',
                                'type' => 'string',
                                'example' => '136********',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"Data\\": \\"136********\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <Data>136********</Data>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</GetAgentHotlinePhoneResponse>","errorExample":""}]',
            'title' => '查询坐席绑定手机号',
        ],
        'GetAgentHotline' => [
            'summary' => '查询热线坐席信息与热线技能组',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Agent>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'TenantId' => [
                                        'title' => '租户ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'AgentId' => [
                                        'title' => '小二ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'AccountName' => [
                                        'title' => '坐席账号名称（坐席登录名）',
                                        'type' => 'string',
                                    ],
                                    'DisplayName' => [
                                        'title' => 'XP账号对外展示名称',
                                        'type' => 'string',
                                    ],
                                    'GroupList' => [
                                        'title' => '热线技能组',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'SkillGroupId' => [
                                                    'title' => '技能组ID',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                ],
                                                'Name' => [
                                                    'title' => '技能组名称',
                                                    'type' => 'string',
                                                ],
                                                'DisplayName' => [
                                                    'title' => '技能组对外显示名',
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'DepartmentId' => [
                                        'title' => '部门ID',
                                        'type' => 'string',
                                    ],
                                    'AgentPhone' => [
                                        'title' => '坐席绑定手机号',
                                        'type' => 'string',
                                    ],
                                    'SkillGroups' => [
                                        'title' => '热线技能组，格式："[123,456,......,789]"',
                                        'type' => 'string',
                                    ],
                                    'ExtAttr' => [
                                        'title' => '扩展字段',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
        ],
        'UnbindAgentHotlinePhone' => [
            'summary' => '更新小二扩展手机号信息为空。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Void>',
                        'description' => 'Result<Void>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误编码，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'NoTenantFound',
                            ],
                            'Message' => [
                                'description' => '错误描述，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</UnbindAgentHotlinePhoneResponse>","errorExample":""}]',
            'title' => '解绑坐席手机号',
        ],
        'GetAgentWorkStatus' => [
            'summary' => '获取坐席签入签出状态查询。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号的映射',
                        'description' => '坐席账号名称(唯一值)，外部账号与XP账号的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '123@123.com',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<AgentHotlineWorkStatus>',
                        'description' => 'Result<AgentHotlineWorkStatus>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误编码，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'NoTenantFound',
                            ],
                            'Message' => [
                                'description' => '错误描述，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'xxxxx',
                            ],
                            'Data' => [
                                'description' => '坐席上班状态对象',
                                'type' => 'object',
                                'properties' => [
                                    'TenantId' => [
                                        'title' => '租户ID',
                                        'description' => '租户ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '905',
                                    ],
                                    'AgentId' => [
                                        'title' => '小二ID',
                                        'description' => '小二ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1059054',
                                    ],
                                    'AccountName' => [
                                        'title' => '坐席账号名称（坐席登录名）',
                                        'description' => '坐席账号名称（坐席登录名）',
                                        'type' => 'string',
                                        'example' => '123@123.com',
                                    ],
                                    'AgentStatusCode' => [
                                        'title' => '坐席上班状态code',
                                        'description' => '坐席上班状态code',
                                        'type' => 'string',
                                        'example' => 'AgentCheckin',
                                    ],
                                    'AgentStatusDesc' => [
                                        'title' => '坐席上班状态描述',
                                        'description' => '坐席上班状态描述',
                                        'type' => 'string',
                                        'example' => '坐席签入状态',
                                    ],
                                    'WorkChannel' => [
                                        'title' => '上班渠道，PSTN手机上班，PC电脑上班',
                                        'description' => '上班渠道，PSTN手机上班，PC电脑上班',
                                        'type' => 'string',
                                        'example' => 'PC',
                                    ],
                                    'ExtAttr' => [
                                        'title' => '扩展字段',
                                        'description' => '扩展字段',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"TenantId\\": 905,\\n    \\"AgentId\\": 1059054,\\n    \\"AccountName\\": \\"123@123.com\\",\\n    \\"AgentStatusCode\\": \\"AgentCheckin\\",\\n    \\"AgentStatusDesc\\": \\"坐席签入状态\\",\\n    \\"WorkChannel\\": \\"PC\\",\\n    \\"ExtAttr\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAgentWorkStatusResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <TenantId>905</TenantId>\\n        <AgentId>1059054</AgentId>\\n        <AccountName>123@123.com</AccountName>\\n        <AgentStatusCode>AgentCheckin</AgentStatusCode>\\n        <AgentStatusDesc>坐席签入状态</AgentStatusDesc>\\n        <WorkChannel>PC</WorkChannel>\\n    </Data>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</GetAgentWorkStatusResponse>","errorExample":""}]',
            'title' => '查询热线坐席上班状态',
        ],
        'SendVerificationCode' => [
            'summary' => '坐席绑定手机号，发送验证码短信。',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'description' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'ccc_xp_pre-cn-***',
                    ],
                ],
                [
                    'name' => 'Phone',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '手机号（坐席绑定手机号码）',
                        'description' => '手机号（坐席绑定手机号码）',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '136********',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<Void>',
                        'description' => 'Result<Void>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'description' => '接口调用是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '错误编码，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'NoTenantFound',
                            ],
                            'Message' => [
                                'description' => '错误描述，当success为true时，该字段为空',
                                'type' => 'string',
                                'example' => 'xxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID，用于跟踪错误原因',
                                'type' => 'string',
                                'example' => 'EE338D98-9BD3-4413-B165',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</SendVerificationCodeResponse>","errorExample":""}]',
            'title' => '发送验证码短信',
            'description' => '发送验证码时间窗口：2分钟 (即：2分钟之内，一个号码不允许重复发) ；'."\n"
                .'验证码有效时间：15分钟 ；'."\n"
                .'发送次数验证：6个小时内相同手机号码发送验证码次数不超过20次 ；',
        ],
        'StartHotlineWork' => [
            'summary' => '热线坐席上班',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'WorkChannel',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '上班渠道，枚举值：(手机上班)PSTN ;  (PC上班)PC',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'SkillGroups',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '坐席热线技能组，格式："[123,456,......,789]"',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Result<AgentHotlineWorkStatus>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Message' => [
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'object',
                                'properties' => [
                                    'TenantId' => [
                                        'title' => '租户ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'AgentId' => [
                                        'title' => '小二ID',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'AccountName' => [
                                        'title' => '坐席账号名称（坐席登录名）',
                                        'type' => 'string',
                                    ],
                                    'AgentStatusCode' => [
                                        'title' => '坐席上班状态code',
                                        'type' => 'string',
                                    ],
                                    'AgentStatusDesc' => [
                                        'title' => '坐席上班状态描述',
                                        'type' => 'string',
                                    ],
                                    'WorkChannel' => [
                                        'title' => '上班渠道，PSTN手机上班，PC电脑上班',
                                        'type' => 'string',
                                    ],
                                    'AgentToken' => [
                                        'title' => '前端token',
                                        'type' => 'string',
                                    ],
                                    'ExtAttr' => [
                                        'title' => '扩展字段',
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
        ],
        'FinishHotlineServiceNew' => [
            'summary' => '热线下班接口，参考FinishHotlineService，坐席通话中下班失败',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'AccountName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
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
                            'Message' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'Code' => [
                                'type' => 'string',
                            ],
                            'Success' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                    [
                        'errorCode' => 'NoAgentFound',
                        'errorMessage' => 'The specified agent does not exist.',
                    ],
                ],
            ],
        ],
        'GetOnlineTouchSessionList' => [
            'summary' => '查询在线会话记录信息列表【以touch为维度】',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClientToken',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '实例ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'GroupIds',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'title' => '技能组id',
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                        'maxItems' => 10,
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '开始时间【会话接通时间筛选范围】，格式：时间戳(毫秒)',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'EndDate',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '结束时间【会话接通时间筛选范围】，格式：时间戳(毫秒)',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '当前页',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '页数，默认10，最大值30',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'PageResult<OnlineSessionInfo>',
                        'type' => 'object',
                        'properties' => [
                            'Success' => [
                                'type' => 'boolean',
                            ],
                            'Code' => [
                                'title' => '错误码',
                                'type' => 'string',
                            ],
                            'Message' => [
                                'title' => '错误信息',
                                'type' => 'string',
                            ],
                            'Data' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'UserForeignId' => [
                                            'title' => '外部会员ID',
                                            'type' => 'string',
                                        ],
                                        'SessionId' => [
                                            'title' => '会话ID，消息记录对象MessageInfo实例的唯一编码，与接触编码TouchId为1对多关系',
                                            'type' => 'string',
                                        ],
                                        'TouchId' => [
                                            'title' => '接触编码，用户进线后，多次转交到不同人工，会生成多个接触编码',
                                            'type' => 'string',
                                        ],
                                        'ChannelId' => [
                                            'title' => '当次进线编码，同sid',
                                            'type' => 'string',
                                        ],
                                        'GroupId' => [
                                            'title' => '技能组ID',
                                            'type' => 'string',
                                        ],
                                        'GroupName' => [
                                            'title' => '技能组名称',
                                            'type' => 'string',
                                        ],
                                        'FirstTime' => [
                                            'title' => '会话接通时间，时间戳',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'MessageInfo' => [
                                            'title' => '对话详情记录列表',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'MessageId' => [
                                                        'title' => '消息序列号',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                    ],
                                                    'SenderId' => [
                                                        'title' => '消息发送人ID',
                                                        'type' => 'string',
                                                    ],
                                                    'SenderName' => [
                                                        'title' => '消息发送人名称',
                                                        'type' => 'string',
                                                    ],
                                                    'SenderType' => [
                                                        'title' => '消息发送人，枚举值：1会员，2客服',
                                                        'type' => 'string',
                                                    ],
                                                    'Content' => [
                                                        'title' => '消息内容',
                                                        'type' => 'string',
                                                    ],
                                                    'GmtCreated' => [
                                                        'title' => '消息发送实际，格式：时间戳',
                                                        'type' => 'string',
                                                    ],
                                                    'Status' => [
                                                        'title' => '消息日志的状态，0默认，50撤回',
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'type' => 'string',
                            ],
                            'HttpStatusCode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'PageNo' => [
                                'title' => '当前页',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'TotalResults' => [
                                'title' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'PageSize' => [
                                'title' => '页数',
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                500 => [
                    [
                        'errorCode' => 'NoTenantFound',
                        'errorMessage' => 'The specified tenant does not exist.',
                    ],
                    [
                        'errorCode' => 'SystemError',
                        'errorMessage' => 'A system error occurred. Please contact the administrator.',
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'scsp.aliyuncs.com',
        ],
    ],
];
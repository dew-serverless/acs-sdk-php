<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'scsp',
    'version' => '2020-07-02',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 102934,
      'title' => '薪资',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryHotlineDashboard',
      ),
    ),
    1 => 
    array (
      'id' => 102936,
      'title' => '坐席',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryServicerById',
        1 => 'QueryServicerByDepartmentAndMixName',
        2 => 'CreateAgent',
        3 => 'DeleteAgent',
        4 => 'UpdateAgent',
        5 => 'GetAgent',
        6 => 'GetHotlineAgentDetail',
        7 => 'ListAgentBySkillGroupId',
        8 => 'ListOutboundPhoneNumber',
        9 => 'GetHotlineWaitingNumber',
        10 => 'TransferCallToAgent',
      ),
    ),
    2 => 
    array (
      'id' => 102939,
      'title' => '部门',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetAllDepartment',
      ),
    ),
    3 => 
    array (
      'id' => 102941,
      'title' => '热线',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateOuterCallCenterData',
        1 => 'StartHotlineService',
        2 => 'ListHotlineRecord',
        3 => 'QueryHotlineSession',
        4 => 'GetHotlineAgentDetailReport',
        5 => 'GetHotlineAgentStatus',
        6 => 'GetHotlineGroupDetailReport',
        7 => 'GetOuterCallCenterDataList',
        8 => 'SendHotlineHeartBeat',
        9 => 'SuspendHotlineService',
        10 => 'TransferCallToPhone',
        11 => 'TransferCallToSkillGroup',
        12 => 'TransferToThirdCall',
        13 => 'FinishHotlineService',
      ),
    ),
    4 => 
    array (
      'id' => 102966,
      'title' => '角色',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRole',
        1 => 'DisableRole',
        2 => 'EnableRole',
      ),
    ),
    5 => 
    array (
      'id' => 102970,
      'title' => '工单',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTicket',
        1 => 'UpdateTicket',
        2 => 'QueryTicketActions',
        3 => 'QueryTicketCount',
        4 => 'QueryTickets',
        5 => 'SearchTicketById',
        6 => 'SearchTicketByPhone',
        7 => 'SearchTicketList',
        8 => 'AssignTicket',
        9 => 'CloseTicket',
        10 => 'ExecuteActivity',
      ),
    ),
    6 => 
    array (
      'id' => 102982,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AnswerCall',
        1 => 'AppMessagePush',
        2 => 'ChangeChatAgentStatus',
        3 => 'CreateCustomer',
        4 => 'CreateEntityIvrRoute',
        5 => 'CreateSkillGroup',
        6 => 'CreateSubTicket',
        7 => 'CreateThirdSsoAgent',
        8 => 'createTicketWithBizData',
        9 => 'DeleteEntityRoute',
        10 => 'EditEntityRoute',
        11 => 'FetchCall',
        12 => 'GenerateWebSocketSign',
        13 => 'GetAuthInfo',
        14 => 'GetByForeignId',
        15 => 'GetCallsPerDay',
        16 => 'GetCMSIdByForeignId',
        17 => 'GetEntityRoute',
        18 => 'GetEntityRouteList',
        19 => 'GetEntityTagRelation',
        20 => 'GetGrantedRoleIds',
        21 => 'GetNumLocation',
        22 => 'GetOutbounNumList',
        23 => 'GetTagList',
        24 => 'GetTicketByCaseId',
        25 => 'GetTicketTemplateSchema',
        26 => 'GetUserToken',
        27 => 'GrantRoles',
        28 => 'HangupCall',
        29 => 'HangupThirdCall',
        30 => 'HoldCall',
        31 => 'JoinThirdCall',
        32 => 'ListSkillGroup',
        33 => 'QueryRelationTickets',
        34 => 'QueryRingDetailList',
        35 => 'QueryServiceConfig',
        36 => 'QuerySkillGroups',
        37 => 'RemoveSkillGroup',
        38 => 'SendOutboundCommand',
        39 => 'StartCall',
        40 => 'StartCallV2',
        41 => 'StartChatWork',
        42 => 'UpdateCustomer',
        43 => 'UpdateEntityTagRelation',
        44 => 'UpdateRingStatus',
        45 => 'UpdateRole',
        46 => 'UpdateSkillGroup',
        47 => 'ListAllHotLineSkillGroups',
      ),
    ),
    7 => 
    array (
      'id' => 168872,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'AnwserAgentMonitor',
        1 => 'GetForeignIdByCMSId',
        2 => 'HangUpAgentMonitor',
        3 => 'StartAgentMonitor',
      ),
    ),
    8 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'BindAgentHotlinePhone',
        1 => 'GetHotlineAgentDetailWithChannel',
        2 => 'GetAgentHotlinePhone',
        3 => 'GetAgentHotline',
        4 => 'UnbindAgentHotlinePhone',
        5 => 'GetAgentWorkStatus',
        6 => 'SendVerificationCode',
        7 => 'StartHotlineWork',
        8 => 'FinishHotlineServiceNew',
        9 => 'GetOnlineTouchSessionList',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
    ),
  ),
  'apis' => 
  array (
    'QueryHotlineDashboard' => 
    array (
      'summary' => '调用QueryHotlineDashboard接口查询热线看板信息。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => 'AICCS实例ID，登陆智能联络中心控制台(https://help.aliyun.com/product/126730.html)上可查看。',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_***',
          ),
        ),
        1 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1636473600000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'j结束时间',
            'description' => '结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1636473600000',
          ),
        ),
        3 => 
        array (
          'name' => 'DepartmentIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '部门标识列表',
            'description' => '部门ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '10',
            ),
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'ServicerIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '坐席标识列表',
            'description' => '坐席ID集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '10',
            ),
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'SortFieldList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '排序字段集合',
            'description' => '排序字段集合。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
              'required' => false,
              'example' => '10',
            ),
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'CurrentPageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码',
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页面大小',
            'description' => '页面大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
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
            'description' => '请求响应数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'ccc_xp_pre-cn-***',
              ),
              'Success' => 
              array (
                'description' => '接口调用状态。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '返回状态码，200为返回成功',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '返回状态描述。',
                'type' => 'string',
                'example' => 'successful',
              ),
              'Data' => 
              array (
                'description' => 'Page数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'title' => '查询结果条数',
                    'description' => '查询结果条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'Results' => 
                  array (
                    'description' => '热线看板数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '热线看板数据。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DateId' => 
                        array (
                          'title' => '日期',
                          'description' => '日期。',
                          'type' => 'string',
                          'example' => '20211101',
                        ),
                        'ServicerId' => 
                        array (
                          'title' => '坐席标识',
                          'description' => '坐席ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '727272',
                        ),
                        'ServicerShowName' => 
                        array (
                          'title' => '坐席对外展示名称',
                          'description' => '坐席对外展示名称。',
                          'type' => 'string',
                          'example' => '加油-小高',
                        ),
                        'ServicerRealName' => 
                        array (
                          'title' => '坐席真实姓名',
                          'description' => '坐席真实姓名。',
                          'type' => 'string',
                          'example' => '加油-小高',
                        ),
                        'DepartmentId' => 
                        array (
                          'title' => '部门标识',
                          'description' => '部门ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '11212121',
                        ),
                        'DepartmentName' => 
                        array (
                          'title' => '部门名称',
                          'description' => '部门名称。',
                          'type' => 'string',
                          'example' => '加油组',
                        ),
                        'EffectiveInCalls' => 
                        array (
                          'title' => '有效呼入量',
                          'description' => '有效呼入量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'EffectiveInServiceNotes' => 
                        array (
                          'title' => '有效呼入小计量',
                          'description' => '有效呼入小计量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '9',
                        ),
                        'EffectiveOutCalls' => 
                        array (
                          'title' => '有效外呼量',
                          'description' => '有效外呼量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '20',
                        ),
                        'EffectiveOutServiceNotes' => 
                        array (
                          'title' => '有效外呼小计量',
                          'description' => '有效外呼小计量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '12',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'http状态编码',
                'description' => 'http状态编码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"ccc_xp_pre-cn-***\\",\\n  \\"Success\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"successful\\",\\n  \\"Data\\": {\\n    \\"Total\\": 100,\\n    \\"Results\\": [\\n      {\\n        \\"DateId\\": \\"20211101\\",\\n        \\"ServicerId\\": 727272,\\n        \\"ServicerShowName\\": \\"加油-小高\\",\\n        \\"ServicerRealName\\": \\"加油-小高\\",\\n        \\"DepartmentId\\": 11212121,\\n        \\"DepartmentName\\": \\"加油组\\",\\n        \\"EffectiveInCalls\\": 10,\\n        \\"EffectiveInServiceNotes\\": 9,\\n        \\"EffectiveOutCalls\\": 20,\\n        \\"EffectiveOutServiceNotes\\": 12\\n      }\\n    ]\\n  },\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<QueryHotlineDashboardResponse>\\n    <RequestId>ccc_xp_pre-cn-***</RequestId>\\n    <Success>true</Success>\\n    <Code>200</Code>\\n    <Message>successful</Message>\\n    <Data>\\n        <Total>100</Total>\\n        <Results>\\n            <DateId>20211101</DateId>\\n            <ServicerId>727272</ServicerId>\\n            <ServicerShowName>加油-小高</ServicerShowName>\\n            <ServicerRealName>加油-小高</ServicerRealName>\\n            <DepartmentId>11212121</DepartmentId>\\n            <DepartmentName>加油组</DepartmentName>\\n            <EffectiveInCalls>10</EffectiveInCalls>\\n            <EffectiveInServiceNotes>9</EffectiveInServiceNotes>\\n            <EffectiveOutCalls>20</EffectiveOutCalls>\\n            <EffectiveOutServiceNotes>12</EffectiveOutServiceNotes>\\n        </Results>\\n    </Data>\\n    <HttpStatusCode>200</HttpStatusCode>\\n</QueryHotlineDashboardResponse>","errorExample":""}]',
      'title' => 'QueryHotlineDashboard',
    ),
    'QueryServicerById' => 
    array (
      'summary' => '根据坐席标识查询坐席详细信息',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'ServicerId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '坐席标识',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => '状态码',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'ServicerId' => 
                  array (
                    'title' => '坐席标识',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'RealName' => 
                  array (
                    'title' => '真实名称',
                    'type' => 'string',
                  ),
                  'UserStatus' => 
                  array (
                    'title' => '用户状态：0正常 1冻结 2删除 -2临时冻结',
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'ShowName' => 
                  array (
                    'title' => '对外展示名',
                    'type' => 'string',
                  ),
                  'AccountName' => 
                  array (
                    'title' => '登录名',
                    'type' => 'string',
                  ),
                  'DepartmentId' => 
                  array (
                    'title' => '部门标识',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'QueryServicerByDepartmentAndMixName' => 
    array (
      'summary' => '分页查询客服信息通过部门和关键字',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'DepartmentIdList',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '部门标识列表',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
              'example' => '905',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'KeyWord',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关键字',
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'CurrentPageNum',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页码',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '页大小',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '10',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Results' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServicerId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'RealName' => 
                        array (
                          'type' => 'string',
                        ),
                        'UserStatus' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'ShowName' => 
                        array (
                          'type' => 'string',
                        ),
                        'AccountName' => 
                        array (
                          'type' => 'string',
                        ),
                        'DepartmentId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'DepartmentName' => 
                        array (
                          'type' => 'string',
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
    'CreateAgent' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'js sdk中自动生成的鉴权token',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席对外显示名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '刘测试',
          ),
        ),
        4 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '坐席所属技能组id',
            'type' => 'array',
            'format' => 'int64',
            'items' => 
            array (
              'description' => '技能组',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '123456',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'SkillGroupIdList',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '坐席所属技能组id列表',
            'type' => 'array',
            'format' => 'int64',
            'items' => 
            array (
              'description' => '技能组列表',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '123456，145678',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '坐席id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '666666',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoSkillGroupSetFound',
            'errorMessage' => 'The specified skill group set does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 666666,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>666666</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建坐席',
      'summary' => '创建悉犀客服工作台坐席账号，返回坐席ID。',
    ),
    'DeleteAgent' => 
    array (
      'methods' => 
      array (
        0 => 'delete',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除坐席',
      'summary' => '根据坐席账号名称，删除悉犀客服工作台坐席账号，逻辑删除，删除后重新添加，坐席ID不变。',
    ),
    'UpdateAgent' => 
    array (
      'methods' => 
      array (
        0 => 'put',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        5 => 
        array (
          'name' => 'SkillGroupIdList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          3 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetAgent' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '坐席数据',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '坐席状态，0:正常，1:冻结，2:删除。只有正常的状态，才可进行业务活动',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '坐席对外显示名称',
                    'type' => 'string',
                    'example' => '刘测试',
                  ),
                  'AgentId' => 
                  array (
                    'description' => '坐席id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '222222',
                  ),
                  'GroupList' => 
                  array (
                    'description' => '坐席所属技能组信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '技能组信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DisplayName' => 
                        array (
                          'description' => '技能组对外显示名称',
                          'type' => 'string',
                          'example' => '自动化技能组',
                        ),
                        'Description' => 
                        array (
                          'description' => '技能组描述',
                          'type' => 'string',
                          'example' => '自动化技能组',
                        ),
                        'ChannelType' => 
                        array (
                          'description' => '技能组渠道类型',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'SkillGroupId' => 
                        array (
                          'description' => '技能组id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123456',
                        ),
                        'Name' => 
                        array (
                          'description' => '技能组名称',
                          'type' => 'string',
                          'example' => '自动化技能组',
                        ),
                      ),
                    ),
                  ),
                  'AccountName' => 
                  array (
                    'description' => '坐席账号名称（登录名）',
                    'type' => 'string',
                    'example' => '123@123.com',
                  ),
                  'TenantId' => 
                  array (
                    'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"Status\\": 0,\\n    \\"DisplayName\\": \\"刘测试\\",\\n    \\"AgentId\\": 222222,\\n    \\"GroupList\\": [\\n      {\\n        \\"DisplayName\\": \\"自动化技能组\\",\\n        \\"Description\\": \\"自动化技能组\\",\\n        \\"ChannelType\\": 1,\\n        \\"SkillGroupId\\": 123456,\\n        \\"Name\\": \\"自动化技能组\\"\\n      }\\n    ],\\n    \\"AccountName\\": \\"123@123.com\\",\\n    \\"TenantId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0,\\n  \\"Message\\": \\"\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>0</Status>\\n    <DisplayName>刘测试</DisplayName>\\n    <AgentId>222222</AgentId>\\n    <GroupList>\\n        <DisplayName>自动化技能组</DisplayName>\\n        <Description>自动化技能组</Description>\\n        <ChannelType>1</ChannelType>\\n        <SkillGroupId>123456</SkillGroupId>\\n        <Name>自动化技能组</Name>\\n    </GroupList>\\n    <AccountName>123@123.com</AccountName>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取坐席详情',
      'summary' => '根据坐席账号名称查询悉犀客服工作台坐席信息。',
    ),
    'GetHotlineAgentDetail' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '坐席服务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AgentStatusCode' => 
                  array (
                    'description' => '坐席状态编码
1:AgentCheckout（坐席下班）
3:AgentReady（坐席空闲）
4:AgentBreak（坐席小休）
5:AgentAcw（话后处理）
6:AgentBusyForCall（通话中）',
                    'type' => 'string',
                    'example' => 'AgentCheckout',
                  ),
                  'Token' => 
                  array (
                    'description' => '心跳签名',
                    'type' => 'string',
                    'example' => 'dnthF_oinHg7JMJDmKqex3UxDD7',
                  ),
                  'AgentId' => 
                  array (
                    'description' => '坐席id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '555555',
                  ),
                  'Assigned' => 
                  array (
                    'description' => '是否被分配，有以下枚举：
false：未分配（无通话）
true：已分配（有通话）
',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'RestType' => 
                  array (
                    'description' => '小休类型，有以下枚举：
1：小休
2：就餐 
3：会议 
4：辅导
5：培训',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'AgentStatus' => 
                  array (
                    'description' => '坐席状态，有以下枚举：1-6',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TenantId' => 
                  array (
                    'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"AgentStatusCode\\": \\"AgentCheckout\\",\\n    \\"Token\\": \\"dnthF_oinHg7JMJDmKqex3UxDD7\\",\\n    \\"AgentId\\": 555555,\\n    \\"Assigned\\": false,\\n    \\"RestType\\": 1,\\n    \\"AgentStatus\\": 1,\\n    \\"TenantId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <AgentStatusCode>AgentCheckout</AgentStatusCode>\\n    <Token>dnthF_oinHg7JMJDmKqex3UxDD7</Token>\\n    <AgentId>555555</AgentId>\\n    <Assigned>false</Assigned>\\n    <RestType>1</RestType>\\n    <AgentStatus>1</AgentStatus>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取热线坐席详情',
      'summary' => '根据坐席账号获取热线坐席当前服务详情。',
    ),
    'ListAgentBySkillGroupId' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '	
AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '666666',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '坐席信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '坐席状态，0:正常，1：冻结，2：删除。只有正常的状态，才可进行业务活动',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'DisplayName' => 
                    array (
                      'description' => '坐席对外显示名称',
                      'type' => 'string',
                      'example' => '刘测试',
                    ),
                    'AgentId' => 
                    array (
                      'description' => '坐席id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '666666',
                    ),
                    'AccountName' => 
                    array (
                      'description' => '坐席账号名称，实例内唯一（登录名）',
                      'type' => 'string',
                      'example' => '123@123.com',
                    ),
                    'TenantId' => 
                    array (
                      'description' => '坐席所属的租户ID，与入参中的实例ID一一对应',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": 0,\\n      \\"DisplayName\\": \\"刘测试\\",\\n      \\"AgentId\\": 666666,\\n      \\"AccountName\\": \\"123@123.com\\",\\n      \\"TenantId\\": 0\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>0</Status>\\n    <DisplayName>刘测试</DisplayName>\\n    <AgentId>666666</AgentId>\\n    <AccountName>123@123.com</AccountName>\\n    <TenantId>0</TenantId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据技能组ID获取坐席列表',
      'summary' => '根据技能组ID查询悉犀客服工作台坐席列表。',
    ),
    'ListOutboundPhoneNumber' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '主叫外呼电话号码',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '主叫外呼电话号码',
                  'type' => 'string',
                  'example' => '{9065446}',
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    \\"{9065446}\\"\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{9065446}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取指定坐席下的外呼号码列表',
      'summary' => '获取指定坐席下的主叫外呼电话号码。',
    ),
    'GetHotlineWaitingNumber' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '热线会员排队数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>2</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查看当前坐席所在技能组热线排队数量',
      'summary' => '获取热线会员排队数。',
    ),
    'TransferCallToAgent' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'TargetAccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '转交坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '345@123.com',
          ),
        ),
        4 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        6 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        7 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（	仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '1:单步转，2:双步转，默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'IsSingleTransfer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'true:单步转，false:双步转，默认单步转',
            'type' => 'string',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '转发热线到坐席',
      'summary' => '通话单\\双步转交到坐席。',
    ),
    'GetAllDepartment' => 
    array (
      'summary' => '获取指定租户下的部门列表',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre-cn-***',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DepartmentId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'DepartmentName' => 
                    array (
                      'type' => 'string',
                    ),
                    'Status' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                  ),
                ),
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
    'CreateOuterCallCenterData' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '机器人session_id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'a15ce370-1051-4040-9822',
          ),
        ),
        1 => 
        array (
          'name' => 'InterveneTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '通话接通时间，呼入就等同于gmt_creae，呼出就是用户接通时间',
            'type' => 'string',
            'required' => false,
            'example' => '16085570',
          ),
        ),
        2 => 
        array (
          'name' => 'CallType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '电话类型，有以下枚举：
1：呼入
2：呼出',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'FromPhoneNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'string',
            'required' => false,
            'example' => '135615',
          ),
        ),
        4 => 
        array (
          'name' => 'ToPhoneNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'string',
            'required' => false,
            'example' => '0571773',
          ),
        ),
        5 => 
        array (
          'name' => 'EndReason',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '挂断原因，有以下枚举：
1.转人工导致的结束
2.未转人工在机器人阶段结束
3.用户主动挂断电话
4.机器人主动挂断电话
5.网络异常原因导致的挂断电话',
            'type' => 'string',
            'required' => false,
            'example' => '3',
          ),
        ),
        6 => 
        array (
          'name' => 'UserInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '从上游系统带来的用户信息，json格式记录',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"level\\":25,\\"name\\":\\"Lee\\"}',
          ),
        ),
        7 => 
        array (
          'name' => 'RecordUrl',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '录音文件',
            'type' => 'string',
            'required' => false,
            'example' => 'http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com',
          ),
        ),
        8 => 
        array (
          'name' => 'BizType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '单据号类型-如order,等',
            'type' => 'string',
            'required' => false,
            'example' => 'SHOP_ID',
          ),
        ),
        9 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键单据号-如订单ID等',
            'type' => 'string',
            'required' => false,
            'example' => '78604',
          ),
        ),
        10 => 
        array (
          'name' => 'TenantId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '租户ID',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'json，上游系统的业务信息等，如机器人实例等信息',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"isCallBack\\":\\"true\\"}',
          ),
        ),
        12 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '热线数据同步',
      'summary' => '热线数据同步。',
    ),
    'StartHotlineService' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '请求调用成功后返回，发起心跳所需的Token',
                'type' => 'string',
                'example' => '0079e7a845e37334ff',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"0079e7a845e37334ff\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>0079e7a845e37334ff</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '开始热线服务',
      'summary' => '坐席签入，开始热线服务。',
    ),
    'ListHotlineRecord' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '100365558',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '热线会话信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '热线会话录音信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '录音结束时间戳（毫秒）',
                      'type' => 'boolean',
                      'example' => '16128694810',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '录音开始时间戳（毫秒）',
                      'type' => 'boolean',
                      'example' => '16128694110',
                    ),
                    'ConnectionId' => 
                    array (
                      'description' => '连接id',
                      'type' => 'string',
                      'example' => '100365548',
                    ),
                    'CallId' => 
                    array (
                      'description' => '入呼后，websocket中的acid',
                      'type' => 'string',
                      'example' => '100365558',
                    ),
                    'Url' => 
                    array (
                      'description' => '录音文件URL',
                      'type' => 'string',
                      'example' => 'http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndTime\\": true,\\n      \\"StartTime\\": true,\\n      \\"ConnectionId\\": \\"100365548\\",\\n      \\"CallId\\": \\"100365558\\",\\n      \\"Url\\": \\"http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <EndTime>false</EndTime>\\n    <StartTime>false</StartTime>\\n    <ConnectionId>100365548</ConnectionId>\\n    <CallId>100365558</CallId>\\n    <Url>http://aliccrec-shvpc.oss-cn-shanghai.aliyuncs.com</Url>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取热线录音列表',
      'summary' => '根据热线会话ID查询热线录音列表。',
    ),
    'QueryHotlineSession' => 
    array (
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
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'Acid',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'CallType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'default' => '',
            'enum' => 
            array (
              0 => '1',
              1 => '2',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'default' => '',
          ),
        ),
        6 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'MemberName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'QueryEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'default' => '',
          ),
        ),
        10 => 
        array (
          'name' => 'QueryStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'default' => '',
          ),
        ),
        11 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'ServicerName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        13 => 
        array (
          'name' => 'ServicerId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        14 => 
        array (
          'name' => 'Params',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        15 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '50',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
        16 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        17 => 
        array (
          'name' => 'CallResult',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'enum' => 
            array (
              0 => 'normal',
              1 => 'touchRouteError',
              2 => 'touchInQueue',
              3 => 'touchInLoss',
              4 => 'userHangup',
              5 => 'sysHangup',
              6 => 'transferAgent',
              7 => 'dailing',
              8 => 'TouchRingCallLoss',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageNumber' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'TotalCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CallDetailRecord' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'CallResult' => 
                        array (
                          'type' => 'string',
                        ),
                        'ServicerName' => 
                        array (
                          'type' => 'string',
                        ),
                        'OutQueueTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'CallContinueTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'CreateTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'PickUpTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'RingContinueTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'CalledNumber' => 
                        array (
                          'type' => 'string',
                        ),
                        'ServicerId' => 
                        array (
                          'type' => 'string',
                        ),
                        'HangUpTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'EvaluationLevel' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'HangUpRole' => 
                        array (
                          'type' => 'string',
                        ),
                        'MemberName' => 
                        array (
                          'type' => 'string',
                        ),
                        'EvaluationScore' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'Acid' => 
                        array (
                          'type' => 'string',
                        ),
                        'RingStartTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'CallType' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
                        ),
                        'GroupId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'GroupName' => 
                        array (
                          'type' => 'string',
                        ),
                        'RingEndTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'CallingNumber' => 
                        array (
                          'type' => 'string',
                        ),
                        'InQueueTime' => 
                        array (
                          'type' => 'string',
                        ),
                        'MemberId' => 
                        array (
                          'type' => 'string',
                        ),
                        'QueueUpContinueTime' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int32',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetHotlineAgentDetailReport' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'DepIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        6 => 
        array (
          'name' => 'GroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Page' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Columns' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'type' => 'string',
                        ),
                        'Title' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'Rows' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetHotlineAgentStatus' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '坐席状态（离线、空闲、话后处理、通话中、小休-休息、小休-就餐、小休-会议、小休-培训、小休-辅导）',
                'type' => 'string',
                'example' => '通话中',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"通话中\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>通话中</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取热线坐席状态',
      'summary' => '根据坐席账号名称查询悉犀客服工作台热线坐席状态。',
    ),
    'GetHotlineGroupDetailReport' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '1000',
            'minimum' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '200',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'StartDate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'default' => '',
          ),
        ),
        3 => 
        array (
          'name' => 'EndDate',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'DepIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
        6 => 
        array (
          'name' => 'GroupIds',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Page' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Columns' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Key' => 
                        array (
                          'type' => 'string',
                        ),
                        'Title' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'Rows' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetOuterCallCenterDataList' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SessionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '机器人session_id',
            'type' => 'string',
            'required' => false,
            'example' => 'a15ce370-1051-4040-9822',
          ),
        ),
        1 => 
        array (
          'name' => 'FromPhoneNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '135615',
          ),
        ),
        2 => 
        array (
          'name' => 'ToPhoneNum',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'string',
            'required' => false,
            'example' => '0571773',
          ),
        ),
        3 => 
        array (
          'name' => 'BizId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '关键单据号-如订单ID等',
            'type' => 'string',
            'required' => false,
            'example' => '78604',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        5 => 
        array (
          'name' => 'QueryStartTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间戳（毫秒）',
            'type' => 'string',
            'required' => false,
            'example' => '1614824872',
          ),
        ),
        6 => 
        array (
          'name' => 'QueryEndTime',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间戳（毫秒）',
            'type' => 'string',
            'required' => false,
            'example' => '1614824972',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '热线数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '热线数据',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndReason' => 
                    array (
                      'description' => '挂断原因，有以下枚举： 1.转人工导致的结束 2.未转人工在机器人阶段结束 3.用户主动挂断电话 4.机器人主动挂断电话 5.网络异常原因导致的挂断电话',
                      'type' => 'string',
                      'example' => '3',
                    ),
                    'CallType' => 
                    array (
                      'description' => '电话类型，有以下枚举： 1：呼入 2：呼出',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Acid' => 
                    array (
                      'description' => '入呼后，websocket中的acid',
                      'type' => 'string',
                      'example' => '100365558',
                    ),
                    'ToPhoneNum' => 
                    array (
                      'description' => '接听方号码-用户手机号码、客服坐席号码、机器号码等',
                      'type' => 'string',
                      'example' => '0571773',
                    ),
                    'UserInfo' => 
                    array (
                      'description' => '从上游系统带来的用户信息，json格式记录',
                      'type' => 'string',
                      'example' => '{\\"level\\":25,\\"name\\":\\"Lee\\"}',
                    ),
                    'InterveneTime' => 
                    array (
                      'description' => '通话接通时间，呼入就等同于gmt_creae，呼出就是用户接通时间',
                      'type' => 'string',
                      'example' => '16085570',
                    ),
                    'BizId' => 
                    array (
                      'description' => '关键单据号-如订单ID等',
                      'type' => 'string',
                      'example' => '78604',
                    ),
                    'SessionId' => 
                    array (
                      'description' => '机器人session_id',
                      'type' => 'string',
                      'example' => 'a15ce370-1051-4040-9822',
                    ),
                    'FromPhoneNum' => 
                    array (
                      'description' => '发起方号码-用户手机号码、客服坐席号码、机器号码等',
                      'type' => 'string',
                      'example' => '135615',
                    ),
                    'ExtInfo' => 
                    array (
                      'description' => 'json，上游系统的业务信息等，如机器人实例等信息',
                      'type' => 'string',
                      'example' => '{\\"isCallBack\\":\\"true\\"}',
                    ),
                    'BizType' => 
                    array (
                      'description' => '单据号类型-如order,等',
                      'type' => 'string',
                      'example' => 'SHOP_ID',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"EndReason\\": \\"3\\",\\n      \\"CallType\\": \\"1\\",\\n      \\"Acid\\": \\"100365558\\",\\n      \\"ToPhoneNum\\": \\"0571773\\",\\n      \\"UserInfo\\": \\"{\\\\\\\\\\\\\\"level\\\\\\\\\\\\\\":25,\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Lee\\\\\\\\\\\\\\"}\\",\\n      \\"InterveneTime\\": \\"16085570\\",\\n      \\"BizId\\": \\"78604\\",\\n      \\"SessionId\\": \\"a15ce370-1051-4040-9822\\",\\n      \\"FromPhoneNum\\": \\"135615\\",\\n      \\"ExtInfo\\": \\"{\\\\\\\\\\\\\\"isCallBack\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"true\\\\\\\\\\\\\\"}\\",\\n      \\"BizType\\": \\"SHOP_ID\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <EndReason>3</EndReason>\\n    <CallType>1</CallType>\\n    <Acid>100365558</Acid>\\n    <ToPhoneNum>0571773</ToPhoneNum>\\n    <UserInfo>{\\\\\\"level\\\\\\":25,\\\\\\"name\\\\\\":\\\\\\"Lee\\\\\\"}</UserInfo>\\n    <InterveneTime>16085570</InterveneTime>\\n    <BizId>78604</BizId>\\n    <SessionId>a15ce370-1051-4040-9822</SessionId>\\n    <FromPhoneNum>135615</FromPhoneNum>\\n    <ExtInfo>{\\\\\\"isCallBack\\\\\\":\\\\\\"true\\\\\\"}</ExtInfo>\\n    <BizType>SHOP_ID</BizType>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取外部热线数据列表',
      'summary' => '获取外部热线数据列表。',
    ),
    'SendHotlineHeartBeat' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Token',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '心跳签名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0079e7a845e37334ff',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '发送热线心跳',
      'summary' => '发送热线心跳。',
    ),
    'SuspendHotlineService' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '小休原因，有以下枚举：
1：小休（默认）
2：就餐
3：会议
4：辅导
5：培训',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '暂停热线服务',
      'summary' => '坐席小休，暂停热线服。',
    ),
    'TransferCallToPhone' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Caller',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线转交主叫号码',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '9065446',
          ),
        ),
        4 => 
        array (
          'name' => 'Callee',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线转交被叫号码',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '136098792',
          ),
        ),
        5 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        6 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        7 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        8 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '1:单步转，2:双步转，默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        10 => 
        array (
          'name' => 'IsSingleTransfer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'true:单步转，false:双步转，默认单步转',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        11 => 
        array (
          'name' => 'callerPhone',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'calleePhone',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
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
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '转发热线到电话',
      'summary' => '通话单\\双步转交到电话。',
    ),
    'TransferCallToSkillGroup' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '356543',
          ),
        ),
        4 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        5 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        6 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        7 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        8 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '1:单步转，2:双步转，默认为1',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'IsSingleTransfer',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'true:单步转，false:双步转，默认单步转',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '转发热线到技能组',
      'summary' => '通话单\\双步转交到技能组。',
    ),
    'TransferToThirdCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        6 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '转发热线',
      'summary' => '通话单步转交到第三方。',
    ),
    'FinishHotlineService' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '结束热线服务',
      'summary' => '坐席签出，结束热线服务。',
    ),
    'CreateRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'RoleName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Operator',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'PermissionId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Data' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'DisableRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '角色id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '555555',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '禁用角色',
      'summary' => '根据角色id禁用悉犀客服工作台角色权限。',
    ),
    'EnableRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '角色id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '555555',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '启用角色',
      'summary' => '根据角色id启用悉犀客服工作台角色权限。',
    ),
    'CreateTicket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单模板id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '546754',
          ),
        ),
        3 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '业务类目id（如果不传，取工单模板的类目）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10000',
          ),
        ),
        4 => 
        array (
          'name' => 'CreatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者id（坐席id）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '555555',
          ),
        ),
        5 => 
        array (
          'name' => 'CreatorType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者角色（默认为4：客服），有以下枚举：
1：会员
4：客服',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '4',
          ),
        ),
        6 => 
        array (
          'name' => 'CreatorName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '刘测试',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会员id（匿名会员id：-1）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'MemberName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会员名称',
            'type' => 'string',
            'required' => false,
            'example' => '匿名会员',
          ),
        ),
        9 => 
        array (
          'name' => 'FromInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建来源',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'manual',
          ),
        ),
        10 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单优先级，有以下枚举：
普通：4
低：0
中：1
高：2
紧急：3',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '4',
          ),
        ),
        11 => 
        array (
          'name' => 'CarbonCopy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '被抄送人账号id(多个抄送人用逗号分隔)',
            'type' => 'string',
            'required' => false,
            'example' => '234432',
          ),
        ),
        12 => 
        array (
          'name' => 'FormData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单模板的表单配置，格式{"key":"value"}
key:表单字段编码 value:记录值
例：{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '工单id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2500000010',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2500000010,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '新建工单',
      'summary' => '创建工单。',
    ),
    'UpdateTicket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单id（工单编码）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2500000010',
          ),
        ),
        3 => 
        array (
          'name' => 'OperatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '操作人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '555555',
          ),
        ),
        4 => 
        array (
          'name' => 'FormData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单修改信息，格式{"key":"value"} ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"questionInfo":"自动化创建工单","CFQyYAPjKb":"开胶"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新工单',
      'summary' => '根据工单id更新工单。',
    ),
    'QueryTicketActions' => 
    array (
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'ActionCodeList',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '',
    ),
    'QueryTicketCount' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'OperatorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '操作人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '666666',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '处理中工单总数',
                'type' => 'string',
                'example' => '45',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetTenantIdFailed',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"45\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>45</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询工单数量',
      'summary' => '根据操作人id查询其处理中的工单总数。',
    ),
    'QueryTickets' => 
    array (
      'summary' => '查询工单',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CaseId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'CaseType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'CaseStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1000',
          ),
        ),
        4 => 
        array (
          'name' => 'SrType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-10000000',
          ),
        ),
        6 => 
        array (
          'name' => 'ChannelId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'ChannelType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-10000000',
          ),
        ),
        8 => 
        array (
          'name' => 'TouchId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'DealId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        10 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'type' => 'object',
            'required' => false,
          ),
        ),
        11 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'MemberId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        13 => 
        array (
          'name' => 'ParentCaseId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        14 => 
        array (
          'name' => 'StartCaseGmtCreate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        15 => 
        array (
          'name' => 'EndCaseGmtCreate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        16 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '100',
            'minimum' => '1',
            'default' => '10',
          ),
        ),
        17 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '5000',
            'minimum' => '0',
            'default' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'SearchTicketById' => 
    array (
      'summary' => '根据工单id查询工单详情。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单id（工单编号）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2500000010',
          ),
        ),
        3 => 
        array (
          'name' => 'StatusCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单状态编码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '12001',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '工单详情',
                'type' => 'object',
                'properties' => 
                array (
                  'CarbonCopy' => 
                  array (
                    'description' => '抄送人',
                    'type' => 'string',
                    'example' => '234432',
                  ),
                  'MemberName' => 
                  array (
                    'description' => '会员名称',
                    'type' => 'string',
                    'example' => '匿名会员',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '工单创建时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614824872',
                  ),
                  'ServiceId' => 
                  array (
                    'description' => '客服id/坐席id（工单操作人id）',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '555555',
                  ),
                  'TicketId' => 
                  array (
                    'description' => '工单id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2500000010',
                  ),
                  'Priority' => 
                  array (
                    'description' => '工单优先级',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CreatorId' => 
                  array (
                    'description' => '创建者id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '555555',
                  ),
                  'FormData' => 
                  array (
                    'description' => '工单业务信息（工单模板表单信息）',
                    'type' => 'string',
                    'example' => '{"questionInfo":"自动化创建工单"}',
                  ),
                  'Activities' => 
                  array (
                    'description' => '工单活动业务信息（工单活动表单信息）',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '工单活动表单信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ActivityFormData' => 
                        array (
                          'description' => '工单活动表单信息编码',
                          'type' => 'string',
                          'example' => '{\\"BQ73dGsSNs\\":\\"备注\\"}',
                        ),
                        'ActivityCode' => 
                        array (
                          'description' => '活动编码',
                          'type' => 'string',
                          'example' => 'finish',
                        ),
                      ),
                    ),
                  ),
                  'ActivityRecords' => 
                  array (
                    'description' => '动作记录',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '动作记录信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ActionCode' => 
                        array (
                          'description' => '动作记录活动编码',
                          'type' => 'string',
                          'example' => '997015',
                        ),
                        'ActionCodeDesc' => 
                        array (
                          'description' => '动作记录活动编码名称',
                          'type' => 'string',
                          'example' => '创建工单',
                        ),
                        'OperatorName' => 
                        array (
                          'description' => '工单操作人名称',
                          'type' => 'string',
                          'example' => '刘测试',
                        ),
                        'Operator' => 
                        array (
                          'type' => 'string',
                        ),
                        'Memo' => 
                        array (
                          'description' => '动作备注',
                          'type' => 'string',
                          'example' => '{"CFQyYAPjKb":"开胶"}',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '操作时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1614824772',
                        ),
                      ),
                    ),
                  ),
                  'FromInfo' => 
                  array (
                    'description' => '创建来源',
                    'type' => 'string',
                    'example' => 'hotline',
                  ),
                  'ModifiedTime' => 
                  array (
                    'description' => '工单处理时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614824872',
                  ),
                  'CreatorName' => 
                  array (
                    'description' => '创建者名称',
                    'type' => 'string',
                    'example' => '刘测试',
                  ),
                  'CategoryId' => 
                  array (
                    'description' => '业务类目id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'CreatorType' => 
                  array (
                    'description' => '创建者角色，有以下枚举：
系统：0
会员：1
客服：4',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'MemberId' => 
                  array (
                    'description' => '会员id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1876543',
                  ),
                  'CaseStatus' => 
                  array (
                    'description' => '工单状态（工单状态数值）',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'TemplateId' => 
                  array (
                    'description' => '工单模板id',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '546754',
                  ),
                  'TicketName' => 
                  array (
                    'description' => '工单名称',
                    'type' => 'string',
                    'example' => '自动化工单',
                  ),
                  'ParentCaseId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"CarbonCopy\\": \\"234432\\",\\n    \\"MemberName\\": \\"匿名会员\\",\\n    \\"CreateTime\\": 1614824872,\\n    \\"ServiceId\\": 555555,\\n    \\"TicketId\\": 2500000010,\\n    \\"Priority\\": 1,\\n    \\"CreatorId\\": 555555,\\n    \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n    \\"Activities\\": [\\n      {\\n        \\"ActivityFormData\\": \\"{\\\\\\\\\\\\\\"BQ73dGsSNs\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"备注\\\\\\\\\\\\\\"}\\",\\n        \\"ActivityCode\\": \\"finish\\"\\n      }\\n    ],\\n    \\"ActivityRecords\\": [\\n      {\\n        \\"ActionCode\\": \\"997015\\",\\n        \\"ActionCodeDesc\\": \\"创建工单\\",\\n        \\"OperatorName\\": \\"刘测试\\",\\n        \\"Operator\\": \\"\\",\\n        \\"Memo\\": \\"{\\\\\\"CFQyYAPjKb\\\\\\":\\\\\\"开胶\\\\\\"}\\",\\n        \\"GmtCreate\\": 1614824772\\n      }\\n    ],\\n    \\"FromInfo\\": \\"hotline\\",\\n    \\"ModifiedTime\\": 1614824872,\\n    \\"CreatorName\\": \\"刘测试\\",\\n    \\"CategoryId\\": 10000,\\n    \\"CreatorType\\": 4,\\n    \\"MemberId\\": 1876543,\\n    \\"CaseStatus\\": 6,\\n    \\"TemplateId\\": 546754,\\n    \\"TicketName\\": \\"自动化工单\\",\\n    \\"ParentCaseId\\": 0\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <MemberName>匿名会员</MemberName>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <Activities>\\n        <ActivityFormData>{\\\\\\"BQ73dGsSNs\\\\\\":\\\\\\"备注\\\\\\"}</ActivityFormData>\\n        <ActivityCode>finish</ActivityCode>\\n    </Activities>\\n    <ActivityRecords>\\n        <ActionCode>997015</ActionCode>\\n        <ActionCodeDesc>创建工单</ActionCodeDesc>\\n        <OperatorName>刘测试</OperatorName>\\n        <Memo>{\\"CFQyYAPjKb\\":\\"开胶\\"}</Memo>\\n        <GmtCreate>1614824772</GmtCreate>\\n    </ActivityRecords>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n    <TicketName>自动化工单</TicketName>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据id查询工单',
    ),
    'SearchTicketByPhone' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'Phone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '138999',
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单模板id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '546754',
          ),
        ),
        4 => 
        array (
          'name' => 'TicketStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单状态',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '6',
          ),
        ),
        5 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小（默认为10）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1614824872',
          ),
        ),
        8 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1614825972',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'OnePageSize' => 
              array (
                'description' => '每页的数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'TotalResults' => 
              array (
                'description' => '总共记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '16',
              ),
              'PageNo' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '工单信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工单信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MemberName' => 
                    array (
                      'description' => '会员名称',
                      'type' => 'string',
                      'example' => '匿名会员',
                    ),
                    'CarbonCopy' => 
                    array (
                      'description' => '抄送人',
                      'type' => 'string',
                      'example' => '234432',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '工单创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614824872',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '客服id/坐席id（工单操作人id）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '555555',
                    ),
                    'TicketId' => 
                    array (
                      'description' => '工单id（工单编码）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2500000010',
                    ),
                    'Priority' => 
                    array (
                      'description' => '工单优先级',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreatorId' => 
                    array (
                      'description' => '创建者id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '555555',
                    ),
                    'FormData' => 
                    array (
                      'description' => '工单业务信息（工单模板表单信息）',
                      'type' => 'string',
                      'example' => '{"questionInfo":"自动化创建工单"}',
                    ),
                    'FromInfo' => 
                    array (
                      'description' => '创建来源',
                      'type' => 'string',
                      'example' => 'hotline',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '工单处理时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614824872',
                    ),
                    'TaskStatus' => 
                    array (
                      'description' => '工单状态，有以下枚举：未处理，处理中，已结束，挂起，取消，待分配',
                      'type' => 'string',
                      'example' => '处理中',
                    ),
                    'CreatorName' => 
                    array (
                      'description' => '创建者名称',
                      'type' => 'string',
                      'example' => '刘测试',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '业务类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000',
                    ),
                    'CreatorType' => 
                    array (
                      'description' => '创建者角色，有以下枚举： 系统：0 会员：1 客服：4',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'MemberId' => 
                    array (
                      'description' => '会员id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1876543',
                    ),
                    'CaseStatus' => 
                    array (
                      'description' => '工单状态（工单状态数值）',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '工单模板id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '546754',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 10,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"TotalPage\\": 2,\\n  \\"TotalResults\\": 16,\\n  \\"PageNo\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"MemberName\\": \\"匿名会员\\",\\n      \\"CarbonCopy\\": \\"234432\\",\\n      \\"CreateTime\\": 1614824872,\\n      \\"ServiceId\\": 555555,\\n      \\"TicketId\\": 2500000010,\\n      \\"Priority\\": 1,\\n      \\"CreatorId\\": 555555,\\n      \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n      \\"FromInfo\\": \\"hotline\\",\\n      \\"ModifiedTime\\": 1614824872,\\n      \\"TaskStatus\\": \\"处理中\\",\\n      \\"CreatorName\\": \\"刘测试\\",\\n      \\"CategoryId\\": 10000,\\n      \\"CreatorType\\": 4,\\n      \\"MemberId\\": 1876543,\\n      \\"CaseStatus\\": 6,\\n      \\"TemplateId\\": 546754\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>10</OnePageSize>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Message>xxxx</Message>\\n<TotalPage>2</TotalPage>\\n<TotalResults>16</TotalResults>\\n<PageNo>1</PageNo>\\n<Data>\\n    <MemberName>匿名会员</MemberName>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <TaskStatus>处理中</TaskStatus>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据电话查询工单',
      'summary' => '根据电话查询工单信息。',
    ),
    'SearchTicketList' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'OperatorId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单操作人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '555555',
          ),
        ),
        3 => 
        array (
          'name' => 'TicketStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单状态（工单状态数值）
**说明：工单类型定义时需要自定义状态数值，例如配送员待处理的状态数值需手动改为3807且在工单创建前修改完成，工单状态的查询条件才可能生效。如下图：（该图复制链接下载后即可查看）**
https://cdn.nlark.com/yuque/0/2020/png/2733660/1608724297862-da5150ed-71f0-47a5-8de4-c371cda23b97.png',
            'type' => 'string',
            'required' => false,
            'example' => '6',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '1',
            'default' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小（默认为20）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '1',
            'example' => '20',
            'default' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间戳（毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1614824872',
          ),
        ),
        7 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间戳（毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '1614825972',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'OnePageSize' => 
              array (
                'description' => '每页的数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '3',
              ),
              'TotalResults' => 
              array (
                'description' => '总共记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '45',
              ),
              'PageNo' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Data' => 
              array (
                'description' => '工单信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工单信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'MemberName' => 
                    array (
                      'description' => '会员名称',
                      'type' => 'string',
                      'example' => '匿名会员',
                    ),
                    'CarbonCopy' => 
                    array (
                      'description' => '抄送人',
                      'type' => 'string',
                      'example' => '234432',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '工单创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614824872',
                    ),
                    'ServiceId' => 
                    array (
                      'description' => '服务id（工单操作人id）',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '555555',
                    ),
                    'TicketId' => 
                    array (
                      'description' => '工单id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2500000010',
                    ),
                    'Priority' => 
                    array (
                      'description' => '工单优先级',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'CreatorId' => 
                    array (
                      'description' => '创建者id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '555555',
                    ),
                    'FormData' => 
                    array (
                      'description' => '工单业务信息（工单模板表单信息）',
                      'type' => 'string',
                      'example' => '{"questionInfo":"自动化创建工单"}',
                    ),
                    'FromInfo' => 
                    array (
                      'description' => '创建来源',
                      'type' => 'string',
                      'example' => 'hotline',
                    ),
                    'ModifiedTime' => 
                    array (
                      'description' => '工单处理时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1614824872',
                    ),
                    'TaskStatus' => 
                    array (
                      'description' => '工单状态，有以下枚举：未处理，处理中，已结束，挂起，取消，待分配',
                      'type' => 'string',
                      'example' => '处理中',
                    ),
                    'CreatorName' => 
                    array (
                      'description' => '创建者名称',
                      'type' => 'string',
                      'example' => '刘测试',
                    ),
                    'CategoryId' => 
                    array (
                      'description' => '业务类目id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '10000',
                    ),
                    'CreatorType' => 
                    array (
                      'description' => '创建者角色，有以下枚举： 系统：0 会员：1 客服：4',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '4',
                    ),
                    'MemberId' => 
                    array (
                      'description' => '会员id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1876543',
                    ),
                    'CaseStatus' => 
                    array (
                      'description' => '工单状态',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '6',
                    ),
                    'TemplateId' => 
                    array (
                      'description' => '工单模板id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '546754',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 20,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"TotalPage\\": 3,\\n  \\"TotalResults\\": 45,\\n  \\"PageNo\\": 1,\\n  \\"Data\\": [\\n    {\\n      \\"MemberName\\": \\"匿名会员\\",\\n      \\"CarbonCopy\\": \\"234432\\",\\n      \\"CreateTime\\": 1614824872,\\n      \\"ServiceId\\": 555555,\\n      \\"TicketId\\": 2500000010,\\n      \\"Priority\\": 1,\\n      \\"CreatorId\\": 555555,\\n      \\"FormData\\": \\"{\\\\\\"questionInfo\\\\\\":\\\\\\"自动化创建工单\\\\\\"}\\",\\n      \\"FromInfo\\": \\"hotline\\",\\n      \\"ModifiedTime\\": 1614824872,\\n      \\"TaskStatus\\": \\"处理中\\",\\n      \\"CreatorName\\": \\"刘测试\\",\\n      \\"CategoryId\\": 10000,\\n      \\"CreatorType\\": 4,\\n      \\"MemberId\\": 1876543,\\n      \\"CaseStatus\\": 6,\\n      \\"TemplateId\\": 546754\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>20</OnePageSize>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Message>xxxx</Message>\\n<TotalPage>3</TotalPage>\\n<TotalResults>45</TotalResults>\\n<PageNo>1</PageNo>\\n<Data>\\n    <MemberName>匿名会员</MemberName>\\n    <CarbonCopy>234432</CarbonCopy>\\n    <CreateTime>1614824872</CreateTime>\\n    <ServiceId>555555</ServiceId>\\n    <TicketId>2500000010</TicketId>\\n    <Priority>1</Priority>\\n    <CreatorId>555555</CreatorId>\\n    <FormData>{\\"questionInfo\\":\\"自动化创建工单\\"}</FormData>\\n    <FromInfo>hotline</FromInfo>\\n    <ModifiedTime>1614824872</ModifiedTime>\\n    <TaskStatus>处理中</TaskStatus>\\n    <CreatorName>刘测试</CreatorName>\\n    <CategoryId>10000</CategoryId>\\n    <CreatorType>4</CreatorType>\\n    <MemberId>1876543</MemberId>\\n    <CaseStatus>6</CaseStatus>\\n    <TemplateId>546754</TemplateId>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询工单列表',
      'summary' => '根据工单操作人id查询工单列表信息。',
      'responseParamsDescription' => '1）默认按照工单的创建时间倒序排列，即最新的工单在最前面。',
    ),
    'AssignTicket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单id（工单编号）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2500000010',
          ),
        ),
        3 => 
        array (
          'name' => 'OperatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '分配人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '666666',
          ),
        ),
        4 => 
        array (
          'name' => 'AcceptorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '被分配人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '234432',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '分配工单',
      'summary' => '根据工单id分配工单。',
    ),
    'CloseTicket' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单id（工单编号）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2500000010',
          ),
        ),
        3 => 
        array (
          'name' => 'ActionItems',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '自定义json动作记录，例如：{"reason":"业务系统强制关闭"}',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '{"reason":"业务系统强制关闭"}',
          ),
        ),
        4 => 
        array (
          'name' => 'OperatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '操作人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '555555',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '关闭工单',
      'summary' => '根据工单id关闭工单，添加自定义动作记录。',
    ),
    'ExecuteActivity' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TicketId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '2500000010',
          ),
        ),
        3 => 
        array (
          'name' => 'OperatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '操作人id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '555555',
          ),
        ),
        4 => 
        array (
          'name' => 'ActivityCode',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '活动编码,可使用系统编码，也可修改系统编码使用自定义编码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'finish',
          ),
        ),
        5 => 
        array (
          'name' => 'ActivityForm',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '动作记录扩展字段，如：{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}\'',
            'type' => 'string',
            'required' => false,
            'example' => '{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}\'',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '处理工单',
      'summary' => '执行自定义活动。',
      'extraInfo' => '1）activityForm 传递的内容实例：{"处理类型":"退费","赔偿金额":"12","处理内容":"已妥善处理","处理时间":"2020-09-21"}
2）活动编码定义时需要自定义编码（系统活动无法自定义编码），例如审计组长的活动编码需手动改为「group」且在工单创建前修改完成，指定活动才可能生效。如下图：
https://cdn.nlark.com/yuque/0/2021/png/21395124/1619081827743-b753b777-d37f-466c-9df4-62e386b46aa2.png',
    ),
    'AnswerCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '接听来电',
      'summary' => '接听来电。',
    ),
    'AppMessagePush' => 
    array (
      'summary' => '客户App处在离线状态.但客服人员处在上班状态的工单信息推送给客户。由客户这面进行自行推送。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实例ID',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-ss001',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户编号',
            'description' => '用户编号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'APP状态',
            'description' => 'APP状态 1: "在线",2: "离线"',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '10',
            'minimum' => '-1',
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ExpirationTime',
          'in' => 'query',
          'schema' => 
          array (
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '123-123143-4',
              ),
              'Data' => 
              array (
                'title' => '返回数据',
                'description' => '返回数据',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '错误码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'SysytemError',
              ),
              'Success' => 
              array (
                'title' => '通信码',
                'description' => '通信码',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
        503 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'System Error',
          ),
        ),
        600 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParam',
            'errorMessage' => 'Invalid param',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"123-123143-4\\",\\n  \\"Data\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"SysytemError\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RequestId>123-123143-4</RequestId>\\n<Data>null</Data>\\n<Code>200</Code>\\n<Message>SysytemError</Message>\\n<Success>true</Success>","errorExample":""}]',
      'title' => 'App消息推送',
    ),
    'ChangeChatAgentStatus' => 
    array (
      'summary' => '修改在线客服状态。',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'clientToken',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成

',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '示例id',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '账户名称',
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Method',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '修改到的状态类型',
            'description' => '修改到的状态类型
 
- requestRest   （申请小休）
- requestLogout  （申请离线）
- restToWork  （小休转上班）
',
            'type' => 'string',
            'required' => true,
            'example' => 'requestLogout',
            'enum' => 
            array (
              0 => 'requestRest',
              1 => 'requestLogout',
              2 => 'restToWork',
            ),
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'description' => '错误描述

',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'httpStatusCode',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => 'data',
                'description' => 'data',
                'type' => 'string',
                'example' => '0',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Agent.NotFound',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => '接口调用是否成功

',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"0\\",\\n  \\"Code\\": \\"Agent.NotFound\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ChangeChatAgentStatusResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>0</Data>\\n    <Code>Agent.NotFound</Code>\\n    <Success>true</Success>\\n</ChangeChatAgentStatusResponse>","errorExample":""}]',
      'title' => '修改在线客服状态',
    ),
    'CreateCustomer' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProdLineId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品线ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10552599',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'xp_commerce_aliyun',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        3 => 
        array (
          'name' => 'TypeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户类型',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Phone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号',
            'type' => 'string',
            'required' => false,
            'example' => '1360000xxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        6 => 
        array (
          'name' => 'ManagerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理人姓名',
            'type' => 'string',
            'required' => false,
            'example' => '管理人',
          ),
        ),
        7 => 
        array (
          'name' => 'Contacter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建人',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        8 => 
        array (
          'name' => 'Industry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业',
            'type' => 'string',
            'required' => false,
            'example' => '服饰',
          ),
        ),
        9 => 
        array (
          'name' => 'Position',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '职位',
            'type' => 'string',
            'required' => false,
            'example' => '主管',
          ),
        ),
        10 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱',
            'type' => 'string',
            'required' => false,
            'example' => '123@123.com',
          ),
        ),
        11 => 
        array (
          'name' => 'Dingding',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '钉钉账号',
            'type' => 'string',
            'required' => false,
            'example' => '123yiyo',
          ),
        ),
        12 => 
        array (
          'name' => 'OuterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部id',
            'type' => 'string',
            'required' => false,
            'example' => '10000011',
          ),
        ),
        13 => 
        array (
          'name' => 'OuterIdType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => '创建成功',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '客户数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '{"CustomerId":"24027"}',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"创建成功\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 0,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>创建成功</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建客户',
      'summary' => '创建客户。',
    ),
    'CreateEntityIvrRoute' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'EntityName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'EntityBizCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'EntityBizCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EntityRelationNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateSkillGroup' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'SkillGroupName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '在线自动化技能组',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组描述',
            'type' => 'string',
            'required' => false,
            'example' => '在线自动化技能组',
          ),
        ),
        3 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组对外显示名',
            'type' => 'string',
            'required' => false,
            'example' => '在线自动化技能组',
          ),
        ),
        4 => 
        array (
          'name' => 'ChannelType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组类型,有以下枚举值：
1：热线 
2：在线  
4：工单',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'maximum' => '7',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => 'Message',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => 'RequestId',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '创建成功的技能组id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
              ),
              'Code' => 
              array (
                'description' => 'Code',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => 'Success',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 123456,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>123456</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建技能组',
      'summary' => '根据技能组名称和渠道类型创建技能组，可定义技能组的对外显示名、描述信息。',
    ),
    'CreateSubTicket' => 
    array (
      'summary' => '创建工单',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CreatorId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'CreatorName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'FromInfo',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'FormData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'MemberId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
        ),
        7 => 
        array (
          'name' => 'MemberName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        8 => 
        array (
          'name' => 'Priority',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        9 => 
        array (
          'name' => 'ParentCaseId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        10 => 
        array (
          'name' => 'BizData',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        11 => 
        array (
          'name' => 'AgentId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'CreateThirdSsoAgent' => 
    array (
      'summary' => '根据用户账号创建免登到客服工作台的坐席。',
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'clientToken',
            'description' => '客户请求唯一ID。用于幂等校验，可以用UUID生成。',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'param1',
            'description' => '实例ID。可在悉犀客服控制台上获取。

',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre***',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'param2',
            'description' => '颁发给租户实例的clientId',
            'type' => 'string',
            'required' => true,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        3 => 
        array (
          'name' => 'AccountId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'param3',
            'description' => '要同步的账号ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'accountId1',
          ),
        ),
        4 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'param4',
            'description' => '要同步的账号名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'accountName1',
          ),
        ),
        5 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'param5',
            'description' => '坐席显示名称。',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        6 => 
        array (
          'name' => 'SkillGroupIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'param6',
            'description' => '技能组ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '技能组ID。

所传技能组必须属于同一个技能组分组。',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'RoleIds',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'title' => 'param7',
            'description' => '角色ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '角色id',
              'type' => 'integer',
              'format' => 'int64',
              'required' => false,
              'example' => '1',
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
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'httpStatusCode',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => '新创建的坐席id',
                'description' => '新创建的坐席id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '123456',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '错误状态码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => '接口调用是否成功。',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": 123456,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateThirdSsoAgentResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>123456</Data>\\n    <Code>Success</Code>\\n    <Success>true</Success>\\n</CreateThirdSsoAgentResponse>","errorExample":""}]',
      'title' => '创建三方免登坐席',
    ),
    'createTicketWithBizData' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单模板id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '30401',
          ),
        ),
        3 => 
        array (
          'name' => 'CategoryId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '业务类目id（如果不传，取工单模板的类目）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '397001',
          ),
        ),
        4 => 
        array (
          'name' => 'CreatorId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者id（坐席id）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '555555',
          ),
        ),
        5 => 
        array (
          'name' => 'CreatorType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者角色（默认为4：客服），有以下枚举： 1：会员 4：客服',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '4',
          ),
        ),
        6 => 
        array (
          'name' => 'CreatorName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建者名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '刘测试',
          ),
        ),
        7 => 
        array (
          'name' => 'MemberId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会员id（匿名会员id：-1）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'MemberName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '会员名称',
            'type' => 'string',
            'required' => false,
            'example' => '匿名会员',
          ),
        ),
        9 => 
        array (
          'name' => 'FromInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '创建来源',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'manual',
          ),
        ),
        10 => 
        array (
          'name' => 'Priority',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '工单优先级，有以下枚举： 普通：4 低：0 中：1 高：2 紧急：3',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10',
            'minimum' => '0',
            'example' => '3',
          ),
        ),
        11 => 
        array (
          'name' => 'CarbonCopy',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '被抄送人账号id(多个抄送人用逗号分隔)',
            'type' => 'string',
            'required' => false,
            'example' => '234432',
          ),
        ),
        12 => 
        array (
          'name' => 'FormData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '业务字段',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{callout:"1356661xxxx",shoufangren:"晨曦测试公司",authKey:"f866b596d6b2edd409e1243a7xxxxxxx",onecompId:"6666666666"}',
          ),
        ),
        13 => 
        array (
          'name' => 'BizData',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '业务方需要的识别字段，部分业务不传此字段，工单完结后数据回流失败，依情况添加',
            'type' => 'string',
            'required' => false,
            'example' => '{callout:"1356661xxxx",shoufangren:"晨曦测试公司",authKey:"f866b596d6b2edd409e1243a7xxxxxxx",onecompId:"6666666666"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '工单id',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2500000010',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 2500000010,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>2500000010</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '创建工单和BIZ',
      'summary' => '创建工单加入BIZ字段。',
    ),
    'DeleteEntityRoute' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UniqueId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'EditEntityRoute' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'EntityName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'EntityBizCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'EntityBizCodeType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EntityRelationNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'DepartmentId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'GroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        7 => 
        array (
          'name' => 'ServiceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        8 => 
        array (
          'name' => 'ExtInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        10 => 
        array (
          'name' => 'UniqueId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'FetchCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        6 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '取回通话信息',
      'summary' => '取回\\恢复通话。',
    ),
    'GenerateWebSocketSign' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => 'messagebox消息通道签名码',
                'type' => 'string',
                'example' => 'dnthF_oinHg7JMJDmKqex3UxDD7',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"dnthF_oinHg7JMJDmKqex3UxDD7\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>dnthF_oinHg7JMJDmKqex3UxDD7</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '生成messagbox通道签名',
      'summary' => '生成消息通道访问签名。',
    ),
    'GetAuthInfo' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ForeignId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AppKey',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'type' => 'string',
                  ),
                  'Time' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AppKey' => 
                  array (
                    'type' => 'string',
                  ),
                  'App' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Code' => 
                  array (
                    'type' => 'string',
                  ),
                  'SessionId' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserName' => 
                  array (
                    'type' => 'string',
                  ),
                  'TenantId' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        201 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetAuthInfoFailed',
            'errorMessage' => 'Failed to get authorization information.',
          ),
        ),
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetTenantIdFailed',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetByForeignId' => 
    array (
      'summary' => '获取外部账号映射的会员账号关系信息',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'ForeignId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'SourceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetCallsPerDay' => 
    array (
      'summary' => '获取热线日来电次数。',
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'DataIdStart',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'string',
            'required' => true,
            'example' => '20210316',
          ),
        ),
        2 => 
        array (
          'name' => 'DataIdEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => true,
            'example' => '20210316',
          ),
        ),
        3 => 
        array (
          'name' => 'DataId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果按日分组',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        4 => 
        array (
          'name' => 'HourId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果按小时分组',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        5 => 
        array (
          'name' => 'MinuteId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询结果按分钟分组',
            'type' => 'string',
            'required' => false,
            'example' => 'Y',
          ),
        ),
        6 => 
        array (
          'name' => 'PhoneNumbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号，多个手机号可以使用逗号隔开',
            'type' => 'string',
            'required' => false,
            'example' => '1583709xxxx',
          ),
        ),
        7 => 
        array (
          'name' => 'HavePhoneNumbers',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '手机号，多个手机号可以使用逗号隔开',
            'type' => 'string',
            'required' => false,
            'example' => '1583709xxxx',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页大小',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'phoneNum and havePhoneNum must be either empty or not empty at the same time',
              ),
              'RequestId' => 
              array (
                'description' => '	
阿里云请求ID',
                'type' => 'string',
                'example' => '45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9',
              ),
              'Code' => 
              array (
                'description' => '错误码',
                'type' => 'string',
                'example' => 'InvalidPhone',
              ),
              'Success' => 
              array (
                'description' => '请求结果',
                'type' => 'string',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => 'data',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '13',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '页大小',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10',
                  ),
                  'PageNo' => 
                  array (
                    'description' => '当前页',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'CallsPerdayResponseList' => 
                  array (
                    'description' => 'array',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'object',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DataId' => 
                        array (
                          'description' => '按天分组',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'HourId' => 
                        array (
                          'description' => '按小时分组',
                          'type' => 'string',
                          'example' => '-1',
                        ),
                        'TenantId' => 
                        array (
                          'description' => '租户id',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'TenantName' => 
                        array (
                          'description' => '租户名称',
                          'type' => 'string',
                          'example' => '50',
                        ),
                        'PhoneNum' => 
                        array (
                          'description' => '手机号',
                          'type' => 'string',
                          'example' => '1583709xxxx',
                        ),
                        'CallOutCnt' => 
                        array (
                          'description' => '外呼次数',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'CallInCnt' => 
                        array (
                          'description' => '来电次数',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'MinuteId' => 
                        array (
                          'description' => '按分钟分组',
                          'type' => 'string',
                          'example' => '-1',
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
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetTenantIdFailed',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'DataIdEndError',
            'errorMessage' => 'dataIdStart must be a time stamp and cannot be empty.',
          ),
          1 => 
          array (
            'errorCode' => 'DataIdStartError',
            'errorMessage' => 'dataIdEnd must be a time stamp and cannot be empty.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidPhone',
            'errorMessage' => 'phoneNum and havePhoneNum must be either empty or not empty at the same time.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceIdCannotBeNull',
            'errorMessage' => 'You must specify InstanceId.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"phoneNum and havePhoneNum must be either empty or not empty at the same time\\",\\n  \\"RequestId\\": \\"45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9\\",\\n  \\"Code\\": \\"InvalidPhone\\",\\n  \\"Success\\": \\"true\\",\\n  \\"Data\\": {\\n    \\"TotalNum\\": 13,\\n    \\"PageSize\\": 10,\\n    \\"PageNo\\": \\"1\\",\\n    \\"CallsPerdayResponseList\\": [\\n      {\\n        \\"DataId\\": \\"-1\\",\\n        \\"HourId\\": \\"-1\\",\\n        \\"TenantId\\": \\"0\\",\\n        \\"TenantName\\": \\"50\\",\\n        \\"PhoneNum\\": \\"1583709xxxx\\",\\n        \\"CallOutCnt\\": \\"1\\",\\n        \\"CallInCnt\\": \\"1\\",\\n        \\"MinuteId\\": \\"-1\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message>phoneNum and havePhoneNum must be either empty or not empty at the same time</Message>\\n<RequestId>45FAB8AB-CFB3-4582-B1A5-9010DEADD8F9</RequestId>\\n<Code>InvalidPhone</Code>\\n<Success>true</Success>\\n<Data>\\n    <TotalNum>13</TotalNum>\\n    <PageSize>10</PageSize>\\n    <PageNo>1</PageNo>\\n    <CallsPerdayResponseList>\\n        <DataId>-1</DataId>\\n        <HourId>-1</HourId>\\n        <TenantId>0</TenantId>\\n        <TenantName>50</TenantName>\\n        <PhoneNum>1583709xxxx</PhoneNum>\\n        <CallOutCnt>1</CallOutCnt>\\n        <CallInCnt>1</CallInCnt>\\n        <MinuteId>-1</MinuteId>\\n    </CallsPerdayResponseList>\\n</Data>","errorExample":""}]',
      'title' => '获取热线日来电次数',
    ),
    'GetCMSIdByForeignId' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'Nick',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '昵称',
            'type' => 'string',
            'required' => false,
            'example' => '张三',
          ),
        ),
        2 => 
        array (
          'name' => 'ForeignId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'zhangsan',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户来源',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
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
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE339D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '账户信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '账号状态',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'CustomerTypeId' => 
                  array (
                    'description' => '客户类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Avatar' => 
                  array (
                    'description' => '头像',
                    'type' => 'string',
                    'example' => 'xxxx',
                  ),
                  'Gender' => 
                  array (
                    'description' => '性别',
                    'type' => 'string',
                    'example' => 'male',
                  ),
                  'ForeignId' => 
                  array (
                    'description' => '外部id',
                    'type' => 'string',
                    'example' => 'zhangsan',
                  ),
                  'UserId' => 
                  array (
                    'description' => '用户id',
                    'type' => 'string',
                    'example' => 'zhangsan',
                  ),
                  'Nick' => 
                  array (
                    'description' => '昵称',
                    'type' => 'string',
                    'example' => '张三',
                  ),
                  'Anonymity' => 
                  array (
                    'description' => '是否匿名',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Phone' => 
                  array (
                    'description' => '电话',
                    'type' => 'string',
                    'example' => '131111111111',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE339D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"Status\\": 1,\\n    \\"CustomerTypeId\\": 1,\\n    \\"Avatar\\": \\"xxxx\\",\\n    \\"Gender\\": \\"male\\",\\n    \\"ForeignId\\": \\"zhangsan\\",\\n    \\"UserId\\": \\"zhangsan\\",\\n    \\"Nick\\": \\"张三\\",\\n    \\"Anonymity\\": false,\\n    \\"Phone\\": \\"131111111111\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE339D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <Status>1</Status>\\n    <CustomerTypeId>1</CustomerTypeId>\\n    <Avatar>xxxx</Avatar>\\n    <Gender>male</Gender>\\n    <ForeignId>zhangsan</ForeignId>\\n    <UserId>zhangsan</UserId>\\n    <Nick>张三</Nick>\\n    <Anonymity>false</Anonymity>\\n    <Phone>131111111111</Phone>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '根据foreignId获取cmsId',
      'summary' => '根据外部id获取客户id。',
    ),
    'GetEntityRoute' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UniqueId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'EntityName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EntityRelationNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'EntityBizCode',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'EntityBizCodeType' => 
                  array (
                    'type' => 'string',
                  ),
                  'GroupId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'EntityId' => 
                  array (
                    'type' => 'string',
                  ),
                  'ServiceId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'EntityBizCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'DepartmentId' => 
                  array (
                    'type' => 'string',
                  ),
                  'UniqueId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'EntityName' => 
                  array (
                    'type' => 'string',
                  ),
                  'ExtInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'EntityRelationNumber' => 
                  array (
                    'type' => 'string',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetEntityRouteList' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'default' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'EntityRelationNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'EntityName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PageNo' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'PageSize' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Total' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'EntityRouteList' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EntityBizCodeType' => 
                        array (
                          'type' => 'string',
                        ),
                        'GroupId' => 
                        array (
                          'type' => 'string',
                        ),
                        'EntityId' => 
                        array (
                          'type' => 'string',
                        ),
                        'ServiceId' => 
                        array (
                          'type' => 'string',
                        ),
                        'DepartmentId' => 
                        array (
                          'type' => 'string',
                        ),
                        'EntityBizCode' => 
                        array (
                          'type' => 'string',
                        ),
                        'UniqueId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'EntityName' => 
                        array (
                          'type' => 'string',
                        ),
                        'ExtInfo' => 
                        array (
                          'type' => 'string',
                        ),
                        'EntityRelationNumber' => 
                        array (
                          'type' => 'string',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetEntityTagRelation' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'maxLength' => 9.223372036854776E+18,
            'minLength' => -1,
            'default' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'maxLength' => 9.223372036854776E+18,
            'minLength' => -1,
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TagName' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagGroupCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'EntityId' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'EntityType' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagGroupName' => 
                    array (
                      'type' => 'string',
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
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetGrantedRoleIds' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '角色id',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '角色id',
                  'type' => 'integer',
                  'format' => 'int64',
                  'example' => '{555555，777777}',
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    0\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取授权给用户的角色id',
      'summary' => '根据坐席账号名称查询悉犀客服工作台坐席的角色权限。',
    ),
    'GetNumLocation' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'PhoneNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136098792',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '号码归属地',
                'type' => 'string',
                'example' => '杭州',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"杭州\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>杭州</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取电话位置',
      'summary' => '获取号码归属地。',
    ),
    'GetOutbounNumList' => 
    array (
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '号码列表信息',
                'type' => 'object',
                'properties' => 
                array (
                  'NumGroup' => 
                  array (
                    'description' => '号码组信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '号码组信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '类型，有以下枚举：
1：号码
2：号码组',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Value' => 
                        array (
                          'description' => '号码组id',
                          'type' => 'string',
                          'example' => 'Jella',
                        ),
                        'Description' => 
                        array (
                          'description' => '号码组描述（号码组名称）',
                          'type' => 'string',
                          'example' => '76',
                        ),
                      ),
                    ),
                  ),
                  'Num' => 
                  array (
                    'description' => '主叫号码信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '主叫号码信息',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '类型，有以下枚举：
1：号码
2：号码组',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Value' => 
                        array (
                          'description' => '主叫号码',
                          'type' => 'string',
                          'example' => '9065446',
                        ),
                        'Description' => 
                        array (
                          'description' => '主叫号码描述（归属地信息）',
                          'type' => 'string',
                          'example' => '浙江省杭州市',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": {\\n    \\"NumGroup\\": [\\n      {\\n        \\"Type\\": 2,\\n        \\"Value\\": \\"Jella\\",\\n        \\"Description\\": \\"76\\"\\n      }\\n    ],\\n    \\"Num\\": [\\n      {\\n        \\"Type\\": 1,\\n        \\"Value\\": \\"9065446\\",\\n        \\"Description\\": \\"浙江省杭州市\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <NumGroup>\\n        <Type>2</Type>\\n        <Value>Jella</Value>\\n        <Description>76</Description>\\n    </NumGroup>\\n    <Num>\\n        <Type>1</Type>\\n        <Value>9065446</Value>\\n        <Description>浙江省杭州市</Description>\\n    </Num>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取外呼号码列表',
      'summary' => '获取外部热线号码列表。',
    ),
    'GetTagList' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'maxLength' => 9.223372036854776E+18,
            'minLength' => -1,
            'default' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'maxLength' => 9.223372036854776E+18,
            'minLength' => -1,
            'default' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ScenarioCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagGroupCode' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagGroupName' => 
                    array (
                      'type' => 'string',
                    ),
                    'TagValues' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Status' => 
                          array (
                            'type' => 'string',
                          ),
                          'Description' => 
                          array (
                            'type' => 'string',
                          ),
                          'TagName' => 
                          array (
                            'type' => 'string',
                          ),
                          'TagGroupCode' => 
                          array (
                            'type' => 'string',
                          ),
                          'TagCode' => 
                          array (
                            'type' => 'string',
                          ),
                          'TagGroupName' => 
                          array (
                            'type' => 'string',
                          ),
                          'EntityRelationNumber' => 
                          array (
                            'type' => 'string',
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
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetTicketByCaseId' => 
    array (
      'summary' => '查询工单信息-DB',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CaseId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MemberId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'QuestionId' => 
                  array (
                    'type' => 'string',
                  ),
                  'QuestionInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'MemberName' => 
                  array (
                    'type' => 'string',
                  ),
                  'SopCateId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'CaseType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Priority' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'ExtAttrs' => 
                  array (
                    'type' => 'object',
                  ),
                  'BuId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'GmtCreate' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'GmtModified' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'EndTime' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'SrType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Owner' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'OwnerName' => 
                  array (
                    'type' => 'string',
                  ),
                  'CaseStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'ChannelId' => 
                  array (
                    'type' => 'string',
                  ),
                  'DepartmentId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'FromInfo' => 
                  array (
                    'type' => 'string',
                  ),
                  'ParentId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'CaseId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetTicketTemplateSchema' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'TemplateId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工单模板id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '2147483648',
            'minimum' => '0',
            'example' => '546754',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '工单模板信息',
                'type' => 'string',
                'example' => '{\\"buId\\":{\\"title\\":\\"租户编码\\",\\"type\\":\\"string\\"},\\"sopCateId\\":{\\"title\\":\\"业务类目\\"}',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidOperation',
            'errorMessage' => 'The operation is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\\\\\\\\\"buId\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"租户编码\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\"},\\\\\\\\\\\\\\"sopCateId\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"业务类目\\\\\\\\\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\\\\\"buId\\\\\\":{\\\\\\"title\\\\\\":\\\\\\"租户编码\\\\\\",\\\\\\"type\\\\\\":\\\\\\"string\\\\\\"},\\\\\\"sopCateId\\\\\\":{\\\\\\"title\\\\\\":\\\\\\"业务类目\\\\\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询模板元数据',
      'summary' => '根据工单模板id查询工单模板信息。',
    ),
    'GetUserToken' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例id',
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '875436',
          ),
        ),
        2 => 
        array (
          'name' => 'Nick',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '昵称',
            'description' => '用户昵称',
            'type' => 'string',
            'required' => false,
            'example' => '花花',
          ),
        ),
        3 => 
        array (
          'name' => 'AppKey',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'appKey',
            'description' => '应用访问标识(由服务方颁发)',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '54678765',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => '错误信息',
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'title' => '鹰眼id',
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-xxxx',
              ),
              'Data' => 
              array (
                'description' => 'token信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Expires' => 
                  array (
                    'description' => 'token失效日期',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1614528000000',
                  ),
                  'Token' => 
                  array (
                    'description' => '用户访问token',
                    'type' => 'string',
                    'example' => 'xxx-xxx-xxxx',
                  ),
                ),
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'title' => '是否调用成功',
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        200 => 
        array (
          0 => 
          array (
            'errorCode' => 'AppInvalid',
            'errorMessage' => 'The APPKEY is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'UserIdNotNull',
            'errorMessage' => 'UserId cannot be null.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidForeignId',
            'errorMessage' => 'The ForeignId is invalid.',
          ),
        ),
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-xxxx\\",\\n  \\"Data\\": {\\n    \\"Expires\\": 1614528000000,\\n    \\"Token\\": \\"xxx-xxx-xxxx\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-xxxx</RequestId>\\n<Data>\\n    <Expires>1614528000000</Expires>\\n    <Token>xxx-xxx-xxxx</Token>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '获取用户token',
      'summary' => '根据用户id获取访问悉犀客服工作台用户token信息。',
    ),
    'GrantRoles' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'Operator',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'RoleId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => true,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'HangupCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '挂断通话',
      'summary' => '坐席挂机。',
    ),
    'HangupThirdCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '挂断三方通话',
      'summary' => '挂断第三方通话。',
    ),
    'HoldCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '通话保持',
      'summary' => '保持通话。',
    ),
    'JoinThirdCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'CallId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的acid',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719786',
          ),
        ),
        4 => 
        array (
          'name' => 'JobId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的jobId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719787',
          ),
        ),
        5 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的connId',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '7719788',
          ),
        ),
        6 => 
        array (
          'name' => 'HoldConnectionId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '入呼后，websocket中的holdConnId（ 仅在双步转时传入）',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '加入三方通话',
      'summary' => '将第三方加入到通话中。',
    ),
    'ListSkillGroup' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'ChannelType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组渠道类型,有以下枚举值：
0：返回所有技能组
1：热线技能组
2：在线技能组
3：在线+热线技能组
4：工单技能组
5：热线+工单节能组
6：在线+工单技能组
7：在线+热线+工单技能组',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '7',
            'minimum' => '0',
            'example' => '2',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '技能组信息',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '技能组对外显示名称',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                    'Description' => 
                    array (
                      'description' => '技能组描述',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                    'ChannelType' => 
                    array (
                      'description' => '技能组渠道类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SkillGroupId' => 
                    array (
                      'description' => '技能组id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123456',
                    ),
                    'Name' => 
                    array (
                      'description' => '技能组名称',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": [\\n    {\\n      \\"DisplayName\\": \\"自动化技能组\\",\\n      \\"Description\\": \\"自动化技能组\\",\\n      \\"ChannelType\\": 2,\\n      \\"SkillGroupId\\": 123456,\\n      \\"Name\\": \\"自动化技能组\\"\\n    }\\n  ],\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>\\n    <DisplayName>自动化技能组</DisplayName>\\n    <Description>自动化技能组</Description>\\n    <ChannelType>2</ChannelType>\\n    <SkillGroupId>123456</SkillGroupId>\\n    <Name>自动化技能组</Name>\\n</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询技能组',
      'summary' => '根据技能组渠道类型查询悉犀客服工作台技能组。',
    ),
    'QueryRelationTickets' => 
    array (
      'summary' => '查询相关工单',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'CaseId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        2 => 
        array (
          'name' => 'CaseType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        3 => 
        array (
          'name' => 'SrType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        5 => 
        array (
          'name' => 'ChannelId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'ChannelType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        7 => 
        array (
          'name' => 'TouchId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        8 => 
        array (
          'name' => 'DealId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        9 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'style' => 'flat',
          'schema' => 
          array (
            'type' => 'object',
          ),
        ),
        10 => 
        array (
          'name' => 'MemberId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        11 => 
        array (
          'name' => 'StartCaseGmtCreate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        12 => 
        array (
          'name' => 'EndCaseGmtCreate',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
        13 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
        14 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'CurrentPage' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'CnePageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'FirstResult' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'TotalResults' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'TotalPage' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'NextPage' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'GmtCreate' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GmtModified' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseGmtCreate' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GaseGmtModified' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'SrType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Owner' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseStatus' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'ChannelId' => 
                    array (
                      'type' => 'string',
                    ),
                    'MemberId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'ExtAttrs' => 
                    array (
                      'type' => 'object',
                    ),
                    'ChannelType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'QuestionInfo' => 
                    array (
                      'type' => 'string',
                    ),
                    'QuestionId' => 
                    array (
                      'type' => 'string',
                    ),
                    'OwnerName' => 
                    array (
                      'type' => 'string',
                    ),
                    'MemberName' => 
                    array (
                      'type' => 'string',
                    ),
                    'RefCaseId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseDepartmentId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseBuId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'FormId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TaskStatus' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'CreatorId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'DealId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GroupId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Priority' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Title' => 
                    array (
                      'type' => 'string',
                    ),
                    'DealTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'DeadLine' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TaskType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'AssignTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'UserServiceId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'GroupName' => 
                    array (
                      'type' => 'string',
                    ),
                    'BuId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'DepartmentId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TemplateId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'FromInfo' => 
                    array (
                      'type' => 'string',
                    ),
                    'ServiceType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'ParentId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CaseId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'TaskId' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'RelationCase' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'GmtCreate' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'GmtModified' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseGmtCreate' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseGmtModified' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseType' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'Owner' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseStatus' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'ChannelId' => 
                          array (
                            'type' => 'string',
                          ),
                          'MemberId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'ExtAttrs' => 
                          array (
                            'type' => 'object',
                          ),
                          'ChannelType' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'QuestionInfoQuestionInfo' => 
                          array (
                            'type' => 'string',
                          ),
                          'QuestionId' => 
                          array (
                            'type' => 'string',
                          ),
                          'OwnerName' => 
                          array (
                            'type' => 'string',
                          ),
                          'MemberName' => 
                          array (
                            'type' => 'string',
                          ),
                          'RefCaseId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseDepartmentId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseBuId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'FormId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'TaskStatus' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'CreatorId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'DealId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'GroupId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'Priority' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'Title' => 
                          array (
                            'type' => 'string',
                          ),
                          'DealTime' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'DeadLine' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'TaskType' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'AssignTime' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'UserServiceId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'GroupName' => 
                          array (
                            'type' => 'string',
                          ),
                          'BuId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'DepartmentId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'TemplateId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'FromInfo' => 
                          array (
                            'type' => 'string',
                          ),
                          'ServiceType' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int32',
                          ),
                          'ParentId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'CaseId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'TaskId' => 
                          array (
                            'type' => 'integer',
                            'format' => 'int64',
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
      'responseDemo' => '',
    ),
    'QueryRingDetailList' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '每页大小（默认为20）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当前页（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始时间戳（毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '1614824872',
          ),
        ),
        3 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '结束时间戳（毫秒）',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '1614824972',
          ),
        ),
        4 => 
        array (
          'name' => 'CallOutStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新的回访状态，有以下枚举
0：未回访
1：无人接听
2：需再次回访
3：号码无效
4：回访成功
5：无需回访',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        5 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展字段，json字符串',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"isCallBack\\":\\"true\\"}',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        7 => 
        array (
          'name' => 'FromPhoneNumList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '主叫号码列表-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'object',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'ToPhoneNumList',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '被叫号码列表-用户手机号码、客服坐席号码、机器号码等',
            'type' => 'object',
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
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '呼损数据信息',
                'type' => 'string',
                'example' => '{"buId": 0,"gmtModified": "2021-03-08T11:10Z","lstVisitCnt": 3,"fromPhoneNum": "130196","gmtCreate": "2021-03-08T09:52Z","uniqueBizId": "13019651928","toPhoneNum": "057126","dateId": "20210308","lstVisitTime": "2021-03-08 10:17:48", "id":555555 ,  "callOutStatus": "4" }',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"buId\\\\\\": 0,\\\\\\"gmtModified\\\\\\": \\\\\\"2021-03-08T11:10Z\\\\\\",\\\\\\"lstVisitCnt\\\\\\": 3,\\\\\\"fromPhoneNum\\\\\\": \\\\\\"130196\\\\\\",\\\\\\"gmtCreate\\\\\\": \\\\\\"2021-03-08T09:52Z\\\\\\",\\\\\\"uniqueBizId\\\\\\": \\\\\\"13019651928\\\\\\",\\\\\\"toPhoneNum\\\\\\": \\\\\\"057126\\\\\\",\\\\\\"dateId\\\\\\": \\\\\\"20210308\\\\\\",\\\\\\"lstVisitTime\\\\\\": \\\\\\"2021-03-08 10:17:48\\\\\\", \\\\\\"id\\\\\\":555555 ,  \\\\\\"callOutStatus\\\\\\": \\\\\\"4\\\\\\" }\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"buId\\": 0,\\"gmtModified\\": \\"2021-03-08T11:10Z\\",\\"lstVisitCnt\\": 3,\\"fromPhoneNum\\": \\"130196\\",\\"gmtCreate\\": \\"2021-03-08T09:52Z\\",\\"uniqueBizId\\": \\"13019651928\\",\\"toPhoneNum\\": \\"057126\\",\\"dateId\\": \\"20210308\\",\\"lstVisitTime\\": \\"2021-03-08 10:17:48\\", \\"id\\":555555 ,  \\"callOutStatus\\": \\"4\\" }</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询呼损数据',
      'summary' => '查询呼损数据。',
    ),
    'QueryServiceConfig' => 
    array (
      'methods' => 
      array (
        0 => 'get',
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
      'operationType' => 'read',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'ViewCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '视图编码，有以下枚举：
在线：serviceContextViewChatStand
热线：serviceContextViewHotlineStand',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'serviceContextViewChatStand',
          ),
        ),
        2 => 
        array (
          'name' => 'Parameters',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补充参数，JSON类型字符串',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"memberId":64007246863,"channelType":2,"channelId":"3a184074ee34426795f3986d306b2689"},"sdkInstance":"9JKPvcl8xaN2"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '服务摘要信息',
                'type' => 'string',
                'example' => '{"binds": {"hk9xtvX6usP2": {"ref": {"fieldCode": "historyCntOf7","label": "7天内服务次数","type": "object","boCode": "serviceContextObj"},"jPath": "children","source": "data"},"hYUi5kwGf0Pm": {"ref": {"fieldCode": "groupName","label": "进线技能组","type": "object","boCode": "serviceContextObj"},"jPath": "children","source": "data"}',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        202 => 
        array (
          0 => 
          array (
            'errorCode' => 'GetTenantIdFailed',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
        203 => 
        array (
          0 => 
          array (
            'errorCode' => 'callRnderFailed',
            'errorMessage' => 'Failed to call the viewRenderService.Render operation.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InstanceIdCannotBeNull',
            'errorMessage' => 'You must specify InstanceId.',
          ),
          1 => 
          array (
            'errorCode' => 'ViewCodeNotNull',
            'errorMessage' => 'You must specify ViewCode.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"binds\\\\\\": {\\\\\\"hk9xtvX6usP2\\\\\\": {\\\\\\"ref\\\\\\": {\\\\\\"fieldCode\\\\\\": \\\\\\"historyCntOf7\\\\\\",\\\\\\"label\\\\\\": \\\\\\"7天内服务次数\\\\\\",\\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\\\"boCode\\\\\\": \\\\\\"serviceContextObj\\\\\\"},\\\\\\"jPath\\\\\\": \\\\\\"children\\\\\\",\\\\\\"source\\\\\\": \\\\\\"data\\\\\\"},\\\\\\"hYUi5kwGf0Pm\\\\\\": {\\\\\\"ref\\\\\\": {\\\\\\"fieldCode\\\\\\": \\\\\\"groupName\\\\\\",\\\\\\"label\\\\\\": \\\\\\"进线技能组\\\\\\",\\\\\\"type\\\\\\": \\\\\\"object\\\\\\",\\\\\\"boCode\\\\\\": \\\\\\"serviceContextObj\\\\\\"},\\\\\\"jPath\\\\\\": \\\\\\"children\\\\\\",\\\\\\"source\\\\\\": \\\\\\"data\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"binds\\": {\\"hk9xtvX6usP2\\": {\\"ref\\": {\\"fieldCode\\": \\"historyCntOf7\\",\\"label\\": \\"7天内服务次数\\",\\"type\\": \\"object\\",\\"boCode\\": \\"serviceContextObj\\"},\\"jPath\\": \\"children\\",\\"source\\": \\"data\\"},\\"hYUi5kwGf0Pm\\": {\\"ref\\": {\\"fieldCode\\": \\"groupName\\",\\"label\\": \\"进线技能组\\",\\"type\\": \\"object\\",\\"boCode\\": \\"serviceContextObj\\"},\\"jPath\\": \\"children\\",\\"source\\": \\"data\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '查询服务配置',
      'summary' => '根据视图code获取服务摘要信息。',
    ),
    'QuerySkillGroups' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小（默认为20）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        4 => 
        array (
          'name' => 'GroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组名称',
            'type' => 'string',
            'required' => false,
            'example' => '自动化技能组',
          ),
        ),
        5 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组类型,有以下枚举值： 1：热线 2：在线
4：工单',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'maximum' => '9223372036854775807',
            'minimum' => '-1',
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'OnePageSize' => 
              array (
                'description' => '每页的数量',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'TotalPage' => 
              array (
                'description' => '总页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '4',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TotalResults' => 
              array (
                'description' => '总共记录数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '76',
              ),
              'Data' => 
              array (
                'description' => '数据',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '数据信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'description' => '技能组对外显示名称',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                    'Description' => 
                    array (
                      'description' => '技能组描述',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                    'ChannelType' => 
                    array (
                      'description' => '技能组渠道类型',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'SkillGroupName' => 
                    array (
                      'description' => '技能组名称',
                      'type' => 'string',
                      'example' => '自动化技能组',
                    ),
                    'SkillGroupId' => 
                    array (
                      'description' => '技能组id',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '123456',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"OnePageSize\\": 20,\\n  \\"TotalPage\\": 4,\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"CurrentPage\\": 1,\\n  \\"TotalResults\\": 76,\\n  \\"Data\\": [\\n    {\\n      \\"DisplayName\\": \\"自动化技能组\\",\\n      \\"Description\\": \\"自动化技能组\\",\\n      \\"ChannelType\\": 2,\\n      \\"SkillGroupName\\": \\"自动化技能组\\",\\n      \\"SkillGroupId\\": 123456\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<OnePageSize>20</OnePageSize>\\n<TotalPage>4</TotalPage>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<CurrentPage>1</CurrentPage>\\n<TotalResults>76</TotalResults>\\n<Data>\\n    <DisplayName>自动化技能组</DisplayName>\\n    <Description>自动化技能组</Description>\\n    <ChannelType>2</ChannelType>\\n    <SkillGroupName>自动化技能组</SkillGroupName>\\n    <SkillGroupId>123456</SkillGroupId>\\n</Data>","errorExample":""}]',
      'title' => '查询技能组',
      'summary' => '通过技能组渠道类型、技能组名称、技能组id查询悉犀客服工作台技能组列表。',
    ),
    'RemoveSkillGroup' => 
    array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '技能组id',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '删除技能组',
      'summary' => '根据技能组id删除悉犀客服工作台技能组。',
    ),
    'SendOutboundCommand' => 
    array (
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'CallingNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'default' => '-1',
          ),
        ),
        3 => 
        array (
          'name' => 'CalledNumber',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'CustomerInfo',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'StartCall' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Caller',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线外呼主叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '9065446',
          ),
        ),
        4 => 
        array (
          'name' => 'Callee',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线外呼被叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136098792',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '发起外呼',
      'summary' => '发起外呼。',
    ),
    'StartCallV2' => 
    array (
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '坐席账号名称（坐席登录名）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Caller',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线外呼主叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '9065446',
          ),
        ),
        4 => 
        array (
          'name' => 'Callee',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '热线外呼被叫号码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136098792',
          ),
        ),
        5 => 
        array (
          'name' => 'JsonMsg',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'JsonMsg',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"外呼原因":"工单处理"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '发起外呼',
      'summary' => '发起外呼V2。',
    ),
    'StartChatWork' => 
    array (
      'summary' => '修改在线客服状态为上班。',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'instanceId',
            'description' => '实例id',
            'type' => 'string',
            'required' => true,
            'example' => 'ccc_xspace***',
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'accountName',
            'description' => '坐席账号名称，实例内唯一（登录名）',
            'type' => 'string',
            'required' => true,
            'example' => 'account1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'result',
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxx',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-xxxx',
              ),
              'HttpStatusCode' => 
              array (
                'title' => 'httpStatusCode',
                'description' => 'http状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'title' => 'data',
                'description' => ' 调用结果',
                'type' => 'string',
                'example' => '1',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Agent.NotFound',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
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
            'errorCode' => 'IdempotentParameterMismatch',
            'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-xxxx\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Data\\": \\"1\\",\\n  \\"Code\\": \\"Agent.NotFound\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartChatWorkResponse>\\n    <Message>xxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-xxxx</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Data>1</Data>\\n    <Code>Agent.NotFound</Code>\\n    <Success>true</Success>\\n</StartChatWorkResponse>","errorExample":""}]',
      'title' => '在线客服上班',
    ),
    'UpdateCustomer' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProdLineId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '产品线ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '10552599',
          ),
        ),
        1 => 
        array (
          'name' => 'BizType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'BizType',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'xp_commerce_aliyun',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '名称',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '张三',
          ),
        ),
        3 => 
        array (
          'name' => 'TypeCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户类型',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'Phone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '电话号码',
            'type' => 'string',
            'required' => false,
            'example' => '1560000xxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        6 => 
        array (
          'name' => 'ManagerName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '管理人姓名',
            'type' => 'string',
            'required' => false,
            'example' => '管理人',
          ),
        ),
        7 => 
        array (
          'name' => 'Contacter',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建人',
            'type' => 'string',
            'required' => false,
            'example' => '123',
          ),
        ),
        8 => 
        array (
          'name' => 'Industry',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '行业',
            'type' => 'string',
            'required' => false,
            'example' => '服饰',
          ),
        ),
        9 => 
        array (
          'name' => 'Position',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '职位',
            'type' => 'string',
            'required' => false,
            'example' => '主管',
          ),
        ),
        10 => 
        array (
          'name' => 'Email',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '邮箱',
            'type' => 'string',
            'required' => false,
            'example' => '123@123.com',
          ),
        ),
        11 => 
        array (
          'name' => 'Dingding',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '钉钉账号',
            'type' => 'string',
            'required' => false,
            'example' => '123yiyo',
          ),
        ),
        12 => 
        array (
          'name' => 'OuterId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部id',
            'type' => 'string',
            'required' => false,
            'example' => '10000011',
          ),
        ),
        13 => 
        array (
          'name' => 'OuterIdType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '外部类型',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'CustomerId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '24027',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '客户数据',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '{"CustomerId":"24027"}',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": 0,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新客户信息',
      'summary' => '更新客户。',
    ),
    'UpdateEntityTagRelation' => 
    array (
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EntityTagParam',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'maxLength' => 9.223372036854776E+18,
            'minLength' => -1,
            'default' => '20',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidParameter',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'UpdateRingStatus' => 
    array (
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
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'UniqueBizId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '数据唯一主键',
            'type' => 'string',
            'required' => false,
            'example' => '78604',
          ),
        ),
        1 => 
        array (
          'name' => 'CallOutStatus',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '更新的回访状态，有以下枚举
0：未回访
1：无人接听
2：需再次回访
3：号码无效
4：回访成功
5：无需回访',
            'type' => 'string',
            'required' => false,
            'example' => '4',
          ),
        ),
        2 => 
        array (
          'name' => 'Extra',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '扩展字段，json字符串',
            'type' => 'string',
            'required' => false,
            'example' => '{\\"isCallBack\\":\\"true\\"}',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Data' => 
              array (
                'description' => '查询结果，json字符串',
                'type' => 'string',
                'example' => '{"BizId": "78604"}',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Data\\": \\"{\\\\\\"BizId\\\\\\": \\\\\\"78604\\\\\\"}\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Data>{\\"BizId\\": \\"78604\\"}</Data>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新外呼状态',
      'summary' => '更新回访状态。',
    ),
    'UpdateRole' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'RoleId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'RoleName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'Operator',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'PermissionId',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'required' => false,
            'maxItems' => 200,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Code' => 
              array (
                'type' => 'string',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'UpdateSkillGroup' => 
    array (
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        1 => 
        array (
          'name' => 'SkillGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组id',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '1',
            'example' => '123456',
          ),
        ),
        2 => 
        array (
          'name' => 'SkillGroupName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组名称',
            'type' => 'string',
            'required' => false,
            'example' => '自动化测试',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组描述',
            'type' => 'string',
            'required' => false,
            'example' => '自动化测试',
          ),
        ),
        4 => 
        array (
          'name' => 'DisplayName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '技能组对外显示名称',
            'type' => 'string',
            'required' => false,
            'example' => '自动化测试',
          ),
        ),
        5 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        6 => 
        array (
          'name' => 'ChannelType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '渠道类型',
            'description' => '渠道类型',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
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
            'description' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误描述',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
              'Code' => 
              array (
                'description' => '错误编码',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
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
            'errorCode' => 'InvalidInstanceId',
            'errorMessage' => 'The specified instance is unavailable or does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 0\\n}","errorExample":""},{"type":"xml","example":"<Message>xxxx</Message>\\n<RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n<Code>Success</Code>\\n<Success>true</Success>","errorExample":""}]',
      'title' => '更新技能组',
      'summary' => '根据技能组id修改悉犀客服工作台技能组信息。',
    ),
    'ListAllHotLineSkillGroups' => 
    array (
      'summary' => '查询某个租户下所有热线类型技能组及技能组分类',
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DepGroup' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DepGroupName' => 
                        array (
                          'type' => 'string',
                        ),
                        'DepGroupId' => 
                        array (
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                      ),
                    ),
                    'SkillGroupAgents' => 
                    array (
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'SkillGroup' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'DisplayName' => 
                              array (
                                'type' => 'string',
                              ),
                              'SkillGroupId' => 
                              array (
                                'type' => 'integer',
                                'format' => 'int64',
                              ),
                            ),
                          ),
                          'Agents' => 
                          array (
                            'type' => 'array',
                            'items' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AccountName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DisplayName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'AgentId' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                                'Status' => 
                                array (
                                  'type' => 'integer',
                                  'format' => 'int64',
                                ),
                                'Acid' => 
                                array (
                                  'type' => 'string',
                                ),
                                'JobId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ConnId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'CustomerPhone' => 
                                array (
                                  'type' => 'string',
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
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
        ),
      ),
    ),
    'AnwserAgentMonitor' => 
    array (
      'summary' => '接通坐席监听',
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'requestId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'clientToken',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'CallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerType',
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'CallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'StsTokenCallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'InstanceId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AccountName',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CallId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'JobId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ConnectionId',
            'type' => 'string',
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
            'title' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
    'GetForeignIdByCMSId' => 
    array (
      'summary' => '通过CMSId获取ForeignId',
      'methods' => 
      array (
        0 => 'post',
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
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'CustomerTypeId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'Avatar' => 
                  array (
                    'type' => 'string',
                  ),
                  'Gender' => 
                  array (
                    'type' => 'string',
                  ),
                  'ForeignId' => 
                  array (
                    'type' => 'string',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Nick' => 
                  array (
                    'type' => 'string',
                  ),
                  'Anonymity' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'Phone' => 
                  array (
                    'type' => 'string',
                  ),
                  'Code' => 
                  array (
                    'type' => 'string',
                  ),
                  'Success' => 
                  array (
                    'type' => 'boolean',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'HangUpAgentMonitor' => 
    array (
      'summary' => '挂断坐席监听',
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'requestId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'clientToken',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'CallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerType',
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'CallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'StsTokenCallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'InstanceId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AccountName',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'CallId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'JobId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'ConnectionId',
            'type' => 'string',
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
            'title' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
    'StartAgentMonitor' => 
    array (
      'summary' => '发起坐席监听',
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CallerParentId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerParentId',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'RequestId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'requestId',
            'type' => 'string',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'clientToken',
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'CallerType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerType',
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'CallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'callerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'StsTokenCallerUid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'stsTokenCallerUid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'param1',
            'type' => 'string',
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'param2',
            'type' => 'string',
            'required' => false,
          ),
        ),
        8 => 
        array (
          'name' => 'CallId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'param4',
            'type' => 'string',
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'JobId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'param5',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'ConnectionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'param6',
            'type' => 'string',
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
            'title' => 'result',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'title' => 'message',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'title' => 'requestId',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'title' => 'code',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'title' => 'success',
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
    ),
    'BindAgentHotlinePhone' => 
    array (
      'summary' => '更新小二扩展手机号信息。',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
        3 => 
        array (
          'name' => 'Phone',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '手机号',
            'description' => '手机号',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136********',
          ),
        ),
        4 => 
        array (
          'name' => 'VerifyCode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '验证码',
            'description' => '验证码',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123456',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Void>',
            'description' => 'Result<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误编码，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'NoTenantFound',
              ),
              'Message' => 
              array (
                'description' => '错误描述，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<BindAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</BindAgentHotlinePhoneResponse>","errorExample":""}]',
      'title' => '绑定坐席手机号',
    ),
    'GetHotlineAgentDetailWithChannel' => 
    array (
      'summary' => '同 GetHotlineAgentDetail，返回上班渠道',
      'methods' => 
      array (
        0 => 'get',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AgentStatusCode' => 
                  array (
                    'type' => 'string',
                  ),
                  'Token' => 
                  array (
                    'type' => 'string',
                  ),
                  'AgentId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'Assigned' => 
                  array (
                    'type' => 'boolean',
                  ),
                  'RestType' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'AgentStatus' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int32',
                  ),
                  'TenantId' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'WorkChannel' => 
                  array (
                    'title' => '上班渠道，PC电脑上班，PSTN手机上班',
                    'type' => 'string',
                  ),
                  'ExtAttr' => 
                  array (
                    'title' => '扩展字段',
                    'type' => 'string',
                  ),
                ),
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int64',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
    ),
    'GetAgentHotlinePhone' => 
    array (
      'summary' => '获取小二扩展信息。',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<String>',
            'description' => 'Result<String>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误编码，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'NoTenantFound',
              ),
              'Message' => 
              array (
                'description' => '错误描述，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'Data' => 
              array (
                'title' => '手机号',
                'description' => '手机号',
                'type' => 'string',
                'example' => '136********',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"Data\\": \\"136********\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <Data>136********</Data>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</GetAgentHotlinePhoneResponse>","errorExample":""}]',
      'title' => '查询坐席绑定手机号',
    ),
    'GetAgentHotline' => 
    array (
      'summary' => '查询热线坐席信息与热线技能组',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Agent>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AgentId' => 
                  array (
                    'title' => '小二ID',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AccountName' => 
                  array (
                    'title' => '坐席账号名称（坐席登录名）',
                    'type' => 'string',
                  ),
                  'DisplayName' => 
                  array (
                    'title' => 'XP账号对外展示名称',
                    'type' => 'string',
                  ),
                  'GroupList' => 
                  array (
                    'title' => '热线技能组',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SkillGroupId' => 
                        array (
                          'title' => '技能组ID',
                          'type' => 'integer',
                          'format' => 'int64',
                        ),
                        'Name' => 
                        array (
                          'title' => '技能组名称',
                          'type' => 'string',
                        ),
                        'DisplayName' => 
                        array (
                          'title' => '技能组对外显示名',
                          'type' => 'string',
                        ),
                      ),
                    ),
                  ),
                  'DepartmentId' => 
                  array (
                    'title' => '部门ID',
                    'type' => 'string',
                  ),
                  'AgentPhone' => 
                  array (
                    'title' => '坐席绑定手机号',
                    'type' => 'string',
                  ),
                  'SkillGroups' => 
                  array (
                    'title' => '热线技能组，格式："[123,456,......,789]"',
                    'type' => 'string',
                  ),
                  'ExtAttr' => 
                  array (
                    'title' => '扩展字段',
                    'type' => 'string',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
    ),
    'UnbindAgentHotlinePhone' => 
    array (
      'summary' => '更新小二扩展手机号信息为空。',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'description' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Void>',
            'description' => 'Result<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误编码，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'NoTenantFound',
              ),
              'Message' => 
              array (
                'description' => '错误描述，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<UnbindAgentHotlinePhoneResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</UnbindAgentHotlinePhoneResponse>","errorExample":""}]',
      'title' => '解绑坐席手机号',
    ),
    'GetAgentWorkStatus' => 
    array (
      'summary' => '获取坐席签入签出状态查询。',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'description' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号的映射',
            'description' => '坐席账号名称(唯一值)，外部账号与XP账号的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '123@123.com',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<AgentHotlineWorkStatus>',
            'description' => 'Result<AgentHotlineWorkStatus>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误编码，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'NoTenantFound',
              ),
              'Message' => 
              array (
                'description' => '错误描述，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'xxxxx',
              ),
              'Data' => 
              array (
                'description' => '坐席上班状态对象',
                'type' => 'object',
                'properties' => 
                array (
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'description' => '租户ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '905',
                  ),
                  'AgentId' => 
                  array (
                    'title' => '小二ID',
                    'description' => '小二ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1059054',
                  ),
                  'AccountName' => 
                  array (
                    'title' => '坐席账号名称（坐席登录名）',
                    'description' => '坐席账号名称（坐席登录名）',
                    'type' => 'string',
                    'example' => '123@123.com',
                  ),
                  'AgentStatusCode' => 
                  array (
                    'title' => '坐席上班状态code',
                    'description' => '坐席上班状态code',
                    'type' => 'string',
                    'example' => 'AgentCheckin',
                  ),
                  'AgentStatusDesc' => 
                  array (
                    'title' => '坐席上班状态描述',
                    'description' => '坐席上班状态描述',
                    'type' => 'string',
                    'example' => '坐席签入状态',
                  ),
                  'WorkChannel' => 
                  array (
                    'title' => '上班渠道，PSTN手机上班，PC电脑上班',
                    'description' => '上班渠道，PSTN手机上班，PC电脑上班',
                    'type' => 'string',
                    'example' => 'PC',
                  ),
                  'ExtAttr' => 
                  array (
                    'title' => '扩展字段',
                    'description' => '扩展字段',
                    'type' => 'string',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxxx\\",\\n  \\"Data\\": {\\n    \\"TenantId\\": 905,\\n    \\"AgentId\\": 1059054,\\n    \\"AccountName\\": \\"123@123.com\\",\\n    \\"AgentStatusCode\\": \\"AgentCheckin\\",\\n    \\"AgentStatusDesc\\": \\"坐席签入状态\\",\\n    \\"WorkChannel\\": \\"PC\\",\\n    \\"ExtAttr\\": \\"\\"\\n  },\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAgentWorkStatusResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxxx</Message>\\n    <Data>\\n        <TenantId>905</TenantId>\\n        <AgentId>1059054</AgentId>\\n        <AccountName>123@123.com</AccountName>\\n        <AgentStatusCode>AgentCheckin</AgentStatusCode>\\n        <AgentStatusDesc>坐席签入状态</AgentStatusDesc>\\n        <WorkChannel>PC</WorkChannel>\\n    </Data>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</GetAgentWorkStatusResponse>","errorExample":""}]',
      'title' => '查询热线坐席上班状态',
    ),
    'SendVerificationCode' => 
    array (
      'summary' => '坐席绑定手机号，发送验证码短信。',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'description' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
            'required' => false,
            'example' => '46c1341e-2648-447a-9b11-70b6a298d94d',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'description' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ccc_xp_pre-cn-***',
          ),
        ),
        2 => 
        array (
          'name' => 'Phone',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '手机号（坐席绑定手机号码）',
            'description' => '手机号（坐席绑定手机号码）',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '136********',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<Void>',
            'description' => 'Result<Void>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'description' => '接口调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '错误编码，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'NoTenantFound',
              ),
              'Message' => 
              array (
                'description' => '错误描述，当success为true时，该字段为空',
                'type' => 'string',
                'example' => 'xxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，用于跟踪错误原因',
                'type' => 'string',
                'example' => 'EE338D98-9BD3-4413-B165',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Success\\": true,\\n  \\"Code\\": \\"NoTenantFound\\",\\n  \\"Message\\": \\"xxxx\\",\\n  \\"RequestId\\": \\"EE338D98-9BD3-4413-B165\\"\\n}","errorExample":""},{"type":"xml","example":"<SendVerificationCodeResponse>\\n    <Success>true</Success>\\n    <Code>NoTenantFound</Code>\\n    <Message>xxxx</Message>\\n    <RequestId>EE338D98-9BD3-4413-B165</RequestId>\\n</SendVerificationCodeResponse>","errorExample":""}]',
      'title' => '发送验证码短信',
      'description' => '发送验证码时间窗口：2分钟 (即：2分钟之内，一个号码不允许重复发) ；
验证码有效时间：15分钟 ；
发送次数验证：6个小时内相同手机号码发送验证码次数不超过20次 ；',
    ),
    'StartHotlineWork' => 
    array (
      'summary' => '热线坐席上班',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '客户请求唯一id，用于幂等校验，可以用uuid生成',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => 'AICCS实例ID，在智能联络中心控制台上可以看到',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席账号名称(唯一值)，外部账号与XP账号登录名的映射',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'WorkChannel',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '上班渠道，枚举值：(手机上班)PSTN ;  (PC上班)PC',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'SkillGroups',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '坐席热线技能组，格式："[123,456,......,789]"',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Result<AgentHotlineWorkStatus>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TenantId' => 
                  array (
                    'title' => '租户ID',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AgentId' => 
                  array (
                    'title' => '小二ID',
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AccountName' => 
                  array (
                    'title' => '坐席账号名称（坐席登录名）',
                    'type' => 'string',
                  ),
                  'AgentStatusCode' => 
                  array (
                    'title' => '坐席上班状态code',
                    'type' => 'string',
                  ),
                  'AgentStatusDesc' => 
                  array (
                    'title' => '坐席上班状态描述',
                    'type' => 'string',
                  ),
                  'WorkChannel' => 
                  array (
                    'title' => '上班渠道，PSTN手机上班，PC电脑上班',
                    'type' => 'string',
                  ),
                  'AgentToken' => 
                  array (
                    'title' => '前端token',
                    'type' => 'string',
                  ),
                  'ExtAttr' => 
                  array (
                    'title' => '扩展字段',
                    'type' => 'string',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          1 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
    ),
    'FinishHotlineServiceNew' => 
    array (
      'summary' => '热线下班接口，参考FinishHotlineService，坐席通话中下班失败',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AccountName',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Code' => 
              array (
                'type' => 'string',
              ),
              'Success' => 
              array (
                'type' => 'boolean',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
          2 => 
          array (
            'errorCode' => 'NoAgentFound',
            'errorMessage' => 'The specified agent does not exist.',
          ),
        ),
      ),
    ),
    'GetOnlineTouchSessionList' => 
    array (
      'summary' => '查询在线会话记录信息列表【以touch为维度】',
      'methods' => 
      array (
        0 => 'post',
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
        1 => 
        array (
          'BearerToken' => 
          array (
          ),
        ),
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClientToken',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'GroupIds',
          'in' => 'formData',
          'style' => 'repeatList',
          'schema' => 
          array (
            'title' => '技能组id',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'integer',
              'format' => 'int64',
            ),
            'maxItems' => 10,
          ),
        ),
        3 => 
        array (
          'name' => 'StartDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '开始时间【会话接通时间筛选范围】，格式：时间戳(毫秒)',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'EndDate',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '结束时间【会话接通时间筛选范围】，格式：时间戳(毫秒)',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        5 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '当前页',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        6 => 
        array (
          'name' => 'PageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '页数，默认10，最大值30',
            'type' => 'integer',
            'format' => 'int32',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'PageResult<OnlineSessionInfo>',
            'type' => 'object',
            'properties' => 
            array (
              'Success' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'title' => '错误码',
                'type' => 'string',
              ),
              'Message' => 
              array (
                'title' => '错误信息',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'UserForeignId' => 
                    array (
                      'title' => '外部会员ID',
                      'type' => 'string',
                    ),
                    'SessionId' => 
                    array (
                      'title' => '会话ID，消息记录对象MessageInfo实例的唯一编码，与接触编码TouchId为1对多关系',
                      'type' => 'string',
                    ),
                    'TouchId' => 
                    array (
                      'title' => '接触编码，用户进线后，多次转交到不同人工，会生成多个接触编码',
                      'type' => 'string',
                    ),
                    'ChannelId' => 
                    array (
                      'title' => '当次进线编码，同sid',
                      'type' => 'string',
                    ),
                    'GroupId' => 
                    array (
                      'title' => '技能组ID',
                      'type' => 'string',
                    ),
                    'GroupName' => 
                    array (
                      'title' => '技能组名称',
                      'type' => 'string',
                    ),
                    'FirstTime' => 
                    array (
                      'title' => '会话接通时间，时间戳',
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'MessageInfo' => 
                    array (
                      'title' => '对话详情记录列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'MessageId' => 
                          array (
                            'title' => '消息序列号',
                            'type' => 'integer',
                            'format' => 'int64',
                          ),
                          'SenderId' => 
                          array (
                            'title' => '消息发送人ID',
                            'type' => 'string',
                          ),
                          'SenderName' => 
                          array (
                            'title' => '消息发送人名称',
                            'type' => 'string',
                          ),
                          'SenderType' => 
                          array (
                            'title' => '消息发送人，枚举值：1会员，2客服',
                            'type' => 'string',
                          ),
                          'Content' => 
                          array (
                            'title' => '消息内容',
                            'type' => 'string',
                          ),
                          'GmtCreated' => 
                          array (
                            'title' => '消息发送实际，格式：时间戳',
                            'type' => 'string',
                          ),
                          'Status' => 
                          array (
                            'title' => '消息日志的状态，0默认，50撤回',
                            'type' => 'string',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PageNo' => 
              array (
                'title' => '当前页',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'TotalResults' => 
              array (
                'title' => '总记录数',
                'type' => 'integer',
                'format' => 'int32',
              ),
              'PageSize' => 
              array (
                'title' => '页数',
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'NoTenantFound',
            'errorMessage' => 'The specified tenant does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'SystemError',
            'errorMessage' => 'A system error occurred. Please contact the administrator.',
          ),
        ),
      ),
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'scsp.aliyuncs.com',
    ),
  ),
);
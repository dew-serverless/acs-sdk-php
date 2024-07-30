<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'EmrStudio',
        'version' => '2024-04-30',
    ],
    'directories' => [
        [
            'id' => 192395,
            'title' => '项目管理',
            'type' => 'directory',
            'children' => [
                'DescribeProject',
                'ListProjects',
            ],
        ],
        [
            'id' => 192393,
            'title' => '工作流管理',
            'type' => 'directory',
            'children' => [
                'RunWorkflow',
                'ListWorkflows',
                'DescribeWorkflow',
                'UpdateWorkflow',
                'CreateWorkflow',
                'DeleteWorkflow',
            ],
        ],
        [
            'id' => 192403,
            'title' => '工作流实例管理',
            'type' => 'directory',
            'children' => [
                'ListWorkflowInstances',
                'DescribeWorkflowInstance',
            ],
        ],
        [
            'id' => 192406,
            'title' => '手动任务管理',
            'type' => 'directory',
            'children' => [
                'DescribeManualTask',
                'ListManualTasks',
            ],
        ],
        [
            'id' => 192409,
            'title' => '手动任务实例管理',
            'type' => 'directory',
            'children' => [
                'DescribeManualTaskInstance',
                'ListManualTaskInstances',
            ],
        ],
        [
            'id' => 192412,
            'title' => '任务管理',
            'type' => 'directory',
            'children' => [
                'ListTasks',
                'DescribeTask',
            ],
        ],
        [
            'id' => 192415,
            'title' => '任务实例管理',
            'type' => 'directory',
            'children' => [
                'DescribeTaskInstance',
                'ListTaskInstances',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'DescribeProject' => [
            'summary' => '获取项目详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '218057',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceBYNX2K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间id',
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => '请求id',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B897B94B-6754-5D09-AB8C-2E8186CCADC0',
                            ],
                            'projectId' => [
                                'description' => '项目ID',
                                'type' => 'string',
                                'example' => 'p-3q9jo749ne5****',
                            ],
                            'name' => [
                                'title' => '项目名称',
                                'description' => '项目名称',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'test_project_name',
                            ],
                            'description' => [
                                'title' => '项目描述',
                                'description' => '项目描述',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'this is a project description',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"B897B94B-6754-5D09-AB8C-2E8186CCADC0\\",\\n  \\"projectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"name\\": \\"test_project_name\\",\\n  \\"description\\": \\"this is a project description\\"\\n}","type":"json"}]',
            'title' => '获取项目详情',
        ],
        'ListProjects' => [
            'summary' => '获取项目列表',
            'path' => '/dolphinscheduler/v3/projects',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221489',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceBYNX2K',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
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
                            'nextToken' => [
                                'title' => 'Id of the request',
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '项目',
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'description' => '项目名称',
                                            'type' => 'string',
                                            'example' => 'project_name',
                                        ],
                                        'description' => [
                                            'description' => '项目描述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'projectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'p-3q9jo749ne5****',
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"data\\": [\\n    {\\n      \\"name\\": \\"project_name\\",\\n      \\"description\\": \\"test\\",\\n      \\"projectId\\": \\"p-3q9jo749ne5****\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"totalSize\\": 10\\n}","type":"json"}]',
            'title' => '获取项目列表',
        ],
        'RunWorkflow' => [
            'summary' => '运行工作流',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/executors/run-workflow',
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
                'abilityTreeCode' => '219779',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wg-acfmv4opbs****',
                    ],
                ],
                [
                    'name' => 'execType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'COMPLEMENT_DATA' => '补数',
                            'START_PROCESS' => '运行工作流',
                        ],
                        'example' => 'START_PROCESS',
                    ],
                ],
                [
                    'name' => 'failureStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '失败策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CONTINUE' => '继续',
                            'END' => '结束',
                        ],
                        'example' => 'END',
                    ],
                ],
                [
                    'name' => 'alertStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ALL' => '成功或失败都发',
                            'SUCCESS' => '成功发',
                            'NONE' => '都不发',
                            'FAILURE' => '失败发',
                        ],
                        'example' => 'NONE',
                    ],
                ],
                [
                    'name' => 'alertGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ag-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'workflowInstancePriority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例优先级',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LOWEST' => 'LOWEST',
                            'HIGH' => 'HIGH',
                            'MEDIUM' => 'MEDIUM',
                            'LOW' => 'LOW',
                            'HIGHEST' => 'HIGHEST',
                        ],
                        'example' => 'MEDIUM',
                    ],
                ],
                [
                    'name' => 'startParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '启动参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1":"value1"}',
                    ],
                ],
                [
                    'name' => 'dryRun',
                    'in' => 'query',
                    'schema' => [
                        'description' => '空跑标识',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'complementDependentMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补数依赖模式',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'OFF_MODE' => '关闭',
                            'ALL_DEPENDENT' => '打开',
                        ],
                        'example' => 'OFF_MODE',
                    ],
                ],
                [
                    'name' => 'runMode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补数执行方式',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'RUN_MODE_SERIAL' => '串行执行',
                            'RUN_MODE_PARALLEL' => '并行执行',
                        ],
                        'example' => 'RUN_MODE_PARALLEL',
                    ],
                ],
                [
                    'name' => 'expectedParallelismNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补数并行度，范围1~7',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'scheduleTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '补数调度日期范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-01-01 00:00:00,2024-01-02 00:00:00',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'success' => [
                                'description' => '调用是否成功',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
            'title' => '运行工作流',
        ],
        'ListWorkflows' => [
            'summary' => '获取工作流列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221672',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'workflowId' => [
                                            'description' => '工作流ID',
                                            'type' => 'string',
                                            'example' => 'w-3q9jo749ne5****',
                                        ],
                                        'name' => [
                                            'description' => '工作流名称',
                                            'type' => 'string',
                                            'example' => 'workflow_name',
                                        ],
                                        'description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => 'workflow description',
                                        ],
                                        'createTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2024-01-01 00:00:00',
                                        ],
                                        'updateTime' => [
                                            'description' => '修改时间',
                                            'type' => 'string',
                                            'example' => '2024-01-01 00:00:00',
                                        ],
                                        'parentDirectoryId' => [
                                            'description' => '目录ID',
                                            'type' => 'string',
                                            'example' => 'wd-3q9jo749ne5****',
                                        ],
                                    ],
                                ],
                            ],
                            'nextToken' => [
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc****',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n      \\"name\\": \\"workflow_name\\",\\n      \\"description\\": \\"workflow description\\",\\n      \\"createTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"updateTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"parentDirectoryId\\": \\"wd-3q9jo749ne5****\\"\\n    }\\n  ],\\n  \\"nextToken\\": \\"123abc****\\",\\n  \\"totalSize\\": 10,\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '获取工作流列表',
        ],
        'DescribeWorkflow' => [
            'summary' => '获取工作流详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221441',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-n72kong0832****',
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
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '611AD6E6-BFE3-5897-AA12-569F79DBAF9B',
                            ],
                            'workflow' => [
                                'description' => '工作流',
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'description' => '工作流ID',
                                        'type' => 'string',
                                        'example' => 'w-n72kong0832****',
                                    ],
                                    'name' => [
                                        'description' => '工作流名称',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'description' => [
                                        'description' => '工作流描述',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'workflowParams' => [
                                        'description' => '工作流参数',
                                        'type' => 'string',
                                        'example' => '  [{"prop":"key1","value":"value1"}]',
                                    ],
                                    'parentDirectoryId' => [
                                        'description' => '目录ID',
                                        'type' => 'string',
                                        'example' => 'wd-n72kong0832****',
                                    ],
                                    'timeout' => [
                                        'description' => '超时的时间，单位：分钟',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'executionType' => [
                                        'description' => '执行策略',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'SERIAL_WAIT' => '串行等待',
                                            'PARALLEL' => '并行',
                                        ],
                                        'example' => 'PARALLEL',
                                    ],
                                    'createTime' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2024-01-01 00:00:00',
                                    ],
                                    'updateTime' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2024-01-01 00:00:00',
                                    ],
                                ],
                            ],
                            'tasks' => [
                                'description' => '任务列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'taskId' => [
                                            'description' => '任务ID',
                                            'type' => 'string',
                                            'example' => 't-n72kong0832****',
                                        ],
                                        'name' => [
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'task_name',
                                        ],
                                        'version' => [
                                            'description' => '任务版本',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'description' => [
                                            'description' => '任务描述',
                                            'type' => 'string',
                                            'example' => 'task description',
                                        ],
                                    ],
                                ],
                            ],
                            'taskRelations' => [
                                'description' => '任务依赖关系列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务依赖关系',
                                    'type' => 'object',
                                    'properties' => [
                                        'preTaskId' => [
                                            'description' => '上游任务id，如果为0，则说明没有上游节点',
                                            'type' => 'string',
                                            'example' => 't-n72kong0832****',
                                        ],
                                        'postTaskId' => [
                                            'description' => '下游任务id',
                                            'type' => 'string',
                                            'example' => 't-n72kong0832****',
                                        ],
                                    ],
                                ],
                            ],
                            'schedule' => [
                                'description' => '定时调度信息',
                                'type' => 'object',
                                'properties' => [
                                    'scheduleState' => [
                                        'description' => '调度状态',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'OFFLINE' => '下线',
                                            'ONLINE' => '上线',
                                        ],
                                        'example' => 'OFFLINE',
                                    ],
                                    'scheduleStartTime' => [
                                        'description' => '调度起始时间',
                                        'type' => 'string',
                                        'example' => '2024-01-01 00:00:00',
                                    ],
                                    'scheduleEndTime' => [
                                        'description' => '调度结束时间',
                                        'type' => 'string',
                                        'example' => '2024-01-01 00:00:00',
                                    ],
                                    'cronExpr' => [
                                        'description' => '调度cron表达式',
                                        'type' => 'string',
                                        'example' => '0 0 * * * ? *',
                                    ],
                                    'timeZone' => [
                                        'description' => '时区',
                                        'type' => 'string',
                                        'example' => 'Asia/Shanghai',
                                    ],
                                    'failureStrategy' => [
                                        'description' => '失败策略',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'CONTINUE' => '继续',
                                            'END' => '结束',
                                        ],
                                        'example' => 'END',
                                    ],
                                    'alertStrategy' => [
                                        'description' => '通知策略',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'ALL' => '成功或失败都发',
                                            'SUCCESS' => '成功发',
                                            'NONE' => '都不发',
                                            'FAILURE' => '失败发',
                                        ],
                                        'example' => 'NONE',
                                    ],
                                    'alertGroupId' => [
                                        'description' => '告警组ID',
                                        'type' => 'string',
                                        'example' => 'ag-n72kong0832****',
                                    ],
                                    'workflowInstancePriority' => [
                                        'description' => '工作流实例优先级',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'LOWEST' => 'LOWEST',
                                            'HIGH' => 'HIGH',
                                            'MEDIUM' => 'MEDIUM',
                                            'LOW' => 'LOW',
                                            'HIGHEST' => 'HIGHEST',
                                        ],
                                        'example' => 'MEDIUM',
                                    ],
                                    'resourceGroupId' => [
                                        'description' => '资源组ID',
                                        'type' => 'string',
                                        'example' => 'wg-susqimrr649x****',
                                    ],
                                    'emrClusterId' => [
                                        'description' => 'EMR集群id',
                                        'type' => 'string',
                                        'example' => 'C-15F7AB9B53F1****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"611AD6E6-BFE3-5897-AA12-569F79DBAF9B\\",\\n  \\"workflow\\": {\\n    \\"workflowId\\": \\"w-n72kong0832****\\",\\n    \\"name\\": \\"test\\",\\n    \\"description\\": \\"test\\",\\n    \\"workflowParams\\": \\"  [{\\\\\\"prop\\\\\\":\\\\\\"key1\\\\\\",\\\\\\"value\\\\\\":\\\\\\"value1\\\\\\"}]\\",\\n    \\"parentDirectoryId\\": \\"wd-n72kong0832****\\",\\n    \\"timeout\\": 0,\\n    \\"executionType\\": \\"PARALLEL\\",\\n    \\"createTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"updateTime\\": \\"2024-01-01 00:00:00\\"\\n  },\\n  \\"tasks\\": [\\n    {\\n      \\"taskId\\": \\"t-n72kong0832****\\",\\n      \\"name\\": \\"task_name\\",\\n      \\"version\\": 1,\\n      \\"description\\": \\"task description\\"\\n    }\\n  ],\\n  \\"taskRelations\\": [\\n    {\\n      \\"preTaskId\\": \\"t-n72kong0832****\\",\\n      \\"postTaskId\\": \\"t-n72kong0832****\\"\\n    }\\n  ],\\n  \\"schedule\\": {\\n    \\"scheduleState\\": \\"OFFLINE\\",\\n    \\"scheduleStartTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"scheduleEndTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"cronExpr\\": \\"0 0 * * * ? *\\",\\n    \\"timeZone\\": \\"Asia/Shanghai\\",\\n    \\"failureStrategy\\": \\"END\\",\\n    \\"alertStrategy\\": \\"NONE\\",\\n    \\"alertGroupId\\": \\"ag-n72kong0832****\\",\\n    \\"workflowInstancePriority\\": \\"MEDIUM\\",\\n    \\"resourceGroupId\\": \\"wg-susqimrr649x****\\",\\n    \\"emrClusterId\\": \\"C-15F7AB9B53F1****\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取工作流详情',
        ],
        'UpdateWorkflow' => [
            'summary' => '更新工作流',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
            'methods' => [
                'put',
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
                'operationType' => 'update',
                'abilityTreeCode' => '221014',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'taskRelationJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务依赖关系json，包含工作流所有任务之间的依赖关系，preTaskId为上游任务id，postTaskId为下游任务id，此处指定的任务id为自定义id（不能为0），每一个任务需有唯一的id。如果任务节点没有上游任务，也需要增加一个preTaskId为0的依赖关系',
                        'type' => 'string',
                        'required' => false,
                        'example' => '  [{"preTaskId":"0", "postTaskId":"t1"}]',
                    ],
                ],
                [
                    'name' => 'taskDefinitionJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务定义json，包含工作流所有任务的描述信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' [{"taskId":"t1","name":"t1","taskParams":{"rawScript":"echo 1"},"taskType":"SHELL"}]',
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'workflowParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '[{"prop":"key1","value":"value1"}]',
                    ],
                ],
                [
                    'name' => 'parentDirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wd-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'timeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '超时的时间，单位：分钟',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'executionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'SERIAL_WAIT' => '串行等待',
                            'PARALLEL' => '并行',
                        ],
                        'example' => 'PARALLEL',
                    ],
                ],
                [
                    'name' => 'scheduleState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度状态',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'OFFLINE' => '下线',
                            'ONLINE' => '上线',
                        ],
                        'example' => 'OFFLINE',
                    ],
                ],
                [
                    'name' => 'scheduleStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度起始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-01-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'scheduleEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-01-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'cronExpr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度cron表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0 * * * ? *',
                    ],
                ],
                [
                    'name' => 'timeZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Asia/Shanghai',
                    ],
                ],
                [
                    'name' => 'failureStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '失败策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CONTINUE' => '继续',
                            'END' => '结束',
                        ],
                        'example' => 'END',
                    ],
                ],
                [
                    'name' => 'alertStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ALL' => '成功或失败都发',
                            'SUCCESS' => '成功发',
                            'NONE' => '都不发',
                            'FAILURE' => '失败发',
                        ],
                        'example' => 'NONE',
                    ],
                ],
                [
                    'name' => 'alertGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ag-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'workflowInstancePriority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例优先级',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LOWEST' => 'LOWEST',
                            'HIGH' => 'HIGH',
                            'MEDIUM' => 'MEDIUM',
                            'LOW' => 'LOW',
                            'HIGHEST' => 'HIGHEST',
                        ],
                        'example' => 'MEDIUM',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wg-acfmv4opbs****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'success' => [
                                'description' => '调用是否成功',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
            'title' => '更新工作流',
        ],
        'CreateWorkflow' => [
            'summary' => '创建工作流',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows',
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
                'operationType' => 'create',
                'abilityTreeCode' => '220061',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-n72kong0832****',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'taskRelationJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务依赖关系json，包含工作流所有任务之间的依赖关系，preTaskId为上游任务id，postTaskId为下游任务id，此处指定的任务id为自定义id（不能为0），每一个任务需有唯一的id。如果任务节点没有上游任务，也需要增加一个preTaskId为0的依赖关系',
                        'type' => 'string',
                        'required' => true,
                        'example' => '  [{"preTaskId":"0", "postTaskId":"t1"}]',
                    ],
                ],
                [
                    'name' => 'taskDefinitionJson',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务定义json，包含工作流所有任务的描述信息',
                        'type' => 'string',
                        'required' => true,
                        'example' => '  [{"taskId":"t1","name":"t1","taskParams":{"rawScript":"echo 1"},"taskType":"SHELL"}]',
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'workflowParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '  [{"prop":"key1","value":"value1"}]',
                    ],
                ],
                [
                    'name' => 'parentDirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '目录ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wd-v7n2gp3vv3j****',
                    ],
                ],
                [
                    'name' => 'timeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '超时的时间，单位：分钟',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'executionType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'SERIAL_WAIT' => '串行等待',
                            'PARALLEL' => '并行',
                        ],
                        'example' => 'PARALLEL',
                    ],
                ],
                [
                    'name' => 'scheduleState',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度状态',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'OFFLINE' => '下线',
                            'ONLINE' => '上线',
                        ],
                        'example' => 'OFFLINE',
                    ],
                ],
                [
                    'name' => 'scheduleStartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度起始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-01-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'scheduleEndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-01-01 00:00:00',
                    ],
                ],
                [
                    'name' => 'cronExpr',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调度cron表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 0 * * * ? *',
                    ],
                ],
                [
                    'name' => 'timeZone',
                    'in' => 'query',
                    'schema' => [
                        'description' => '时区',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Asia/Shanghai',
                    ],
                ],
                [
                    'name' => 'failureStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '失败策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CONTINUE' => '继续',
                            'END' => '结束',
                        ],
                        'example' => 'END',
                    ],
                ],
                [
                    'name' => 'alertStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '通知策略',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ALL' => '成功或失败都发',
                            'SUCCESS' => '成功发',
                            'NONE' => '都不发',
                            'FAILURE' => '失败发',
                        ],
                        'example' => 'NONE',
                    ],
                ],
                [
                    'name' => 'alertGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '告警组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ag-v7n2gp3vv3j****',
                    ],
                ],
                [
                    'name' => 'workflowInstancePriority',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例优先级',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'LOWEST' => 'LOWEST',
                            'HIGH' => 'HIGH',
                            'MEDIUM' => 'MEDIUM',
                            'LOW' => 'LOW',
                            'HIGHEST' => 'HIGHEST',
                        ],
                        'example' => 'MEDIUM',
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '资源组ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wg-acfmv4opbs****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '9E3A7161-EB7B-172B-8D18-FFB06BA38***',
                            ],
                            'success' => [
                                'description' => '调用是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'object',
                                'properties' => [
                                    'workflowId' => [
                                        'description' => '工作流ID',
                                        'type' => 'string',
                                        'example' => 'w-acfmv4opbs****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E3A7161-EB7B-172B-8D18-FFB06BA38***\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"workflowId\\": \\"w-acfmv4opbs****\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建工作流',
        ],
        'DeleteWorkflow' => [
            'summary' => '删除工作流',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
            'methods' => [
                'delete',
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
                'operationType' => 'delete',
                'abilityTreeCode' => '219539',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce265SSG',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'success' => [
                                'description' => '调用是否成功',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
            'title' => '删除工作流',
        ],
        'ListWorkflowInstances' => [
            'summary' => '获取工作流实例列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflowInstances',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221706',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceVHPGXM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SUCCESS',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-3q9jo749ne5****',
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
                            'nextToken' => [
                                'title' => 'Id of the request',
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流实例详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'workflowInstanceId' => [
                                            'description' => '工作流实例ID',
                                            'type' => 'string',
                                            'example' => 'wi-3q9jo749ne5****',
                                        ],
                                        'workflowId' => [
                                            'description' => '工作流ID',
                                            'type' => 'string',
                                            'example' => 'w-3q9jo749ne5****',
                                        ],
                                        'workflowVersion' => [
                                            'description' => '工作流版本号',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'name' => [
                                            'description' => '工作流实例名称',
                                            'type' => 'string',
                                            'example' => 'workflow_instance_name',
                                        ],
                                        'status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'startTime' => [
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2024-01-01 00:00:00',
                                        ],
                                        'endTime' => [
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2024-01-01 00:00:00',
                                        ],
                                        'scheduleTime' => [
                                            'description' => '调度时间',
                                            'type' => 'string',
                                            'example' => '2024-01-01 00:00:00',
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"workflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n      \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n      \\"workflowVersion\\": 1,\\n      \\"name\\": \\"workflow_instance_name\\",\\n      \\"status\\": \\"SUCCESS\\",\\n      \\"startTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"endTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"scheduleTime\\": \\"2024-01-01 00:00:00\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '获取工作流实例列表',
        ],
        'DescribeWorkflowInstance' => [
            'summary' => '获取工作流实例详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflowInstances/{workflowInstanceId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '221702',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceVHPGXM',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '12345',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wf-3q9jo749ne5****',
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
                            'workflowInstanceId' => [
                                'description' => '工作流实例ID',
                                'type' => 'string',
                                'example' => 'wi-3q9jo749ne5****',
                            ],
                            'workflowId' => [
                                'description' => '工作流ID',
                                'type' => 'string',
                                'example' => 'w-3q9jo749ne5****',
                            ],
                            'workflowVersion' => [
                                'description' => '工作流版本号',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'startTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'endTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'scheduleTime' => [
                                'description' => '调度时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'runTimes' => [
                                'description' => '运行次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'name' => [
                                'description' => '工作流实例名称',
                                'type' => 'string',
                                'example' => 'workflow_instance_name',
                            ],
                            'resourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'wg-susqimrr649x****',
                            ],
                            'emrClusterId' => [
                                'description' => 'EMR集群id',
                                'type' => 'string',
                                'example' => 'c-047fa6bbe732****',
                            ],
                            'timeout' => [
                                'description' => '超时的时间，单位：分钟',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'isComplementData' => [
                                'description' => '是否为补数实例',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'requestId' => [
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'failureStrategy' => [
                                'description' => '失败策略',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'CONTINUE' => '继续',
                                    'END' => '结束',
                                ],
                                'example' => 'END',
                            ],
                            'alertStrategy' => [
                                'description' => '通知策略',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'ALL' => '成功或失败都发',
                                    'SUCCESS' => '成功发',
                                    'NONE' => '都不发',
                                    'FAILURE' => '失败发',
                                ],
                                'example' => 'NONE',
                            ],
                            'alertGroupId' => [
                                'description' => '告警组ID',
                                'type' => 'string',
                                'example' => 'ag-n72kong0832****',
                            ],
                            'workflowInstancePriority' => [
                                'description' => '工作流实例优先级',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'LOWEST' => 'LOWEST',
                                    'HIGH' => 'HIGH',
                                    'MEDIUM' => 'MEDIUM',
                                    'LOW' => 'LOW',
                                    'HIGHEST' => 'HIGHEST',
                                ],
                                'example' => 'MEDIUM',
                            ],
                            'restartTime' => [
                                'description' => '重新运行时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"workflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n  \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n  \\"workflowVersion\\": 1,\\n  \\"status\\": \\"SUCCESS\\",\\n  \\"startTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"endTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"scheduleTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"runTimes\\": 1,\\n  \\"name\\": \\"workflow_instance_name\\",\\n  \\"resourceGroupId\\": \\"wg-susqimrr649x****\\",\\n  \\"emrClusterId\\": \\"c-047fa6bbe732****\\",\\n  \\"timeout\\": 0,\\n  \\"isComplementData\\": false,\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"failureStrategy\\": \\"END\\",\\n  \\"alertStrategy\\": \\"NONE\\",\\n  \\"alertGroupId\\": \\"ag-n72kong0832****\\",\\n  \\"workflowInstancePriority\\": \\"MEDIUM\\",\\n  \\"restartTime\\": \\"2024-03-27 00:00:00\\"\\n}","type":"json"}]',
            'title' => '获取工作流实例详情',
        ],
        'DescribeManualTask' => [
            'summary' => '获取手动任务详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTasks/{manualTaskId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '221510',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceYP2JJQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'manualTaskId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '手动任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mt-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'ManualTaskId' => [
                                'description' => '手动任务ID',
                                'type' => 'string',
                                'example' => 'mt-3q9jo749ne5****',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'ManualTaskName' => [
                                'description' => '手动任务名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'Description' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ProjectId' => [
                                'description' => '项目ID',
                                'type' => 'string',
                                'example' => 'p-3q9jo749ne5****',
                            ],
                            'TaskType' => [
                                'description' => '任务类型',
                                'type' => 'string',
                                'example' => 'SHELL',
                            ],
                            'TaskParams' => [
                                'description' => '任务参数',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "yarnUser": "",'."\n"
                                    .'    "conditionResult": "null",'."\n"
                                    .'    "rawScript": "sleep 300",'."\n"
                                    .'    "submitOnYarnFlag": false,'."\n"
                                    .'    "emrClusterId": "",'."\n"
                                    .'    "yarnPriority": "",'."\n"
                                    .'    "dependence": "null",'."\n"
                                    .'    "yarnMemory": "",'."\n"
                                    .'    "localParams": [],'."\n"
                                    .'    "switchResult": "null",'."\n"
                                    .'    "resourceList": [],'."\n"
                                    .'    "yarnQueue": "",'."\n"
                                    .'    "yarnVCores": "",'."\n"
                                    .'    "associateManualTaskFlag": false'."\n"
                                    .'}',
                            ],
                            'ResourceIds' => [
                                'description' => '资源ID列表',
                                'type' => 'string',
                                'example' => 'r-oy98v7n43el****',
                            ],
                            'UpdateTime' => [
                                'description' => '更新时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'ParentDirectoryId' => [
                                'description' => '目录ID',
                                'type' => 'string',
                                'example' => 'mtd-oy98v7n43el****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"ManualTaskId\\": \\"mt-3q9jo749ne5****\\",\\n  \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ManualTaskName\\": \\"test\\",\\n  \\"Description\\": \\"test\\",\\n  \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceIds\\": \\"r-oy98v7n43el****\\",\\n  \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ParentDirectoryId\\": \\"mtd-oy98v7n43el****\\"\\n}","type":"json"}]',
            'title' => '获取手动任务详情',
        ],
        'ListManualTasks' => [
            'summary' => '获取手动任务列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTasks',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '221515',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceYP2JJQ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'taskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '手动任务',
                                    'type' => 'object',
                                    'properties' => [
                                        'ManualTaskId' => [
                                            'description' => '手动任务ID',
                                            'type' => 'string',
                                            'example' => 'mt-3q9jo749ne5****',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'ManualTaskName' => [
                                            'description' => '手动任务名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'p-3q9jo749ne5****',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型',
                                            'type' => 'string',
                                            'example' => 'SHELL',
                                        ],
                                        'TaskParams' => [
                                            'description' => '任务参数',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "yarnUser": "",'."\n"
                                                .'    "conditionResult": "null",'."\n"
                                                .'    "rawScript": "sleep 300",'."\n"
                                                .'    "submitOnYarnFlag": false,'."\n"
                                                .'    "emrClusterId": "",'."\n"
                                                .'    "yarnPriority": "",'."\n"
                                                .'    "dependence": "null",'."\n"
                                                .'    "yarnMemory": "",'."\n"
                                                .'    "localParams": [],'."\n"
                                                .'    "switchResult": "null",'."\n"
                                                .'    "resourceList": [],'."\n"
                                                .'    "yarnQueue": "",'."\n"
                                                .'    "yarnVCores": "",'."\n"
                                                .'    "associateManualTaskFlag": false'."\n"
                                                .'}',
                                        ],
                                        'ResourceIds' => [
                                            'description' => '资源ID列表',
                                            'type' => 'string',
                                            'example' => 'r-oy98v7n43el****',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'ParentDirectoryId' => [
                                            'description' => '目录ID',
                                            'type' => 'string',
                                            'example' => 'mtd-oy98v7n43el****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"ManualTaskId\\": \\"mt-3q9jo749ne5****\\",\\n      \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ManualTaskName\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ResourceIds\\": \\"r-oy98v7n43el****\\",\\n      \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ParentDirectoryId\\": \\"mtd-oy98v7n43el****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取手动任务列表',
        ],
        'DescribeManualTaskInstance' => [
            'summary' => '获取手动任务实例详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTaskInstances/{manualTaskInstanceId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '221526',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce3835LZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'manualTaskInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '手动任务实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mti-0k5vype05xm****',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'ManualTaskInstanceId' => [
                                'description' => '手动任务实例ID',
                                'type' => 'string',
                                'example' => 'mti-0k5vype05xm****',
                            ],
                            'ManualTaskInstanceName' => [
                                'description' => '手动任务实例名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'TaskType' => [
                                'description' => '任务类型',
                                'type' => 'string',
                                'example' => 'SHELL',
                            ],
                            'Status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubmitTime' => [
                                'description' => '提交时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'ExternalAppId' => [
                                'description' => '外部应用ID',
                                'type' => 'string',
                                'example' => 'application_123_***',
                            ],
                            'TaskParams' => [
                                'description' => '任务参数',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "yarnUser": "",'."\n"
                                    .'    "conditionResult": "null",'."\n"
                                    .'    "rawScript": "sleep 300",'."\n"
                                    .'    "submitOnYarnFlag": false,'."\n"
                                    .'    "emrClusterId": "",'."\n"
                                    .'    "yarnPriority": "",'."\n"
                                    .'    "dependence": "null",'."\n"
                                    .'    "yarnMemory": "",'."\n"
                                    .'    "localParams": [],'."\n"
                                    .'    "switchResult": "null",'."\n"
                                    .'    "resourceList": [],'."\n"
                                    .'    "yarnQueue": "",'."\n"
                                    .'    "yarnVCores": "",'."\n"
                                    .'    "associateManualTaskFlag": false'."\n"
                                    .'}',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'wg-123abc***',
                            ],
                            'EmrClusterId' => [
                                'description' => 'EMR集群ID',
                                'type' => 'string',
                                'example' => 'c-b933c5aac7f7***',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"ManualTaskInstanceId\\": \\"mti-0k5vype05xm****\\",\\n  \\"ManualTaskInstanceName\\": \\"test\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ExternalAppId\\": \\"application_123_***\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceGroupId\\": \\"wg-123abc***\\",\\n  \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\"\\n}","type":"json"}]',
            'title' => '获取手动任务实例详情',
        ],
        'ListManualTaskInstances' => [
            'summary' => '获取手动任务实例列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTaskInstances',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '221584',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce3835LZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SUCCESS',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '手动任务实例',
                                    'type' => 'object',
                                    'properties' => [
                                        'ManualTaskInstanceId' => [
                                            'description' => '手动任务实例ID',
                                            'type' => 'string',
                                            'example' => 'mti-3q9jo749ne5****',
                                        ],
                                        'ManualTaskInstanceName' => [
                                            'description' => '手动任务实例名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型',
                                            'type' => 'string',
                                            'example' => 'SHELL',
                                        ],
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'SubmitTime' => [
                                            'description' => '提交时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'ExternalAppId' => [
                                            'description' => '外部应用ID',
                                            'type' => 'string',
                                            'example' => 'application_123_***',
                                        ],
                                        'TaskParams' => [
                                            'description' => '任务参数',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "yarnUser": "",'."\n"
                                                .'    "conditionResult": "null",'."\n"
                                                .'    "rawScript": "sleep 300",'."\n"
                                                .'    "submitOnYarnFlag": false,'."\n"
                                                .'    "emrClusterId": "",'."\n"
                                                .'    "yarnPriority": "",'."\n"
                                                .'    "dependence": "null",'."\n"
                                                .'    "yarnMemory": "",'."\n"
                                                .'    "localParams": [],'."\n"
                                                .'    "switchResult": "null",'."\n"
                                                .'    "resourceList": [],'."\n"
                                                .'    "yarnQueue": "",'."\n"
                                                .'    "yarnVCores": "",'."\n"
                                                .'    "associateManualTaskFlag": false'."\n"
                                                .'}',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'wg-3q9jo749ne5****',
                                        ],
                                        'EmrClusterId' => [
                                            'description' => 'EMR集群ID',
                                            'type' => 'string',
                                            'example' => 'c-b933c5aac7f7***',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"ManualTaskInstanceId\\": \\"mti-3q9jo749ne5****\\",\\n      \\"ManualTaskInstanceName\\": \\"test\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ExternalAppId\\": \\"application_123_***\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ResourceGroupId\\": \\"wg-3q9jo749ne5****\\",\\n      \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取手动任务实例列表',
        ],
        'ListTasks' => [
            'summary' => '获取任务列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/tasks',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '221598',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce61FDX5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'taskType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SHELL',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-n72kong0832****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskId' => [
                                            'description' => '任务ID',
                                            'type' => 'string',
                                            'example' => 't-3q9jo749ne5****',
                                        ],
                                        'TaskName' => [
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'CreateTime' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'UpdateTime' => [
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'Version' => [
                                            'description' => '版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'Description' => [
                                            'description' => '描述',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'ProjectId' => [
                                            'description' => '项目ID',
                                            'type' => 'string',
                                            'example' => 'p-3q9jo749ne5****',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型',
                                            'type' => 'string',
                                            'example' => 'SHELL',
                                        ],
                                        'TaskParams' => [
                                            'description' => '任务参数',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "yarnUser": "",'."\n"
                                                .'    "conditionResult": "null",'."\n"
                                                .'    "rawScript": "sleep 300",'."\n"
                                                .'    "submitOnYarnFlag": false,'."\n"
                                                .'    "emrClusterId": "",'."\n"
                                                .'    "yarnPriority": "",'."\n"
                                                .'    "dependence": "null",'."\n"
                                                .'    "yarnMemory": "",'."\n"
                                                .'    "localParams": [],'."\n"
                                                .'    "switchResult": "null",'."\n"
                                                .'    "resourceList": [],'."\n"
                                                .'    "yarnQueue": "",'."\n"
                                                .'    "yarnVCores": "",'."\n"
                                                .'    "associateManualTaskFlag": false'."\n"
                                                .'}',
                                        ],
                                        'Flag' => [
                                            'description' => '运行标志',
                                            'type' => 'string',
                                            'example' => 'YES',
                                        ],
                                        'TaskPriority' => [
                                            'description' => '任务优先级',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'LOWEST' => 'LOWEST',
                                                'HIGH' => 'HIGH',
                                                'MEDIUM' => 'MEDIUM',
                                                'LOW' => 'LOW',
                                                'HIGHEST' => 'HIGHEST',
                                            ],
                                            'example' => 'MEDIUM',
                                        ],
                                        'FailRetryTimes' => [
                                            'description' => '失败重试次数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'FailRetryInterval' => [
                                            'description' => '失败重试间隔',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'TimeoutFlag' => [
                                            'description' => '超时告警标志',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'CLOSE' => '关闭',
                                                'OPEN' => '打开',
                                            ],
                                            'example' => 'CLOSE',
                                        ],
                                        'TimeoutNotifyStrategy' => [
                                            'description' => '超时策略',
                                            'type' => 'string',
                                            'enumValueTitles' => [
                                                'FAILED' => '超时失败',
                                                'WARNFAILED' => '超时告警并失败',
                                                'WARN' => '超时告警',
                                            ],
                                            'example' => 'WARN',
                                        ],
                                        'Timeout' => [
                                            'description' => '超时时长',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'DelayTime' => [
                                            'description' => '延时执行时间',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ResourceIds' => [
                                            'description' => '资源ID列表',
                                            'type' => 'string',
                                            'example' => 'r-3q9jo749ne5****',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n      \\"TaskName\\": \\"test\\",\\n      \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"Version\\": \\"1\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"Flag\\": \\"YES\\",\\n      \\"TaskPriority\\": \\"MEDIUM\\",\\n      \\"FailRetryTimes\\": 0,\\n      \\"FailRetryInterval\\": 1,\\n      \\"TimeoutFlag\\": \\"CLOSE\\",\\n      \\"TimeoutNotifyStrategy\\": \\"WARN\\",\\n      \\"Timeout\\": 0,\\n      \\"DelayTime\\": 0,\\n      \\"ResourceIds\\": \\"r-3q9jo749ne5****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取任务列表',
        ],
        'DescribeTask' => [
            'summary' => '获取任务详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}/tasks/{taskId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '221586',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce61FDX5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'workflowId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'taskId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 't-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'TaskId' => [
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 't-3q9jo749ne5****',
                            ],
                            'TaskName' => [
                                'description' => '任务名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'UpdateTime' => [
                                'description' => '更新时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'Version' => [
                                'description' => '版本',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'Description' => [
                                'description' => '描述',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'ProjectId' => [
                                'description' => '项目ID',
                                'type' => 'string',
                                'example' => 'p-3q9jo749ne5****',
                            ],
                            'TaskType' => [
                                'description' => '任务类型',
                                'type' => 'string',
                                'example' => 'SHELL',
                            ],
                            'TaskParams' => [
                                'description' => '任务参数',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "yarnUser": "",'."\n"
                                    .'    "conditionResult": "null",'."\n"
                                    .'    "rawScript": "sleep 300",'."\n"
                                    .'    "submitOnYarnFlag": false,'."\n"
                                    .'    "emrClusterId": "",'."\n"
                                    .'    "yarnPriority": "",'."\n"
                                    .'    "dependence": "null",'."\n"
                                    .'    "yarnMemory": "",'."\n"
                                    .'    "localParams": [],'."\n"
                                    .'    "switchResult": "null",'."\n"
                                    .'    "resourceList": [],'."\n"
                                    .'    "yarnQueue": "",'."\n"
                                    .'    "yarnVCores": "",'."\n"
                                    .'    "associateManualTaskFlag": false'."\n"
                                    .'}',
                            ],
                            'Flag' => [
                                'description' => '运行标志',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'NO' => 'NO',
                                    'YES' => 'YES',
                                ],
                                'example' => 'YES',
                            ],
                            'TaskPriority' => [
                                'description' => '任务优先级',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'LOWEST' => 'LOWEST',
                                    'HIGH' => 'HIGH',
                                    'MEDIUM' => 'MEDIUM',
                                    'LOW' => 'LOW',
                                    'HIGHEST' => 'HIGHEST',
                                ],
                                'example' => 'MEDIUM',
                            ],
                            'FailRetryTimes' => [
                                'description' => '失败重试次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'FailRetryInterval' => [
                                'description' => '失败重试间隔',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TimeoutFlag' => [
                                'description' => '超时告警标志',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'CLOSE' => 'CLOSE',
                                    'OPEN' => 'OPEN',
                                ],
                                'example' => 'CLOSE',
                            ],
                            'TimeoutNotifyStrategy' => [
                                'description' => '超时策略',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FAILED' => '超时失败',
                                    'WARNFAILED' => '超时告警并失败',
                                    'WARN' => '超时告警',
                                ],
                                'example' => 'WARN',
                            ],
                            'Timeout' => [
                                'description' => '超时时长',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'DelayTime' => [
                                'description' => '延时执行时间',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ResourceIds' => [
                                'description' => '资源ID列表',
                                'type' => 'string',
                                'example' => 'r-oy98v7n43el****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n  \\"TaskName\\": \\"test\\",\\n  \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"Version\\": \\"1\\",\\n  \\"Description\\": \\"test\\",\\n  \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"Flag\\": \\"YES\\",\\n  \\"TaskPriority\\": \\"MEDIUM\\",\\n  \\"FailRetryTimes\\": 0,\\n  \\"FailRetryInterval\\": 1,\\n  \\"TimeoutFlag\\": \\"CLOSE\\",\\n  \\"TimeoutNotifyStrategy\\": \\"WARN\\",\\n  \\"Timeout\\": 10,\\n  \\"DelayTime\\": 0,\\n  \\"ResourceIds\\": \\"r-oy98v7n43el****\\"\\n}","type":"json"}]',
            'title' => '获取任务详情',
        ],
        'DescribeTaskInstance' => [
            'summary' => '获取任务实例详情',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowInstanceId}/taskInstances/{taskInstanceId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '221606',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce5Q1MGZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'wi-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'taskInstanceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务实例ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ti-3q9jo749ne5****',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'TaskInstanceId' => [
                                'description' => '任务实例ID',
                                'type' => 'string',
                                'example' => 'ti-3q9jo749ne5****',
                            ],
                            'TaskInstanceName' => [
                                'description' => '任务实例名称',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'TaskType' => [
                                'description' => '任务类型',
                                'type' => 'string',
                                'example' => 'SHELL',
                            ],
                            'TaskId' => [
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 't-3q9jo749ne5****',
                            ],
                            'TaskVersion' => [
                                'description' => '任务版本',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'WorkflowInstanceId' => [
                                'description' => '工作流实例ID',
                                'type' => 'string',
                                'example' => 'wi-3q9jo749ne5****',
                            ],
                            'Status' => [
                                'description' => '状态',
                                'type' => 'string',
                                'example' => 'SUCCESS',
                            ],
                            'SubmitTime' => [
                                'description' => '提交时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'StartTime' => [
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'EndTime' => [
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2024-03-27 00:00:00',
                            ],
                            'RetryTimes' => [
                                'description' => '重试次数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ExternalAppId' => [
                                'description' => '外部应用ID',
                                'type' => 'string',
                                'example' => 'application_123_***',
                            ],
                            'TaskParams' => [
                                'description' => '任务参数',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "yarnUser": "",'."\n"
                                    .'    "conditionResult": "null",'."\n"
                                    .'    "rawScript": "sleep 300",'."\n"
                                    .'    "submitOnYarnFlag": false,'."\n"
                                    .'    "emrClusterId": "",'."\n"
                                    .'    "yarnPriority": "",'."\n"
                                    .'    "dependence": "null",'."\n"
                                    .'    "yarnMemory": "",'."\n"
                                    .'    "localParams": [],'."\n"
                                    .'    "switchResult": "null",'."\n"
                                    .'    "resourceList": [],'."\n"
                                    .'    "yarnQueue": "",'."\n"
                                    .'    "yarnVCores": "",'."\n"
                                    .'    "associateManualTaskFlag": false'."\n"
                                    .'}',
                            ],
                            'ResourceGroupId' => [
                                'description' => '资源组ID',
                                'type' => 'string',
                                'example' => 'wg-123abc***',
                            ],
                            'EmrClusterId' => [
                                'description' => 'EMR集群ID',
                                'type' => 'string',
                                'example' => 'c-b933c5aac7f7***',
                            ],
                            'DryRun' => [
                                'description' => '空跑标识',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"TaskInstanceId\\": \\"ti-3q9jo749ne5****\\",\\n  \\"TaskInstanceName\\": \\"test\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n  \\"TaskVersion\\": \\"1\\",\\n  \\"WorkflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"RetryTimes\\": 0,\\n  \\"ExternalAppId\\": \\"application_123_***\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceGroupId\\": \\"wg-123abc***\\",\\n  \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\",\\n  \\"DryRun\\": \\"0\\"\\n}","type":"json"}]',
            'title' => '获取任务实例详情',
        ],
        'ListTaskInstances' => [
            'summary' => '获取任务实例列表',
            'path' => '/dolphinscheduler/v3/projects/{projectId}/taskInstances',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '221613',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce5Q1MGZ',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '123***',
                    ],
                ],
                [
                    'name' => 'projectId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'p-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'workflowInstanceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流实例ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'wi-3q9jo749ne5****',
                    ],
                ],
                [
                    'name' => 'searchVal',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索值',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SUCCESS',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2024-03-27 00:00:00',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '下一次请求的分页token。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123abc***',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'description' => '一次获取的最大记录数',
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
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '9E3A7161-EB7B-172B-8D18-FFB06BA38***',
                            ],
                            'nextToken' => [
                                'description' => '下一次请求的分页token。',
                                'type' => 'string',
                                'example' => '123abc***',
                            ],
                            'totalSize' => [
                                'description' => '记录总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'data' => [
                                'description' => '返回结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务实例',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskInstanceId' => [
                                            'description' => '任务实例ID',
                                            'type' => 'string',
                                            'example' => 'ti-3q9jo749ne5****',
                                        ],
                                        'TaskInstanceName' => [
                                            'description' => '任务实例名称',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'DryRun' => [
                                            'description' => '空跑标识',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'EmrClusterId' => [
                                            'description' => 'EMR集群ID',
                                            'type' => 'string',
                                            'example' => 'c-b933c5aac7f7***',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => '资源组ID',
                                            'type' => 'string',
                                            'example' => 'wg-3q9jo749ne5****',
                                        ],
                                        'TaskParams' => [
                                            'description' => '任务参数',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "yarnUser": "",'."\n"
                                                .'    "conditionResult": "null",'."\n"
                                                .'    "rawScript": "sleep 300",'."\n"
                                                .'    "submitOnYarnFlag": false,'."\n"
                                                .'    "emrClusterId": "",'."\n"
                                                .'    "yarnPriority": "",'."\n"
                                                .'    "dependence": "null",'."\n"
                                                .'    "yarnMemory": "",'."\n"
                                                .'    "localParams": [],'."\n"
                                                .'    "switchResult": "null",'."\n"
                                                .'    "resourceList": [],'."\n"
                                                .'    "yarnQueue": "",'."\n"
                                                .'    "yarnVCores": "",'."\n"
                                                .'    "associateManualTaskFlag": false'."\n"
                                                .'}',
                                        ],
                                        'ExternalAppId' => [
                                            'description' => '外部应用ID',
                                            'type' => 'string',
                                            'example' => 'application_123_***',
                                        ],
                                        'RetryTimes' => [
                                            'description' => '重试次数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'EndTime' => [
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'StartTime' => [
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'SubmitTime' => [
                                            'description' => '提交时间',
                                            'type' => 'string',
                                            'example' => '2024-03-27 00:00:00',
                                        ],
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'SUCCESS',
                                        ],
                                        'WorkflowInstanceId' => [
                                            'description' => '工作流实例ID',
                                            'type' => 'string',
                                            'example' => 'wi-3q9jo749ne5****',
                                        ],
                                        'TaskVersion' => [
                                            'description' => '任务版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'TaskId' => [
                                            'description' => '任务ID',
                                            'type' => 'string',
                                            'example' => 't-3q9jo749ne5****',
                                        ],
                                        'TaskType' => [
                                            'description' => '任务类型',
                                            'type' => 'string',
                                            'example' => 'SHELL',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E3A7161-EB7B-172B-8D18-FFB06BA38***\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"TaskInstanceId\\": \\"ti-3q9jo749ne5****\\",\\n      \\"TaskInstanceName\\": \\"test\\",\\n      \\"DryRun\\": \\"0\\",\\n      \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\",\\n      \\"ResourceGroupId\\": \\"wg-3q9jo749ne5****\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ExternalAppId\\": \\"application_123_***\\",\\n      \\"RetryTimes\\": 0,\\n      \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"WorkflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n      \\"TaskVersion\\": \\"1\\",\\n      \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取任务实例列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'emrstudio.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'emrstudio.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'emrstudio.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'emrstudio.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'emrstudio.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'emrstudio.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'emrstudio.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'emrstudio.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'emrstudio.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'emrstudio.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'emrstudio.cn-hongkong.aliyuncs.com',
        ],
    ],
];
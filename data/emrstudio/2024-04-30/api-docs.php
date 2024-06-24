<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'EmrStudio',
    'version' => '2024-04-30',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 192395,
      'title' => '项目管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeProject',
        1 => 'ListProjects',
      ),
    ),
    1 => 
    array (
      'id' => 192393,
      'title' => '工作流管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'RunWorkflow',
        1 => 'ListWorkflows',
        2 => 'DescribeWorkflow',
        3 => 'UpdateWorkflow',
        4 => 'CreateWorkflow',
        5 => 'DeleteWorkflow',
      ),
    ),
    2 => 
    array (
      'id' => 192403,
      'title' => '工作流实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListWorkflowInstances',
        1 => 'DescribeWorkflowInstance',
      ),
    ),
    3 => 
    array (
      'id' => 192406,
      'title' => '手动任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeManualTask',
        1 => 'ListManualTasks',
      ),
    ),
    4 => 
    array (
      'id' => 192409,
      'title' => '手动任务实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeManualTaskInstance',
        1 => 'ListManualTaskInstances',
      ),
    ),
    5 => 
    array (
      'id' => 192412,
      'title' => '任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTasks',
        1 => 'DescribeTask',
      ),
    ),
    6 => 
    array (
      'id' => 192415,
      'title' => '任务实例管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeTaskInstance',
        1 => 'ListTaskInstances',
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
    'DescribeProject' => 
    array (
      'summary' => '获取项目详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '218057',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceBYNX2K',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '工作空间id',
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '1234',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => '请求id',
                'description' => '请求id',
                'type' => 'string',
                'example' => 'B897B94B-6754-5D09-AB8C-2E8186CCADC0',
              ),
              'projectId' => 
              array (
                'description' => '项目ID',
                'type' => 'string',
                'example' => 'p-3q9jo749ne5****',
              ),
              'name' => 
              array (
                'title' => '项目名称',
                'description' => '项目名称',
                'type' => 'string',
                'required' => true,
                'example' => 'test_project_name',
              ),
              'description' => 
              array (
                'title' => '项目描述',
                'description' => '项目描述',
                'type' => 'string',
                'required' => true,
                'example' => 'this is a project description',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"B897B94B-6754-5D09-AB8C-2E8186CCADC0\\",\\n  \\"projectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"name\\": \\"test_project_name\\",\\n  \\"description\\": \\"this is a project description\\"\\n}","type":"json"}]',
      'title' => '获取项目详情',
    ),
    'ListProjects' => 
    array (
      'summary' => '获取项目列表',
      'path' => '/dolphinscheduler/v3/projects',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '221489',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceBYNX2K',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        1 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
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
              'nextToken' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '项目',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'description' => '项目名称',
                      'type' => 'string',
                      'example' => 'project_name',
                    ),
                    'description' => 
                    array (
                      'description' => '项目描述',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'projectId' => 
                    array (
                      'description' => '项目ID',
                      'type' => 'string',
                      'example' => 'p-3q9jo749ne5****',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"data\\": [\\n    {\\n      \\"name\\": \\"project_name\\",\\n      \\"description\\": \\"test\\",\\n      \\"projectId\\": \\"p-3q9jo749ne5****\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"totalSize\\": 10\\n}","type":"json"}]',
      'title' => '获取项目列表',
    ),
    'RunWorkflow' => 
    array (
      'summary' => '运行工作流',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/executors/run-workflow',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '219779',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'w-3q9jo749ne5****',
          ),
        ),
        3 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => true,
            'example' => 'wg-acfmv4opbs****',
          ),
        ),
        4 => 
        array (
          'name' => 'execType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'COMPLEMENT_DATA' => '补数',
              'START_PROCESS' => '运行工作流',
            ),
            'example' => 'START_PROCESS',
          ),
        ),
        5 => 
        array (
          'name' => 'failureStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '失败策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CONTINUE' => '继续',
              'END' => '结束',
            ),
            'example' => 'END',
          ),
        ),
        6 => 
        array (
          'name' => 'alertStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ALL' => '成功或失败都发',
              'SUCCESS' => '成功发',
              'NONE' => '都不发',
              'FAILURE' => '失败发',
            ),
            'example' => 'NONE',
          ),
        ),
        7 => 
        array (
          'name' => 'alertGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-n72kong0832****',
          ),
        ),
        8 => 
        array (
          'name' => 'workflowInstancePriority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例优先级',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LOWEST' => 'LOWEST',
              'HIGH' => 'HIGH',
              'MEDIUM' => 'MEDIUM',
              'LOW' => 'LOW',
              'HIGHEST' => 'HIGHEST',
            ),
            'example' => 'MEDIUM',
          ),
        ),
        9 => 
        array (
          'name' => 'startParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '启动参数',
            'type' => 'string',
            'required' => false,
            'example' => '{"key1":"value1"}',
          ),
        ),
        10 => 
        array (
          'name' => 'dryRun',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '空跑标识',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        11 => 
        array (
          'name' => 'complementDependentMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补数依赖模式',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OFF_MODE' => '关闭',
              'ALL_DEPENDENT' => '打开',
            ),
            'example' => 'OFF_MODE',
          ),
        ),
        12 => 
        array (
          'name' => 'runMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补数执行方式',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'RUN_MODE_SERIAL' => '串行执行',
              'RUN_MODE_PARALLEL' => '并行执行',
            ),
            'example' => 'RUN_MODE_PARALLEL',
          ),
        ),
        13 => 
        array (
          'name' => 'expectedParallelismNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补数并行度，范围1~7',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'scheduleTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '补数调度日期范围',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-01 00:00:00,2024-01-02 00:00:00',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'success' => 
              array (
                'description' => '调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
      'title' => '运行工作流',
    ),
    'ListWorkflows' => 
    array (
      'summary' => '获取工作流列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '221672',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        3 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
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
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流信息',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'workflowId' => 
                    array (
                      'description' => '工作流ID',
                      'type' => 'string',
                      'example' => 'w-3q9jo749ne5****',
                    ),
                    'name' => 
                    array (
                      'description' => '工作流名称',
                      'type' => 'string',
                      'example' => 'workflow_name',
                    ),
                    'description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => 'workflow description',
                    ),
                    'createTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2024-01-01 00:00:00',
                    ),
                    'updateTime' => 
                    array (
                      'description' => '修改时间',
                      'type' => 'string',
                      'example' => '2024-01-01 00:00:00',
                    ),
                    'parentDirectoryId' => 
                    array (
                      'description' => '目录ID',
                      'type' => 'string',
                      'example' => 'wd-3q9jo749ne5****',
                    ),
                  ),
                ),
              ),
              'nextToken' => 
              array (
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc****',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": [\\n    {\\n      \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n      \\"name\\": \\"workflow_name\\",\\n      \\"description\\": \\"workflow description\\",\\n      \\"createTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"updateTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"parentDirectoryId\\": \\"wd-3q9jo749ne5****\\"\\n    }\\n  ],\\n  \\"nextToken\\": \\"123abc****\\",\\n  \\"totalSize\\": 10,\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '获取工作流列表',
    ),
    'DescribeWorkflow' => 
    array (
      'summary' => '获取工作流详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '221441',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-n72kong0832****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'w-n72kong0832****',
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
              'requestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => '611AD6E6-BFE3-5897-AA12-569F79DBAF9B',
              ),
              'workflow' => 
              array (
                'description' => '工作流',
                'type' => 'object',
                'properties' => 
                array (
                  'workflowId' => 
                  array (
                    'description' => '工作流ID',
                    'type' => 'string',
                    'example' => 'w-n72kong0832****',
                  ),
                  'name' => 
                  array (
                    'description' => '工作流名称',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'description' => 
                  array (
                    'description' => '工作流描述',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'workflowParams' => 
                  array (
                    'description' => '工作流参数',
                    'type' => 'string',
                    'example' => '  [{"prop":"key1","value":"value1"}]',
                  ),
                  'parentDirectoryId' => 
                  array (
                    'description' => '目录ID',
                    'type' => 'string',
                    'example' => 'wd-n72kong0832****',
                  ),
                  'timeout' => 
                  array (
                    'description' => '超时的时间，单位：分钟',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'executionType' => 
                  array (
                    'description' => '执行策略',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'SERIAL_WAIT' => '串行等待',
                      'PARALLEL' => '并行',
                    ),
                    'example' => 'PARALLEL',
                  ),
                  'createTime' => 
                  array (
                    'description' => '创建时间',
                    'type' => 'string',
                    'example' => '2024-01-01 00:00:00',
                  ),
                  'updateTime' => 
                  array (
                    'description' => '更新时间',
                    'type' => 'string',
                    'example' => '2024-01-01 00:00:00',
                  ),
                ),
              ),
              'tasks' => 
              array (
                'description' => '任务列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务对象',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'taskId' => 
                    array (
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => 't-n72kong0832****',
                    ),
                    'name' => 
                    array (
                      'description' => '任务名称',
                      'type' => 'string',
                      'example' => 'task_name',
                    ),
                    'version' => 
                    array (
                      'description' => '任务版本',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'description' => 
                    array (
                      'description' => '任务描述',
                      'type' => 'string',
                      'example' => 'task description',
                    ),
                  ),
                ),
              ),
              'taskRelations' => 
              array (
                'description' => '任务依赖关系列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务依赖关系',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'preTaskId' => 
                    array (
                      'description' => '上游任务id，如果为0，则说明没有上游节点',
                      'type' => 'string',
                      'example' => 't-n72kong0832****',
                    ),
                    'postTaskId' => 
                    array (
                      'description' => '下游任务id',
                      'type' => 'string',
                      'example' => 't-n72kong0832****',
                    ),
                  ),
                ),
              ),
              'schedule' => 
              array (
                'description' => '定时调度信息',
                'type' => 'object',
                'properties' => 
                array (
                  'scheduleState' => 
                  array (
                    'description' => '调度状态',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'OFFLINE' => '下线',
                      'ONLINE' => '上线',
                    ),
                    'example' => 'OFFLINE',
                  ),
                  'scheduleStartTime' => 
                  array (
                    'description' => '调度起始时间',
                    'type' => 'string',
                    'example' => '2024-01-01 00:00:00',
                  ),
                  'scheduleEndTime' => 
                  array (
                    'description' => '调度结束时间',
                    'type' => 'string',
                    'example' => '2024-01-01 00:00:00',
                  ),
                  'cronExpr' => 
                  array (
                    'description' => '调度cron表达式',
                    'type' => 'string',
                    'example' => '0 0 * * * ? *',
                  ),
                  'timeZone' => 
                  array (
                    'description' => '时区',
                    'type' => 'string',
                    'example' => 'Asia/Shanghai',
                  ),
                  'failureStrategy' => 
                  array (
                    'description' => '失败策略',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'CONTINUE' => '继续',
                      'END' => '结束',
                    ),
                    'example' => 'END',
                  ),
                  'alertStrategy' => 
                  array (
                    'description' => '通知策略',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'ALL' => '成功或失败都发',
                      'SUCCESS' => '成功发',
                      'NONE' => '都不发',
                      'FAILURE' => '失败发',
                    ),
                    'example' => 'NONE',
                  ),
                  'alertGroupId' => 
                  array (
                    'description' => '告警组ID',
                    'type' => 'string',
                    'example' => 'ag-n72kong0832****',
                  ),
                  'workflowInstancePriority' => 
                  array (
                    'description' => '工作流实例优先级',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'LOWEST' => 'LOWEST',
                      'HIGH' => 'HIGH',
                      'MEDIUM' => 'MEDIUM',
                      'LOW' => 'LOW',
                      'HIGHEST' => 'HIGHEST',
                    ),
                    'example' => 'MEDIUM',
                  ),
                  'resourceGroupId' => 
                  array (
                    'description' => '资源组ID',
                    'type' => 'string',
                    'example' => 'wg-susqimrr649x****',
                  ),
                  'emrClusterId' => 
                  array (
                    'description' => 'EMR集群id',
                    'type' => 'string',
                    'example' => 'C-15F7AB9B53F1****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"611AD6E6-BFE3-5897-AA12-569F79DBAF9B\\",\\n  \\"workflow\\": {\\n    \\"workflowId\\": \\"w-n72kong0832****\\",\\n    \\"name\\": \\"test\\",\\n    \\"description\\": \\"test\\",\\n    \\"workflowParams\\": \\"  [{\\\\\\"prop\\\\\\":\\\\\\"key1\\\\\\",\\\\\\"value\\\\\\":\\\\\\"value1\\\\\\"}]\\",\\n    \\"parentDirectoryId\\": \\"wd-n72kong0832****\\",\\n    \\"timeout\\": 0,\\n    \\"executionType\\": \\"PARALLEL\\",\\n    \\"createTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"updateTime\\": \\"2024-01-01 00:00:00\\"\\n  },\\n  \\"tasks\\": [\\n    {\\n      \\"taskId\\": \\"t-n72kong0832****\\",\\n      \\"name\\": \\"task_name\\",\\n      \\"version\\": 1,\\n      \\"description\\": \\"task description\\"\\n    }\\n  ],\\n  \\"taskRelations\\": [\\n    {\\n      \\"preTaskId\\": \\"t-n72kong0832****\\",\\n      \\"postTaskId\\": \\"t-n72kong0832****\\"\\n    }\\n  ],\\n  \\"schedule\\": {\\n    \\"scheduleState\\": \\"OFFLINE\\",\\n    \\"scheduleStartTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"scheduleEndTime\\": \\"2024-01-01 00:00:00\\",\\n    \\"cronExpr\\": \\"0 0 * * * ? *\\",\\n    \\"timeZone\\": \\"Asia/Shanghai\\",\\n    \\"failureStrategy\\": \\"END\\",\\n    \\"alertStrategy\\": \\"NONE\\",\\n    \\"alertGroupId\\": \\"ag-n72kong0832****\\",\\n    \\"workflowInstancePriority\\": \\"MEDIUM\\",\\n    \\"resourceGroupId\\": \\"wg-susqimrr649x****\\",\\n    \\"emrClusterId\\": \\"C-15F7AB9B53F1****\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取工作流详情',
    ),
    'UpdateWorkflow' => 
    array (
      'summary' => '更新工作流',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
      'methods' => 
      array (
        0 => 'put',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '221014',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        1 => 
        array (
          'name' => 'workflowId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'w-n72kong0832****',
          ),
        ),
        2 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流名称',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'taskRelationJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务依赖关系json，包含工作流所有任务之间的依赖关系，preTaskId为上游任务id，postTaskId为下游任务id，此处指定的任务id为自定义id（不能为0），每一个任务需有唯一的id。如果任务节点没有上游任务，也需要增加一个preTaskId为0的依赖关系',
            'type' => 'string',
            'required' => false,
            'example' => '  [{"preTaskId":"0", "postTaskId":"t1"}]',
          ),
        ),
        5 => 
        array (
          'name' => 'taskDefinitionJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务定义json，包含工作流所有任务的描述信息',
            'type' => 'string',
            'required' => false,
            'example' => ' [{"taskId":"t1","name":"t1","taskParams":{"rawScript":"echo 1"},"taskType":"SHELL"}]',
          ),
        ),
        6 => 
        array (
          'name' => 'description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        7 => 
        array (
          'name' => 'workflowParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流参数',
            'type' => 'string',
            'required' => false,
            'example' => '[{"prop":"key1","value":"value1"}]',
          ),
        ),
        8 => 
        array (
          'name' => 'parentDirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wd-n72kong0832****',
          ),
        ),
        9 => 
        array (
          'name' => 'timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时的时间，单位：分钟',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'executionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'SERIAL_WAIT' => '串行等待',
              'PARALLEL' => '并行',
            ),
            'example' => 'PARALLEL',
          ),
        ),
        11 => 
        array (
          'name' => 'scheduleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OFFLINE' => '下线',
              'ONLINE' => '上线',
            ),
            'example' => 'OFFLINE',
          ),
        ),
        12 => 
        array (
          'name' => 'scheduleStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度起始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-01 00:00:00',
          ),
        ),
        13 => 
        array (
          'name' => 'scheduleEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-01 00:00:00',
          ),
        ),
        14 => 
        array (
          'name' => 'cronExpr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度cron表达式',
            'type' => 'string',
            'required' => false,
            'example' => '0 0 * * * ? *',
          ),
        ),
        15 => 
        array (
          'name' => 'timeZone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'Asia/Shanghai',
          ),
        ),
        16 => 
        array (
          'name' => 'failureStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '失败策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CONTINUE' => '继续',
              'END' => '结束',
            ),
            'example' => 'END',
          ),
        ),
        17 => 
        array (
          'name' => 'alertStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ALL' => '成功或失败都发',
              'SUCCESS' => '成功发',
              'NONE' => '都不发',
              'FAILURE' => '失败发',
            ),
            'example' => 'NONE',
          ),
        ),
        18 => 
        array (
          'name' => 'alertGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-n72kong0832****',
          ),
        ),
        19 => 
        array (
          'name' => 'workflowInstancePriority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例优先级',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LOWEST' => 'LOWEST',
              'HIGH' => 'HIGH',
              'MEDIUM' => 'MEDIUM',
              'LOW' => 'LOW',
              'HIGHEST' => 'HIGHEST',
            ),
            'example' => 'MEDIUM',
          ),
        ),
        20 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wg-acfmv4opbs****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'success' => 
              array (
                'description' => '调用是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
      'title' => '更新工作流',
    ),
    'CreateWorkflow' => 
    array (
      'summary' => '创建工作流',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '220061',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-n72kong0832****',
          ),
        ),
        1 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流名称',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'taskRelationJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务依赖关系json，包含工作流所有任务之间的依赖关系，preTaskId为上游任务id，postTaskId为下游任务id，此处指定的任务id为自定义id（不能为0），每一个任务需有唯一的id。如果任务节点没有上游任务，也需要增加一个preTaskId为0的依赖关系',
            'type' => 'string',
            'required' => true,
            'example' => '  [{"preTaskId":"0", "postTaskId":"t1"}]',
          ),
        ),
        4 => 
        array (
          'name' => 'taskDefinitionJson',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务定义json，包含工作流所有任务的描述信息',
            'type' => 'string',
            'required' => true,
            'example' => '  [{"taskId":"t1","name":"t1","taskParams":{"rawScript":"echo 1"},"taskType":"SHELL"}]',
          ),
        ),
        5 => 
        array (
          'name' => 'description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        6 => 
        array (
          'name' => 'workflowParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流参数',
            'type' => 'string',
            'required' => false,
            'example' => '  [{"prop":"key1","value":"value1"}]',
          ),
        ),
        7 => 
        array (
          'name' => 'parentDirectoryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '目录ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wd-v7n2gp3vv3j****',
          ),
        ),
        8 => 
        array (
          'name' => 'timeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时的时间，单位：分钟',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        9 => 
        array (
          'name' => 'executionType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'SERIAL_WAIT' => '串行等待',
              'PARALLEL' => '并行',
            ),
            'example' => 'PARALLEL',
          ),
        ),
        10 => 
        array (
          'name' => 'scheduleState',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'OFFLINE' => '下线',
              'ONLINE' => '上线',
            ),
            'example' => 'OFFLINE',
          ),
        ),
        11 => 
        array (
          'name' => 'scheduleStartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度起始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-01 00:00:00',
          ),
        ),
        12 => 
        array (
          'name' => 'scheduleEndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-01-01 00:00:00',
          ),
        ),
        13 => 
        array (
          'name' => 'cronExpr',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调度cron表达式',
            'type' => 'string',
            'required' => false,
            'example' => '0 0 * * * ? *',
          ),
        ),
        14 => 
        array (
          'name' => 'timeZone',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '时区',
            'type' => 'string',
            'required' => false,
            'example' => 'Asia/Shanghai',
          ),
        ),
        15 => 
        array (
          'name' => 'failureStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '失败策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'CONTINUE' => '继续',
              'END' => '结束',
            ),
            'example' => 'END',
          ),
        ),
        16 => 
        array (
          'name' => 'alertStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '通知策略',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ALL' => '成功或失败都发',
              'SUCCESS' => '成功发',
              'NONE' => '都不发',
              'FAILURE' => '失败发',
            ),
            'example' => 'NONE',
          ),
        ),
        17 => 
        array (
          'name' => 'alertGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '告警组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'ag-v7n2gp3vv3j****',
          ),
        ),
        18 => 
        array (
          'name' => 'workflowInstancePriority',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例优先级',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'LOWEST' => 'LOWEST',
              'HIGH' => 'HIGH',
              'MEDIUM' => 'MEDIUM',
              'LOW' => 'LOW',
              'HIGHEST' => 'HIGHEST',
            ),
            'example' => 'MEDIUM',
          ),
        ),
        19 => 
        array (
          'name' => 'resourceGroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源组ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wg-acfmv4opbs****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '9E3A7161-EB7B-172B-8D18-FFB06BA38***',
              ),
              'success' => 
              array (
                'description' => '调用是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'workflowId' => 
                  array (
                    'description' => '工作流ID',
                    'type' => 'string',
                    'example' => 'w-acfmv4opbs****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E3A7161-EB7B-172B-8D18-FFB06BA38***\\",\\n  \\"success\\": true,\\n  \\"data\\": {\\n    \\"workflowId\\": \\"w-acfmv4opbs****\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建工作流',
    ),
    'DeleteWorkflow' => 
    array (
      'summary' => '删除工作流',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}',
      'methods' => 
      array (
        0 => 'delete',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '219539',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce265SSG',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'w-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'success' => 
              array (
                'description' => '调用是否成功',
                'type' => 'boolean',
                'example' => 'True',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"success\\": true\\n}","type":"json"}]',
      'title' => '删除工作流',
    ),
    'ListWorkflowInstances' => 
    array (
      'summary' => '获取工作流实例列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflowInstances',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '221706',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceVHPGXM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        3 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
          ),
        ),
        5 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESS',
          ),
        ),
        7 => 
        array (
          'name' => 'workflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => false,
            'example' => 'w-3q9jo749ne5****',
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
              'nextToken' => 
              array (
                'title' => 'Id of the request',
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流实例详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'workflowInstanceId' => 
                    array (
                      'description' => '工作流实例ID',
                      'type' => 'string',
                      'example' => 'wi-3q9jo749ne5****',
                    ),
                    'workflowId' => 
                    array (
                      'description' => '工作流ID',
                      'type' => 'string',
                      'example' => 'w-3q9jo749ne5****',
                    ),
                    'workflowVersion' => 
                    array (
                      'description' => '工作流版本号',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'name' => 
                    array (
                      'description' => '工作流实例名称',
                      'type' => 'string',
                      'example' => 'workflow_instance_name',
                    ),
                    'status' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'startTime' => 
                    array (
                      'description' => '开始时间',
                      'type' => 'string',
                      'example' => '2024-01-01 00:00:00',
                    ),
                    'endTime' => 
                    array (
                      'description' => '结束时间',
                      'type' => 'string',
                      'example' => '2024-01-01 00:00:00',
                    ),
                    'scheduleTime' => 
                    array (
                      'description' => '调度时间',
                      'type' => 'string',
                      'example' => '2024-01-01 00:00:00',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"workflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n      \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n      \\"workflowVersion\\": 1,\\n      \\"name\\": \\"workflow_instance_name\\",\\n      \\"status\\": \\"SUCCESS\\",\\n      \\"startTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"endTime\\": \\"2024-01-01 00:00:00\\",\\n      \\"scheduleTime\\": \\"2024-01-01 00:00:00\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '获取工作流实例列表',
    ),
    'DescribeWorkflowInstance' => 
    array (
      'summary' => '获取工作流实例详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflowInstances/{workflowInstanceId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '221702',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceVHPGXM',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '12345',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'wf-3q9jo749ne5****',
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
              'workflowInstanceId' => 
              array (
                'description' => '工作流实例ID',
                'type' => 'string',
                'example' => 'wi-3q9jo749ne5****',
              ),
              'workflowId' => 
              array (
                'description' => '工作流ID',
                'type' => 'string',
                'example' => 'w-3q9jo749ne5****',
              ),
              'workflowVersion' => 
              array (
                'description' => '工作流版本号',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'status' => 
              array (
                'description' => '状态',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'startTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'endTime' => 
              array (
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'scheduleTime' => 
              array (
                'description' => '调度时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'runTimes' => 
              array (
                'description' => '运行次数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'name' => 
              array (
                'description' => '工作流实例名称',
                'type' => 'string',
                'example' => 'workflow_instance_name',
              ),
              'resourceGroupId' => 
              array (
                'description' => '资源组ID',
                'type' => 'string',
                'example' => 'wg-susqimrr649x****',
              ),
              'emrClusterId' => 
              array (
                'description' => 'EMR集群id',
                'type' => 'string',
                'example' => 'c-047fa6bbe732****',
              ),
              'timeout' => 
              array (
                'description' => '超时的时间，单位：分钟',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'isComplementData' => 
              array (
                'description' => '是否为补数实例',
                'type' => 'boolean',
                'example' => 'false',
              ),
              'requestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'failureStrategy' => 
              array (
                'description' => '失败策略',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'CONTINUE' => '继续',
                  'END' => '结束',
                ),
                'example' => 'END',
              ),
              'alertStrategy' => 
              array (
                'description' => '通知策略',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'ALL' => '成功或失败都发',
                  'SUCCESS' => '成功发',
                  'NONE' => '都不发',
                  'FAILURE' => '失败发',
                ),
                'example' => 'NONE',
              ),
              'alertGroupId' => 
              array (
                'description' => '告警组ID',
                'type' => 'string',
                'example' => 'ag-n72kong0832****',
              ),
              'workflowInstancePriority' => 
              array (
                'description' => '工作流实例优先级',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'LOWEST' => 'LOWEST',
                  'HIGH' => 'HIGH',
                  'MEDIUM' => 'MEDIUM',
                  'LOW' => 'LOW',
                  'HIGHEST' => 'HIGHEST',
                ),
                'example' => 'MEDIUM',
              ),
              'restartTime' => 
              array (
                'description' => '重新运行时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"workflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n  \\"workflowId\\": \\"w-3q9jo749ne5****\\",\\n  \\"workflowVersion\\": 1,\\n  \\"status\\": \\"SUCCESS\\",\\n  \\"startTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"endTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"scheduleTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"runTimes\\": 1,\\n  \\"name\\": \\"workflow_instance_name\\",\\n  \\"resourceGroupId\\": \\"wg-susqimrr649x****\\",\\n  \\"emrClusterId\\": \\"c-047fa6bbe732****\\",\\n  \\"timeout\\": 0,\\n  \\"isComplementData\\": false,\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"failureStrategy\\": \\"END\\",\\n  \\"alertStrategy\\": \\"NONE\\",\\n  \\"alertGroupId\\": \\"ag-n72kong0832****\\",\\n  \\"workflowInstancePriority\\": \\"MEDIUM\\",\\n  \\"restartTime\\": \\"2024-03-27 00:00:00\\"\\n}","type":"json"}]',
      'title' => '获取工作流实例详情',
    ),
    'DescribeManualTask' => 
    array (
      'summary' => '获取手动任务详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTasks/{manualTaskId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '221510',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceYP2JJQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'manualTaskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '手动任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 'mt-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'ManualTaskId' => 
              array (
                'description' => '手动任务ID',
                'type' => 'string',
                'example' => 'mt-3q9jo749ne5****',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'ManualTaskName' => 
              array (
                'description' => '手动任务名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'Description' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'test',
              ),
              'ProjectId' => 
              array (
                'description' => '项目ID',
                'type' => 'string',
                'example' => 'p-3q9jo749ne5****',
              ),
              'TaskType' => 
              array (
                'description' => '任务类型',
                'type' => 'string',
                'example' => 'SHELL',
              ),
              'TaskParams' => 
              array (
                'description' => '任务参数',
                'type' => 'string',
                'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
              ),
              'ResourceIds' => 
              array (
                'description' => '资源ID列表',
                'type' => 'string',
                'example' => 'r-oy98v7n43el****',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'ParentDirectoryId' => 
              array (
                'description' => '目录ID',
                'type' => 'string',
                'example' => 'mtd-oy98v7n43el****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"ManualTaskId\\": \\"mt-3q9jo749ne5****\\",\\n  \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ManualTaskName\\": \\"test\\",\\n  \\"Description\\": \\"test\\",\\n  \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceIds\\": \\"r-oy98v7n43el****\\",\\n  \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ParentDirectoryId\\": \\"mtd-oy98v7n43el****\\"\\n}","type":"json"}]',
      'title' => '获取手动任务详情',
    ),
    'ListManualTasks' => 
    array (
      'summary' => '获取手动任务列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTasks',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '221515',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceYP2JJQ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        1 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        2 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        3 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'taskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '手动任务',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ManualTaskId' => 
                    array (
                      'description' => '手动任务ID',
                      'type' => 'string',
                      'example' => 'mt-3q9jo749ne5****',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'ManualTaskName' => 
                    array (
                      'description' => '手动任务名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ProjectId' => 
                    array (
                      'description' => '项目ID',
                      'type' => 'string',
                      'example' => 'p-3q9jo749ne5****',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型',
                      'type' => 'string',
                      'example' => 'SHELL',
                    ),
                    'TaskParams' => 
                    array (
                      'description' => '任务参数',
                      'type' => 'string',
                      'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
                    ),
                    'ResourceIds' => 
                    array (
                      'description' => '资源ID列表',
                      'type' => 'string',
                      'example' => 'r-oy98v7n43el****',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'ParentDirectoryId' => 
                    array (
                      'description' => '目录ID',
                      'type' => 'string',
                      'example' => 'mtd-oy98v7n43el****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"ManualTaskId\\": \\"mt-3q9jo749ne5****\\",\\n      \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ManualTaskName\\": \\"test\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ResourceIds\\": \\"r-oy98v7n43el****\\",\\n      \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ParentDirectoryId\\": \\"mtd-oy98v7n43el****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取手动任务列表',
    ),
    'DescribeManualTaskInstance' => 
    array (
      'summary' => '获取手动任务实例详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTaskInstances/{manualTaskInstanceId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '221526',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce3835LZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'manualTaskInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '手动任务实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'mti-0k5vype05xm****',
          ),
        ),
        2 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'ManualTaskInstanceId' => 
              array (
                'description' => '手动任务实例ID',
                'type' => 'string',
                'example' => 'mti-0k5vype05xm****',
              ),
              'ManualTaskInstanceName' => 
              array (
                'description' => '手动任务实例名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'TaskType' => 
              array (
                'description' => '任务类型',
                'type' => 'string',
                'example' => 'SHELL',
              ),
              'Status' => 
              array (
                'description' => '状态',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubmitTime' => 
              array (
                'description' => '提交时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'EndTime' => 
              array (
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'ExternalAppId' => 
              array (
                'description' => '外部应用ID',
                'type' => 'string',
                'example' => 'application_123_***',
              ),
              'TaskParams' => 
              array (
                'description' => '任务参数',
                'type' => 'string',
                'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID',
                'type' => 'string',
                'example' => 'wg-123abc***',
              ),
              'EmrClusterId' => 
              array (
                'description' => 'EMR集群ID',
                'type' => 'string',
                'example' => 'c-b933c5aac7f7***',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"ManualTaskInstanceId\\": \\"mti-0k5vype05xm****\\",\\n  \\"ManualTaskInstanceName\\": \\"test\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"ExternalAppId\\": \\"application_123_***\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceGroupId\\": \\"wg-123abc***\\",\\n  \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\"\\n}","type":"json"}]',
      'title' => '获取手动任务实例详情',
    ),
    'ListManualTaskInstances' => 
    array (
      'summary' => '获取手动任务实例列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/manualTaskInstances',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '221584',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce3835LZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        1 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        2 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        4 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESS',
          ),
        ),
        6 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
          ),
        ),
        7 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '手动任务实例',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ManualTaskInstanceId' => 
                    array (
                      'description' => '手动任务实例ID',
                      'type' => 'string',
                      'example' => 'mti-3q9jo749ne5****',
                    ),
                    'ManualTaskInstanceName' => 
                    array (
                      'description' => '手动任务实例名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型',
                      'type' => 'string',
                      'example' => 'SHELL',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'SubmitTime' => 
                    array (
                      'description' => '提交时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '开始时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '结束时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'ExternalAppId' => 
                    array (
                      'description' => '外部应用ID',
                      'type' => 'string',
                      'example' => 'application_123_***',
                    ),
                    'TaskParams' => 
                    array (
                      'description' => '任务参数',
                      'type' => 'string',
                      'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID',
                      'type' => 'string',
                      'example' => 'wg-3q9jo749ne5****',
                    ),
                    'EmrClusterId' => 
                    array (
                      'description' => 'EMR集群ID',
                      'type' => 'string',
                      'example' => 'c-b933c5aac7f7***',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"ManualTaskInstanceId\\": \\"mti-3q9jo749ne5****\\",\\n      \\"ManualTaskInstanceName\\": \\"test\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"ExternalAppId\\": \\"application_123_***\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ResourceGroupId\\": \\"wg-3q9jo749ne5****\\",\\n      \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取手动任务实例列表',
    ),
    'ListTasks' => 
    array (
      'summary' => '获取任务列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/tasks',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '221598',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce61FDX5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        3 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        5 => 
        array (
          'name' => 'taskType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务类型',
            'type' => 'string',
            'required' => false,
            'example' => 'SHELL',
          ),
        ),
        6 => 
        array (
          'name' => 'workflowId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => false,
            'example' => 'w-n72kong0832****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => 't-3q9jo749ne5****',
                    ),
                    'TaskName' => 
                    array (
                      'description' => '任务名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '创建时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'UpdateTime' => 
                    array (
                      'description' => '更新时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'Version' => 
                    array (
                      'description' => '版本',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'Description' => 
                    array (
                      'description' => '描述',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'ProjectId' => 
                    array (
                      'description' => '项目ID',
                      'type' => 'string',
                      'example' => 'p-3q9jo749ne5****',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型',
                      'type' => 'string',
                      'example' => 'SHELL',
                    ),
                    'TaskParams' => 
                    array (
                      'description' => '任务参数',
                      'type' => 'string',
                      'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
                    ),
                    'Flag' => 
                    array (
                      'description' => '运行标志',
                      'type' => 'string',
                      'example' => 'YES',
                    ),
                    'TaskPriority' => 
                    array (
                      'description' => '任务优先级',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'LOWEST' => 'LOWEST',
                        'HIGH' => 'HIGH',
                        'MEDIUM' => 'MEDIUM',
                        'LOW' => 'LOW',
                        'HIGHEST' => 'HIGHEST',
                      ),
                      'example' => 'MEDIUM',
                    ),
                    'FailRetryTimes' => 
                    array (
                      'description' => '失败重试次数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'FailRetryInterval' => 
                    array (
                      'description' => '失败重试间隔',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'TimeoutFlag' => 
                    array (
                      'description' => '超时告警标志',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'CLOSE' => '关闭',
                        'OPEN' => '打开',
                      ),
                      'example' => 'CLOSE',
                    ),
                    'TimeoutNotifyStrategy' => 
                    array (
                      'description' => '超时策略',
                      'type' => 'string',
                      'enumValueTitles' => 
                      array (
                        'FAILED' => '超时失败',
                        'WARNFAILED' => '超时告警并失败',
                        'WARN' => '超时告警',
                      ),
                      'example' => 'WARN',
                    ),
                    'Timeout' => 
                    array (
                      'description' => '超时时长',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'DelayTime' => 
                    array (
                      'description' => '延时执行时间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ResourceIds' => 
                    array (
                      'description' => '资源ID列表',
                      'type' => 'string',
                      'example' => 'r-3q9jo749ne5****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n      \\"TaskName\\": \\"test\\",\\n      \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"Version\\": \\"1\\",\\n      \\"Description\\": \\"test\\",\\n      \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"Flag\\": \\"YES\\",\\n      \\"TaskPriority\\": \\"MEDIUM\\",\\n      \\"FailRetryTimes\\": 0,\\n      \\"FailRetryInterval\\": 1,\\n      \\"TimeoutFlag\\": \\"CLOSE\\",\\n      \\"TimeoutNotifyStrategy\\": \\"WARN\\",\\n      \\"Timeout\\": 0,\\n      \\"DelayTime\\": 0,\\n      \\"ResourceIds\\": \\"r-3q9jo749ne5****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取任务列表',
    ),
    'DescribeTask' => 
    array (
      'summary' => '获取任务详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowId}/tasks/{taskId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '221586',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce61FDX5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'workflowId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID',
            'type' => 'string',
            'required' => true,
            'example' => 'w-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        3 => 
        array (
          'name' => 'taskId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务ID',
            'type' => 'string',
            'required' => true,
            'example' => 't-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID',
                'type' => 'string',
                'example' => 't-3q9jo749ne5****',
              ),
              'TaskName' => 
              array (
                'description' => '任务名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'CreateTime' => 
              array (
                'description' => '创建时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'UpdateTime' => 
              array (
                'description' => '更新时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'Version' => 
              array (
                'description' => '版本',
                'type' => 'string',
                'example' => '1',
              ),
              'Description' => 
              array (
                'description' => '描述',
                'type' => 'string',
                'example' => 'test',
              ),
              'ProjectId' => 
              array (
                'description' => '项目ID',
                'type' => 'string',
                'example' => 'p-3q9jo749ne5****',
              ),
              'TaskType' => 
              array (
                'description' => '任务类型',
                'type' => 'string',
                'example' => 'SHELL',
              ),
              'TaskParams' => 
              array (
                'description' => '任务参数',
                'type' => 'string',
                'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
              ),
              'Flag' => 
              array (
                'description' => '运行标志',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'NO' => 'NO',
                  'YES' => 'YES',
                ),
                'example' => 'YES',
              ),
              'TaskPriority' => 
              array (
                'description' => '任务优先级',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'LOWEST' => 'LOWEST',
                  'HIGH' => 'HIGH',
                  'MEDIUM' => 'MEDIUM',
                  'LOW' => 'LOW',
                  'HIGHEST' => 'HIGHEST',
                ),
                'example' => 'MEDIUM',
              ),
              'FailRetryTimes' => 
              array (
                'description' => '失败重试次数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'FailRetryInterval' => 
              array (
                'description' => '失败重试间隔',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'TimeoutFlag' => 
              array (
                'description' => '超时告警标志',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'CLOSE' => 'CLOSE',
                  'OPEN' => 'OPEN',
                ),
                'example' => 'CLOSE',
              ),
              'TimeoutNotifyStrategy' => 
              array (
                'description' => '超时策略',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FAILED' => '超时失败',
                  'WARNFAILED' => '超时告警并失败',
                  'WARN' => '超时告警',
                ),
                'example' => 'WARN',
              ),
              'Timeout' => 
              array (
                'description' => '超时时长',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'DelayTime' => 
              array (
                'description' => '延时执行时间',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ResourceIds' => 
              array (
                'description' => '资源ID列表',
                'type' => 'string',
                'example' => 'r-oy98v7n43el****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n  \\"TaskName\\": \\"test\\",\\n  \\"CreateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"UpdateTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"Version\\": \\"1\\",\\n  \\"Description\\": \\"test\\",\\n  \\"ProjectId\\": \\"p-3q9jo749ne5****\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"Flag\\": \\"YES\\",\\n  \\"TaskPriority\\": \\"MEDIUM\\",\\n  \\"FailRetryTimes\\": 0,\\n  \\"FailRetryInterval\\": 1,\\n  \\"TimeoutFlag\\": \\"CLOSE\\",\\n  \\"TimeoutNotifyStrategy\\": \\"WARN\\",\\n  \\"Timeout\\": 10,\\n  \\"DelayTime\\": 0,\\n  \\"ResourceIds\\": \\"r-oy98v7n43el****\\"\\n}","type":"json"}]',
      'title' => '获取任务详情',
    ),
    'DescribeTaskInstance' => 
    array (
      'summary' => '获取任务实例详情',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/workflows/{workflowInstanceId}/taskInstances/{taskInstanceId}',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '221606',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce5Q1MGZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'wi-3q9jo749ne5****',
          ),
        ),
        3 => 
        array (
          'name' => 'taskInstanceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '任务实例ID',
            'type' => 'string',
            'required' => true,
            'example' => 'ti-3q9jo749ne5****',
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
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'TaskInstanceId' => 
              array (
                'description' => '任务实例ID',
                'type' => 'string',
                'example' => 'ti-3q9jo749ne5****',
              ),
              'TaskInstanceName' => 
              array (
                'description' => '任务实例名称',
                'type' => 'string',
                'example' => 'test',
              ),
              'TaskType' => 
              array (
                'description' => '任务类型',
                'type' => 'string',
                'example' => 'SHELL',
              ),
              'TaskId' => 
              array (
                'description' => '任务ID',
                'type' => 'string',
                'example' => 't-3q9jo749ne5****',
              ),
              'TaskVersion' => 
              array (
                'description' => '任务版本',
                'type' => 'string',
                'example' => '1',
              ),
              'WorkflowInstanceId' => 
              array (
                'description' => '工作流实例ID',
                'type' => 'string',
                'example' => 'wi-3q9jo749ne5****',
              ),
              'Status' => 
              array (
                'description' => '状态',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'SubmitTime' => 
              array (
                'description' => '提交时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'StartTime' => 
              array (
                'description' => '开始时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'EndTime' => 
              array (
                'description' => '结束时间',
                'type' => 'string',
                'example' => '2024-03-27 00:00:00',
              ),
              'RetryTimes' => 
              array (
                'description' => '重试次数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '0',
              ),
              'ExternalAppId' => 
              array (
                'description' => '外部应用ID',
                'type' => 'string',
                'example' => 'application_123_***',
              ),
              'TaskParams' => 
              array (
                'description' => '任务参数',
                'type' => 'string',
                'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
              ),
              'ResourceGroupId' => 
              array (
                'description' => '资源组ID',
                'type' => 'string',
                'example' => 'wg-123abc***',
              ),
              'EmrClusterId' => 
              array (
                'description' => 'EMR集群ID',
                'type' => 'string',
                'example' => 'c-b933c5aac7f7***',
              ),
              'DryRun' => 
              array (
                'description' => '空跑标识',
                'type' => 'string',
                'example' => '0',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"TaskInstanceId\\": \\"ti-3q9jo749ne5****\\",\\n  \\"TaskInstanceName\\": \\"test\\",\\n  \\"TaskType\\": \\"SHELL\\",\\n  \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n  \\"TaskVersion\\": \\"1\\",\\n  \\"WorkflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n  \\"Status\\": \\"SUCCESS\\",\\n  \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n  \\"RetryTimes\\": 0,\\n  \\"ExternalAppId\\": \\"application_123_***\\",\\n  \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n  \\"ResourceGroupId\\": \\"wg-123abc***\\",\\n  \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\",\\n  \\"DryRun\\": \\"0\\"\\n}","type":"json"}]',
      'title' => '获取任务实例详情',
    ),
    'ListTaskInstances' => 
    array (
      'summary' => '获取任务实例列表',
      'path' => '/dolphinscheduler/v3/projects/{projectId}/taskInstances',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '221613',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce5Q1MGZ',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => true,
            'example' => '123***',
          ),
        ),
        1 => 
        array (
          'name' => 'projectId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '项目ID',
            'type' => 'string',
            'required' => true,
            'example' => 'p-3q9jo749ne5****',
          ),
        ),
        2 => 
        array (
          'name' => 'workflowInstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流实例ID',
            'type' => 'string',
            'required' => false,
            'example' => 'wi-3q9jo749ne5****',
          ),
        ),
        3 => 
        array (
          'name' => 'searchVal',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '搜索值',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        4 => 
        array (
          'name' => 'status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '状态',
            'type' => 'string',
            'required' => false,
            'example' => 'SUCCESS',
          ),
        ),
        5 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
          ),
        ),
        6 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间',
            'type' => 'string',
            'required' => false,
            'example' => '2024-03-27 00:00:00',
          ),
        ),
        7 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一次请求的分页token。',
            'type' => 'string',
            'required' => false,
            'example' => '123abc***',
          ),
        ),
        8 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '一次获取的最大记录数',
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
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '9E3A7161-EB7B-172B-8D18-FFB06BA38***',
              ),
              'nextToken' => 
              array (
                'description' => '下一次请求的分页token。',
                'type' => 'string',
                'example' => '123abc***',
              ),
              'totalSize' => 
              array (
                'description' => '记录总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'data' => 
              array (
                'description' => '返回结果',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '任务实例',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskInstanceId' => 
                    array (
                      'description' => '任务实例ID',
                      'type' => 'string',
                      'example' => 'ti-3q9jo749ne5****',
                    ),
                    'TaskInstanceName' => 
                    array (
                      'description' => '任务实例名称',
                      'type' => 'string',
                      'example' => 'test',
                    ),
                    'DryRun' => 
                    array (
                      'description' => '空跑标识',
                      'type' => 'string',
                      'example' => '0',
                    ),
                    'EmrClusterId' => 
                    array (
                      'description' => 'EMR集群ID',
                      'type' => 'string',
                      'example' => 'c-b933c5aac7f7***',
                    ),
                    'ResourceGroupId' => 
                    array (
                      'description' => '资源组ID',
                      'type' => 'string',
                      'example' => 'wg-3q9jo749ne5****',
                    ),
                    'TaskParams' => 
                    array (
                      'description' => '任务参数',
                      'type' => 'string',
                      'example' => '{
    "yarnUser": "",
    "conditionResult": "null",
    "rawScript": "sleep 300",
    "submitOnYarnFlag": false,
    "emrClusterId": "",
    "yarnPriority": "",
    "dependence": "null",
    "yarnMemory": "",
    "localParams": [],
    "switchResult": "null",
    "resourceList": [],
    "yarnQueue": "",
    "yarnVCores": "",
    "associateManualTaskFlag": false
}',
                    ),
                    'ExternalAppId' => 
                    array (
                      'description' => '外部应用ID',
                      'type' => 'string',
                      'example' => 'application_123_***',
                    ),
                    'RetryTimes' => 
                    array (
                      'description' => '重试次数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '结束时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '开始时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'SubmitTime' => 
                    array (
                      'description' => '提交时间',
                      'type' => 'string',
                      'example' => '2024-03-27 00:00:00',
                    ),
                    'Status' => 
                    array (
                      'description' => '状态',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'WorkflowInstanceId' => 
                    array (
                      'description' => '工作流实例ID',
                      'type' => 'string',
                      'example' => 'wi-3q9jo749ne5****',
                    ),
                    'TaskVersion' => 
                    array (
                      'description' => '任务版本',
                      'type' => 'string',
                      'example' => '1',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '任务ID',
                      'type' => 'string',
                      'example' => 't-3q9jo749ne5****',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '任务类型',
                      'type' => 'string',
                      'example' => 'SHELL',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"9E3A7161-EB7B-172B-8D18-FFB06BA38***\\",\\n  \\"nextToken\\": \\"123abc***\\",\\n  \\"totalSize\\": 10,\\n  \\"data\\": [\\n    {\\n      \\"TaskInstanceId\\": \\"ti-3q9jo749ne5****\\",\\n      \\"TaskInstanceName\\": \\"test\\",\\n      \\"DryRun\\": \\"0\\",\\n      \\"EmrClusterId\\": \\"c-b933c5aac7f7***\\",\\n      \\"ResourceGroupId\\": \\"wg-3q9jo749ne5****\\",\\n      \\"TaskParams\\": \\"{\\\\n    \\\\\\"yarnUser\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"conditionResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"rawScript\\\\\\": \\\\\\"sleep 300\\\\\\",\\\\n    \\\\\\"submitOnYarnFlag\\\\\\": false,\\\\n    \\\\\\"emrClusterId\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnPriority\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"dependence\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"yarnMemory\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"localParams\\\\\\": [],\\\\n    \\\\\\"switchResult\\\\\\": \\\\\\"null\\\\\\",\\\\n    \\\\\\"resourceList\\\\\\": [],\\\\n    \\\\\\"yarnQueue\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"yarnVCores\\\\\\": \\\\\\"\\\\\\",\\\\n    \\\\\\"associateManualTaskFlag\\\\\\": false\\\\n}\\",\\n      \\"ExternalAppId\\": \\"application_123_***\\",\\n      \\"RetryTimes\\": 0,\\n      \\"EndTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"StartTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"SubmitTime\\": \\"2024-03-27 00:00:00\\",\\n      \\"Status\\": \\"SUCCESS\\",\\n      \\"WorkflowInstanceId\\": \\"wi-3q9jo749ne5****\\",\\n      \\"TaskVersion\\": \\"1\\",\\n      \\"TaskId\\": \\"t-3q9jo749ne5****\\",\\n      \\"TaskType\\": \\"SHELL\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取任务实例列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'emrstudio.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'emrstudio.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'emrstudio.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'emrstudio.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'emrstudio.cn-chengdu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'emrstudio.cn-zhangjiakou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'emrstudio.ap-southeast-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'emrstudio.ap-southeast-3.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'emrstudio.us-west-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'emrstudio.eu-central-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'emrstudio.cn-hongkong.aliyuncs.com',
    ),
  ),
);
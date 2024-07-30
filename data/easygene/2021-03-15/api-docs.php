<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'EasyGene',
        'version' => '2021-03-15',
    ],
    'directories' => [
        [
            'id' => 125018,
            'title' => '工作空间',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 125019,
                    'title' => '空间',
                    'type' => 'directory',
                    'children' => [
                        'CreateWorkspace',
                        'DeleteWorkspace',
                        'UpdateWorkspace',
                        'ListWorkspaces',
                        'GetWorkspace',
                    ],
                ],
                [
                    'id' => 125025,
                    'title' => '应用',
                    'type' => 'directory',
                    'children' => [
                        'CreateApp',
                        'TagApp',
                        'ImportApp',
                        'DeleteApp',
                        'GetApp',
                        'ListApps',
                    ],
                ],
                [
                    'id' => 125032,
                    'title' => '运行',
                    'type' => 'directory',
                    'children' => [
                        'CreateRun',
                        'GetRun',
                        'DeleteRun',
                        'ListRuns',
                        'ListUserActiveRuns',
                        'AbortRun',
                    ],
                ],
                [
                    'id' => 125039,
                    'title' => '实体',
                    'type' => 'directory',
                    'children' => [
                        'CreateEntity',
                        'GetEntity',
                        'DeleteEntity',
                        'DeleteEntityItems',
                        'UpdateEntity',
                        'UpdateEntityItems',
                        'ListEntities',
                        'ListEntityItems',
                        'CopyPublicEntity',
                        'DownloadEntity',
                        'UploadEntity',
                    ],
                ],
                [
                    'id' => 125049,
                    'title' => '模板',
                    'type' => 'directory',
                    'children' => [
                        'CreateTemplate',
                        'GetTemplate',
                        'DeleteTemplate',
                        'UpdateTemplate',
                        'ListTemplates',
                    ],
                ],
                [
                    'id' => 125055,
                    'title' => '投递',
                    'type' => 'directory',
                    'children' => [
                        'CreateSubmission',
                        'GetSubmission',
                        'DeleteSubmission',
                        'ListSubmissions',
                        'AbortSubmission',
                        'ResumeSubmission',
                    ],
                ],
            ],
        ],
        [
            'id' => 125062,
            'title' => '公共应用',
            'type' => 'directory',
            'children' => [
                'ListGlobalApps',
                'GetGlobalApp',
            ],
        ],
        [
            'id' => 125065,
            'title' => '开发者资源',
            'type' => 'directory',
            'children' => [
                'ListContainerImages',
                'ListAuthorizedSoftware',
            ],
        ],
        [
            'id' => 125068,
            'title' => '公共数据集',
            'type' => 'directory',
            'children' => [
                'ListPublicDataset',
                'GetPublicDataset',
                'ListPublicDatasetEntities',
                'GetPublicDatasetEntity',
                'ListPublicDatasetEntityItems',
                'ListPublicDatasetTags',
            ],
        ],
        [
            'id' => 165096,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ListRegions',
                'InstallGlobalApp',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateWorkspace' => [
            'summary' => '创建用户工作空间。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间描述',
                        'description' => '工作空间描述',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'This is a test workspace',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '幂等Token',
                        'description' => '幂等Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
                [
                    'name' => 'Storage',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间的OSS工作路径',
                        'description' => '工作空间内OSS上的工作路径',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'oss://gstor-default-workspace-cn-shanghai-bae3193d/',
                    ],
                ],
                [
                    'name' => 'JobLifecycle',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间任务生命周期',
                        'description' => '工作空间任务生命周期',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间内的ram角色',
                        'description' => '工作空间内的ram角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestRole',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间标签',
                        'description' => '工作空间标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '创建成功的工作空间名称',
                                'description' => '创建成功的工作空间名称',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"TestWorkspace\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateWorkspaceResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>TestWorkspace</Workspace>\\n</CreateWorkspaceResponse>","errorExample":""}]',
            'title' => '创建工作空间',
        ],
        'DeleteWorkspace' => [
            'summary' => '删除用户工作空间。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyTestWorkspace',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteWorkspaceResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteWorkspaceResponse>","errorExample":""}]',
            'title' => '删除工作空间',
        ],
        'UpdateWorkspace' => [
            'summary' => '更新工作空间的部分信息。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyTestWorkspace',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间描述',
                        'description' => '工作空间描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test workspace',
                    ],
                ],
                [
                    'name' => 'JobLifecycle',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间内任务生命周期',
                        'description' => '工作空间内任务生命周期',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '30',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间内Ram角色',
                        'description' => '工作空间内Ram角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyTestRamRole',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间标签',
                        'description' => '工作空间标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"env":"test"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"RequestId\\": \\"easygene.cn-beijing.aliyuncs.com\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateWorkspaceResponse>\\n    <HostId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</HostId>\\n    <RequestId>easygene.cn-beijing.aliyuncs.com</RequestId>\\n</UpdateWorkspaceResponse>","errorExample":""}]',
            'title' => '更新工作空间',
        ],
        'ListWorkspaces' => [
            'summary' => '列出符合条件的工作空间。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '搜索字段',
                        'description' => '查找条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据',
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '逆序',
                        'description' => '逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'NextToken',
                        'description' => '查询起始Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最多返回数量',
                        'description' => '最多返回数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'LabelSelector',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Label选择器',
                        'description' => 'Label选择器',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'env=test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大结果数',
                                'description' => '最大结果数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '下次查询的起始Token',
                                'description' => '下次查询的起始Token',
                                'type' => 'string',
                                'example' => 'TestToken',
                            ],
                            'TotalCount' => [
                                'title' => '返回总个数',
                                'description' => '返回总个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Workspaces' => [
                                'title' => '工作空间数组',
                                'description' => '工作空间数组',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'title' => '工作空间描述',
                                            'description' => '工作空间描述',
                                            'type' => 'string',
                                            'example' => 'This is a test workspace',
                                        ],
                                        'JobLifecycle' => [
                                            'title' => '任务生命周期',
                                            'description' => '任务生命周期',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '30',
                                        ],
                                        'Labels' => [
                                            'title' => '工作空间标签',
                                            'description' => '工作空间标签',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => 'test',
                                                'description' => '标签',
                                            ],
                                        ],
                                        'Storage' => [
                                            'title' => 'OSS工作路径',
                                            'description' => 'OSS工作路径',
                                            'type' => 'string',
                                            'example' => 'oss://my-bucket/my-path/',
                                        ],
                                        'BucketName' => [
                                            'title' => '工作空间Bucket名字',
                                            'description' => '工作空间Bucket名字',
                                            'type' => 'string',
                                            'example' => 'my-bucket',
                                        ],
                                        'Role' => [
                                            'title' => 'RAM Role',
                                            'description' => 'RAM Role',
                                            'type' => 'string',
                                            'example' => 'TestRole',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'LastModifiedTime' => [
                                            'title' => '最后修改时间',
                                            'description' => '最后修改时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'Workspace' => [
                                            'title' => '工作空间名称',
                                            'description' => '工作空间名称',
                                            'type' => 'string',
                                            'example' => 'TestWorkspace',
                                        ],
                                        'Status' => [
                                            'title' => '工作空间状态',
                                            'description' => '工作空间状态',
                                            'type' => 'string',
                                            'example' => 'Active',
                                        ],
                                        'Location' => [
                                            'title' => '地域ID',
                                            'description' => '地域ID',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"MaxResults\\": 5,\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"TestToken\\",\\n  \\"TotalCount\\": 5,\\n  \\"Workspaces\\": [\\n    {\\n      \\"Description\\": \\"This is a test workspace\\",\\n      \\"JobLifecycle\\": 30,\\n      \\"Labels\\": {\\n        \\"key\\": \\"test\\"\\n      },\\n      \\"Storage\\": \\"oss://my-bucket/my-path/\\",\\n      \\"BucketName\\": \\"my-bucket\\",\\n      \\"Role\\": \\"TestRole\\",\\n      \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"LastModifiedTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"Workspace\\": \\"TestWorkspace\\",\\n      \\"Status\\": \\"Active\\",\\n      \\"Location\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListWorkspacesResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <MaxResults>5</MaxResults>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <NextToken>TestToken</NextToken>\\n    <TotalCount>5</TotalCount>\\n    <Workspaces>\\n        <Description>This is a test workspace</Description>\\n        <JobLifecycle>30</JobLifecycle>\\n        <Labels>\\n            <key>test</key>\\n        </Labels>\\n        <OssRoot>oss://my-bucket/my-path/</OssRoot>\\n        <BucketName>my-bucket</BucketName>\\n        <Role>TestRole</Role>\\n        <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n        <LastModifiedTime>2021-06-16T15:09:14.378297+08:00</LastModifiedTime>\\n        <Workspace>TestWorkspace</Workspace>\\n        <Status>Active</Status>\\n        <RegionId>cn-beijing</RegionId>\\n    </Workspaces>\\n</ListWorkspacesResponse>","errorExample":""}]',
            'title' => '列出工作空间',
        ],
        'GetWorkspace' => [
            'summary' => '查询工作空间的详细信息，包括状态，描述，作业生命周期等。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名字',
                        'description' => '工作空间名字',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyTestWorkspace',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Description' => [
                                'title' => '工作空间简要描述',
                                'description' => '工作空间简要描述',
                                'type' => 'string',
                                'example' => 'This is a test workspace',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'JobLifecycle' => [
                                'title' => '工作空间内作业生命周期',
                                'description' => '工作空间内作业生命周期',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '30',
                            ],
                            'Labels' => [
                                'title' => '工作空间标签',
                                'description' => '工作空间标签',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'test',
                                    'description' => '标签',
                                ],
                            ],
                            'Storage' => [
                                'title' => '工作空间内OSS上的工作路径',
                                'description' => '工作空间内OSS上的工作路径',
                                'type' => 'string',
                                'example' => 'oss://my-bucket/my-path/',
                            ],
                            'BucketName' => [
                                'title' => '工作空间Bucket',
                                'description' => '工作空间Bucket',
                                'type' => 'string',
                                'example' => 'my-bucket',
                            ],
                            'Role' => [
                                'title' => '工作空间内默认的RAM服务角色',
                                'description' => '工作空间内默认的RAM服务角色',
                                'type' => 'string',
                                'example' => 'TestRole',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2021-06-16T15:09:14.378297+08:00',
                            ],
                            'LastModifiedTime' => [
                                'title' => '最后修改时间',
                                'description' => '最后修改时间',
                                'type' => 'string',
                                'example' => '2021-06-16T15:09:14.378297+08:00',
                            ],
                            'Workspace' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'Status' => [
                                'title' => '工作空间状态',
                                'description' => '工作空间状态',
                                'type' => 'string',
                                'example' => 'Active',
                            ],
                            'Location' => [
                                'title' => '地域ID',
                                'description' => '地域ID',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Description\\": \\"This is a test workspace\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"JobLifecycle\\": 30,\\n  \\"Labels\\": {\\n    \\"key\\": \\"test\\"\\n  },\\n  \\"Storage\\": \\"oss://my-bucket/my-path/\\",\\n  \\"BucketName\\": \\"my-bucket\\",\\n  \\"Role\\": \\"TestRole\\",\\n  \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n  \\"LastModifiedTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"Status\\": \\"Active\\",\\n  \\"Location\\": \\"cn-beijing\\"\\n}","errorExample":""},{"type":"xml","example":"<GetWorkspaceResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Description>This is a test workspace</Description>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <JobLifecycle>30</JobLifecycle>\\n    <Labels>\\n        <key>test</key>\\n    </Labels>\\n    <OssRoot>oss://my-bucket/my-path/</OssRoot>\\n    <BucketName>my-bucket</BucketName>\\n    <Role>TestRole</Role>\\n    <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n    <LastModifiedTime>2021-06-16T15:09:14.378297+08:00</LastModifiedTime>\\n    <Workspace>TestWorkspace</Workspace>\\n    <Status>Active</Status>\\n    <RegionId>cn-beijing</RegionId>\\n</GetWorkspaceResponse>","errorExample":""}]',
            'title' => '查询工作空间详情',
        ],
        'CreateApp' => [
            'summary' => '工作空间中创建应用。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestApp',
                    ],
                ],
                [
                    'name' => 'Definition',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用定义',
                        'description' => '应用定义',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'import "./task/echo.wdl" as echo workflow wf_echo {   call echo.echo }',
                    ],
                ],
                [
                    'name' => 'Path',
                    'in' => 'query',
                    'schema' => [
                        'title' => '主WDL路径',
                        'description' => '主WDL路径',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'main.wdl',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本标签，在所有版本间具有唯一性',
                        'description' => '应用版本标签，在所有版本间具有唯一性',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ProduceVersion',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述',
                        'description' => '应用描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test app',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述语言',
                        'description' => '应用描述语言',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WDL',
                    ],
                ],
                [
                    'name' => 'LanguageVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述语语言版本',
                        'description' => '应用描述语语言版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用类型',
                        'description' => '应用类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'App',
                    ],
                ],
                [
                    'name' => 'Documentation',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '应用使用文档',
                        'description' => '应用使用文档',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Example documentation content',
                    ],
                ],
                [
                    'name' => 'RevisionComment',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用当前版本说明',
                        'description' => '应用当前版本说明',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Example revision comment',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用标签',
                        'description' => '应用标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '幂等Token',
                        'description' => '幂等Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
                [
                    'name' => 'Dependencies',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '依赖应用',
                        'description' => '依赖应用',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'title' => '依赖路径',
                                    'description' => '依赖路径',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => './task/echo.wdl',
                                ],
                                'Content' => [
                                    'title' => '依赖内容',
                                    'description' => '依赖内容',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'task echo {   String txt_out = "default_txt_out"   String dd_out = "default_dd_out"    command {     echo Hello > ${txt_out}     /bin/bash -c "dd if=/dev/zero of=${dd_out} bs=1M count=15"     echo "This is a test std out."   }    runtime {     cpu: "2"     memory: "4G"     autoReleaseJob: false     reserveOnFail: true     userData: "key1 value1"     disks: "local-disk 40 cloud_ssd, /home/mount/ 40 cloud_efficiency"     tag: "TestTag"   }    output {     File outTxtFile = "${txt_out}"     File outDdFile = "${dd_out}"   } }',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
                [
                    'name' => 'Configs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '参考输入',
                        'description' => '参考输入',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Path' => [
                                    'description' => '配置路径',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => './config/example.json',
                                ],
                                'Content' => [
                                    'description' => '配置内容',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{     "wgs.apply_bqsr.cpu": 4,     "wgs.apply_bqsr.disks": "local-disk 250 cloud_ssd",     "wgs.apply_bqsr.gatk_Launcher": "/usr/local/bin/gatk-4.1.4.1/gatk",     "wgs.apply_bqsr.java_opts": "\'-XX:GCTimeLimit=50 -XX:GCHeapFreeLimit=10 -Xms3000m -Djava.io.tmpdir=/mnt\'",     "wgs.apply_bqsr.memory": "8G"}',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '创建应用返回结果',
                        'description' => '创建应用返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'AppName' => [
                                'title' => '应用名称',
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'TestApp',
                            ],
                            'HostId' => [
                                'title' => '主机 ID',
                                'description' => '主机 ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Revision' => [
                                'title' => '应用版本号',
                                'description' => '应用版本号',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RevisionTag' => [
                                'title' => '应用版本唯一标签',
                                'description' => '应用版本唯一标签',
                                'type' => 'string',
                                'example' => 'ProduceVersion',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"AppName\\": \\"TestApp\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Revision\\": \\"1\\",\\n  \\"RevisionTag\\": \\"ProduceVersion\\"\\n}","type":"json"}]',
            'title' => '创建应用',
        ],
        'TagApp' => [
            'summary' => '对应用的版本进行打标。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestApp',
                    ],
                ],
                [
                    'name' => 'AppRevision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用版本',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本唯一标签',
                        'description' => '应用版本唯一标签',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ProduceVersion',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'AppName' => [
                                'title' => '应用名称',
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'TestApp',
                            ],
                            'AppRevision' => [
                                'title' => '应用版本',
                                'description' => '应用版本',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RevisionTag' => [
                                'title' => '应用版本唯一标签',
                                'description' => '应用版本唯一标签',
                                'type' => 'string',
                                'example' => 'ProduceVersion',
                            ],
                            'FormerRevision' => [
                                'title' => '此前拥有该标签的应用版本',
                                'description' => '此前拥有该标签的应用版本',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'FormerTag' => [
                                'title' => '该应用版本此前的唯一标签',
                                'description' => '该应用版本此前的唯一标签',
                                'type' => 'string',
                                'example' => 'TestTag',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"AppName\\": \\"TestApp\\",\\n  \\"AppRevision\\": \\"1\\",\\n  \\"RevisionTag\\": \\"ProduceVersion\\",\\n  \\"FormerRevision\\": \\"0\\",\\n  \\"FormerTag\\": \\"TestTag\\"\\n}","type":"json"}]',
            'title' => '应用版本打标',
        ],
        'ImportApp' => [
            'summary' => '安装平台公共应用到用户工作空间中使用。',
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
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'title' => '来源',
                        'description' => '来源',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'easygene:opengene/fastp',
                    ],
                ],
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安装后应用名',
                        'description' => '安装后应用名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'fastp',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '创建应用返回结果',
                        'description' => '创建应用返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机 ID',
                                'description' => '主机 ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'AppName' => [
                                'title' => '安装后应用名',
                                'description' => '安装后应用名',
                                'type' => 'string',
                                'example' => 'InstalledApp',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'RegionId' => [
                                'title' => '区域名',
                                'description' => '区域名',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"AppName\\": \\"InstalledApp\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"RegionId\\": \\"cn-beijing\\"\\n}","type":"json"}]',
            'title' => '导入应用',
        ],
        'DeleteApp' => [
            'summary' => '删除不需要的应用。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestApp',
                    ],
                ],
                [
                    'name' => 'Revision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteAppResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteAppResponse>","errorExample":""}]',
            'title' => '删除应用',
        ],
        'GetApp' => [
            'summary' => '查询工作空间下特定应用详情。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestApp',
                    ],
                ],
                [
                    'name' => 'Revision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本号',
                        'description' => '应用版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本唯一标签',
                        'description' => '应用版本唯一标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestTag',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '应用详情',
                        'description' => '应用详情',
                        'type' => 'object',
                        'properties' => [
                            'WorkflowName' => [
                                'title' => '工作流名称',
                                'description' => '工作流名称',
                                'type' => 'string',
                                'example' => 'MyTestWorkflow',
                            ],
                            'AppName' => [
                                'title' => '应用名称',
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'MyTestApp',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2021-06-16T15:09:14.378297+08:00',
                            ],
                            'Definition' => [
                                'title' => '应用定义',
                                'description' => '应用定义',
                                'type' => 'string',
                                'example' => 'WDL content',
                            ],
                            'Description' => [
                                'title' => '应用简要描述',
                                'description' => '应用简要描述',
                                'type' => 'string',
                                'example' => 'This is a test app',
                            ],
                            'Documentation' => [
                                'title' => '应用详细文档',
                                'description' => '应用详细文档',
                                'type' => 'string',
                                'example' => 'example documentation content',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'Inputs' => [
                                'title' => '应用输入',
                                'description' => '应用输入',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskName' => [
                                            'title' => '任务名称',
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'TestTaskName',
                                        ],
                                        'VariableName' => [
                                            'title' => '变量名称',
                                            'description' => '变量名称',
                                            'type' => 'string',
                                            'example' => 'TestVariableName',
                                        ],
                                        'VariableType' => [
                                            'title' => '变量类型',
                                            'description' => '变量类型',
                                            'type' => 'string',
                                            'example' => 'TestVariableType',
                                        ],
                                        'VariableValue' => [
                                            'title' => '变量值',
                                            'description' => '变量值',
                                            'type' => 'string',
                                            'example' => 'TestVariableValue',
                                        ],
                                        'Required' => [
                                            'title' => '是否必须',
                                            'description' => '是否必须',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Help' => [
                                            'title' => '帮助',
                                            'description' => '帮助',
                                            'type' => 'string',
                                            'example' => 'help information',
                                        ],
                                        'StepOrder' => [
                                            'title' => '步骤顺序',
                                            'description' => '步骤顺序',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'Labels' => [
                                'title' => '应用标签',
                                'description' => '应用标签',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'test',
                                    'description' => '标签',
                                ],
                            ],
                            'Language' => [
                                'title' => '应用描述语言',
                                'description' => '应用描述语言',
                                'type' => 'string',
                                'example' => 'WDL',
                            ],
                            'LanguageVersion' => [
                                'title' => '应用描述语言版本',
                                'description' => '应用描述语言版本',
                                'type' => 'string',
                                'example' => '1.0',
                            ],
                            'LastModifiedTime' => [
                                'title' => '应用最后修改时间',
                                'description' => '应用最后修改时间',
                                'type' => 'string',
                                'example' => '2021-06-16T15:09:14.378297+08:00',
                            ],
                            'Outputs' => [
                                'title' => '应用的输出参数',
                                'description' => '应用的输出参数',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskName' => [
                                            'title' => '任务名称',
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'TestTaskName',
                                        ],
                                        'VariableName' => [
                                            'title' => '参数名称',
                                            'description' => '参数名称',
                                            'type' => 'string',
                                            'example' => 'TestVariableName',
                                        ],
                                        'VariableType' => [
                                            'title' => '参数类型',
                                            'description' => '参数类型',
                                            'type' => 'string',
                                            'example' => 'Int',
                                        ],
                                        'VariableValue' => [
                                            'title' => '参数值',
                                            'description' => '参数值',
                                            'type' => 'string',
                                            'example' => 'ExampleValue',
                                        ],
                                        'Required' => [
                                            'title' => '是否必须',
                                            'description' => '是否必须',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Help' => [
                                            'title' => '帮助信息',
                                            'description' => '帮助信息',
                                            'type' => 'string',
                                            'example' => 'Example help information',
                                        ],
                                        'StepOrder' => [
                                            'title' => '步骤编号',
                                            'description' => '步骤编号',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Revision' => [
                                'title' => '应用版本号',
                                'description' => '应用版本号',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'RevisionTag' => [
                                'title' => '应用版本唯一标签',
                                'description' => '应用版本唯一标签',
                                'type' => 'string',
                                'example' => 'TestTag',
                            ],
                            'RevisionComment' => [
                                'title' => '应用当前版本修改',
                                'description' => '应用当前版本修改',
                                'type' => 'string',
                                'example' => 'Example revision comment',
                            ],
                            'Revisions' => [
                                'title' => '应用的所有版本号',
                                'description' => '应用的所有版本号',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'Revision' => [
                                            'title' => '版本号',
                                            'description' => '版本号',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'RevisionComment' => [
                                            'title' => '应用当前版本修改',
                                            'description' => '应用当前版本修改',
                                            'type' => 'string',
                                            'example' => 'Example revision comment',
                                        ],
                                        'RevisionTag' => [
                                            'title' => '应用版本唯一标签',
                                            'description' => '应用版本唯一标签',
                                            'type' => 'string',
                                            'example' => 'ProduceVersion',
                                        ],
                                    ],
                                ],
                            ],
                            'Scope' => [
                                'title' => '应用可见范围',
                                'description' => '应用可见范围',
                                'type' => 'string',
                                'example' => 'Public',
                            ],
                            'URL' => [
                                'title' => '应用URL',
                                'description' => '应用URL',
                                'type' => 'string',
                                'example' => 'Example url',
                            ],
                            'Workspace' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'Source' => [
                                'title' => '应用来源',
                                'description' => '应用来源',
                                'type' => 'string',
                                'example' => 'EasyGene',
                            ],
                            'AppType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'App',
                            ],
                            'Dependencies' => [
                                'title' => '依赖应用',
                                'description' => '依赖应用',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Path' => [
                                            'title' => '依赖路径',
                                            'description' => '依赖路径',
                                            'type' => 'string',
                                            'example' => './task/echo.wdl',
                                        ],
                                        'Content' => [
                                            'title' => 'wdl内容',
                                            'description' => 'wdl内容',
                                            'type' => 'string',
                                            'example' => 'task echo {   String txt_out = "default_txt_out"   String dd_out = "default_dd_out"    command {     echo Hello > ${txt_out}     /bin/bash -c "dd if=/dev/zero of=${dd_out} bs=1M count=15"     echo "This is a test std out."   }    runtime {     cpu: "2"     memory: "4G"     autoReleaseJob: false     reserveOnFail: true     userData: "key1 value1"     disks: "local-disk 40 cloud_ssd, /home/mount/ 40 cloud_efficiency"     tag: "TestTag"   }    output {     File outTxtFile = "${txt_out}"     File outDdFile = "${dd_out}"   } }',
                                        ],
                                    ],
                                ],
                            ],
                            'Configs' => [
                                'title' => '参考输入',
                                'description' => '参考输入',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Path' => [
                                            'description' => '参数路径',
                                            'type' => 'string',
                                            'example' => './config/example.json',
                                        ],
                                        'Content' => [
                                            'description' => '参数内容',
                                            'type' => 'string',
                                            'example' => '{     "wgs.apply_bqsr.cpu": 4,     "wgs.apply_bqsr.disks": "local-disk 250 cloud_ssd",     "wgs.apply_bqsr.gatk_Launcher": "/usr/local/bin/gatk-4.1.4.1/gatk",     "wgs.apply_bqsr.java_opts": "\'-XX:GCTimeLimit=50 -XX:GCHeapFreeLimit=10 -Xms3000m -Djava.io.tmpdir=/mnt\'",     "wgs.apply_bqsr.memory": "8G"}',
                                        ],
                                    ],
                                ],
                            ],
                            'Path' => [
                                'title' => '主WDL路径',
                                'description' => '主WDL路径',
                                'type' => 'string',
                                'example' => 'main.wdl',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"WorkflowName\\": \\"MyTestWorkflow\\",\\n  \\"AppName\\": \\"MyTestApp\\",\\n  \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n  \\"Definition\\": \\"WDL content\\",\\n  \\"Description\\": \\"This is a test app\\",\\n  \\"Documentation\\": \\"example documentation content\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"Inputs\\": [\\n    {\\n      \\"TaskName\\": \\"TestTaskName\\",\\n      \\"VariableName\\": \\"TestVariableName\\",\\n      \\"VariableType\\": \\"TestVariableType\\",\\n      \\"VariableValue\\": \\"TestVariableValue\\",\\n      \\"Required\\": true,\\n      \\"Help\\": \\"help information\\",\\n      \\"StepOrder\\": 1\\n    }\\n  ],\\n  \\"Labels\\": {\\n    \\"key\\": \\"test\\"\\n  },\\n  \\"Language\\": \\"WDL\\",\\n  \\"LanguageVersion\\": \\"1.0\\",\\n  \\"LastModifiedTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n  \\"Outputs\\": [\\n    {\\n      \\"TaskName\\": \\"TestTaskName\\",\\n      \\"VariableName\\": \\"TestVariableName\\",\\n      \\"VariableType\\": \\"Int\\",\\n      \\"VariableValue\\": \\"ExampleValue\\",\\n      \\"Required\\": true,\\n      \\"Help\\": \\"Example help information\\",\\n      \\"StepOrder\\": 1\\n    }\\n  ],\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Revision\\": \\"1\\",\\n  \\"RevisionTag\\": \\"TestTag\\",\\n  \\"RevisionComment\\": \\"Example revision comment\\",\\n  \\"Revisions\\": [\\n    {\\n      \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"Revision\\": \\"1\\",\\n      \\"RevisionComment\\": \\"Example revision comment\\",\\n      \\"RevisionTag\\": \\"ProduceVersion\\"\\n    }\\n  ],\\n  \\"Scope\\": \\"Public\\",\\n  \\"URL\\": \\"Example url\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"Source\\": \\"EasyGene\\",\\n  \\"AppType\\": \\"App\\",\\n  \\"Dependencies\\": [\\n    {\\n      \\"Path\\": \\"./task/echo.wdl\\",\\n      \\"Content\\": \\"task echo {   String txt_out = \\\\\\"default_txt_out\\\\\\"   String dd_out = \\\\\\"default_dd_out\\\\\\"    command {     echo Hello > ${txt_out}     /bin/bash -c \\\\\\"dd if=/dev/zero of=${dd_out} bs=1M count=15\\\\\\"     echo \\\\\\"This is a test std out.\\\\\\"   }    runtime {     cpu: \\\\\\"2\\\\\\"     memory: \\\\\\"4G\\\\\\"     autoReleaseJob: false     reserveOnFail: true     userData: \\\\\\"key1 value1\\\\\\"     disks: \\\\\\"local-disk 40 cloud_ssd, /home/mount/ 40 cloud_efficiency\\\\\\"     tag: \\\\\\"TestTag\\\\\\"   }    output {     File outTxtFile = \\\\\\"${txt_out}\\\\\\"     File outDdFile = \\\\\\"${dd_out}\\\\\\"   } }\\"\\n    }\\n  ],\\n  \\"Configs\\": [\\n    {\\n      \\"Path\\": \\"./config/example.json\\",\\n      \\"Content\\": \\"{     \\\\\\"wgs.apply_bqsr.cpu\\\\\\": 4,     \\\\\\"wgs.apply_bqsr.disks\\\\\\": \\\\\\"local-disk 250 cloud_ssd\\\\\\",     \\\\\\"wgs.apply_bqsr.gatk_Launcher\\\\\\": \\\\\\"/usr/local/bin/gatk-4.1.4.1/gatk\\\\\\",     \\\\\\"wgs.apply_bqsr.java_opts\\\\\\": \\\\\\"\'-XX:GCTimeLimit=50 -XX:GCHeapFreeLimit=10 -Xms3000m -Djava.io.tmpdir=/mnt\'\\\\\\",     \\\\\\"wgs.apply_bqsr.memory\\\\\\": \\\\\\"8G\\\\\\"}\\"\\n    }\\n  ],\\n  \\"Path\\": \\"main.wdl\\"\\n}","errorExample":""},{"type":"xml","example":"<GetAppResponse>\\n    <WorkflowName>MyTestWorkflow</WorkflowName>\\n    <AppName>MyTestApp</AppName>\\n    <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n    <Definition>WDL content</Definition>\\n    <Description>This is a test app</Description>\\n    <Documentation>example documentation content</Documentation>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Inputs>\\n        <TaskName>TestTaskName</TaskName>\\n        <VariableName>TestVariableName</VariableName>\\n        <VariableType>TestVariableType</VariableType>\\n        <VariableValue>TestVariableValue</VariableValue>\\n        <Required>true</Required>\\n        <Help>help information</Help>\\n        <StepOrder>1</StepOrder>\\n    </Inputs>\\n    <Labels>\\n        <key>test</key>\\n    </Labels>\\n    <Language>WDL</Language>\\n    <LanguageVersion>1.0</LanguageVersion>\\n    <LastModifiedTime>2021-06-16T15:09:14.378297+08:00</LastModifiedTime>\\n    <Outputs>\\n        <TaskName>TestTaskName</TaskName>\\n        <VariableName>TestVariableName</VariableName>\\n        <VariableType>Int</VariableType>\\n        <VariableValue>ExampleValue</VariableValue>\\n        <Required>true</Required>\\n        <Help>Example help information</Help>\\n        <StepOrder>1</StepOrder>\\n    </Outputs>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Revision>1</Revision>\\n    <RevisionComment>Example revision comment</RevisionComment>\\n    <Revisions>\\n        <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n        <Revision>1</Revision>\\n        <RevisionComment>Example revision comment</RevisionComment>\\n    </Revisions>\\n    <Scope>Public</Scope>\\n    <URL>Example url</URL>\\n    <Workspace>TestWorkspace</Workspace>\\n    <Source>EasyGene</Source>\\n    <Namespace>TestNamespace</Namespace>\\n    <AppOrigName>TestAppOrigName</AppOrigName>\\n    <AppType>App</AppType>\\n    <Dependencies>\\n        <Path>./task/echo.wdl</Path>\\n        <Content>task echo {   String txt_out = \\"default_txt_out\\"   String dd_out = \\"default_dd_out\\"    command {     echo Hello &gt; ${txt_out}     /bin/bash -c \\"dd if=/dev/zero of=${dd_out} bs=1M count=15\\"     echo \\"This is a test std out.\\"   }    runtime {     cpu: \\"2\\"     memory: \\"4G\\"     autoReleaseJob: false     reserveOnFail: true     userData: \\"key1 value1\\"     disks: \\"local-disk 40 cloud_ssd, /home/mount/ 40 cloud_efficiency\\"     tag: \\"TestTag\\"   }    output {     File outTxtFile = \\"${txt_out}\\"     File outDdFile = \\"${dd_out}\\"   } }</Content>\\n    </Dependencies>\\n    <Configs>\\n        <Path>./config/example.json</Path>\\n        <Content>{     \\"wgs.apply_bqsr.cpu\\": 4,     \\"wgs.apply_bqsr.disks\\": \\"local-disk 250 cloud_ssd\\",     \\"wgs.apply_bqsr.gatk_Launcher\\": \\"/usr/local/bin/gatk-4.1.4.1/gatk\\",     \\"wgs.apply_bqsr.java_opts\\": \\"\'-XX:GCTimeLimit=50 -XX:GCHeapFreeLimit=10 -Xms3000m -Djava.io.tmpdir=/mnt\'\\",     \\"wgs.apply_bqsr.memory\\": \\"8G\\"}</Content>\\n    </Configs>\\n    <Path>main.wdl</Path>\\n</GetAppResponse>","errorExample":""}]',
            'title' => '查询应用详情',
        ],
        'ListApps' => [
            'summary' => '获取工作空间下的应用列表。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Next Token',
                        'description' => 'Next Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回结果数',
                        'description' => '最大返回结果数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '5',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据',
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否逆序',
                        'description' => '是否逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'LabelSelector',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Label 选择器',
                        'description' => 'Label 选择器',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'env=test',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用范围',
                        'description' => '应用范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Public',
                    ],
                ],
                [
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用描述语言',
                        'description' => '应用描述语言',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'WDL',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用类型',
                        'description' => '应用类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'App',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按照名字匹配',
                        'description' => '按照名字匹配',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestName',
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
                            'Apps' => [
                                'title' => '应用数组',
                                'description' => '应用数组',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AppName' => [
                                            'title' => '应用名称',
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'TestApp',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'Description' => [
                                            'title' => '应用描述',
                                            'description' => '应用描述',
                                            'type' => 'string',
                                            'example' => 'This is a test app',
                                        ],
                                        'AppType' => [
                                            'title' => '应用类型',
                                            'description' => '应用类型',
                                            'type' => 'string',
                                            'example' => 'App',
                                        ],
                                        'Language' => [
                                            'title' => '应用描述语言',
                                            'description' => '应用描述语言',
                                            'type' => 'string',
                                            'example' => 'WDL',
                                        ],
                                        'Scope' => [
                                            'title' => '应用可见范围',
                                            'description' => '应用可见范围',
                                            'type' => 'string',
                                            'example' => 'Public',
                                        ],
                                        'Workspace' => [
                                            'title' => '应用所在工作空间',
                                            'description' => '应用所在工作空间',
                                            'type' => 'string',
                                            'example' => 'TestWorkspace',
                                        ],
                                        'Source' => [
                                            'title' => '应用来源',
                                            'description' => '应用来源',
                                            'type' => 'string',
                                            'example' => 'EasyGene',
                                        ],
                                        'AppDefaultVersion' => [
                                            'title' => '默认版本',
                                            'description' => '默认版本',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Labels' => [
                                            'title' => '标签',
                                            'description' => '标签',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => 'test',
                                                'description' => '标签',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大返回个数',
                                'description' => '最大返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'NextToken' => [
                                'title' => 'Next Token',
                                'description' => 'Next Token',
                                'type' => 'string',
                                'example' => 'TestToken',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'TotalCount' => [
                                'title' => '返回个数',
                                'description' => '返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Apps\\": [\\n    {\\n      \\"AppName\\": \\"TestApp\\",\\n      \\"CreateTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n      \\"Description\\": \\"This is a test app\\",\\n      \\"AppType\\": \\"App\\",\\n      \\"Language\\": \\"WDL\\",\\n      \\"Scope\\": \\"Public\\",\\n      \\"Workspace\\": \\"TestWorkspace\\",\\n      \\"Source\\": \\"EasyGene\\",\\n      \\"AppDefaultVersion\\": \\"v1\\",\\n      \\"Labels\\": {\\n        \\"key\\": \\"test\\"\\n      }\\n    }\\n  ],\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"MaxResults\\": 5,\\n  \\"NextToken\\": \\"TestToken\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"TotalCount\\": 5\\n}","errorExample":""},{"type":"xml","example":"<ListAppsResponse>\\n    <Apps>\\n        <AppName>TestApp</AppName>\\n        <CreateTime>2021-06-10T13:30:20.414557061Z</CreateTime>\\n        <Description>This is a test app</Description>\\n        <AppType>App</AppType>\\n        <Language>WDL</Language>\\n        <Scope>Public</Scope>\\n        <Workspace>TestWorkspace</Workspace>\\n        <Source>EasyGene</Source>\\n        <Namespace>TestNamespace</Namespace>\\n        <AppOrigName>TestOrigName</AppOrigName>\\n        <AppDefaultVersion>v1</AppDefaultVersion>\\n        <Labels>\\n            <key>test</key>\\n        </Labels>\\n    </Apps>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <MaxResults>5</MaxResults>\\n    <NextToken>TestToken</NextToken>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <TotalCount>5</TotalCount>\\n</ListAppsResponse>","errorExample":""}]',
            'title' => '获取应用列表',
        ],
        'CreateRun' => [
            'summary' => '工作空间中创建运行任务。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名字',
                        'description' => '工作空间名字',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'RunName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务名称',
                        'description' => '任务名称',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'wgs_sentieon_hc_with_qc_NGPTS1900029301',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Sentieon',
                    ],
                ],
                [
                    'name' => 'AppRevision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本号',
                        'description' => '应用版本号',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '16',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本唯一标签',
                        'description' => '应用版本唯一标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ProduceVersion',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务描述',
                        'description' => '任务描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test run',
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务标签',
                        'description' => '任务标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"env": "test"}',
                    ],
                ],
                [
                    'name' => 'ExecuteOptions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '任务配置',
                        'description' => '任务配置',
                        'type' => 'object',
                        'properties' => [
                            'CallCaching' => [
                                'title' => '使用缓存',
                                'description' => '是否开启CallCaching',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'True',
                            ],
                            'DeleteIntermediateResults' => [
                                'title' => '删除中间结果',
                                'description' => '是否删除中间文件',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'True',
                            ],
                            'FailureMode' => [
                                'title' => '失败模式',
                                'description' => '失败模式',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'NoNewCalls',
                            ],
                            'UseRelativeOutputPaths' => [
                                'title' => '使用相对输出路径',
                                'description' => '使用相对输出路径',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'True',
                            ],
                        ],
                        'required' => false,
                        'example' => '{ 	"CallCaching": true,     "FailureMode": "NoNewCalls" }',
                    ],
                ],
                [
                    'name' => 'ExecuteDirectory',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务执行目录',
                        'description' => '任务执行目录',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => 'oss://my-bucket/exec/',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可选参数，用户自定义的RAM Role，在任务运行过程中，通过扮演这个Role访问用户的资源，如OSS，ACR等。如果不指定，使用默认的aliyuneasygenedefaultrole',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestRole',
                    ],
                ],
                [
                    'name' => 'OutputFolder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务输出拷贝目录',
                        'description' => '任务输出拷贝目录',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://my-bucket/output/',
                    ],
                ],
                [
                    'name' => 'DefaultRuntime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '默认运行时',
                        'description' => '默认运行时',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Inputs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务输入',
                        'description' => '任务输入',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{         "workflow1.task1.param1": "helloooo.txt",         "workflow1.task1.param2": "abc",         "workflow1.task2.param1": "new_helloooo.txt",         "workflow1.task2.param2": "def"     }',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务幂等token',
                        'description' => '任务幂等token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'RunId' => [
                                'title' => '任务ID',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"RunId\\": \\"run-13BeYuxc0fxO24uA75UppTiMRoQ\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateRunResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Workspace>test-workspace</Workspace>\\n    <RunId>run-13BeYuxc0fxO24uA75UppTiMRoQ</RunId>\\n</CreateRunResponse>","errorExample":""}]',
            'title' => '创建运行任务',
        ],
        'GetRun' => [
            'summary' => '查询工作空间下特定运行任务详情。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名字',
                        'description' => '工作空间名字',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default-workspace',
                    ],
                ],
                [
                    'name' => 'RunId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'run-12kDbbqp5O9dfsH0sEdQeRclGQb',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'Workspace' => [
                                'title' => '工作空间名字',
                                'description' => '工作空间名字',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'RunId' => [
                                'title' => '任务ID',
                                'description' => '任务ID',
                                'type' => 'string',
                                'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                            ],
                            'RunName' => [
                                'title' => '任务名称',
                                'description' => '任务名称',
                                'type' => 'string',
                                'example' => 'test-run',
                            ],
                            'SubmissionId' => [
                                'title' => '提交ID',
                                'description' => '提交ID',
                                'type' => 'string',
                                'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                            ],
                            'Source' => [
                                'title' => '应用来源',
                                'description' => '应用来源',
                                'type' => 'string',
                                'example' => 'EasyGene',
                            ],
                            'AppName' => [
                                'title' => '应用名称',
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'Sentieon',
                            ],
                            'AppRevision' => [
                                'title' => '应用版本',
                                'description' => '应用版本',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                            'EntityName' => [
                                'title' => '实体对象名称',
                                'description' => '实体对象名称',
                                'type' => 'string',
                                'example' => 's1',
                            ],
                            'User' => [
                                'title' => '用户ID',
                                'description' => '用户ID',
                                'type' => 'string',
                                'example' => '13579222',
                            ],
                            'Status' => [
                                'title' => '任务状态',
                                'description' => '任务状态',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'CreateTime' => [
                                'title' => '提交时间',
                                'description' => '提交时间',
                                'type' => 'string',
                                'example' => '2021-06-10T13:30:20.414557061Z',
                            ],
                            'StartTime' => [
                                'title' => '开始时间',
                                'description' => '开始时间',
                                'type' => 'string',
                                'example' => '2021-06-10T13:30:24.414557061Z',
                            ],
                            'EndTime' => [
                                'title' => '结束时间',
                                'description' => '结束时间',
                                'type' => 'string',
                                'example' => '2021-06-10T13:36:20.405878292Z',
                            ],
                            'ExecuteOptions' => [
                                'title' => '任务配置',
                                'description' => '任务配置',
                                'type' => 'object',
                                'properties' => [
                                    'CallCaching' => [
                                        'title' => '是否开启CallCaching',
                                        'description' => '是否开启CallCaching',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'DeleteIntermediateResults' => [
                                        'title' => '是否删除中间文件',
                                        'description' => '是否删除中间文件',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'FailureMode' => [
                                        'title' => '失败模式',
                                        'description' => '失败模式',
                                        'type' => 'string',
                                        'example' => 'NoNewCalls',
                                    ],
                                    'UseRelativeOutputPaths' => [
                                        'title' => '相对输出路径',
                                        'description' => '相对输出路径',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'Inputs' => [
                                'title' => '任务输入',
                                'description' => '任务输入',
                                'type' => 'string',
                                'example' => '{     "workflow1.task1.param1": "helloooo.txt",     "workflow1.task1.param2": "abc",     "workflow1.task2.param1": "new_helloooo.txt",     "workflow1.task2.param2": "def" }',
                            ],
                            'Outputs' => [
                                'title' => '任务输出',
                                'description' => '任务输出',
                                'type' => 'string',
                                'example' => '{         "workflow1.bam": "oss://my-bucket/test.bam",         "workflow1.vcf": "oss://my-bucket/test.vcf"     }',
                            ],
                            'Labels' => [
                                'title' => '任务标签',
                                'description' => '任务标签',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'test',
                                    'description' => '标签',
                                ],
                            ],
                            'OutputFolder' => [
                                'title' => '输出拷贝目录',
                                'description' => '输出拷贝目录',
                                'type' => 'string',
                                'example' => 'oss://my-bucket/output/',
                            ],
                            'ExecuteDirectory' => [
                                'title' => '任务执行目录',
                                'description' => '任务执行目录',
                                'type' => 'string',
                                'example' => 'oss://my-bucket/exec/',
                            ],
                            'DefaultRuntime' => [
                                'title' => '默认runtime值',
                                'description' => '默认runtime值',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Description' => [
                                'title' => '任务描述',
                                'description' => '任务描述',
                                'type' => 'string',
                                'example' => 'test run',
                            ],
                            'Timing' => [
                                'title' => '时序信息',
                                'description' => '时序信息',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Calls' => [
                                'title' => '作业信息',
                                'description' => '作业信息',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'Failures' => [
                                'title' => '错误信息',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '{}',
                            ],
                            'BillingInstanceIds' => [
                                'title' => '任务task账单ID数组',
                                'type' => 'array',
                                'items' => [
                                    'title' => '任务task账单ID',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"RunId\\": \\"run-13BeYuxc0fxO24uA75UppTiMRoQ\\",\\n  \\"RunName\\": \\"test-run\\",\\n  \\"SubmissionId\\": \\"sub-13BeXWnGvrOl3MC124tazcJVKaV\\",\\n  \\"Source\\": \\"EasyGene\\",\\n  \\"AppName\\": \\"Sentieon\\",\\n  \\"AppRevision\\": \\"1\\",\\n  \\"EntityType\\": \\"sample\\",\\n  \\"EntityName\\": \\"s1\\",\\n  \\"User\\": \\"13579222\\",\\n  \\"Status\\": \\"Running\\",\\n  \\"CreateTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n  \\"StartTime\\": \\"2021-06-10T13:30:24.414557061Z\\",\\n  \\"EndTime\\": \\"2021-06-10T13:36:20.405878292Z\\",\\n  \\"ExecuteOptions\\": {\\n    \\"CallCaching\\": false,\\n    \\"DeleteIntermediateResults\\": false,\\n    \\"FailureMode\\": \\"NoNewCalls\\",\\n    \\"UseRelativeOutputPaths\\": false\\n  },\\n  \\"Inputs\\": \\"{     \\\\\\"workflow1.task1.param1\\\\\\": \\\\\\"helloooo.txt\\\\\\",     \\\\\\"workflow1.task1.param2\\\\\\": \\\\\\"abc\\\\\\",     \\\\\\"workflow1.task2.param1\\\\\\": \\\\\\"new_helloooo.txt\\\\\\",     \\\\\\"workflow1.task2.param2\\\\\\": \\\\\\"def\\\\\\" }\\",\\n  \\"Outputs\\": \\"{         \\\\\\"workflow1.bam\\\\\\": \\\\\\"oss://my-bucket/test.bam\\\\\\",         \\\\\\"workflow1.vcf\\\\\\": \\\\\\"oss://my-bucket/test.vcf\\\\\\"     }\\",\\n  \\"Labels\\": {\\n    \\"key\\": \\"test\\"\\n  },\\n  \\"OutputFolder\\": \\"oss://my-bucket/output/\\",\\n  \\"ExecuteDirectory\\": \\"oss://my-bucket/exec/\\",\\n  \\"DefaultRuntime\\": \\"{}\\",\\n  \\"Description\\": \\"test run\\",\\n  \\"Timing\\": \\"{}\\",\\n  \\"Calls\\": \\"{}\\",\\n  \\"Failures\\": \\"{}\\"\\n}","errorExample":""},{"type":"xml","example":"<GetRunResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Workspace>test-workspace</Workspace>\\n    <RunId>run-13BeYuxc0fxO24uA75UppTiMRoQ</RunId>\\n    <Name>test-run</Name>\\n    <SubmissionId>sub-13BeXWnGvrOl3MC124tazcJVKaV</SubmissionId>\\n    <Source>EasyGene</Source>\\n    <Namespace>public</Namespace>\\n    <AppOrigName>Sentieon</AppOrigName>\\n    <AppName>Sentieon</AppName>\\n    <Revision>1</Revision>\\n    <EntityType>sample</EntityType>\\n    <EntityName>s1</EntityName>\\n    <User>13579222</User>\\n    <Status>Running</Status>\\n    <CreateTime>2021-06-10T13:30:20.414557061Z</CreateTime>\\n    <StartTime>2021-06-10T13:30:24.414557061Z</StartTime>\\n    <EndTime>2021-06-10T13:36:20.405878292Z</EndTime>\\n    <ExecuteOptions>\\n        <CallCaching>false</CallCaching>\\n        <DeleteIntermediateResults>false</DeleteIntermediateResults>\\n        <FailureMode>NoNewCalls</FailureMode>\\n    </ExecuteOptions>\\n    <Inputs>{     \\"workflow1.task1.param1\\": \\"helloooo.txt\\",     \\"workflow1.task1.param2\\": \\"abc\\",     \\"workflow1.task2.param1\\": \\"new_helloooo.txt\\",     \\"workflow1.task2.param2\\": \\"def\\" }</Inputs>\\n    <Outputs>{         \\"workflow1.bam\\": \\"oss://my-bucket/test.bam\\",         \\"workflow1.vcf\\": \\"oss://my-bucket/test.vcf\\"     }</Outputs>\\n    <OutputFolder>oss://my-bucket/output/</OutputFolder>\\n    <ExecuteDirectory>oss://my-bucket/exec/</ExecuteDirectory>\\n    <DefaultRuntime>{}</DefaultRuntime>\\n    <Description>test run</Description>\\n    <Timing>{}</Timing>\\n    <Calls>{}</Calls>\\n    <Failures>{}</Failures>\\n</GetRunResponse>","errorExample":""}]',
            'title' => 'GetRun',
        ],
        'DeleteRun' => [
            'summary' => '删除工作空间下特定运行任务记录。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'RunId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'StatusConflict',
                        'errorMessage' => 'The specified action %s is not supported in current status %s.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteRunResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteRunResponse>","errorExample":""}]',
            'title' => 'DeleteRun',
        ],
        'ListRuns' => [
            'summary' => '获取工作空间下运行任务列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态',
                        'description' => '状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                        'enum' => [
                            'Running',
                            'Submitted',
                            'Pending',
                            'Failed',
                            'Succeeded',
                            'Aborting',
                            'Aborted',
                        ],
                    ],
                ],
                [
                    'name' => 'SubmissionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '提交ID',
                        'description' => '提交ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '搜索ID',
                        'description' => '搜索ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                    ],
                ],
                [
                    'name' => 'LabelSelector',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签选择',
                        'description' => '标签选择',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'env=test',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MyApp',
                    ],
                ],
                [
                    'name' => 'AppRevision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用的版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4.1.4.1-v1.0',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体名称',
                        'description' => '实体元素名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'S001',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询起始位置',
                        'description' => '查询起始位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回个数',
                        'description' => '最大返回个数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据',
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否逆序',
                        'description' => '是否逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'GetTotal',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否返回所有任务条数',
                        'description' => '是否返回所有任务条数',
                        'type' => 'boolean',
                        'required' => false,
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大返回结果',
                                'description' => '最大返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'title' => '下次查询Token',
                                'description' => '下次查询Token',
                                'type' => 'string',
                                'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                            ],
                            'TotalCount' => [
                                'title' => '返回个数',
                                'description' => '返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Runs' => [
                                'title' => '任务列表',
                                'description' => '任务列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppName' => [
                                            'title' => '应用名称',
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'MyApp',
                                        ],
                                        'Source' => [
                                            'title' => '应用来源',
                                            'description' => '应用来源',
                                            'type' => 'string',
                                            'example' => 'EasyGene',
                                        ],
                                        'Labels' => [
                                            'title' => '任务标签',
                                            'description' => '任务标签',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'description' => '标签',
                                                'example' => 'test',
                                            ],
                                        ],
                                        'RunName' => [
                                            'title' => '任务名称',
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'test-run',
                                        ],
                                        'AppRevision' => [
                                            'title' => '应用版本号',
                                            'description' => '应用版本号',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'RunId' => [
                                            'title' => '任务ID',
                                            'description' => '任务ID',
                                            'type' => 'string',
                                            'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                                        ],
                                        'Status' => [
                                            'title' => '任务状态',
                                            'description' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'CreateTime' => [
                                            'title' => '提交时间',
                                            'description' => '提交时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'StartTime' => [
                                            'title' => '开始时间',
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:31:20.414557061Z',
                                        ],
                                        'EndTime' => [
                                            'title' => '结束时间',
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:38:20.414557061Z',
                                        ],
                                        'SubmissionId' => [
                                            'title' => '提交ID',
                                            'description' => '提交ID',
                                            'type' => 'string',
                                            'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                                        ],
                                        'EntityName' => [
                                            'title' => '实体名称',
                                            'description' => '实体名称',
                                            'type' => 'string',
                                            'example' => 's1',
                                        ],
                                        'EntityType' => [
                                            'title' => '实体对象ID',
                                            'description' => '实体对象ID',
                                            'type' => 'string',
                                            'example' => 'sample',
                                        ],
                                        'ExecuteDirectory' => [
                                            'title' => '运行目录',
                                            'description' => '运行目录',
                                            'type' => 'string',
                                            'example' => 'oss://my-bucket/my-execdir/',
                                        ],
                                        'ExecuteOptions' => [
                                            'description' => '执行选项',
                                            'type' => 'object',
                                            'properties' => [
                                                'CallCaching' => [
                                                    'title' => '是否开启CallCaching',
                                                    'description' => '是否开启CallCaching',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'DeleteIntermediateResults' => [
                                                    'title' => '是否删除中间文件',
                                                    'description' => '是否删除中间文件',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'FailureMode' => [
                                                    'title' => '失败模式',
                                                    'description' => '失败模式',
                                                    'type' => 'string',
                                                    'example' => 'NoNewCalls',
                                                ],
                                                'UseRelativeOutputPaths' => [
                                                    'title' => '使用相对路径',
                                                    'description' => '使用相对路径',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'Inputs' => [
                                            'title' => '输入参数',
                                            'description' => '输入参数',
                                            'type' => 'string',
                                            'example' => '{     "workflow1.task1.param1": "helloooo.txt",     "workflow1.task1.param2": "abc",     "workflow1.task2.param1": "new_helloooo.txt",     "workflow1.task2.param2": "def" }',
                                        ],
                                        'DefaultRuntime' => [
                                            'title' => '默认运行时',
                                            'description' => '默认运行时',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Workspace' => [
                                            'title' => '工作空间',
                                            'description' => '工作空间',
                                            'type' => 'string',
                                            'example' => 'test-workspace',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域',
                                            'description' => '区域',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"MaxResults\\": 10,\\n  \\"NextToken\\": \\"MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK\\",\\n  \\"TotalCount\\": 10,\\n  \\"Runs\\": [\\n    {\\n      \\"AppName\\": \\"MyApp\\",\\n      \\"Source\\": \\"EasyGene\\",\\n      \\"Labels\\": {\\n        \\"key\\": \\"test\\"\\n      },\\n      \\"RunName\\": \\"test-run\\",\\n      \\"AppRevision\\": \\"1\\",\\n      \\"RunId\\": \\"run-13BeYuxc0fxO24uA75UppTiMRoQ\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"CreateTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n      \\"StartTime\\": \\"2021-06-10T13:31:20.414557061Z\\",\\n      \\"EndTime\\": \\"2021-06-10T13:38:20.414557061Z\\",\\n      \\"SubmissionId\\": \\"sub-13BeXWnGvrOl3MC124tazcJVKaV\\",\\n      \\"EntityName\\": \\"s1\\",\\n      \\"EntityType\\": \\"sample\\",\\n      \\"ExecuteDirectory\\": \\"oss://my-bucket/my-execdir/\\",\\n      \\"ExecuteOptions\\": {\\n        \\"CallCaching\\": false,\\n        \\"DeleteIntermediateResults\\": false,\\n        \\"FailureMode\\": \\"NoNewCalls\\",\\n        \\"UseRelativeOutputPaths\\": false\\n      },\\n      \\"Inputs\\": \\"{     \\\\\\"workflow1.task1.param1\\\\\\": \\\\\\"helloooo.txt\\\\\\",     \\\\\\"workflow1.task1.param2\\\\\\": \\\\\\"abc\\\\\\",     \\\\\\"workflow1.task2.param1\\\\\\": \\\\\\"new_helloooo.txt\\\\\\",     \\\\\\"workflow1.task2.param2\\\\\\": \\\\\\"def\\\\\\" }\\",\\n      \\"DefaultRuntime\\": \\"{}\\",\\n      \\"Workspace\\": \\"test-workspace\\",\\n      \\"RegionId\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListRunsResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <MaxResults>10</MaxResults>\\n    <NextToken>MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK</NextToken>\\n    <TotalCount>10</TotalCount>\\n    <Runs>\\n        <AppName>MyApp</AppName>\\n        <Source>EasyGene</Source>\\n        <Namespace>Public</Namespace>\\n        <AppOrigName>PublicApp</AppOrigName>\\n        <Labels>\\n            <key>test</key>\\n        </Labels>\\n        <Name>test-run</Name>\\n        <Revision>1</Revision>\\n        <RunId>run-13BeYuxc0fxO24uA75UppTiMRoQ</RunId>\\n        <Status>Running</Status>\\n        <CreateTime>2021-06-10T13:30:20.414557061Z</CreateTime>\\n        <StartTime>2021-06-10T13:31:20.414557061Z</StartTime>\\n        <EndTime>2021-06-10T13:38:20.414557061Z</EndTime>\\n        <SubmissionId>sub-13BeXWnGvrOl3MC124tazcJVKaV</SubmissionId>\\n        <EntityName>s1</EntityName>\\n        <EntityType>sample</EntityType>\\n        <ExecuteDirectory>oss://my-bucket/my-execdir/</ExecuteDirectory>\\n        <ExecuteOptions>\\n            <CallCaching>false</CallCaching>\\n            <DeleteIntermediateResults>false</DeleteIntermediateResults>\\n            <FailureMode>NoNewCalls</FailureMode>\\n        </ExecuteOptions>\\n        <Inputs>{     \\"workflow1.task1.param1\\": \\"helloooo.txt\\",     \\"workflow1.task1.param2\\": \\"abc\\",     \\"workflow1.task2.param1\\": \\"new_helloooo.txt\\",     \\"workflow1.task2.param2\\": \\"def\\" }</Inputs>\\n        <DefaultRuntime>{}</DefaultRuntime>\\n        <Workspace>test-workspace</Workspace>\\n        <RegionId>cn-beijing</RegionId>\\n    </Runs>\\n</ListRunsResponse>","errorExample":""}]',
            'title' => '获取运行任务列表',
        ],
        'ListUserActiveRuns' => [
            'summary' => '最近任务列表',
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
            ],
            'parameters' => [
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '3',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'title' => '下次查询Token',
                                'type' => 'string',
                                'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                            ],
                            'TotalCount' => [
                                'title' => '返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Runs' => [
                                'title' => '任务列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'AppName' => [
                                            'title' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'MyApp',
                                        ],
                                        'Source' => [
                                            'title' => '应用来源',
                                            'type' => 'string',
                                            'example' => 'EasyGene',
                                        ],
                                        'Labels' => [
                                            'title' => '任务标签',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                        'RunName' => [
                                            'title' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'test-run',
                                        ],
                                        'AppRevision' => [
                                            'title' => '应用版本号',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'RunId' => [
                                            'title' => '任务ID',
                                            'type' => 'string',
                                            'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                                        ],
                                        'Status' => [
                                            'title' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'CreateTime' => [
                                            'title' => '提交时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'StartTime' => [
                                            'title' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'EndTime' => [
                                            'title' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'SubmissionId' => [
                                            'title' => '提交ID',
                                            'type' => 'string',
                                            'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                                        ],
                                        'EntityName' => [
                                            'title' => '实体名称',
                                            'type' => 'string',
                                            'example' => 's1',
                                        ],
                                        'EntityType' => [
                                            'title' => '实体对象ID',
                                            'type' => 'string',
                                            'example' => 'sample',
                                        ],
                                        'ExecuteDirectory' => [
                                            'title' => '运行目录',
                                            'type' => 'string',
                                        ],
                                        'ExecuteOptions' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CallCaching' => [
                                                    'title' => '是否开启CallCaching',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'UseRelativeOutputPaths' => [
                                                    'title' => '使用相对路径',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'FailureMode' => [
                                                    'title' => '失败模式',
                                                    'type' => 'string',
                                                    'example' => 'NoNewCalls',
                                                ],
                                                'DeleteIntermediateResults' => [
                                                    'title' => '是否删除中间文件',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                            ],
                                        ],
                                        'Inputs' => [
                                            'title' => '输入参数',
                                            'type' => 'string',
                                            'example' => '{ "workflow1.task1.param1": "helloooo.txt", "workflow1.task1.param2": "abc", "workflow1.task2.param1": "new_helloooo.txt", "workflow1.task2.param2": "def" }',
                                        ],
                                        'DefaultRuntime' => [
                                            'title' => '默认运行时',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Workspace' => [
                                            'title' => '工作空间',
                                            'type' => 'string',
                                            'example' => 'test-workspace',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidUser.AccessDenied',
                        'errorMessage' => 'The request was denied due to insufficient user permission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '',
        ],
        'AbortRun' => [
            'summary' => '终止工作空间下特定的非结束状态的运行任务。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'RunId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务ID',
                        'description' => '任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'run-13BeYuxc0fxO24uA75UppTiMRoQ',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'StatusConflict',
                        'errorMessage' => 'The specified action %s is not supported in current status %s.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<AbortRunResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</AbortRunResponse>","errorExample":""}]',
            'title' => '终止运行任务',
        ],
        'CreateEntity' => [
            'summary' => '工作空间中创建实体表格。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间，获取方式请参见[创建工作空间](https://help.aliyun.com/document_detail/601899.html?spm=a2c4g.601898.0.0.2df07010mNFomF)',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型，长度1-64个字符',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityItems',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '表格元素的数组，最大字符长度为512Kb',
                        'type' => 'array',
                        'items' => [
                            'description' => '表格元素',
                            'type' => 'object',
                            'properties' => [
                                'EntityName' => [
                                    'title' => '表格元素名称',
                                    'description' => '表格元素名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 's1',
                                ],
                                'EntityData' => [
                                    'description' => '表格元素的键值对',
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'description' => '键值对',
                                        'example' => 'key:value',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '幂等Token',
                        'description' => '幂等Token，最大字符长度为64',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'T93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>test-workspace</Workspace>\\n    <EntityType>sample</EntityType>\\n</CreateEntityResponse>","errorExample":""}]',
            'title' => '创建实体表格',
            'description' => '**请确保在使用该接口前，已充分了解基因分析平台产品的收费方式和价格。**',
        ],
        'GetEntity' => [
            'summary' => '查询工作空间下特定实体类型定义。',
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据',
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                            'Attributes' => [
                                'title' => '属性列数组',
                                'description' => '属性列数组',
                                'type' => 'array',
                                'items' => [
                                    'description' => '属性列名',
                                    'type' => 'string',
                                    'example' => 'fastq1',
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '实体元素总个数',
                                'description' => '实体元素总个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\",\\n  \\"Attributes\\": [\\n    \\"fastq1\\"\\n  ],\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"<GetEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>test-workspace</Workspace>\\n    <EntityType>sample</EntityType>\\n    <Attributes>fastq1</Attributes>\\n    <TotalCount>100</TotalCount>\\n</GetEntityResponse>","errorExample":""}]',
            'title' => '查询实体类型定义',
        ],
        'DeleteEntity' => [
            'summary' => '删除工作空间中特定实体表格。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource %s is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\"\\n}","type":"json"}]',
            'title' => '删除实体表格',
        ],
        'DeleteEntityItems' => [
            'summary' => '删除工作空间中特定实体表格数据内容。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要删除的元素名称数组',
                        'type' => 'array',
                        'items' => [
                            'description' => '要删除的元素',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's1',
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteEntityItemsResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteEntityItemsResponse>","errorExample":""}]',
            'title' => '删除实体表格数据',
        ],
        'UpdateEntity' => [
            'summary' => '更新工作空间中特定实体数据表格内容。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => true,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityItems',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要更新的元素数组',
                        'type' => 'array',
                        'items' => [
                            'description' => '要更新的元素',
                            'type' => 'object',
                            'properties' => [
                                'EntityName' => [
                                    'title' => '实体元素名称',
                                    'description' => '实体元素名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 's1',
                                ],
                                'EntityData' => [
                                    'description' => '要更新的元素的内容',
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'description' => '属性列的值',
                                        'example' => 'value',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'EasyGene::2021-03-15::UpdateEntityItems',
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>test-workspace</Workspace>\\n    <EntityType>sample</EntityType>\\n</UpdateEntityResponse>","errorExample":""}]',
            'title' => '更新实体数据表格内容',
        ],
        'UpdateEntityItems' => [
            'summary' => '更新工作空间中特定实体数据表格内容。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityItems',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '实体表格数据',
                        'type' => 'array',
                        'items' => [
                            'description' => '实体表格数据',
                            'type' => 'object',
                            'properties' => [
                                'EntityName' => [
                                    'title' => '实体元素名称',
                                    'description' => '实体元素名称',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 's1',
                                ],
                                'EntityData' => [
                                    'description' => '数据key-value',
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                        'description' => '数据key-value',
                                        'example' => '{"key1":"value1"}',
                                    ],
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '实体表格数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\"\\n}","type":"json"}]',
            'title' => '更新实体元素',
        ],
        'ListEntities' => [
            'summary' => '获取工作空间下实体类型列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始查询位置',
                        'description' => '起始查询位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回数量',
                        'description' => '最大返回数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序条件',
                        'description' => '排序条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否逆序',
                        'description' => '是否逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '下次查询的起始Token',
                                'description' => '下次查询的起始Token',
                                'type' => 'string',
                                'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                            ],
                            'MaxResults' => [
                                'title' => '请求的最大结果数',
                                'description' => '请求的最大结果数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'TotalCount' => [
                                'title' => '返回总个数',
                                'description' => '返回总个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Entities' => [
                                'title' => '实体类型数组',
                                'description' => '实体类型数组',
                                'type' => 'array',
                                'items' => [
                                    'description' => '表格元素',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityType' => [
                                            'title' => '实体类型',
                                            'description' => '实体类型',
                                            'type' => 'string',
                                            'example' => 'sample',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK\\",\\n  \\"MaxResults\\": 1,\\n  \\"TotalCount\\": 1,\\n  \\"Entities\\": [\\n    {\\n      \\"EntityType\\": \\"sample\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEntitiesResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <NextToken>MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK</NextToken>\\n    <MaxResults>1</MaxResults>\\n    <TotalCount>1</TotalCount>\\n    <Entities>\\n        <EntityType>sample</EntityType>\\n    </Entities>\\n</ListEntitiesResponse>","errorExample":""}]',
            'title' => '获取实体类型列表',
        ],
        'ListEntityItems' => [
            'summary' => '获取工作空间下特定实体的数据表格内容。',
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
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '搜索条件',
                        'description' => '搜索条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序条件',
                        'description' => '排序条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否逆序',
                        'description' => '是否逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始查询位置',
                        'description' => '起始查询位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回数量',
                        'description' => '最大返回数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'MaxResults' => [
                                'title' => '请求的最大结果数',
                                'description' => '请求的最大结果数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'title' => '下次查询的起始Token',
                                'description' => '下次查询的起始Token',
                                'type' => 'string',
                                'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                            ],
                            'TotalCount' => [
                                'title' => '返回总个数',
                                'description' => '返回总个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'EntityItems' => [
                                'title' => '表格数据元素数组',
                                'description' => '实体类型数组',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据表格元素',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityName' => [
                                            'title' => '表格数据元素名称',
                                            'description' => '实体元素名称',
                                            'type' => 'string',
                                            'example' => 's1',
                                        ],
                                        'EntityData' => [
                                            'title' => '数据元素属性',
                                            'description' => '数据元素属性',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => 'value',
                                                'description' => '数据元素属性值',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"MaxResults\\": 10,\\n  \\"NextToken\\": \\"MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK\\",\\n  \\"TotalCount\\": 10,\\n  \\"EntityItems\\": [\\n    {\\n      \\"EntityName\\": \\"s1\\",\\n      \\"EntityData\\": {\\n        \\"key\\": \\"value\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListEntityItemsResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <MaxResults>10</MaxResults>\\n    <NextToken>MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK</NextToken>\\n    <TotalCount>10</TotalCount>\\n    <EntityItems>\\n        <EntityName>s1</EntityName>\\n        <EntityData>\\n            <key>value</key>\\n        </EntityData>\\n    </EntityItems>\\n</ListEntityItemsResponse>","errorExample":""}]',
            'title' => '获取实体数据表格',
        ],
        'CopyPublicEntity' => [
            'summary' => '拷贝公共数据集表格到工作空间中。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Dataset',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '数据集名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestDataset',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '表格名称',
                        'description' => '表格名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要拷贝到的工作空间',
                        'description' => '要拷贝到的工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\"\\n}","errorExample":""},{"type":"xml","example":"<CopyPublicEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>test-workspace</Workspace>\\n    <EntityType>sample</EntityType>\\n</CopyPublicEntityResponse>","errorExample":""}]',
            'title' => '拷贝公共数据集表格',
        ],
        'DownloadEntity' => [
            'summary' => '从工作空间中下载实体表格数据到本地文件。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'EntityNames',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '要下载的数据元素名称数组',
                        'type' => 'array',
                        'items' => [
                            'description' => '要下载的数据元素',
                            'type' => 'string',
                            'required' => false,
                            'example' => 's1',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'EntityCSVFile' => [
                                'title' => '下载的表格文件URL',
                                'description' => '下载的表格文件URL',
                                'type' => 'string',
                                'example' => 'https://my-bucket.oss.aliyucs.com/entity.csv',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"EntityCSVFile\\": \\"https://my-bucket.oss.aliyucs.com/entity.csv\\"\\n}","errorExample":""},{"type":"xml","example":"<DownloadEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <EntityTSVFile>https://my-bucket.oss.aliyucs.com/xxx</EntityTSVFile>\\n</DownloadEntityResponse>","errorExample":""}]',
            'title' => '下载实体表格数据',
        ],
        'UploadEntity' => [
            'summary' => '上传实体数据表格到工作空间中。',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'EntityCSVFile',
                    'in' => 'query',
                    'schema' => [
                        'title' => '表格文件地址',
                        'description' => '实体表格CSV文件的OSS地址',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'https://my-bucket.oss.aliyucs.com/entity.csv',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'EntityType' => [
                                'title' => '表格名称',
                                'description' => '表格名称',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"EntityType\\": \\"sample\\"\\n}","errorExample":""},{"type":"xml","example":"<UploadEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Workspace>test-workspace</Workspace>\\n    <EntityType>sample</EntityType>\\n</UploadEntityResponse>","errorExample":""}]',
            'title' => '上传实体数据',
        ],
        'CreateTemplate' => [
            'summary' => '工作空间中创建应用模板。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板名称',
                        'description' => '应用模板名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-template',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板描述',
                        'description' => '应用模板描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test template',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用的名称',
                        'description' => '应用的名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyApp',
                    ],
                ],
                [
                    'name' => 'AppRevision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用的版本',
                        'description' => '应用的版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4.1.4.1-v1.0',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本唯一标签',
                        'description' => '应用版本唯一标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ProduceVersion',
                    ],
                ],
                [
                    'name' => 'RootEntity',
                    'in' => 'query',
                    'schema' => [
                        'title' => '根实体类型',
                        'description' => '根实体类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestEntity',
                    ],
                ],
                [
                    'name' => 'InputsExpression',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '应用的输入',
                        'description' => '应用的表达式',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用的表达式',
                            'type' => 'object',
                            'properties' => [
                                'TaskName' => [
                                    'title' => '任务名称',
                                    'description' => '任务名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Task1',
                                ],
                                'VariableName' => [
                                    'title' => '变量名',
                                    'description' => '变量名',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'fastq1',
                                ],
                                'VariableType' => [
                                    'title' => '变量类型',
                                    'description' => '变量类型',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'File',
                                ],
                                'VariableValue' => [
                                    'title' => '变量值',
                                    'description' => '变量值',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'oss://bucket/file1.fastq',
                                ],
                                'Required' => [
                                    'title' => '是否必填',
                                    'description' => '该参数是否必填。'."\n"
                                        ."\n"
                                        .'- true：必填。'."\n"
                                        .'- false：非必填。'."\n"
                                        ."\n"
                                        .'> 返回参数中，此参数无需处理。',
                                    'type' => 'boolean',
                                    'required' => true,
                                    'example' => 'true',
                                ],
                                'Help' => [
                                    'title' => '帮助信息',
                                    'description' => '帮助信息',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'test help',
                                ],
                                'StepOrder' => [
                                    'title' => '步骤顺序',
                                    'description' => '步骤顺序',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '0',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'example' => 'TestEntity',
                    ],
                ],
                [
                    'name' => 'OutputsExpression',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '应用的输出',
                        'description' => '应用的输出参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用的输出',
                            'type' => 'object',
                            'properties' => [
                                'TaskName' => [
                                    'title' => '任务名称',
                                    'description' => '任务名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Task1',
                                ],
                                'VariableName' => [
                                    'title' => '变量名',
                                    'description' => '变量名',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'bam',
                                ],
                                'VariableType' => [
                                    'title' => '变量类型',
                                    'description' => '变量类型',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'File',
                                ],
                                'VariableValue' => [
                                    'title' => '变量值',
                                    'description' => '变量值',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'oss://bucket/file.bam',
                                ],
                                'Required' => [
                                    'title' => '是否必填',
                                    'description' => '该参数是否必填。'."\n"
                                        ."\n"
                                        .'- true：必填。'."\n"
                                        .'- false：非必填。'."\n"
                                        ."\n"
                                        .'默认值为true。',
                                    'type' => 'boolean',
                                    'required' => true,
                                    'example' => 'true',
                                ],
                                'Help' => [
                                    'title' => '帮助信息',
                                    'description' => '帮助信息',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '输出比对结果',
                                ],
                                'StepOrder' => [
                                    'title' => '步骤顺序',
                                    'description' => '步骤顺序',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用标签',
                        'description' => '应用标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key1": "value1"}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '幂等Token',
                        'description' => '幂等Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '创建应用模板返回结果',
                        'description' => '创建应用模板返回结果',
                        'type' => 'object',
                        'properties' => [
                            'Workspace' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'TemplateName' => [
                                'title' => '应用模板名称',
                                'description' => '应用模板名称',
                                'type' => 'string',
                                'example' => 'test-template',
                            ],
                            'HostId' => [
                                'title' => '主机 ID',
                                'description' => '主机 ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"TemplateName\\": \\"test-template\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTemplateResponse>\\n    <Workspace>test-workspace</Workspace>\\n    <TemplateName>test-template</TemplateName>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</CreateTemplateResponse>","errorExample":""}]',
            'title' => '创建应用模板',
        ],
        'GetTemplate' => [
            'summary' => '查询工作空间下特定应用模板详情。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板名称',
                        'description' => '应用模板名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-template',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '应用模板详情',
                        'description' => '应用模板详情',
                        'type' => 'object',
                        'properties' => [
                            'TemplateName' => [
                                'title' => '应用模板名称',
                                'description' => '应用模板名称',
                                'type' => 'string',
                                'example' => 'test-template',
                            ],
                            'CreateTime' => [
                                'title' => '创建时间',
                                'description' => '创建时间',
                                'type' => 'string',
                                'example' => '2021-06-10T13:30:20.414557061Z',
                            ],
                            'Description' => [
                                'title' => '应用简要描述',
                                'description' => '应用简要描述',
                                'type' => 'string',
                                'example' => 'test template',
                            ],
                            'AppName' => [
                                'title' => '应用的名称',
                                'description' => '应用的名称',
                                'type' => 'string',
                                'example' => 'MyApp',
                            ],
                            'AppRevision' => [
                                'title' => '应用的版本',
                                'description' => '应用的版本',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'InputsExpression' => [
                                'title' => '应用输入',
                                'description' => '应用输入',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskName' => [
                                            'title' => '任务名称',
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'Task1',
                                        ],
                                        'VariableName' => [
                                            'title' => '变量名称',
                                            'description' => '变量名称',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'VariableType' => [
                                            'title' => '变量类型',
                                            'description' => '变量类型',
                                            'type' => 'string',
                                            'example' => 'File',
                                        ],
                                        'VariableValue' => [
                                            'title' => '变量值',
                                            'description' => '变量值',
                                            'type' => 'string',
                                            'example' => 'oss://bucket/file1.fastq',
                                        ],
                                        'Required' => [
                                            'title' => '是否必须参数',
                                            'description' => '是否必须参数',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Help' => [
                                            'title' => '帮助信息',
                                            'description' => '帮助信息',
                                            'type' => 'string',
                                            'example' => 'test help',
                                        ],
                                        'StepOrder' => [
                                            'title' => '步骤顺序',
                                            'description' => '步骤顺序',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                    ],
                                ],
                            ],
                            'Labels' => [
                                'title' => '应用标签',
                                'description' => '应用标签',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'test',
                                    'description' => '标签',
                                ],
                            ],
                            'LastModifiedTime' => [
                                'title' => '应用最后修改时间',
                                'description' => '应用最后修改时间',
                                'type' => 'string',
                                'example' => '2021-06-10T13:30:20.405878292Z',
                            ],
                            'OutputsExpression' => [
                                'title' => '应用的输出参数',
                                'description' => '应用的输出参数',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用的输出参数表达式',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskName' => [
                                            'title' => '任务名称',
                                            'description' => '任务名称',
                                            'type' => 'string',
                                            'example' => 'jobname',
                                        ],
                                        'VariableName' => [
                                            'title' => '变量名称',
                                            'description' => '变量名称',
                                            'type' => 'string',
                                            'example' => 'fastq1',
                                        ],
                                        'VariableType' => [
                                            'title' => '变量类型',
                                            'description' => '变量类型',
                                            'type' => 'string',
                                            'example' => 'string',
                                        ],
                                        'VariableValue' => [
                                            'title' => '变量值',
                                            'description' => '变量值',
                                            'type' => 'string',
                                            'example' => 'abc_1.fastq.gz',
                                        ],
                                        'Required' => [
                                            'title' => '是否必须参数',
                                            'description' => '是否必须参数',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'Help' => [
                                            'title' => '帮助信息',
                                            'description' => '帮助信息',
                                            'type' => 'string',
                                            'example' => '测序reads文件',
                                        ],
                                        'StepOrder' => [
                                            'title' => '步骤顺序',
                                            'description' => '步骤顺序',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Source' => [
                                'title' => '应用来源',
                                'description' => '应用来源',
                                'type' => 'string',
                                'example' => 'EasyGene',
                            ],
                            'Workspace' => [
                                'title' => '工作空间名称',
                                'description' => '工作空间名称',
                                'type' => 'string',
                                'example' => 'test-workspace',
                            ],
                            'RootEntity' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'test-entity',
                            ],
                            'RevisionTag' => [
                                'title' => '应用版本唯一标签',
                                'description' => '应用版本唯一标签',
                                'type' => 'string',
                                'example' => 'produceVersion',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TemplateName\\": \\"test-template\\",\\n  \\"CreateTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n  \\"Description\\": \\"test template\\",\\n  \\"AppName\\": \\"MyApp\\",\\n  \\"AppRevision\\": \\"1\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"InputsExpression\\": [\\n    {\\n      \\"TaskName\\": \\"Task1\\",\\n      \\"VariableName\\": \\"v1\\",\\n      \\"VariableType\\": \\"File\\",\\n      \\"VariableValue\\": \\"oss://bucket/file1.fastq\\",\\n      \\"Required\\": true,\\n      \\"Help\\": \\"test help\\",\\n      \\"StepOrder\\": 0\\n    }\\n  ],\\n  \\"Labels\\": {\\n    \\"key\\": \\"test\\"\\n  },\\n  \\"LastModifiedTime\\": \\"2021-06-10T13:30:20.405878292Z\\",\\n  \\"OutputsExpression\\": [\\n    {\\n      \\"TaskName\\": \\"jobname\\",\\n      \\"VariableName\\": \\"fastq1\\",\\n      \\"VariableType\\": \\"string\\",\\n      \\"VariableValue\\": \\"abc_1.fastq.gz\\",\\n      \\"Required\\": true,\\n      \\"Help\\": \\"测序reads文件\\",\\n      \\"StepOrder\\": 2\\n    }\\n  ],\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Source\\": \\"EasyGene\\",\\n  \\"Workspace\\": \\"test-workspace\\",\\n  \\"RootEntity\\": \\"test-entity\\",\\n  \\"RevisionTag\\": \\"produceVersion\\"\\n}","errorExample":""},{"type":"xml","example":"<GetTemplateResponse>\\n    <TemplateName>test-template</TemplateName>\\n    <CreateTime>2021-06-10T13:30:20.414557061Z</CreateTime>\\n    <Description>test template</Description>\\n    <AppName>MyApp</AppName>\\n    <Revision>1</Revision>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Inputs>\\n        <TaskName>Task1</TaskName>\\n        <VariableName>v1</VariableName>\\n        <VariableType>File</VariableType>\\n        <VariableValue>oss://bucket/file1.fastq</VariableValue>\\n        <Required>true</Required>\\n        <Help>test help</Help>\\n        <StepOrder>0</StepOrder>\\n    </Inputs>\\n    <Labels>\\n        <key>test</key>\\n    </Labels>\\n    <LastModifiedTime>2021-06-10T13:30:20.405878292Z</LastModifiedTime>\\n    <Outputs>\\n        <TaskName>TestTaskName</TaskName>\\n        <VariableName>TestVariableName</VariableName>\\n        <VariableType>Int</VariableType>\\n        <VariableValue>ExampleValue</VariableValue>\\n        <Required>true</Required>\\n        <Help>Example help information</Help>\\n        <StepOrder>1</StepOrder>\\n    </Outputs>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Source>EasyGene</Source>\\n    <Workspace>test-workspace</Workspace>\\n    <RootEntity>test-entity</RootEntity>\\n</GetTemplateResponse>","errorExample":""}]',
            'title' => '查询应用模板详情',
        ],
        'DeleteTemplate' => [
            'summary' => '删除工作空间下特定应用模板。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板名称',
                        'description' => '应用模板名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-template',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTemplateResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteTemplateResponse>","errorExample":""}]',
            'title' => '删除应用模板',
        ],
        'UpdateTemplate' => [
            'summary' => '更新工作空间下特定应用模板详情。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'TemplateName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板名称',
                        'description' => '应用模板名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-template',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板描述',
                        'description' => '应用模板描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a test template',
                    ],
                ],
                [
                    'name' => 'RootEntity',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-entity',
                    ],
                ],
                [
                    'name' => 'InputsExpression',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '应用的输入',
                        'description' => '应用输入表达式',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用的输入',
                            'type' => 'object',
                            'properties' => [
                                'TaskName' => [
                                    'title' => '任务名称',
                                    'description' => '任务名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Task1',
                                ],
                                'VariableName' => [
                                    'title' => '变量名',
                                    'description' => '变量名',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'fastq1',
                                ],
                                'VariableType' => [
                                    'title' => '变量类型',
                                    'description' => '变量类型',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'String',
                                ],
                                'VariableValue' => [
                                    'title' => '变量值',
                                    'description' => '变量值',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'read_1.fastq.gz',
                                ],
                                'Required' => [
                                    'title' => '是否必填',
                                    'description' => '是否必填',
                                    'type' => 'boolean',
                                    'required' => true,
                                    'example' => 'True',
                                ],
                                'Help' => [
                                    'title' => '帮助信息',
                                    'description' => '帮助信息',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '测序reads文件',
                                ],
                                'StepOrder' => [
                                    'title' => '步骤顺序',
                                    'description' => '步骤顺序',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '2',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OutputsExpression',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'title' => '应用的输出',
                        'description' => '应用的输出表达式',
                        'type' => 'array',
                        'items' => [
                            'description' => '应用的输出',
                            'type' => 'object',
                            'properties' => [
                                'TaskName' => [
                                    'title' => '任务名称',
                                    'description' => '任务名称',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Task1',
                                ],
                                'VariableName' => [
                                    'title' => '变量名',
                                    'description' => '变量名',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'Bam',
                                ],
                                'VariableType' => [
                                    'title' => '变量类型',
                                    'description' => '变量类型',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'String',
                                ],
                                'VariableValue' => [
                                    'title' => '变量值',
                                    'description' => '变量值',
                                    'type' => 'string',
                                    'required' => true,
                                    'example' => 'out.bam',
                                ],
                                'Required' => [
                                    'title' => '是否必填',
                                    'description' => '是否必填',
                                    'type' => 'boolean',
                                    'required' => true,
                                    'example' => 'True',
                                ],
                                'Help' => [
                                    'title' => '帮助信息',
                                    'description' => '帮助信息',
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'StepOrder' => [
                                    'title' => '步骤顺序',
                                    'description' => '步骤顺序',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Labels',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用模板标签',
                        'description' => '应用模板标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key": "value"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","type":"json"}]',
            'title' => '更新应用模板',
        ],
        'ListTemplates' => [
            'summary' => '获取工作空间下应用模板列表。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '下次查询起始位置',
                        'description' => '下次查询起始位置',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回结果数',
                        'description' => '最大返回结果数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '0',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据',
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否逆序',
                        'description' => '是否逆序',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'LabelSelector',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Label 选择器',
                        'description' => 'Label 选择器',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key1=value1',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查找条件',
                        'description' => '查找条件',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
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
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大返回结果',
                                'description' => '最大返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'NextToken' => [
                                'title' => '下次查询Token',
                                'description' => '下次查询Token',
                                'type' => 'string',
                                'example' => 'MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Templates' => [
                                'title' => '应用模板列表',
                                'description' => '应用模板列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Workspace' => [
                                            'title' => '工作空间',
                                            'description' => '工作空间',
                                            'type' => 'string',
                                            'example' => 'test-workspace',
                                        ],
                                        'TemplateName' => [
                                            'title' => '应用模板名称',
                                            'description' => '应用模板名称',
                                            'type' => 'string',
                                            'example' => 'test-template',
                                        ],
                                        'Labels' => [
                                            'title' => '标签',
                                            'description' => '标签',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => 'test',
                                                'description' => '标签',
                                            ],
                                        ],
                                        'AppName' => [
                                            'title' => '应用名称',
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'my-app',
                                        ],
                                        'AppRevision' => [
                                            'title' => '应用版本',
                                            'description' => '应用版本',
                                            'type' => 'string',
                                            'example' => '1',
                                        ],
                                        'RootEntity' => [
                                            'title' => '实体类型',
                                            'description' => '实体类型',
                                            'type' => 'string',
                                            'example' => 'test-entity',
                                        ],
                                        'InputsExpression' => [
                                            'title' => '应用输入',
                                            'description' => '应用输入',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TaskName' => [
                                                        'title' => '任务名称',
                                                        'description' => '任务名称',
                                                        'type' => 'string',
                                                        'example' => 'task1',
                                                    ],
                                                    'VariableName' => [
                                                        'title' => '变量名称',
                                                        'description' => '变量名称',
                                                        'type' => 'string',
                                                        'example' => 'fastq1',
                                                    ],
                                                    'VariableType' => [
                                                        'title' => '变量类型',
                                                        'description' => '变量类型',
                                                        'type' => 'string',
                                                        'example' => 'File',
                                                    ],
                                                    'VariableValue' => [
                                                        'title' => '变量值',
                                                        'description' => '变量值',
                                                        'type' => 'string',
                                                        'example' => 'oss://bucket/file1.fastq',
                                                    ],
                                                    'Required' => [
                                                        'title' => '是否必须参数',
                                                        'description' => '是否必须参数',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'Help' => [
                                                        'title' => '帮助信息',
                                                        'description' => '帮助信息',
                                                        'type' => 'string',
                                                        'example' => 'help test',
                                                    ],
                                                    'StepOrder' => [
                                                        'title' => '步骤顺序',
                                                        'description' => '步骤顺序',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '0',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OutputsExpression' => [
                                            'title' => '应用的输出参数',
                                            'description' => '应用的输出参数',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'TaskName' => [
                                                        'title' => '任务名称',
                                                        'description' => '任务名称',
                                                        'type' => 'string',
                                                        'example' => 'task1',
                                                    ],
                                                    'VariableName' => [
                                                        'title' => '变量名称',
                                                        'description' => '变量名称',
                                                        'type' => 'string',
                                                        'example' => 'v1',
                                                    ],
                                                    'VariableType' => [
                                                        'title' => '变量类型',
                                                        'description' => '变量类型',
                                                        'type' => 'string',
                                                        'example' => 'File',
                                                    ],
                                                    'VariableValue' => [
                                                        'title' => '变量值',
                                                        'description' => '变量值',
                                                        'type' => 'string',
                                                        'example' => 'oss://bucket/test.vcf',
                                                    ],
                                                    'Required' => [
                                                        'title' => '是否必须参数',
                                                        'description' => '是否必须参数',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'Help' => [
                                                        'title' => '帮助信息',
                                                        'description' => '帮助信息',
                                                        'type' => 'string',
                                                        'example' => 'help test',
                                                    ],
                                                    'StepOrder' => [
                                                        'title' => '步骤顺序',
                                                        'description' => '步骤顺序',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '1',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'title' => '模板描述信息',
                                            'description' => '模板描述信息',
                                            'type' => 'string',
                                            'example' => 'This is a test template',
                                        ],
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'LastModifiedTime' => [
                                            'title' => '最后修改时间',
                                            'description' => '最后修改时间',
                                            'type' => 'string',
                                            'example' => '2021-06-10T13:30:20.414557061Z',
                                        ],
                                        'RevisionTag' => [
                                            'title' => '应用版本唯一标签',
                                            'description' => '应用版本唯一标签',
                                            'type' => 'string',
                                            'example' => 'ProduceVersion',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '返回个数',
                                'description' => '返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"MaxResults\\": 10,\\n  \\"NextToken\\": \\"MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Templates\\": [\\n    {\\n      \\"Workspace\\": \\"test-workspace\\",\\n      \\"TemplateName\\": \\"test-template\\",\\n      \\"Labels\\": {\\n        \\"key\\": \\"test\\"\\n      },\\n      \\"AppName\\": \\"my-app\\",\\n      \\"AppRevision\\": \\"1\\",\\n      \\"RootEntity\\": \\"test-entity\\",\\n      \\"InputsExpression\\": [\\n        {\\n          \\"TaskName\\": \\"task1\\",\\n          \\"VariableName\\": \\"fastq1\\",\\n          \\"VariableType\\": \\"File\\",\\n          \\"VariableValue\\": \\"oss://bucket/file1.fastq\\",\\n          \\"Required\\": true,\\n          \\"Help\\": \\"help test\\",\\n          \\"StepOrder\\": 0\\n        }\\n      ],\\n      \\"OutputsExpression\\": [\\n        {\\n          \\"TaskName\\": \\"task1\\",\\n          \\"VariableName\\": \\"v1\\",\\n          \\"VariableType\\": \\"File\\",\\n          \\"VariableValue\\": \\"oss://bucket/test.vcf\\",\\n          \\"Required\\": true,\\n          \\"Help\\": \\"help test\\",\\n          \\"StepOrder\\": 1\\n        }\\n      ],\\n      \\"Description\\": \\"This is a test template\\",\\n      \\"CreateTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n      \\"LastModifiedTime\\": \\"2021-06-10T13:30:20.414557061Z\\",\\n      \\"RevisionTag\\": \\"ProduceVersion\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<ListTemplatesResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <MaxResults>10</MaxResults>\\n    <NextToken>MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK</NextToken>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <Templates>\\n        <Workspace>test-workspace</Workspace>\\n        <TemplateName>test-template</TemplateName>\\n        <AppName>my-app</AppName>\\n        <Revision>1</Revision>\\n        <RootEntity>test-entity</RootEntity>\\n        <Inputs>\\n            <TaskName>task1</TaskName>\\n            <VariableName>fastq1</VariableName>\\n            <VariableType>File</VariableType>\\n            <VariableValue>oss://bucket/file1.fastq</VariableValue>\\n            <Required>true</Required>\\n            <Help>help test</Help>\\n            <StepOrder>0</StepOrder>\\n        </Inputs>\\n        <Outputs>\\n            <TaskName>task1</TaskName>\\n            <VariableName>v1</VariableName>\\n            <VariableType>File</VariableType>\\n            <VariableValue>oss://bucket/test.vcf</VariableValue>\\n            <Required>true</Required>\\n            <Help>help test</Help>\\n            <StepOrder>1</StepOrder>\\n        </Outputs>\\n        <Description>This is a test template</Description>\\n        <CreateTime>2021-06-10T13:30:20.414557061Z</CreateTime>\\n        <LastModifiedTime>2021-06-10T13:30:20.414557061Z</LastModifiedTime>\\n    </Templates>\\n    <TotalCount>10</TotalCount>\\n</ListTemplatesResponse>","errorExample":""}]',
            'title' => '获取应用模板列表',
        ],
        'CreateSubmission' => [
            'summary' => '创建投递，通过创建投递可以批量创建任务。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名字',
                        'description' => '工作空间名字',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestApp',
                    ],
                ],
                [
                    'name' => 'Revision',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本号',
                        'description' => '应用版本号',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'RevisionTag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本唯一标签',
                        'description' => '应用版本唯一标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ProduceVersion',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestEntityType',
                    ],
                ],
                [
                    'name' => 'EntityNames',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'style' => 'json',
                    'schema' => [
                        'description' => '投递任务运行实体名称列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '实体名称',
                            'type' => 'string',
                            'required' => false,
                            'example' => '[“S0001”, “S0002”]',
                        ],
                        'required' => false,
                        'example' => 'TestEntityType',
                    ],
                ],
                [
                    'name' => 'ExecuteOptions',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务配置',
                        'description' => '任务配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{ 	        "CallCaching": false, 	        "DeleteIntermediateResults": true, 	        "FailureMode": "NoNewCalls"         }',
                    ],
                ],
                [
                    'name' => 'ExecuteDirectory',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务执行目录',
                        'description' => '任务执行目录',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => 'oss://my-bucket/my-exe-dir/',
                    ],
                ],
                [
                    'name' => 'OutputFolder',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务输出拷贝目录',
                        'description' => '任务输出拷贝目录',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'oss://my-bucket/my-output-dir/',
                    ],
                ],
                [
                    'name' => 'DefaultRuntime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '默认运行时',
                        'description' => '默认运行时',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Inputs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务输入',
                        'description' => '任务输入',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Outputs',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务输出',
                        'description' => '任务输出',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务幂等token',
                        'description' => '任务幂等token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'SubmissionId' => [
                                'title' => '投递ID',
                                'description' => '投递ID',
                                'type' => 'string',
                                'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"SubmissionId\\": \\"sub-13BeXWnGvrOl3MC124tazcJVKaV\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateSubmissionResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Workspace>TestWorkspace</Workspace>\\n    <SubmissionId>sub-13BeXWnGvrOl3MC124tazcJVKaV</SubmissionId>\\n</CreateSubmissionResponse>","errorExample":""}]',
            'title' => '创建投递',
        ],
        'GetSubmission' => [
            'summary' => '查询工作空间下特定的投递任务详情。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'SubmissionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '投递ID',
                        'description' => '投递ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'Submission' => [
                                'title' => '投递详情',
                                'description' => '投递详情',
                                'type' => 'object',
                                'properties' => [
                                    'Workspace' => [
                                        'title' => '提交ID',
                                        'description' => '提交ID',
                                        'type' => 'string',
                                        'example' => 'TestWorkspace',
                                    ],
                                    'SubmissionId' => [
                                        'title' => '提交ID',
                                        'description' => '提交ID',
                                        'type' => 'string',
                                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                                    ],
                                    'Status' => [
                                        'title' => '任务状态',
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'example' => 'Succeeded',
                                    ],
                                    'CreateTime' => [
                                        'title' => '提交时间',
                                        'description' => '提交时间',
                                        'type' => 'string',
                                        'example' => '2021-06-16T15:09:14.378297+08:00',
                                    ],
                                    'StartTime' => [
                                        'title' => '开始时间',
                                        'description' => '开始时间',
                                        'type' => 'string',
                                        'example' => '2021-06-16T15:09:14.378297+08:00',
                                    ],
                                    'EndTime' => [
                                        'title' => '结束时间',
                                        'description' => '结束时间',
                                        'type' => 'string',
                                        'example' => '2021-06-16T15:09:14.378297+08:00',
                                    ],
                                    'EntityType' => [
                                        'title' => '实体类型',
                                        'description' => '实体类型',
                                        'type' => 'string',
                                        'example' => 'TestEntityType',
                                    ],
                                    'RunStats' => [
                                        'description' => '运行状态统计',
                                        'type' => 'object',
                                        'properties' => [
                                            'Submitted' => [
                                                'title' => '已提交数量',
                                                'description' => '已提交数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Pending' => [
                                                'title' => '等待中数量',
                                                'description' => '等待中数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Running' => [
                                                'title' => '运行中数量',
                                                'description' => '运行中数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Succeeded' => [
                                                'title' => '已成功数量',
                                                'description' => '已成功数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Failed' => [
                                                'title' => '已失败数量',
                                                'description' => '已失败数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Aborting' => [
                                                'title' => '取消中数量',
                                                'description' => '取消中数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
                                            ],
                                            'Aborted' => [
                                                'title' => '已取消数量',
                                                'description' => '已取消数量',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '5',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"Submission\\": {\\n    \\"Workspace\\": \\"TestWorkspace\\",\\n    \\"SubmissionId\\": \\"sub-13BeXWnGvrOl3MC124tazcJVKaV\\",\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n    \\"StartTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n    \\"EndTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n    \\"EntityType\\": \\"TestEntityType\\",\\n    \\"RunStats\\": {\\n      \\"Submitted\\": 5,\\n      \\"Pending\\": 5,\\n      \\"Running\\": 5,\\n      \\"Succeeded\\": 5,\\n      \\"Failed\\": 5,\\n      \\"Aborting\\": 5,\\n      \\"Aborted\\": 5\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSubmissionResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <Submission>\\n        <Workspace>TestWorkspace</Workspace>\\n        <SubmissionId>sub-13BeXWnGvrOl3MC124tazcJVKaV</SubmissionId>\\n        <Status>Succeeded</Status>\\n        <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n        <StartTime>2021-06-16T15:09:14.378297+08:00</StartTime>\\n        <EndTime>2021-06-16T15:09:14.378297+08:00</EndTime>\\n        <EntityType>TestEntityType</EntityType>\\n        <RunStats>\\n            <Submitted>5</Submitted>\\n            <Pending>5</Pending>\\n            <Running>5</Running>\\n            <Succeeded>5</Succeeded>\\n            <Failed>5</Failed>\\n            <Aborting>5</Aborting>\\n            <Aborted>5</Aborted>\\n        </RunStats>\\n    </Submission>\\n</GetSubmissionResponse>","errorExample":""}]',
            'title' => '查询投递任务详情',
        ],
        'DeleteSubmission' => [
            'summary' => '删除工作空间下特定的投递任务记录。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'SubmissionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '投递ID',
                        'description' => '投递ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'StatusConflict',
                        'errorMessage' => 'The specified action %s is not supported in current status %s.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSubmissionResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</DeleteSubmissionResponse>","errorExample":""}]',
            'title' => 'DeleteSubmission',
        ],
        'ListSubmissions' => [
            'summary' => '获取工作空间下投递任务列表。',
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
            ],
            'parameters' => [
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '状态',
                        'description' => '状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Failed',
                        'enum' => [
                            'Running',
                            'Pending',
                            'Aborting',
                            'Finished',
                            'Aborted',
                            'Failed',
                        ],
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '搜索ID',
                        'description' => '搜索ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Next Token',
                        'description' => 'Next Token',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestToken',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大返回数目',
                        'description' => '最大返回数目',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '5',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据',
                        'description' => '排序依据',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createtime',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '逆序',
                        'description' => '逆序',
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
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'MaxResults' => [
                                'title' => '最大返回结果',
                                'description' => '最大返回结果',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'NextToken' => [
                                'title' => '下次查询Token',
                                'description' => '下次查询Token',
                                'type' => 'string',
                                'example' => 'TestToken',
                            ],
                            'TotalCount' => [
                                'title' => '返回个数',
                                'description' => '返回个数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'Submissions' => [
                                'title' => '投递列表',
                                'description' => '投递列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Workspace' => [
                                            'title' => '工作空间名字',
                                            'description' => '工作空间名字',
                                            'type' => 'string',
                                            'example' => 'TestWorkspace',
                                        ],
                                        'SubmissionId' => [
                                            'title' => '提交ID',
                                            'description' => '提交ID',
                                            'type' => 'string',
                                            'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                                        ],
                                        'Status' => [
                                            'title' => '任务状态',
                                            'description' => '任务状态',
                                            'type' => 'string',
                                            'example' => 'Succeeded',
                                        ],
                                        'CreateTime' => [
                                            'title' => '提交时间',
                                            'description' => '提交时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'StartTime' => [
                                            'title' => '开始时间',
                                            'description' => '开始时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'EndTime' => [
                                            'title' => '结束时间',
                                            'description' => '结束时间',
                                            'type' => 'string',
                                            'example' => '2021-06-16T15:09:14.378297+08:00',
                                        ],
                                        'EntityType' => [
                                            'title' => '实体类型',
                                            'description' => '实体类型',
                                            'type' => 'string',
                                            'example' => 'TestEntityType',
                                        ],
                                        'RunStats' => [
                                            'description' => '运行状态统计',
                                            'type' => 'object',
                                            'properties' => [
                                                'Submitted' => [
                                                    'title' => '已提交数量',
                                                    'description' => '已提交数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Pending' => [
                                                    'title' => '等待中数量',
                                                    'description' => '等待中数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Running' => [
                                                    'title' => '运行中数量',
                                                    'description' => '运行中数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Succeeded' => [
                                                    'title' => '已成功数量',
                                                    'description' => '已成功数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Failed' => [
                                                    'title' => '已失败数量',
                                                    'description' => '已失败数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Aborting' => [
                                                    'title' => '取消中数量',
                                                    'description' => '取消中数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
                                                ],
                                                'Aborted' => [
                                                    'title' => '已取消数量',
                                                    'description' => '已取消数量',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '5',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"MaxResults\\": 5,\\n  \\"NextToken\\": \\"TestToken\\",\\n  \\"TotalCount\\": 5,\\n  \\"Submissions\\": [\\n    {\\n      \\"Workspace\\": \\"TestWorkspace\\",\\n      \\"SubmissionId\\": \\"sub-13BeXWnGvrOl3MC124tazcJVKaV\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"CreateTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"StartTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"EndTime\\": \\"2021-06-16T15:09:14.378297+08:00\\",\\n      \\"EntityType\\": \\"TestEntityType\\",\\n      \\"RunStats\\": {\\n        \\"Submitted\\": 5,\\n        \\"Pending\\": 5,\\n        \\"Running\\": 5,\\n        \\"Succeeded\\": 5,\\n        \\"Failed\\": 5,\\n        \\"Aborting\\": 5,\\n        \\"Aborted\\": 5\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSubmissionsResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <MaxResults>5</MaxResults>\\n    <NextToken>TestToken</NextToken>\\n    <TotalCount>5</TotalCount>\\n    <Submissions>\\n        <Workspace>TestWorkspace</Workspace>\\n        <SubmissionId>sub-13BeXWnGvrOl3MC124tazcJVKaV</SubmissionId>\\n        <Status>Succeeded</Status>\\n        <CreateTime>2021-06-16T15:09:14.378297+08:00</CreateTime>\\n        <StartTime>2021-06-16T15:09:14.378297+08:00</StartTime>\\n        <EndTime>2021-06-16T15:09:14.378297+08:00</EndTime>\\n        <EntityType>TestEntityType</EntityType>\\n        <RunStats>\\n            <Submitted>5</Submitted>\\n            <Pending>5</Pending>\\n            <Running>5</Running>\\n            <Succeeded>5</Succeeded>\\n            <Failed>5</Failed>\\n            <Aborting>5</Aborting>\\n            <Aborted>5</Aborted>\\n        </RunStats>\\n    </Submissions>\\n</ListSubmissionsResponse>","errorExample":""}]',
            'title' => '获取投递任务列表',
        ],
        'AbortSubmission' => [
            'summary' => '终止工作空间下特定的投递任务。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test-workspace',
                    ],
                ],
                [
                    'name' => 'SubmissionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '投递ID',
                        'description' => '投递ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'StatusConflict',
                        'errorMessage' => 'The specified action %s is not supported in current status %s.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"easygene.cn-beijing.aliyuncs.com\\"\\n}","errorExample":""},{"type":"xml","example":"<AbortSubmissionResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>easygene.cn-beijing.aliyuncs.com</RequestId>\\n</AbortSubmissionResponse>","errorExample":""}]',
            'title' => 'AbortSubmission',
        ],
        'ResumeSubmission' => [
            'summary' => '恢复工作空间下特定的投递任务。',
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
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间名称',
                        'description' => '工作空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'TestWorkspace',
                    ],
                ],
                [
                    'name' => 'SubmissionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '投递ID',
                        'description' => '投递ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sub-13BeXWnGvrOl3MC124tazcJVKaV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结果',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\"\\n}","errorExample":""},{"type":"xml","example":"<ResumeSubmissionResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n</ResumeSubmissionResponse>","errorExample":""}]',
            'title' => 'ResumeSubmission',
        ],
        'ListGlobalApps' => [
            'summary' => '获取平台公共应用列表。',
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
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索字段：NamesapceName  AppName  Categories AppDescription',
                        'description' => '模糊搜索字段：NamesapceName  AppName  Categories AppDescription',
                        'type' => 'string',
                        'required' => false,
                        'example' => '群体变异',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段:AppName,LastModified,Used',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'AppName, LastModified, Used',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否倒序，默认倒序排列',
                        'description' => '是否逆序，默认逆序排列',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数',
                        'description' => '分页数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'AppScope',
                    'in' => 'query',
                    'schema' => [
                        'title' => '可见范围',
                        'description' => '可见范围，OpenAccess为所有内容可见',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'OpenAccess',
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分类',
                        'description' => '分类',
                        'type' => 'string',
                        'required' => false,
                        'example' => '群体变异',
                    ],
                ],
                [
                    'name' => 'Toolkit',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工具集',
                        'description' => '工具集',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sentieon',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域Id',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'GlobalApps' => [
                                'title' => '公共应用集合',
                                'description' => '公共应用列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '公共应用',
                                    'type' => 'object',
                                    'properties' => [
                                        'NamespaceName' => [
                                            'title' => '命名空间名称',
                                            'description' => '命名空间名称',
                                            'type' => 'string',
                                            'example' => 'sentieon',
                                        ],
                                        'AppScope' => [
                                            'title' => '应用权限',
                                            'description' => '应用权限',
                                            'type' => 'string',
                                            'example' => 'OpenAccess',
                                        ],
                                        'AppName' => [
                                            'title' => '应用名称',
                                            'description' => '应用名称',
                                            'type' => 'string',
                                            'example' => 'joint-calling',
                                        ],
                                        'AppDescription' => [
                                            'title' => '应用描述',
                                            'description' => '应用描述',
                                            'type' => 'string',
                                            'example' => '使用Sentieon进行大规模样本的群体变异检测。',
                                        ],
                                        'Toolkit' => [
                                            'title' => '应用工具合集',
                                            'description' => '应用工具合集',
                                            'type' => 'string',
                                            'example' => 'Sentieon',
                                        ],
                                        'AppFee' => [
                                            'title' => '应用计费说明',
                                            'description' => '应用计费说明',
                                            'type' => 'string',
                                            'example' => '实际使用时，计算该应用消耗的资源费用。',
                                        ],
                                        'AppDefaultVersion' => [
                                            'title' => '应用默认版本',
                                            'description' => '应用默认版本',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'Pinned' => [
                                            'title' => '应用收藏置顶标记',
                                            'description' => '应用收藏置顶标记',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'LastModified' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => 'yyyy/MM/dd HH:mm:ss',
                                        ],
                                        'Locations' => [
                                            'title' => '应用支持的区域ids',
                                            'description' => '应用支持的区域ids',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => 'cn-shenzhen',
                                            ],
                                        ],
                                        'Categories' => [
                                            'title' => '应用所属分类',
                                            'description' => '应用所属分类列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '应用分类',
                                                'type' => 'string',
                                                'example' => '群体变异检测',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '本次请求条件下的数据总量',
                                'description' => '本次请求条件下的数据总量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidUser.AccessDenied',
                        'errorMessage' => 'The request was denied due to insufficient user permission.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"GlobalApps\\": [\\n    {\\n      \\"NamespaceName\\": \\"sentieon\\",\\n      \\"AppScope\\": \\"OpenAccess\\",\\n      \\"AppName\\": \\"joint-calling\\",\\n      \\"AppDescription\\": \\"使用Sentieon进行大规模样本的群体变异检测。\\",\\n      \\"Toolkit\\": \\"Sentieon\\",\\n      \\"AppFee\\": \\"实际使用时，计算该应用消耗的资源费用。\\",\\n      \\"AppDefaultVersion\\": \\"1.0\\",\\n      \\"Pinned\\": true,\\n      \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\",\\n      \\"Locations\\": [\\n        \\"cn-shenzhen\\"\\n      ],\\n      \\"Categories\\": [\\n        \\"群体变异检测\\"\\n      ]\\n    }\\n  ],\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"<ListGlobalAppsResponse>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <GlobalApps>\\n        <NamespaceName>sentieon</NamespaceName>\\n        <AppScope>OpenAccess</AppScope>\\n        <AppName>joint-calling</AppName>\\n        <AppDescription>使用Sentieon进行大规模样本的群体变异检测。</AppDescription>\\n        <Toolkit>Sentieon</Toolkit>\\n        <AppFee>实际使用时，计算该应用消耗的资源费用。</AppFee>\\n        <AppDefaultVersion>1.0</AppDefaultVersion>\\n        <Pinned>true</Pinned>\\n        <LastModified>yyyy/MM/dd HH:mm:ss</LastModified>\\n        <RegionIds>cn-shenzhen</RegionIds>\\n        <Categories>群体变异检测</Categories>\\n    </GlobalApps>\\n    <NextToken>ba6d88e2-a6f2-4d2c-a2ae-68b76b078445</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <TotalCount>100</TotalCount>\\n</ListGlobalAppsResponse>","errorExample":""}]',
            'title' => '获取公共应用列表',
        ],
        'GetGlobalApp' => [
            'summary' => '查询平台公共应用详情。',
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
                    'name' => 'Attributes',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '查询字段信息：appVersions，regionIds，dag',
                        'description' => '查询字段信息',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                            'example' => 'appVersions',
                        ],
                        'required' => false,
                        'example' => 'AppVersion, AppDescriptorFiles, DescriptorType, DAG, Document, Comment, Alias, NamespaceName, AppScope, AppName, AppDescription, RegionIds, Categories, Toolkit, AppVersions, AppDefaultVersion, AppFee, LastModified, Pinned, Contact, Links, AppType',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间',
                        'description' => '命名空间',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sentieon',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'joint-calling',
                    ],
                ],
                [
                    'name' => 'AppVersion',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用版本',
                        'description' => '应用版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用可用区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'LastModified' => [
                                'title' => '更新时间',
                                'description' => '更新时间',
                                'type' => 'string',
                                'example' => 'yyyy/MM/dd HH:mm:ss',
                            ],
                            'NamespaceName' => [
                                'title' => '命名空间名称',
                                'description' => '命名空间名称',
                                'type' => 'string',
                                'example' => 'sentieon',
                            ],
                            'AppScope' => [
                                'title' => '应用权限',
                                'description' => '应用权限',
                                'type' => 'string',
                                'example' => 'OpenAccess / Protected',
                            ],
                            'AppName' => [
                                'title' => '应用名称',
                                'description' => '应用名称',
                                'type' => 'string',
                                'example' => 'joint-calling',
                            ],
                            'Locations' => [
                                'title' => '应用支持的区域',
                                'description' => '应用支持的区域',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'example' => 'cn-shenzhen',
                                ],
                            ],
                            'AppVersion' => [
                                'title' => '应用版本',
                                'description' => '应用版本',
                                'type' => 'string',
                                'example' => '1.2a-3',
                            ],
                            'AppType' => [
                                'title' => '应用类型',
                                'description' => '应用类型',
                                'type' => 'string',
                                'example' => 'workflow',
                            ],
                            'AppFee' => [
                                'title' => '应用计费说明',
                                'description' => '应用计费说明',
                                'type' => 'string',
                                'example' => '实际使用时，计算该应用消耗的资源费用',
                            ],
                            'AppDescription' => [
                                'title' => '应用描述',
                                'description' => '应用描述',
                                'type' => 'string',
                                'example' => '使用Sentieon进行大规模样本的群体变异检测。',
                            ],
                            'Categories' => [
                                'title' => '应用所属分类',
                                'description' => '应用所属分类列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用分类',
                                    'type' => 'string',
                                    'example' => '群体变异',
                                ],
                            ],
                            'Toolkit' => [
                                'title' => '应用所属工具合集',
                                'description' => '应用所属工具合集',
                                'type' => 'string',
                                'example' => 'Sentieon',
                            ],
                            'Contact' => [
                                'title' => '应用联系人信息',
                                'description' => '应用联系人信息',
                                'type' => 'string',
                                'example' => 'support@sentieon.com',
                            ],
                            'Links' => [
                                'title' => '应用主页信息',
                                'description' => '应用的参考页面',
                                'type' => 'array',
                                'items' => [
                                    'description' => '页面链接',
                                    'type' => 'string',
                                    'example' => 'http://www.sentieon.com',
                                ],
                            ],
                            'AppVersions' => [
                                'title' => '应用的所有版本列表',
                                'description' => '应用的版本列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用版本信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'AppVersion' => [
                                            'title' => '应用版本',
                                            'description' => '应用版本',
                                            'type' => 'string',
                                            'example' => '1.0',
                                        ],
                                        'Comment' => [
                                            'title' => '版本描述',
                                            'description' => '版本描述',
                                            'type' => 'string',
                                            'example' => '初始版本',
                                        ],
                                        'LastModified' => [
                                            'title' => '更新时间',
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => 'yyyy/MM/dd HH:mm:ss',
                                        ],
                                    ],
                                ],
                            ],
                            'AppDefaultVersion' => [
                                'title' => '默认版本',
                                'description' => '默认版本',
                                'type' => 'string',
                                'example' => '1.0',
                            ],
                            'AppDescriptorType' => [
                                'title' => '应用描述语言标准',
                                'description' => '应用描述语言标准',
                                'type' => 'string',
                                'example' => 'WDL / CWL',
                            ],
                            'AppDescriptorFiles' => [
                                'title' => '应用的描述文件内容',
                                'description' => '应用文件列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '应用文件信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'FileType' => [
                                            'title' => '应用文件的类型',
                                            'description' => '应用文件的类型',
                                            'type' => 'string',
                                            'example' => 'PRIMARY_DESCRIPTOR（主WDL） SECONDARY_DESCRIPTOR（依赖WDL）  CONFIG（推荐的输入参数）  CONTAINERFILE（镜像制作文件）  DATA（输入参数中引用的参考文件）  OTHER（其他）',
                                        ],
                                        'Path' => [
                                            'title' => '应用文件的路径，除PRIMARY_DESCRIPTOR外，其他均为相对于PRIMARY_DESCRIPTOR的相对路径',
                                            'description' => '应用文件的路径，除PRIMARY_DESCRIPTOR外，其他均为相对于PRIMARY_DESCRIPTOR的相对路径',
                                            'type' => 'string',
                                            'example' => './main.wdl',
                                        ],
                                        'Content' => [
                                            'title' => '应用文件内容',
                                            'description' => '应用文件内容',
                                            'type' => 'string',
                                            'example' => '文件内容',
                                        ],
                                        'Url' => [
                                            'title' => '应用文件链接',
                                            'description' => '应用文件链接',
                                            'type' => 'string',
                                            'example' => '文件URL',
                                        ],
                                        'Checksum' => [
                                            'title' => '应用文件内容的完整性校验码，如MD5值',
                                            'description' => '应用文件内容的完整性校验码，如MD5值',
                                            'type' => 'string',
                                            'example' => '文件MD5',
                                        ],
                                    ],
                                ],
                            ],
                            'Document' => [
                                'title' => '应用的帮助文档',
                                'description' => '应用的帮助文档',
                                'type' => 'string',
                                'example' => '应用的帮助文档',
                            ],
                            'Comment' => [
                                'title' => '应用的备注信息',
                                'description' => '应用的备注信息',
                                'type' => 'string',
                                'example' => '初始版本',
                            ],
                            'DAG' => [
                                'title' => '应用的DAG信息',
                                'description' => '应用的DAG信息',
                                'type' => 'string',
                                'example' => 'DAG',
                            ],
                            'Pinned' => [
                                'title' => '应用收藏置顶标记',
                                'description' => '应用收藏置顶标记',
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
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidApp.Version.NotFound',
                        'errorMessage' => 'The specified app version is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidApp.NotFound',
                        'errorMessage' => 'The specified app is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"HostId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\",\\n  \\"NamespaceName\\": \\"sentieon\\",\\n  \\"AppScope\\": \\"OpenAccess / Protected\\",\\n  \\"AppName\\": \\"joint-calling\\",\\n  \\"Locations\\": [\\n    \\"cn-shenzhen\\"\\n  ],\\n  \\"AppVersion\\": \\"1.2a-3\\",\\n  \\"AppType\\": \\"workflow\\",\\n  \\"AppFee\\": \\"实际使用时，计算该应用消耗的资源费用\\",\\n  \\"AppDescription\\": \\"使用Sentieon进行大规模样本的群体变异检测。\\",\\n  \\"Categories\\": [\\n    \\"群体变异\\"\\n  ],\\n  \\"Toolkit\\": \\"Sentieon\\",\\n  \\"Contact\\": \\"support@sentieon.com\\",\\n  \\"Links\\": [\\n    \\"http://www.sentieon.com\\"\\n  ],\\n  \\"AppVersions\\": [\\n    {\\n      \\"AppVersion\\": \\"1.0\\",\\n      \\"Comment\\": \\"初始版本\\",\\n      \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\"\\n    }\\n  ],\\n  \\"AppDefaultVersion\\": \\"1.0\\",\\n  \\"AppDescriptorType\\": \\"WDL / CWL\\",\\n  \\"AppDescriptorFiles\\": [\\n    {\\n      \\"FileType\\": \\"PRIMARY_DESCRIPTOR（主WDL） SECONDARY_DESCRIPTOR（依赖WDL）  CONFIG（推荐的输入参数）  CONTAINERFILE（镜像制作文件）  DATA（输入参数中引用的参考文件）  OTHER（其他）\\",\\n      \\"Path\\": \\"./main.wdl\\",\\n      \\"Content\\": \\"文件内容\\",\\n      \\"Url\\": \\"文件URL\\",\\n      \\"Checksum\\": \\"文件MD5\\"\\n    }\\n  ],\\n  \\"Document\\": \\"应用的帮助文档\\",\\n  \\"Comment\\": \\"初始版本\\",\\n  \\"DAG\\": \\"DAG\\",\\n  \\"Pinned\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetGlobalAppResponse>\\n    <RequestId>easygene.cn-beijing.aliyuncs.com</RequestId>\\n    <HostId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</HostId>\\n    <LastModified>yyyy/MM/dd HH:mm:ss</LastModified>\\n    <NamespaceName>sentieon</NamespaceName>\\n    <AppScope>OpenAccess / Protected</AppScope>\\n    <AppName>joint-calling</AppName>\\n    <RegionIds>cn-shenzhen</RegionIds>\\n    <AppVersion>1.2a-3</AppVersion>\\n    <AppType>workflow</AppType>\\n    <AppFee>实际使用时，计算该应用消耗的资源费用</AppFee>\\n    <AppDescription>使用Sentieon进行大规模样本的群体变异检测。</AppDescription>\\n    <Categories>群体变异</Categories>\\n    <Toolkit>Sentieon</Toolkit>\\n    <Contact>support@sentieon.com</Contact>\\n    <Links>http://www.sentieon.com</Links>\\n    <AppVersions>\\n        <AppVersion>1.0</AppVersion>\\n        <Comment>初始版本</Comment>\\n        <LastModified>yyyy/MM/dd HH:mm:ss</LastModified>\\n    </AppVersions>\\n    <AppDefaultVersion>1.0</AppDefaultVersion>\\n    <AppDescriptorType>WDL / CWL</AppDescriptorType>\\n    <AppDescriptorFiles>\\n        <FileType>PRIMARY_DESCRIPTOR（主WDL） SECONDARY_DESCRIPTOR（依赖WDL）  CONFIG（推荐的输入参数）  CONTAINERFILE（镜像制作文件）  DATA（输入参数中引用的参考文件）  OTHER（其他）</FileType>\\n        <Path>./main.wdl</Path>\\n        <Content>文件内容</Content>\\n        <Url>文件URL</Url>\\n        <Checksum>文件MD5</Checksum>\\n    </AppDescriptorFiles>\\n    <Document>应用的帮助文档</Document>\\n    <Comment>初始版本</Comment>\\n    <DAG>DAG</DAG>\\n    <Pinned>true</Pinned>\\n</GetGlobalAppResponse>","errorExample":""}]',
            'title' => '查询公共应用详情',
        ],
        'ListContainerImages' => [
            'summary' => '获取平台公共工具镜像列表。',
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
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'ContainerImages' => [
                                'title' => '容器镜像',
                                'description' => '容器镜像列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '容器镜像',
                                    'type' => 'object',
                                    'properties' => [
                                        'ContainerImageNamespace' => [
                                            'title' => '容器镜像名称空间名称',
                                            'description' => '容器镜像命名空间名称',
                                            'type' => 'string',
                                            'example' => 'samtools',
                                        ],
                                        'ContainerImageName' => [
                                            'title' => '容器镜像名称',
                                            'description' => '容器镜像名称',
                                            'type' => 'string',
                                            'example' => 'samtools',
                                        ],
                                        'ContainerImageDescription' => [
                                            'title' => '容器镜像描述',
                                            'description' => '容器镜像描述',
                                            'type' => 'string',
                                            'example' => 'a suite of programs for interacting with high-throughput sequencing data.',
                                        ],
                                        'ContainerImageVersions' => [
                                            'title' => '容器镜像版本',
                                            'description' => '容器镜像版本',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '镜像',
                                                'type' => 'string',
                                                'example' => '1.12--h9aed4be_1',
                                            ],
                                        ],
                                        'Location' => [
                                            'title' => '容器镜像所在区域',
                                            'description' => '容器镜像所在区域',
                                            'type' => 'string',
                                            'example' => 'cn-shenzhen',
                                        ],
                                        'ContainerRegistry' => [
                                            'title' => '容器镜像仓库名称',
                                            'description' => '容器镜像仓库名称',
                                            'type' => 'string',
                                            'example' => 'registry-vpc.cn-shenzhen.aliyuncs.com',
                                        ],
                                        'LastModified' => [
                                            'title' => '最后更新时间',
                                            'description' => '最后更新时间',
                                            'type' => 'string',
                                            'example' => 'yyyy/MM/dd HH:mm:ss',
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
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"ContainerImages\\": [\\n    {\\n      \\"ContainerImageNamespace\\": \\"samtools\\",\\n      \\"ContainerImageName\\": \\"samtools\\",\\n      \\"ContainerImageDescription\\": \\"a suite of programs for interacting with high-throughput sequencing data.\\",\\n      \\"ContainerImageVersions\\": [\\n        \\"1.12--h9aed4be_1\\"\\n      ],\\n      \\"Location\\": \\"cn-shenzhen\\",\\n      \\"ContainerRegistry\\": \\"registry-vpc.cn-shenzhen.aliyuncs.com\\",\\n      \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取公共工具镜像列表',
        ],
        'ListAuthorizedSoftware' => [
            'summary' => '获取第三方软件列表信息。',
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
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-shanghai',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '软件名称、软件长名称中搜索的关键字',
                        'description' => '软件名称、软件长名称中搜索的关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Sentieon',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LastModified',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否反转',
                        'description' => '是否反转',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Softwares' => [
                                'title' => '软件信息',
                                'description' => '软件信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '软件信息列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'SoftwareName' => [
                                            'title' => '软件名称',
                                            'description' => '软件名称',
                                            'type' => 'string',
                                            'example' => 'sentieon',
                                        ],
                                        'SoftwareLongName' => [
                                            'title' => '软件长名称',
                                            'description' => '软件长名称',
                                            'type' => 'string',
                                            'example' => 'Sentieon加速软件',
                                        ],
                                        'SoftwareDescription' => [
                                            'title' => '软件描述',
                                            'description' => '软件描述',
                                            'type' => 'string',
                                            'example' => 'NGS数据二级分析软件，提供基于CPU的加速方案，可替代BWA，GATK，HaplotypeCaller，Mutect和Mutect2等分析流程。包括DNASeq，DNAScope，TNScope等工具',
                                        ],
                                        'SoftwareDefaultVersion' => [
                                            'title' => '软件默认版本',
                                            'description' => '软件默认版本',
                                            'type' => 'string',
                                            'example' => '201911',
                                        ],
                                        'SoftwareVersions' => [
                                            'title' => '软件所有版本',
                                            'description' => '软件所有版本',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '版本号',
                                                'type' => 'string',
                                                'example' => '201911',
                                            ],
                                        ],
                                        'SoftwareLicenseFee' => [
                                            'title' => '软件使用费用',
                                            'description' => '软件使用费用',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '0.15',
                                        ],
                                        'Locations' => [
                                            'title' => '软件可用区域',
                                            'description' => '软件可用区域',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '软件可用区域',
                                                'type' => 'string',
                                                'example' => 'cn-shenzhen',
                                            ],
                                        ],
                                        'HelpLink' => [
                                            'title' => '帮助链接',
                                            'description' => '帮助链接',
                                            'type' => 'string',
                                            'example' => 'https://help.aliyun.com/document_detail/257750.html',
                                        ],
                                        'SoftwareIcon' => [
                                            'title' => '软件图标链接',
                                            'description' => '软件图标链接',
                                            'type' => 'string',
                                            'example' => 'https://img.alicdn.com/imgextra/i2/O1CN01mmZovA1UJfeKQAYvF_!!6000000002497-2-tps-256-256.png',
                                        ],
                                        'LastModified' => [
                                            'title' => '最后更新时间',
                                            'description' => '最后更新时间',
                                            'type' => 'string',
                                            'example' => 'yyyy/MM/dd HH:mm:ss',
                                        ],
                                        'Promotion' => [
                                            'title' => '限时免费说明',
                                            'description' => '限时免费说明',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidOrderBy.NotFound',
                        'errorMessage' => 'The specified OrderBy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Softwares\\": [\\n    {\\n      \\"SoftwareName\\": \\"sentieon\\",\\n      \\"SoftwareLongName\\": \\"Sentieon加速软件\\",\\n      \\"SoftwareDescription\\": \\"NGS数据二级分析软件，提供基于CPU的加速方案，可替代BWA，GATK，HaplotypeCaller，Mutect和Mutect2等分析流程。包括DNASeq，DNAScope，TNScope等工具\\",\\n      \\"SoftwareDefaultVersion\\": \\"201911\\",\\n      \\"SoftwareVersions\\": [\\n        \\"201911\\"\\n      ],\\n      \\"SoftwareLicenseFee\\": 0.15,\\n      \\"Locations\\": [\\n        \\"cn-shenzhen\\"\\n      ],\\n      \\"HelpLink\\": \\"https://help.aliyun.com/document_detail/257750.html\\",\\n      \\"SoftwareIcon\\": \\"https://img.alicdn.com/imgextra/i2/O1CN01mmZovA1UJfeKQAYvF_!!6000000002497-2-tps-256-256.png\\",\\n      \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\",\\n      \\"Promotion\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取第三方软件列表',
        ],
        'ListPublicDataset' => [
            'summary' => '获取平台公共数据集列表。',
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
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '名称、描述中搜索的关键字',
                        'description' => '名称、描述中搜索的关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '西蒙斯基因组多样性计划',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'schema' => [
                        'title' => '公共数据集标签名',
                        'description' => '公共数据集标签名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '遗传多样性',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LastModified, DatasetName',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序是否反转',
                        'description' => '是否逆序，默认为逆序排列。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Datasets' => [
                                'title' => '公共数据集信息',
                                'description' => '公共数据集列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '公共数据集',
                                    'type' => 'object',
                                    'properties' => [
                                        'LastModified' => [
                                            'title' => '最后更新时间',
                                            'description' => '最后更新时间',
                                            'type' => 'string',
                                            'example' => 'yyyy/MM/dd HH:mm:ss',
                                        ],
                                        'Copyright' => [
                                            'title' => '公共数据集版权信息',
                                            'description' => '公共数据集版权信息',
                                            'type' => 'string',
                                            'example' => '此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)',
                                        ],
                                        'AccessRequirements' => [
                                            'title' => '公共数据集访问要求',
                                            'description' => '公共数据集访问要求',
                                            'type' => 'string',
                                            'example' => '阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。',
                                        ],
                                        'About' => [
                                            'title' => '关于公共数据集',
                                            'description' => '关于公共数据集',
                                            'type' => 'string',
                                            'example' => '全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。',
                                        ],
                                        'Tags' => [
                                            'title' => '公共数据集标签',
                                            'description' => '公共数据集标签列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '标签',
                                                'type' => 'string',
                                                'example' => '遗传多样性',
                                            ],
                                        ],
                                        'DatasetName' => [
                                            'title' => '公共数据集名称',
                                            'description' => '公共数据集名称',
                                            'type' => 'string',
                                            'example' => '西蒙斯基因组多样性计划',
                                        ],
                                        'DatasetDescription' => [
                                            'title' => '公共数据集描述',
                                            'description' => '西蒙斯基因组多样性计划 (Simons Genome Diversity Project, SGDP) 是目前世界上最大、质量最高的人群多样性基因组数据。',
                                            'type' => 'string',
                                            'example' => 'This are access requirements',
                                        ],
                                        'UpdateFrequency' => [
                                            'title' => '公共数据集更新频率',
                                            'description' => '公共数据集更新频率',
                                            'type' => 'string',
                                            'example' => '源站更新后及时同步',
                                        ],
                                        'Locations' => [
                                            'title' => '公共数据集可用区域',
                                            'description' => '公共数据集可用区域',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                                'example' => 'cn-beijing',
                                            ],
                                        ],
                                        'DatasetId' => [
                                            'title' => '公共数据集UUID',
                                            'description' => '公共数据集UUID',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidOrderBy.NotFound',
                        'errorMessage' => 'The specified OrderBy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Datasets\\": [\\n    {\\n      \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\",\\n      \\"Copyright\\": \\"此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)\\",\\n      \\"AccessRequirements\\": \\"阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。\\",\\n      \\"About\\": \\"全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。\\",\\n      \\"Tags\\": [\\n        \\"遗传多样性\\"\\n      ],\\n      \\"DatasetName\\": \\"西蒙斯基因组多样性计划\\",\\n      \\"DatasetDescription\\": \\"This are access requirements\\",\\n      \\"UpdateFrequency\\": \\"源站更新后及时同步\\",\\n      \\"Locations\\": [\\n        \\"cn-beijing\\"\\n      ],\\n      \\"DatasetId\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPublicDatasetResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <NextToken>ba6d88e2-a6f2-4d2c-a2ae-68b76b078445</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <TotalCount>100</TotalCount>\\n    <Datasets>\\n        <LastModified>yyyy/MM/dd HH:mm:ss</LastModified>\\n        <Copyright>此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)</Copyright>\\n        <AccessRequirements>阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。</AccessRequirements>\\n        <About>全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。</About>\\n        <Tags>遗传多样性</Tags>\\n        <DatasetName>西蒙斯基因组多样性计划</DatasetName>\\n        <DatasetDescription>This are access requirements</DatasetDescription>\\n        <UpdateFrequency>源站更新后及时同步</UpdateFrequency>\\n        <RegionIds>cn-beijing</RegionIds>\\n    </Datasets>\\n</ListPublicDatasetResponse>","errorExample":""}]',
            'title' => '获取公共数据集列表',
        ],
        'GetPublicDataset' => [
            'summary' => '查询平台公共数据集详情。',
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
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '数据集名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '西蒙斯基因组多样性计划',
                    ],
                ],
                [
                    'name' => 'Attributes',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '查询的字段名:DatasetNo, DatasetDescription, About, AccessRequirements, Copyright, Tags, UpdateFrequency, Locations, LastModified, RegionIds',
                        'description' => '指定需要查询的属性列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '查询属性',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'DatasetName, DatasetDescription, About, AccessRequirements, Copyright, Tags, UpdateFrequency, RegionIds, LastModified',
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
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'DatasetDescription' => [
                                'title' => '公共数据集描述',
                                'description' => '公共数据集描述',
                                'type' => 'string',
                                'example' => '西蒙斯基因组多样性计划 (Simons Genome Diversity Project, SGDP) 是目前世界上最大、质量最高的人群多样性基因组数据。',
                            ],
                            'Copyright' => [
                                'title' => '公共数据集版权信息',
                                'description' => '公共数据集版权信息',
                                'type' => 'string',
                                'example' => '此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)',
                            ],
                            'AccessRequirements' => [
                                'title' => '公共数据集访问要求',
                                'description' => '公共数据集访问要求',
                                'type' => 'string',
                                'example' => '阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。',
                            ],
                            'About' => [
                                'title' => '关于公共数据集',
                                'description' => '关于公共数据集',
                                'type' => 'string',
                                'example' => '全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。',
                            ],
                            'Tags' => [
                                'title' => '公共数据集标签',
                                'description' => '公共数据集标签列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签',
                                    'type' => 'string',
                                    'example' => '遗传多样性',
                                ],
                            ],
                            'DatasetName' => [
                                'title' => '公共数据集名称',
                                'description' => '公共数据集名称',
                                'type' => 'string',
                                'example' => '西蒙斯基因组多样性计划',
                            ],
                            'UpdateFrequency' => [
                                'title' => '公共数据集更新频率',
                                'description' => '公共数据集更新频率',
                                'type' => 'string',
                                'example' => '源站更新后及时同步',
                            ],
                            'Locations' => [
                                'title' => '公共数据集可用区域',
                                'description' => '公共数据集可用区域',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'example' => 'cn-beijing',
                                ],
                            ],
                            'LastModified' => [
                                'title' => '最后更新时间',
                                'description' => '最后更新时间',
                                'type' => 'string',
                                'example' => 'yyyy/MM/dd HH:mm:ss',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidAttributes.NotFound',
                        'errorMessage' => 'The specified Attributes are not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"DatasetDescription\\": \\"西蒙斯基因组多样性计划 (Simons Genome Diversity Project, SGDP) 是目前世界上最大、质量最高的人群多样性基因组数据。\\",\\n  \\"Copyright\\": \\"此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)\\",\\n  \\"AccessRequirements\\": \\"阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。\\",\\n  \\"About\\": \\"全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。\\",\\n  \\"Tags\\": [\\n    \\"遗传多样性\\"\\n  ],\\n  \\"DatasetName\\": \\"西蒙斯基因组多样性计划\\",\\n  \\"UpdateFrequency\\": \\"源站更新后及时同步\\",\\n  \\"Locations\\": [\\n    \\"cn-beijing\\"\\n  ],\\n  \\"LastModified\\": \\"yyyy/MM/dd HH:mm:ss\\"\\n}","errorExample":""},{"type":"xml","example":"<GetPublicDatasetResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <DatasetDescription>西蒙斯基因组多样性计划 (Simons Genome Diversity Project, SGDP) 是目前世界上最大、质量最高的人群多样性基因组数据。</DatasetDescription>\\n    <Copyright>此数据集公开提供给所有人使用，但使用者需遵循数据集来源规定的条款 (Fort Lauderdale principles)</Copyright>\\n    <AccessRequirements>阿里云“按原样”提供数据集，对此不作任何明示或暗示的保证。</AccessRequirements>\\n    <About>全部数据集包括279个基因组，可以查看已发表的文章。 阿里云收录了项目说明文档中记录的完全公开的变异结果的VCF文件。</About>\\n    <Tags>遗传多样性</Tags>\\n    <DatasetName>西蒙斯基因组多样性计划</DatasetName>\\n    <UpdateFrequency>源站更新后及时同步</UpdateFrequency>\\n    <RegionIds>cn-beijing</RegionIds>\\n    <LastModified>yyyy/MM/dd HH:mm:ss</LastModified>\\n</GetPublicDatasetResponse>","errorExample":""}]',
            'title' => '查询公共数据集详情',
        ],
        'ListPublicDatasetEntities' => [
            'summary' => '获取平台公共数据集包含的实体类型列表。',
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
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '公共数据集名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '西蒙斯基因组多样性计划',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LastModified',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序是否反转',
                        'description' => '是否逆序，默认逆序排列',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '公共数据集所在区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'DatasetName' => [
                                'title' => '公共数据集名称',
                                'description' => '公共数据集名称',
                                'type' => 'string',
                                'example' => '西蒙斯基因组多样性计划',
                            ],
                            'Entities' => [
                                'title' => '该实体包含的所有类型',
                                'description' => '该实体包含的所有类型',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体类型列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityType' => [
                                            'title' => '实体类型',
                                            'description' => '实体类型',
                                            'type' => 'string',
                                            'example' => 'sample',
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
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidPublicDataset.NotFound',
                        'errorMessage' => 'The specified PublicDatasetName is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidOrderBy.NotFound',
                        'errorMessage' => 'The specified OrderBy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"DatasetName\\": \\"西蒙斯基因组多样性计划\\",\\n  \\"Entities\\": [\\n    {\\n      \\"EntityType\\": \\"sample\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPublicDatasetEntitiesResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <NextToken>ba6d88e2-a6f2-4d2c-a2ae-68b76b078445</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <TotalCount>100</TotalCount>\\n    <DatasetName>西蒙斯基因组多样性计划</DatasetName>\\n    <Entities>\\n        <EntityType>sample</EntityType>\\n    </Entities>\\n</ListPublicDatasetEntitiesResponse>","errorExample":""}]',
            'title' => '获取公共数据集实体类型列表',
        ],
        'GetPublicDatasetEntity' => [
            'summary' => '查询平台公共数据集特定的实体定义。',
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
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '数据集名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '西蒙斯基因组多样性计划',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '公共数据集所在区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'DatasetName' => [
                                'title' => '公共数据集名称',
                                'description' => '公共数据集名称',
                                'type' => 'string',
                                'example' => '西蒙斯基因组多样性计划',
                            ],
                            'EntityType' => [
                                'title' => '实体类型',
                                'description' => '实体类型',
                                'type' => 'string',
                                'example' => 'sample',
                            ],
                            'Attributes' => [
                                'title' => '实体属性名称列表',
                                'description' => '实体属性名称列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体属性',
                                    'type' => 'string',
                                    'example' => 'key',
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '该类型实体总数',
                                'description' => '该类型实体总数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidPublicDataset.NotFound',
                        'errorMessage' => 'The specified PublicDatasetName is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidEntityType.NotFound',
                        'errorMessage' => 'The specified EntityType is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"DatasetName\\": \\"西蒙斯基因组多样性计划\\",\\n  \\"EntityType\\": \\"sample\\",\\n  \\"Attributes\\": [\\n    \\"key\\"\\n  ],\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"<GetPublicDatasetEntityResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <DatasetName>西蒙斯基因组多样性计划</DatasetName>\\n    <EntityType>sample</EntityType>\\n    <Attributes>key</Attributes>\\n    <TotalCount>100</TotalCount>\\n</GetPublicDatasetEntityResponse>","errorExample":""}]',
            'title' => '查询公共数据集实体定义',
        ],
        'ListPublicDatasetEntityItems' => [
            'summary' => '查询平台公共数据集特定的实体数据表格内容。',
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
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '数据集名称',
                        'description' => '数据集名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '西蒙斯基因组多样性计划',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体类型',
                        'description' => '实体类型',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'sample',
                    ],
                ],
                [
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体名中搜索的关键字',
                        'description' => '实体名中搜索的关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => 's1',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '排序字段',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LastModified',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否反转',
                        'description' => '是否逆序，默认逆序排列',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Location',
                    'in' => 'query',
                    'schema' => [
                        'title' => '公共数据集所在区域',
                        'description' => '地域ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-shanghai',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'DatasetName' => [
                                'title' => '公共数据集名称',
                                'description' => '公共数据集名称',
                                'type' => 'string',
                                'example' => '西蒙斯基因组多样性计划',
                            ],
                            'EntityItems' => [
                                'title' => '该实体包含的所有对象',
                                'description' => '该实体包含的所有表格数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '实体对象',
                                    'type' => 'object',
                                    'properties' => [
                                        'EntityName' => [
                                            'title' => '实体名称',
                                            'description' => '实体名称',
                                            'type' => 'string',
                                            'example' => 'sample',
                                        ],
                                        'EntityData' => [
                                            'title' => '实体属性值',
                                            'description' => '实体数据',
                                            'type' => 'object',
                                            'additionalProperties' => [
                                                'type' => 'string',
                                                'example' => '{ "key1": "value1" }',
                                                'description' => '实体属性值',
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
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidPublicDataset.NotFound',
                        'errorMessage' => 'The specified PublicDatasetName is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidOrderBy.NotFound',
                        'errorMessage' => 'The specified OrderBy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"DatasetName\\": \\"西蒙斯基因组多样性计划\\",\\n  \\"EntityItems\\": [\\n    {\\n      \\"EntityName\\": \\"sample\\",\\n      \\"EntityData\\": {\\n        \\"key\\": \\"{ \\\\\\"key1\\\\\\": \\\\\\"value1\\\\\\" }\\"\\n      }\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListPublicDatasetEntityItemsResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <NextToken>ba6d88e2-a6f2-4d2c-a2ae-68b76b078445</NextToken>\\n    <MaxResults>10</MaxResults>\\n    <TotalCount>100</TotalCount>\\n    <DatasetName>西蒙斯基因组多样性计划</DatasetName>\\n    <EntityItems>\\n        <EntityName>sample</EntityName>\\n        <EntityData>\\n            <key>{ \\"key1\\": \\"value1\\" }</key>\\n        </EntityData>\\n    </EntityItems>\\n</ListPublicDatasetEntityItemsResponse>","errorExample":""}]',
            'title' => '查询公共数据集实体数据表格',
        ],
        'ListPublicDatasetTags' => [
            'summary' => '获取公共数据集分类信息。',
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
                    'name' => 'Search',
                    'in' => 'query',
                    'schema' => [
                        'title' => '标签名中搜索的关键字',
                        'description' => '标签名中搜索的关键字',
                        'type' => 'string',
                        'required' => false,
                        'example' => '遗传多样性',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段:TagName,LastModified',
                        'description' => '排序字段:TagName,LastModified',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LastModified',
                    ],
                ],
                [
                    'name' => 'IsReversed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否反转',
                        'description' => '是否反转',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'title' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'description' => '翻页Token用来标记当前开始读取的位置，置空表示从头开始',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '0f2cc944-67db-4fb1-bb10-f136cda74bda',
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数量',
                        'description' => '分页数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'NextToken' => [
                                'title' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'description' => '翻页Token用来表示当前调用返回读取到的位置，空代表数据已经读取完毕',
                                'type' => 'string',
                                'example' => 'ba6d88e2-a6f2-4d2c-a2ae-68b76b078445',
                            ],
                            'MaxResults' => [
                                'title' => '分页数',
                                'description' => '分页数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'title' => '总记录数',
                                'description' => '总记录数',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'Tags' => [
                                'title' => '公共数据集标签',
                                'description' => '公共数据集标签',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签',
                                    'type' => 'string',
                                    'example' => '遗传多样性',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                    [
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                    [
                        'errorCode' => 'InvalidOrderBy.NotFound',
                        'errorMessage' => 'The specified OrderBy is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"NextToken\\": \\"ba6d88e2-a6f2-4d2c-a2ae-68b76b078445\\",\\n  \\"MaxResults\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Tags\\": [\\n    \\"遗传多样性\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取公共数据集分类',
        ],
        'ListRegions' => [
            'summary' => '查询基因分析平台产品支持使用的区域，如华北2-北京。',
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
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机ID',
                                'description' => '主机ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'Regions' => [
                                'title' => '基因分析平台产品可用地域列表。',
                                'description' => '基因云产品上线区域',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'LocalName' => [
                                            'title' => '名称',
                                            'description' => '名称',
                                            'type' => 'string',
                                            'example' => '华北2-北京',
                                        ],
                                        'RegionEndpoint' => [
                                            'title' => '访问Endpoint',
                                            'description' => '访问Endpoint',
                                            'type' => 'string',
                                            'example' => 'easygene.cn-beijing.aliyuncs.com',
                                        ],
                                        'RegionId' => [
                                            'title' => '区域ID',
                                            'description' => '区域ID',
                                            'type' => 'string',
                                            'example' => 'cn-beijing',
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
                        'errorCode' => 'SignatureDoesNotMatch',
                        'errorMessage' => 'The specified signature is invalid.',
                    ],
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"Regions\\": [\\n    {\\n      \\"LocalName\\": \\"华北2-北京\\",\\n      \\"RegionEndpoint\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n      \\"RegionId\\": \\"cn-beijing\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查询产品上线区域',
        ],
        'InstallGlobalApp' => [
            'summary' => '安装平台公共应用到用户工作空间中使用。',
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
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'title' => '来源',
                        'description' => '来源',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'EasyGene',
                    ],
                ],
                [
                    'name' => 'NamespaceName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '命名空间名称',
                        'description' => '命名空间名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'sentieon',
                    ],
                ],
                [
                    'name' => 'AppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '应用名称',
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'joint-calling',
                    ],
                ],
                [
                    'name' => 'Workspace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-workspace',
                    ],
                ],
                [
                    'name' => 'InstalledAppName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '安装后应用名',
                        'description' => '安装后应用名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'joint-calling',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '创建应用返回结果',
                        'description' => '创建应用返回结果',
                        'type' => 'object',
                        'properties' => [
                            'HostId' => [
                                'title' => '主机 ID',
                                'description' => '主机 ID',
                                'type' => 'string',
                                'example' => 'easygene.cn-beijing.aliyuncs.com',
                            ],
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'DA980AD0-158F-44F3-847D-5EAB96C0EB6B',
                            ],
                            'InstalledAppName' => [
                                'title' => '安装后应用名',
                                'description' => '安装后应用名',
                                'type' => 'string',
                                'example' => 'InstalledApp',
                            ],
                            'Workspace' => [
                                'title' => '工作空间',
                                'description' => '工作空间',
                                'type' => 'string',
                                'example' => 'TestWorkspace',
                            ],
                            'RegionId' => [
                                'title' => '区域名',
                                'description' => '区域名',
                                'type' => 'string',
                                'example' => 'cn-beijing',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The specified parameter %s is invalid.',
                    ],
                    [
                        'errorCode' => 'MissingParameter',
                        'errorMessage' => 'The input parameter %s that is mandatory for processing this request is not supplied.',
                    ],
                ],
                404 => [
                    [
                        'errorCode' => 'InvalidUser.NotFound',
                        'errorMessage' => 'The specified user is not found.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"HostId\\": \\"easygene.cn-beijing.aliyuncs.com\\",\\n  \\"RequestId\\": \\"DA980AD0-158F-44F3-847D-5EAB96C0EB6B\\",\\n  \\"InstalledAppName\\": \\"InstalledApp\\",\\n  \\"Workspace\\": \\"TestWorkspace\\",\\n  \\"RegionId\\": \\"cn-beijing\\"\\n}","errorExample":""},{"type":"xml","example":"<InstallGlobalAppResponse>\\n    <HostId>easygene.cn-beijing.aliyuncs.com</HostId>\\n    <RequestId>DA980AD0-158F-44F3-847D-5EAB96C0EB6B</RequestId>\\n    <InstalledAppName>InstalledApp</InstalledAppName>\\n    <Workspace>TestWorkspace</Workspace>\\n    <RegionId>cn-beijing</RegionId>\\n</InstallGlobalAppResponse>","errorExample":""}]',
            'title' => '安装公共应用',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'easygene.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'easygene.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'easygene.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'easygene.cn-hangzhou.aliyuncs.com',
        ],
    ],
];